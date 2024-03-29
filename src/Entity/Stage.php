<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity(repositoryClass="App\Repository\StageRepository")
 */
class Stage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="date")
     */
    private $dateStage;

    /**
     * @return mixed
     */
    public function getDateStage()
    {
        return $this->dateStage;
    }

    /**
     * @param mixed $dateStage
     */
    public function setDateStage($dateStage): void
    {
        $this->dateStage = $dateStage;
    }


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tuteur", inversedBy="stages")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $tuteur;

    public function getTuteur(): Tuteur
    {
        return $this->tuteur;
    }

    public function setTuteur(Tuteur $tuteur)
    {
        $this->tuteur = $tuteur;
    }




    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="stages")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $user;

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }
}
