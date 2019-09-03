<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

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
<<<<<<< HEAD
=======
     * @var int
     *
     * @ORM\Column(name="id_tconsulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTconsulta;

    /**
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
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

<<<<<<< HEAD
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tconsulta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTconsulta;


}

=======
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
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
