<?php

/* @Admin/CtGenre/index.html.twig */
class __TwigTemplate_97dd0daee18a89fb6e65237ae4b0588759e7e09e762474c61f8873f8f16db9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenre/index.html.twig", 1);
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
        $__internal_6de02daf1bf3563b82ee79fd5c01f59a176ddd335b5f11c7ac5d586d2840a19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de02daf1bf3563b82ee79fd5c01f59a176ddd335b5f11c7ac5d586d2840a19e->enter($__internal_6de02daf1bf3563b82ee79fd5c01f59a176ddd335b5f11c7ac5d586d2840a19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/index.html.twig"));

        $__internal_dec8bb9f48085ad40c7450e73991354cdaa75fee651c3bf2005fa80e123bad0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec8bb9f48085ad40c7450e73991354cdaa75fee651c3bf2005fa80e123bad0b->enter($__internal_dec8bb9f48085ad40c7450e73991354cdaa75fee651c3bf2005fa80e123bad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenre/index.html.twig"));

        // line 5
        $context["menu_genre"] = true;
        // line 6
        $context["menu_genre_type"] = true;
        // line 7
        $context["menu_genre_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6de02daf1bf3563b82ee79fd5c01f59a176ddd335b5f11c7ac5d586d2840a19e->leave($__internal_6de02daf1bf3563b82ee79fd5c01f59a176ddd335b5f11c7ac5d586d2840a19e_prof);

        
        $__internal_dec8bb9f48085ad40c7450e73991354cdaa75fee651c3bf2005fa80e123bad0b->leave($__internal_dec8bb9f48085ad40c7450e73991354cdaa75fee651c3bf2005fa80e123bad0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd00cbaad416a444d4927f947d4f20b6ea78b4ed86fedb6b73130b6f8a531682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd00cbaad416a444d4927f947d4f20b6ea78b4ed86fedb6b73130b6f8a531682->enter($__internal_bd00cbaad416a444d4927f947d4f20b6ea78b4ed86fedb6b73130b6f8a531682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd346a3dfe633facd20d462f61a39b2defbe389691cc1cc96464c1591f20594a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd346a3dfe633facd20d462f61a39b2defbe389691cc1cc96464c1591f20594a->enter($__internal_dd346a3dfe633facd20d462f61a39b2defbe389691cc1cc96464c1591f20594a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des genres ";
        
        $__internal_dd346a3dfe633facd20d462f61a39b2defbe389691cc1cc96464c1591f20594a->leave($__internal_dd346a3dfe633facd20d462f61a39b2defbe389691cc1cc96464c1591f20594a_prof);

        
        $__internal_bd00cbaad416a444d4927f947d4f20b6ea78b4ed86fedb6b73130b6f8a531682->leave($__internal_bd00cbaad416a444d4927f947d4f20b6ea78b4ed86fedb6b73130b6f8a531682_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_663f6627a353bbf349fb0c5d5142ccd779f4dc4f18973924086978cdb2bc68bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663f6627a353bbf349fb0c5d5142ccd779f4dc4f18973924086978cdb2bc68bb->enter($__internal_663f6627a353bbf349fb0c5d5142ccd779f4dc4f18973924086978cdb2bc68bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0ee9720d6d16bcc5fe3f03559f1a6e7305e6bbf20a5e979f9228c33d94b0bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ee9720d6d16bcc5fe3f03559f1a6e7305e6bbf20a5e979f9228c33d94b0bad->enter($__internal_d0ee9720d6d16bcc5fe3f03559f1a6e7305e6bbf20a5e979f9228c33d94b0bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un genre
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Categorie</th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 60
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            ";
            // line 65
            if ($this->getAttribute($context["genre"], "ctGenreCategorie", array())) {
                // line 66
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["genre"], "ctGenreCategorie", array()), "gcLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 68
            echo "                                        </td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_edit", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_delete", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        </table>

                        ";
        // line 87
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
        
        $__internal_d0ee9720d6d16bcc5fe3f03559f1a6e7305e6bbf20a5e979f9228c33d94b0bad->leave($__internal_d0ee9720d6d16bcc5fe3f03559f1a6e7305e6bbf20a5e979f9228c33d94b0bad_prof);

        
        $__internal_663f6627a353bbf349fb0c5d5142ccd779f4dc4f18973924086978cdb2bc68bb->leave($__internal_663f6627a353bbf349fb0c5d5142ccd779f4dc4f18973924086978cdb2bc68bb_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4e4a4c11bbe24c76b41fcb19ccf5439676c03a3f6ab8bb70da90757cb3098c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4a4c11bbe24c76b41fcb19ccf5439676c03a3f6ab8bb70da90757cb3098c91->enter($__internal_4e4a4c11bbe24c76b41fcb19ccf5439676c03a3f6ab8bb70da90757cb3098c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5d367714a5459a3fe33e5f10d2ebf88d1985d4e43f4cd26b18fb1674e74fd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d367714a5459a3fe33e5f10d2ebf88d1985d4e43f4cd26b18fb1674e74fd43->enter($__internal_d5d367714a5459a3fe33e5f10d2ebf88d1985d4e43f4cd26b18fb1674e74fd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre').DataTable(
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
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_d5d367714a5459a3fe33e5f10d2ebf88d1985d4e43f4cd26b18fb1674e74fd43->leave($__internal_d5d367714a5459a3fe33e5f10d2ebf88d1985d4e43f4cd26b18fb1674e74fd43_prof);

        
        $__internal_4e4a4c11bbe24c76b41fcb19ccf5439676c03a3f6ab8bb70da90757cb3098c91->leave($__internal_4e4a4c11bbe24c76b41fcb19ccf5439676c03a3f6ab8bb70da90757cb3098c91_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 101,  254 => 100,  233 => 87,  228 => 83,  216 => 77,  209 => 73,  203 => 70,  199 => 69,  196 => 68,  190 => 66,  188 => 65,  182 => 62,  178 => 60,  174 => 59,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des genres {% endblock %}

{% set menu_genre           = true %}
{% set menu_genre_type      = true %}
{% set menu_genre_type_list = true %}

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
                    <a href=\"{{ path('genre_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un genre
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('genre_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Categorie</th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for genre in genres %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ genre.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            {% if genre.ctGenreCategorie %}
                                                {{ genre.ctGenreCategorie.gcLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>{{ genre.grLibelle }}</td>
                                        <td>{{ genre.grCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('genre_edit', { 'id': genre.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('genre_delete', { 'id': genre.id }) }}\">
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
            \$('#list-genre').DataTable(
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
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtGenre/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenre\\index.html.twig");
    }
}
