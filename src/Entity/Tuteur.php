<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $idTuteur;

    public function getId()
    {
        return $this->idTuteur;
    }

    /**
     * @return mixed
     */
    public function getIdTuteur()
    {
        return $this->idTuteur;
    }

    /**
     * @param mixed $idTuteur
     */
    public function setIdTuteur($idTuteur): void
    {
        $this->idTuteur = $idTuteur;
    }

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





}
