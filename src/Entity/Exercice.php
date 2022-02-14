<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 */
class Exercice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_Exercice;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $dure_Exercice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description_Exercice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomExercice(): ?string
    {
        return $this->nom_Exercice;
    }

    public function setNomExercice(string $nom_Exercice): self
    {
        $this->nom_Exercice = $nom_Exercice;

        return $this;
    }

    public function getDureExercice(): ?string
    {
        return $this->dure_Exercice;
    }

    public function setDureExercice(string $dure_Exercice): self
    {
        $this->dure_Exercice = $dure_Exercice;

        return $this;
    }

    public function getDescriptionExercice(): ?string
    {
        return $this->description_Exercice;
    }

    public function setDescriptionExercice(string $description_Exercice): self
    {
        $this->description_Exercice = $description_Exercice;

        return $this;
    }
}
