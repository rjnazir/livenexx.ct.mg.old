<?php

/* AdminBundle:CtCarteGrise:index.html.twig */
class __TwigTemplate_df7f33f1fd68b2c71695f238befac437a0afb85a9e50c29a1523839d0c2919c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarteGrise:index.html.twig", 1);
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
        $__internal_7649f8769dff43a8066ed1ea192322aed91682033008b7e518481f78d5ac2cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7649f8769dff43a8066ed1ea192322aed91682033008b7e518481f78d5ac2cf7->enter($__internal_7649f8769dff43a8066ed1ea192322aed91682033008b7e518481f78d5ac2cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:index.html.twig"));

        $__internal_3da5a639f8600d8ed766a56ec65765813855d1121eb111466bfccdc9714a4627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da5a639f8600d8ed766a56ec65765813855d1121eb111466bfccdc9714a4627->enter($__internal_3da5a639f8600d8ed766a56ec65765813855d1121eb111466bfccdc9714a4627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:index.html.twig"));

        // line 5
        $context["menu_carte_grise"] = true;
        // line 6
        $context["menu_carte_grise_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7649f8769dff43a8066ed1ea192322aed91682033008b7e518481f78d5ac2cf7->leave($__internal_7649f8769dff43a8066ed1ea192322aed91682033008b7e518481f78d5ac2cf7_prof);

        
        $__internal_3da5a639f8600d8ed766a56ec65765813855d1121eb111466bfccdc9714a4627->leave($__internal_3da5a639f8600d8ed766a56ec65765813855d1121eb111466bfccdc9714a4627_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8495bd2c5b9cd11807363637007a7258941e0bf4b2b2f43f3b3cac0da12c2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8495bd2c5b9cd11807363637007a7258941e0bf4b2b2f43f3b3cac0da12c2d1->enter($__internal_e8495bd2c5b9cd11807363637007a7258941e0bf4b2b2f43f3b3cac0da12c2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2c55492d6fe3b96b6ab3ca48c820e2bd7e9cbf502367203ff419010c719a145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c55492d6fe3b96b6ab3ca48c820e2bd7e9cbf502367203ff419010c719a145->enter($__internal_b2c55492d6fe3b96b6ab3ca48c820e2bd7e9cbf502367203ff419010c719a145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des cartes grise ";
        
        $__internal_b2c55492d6fe3b96b6ab3ca48c820e2bd7e9cbf502367203ff419010c719a145->leave($__internal_b2c55492d6fe3b96b6ab3ca48c820e2bd7e9cbf502367203ff419010c719a145_prof);

        
        $__internal_e8495bd2c5b9cd11807363637007a7258941e0bf4b2b2f43f3b3cac0da12c2d1->leave($__internal_e8495bd2c5b9cd11807363637007a7258941e0bf4b2b2f43f3b3cac0da12c2d1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ee693a892e45cc9a694651cb828722e793ce1241facf046575639f6addd81b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee693a892e45cc9a694651cb828722e793ce1241facf046575639f6addd81b5->enter($__internal_5ee693a892e45cc9a694651cb828722e793ce1241facf046575639f6addd81b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3efb67bb1bb89c5444ea7f2d583cd5c6c4e7ae93aa9c21a89d44b73e7557d1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efb67bb1bb89c5444ea7f2d583cd5c6c4e7ae93aa9c21a89d44b73e7557d1ac->enter($__internal_3efb67bb1bb89c5444ea7f2d583cd5c6c4e7ae93aa9c21a89d44b73e7557d1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carte grise
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Immatriculation</th>
                                     <th>Nom</th>
                                     ";
        // line 54
        echo "                                     <th>Date vignette</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carte_grises"] ?? $this->getContext($context, "carte_grises")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 60
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "cgImmatriculation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "cgNom", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 67
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carte_grise"], "cgDateVignette", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_edit", array("id" => $this->getAttribute($context["carte_grise"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_delete", array("id" => $this->getAttribute($context["carte_grise"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>

                        ";
        // line 84
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
        
        $__internal_3efb67bb1bb89c5444ea7f2d583cd5c6c4e7ae93aa9c21a89d44b73e7557d1ac->leave($__internal_3efb67bb1bb89c5444ea7f2d583cd5c6c4e7ae93aa9c21a89d44b73e7557d1ac_prof);

        
        $__internal_5ee693a892e45cc9a694651cb828722e793ce1241facf046575639f6addd81b5->leave($__internal_5ee693a892e45cc9a694651cb828722e793ce1241facf046575639f6addd81b5_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3e90fd679bac4d9bd53134c3df1c3483721e9b2df6a1028cdadad8a0611b377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e90fd679bac4d9bd53134c3df1c3483721e9b2df6a1028cdadad8a0611b377->enter($__internal_e3e90fd679bac4d9bd53134c3df1c3483721e9b2df6a1028cdadad8a0611b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c6ee04d877af569d54f7318cd4d9366930974ac5d668a445e28d8942ff19b863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ee04d877af569d54f7318cd4d9366930974ac5d668a445e28d8942ff19b863->enter($__internal_c6ee04d877af569d54f7318cd4d9366930974ac5d668a445e28d8942ff19b863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carte-grise').DataTable(
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
                    \"sEmptyTable\": \"Aucune carte grise trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_c6ee04d877af569d54f7318cd4d9366930974ac5d668a445e28d8942ff19b863->leave($__internal_c6ee04d877af569d54f7318cd4d9366930974ac5d668a445e28d8942ff19b863_prof);

        
        $__internal_e3e90fd679bac4d9bd53134c3df1c3483721e9b2df6a1028cdadad8a0611b377->leave($__internal_e3e90fd679bac4d9bd53134c3df1c3483721e9b2df6a1028cdadad8a0611b377_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarteGrise:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 97,  226 => 84,  221 => 80,  209 => 74,  202 => 70,  195 => 67,  191 => 65,  187 => 64,  182 => 62,  178 => 60,  174 => 59,  167 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des cartes grise {% endblock %}

{% set menu_carte_grise      = true %}
{% set menu_carte_grise_list = true %}

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
                    <a href=\"{{ path('carte_grise_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carte grise
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('carte_grise_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Immatriculation</th>
                                     <th>Nom</th>
                                     {#<th>Prénom</th>#}
                                     <th>Date vignette</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for carte_grise in carte_grises %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ carte_grise.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ carte_grise.cgImmatriculation }}</td>
                                        <td>{{ carte_grise.cgNom }}</td>
                                        {#<td>{{ carte_grise.cgPrenom }}</td>#}
                                        <td>{{ carte_grise.cgDateVignette|date('d/m/Y') }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('carte_grise_edit', { 'id': carte_grise.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('carte_grise_delete', { 'id': carte_grise.id }) }}\">
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
            \$('#list-carte-grise').DataTable(
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
                    \"sEmptyTable\": \"Aucune carte grise trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtCarteGrise:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarteGrise/index.html.twig");
    }
}
