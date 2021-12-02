<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtImprimeTechUse
 *
 * @ORM\Table(
 *  name="ct_imprime_tech_use",
 *  indexes={
 *      @ORM\Index(name="fk_ct_itu_ct_bordereau_idx", columns={"ct_bordereau_id"}),
 *      @ORM\Index(name="fk_ct_itu_ct_centre_idx", columns={"ct_centre_id"}),
 *      @ORM\Index(name="fk_ct_itu_ct_imprime_tech_idx", columns={"ct_imprime_tech_id"}),
 *      @ORM\Index(name="fk_ct_itu_ct_controle_idx", columns={"ct_controle_id"}),
 *      @ORM\Index(name="fk_ct_itu_ct_user_idx", columns={"ct_user_id"}),
 * })
 * )
 * @ORM\Entity
 */
class CtImprimeTechUse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \CtBordereau
     *
     * @ORM\ManyToOne(targetEntity="Ct\Service\MetierManagerBundle\Entity\CtBordereau")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_bordereau_id", referencedColumnName="id")
     * })
     * 
     */
    private $ctBordereau;

    /**
     * @var \CtCentre
     *
     * @ORM\ManyToOne(targetEntity="CtCentre")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_centre_id", referencedColumnName="id")
     * })
     * 
     */
    private $ctCentre;

    /**
     * @var \CtImprimeTech
     * 
     * @ORM\ManyToOne(targetEntity="CtImprimeTech")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_imprime_tech_id", referencedColumnName="id")
     * })
     * 
     */
    private $ctImprimeTech;

    /**
     * @var integer
     *
     * @ORM\Column(name="ct_controle_id", type="integer", nullable=true)
     */
    private $ctControle;

    /**
     * @var \CtUser
     * 
     * @ORM\ManyToOne(targetEntity="Ct\Service\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_user_id", referencedColumnName="id")
     * })
     * 
     */
    private $ctUser;

    /**
     * @var int
     *
     * @ORM\Column(name="itu_numero", type="integer", nullable=true)
     */
    private $ituNumero;

    /**
     * @var bool
     *
     * @ORM\Column(name="itu_used", type="boolean", nullable=true)
     */
    private $ituUsed;

    /**
     * @var string
     *
     * @ORM\Column(name="itu_motif_used", type="string", length=64, nullable=true)
     */
    private $ituMotifUsed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;


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
     * Set ctBordereau
     * 
     * @param \Ct\Service\MetierManagerBundle\Entity\CtBordereau $ctBordereau
     * 
     * @return CtImprimeTechUse
     * 
     */

    public function setCtBordereau(\Ct\Service\MetierManagerBundle\Entity\CtBordereau $ctBordereau = null)
    {
        $this->ctBordereau = $ctBordereau;
        
        return $this;
    }

    /**
     * Get ctBordereau
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtBordereau
     */
    public function getCtBordereau()
    {
        return $this->ctBordereau;
    }

    /**
     * Set ctCentre
     * 
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre
     * 
     * @return CtImprimeTechUse
     * 
     */

    public function setCtCentre(\Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre = null)
    {
        $this->ctCentre = $ctCentre;

        return $this;
    }

    /**
     * Get ctCentre
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtCentre
     * 
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
     * @return CtImprimeTechUse
     * 
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
     * 
     */
    public function getCtImprimeTech()
    {
        return $this->ctImprimeTech;
    }

    /**
     * Set ctControle
     *
     * @param integer $ctControle
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setCtControle($ctControle)
    {
        $this->ctControle = $ctControle;

        return $this;
    }

    /**
     * Get ctControle
     *
     * @return integer
     * 
     */
    public function getCtControle()
    {
        return $this->ctControle;
    }

    /**
     * Set ctUser
     *
     * @param \Ct\Service\UserBundle\Entity\User $ctUser
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setCtUser(\Ct\Service\UserBundle\Entity\User $ctUser = null)
    {
        $this->ctUser = $ctUser;

        return $this;
    }

    /**
     * Get ctUser
     *
     * @return int
     * 
     */
    public function getCtUser()
    {
        return $this->ctUser;
    }

    /**
     * Set ituNumero
     *
     * @param integer $ituNumero
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setItuNumero($ituNumero)
    {
        $this->ituNumero = $ituNumero;

        return $this;
    }

    /**
     * Get ituNumero
     *
     * @return int
     * 
     */
    public function getItuNumero()
    {
        return $this->ituNumero;
    }

    /**
     * Set ituUsed
     *
     * @param boolean $ituUsed
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setItuUsed($ituUsed)
    {
        $this->ituUsed = $ituUsed;

        return $this;
    }

    /**
     * Get ituUsed
     *
     * @return bool
     * 
     */
    public function getItuUsed()
    {
        return $this->ituUsed;
    }

    /**
     * Set ituMotifUsed
     *
     * @param string $ituMotifUsed
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setItuMotifUsed($ituMotifUsed)
    {
        $this->ituMotifUsed = $ituMotifUsed;

        return $this;
    }

    /**
     * Get ituMotifUsed
     *
     * @return string
     * 
     */
    public function getItuMotifUsed()
    {
        return $this->ituMotifUsed;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setItuCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     * 
     */
    public function getItuCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param string $updatedAt
     *
     * @return CtImprimeTechUse
     * 
     */
    public function setItuUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return string
     * 
     */
    public function getItuUpdatedAt()
    {
        return $this->updatedAt;
    }
}

