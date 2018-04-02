<?php

namespace App\Controller;



use App\Entity\Tuteur;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;





class TuteurController extends Controller
{


    /**
     * @Route("/listeTuteur/{id}", name="listeTuteur")
     */
    public function listeTuteur($id)
    {
        $listeTuteurByEntreprise = $this->getDoctrine()
            ->getRepository(Tuteur::class)
            ->findBy(array('entreprise' => $id));
        return $this->render('professeur/listeTuteur.html.twig', compact('listeTuteurByEntreprise'));


    }



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
            ->add('TelTuteur', TextType::class)
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
                    return $this->redirectToRoute('ajoutStage');
                }
                return $this->redirectToRoute('AjoutStage');
            }
        }
        return $this->render('eleve/ajoutStage.html.twig', array(
            'form' => $form->createView(),
        ));
    }



}