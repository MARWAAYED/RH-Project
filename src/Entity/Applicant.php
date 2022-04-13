<?php

namespace App\Entity;

use App\Repository\ApplicantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApplicantRepository::class)
 */
class Applicant
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
    private $date_creation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_condidat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job_concerne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etiquette;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $appreciation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $recrutement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etape;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getNomCondidat(): ?string
    {
        return $this->nom_condidat;
    }

    public function setNomCondidat(string $nom_condidat): self
    {
        $this->nom_condidat = $nom_condidat;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getJobConcerne(): ?string
    {
        return $this->job_concerne;
    }

    public function setJobConcerne(string $job_concerne): self
    {
        $this->job_concerne = $job_concerne;

        return $this;
    }

    public function getEtiquette(): ?string
    {
        return $this->etiquette;
    }

    public function setEtiquette(string $etiquette): self
    {
        $this->etiquette = $etiquette;

        return $this;
    }

    public function getAppreciation(): ?string
    {
        return $this->appreciation;
    }

    public function setAppreciation(string $appreciation): self
    {
        $this->appreciation = $appreciation;

        return $this;
    }

    public function getRecrutement(): ?string
    {
        return $this->recrutement;
    }

    public function setRecrutement(string $recrutement): self
    {
        $this->recrutement = $recrutement;

        return $this;
    }

    public function getEtape(): ?string
    {
        return $this->etape;
    }

    public function setEtape(string $etape): self
    {
        $this->etape = $etape;

        return $this;
    }
}
