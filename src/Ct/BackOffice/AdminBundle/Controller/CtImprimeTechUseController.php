<?php

namespace Ct\BackOffice\AdminBundle\Controller;

use Ct\Service\MetierManagerBundle\Utils\ServiceName;
use Ct\Service\MetierManagerBundle\Form\CtBordereauType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use Ct\Service\MetierManagerBundle\Entity\CtImprimeTech;

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
        $_itu_list = $_itu_manager->getAllCtImprimeTechUseByOrder(array('id' => 'DESC'));
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

    public function editAction()
    {
        return $this->render('AdminBundle:CtImprimeTechUse:edit.html.twig', array(
            // ...
        ));
    }

    public function searchAction()
    {
        return $this->render('AdminBundle:CtImprimeTechUse:search.html.twig', array(
            // ...
        ));
    }

}
