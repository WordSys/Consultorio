<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio", indexes={@ORM\Index(name="domicilio-provincia_idx", columns={"id_provincia"}), @ORM\Index(name="domicilio-localidad_idx", columns={"id_localidad"})})
 * @ORM\Entity
 */
class Domicilio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_domicilio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="calle", type="string", length=100, nullable=false)
     */
    private $calle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nro", type="integer", nullable=true)
     */
    private $nro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cruce1", type="string", length=100, nullable=true)
     */
    private $cruce1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cruce2", type="string", length=100, nullable=true)
     */
    private $cruce2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="piso", type="integer", nullable=true)
     */
    private $piso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dpto", type="string", length=5, nullable=true)
     */
    private $dpto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cp", type="smallint", nullable=false)
     */
    private $idCp;

    /**
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_localidad", referencedColumnName="id_localidad")
     * })
     */
    private $idLocalidad;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_provincia", referencedColumnName="id_provincia")
     * })
     */
    private $idProvincia;

    public function getIdDomicilio(): ?int
    {
        return $this->idDomicilio;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNro(): ?int
    {
        return $this->nro;
    }

    public function setNro(?int $nro): self
    {
        $this->nro = $nro;

        return $this;
    }

    public function getCruce1(): ?string
    {
        return $this->cruce1;
    }

    public function setCruce1(?string $cruce1): self
    {
        $this->cruce1 = $cruce1;

        return $this;
    }

    public function getCruce2(): ?string
    {
        return $this->cruce2;
    }

    public function setCruce2(?string $cruce2): self
    {
        $this->cruce2 = $cruce2;

        return $this;
    }

    public function getPiso(): ?int
    {
        return $this->piso;
    }

    public function setPiso(?int $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getDpto(): ?string
    {
        return $this->dpto;
    }

    public function setDpto(?string $dpto): self
    {
        $this->dpto = $dpto;

        return $this;
    }

    public function getIdCp(): ?int
    {
        return $this->idCp;
    }

    public function setIdCp(int $idCp): self
    {
        $this->idCp = $idCp;

        return $this;
    }

    public function getIdLocalidad(): ?Localidad
    {
        return $this->idLocalidad;
    }

    public function setIdLocalidad(?Localidad $idLocalidad): self
    {
        $this->idLocalidad = $idLocalidad;

        return $this;
    }

    public function getIdProvincia(): ?Provincia
    {
        return $this->idProvincia;
    }

    public function setIdProvincia(?Provincia $idProvincia): self
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }


}
