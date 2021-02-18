<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scene
 *
 * @ORM\Table(name="scene")
 * @ORM\Entity
 */
class Scene
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
     * @ORM\Column(name="LibelleScene", type="string", length=50, nullable=false)
     */
    private $libellescene;

    /**
     * @var string
     *
     * @ORM\Column(name="Coordonee", type="text", length=65535, nullable=false)
     */
    private $coordonee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellescene(): ?string
    {
        return $this->libellescene;
    }

    public function setLibellescene(string $libellescene): self
    {
        $this->libellescene = $libellescene;

        return $this;
    }

    public function getCoordonee(): ?string
    {
        return $this->coordonee;
    }

    public function setCoordonee(string $coordonee): self
    {
        $this->coordonee = $coordonee;

        return $this;
    }

    public function __toString()
    {
        return $this->getLibellescene();
    }

}
