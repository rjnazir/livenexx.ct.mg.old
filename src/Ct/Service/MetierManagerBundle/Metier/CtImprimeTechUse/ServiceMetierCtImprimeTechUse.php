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
        $_entity_ctr = EntityName::CT_CENTRE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();
        $_ct_centre_code = $_user_connected->getCtCentre()->getCtrCode();

        // $_sql = "SELECT t FROM $_entity_bl t WHERE t.ctCentre = :ct_centre_id AND t.ituUsed = :itu_Used ORDER BY t.ituNumero ASC";
        $_sql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre IN (SELECT tt.id FROM $_entity_ctr tt WHERE tt.ctrCode = :ct_centre_code )
                            AND t.ituUsed = :itu_Used
                            ORDER BY t.ituNumero ASC";
        $_query  = $this->_entity_manager->createQuery($_sql);
        // $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('ct_centre_code', $_ct_centre_code);
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
    public function getNumITByControleAndTypeIT($_ct_controle_id, $_type_it){
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
    }

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
        $_dql = " SELECT  itu
                        FROM    $_entity_itu itu
                                INNER JOIN $_entity_it it WITH itu.ctImprimeTech = it.id
                        WHERE       itu.ctCentre     =       :ct_centre_id
                                AND itu.updatedAt    LIKE    :updated_at
                                AND it.nomImprimeTech    LIKE    :type_it
                        ORDER BY    itu.ituNumero    ASC";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('type_it', '%PV%');
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

            $ncrt = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carnet d\'entretien');
            $_result[$_j]->ncrt = !in_array($ncrt, array_column($_result, 'ncrt')) ? $ncrt : '-';

            $ncbl = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte blanche');
            $_result[$_j]->ncbl = !in_array($ncbl, array_column($_result, 'ncbl')) ? $ncbl : '-';

            $nbbr = $this->getNumITByControleAndTypeIT($_re->getCtControle(), 'Carte blanche barrée rouge');
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
            $_result[$_j]->ncim32 = !in_array($ncim32, array_column($_result, 'ncim32')) ? $ncim32 : '-';

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

        if(empty($_centre)) 
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();

        $_centre = $_centre_manager->getCtCentreById($_centre);

        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre     = $_centre->getCtrNom();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre    = $_centre_formatted[1];
        $_nom_centre     = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory    = $this->_container->getParameter('reporting_template_directory');
        $_template_src      = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_IT_USED;
        $_date_filename     = str_replace('/', '', $_date);
        $_path              = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_IT_USED;

        $_fichier           = 'FEUILLE_UTILISATION_IT_' . $_date_filename;
        $_filename          = strtoupper($_fichier);

        $_dest_tmp          = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.docx';
        $_path_pdf      = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_FEUILLE_IT_USED . $_filename . '.pdf';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        // Centre, lieu centre et numéro BL
        $_template->setValue('centre', $_nom_centre);
        $_template->setValue('lieu', $_lieu_centre);
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

        $_template->setValue('total', number_format($_i, 0, ',', ' '));

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
        if(is_null($_position)){
            if(!is_null($_used)){
                $_dql = "SELECT t
                                FROM $_entity_itu t
                                INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE   t.ctCentre = :ct_centre_id
                                AND t.ctImprimeTech = :ct_imprimetech_id
                                AND t.ituUsed = :ct_used_it";
            }else{
                $_dql = "SELECT t
                                FROM $_entity_itu t
                                INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                        WHERE   t.ctCentre = :ct_centre_id
                                AND t.ctImprimeTech = :ct_imprimetech_id";
            }
        }else{
            if($_position === '<'){
                if(!is_null($_used)){
                    $_dql = "SELECT t
                                    FROM $_entity_itu t
                                    INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                            WHERE   t.ctCentre = :ct_centre_id
                                    AND t.ctImprimeTech = :ct_imprimetech_id
                                    AND t.ituUsed = :ct_used_it
                                    AND t.createdAt < :ct_create_at";
                }else{
                    $_dql = "SELECT t
                                    FROM $_entity_itu t
                                    INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                            WHERE   t.ctCentre = :ct_centre_id
                                    AND t.ctImprimeTech = :ct_imprimetech_id
                                    AND t.createdAt < :ct_create_at";
                }
            }else if($_position === '>'){
                if(!is_null($_used)){
                    $_dql = "SELECT t
                                    FROM $_entity_itu t
                                    INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                            WHERE   t.ctCentre = :ct_centre_id
                                    AND t.ctImprimeTech = :ct_imprimetech_id
                                    AND t.ituUsed = :ct_used_it
                                    AND t.createdAt > :ct_create_at";
                }else{
                    $_dql = "SELECT t
                                    FROM $_entity_itu t
                                    INNER JOIN $_entity_it tt WITH t.ctImprimeTech = tt.id
                            WHERE   t.ctCentre = :ct_centre_id
                                    AND t.ctImprimeTech = :ct_imprimetech_id
                                    AND t.createdAt > :ct_create_at";
                }
            }
        }
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
        $_query->setParameter('ct_imprimetech_id', $_typeit);
        if(!is_null($_position)) $_query->setParameter('ct_create_at', $_dateuse);
        if(!is_null($_used)) $_query->setParameter('ct_used_it', $_used);
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
     *  @param $_dateuse: Date debut de traitement de stock
     *  @return $result : liste des imprimés techniques avec nombres en stock
     */
    public function getStockByImprimeTech($_centre, $_dateuse)
    {

        $_entity_it = EntityName::CT_IMPRIME_TECH;
        $_dql = "SELECT DISTINCT t FROM $_entity_it t";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_res = $_query->getResult();
        $result = [];
        $j = 0;
        foreach($_res as $_type_it)
        {
            $result[$j] = new \stdClass();
            $result[$j]->imprimeTech = $_type_it->getNomImprimeTech();
            $_typeit = $_type_it->getId();
            $result[$j]->initial = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, '<');
            $result[$j]->input = $this->getCompteITwithCondition($_centre, $_dateuse, NULL, $_typeit, '>');
            $result[$j]->output = $this->getCompteITwithCondition($_centre, $_dateuse, 1, $_typeit, '>');
            $result[$j]->instock = $this->getCompteITwithCondition($_centre, $_dateuse, 0, $_typeit, NULL);
            $result[$j]->ndebut = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'ASC');
            $result[$j]->nfin = $this->getMinOrMaxNumImprimeTech($_centre, 0, $_typeit, 'DESC');;
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
        $_dql = "SELECT t FROM $_entity_itu t WHERE t.ctCentre = :ct_centre_id";
        $_query = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_centre);
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

        if(empty($_centre)) 
            $_ct_user_id= $this->_container->get('security.token_storage')->getToken()->getUser();
            $_centre    = $_ct_user_id->getCtCentre();

        $_centre = $_centre_manager->getCtCentreById($_centre);

        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre     = $_centre->getCtrNom();

        $_centre_formatted = $_bordereau_manager->transformcenter($_nom_centre);
        $_lieu_centre    = $_centre_formatted[1];
        $_nom_centre     = $_centre_formatted[2];

        // Récupérer répertoire modèle Word
        $_fuit_directory    = $this->_container->getParameter('reporting_template_directory');
        $_template_src      = $_fuit_directory . PathReportingName::TEMPLATE_FEUILLE_STOCK_IT;
        $_date_filename     = str_replace('/', '', $_date);
        $_path              = $_fuit_directory . PathReportingName::GENERATE_FEUILLE_STOCK_IT;

        $_fichier           = 'FEUILLE_STOCK_IT_' . $_date_filename;
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
        $_template->setValue('lieu', $_lieu_centre);
        $_template->setValue('debut', $_date);
        $_template->setValue('fin', $_fin);

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
}
