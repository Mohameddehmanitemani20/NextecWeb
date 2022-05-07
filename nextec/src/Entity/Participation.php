<?php

namespace App\Entity;
use App\Entity\User;
use App\Entity\Formation;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="fk_formation", columns={"formation_id"}), @ORM\Index(name="fk_participant", columns={"id_participant"})})
 * @ORM\Entity(repositoryClass="App\Repository\ParticipationRepository")
 * @UniqueEntity(fields={"formation","idParticipant"}, message="Déjà participé  .")
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_participation", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateParticipation ;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_participant", referencedColumnName="id")
     * })
     */
    private $idParticipant;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formation_id", referencedColumnName="id_formation")
     * })
     */
    private $formation;

    public function getIdParticipation(): ?int
    {
        return $this->idParticipation;
    }
   /**
     * Get datecreation
     *
     * @return Date
     */
    public function getDateParticipation()
    {$date = DateTime::createFromFormat('Y-m-d H:i:s.uuu', time());
        
        return $this->dateParticipation;
    }

    public function setDateParticipation(\DateTimeInterface $dateParticipation): self
    {
        $this->dateParticipation = $dateParticipation;

        return $this;
    }

    public function getIdParticipant()
    {
        return $this->idParticipant;
    }

    public function setIdParticipant(?User $idParticipant): self
    {
        $this->idParticipant = $idParticipant;

        return $this;
    }

    public function getFormation()
    {
        return $this->formation;
    }

    public function setFormation(?Formation $formation): self
    {
        $this->formation = $formation;

        return $this;
    }


}
