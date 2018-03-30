<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TuteurRepository")
 */
class Tuteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->idTuteur;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $nomTuteur;
    /**
     * @ORM\Column(type="string")
     */
    private $prenomTuteur;
    /**
     * @ORM\Column(type="string")
     */
    private $mailTuteur;
    /**
     * @ORM\Column(type="string")
     */
    private $telTuteur;

    /**
     * @return mixed
     */
    public function getNomTuteur()
    {
        return $this->nomTuteur;
    }

    /**
     * @param mixed $nomTuteur
     */
    public function setNomTuteur($nomTuteur): void
    {
        $this->nomTuteur = $nomTuteur;
    }

    /**
     * @return mixed
     */
    public function getPrenomTuteur()
    {
        return $this->prenomTuteur;
    }

    /**
     * @param mixed $prenomTuteur
     */
    public function setPrenomTuteur($prenomTuteur): void
    {
        $this->prenomTuteur = $prenomTuteur;
    }

    /**
     * @return mixed
     */
    public function getMailTuteur()
    {
        return $this->mailTuteur;
    }

    /**
     * @param mixed $mailTuteur
     */
    public function setMailTuteur($mailTuteur): void
    {
        $this->mailTuteur = $mailTuteur;
    }

    /**
     * @return mixed
     */
    public function getTelTuteur()
    {
        return $this->telTuteur;
    }

    /**
     * @param mixed $telTuteur
     */
    public function setTelTuteur($telTuteur): void
    {
        $this->telTuteur = $telTuteur;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Stage", mappedBy="tuteur")
     */
    private $stages;

    public function __construct()
    {
        $this->stages = new ArrayCollection();
    }
    /**
     * @return Collection|Stage[]
     */
    public function getStages()
    {
        return $this->stages;
    }


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Entreprise", inversedBy="tuteurs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $entreprises;

    public function getEntreprises(): Entreprise
    {
        return $this->entreprises;
    }

    public function setEntreprise(Entreprise $entreprises)
    {
        $this->entreprises = $entreprises;
    }
}
