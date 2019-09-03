<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
{
    /**
<<<<<<< HEAD
=======
     * @var bool
     *
     * @ORM\Column(name="id_provincia", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;

    /**
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="codigo31662", type="string", length=4, nullable=false)
     */
    private $codigo31662;

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_provincia", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProvincia;


}

=======
     * @ORM\Column(name="codigo31662", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $codigo31662;

    public function getIdProvincia(): ?bool
    {
        return $this->idProvincia;
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

    public function getCodigo31662(): ?string
    {
        return $this->codigo31662;
    }

    public function setCodigo31662(string $codigo31662): self
    {
        $this->codigo31662 = $codigo31662;

        return $this;
    }


}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
