<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcateg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcateg;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcateg", type="string", length=50, nullable=false)
     */
    private $nomcateg;

    public function getIdcateg(): ?int
    {
        return $this->idcateg;
    }

    public function getNomcateg(): ?string
    {
        return $this->nomcateg;
    }

    public function setNomcateg(string $nomcateg): self
    {
        $this->nomcateg = $nomcateg;

        return $this;
    }


}
