<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoConsulta
 *
 * @ORM\Table(name="tipo_consulta")
 * @ORM\Entity
 */
class TipoConsulta
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tconsulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTconsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_consulta", type="string", length=45, nullable=false)
     */
    private $tipoConsulta;

    /**
     * @var float
     *
     * @ORM\Column(name="arancel", type="float", precision=10, scale=0, nullable=false)
     */
    private $arancel;

    public function getIdTconsulta(): ?int
    {
        return $this->idTconsulta;
    }

    public function getTipoConsulta(): ?string
    {
        return $this->tipoConsulta;
    }

    public function setTipoConsulta(string $tipoConsulta): self
    {
        $this->tipoConsulta = $tipoConsulta;

        return $this;
    }

    public function getArancel(): ?float
    {
        return $this->arancel;
    }

    public function setArancel(float $arancel): self
    {
        $this->arancel = $arancel;

        return $this;
    }


}
