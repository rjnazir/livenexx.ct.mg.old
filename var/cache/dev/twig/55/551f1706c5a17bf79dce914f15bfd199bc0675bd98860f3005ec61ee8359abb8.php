<?php

/* @Admin/CtVisiteExtraTarif/edit.html.twig */
class __TwigTemplate_5bbdcad5fdd93b7b74d380782710263d65454806c10fd681a2ab14914138d1c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a12dec164bca3a4b4d8abe6bbb7249418231ae27f23f3cc8d7fb167dedc03f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12dec164bca3a4b4d8abe6bbb7249418231ae27f23f3cc8d7fb167dedc03f99->enter($__internal_a12dec164bca3a4b4d8abe6bbb7249418231ae27f23f3cc8d7fb167dedc03f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        $__internal_a18dd7d485398f40cc0fece0ec178b19c9684eb3ff013ec11bdbcf194ced9b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18dd7d485398f40cc0fece0ec178b19c9684eb3ff013ec11bdbcf194ced9b54->enter($__internal_a18dd7d485398f40cc0fece0ec178b19c9684eb3ff013ec11bdbcf194ced9b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12dec164bca3a4b4d8abe6bbb7249418231ae27f23f3cc8d7fb167dedc03f99->leave($__internal_a12dec164bca3a4b4d8abe6bbb7249418231ae27f23f3cc8d7fb167dedc03f99_prof);

        
        $__internal_a18dd7d485398f40cc0fece0ec178b19c9684eb3ff013ec11bdbcf194ced9b54->leave($__internal_a18dd7d485398f40cc0fece0ec178b19c9684eb3ff013ec11bdbcf194ced9b54_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b58442d2f7dc158fec2a690e0ceb7d22f3baf4d03a1b160264a82a1ffdddc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b58442d2f7dc158fec2a690e0ceb7d22f3baf4d03a1b160264a82a1ffdddc48->enter($__internal_7b58442d2f7dc158fec2a690e0ceb7d22f3baf4d03a1b160264a82a1ffdddc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cddc0719e9ddaf3197fc8dea4ea4eb5f020cd3fbdd0ed53117028cf744314cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddc0719e9ddaf3197fc8dea4ea4eb5f020cd3fbdd0ed53117028cf744314cb5->enter($__internal_cddc0719e9ddaf3197fc8dea4ea4eb5f020cd3fbdd0ed53117028cf744314cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de visite extra ";
        
        $__internal_cddc0719e9ddaf3197fc8dea4ea4eb5f020cd3fbdd0ed53117028cf744314cb5->leave($__internal_cddc0719e9ddaf3197fc8dea4ea4eb5f020cd3fbdd0ed53117028cf744314cb5_prof);

        
        $__internal_7b58442d2f7dc158fec2a690e0ceb7d22f3baf4d03a1b160264a82a1ffdddc48->leave($__internal_7b58442d2f7dc158fec2a690e0ceb7d22f3baf4d03a1b160264a82a1ffdddc48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f25709995fbb4b6f8d0d7ced2cb2e929a75efa31edf57917b098283647e4917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f25709995fbb4b6f8d0d7ced2cb2e929a75efa31edf57917b098283647e4917->enter($__internal_1f25709995fbb4b6f8d0d7ced2cb2e929a75efa31edf57917b098283647e4917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0703940324eedb8faf9f76fb3f1f8791efbb7db14d09b2df8f1abfba61a158cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0703940324eedb8faf9f76fb3f1f8791efbb7db14d09b2df8f1abfba61a158cd->enter($__internal_0703940324eedb8faf9f76fb3f1f8791efbb7db14d09b2df8f1abfba61a158cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0703940324eedb8faf9f76fb3f1f8791efbb7db14d09b2df8f1abfba61a158cd->leave($__internal_0703940324eedb8faf9f76fb3f1f8791efbb7db14d09b2df8f1abfba61a158cd_prof);

        
        $__internal_1f25709995fbb4b6f8d0d7ced2cb2e929a75efa31edf57917b098283647e4917->leave($__internal_1f25709995fbb4b6f8d0d7ced2cb2e929a75efa31edf57917b098283647e4917_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification tarif de visite extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}

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
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctVisiteExtra) }}
                        {{ form_row(edit_form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtraTarif/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\edit.html.twig");
    }
}
