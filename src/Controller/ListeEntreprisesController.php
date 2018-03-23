<?php

namespace App\Controller;

use App\Entity\Entreprise;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListeEntreprisesController extends Controller
{
    /**
     * @Route("/listeEntreprises", name="listeEntreprises")
     */
    public function index()
    {
        $listeEntreprises = $this->getDoctrine()
            ->getRepository(Entreprise::class)
            ->findAll();
        return $this->render('index/listeEntreprises.html.twig', compact('listeEntreprises'));


    }

}
