<?php

<<<<<<< HEAD
namespace AppBundle\Entity;
=======
namespace App\Entity;
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f

use Doctrine\ORM\Mapping as ORM;

/**
 * LibretaContacto
 *
<<<<<<< HEAD
 * @ORM\Table(name="libreta_contacto")
=======
 * @ORM\Table(name="libreta_contacto", indexes={@ORM\Index(name="libreta-domicilio_idx", columns={"id_domicilio"}), @ORM\Index(name="libreta-contacto_idx", columns={"id_tcontacto"})})
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
 * @ORM\Entity
 */
class LibretaContacto
{
    /**
<<<<<<< HEAD
     * @var string
     *
     * @ORM\Column(name="contacto", type="string", length=20, nullable=true)
     */
    private $contacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lcontacto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLcontacto;

    /**
     * @var \AppBundle\Entity\Tcontacto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tcontacto")
=======
     * @var int
     *
     * @ORM\Column(name="id_lcontacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLcontacto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contacto", type="string", length=20, nullable=true)
     */
    private $contacto;

    /**
     * @var \Tcontacto
     *
     * @ORM\ManyToOne(targetEntity="Tcontacto")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tcontacto", referencedColumnName="id_tcontacto")
     * })
     */
    private $idTcontacto;

    /**
<<<<<<< HEAD
     * @var \AppBundle\Entity\Domicilio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Domicilio")
=======
     * @var \Domicilio
     *
     * @ORM\ManyToOne(targetEntity="Domicilio")
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_domicilio", referencedColumnName="id_domicilio")
     * })
     */
    private $idDomicilio;

<<<<<<< HEAD

}

=======
    public function getIdLcontacto(): ?int
    {
        return $this->idLcontacto;
    }

    public function getContacto(): ?string
    {
        return $this->contacto;
    }

    public function setContacto(?string $contacto): self
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getIdTcontacto(): ?Tcontacto
    {
        return $this->idTcontacto;
    }

    public function setIdTcontacto(?Tcontacto $idTcontacto): self
    {
        $this->idTcontacto = $idTcontacto;

        return $this;
    }

    public function getIdDomicilio(): ?Domicilio
    {
        return $this->idDomicilio;
    }

    public function setIdDomicilio(?Domicilio $idDomicilio): self
    {
        $this->idDomicilio = $idDomicilio;

        return $this;
    }


}
>>>>>>> 56d43f100b1b9d91e49c77b142621638856dd76f
