<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=OffreRepository::class)
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank(message=" ce champ est obligatoire ")
     */
    private $delai;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message=" ce champ est obligatoire ")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message=" ce champ est obligatoire ")
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=Abonnement::class, inversedBy="offres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nom_abonnement;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelai(): ?\DateTimeInterface
    {
        return $this->delai;
    }

    public function setDelai(\DateTimeInterface $delai): self
    {
        $this->delai = $delai;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNomAbonnement(): ?Abonnement
    {
        return $this->nom_abonnement;
    }

    public function setNomAbonnement(?Abonnement $nom_abonnement): self
    {
        $this->nom_abonnement = $nom_abonnement;

        return $this;
    }




}
