<?php

/* AdminBundle:CtTypeReception:index.html.twig */
class __TwigTemplate_98e459873bfdc3319bd488de54982dc9abad3e58ff6b71819de9528c6f72b043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:index.html.twig", 1);
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
        $__internal_4d2c9e4cd0d9a2745e91e636640caabddad8f5e192a8e043d63a74c9e2930156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2c9e4cd0d9a2745e91e636640caabddad8f5e192a8e043d63a74c9e2930156->enter($__internal_4d2c9e4cd0d9a2745e91e636640caabddad8f5e192a8e043d63a74c9e2930156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:index.html.twig"));

        $__internal_c72315a1be1748b43c5db53bbc9367ecff6586cef0116dc428c909839d5c8735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72315a1be1748b43c5db53bbc9367ecff6586cef0116dc428c909839d5c8735->enter($__internal_c72315a1be1748b43c5db53bbc9367ecff6586cef0116dc428c909839d5c8735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:index.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_type_reception"] = true;
        // line 7
        $context["menu_type_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d2c9e4cd0d9a2745e91e636640caabddad8f5e192a8e043d63a74c9e2930156->leave($__internal_4d2c9e4cd0d9a2745e91e636640caabddad8f5e192a8e043d63a74c9e2930156_prof);

        
        $__internal_c72315a1be1748b43c5db53bbc9367ecff6586cef0116dc428c909839d5c8735->leave($__internal_c72315a1be1748b43c5db53bbc9367ecff6586cef0116dc428c909839d5c8735_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_253305cc07e580ecc42cfc7e8b73751d787c3a592b4e4405c659d3685da63b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253305cc07e580ecc42cfc7e8b73751d787c3a592b4e4405c659d3685da63b3d->enter($__internal_253305cc07e580ecc42cfc7e8b73751d787c3a592b4e4405c659d3685da63b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe5247bac2e40b3929e8f14feb291bfddfcc1cb645cb7989438c6d7c8e3546d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5247bac2e40b3929e8f14feb291bfddfcc1cb645cb7989438c6d7c8e3546d3->enter($__internal_fe5247bac2e40b3929e8f14feb291bfddfcc1cb645cb7989438c6d7c8e3546d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des type_receptions ";
        
        $__internal_fe5247bac2e40b3929e8f14feb291bfddfcc1cb645cb7989438c6d7c8e3546d3->leave($__internal_fe5247bac2e40b3929e8f14feb291bfddfcc1cb645cb7989438c6d7c8e3546d3_prof);

        
        $__internal_253305cc07e580ecc42cfc7e8b73751d787c3a592b4e4405c659d3685da63b3d->leave($__internal_253305cc07e580ecc42cfc7e8b73751d787c3a592b4e4405c659d3685da63b3d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0522a8084c2c4876d91ef7f2350ee1d23065bdee2235d158d33e92452eafc78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0522a8084c2c4876d91ef7f2350ee1d23065bdee2235d158d33e92452eafc78e->enter($__internal_0522a8084c2c4876d91ef7f2350ee1d23065bdee2235d158d33e92452eafc78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58f25db7225c7dc4802de0f9950cde922224f2852373a41c7df374e54c56b38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f25db7225c7dc4802de0f9950cde922224f2852373a41c7df374e54c56b38c->enter($__internal_58f25db7225c7dc4802de0f9950cde922224f2852373a41c7df374e54c56b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? $this->getContext($context, "type_receptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_reception"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_reception"], "tprcpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_edit", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_delete", array("id" => $this->getAttribute($context["type_reception"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_reception'], $context['_parent'], $context['loop']);
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
        
        $__internal_58f25db7225c7dc4802de0f9950cde922224f2852373a41c7df374e54c56b38c->leave($__internal_58f25db7225c7dc4802de0f9950cde922224f2852373a41c7df374e54c56b38c_prof);

        
        $__internal_0522a8084c2c4876d91ef7f2350ee1d23065bdee2235d158d33e92452eafc78e->leave($__internal_0522a8084c2c4876d91ef7f2350ee1d23065bdee2235d158d33e92452eafc78e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5ff0261f59b19a81ff577974781c7b0268e123d6c163d69e1f94bcef846624f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ff0261f59b19a81ff577974781c7b0268e123d6c163d69e1f94bcef846624f->enter($__internal_a5ff0261f59b19a81ff577974781c7b0268e123d6c163d69e1f94bcef846624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f9dd92af2e88acfcd7696fbdec50fdb2b0ec7dfc6c257d3ae10f649cccc8bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9dd92af2e88acfcd7696fbdec50fdb2b0ec7dfc6c257d3ae10f649cccc8bbf->enter($__internal_5f9dd92af2e88acfcd7696fbdec50fdb2b0ec7dfc6c257d3ae10f649cccc8bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_5f9dd92af2e88acfcd7696fbdec50fdb2b0ec7dfc6c257d3ae10f649cccc8bbf->leave($__internal_5f9dd92af2e88acfcd7696fbdec50fdb2b0ec7dfc6c257d3ae10f649cccc8bbf_prof);

        
        $__internal_a5ff0261f59b19a81ff577974781c7b0268e123d6c163d69e1f94bcef846624f->leave($__internal_a5ff0261f59b19a81ff577974781c7b0268e123d6c163d69e1f94bcef846624f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 92,  235 => 91,  214 => 78,  209 => 74,  197 => 68,  190 => 64,  184 => 61,  179 => 59,  175 => 57,  171 => 56,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des type_receptions {% endblock %}

{% set menu_reception           = true %}
{% set menu_type_reception      = true %}
{% set menu_type_reception_list = true %}

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
                    <a href=\"{{ path('type_reception_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de réception
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_reception_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type_reception\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_reception in type_receptions %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_reception.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_reception.tprcpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_reception_edit', { 'id': type_reception.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_reception_delete', { 'id': type_reception.id }) }}\">
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
            \$('#list-type_reception').DataTable(
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
                    \"sEmptyTable\": \"Aucun type de réception trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeReception:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/index.html.twig");
    }
}
