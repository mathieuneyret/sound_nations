<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity
 */
class Artiste
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
     * @ORM\Column(name="NomGroupe", type="string", length=100, nullable=false)
     */
    private $nomgroupe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomgroupe(): ?string
    {
        return $this->nomgroupe;
    }

    public function setNomgroupe(string $nomgroupe): self
    {
        $this->nomgroupe = $nomgroupe;

        return $this;
    }


}
