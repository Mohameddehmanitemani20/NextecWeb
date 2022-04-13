<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationFormateur
 *
 * @ORM\Table(name="affectation_formateur", indexes={@ORM\Index(name="fk_reponse", columns={"reponse"}), @ORM\Index(name="fk_formateur", columns={"formateur_id"}), @ORM\Index(name="fk_formation1", columns={"formation_id"})})
 * @ORM\Entity
 */
class AffectationFormateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="formateur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $formateurId;

    /**
     * @var int
     *
     * @ORM\Column(name="formation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $formationId;

    /**
     * @var int
     *
     * @ORM\Column(name="reponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reponse;

    public function getFormateurId(): ?int
    {
        return $this->formateurId;
    }

    public function getFormationId(): ?int
    {
        return $this->formationId;
    }

    public function getReponse(): ?int
    {
        return $this->reponse;
    }


}
