<?php

/* AdminBundle:CtTypeAnomalie:index.html.twig */
class __TwigTemplate_1ae25ff5f1105b380ac4f9fe49dba859682ad2ad0c9c881d41534a1d01818f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:index.html.twig", 1);
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
        $__internal_9cf5a4b4a4e44b34f5b9bb4cad0f9666d342af4953039ee904e90ffe1fbb426f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf5a4b4a4e44b34f5b9bb4cad0f9666d342af4953039ee904e90ffe1fbb426f->enter($__internal_9cf5a4b4a4e44b34f5b9bb4cad0f9666d342af4953039ee904e90ffe1fbb426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        $__internal_6f435385464823b47ea67c5d14c2b375c488ca2e12c01e74e0c0d2737a5f9a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f435385464823b47ea67c5d14c2b375c488ca2e12c01e74e0c0d2737a5f9a3d->enter($__internal_6f435385464823b47ea67c5d14c2b375c488ca2e12c01e74e0c0d2737a5f9a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:index.html.twig"));

        // line 5
        $context["menu_anomalie"] = true;
        // line 6
        $context["menu_type_anomalie"] = true;
        // line 7
        $context["menu_type_anomalie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cf5a4b4a4e44b34f5b9bb4cad0f9666d342af4953039ee904e90ffe1fbb426f->leave($__internal_9cf5a4b4a4e44b34f5b9bb4cad0f9666d342af4953039ee904e90ffe1fbb426f_prof);

        
        $__internal_6f435385464823b47ea67c5d14c2b375c488ca2e12c01e74e0c0d2737a5f9a3d->leave($__internal_6f435385464823b47ea67c5d14c2b375c488ca2e12c01e74e0c0d2737a5f9a3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af4c2a6f0ad8987d67b5332d371dadf0ba4440b7729949c451b6fc47765a3b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4c2a6f0ad8987d67b5332d371dadf0ba4440b7729949c451b6fc47765a3b6a->enter($__internal_af4c2a6f0ad8987d67b5332d371dadf0ba4440b7729949c451b6fc47765a3b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e62604e9551143afc87faea03e7d3b71c0e288701a26c811cb9618b5732b0ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62604e9551143afc87faea03e7d3b71c0e288701a26c811cb9618b5732b0ec3->enter($__internal_e62604e9551143afc87faea03e7d3b71c0e288701a26c811cb9618b5732b0ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_e62604e9551143afc87faea03e7d3b71c0e288701a26c811cb9618b5732b0ec3->leave($__internal_e62604e9551143afc87faea03e7d3b71c0e288701a26c811cb9618b5732b0ec3_prof);

        
        $__internal_af4c2a6f0ad8987d67b5332d371dadf0ba4440b7729949c451b6fc47765a3b6a->leave($__internal_af4c2a6f0ad8987d67b5332d371dadf0ba4440b7729949c451b6fc47765a3b6a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f072b571030be845761e5117e1d2193fa2e590a4ab0747016d6f149c71678013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f072b571030be845761e5117e1d2193fa2e590a4ab0747016d6f149c71678013->enter($__internal_f072b571030be845761e5117e1d2193fa2e590a4ab0747016d6f149c71678013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e14da78adb91e2963e826758ba040481814a5d2d14c1e3a1e98c57ac993d2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e14da78adb91e2963e826758ba040481814a5d2d14c1e3a1e98c57ac993d2b3->enter($__internal_0e14da78adb91e2963e826758ba040481814a5d2d14c1e3a1e98c57ac993d2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_anomalies"] ?? $this->getContext($context, "type_anomalies")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_anomalie"]) {
            // line 58
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_anomalie"], "atpLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_edit", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_delete", array("id" => $this->getAttribute($context["type_anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_anomalie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_0e14da78adb91e2963e826758ba040481814a5d2d14c1e3a1e98c57ac993d2b3->leave($__internal_0e14da78adb91e2963e826758ba040481814a5d2d14c1e3a1e98c57ac993d2b3_prof);

        
        $__internal_f072b571030be845761e5117e1d2193fa2e590a4ab0747016d6f149c71678013->leave($__internal_f072b571030be845761e5117e1d2193fa2e590a4ab0747016d6f149c71678013_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_489ab5d351ac704758e8f0f81fc0730e1ff01a44dba9ef9024c240132936c858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489ab5d351ac704758e8f0f81fc0730e1ff01a44dba9ef9024c240132936c858->enter($__internal_489ab5d351ac704758e8f0f81fc0730e1ff01a44dba9ef9024c240132936c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c4101bff8664362e4971a6f96baa3d9a5f2a247cc0bd12a292b098af11779fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4101bff8664362e4971a6f96baa3d9a5f2a247cc0bd12a292b098af11779fb2->enter($__internal_c4101bff8664362e4971a6f96baa3d9a5f2a247cc0bd12a292b098af11779fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-anomalie').DataTable(
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
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_c4101bff8664362e4971a6f96baa3d9a5f2a247cc0bd12a292b098af11779fb2->leave($__internal_c4101bff8664362e4971a6f96baa3d9a5f2a247cc0bd12a292b098af11779fb2_prof);

        
        $__internal_489ab5d351ac704758e8f0f81fc0730e1ff01a44dba9ef9024c240132936c858->leave($__internal_489ab5d351ac704758e8f0f81fc0730e1ff01a44dba9ef9024c240132936c858_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des types d' anomalies {% endblock %}

{% set menu_anomalie           = true %}
{% set menu_type_anomalie      = true %}
{% set menu_type_anomalie_list = true %}

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
                    <a href=\"{{ path('type_anomalie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type d'anomalie
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_anomalie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            {% for type_anomalie in type_anomalies %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ type_anomalie.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ type_anomalie.atpLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('type_anomalie_edit', { 'id': type_anomalie.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('type_anomalie_delete', { 'id': type_anomalie.id }) }}\">
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
            \$('#list-type-anomalie').DataTable(
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
                    \"sEmptyTable\": \"Aucun type anomalie trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtTypeAnomalie:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/index.html.twig");
    }
}
