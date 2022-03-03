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
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $Iduser;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $Idactivity;

    /**
     * @ORM\Column(type="integer")
     */
    private $rate;



    public function getIduser(): ?User
    {
        return $this->Iduser;
    }

    public function setIduser(User $Iduser): self
    {
        $this->Iduser = $Iduser;

        return $this;
    }

    public function getIdactivity(): ?Activity
    {
        return $this->Idactivity;
    }

    public function setIdactivity(Activity $Idactivity): self
    {
        $this->Idactivity = $Idactivity;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }
}
