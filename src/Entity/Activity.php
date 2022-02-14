<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivityRepository::class)
 */
class Activity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_Act;

    /**
     * @ORM\Column(type="date")
     */
    private $date_Act;

    /**
     * @ORM\Column(type="time")
     */
    private $temp_act;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_Act;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAct(): ?string
    {
        return $this->nom_Act;
    }

    public function setNomAct(string $nom_Act): self
    {
        $this->nom_Act = $nom_Act;

        return $this;
    }

    public function getDateAct(): ?\DateTimeInterface
    {
        return $this->date_Act;
    }

    public function setDateAct(\DateTimeInterface $date_Act): self
    {
        $this->date_Act = $date_Act;

        return $this;
    }

    public function getTempAct(): ?\DateTimeInterface
    {
        return $this->temp_act;
    }

    public function setTempAct(\DateTimeInterface $temp_act): self
    {
        $this->temp_act = $temp_act;

        return $this;
    }

    public function getDescriptionAct(): ?string
    {
        return $this->description_Act;
    }

    public function setDescriptionAct(string $description_Act): self
    {
        $this->description_Act = $description_Act;

        return $this;
    }
}
