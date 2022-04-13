<?php

namespace App\Entity;

use App\Repository\DepenseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepenseRepository::class)
 */
class Depense
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_depense;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $employe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paye_par;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $societe;

    /**
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="integer")
     */
    private $emplye_code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDepense(): ?\DateTimeInterface
    {
        return $this->date_depense;
    }

    public function setDateDepense(\DateTimeInterface $date_depense): self
    {
        $this->date_depense = $date_depense;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEmploye(): ?string
    {
        return $this->employe;
    }

    public function setEmploye(string $employe): self
    {
        $this->employe = $employe;

        return $this;
    }

    public function getPayePar(): ?string
    {
        return $this->paye_par;
    }

    public function setPayePar(string $paye_par): self
    {
        $this->paye_par = $paye_par;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getEmplyeCode(): ?int
    {
        return $this->emplye_code;
    }

    public function setEmplyeCode(int $emplye_code): self
    {
        $this->emplye_code = $emplye_code;

        return $this;
    }
}
