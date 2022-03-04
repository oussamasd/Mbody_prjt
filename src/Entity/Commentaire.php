<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="object")
     */
    private $iduser;

    /**
     * @ORM\ManyToOne(targetEntity=Activity::class, inversedBy="commentaires")
     */
    private $activity;

    /**
     * @ORM\Column(type="text")
     */
    private $textcommentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateCom;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser()
    {
        return $this->iduser;
    }

    public function setIduser($iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getActivity(): ?Activity
    {
        return $this->activity;
    }

    public function setActivity(?Activity $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function getTextcommentaire(): ?string
    {
        return $this->textcommentaire;
    }

    public function setTextcommentaire(string $textcommentaire): self
    {
        $this->textcommentaire = $textcommentaire;

        return $this;
    }

    public function getDateCom(): ?string
    {
        return $this->dateCom;
    }

    public function setDateCom(string $dateCom): self
    {
        $this->dateCom = $dateCom;

        return $this;
    }


}
