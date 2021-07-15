<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtBordereau;

use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;

class ServiceMetierCtBordereau
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
     * Récuperer le repository bordereau
     * @return array
     */
    public function getRepository()
    {
        return $this->_entity_manager->getRepository(EntityName::CT_BORDEREAU);
    }

    /**
     * Récuperer tout les bordereaux
     * @return array
     */
    public function getAllCtBordereau()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Récuperer tout les bordereau par ordre
     * @param array $_order
     * @return array
     */
    public function getAllCtBordereauByOrder($_order)
    {
        return $this->getRepository()->findBy(array(), $_order);
    }

    /**
     * Récuperer un bordereau par identifiant
     * @param Integer $_id
     * @return array
     */
    public function getCtBordereauById($_id)
    {
        return $this->getRepository()->find($_id);
    }

    /**
     * Enregistrer un bordereau
     * @param Entity $_bordereau
     * @param string $_action
     * @return boolean
     */
    public function saveCtBordereau($_bordereau, $_action)
    {
        // Récuperer ID utilisateur
        $ct_user_id = $this->_container->get('security.token_storage')->getToken()->getUser();
        $_bordereau->setCtUser($ct_user_id);
        // Date de modification
        $_bordereau->setBlUpdatedAt(new \DateTime());

        if ($_action == 'new') {
            // Date de création
            $_bordereau->setBlCreatedAt(new \DateTime());
            // Date de modification
            $_bordereau->setBlUpdatedAt(NULL);
            $this->_entity_manager->persist($_bordereau);
        }
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Supprimer un bordereau
     * @param Entity $_bordereau
     * @return boolean
     */
    public function deleteCtBordereau($_bordereau)
    {
        $this->_entity_manager->remove($_bordereau);
        $this->_entity_manager->flush();

        return true;
    }

    /**
     * Suppression multiple d'un bordereau
     * @param array $_ids
     * @return boolean
     */
    public function deleteGroupCtBordereau($_ids)
    {
        if (count($_ids)) {
            foreach ($_ids as $_id) {
                $_bordereau = $this->getCtBordereauById($_id);
                $this->deleteCtBordereau($_bordereau);
            }
        }

        return true;
    }

    /**
     *  Récupérer un bordereau par son numéro
     *  @param  $_bl_numero : Nom imprimé tech
     *  @return $_bordereau : Liste imprimés tech dans le bordereau array()
     */
    public function getCtBordereauByNumero($_bl_numero)
    {
        $_entity_bl = EntityName::CT_BORDEREAU;


        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE t.blNumero = ?1";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter(1, '%'.$_bl_numero.'%');
        $_ret = $_query->getResult();
        if (count($_ret) > 0 && is_array($_ret))
            return $_ret[0];
        return $_ret;
    }

    /**
     *  Récupérer un bordereau par le centre de destination et son numéro
     *  @param  $_ct_centre_id : ID du centre destinataire
     *  @param  $_bl_numero : N° début de l'imprimé tech
     *  @return $_bordereau : Liste imprimés tech dans le bordereau array()
     */
    public function getListInBordereau($_ct_centre_id, $_bl_numero)
    {
        $_entity_bl = EntityName::CT_BORDEREAU;

        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre = ?1
                        AND t.blNumero = ?2";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter(1, '%'.$_ct_centre_id.'%');
        $_query->setParameter(2, '%'.$_bl_numero.'%');
        $_ret = $_query->getResult();
        if (count($_ret) > 0 && is_array($_ret))
            return $_ret[0];
        return $_ret;
    }
}
