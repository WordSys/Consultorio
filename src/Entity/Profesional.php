<?php

<<<<<<< HEAD
namespace AppBundle\Entity;

=======
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
use Doctrine\ORM\Mapping as ORM;

/**
 * Profesional
 *
<<<<<<< HEAD
 * @ORM\Table(name="profesional")
=======
 * @ORM\Table(name="profesional", indexes={@ORM\Index(name="profesional-domicilio_idx", columns={"id_domicilio"})})
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
 * @ORM\Entity
 */
class Profesional
{
    /**
<<<<<<< HEAD
=======
     * @var int
     *
     * @ORM\Column(name="id_profesional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfesional;

    /**
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=45, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
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
<<<<<<< HEAD
     * @var integer
=======
     * @var int
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     *
     * @ORM\Column(name="id_especialidad", type="integer", nullable=false)
     */
    private $idEspecialidad;

    /**
<<<<<<< HEAD
     * @var integer
     *
     * @ORM\Column(name="id_profesional", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfesional;

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
     * @var \Doctrine\Common\Collections\Collection
     *
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ObraSocial", inversedBy="idProfesional")
=======
     * @ORM\ManyToMany(targetEntity="ObraSocial", inversedBy="idProfesional")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinTable(name="profesional_obsocial",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_obsoc", referencedColumnName="id_obsoc")
     *   }
     * )
     */
    private $idObsoc;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idObsoc = new \Doctrine\Common\Collections\ArrayCollection();
    }

<<<<<<< HEAD
}

=======
    public function getIdProfesional(): ?int
    {
        return $this->idProfesional;
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

    public function getIdEspecialidad(): ?int
    {
        return $this->idEspecialidad;
    }

    public function setIdEspecialidad(int $idEspecialidad): self
    {
        $this->idEspecialidad = $idEspecialidad;

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

    /**
     * @return Collection|ObraSocial[]
     */
    public function getIdObsoc(): Collection
    {
        return $this->idObsoc;
    }

    public function addIdObsoc(ObraSocial $idObsoc): self
    {
        if (!$this->idObsoc->contains($idObsoc)) {
            $this->idObsoc[] = $idObsoc;
        }

        return $this;
    }

    public function removeIdObsoc(ObraSocial $idObsoc): self
    {
        if ($this->idObsoc->contains($idObsoc)) {
            $this->idObsoc->removeElement($idObsoc);
        }

        return $this;
    }

}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
