<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jouer
 *
 * @ORM\Table(name="jouer", indexes={@ORM\Index(name="fk_jouer_concert", columns={"IDConcert"}), @ORM\Index(name="fk_jouer_scene", columns={"IDScene"}), @ORM\Index(name="fk_jouer_artiste", columns={"IDArtiste"})})
 * @ORM\Entity
 */
class Jouer
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateConcert", type="date", nullable=false)
     */
    private $dateconcert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HeureConcert", type="datetime", nullable=false)
     */
    private $heureconcert;

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Artiste
     *
     * @ORM\ManyToOne(targetEntity="Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDArtiste", referencedColumnName="ID")
     * })
     */
    private $idartiste;

    /**
     * @var \Concert
     *
     * @ORM\ManyToOne(targetEntity="Concert")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDConcert", referencedColumnName="ID")
     * })
     */
    private $idconcert;

    /**
     * @var \Scene
     *
     * @ORM\ManyToOne(targetEntity="Scene")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDScene", referencedColumnName="ID")
     * })
     */
    private $idscene;

    public function getDateconcert(): ?\DateTimeInterface
    {
        return $this->dateconcert;
    }

    public function setDateconcert(\DateTimeInterface $dateconcert): self
    {
        $this->dateconcert = $dateconcert;

        return $this;
    }

    public function getHeureconcert(): ?\DateTimeInterface
    {
        return $this->heureconcert;
    }

    public function setHeureconcert(\DateTimeInterface $heureconcert): self
    {
        $this->heureconcert = $heureconcert;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdartiste(): ?Artiste
    {
        return $this->idartiste;
    }

    public function setIdartiste(?Artiste $idartiste): self
    {
        $this->idartiste = $idartiste;

        return $this;
    }

    public function getIdconcert(): ?Concert
    {
        return $this->idconcert;
    }

    public function setIdconcert(?Concert $idconcert): self
    {
        $this->idconcert = $idconcert;

        return $this;
    }

    public function getIdscene(): ?Scene
    {
        return $this->idscene;
    }

    public function setIdscene(?Scene $idscene): self
    {
        $this->idscene = $idscene;

        return $this;
    }


}
