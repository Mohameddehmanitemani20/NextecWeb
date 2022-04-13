<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation", indexes={@ORM\Index(name="fk_joueur", columns={"id_joueur"}), @ORM\Index(name="fk_equipe", columns={"id_eq"})})
 * @ORM\Entity
 */
class Invitation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_invitation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvitation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_eq", type="integer", nullable=true)
     */
    private $idEq;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_joueur", type="integer", nullable=true)
     */
    private $idJoueur;

    public function getIdInvitation(): ?int
    {
        return $this->idInvitation;
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

    public function getIdEq(): ?int
    {
        return $this->idEq;
    }

    public function setIdEq(?int $idEq): self
    {
        $this->idEq = $idEq;

        return $this;
    }

    public function getIdJoueur(): ?int
    {
        return $this->idJoueur;
    }

    public function setIdJoueur(?int $idJoueur): self
    {
        $this->idJoueur = $idJoueur;

        return $this;
    }


}
