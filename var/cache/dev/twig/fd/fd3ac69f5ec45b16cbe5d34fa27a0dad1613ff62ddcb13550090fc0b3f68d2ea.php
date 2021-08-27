<?php

/* AdminBundle:CtReception:search.html.twig */
class __TwigTemplate_e76987f4ee03fc44feb4b695ac0c86459f3002abd3477d6c17a32be846b1dff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:search.html.twig", 1);
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
        $__internal_151f5838ba7c803ce4e3571424b7a60c5c7ce75572e382343b61d83c3f495e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151f5838ba7c803ce4e3571424b7a60c5c7ce75572e382343b61d83c3f495e06->enter($__internal_151f5838ba7c803ce4e3571424b7a60c5c7ce75572e382343b61d83c3f495e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        $__internal_40db70d4aeaa830a47fdf5c37ec8c62a5faa326e8efe0617e3dc2b83e56808c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40db70d4aeaa830a47fdf5c37ec8c62a5faa326e8efe0617e3dc2b83e56808c7->enter($__internal_40db70d4aeaa830a47fdf5c37ec8c62a5faa326e8efe0617e3dc2b83e56808c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_151f5838ba7c803ce4e3571424b7a60c5c7ce75572e382343b61d83c3f495e06->leave($__internal_151f5838ba7c803ce4e3571424b7a60c5c7ce75572e382343b61d83c3f495e06_prof);

        
        $__internal_40db70d4aeaa830a47fdf5c37ec8c62a5faa326e8efe0617e3dc2b83e56808c7->leave($__internal_40db70d4aeaa830a47fdf5c37ec8c62a5faa326e8efe0617e3dc2b83e56808c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e2ab4468d5bf6dc84175576648a77c86275c8de2993c457d36869ebc4466c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2ab4468d5bf6dc84175576648a77c86275c8de2993c457d36869ebc4466c51->enter($__internal_6e2ab4468d5bf6dc84175576648a77c86275c8de2993c457d36869ebc4466c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9620082ad25f6cf0cd37d955272b6545c84186f0ae0cdd4d2c9ccedc22960e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9620082ad25f6cf0cd37d955272b6545c84186f0ae0cdd4d2c9ccedc22960e2e->enter($__internal_9620082ad25f6cf0cd37d955272b6545c84186f0ae0cdd4d2c9ccedc22960e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_9620082ad25f6cf0cd37d955272b6545c84186f0ae0cdd4d2c9ccedc22960e2e->leave($__internal_9620082ad25f6cf0cd37d955272b6545c84186f0ae0cdd4d2c9ccedc22960e2e_prof);

        
        $__internal_6e2ab4468d5bf6dc84175576648a77c86275c8de2993c457d36869ebc4466c51->leave($__internal_6e2ab4468d5bf6dc84175576648a77c86275c8de2993c457d36869ebc4466c51_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca5838d5441d8934b36716ed18976db5a01a1e199dbdb5bd22c81967f26a4df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5838d5441d8934b36716ed18976db5a01a1e199dbdb5bd22c81967f26a4df4->enter($__internal_ca5838d5441d8934b36716ed18976db5a01a1e199dbdb5bd22c81967f26a4df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_018e5d28a0cd7906b13f3c54d38fdb64b3aff29b61caa313413786538c60c004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018e5d28a0cd7906b13f3c54d38fdb64b3aff29b61caa313413786538c60c004->enter($__internal_018e5d28a0cd7906b13f3c54d38fdb64b3aff29b61caa313413786538c60c004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_018e5d28a0cd7906b13f3c54d38fdb64b3aff29b61caa313413786538c60c004->leave($__internal_018e5d28a0cd7906b13f3c54d38fdb64b3aff29b61caa313413786538c60c004_prof);

        
        $__internal_ca5838d5441d8934b36716ed18976db5a01a1e199dbdb5bd22c81967f26a4df4->leave($__internal_ca5838d5441d8934b36716ed18976db5a01a1e199dbdb5bd22c81967f26a4df4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7486fd1ae3e6f8f1600bfd882d8566269dbabdcba27225965ab345b23c6b3f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7486fd1ae3e6f8f1600bfd882d8566269dbabdcba27225965ab345b23c6b3f64->enter($__internal_7486fd1ae3e6f8f1600bfd882d8566269dbabdcba27225965ab345b23c6b3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_538501f765bb9ab75e0098998f640e65dcce2ebb608d807741147d10fe71ea35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538501f765bb9ab75e0098998f640e65dcce2ebb608d807741147d10fe71ea35->enter($__internal_538501f765bb9ab75e0098998f640e65dcce2ebb608d807741147d10fe71ea35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_538501f765bb9ab75e0098998f640e65dcce2ebb608d807741147d10fe71ea35->leave($__internal_538501f765bb9ab75e0098998f640e65dcce2ebb608d807741147d10fe71ea35_prof);

        
        $__internal_7486fd1ae3e6f8f1600bfd882d8566269dbabdcba27225965ab345b23c6b3f64->leave($__internal_7486fd1ae3e6f8f1600bfd882d8566269dbabdcba27225965ab345b23c6b3f64_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0232109d1c2bc94390df689fb634bacbf254f2726b2165d14e47c9b44bfcbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0232109d1c2bc94390df689fb634bacbf254f2726b2165d14e47c9b44bfcbe0->enter($__internal_d0232109d1c2bc94390df689fb634bacbf254f2726b2165d14e47c9b44bfcbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_66ae18edcc7616aa00925f6287159eebe83a9e06bf79b5fdd52a282419a8eeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ae18edcc7616aa00925f6287159eebe83a9e06bf79b5fdd52a282419a8eeae->enter($__internal_66ae18edcc7616aa00925f6287159eebe83a9e06bf79b5fdd52a282419a8eeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _get_reception_ajax_uri = \"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_get_info_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_show_numero_immatriculation_ajax");
        echo "\";
        var _reception_search_ajax_uri = \"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_search");
        echo "\";
    </script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_66ae18edcc7616aa00925f6287159eebe83a9e06bf79b5fdd52a282419a8eeae->leave($__internal_66ae18edcc7616aa00925f6287159eebe83a9e06bf79b5fdd52a282419a8eeae_prof);

        
        $__internal_d0232109d1c2bc94390df689fb634bacbf254f2726b2165d14e47c9b44bfcbe0->leave($__internal_d0232109d1c2bc94390df689fb634bacbf254f2726b2165d14e47c9b44bfcbe0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  176 => 55,  172 => 54,  168 => 53,  164 => 52,  159 => 50,  152 => 47,  143 => 46,  106 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Recherche Réception {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_reception        = true %}
{% set menu_reception_search = true %}

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

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _get_reception_ajax_uri = \"{{ path('reception_get_info_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('reception_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('reception_show_numero_immatriculation_ajax') }}\";
        var _reception_search_ajax_uri = \"{{ path('reception_search') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/search.reception.js') }}\"></script>
{% endblock %}", "AdminBundle:CtReception:search.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/search.html.twig");
    }
}
