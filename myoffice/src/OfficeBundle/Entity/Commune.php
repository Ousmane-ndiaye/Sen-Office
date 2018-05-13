<?php

namespace OfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="Commune", indexes={@ORM\Index(name="idDepartement", columns={"idDepartement"})})
 * @ORM\Entity
 */
class Commune
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCommune", type="string", length=50, nullable=false)
     */
    private $nomcommune;

    /**
     * @var \OfficeBundle\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="id")
     * })
     */
    private $iddepartement;


}

