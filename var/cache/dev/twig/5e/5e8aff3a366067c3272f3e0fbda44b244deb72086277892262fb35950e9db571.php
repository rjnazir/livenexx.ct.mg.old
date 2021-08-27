<?php

/* @Admin/CtReception/search.html.twig */
class __TwigTemplate_7c21741d7fa88a320295e4f9fa3f7dcc9cc947b996f8ba3ef6f5ffbe1318d35c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/search.html.twig", 1);
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
        $__internal_97e965ea7a5cb10d3edba3e2632242d55a0a9dabba846925bd258dd6f28feac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e965ea7a5cb10d3edba3e2632242d55a0a9dabba846925bd258dd6f28feac4->enter($__internal_97e965ea7a5cb10d3edba3e2632242d55a0a9dabba846925bd258dd6f28feac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        $__internal_b5695147c94034f35b426c801216c44913289f35ebc96b25441a4b0112d4237a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5695147c94034f35b426c801216c44913289f35ebc96b25441a4b0112d4237a->enter($__internal_b5695147c94034f35b426c801216c44913289f35ebc96b25441a4b0112d4237a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/search.html.twig"));

        // line 12
        $context["menu_reception"] = true;
        // line 13
        $context["menu_reception_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e965ea7a5cb10d3edba3e2632242d55a0a9dabba846925bd258dd6f28feac4->leave($__internal_97e965ea7a5cb10d3edba3e2632242d55a0a9dabba846925bd258dd6f28feac4_prof);

        
        $__internal_b5695147c94034f35b426c801216c44913289f35ebc96b25441a4b0112d4237a->leave($__internal_b5695147c94034f35b426c801216c44913289f35ebc96b25441a4b0112d4237a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a95e20163da762a667c1fef4c43beb586cde609ab7e38587897068e9edd0aae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95e20163da762a667c1fef4c43beb586cde609ab7e38587897068e9edd0aae3->enter($__internal_a95e20163da762a667c1fef4c43beb586cde609ab7e38587897068e9edd0aae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ec159bcc9e54ef33b678614d07df63d3f8b599e6b35b28b745eeb49a98475e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec159bcc9e54ef33b678614d07df63d3f8b599e6b35b28b745eeb49a98475e4->enter($__internal_2ec159bcc9e54ef33b678614d07df63d3f8b599e6b35b28b745eeb49a98475e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche Réception ";
        
        $__internal_2ec159bcc9e54ef33b678614d07df63d3f8b599e6b35b28b745eeb49a98475e4->leave($__internal_2ec159bcc9e54ef33b678614d07df63d3f8b599e6b35b28b745eeb49a98475e4_prof);

        
        $__internal_a95e20163da762a667c1fef4c43beb586cde609ab7e38587897068e9edd0aae3->leave($__internal_a95e20163da762a667c1fef4c43beb586cde609ab7e38587897068e9edd0aae3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5db50b5998ac79939f88f5cc09d3f37cad22476f5bb46c03f0fb3f7934ea6e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db50b5998ac79939f88f5cc09d3f37cad22476f5bb46c03f0fb3f7934ea6e7c->enter($__internal_5db50b5998ac79939f88f5cc09d3f37cad22476f5bb46c03f0fb3f7934ea6e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dd84c33e5236ded5997e2a21916278da25b84d306d19e714d7f6864ccaf8c0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd84c33e5236ded5997e2a21916278da25b84d306d19e714d7f6864ccaf8c0f2->enter($__internal_dd84c33e5236ded5997e2a21916278da25b84d306d19e714d7f6864ccaf8c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_dd84c33e5236ded5997e2a21916278da25b84d306d19e714d7f6864ccaf8c0f2->leave($__internal_dd84c33e5236ded5997e2a21916278da25b84d306d19e714d7f6864ccaf8c0f2_prof);

        
        $__internal_5db50b5998ac79939f88f5cc09d3f37cad22476f5bb46c03f0fb3f7934ea6e7c->leave($__internal_5db50b5998ac79939f88f5cc09d3f37cad22476f5bb46c03f0fb3f7934ea6e7c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef76353cb388960da41474d5368d7617d566a3af99b5c3e0d1d40dd718838890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef76353cb388960da41474d5368d7617d566a3af99b5c3e0d1d40dd718838890->enter($__internal_ef76353cb388960da41474d5368d7617d566a3af99b5c3e0d1d40dd718838890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60b3525fe56c7cf5e0bb59f57433bfbadb66e3a3ac47466c563f538afad084f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b3525fe56c7cf5e0bb59f57433bfbadb66e3a3ac47466c563f538afad084f5->enter($__internal_60b3525fe56c7cf5e0bb59f57433bfbadb66e3a3ac47466c563f538afad084f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60b3525fe56c7cf5e0bb59f57433bfbadb66e3a3ac47466c563f538afad084f5->leave($__internal_60b3525fe56c7cf5e0bb59f57433bfbadb66e3a3ac47466c563f538afad084f5_prof);

        
        $__internal_ef76353cb388960da41474d5368d7617d566a3af99b5c3e0d1d40dd718838890->leave($__internal_ef76353cb388960da41474d5368d7617d566a3af99b5c3e0d1d40dd718838890_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3b1e81f9f89a7683c92de9cd974b946173a98a1cc9aaf626cfd0ef902baacfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b1e81f9f89a7683c92de9cd974b946173a98a1cc9aaf626cfd0ef902baacfa->enter($__internal_e3b1e81f9f89a7683c92de9cd974b946173a98a1cc9aaf626cfd0ef902baacfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b6d366634192daf26fdac5897830075983e87cf1ded526c0e9203e86f4e66e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d366634192daf26fdac5897830075983e87cf1ded526c0e9203e86f4e66e82->enter($__internal_b6d366634192daf26fdac5897830075983e87cf1ded526c0e9203e86f4e66e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b6d366634192daf26fdac5897830075983e87cf1ded526c0e9203e86f4e66e82->leave($__internal_b6d366634192daf26fdac5897830075983e87cf1ded526c0e9203e86f4e66e82_prof);

        
        $__internal_e3b1e81f9f89a7683c92de9cd974b946173a98a1cc9aaf626cfd0ef902baacfa->leave($__internal_e3b1e81f9f89a7683c92de9cd974b946173a98a1cc9aaf626cfd0ef902baacfa_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/search.html.twig";
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
{% endblock %}", "@Admin/CtReception/search.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\search.html.twig");
    }
}
