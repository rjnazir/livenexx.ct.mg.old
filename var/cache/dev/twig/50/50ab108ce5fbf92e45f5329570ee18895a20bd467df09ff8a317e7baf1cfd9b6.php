<?php

/* AdminBundle:CtUsage:index.html.twig */
class __TwigTemplate_c0f3b577cde582258636727185c3ccdce181a2e490dd2e779bcd5fc964eb81f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUsage:index.html.twig", 1);
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
        $__internal_081f69bc892dfec75d7aa188a0b437622b1f22a6f56c68480134994de9b2014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081f69bc892dfec75d7aa188a0b437622b1f22a6f56c68480134994de9b2014e->enter($__internal_081f69bc892dfec75d7aa188a0b437622b1f22a6f56c68480134994de9b2014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:index.html.twig"));

        $__internal_0f5771f89aa42611f261dfdd4e6547ccbcecc5a7b271b6751f1e0427a2d292f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5771f89aa42611f261dfdd4e6547ccbcecc5a7b271b6751f1e0427a2d292f6->enter($__internal_0f5771f89aa42611f261dfdd4e6547ccbcecc5a7b271b6751f1e0427a2d292f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUsage:index.html.twig"));

        // line 5
        $context["menu_usage"] = true;
        // line 6
        $context["menu_usage_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_081f69bc892dfec75d7aa188a0b437622b1f22a6f56c68480134994de9b2014e->leave($__internal_081f69bc892dfec75d7aa188a0b437622b1f22a6f56c68480134994de9b2014e_prof);

        
        $__internal_0f5771f89aa42611f261dfdd4e6547ccbcecc5a7b271b6751f1e0427a2d292f6->leave($__internal_0f5771f89aa42611f261dfdd4e6547ccbcecc5a7b271b6751f1e0427a2d292f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d52631c6250ab7e963eabce38d47703d9f66c0ca9bee85cd21d0ad4a0731ec3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d52631c6250ab7e963eabce38d47703d9f66c0ca9bee85cd21d0ad4a0731ec3f->enter($__internal_d52631c6250ab7e963eabce38d47703d9f66c0ca9bee85cd21d0ad4a0731ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf5de2cfdeebe51eb1282175caa7bff97550370b258d725208063a9357e2ea94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5de2cfdeebe51eb1282175caa7bff97550370b258d725208063a9357e2ea94->enter($__internal_cf5de2cfdeebe51eb1282175caa7bff97550370b258d725208063a9357e2ea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des usages ";
        
        $__internal_cf5de2cfdeebe51eb1282175caa7bff97550370b258d725208063a9357e2ea94->leave($__internal_cf5de2cfdeebe51eb1282175caa7bff97550370b258d725208063a9357e2ea94_prof);

        
        $__internal_d52631c6250ab7e963eabce38d47703d9f66c0ca9bee85cd21d0ad4a0731ec3f->leave($__internal_d52631c6250ab7e963eabce38d47703d9f66c0ca9bee85cd21d0ad4a0731ec3f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_95802cdf3178ca1d50bff0237b57661039221a6a3ab883487231c4b102add853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95802cdf3178ca1d50bff0237b57661039221a6a3ab883487231c4b102add853->enter($__internal_95802cdf3178ca1d50bff0237b57661039221a6a3ab883487231c4b102add853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a5b389f8b590f04d4fb947065e9b053e0499e579fe9b0b4ce08756f4f030543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5b389f8b590f04d4fb947065e9b053e0499e579fe9b0b4ce08756f4f030543->enter($__internal_5a5b389f8b590f04d4fb947065e9b053e0499e579fe9b0b4ce08756f4f030543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Validite</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usages"] ?? $this->getContext($context, "usages")));
        foreach ($context['_seq'] as $context["_key"] => $context["usage"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        ";
            // line 63
            echo "                                            ";
            // line 64
            echo "                                                ";
            // line 65
            echo "                                            ";
            // line 66
            echo "                                        ";
            // line 67
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["usage"], "usgValidite", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_edit", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_delete", array("id" => $this->getAttribute($context["usage"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>

                        ";
        // line 85
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
        
        $__internal_5a5b389f8b590f04d4fb947065e9b053e0499e579fe9b0b4ce08756f4f030543->leave($__internal_5a5b389f8b590f04d4fb947065e9b053e0499e579fe9b0b4ce08756f4f030543_prof);

        
        $__internal_95802cdf3178ca1d50bff0237b57661039221a6a3ab883487231c4b102add853->leave($__internal_95802cdf3178ca1d50bff0237b57661039221a6a3ab883487231c4b102add853_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56b789c7d35a42a2b99fd015855bba46b6a0f70f5708f6c459c6276e4c3b763c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b789c7d35a42a2b99fd015855bba46b6a0f70f5708f6c459c6276e4c3b763c->enter($__internal_56b789c7d35a42a2b99fd015855bba46b6a0f70f5708f6c459c6276e4c3b763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a9a463daa57b58661532c33c81232b186f3def2732913cb9967e476ee3fe696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a463daa57b58661532c33c81232b186f3def2732913cb9967e476ee3fe696->enter($__internal_6a9a463daa57b58661532c33c81232b186f3def2732913cb9967e476ee3fe696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-usage').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6a9a463daa57b58661532c33c81232b186f3def2732913cb9967e476ee3fe696->leave($__internal_6a9a463daa57b58661532c33c81232b186f3def2732913cb9967e476ee3fe696_prof);

        
        $__internal_56b789c7d35a42a2b99fd015855bba46b6a0f70f5708f6c459c6276e4c3b763c->leave($__internal_56b789c7d35a42a2b99fd015855bba46b6a0f70f5708f6c459c6276e4c3b763c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUsage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 99,  248 => 98,  227 => 85,  222 => 81,  210 => 75,  203 => 71,  197 => 68,  192 => 67,  190 => 66,  188 => 65,  186 => 64,  184 => 63,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des usages {% endblock %}

{% set menu_usage      = true %}
{% set menu_usage_list = true %}

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
                    <a href=\"{{ path('usage_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un usage
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('usage_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-usage\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Validite</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for usage in usages %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ usage.id }}\" name=\"delete[]\" />
                                        </td>
                                        {#<td>#}
                                            {#}#}
                                                {#{{ usage.ctTypeUsage.tpuLibelle }}#}
                                            {#{% endif %}#}
                                        {#</td>#}
                                        <td>{{ usage.usgLibelle }}</td>
                                        <td>{{ usage.usgValidite }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('usage_edit', { 'id': usage.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('usage_delete', { 'id': usage.id }) }}\">
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
            \$('#list-usage').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune usage trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtUsage:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUsage/index.html.twig");
    }
}
