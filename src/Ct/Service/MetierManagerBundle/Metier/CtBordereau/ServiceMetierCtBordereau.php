<?php

namespace Ct\Service\MetierManagerBundle\Metier\CtBordereau;

use Doctrine\ORM\EntityManager;
use Ct\Service\MetierManagerBundle\Utils\EntityName;
use Symfony\Component\DependencyInjection\Container;
use Ct\Service\MetierManagerBundle\Utils\PathReportingName;
use PhpOffice\PhpWord\PhpWord;
use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
     *  @param  $_ct_centre_id : Nom imprimé tech
     *  @return $_imprime_tech : Liste imprimés tech non activer array()
     */
    public function getCtBordereauByCentre()
    {
        $_entity_bl = EntityName::CT_BORDEREAU;
        $_entity_itu= EntityName::CT_IMPRIME_TECH_USE;

        // Récuperer ID utilisateur
        $_user_connected= $this->_container->get('security.token_storage')->getToken()->getUser();
        $_ct_centre_id  = $_user_connected->getCtCentre();

        $_sql   = " SELECT  t
                    FROM    $_entity_bl t 
                    WHERE   t.ctCentre = ?1
                            AND t.blDebutNumero NOT IN (
                                SELECT DISTINCT tt.ituNumero FROM $_entity_itu tt
                                WHERE   t.id = tt.ctBordereau
                                        AND t.ctImprimeTech = tt.ctImprimeTech
                            )
                    ORDER BY t.id DESC";
        $_query  = $this->_entity_manager->createQuery($_sql);
        $_query->setParameter(1, $_ct_centre_id);
        $_ret = $_query->getResult();
        return $_ret;
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
        $_entity_it = EntityName::CT_IMPRIME_TECH;

        $_dql    = "SELECT t
                    FROM    $_entity_bl t 
                            INNER JOIN $_entity_it it WITH t.ctImprimeTech = it.id
                    WHERE   t.ctCentre = :ct_centre_id
                        AND t.blNumero = :bl_numero
                    ORDER BY it.nomImprimeTech ASC, t.blDebutNumero ASC";
        $_query  = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('bl_numero', $_bl_numero);
        $_ret = $_query->getResult();
        return $_ret;

    }

    /**
     *  Récupérer un bordereau par le centre de destination et son numéro
     *  @param  $_typeit : Type d'imprimée technique à tester
     *  @param  $_debutnum : Début numéro imprimée technique à tester
     *  @param  $_finnum : Fin numéro imprimée technique à tester
     *  @return $_list : Liste imprimés technique remplicant les condistions array()
     */
    public function getListITByTypeITInBordereau($_typeit, $_debutnum, $_finnum)
    {
        $_entity_bl = EntityName::CT_BORDEREAU;
        $_entity_it = EntityName::CT_IMPRIME_TECH;

        $_dql    = "SELECT t
                    FROM    $_entity_bl t 
                            INNER JOIN $_entity_it it WITH t.ctImprimeTech = it.id
                    WHERE   t.ctImprimeTech = :ct_imprime_tech_di
                        AND t.blDebutNumero = :bl_start_num
                        AND t.blFinNumero = :bl_end_num
                    ORDER BY it.nomImprimeTech ASC, t.blDebutNumero ASC";
        $_query  = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_imprime_tech_di', $_typeit);
        $_query->setParameter('bl_start_num', $_debutnum);
        $_query->setParameter('bl_end_num', $_finnum);
        $_ret = $_query->getResult();
        return $_ret;

    }

    /**
     * Fonction permettant de mofidier l'affichage du nom du centre
     * suivant le nom de centre entré comme parametre
     * @param $ctrNom   : Nom centre à traiter
     * @return $center  : Nom centre à traiter et lieu
     */
    function transformcenter($ctrNom)
    {
        $center = array();
        switch($ctrNom){
            case (preg_match('/DOMICILE/i', $ctrNom) ? true : false)
                                    : $centre = array('LE COLONEL, DIRECTEUR DES OPERATIONS ROUTIERES','VISITE A DOMICILE : '.str_replace('VISITE A DOMICILE : ', '', $ctrNom),'',''); break;
            case "ALAROBIA"         : $centre = array('LE COLONEL,<w:br/>directeur des opérations routières','VISITE A DOMICILE : '.$ctrNom, ''); break;

            case "ALASORA"          : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'ALASORA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "ANTSIRABE"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'ANTSIRABE', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "BETONGOLO"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'BETONGOLO', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "IVATO"            : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'IVATO', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "TSIROANOMANDIDY"  : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'TSIROANOMANDIDY', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            
            case "AMBATONDRAZAKA"   : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'AMBATONDRAZAKA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "FENERIVE-EST"     : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'FENERIVE-EST', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "MORAMANGA"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'MORAMANGA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "TANAMBOROZANO"    : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'TOAMASINA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "BARIKADIMY"       : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'TOAMASINA', 'CENTRE DE LA SECURITE ROUTIERE'); break;

            case "AMBOSITRA"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'AMBOSITRA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "FARAFANGANA"      : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'FARAFANGANA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "BESOROHITRA"      : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'FIANARANTSOA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "MANAKARA"         : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'MANAKARA', 'CENTRE DE LA SECURITE ROUTIERE'); break;

            case "TRANOBOZAKA"      : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'ANTSIRANANA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "NOSY BE"          : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'NOSY BE', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "SAMBAVA"          : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'SAMBAVA', 'CENTRE DE LA SECURITE ROUTIERE'); break;

            case "ANTSOHIHY"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'ANTSOHIHY', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "AMBOROVY"         : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'MAHANJANGA', 'CENTRE DE LA SECURITE ROUTIERE'); break;

            case "AMBOVOMBE"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'AMBOVOMBE', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "IHOSY"            : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'IHOSY', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "MORONDAVA"        : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'MORONDAVA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "SANFIL"           : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'TOLIARA', 'CENTRE DE LA SECURITE ROUTIERE'); break;
            case "TAOLAGNARO"       : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', 'TAOLAGNARO', 'CENTRE DE LA SECURITE ROUTIERE'); break;

            case "CENTRE_RECEPTION_TECHNIQUE"
                                    : $centre = array('LE CHEF DE CENTRE DE RECEPTION TECHNIQUE', 'ALASORA', 'CENTRE DE RECEPTION TECHNIQUE'); break;
            case (preg_match('/RECEPTION/i', $ctrNom) ? true : false)
                                    : $centre = array('LE CHEF DE CENTRE DE RECEPTION TECHNIQUE', 'ALASORA<w:br/>('.str_replace('RECEPTION TECHNIQUE ', '', str_replace('_',' ',$ctrNom).')'), 'CENTRE DE RECEPTION TECHNIQUE'); break;

            default                 : $centre = array('LE CHEF DE CENTRE DE LA SECURITE ROUTIERE', $ctrNom, 'CENTRE DE LA SECURITE ROUTIERE', );
        }
        return $centre;
    }

    /**
     * Générer bordereau de livraison
     *  @param  $centre : ID du centre destinataire
     *  @param  $numero : N° début de l'imprimé tech
     *  @return array  array()
     */
    public function  generateBordereauLivraison($centre, $numero)
    {
        // Récupérer manager
        $_centre_manager= $this->_container->get(ServiceName::SRV_METIER_CENTRE);

        $_centre = $_centre_manager->getCtCentreById($centre);

        /* Récupération informations chef de centre et lieu centre */
        $_nom_centre     = $_centre->getCtrNom();

        $_centre_formatted = $this->transformcenter($_nom_centre);
        $_nom_centre     = $_centre_formatted[0];
        $_lieu_centre    = $_centre_formatted[1];

        // Récupérer répertoire modèle Word
        $_bl_directory  = $this->_container->getParameter('reporting_template_directory');
        $_template_src  = $_bl_directory . PathReportingName::TEMPLATE_BORDEREAU;
        $_bl_numero     = str_replace('/', '_', $numero);
        $_path          = $_bl_directory . PathReportingName::GENERATE_BORDEREAU;

        $_num_bl        = 'BE_' . $_bl_numero;
        $_filename      = strtoupper($_num_bl);

        $_dest_tmp          = $_path . $_filename . '.docx';
        $_file_without_ext  = $_filename;

        $_url_scheme    = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx     = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_BORDEREAU . $_filename . '.docx';

        $_php_word      = new PhpWord();
        $_template      = $_php_word->loadTemplate($_template_src);

        // Centre, lieu centre et numéro BL
        $_template->setValue('nom_centre', $_nom_centre);
        switch($_lieu_centre){
            case (preg_match('/alasora/i', $_lieu_centre) ? true : false) :
                    $_template->setValue('lieu_centre', 'ALASORA');break;
            case (preg_match('/VISITE A DOMICILE/i', $_lieu_centre) ? true : false) :
                    $_template->setValue('lieu_centre', 'ALAROBIA');break;
            case (preg_match('/itinerante/i', $_lieu_centre) ? true : false) :
                $_template->setValue('lieu_centre', str_replace('ITINERANTE ', '', $_lieu_centre));break;
            default :
                $_template->setValue('lieu_centre', $_lieu_centre);break;
        }
        $_template->setValue('bl_numero', $numero);

        // Liste des imprimés techniques
        $_bordereau      = $this->getListInBordereau($centre, $numero);
        $_nbr_it         = count($_bordereau);

        // $_template->cloneRow('i', $_nbr_it);
        $_template->cloneRow('nature', $_nbr_it);
        // $_template->cloneRow('reference', 2);
        
        $_total          = 0;

        $_i = 0;
        foreach($_bordereau as $_imprime_tech)
        {
            ++$_i;
            $_template->setValue('i#' . $_i, $_i);
            if($_i == 1){
                $_nature = 'Imprimé<w:br/>technique';
                $_reference = '« POUR ATTRIBUTION »<w:br/>REF. : '.$_imprime_tech->getRefExpr().'<w:br/>du '.$_imprime_tech->getDateRefExpr()->format('d/m/Y');
            }else{
                $_nature = '';
                $_reference = '';
            }
            $_template->setValue('nature#' . $_i, $_nature);
            $_template->setValue('reference#' . $_i, $_reference);
            $_nomImprimeTech = $_imprime_tech->getCtImprimeTech()->getNomImprimeTech();
            $_numDebut = $_imprime_tech->getBlDebutNumero();
            $_numFin = $_imprime_tech->getBlFinNumero();
            $_quantite = abs($_numFin - $_numDebut) + 1;
            if($_numDebut == $_numFin)
            {
                $_designation = $_nomImprimeTech . ' N° ' . $_numDebut;
            }else{
                $_designation = $_nomImprimeTech . ' N° ' . $_numDebut . ' à ' . $_numFin;
            }
            $_template->setValue('designation#' . $_i, $_designation);
            $_uteImprimeTech = $_imprime_tech->getCtImprimeTech()->getUteImprimeTech();
            $_template->setValue('unite#' . $_i, $_uteImprimeTech);
            $_template->setValue('quantite#' . $_i, $_quantite);
            $_total += $_quantite;
        }

        $_total  = number_format($_total, 0, ',', ' ');

        $_template->setValue('total', $_total);

        $_template->saveAs($_dest_tmp);

        return array(
            'download_path' => $_dest_tmp,
            'url_path'      => $_path_docx
            // 'url_path'      => $_path_pdf,
        );
    }

    /**
     * Fonction permettant de tester si le numéro de l'IT est déjà dans un autre BE
     * @param   $_typeit : Type de l'imprimée technique à ajouter dans le BE
     * @param   $_debut : Début des numéro des IT à ajouter dans le BE
     * @param   $_fin : Fin des numéro des IT à ajouter dans le BE
     * @return  $_exist : Retourne VRAI si le numéro est déjà dans le BE ou FAUX si le numéro est non existant
     */
    public function TestNumIT($_typeit ,$_debut, $_fin){
        $_exist = false;
        // $_list_it_bl = $this->getAllCtBordereau();
        $_list_it_bl = $this->getListITByTypeITInBordereau($_typeit, $_debut, $_fin);
        foreach($_list_it_bl as $_it_bl){
            $start = $_it_bl->getBlDebutNumero();
            $end = $_it_bl->getBlFinNumero();
            $_list_it_bl = range ($start , $end, $step = 1);
            if(in_array($_debut, $_list_it_bl) || in_array($_fin, $_list_it_bl)){
                $_exist = true;
            }
        }

        return $_exist;
    }
}
