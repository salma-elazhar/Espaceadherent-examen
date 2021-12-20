<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratRepository::class)
 */
class Contrat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $typedepaiement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $offre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $besoin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montanttotale;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $durée): self
    {
        $this->duree = $durée;

        return $this;
    }

    public function getTypedepaiement(): ?string
    {
        return $this->typedepaiement;
    }

    public function setTypedepaiement(?string $typedepaiement): self
    {
        $this->typedepaiement = $typedepaiement;

        return $this;
    }

    public function getOffre(): ?string
    {
        return $this->offre;
    }

    public function setOffre(string $offre): self
    {
        $this->offre = $offre;

        return $this;
    }

    public function getBesoin(): ?string
    {
        return $this->besoin;
    }

    public function setBesoin(?string $besoin): self
    {
        $this->besoin = $besoin;

        return $this;
    }

    public function getMontanttotale(): ?int
    {
        return $this->montanttotale;
    }

    public function setMontanttotale(?int $montanttotale): self
    {
        $this->montanttotale = $montanttotale;

        return $this;
    }
}
