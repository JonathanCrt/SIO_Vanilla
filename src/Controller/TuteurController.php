<?php

namespace App\Controller;

use App\Entity\Tuteur;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class TuteurController extends Controller
{

    /**
     * @Route("/ajoutTuteur/", name="ajoutTuteur")
     */
    public function ajoutTuteur(Request $request)
    {
        $item = new Tuteur();

        $item->setNomTuteur('');
        $item->setPrenomTuteur('');
        $item->setMailTuteur('');
        $item->setTelTuteur('');
        $form = $this->createFormBuilder($item)
            ->add('NomTuteur', TextType::class)
            ->add('PrenomTuteur', TextType::class)
            ->add('MailTuteur', TextType::class)
            ->add('TelTuteur', TextType::class)
            ->getForm();

        // Par défaut, le formulaire renvoie une demande POST au même contrôleur qui la restitue.
        if ($request->isMethod('POST')) {

            $form->submit($request->request->get($form->getName()));
            if ($form->isSubmitted() && $form->isValid()) {
                if ($form->isSubmitted() && $form->isValid()) {
                    $item = $form->getData();
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($item);
                    $em->flush();
                    return $this->redirectToRoute('ajoutStage');
                }
                return $this->redirectToRoute('AjoutStage');
            }
        }
        return $this->render('index/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}