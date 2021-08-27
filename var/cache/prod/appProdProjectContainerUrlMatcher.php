<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // user_index
                if ('/admin/user' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user_index');
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
                }
                not_user_index:

                // user_new
                if ('/admin/user/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_user_new;
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }
                not_user_new:

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::editAction',));
                }
                not_user_edit:

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

                // user_delete_group
                if ('/admin/user/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_user_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::deleteGroupAction',  '_route' => 'user_delete_group',);
                }
                not_user_delete_group:

                // user_delete_image_ajax
                if ('/admin/user/delete-image' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_user_delete_image_ajax;
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\UserController::deleteImageAjaxAction',  '_route' => 'user_delete_image_ajax',);
                }
                not_user_delete_image_ajax:

            }

            elseif (0 === strpos($pathinfo, '/admin/verificateur')) {
                // verificateur_index
                if ('/admin/verificateur' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_verificateur_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'verificateur_index');
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::indexAction',  '_route' => 'verificateur_index',);
                }
                not_verificateur_index:

                // verificateur_new
                if ('/admin/verificateur/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_verificateur_new;
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::newAction',  '_route' => 'verificateur_new',);
                }
                not_verificateur_new:

                // verificateur_edit
                if (preg_match('#^/admin/verificateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_verificateur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verificateur_edit')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::editAction',));
                }
                not_verificateur_edit:

                // verificateur_update
                if (preg_match('#^/admin/verificateur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_verificateur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verificateur_update')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::updateAction',));
                }
                not_verificateur_update:

                // verificateur_delete
                if (preg_match('#^/admin/verificateur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_verificateur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verificateur_delete')), array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::deleteAction',));
                }
                not_verificateur_delete:

                // verificateur_delete_group
                if ('/admin/verificateur/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_verificateur_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\VerificateurController::deleteGroupAction',  '_route' => 'verificateur_delete_group',);
                }
                not_verificateur_delete_group:

            }

            // dashboard_index
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dashboard_index');
                }

                return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDashboardController::indexAction',  '_route' => 'dashboard_index',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/carosserie')) {
                    // carosserie_index
                    if ('/admin/carosserie' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_carosserie_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'carosserie_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::indexAction',  '_route' => 'carosserie_index',);
                    }
                    not_carosserie_index:

                    // carosserie_new
                    if ('/admin/carosserie/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carosserie_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::newAction',  '_route' => 'carosserie_new',);
                    }
                    not_carosserie_new:

                    // carosserie_edit
                    if (preg_match('#^/admin/carosserie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carosserie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carosserie_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::editAction',));
                    }
                    not_carosserie_edit:

                    // carosserie_update
                    if (preg_match('#^/admin/carosserie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_carosserie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carosserie_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::updateAction',));
                    }
                    not_carosserie_update:

                    // carosserie_delete
                    if (preg_match('#^/admin/carosserie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_carosserie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carosserie_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::deleteAction',));
                    }
                    not_carosserie_delete:

                    // carosserie_delete_group
                    if ('/admin/carosserie/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_carosserie_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarosserieController::deleteGroupAction',  '_route' => 'carosserie_delete_group',);
                    }
                    not_carosserie_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/carte-grise')) {
                    // carte_grise_index
                    if ('/admin/carte-grise' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_carte_grise_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'carte_grise_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::indexAction',  '_route' => 'carte_grise_index',);
                    }
                    not_carte_grise_index:

                    // carte_grise_new
                    if ('/admin/carte-grise/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carte_grise_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::newAction',  '_route' => 'carte_grise_new',);
                    }
                    not_carte_grise_new:

                    // carte_grise_edit
                    if (preg_match('#^/admin/carte\\-grise/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_carte_grise_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_grise_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::editAction',));
                    }
                    not_carte_grise_edit:

                    // carte_grise_update
                    if (preg_match('#^/admin/carte\\-grise/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_carte_grise_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_grise_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::updateAction',));
                    }
                    not_carte_grise_update:

                    // carte_grise_delete
                    if (preg_match('#^/admin/carte\\-grise/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_carte_grise_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'carte_grise_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::deleteAction',));
                    }
                    not_carte_grise_delete:

                    // carte_grise_delete_group
                    if ('/admin/carte-grise/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_carte_grise_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::deleteGroupAction',  '_route' => 'carte_grise_delete_group',);
                    }
                    not_carte_grise_delete_group:

                    if (0 === strpos($pathinfo, '/admin/carte-grise/show-ajax')) {
                        // carte_grise_fill_form_ajax
                        if ('/admin/carte-grise/show-ajax' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_carte_grise_fill_form_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::fillFormAjaxAction',  '_route' => 'carte_grise_fill_form_ajax',);
                        }
                        not_carte_grise_fill_form_ajax:

                        // carte_grise_fill_form_by_numero_identification_ajax
                        if ('/admin/carte-grise/show-ajax-by-numero-identification' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_carte_grise_fill_form_by_numero_identification_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::fillFormAjaxByNumeroIdentificationAction',  '_route' => 'carte_grise_fill_form_by_numero_identification_ajax',);
                        }
                        not_carte_grise_fill_form_by_numero_identification_ajax:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/carte-grise/show-numero-')) {
                        // carte_grise_show_numero_immatriculation_ajax
                        if ('/admin/carte-grise/show-numero-immatriculation-ajax' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_carte_grise_show_numero_immatriculation_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::showNumeroImmatriculationAjaxAction',  '_route' => 'carte_grise_show_numero_immatriculation_ajax',);
                        }
                        not_carte_grise_show_numero_immatriculation_ajax:

                        // carte_grise_show_numero_identification_ajax
                        if ('/admin/carte-grise/show-numero-identification-ajax' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_carte_grise_show_numero_identification_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::showNumeroIdentificationAjaxAction',  '_route' => 'carte_grise_show_numero_identification_ajax',);
                        }
                        not_carte_grise_show_numero_identification_ajax:

                        // carte_grise_show_numero_serie_ajax
                        if ('/admin/carte-grise/show-numero-serie-ajax' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_carte_grise_show_numero_serie_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::showNumeroSerieAjaxAction',  '_route' => 'carte_grise_show_numero_serie_ajax',);
                        }
                        not_carte_grise_show_numero_serie_ajax:

                    }

                    // carte_grise_check_carte_grise_ajax
                    if ('/admin/carte-grise/check-carte-grise-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_carte_grise_check_carte_grise_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::checkCarteGriseAjaxAction',  '_route' => 'carte_grise_check_carte_grise_ajax',);
                    }
                    not_carte_grise_check_carte_grise_ajax:

                    // carte_grise_fill_info_by_immatriculation_ajax
                    if ('/admin/carte-grise/fill-info-by-immatriculation-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_carte_grise_fill_info_by_immatriculation_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::fillInfoByImmatriculationAjaxAction',  '_route' => 'carte_grise_fill_info_by_immatriculation_ajax',);
                    }
                    not_carte_grise_fill_info_by_immatriculation_ajax:

                    // carte_grise_fill_info_by_numero_identification_ajax
                    if ('/admin/carte-grise/fill-info-by-numero-identification-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_carte_grise_fill_info_by_numero_identification_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCarteGriseController::fillInfoByNumeroIdentificationAjaxAction',  '_route' => 'carte_grise_fill_info_by_numero_identification_ajax',);
                    }
                    not_carte_grise_fill_info_by_numero_identification_ajax:

                }

                elseif (0 === strpos($pathinfo, '/admin/centre')) {
                    // centre_index
                    if ('/admin/centre' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_centre_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'centre_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::indexAction',  '_route' => 'centre_index',);
                    }
                    not_centre_index:

                    // centre_new
                    if ('/admin/centre/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_centre_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::newAction',  '_route' => 'centre_new',);
                    }
                    not_centre_new:

                    // centre_edit
                    if (preg_match('#^/admin/centre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_centre_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::editAction',));
                    }
                    not_centre_edit:

                    // centre_update
                    if (preg_match('#^/admin/centre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_centre_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::updateAction',));
                    }
                    not_centre_update:

                    // centre_delete
                    if (preg_match('#^/admin/centre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_centre_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'centre_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::deleteAction',));
                    }
                    not_centre_delete:

                    // centre_delete_group
                    if ('/admin/centre/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_centre_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtCentreController::deleteGroupAction',  '_route' => 'centre_delete_group',);
                    }
                    not_centre_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/contre-visite')) {
                    // contre_visite_index
                    if ('/admin/contre-visite' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_contre_visite_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'contre_visite_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::indexAction',  '_route' => 'contre_visite_index',);
                    }
                    not_contre_visite_index:

                    // contre_visite_new
                    if ('/admin/contre-visite/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_contre_visite_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::newAction',  '_route' => 'contre_visite_new',);
                    }
                    not_contre_visite_new:

                    // contre_visite_edit
                    if (preg_match('#^/admin/contre\\-visite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_contre_visite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contre_visite_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::editAction',));
                    }
                    not_contre_visite_edit:

                    // contre_visite_update
                    if (preg_match('#^/admin/contre\\-visite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_contre_visite_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contre_visite_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::updateAction',));
                    }
                    not_contre_visite_update:

                    // contre_visite_delete
                    if (preg_match('#^/admin/contre\\-visite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_contre_visite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contre_visite_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::deleteAction',));
                    }
                    not_contre_visite_delete:

                    // contre_visite_delete_group
                    if ('/admin/contre-visite/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_contre_visite_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::deleteGroupAction',  '_route' => 'contre_visite_delete_group',);
                    }
                    not_contre_visite_delete_group:

                    // contre_visite_generate_reporting_ajax
                    if ('/admin/contre-visite/generate-reporting-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_contre_visite_generate_reporting_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::generateReportingAjaxAction',  '_route' => 'contre_visite_generate_reporting_ajax',);
                    }
                    not_contre_visite_generate_reporting_ajax:

                    // contre_visite_search_by_serie
                    if ('/admin/contre-visite/search-by-serie' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_contre_visite_search_by_serie;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::searchBySerieAction',  '_route' => 'contre_visite_search_by_serie',);
                    }
                    not_contre_visite_search_by_serie:

                    // contre_visite_search_by_immatriculation
                    if ('/admin/contre-visite/search-by-immatriculation' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_contre_visite_search_by_immatriculation;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtContreVisiteController::searchByImmatriculationAction',  '_route' => 'contre_visite_search_by_immatriculation',);
                    }
                    not_contre_visite_search_by_immatriculation:

                }

                elseif (0 === strpos($pathinfo, '/admin/constatation-avant-dedouanement')) {
                    // const_av_ded_index
                    if ('/admin/constatation-avant-dedouanement' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_const_av_ded_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'const_av_ded_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::indexAction',  '_route' => 'const_av_ded_index',);
                    }
                    not_const_av_ded_index:

                    // const_av_ded_new
                    if ('/admin/constatation-avant-dedouanement/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::newAction',  '_route' => 'const_av_ded_new',);
                    }
                    not_const_av_ded_new:

                    // const_av_ded_edit
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::editAction',));
                    }
                    not_const_av_ded_edit:

                    // const_av_ded_view
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_view')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::viewAction',));
                    }
                    not_const_av_ded_view:

                    // const_av_ded_update
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_const_av_ded_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::updateAction',));
                    }
                    not_const_av_ded_update:

                    // const_av_ded_delete
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_const_av_ded_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::deleteAction',));
                    }
                    not_const_av_ded_delete:

                    // const_av_ded_delete_group
                    if ('/admin/constatation-avant-dedouanement/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_const_av_ded_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::deleteGroupAction',  '_route' => 'const_av_ded_delete_group',);
                    }
                    not_const_av_ded_delete_group:

                    // const_av_ded_generer_pv
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/generer\\-pv$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_generer_pv;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_generer_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::genererPvAction',));
                    }
                    not_const_av_ded_generer_pv:

                    // const_av_ded_download_pv
                    if (preg_match('#^/admin/constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/download\\-pv$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_download_pv;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_download_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::downloadPvAction',));
                    }
                    not_const_av_ded_download_pv:

                    // const_av_ded_generate_reporting_feuille_caisse_ajax
                    if ('/admin/constatation-avant-dedouanement/generate-reporting-cad-feuille-caisse-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_generate_reporting_feuille_caisse_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::generateReportingFeuilleCaisseAjaxAction',  '_route' => 'const_av_ded_generate_reporting_feuille_caisse_ajax',);
                    }
                    not_const_av_ded_generate_reporting_feuille_caisse_ajax:

                    // const_av_ded_generate_reporting_fiche_controle_ajax
                    if ('/admin/constatation-avant-dedouanement/generate-reporting-cad-fiche-controle-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_const_av_ded_generate_reporting_fiche_controle_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementController::generateReportingFicheControleAjaxAction',  '_route' => 'const_av_ded_generate_reporting_fiche_controle_ajax',);
                    }
                    not_const_av_ded_generate_reporting_fiche_controle_ajax:

                    if (0 === strpos($pathinfo, '/admin/constatation-avant-dedouanement-carac')) {
                        // const_av_ded_carac_index
                        if ('/admin/constatation-avant-dedouanement-carac' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_const_av_ded_carac_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'const_av_ded_carac_index');
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::indexAction',  '_route' => 'const_av_ded_carac_index',);
                        }
                        not_const_av_ded_carac_index:

                        // const_av_ded_carac_new
                        if ('/admin/constatation-avant-dedouanement-carac/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_const_av_ded_carac_new;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::newAction',  '_route' => 'const_av_ded_carac_new',);
                        }
                        not_const_av_ded_carac_new:

                        // const_av_ded_carac_edit
                        if (preg_match('#^/admin/constatation\\-avant\\-dedouanement\\-carac/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_const_av_ded_carac_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_carac_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::editAction',));
                        }
                        not_const_av_ded_carac_edit:

                        // const_av_ded_carac_update
                        if (preg_match('#^/admin/constatation\\-avant\\-dedouanement\\-carac/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($requestMethod, array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_const_av_ded_carac_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_carac_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::updateAction',));
                        }
                        not_const_av_ded_carac_update:

                        // const_av_ded_carac_delete
                        if (preg_match('#^/admin/constatation\\-avant\\-dedouanement\\-carac/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                                $allow = array_merge($allow, array('GET', 'DELETE'));
                                goto not_const_av_ded_carac_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'const_av_ded_carac_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::deleteAction',));
                        }
                        not_const_av_ded_carac_delete:

                        // const_av_ded_carac_delete_group
                        if ('/admin/constatation-avant-dedouanement-carac/delete-group' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_const_av_ded_carac_delete_group;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtConstatationAvDedouanementCaracController::deleteGroupAction',  '_route' => 'const_av_ded_carac_delete_group',);
                        }
                        not_const_av_ded_carac_delete_group:

                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/genre')) {
                // genre_index
                if ('/admin/genre' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_genre_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'genre_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::indexAction',  '_route' => 'genre_index',);
                }
                not_genre_index:

                // genre_new
                if ('/admin/genre/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_genre_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::newAction',  '_route' => 'genre_new',);
                }
                not_genre_new:

                // genre_edit
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_genre_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::editAction',));
                }
                not_genre_edit:

                // genre_update
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_genre_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::updateAction',));
                }
                not_genre_update:

                // genre_delete
                if (preg_match('#^/admin/genre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_genre_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::deleteAction',));
                }
                not_genre_delete:

                // genre_delete_group
                if ('/admin/genre/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_genre_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreController::deleteGroupAction',  '_route' => 'genre_delete_group',);
                }
                not_genre_delete_group:

                if (0 === strpos($pathinfo, '/admin/genre-tarif')) {
                    // genre_tarif_index
                    if ('/admin/genre-tarif' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_genre_tarif_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'genre_tarif_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::indexAction',  '_route' => 'genre_tarif_index',);
                    }
                    not_genre_tarif_index:

                    // genre_tarif_new
                    if ('/admin/genre-tarif/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_genre_tarif_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::newAction',  '_route' => 'genre_tarif_new',);
                    }
                    not_genre_tarif_new:

                    // genre_tarif_edit
                    if (preg_match('#^/admin/genre\\-tarif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_genre_tarif_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_tarif_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::editAction',));
                    }
                    not_genre_tarif_edit:

                    // genre_tarif_update
                    if (preg_match('#^/admin/genre\\-tarif/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_genre_tarif_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_tarif_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::updateAction',));
                    }
                    not_genre_tarif_update:

                    // genre_tarif_delete
                    if (preg_match('#^/admin/genre\\-tarif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_genre_tarif_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_tarif_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::deleteAction',));
                    }
                    not_genre_tarif_delete:

                    // genre_tarif_delete_group
                    if ('/admin/genre-tarif/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_genre_tarif_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreTarifController::deleteGroupAction',  '_route' => 'genre_tarif_delete_group',);
                    }
                    not_genre_tarif_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/genre-categorie')) {
                    // genre_categorie_index
                    if ('/admin/genre-categorie' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_genre_categorie_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'genre_categorie_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::indexAction',  '_route' => 'genre_categorie_index',);
                    }
                    not_genre_categorie_index:

                    // genre_categorie_new
                    if ('/admin/genre-categorie/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_genre_categorie_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::newAction',  '_route' => 'genre_categorie_new',);
                    }
                    not_genre_categorie_new:

                    // genre_categorie_edit
                    if (preg_match('#^/admin/genre\\-categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_genre_categorie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_categorie_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::editAction',));
                    }
                    not_genre_categorie_edit:

                    // genre_categorie_update
                    if (preg_match('#^/admin/genre\\-categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_genre_categorie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_categorie_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::updateAction',));
                    }
                    not_genre_categorie_update:

                    // genre_categorie_delete
                    if (preg_match('#^/admin/genre\\-categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_genre_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_categorie_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::deleteAction',));
                    }
                    not_genre_categorie_delete:

                    // genre_categorie_delete_group
                    if ('/admin/genre-categorie/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_genre_categorie_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtGenreCategorieController::deleteGroupAction',  '_route' => 'genre_categorie_delete_group',);
                    }
                    not_genre_categorie_delete_group:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/role')) {
                // role_index
                if ('/admin/role' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_role_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'role_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::indexAction',  '_route' => 'role_index',);
                }
                not_role_index:

                // role_new
                if ('/admin/role/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_role_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::newAction',  '_route' => 'role_new',);
                }
                not_role_new:

                // role_edit
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_role_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::editAction',));
                }
                not_role_edit:

                // role_update
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_role_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::updateAction',));
                }
                not_role_update:

                // role_delete
                if (preg_match('#^/admin/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_role_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::deleteAction',));
                }
                not_role_delete:

                // role_delete_group
                if ('/admin/role/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_role_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtRoleController::deleteGroupAction',  '_route' => 'role_delete_group',);
                }
                not_role_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/reception')) {
                // reception_index
                if ('/admin/reception' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reception_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reception_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::indexAction',  '_route' => 'reception_index',);
                }
                not_reception_index:

                // reception_new
                if (0 === strpos($pathinfo, '/admin/reception/new') && preg_match('#^/admin/reception/new(?:/(?P<type>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_new')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::newAction',  'type' => 0,));
                }
                not_reception_new:

                // reception_edit
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::editAction',));
                }
                not_reception_edit:

                // reception_view
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_view')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::viewAction',));
                }
                not_reception_view:

                // reception_update
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_reception_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::updateAction',));
                }
                not_reception_update:

                // reception_delete
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_reception_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::deleteAction',));
                }
                not_reception_delete:

                // reception_delete_group
                if ('/admin/reception/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_reception_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::deleteGroupAction',  '_route' => 'reception_delete_group',);
                }
                not_reception_delete_group:

                // reception_centre_ajax
                if ('/admin/reception/centre-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_centre_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::selectCentreAjaxAction',  '_route' => 'reception_centre_ajax',);
                }
                not_reception_centre_ajax:

                // reception_autocomplete_vehicule
                if ('/admin/reception/auto-vehicule' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_autocomplete_vehicule;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::autoCompleteNumSerieAction',  '_route' => 'reception_autocomplete_vehicule',);
                }
                not_reception_autocomplete_vehicule:

                // reception_generer_pv
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/generer\\-pv$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_pv;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_generer_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererPvAction',  'id' => 0,));
                }
                not_reception_generer_pv:

                if (0 === strpos($pathinfo, '/admin/reception/d')) {
                    // reception_download_pv
                    if (0 === strpos($pathinfo, '/admin/reception/download-pv') && preg_match('#^/admin/reception/download\\-pv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reception_download_pv;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_download_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::downloadPvAction',));
                    }
                    not_reception_download_pv:

                    // reception_download_duplicata_pv
                    if (0 === strpos($pathinfo, '/admin/reception/download-duplicata-pv') && preg_match('#^/admin/reception/download\\-duplicata\\-pv/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reception_download_duplicata_pv;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_download_duplicata_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::downloadPvDuplicataAction',));
                    }
                    not_reception_download_duplicata_pv:

                    // reception_duplicata
                    if ('/admin/reception/duplicata' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reception_duplicata;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::duplicataAction',  '_route' => 'reception_duplicata',);
                    }
                    not_reception_duplicata:

                }

                // reception_generer_pv_ajax
                if ('/admin/reception/pv-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_pv_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererPvAjaxAction',  '_route' => 'reception_generer_pv_ajax',);
                }
                not_reception_generer_pv_ajax:

                // reception_generer_pv_duplicata_ajax
                if ('/admin/reception/pv-duplicata-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_pv_duplicata_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererPvDuplicataAjaxAction',  '_route' => 'reception_generer_pv_duplicata_ajax',);
                }
                not_reception_generer_pv_duplicata_ajax:

                // reception_autocomplete_num_serie_duplicata
                if ('/admin/reception/auto-duplicata-serie' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_autocomplete_num_serie_duplicata;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::autoCompleteNumSerieDuplicataAction',  '_route' => 'reception_autocomplete_num_serie_duplicata',);
                }
                not_reception_autocomplete_num_serie_duplicata:

                // reception_autocomplete_immatricule_duplicata
                if ('/admin/reception/auto-duplicata-immatricule' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_autocomplete_immatricule_duplicata;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::autoCompleteImmatriculeDuplicataAction',  '_route' => 'reception_autocomplete_immatricule_duplicata',);
                }
                not_reception_autocomplete_immatricule_duplicata:

                // reception_generer_duplicata_pv
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/generer\\-pv\\-duplicata$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_duplicata_pv;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_generer_duplicata_pv')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererPvDuplicataAction',));
                }
                not_reception_generer_duplicata_pv:

                // reception_generer_fdc_rec
                if (0 === strpos($pathinfo, '/admin/reception/generer-fdc-rec') && preg_match('#^/admin/reception/generer\\-fdc\\-rec(?:/(?P<date>[^/]++)(?:/(?P<type>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_fdc_rec;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_generer_fdc_rec')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererFeuilleDeCaisseReceptionAction',  'date' => 0,  'type' => 0,));
                }
                not_reception_generer_fdc_rec:

                // reception_generer_fdctrl_rec
                if (0 === strpos($pathinfo, '/admin/reception/generer-fiche-controle-rec') && preg_match('#^/admin/reception/generer\\-fiche\\-controle\\-rec(?:/(?P<date>[^/]++)(?:/(?P<type>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_generer_fdctrl_rec;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_generer_fdctrl_rec')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::genererFicheDeControleReceptionAction',  'date' => 0,  'type' => 0,));
                }
                not_reception_generer_fdctrl_rec:

                // reception_redirect_to_edit
                if (preg_match('#^/admin/reception/(?P<id>[^/]++)/redirect\\-to\\-edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reception_redirect_to_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reception_redirect_to_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::redirectToEditAction',));
                }
                not_reception_redirect_to_edit:

                if (0 === strpos($pathinfo, '/admin/reception/s')) {
                    // reception_search
                    if ('/admin/reception/search' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_reception_search;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::searchAction',  '_route' => 'reception_search',);
                    }
                    not_reception_search:

                    // reception_show_numero_immatriculation_ajax
                    if ('/admin/reception/show-numero-immatriculation-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_reception_show_numero_immatriculation_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::showNumeroImmatriculationAjaxAction',  '_route' => 'reception_show_numero_immatriculation_ajax',);
                    }
                    not_reception_show_numero_immatriculation_ajax:

                    // reception_show_numero_serie_ajax
                    if ('/admin/reception/show-numero-serie-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_reception_show_numero_serie_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::showNumeroSerieAjaxAction',  '_route' => 'reception_show_numero_serie_ajax',);
                    }
                    not_reception_show_numero_serie_ajax:

                }

                // reception_get_info_ajax
                if ('/admin/reception/get-info-ajax' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_reception_get_info_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtReceptionController::getInfoAjaxAction',  '_route' => 'reception_get_info_ajax',);
                }
                not_reception_get_info_ajax:

            }

            elseif (0 === strpos($pathinfo, '/admin/anomalie')) {
                // anomalie_index
                if ('/admin/anomalie' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_anomalie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'anomalie_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::indexAction',  '_route' => 'anomalie_index',);
                }
                not_anomalie_index:

                // anomalie_new
                if ('/admin/anomalie/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_anomalie_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::newAction',  '_route' => 'anomalie_new',);
                }
                not_anomalie_new:

                // anomalie_edit
                if (preg_match('#^/admin/anomalie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_anomalie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anomalie_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::editAction',));
                }
                not_anomalie_edit:

                // anomalie_update
                if (preg_match('#^/admin/anomalie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_anomalie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anomalie_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::updateAction',));
                }
                not_anomalie_update:

                // anomalie_delete
                if (preg_match('#^/admin/anomalie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_anomalie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'anomalie_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::deleteAction',));
                }
                not_anomalie_delete:

                // anomalie_delete_group
                if ('/admin/anomalie/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_anomalie_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtAnomalieController::deleteGroupAction',  '_route' => 'anomalie_delete_group',);
                }
                not_anomalie_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/motif')) {
                // motif_index
                if ('/admin/motif' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_motif_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'motif_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::indexAction',  '_route' => 'motif_index',);
                }
                not_motif_index:

                // motif_new
                if ('/admin/motif/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_motif_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::newAction',  '_route' => 'motif_new',);
                }
                not_motif_new:

                // motif_edit
                if (preg_match('#^/admin/motif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_motif_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::editAction',));
                }
                not_motif_edit:

                // motif_update
                if (preg_match('#^/admin/motif/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_motif_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::updateAction',));
                }
                not_motif_update:

                // motif_delete
                if (preg_match('#^/admin/motif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_motif_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::deleteAction',));
                }
                not_motif_delete:

                // motif_delete_group
                if ('/admin/motif/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_motif_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifController::deleteGroupAction',  '_route' => 'motif_delete_group',);
                }
                not_motif_delete_group:

                if (0 === strpos($pathinfo, '/admin/motif-tarif')) {
                    // motif_tarif_index
                    if ('/admin/motif-tarif' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_motif_tarif_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'motif_tarif_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::indexAction',  '_route' => 'motif_tarif_index',);
                    }
                    not_motif_tarif_index:

                    // motif_tarif_new
                    if ('/admin/motif-tarif/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_motif_tarif_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::newAction',  '_route' => 'motif_tarif_new',);
                    }
                    not_motif_tarif_new:

                    // motif_tarif_edit
                    if (preg_match('#^/admin/motif\\-tarif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_motif_tarif_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_tarif_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::editAction',));
                    }
                    not_motif_tarif_edit:

                    // motif_tarif_update
                    if (preg_match('#^/admin/motif\\-tarif/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_motif_tarif_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_tarif_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::updateAction',));
                    }
                    not_motif_tarif_update:

                    // motif_tarif_delete
                    if (preg_match('#^/admin/motif\\-tarif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_motif_tarif_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motif_tarif_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::deleteAction',));
                    }
                    not_motif_tarif_delete:

                    // motif_tarif_delete_group
                    if ('/admin/motif-tarif/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_motif_tarif_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMotifTarifController::deleteGroupAction',  '_route' => 'motif_tarif_delete_group',);
                    }
                    not_motif_tarif_delete_group:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/marque')) {
                // marque_index
                if ('/admin/marque' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_marque_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'marque_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::indexAction',  '_route' => 'marque_index',);
                }
                not_marque_index:

                // marque_new
                if ('/admin/marque/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_marque_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::newAction',  '_route' => 'marque_new',);
                }
                not_marque_new:

                // marque_edit
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_marque_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::editAction',));
                }
                not_marque_edit:

                // marque_update
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_marque_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::updateAction',));
                }
                not_marque_update:

                // marque_delete
                if (preg_match('#^/admin/marque/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_marque_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::deleteAction',));
                }
                not_marque_delete:

                // marque_delete_group
                if ('/admin/marque/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_marque_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtMarqueController::deleteGroupAction',  '_route' => 'marque_delete_group',);
                }
                not_marque_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/province')) {
                // province_index
                if ('/admin/province' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_province_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'province_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::indexAction',  '_route' => 'province_index',);
                }
                not_province_index:

                // province_new
                if ('/admin/province/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_province_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::newAction',  '_route' => 'province_new',);
                }
                not_province_new:

                // province_edit
                if (preg_match('#^/admin/province/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_province_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'province_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::editAction',));
                }
                not_province_edit:

                // province_update
                if (preg_match('#^/admin/province/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_province_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'province_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::updateAction',));
                }
                not_province_update:

                // province_delete
                if (preg_match('#^/admin/province/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_province_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'province_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::deleteAction',));
                }
                not_province_delete:

                // province_delete_group
                if ('/admin/province/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_province_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProvinceController::deleteGroupAction',  '_route' => 'province_delete_group',);
                }
                not_province_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/proces-verbal')) {
                // proces_verbal_index
                if ('/admin/proces-verbal' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_proces_verbal_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'proces_verbal_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::indexAction',  '_route' => 'proces_verbal_index',);
                }
                not_proces_verbal_index:

                // proces_verbal_new
                if ('/admin/proces-verbal/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_proces_verbal_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::newAction',  '_route' => 'proces_verbal_new',);
                }
                not_proces_verbal_new:

                // proces_verbal_edit
                if (preg_match('#^/admin/proces\\-verbal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_proces_verbal_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proces_verbal_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::editAction',));
                }
                not_proces_verbal_edit:

                // proces_verbal_update
                if (preg_match('#^/admin/proces\\-verbal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_proces_verbal_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proces_verbal_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::updateAction',));
                }
                not_proces_verbal_update:

                // proces_verbal_delete
                if (preg_match('#^/admin/proces\\-verbal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_proces_verbal_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proces_verbal_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::deleteAction',));
                }
                not_proces_verbal_delete:

                // proces_verbal_delete_group
                if ('/admin/proces-verbal/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_proces_verbal_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtProcesVerbalController::deleteGroupAction',  '_route' => 'proces_verbal_delete_group',);
                }
                not_proces_verbal_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/energie')) {
                // energie_index
                if ('/admin/energie' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_energie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'energie_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::indexAction',  '_route' => 'energie_index',);
                }
                not_energie_index:

                // energie_new
                if ('/admin/energie/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_energie_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::newAction',  '_route' => 'energie_new',);
                }
                not_energie_new:

                // energie_edit
                if (preg_match('#^/admin/energie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_energie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'energie_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::editAction',));
                }
                not_energie_edit:

                // energie_update
                if (preg_match('#^/admin/energie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_energie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'energie_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::updateAction',));
                }
                not_energie_update:

                // energie_delete
                if (preg_match('#^/admin/energie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_energie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'energie_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::deleteAction',));
                }
                not_energie_delete:

                // energie_delete_group
                if ('/admin/energie/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_energie_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtSourceEnergieController::deleteGroupAction',  '_route' => 'energie_delete_group',);
                }
                not_energie_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/usage')) {
                // usage_index
                if ('/admin/usage' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_usage_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usage_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::indexAction',  '_route' => 'usage_index',);
                }
                not_usage_index:

                // usage_new
                if ('/admin/usage/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usage_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::newAction',  '_route' => 'usage_new',);
                }
                not_usage_new:

                // usage_edit
                if (preg_match('#^/admin/usage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usage_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::editAction',));
                }
                not_usage_edit:

                // usage_update
                if (preg_match('#^/admin/usage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::updateAction',));
                }
                not_usage_update:

                // usage_delete
                if (preg_match('#^/admin/usage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_usage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::deleteAction',));
                }
                not_usage_delete:

                // usage_delete_group
                if ('/admin/usage/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_usage_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageController::deleteGroupAction',  '_route' => 'usage_delete_group',);
                }
                not_usage_delete_group:

                if (0 === strpos($pathinfo, '/admin/usage-tarif')) {
                    // usage_tarif_index
                    if ('/admin/usage-tarif' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_usage_tarif_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'usage_tarif_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::indexAction',  '_route' => 'usage_tarif_index',);
                    }
                    not_usage_tarif_index:

                    // usage_tarif_new
                    if ('/admin/usage-tarif/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_usage_tarif_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::newAction',  '_route' => 'usage_tarif_new',);
                    }
                    not_usage_tarif_new:

                    // usage_tarif_edit
                    if (preg_match('#^/admin/usage\\-tarif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_usage_tarif_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_tarif_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::editAction',));
                    }
                    not_usage_tarif_edit:

                    // usage_tarif_update
                    if (preg_match('#^/admin/usage\\-tarif/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_usage_tarif_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_tarif_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::updateAction',));
                    }
                    not_usage_tarif_update:

                    // usage_tarif_delete
                    if (preg_match('#^/admin/usage\\-tarif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_usage_tarif_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'usage_tarif_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::deleteAction',));
                    }
                    not_usage_tarif_delete:

                    // usage_tarif_delete_group
                    if ('/admin/usage-tarif/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_usage_tarif_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUsageTarifController::deleteGroupAction',  '_route' => 'usage_tarif_delete_group',);
                    }
                    not_usage_tarif_delete_group:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/utilisation')) {
                // utilisation_index
                if ('/admin/utilisation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_utilisation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'utilisation_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::indexAction',  '_route' => 'utilisation_index',);
                }
                not_utilisation_index:

                // utilisation_new
                if ('/admin/utilisation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_utilisation_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::newAction',  '_route' => 'utilisation_new',);
                }
                not_utilisation_new:

                // utilisation_edit
                if (preg_match('#^/admin/utilisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_utilisation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisation_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::editAction',));
                }
                not_utilisation_edit:

                // utilisation_update
                if (preg_match('#^/admin/utilisation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_utilisation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisation_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::updateAction',));
                }
                not_utilisation_update:

                // utilisation_delete
                if (preg_match('#^/admin/utilisation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_utilisation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'utilisation_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::deleteAction',));
                }
                not_utilisation_delete:

                // utilisation_delete_group
                if ('/admin/utilisation/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_utilisation_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtUtilisationController::deleteGroupAction',  '_route' => 'utilisation_delete_group',);
                }
                not_utilisation_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/type-')) {
                if (0 === strpos($pathinfo, '/admin/type-anomalie')) {
                    // type_anomalie_index
                    if ('/admin/type-anomalie' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_anomalie_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_anomalie_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::indexAction',  '_route' => 'type_anomalie_index',);
                    }
                    not_type_anomalie_index:

                    // type_anomalie_new
                    if ('/admin/type-anomalie/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_anomalie_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::newAction',  '_route' => 'type_anomalie_new',);
                    }
                    not_type_anomalie_new:

                    // type_anomalie_edit
                    if (preg_match('#^/admin/type\\-anomalie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_anomalie_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_anomalie_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::editAction',));
                    }
                    not_type_anomalie_edit:

                    // type_anomalie_update
                    if (preg_match('#^/admin/type\\-anomalie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_anomalie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_anomalie_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::updateAction',));
                    }
                    not_type_anomalie_update:

                    // type_anomalie_delete
                    if (preg_match('#^/admin/type\\-anomalie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_anomalie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_anomalie_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::deleteAction',));
                    }
                    not_type_anomalie_delete:

                    // type_anomalie_delete_group
                    if ('/admin/type-anomalie/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_anomalie_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeAnomalieController::deleteGroupAction',  '_route' => 'type_anomalie_delete_group',);
                    }
                    not_type_anomalie_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/type-reception')) {
                    // type_reception_index
                    if ('/admin/type-reception' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_reception_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_reception_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::indexAction',  '_route' => 'type_reception_index',);
                    }
                    not_type_reception_index:

                    // type_reception_new
                    if ('/admin/type-reception/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_reception_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::newAction',  '_route' => 'type_reception_new',);
                    }
                    not_type_reception_new:

                    // type_reception_edit
                    if (preg_match('#^/admin/type\\-reception/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_reception_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_reception_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::editAction',));
                    }
                    not_type_reception_edit:

                    // type_reception_update
                    if (preg_match('#^/admin/type\\-reception/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_reception_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_reception_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::updateAction',));
                    }
                    not_type_reception_update:

                    // type_reception_delete
                    if (preg_match('#^/admin/type\\-reception/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_reception_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_reception_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::deleteAction',));
                    }
                    not_type_reception_delete:

                    // type_reception_delete_group
                    if ('/admin/type-reception/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_reception_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeReceptionController::deleteGroupAction',  '_route' => 'type_reception_delete_group',);
                    }
                    not_type_reception_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/type-constatation-avant-dedouanement')) {
                    // type_const_av_ded_index
                    if ('/admin/type-constatation-avant-dedouanement' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_const_av_ded_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_const_av_ded_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::indexAction',  '_route' => 'type_const_av_ded_index',);
                    }
                    not_type_const_av_ded_index:

                    // type_const_av_ded_new
                    if ('/admin/type-constatation-avant-dedouanement/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_const_av_ded_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::newAction',  '_route' => 'type_const_av_ded_new',);
                    }
                    not_type_const_av_ded_new:

                    // type_const_av_ded_edit
                    if (preg_match('#^/admin/type\\-constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_const_av_ded_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_const_av_ded_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::editAction',));
                    }
                    not_type_const_av_ded_edit:

                    // type_const_av_ded_update
                    if (preg_match('#^/admin/type\\-constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_const_av_ded_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_const_av_ded_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::updateAction',));
                    }
                    not_type_const_av_ded_update:

                    // type_const_av_ded_delete
                    if (preg_match('#^/admin/type\\-constatation\\-avant\\-dedouanement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_const_av_ded_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_const_av_ded_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::deleteAction',));
                    }
                    not_type_const_av_ded_delete:

                    // type_const_av_ded_delete_group
                    if ('/admin/type-constatation-avant-dedouanement/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_const_av_ded_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeConstatationAvDedouanementController::deleteGroupAction',  '_route' => 'type_const_av_ded_delete_group',);
                    }
                    not_type_const_av_ded_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/type-visite')) {
                    // type_visite_index
                    if ('/admin/type-visite' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_visite_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_visite_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::indexAction',  '_route' => 'type_visite_index',);
                    }
                    not_type_visite_index:

                    // type_visite_new
                    if ('/admin/type-visite/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_visite_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::newAction',  '_route' => 'type_visite_new',);
                    }
                    not_type_visite_new:

                    // type_visite_edit
                    if (preg_match('#^/admin/type\\-visite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_visite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_visite_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::editAction',));
                    }
                    not_type_visite_edit:

                    // type_visite_update
                    if (preg_match('#^/admin/type\\-visite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_visite_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_visite_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::updateAction',));
                    }
                    not_type_visite_update:

                    // type_visite_delete
                    if (preg_match('#^/admin/type\\-visite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_visite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_visite_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::deleteAction',));
                    }
                    not_type_visite_delete:

                    // type_visite_delete_group
                    if ('/admin/type-visite/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_visite_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeVisiteController::deleteGroupAction',  '_route' => 'type_visite_delete_group',);
                    }
                    not_type_visite_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/type-usage')) {
                    // type_usage_index
                    if ('/admin/type-usage' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_usage_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_usage_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::indexAction',  '_route' => 'type_usage_index',);
                    }
                    not_type_usage_index:

                    // type_usage_new
                    if ('/admin/type-usage/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_usage_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::newAction',  '_route' => 'type_usage_new',);
                    }
                    not_type_usage_new:

                    // type_usage_edit
                    if (preg_match('#^/admin/type\\-usage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_usage_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_usage_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::editAction',));
                    }
                    not_type_usage_edit:

                    // type_usage_update
                    if (preg_match('#^/admin/type\\-usage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_usage_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_usage_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::updateAction',));
                    }
                    not_type_usage_update:

                    // type_usage_delete
                    if (preg_match('#^/admin/type\\-usage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_usage_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_usage_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::deleteAction',));
                    }
                    not_type_usage_delete:

                    // type_usage_delete_group
                    if ('/admin/type-usage/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_usage_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeUsageController::deleteGroupAction',  '_route' => 'type_usage_delete_group',);
                    }
                    not_type_usage_delete_group:

                }

                elseif (0 === strpos($pathinfo, '/admin/type-droit-ptac')) {
                    // type_droit_ptac_index
                    if ('/admin/type-droit-ptac' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_type_droit_ptac_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'type_droit_ptac_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::indexAction',  '_route' => 'type_droit_ptac_index',);
                    }
                    not_type_droit_ptac_index:

                    // type_droit_ptac_new
                    if ('/admin/type-droit-ptac/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_droit_ptac_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::newAction',  '_route' => 'type_droit_ptac_new',);
                    }
                    not_type_droit_ptac_new:

                    // type_droit_ptac_edit
                    if (preg_match('#^/admin/type\\-droit\\-ptac/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_type_droit_ptac_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_droit_ptac_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::editAction',));
                    }
                    not_type_droit_ptac_edit:

                    // type_droit_ptac_update
                    if (preg_match('#^/admin/type\\-droit\\-ptac/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_type_droit_ptac_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_droit_ptac_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::updateAction',));
                    }
                    not_type_droit_ptac_update:

                    // type_droit_ptac_delete
                    if (preg_match('#^/admin/type\\-droit\\-ptac/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_type_droit_ptac_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_droit_ptac_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::deleteAction',));
                    }
                    not_type_droit_ptac_delete:

                    // type_droit_ptac_delete_group
                    if ('/admin/type-droit-ptac/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_type_droit_ptac_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtTypeDroitPtacController::deleteGroupAction',  '_route' => 'type_droit_ptac_delete_group',);
                    }
                    not_type_droit_ptac_delete_group:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/visite')) {
                // visite_index
                if ('/admin/visite' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_visite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'visite_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::indexAction',  '_route' => 'visite_index',);
                }
                not_visite_index:

                // visite_new
                if ('/admin/visite/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_visite_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::newAction',  '_route' => 'visite_new',);
                }
                not_visite_new:

                // visite_edit
                if (preg_match('#^/admin/visite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_visite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::editAction',));
                }
                not_visite_edit:

                // visite_update
                if (preg_match('#^/admin/visite/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_visite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::updateAction',));
                }
                not_visite_update:

                // visite_delete
                if (preg_match('#^/admin/visite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_visite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::deleteAction',));
                }
                not_visite_delete:

                // visite_delete_group
                if ('/admin/visite/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_visite_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::deleteGroupAction',  '_route' => 'visite_delete_group',);
                }
                not_visite_delete_group:

                if (0 === strpos($pathinfo, '/admin/visite/generate-')) {
                    if (0 === strpos($pathinfo, '/admin/visite/generate-reporting-')) {
                        // visite_generate_reporting_ajax
                        if ('/admin/visite/generate-reporting-ajax' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_visite_generate_reporting_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::generateReportingAjaxAction',  '_route' => 'visite_generate_reporting_ajax',);
                        }
                        not_visite_generate_reporting_ajax:

                        // visite_generate_reporting_feuille_caisse_ajax
                        if ('/admin/visite/generate-reporting-feuille-caisse-ajax' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_visite_generate_reporting_feuille_caisse_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::generateReportingFeuilleCaisseAjaxAction',  '_route' => 'visite_generate_reporting_feuille_caisse_ajax',);
                        }
                        not_visite_generate_reporting_feuille_caisse_ajax:

                        // visite_generate_reporting_fiche_controle_ajax
                        if ('/admin/visite/generate-reporting-fiche-controle-ajax' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_visite_generate_reporting_fiche_controle_ajax;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::generateReportingFicheControleAjaxAction',  '_route' => 'visite_generate_reporting_fiche_controle_ajax',);
                        }
                        not_visite_generate_reporting_fiche_controle_ajax:

                    }

                    // visite_generate_pv_visite_ajax
                    if ('/admin/visite/generate-pv-visite-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_visite_generate_pv_visite_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::generatePvVisiteAjaxAction',  '_route' => 'visite_generate_pv_visite_ajax',);
                    }
                    not_visite_generate_pv_visite_ajax:

                    // visite_generate_liste_anomalies_ajax
                    if ('/admin/visite/generate-liste-anomalies-ajax' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_visite_generate_liste_anomalies_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::generateReportingFicheAnomalieAjaxAction',  '_route' => 'visite_generate_liste_anomalies_ajax',);
                    }
                    not_visite_generate_liste_anomalies_ajax:

                }

                elseif (0 === strpos($pathinfo, '/admin/visite/select-')) {
                    // visite_select_verificateur_by_centre_ajax
                    if ('/admin/visite/select-verif-by-centre-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_visite_select_verificateur_by_centre_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::selectVerifByCentreAjaxAction',  '_route' => 'visite_select_verificateur_by_centre_ajax',);
                    }
                    not_visite_select_verificateur_by_centre_ajax:

                    // visite_select_usage_by_type_visite_ajax
                    if ('/admin/visite/select-usage-by-type-visite-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_visite_select_usage_by_type_visite_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::selectUsageByTypeVisiteAjaxAction',  '_route' => 'visite_select_usage_by_type_visite_ajax',);
                    }
                    not_visite_select_usage_by_type_visite_ajax:

                    // visite_select_expiration_by_usage_ajax
                    if ('/admin/visite/select-expiration-by-usage-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_visite_select_expiration_by_usage_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::selectExpirationByUsageAjaxAction',  '_route' => 'visite_select_expiration_by_usage_ajax',);
                    }
                    not_visite_select_expiration_by_usage_ajax:

                }

                // visite_search
                if ('/admin/visite/search' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_visite_search;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteController::searchAction',  '_route' => 'visite_search',);
                }
                not_visite_search:

                if (0 === strpos($pathinfo, '/admin/visite-extra')) {
                    // visite_extra_index
                    if ('/admin/visite-extra' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_visite_extra_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'visite_extra_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::indexAction',  '_route' => 'visite_extra_index',);
                    }
                    not_visite_extra_index:

                    // visite_extra_new
                    if ('/admin/visite-extra/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_visite_extra_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::newAction',  '_route' => 'visite_extra_new',);
                    }
                    not_visite_extra_new:

                    // visite_extra_edit
                    if (preg_match('#^/admin/visite\\-extra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_visite_extra_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::editAction',));
                    }
                    not_visite_extra_edit:

                    // visite_extra_update
                    if (preg_match('#^/admin/visite\\-extra/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_visite_extra_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::updateAction',));
                    }
                    not_visite_extra_update:

                    // visite_extra_delete
                    if (preg_match('#^/admin/visite\\-extra/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_visite_extra_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::deleteAction',));
                    }
                    not_visite_extra_delete:

                    // visite_extra_delete_group
                    if ('/admin/visite-extra/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_visite_extra_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraController::deleteGroupAction',  '_route' => 'visite_extra_delete_group',);
                    }
                    not_visite_extra_delete_group:

                    if (0 === strpos($pathinfo, '/admin/visite-extra-tarif')) {
                        // visite_extra_tarif_index
                        if ('/admin/visite-extra-tarif' === $trimmedPathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_visite_extra_tarif_index;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'visite_extra_tarif_index');
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::indexAction',  '_route' => 'visite_extra_tarif_index',);
                        }
                        not_visite_extra_tarif_index:

                        // visite_extra_tarif_new
                        if ('/admin/visite-extra-tarif/new' === $pathinfo) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_visite_extra_tarif_new;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::newAction',  '_route' => 'visite_extra_tarif_new',);
                        }
                        not_visite_extra_tarif_new:

                        // visite_extra_tarif_edit
                        if (preg_match('#^/admin/visite\\-extra\\-tarif/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_visite_extra_tarif_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_tarif_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::editAction',));
                        }
                        not_visite_extra_tarif_edit:

                        // visite_extra_tarif_update
                        if (preg_match('#^/admin/visite\\-extra\\-tarif/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($requestMethod, array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_visite_extra_tarif_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_tarif_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::updateAction',));
                        }
                        not_visite_extra_tarif_update:

                        // visite_extra_tarif_delete
                        if (preg_match('#^/admin/visite\\-extra\\-tarif/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                                $allow = array_merge($allow, array('GET', 'DELETE'));
                                goto not_visite_extra_tarif_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'visite_extra_tarif_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::deleteAction',));
                        }
                        not_visite_extra_tarif_delete:

                        // visite_extra_tarif_delete_group
                        if ('/admin/visite-extra-tarif/delete-group' === $pathinfo) {
                            if ('POST' !== $canonicalMethod) {
                                $allow[] = 'POST';
                                goto not_visite_extra_tarif_delete_group;
                            }

                            return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVisiteExtraTarifController::deleteGroupAction',  '_route' => 'visite_extra_tarif_delete_group',);
                        }
                        not_visite_extra_tarif_delete_group:

                    }

                }

            }

            // vehicule_show_numero_serie_ajax
            if ('/admin/vehicule/show-numero-serie-ajax' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_vehicule_show_numero_serie_ajax;
                }

                return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtVehiculeController::showNumeroSerieAjaxAction',  '_route' => 'vehicule_show_numero_serie_ajax',);
            }
            not_vehicule_show_numero_serie_ajax:

            if (0 === strpos($pathinfo, '/admin/droit-ptac')) {
                // droit_ptac_index
                if ('/admin/droit-ptac' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_droit_ptac_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'droit_ptac_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::indexAction',  '_route' => 'droit_ptac_index',);
                }
                not_droit_ptac_index:

                // droit_ptac_new
                if ('/admin/droit-ptac/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_droit_ptac_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::newAction',  '_route' => 'droit_ptac_new',);
                }
                not_droit_ptac_new:

                // droit_ptac_edit
                if (preg_match('#^/admin/droit\\-ptac/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_droit_ptac_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'droit_ptac_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::editAction',));
                }
                not_droit_ptac_edit:

                // droit_ptac_update
                if (preg_match('#^/admin/droit\\-ptac/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_droit_ptac_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'droit_ptac_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::updateAction',));
                }
                not_droit_ptac_update:

                // droit_ptac_delete
                if (preg_match('#^/admin/droit\\-ptac/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_droit_ptac_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'droit_ptac_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::deleteAction',));
                }
                not_droit_ptac_delete:

                // droit_ptac_delete_group
                if ('/admin/droit-ptac/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_droit_ptac_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtDroitPtacController::deleteGroupAction',  '_route' => 'droit_ptac_delete_group',);
                }
                not_droit_ptac_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/statistique-')) {
                if (0 === strpos($pathinfo, '/admin/statistique-visite')) {
                    // statistique_visite_index
                    if ('/admin/statistique-visite' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_statistique_visite_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'statistique_visite_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueVisiteController::indexAction',  '_route' => 'statistique_visite_index',);
                    }
                    not_statistique_visite_index:

                    // statistique_visite_generate_reporting_annuel_ajax
                    if ('/admin/statistique-visite/generate-reporting-annuel-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_statistique_visite_generate_reporting_annuel_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueVisiteController::generateReportingAnnuelAjaxAction',  '_route' => 'statistique_visite_generate_reporting_annuel_ajax',);
                    }
                    not_statistique_visite_generate_reporting_annuel_ajax:

                }

                elseif (0 === strpos($pathinfo, '/admin/statistique-reception')) {
                    // statistique_reception_index
                    if ('/admin/statistique-reception' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_statistique_reception_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'statistique_reception_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueReceptionController::indexAction',  '_route' => 'statistique_reception_index',);
                    }
                    not_statistique_reception_index:

                    // statistique_reception_generate_reporting_annuel_ajax
                    if ('/admin/statistique-reception/generate-reporting-annuel-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_statistique_reception_generate_reporting_annuel_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueReceptionController::generateReportingAnnuelAjaxAction',  '_route' => 'statistique_reception_generate_reporting_annuel_ajax',);
                    }
                    not_statistique_reception_generate_reporting_annuel_ajax:

                }

                elseif (0 === strpos($pathinfo, '/admin/statistique-constatation')) {
                    // statistique_constatation_index
                    if ('/admin/statistique-constatation' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_statistique_constatation_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'statistique_constatation_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueConstatationController::indexAction',  '_route' => 'statistique_constatation_index',);
                    }
                    not_statistique_constatation_index:

                    // statistique_constatation_generate_reporting_ajax
                    if ('/admin/statistique-constatation/generate-reporting-constatation-ajax' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_statistique_constatation_generate_reporting_ajax;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtStatistiqueConstatationController::generateReportingConstatationAjaxAction',  '_route' => 'statistique_constatation_generate_reporting_ajax',);
                    }
                    not_statistique_constatation_generate_reporting_ajax:

                }

            }

            // historique_index
            if ('/admin/historique' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_historique_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'historique_index');
                }

                return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtHistoriqueController::indexAction',  '_route' => 'historique_index',);
            }
            not_historique_index:

            if (0 === strpos($pathinfo, '/admin/historique/get-')) {
                // historique_get_notification_ajax
                if ('/admin/historique/get-notification-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_historique_get_notification_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtHistoriqueController::getLogByCentreAjaxAction',  '_route' => 'historique_get_notification_ajax',);
                }
                not_historique_get_notification_ajax:

                // historique_get_detail_notification_ajax
                if ('/admin/historique/get-detail-notification-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_historique_get_detail_notification_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtHistoriqueController::getDetailLogAjaxAction',  '_route' => 'historique_get_detail_notification_ajax',);
                }
                not_historique_get_detail_notification_ajax:

                // historique_get_detail_all_notifications_ajax
                if ('/admin/historique/get-detail-all-notifications-ajax' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_historique_get_detail_all_notifications_ajax;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtHistoriqueController::getDetailAllLogAjaxAction',  '_route' => 'historique_get_detail_all_notifications_ajax',);
                }
                not_historique_get_detail_all_notifications_ajax:

            }

            elseif (0 === strpos($pathinfo, '/admin/zone-deserte')) {
                // zone_deserte_index
                if ('/admin/zone-deserte' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_zone_deserte_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'zone_deserte_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::indexAction',  '_route' => 'zone_deserte_index',);
                }
                not_zone_deserte_index:

                // zone_deserte_new
                if ('/admin/zone-deserte/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_zone_deserte_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::newAction',  '_route' => 'zone_deserte_new',);
                }
                not_zone_deserte_new:

                // zone_deserte_edit
                if (preg_match('#^/admin/zone\\-deserte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_zone_deserte_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_deserte_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::editAction',));
                }
                not_zone_deserte_edit:

                // zone_deserte_update
                if (preg_match('#^/admin/zone\\-deserte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_zone_deserte_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_deserte_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::updateAction',));
                }
                not_zone_deserte_update:

                // zone_deserte_delete
                if (preg_match('#^/admin/zone\\-deserte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_zone_deserte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zone_deserte_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::deleteAction',));
                }
                not_zone_deserte_delete:

                // zone_deserte_delete_group
                if ('/admin/zone-deserte/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_zone_deserte_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtZoneDeserteController::deleteGroupAction',  '_route' => 'zone_deserte_delete_group',);
                }
                not_zone_deserte_delete_group:

            }

            elseif (0 === strpos($pathinfo, '/admin/imprime-tech')) {
                // imprime_tech_index
                if ('/admin/imprime-tech' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_imprime_tech_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'imprime_tech_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::indexAction',  '_route' => 'imprime_tech_index',);
                }
                not_imprime_tech_index:

                // imprime_tech_new
                if ('/admin/imprime-tech/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_imprime_tech_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::newAction',  '_route' => 'imprime_tech_new',);
                }
                not_imprime_tech_new:

                // imprime_tech_edit
                if (preg_match('#^/admin/imprime\\-tech/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_imprime_tech_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::editAction',));
                }
                not_imprime_tech_edit:

                // imprime_tech_update
                if (preg_match('#^/admin/imprime\\-tech/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_imprime_tech_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::updateAction',));
                }
                not_imprime_tech_update:

                // imprime_tech_delete
                if (preg_match('#^/admin/imprime\\-tech/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_imprime_tech_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::deleteAction',));
                }
                not_imprime_tech_delete:

                // imprime_tech_delete_group
                if ('/admin/imprime-tech/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_imprime_tech_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechController::deleteGroupAction',  '_route' => 'imprime_tech_delete_group',);
                }
                not_imprime_tech_delete_group:

                if (0 === strpos($pathinfo, '/admin/imprime-tech-use')) {
                    // imprime_tech_use_index
                    if ('/admin/imprime-tech-use' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_imprime_tech_use_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'imprime_tech_use_index');
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::indexAction',  '_route' => 'imprime_tech_use_index',);
                    }
                    not_imprime_tech_use_index:

                    // imprime_tech_use_new
                    if ('/admin/imprime-tech-use/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_imprime_tech_use_new;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::newAction',  '_route' => 'imprime_tech_use_new',);
                    }
                    not_imprime_tech_use_new:

                    // imprime_tech_use_edit
                    if (preg_match('#^/admin/imprime\\-tech\\-use/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_imprime_tech_use_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_use_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::editAction',));
                    }
                    not_imprime_tech_use_edit:

                    // imprime_tech_use_update
                    if (preg_match('#^/admin/imprime\\-tech\\-use/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($requestMethod, array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_imprime_tech_use_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_use_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::updateAction',));
                    }
                    not_imprime_tech_use_update:

                    // imprime_tech_use_delete
                    if (preg_match('#^/admin/imprime\\-tech\\-use/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_imprime_tech_use_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'imprime_tech_use_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::deleteAction',));
                    }
                    not_imprime_tech_use_delete:

                    // imprime_tech_use_delete_group
                    if ('/admin/imprime-tech-use/delete-group' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_imprime_tech_use_delete_group;
                        }

                        return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtImprimeTechUseController::deleteGroupAction',  '_route' => 'imprime_tech_use_delete_group',);
                    }
                    not_imprime_tech_use_delete_group:

                }

            }

            elseif (0 === strpos($pathinfo, '/admin/bordereau')) {
                // bordereau_index
                if ('/admin/bordereau' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_bordereau_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'bordereau_index');
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::indexAction',  '_route' => 'bordereau_index',);
                }
                not_bordereau_index:

                // bordereau_new
                if ('/admin/bordereau/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bordereau_new;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::newAction',  '_route' => 'bordereau_new',);
                }
                not_bordereau_new:

                // bordereau_edit
                if (preg_match('#^/admin/bordereau/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bordereau_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bordereau_edit')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::editAction',));
                }
                not_bordereau_edit:

                // bordereau_update
                if (preg_match('#^/admin/bordereau/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($requestMethod, array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_bordereau_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bordereau_update')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::updateAction',));
                }
                not_bordereau_update:

                // bordereau_delete
                if (preg_match('#^/admin/bordereau/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE'));
                        goto not_bordereau_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bordereau_delete')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::deleteAction',));
                }
                not_bordereau_delete:

                // bordereau_delete_group
                if ('/admin/bordereau/delete-group' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_bordereau_delete_group;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::deleteGroupAction',  '_route' => 'bordereau_delete_group',);
                }
                not_bordereau_delete_group:

                // bordereau_search
                if ('/admin/bordereau/search' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bordereau_search;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::searchAction',  '_route' => 'bordereau_search',);
                }
                not_bordereau_search:

                // bordereau_generer_bl
                if ('/admin/bordereau/generer-bl' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bordereau_generer_bl;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::genererBordereauLivraisonAction',  '_route' => 'bordereau_generer_bl',);
                }
                not_bordereau_generer_bl:

                // bordereau_activation
                if ('/admin/bordereau/activation' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_bordereau_activation;
                    }

                    return array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::ActivationAction',  '_route' => 'bordereau_activation',);
                }
                not_bordereau_activation:

                // bordereau_actived
                if (0 === strpos($pathinfo, '/admin/bordereau/actived') && preg_match('#^/admin/bordereau/actived(?:/(?P<_id>[^/]++))?$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_bordereau_actived;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'bordereau_actived')), array (  '_controller' => 'Ct\\BackOffice\\AdminBundle\\Controller\\CtBordereauController::ActivedAction',  '_id' => 0,));
                }
                not_bordereau_actived:

            }

        }

        // eternaly_login
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'eternaly_login');
            }

            return array (  '_controller' => 'Ct\\Service\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'eternaly_login',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
