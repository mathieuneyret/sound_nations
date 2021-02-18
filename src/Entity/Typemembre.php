<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typemembre
 *
 * @ORM\Table(name="typemembre")
 * @ORM\Entity
 */
class Typemembre
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
     * @ORM\Column(name="LibellePoste", type="string", length=80, nullable=false)
     */
    private $libelleposte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleposte(): ?string
    {
        return $this->libelleposte;
    }

    public function setLibelleposte(string $libelleposte): self
    {
        $this->libelleposte = $libelleposte;

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelleposte();
    }

}
