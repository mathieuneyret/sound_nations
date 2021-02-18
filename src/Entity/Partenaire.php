<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire", indexes={@ORM\Index(name="fk_partenaire_categorie", columns={"IDCategorie"})})
 * @ORM\Entity
 */
class Partenaire
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
     * @ORM\Column(name="LibellePartenaire", type="string", length=100, nullable=false)
     */
    private $libellepartenaire;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCategorie", referencedColumnName="ID")
     * })
     */
    private $idcategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellepartenaire(): ?string
    {
        return $this->libellepartenaire;
    }

    public function setLibellepartenaire(string $libellepartenaire): self
    {
        $this->libellepartenaire = $libellepartenaire;

        return $this;
    }

    public function getIdcategorie(): ?Categorie
    {
        return $this->idcategorie;
    }

    public function setIdcategorie(?Categorie $idcategorie): self
    {
        $this->idcategorie = $idcategorie;

        return $this;
    }


}
