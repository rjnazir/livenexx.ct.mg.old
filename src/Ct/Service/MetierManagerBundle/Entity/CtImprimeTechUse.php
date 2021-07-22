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
     * @ORM\ManyToOne(targetEntity="CtBordereau", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_bordereau_id", referencedColumnName="id", nullable=false)
     * })
     * 
     */
    private $ctBordereau;

    /**
     * @var \CtCentre
     *
     * @ORM\ManyToOne(targetEntity="CtCentre", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_centre_id", referencedColumnName="id", nullable=false)
     * })
     * 
     */
    private $ctCentre;

    /**
     * @var \CtImprimeTech
     * 
     * @ORM\ManyToOne(targetEntity="CtImprimeTech", cascade={"persist"})
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="ct_imprime_tech_id", referencedColumnName="id", nullable=false)
     * })
     * 
     */
    private $ctImprimeTech;

    /**
     * @var integer
     *
     * @ORM\Column(name="ct_controle_id", type="integer")
     */
    private $ctControle;

    /**
     * @var \CtUser
     * 
     * @ORM\ManyToOne(targetEntity="Ct\Service\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_user_id", referencedColumnName="id", nullable=false)
     * })
     * 
     */
    private $ctUser;

    /**
     * @var int
     *
     * @ORM\Column(name="itu_numero", type="integer")
     */
    private $ituNumero;

    /**
     * @var bool
     *
     * @ORM\Column(name="itu_used", type="boolean")
     */
    private $ituUsed;

    /**
     * @var string
     *
     * @ORM\Column(name="itu_motif_used", type="string", length=64)
     */
    private $ituMotifUsed;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
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
     */
    public function setItuCtBordereau(\Ct\Service\MetierManagerBundle\Entity\CtBordereau $ctBordereau = null)
    {
        $this->ctBordereau = $ctBordereau;

        return $this;
    }

    /**
     * Get ctBordereau
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtBordereau
     */
    public function getItuCtBordereau()
    {
        return $this->ctBordereau;
    }

    /**
     * Set ctCentre
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre
     *
     * @return CtImprimeTechUse
     */
    public function setItuCtCentre(\Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre = null)
    {
        $this->ctCentre = $ctCentre;

        return $this;
    }

    /**
     * Get ctCentre
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtCentre
     */
    public function getItuCtCentre()
    {
        return $this->ctCentre;
    }

    /**
     * Set ctImprimeTech
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $ctImprimeTech
     *
     * @return CtImprimeTechUse
     */
    public function setItuCtImprimeTech(\Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $ctImprimeTech = null)
    {
        $this->ctImprimeTech = $ctImprimeTech;

        return $this;
    }

    /**
     * Get ctImprimeTech
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtImprmeTech
     */
    public function getItuCtImprimeTech()
    {
        return $this->ctImprimeTech;
    }

    /**
     * Set ctControle
     *
     * @param integer $ctControle
     *
     * @return CtImprimeTechUse
     */
    public function setItuCtControle($ctControle)
    {
        $this->ctControle = $ctControle;

        return $this;
    }

    /**
     * Get ctControle
     *
     * @return integer
     */
    public function getItuCtControle()
    {
        return $this->ctControle;
    }

    /**
     * Set ctUser
     *
     * @param integer $ctUser
     *
     * @return CtImprimeTechUse
     */
    public function setItuCtUser($ctUser)
    {
        $this->ctUser = $ctUser;

        return $this;
    }

    /**
     * Get ctUser
     *
     * @return int
     */
    public function getItuCtUser()
    {
        return $this->ctUser;
    }

    /**
     * Set ituNumero
     *
     * @param integer $ituNumero
     *
     * @return CtImprimeTechUse
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
     */
    public function getItuUpdatedAt()
    {
        return $this->updatedAt;
    }
}

