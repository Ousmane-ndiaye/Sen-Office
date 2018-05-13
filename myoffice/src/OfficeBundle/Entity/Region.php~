<?php

namespace OfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="Region", indexes={@ORM\Index(name="idPays", columns={"idPays"})})
 * @ORM\Entity
 */
class Region
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
     * @ORM\Column(name="nomRegion", type="string", length=50, nullable=false)
     */
    private $nomregion;

    /**
     * @var \OfficeBundle\Entity\Pays
     *
     * @ORM\ManyToOne(targetEntity="OfficeBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPays", referencedColumnName="id")
     * })
     */
    private $idpays;


}

