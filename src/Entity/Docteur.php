<?php

namespace App\Entity;

use App\Repository\DocteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocteurRepository::class)]
class Docteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $nomDocteur = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $prenomDocteur = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $adresseDocteur = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $telephoneDocteur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $emailDocteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDocteur(): ?string
    {
        return $this->nomDocteur;
    }

    public function setNomDocteur(?string $nomDocteur): self
    {
        $this->nomDocteur = $nomDocteur;

        return $this;
    }

    public function getPrenomDocteur(): ?string
    {
        return $this->prenomDocteur;
    }

    public function setPrenomDocteur(?string $prenomDocteur): self
    {
        $this->prenomDocteur = $prenomDocteur;

        return $this;
    }

    public function getAdresseDocteur(): ?string
    {
        return $this->adresseDocteur;
    }

    public function setAdresseDocteur(?string $adresseDocteur): self
    {
        $this->adresseDocteur = $adresseDocteur;

        return $this;
    }

    public function getTelephoneDocteur(): ?string
    {
        return $this->telephoneDocteur;
    }

    public function setTelephoneDocteur(?string $telephoneDocteur): self
    {
        $this->telephoneDocteur = $telephoneDocteur;

        return $this;
    }

    public function getEmailDocteur(): ?string
    {
        return $this->emailDocteur;
    }

    public function setEmailDocteur(?string $emailDocteur): self
    {
        $this->emailDocteur = $emailDocteur;

        return $this;
    }
}
