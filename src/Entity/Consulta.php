<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
<<<<<<< HEAD
 * @ORM\Table(name="consulta")
=======
 * @ORM\Table(name="consulta", indexes={@ORM\Index(name="consulta-profesional_idx", columns={"id_profesional"}), @ORM\Index(name="consulta-tconsulta_idx", columns={"id_tconsulta"}), @ORM\Index(name="consulta-usuario_idx", columns={"id_usuario"}), @ORM\Index(name="consulta-paciente_idx", columns={"id_paciente"})})
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
 * @ORM\Entity
 */
class Consulta
{
    /**
<<<<<<< HEAD
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consulta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsulta;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paciente")
=======
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
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id_paciente")
     * })
     */
    private $idPaciente;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\Profesional
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Profesional")
=======
     * @var \Profesional
     *
     * @ORM\ManyToOne(targetEntity="Profesional")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\TipoConsulta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoConsulta")
=======
     * @var \TipoConsulta
     *
     * @ORM\ManyToOne(targetEntity="TipoConsulta")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tconsulta", referencedColumnName="id_tconsulta")
     * })
     */
    private $idTconsulta;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
=======
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;

<<<<<<< HEAD

}

=======
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
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
