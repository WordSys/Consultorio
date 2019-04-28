<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Profesional
 *
 * @ORM\Table(name="profesional", indexes={@ORM\Index(name="profesional-domicilio_idx", columns={"id_domicilio"})})
 * @ORM\Entity
 */
class Profesional
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_profesional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfesional;

    /**
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
     * @var int
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     */
    private $dni;

    /**
     * @var int
     *
     * @ORM\Column(name="id_especialidad", type="integer", nullable=false)
     */
    private $idEspecialidad;

    /**
     * @var \Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ObraSocial", inversedBy="idProfesional")
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
