<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
<<<<<<< HEAD
 * @ORM\Table(name="paciente")
=======
 * @ORM\Table(name="paciente", indexes={@ORM\Index(name="paciente-obsocial_idx", columns={"id_obsoc"}), @ORM\Index(name="paciente-domicilio_idx", columns={"id_domicilio"})})
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
 * @ORM\Entity
 */
class Paciente
{
    /**
<<<<<<< HEAD
=======
     * @var int
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaciente;

    /**
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
<<<<<<< HEAD
     * @var integer
=======
     * @var int
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     */
    private $dni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnac", type="datetime", nullable=false)
     */
    private $fnac;

    /**
<<<<<<< HEAD
     * @var integer
     *
     * @ORM\Column(name="id_paciente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaciente;

    /**
     * @var \AppBundle\Entity\Domicilio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Domicilio")
=======
     * @var \Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\ObraSocial
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ObraSocial")
=======
     * @var \ObraSocial
     *
     * @ORM\ManyToOne(targetEntity="ObraSocial")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_obsoc", referencedColumnName="id_obsoc")
     * })
     */
    private $idObsoc;

<<<<<<< HEAD

}

=======
    public function getIdPaciente(): ?int
    {
        return $this->idPaciente;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

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

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getFnac(): ?\DateTimeInterface
    {
        return $this->fnac;
    }

    public function setFnac(\DateTimeInterface $fnac): self
    {
        $this->fnac = $fnac;

        return $this;
    }

    public function getIdDomicilio(): ?Domicilio
    {
        return $this->idDomicilio;
    }

    public function setIdDomicilio(?Domicilio $idDomicilio): self
    {
        $this->idDomicilio = $idDomicilio;

        return $this;
    }

    public function getIdObsoc(): ?ObraSocial
    {
        return $this->idObsoc;
    }

    public function setIdObsoc(?ObraSocial $idObsoc): self
    {
        $this->idObsoc = $idObsoc;

        return $this;
    }


}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
