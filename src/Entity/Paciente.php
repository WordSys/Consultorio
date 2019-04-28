<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente", indexes={@ORM\Index(name="paciente-obsocial_idx", columns={"id_obsoc"}), @ORM\Index(name="paciente-domicilio_idx", columns={"id_domicilio"})})
 * @ORM\Entity
 */
class Paciente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paciente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaciente;

    /**
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
     * @var int
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
     * @var \Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    /**
     * @var \ObraSocial
     *
     * @ORM\ManyToOne(targetEntity="ObraSocial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_obsoc", referencedColumnName="id_obsoc")
     * })
     */
    private $idObsoc;

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
