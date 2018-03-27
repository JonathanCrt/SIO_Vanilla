<?php

namespace App\Controller;

use App\Entity\Stage;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StageController extends Controller
{


    /**
     * @Route("/ajoutStage/", name="ajoutStage")
     */
    public function AjoutStage(Request $request)
    {
        $item = new Stage();
        $item->setDateStage(new \DateTime('tomorrow'));
        $form = $this->createFormBuilder($item)
            ->add('DateStage', DateType::class)
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
                    return $this->redirectToRoute('index');
                }
                return $this->redirectToRoute('index');
            }
        }
        return $this->render('index/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}