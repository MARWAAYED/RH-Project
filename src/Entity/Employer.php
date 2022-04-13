<?php

namespace App\Entity;

use App\Repository\EmployerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployerRepository::class)
 */
class Employer
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $work_mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $work_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $societe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $respensable;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $leave_manager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resource_calender;

    /**
     * @ORM\Column(type="date")
     */
    private $contract_date_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $contract_date_fin;

    /**
     * @ORM\ManyToMany(targetEntity=Conge::class, inversedBy="employers")
     */
    private $emplye_code;

    public function __construct()
    {
        $this->emplye_code = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getWorkMobile(): ?string
    {
        return $this->work_mobile;
    }

    public function setWorkMobile(string $work_mobile): self
    {
        $this->work_mobile = $work_mobile;

        return $this;
    }

    public function getWorkEmail(): ?string
    {
        return $this->work_email;
    }

    public function setWorkEmail(string $work_email): self
    {
        $this->work_email = $work_email;

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

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getRespensable(): ?string
    {
        return $this->respensable;
    }

    public function setRespensable(string $respensable): self
    {
        $this->respensable = $respensable;

        return $this;
    }

    public function getLeaveManager(): ?string
    {
        return $this->leave_manager;
    }

    public function setLeaveManager(string $leave_manager): self
    {
        $this->leave_manager = $leave_manager;

        return $this;
    }

    public function getResourceCalender(): ?string
    {
        return $this->resource_calender;
    }

    public function setResourceCalender(string $resource_calender): self
    {
        $this->resource_calender = $resource_calender;

        return $this;
    }

    public function getContractDateDebut(): ?\DateTimeInterface
    {
        return $this->contract_date_debut;
    }

    public function setContractDateDebut(\DateTimeInterface $contract_date_debut): self
    {
        $this->contract_date_debut = $contract_date_debut;

        return $this;
    }

    public function getContractDateFin(): ?\DateTimeInterface
    {
        return $this->contract_date_fin;
    }

    public function setContractDateFin(\DateTimeInterface $contract_date_fin): self
    {
        $this->contract_date_fin = $contract_date_fin;

        return $this;
    }

    /**
     * @return Collection<int, Conge>
     */
    public function getEmplyeCode(): Collection
    {
        return $this->emplye_code;
    }

    public function addEmplyeCode(Conge $emplyeCode): self
    {
        if (!$this->emplye_code->contains($emplyeCode)) {
            $this->emplye_code[] = $emplyeCode;
        }

        return $this;
    }

    public function removeEmplyeCode(Conge $emplyeCode): self
    {
        $this->emplye_code->removeElement($emplyeCode);

        return $this;
    }
}
