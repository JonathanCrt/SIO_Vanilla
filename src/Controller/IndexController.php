<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class IndexController extends Controller
{
    /**
     * @Route("/", name="authentification")
     */
    public function index()
    {
        return $this->render('index/authentification.html.twig', [
            'controller_name' => 'AUTHENTIFICATION',
        ]);
    }


    /**
     * @Route("/indexEleve", name="indexEleve")
     */
    public function indexEleve()
    {
        return $this->render('eleve/index.html.twig', [
            'controller_name' => 'Liste Entreprise',
        ]);
    }



    /**
     * @Route("/indexProfesseur", name="indexProfesseur")
     */
    public function indexProfesseur()
    {
        return $this->render('professeur/index.html.twig', [
            'controller_name' => 'Liste Entreprise',
        ]);
    }


}

