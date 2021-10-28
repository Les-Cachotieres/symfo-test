<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SingInController extends AbstractController
{
    /**
     * @Route("/sing-in", name="sing-in")
     */
    public function singIn(AuthenticationUtils $authenticationUtils): Response
    {       
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('SingIn.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            ]
        );
    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}