<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=300)
     * @Assert\NotBlank(message=" ce champ est obligatoire ")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message=" ce champ est obligatoire ")
     */
    private $Tage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTage(): ?string
    {
        return $this->Tage;
    }

    public function setTage(string $Tage): self
    {
        $this->Tage = $Tage;

        return $this;
    }
}
