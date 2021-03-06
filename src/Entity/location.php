<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\locationRepository")
 */
class location
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datedebut;
    /**
     * @ORM\Column(type="date")
     */
    private $datefin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="locations")
     */
    private $User;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\location", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Car;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\location", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Etatdl;
    public function getdatedebut(): ?date
    {
        return $this->datedebut;
    }

    public function setdatedebut(int $datedebut): self
    {
        $this->datedebut = $datedebut;

        return $this;
    }
    public function getdatefin(): ?date
    {
        return $this->datefin;
    }

    public function setdatefin(int $datefin): self
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getCar(): ?self
    {
        return $this->Car;
    }

    public function setCar(self $Car): self
    {
        $this->Car = $Car;

        return $this;
    }

    public function getEtatdl(): ?self
    {
        return $this->Etatdl;
    }

    public function setEtatdl(self $Etatdl): self
    {
        $this->Etatdl = $Etatdl;

        return $this;
    }

}
