<?php

/* @Admin/CtVisite/search.html.twig */
class __TwigTemplate_09a8edc5e62404c089caad9a5f679c79225d1dee8c9d0843e5c4f96c578e1122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisite/search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_e50f68fffb0d5ca25707365f6ba6ae8e3cf0bbba6adbf32dc4790c0ffca795c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50f68fffb0d5ca25707365f6ba6ae8e3cf0bbba6adbf32dc4790c0ffca795c0->enter($__internal_e50f68fffb0d5ca25707365f6ba6ae8e3cf0bbba6adbf32dc4790c0ffca795c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        $__internal_b44fee25134038246bbcd0966e3056e73aeda0581cedfa8b6770c98b6d7d9104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44fee25134038246bbcd0966e3056e73aeda0581cedfa8b6770c98b6d7d9104->enter($__internal_b44fee25134038246bbcd0966e3056e73aeda0581cedfa8b6770c98b6d7d9104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisite/search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e50f68fffb0d5ca25707365f6ba6ae8e3cf0bbba6adbf32dc4790c0ffca795c0->leave($__internal_e50f68fffb0d5ca25707365f6ba6ae8e3cf0bbba6adbf32dc4790c0ffca795c0_prof);

        
        $__internal_b44fee25134038246bbcd0966e3056e73aeda0581cedfa8b6770c98b6d7d9104->leave($__internal_b44fee25134038246bbcd0966e3056e73aeda0581cedfa8b6770c98b6d7d9104_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a018e7dfa689ac037617eb9e4e72b354f7c3f1a6a6312c271d2c6250227df0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a018e7dfa689ac037617eb9e4e72b354f7c3f1a6a6312c271d2c6250227df0a->enter($__internal_6a018e7dfa689ac037617eb9e4e72b354f7c3f1a6a6312c271d2c6250227df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3789911f88490aa1247dafc4121dd923b067a2579bd0f585eac0a8b0e758e10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3789911f88490aa1247dafc4121dd923b067a2579bd0f585eac0a8b0e758e10b->enter($__internal_3789911f88490aa1247dafc4121dd923b067a2579bd0f585eac0a8b0e758e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_3789911f88490aa1247dafc4121dd923b067a2579bd0f585eac0a8b0e758e10b->leave($__internal_3789911f88490aa1247dafc4121dd923b067a2579bd0f585eac0a8b0e758e10b_prof);

        
        $__internal_6a018e7dfa689ac037617eb9e4e72b354f7c3f1a6a6312c271d2c6250227df0a->leave($__internal_6a018e7dfa689ac037617eb9e4e72b354f7c3f1a6a6312c271d2c6250227df0a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b091ffb39b1b76475589873afd501433a7b2b597efdc3f23eb3a14df287b4b67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b091ffb39b1b76475589873afd501433a7b2b597efdc3f23eb3a14df287b4b67->enter($__internal_b091ffb39b1b76475589873afd501433a7b2b597efdc3f23eb3a14df287b4b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e5a6e21b8f58e88708f0d09c3d38583eceb79dfa7396ccdf5f14d996edfb0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5a6e21b8f58e88708f0d09c3d38583eceb79dfa7396ccdf5f14d996edfb0b5->enter($__internal_1e5a6e21b8f58e88708f0d09c3d38583eceb79dfa7396ccdf5f14d996edfb0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_1e5a6e21b8f58e88708f0d09c3d38583eceb79dfa7396ccdf5f14d996edfb0b5->leave($__internal_1e5a6e21b8f58e88708f0d09c3d38583eceb79dfa7396ccdf5f14d996edfb0b5_prof);

        
        $__internal_b091ffb39b1b76475589873afd501433a7b2b597efdc3f23eb3a14df287b4b67->leave($__internal_b091ffb39b1b76475589873afd501433a7b2b597efdc3f23eb3a14df287b4b67_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_524a6c913c26b28136c0a78b970e1ce15c0c3c6f4bf8012dc6af27824ef6f025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524a6c913c26b28136c0a78b970e1ce15c0c3c6f4bf8012dc6af27824ef6f025->enter($__internal_524a6c913c26b28136c0a78b970e1ce15c0c3c6f4bf8012dc6af27824ef6f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d82943ed1fbe03bb43e2283e2e3ff1989853d691bb9072f62f06888b80a7d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d82943ed1fbe03bb43e2283e2e3ff1989853d691bb9072f62f06888b80a7d5d->enter($__internal_7d82943ed1fbe03bb43e2283e2e3ff1989853d691bb9072f62f06888b80a7d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        // line 17
        echo "    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7d82943ed1fbe03bb43e2283e2e3ff1989853d691bb9072f62f06888b80a7d5d->leave($__internal_7d82943ed1fbe03bb43e2283e2e3ff1989853d691bb9072f62f06888b80a7d5d_prof);

        
        $__internal_524a6c913c26b28136c0a78b970e1ce15c0c3c6f4bf8012dc6af27824ef6f025->leave($__internal_524a6c913c26b28136c0a78b970e1ce15c0c3c6f4bf8012dc6af27824ef6f025_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47cb72180f967e7849ba48d03f87de5fbdbfbd4857b56e4b6e6965450c296bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cb72180f967e7849ba48d03f87de5fbdbfbd4857b56e4b6e6965450c296bbf->enter($__internal_47cb72180f967e7849ba48d03f87de5fbdbfbd4857b56e4b6e6965450c296bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_40bd38e18418813f113d8c30a64b9eb122f50fe952864d178238b5e26fdf5090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bd38e18418813f113d8c30a64b9eb122f50fe952864d178238b5e26fdf5090->enter($__internal_40bd38e18418813f113d8c30a64b9eb122f50fe952864d178238b5e26fdf5090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _visite_search_ajax_uri = \"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_search");
        echo "\";
    </script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_40bd38e18418813f113d8c30a64b9eb122f50fe952864d178238b5e26fdf5090->leave($__internal_40bd38e18418813f113d8c30a64b9eb122f50fe952864d178238b5e26fdf5090_prof);

        
        $__internal_47cb72180f967e7849ba48d03f87de5fbdbfbd4857b56e4b6e6965450c296bbf->leave($__internal_47cb72180f967e7849ba48d03f87de5fbdbfbd4857b56e4b6e6965450c296bbf_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisite/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  177 => 56,  173 => 55,  169 => 54,  165 => 53,  160 => 51,  152 => 47,  143 => 46,  106 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Recherche Visite technique {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_visite        = true %}
{% set menu_visite_search = true %}

{% block body %}
    {# Formulaire recherche #}
    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _fill_form_carte_grise_ajax_uri = \"{{ path('carte_grise_fill_info_by_immatriculation_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _visite_search_ajax_uri = \"{{ path('visite_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.visite.js') }}\"></script>
{% endblock %}", "@Admin/CtVisite/search.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisite\\search.html.twig");
    }
}
