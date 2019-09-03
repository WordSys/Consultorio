<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoNoLaboral
 *
 * @ORM\Table(name="periodo_no_laboral")
 * @ORM\Entity
 */
class PeriodoNoLaboral
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="desde", type="date", nullable=false)
     */
    private $desde;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hasta", type="date", nullable=false)
     */
    private $hasta;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pnlaboral", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPnlaboral;

    /**
     * @var Profesional
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Profesional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;


}

