<?php

/* @User/Verificateur/index.html.twig */
class __TwigTemplate_62807479671a65a27ccb39a20a03207f6f8d048ce487e1cde9c900b16bb8cfc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/Verificateur/index.html.twig", 1);
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
        $__internal_f4b76554f6ce373057526a2878750d00ac6a68f9e7e19b0c940a7d81e92ef179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b76554f6ce373057526a2878750d00ac6a68f9e7e19b0c940a7d81e92ef179->enter($__internal_f4b76554f6ce373057526a2878750d00ac6a68f9e7e19b0c940a7d81e92ef179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Verificateur/index.html.twig"));

        $__internal_3e7ca24bbac7cc3afbca745985644ed124cd5976803ec7cce9c29ecc8f3c89b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7ca24bbac7cc3afbca745985644ed124cd5976803ec7cce9c29ecc8f3c89b0->enter($__internal_3e7ca24bbac7cc3afbca745985644ed124cd5976803ec7cce9c29ecc8f3c89b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Verificateur/index.html.twig"));

        // line 5
        $context["menu_verificateur"] = true;
        // line 6
        $context["menu_verificateur_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b76554f6ce373057526a2878750d00ac6a68f9e7e19b0c940a7d81e92ef179->leave($__internal_f4b76554f6ce373057526a2878750d00ac6a68f9e7e19b0c940a7d81e92ef179_prof);

        
        $__internal_3e7ca24bbac7cc3afbca745985644ed124cd5976803ec7cce9c29ecc8f3c89b0->leave($__internal_3e7ca24bbac7cc3afbca745985644ed124cd5976803ec7cce9c29ecc8f3c89b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_477bd488803ea4e6172b93f0d0ecb79b0f9a6905e0cfe23bc734282f2b98466a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477bd488803ea4e6172b93f0d0ecb79b0f9a6905e0cfe23bc734282f2b98466a->enter($__internal_477bd488803ea4e6172b93f0d0ecb79b0f9a6905e0cfe23bc734282f2b98466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35553cc743d77356b93319d936ffdac59d5fda76bb99895642633518c8a6a392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35553cc743d77356b93319d936ffdac59d5fda76bb99895642633518c8a6a392->enter($__internal_35553cc743d77356b93319d936ffdac59d5fda76bb99895642633518c8a6a392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisateurs ";
        
        $__internal_35553cc743d77356b93319d936ffdac59d5fda76bb99895642633518c8a6a392->leave($__internal_35553cc743d77356b93319d936ffdac59d5fda76bb99895642633518c8a6a392_prof);

        
        $__internal_477bd488803ea4e6172b93f0d0ecb79b0f9a6905e0cfe23bc734282f2b98466a->leave($__internal_477bd488803ea4e6172b93f0d0ecb79b0f9a6905e0cfe23bc734282f2b98466a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d18918454d0c23ceb190726c717a02f19bd437c129f0cff715bc57a76fc205f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18918454d0c23ceb190726c717a02f19bd437c129f0cff715bc57a76fc205f0->enter($__internal_d18918454d0c23ceb190726c717a02f19bd437c129f0cff715bc57a76fc205f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05422954df226ba0f0342cdcf3e32b92cc64132d1c257e7e271e833f4a21157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05422954df226ba0f0342cdcf3e32b92cc64132d1c257e7e271e833f4a21157a->enter($__internal_05422954df226ba0f0342cdcf3e32b92cc64132d1c257e7e271e833f4a21157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un vérificateur
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-verificateur\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th>Date inscription</th>
                                     <th>Présence</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrProfession", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrEmail", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 64
            if ( !(null === $this->getAttribute($context["user"], "ctCentre", array()))) {
                // line 65
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                                (";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctProvince", array()), "prvNom", array()), "html", null, true);
                echo ")
                                            ";
            }
            // line 68
            echo "                                        </td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "usrCreatedAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td class=\"kl-oui-non\">
                                            ";
            // line 71
            if (($this->getAttribute($context["user"], "usrPresence", array()) == 1)) {
                // line 72
                echo "                                                Oui
                                            ";
            } else {
                // line 74
                echo "                                                Non
                                            ";
            }
            // line 76
            echo "                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                            </tbody>
                        </table>

                        ";
        // line 93
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
        
        $__internal_05422954df226ba0f0342cdcf3e32b92cc64132d1c257e7e271e833f4a21157a->leave($__internal_05422954df226ba0f0342cdcf3e32b92cc64132d1c257e7e271e833f4a21157a_prof);

        
        $__internal_d18918454d0c23ceb190726c717a02f19bd437c129f0cff715bc57a76fc205f0->leave($__internal_d18918454d0c23ceb190726c717a02f19bd437c129f0cff715bc57a76fc205f0_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d351457b8f6ae59d7fa389a50cb4655a1a087c5bc12b26f1d7423c832f1c71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d351457b8f6ae59d7fa389a50cb4655a1a087c5bc12b26f1d7423c832f1c71f->enter($__internal_4d351457b8f6ae59d7fa389a50cb4655a1a087c5bc12b26f1d7423c832f1c71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bcd8214761d941918ca9ec7f409e5ef5255c61ccd6a51d67bdad3995ed00d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcd8214761d941918ca9ec7f409e5ef5255c61ccd6a51d67bdad3995ed00d78->enter($__internal_6bcd8214761d941918ca9ec7f409e5ef5255c61ccd6a51d67bdad3995ed00d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-verificateur').DataTable(
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
                    \"sEmptyTable\": \"Aucun vérificateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6bcd8214761d941918ca9ec7f409e5ef5255c61ccd6a51d67bdad3995ed00d78->leave($__internal_6bcd8214761d941918ca9ec7f409e5ef5255c61ccd6a51d67bdad3995ed00d78_prof);

        
        $__internal_4d351457b8f6ae59d7fa389a50cb4655a1a087c5bc12b26f1d7423c832f1c71f->leave($__internal_4d351457b8f6ae59d7fa389a50cb4655a1a087c5bc12b26f1d7423c832f1c71f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Verificateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 107,  260 => 106,  239 => 93,  234 => 89,  222 => 83,  215 => 79,  210 => 76,  206 => 74,  202 => 72,  200 => 71,  195 => 69,  192 => 68,  187 => 66,  182 => 65,  180 => 64,  175 => 62,  171 => 61,  167 => 60,  162 => 58,  158 => 56,  154 => 55,  135 => 39,  124 => 31,  121 => 30,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des utilisateurs {% endblock %}

{% set menu_verificateur    = true %}
{% set menu_verificateur_list = true %}

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
                    <a href=\"{{ path('verificateur_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un vérificateur
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('verificateur_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-verificateur\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th>Date inscription</th>
                                     <th>Présence</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ user.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ user.usrName }}</td>
                                        <td>{{ user.usrProfession }}</td>
                                        <td>{{ user.usrEmail }}</td>
                                        <td>
                                            {% if(user.ctCentre is not null) %}
                                                {{ user.ctCentre.ctrNom }}
                                                ({{ user.ctCentre.ctProvince.prvNom }})
                                            {% endif %}
                                        </td>
                                        <td>{{ user.usrCreatedAt|date('d/m/Y H:i') }}</td>
                                        <td class=\"kl-oui-non\">
                                            {% if(user.usrPresence == 1) %}
                                                Oui
                                            {% else %}
                                                Non
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('verificateur_edit', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('verificateur_delete', { 'id': user.id }) }}\">
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
            \$('#list-verificateur').DataTable(
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
                    \"sEmptyTable\": \"Aucun vérificateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@User/Verificateur/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Verificateur\\index.html.twig");
    }
}
