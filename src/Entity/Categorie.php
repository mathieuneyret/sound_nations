<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
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
     * @ORM\Column(name="LibelleCat", type="string", length=50, nullable=false)
     */
    private $libellecat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellecat(): ?string
    {
        return $this->libellecat;
    }

    public function setLibellecat(string $libellecat): self
    {
        $this->libellecat = $libellecat;

        return $this;
    }


}
