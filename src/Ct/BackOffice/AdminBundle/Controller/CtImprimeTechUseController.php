<?php

namespace Ct\BackOffice\AdminBundle\Controller;

use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Form\CtImprimeTechUseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Ct\Service\MetierManagerBundle\Entity\CtImprimeTechUse;

class CtImprimeTechUseController extends Controller
{

    /**
     * Afficher toutes les utilisations d'imprimé technique
     * @return Render page
     */
    public function indexAction()
    {
        // Récupérer manager
        $_itu_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupérer tout les imprimés tech
        $_itu_list = $_itu_manager->getAllCtImprimeTechUsedByCentre();
        return $this->render('AdminBundle:CtImprimeTechUse:index.html.twig', array(
            'itu_listes' => $_itu_list,
        ));
    }

    public function newAction()
    {
        return $this->render('AdminBundle:CtImprimeTechUse:add.html.twig', array(
            // ...
        ));
    }

    /**
     * Affichage page modification utilisation IT
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Render page
     */
    public function editAction(CtImprimeTechUse $_imprime_tech_use)
    {
        if (!$_imprime_tech_use) {
            throw $this->createNotFoundException('Unable to find bordereau entity.');
        }

        $_edit_form = $this->createEditForm($_imprime_tech_use);

        return $this->render('AdminBundle:CtImprimeTechUse:edit.html.twig', array(
            'imprime_tech_use' => $_imprime_tech_use,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Modification bordereau
     * @param Request $_request requête
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Render page
     */
    public function updateAction(Request $_request, CtImprimeTechUse $_imprime_tech_use)
    {
        // Récupérer manager
        $_em_itu = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        if (!$_em_itu) {
            throw $this->createNotFoundException('Unable to find ImprimeTechUse entity.');
        }

        $_edit_form = $this->createEditForm($_imprime_tech_use);
        $_edit_form->handleRequest($_request);

        if ($_edit_form->isValid()) {
            $_em_itu->saveCtImprimeTechUse($_imprime_tech_use, 'update', NULL);
            $_em_itu->setFlash('success', "Utilisation de l'imprimé technique modifié avec succès.");
            return $this->redirect($this->generateUrl('imprime_tech_use_index'));
        }

        return $this->render('AdminBundle:CtImprimeTechUse:edit.html.twig', array(
            'imprime_tech_use' => $_imprime_tech_use,
            'edit_form'  => $_edit_form->createView()
        ));
    }

    /**
     * Création formulaire de création bordereau
     * @param CtImprimeTechUse $_imprime_tech_use The entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(CtImprimeTechUse $_imprime_tech_use)
    {
        $_form = $this->createForm(CtImprimeTechUseType::class, $_imprime_tech_use, array(
            'action' => $this->generateUrl('imprime_tech_use_update', array('id' => $_imprime_tech_use->getId())),
            'method' => 'PUT',
        ));

        return $_form;
    }

    /**
     * Recherche bordereau pour un centre
     * @param Request $_request requête
     * @return Render page
     */
    public function searchAction(Request $_request)
    {
        // Liste des types d'imprimés techniques
        $_em_itu = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);
        $_em = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH);
        $_it = $_em->getAllCtImprimeTechByOrder(array('nomImprimeTech' => 'ASC'));
        // Chargement de formulaire
        $_imprime_tech_use = new CtImprimeTechUse();
        $_search_form = $this->createSearchForm($_imprime_tech_use);
        $_search_form->handleRequest($_request);

        // Initialiser les valeurs des variables
        $_itu_select = "";
        $_itu_numero = "";
        $_ct_imprime_tech_id = "";
        $_nomImprimeTech = "";

        if ($_request->getMethod() === 'POST' )
        {
            // Récupérer les données formulaire
            $_data = $_request->request->all();
            $_ct_imprime_tech_id = $_data['ct_imprime_tech_id'];
            $_itu_numero = $_data['itu_numero'];
            // Recherche du centre selectionné
            $_it = $_em->getCtImprimeTechById($_ct_imprime_tech_id);
            $_ct_imprime_tech_id = $_it->getId();
            $_nomImprimeTech = $_it->getNomImprimeTech();
            // Récupérer les listes numéro d'immatriculation
            $_it = $_em->getAllCtImprimeTechByOrder(array('nomImprimeTech' => 'ASC'));
            $_itu_select = $_em_itu->getListNumeroIT($_ct_imprime_tech_id, $_itu_numero);
            if(empty($_itu_select)) $_em->setFlash('error', 'L\'imprimé technique '.$_nomImprimeTech.' N° '.$_itu_numero.' est introuvable pour être modifier.');
        }

        return $this->render('AdminBundle:CtImprimeTechUse:search.html.twig', array(
            'imprime' => $_itu_select,
            'itu_numero' => $_itu_numero,
            'ct_imprime_tech_id' => $_ct_imprime_tech_id,
            'nomImprimeTech' => $_nomImprimeTech,
            'list_its' => $_it,
            'search_form' => $_search_form->createView()
        ));
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtImprimeTechUse $_imprime_tech_use The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createSearchForm(CtImprimeTechUse $_imprime_tech_use)
    {
        $_form = $this->createForm(CtImprimeTechUseType::class, $_imprime_tech_use, array(
            'action' => $this->generateUrl('imprime_tech_use_search', array()),
            'method' => 'POST',
        ));

        return $_form;
    }

    /**
     * Autocomplète pour le numéro d'imprimé technique
     * @param Request $_request
     * @return JsonResponse
     */
    public function showNumeroITAjaxAction(Request $_request) {
        // Récupérer manager
        $_em = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        // Récupérer les données formulaire
        $_data = $_request->request->all();
        $_ct_imprime_tech_id = $_data['ct_imprime_tech_id'];
        $_itu_numero = $_data['itu_numero'];

        // Récupérer les listes numéro d'immatriculation
        $_list_numero_it = $_em->getListNumeroIT($_ct_imprime_tech_id, $_itu_numero);

        return $_list_numero_it;
    }

    /**
     * Reinitialisaer utilisation d'un imprimé technique
     * @param Request $_request requête
     * @param CtImprimeTechUse $_imprime_tech_use
     * @return Redirect redirection
     */
    public function resetAction(Request $_request, CtImprimeTechUse $_imprime_tech_use)
    {
        // Récupérer manager
        $_bl_manager = $this->get(ServiceName::SRV_METIER_IMPRIME_TECH_USE);

        $_reset_form = $this->createResetForm($_imprime_tech_use);
        $_reset_form->handleRequest($_request);

        // Réinitialiser l'utilisation de l'imprimé technique
        $_bl_manager->saveCtImprimeTechUse($_imprime_tech_use, 'reset', NULL);

        $_bl_manager->setFlash('success', 'Utilisation d\'imprimé technique réinitialisée.');

        return $this->redirectToRoute('imprime_tech_use_index');
    }

    /**
     * Création formulaire de suppression imprimé tech du bordereau
     * @param CtBordereau $_bordereau The imprimé tech entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createResetForm(CtImprimeTechUse $_imprime_tech_use)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('imprime_tech_use_edit', array('id' => $_imprime_tech_use->getId())))
            ->setMethod('POST')
            ->getForm();
    }
}
