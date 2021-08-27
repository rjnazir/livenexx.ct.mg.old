<?php

/* AdminBundle:CtCarosserie:index.html.twig */
class __TwigTemplate_f9286cba3e55e79b9b0141a2e4f110c4c3c39db96ea66f12067ce5ed9bd3acf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:index.html.twig", 1);
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
        $__internal_3d127d9f55c530c0c6d036d999b8791c6f4cb08fccacded06a640da7248d32de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d127d9f55c530c0c6d036d999b8791c6f4cb08fccacded06a640da7248d32de->enter($__internal_3d127d9f55c530c0c6d036d999b8791c6f4cb08fccacded06a640da7248d32de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:index.html.twig"));

        $__internal_9ff3c1ec4e595f8455a327be08b70bc968810a0b1ca715f1976f4f02834cd631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff3c1ec4e595f8455a327be08b70bc968810a0b1ca715f1976f4f02834cd631->enter($__internal_9ff3c1ec4e595f8455a327be08b70bc968810a0b1ca715f1976f4f02834cd631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:index.html.twig"));

        // line 5
        $context["menu_carosserie"] = true;
        // line 6
        $context["menu_carosserie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d127d9f55c530c0c6d036d999b8791c6f4cb08fccacded06a640da7248d32de->leave($__internal_3d127d9f55c530c0c6d036d999b8791c6f4cb08fccacded06a640da7248d32de_prof);

        
        $__internal_9ff3c1ec4e595f8455a327be08b70bc968810a0b1ca715f1976f4f02834cd631->leave($__internal_9ff3c1ec4e595f8455a327be08b70bc968810a0b1ca715f1976f4f02834cd631_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d463b4fe1faf387eb6888ec5fbcbc1f2a20fcd7634662780384054a08f46e50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d463b4fe1faf387eb6888ec5fbcbc1f2a20fcd7634662780384054a08f46e50a->enter($__internal_d463b4fe1faf387eb6888ec5fbcbc1f2a20fcd7634662780384054a08f46e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a23db3dfc5e1be55d4e132bdf09f1c8a2578c408539a59839603e40982241f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a23db3dfc5e1be55d4e132bdf09f1c8a2578c408539a59839603e40982241f3->enter($__internal_6a23db3dfc5e1be55d4e132bdf09f1c8a2578c408539a59839603e40982241f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carrosseries ";
        
        $__internal_6a23db3dfc5e1be55d4e132bdf09f1c8a2578c408539a59839603e40982241f3->leave($__internal_6a23db3dfc5e1be55d4e132bdf09f1c8a2578c408539a59839603e40982241f3_prof);

        
        $__internal_d463b4fe1faf387eb6888ec5fbcbc1f2a20fcd7634662780384054a08f46e50a->leave($__internal_d463b4fe1faf387eb6888ec5fbcbc1f2a20fcd7634662780384054a08f46e50a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5957fdb618cfbc1578cfd45f2dd336772c5a3ad70a20b8cb01c096b8f1a430c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5957fdb618cfbc1578cfd45f2dd336772c5a3ad70a20b8cb01c096b8f1a430c2->enter($__internal_5957fdb618cfbc1578cfd45f2dd336772c5a3ad70a20b8cb01c096b8f1a430c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ba5285b99fd7c32753faeb7fec32f5be91c963a275141aea1571b082d91b5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba5285b99fd7c32753faeb7fec32f5be91c963a275141aea1571b082d91b5a5->enter($__internal_7ba5285b99fd7c32753faeb7fec32f5be91c963a275141aea1571b082d91b5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carrosserie
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carosserie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carosseries"] ?? $this->getContext($context, "carosseries")));
        foreach ($context['_seq'] as $context["_key"] => $context["carosserie"]) {
            // line 57
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["carosserie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["carosserie"], "crsLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_edit", array("id" => $this->getAttribute($context["carosserie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_delete", array("id" => $this->getAttribute($context["carosserie"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carosserie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_7ba5285b99fd7c32753faeb7fec32f5be91c963a275141aea1571b082d91b5a5->leave($__internal_7ba5285b99fd7c32753faeb7fec32f5be91c963a275141aea1571b082d91b5a5_prof);

        
        $__internal_5957fdb618cfbc1578cfd45f2dd336772c5a3ad70a20b8cb01c096b8f1a430c2->leave($__internal_5957fdb618cfbc1578cfd45f2dd336772c5a3ad70a20b8cb01c096b8f1a430c2_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6753f01835f5abcec42777cfd3453bc010b07b69c06af0c25fb1c33522bc4d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6753f01835f5abcec42777cfd3453bc010b07b69c06af0c25fb1c33522bc4d0c->enter($__internal_6753f01835f5abcec42777cfd3453bc010b07b69c06af0c25fb1c33522bc4d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_422cda386dd453cd673cb049255f017cf8aacdb579f6ee074f8b82a2d2727eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422cda386dd453cd673cb049255f017cf8aacdb579f6ee074f8b82a2d2727eb2->enter($__internal_422cda386dd453cd673cb049255f017cf8aacdb579f6ee074f8b82a2d2727eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carosserie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carrosserie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_422cda386dd453cd673cb049255f017cf8aacdb579f6ee074f8b82a2d2727eb2->leave($__internal_422cda386dd453cd673cb049255f017cf8aacdb579f6ee074f8b82a2d2727eb2_prof);

        
        $__internal_6753f01835f5abcec42777cfd3453bc010b07b69c06af0c25fb1c33522bc4d0c->leave($__internal_6753f01835f5abcec42777cfd3453bc010b07b69c06af0c25fb1c33522bc4d0c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des carrosseries {% endblock %}

{% set menu_carosserie      = true %}
{% set menu_carosserie_list = true %}

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
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('carosserie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carrosserie
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('carosserie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carosserie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for carosserie in carosseries %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ carosserie.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ carosserie.crsLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('carosserie_edit', { 'id': carosserie.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('carosserie_delete', { 'id': carosserie.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carosserie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carrosserie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtCarosserie:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/index.html.twig");
    }
}
