<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity
 */
class Localidad
{
    /**
<<<<<<< HEAD
     * @var boolean
=======
     * @var int
     *
     * @ORM\Column(name="id_localidad", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalidad;

    /**
     * @var bool
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     *
     * @ORM\Column(name="id_provincia", type="boolean", nullable=false)
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
<<<<<<< HEAD
     * @var integer
=======
     * @var int
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     *
     * @ORM\Column(name="codigopostal", type="smallint", nullable=false)
     */
    private $codigopostal;

<<<<<<< HEAD
    /**
     * @var integer
     *
     * @ORM\Column(name="id_localidad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocalidad;


}

=======
    public function getIdLocalidad(): ?int
    {
        return $this->idLocalidad;
    }

    public function getIdProvincia(): ?bool
    {
        return $this->idProvincia;
    }

    public function setIdProvincia(bool $idProvincia): self
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCodigopostal(): ?int
    {
        return $this->codigopostal;
    }

    public function setCodigopostal(int $codigopostal): self
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }


}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
