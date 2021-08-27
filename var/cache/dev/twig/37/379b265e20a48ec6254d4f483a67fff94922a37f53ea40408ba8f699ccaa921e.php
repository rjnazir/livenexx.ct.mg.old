<?php

/* @Admin/CtProvince/index.html.twig */
class __TwigTemplate_deada3c6cb0eaf7993eee2a01baa2f77eace8b5e6aeb14860522e3111e1237d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/index.html.twig", 1);
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
        $__internal_b972fc33b30f287892efbeccb82eab33341ff547ba5c29c9e61df462c6ea0154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b972fc33b30f287892efbeccb82eab33341ff547ba5c29c9e61df462c6ea0154->enter($__internal_b972fc33b30f287892efbeccb82eab33341ff547ba5c29c9e61df462c6ea0154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        $__internal_f76b7185b95bdcd9639a2945d2586604c38bef3da36ab6ee7e612636c0c4589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76b7185b95bdcd9639a2945d2586604c38bef3da36ab6ee7e612636c0c4589a->enter($__internal_f76b7185b95bdcd9639a2945d2586604c38bef3da36ab6ee7e612636c0c4589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/index.html.twig"));

        // line 5
        $context["menu_province"] = true;
        // line 6
        $context["menu_province_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b972fc33b30f287892efbeccb82eab33341ff547ba5c29c9e61df462c6ea0154->leave($__internal_b972fc33b30f287892efbeccb82eab33341ff547ba5c29c9e61df462c6ea0154_prof);

        
        $__internal_f76b7185b95bdcd9639a2945d2586604c38bef3da36ab6ee7e612636c0c4589a->leave($__internal_f76b7185b95bdcd9639a2945d2586604c38bef3da36ab6ee7e612636c0c4589a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be2e04f0a81291cf0eb0a7217ec2a34f529b17c874f62a7a4050227af85e2f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2e04f0a81291cf0eb0a7217ec2a34f529b17c874f62a7a4050227af85e2f36->enter($__internal_be2e04f0a81291cf0eb0a7217ec2a34f529b17c874f62a7a4050227af85e2f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72f9dd5ee0466bad0ef7d1adbc43356cbd92ded7f645d2bf3b7b228e47d35afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f9dd5ee0466bad0ef7d1adbc43356cbd92ded7f645d2bf3b7b228e47d35afd->enter($__internal_72f9dd5ee0466bad0ef7d1adbc43356cbd92ded7f645d2bf3b7b228e47d35afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des provinces ";
        
        $__internal_72f9dd5ee0466bad0ef7d1adbc43356cbd92ded7f645d2bf3b7b228e47d35afd->leave($__internal_72f9dd5ee0466bad0ef7d1adbc43356cbd92ded7f645d2bf3b7b228e47d35afd_prof);

        
        $__internal_be2e04f0a81291cf0eb0a7217ec2a34f529b17c874f62a7a4050227af85e2f36->leave($__internal_be2e04f0a81291cf0eb0a7217ec2a34f529b17c874f62a7a4050227af85e2f36_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_60206802113adc5e597c8bf79252eeee0321d691cd99626b9793fdbae8bc9594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60206802113adc5e597c8bf79252eeee0321d691cd99626b9793fdbae8bc9594->enter($__internal_60206802113adc5e597c8bf79252eeee0321d691cd99626b9793fdbae8bc9594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76b838bd92f2457addbae6a231760663d6f1af674553fb76697a259e8f17f78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b838bd92f2457addbae6a231760663d6f1af674553fb76697a259e8f17f78c->enter($__internal_76b838bd92f2457addbae6a231760663d6f1af674553fb76697a259e8f17f78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_edit", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
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
        
        $__internal_76b838bd92f2457addbae6a231760663d6f1af674553fb76697a259e8f17f78c->leave($__internal_76b838bd92f2457addbae6a231760663d6f1af674553fb76697a259e8f17f78c_prof);

        
        $__internal_60206802113adc5e597c8bf79252eeee0321d691cd99626b9793fdbae8bc9594->leave($__internal_60206802113adc5e597c8bf79252eeee0321d691cd99626b9793fdbae8bc9594_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d72c76abd1ca3f4a2b6b3071b2afe11dadc80a4698b35ac793a433a15b810a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72c76abd1ca3f4a2b6b3071b2afe11dadc80a4698b35ac793a433a15b810a7c->enter($__internal_d72c76abd1ca3f4a2b6b3071b2afe11dadc80a4698b35ac793a433a15b810a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a701b3169af9307e2b3f13044f548c83b913c800f96b0632cf9957b4c6b3e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a701b3169af9307e2b3f13044f548c83b913c800f96b0632cf9957b4c6b3e89d->enter($__internal_a701b3169af9307e2b3f13044f548c83b913c800f96b0632cf9957b4c6b3e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_a701b3169af9307e2b3f13044f548c83b913c800f96b0632cf9957b4c6b3e89d->leave($__internal_a701b3169af9307e2b3f13044f548c83b913c800f96b0632cf9957b4c6b3e89d_prof);

        
        $__internal_d72c76abd1ca3f4a2b6b3071b2afe11dadc80a4698b35ac793a433a15b810a7c->leave($__internal_d72c76abd1ca3f4a2b6b3071b2afe11dadc80a4698b35ac793a433a15b810a7c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/index.html.twig";
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

{% block title %}{{ parent() }} Liste des provinces {% endblock %}

{% set menu_province      = true %}
{% set menu_province_list = true %}

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
                    <a href=\"{{ path('province_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('province_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for province in provinces %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ province.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ province.prvNom }}</td>
                                        <td>{{ province.prvCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('province_edit', { 'id': province.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('province_delete', { 'id': province.id }) }}\">
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
            \$('#list-province').DataTable(
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
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtProvince/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\index.html.twig");
    }
}
