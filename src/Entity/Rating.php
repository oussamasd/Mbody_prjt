<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use App\Entity\Activity;
use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Rating
{




    /**
     * @ORM\Column(type="integer")
     */
    private $rate;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=Activity::class, inversedBy="ratings")
     */
    private $idActivity;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $Iduser;




    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getIdActivity(): ?Activity
    {
        return $this->idActivity;
    }

    public function setIdActivity(?Activity $idActivity): self
    {
        $this->idActivity = $idActivity;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->Iduser;
    }

    public function setIduser(?User $Iduser): self
    {
        $this->Iduser = $Iduser;

        return $this;
    }
}
