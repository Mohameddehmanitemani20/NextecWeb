<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="idcateg", columns={"idcateg"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var string
     *
     * @ORM\Column(name="nomp", type="string", length=40, nullable=false)
     */
    private $nomp;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="idcateg", type="integer", nullable=false)
     */
    private $idcateg;

    public function getIdp(): ?int
    {
        return $this->idp;
    }

    public function getNomp(): ?string
    {
        return $this->nomp;
    }

    public function setNomp(string $nomp): self
    {
        $this->nomp = $nomp;

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

    public function getIdcateg(): ?int
    {
        return $this->idcateg;
    }

    public function setIdcateg(int $idcateg): self
    {
        $this->idcateg = $idcateg;

        return $this;
    }


}
