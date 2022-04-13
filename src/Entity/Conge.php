<?php

namespace App\Entity;

use App\Repository\CongeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CongeRepository::class)
 */
class Conge
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_conge;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $demande;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     */
    private $emplye_code;

    /**
     * @ORM\ManyToMany(targetEntity=Employer::class, mappedBy="emplye_code")
     */
    private $employers;

    public function __construct()
    {
        $this->employers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeConge(): ?string
    {
        return $this->type_conge;
    }

    public function setTypeConge(?string $type_conge): self
    {
        $this->type_conge = $type_conge;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getDemande(): ?string
    {
        return $this->demande;
    }

    public function setDemande(string $demande): self
    {
        $this->demande = $demande;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

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

    /**
     * @return Collection<int, Employer>
     */
    public function getEmployers(): Collection
    {
        return $this->employers;
    }

    public function addEmployer(Employer $employer): self
    {
        if (!$this->employers->contains($employer)) {
            $this->employers[] = $employer;
            $employer->addEmplyeCode($this);
        }

        return $this;
    }

    public function removeEmployer(Employer $employer): self
    {
        if ($this->employers->removeElement($employer)) {
            $employer->removeEmplyeCode($this);
        }

        return $this;
    }
}
