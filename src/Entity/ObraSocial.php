<?php

<<<<<<< HEAD
namespace AppBundle\Entity;

=======
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
use Doctrine\ORM\Mapping as ORM;

/**
 * ObraSocial
 *
 * @ORM\Table(name="obra_social")
 * @ORM\Entity
 */
class ObraSocial
{
    /**
<<<<<<< HEAD
     * @var string
=======
     * @var int
     *
     * @ORM\Column(name="id_obsoc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObsoc;

    /**
     * @var string|null
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     *
     * @ORM\Column(name="obra_social", type="string", length=100, nullable=true)
     */
    private $obraSocial;

    /**
     * @var float
     *
     * @ORM\Column(name="diferenciado", type="float", precision=10, scale=0, nullable=false)
     */
    private $diferenciado;

    /**
<<<<<<< HEAD
     * @var integer
     *
     * @ORM\Column(name="id_obsoc", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObsoc;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Profesional", mappedBy="idObsoc")
=======
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Profesional", mappedBy="idObsoc")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     */
    private $idProfesional;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProfesional = new \Doctrine\Common\Collections\ArrayCollection();
    }

<<<<<<< HEAD
}

=======
    public function getIdObsoc(): ?int
    {
        return $this->idObsoc;
    }

    public function getObraSocial(): ?string
    {
        return $this->obraSocial;
    }

    public function setObraSocial(?string $obraSocial): self
    {
        $this->obraSocial = $obraSocial;

        return $this;
    }

    public function getDiferenciado(): ?float
    {
        return $this->diferenciado;
    }

    public function setDiferenciado(float $diferenciado): self
    {
        $this->diferenciado = $diferenciado;

        return $this;
    }

    /**
     * @return Collection|Profesional[]
     */
    public function getIdProfesional(): Collection
    {
        return $this->idProfesional;
    }

    public function addIdProfesional(Profesional $idProfesional): self
    {
        if (!$this->idProfesional->contains($idProfesional)) {
            $this->idProfesional[] = $idProfesional;
            $idProfesional->addIdObsoc($this);
        }

        return $this;
    }

    public function removeIdProfesional(Profesional $idProfesional): self
    {
        if ($this->idProfesional->contains($idProfesional)) {
            $this->idProfesional->removeElement($idProfesional);
            $idProfesional->removeIdObsoc($this);
        }

        return $this;
    }

}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
