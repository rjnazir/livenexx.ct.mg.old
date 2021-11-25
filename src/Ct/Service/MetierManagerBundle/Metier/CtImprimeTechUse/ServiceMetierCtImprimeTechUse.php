<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtImprimeTechUse;

use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;
use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;
use DateTime;
use Ct\Service\UserBundle\Entity\User;
use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Utils\PathReportingName;
use PhpOffice\PhpWord\PhpWord;

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
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_ctr = EntityName::CT_CENTRE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();
        $_ct_centre_code = $_user_connected->getCtCentre()->getCtrCode();

        // $_sql   = "SELECT t FROM $_entity_bl t WHERE t.ctCentre = :ct_centre_id AND t.ituUsed = :itu_Used ORDER BY t.ituNumero ASC";
        $_sql   = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre IN (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code )
                            AND t.ituUsed = :itu_Used
                            ORDER BY t.ituNumero ASC";
        $_query  = $this->_entity_manager->createQuery($_sql);
        // $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_centre_code', $_ct_centre_code);
        $_query->setParameter('itu_Used', 0);
        // $_query->setMaxResults(1000);
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
                            ORDER BY t.updatedAt DESC";
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
        // Récuperer ID centre de l'utilisateur en cours
        $_ct_centre_id = $_user_connected->getCtCentre();
        $ctCentre = $_imprime_tech_use->getCtCentre();
        if ($_ct_centre_id !== $ctCentre)
            $_imprime_tech_use->setCtCentre($_ct_centre_id);
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

        // if($this->TestNumImprimeTech($_ct_imprime_tech_id, $_itu_numero) == false){
        $ImprimeTechUse = new CtImprimeTechUse();
        $ImprimeTechUse->setCtBordereau($_ct_bordereau_id);
        $ImprimeTechUse->setCtCentre($_ct_centre_id);
        $ImprimeTechUse->setCtImprimeTech($_ct_imprime_tech_id);
        $ImprimeTechUse->setCtControle(NULL);
        $ImprimeTechUse->setCtUser($_ct_user_id);
        $ImprimeTechUse->setItuNumero($_itu_numero);
        $ImprimeTechUse->setItuUsed(0);
        $ImprimeTechUse->setItuMotifUsed(NULL);
        $ImprimeTechUse->setItuCreatedAt(new DateTime());
        $ImprimeTechUse->setItuUpdatedAt(NULL);
        $this->_entity_manager->persist($ImprimeTechUse);
        $this->_entity_manager->flush();
        // }

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
        $_sql = "SELECT t FROM $_entity_bl t WHERE t.ituNumero = ?1";
        $_query = $this->_entity_manager->createQuery($_sql);
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
        $_sql = "SELECT t FROM $_entity_bl t WHERE t.ctControle = :i_numero";
        $_query = $this->_entity_manager->createQuery($_sql);
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
        $_entity_ctr= EntityName::CT_CENTRE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();
        $_ct_centre_code  = $_user_connected->getCtCentre()->getCtrCode();

        // $_sql = "SELECT t FROM $_entity_itu t WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprime_tech_id AND t.ituNumero LIKE :itu_numero";
        $_sql   = " SELECT  t
                    FROM    $_entity_itu t 
                    WHERE       t.ctCentre      IN      (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code )
                            AND t.ctImprimeTech =       :ct_imprime_tech_id
                            AND t.ituNumero     LIKE    :itu_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_centre_code', $_ct_centre_code);
        // $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_imprime_tech_id', $_ct_imprime_tech_id);
        $_query->setParameter('itu_numero', $_itu_numero);
        $_ret = $_query->getResult();
        if (count($_ret) > 0 && is_array($_ret))
            return $_ret[0];
        return $_ret;
    }

    /**
     *  Récuperer le numéro d'une imprimé technique utilisé spécifié
     *  @param $_ct_controle_id : integer
     *  @param $_type_it : string
     *  @return $_num_it : string
     */
    public function getNumITByControleAndTypeIT($_ct_controle_id, $_type_it, $_date){
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;
        $_num_it = '-';
        $_dql = " SELECT  itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE   itu.ctControle = :ct_controle_id
                                AND it.nomImprimeTech = :type_it
                                AND itu.updatedAt LIKE :updated_at";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_controle_id', $_ct_controle_id);
        $_query->setParameter('type_it', $_type_it);
        $_query->setParameter('updated_at', $_date.'%');
        $_res = $_query->getResult();
        foreach($_res as $_res){
            !empty($_res->getItuNumero()) ? $_num_it = $_res->getItuNumero() : $_num_it = '-';
        }
        return $_num_it;
    }

    /**
     *  Récuperer le numéro d'une imprimé technique utilisé spécifié
     *  @param $_ct_controle_id : integer
     *  @param $_type_it : string
     *  @return $_num_it : string
     */
    /* public function getNumITByControleAndTypeIT($_ct_controle_id, $_type_it){
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;
        $_num_it = '-';
        $_dql = " SELECT  itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE       itu.ctControle = :ct_controle_id
                                AND it.nomImprimeTech = :type_it";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_controle_id', $_ct_controle_id);
        $_query->setParameter('type_it', $_type_it);
        $_res = $_query->getResult();
        foreach($_res as $_res){
            !empty($_res->getItuNumero()) ? $_num_it = $_res->getItuNumero() : $_num_it = '-';
        }
        return $_num_it;
    }*/

    /**
     *  Récuperer tous les imprimés techniques utilisés par un centre dans une journée
     *  @param  $_centre : ID du centre exploitation
     *  @param  $_date : date d'exploitation
     *  @return $_result : array()
     */
    public function getAllITUsedInDaybyCentre($_centre, $_date)
    {
        $_date = implode('-',array_reverse  (explode('/', $_date)));
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        //===>>>
	$_dql = " SELECT    itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE   (itu.ituMotifUsed = :ct_itu_motif_used
                                AND itu.ctCentre = :ct_centre_id
                                AND itu.updatedAt LIKE :updated_at) 
                                OR (itu.ctCentre = :ct_centre_id
                                AND itu.updatedAt LIKE :updated_at
                                AND it.nomImprimeTech LIKE :type_it)
                        ORDER BY    itu.ituNumero ASC";
	//===>>>
        /*$_dql = " SELECT  itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE       itu.ctCentre     =       :ct_centre_id
                                AND itu.updatedAt    LIKE    :updated_at
                                AND it.nomImprimeTech    LIKE    :type_it
                        ORDER BY    itu.ituNumero    ASC";*/
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('type_it', '%PV%');
        $_query->setParameter('ct_itu_motif_used', 'Spécial'); ///<<===
        $_query->setParameter('updated_at', $_date.'%');
        $_res = $_query->getResult();
        $_result = [];
        $_j = 0;

        foreach($_res as $_re){
            $_result[$_j]   = new \stdClass();

            $_used = $_re->getItuMotifUsed();
            switch($_used)
            {
                case 'Rébus' :
                    $_result[$_j]->ref = "-";
                    $_result[$_j]->imm = "-";
                    break;
                case 'Visite' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref = $ctVisite->getVstNumPv();
                    $_result[$_j]->imm = $ctVisite->getCtCarteGrise()->getCgImmatriculation();
                    break;
                case 'Contre' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref = $ctVisite->getVstNumPv();
                    $_result[$_j]->imm = $ctVisite->getCtCarteGrise()->getCgImmatriculation();
                    break;
                case 'Réception' :
                    $_rt_em = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    $ctReception = $_rt_em->getCtReceptionById($_re->getCtControle());
                    $_result[$_j]->ref = $ctReception->getRcpNumPv();
                    $_result[$_j]->imm = $ctReception->getRcpImmatriculation();
                    break;
                case 'Constatation' :
                    $_cad_em = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
                    $ctConstatation = $_cad_em->getCtConstatationAvDedouanementById($_re->getCtControle());
                    $_result[$_j]->ref = $ctConstatation->getCadNumero();
                    $_result[$_j]->imm = $ctConstatation->getCadImmatriculation();
                    break;
                case 'Mutation' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                    $_result[$_j]->ref = $ctVisite->getVstNumPv();
                    $_result[$_j]->imm = $ctVisite->getCtCarteGrise()->getCgImmatriculation();
                    break;
                case 'Duplicata' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $_rt_em = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    if(!is_null($_vt_em->getCtVisiteById($_re->getCtControle())->getCtCarteGrise()->getCgImmatriculation())){
                        $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                        $_result[$_j]->ref = $ctVisite->getVstNumPv();
                        $_result[$_j]->imm = $ctVisite->getCtCarteGrise()->getCgImmatriculation();
                    }else{
                        $ctReception = $_rt_em->getCtReceptionById($_re->getCtControle());
                        $_result[$_j]->ref = $ctReception->getRcpNumPv();
                        $_result[$_j]->imm = $ctReception->getRcpImmatriculation();
                    }
                    break;
                case 'Spécial' :
                    $_vt_em = $this->_container->get(ServiceName::SRV_METIER_VISITE);
                    $_rt_em = $this->_container->get(ServiceName::SRV_METIER_RECEPTION);
                    if(!is_null($_vt_em->getCtVisiteById($_re->getCtControle())->getCtCarteGrise()->getCgImmatriculation())){
                        $ctVisite = $_vt_em->getCtVisiteById($_re->getCtControle());
                        $_result[$_j]->ref = $ctVisite->getVstNumPv();
                        $_result[$_j]->imm = $ctVisite->getCtCarteGrise()->getCgImmatriculation();
                    }else{
                        $ctReception = $_rt_em->getCtReceptionById($_re->getCtControle());
                        $_result[$_j]->ref = $ctReception->getRcpNumPv();
                        $_result[$_j]->imm = $ctReception->getRcpImmatriculation();
                    }
                    break;
                default :
                    $code_centre = $_re->getCtCentre()->getCtrCode();
                    switch($code_centre){
                        case '001'  : $abbrev_ctr = '-CENSERO/ANT/'.date('y');break;
                        case '002'  : $abbrev_ctr = '-CENSERO/BLG/'.date('y');break;
                        case '003'  : $abbrev_ctr = '-CENSERO/NNA/'.date('y');break;
                        case '004'  : $abbrev_ctr = '-CENSERO/ALS/'.date('y');break;
                        case '005'  : $abbrev_ctr = '-CENSERO/TNA/'.date('y');break;
                        case '007'  : $abbrev_ctr = '-CENSERO/FNR/'.date('y');break;
                        case '008'  : $abbrev_ctr = '-CENSERO/TLR/'.date('y');break;
                        case '009'  : $abbrev_ctr = '-CENSERO/ANA/'.date('y');break;
                        case '010'  : $abbrev_ctr = '-CENSERO/IVT/'.date('y');break;
                        case '011'  : $abbrev_ctr = '-CENSERO/MVA/'.date('y');break;
                        case '013'  : $abbrev_ctr = '-CENSERO/TRO/'.date('y');break;
                        case '014'  : $abbrev_ctr = '-CENSERO/ABA/'.date('y');break;
                        case '015'  : $abbrev_ctr = '-CENSERO/ATR/'.date('y');break;
                        case '016'  : $abbrev_ctr = '-CENSERO/AKA/'.date('y');break;
                        case '017'  : $abbrev_ctr = '-CENSERO/FVE/'.date('y');break;
                        case '017'  : $abbrev_ctr = '-CENSERO/FVE/'.date('y');break;
                        case '018'  : $abbrev_ctr = '-CENSERO/MOG/'.date('y');break;
                        case '019'  : $abbrev_ctr = '-CENSERO/SVA/'.date('y');break;
                        case '020'  : $abbrev_ctr = '-CENSERO/MGA/'.date('y');break;
                        case '021'  : $abbrev_ctr = '-CENSERO/MRA/'.date('y');break;
                        case '022'  : $abbrev_ctr = '-CENSERO/FNA/'.date('y');break;
                        case '023'  : $abbrev_ctr = '-CENSERO/ABE/'.date('y');break;
                        case '024'  : $abbrev_ctr = '-CENSERO/CRT/ANT/'.date('y');break;
                        case '025'  : $abbrev_ctr = '-CENSERO/IHO/'.date('y');break;
                        case '026'  : $abbrev_ctr = '-CENSERO/ATH/'.date('y');break;
                        case '027'  : $abbrev_ctr = '-CENSERO/TDD/'.date('y');break;
                        case '029'  : $abbrev_ctr = '-CENSERO/NSB/'.date('y');break;
                        default     : $abbrev_ctr = '-DGSR/DOR/'.date('y');break;
                    }
                    $_result[$_j]->ref = $_re->getCtControle().$abbrev_ctr;
                    $_result[$_j]->imm = '-';
                    break;
            }
//====>>>
            $ncrt = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carnet d\'entretien', $_date);
            $_result[$_j]->ncrt = !in_array($ncrt, array_column($_result, 'ncrt')) ? $ncrt : '-';

            $ncbl = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte blanche', $_date);
            $_result[$_j]->ncbl = !in_array($ncbl, array_column($_result, 'ncbl')) ? $ncbl : '-';

            $nbbr = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 32 Bis', $_date);
            $_result[$_j]->nbbr = !in_array($nbbr, array_column($_result, 'nbbr')) ? $nbbr : '-';

            $ncjn = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune', $_date);
            $_result[$_j]->ncjn = !in_array($ncjn, array_column($_result, 'ncjn')) ? $ncjn : '-';

            $njbr = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune barrée rouge', $_date);
            $_result[$_j]->njbr = !in_array($njbr, array_column($_result, 'njbr')) ? $njbr : '-';

            $ncrg = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte rouge', $_date);
            $_result[$_j]->ncrg = !in_array($ncrg, array_column($_result, 'ncrg')) ? $ncrg : '-';

            $ncae = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte auto-école', $_date);
            $_result[$_j]->ncae = !in_array($ncae, array_column($_result, 'ncae')) ? $ncae : '-';

            $plch = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Plaque chassis', $_date);
            $_result[$_j]->plch = !in_array($plch, array_column($_result, 'plch')) ? $plch : '-';

            $ncim31 = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 31', $_date);
            $_result[$_j]->ncim31 = !in_array($ncim31, array_column($_result, 'ncim31')) ? $ncim31 : '-';

            $ncim31b = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 31 Bis', $_date);
            $_result[$_j]->ncim31b = !in_array($ncim31b, array_column($_result, 'ncim31b')) ? $ncim31b : '-';
            
            $ncim32 = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 32', $_date);
            $_result[$_j]->ncim32 = !in_array($ncim32, array_column($_result, 'ncim32')) ? $ncim32 : '-';
