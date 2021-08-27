<?php

/* AdminBundle:CtUtilisation:index.html.twig */
class __TwigTemplate_4ee0867e6f7ad14b2a8299fc82a6a5e28bd27b1da9263518398a84f5537152b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:index.html.twig", 1);
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
        $__internal_be1843068b384c179747a917736cbcc1d107e6d1060894b3d57597e6c7bb9e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1843068b384c179747a917736cbcc1d107e6d1060894b3d57597e6c7bb9e44->enter($__internal_be1843068b384c179747a917736cbcc1d107e6d1060894b3d57597e6c7bb9e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:index.html.twig"));

        $__internal_87fcbab2647a270e44a4e79bb1c7220308dcac7acf3c58d799e3095448532f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fcbab2647a270e44a4e79bb1c7220308dcac7acf3c58d799e3095448532f35->enter($__internal_87fcbab2647a270e44a4e79bb1c7220308dcac7acf3c58d799e3095448532f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:index.html.twig"));

        // line 5
        $context["menu_utilisation"] = true;
        // line 6
        $context["menu_utilisation_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be1843068b384c179747a917736cbcc1d107e6d1060894b3d57597e6c7bb9e44->leave($__internal_be1843068b384c179747a917736cbcc1d107e6d1060894b3d57597e6c7bb9e44_prof);

        
        $__internal_87fcbab2647a270e44a4e79bb1c7220308dcac7acf3c58d799e3095448532f35->leave($__internal_87fcbab2647a270e44a4e79bb1c7220308dcac7acf3c58d799e3095448532f35_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee42925c40c417f193d7233d107fe81ace5d944ae6d1532d70e3b72624cb35e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee42925c40c417f193d7233d107fe81ace5d944ae6d1532d70e3b72624cb35e1->enter($__internal_ee42925c40c417f193d7233d107fe81ace5d944ae6d1532d70e3b72624cb35e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6209909d45d01ad30b067ed528a26cf0cfc408ea20c7e3636e3a0583189b40bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6209909d45d01ad30b067ed528a26cf0cfc408ea20c7e3636e3a0583189b40bf->enter($__internal_6209909d45d01ad30b067ed528a26cf0cfc408ea20c7e3636e3a0583189b40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations ";
        
        $__internal_6209909d45d01ad30b067ed528a26cf0cfc408ea20c7e3636e3a0583189b40bf->leave($__internal_6209909d45d01ad30b067ed528a26cf0cfc408ea20c7e3636e3a0583189b40bf_prof);

        
        $__internal_ee42925c40c417f193d7233d107fe81ace5d944ae6d1532d70e3b72624cb35e1->leave($__internal_ee42925c40c417f193d7233d107fe81ace5d944ae6d1532d70e3b72624cb35e1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a8b14eff9b0ad30c240a7e7a9a433acb225ebcbdcb8c129b66dba0fb9f1bd70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8b14eff9b0ad30c240a7e7a9a433acb225ebcbdcb8c129b66dba0fb9f1bd70->enter($__internal_1a8b14eff9b0ad30c240a7e7a9a433acb225ebcbdcb8c129b66dba0fb9f1bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22c75eae188b79c5d2677c4fe09e3b17288f89381d3e6e72a4bdec880aadf33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c75eae188b79c5d2677c4fe09e3b17288f89381d3e6e72a4bdec880aadf33a->enter($__internal_22c75eae188b79c5d2677c4fe09e3b17288f89381d3e6e72a4bdec880aadf33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisations"] ?? $this->getContext($context, "utilisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "utLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_edit", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisation'], $context['_parent'], $context['loop']);
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
        
        $__internal_22c75eae188b79c5d2677c4fe09e3b17288f89381d3e6e72a4bdec880aadf33a->leave($__internal_22c75eae188b79c5d2677c4fe09e3b17288f89381d3e6e72a4bdec880aadf33a_prof);

        
        $__internal_1a8b14eff9b0ad30c240a7e7a9a433acb225ebcbdcb8c129b66dba0fb9f1bd70->leave($__internal_1a8b14eff9b0ad30c240a7e7a9a433acb225ebcbdcb8c129b66dba0fb9f1bd70_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5577b690b75b5cbd181c0a1473b720ed3a3d5e307fb8d449daee377ea03dc761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5577b690b75b5cbd181c0a1473b720ed3a3d5e307fb8d449daee377ea03dc761->enter($__internal_5577b690b75b5cbd181c0a1473b720ed3a3d5e307fb8d449daee377ea03dc761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aa7381546659b6488cb8473f6c3d489b4adadd43ed7f7b4df89e83a0ca060f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7381546659b6488cb8473f6c3d489b4adadd43ed7f7b4df89e83a0ca060f66->enter($__internal_aa7381546659b6488cb8473f6c3d489b4adadd43ed7f7b4df89e83a0ca060f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-utilisation').DataTable(
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_aa7381546659b6488cb8473f6c3d489b4adadd43ed7f7b4df89e83a0ca060f66->leave($__internal_aa7381546659b6488cb8473f6c3d489b4adadd43ed7f7b4df89e83a0ca060f66_prof);

        
        $__internal_5577b690b75b5cbd181c0a1473b720ed3a3d5e307fb8d449daee377ea03dc761->leave($__internal_5577b690b75b5cbd181c0a1473b720ed3a3d5e307fb8d449daee377ea03dc761_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:index.html.twig";
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

{% block title %}{{ parent() }} Liste des utilisations {% endblock %}

{% set menu_utilisation      = true %}
{% set menu_utilisation_list = true %}

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
                    <a href=\"{{ path('utilisation_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('utilisation_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for utilisation in utilisations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ utilisation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ utilisation.utLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('utilisation_edit', { 'id': utilisation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('utilisation_delete', { 'id': utilisation.id }) }}\">
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
            \$('#list-utilisation').DataTable(
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtUtilisation:index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/index.html.twig");
    }
}
