<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billets
 *
 * @ORM\Table(name="billets", indexes={@ORM\Index(name="fk_billet_evenement", columns={"id_event"})})
 * @ORM\Entity
 */

/**
 * @ORM\Entity(repositoryClass="App\Repository\BilletRepository")
 */
class Billets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_billet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBillet;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_billet", type="integer", nullable=false)
     */
    private $nbrBillet;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_achat", type="date", nullable=false)
     */
    private $dateAchat;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_event", referencedColumnName="id_event")
     * })
     */
    private $idEvent;

    public function getIdBillet(): ?int
    {
        return $this->idBillet;
    }

    public function getNbrBillet(): ?int
    {
        return $this->nbrBillet;
    }

    public function setNbrBillet(int $nbrBillet): self
    {
        $this->nbrBillet = $nbrBillet;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getIdEvent(): ?Evenement
    {
        return $this->idEvent;
    }

    public function setIdEvent(?Evenement $idEvent): self
    {
        $this->idEvent = $idEvent;

        return $this;
    }


}
