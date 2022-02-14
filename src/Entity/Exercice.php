<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="exercices")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=Activity::class, mappedBy="exercices")
     */
    private $activities;

    public function __construct()
    {
        $this->activities = new ArrayCollection();
    }

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

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->addExercice($this);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        if ($this->activities->removeElement($activity)) {
            $activity->removeExercice($this);
        }

        return $this;
    }
}
