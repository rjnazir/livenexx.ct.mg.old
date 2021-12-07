<?php

namespace Ct\Service\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Users
 *
 * @ORM\Table(name="ct_user", uniqueConstraints={@ORM\UniqueConstraint(name="username_canonical_UNIQUE", columns={"username_canonical"}), @ORM\UniqueConstraint(name="email_canonical_UNIQUE", columns={"email_canonical"}), @ORM\UniqueConstraint(name="confirmation_token_UNIQUE", columns={"confirmation_token"})})
 * @ORM\Entity()
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_name", type="string", length=255, nullable=true)
     */
    private $usrName;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_email", type="string", length=255, nullable=true)
     */
    private $usrEmail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_locked", type="boolean", nullable=true)
     */
    private $usrLocked;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_password", type="string", length=255, nullable=true)
     */
    private $usrPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_adresse", type="string", length=255, nullable=true)
     */
    private $usrAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_token", type="string", length=100, nullable=true)
     */
    private $usrToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_created_at", type="datetime", nullable=true)
     */
    private $usrCreatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="usr_updated_at", type="datetime", nullable=true)
     */
    private $usrUpdatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_locked_update", type="boolean", nullable=true)
     */
    private $usrLockedUpdate = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_request_update", type="boolean", nullable=false)
     */
    private $usrRequestUpdate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="usr_profession", type="string", length=255, nullable=true)
     */
    private $usrProfession;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_telephone", type="string", length=45, nullable=true)
     */
    private $usrTelephone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_is_connected", type="boolean", nullable=true)
     */
    private $usrIsConnected = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_presence", type="boolean", nullable=true)
     */
    private $usrPresence;

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
     * @var \CtRole
     *
     * @ORM\ManyToOne(targetEntity="Ct\Service\MetierManagerBundle\Entity\CtRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ct_role_id", referencedColumnName="id")
     * })
     */
    private $ctRole;


    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->usrCreatedAt = new \DateTime();
        $this->enabled      = 1;
    }

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
     * Set usrName
     *
     * @param string $usrName
     *
     * @return User
     */
    public function setUsrName($usrName)
    {
        $this->usrName = $usrName;

        return $this;
    }

    /**
     * Get usrName
     *
     * @return string
     */
    public function getUsrName()
    {
        return $this->usrName;
    }

    /**
     * Set usrEmail
     *
     * @param string $usrEmail
     *
     * @return User
     */
    public function setUsrEmail($usrEmail)
    {
        $this->usrEmail = $usrEmail;

        return $this;
    }

    /**
     * Get usrEmail
     *
     * @return string
     */
    public function getUsrEmail()
    {
        return $this->usrEmail;
    }

    /**
     * Set usrLocked
     *
     * @param boolean $usrLocked
     *
     * @return User
     */
    public function setUsrLocked($usrLocked)
    {
        $this->usrLocked = $usrLocked;

        return $this;
    }

    /**
     * Get usrLocked
     *
     * @return boolean
     */
    public function getUsrLocked()
    {
        return $this->usrLocked;
    }

    /**
     * Set usrPassword
     *
     * @param string $usrPassword
     *
     * @return User
     */
    public function setUsrPassword($usrPassword)
    {
        $this->usrPassword = $usrPassword;

        return $this;
    }

    /**
     * Get usrPassword
     *
     * @return string
     */
    public function getUsrPassword()
    {
        return $this->usrPassword;
    }

    /**
     * Set usrAdresse
     *
     * @param string $usrAdresse
     *
     * @return User
     */
    public function setUsrAdresse($usrAdresse)
    {
        $this->usrAdresse = $usrAdresse;

        return $this;
    }

    /**
     * Get usrAdresse
     *
     * @return string
     */
    public function getUsrAdresse()
    {
        return $this->usrAdresse;
    }

    /**
     * Set usrToken
     *
     * @param string $usrToken
     *
     * @return User
     */
    public function setUsrToken($usrToken)
    {
        $this->usrToken = $usrToken;

        return $this;
    }

    /**
     * Get usrToken
     *
     * @return string
     */
    public function getUsrToken()
    {
        return $this->usrToken;
    }

    /**
     * Set usrCreatedAt
     *
     * @param \DateTime $usrCreatedAt
     *
     * @return User
     */
    public function setUsrCreatedAt($usrCreatedAt)
    {
        $this->usrCreatedAt = $usrCreatedAt;

        return $this;
    }

    /**
     * Get usrCreatedAt
     *
     * @return \DateTime
     */
    public function getUsrCreatedAt()
    {
        return $this->usrCreatedAt;
    }

    /**
     * Set usrUpdatedAt
     *
     * @param \DateTime $usrUpdatedAt
     *
     * @return User
     */
    public function setUsrUpdatedAt($usrUpdatedAt)
    {
        $this->usrUpdatedAt = $usrUpdatedAt;

        return $this;
    }

    /**
     * Get usrUpdatedAt
     *
     * @return \DateTime
     */
    public function getUsrUpdatedAt()
    {
        return $this->usrUpdatedAt;
    }

    /**
     * Set usrLockedUpdate
     *
     * @param boolean $usrLockedUpdate
     *
     * @return User
     */
    public function setUsrLockedUpdate($usrLockedUpdate)
    {
        $this->usrLockedUpdate = $usrLockedUpdate;

        return $this;
    }

    /**
     * Get usrLockedUpdate
     *
     * @return boolean
     */
    public function getUsrLockedUpdate()
    {
        return $this->usrLockedUpdate;
    }

    /**
     * Set usrRequestUpdate
     *
     * @param boolean $usrRequestUpdate
     *
     * @return User
     */
    public function setUsrRequestUpdate($usrRequestUpdate)
    {
        $this->usrRequestUpdate = $usrRequestUpdate;

        return $this;
    }

    /**
     * Get usrRequestUpdate
     *
     * @return boolean
     */
    public function getUsrRequestUpdate()
    {
        return $this->usrRequestUpdate;
    }

    /**
     * Set usrProfession
     *
     * @param string $usrProfession
     *
     * @return User
     */
    public function setUsrProfession($usrProfession)
    {
        $this->usrProfession = $usrProfession;

        return $this;
    }

    /**
     * Get usrProfession
     *
     * @return string
     */
    public function getUsrProfession()
    {
        return $this->usrProfession;
    }

    /**
     * Set usrTelephone
     *
     * @param string $usrTelephone
     *
     * @return User
     */
    public function setUsrTelephone($usrTelephone)
    {
        $this->usrTelephone = $usrTelephone;

        return $this;
    }

    /**
     * Get usrTelephone
     *
     * @return string
     */
    public function getUsrTelephone()
    {
        return $this->usrTelephone;
    }

    /**
     * Set usrIsConnected
     *
     * @param boolean $usrIsConnected
     *
     * @return User
     */
    public function setUsrIsConnected($usrIsConnected)
    {
        $this->usrIsConnected = $usrIsConnected;

        return $this;
    }

    /**
     * Get usrIsConnected
     *
     * @return boolean
     */
    public function getUsrIsConnected()
    {
        return $this->usrIsConnected;
    }

    /**
     * Set usrPresence
     *
     * @param boolean $usrPresence
     *
     * @return User
     */
    public function setUsrPresence($usrPresence)
    {
        $this->usrPresence = $usrPresence;

        return $this;
    }

    /**
     * Get usrPresence
     *
     * @return boolean
     */
    public function getUsrPresence()
    {
        return $this->usrPresence;
    }

    /**
     * Set ctRole
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtRole $ctRole
     *
     * @return User
     */
    public function setCtRole(\Ct\Service\MetierManagerBundle\Entity\CtRole $ctRole = null)
    {
        $this->ctRole = $ctRole;

        return $this;
    }

    /**
     * Get ctRole
     *
     * @return \Ct\Service\MetierManagerBundle\Entity\CtRole
     */
    public function getCtRole()
    {
        return $this->ctRole;
    }

    /**
     * Set ctCentre
     *
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre
     *
     * @return User
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
}
