<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="idRaison", columns={"idRaison"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", length=65535, nullable=false)
     */
    private $contenu;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="daterec", type="string", length=100, nullable=false)
     */
    private $daterec;

    /**
     * @var int
     *
     * @ORM\Column(name="idRaison", type="integer", nullable=false)
     */
    private $idraison;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDaterec(): ?string
    {
        return $this->daterec;
    }

    public function setDaterec(string $daterec): self
    {
        $this->daterec = $daterec;

        return $this;
    }

    public function getIdraison(): ?int
    {
        return $this->idraison;
    }

    public function setIdraison(int $idraison): self
    {
        $this->idraison = $idraison;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
