<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\SingUpType;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SingUpController extends AbstractController
{
    /**
     * @Route("/sing-up")
     */
    public function singUp(Request $request,UserPasswordHasherInterface $passwordHasher): Response
    {   
        $user = new User();
        $user->setRoles($user->getRoles());
        $singupform = $this->createform(SingUpType::class, $user);


       

        $singupform->handleRequest($request);

        if ($singupform->isSubmitted() && $singupform->isValid()) {

            $plaintextPassword = $user->getPassword();
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $plaintextPassword
            );
            $user->setPassword($hashedPassword); 
            $em = $this->getDoctrine()->getManager();
            
            $em->persist($user);
            $em->flush();
        }   
        return $this->render('SingUp.html.twig',['SingUpForm'=>$singupform->createView()]);
    }
}