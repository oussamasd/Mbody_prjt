<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use YoHang88\LetterAvatar\LetterAvatar;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 *@ORM\Table(name="User")
 *
 *@ORM\Entity(repositoryClass=UserRepository::class)
 *@ORM\InheritanceType("JOINED")
 *@UniqueEntity(fields={"email"}, message="Un utilisateur existe déjà avec cette adresse email.")
 *
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;
    /**
     * @Assert\Length(min=8, minMessage="entrer un nombre de taille egale a 8")
     * @Assert\Positive(message="ce champs doit etre positive")
     * @Assert\NotBlank(message="obligatoire")
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $cin;

    /**
     * @ORM\Column(type="string", length=180)
     * @Groups("post:read")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     * @Groups("post:read")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     * @Groups("post:read")
     */
    private $password;
    /**
     *@Assert\NotBlank(message="obligatoire")
     * @Assert\Regex(pattern="/^[a-z]+$/i", message="ce champs n'accepte pas les chiffres")
     * @Groups ("produit")
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @Assert\NotBlank(message="obligatoire")
     * @Assert\Regex(pattern="/^[a-z]+$/i", message="ce champs n'accepte pas les chiffres")
     * @Groups ("produit")
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $prenom;

    /**
     *  @Assert\NotBlank(message="obligatoire")
     *  @Assert\Regex(pattern="/^[a-z0-9]+$/i", message="ce champs accepte un format d'adresse")
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $adresse;

    /**
     *
     * @Assert\NotBlank(message="obligatoire")
     * @Assert\Positive(message="ce champs doit etre positive")
     * @Assert\Length(min=8, minMessage="entrer un nombre de taille egale a 8")
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activation_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reset_token;



    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;




    public function __construct()
    {

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        //$roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
    public function getCin(): ?int
    {
        return $this->cin;
    }
    public function setId(int $id): self
    {
        $this->id= $id;

        return $this;
    }
    public function setCin(string $cin): self
    {
        $this->cin = $cin;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getActivationToken(): ?string
    {
        return $this->activation_token;
    }

    public function setActivationToken(?string $activation_token): self
    {
        $this->activation_token = $activation_token;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): self
    {
        $this->reset_token = $reset_token;

        return $this;
    }




    public function __toString()
    {

        return (string)$this->getNom();
    }

    public function getCaptcha(): ?array
    {
        return $this->captcha;
    }

    public function setCaptcha(array $captcha): self
    {
        $this->captcha = $captcha;

        return $this;
    }









    public function makeAvatar(){

         $path = 'fonts/'.time() . ".png";
         $image = imagecreate(200, 200);
         $red = rand(0, 255);
         $green = rand(0, 255);
         $blue = rand(0, 255);
         imagecolorallocate($image, $red, $green, $blue);
         $textcolor = imagecolorallocate($image, 255,255,255);

         $userUpper = strtoupper($this->getUsername());
         imagettftext($image, 100, 0, 55, 150, $textcolor, realpath('fonts/ARIAL.ttf'),$userUpper[0]);

         imagepng($image, $path);
         imagedestroy($image);
        $avatar = new LetterAvatar($this->getNom());
        $avatar->saveAs('path/to/filename');
        return $avatar;








    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }








}
