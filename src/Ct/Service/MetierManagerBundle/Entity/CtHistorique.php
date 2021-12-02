<?php

namespace Ct\Service\MetierManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtHistorique
 *
 * @ORM\Table(name="ct_historique")
 * @ORM\Entity
 */
class CtHistorique
{
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
     * @ORM\Column(name="hst_description", type="text")
     */
    private $hstDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hst_date_create", type="datetime")
     */
    private $hstDateCreate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hst_is_view", type="boolean", nullable=false)
     */
    private $hstIsView = false;

    /**
     * @var string
     *
     * @ORM\Column(name="hist_type", type="string", length=20, nullable=true)
     */
    private $hstType;

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
     * @var \CtCentre
     *
     * @ORM\ManyToOne(targetEntity="Ct\Service\MetierManagerBundle\Entity\CtCentre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_centre_id", referencedColumnName="id")
     * })
     */
    private $ctCentre;


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
     * Set hstDescription
     *
     * @param string $hstDescription
     *
     * @return CtHistorique
     */
    public function setHstDescription($hstDescription)
    {
        $this->hstDescription = $hstDescription;

        return $this;
    }

    /**
     * Get hstDescription
     *
     * @return string
     */
    public function getHstDescription()
    {
        return $this->hstDescription;
    }

    /**
     * Set hstDateCreate
     *
     * @param \DateTime $hstDateCreate
     *
     * @return CtHistorique
     */
    public function setHstDateCreate($hstDateCreate)
    {
        $this->hstDateCreate = $hstDateCreate;

        return $this;
    }

    /**
     * Get hstDateCreate
     *
     * @return \DateTime
     */
    public function getHstDateCreate()
    {
        return $this->hstDateCreate;
    }

    /**
     * Set hstIsView
     *
     * @param boolean $hstIsView
     *
     * @return CtHistorique
     */
    public function setHstIsView($hstIsView)
    {
        $this->hstIsView = $hstIsView;

        return $this;
    }

    /**
     * Get hstIsView
     *
     * @return boolean
     */
    public function getHstIsView()
    {
        return $this->hstIsView;
    }

    /**
     * Set ctUser
     *
     * @param \Ct\Service\UserBundle\Entity\User $ctUser
     *
     * @return CtHistorique
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
     * Set ctCentre
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre
     *
     * @return CtHistorique
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
     */
    public function getCtCentre()
    {
        return $this->ctCentre;
    }

    /**
     * Set hstType
     *
     * @param string $hstType
     *
     * @return CtHistorique
     */
    public function setHstType($hstType)
    {
        $this->hstType = $hstType;

        return $this;
    }

    /**
     * Get hstType
     *
     * @return string
     */
    public function getHstType()
    {
        return $this->hstType;
    }
}
