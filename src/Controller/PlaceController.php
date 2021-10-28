<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\PlaceType;
use App\Entity\Place;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

class PlaceController extends AbstractController
{
    /**
     * @Route("/place")
     */
    public function singUp(Request $request): Response
    {   
        $Place = new Place();
        
        $placeform = $this->createform(PlaceType::class);
        $placeform->handleRequest($request);

        if ($placeform->isSubmitted() && $placeform->isValid()) {
            $encoders = [new csvEncoder()];
            $normalizers = [new ObjectNormalizer()];
            $serializer = new Serializer($normalizers, $encoders);
            
            $fileString = file_get_contents($request);
            $serializer->deserialize($fileString, Place::class, 'csv', [AbstractNormalizer::OBJECT_TO_POPULATE => $Place]);
          
            $em = $this->getDoctrine()->getManager();
            $em->persist($Place);
            $em->flush();
        }   
        return $this->render('Place.html.twig',['PlaceForm'=>$placeform->createView()]);
    }
}