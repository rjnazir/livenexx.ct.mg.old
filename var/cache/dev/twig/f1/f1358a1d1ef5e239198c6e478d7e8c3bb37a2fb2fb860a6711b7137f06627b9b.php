<?php

/* @Admin/CtZoneDeserte/index.html.twig */
class __TwigTemplate_28e290b9c412e8ee829343793b00b4a7eeb98cdb29a66e206f906fac122d5f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/index.html.twig", 1);
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
        $__internal_6099d7761167677789152afeba4135784972e2d30bd3fd3ec0a68d409687caab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6099d7761167677789152afeba4135784972e2d30bd3fd3ec0a68d409687caab->enter($__internal_6099d7761167677789152afeba4135784972e2d30bd3fd3ec0a68d409687caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        $__internal_f1f7b74ea4cfbc8cdc94d0d8a03118abededc86057f5f25a7e05c2278531f349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f7b74ea4cfbc8cdc94d0d8a03118abededc86057f5f25a7e05c2278531f349->enter($__internal_f1f7b74ea4cfbc8cdc94d0d8a03118abededc86057f5f25a7e05c2278531f349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/index.html.twig"));

        // line 5
        $context["menu_zone_deserte"] = true;
        // line 6
        $context["menu_zone_deserte_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6099d7761167677789152afeba4135784972e2d30bd3fd3ec0a68d409687caab->leave($__internal_6099d7761167677789152afeba4135784972e2d30bd3fd3ec0a68d409687caab_prof);

        
        $__internal_f1f7b74ea4cfbc8cdc94d0d8a03118abededc86057f5f25a7e05c2278531f349->leave($__internal_f1f7b74ea4cfbc8cdc94d0d8a03118abededc86057f5f25a7e05c2278531f349_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15209aebbfd9d931bd3e3eeb15a417caced1b6f79f82115c609ff87a162b76fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15209aebbfd9d931bd3e3eeb15a417caced1b6f79f82115c609ff87a162b76fb->enter($__internal_15209aebbfd9d931bd3e3eeb15a417caced1b6f79f82115c609ff87a162b76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_260b09f1ef3477ee9eedaa10db57ccb06e078f85661aacd504bf304063b0e91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260b09f1ef3477ee9eedaa10db57ccb06e078f85661aacd504bf304063b0e91a->enter($__internal_260b09f1ef3477ee9eedaa10db57ccb06e078f85661aacd504bf304063b0e91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des zones de déserte ";
        
        $__internal_260b09f1ef3477ee9eedaa10db57ccb06e078f85661aacd504bf304063b0e91a->leave($__internal_260b09f1ef3477ee9eedaa10db57ccb06e078f85661aacd504bf304063b0e91a_prof);

        
        $__internal_15209aebbfd9d931bd3e3eeb15a417caced1b6f79f82115c609ff87a162b76fb->leave($__internal_15209aebbfd9d931bd3e3eeb15a417caced1b6f79f82115c609ff87a162b76fb_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d04f9db445dd28d0e190ed123d21c0e075d59b4e7495cf030354bb26bc4f3e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04f9db445dd28d0e190ed123d21c0e075d59b4e7495cf030354bb26bc4f3e36->enter($__internal_d04f9db445dd28d0e190ed123d21c0e075d59b4e7495cf030354bb26bc4f3e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fc2c8e6a21af4c87bc3a334f7a0f81d691e92e79834c7fe8805bc27cbde312e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc2c8e6a21af4c87bc3a334f7a0f81d691e92e79834c7fe8805bc27cbde312e->enter($__internal_9fc2c8e6a21af4c87bc3a334f7a0f81d691e92e79834c7fe8805bc27cbde312e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 30
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["zone_desertes"] ?? $this->getContext($context, "zone_desertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_deserte"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["zone_deserte"], "zdLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_edit", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_delete", array("id" => $this->getAttribute($context["zone_deserte"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_deserte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                        ";
        // line 72
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
        
        $__internal_9fc2c8e6a21af4c87bc3a334f7a0f81d691e92e79834c7fe8805bc27cbde312e->leave($__internal_9fc2c8e6a21af4c87bc3a334f7a0f81d691e92e79834c7fe8805bc27cbde312e_prof);

        
        $__internal_d04f9db445dd28d0e190ed123d21c0e075d59b4e7495cf030354bb26bc4f3e36->leave($__internal_d04f9db445dd28d0e190ed123d21c0e075d59b4e7495cf030354bb26bc4f3e36_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_662a076eb01ac97de6a2d1aa9b7b85bd70f8a2cc243ccbc66225c9bff7395764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662a076eb01ac97de6a2d1aa9b7b85bd70f8a2cc243ccbc66225c9bff7395764->enter($__internal_662a076eb01ac97de6a2d1aa9b7b85bd70f8a2cc243ccbc66225c9bff7395764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26eeaa79c454f27f4b7c306955fd7ccbe36eb7643b3b4904bd000c4935ab374b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26eeaa79c454f27f4b7c306955fd7ccbe36eb7643b3b4904bd000c4935ab374b->enter($__internal_26eeaa79c454f27f4b7c306955fd7ccbe36eb7643b3b4904bd000c4935ab374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_26eeaa79c454f27f4b7c306955fd7ccbe36eb7643b3b4904bd000c4935ab374b->leave($__internal_26eeaa79c454f27f4b7c306955fd7ccbe36eb7643b3b4904bd000c4935ab374b_prof);

        
        $__internal_662a076eb01ac97de6a2d1aa9b7b85bd70f8a2cc243ccbc66225c9bff7395764->leave($__internal_662a076eb01ac97de6a2d1aa9b7b85bd70f8a2cc243ccbc66225c9bff7395764_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 86,  213 => 85,  192 => 72,  187 => 68,  175 => 62,  168 => 58,  162 => 55,  157 => 53,  153 => 51,  149 => 50,  135 => 39,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des zones de déserte {% endblock %}

{% set menu_zone_deserte      = true %}
{% set menu_zone_deserte_list = true %}

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
                    <a href=\"{{ path('zone_deserte_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une zone de déserte
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('zone_deserte_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-zone_deserte\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for zone_deserte in zone_desertes %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ zone_deserte.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ zone_deserte.zdLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('zone_deserte_edit', { 'id': zone_deserte.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('zone_deserte_delete', { 'id': zone_deserte.id }) }}\">
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
            \$('#list-zone_deserte').DataTable(
            {
                \"aaSorting\": [],
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
                    \"sEmptyTable\": \"Aucune zone de déserte trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtZoneDeserte/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\index.html.twig");
    }
}
