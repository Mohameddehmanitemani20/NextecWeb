<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="fk_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_avis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvis;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    public function getIdAvis(): ?int
    {
        return $this->idAvis;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }


}
