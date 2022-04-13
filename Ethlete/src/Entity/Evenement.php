<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fk_comp", columns={"id_compet"}), @ORM\Index(name="fk_intervenantss", columns={"id_inter"}), @ORM\Index(name="fk_form_event", columns={"id_formation"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=30, nullable=false)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="typeE", type="string", length=255, nullable=false)
     */
    private $typee;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=100, nullable=false)
     */
    private $lieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=true)
     */
    private $idFormation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_inter", type="integer", nullable=true)
     */
    private $idInter;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_compet", type="integer", nullable=true)
     */
    private $idCompet;

    /**
     * @var float
     *
     * @ORM\Column(name="prixU", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixu;

    public function getIdEvent(): ?int
    {
        return $this->idEvent;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getTypee(): ?string
    {
        return $this->typee;
    }

    public function setTypee(string $typee): self
    {
        $this->typee = $typee;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getIdFormation(): ?int
    {
        return $this->idFormation;
    }

    public function setIdFormation(?int $idFormation): self
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    public function getIdInter(): ?int
    {
        return $this->idInter;
    }

    public function setIdInter(?int $idInter): self
    {
        $this->idInter = $idInter;

        return $this;
    }

    public function getIdCompet(): ?int
    {
        return $this->idCompet;
    }

    public function setIdCompet(?int $idCompet): self
    {
        $this->idCompet = $idCompet;

        return $this;
    }

    public function getPrixu(): ?float
    {
        return $this->prixu;
    }

    public function setPrixu(float $prixu): self
    {
        $this->prixu = $prixu;

        return $this;
    }


}
