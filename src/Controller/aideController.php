<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aideController extends Controller
{
    /**
     * @Route("/aide", name="aide")
     */
    public function index()
    {
        return $this->render('index/aide.html.twig', [
            'controller_name' => 'Vanilla',
        ]);
    }

}
