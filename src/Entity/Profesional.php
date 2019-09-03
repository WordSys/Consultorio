<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesional
 *
 * @ORM\Table(name="profesional")
 * @ORM\Entity
 */
class Profesional
{
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
     * @var integer
     *
     * @ORM\Column(name="dni", type="integer", nullable=false)
     */
    private $dni;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_especialidad", type="integer", nullable=false)
     */
    private $idEspecialidad;

    /**
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
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\ObraSocial", inversedBy="idProfesional")
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

}

