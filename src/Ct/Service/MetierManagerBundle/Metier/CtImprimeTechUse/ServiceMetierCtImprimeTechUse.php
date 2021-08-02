<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtImprimeTechUse;

use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;
use DateTime;
use Ct\Service\UserBundle\Entity\User;

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
     * Récuperer tout imprimés techniques non utilisés trié par numéro croissant
     * @return array
     */
    public function getAllCtImprimeTechNoUsedOrder()
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();

        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre = :ct_centre_id
                            AND t.ituUsed = :itu_Used
                            ORDER BY t.ituNumero ASC
                    ";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('itu_Used', 0);
        $_result = $_query->getResult();

        return $_result;
    }

    /**
     * Récuperer tout les utilisations d'imprimé technique pour le centre en cours 
     * @return array
     */
    public function getAllCtImprimeTechUsedByCentre()
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();

        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre = :ct_centre_id
                            AND t.ituMotifUsed != :ituMotifUsed
                            AND t.ituUsed = :ituUsed
                            AND t.updatedAt LIKE :updatedAt
                    ";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ituUsed', TRUE);
        $_query->setParameter('ituMotifUsed', "");
        $_date = new \DateTime();
        $_date = $_date->format('Y-m-d');
        $_query->setParameter('updatedAt', $_date.'%');
        $_result = $_query->getResult();

        return $_result;
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
     * @param integer $_id
     * @return boolean
     */
    public function saveCtImprimeTechUse($_imprime_tech_use, $_action, $_id)
    {
        // Récuperer ID utilisateur
        
        $_user_connected = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_imprime_tech_use->setCtUser($_user_connected);

        // Affecter 1 au itu_used si itu_motif_used est different de vide
        $ituMotifUsed = $_imprime_tech_use->getItuMotifUsed();
        if(!empty($ituMotifUsed))
            $_imprime_tech_use->setItuUsed(TRUE);
        if(!empty($ituMotifUsed) && ($ituMotifUsed == "Rébus"))
            $_imprime_tech_use->setCtControle(NULL);
        // Date de modification
        $_imprime_tech_use->setItuUpdatedAt(new \DateTime());

        if (is_null($_id)){
            if ($_action == 'new') {
                // Date de création
                $_imprime_tech_use->setItuCreatedAt(new \DateTime());
                // Date de modification
                $_imprime_tech_use->setItuUpdatedAt(NULL);
                $this->_entity_manager->persist($_imprime_tech_use);
            } else if ($_action == 'reset') {
                $_imprime_tech_use->setCtControle(NULL);
                $_imprime_tech_use->setItuUsed(0);
                $_imprime_tech_use->setItuMotifUsed(NULL);
                $_imprime_tech_use->setItuUpdatedAt(NULL);
                $this->_entity_manager->persist($_imprime_tech_use);
            }
        }else{
            if($_action == 'Visite' || $_action == 'Contre' || $_action == 'Réception' || $_action == 'Constatation')
            {
                $_imprime_tech_use->setCtControle($_id);
                $_imprime_tech_use->setItuUsed(TRUE);
                $_imprime_tech_use->setItuMotifUsed($_action);
                $_imprime_tech_use->setItuUpdatedAt(new DateTime());
                $this->_entity_manager->persist($_imprime_tech_use);
            }
        }
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Enregistrer une utilisation d'imprimé technique
     * @param \Ct\Service\MetierManagerBundle\Entity\CtBordereau $_ct_bordereau_id
     * @param \Ct\Service\MetierManagerBundle\Entity\CtCentre $_ct_centre_id
     * @param \Ct\Service\MetierManagerBundle\Entity\CtImprimeTech $_ct_imprime_tech_id
     * @param integer $_itu_numero
     * @return boolean
     */
    public function save_CtImprimeTechUse($_ct_bordereau_id, $_ct_centre_id, $_ct_imprime_tech_id, $_itu_numero)
    {
        // Récuperer ID utilisateur
        $_ct_user_id = $this->_container->get('security.token_storage')->getToken()->getUser();

        $ImprimeTechUse = new CtImprimeTechUse();
        $ImprimeTechUse->setCtBordereau($_ct_bordereau_id);
        $ImprimeTechUse->setCtCentre($_ct_centre_id);
        $ImprimeTechUse->setCtImprimeTech($_ct_imprime_tech_id);
        $ImprimeTechUse->setCtControle(NULL);
        $ImprimeTechUse->setCtUser($_ct_user_id);
        $ImprimeTechUse->setItuNumero($_itu_numero);
        $ImprimeTechUse->setItuUsed(0);
        $ImprimeTechUse->setItuMotifUsed(NULL);
        $ImprimeTechUse->setItuCreatedAt(new \DateTime());
        $ImprimeTechUse->setItuUpdatedAt(NULL);
        $this->_entity_manager->persist($ImprimeTechUse);
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

    /**
     *  Récupérer les utilisations d'imprimé technique par son numéro controle technique
     *  @param  $_numero : Numéro controle technique
     *  @return $_imprime_tech_use : Utilisation imprimés tech array()
     */
    public function getCtImprimeTechUseByCtControle($_numero)
    {
        $_entity_bl = EntityName::CT_IMPRIME_TECH_USE;

        $_sql   = " SELECT t
                    FROM $_entity_bl t 
                    WHERE t.ctControle = :i_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('i_numero', $_numero);
        $_ret = $_query->getResult();
        return $_ret;
    }

    /**
     * Récupérer liste json numéro d'immatriculation
     * @param integer $_ct_imprime_tech_id
     * @param integer $_itu_numero
     * @return array
     */
    public function getListNumeroIT($_ct_imprime_tech_id, $_itu_numero){
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();

        $_sql   = " SELECT  t
                    FROM    $_entity_itu t 
                    WHERE       t.ctCentre      =       :ct_centre_id
                            AND t.ctImprimeTech =       :ct_imprime_tech_id
                            AND t.ituNumero     LIKE    :itu_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
        $_query->setParameter('itu_numero', $_itu_numero);
        $_ret = $_query->getResult();
        if (count($_ret) > 0 && is_array($_ret))
            return $_ret[0];
        return $_ret;
    }
}
