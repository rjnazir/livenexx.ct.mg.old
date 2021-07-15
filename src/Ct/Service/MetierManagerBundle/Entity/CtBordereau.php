<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * CtBordereau
 * 
 * @ORM\Entity
 * @ORM\Table(
 *      name="ct_bordereau",
 *      uniqueConstraints={@ORM\UniqueConstraint(columns={"bl_debut_numero", "ct_centre_id", "ct_imprime_tech_id"})}
 * )
 * @UniqueEntity(
 *      fields={"blDebutNumero", "ctCentre", "ctImprimeTech"},
 *      message="L'imprimé technique portant ce numéro est déjà dans ce bordereau."
 * )
 * 
 */

 class CtBordereau
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blCreatedAt = new \DateTime();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bl_numero", type="string", length=64, nullable=false)
     */
    private $blNumero;

    /**
     * @var int
     *
     * @ORM\Column(name="bl_debut_numero", type="integer")
     */
    private $blDebutNumero;

    /**
     * @var int
     *
     * @ORM\Column(name="bl_fin_numero", type="integer")
     */
    private $blFinNumero;

    /**
     * @var \CtCentre
     *
     * @ORM\ManyToOne(
     *  targetEntity="Ct\Service\MetierManagerBundle\Entity\CtCentre",
     *  inversedBy="ct_centre"
     * )
     * @ORM\JoinColumn(
     *  name="ct_centre_id",
     *  referencedColumnName="id",
     *  nullable=false
     * )
     * 
     */
    private $ctCentre;

    /**
     * @var \CtImprimeTech
     * 
     * @ORM\ManyToOne(
     *  targetEntity="Ct\Service\MetierManagerBundle\Entity\CtImprimeTech",
     *  inversedBy="ct_imprime_tech"
     * )
     * @ORM\JoinColumn(
     *  name="ct_imprime_tech_id",
     *  referencedColumnName="id",
     *  nullable=false
     * )
     * 
     */
    private $ctImprimeTech;

    /**
     * @var \CtUser
     * 
     * @ORM\ManyToOne(targetEntity="Ct\Service\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_user_id", referencedColumnName="id")
     * })
     */
    private $ctUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bl_created_at", type="datetime", nullable=true)
     */
    private $blCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bl_updated_at", type="datetime", nullable=true)
     */
    private $blUpdatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set blNumero
     *
     * @param string $blNumero
     *
     * @return CtBordereau
     */
    public function setBlNumero($blNumero)
    {
        $this->blNumero = $blNumero;

        return $this;
    }

    /**
     * Get blNumero
     *
     * @return string
     */
    public function getBlNumero()
    {
        return $this->blNumero;
    }

    /**
     * Set ctCentre
     *
     * @param integer $ctCentre
     *
     * @return CtBordereau
     */
    public function setCtCentre($ctCentre)
    {
        $this->ctCentre = $ctCentre;

        return $this;
    }

    /**
     * Get ctCentre
     *
     * @return int
     */
    public function getCtCentre()
    {
        return $this->ctCentre;
    }

    /**
     * Set ctImprimeTech
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $ctImprimeTech
     *
     * @return CtBordereau
     */
    public function setCtImprimeTech(\Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $ctImprimeTech = null)
    {
        $this->ctImprimeTech = $ctImprimeTech;

        return $this;
    }

    /**
     * Get ctImprimeTech
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtImprmeTech
     */
    public function getCtImprimeTech()
    {
        return $this->ctImprimeTech;
    }

    /**
     * Set ctUser
     *
     * @param \Ct\Service\UserBundle\Entity\User $ctUser
     *
     * @return CtBordereau
     */
    public function setCtUser(\Ct\Service\UserBundle\Entity\User $ctUser = null)
    {
        $this->ctUser = $ctUser;

        return $this;
    }

    /**
     * Get ctUser
     *
     * @return \Ct\Service\UserBundle\Entity\User
     */
    public function getCtUser()
    {
        return $this->ctUser;
    }

    /**
     * Set blDebutNumero
     *
     * @param integer $blDebutNumero
     *
     * @return CtBordereau
     */
    public function setBlDebutNumero($blDebutNumero)
    {
        $this->blDebutNumero = $blDebutNumero;

        return $this;
    }

    /**
     * Get blDebutNumero
     *
     * @return int
     */
    public function getBlDebutNumero()
    {
        return $this->blDebutNumero;
    }

    /**
     * Set blFinNumero
     *
     * @param integer $blFinNumero
     *
     * @return CtBordereau
     */
    public function setBlFinNumero($blFinNumero)
    {
        $this->blFinNumero = $blFinNumero;

        return $this;
    }

    /**
     * Get blFinNumero
     *
     * @return int
     */
    public function getBlFinNumero()
    {
        return $this->blFinNumero;
    }

    /**
     * Set blCreatedAt
     *
     * @param \DateTime $blCreatedAt
     *
     * @return CtBordereau
     */
    public function setBlCreatedAt($blCreatedAt)
    {
        $this->blCreatedAt = $blCreatedAt;

        return $this;
    }

    /**
     * Get blCreatedAt
     *
     * @return \DateTime
     */
    public function getBlCreatedAt()
    {
        return $this->blCreatedAt;
    }

    /**
     * Set blUpdatedAt
     *
     * @param \DateTime $blUpdatedAt
     *
     * @return CtBordereau
     */
    public function setBlUpdatedAt($blUpdatedAt)
    {
        $this->blUpdatedAt = $blUpdatedAt;

        return $this;
    }

    /**
     * Get blUpdatedAt
     *
     * @return \DateTime
     */
    public function getBlUpdatedAt()
    {
        return $this->blUpdatedAt;
    }
}

