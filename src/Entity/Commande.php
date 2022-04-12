<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="idp", columns={"idp"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcom", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcom;

    /**
     * @var int
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     */
    private $idp;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecom", type="date", nullable=false)
     */
    private $datecom;

    public function getIdcom(): ?int
    {
        return $this->idcom;
    }

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function setIdp(int $idp): self
    {
        $this->idp = $idp;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDatecom(): ?\DateTimeInterface
    {
        return $this->datecom;
    }

    public function setDatecom(\DateTimeInterface $datecom): self
    {
        $this->datecom = $datecom;

        return $this;
    }


}
