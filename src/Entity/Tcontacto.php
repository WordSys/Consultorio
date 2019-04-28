<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tcontacto
 *
 * @ORM\Table(name="tcontacto")
 * @ORM\Entity
 */
class Tcontacto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tcontacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTcontacto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=5, nullable=true)
     */
    private $descripcion;

    public function getIdTcontacto(): ?int
    {
        return $this->idTcontacto;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }


}
