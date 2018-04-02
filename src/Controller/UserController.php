<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/listeUser", name="listeUser")
     */
    public function listeUser()
    {
        $listeUser = $this->getDoctrine()
            ->getRepository(User::class)
            ->findBy(['role' => 'eleve']);
        return $this->render('professeur/listeEleve.html.twig', compact('listeUser'));
    }
}