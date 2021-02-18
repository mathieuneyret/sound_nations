<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typemusical
 *
 * @ORM\Table(name="typemusical")
 * @ORM\Entity
 */
class Typemusical
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
     * @ORM\Column(name="LibelleMusique", type="string", length=100, nullable=false)
     */
    private $libellemusique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellemusique(): ?string
    {
        return $this->libellemusique;
    }

    public function setLibellemusique(string $libellemusique): self
    {
        $this->libellemusique = $libellemusique;

        return $this;
    }


}
