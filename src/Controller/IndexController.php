<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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

}
