<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntrepriseRepository")
 */
class Entreprise
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $idEntreprise;

    public function getId()
    {
        return $this->idEntreprise;
    }

    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * @param mixed $idEntreprise
     */
    public function setIdEntreprise($idEntreprise): void
    {
        $this->idEntreprise = $idEntreprise;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nomEntreprise;
    }

    /**
     * @param mixed $nomEntreprise
     */
    public function setNomEntreprise($nomEntreprise): void
    {
        $this->nomEntreprise = $nomEntreprise;
    }

    /**
     * @return mixed
     */
    public function getVilleEntreprise()
    {
        return $this->villeEntreprise;
    }

    /**
     * @param mixed $villeEntreprise
     */
    public function setVilleEntreprise($villeEntreprise): void
    {
        $this->villeEntreprise = $villeEntreprise;
    }

    /**
     * @return mixed
     */
    public function getCpEntreprise()
    {
        return $this->cpEntreprise;
    }

    /**
     * @param mixed $cpEntreprise
     */
    public function setCpEntreprise($cpEntreprise): void
    {
        $this->cpEntreprise = $cpEntreprise;
    }

    /**
     * @return mixed
     */
    public function getAdressseEntreprise()
    {
        return $this->adressseEntreprise;
    }

    /**
     * @param mixed $adressseEntreprise
     */
    public function setAdressseEntreprise($adressseEntreprise): void
    {
        $this->adressseEntreprise = $adressseEntreprise;
    }

    /**
     * @return mixed
     */
    public function getMailEntreprise()
    {
        return $this->mailEntreprise;
    }

    /**
     * @param mixed $mailEntreprise
     */
    public function setMailEntreprise($mailEntreprise): void
    {
        $this->mailEntreprise = $mailEntreprise;
    }

    /**
     * @return mixed
     */
    public function getTelEntreprise()
    {
        return $this->telEntreprise;
    }

    /**
     * @param mixed $telEntreprise
     */
    public function setTelEntreprise($telEntreprise): void
    {
        $this->telEntreprise = $telEntreprise;
    }

    /**
     * @return mixed
     */
    public function getActiviteEntreprise()
    {
        return $this->activiteEntreprise;
    }

    /**
     * @param mixed $activiteEntreprise
     */
    public function setActiviteEntreprise($activiteEntreprise): void
    {
        $this->activiteEntreprise = $activiteEntreprise;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active): void
    {
        $this->active = $active;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $nomEntreprise;
    /**
     * @ORM\Column(type="string")
     */
    private $villeEntreprise;
    /**
     * @ORM\Column(type="string")
     */
    private $cpEntreprise;
    /**
     * @ORM\Column(type="string")
     */
    private $adressseEntreprise;

    /**
     * @ORM\Column(type="string")
     */
    private $mailEntreprise;

    /**
     * @ORM\Column(type="string")
     */
    private $telEntreprise;

    /**
     * @ORM\Column(type="string")
     */
    private $activiteEntreprise;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Tuteur", inversedBy="entreprise")
     */
    private $entreprise;

}