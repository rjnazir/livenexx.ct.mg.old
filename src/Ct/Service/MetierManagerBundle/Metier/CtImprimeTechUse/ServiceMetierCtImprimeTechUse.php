<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtImprimeTechUse;

use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;
use Ct\Service\MetierManagerBundle\Utils\PathReportingName;
use PhpOffice\PhpWord\PhpWord;
use Ct\Service\MetierManagerBundle\Utils\ServiceName;

class ServiceMetierCtImprimeTechUse
{
    private $_entity_manager;
    private $_container;

    public function __construct(EntityManager $_entity_manager, Container $_container)
    {
        $this->_entity_manager = $_entity_manager;
        $this->_container      = $_container;
    }

    /**
     * Ajouter un message flash
     * @param string $_type
     * @param string $_message
     * @return mixed
     */
    public function setFlash($_type, $_message) {
        return $this->_container->get('session')->getFlashBag()->add($_type, $_message);
    }

    /**
     * Récuperer le repository utilisation d'imprimé technique
     * @return array
     */
    public function getRepository()
    {
        return $this->_entity_manager->getRepository(EntityName::CT_IMPRIME_TECH_USE);
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique
     * @return array
     */
    public function getAllCtImprimeTechUse()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique par ordre
     * @param array $_order
     * @return array
     */
    public function getAllCtImprimeTechUseOrder($_order)
    {
        return $this->getRepository()->findBy(array(), $_order);
    }

    /**
     * Récuperer une utilisation d'imprimé technique par identifiant
     * @param Integer $_id
     * @return array
     */
    public function getCtImprimeTechUseById($_id)
    {
        return $this->getRepository()->find($_id);
    }

    /**
     * Enregistrer une utilisation d'imprimé technique
     * @param Entity $_imprime_tech_use
     * @param string $_action
     * @return boolean
     */
    public function saveCtImprimeTechUse($_imprime_tech_use, $_action)
    {
        // Récuperer ID utilisateur
        $ct_user_id = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_imprime_tech_use->setItuCtUser($ct_user_id);
        // Date de modification
        $_imprime_tech_use->setItuUpdatedAt(new \DateTime());

        if ($_action == 'new') {
            // Date de création
            $_imprime_tech_use->setBlCreatedAt(new \DateTime());
            // Date de modification
            $_imprime_tech_use->setItuUpdatedAt(NULL);
            $this->_entity_manager->persist($_imprime_tech_use);
        }
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Supprimer une utilisation d'imprimé technique
     * @param Entity $_imprime_tech_use
     * @return boolean
     */
    public function deleteCtImprimeTechUse($_imprime_tech_use)
    {
        $this->_entity_manager->remove($_imprime_tech_use);
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Suppression multiple d'une utilisation d'imprimé technique
     * @param array $_ids
     * @return boolean
     */
    public function deleteGroupCtImprimeTechUse($_ids)
    {
        if (count($_ids)) {
            foreach ($_ids as $_id) {
                $_imprime_tech_use = $this->getCtImprimeTechUseById($_id);
                $this->deleteCtImprimeTechUse($_imprime_tech_use);
            }
        }

        return true;
    }

    /**
     *  Récupérer une utilisation d'imprimé technique par son numéro
     *  @param  $_numero : Nom imprimé tech
     *  @return $_imprime_tech_use : Utilisation imprimés tech array()
     */
    public function getCtImprimeTechUseByNumero($_numero)
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;


        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE t.ituNumero = ?1";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter(1, '%'.$_numero.'%');
        $_ret = $_query->getResult();
        return $_ret;
    }

}
