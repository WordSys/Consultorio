<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoNoLaboral
 *
 * @ORM\Table(name="periodo_no_laboral", indexes={@ORM\Index(name="pnl-profesional_idx", columns={"id_profesional"})})
 * @ORM\Entity
 */
class PeriodoNoLaboral
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pnlaboral", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPnlaboral;

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
     * @var \Profesional
     *
     * @ORM\ManyToOne(targetEntity="Profesional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;

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
