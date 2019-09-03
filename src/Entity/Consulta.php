<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
 * @ORM\Table(name="consulta")
 * @ORM\Entity
 */
class Consulta
{
    /**
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
     * @var Paciente
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id_paciente")
     * })
     */
    private $idPaciente;

    /**
     * @var Profesional
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Profesional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;

    /**
     * @var TipoConsulta
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tconsulta", referencedColumnName="id_tconsulta")
     * })
     */
    private $idTconsulta;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


}

