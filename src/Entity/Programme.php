<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme", indexes={@ORM\Index(name="fk_prog_type", columns={"IDType"}), @ORM\Index(name="fk_prog_concert", columns={"IDConcert"})})
 * @ORM\Entity
 */
class Programme
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
     * @ORM\Column(name="Horaire", type="datetime", nullable=false)
     */
    private $horaire;

    /**
     * @var int
     *
     * @ORM\Column(name="IDScene", type="integer", nullable=false)
     */
    private $idscene;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \Jouer
     *
     * @ORM\ManyToOne(targetEntity="Jouer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDConcert", referencedColumnName="ID")
     * })
     */
    private $idconcert;

    /**
     * @var \Typemusical
     *
     * @ORM\ManyToOne(targetEntity="Typemusical")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDType", referencedColumnName="ID")
     * })
     */
    private $idtype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoraire(): ?\DateTimeInterface
    {
        return $this->horaire;
    }

    public function setHoraire(\DateTimeInterface $horaire): self
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function getIdscene(): ?int
    {
        return $this->idscene;
    }

    public function setIdscene(int $idscene): self
    {
        $this->idscene = $idscene;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdconcert(): ?Jouer
    {
        return $this->idconcert;
    }

    public function setIdconcert(?Jouer $idconcert): self
    {
        $this->idconcert = $idconcert;

        return $this;
    }

    public function getIdtype(): ?Typemusical
    {
        return $this->idtype;
    }

    public function setIdtype(?Typemusical $idtype): self
    {
        $this->idtype = $idtype;

        return $this;
    }

    public function __toString()
    {
        return "".$this->getIdconcert();
    }


}
