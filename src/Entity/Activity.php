<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=Exercice::class, inversedBy="activities")
     */
    private $exercices;

    /**
     * @ORM\OneToMany(targetEntity=ImageActEx::class, mappedBy="activity")
     */
    private $images;

    public function __construct()
    {
        $this->exercices = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

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
     * @return Collection|Exercice[]
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(Exercice $exercice): self
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices[] = $exercice;
        }

        return $this;
    }

    public function removeExercice(Exercice $exercice): self
    {
        $this->exercices->removeElement($exercice);

        return $this;
    }

    /**
     * @return Collection|ImageActEx[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(ImageActEx $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setActivity($this);
        }

        return $this;
    }

    public function removeImage(ImageActEx $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getActivity() === $this) {
                $image->setActivity(null);
            }
        }

        return $this;
    }
}
