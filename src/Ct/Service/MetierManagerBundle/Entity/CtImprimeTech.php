<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 *  CtImprimeTech
 *
 *  @ORM\Table(name="ct_imprime_tech")
 *  @ORM\Entity
 *  @UniqueEntity(
 *      fields = {"nomImprimeTech"},
 *      errorPath = "nomImprimeTech",
 *      message = "Cet imprimé est déjà dans la liste."
 *  )
 */
class CtImprimeTech
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_imprime_tech", type="string", length=128, nullable=false, unique=true)
     */
    private $nomImprimeTech;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomImprimeTech
     *
     * @param string $nomImprimeTech
     *
     * @return CtImprimeTech
     */
    public function setNomImprimeTech($nomImprimeTech)
    {
        $this->nomImprimeTech = $nomImprimeTech;

        return $this;
    }

    /**
     * Get nomImprimeTech
     *
     * @return string
     */
    public function getNomImprimeTech()
    {
        return $this->nomImprimeTech;
    }
}
