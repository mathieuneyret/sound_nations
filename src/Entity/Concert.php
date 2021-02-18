<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table(name="concert")
 * @ORM\Entity
 */
class Concert
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
     * @ORM\Column(name="LibelleConcert", type="string", length=100, nullable=false)
     */
    private $libelleconcert;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleconcert(): ?string
    {
        return $this->libelleconcert;
    }

    public function setLibelleconcert(string $libelleconcert): self
    {
        $this->libelleconcert = $libelleconcert;

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelleconcert();
    }


}
