<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe", indexes={@ORM\Index(name="fk_Responsable_eq", columns={"id_responsable"})})
 * @ORM\Entity
 */
class Equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipe", type="string", length=50, nullable=false)
     */
    private $nomEquipe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_responsable", type="integer", nullable=true)
     */
    private $idResponsable;

    public function getIdEquipe(): ?int
    {
        return $this->idEquipe;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nomEquipe;
    }

    public function setNomEquipe(string $nomEquipe): self
    {
        $this->nomEquipe = $nomEquipe;

        return $this;
    }

    public function getIdResponsable(): ?int
    {
        return $this->idResponsable;
    }

    public function setIdResponsable(?int $idResponsable): self
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }


}
