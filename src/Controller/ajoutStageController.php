<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\Stage;
use App\Repository\StageRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ajoutStageController extends Controller
{
    /**
     * @Route("/ajoutEntreprise", name="AjoutEntreprise")
     */
    public function index(Request $request)
    {
        $item = new Entreprise();
        $item->setNomEntreprise('');
        $item->setVilleEntreprise('');
        $item->setCpEntreprise('');
        $item->setAdressseEntreprise('');
        $item->setMailEntreprise('');
        $item->setTelEntreprise('');
        $item->setActiviteEntreprise('');
        $item->setActive('');
        $form = $this->createFormBuilder($item)
            ->add('NomEntreprise', TextType::class)
            ->add('VilleEntreprise', TextType::class)
            ->add('CpEntreprise', TextType::class)
            ->add('AdressseEntreprise', TextType::class)
            ->add('MailEntreprise', TextType::class)
            ->add('TelEntreprise', TextType::class)
            ->add('ActiviteEntreprise', TextType::class)
            ->add('Active', TextType::class)
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
                    return $this->redirectToRoute('AjoutStage');
                }
                return $this->redirectToRoute('AjoutStage');
            }
        }
        return $this->render('index/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/ajoutStage/", name="AjoutStage")
     */
    public function AjoutStage2(Request $request)
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
