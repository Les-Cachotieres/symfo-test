<?php

namespace App\Controller;

use App\Entity\Place;
use App\Form\PlaceType;
use App\Repository\PlaceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/place")
 */
class PlaceController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="place_index", methods={"POST", "GET"})
     * @param SerializerInterface $serializer
     */
    public function index(PlaceRepository $placeRepository, Request $request)
    {

        $form = $this->createForm(PlaceType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('upload_file')->getData();

            if ($file) {
                $serializer = new Serializer([new ObjectNormalizer()], [new CsvEncoder()]);
                $data = $serializer->decode(file_get_contents($file), 'csv', [CsvEncoder::DELIMITER_KEY => ',']);

                foreach ($data as $line) {
                    // extract data using $line

                    $place = new Place();
                    $place->setName($line['name'])
                        ->setAddress($line['address'])
                        ->setZipcode($line['zipCode'])
                        ->setCity($line['city']);

                    $this->entityManager->persist($place);
                }
                $this->entityManager->flush();
            }

        }


        return $this->render('place/index.html.twig', [
            'form' => $form->createView(),
            'places' => $placeRepository->findAll(),
        ]);

    }
}