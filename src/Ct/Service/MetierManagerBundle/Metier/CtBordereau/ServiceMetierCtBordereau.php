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

        $_dql    = "SELECT t
                    FROM $_entity_bl t 
                    WHERE   t.ctCentre = :ct_centre_id
                        AND t.blNumero = :bl_numero";
        $_query  = $this->_entity_manager->createQuery($_dql);
        $_query->setParameter('ct_centre_id', $_ct_centre_id);
        $_query->setParameter('bl_numero', $_bl_numero);
        $_ret = $_query->getResult();
        // if (count($_ret) > 0 && is_array($_ret))
        //     return $_ret[0];
        return $_ret;

    }

    /**
     * Générer bordereau de livraison
     *  @param  $centre : ID du centre destinataire
     *  @param  $numero : N° début de l'imprimé tech
     *  @return array Liste imprimés tech dans le bordereau array()
     */
    public function generateBordereauLivraison($centre, $numero)
    {
        // Recuperer managers
        $_centre_manager = $this->_container->get(ServiceName::SRV_METIER_CENTRE);

        $_bordereau = $this->getListInBordereau($centre, preg_replace('/\_/', '/', $numero));
        var_dump($_bordereau);
        $_centre = $_centre_manager->getCtCentreById($centre);

        $_nom_centre            = $_centre->getCtrNom();
        $_slct_centre           = $this->transformcenter($_nom_centre);
        $_nom_centre            = $_slct_centre[0];
        $_lieu_centre           = $_slct_centre[1];

        $_bl_directory          = $this->_container->getParameter('reporting_template_directory');
        $_source_template       = $_bl_directory . PathReportingName::TEMPLATE_BORDEREAU;

        $_phpWord               = new PhpWord();
        $_template              = $_phpWord->loadTemplate($_source_template);

        $_path                  = $_bl_directory . PathReportingName::GENERATE_BORDEREAU;
        $_dest_tmp              = $_path . $numero . '.docx';
        $_file_without_ext      = $numero;

        $_url_scheme            = $this->_container->get('request_stack')->getCurrentRequest()->server->get('HTTP_HOST');
        $_path_docx             = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_BORDEREAU . $numero . '.docx';
        $_path_pdf              = 'http://' . $_url_scheme . '/reporting/' . PathReportingName::GENERATE_BORDEREAU . $numero . '.pdf';

        // Centre et numéro du B.L
        $_template->setValue('centre', $_nom_centre);
        $_template->setValue('lieu', $_lieu_centre);
        $_template->setValue('bl_numero', preg_replace('/\_', '/', $numero));

        $_total = 0;

        foreach ($_bordereau as $_i => $_bordereau) {
            ++$_i;
            
            $_imprime_tech = $_bordereau->getCtImprimeTech;
            $_nom_imprime_tech = $_imprime_tech->getNomImprimeTech();
            $_unite = $_imprime_tech->getUteImprimeTech();
            $_numrero_debut = $_bordereau->getBlDebutNumero;
            $_numero_fin = $_bordereau->getBlFinNumero;
            if(!empty($_numero_fin))
            {
                $_designation = $_nom_imprime_tech . ' N° ' . $_numrero_debut . ' à ' . $_numero_fin;
                $_nombre = abs($_numero_fin - $_numrero_debut);
            }else{
                $_designation = $_nom_imprime_tech . ' N° ' .$_numrero_debut;
                $_nombre = 1;
            }

            $_nombre = number_format($_nombre, 0, ',', ' ');

            $_template->setValue('i', $_i);
            $_template->setValue('designation#' . $_i, $_designation);
            $_template->setValue('unite#' . $_i, $_unite);
            $_template->setValue('nombre#' . $_i, $_nombre);

            $_total += $_nombre;
        }
        $_total = number_format($_total, 0, ',', ' ');
        $_template->setValue('total', $_total);
        $_template->saveAs($_dest_tmp);

        // Recuperer manager
        $_const_av_ded_manager = $this->_container->get(ServiceName::SRV_METIER_CONST_AV_DED);
        // Convertir en PDF
        $_dest_tmp = $_const_av_ded_manager->convertToPdf($_path, $_file_without_ext);

        return array(
            'download_path' => $_dest_tmp,
            'url_path'      => $_path_docx
        );
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
            case "ALAROBIA"         : $centre[0] ='LE COLONEL, DIRECTEUR DES OPERATIONS TECHNIQUES';$center[1] = 'ALAROBIA'; break;

            case "ALASORA"          : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'ALASORA'; break;
            case "ANTSIRABE"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'ANTSIRABE'; break;
            case "BETONGOLO"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'BETONGOLO'; break;
            case "IVATO"            : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'IVATO'; break;
            case "TSIROANOMANDIDY"  : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'TSIROANOMANDIDY'; break;
            
            case "AMBATONDRAZAKA"   : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'AMBATONDRAZAKA'; break;
            case "FENERIVE-EST"     : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'FENERIVE-EST'; break;
            case "MORAMANGA"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'MORAMANGA'; break;
            case "TANAMBOROZANO"    : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'TOAMASINA'; break;
            case "BARIKADIMY"       : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'TOAMASINA'; break;

            case "AMBOSITRA"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'AMBOSITRA'; break;
            case "FARAFANGANA"      : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'FARAFANGANA'; break;
            case "BESOROHITRA"      : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'FIANARANTSOA'; break;
            case "MANAKARA"         : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'MANAKARA'; break;

            case "TRANOBOZAKA"      : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'ANTSIRANANA'; break;
            case "NOSY BE"          : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'NOSY BE'; break;
            case "SAMBAVA"          : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'SAMBAVA'; break;

            case "ANTSOHIHY"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'ANTSOHIHY'; break;
            case "AMBOROVY"         : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'MAHANJANGA'; break;

            case "AMBOVOMBE"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'AMBOVOMBE'; break;
            case "IHOSY"            : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'IHOSY'; break;
            case "MORONDAVA"        : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'MORONDAVA'; break;
            case "SANFIL"           : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'TOLIARA'; break;
            case "TAOLAGNARO"       : $centre[0] = 'LE CHEF DE CENTRE DE LA SECURITE ROUTIERE';     $center[1] = 'TAOLAGNARO'; break;

            case "CENTRE_RECEPTION_TECHNIQUE":
                                      $centre[0] = 'LE CHEF DE CENTRE DE LA RECEPTION TECHNIQUE';   $center[1] = 'ALASORA'; break;
            default                 : $centre = array(NULL, NULL);
        }
        return $centre;
    }

    function generateBL($list)
    {
        $_bl_centre = $this->_container->get(ServiceName::SRV_METIER_CENTRE);
$list = json_encode($list);
        return $list;
    }
}
