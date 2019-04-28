<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
 * @ORM\Table(name="consulta", indexes={@ORM\Index(name="consulta-profesional_idx", columns={"id_profesional"}), @ORM\Index(name="consulta-tconsulta_idx", columns={"id_tconsulta"}), @ORM\Index(name="consulta-usuario_idx", columns={"id_usuario"}), @ORM\Index(name="consulta-paciente_idx", columns={"id_paciente"})})
 * @ORM\Entity
 */
class Consulta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_consulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsulta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \Paciente
     *
     * @ORM\ManyToOne(targetEntity="Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id_paciente")
     * })
     */
    private $idPaciente;

    /**
     * @var \Profesional
     *
     * @ORM\ManyToOne(targetEntity="Profesional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;

    /**
     * @var \TipoConsulta
     *
     * @ORM\ManyToOne(targetEntity="TipoConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tconsulta", referencedColumnName="id_tconsulta")
     * })
     */
    private $idTconsulta;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

    public function getIdConsulta(): ?int
    {
        return $this->idConsulta;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdPaciente(): ?Paciente
    {
        return $this->idPaciente;
    }

    public function setIdPaciente(?Paciente $idPaciente): self
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }

    public function getIdProfesional(): ?Profesional
    {
        return $this->idProfesional;
    }

    public function setIdProfesional(?Profesional $idProfesional): self
    {
        $this->idProfesional = $idProfesional;

        return $this;
    }

    public function getIdTconsulta(): ?TipoConsulta
    {
        return $this->idTconsulta;
    }

    public function setIdTconsulta(?TipoConsulta $idTconsulta): self
    {
        $this->idTconsulta = $idTconsulta;

        return $this;
    }

    public function getIdUsuario(): ?Usuario
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(?Usuario $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }


}
