<?php

/* AdminBundle:CtVisite:search.html.twig */
class __TwigTemplate_4e71fd038bbc6f377e7731e1de177717b7329d0bbb777638e8a70c4dcf29e7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisite:search.html.twig", 1);
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
        $__internal_b61b9ae05024b5102ba5f0b01e3c599c5402c29c5131ce190b4a8635ffdca756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61b9ae05024b5102ba5f0b01e3c599c5402c29c5131ce190b4a8635ffdca756->enter($__internal_b61b9ae05024b5102ba5f0b01e3c599c5402c29c5131ce190b4a8635ffdca756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        $__internal_811e44a76435de4fc810da8e3e2faacdb6d2787e01af31235e5ee4b906d7e311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811e44a76435de4fc810da8e3e2faacdb6d2787e01af31235e5ee4b906d7e311->enter($__internal_811e44a76435de4fc810da8e3e2faacdb6d2787e01af31235e5ee4b906d7e311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:search.html.twig"));

        // line 12
        $context["menu_visite"] = true;
        // line 13
        $context["menu_visite_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61b9ae05024b5102ba5f0b01e3c599c5402c29c5131ce190b4a8635ffdca756->leave($__internal_b61b9ae05024b5102ba5f0b01e3c599c5402c29c5131ce190b4a8635ffdca756_prof);

        
        $__internal_811e44a76435de4fc810da8e3e2faacdb6d2787e01af31235e5ee4b906d7e311->leave($__internal_811e44a76435de4fc810da8e3e2faacdb6d2787e01af31235e5ee4b906d7e311_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce1ee49a8e2bdfe6d1d8992c1690cd8ddac9ba3235b0a14ba19ca14ed88b5734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1ee49a8e2bdfe6d1d8992c1690cd8ddac9ba3235b0a14ba19ca14ed88b5734->enter($__internal_ce1ee49a8e2bdfe6d1d8992c1690cd8ddac9ba3235b0a14ba19ca14ed88b5734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3dfe48c50d369e5aed84c368076ad395e36402cb9d4374f0dcd1bde1af973cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfe48c50d369e5aed84c368076ad395e36402cb9d4374f0dcd1bde1af973cba->enter($__internal_3dfe48c50d369e5aed84c368076ad395e36402cb9d4374f0dcd1bde1af973cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Visite technique ";
        
        $__internal_3dfe48c50d369e5aed84c368076ad395e36402cb9d4374f0dcd1bde1af973cba->leave($__internal_3dfe48c50d369e5aed84c368076ad395e36402cb9d4374f0dcd1bde1af973cba_prof);

        
        $__internal_ce1ee49a8e2bdfe6d1d8992c1690cd8ddac9ba3235b0a14ba19ca14ed88b5734->leave($__internal_ce1ee49a8e2bdfe6d1d8992c1690cd8ddac9ba3235b0a14ba19ca14ed88b5734_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10c70aee8e6a652a20ac0480f0ef8cbcc2761c06290c4f8a05f6121c7c934d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c70aee8e6a652a20ac0480f0ef8cbcc2761c06290c4f8a05f6121c7c934d93->enter($__internal_10c70aee8e6a652a20ac0480f0ef8cbcc2761c06290c4f8a05f6121c7c934d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2fa0d782eb7b83d8d9acfec658f693effddd2a145f86f67aa48e8289e960f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fa0d782eb7b83d8d9acfec658f693effddd2a145f86f67aa48e8289e960f1c->enter($__internal_f2fa0d782eb7b83d8d9acfec658f693effddd2a145f86f67aa48e8289e960f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f2fa0d782eb7b83d8d9acfec658f693effddd2a145f86f67aa48e8289e960f1c->leave($__internal_f2fa0d782eb7b83d8d9acfec658f693effddd2a145f86f67aa48e8289e960f1c_prof);

        
        $__internal_10c70aee8e6a652a20ac0480f0ef8cbcc2761c06290c4f8a05f6121c7c934d93->leave($__internal_10c70aee8e6a652a20ac0480f0ef8cbcc2761c06290c4f8a05f6121c7c934d93_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d38172f4b891ced732453e0a5d1968c3f26035f6fccda2e76c69ac131d84e593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38172f4b891ced732453e0a5d1968c3f26035f6fccda2e76c69ac131d84e593->enter($__internal_d38172f4b891ced732453e0a5d1968c3f26035f6fccda2e76c69ac131d84e593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ce572736da82b8082d15085c8dd1985f0e6a3d5160c8ca95a1861fa53ed77b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce572736da82b8082d15085c8dd1985f0e6a3d5160c8ca95a1861fa53ed77b7->enter($__internal_3ce572736da82b8082d15085c8dd1985f0e6a3d5160c8ca95a1861fa53ed77b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ce572736da82b8082d15085c8dd1985f0e6a3d5160c8ca95a1861fa53ed77b7->leave($__internal_3ce572736da82b8082d15085c8dd1985f0e6a3d5160c8ca95a1861fa53ed77b7_prof);

        
        $__internal_d38172f4b891ced732453e0a5d1968c3f26035f6fccda2e76c69ac131d84e593->leave($__internal_d38172f4b891ced732453e0a5d1968c3f26035f6fccda2e76c69ac131d84e593_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9a4caa374b5a113550a0817ed4ba037cdfda08243513dbe0b4126fc71243e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a4caa374b5a113550a0817ed4ba037cdfda08243513dbe0b4126fc71243e18->enter($__internal_e9a4caa374b5a113550a0817ed4ba037cdfda08243513dbe0b4126fc71243e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a93f82a545cb7585b2842f9cf2a948c78d0abe1344f8c80609b8ad5eb877850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a93f82a545cb7585b2842f9cf2a948c78d0abe1344f8c80609b8ad5eb877850->enter($__internal_3a93f82a545cb7585b2842f9cf2a948c78d0abe1344f8c80609b8ad5eb877850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3a93f82a545cb7585b2842f9cf2a948c78d0abe1344f8c80609b8ad5eb877850->leave($__internal_3a93f82a545cb7585b2842f9cf2a948c78d0abe1344f8c80609b8ad5eb877850_prof);

        
        $__internal_e9a4caa374b5a113550a0817ed4ba037cdfda08243513dbe0b4126fc71243e18->leave($__internal_e9a4caa374b5a113550a0817ed4ba037cdfda08243513dbe0b4126fc71243e18_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisite:search.html.twig";
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
{% endblock %}", "AdminBundle:CtVisite:search.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisite/search.html.twig");
    }
}
