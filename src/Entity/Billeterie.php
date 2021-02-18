<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billeterie
 *
 * @ORM\Table(name="billeterie", indexes={@ORM\Index(name="fk_billeterie_typepass", columns={"IDPass"}), @ORM\Index(name="fk_billeterie_User", columns={"IDUser"})})
 * @ORM\Entity
 */
class Billeterie
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateAchat", type="datetime", nullable=false)
     */
    private $dateachat;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDUser", referencedColumnName="ID")
     * })
     */
    private $iduser;

    /**
     * @var \Typepass
     *
     * @ORM\ManyToOne(targetEntity="Typepass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDPass", referencedColumnName="ID")
     * })
     */
    private $idpass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateachat(): ?\DateTimeInterface
    {
        return $this->dateachat;
    }

    public function setDateachat(\DateTimeInterface $dateachat): self
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getIdpass(): ?Typepass
    {
        return $this->idpass;
    }

    public function setIdpass(?Typepass $idpass): self
    {
        $this->idpass = $idpass;

        return $this;
    }


}
