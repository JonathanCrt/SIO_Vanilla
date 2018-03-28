<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $idStage;

    public function getId()
    {
        return $this->idStage;
    }

    /**
     * @ORM\Column(type="date")
     */
    private $dateStage;

    /**
     * @return mixed
     */
    public function getIdStage()
    {
        return $this->idStage;
    }

    /**
     * @param mixed $idStage
     */
    public function setIdStage($idStage): void
    {
        $this->idStage = $idStage;
    }

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


}
