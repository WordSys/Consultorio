<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoNoLaboral
 *
<<<<<<< HEAD
 * @ORM\Table(name="periodo_no_laboral")
=======
 * @ORM\Table(name="periodo_no_laboral", indexes={@ORM\Index(name="pnl-profesional_idx", columns={"id_profesional"})})
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
 * @ORM\Entity
 */
class PeriodoNoLaboral
{
    /**
<<<<<<< HEAD
=======
     * @var int
     *
     * @ORM\Column(name="id_pnlaboral", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPnlaboral;

    /**
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
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
<<<<<<< HEAD
     * @var integer
     *
     * @ORM\Column(name="id_pnlaboral", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPnlaboral;

    /**
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

<<<<<<< HEAD

}

=======
    public function getIdPnlaboral(): ?int
    {
        return $this->idPnlaboral;
    }

    public function getDesde(): ?\DateTimeInterface
    {
        return $this->desde;
    }

    public function setDesde(\DateTimeInterface $desde): self
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta(): ?\DateTimeInterface
    {
        return $this->hasta;
    }

    public function setHasta(\DateTimeInterface $hasta): self
    {
        $this->hasta = $hasta;

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


}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
