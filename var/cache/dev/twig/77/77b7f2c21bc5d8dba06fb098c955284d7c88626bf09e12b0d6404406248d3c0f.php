<?php

/* AdminBundle:CtImprimeTech:index.html.twig */
class __TwigTemplate_0a66b13b8c6c8247ab1730715965ea0796e594dfa16065040b3b658ea47fdeb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTech:index.html.twig", 1);
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
        $__internal_72fa05f30023955c1597c2c944ea611bbd98bf2145a56702881f1ffe1033b94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72fa05f30023955c1597c2c944ea611bbd98bf2145a56702881f1ffe1033b94a->enter($__internal_72fa05f30023955c1597c2c944ea611bbd98bf2145a56702881f1ffe1033b94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:index.html.twig"));

        $__internal_c8c40e524aa778b526ee5aa0bc4d3a091dc6087b5677fc286a9a176257adab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c40e524aa778b526ee5aa0bc4d3a091dc6087b5677fc286a9a176257adab42->enter($__internal_c8c40e524aa778b526ee5aa0bc4d3a091dc6087b5677fc286a9a176257adab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:index.html.twig"));

        // line 5
        $context["menu_imprime_tech"] = true;
        // line 6
        $context["menu_imprime_tech_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72fa05f30023955c1597c2c944ea611bbd98bf2145a56702881f1ffe1033b94a->leave($__internal_72fa05f30023955c1597c2c944ea611bbd98bf2145a56702881f1ffe1033b94a_prof);

        
        $__internal_c8c40e524aa778b526ee5aa0bc4d3a091dc6087b5677fc286a9a176257adab42->leave($__internal_c8c40e524aa778b526ee5aa0bc4d3a091dc6087b5677fc286a9a176257adab42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac89ddfcda551352cc79570c26b730faa73b5aefe94b3df063ffb7a2e4688f52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac89ddfcda551352cc79570c26b730faa73b5aefe94b3df063ffb7a2e4688f52->enter($__internal_ac89ddfcda551352cc79570c26b730faa73b5aefe94b3df063ffb7a2e4688f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d0ff8bb0a385d9e928ec3713d6226fe420ef776bbc3a0e88fa9621cd4409ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0ff8bb0a385d9e928ec3713d6226fe420ef776bbc3a0e88fa9621cd4409ee5->enter($__internal_9d0ff8bb0a385d9e928ec3713d6226fe420ef776bbc3a0e88fa9621cd4409ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des imprimés techniques ";
        
        $__internal_9d0ff8bb0a385d9e928ec3713d6226fe420ef776bbc3a0e88fa9621cd4409ee5->leave($__internal_9d0ff8bb0a385d9e928ec3713d6226fe420ef776bbc3a0e88fa9621cd4409ee5_prof);

        
        $__internal_ac89ddfcda551352cc79570c26b730faa73b5aefe94b3df063ffb7a2e4688f52->leave($__internal_ac89ddfcda551352cc79570c26b730faa73b5aefe94b3df063ffb7a2e4688f52_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_15b64031b88e150a06502335ff2cb46ca4de7edcd802a27c8e77ba8a579c8ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b64031b88e150a06502335ff2cb46ca4de7edcd802a27c8e77ba8a579c8ab2->enter($__internal_15b64031b88e150a06502335ff2cb46ca4de7edcd802a27c8e77ba8a579c8ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d97e0518c729f028a173c45b06c3833bfc2a1901eac528f67ce3a2217f326928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97e0518c729f028a173c45b06c3833bfc2a1901eac528f67ce3a2217f326928->enter($__internal_d97e0518c729f028a173c45b06c3833bfc2a1901eac528f67ce3a2217f326928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un imprimé technique
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom imprimé technique</th>
                                <th>Unité</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprime_techs"] ?? $this->getContext($context, "imprime_techs")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 58
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech"], "uteImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_edit", array("id" => $this->getAttribute($context["imprime_tech"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_delete", array("id" => $this->getAttribute($context["imprime_tech"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>

                        ";
        // line 80
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
        
        $__internal_d97e0518c729f028a173c45b06c3833bfc2a1901eac528f67ce3a2217f326928->leave($__internal_d97e0518c729f028a173c45b06c3833bfc2a1901eac528f67ce3a2217f326928_prof);

        
        $__internal_15b64031b88e150a06502335ff2cb46ca4de7edcd802a27c8e77ba8a579c8ab2->leave($__internal_15b64031b88e150a06502335ff2cb46ca4de7edcd802a27c8e77ba8a579c8ab2_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dc20d2c05f3c6b0e9274de20b9b80f6998aa6acf8743d9e3b9da665bf78d0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc20d2c05f3c6b0e9274de20b9b80f6998aa6acf8743d9e3b9da665bf78d0e9->enter($__internal_8dc20d2c05f3c6b0e9274de20b9b80f6998aa6acf8743d9e3b9da665bf78d0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4cc770f312870c23156bc38cdf035874eadbe8ee86387eec40a6b581347772e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cc770f312870c23156bc38cdf035874eadbe8ee86387eec40a6b581347772e->enter($__internal_a4cc770f312870c23156bc38cdf035874eadbe8ee86387eec40a6b581347772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_a4cc770f312870c23156bc38cdf035874eadbe8ee86387eec40a6b581347772e->leave($__internal_a4cc770f312870c23156bc38cdf035874eadbe8ee86387eec40a6b581347772e_prof);

        
        $__internal_8dc20d2c05f3c6b0e9274de20b9b80f6998aa6acf8743d9e3b9da665bf78d0e9->leave($__internal_8dc20d2c05f3c6b0e9274de20b9b80f6998aa6acf8743d9e3b9da665bf78d0e9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTech:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  239 => 93,  218 => 80,  213 => 76,  201 => 70,  194 => 66,  188 => 63,  184 => 62,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des imprimés techniques {% endblock %}

{% set menu_imprime_tech      = true %}
{% set menu_imprime_tech_list = true %}

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
                    <a href=\"{{ path('imprime_tech_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un imprimé technique
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('imprime_tech_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom imprimé technique</th>
                                <th>Unité</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for imprime_tech in imprime_techs %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ imprime_tech.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ imprime_tech.nomImprimeTech }}</td>
                                    <td>{{ imprime_tech.uteImprimeTech }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('imprime_tech_edit', { 'id': imprime_tech.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('imprime_tech_delete', { 'id': imprime_tech.id }) }}\">
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
            \$('#liste-imprime-tech').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtImprimeTech:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTech/index.html.twig");
    }
}