//====>>>
            /* $ncrt = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carnet d\'entretien');
            $_result[$_j]->ncrt = !in_array($ncrt, array_column($_result, 'ncrt')) ? $ncrt : '-';

            $ncbl = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte blanche');
            $_result[$_j]->ncbl = !in_array($ncbl, array_column($_result, 'ncbl')) ? $ncbl : '-';

            $nbbr = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 32 Bis');
            $_result[$_j]->nbbr = !in_array($nbbr, array_column($_result, 'nbbr')) ? $nbbr : '-';

            $ncjn = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune');
            $_result[$_j]->ncjn = !in_array($ncjn, array_column($_result, 'ncjn')) ? $ncjn : '-';

            $njbr = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte jaune barrée rouge');
            $_result[$_j]->njbr = !in_array($njbr, array_column($_result, 'njbr')) ? $njbr : '-';

            $ncrg = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte rouge');
            $_result[$_j]->ncrg = !in_array($ncrg, array_column($_result, 'ncrg')) ? $ncrg : '-';

            $ncae = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte auto-école');
            $_result[$_j]->ncae = !in_array($ncae, array_column($_result, 'ncae')) ? $ncae : '-';

            $plch = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Plaque chassis');
            $_result[$_j]->plch = !in_array($plch, array_column($_result, 'plch')) ? $plch : '-';

            $ncim31 = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 31');
            $_result[$_j]->ncim31 = !in_array($ncim31, array_column($_result, 'ncim31')) ? $ncim31 : '-';

            $ncim31b = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 31 Bis');
            $_result[$_j]->ncim31b = !in_array($ncim31b, array_column($_result, 'ncim31b')) ? $ncim31b : '-';
            
            $ncim32 = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'CIM 32');
            $_result[$_j]->ncim32 = !in_array($ncim32, array_column($_result, 'ncim32')) ? $ncim32 : '-';*/

            $_result[$_j]->npvo = preg_match('/PVO/', $_re->getCtImprimeTech()->getNomImprimeTech()) ? $_re->getItuNumero() : '-';
            $_result[$_j]->npvm = preg_match('/PVM/', $_re->getCtImprimeTech()->getNomImprimeTech()) ? $_re->getItuNumero() : '-';
            $_result[$_j]->npcm = preg_match('/PVMC/', $_re->getCtImprimeTech()->getNomImprimeTech()) ? $_re->getItuNumero() : '-';

            $_result[$_j]->used = $_used;

            ++$_j;
        }
        return $_result;
    }

    /**
     * Générer feuille d'utilisation des IT
     *  @param  $_centre : ID du centre exploitant
     *  @param  $_date : Date d'exploitation
     *  @return array  array()
     */
    public function genererFeuilleITUsed($_centre, $_date)
    {
        // Récupérer manager
        $_centre_manager= $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_bordereau_manager= $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);

        if($_centre == 0) {
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_centre_manager->getCtCentreById($_centre);
        }
        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre    = $_centre->getCtrNom();
        $_code_centre   = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre   = $_centre_formatted[1];
        $_nom_centre    = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory= $this->_container->getParameter('reporting_template_directory');
        $_template_src  = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_IT_USED;
        $_date_filename = str_replace('/', '', $_date);
        $_path          = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_IT_USED;

        $_fichier       = 'FEUILLE_UTILISATION_IT_'.$_code_province.'_'.$_code_centre.'_'. $_date_filename;
        $_filename      = strtoupper($_fichier);

        $_dest_tmp      = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);
        // $_template->setValue('lieu', $_lieu_centre);

        switch($_lieu_centre){
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                    $_template->setValue('lieu', 'ALASORA');break;
            // case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
            //         $_template->setValue('lieu', 'ALAROBIA');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre));break;
            default :
                $_template->setValue('lieu', $_lieu_centre);break;
        }

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }
        $_template->setValue('date', $_date);

        $_imprimes_used = $this->getAllITUsedInDaybyCentre($_centre, $_date);
        $_nb_imprimes_used = count($_imprimes_used);

        $_nbr_crt = 0;
        $_nbr_cbl = 0;
        $_nbr_bbr = 0;
        $_nbr_cjn = 0;
        $_nbr_jbr = 0;
        $_nbr_crg = 0;
        $_nbr_cae = 0;
        $_nbr_pch = 0;
        $_nbr_cim31 = 0;
        $_nbr_cim31b = 0;
        $_nbr_cim32 = 0;
        $_nbr_pvo = 0;
        $_nbr_pvm = 0;
        $_nbr_pcm = 0;

        $authenticite = 0;
        $autres = 0;
        $caracteristique = 0;
        $constatation = 0;
        $contre = 0;
        $duplicata = 0;
        $mutation = 0;
        $rebus = 0;
        $reception = 0;
        $visite = 0;
        $special = 0;

        $_i = 0;
        $_k = 0;
        $_list_imm_ct = [];

        $_template->cloneRow('i', $_nb_imprimes_used);

        foreach($_imprimes_used as $_imprime_used)
        {
            ++$_i;

            // Récupérer tous les controles techniques
            if(($_imprime_used->imm != '-') AND (!in_array($_imprime_used->imm, $_list_imm_ct))){
                $_list_imm_ct[] = $_imprime_used->imm;
                $_k++;
            }
            //Récupérer nombre des utilisation par catégories
            $_imprime_used->used == 'Authenticité' ? $authenticite++ : $authenticite;
            $_imprime_used->used == 'Autres' ? $autres++ : $autres;
            $_imprime_used->used == 'Caractéristique' ? $caracteristique++ : $caracteristique;
            $_imprime_used->used == 'Constatation' ? $constatation++ : $constatation;
            $_imprime_used->used == 'Contre' ? $contre++ : $contre;
            $_imprime_used->used == 'Duplicata' ? $duplicata++ : $duplicata;
            $_imprime_used->used == 'Mutation' ? $mutation++ : $mutation;
            $_imprime_used->used == 'Rébus' ? $rebus++ : $rebus;
            $_imprime_used->used == 'Réception' ? $reception++ : $reception;
            $_imprime_used->used == 'Visite' ? $visite++ : $visite;
            $_imprime_used->used == 'Spécial' ? $special++ : $special;

            // Récuperer nombre des IT utilisés pour chaque type
            $_imprime_used->ncrt != '-' ? $_nbr_crt++ : $_nbr_crt;
            $_imprime_used->ncbl != '-' ? $_nbr_cbl++ : $_nbr_cbl;
            $_imprime_used->nbbr != '-' ? $_nbr_bbr++ : $_nbr_bbr;
            $_imprime_used->ncjn != '-' ? $_nbr_cjn++ : $_nbr_cjn;
            $_imprime_used->njbr != '-' ? $_nbr_jbr++ : $_nbr_jbr;
            $_imprime_used->ncrg != '-' ? $_nbr_crg++ : $_nbr_crg;
            $_imprime_used->ncae != '-' ? $_nbr_cae++ : $_nbr_cae;
            $_imprime_used->plch != '-' ? $_nbr_pch++ : $_nbr_pch;
            $_imprime_used->ncim31 != '-' ? $_nbr_cim31++ : $_nbr_cim31;
            $_imprime_used->ncim31b != '-' ? $_nbr_cim31b++:$_nbr_cim31b;
            $_imprime_used->ncim32 != '-' ? $_nbr_cim32++:$_nbr_cim32;
            $_imprime_used->npvo != '-' ? $_nbr_pvo++ : $_nbr_pvo;
            $_imprime_used->npvm != '-' ? $_nbr_pvm++ : $_nbr_pvm;
            $_imprime_used->npcm != '-' ? $_nbr_pcm++ : $_nbr_pcm;

            $_template->setValue('i#' . $_i, $_i);
            $_template->setValue('ref#' . $_i, strtoupper($_imprime_used->ref));
            $_template->setValue('imm#' . $_i, $_imprime_used->imm);
            $_template->setValue('used#' . $_i, $_imprime_used->used);
            $_template->setValue('ncrt#' . $_i, $_imprime_used->ncrt);
            $_template->setValue('ncbl#' . $_i, $_imprime_used->ncbl);
            $_template->setValue('nbbr#' . $_i, $_imprime_used->nbbr);
            $_template->setValue('ncjn#' . $_i, $_imprime_used->ncjn);
            $_template->setValue('njbr#' . $_i, $_imprime_used->njbr);
            $_template->setValue('ncrg#' . $_i, $_imprime_used->ncrg);
            $_template->setValue('ncae#' . $_i, $_imprime_used->ncae);
            $_template->setValue('plch#' . $_i, $_imprime_used->plch);
            $_template->setValue('ncim31#' . $_i, $_imprime_used->ncim31);
            $_template->setValue('ncim31b#' . $_i, $_imprime_used->ncim31b);
            $_template->setValue('ncim32#' . $_i, $_imprime_used->ncim32);
            $_template->setValue('npvo#' . $_i, $_imprime_used->npvo);
            $_template->setValue('npvm#' . $_i, $_imprime_used->npvm);
            $_template->setValue('npcm#' . $_i, $_imprime_used->npcm);
        }

        $_template->setValue('nbr_ct', number_format($_k, 0, ',', ' '));

        $_template->setValue('nbrcrt', number_format($_nbr_crt, 0, ',', ' '));
        $_template->setValue('nbrcbl', number_format($_nbr_cbl, 0, ',', ' '));
        $_template->setValue('nbrbbr', number_format($_nbr_bbr, 0, ',', ' '));
        $_template->setValue('nbrcjn', number_format($_nbr_cjn, 0, ',', ' '));
        $_template->setValue('nbrjbr', number_format($_nbr_jbr, 0, ',', ' '));
        $_template->setValue('nbrcrg', number_format($_nbr_crg, 0, ',', ' '));
        $_template->setValue('nbrcae', number_format($_nbr_cae, 0, ',', ' '));
        $_template->setValue('nbrpch', number_format($_nbr_pch, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_template->setValue('nbrcim31b', number_format($_nbr_cim31b, 0, ',', ' '));
        $_template->setValue('nbrcim32', number_format($_nbr_cim32, 0, ',', ' '));
        $_template->setValue('nbrpvo', number_format($_nbr_pvo, 0, ',', ' '));
        $_template->setValue('nbrpvm', number_format($_nbr_pvm, 0, ',', ' '));
        $_template->setValue('nbrpcm', number_format($_nbr_pcm, 0, ',', ' '));

        $_template->setValue('aut', number_format($authenticite, 0, ',', ' '));
        $_template->setValue('oth', number_format($autres, 0, ',', ' '));
        $_template->setValue('ct', number_format($caracteristique, 0, ',', ' '));
        $_template->setValue('cad', number_format($constatation, 0, ',', ' '));
        $_template->setValue('con', number_format($contre, 0, ',', ' '));
        $_template->setValue('dup', number_format($duplicata, 0, ',', ' '));
        $_template->setValue('mut', number_format($mutation, 0, ',', ' '));
        $_template->setValue('reb', number_format($rebus, 0, ',', ' '));
        $_template->setValue('rt', number_format($reception, 0, ',', ' '));
        $_template->setValue('vt', number_format($visite, 0, ',', ' '));
        $_template->setValue('sp', number_format($special, 0, ',', ' '));

        $_template->setValue('total', number_format($_i, 0, ',', ' '));

        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);

        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_em_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_em_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            // 'url_path'      => $_path_docx
            'url_path'      => $_path_pdf
        );
    }

    /**
     *  Récuperer tous les imprimés techniques non utilisés par un centre dans une journée
     *  @param  $_centre : ID du centre exploitation
     *  @param  $_typeit : ID de l'imprimé technique
     *  @param  $_dateuse : date d'utilisation de l'imprimé technique
     *  @param  $_used : est déjà utilisé ou pas
     *  @return $_result : integer
     */
    public function getCompteITwithCondition($_centre, $_dateuse, $_used, $_typeit, $_position)
    {
        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;

        ($_dateuse !== date('Y-m-d')) ? $_datefin = date('Y-m-d') : $_datefin = $_dateuse;
        
        if(is_null($_position)){
            if(is_null($_used)){
                $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id";
                $_query = $this->_entity_manager->createQuery($_dql);
                $_query->setParameter('ct_centre_id', $_centre);
                $_query->setParameter('ct_imprimetech_id', $_typeit);
            }else{
                $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it";
                $_query = $this->_entity_manager->createQuery($_dql);
                $_query->setParameter('ct_centre_id', $_centre);
                $_query->setParameter('ct_imprimetech_id', $_typeit);
                $_query->setParameter('ct_used_it', $_used);
            }
        }else{
            switch($_position){
                case 'BEFORE' : 
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.createdAt < :ct_create_at";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_create_at', $_dateuse);
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.createdAt < :ct_create_at";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('ct_create_at', $_dateuse);
                    }
                    break;
                case 'IN' :
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.createdAt >= :date_debut
                                AND t.createdAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.createdAt >= :date_debut AND t.createdAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }
                    break;
                case 'OUT' :
                    if(is_null($_used)){
                        if($_dateuse !== date('Y-m-d')){
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.updatedAt >= :date_debut
                                    AND t.updatedAt <= :date_fin";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('date_debut', $_dateuse);
                            $_query->setParameter('date_fin', $_datefin);
                        }else{
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.updatedAt LIKE :date_debut";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('date_debut', $_dateuse.'%');
                        }
                    }else{
                        if($_dateuse !== date('Y-m-d')){
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                    AND t.updatedAt >= :date_debut AND t.updatedAt <= :date_fin";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('ct_used_it', $_used);
                            $_query->setParameter('date_debut', $_dateuse);
                            $_query->setParameter('date_fin', $_datefin);
                        }else{
                            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                    WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                    AND t.updatedAt LIKE :date_debut";
                            $_query = $this->_entity_manager->createQuery($_dql);
                            $_query->setParameter('ct_centre_id', $_centre);
                            $_query->setParameter('ct_imprimetech_id', $_typeit);
                            $_query->setParameter('ct_used_it', $_used);
                            $_query->setParameter('date_debut', $_dateuse.'%');
                        }
                    }
                    break;
                default :
                    if(is_null($_used)){
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id
                                AND t.createdAt >= :date_debut AND t.createdAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }else{
                        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                                WHERE t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND t.ituUsed = :ct_used_it
                                AND t.createdAt >= :date_debut AND t.createdAt <= :date_fin";
                        $_query = $this->_entity_manager->createQuery($_dql);
                        $_query->setParameter('ct_centre_id', $_centre);
                        $_query->setParameter('ct_imprimetech_id', $_typeit);
                        $_query->setParameter('ct_used_it', $_used);
                        $_query->setParameter('date_debut', $_dateuse);
                        $_query->setParameter('date_fin', $_datefin);
                    }
            }
        }

        $_res = $_query->getResult();
        $_result = count($_res);
        return $_result;
    }

    /**
     *  Récupération du numéro minimum ou maximum d'une imprimé technique non utilisée pour un centre
     *  @param $_centre : ID du centre
     *  @param $_used   : 0 si l'imprimé est non utilisé et 1 dans le cas contraire
     *  @param $_typeit : type d'imprimé technique à chercher
     *  @param $_range  : type d'imprimé technique à chercher
     *  @return $_itu_numero : Numéro de l'imprimé technique récupéré
     */
    public function getMinOrMaxNumImprimeTech($_centre, $_used, $_typeit, $_range)
    {
        $_itu_numero = '-';
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_dql = "SELECT t
                        FROM $_entity_itu t
                WHERE   t.ctCentre = :ct_centre_id
                        AND t.ctImprimeTech = :ct_imprimetech_id
                        AND t.ituUsed = :ct_used_it
                ORDER BY t.ituNumero $_range";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_imprimetech_id', $_typeit);
        $_query->setParameter('ct_used_it', $_used);
        $_query->setMaxResults(1);
        $_res = $_query->getResult();
        foreach($_res as $_res) { $_itu_numero = $_res->getItuNumero(); }
        return $_itu_numero;
    }

    /**
     *  Récupération des stock des imprimés techniques existant
     *  @param $_centre : ID centre detenteur
     *  @param $_type_it : Type d'imprimé technique à compter
     *  @param $_annee : Année de consommation des imprimés techniques
     *  @param $_value : Mois ou trimestre ou semestre de consommation des imprimés techniques
     *  @param $_interval : Intervalle de consommation des imprimés techniques
     *  @param $_motif : Motif d'utilisation de l'imprimée technique
     *  @return $_result : Nombre des imprimés techniques consommées
     */
    public function getConsommationByImprimeTech($_centre, $_type_it, $_annee, $_value, $_interval, $_motif)
    {

        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;

        ($_motif != null) ? $_motif_use = " AND t.ituMotifUsed = :motif_use" : $_motif_use = "";

        if ($_interval == "mensuel") {
            $_mois = $_value;
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.updatedAt) = :annee AND MONTH(t.updatedAt) = :mois".$_motif_use."";
        } elseif ($_interval == "trimestriel") {
            if($_value == 1){
                $_mois = '1, 2, 3';
            } elseif($_value == 2){
                $_mois = '4, 5, 6';
            } elseif($_value == 3){
                $_mois = '7, 8, 9';
            } elseif($_value == 4){
                $_mois = '10, 11, 12';
            }
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.updatedAt) = :annee AND MONTH(t.updatedAt) IN (:mois)".$_motif_use."";
        } elseif ($_interval == "semestriel") {
            if($_value == 1){
                $_mois = '1, 2, 3, 4, 5, 6';
            }else{
                $_mois = '7, 8, 9, 10, 11, 12';
            }
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.updatedAt) = :annee AND MONTH(t.updatedAt) IN (:mois)".$_motif_use."";
        }else{
            $_mois = null;
            $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id WHERE t.ituUsed = :used AND
            t.ctCentre = :ct_centre_id AND t.ctImprimeTech = :ct_imprimetech_id AND YEAR(t.updatedAt) = :annee".$_motif_use."";
        }
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('used', 1);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_imprimetech_id', $_type_it);
        $_query->setParameter('annee', $_annee);
        if(!empty($_motif)) $_query->setParameter('motif_use', $_motif);
        if(!empty($_mois)) $_query->setParameter('mois', $_mois);
        $_res = $_query->getResult();
        $_result = count($_res);

        return $_result;
    }

    /**
     *  Récupération des stock des imprimés techniques existant
     *  @param $_centre : ID centre detenteur
     *  @param $_dateuse: Date debut de traitement de stock
     *  @return $result : liste des imprimés techniques avec nombres en stock
     */
    public function getStockByImprimeTech($_centre, $_dateuse)
    {

        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_dql = "SELECT DISTINCT t FROM $_entity_it t ORDER BY t.nomImprimeTech ASC";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_res = $_query->getResult();
        $result = [];
        $j = 0;
        foreach($_res as $_type_it)
        {
            $result[$j] = new \stdClass();
            $result[$j]->imprimeTech = $_type_it->getNomImprimeTech();
            $_typeit = $_type_it->getId();
            $_initial = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, 'BEFORE');
            $_entree = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, 'IN');
            $_sortie = $this->getCompteITwithCondition($_centre, $_dateuse, 1, $_typeit, 'OUT');
            // $_stock    = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, NULL);
            $_stock = ($_initial + $_entree) - $_sortie;
            $result[$j]->initial    = $_initial;
            $result[$j]->input      = $_entree;
            $result[$j]->output     = $_sortie;
            $result[$j]->instock    = $_stock;
            $result[$j]->ndebut     = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'ASC');
            $result[$j]->nfin       = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'DESC');
            $j++;
        }

        return $result;
    }

    /**
     *  Récupérer si le centre a déjà des IT à jour dans le base de données
     *  @param $_centre : Identifiant du centre à traité
     *  @return boolean : vrai si le centre à des IT faux si dans le cas de contraite
     */
    public function getNombreITbyCentreInStock($_centre)
    {
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_entity_ctr = EntityName::CT_CENTRE;
        $_entity_manager_ctr = $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_centre = $_entity_manager_ctr->getCtCentreById($_centre);
        $_ct_crtcode = $_centre->getCtrCode();
        // $_dql = "SELECT t FROM $_entity_itu t WHERE t.ctCentre = :ct_centre_id";
        $_dql = "SELECT t FROM $_entity_itu t INNER JOIN $_entity_ctr tt WITH t.ctCentre = tt.id WHERE tt.ctrCode = :ct_ctr_code";
        $_query = $this->_entity_manager->createQuery($_dql);
        // $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_ctr_code', $_ct_crtcode);
        $_res = $_query->getResult();
        count($_res) != 0 ? $_exist = true : $_exist = false;
        return $_exist;
    }

    /**
     *  Générer feuille de stock des imprimés
     *  techniques d'un centre à une date données
     *  @param $centre : Identifiant du centre à traité
     *  @param $date : Date de l'établissement de la feuille de stock
     *  @return array : array()
     */
    public function genererFeuilleStockIT($_centre, $_date)
    {
        // Récupérer manager
        $_centre_manager= $this->_container->get(ServiceName::SRV_METIER_CENTRE);
        $_bordereau_manager= $this->_container->get(ServiceName::SRV_METIER_BORDEREAU);

        if($_centre == 0) {
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();
        }else{
            $_centre = $_centre_manager->getCtCentreById($_centre);
        }

        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre    = $_centre->getCtrNom();
        $_code_centre   = $_centre->getCtrCode();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre    = $_centre_formatted[1];
        $_nom_centre     = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory    = $this->_container->getParameter('reporting_template_directory');
        $_template_src      = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_STOCK_IT;
        $_date_filename     = str_replace('/', '', $_date);
        $_path              = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_STOCK_IT;

        $_fichier           = 'FEUILLE_STOCK_IT_'.$_code_centre.'_'.$_code_province.'_'. $_date_filename;
        $_filename          = strtoupper($_fichier);

        $_dest_tmp          = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_STOCK_IT . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_STOCK_IT . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        $_fin = new \DateTime();
        $_fin = $_fin->format('Y-m-d');
        $_fin = implode('/',array_reverse  (explode('-', $_fin)));

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);
        // $_template->setValue('lieu', $_lieu_centre);
        switch($_lieu_centre){
            case (preg_match('/alarobia/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', '');break;
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALASORA<w:br/>-----------------------');break;
            case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', 'ALAROBIA<w:br/>-----------------------');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu', str_replace('ITINERANTE ', '', $_lieu_centre)).'<w:br/>-----------------------';break;
            default :
                $_template->setValue('lieu', $_lieu_centre.'<w:br/>-----------------------');break;
        }

        $_template->setValue('debut', $_date);
        $_template->setValue('fin', $_fin);

        ($_date === $_fin) ? $_periode = "DU ".$_date : $_periode = "DU ".$_date." AU ".$_fin;
        $_titre = "ETAT DES STOCKS DES IMPRIMES TECHNIQUE<w:br/>".$_periode;
        $_template->setValue('titre', $_titre);

        if(preg_match('/ALASORA/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALASORA')));
        }elseif(preg_match('/ITINERANTE/', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower(str_replace('ITINERANTE ', '', $_lieu_centre))));
        }elseif(preg_match('/VISITE A DOMICILE : /', $_lieu_centre)){
            $_template->setValue('lieuedition', ucfirst(strtolower('ALAROBIA')));
        }else{
            $_template->setValue('lieuedition', ucfirst(strtolower($_lieu_centre)));
        }

        $stocks = $this->getStockByImprimeTech($_centre, implode('-', array_reverse(explode('/', $_date))));
        $nstock = count($stocks);
        $_i = 0;
        $_template->cloneRow('i', $nstock);
        foreach($stocks as $instock)
        {
            ++$_i;
            $_template->setValue('i#'.$_i, $_i);
            $_template->setValue('imprime_technique#'.$_i, $instock->imprimeTech);
            $_template->setValue('initial#'.$_i, $instock->initial);
            $_template->setValue('input#'.$_i, $instock->input);
            $_template->setValue('output#'.$_i, $instock->output);
            $_template->setValue('instock#'.$_i, $instock->instock);
            $_template->setValue('ndebut#'.$_i, $instock->ndebut);
            $_template->setValue('nfin#'.$_i, $instock->nfin);
        }

        $_list_mois = array(1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril", 5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août", 9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre");
        $_date_edition = date('d').' '.$_list_mois[date('n')].' '.date('Y').' à '. date('H:i:s');
        $_date_edition2 = date('d').' '.$_list_mois[date('n')].' '.date('Y');
        $_template->setValue('dateedition', $_date_edition2);
        $_template->setValue('datedition', $_date_edition);
        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_em_cad = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_em_cad->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            // 'url_path'      => $_path_docx
            'url_path'      => $_path_pdf
        );
    }

    /**
     * Générer un reporting annuel
     * @param integer $_id_centre
     * @param integer $_annee
     * @param string $_type_recep
     * @param string $_type_util
     * @return string
     */
    public function generateReportingByInterval($_id_centre, $_annee, $_value, $_interval)
    {
        // Récupérer manager
        $_centre_manager = $this->_container->get(ServiceName::SRV_METIER_CENTRE);


        // Récupération informations
        // Centre et province
        $_centre = $_centre_manager->getCtCentreById($_id_centre);
        $_nom_centre = $_centre->getCtrNom();
        $_code_centre = $_centre->getCtrCode();
        $_nom_province = $_centre->getCtProvince()->getPrvNom();
        $_code_province = $_centre->getCtProvince()->getPrvCode();

        if ($_interval == "mensuel") {
            $_pref_num_pv = 'bilan_mensuel_'.$_value.'_';
        } elseif ($_interval == "trimestriel") {
            $_pref_num_pv = 'bilan_trimestriel_'.$_value.'_';
        } elseif ($_interval == "semestriel") {
            $_pref_num_pv = 'bilan_semestriel_'.$_value.'_';
        } else {
            $_pref_num_pv = 'bilan_annuel_';
        }

        $_tpl_reporting_name = PathReportingName::TEMPLATE_STATISTIQUE_UTILISATION_IT;
        $_gnr_reporting_name = PathReportingName::GENERATE_STATISTIQUE_UTILISATION_IT;

        // Récupérer répertoire modèle Word
        $_reporting_directory = $this->_container->getParameter('reporting_template_directory');
        $_template_bilan = $_reporting_directory . $_tpl_reporting_name;
        $_num_pv = $_pref_num_pv . $_nom_centre . '_' . $_code_centre . '_' . $_code_province . '_' . $_annee;
        $_filename = strtoupper($_num_pv);
        $_path = $_reporting_directory . $_gnr_reporting_name;
        $_dest_tmp = $_path . $_filename . '.docx';
        $_file_without_ext = $_filename;

        $_url_scheme = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx = 'http://' . $_url_scheme . '/reporting/' . $_gnr_reporting_name . $_filename . '.docx';
        $_path_pdf = 'http://' . $_url_scheme . '/reporting/' . $_gnr_reporting_name . $_filename . '.pdf';

        $_php_word = new PhpWord();
        $_template = $_php_word->loadTemplate($_template_bilan);

        // Centre et province
        $_template->setValue('province', $_nom_province);
        $_template->setValue('centre', $_nom_centre);

        // Annee
        $_template->setValue('annee', $_annee);

        if ($_interval == "trimestriel" || $_interval == "semestriel") {
            $_template->setValue('num_interval', $_value);
        }

        $_list_mois = array(1 => "JANVIER",     2 => "FÉVRIER",     3 => "MARS",
                            4 => "AVRIL",       5 => "MAI",         6 => "JUIN",
                            7 => "JUILLET",     8 => "AOÛT",        9 => "SEPTEMBRE",
                            10 => "OCTOBRE",    11 => "NOVEMBRE",   12 => "DÉCEMBRE");

        if ($_interval == 'annuel') {
            $_template->setValue('value', '');
            $_template->setValue('rank', '');
            $_template->setValue('interval', 'ANNUEL');
        } elseif ($_interval == 'semestriel') {
            $_template->setValue('value', $_value);
            if ($_value == 1) {
                $_template->setValue('rank', 'er');
            } else {
                $_template->setValue('rank', 'ème');
            }
            $_template->setValue('interval', 'SEMESTRE');
        } elseif ($_interval == 'trimestriel') {
            $_template->setValue('value', $_value);
            if ($_value == 1) {
                $_template->setValue('rank', 'er');
            } else {
                $_template->setValue('rank', 'ème');
            }
            $_template->setValue('interval', 'TRIMESTRE');
        } elseif ($_interval == 'mensuel') {
            $_template->setValue('value', 'MOIS DE ' . $_list_mois[$_value]);
            $_template->setValue('rank', '');
            $_template->setValue('interval', '');
        }

        $_motifs = array('Authenticité', 'Autres', 'Caractéristique', 'Constatation', 'Contre', 'Duplicata', 'Mutation', 'Rébus', 'Réception', 'Visite', 'Spécial');
        $i = 0;
        $nbmotifs = count($_motifs);
        $_template->cloneRow('motif', $nbmotifs);

        foreach($_motifs as $_motif){
            ++$i;
            $_template->setValue('motif#'.$i, $_motif);
            $_nb_ce     = $this->getConsommationByImprimeTech($_id_centre, 1, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbce#'.$i, number_format($_nb_ce, 0, ',', ' '));
            $_nb_cb     = $this->getConsommationByImprimeTech($_id_centre, 2, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcb#'.$i, number_format($_nb_cb, 0, ',', ' '));
            $_nb_cim32b = $this->getConsommationByImprimeTech($_id_centre, 3, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim32b#'.$i, number_format($_nb_cim32b, 0, ',', ' '));
            $_nb_cj     = $this->getConsommationByImprimeTech($_id_centre, 4, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcj#'.$i, number_format($_nb_cj, 0, ',', ' '));
            $_nb_cjbr   = $this->getConsommationByImprimeTech($_id_centre, 5, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcjbr#'.$i, number_format($_nb_cjbr, 0, ',', ' '));
            $_nb_cr     = $this->getConsommationByImprimeTech($_id_centre, 6, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcr#'.$i, number_format($_nb_cr, 0, ',', ' '));
            $_nb_cae    = $this->getConsommationByImprimeTech($_id_centre, 7, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcae#'.$i, number_format($_nb_cae, 0, ',', ' '));
            $_nb_plq    = $this->getConsommationByImprimeTech($_id_centre, 8, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbplq#'.$i, number_format($_nb_plq, 0, ',', ' '));
            $_nb_cim31  = $this->getConsommationByImprimeTech($_id_centre, 9, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim31#'.$i, number_format($_nb_cim31, 0, ',', ' '));
            $_nb_cim31b = $this->getConsommationByImprimeTech($_id_centre, 10, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim31b#'.$i, number_format($_nb_cim31b, 0, ',', ' '));
            $_nb_cim32  = $this->getConsommationByImprimeTech($_id_centre, 11, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbcim32#'.$i, number_format($_nb_cim32, 0, ',', ' '));
            $_nb_pvo    = $this->getConsommationByImprimeTech($_id_centre, 12, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpv#'.$i, number_format($_nb_pvo, 0, ',', ' '));
            $_nb_pvm    = $this->getConsommationByImprimeTech($_id_centre, 13, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpvm#'.$i, number_format($_nb_pvm, 0, ',', ' '));
            $_nb_pvcm   = $this->getConsommationByImprimeTech($_id_centre, 14, $_annee, $_value, $_interval, $_motif);
            $_template->setValue('nbpvcm#'.$i, number_format($_nb_pvcm, 0, ',', ' '));
        }

        // Total récupération des données et statistiques
        $_nbr_ce = $this->getConsommationByImprimeTech($_id_centre, 1, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrce', number_format($_nbr_ce, 0, ',', ' '));
        $_nbr_cb = $this->getConsommationByImprimeTech($_id_centre, 2, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcb', number_format($_nbr_cb, 0, ',', ' '));
        $_nbr_cim32b = $this->getConsommationByImprimeTech($_id_centre, 3, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim32b', number_format($_nbr_cim32b, 0, ',', ' '));
        $_nbr_cj = $this->getConsommationByImprimeTech($_id_centre, 4, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcj', number_format($_nbr_cj, 0, ',', ' '));
        $_nbr_cjbr = $this->getConsommationByImprimeTech($_id_centre, 5, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcjbr', number_format($_nbr_cjbr, 0, ',', ' '));
        $_nbr_cr = $this->getConsommationByImprimeTech($_id_centre, 6, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcr', number_format($_nbr_cr, 0, ',', ' '));
        $_nbr_cae = $this->getConsommationByImprimeTech($_id_centre, 7, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcae', number_format($_nbr_cae, 0, ',', ' '));
        $_nbr_plq = $this->getConsommationByImprimeTech($_id_centre, 8, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrplq', number_format($_nbr_plq, 0, ',', ' '));
        $_nbr_cim31 = $this->getConsommationByImprimeTech($_id_centre, 9, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim31', number_format($_nbr_cim31, 0, ',', ' '));
        $_nbr_cim31b = $this->getConsommationByImprimeTech($_id_centre, 10, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim31b', number_format($_nbr_cim31b, 0, ',', ' '));
        $_nbr_cim32 = $this->getConsommationByImprimeTech($_id_centre, 11, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrcim32', number_format($_nbr_cim32, 0, ',', ' '));
        $_nbr_pvo = $this->getConsommationByImprimeTech($_id_centre, 12, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpv', number_format($_nbr_pvo, 0, ',', ' '));
        $_nbr_pvm = $this->getConsommationByImprimeTech($_id_centre, 13, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpvm', number_format($_nbr_pvm, 0, ',', ' '));
        $_nbr_pvcm = $this->getConsommationByImprimeTech($_id_centre, 14, $_annee, $_value, $_interval, null);
        $_template->setValue('nbrpvcm', number_format($_nbr_pvcm, 0, ',', ' '));


        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_const_av_ded_manager = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_const_av_ded_manager->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            'url_path' => $_path_pdf
            // 'url_path' => $_path_docx
        );
    }

    /**
     *  Fonction permettant de tester un numéro d'imprimée technique s'il existe déjà ou non
     *  @param $_type_it: Type d'imprimée technique à tester
     *  @param $_num_it : Numéro de l'imprimée technique à tester
     *  @return $_trouve: si le numéro de l'imprimée technique est trouvé la valeur VRAI si non FAUX
     */
    public function TestNumImprimeTech($_type_it, $_num_it)
    {
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_trouve = false;
        $_sql    = "SELECT t
                    FROM    $_entity_itu t 
                    WHERE   t.ctImprimeTech = :ct_imprimetech_id
                            AND t.ituNumero != :itu_numero";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter('ct_imprimetech_id', $_type_it);
        $_query->setParameter('itu_numero', $_num_it);
        $_ret = $_query->getResult();
        $_nombre = count($_ret);
        if($_nombre != 0) $_trouve = true;
        return $_trouve;
    }

    /**
     *  Fonction permettant de tester si le numéro de l'IT existe déjà dans la liste des IT
     *  @param $idbe    : Identifiant du bordereau d'envoi
     *  @param $idctr   : Identifiant du centre destinataire
     *  @param $idit    : Identifiant du type IT
     *  @param $num     : Numéro de l'IT à tester
     *  @return $exist  : Booléen VRAI si le $num est trouvé, FAUX dans le cas contraire
     */
    public function FindIfNumExistInList($idbe, $idctr, $idit, $num){
        $exist  = false;
        $_entity_itu = EntityName::CT_IMPRIME_TECH_USE;
        $_dql   = "SELECT   t
                        FROM    $_entity_itu t
                        WHERE   t.ctBordereau = :idbe
                                AND t.ctCentre = :idctr
                                AND t.ctImprimeTech = :idit
                                AND t.ituNumero = :num";
        $_query  = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('idbe', $idbe);
        $_query->setParameter('idctr', $idctr);
        $_query->setParameter('idit', $idit);
        $_query->setParameter('num', $num);
        $_ret = $_query->getResult();
        $_nombre = count($_ret);
        if($_nombre != 0) $exist = true;
        return $exist;
    }
}
