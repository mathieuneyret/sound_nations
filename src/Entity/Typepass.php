<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepass
 *
 * @ORM\Table(name="typepass")
 * @ORM\Entity
 */
class Typepass
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
     * @ORM\Column(name="LibellePass", type="string", length=100, nullable=false)
     */
    private $libellepass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellepass(): ?string
    {
        return $this->libellepass;
    }

    public function setLibellepass(string $libellepass): self
    {
        $this->libellepass = $libellepass;

        return $this;
    }


}
