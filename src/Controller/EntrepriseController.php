<?php

namespace App\Controller;

use App\Entity\Entreprise;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class EntrepriseController extends Controller
{


    /**
     * @Route("/listeEntrepriseEleve", name="listeEntrepriseEleve")
     */
    public function listeEntrepriseEleve()
    {
        $listeEntreprise = $this->getDoctrine()
            ->getRepository(Entreprise::class)
            ->findAll();
        return $this->render('eleve/listeEntreprise.html.twig', compact('listeEntreprise'));


    }


    /**
     * @Route("/updateEntreprise/{id}", name="updateEntreprise")
     */
    public function updateEntreprise(Request $request, $id)
    {
        $item = $this->getDoctrine()
            ->getRepository(Entreprise::class)
            ->find($id);
        if (!$item) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        } else {
            $form = $this->createFormBuilder($item)
                ->add('NomEntreprise', TextType::class)
                ->add('VilleEntreprise', TextType::class)
                ->add('CpEntreprise', TextType::class)
                ->add('AdressseEntreprise', TextType::class)
                ->add('MailEntreprise', TextType::class)
                ->add('TelEntreprise', TextType::class)
                ->add('ActiviteEntreprise', TextType::class)
                ->getForm();
        }
        // Par défaut, demande POST au même contrôleur qui la restitue.
        if ($request->isMethod('POST')) {
            $form->submit($request->request->get($form->getName()));
            if ($form->isSubmitted() && $form->isValid()) {
                $item = $form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($item);
                $em->flush();
                return $this->redirectToRoute('listeEntrepriseProfesseur');
            }
        }
        return $this->render('professeur/updateEntreprise.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ajoutEntreprise", name="ajoutEntreprise")
     */
    public function ajoutEntreprise(Request $request)
    {
        $item = new Entreprise();
        $item->setNomEntreprise('');
        $item->setVilleEntreprise('');
        $item->setCpEntreprise(null);
        $item->setAdressseEntreprise('');
        $item->setMailEntreprise('');
        $item->setTelEntreprise(null);
        $item->setActiviteEntreprise('');
        $form = $this->createFormBuilder($item)
            ->add('nomEntreprise', TextType::class,array(
                'label'  => 'nom Entreprise',
            ))
            ->add('VilleEntreprise', TextType::class)
            ->add('CpEntreprise', IntegerType::class)
            ->add('AdressseEntreprise', TextType::class)
            ->add('MailEntreprise', TextType::class)
            ->add('TelEntreprise', IntegerType::class)
            ->add('ActiviteEntreprise', TextType::class)
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
                    return $this->redirectToRoute('ajoutTuteur');
                }
                return $this->redirectToRoute('ajoutTuteur');
            }
        }
        return $this->render('eleve/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }



    /**
     * @Route("/listeEntrepriseProfesseur", name="listeEntrepriseProfesseur")
     */
    public function listeEntrepriseProf()
    {
        $listeEntreprise = $this->getDoctrine()
            ->getRepository(Entreprise::class)
            ->findAll();
        return $this->render('professeur/listeEntreprise.html.twig', compact('listeEntreprise'));


    }

}