<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raison
 *
 * @ORM\Table(name="raison", indexes={@ORM\Index(name="raisontxt", columns={"raisontxt"})})
 * @ORM\Entity
 */
class Raison
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRaison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idraison;

    /**
     * @var string
     *
     * @ORM\Column(name="raisontxt", type="string", length=100, nullable=false)
     */
    private $raisontxt;

    public function getIdraison(): ?int
    {
        return $this->idraison;
    }

    public function getRaisontxt(): ?string
    {
        return $this->raisontxt;
    }

    public function setRaisontxt(string $raisontxt): self
    {
        $this->raisontxt = $raisontxt;

        return $this;
    }


}
