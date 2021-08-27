<?php

/* @Admin/CtReception/view.html.twig */
class __TwigTemplate_305033caa14a5e3414bf5c87e25261e565660b31124a7bf567e56121e0581c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd4527d2577bd9766037e550ec835a057e901e42381e855f79b04fb0f0394fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4527d2577bd9766037e550ec835a057e901e42381e855f79b04fb0f0394fa1->enter($__internal_cd4527d2577bd9766037e550ec835a057e901e42381e855f79b04fb0f0394fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/view.html.twig"));

        $__internal_7d23e63dcdef19388586305c7f18f2a59ab796fd323a0fdbd68f8590406b25e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d23e63dcdef19388586305c7f18f2a59ab796fd323a0fdbd68f8590406b25e2->enter($__internal_7d23e63dcdef19388586305c7f18f2a59ab796fd323a0fdbd68f8590406b25e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/view.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4527d2577bd9766037e550ec835a057e901e42381e855f79b04fb0f0394fa1->leave($__internal_cd4527d2577bd9766037e550ec835a057e901e42381e855f79b04fb0f0394fa1_prof);

        
        $__internal_7d23e63dcdef19388586305c7f18f2a59ab796fd323a0fdbd68f8590406b25e2->leave($__internal_7d23e63dcdef19388586305c7f18f2a59ab796fd323a0fdbd68f8590406b25e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a14c3b0f9237dd4e1a7a41dfe43773085f297350ae216f62ee6aed4d1447fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a14c3b0f9237dd4e1a7a41dfe43773085f297350ae216f62ee6aed4d1447fa8->enter($__internal_2a14c3b0f9237dd4e1a7a41dfe43773085f297350ae216f62ee6aed4d1447fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56e4222f177b23f71770353c296112db64c50886fe456df6ffdb3a34efb7ba23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e4222f177b23f71770353c296112db64c50886fe456df6ffdb3a34efb7ba23->enter($__internal_56e4222f177b23f71770353c296112db64c50886fe456df6ffdb3a34efb7ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Detail Réception ";
        
        $__internal_56e4222f177b23f71770353c296112db64c50886fe456df6ffdb3a34efb7ba23->leave($__internal_56e4222f177b23f71770353c296112db64c50886fe456df6ffdb3a34efb7ba23_prof);

        
        $__internal_2a14c3b0f9237dd4e1a7a41dfe43773085f297350ae216f62ee6aed4d1447fa8->leave($__internal_2a14c3b0f9237dd4e1a7a41dfe43773085f297350ae216f62ee6aed4d1447fa8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd4144b0a9f22d01ca3070536fb73350e591ec58ff7d6d703eaf716a7089d36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4144b0a9f22d01ca3070536fb73350e591ec58ff7d6d703eaf716a7089d36e->enter($__internal_cd4144b0a9f22d01ca3070536fb73350e591ec58ff7d6d703eaf716a7089d36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e93e5c9c5b0298437b216c332aedf2d2cd8c60ab5c8c62d08e948772ca378aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93e5c9c5b0298437b216c332aedf2d2cd8c60ab5c8c62d08e948772ca378aeb->enter($__internal_e93e5c9c5b0298437b216c332aedf2d2cd8c60ab5c8c62d08e948772ca378aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> RECEPTION </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table table-striped  table-reception\">
                            <tbody>

                            <tr>
                                <td class=\"text-success\"> Type</td>
                                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctTypeReception", array()), "tprcpLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Centre</td>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctCentre", array()), "ctrNom", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro Serie</td>
                                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcNumSerie", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro moteur</td>
                                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcNumMoteur", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Immatriculation</td>
                                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "rcpImmatriculation", array()), "html", null, true);
        echo "</td>
                            </tr>

                            <tr>
                                <td class=\"text-success\"> Genre</td>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "ctGenre", array()), "grLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Marque</td>
                                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Cylindre</td>
                                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcCylindre", array()), "html", null, true);
        echo " cm3</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Puissance</td>
                                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPuissance", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Charge Utile</td>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcChargeUtile", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Poids Vide</td>
                                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPoidsVide", array()), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> PTAC</td>
                                <td>";
        // line 86
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcPoidsVide", array()) + $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctVehicule", array()), "vhcChargeUtile", array())), "html", null, true);
        echo " Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Source</td>
                                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctSourceEnergie", array()), "sreLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Carosserie</td>
                                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctCarosserie", array()), "crsLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Motif</td>
                                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "ctMotif", array()), "mtfLibelle", array()), "html", null, true);
        echo "</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box-footer\">
                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\" target=\"_blank\" >
                        Generer PV
                    </a>
                    <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_e93e5c9c5b0298437b216c332aedf2d2cd8c60ab5c8c62d08e948772ca378aeb->leave($__internal_e93e5c9c5b0298437b216c332aedf2d2cd8c60ab5c8c62d08e948772ca378aeb_prof);

        
        $__internal_cd4144b0a9f22d01ca3070536fb73350e591ec58ff7d6d703eaf716a7089d36e->leave($__internal_cd4144b0a9f22d01ca3070536fb73350e591ec58ff7d6d703eaf716a7089d36e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_08fbbb0c90b1e258820a7b7cc033bc930b246d1a8f97eec0f7be237ea491a0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fbbb0c90b1e258820a7b7cc033bc930b246d1a8f97eec0f7be237ea491a0dc->enter($__internal_08fbbb0c90b1e258820a7b7cc033bc930b246d1a8f97eec0f7be237ea491a0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae871400ddd2579ff039040d507cf87a14dd884347768116f2b98f5bcabd009c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae871400ddd2579ff039040d507cf87a14dd884347768116f2b98f5bcabd009c->enter($__internal_ae871400ddd2579ff039040d507cf87a14dd884347768116f2b98f5bcabd009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
                {
                    \"order\": [[ 0, \"desc\" ]],
                    \"bProcessing\": true,
                    \"bFilter\": true,
                    \"oLanguage\": {
                        \"sProcessing\": \"Traitement...\",
                        \"oPaginate\": {
                            \"sPrevious\": \"Précédente\", // This is the link to the previous page
                            \"sNext\": \"Suivante\", // This is the link to the next page
                        },
                        \"sSearch\": \"Filtrer: \",
                        \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
    <script>
        var _generate_pv_ajax_uri = \"";
        // line 149
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv_ajax");
        echo "\";
    </script>
";
        
        $__internal_ae871400ddd2579ff039040d507cf87a14dd884347768116f2b98f5bcabd009c->leave($__internal_ae871400ddd2579ff039040d507cf87a14dd884347768116f2b98f5bcabd009c_prof);

        
        $__internal_08fbbb0c90b1e258820a7b7cc033bc930b246d1a8f97eec0f7be237ea491a0dc->leave($__internal_08fbbb0c90b1e258820a7b7cc033bc930b246d1a8f97eec0f7be237ea491a0dc_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 149,  294 => 122,  285 => 121,  265 => 110,  258 => 106,  247 => 98,  240 => 94,  233 => 90,  226 => 86,  219 => 82,  212 => 78,  205 => 74,  198 => 70,  191 => 66,  184 => 62,  176 => 57,  169 => 53,  162 => 49,  155 => 45,  148 => 41,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Detail Réception {% endblock %}

{% set menu_reception      = true %}
{% set menu_reception_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> RECEPTION </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table table-striped  table-reception\">
                            <tbody>

                            <tr>
                                <td class=\"text-success\"> Type</td>
                                <td>{{ reception.ctTypeReception.tprcpLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Centre</td>
                                <td>{{ reception.ctCentre.ctrNom }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro Serie</td>
                                <td>{{ reception.ctVehicule.vhcNumSerie }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Numéro moteur</td>
                                <td>{{ reception.ctVehicule.vhcNumMoteur }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Immatriculation</td>
                                <td>{{ reception.rcpImmatriculation }}</td>
                            </tr>

                            <tr>
                                <td class=\"text-success\"> Genre</td>
                                <td>{{ reception.ctVehicule.ctGenre.grLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Marque</td>
                                <td>{{ reception.ctVehicule.ctMarque.mrqLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Cylindre</td>
                                <td>{{ reception.ctVehicule.vhcCylindre }} cm3</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Puissance</td>
                                <td>{{ reception.ctVehicule.vhcPuissance }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Charge Utile</td>
                                <td>{{ reception.ctVehicule.vhcChargeUtile }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Poids Vide</td>
                                <td>{{ reception.ctVehicule.vhcPoidsVide }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> PTAC</td>
                                <td>{{ reception.ctVehicule.vhcPoidsVide + reception.ctVehicule.vhcChargeUtile }} Kg</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Source</td>
                                <td>{{ reception.ctSourceEnergie.sreLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Carosserie</td>
                                <td>{{ reception.ctCarosserie.crsLibelle }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-success\"> Motif</td>
                                <td>{{ reception.ctMotif.mtfLibelle }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"box-footer\">
                    <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                       class=\"btn btn-primary\" target=\"_blank\" >
                        Generer PV
                    </a>
                    <a href=\"{{ path('reception_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>

            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
                {
                    \"order\": [[ 0, \"desc\" ]],
                    \"bProcessing\": true,
                    \"bFilter\": true,
                    \"oLanguage\": {
                        \"sProcessing\": \"Traitement...\",
                        \"oPaginate\": {
                            \"sPrevious\": \"Précédente\", // This is the link to the previous page
                            \"sNext\": \"Suivante\", // This is the link to the next page
                        },
                        \"sSearch\": \"Filtrer: \",
                        \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
    <script>
        var _generate_pv_ajax_uri = \"{{ path('reception_generer_pv_ajax') }}\";
    </script>
{% endblock %}
", "@Admin/CtReception/view.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\view.html.twig");
    }
}
