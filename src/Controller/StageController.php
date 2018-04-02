<?php

namespace App\Controller;


use App\Entity\Stage;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StageController extends Controller
{


    /**
     * @Route("/listeStagiaireByTuteur/{id}", name="listeStagiaireByTuteur")
     */
    public function listeStagiaireByEntreprise($id)
    {
        $listeStagiaireByTuteur = $this->getDoctrine()
            ->getRepository(Stage::class)
            ->findBy(array('tuteur' => $id));
        return $this->render('professeur/listeStagiaireByTuteur.html.twig', compact('listeStagiaireByTuteur'));

    }


    /**
     * @Route("/ajoutStage/", name="ajoutStage")
     */
    public function AjoutStage(Request $request)
    {
        $item = new Stage();
        $item->setDateStage(new \DateTime('tomorrow'));
        $form = $this->createFormBuilder($item)
            ->add('DateStage', DateType::class)
            ->add('Enregistrer', SubmitType::class)
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
                    return $this->redirectToRoute('listeEntrepriseEleve');
                }
                return $this->redirectToRoute('listeEntrepriseEleve');
            }
        }
        return $this->render('eleve/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }



}