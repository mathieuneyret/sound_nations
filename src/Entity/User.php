<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_User_TypeMembre", columns={"IDMembre"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="NumTel", type="integer", nullable=false)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="text", length=65535, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="CodePostal", type="integer", nullable=false)
     */
    private $codepostal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="AdresseMail", type="string", length=100, nullable=false)
     */
    private $adressemail;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var \Typemembre
     *
     * @ORM\ManyToOne(targetEntity="Typemembre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMembre", referencedColumnName="ID")
     * })
     */
    private $idmembre;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): self
    {
        $this->numtel = $numtel;

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

    public function getCodepostal(): ?int
    {
        return $this->codepostal;
    }

    public function setCodepostal(int $codepostal): self
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getAdressemail(): ?string
    {
        return $this->adressemail;
    }

    public function setAdressemail(string $adressemail): self
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getIdmembre(): ?Typemembre
    {
        return $this->idmembre;
    }

    public function setIdmembre(?Typemembre $idmembre): self
    {
        $this->idmembre = $idmembre;

        return $this;
    }


    public function __toString()
    {
        return $this->getNom(). ' ' .$this->getPrenom();
        /*return $this->getNom(). ' ' .$this->getPrenom(). ' ' .$this->getAdresse(). ' ' .$this->getAdressemail(). ' ' .$this->getPassword();*/
        
    }
    

}
