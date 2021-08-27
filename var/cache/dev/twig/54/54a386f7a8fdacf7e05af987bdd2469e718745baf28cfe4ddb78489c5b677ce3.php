<?php

/* @User/User/index.html.twig */
class __TwigTemplate_534545338a916d91e15eb5c15cf298f3e62b8b584ad6d612ee30505a4da953d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/User/index.html.twig", 1);
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
        $__internal_162116bdadcea872bdd7a7669d1ba13f330b4d5446c3ccac428b78891418f252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162116bdadcea872bdd7a7669d1ba13f330b4d5446c3ccac428b78891418f252->enter($__internal_162116bdadcea872bdd7a7669d1ba13f330b4d5446c3ccac428b78891418f252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/index.html.twig"));

        $__internal_74557ff21731f0c8f16827e24ff9e0ab0f05162be729cb82d7d7309d6427f155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74557ff21731f0c8f16827e24ff9e0ab0f05162be729cb82d7d7309d6427f155->enter($__internal_74557ff21731f0c8f16827e24ff9e0ab0f05162be729cb82d7d7309d6427f155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/index.html.twig"));

        // line 5
        $context["menu_user"] = true;
        // line 6
        $context["menu_user_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_162116bdadcea872bdd7a7669d1ba13f330b4d5446c3ccac428b78891418f252->leave($__internal_162116bdadcea872bdd7a7669d1ba13f330b4d5446c3ccac428b78891418f252_prof);

        
        $__internal_74557ff21731f0c8f16827e24ff9e0ab0f05162be729cb82d7d7309d6427f155->leave($__internal_74557ff21731f0c8f16827e24ff9e0ab0f05162be729cb82d7d7309d6427f155_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_755c577461a325b2d4d3e4df59c1e4feb8feba13a5ebb07d18f8d1faa96f1fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755c577461a325b2d4d3e4df59c1e4feb8feba13a5ebb07d18f8d1faa96f1fe1->enter($__internal_755c577461a325b2d4d3e4df59c1e4feb8feba13a5ebb07d18f8d1faa96f1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dfd7a8c8e0dc004dbb3a66687d4c919e6b1619097c11994c717152545420ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfd7a8c8e0dc004dbb3a66687d4c919e6b1619097c11994c717152545420ef7->enter($__internal_0dfd7a8c8e0dc004dbb3a66687d4c919e6b1619097c11994c717152545420ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisateurs ";
        
        $__internal_0dfd7a8c8e0dc004dbb3a66687d4c919e6b1619097c11994c717152545420ef7->leave($__internal_0dfd7a8c8e0dc004dbb3a66687d4c919e6b1619097c11994c717152545420ef7_prof);

        
        $__internal_755c577461a325b2d4d3e4df59c1e4feb8feba13a5ebb07d18f8d1faa96f1fe1->leave($__internal_755c577461a325b2d4d3e4df59c1e4feb8feba13a5ebb07d18f8d1faa96f1fe1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba38df0413db12562fee6f9b91e5e05302d96f8732e3792043a6926027d57a34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba38df0413db12562fee6f9b91e5e05302d96f8732e3792043a6926027d57a34->enter($__internal_ba38df0413db12562fee6f9b91e5e05302d96f8732e3792043a6926027d57a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_490720bd04e3cf3de843cffc52f26d49812a63975bff5be3be0a096620fab328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490720bd04e3cf3de843cffc52f26d49812a63975bff5be3be0a096620fab328->enter($__internal_490720bd04e3cf3de843cffc52f26d49812a63975bff5be3be0a096620fab328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un utilisateur
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive kl-box-liste\">
                        <table id=\"list-user\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th class=\"kl-checkbox-col\"></th>
                                     <th class=\"kl-nom-col\">Nom</th>
                                     <th class=\"kl-prof-col\">Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th class=\"kl-role-col\">Rôle</th>
                                     <th>Date inscription</th>
                                     <th class=\"kl-action-col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 62
            echo "                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrName", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "usrProfession", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 70
            if ( !(null === $this->getAttribute($context["user"], "ctCentre", array()))) {
                // line 71
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                                (";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["user"], "ctCentre", array()), "ctProvince", array()), "prvNom", array()), "html", null, true);
                echo ")
                                            ";
            }
            // line 74
            echo "                                        </td>
                                        <td>
                                            ";
            // line 76
            if (($this->getAttribute($this->getAttribute($context["user"], "ctRole", array()), "roleName", array()) == "Admin")) {
                // line 77
                echo "                                                Chef de centre
                                            ";
            } else {
                // line 79
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "ctRole", array()), "roleName", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 81
            echo "                                        </td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "usrCreatedAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        <td class=\"kl-action-button-bloc\">
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_delete", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
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
        // line 95
        echo "                            </tbody>
                        </table>

                        ";
        // line 99
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
        
        $__internal_490720bd04e3cf3de843cffc52f26d49812a63975bff5be3be0a096620fab328->leave($__internal_490720bd04e3cf3de843cffc52f26d49812a63975bff5be3be0a096620fab328_prof);

        
        $__internal_ba38df0413db12562fee6f9b91e5e05302d96f8732e3792043a6926027d57a34->leave($__internal_ba38df0413db12562fee6f9b91e5e05302d96f8732e3792043a6926027d57a34_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_762c5884566b09b9d8f857a475348cbda7a6834cb5f0c64444bc9f51e0f20c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762c5884566b09b9d8f857a475348cbda7a6834cb5f0c64444bc9f51e0f20c5b->enter($__internal_762c5884566b09b9d8f857a475348cbda7a6834cb5f0c64444bc9f51e0f20c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce64c05c74418a45303c3c94d47b173415816a9df3dbd37306c70dd0b236a772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce64c05c74418a45303c3c94d47b173415816a9df3dbd37306c70dd0b236a772->enter($__internal_ce64c05c74418a45303c3c94d47b173415816a9df3dbd37306c70dd0b236a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-user').DataTable(
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
                    \"sEmptyTable\": \"Aucun utilisateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_ce64c05c74418a45303c3c94d47b173415816a9df3dbd37306c70dd0b236a772->leave($__internal_ce64c05c74418a45303c3c94d47b173415816a9df3dbd37306c70dd0b236a772_prof);

        
        $__internal_762c5884566b09b9d8f857a475348cbda7a6834cb5f0c64444bc9f51e0f20c5b->leave($__internal_762c5884566b09b9d8f857a475348cbda7a6834cb5f0c64444bc9f51e0f20c5b_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 113,  283 => 112,  262 => 99,  257 => 95,  245 => 89,  238 => 85,  232 => 82,  229 => 81,  223 => 79,  219 => 77,  217 => 76,  213 => 74,  208 => 72,  203 => 71,  201 => 70,  196 => 68,  192 => 67,  188 => 66,  183 => 64,  179 => 62,  175 => 61,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% set menu_user      = true %}
{% set menu_user_list = true %}

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
                    <a href=\"{{ path('user_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un utilisateur
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('user_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive kl-box-liste\">
                        <table id=\"list-user\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th class=\"kl-checkbox-col\"></th>
                                     <th class=\"kl-nom-col\">Nom</th>
                                     <th class=\"kl-prof-col\">Profession</th>
                                     <th>Email</th>
                                     <th>Centre</th>
                                     <th class=\"kl-role-col\">Rôle</th>
                                     <th>Date inscription</th>
                                     <th class=\"kl-action-col\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td class=\"text-center\">
                                            <input type=\"checkbox\" value=\"{{ user.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ user.usrName }}</td>
                                        <td>{{ user.usrProfession }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>
                                            {% if (user.ctCentre is not null) %}
                                                {{ user.ctCentre.ctrNom }}
                                                ({{ user.ctCentre.ctProvince.prvNom }})
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if (user.ctRole.roleName == 'Admin') %}
                                                Chef de centre
                                            {% else %}
                                                {{ user.ctRole.roleName }}
                                            {% endif %}
                                        </td>
                                        <td>{{ user.usrCreatedAt|date('d/m/Y H:i') }}</td>
                                        <td class=\"kl-action-button-bloc\">
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('user_edit', { 'id': user.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('user_delete', { 'id': user.id }) }}\">
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
            \$('#list-user').DataTable(
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
                    \"sEmptyTable\": \"Aucun utilisateur trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@User/User/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\User\\index.html.twig");
    }
}
