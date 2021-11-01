<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\PlaceType;
use App\Entity\Place;
use App\Repository\ProductRepository;


class PlaceController extends AbstractController
{
    /**
     * @Route("/place")
     */
    public function singUp(Request $request): Response
    {   
        $PlaceData = $this->getDoctrine()
            ->getRepository(Place::class)
            ->findAll();
        dump($PlaceData);
        $Place = new Place();
        
        $placeform = $this->createform(PlaceType::class, $Place);
        $placeform->handleRequest($request);
       
        if ($placeform->isSubmitted() && $placeform->isValid()) {
            $file = $placeform->get('File')->getData();
            $fileString = file_get_contents($file);          
            $arrayfile = str_getcsv($fileString, "\n");
            dump($arrayfile);
           
            foreach ($arrayfile as $key => $value) {
                $dataPlace = new Place();
                $linefile = str_getcsv($value, ";");
                $dataPlace->setName($linefile[0]);
                $dataPlace->setAddress($linefile[1]);
                $dataPlace->setCity($linefile[2]);
                $dataPlace->setZipCode($linefile[3]);
            
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($dataPlace);
                $em->flush();
            }
            
            dump($Place);
            
            

        }   
        return $this->render('Place.html.twig',['PlaceForm'=>$placeform->createView(), 'Place'=>$PlaceData]);
    }
}