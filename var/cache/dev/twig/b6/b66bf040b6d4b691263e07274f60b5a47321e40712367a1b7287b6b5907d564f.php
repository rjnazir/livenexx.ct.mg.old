<?php

/* @Admin/CtCentre/edit.html.twig */
class __TwigTemplate_11485938e26a55127235c097657231307d909939bb72e9b17535d8300206c782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCentre/edit.html.twig", 1);
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
        $__internal_d7e5a6b92a102b7a8dbc0017547baf8bfe96ca9454e8c8af78bfd23a5b18a7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e5a6b92a102b7a8dbc0017547baf8bfe96ca9454e8c8af78bfd23a5b18a7ad->enter($__internal_d7e5a6b92a102b7a8dbc0017547baf8bfe96ca9454e8c8af78bfd23a5b18a7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        $__internal_29999a942f88a868c0c90a2816f316a75a145e3244df2356d17f582c8cd355f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29999a942f88a868c0c90a2816f316a75a145e3244df2356d17f582c8cd355f4->enter($__internal_29999a942f88a868c0c90a2816f316a75a145e3244df2356d17f582c8cd355f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e5a6b92a102b7a8dbc0017547baf8bfe96ca9454e8c8af78bfd23a5b18a7ad->leave($__internal_d7e5a6b92a102b7a8dbc0017547baf8bfe96ca9454e8c8af78bfd23a5b18a7ad_prof);

        
        $__internal_29999a942f88a868c0c90a2816f316a75a145e3244df2356d17f582c8cd355f4->leave($__internal_29999a942f88a868c0c90a2816f316a75a145e3244df2356d17f582c8cd355f4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aee1b54a161a38ea7de607e20cd14afed2d83fcf2b0cd6f2a27ad9af25f71c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aee1b54a161a38ea7de607e20cd14afed2d83fcf2b0cd6f2a27ad9af25f71c6->enter($__internal_1aee1b54a161a38ea7de607e20cd14afed2d83fcf2b0cd6f2a27ad9af25f71c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39ec4032232d19cc6e389905708bd703f1d0e6eb589096d56f85de792d0d6839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ec4032232d19cc6e389905708bd703f1d0e6eb589096d56f85de792d0d6839->enter($__internal_39ec4032232d19cc6e389905708bd703f1d0e6eb589096d56f85de792d0d6839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_39ec4032232d19cc6e389905708bd703f1d0e6eb589096d56f85de792d0d6839->leave($__internal_39ec4032232d19cc6e389905708bd703f1d0e6eb589096d56f85de792d0d6839_prof);

        
        $__internal_1aee1b54a161a38ea7de607e20cd14afed2d83fcf2b0cd6f2a27ad9af25f71c6->leave($__internal_1aee1b54a161a38ea7de607e20cd14afed2d83fcf2b0cd6f2a27ad9af25f71c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b0f93f44f928cf91f592e0d44f8c7359beeebac037b8cca358b5851483a434d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0f93f44f928cf91f592e0d44f8c7359beeebac037b8cca358b5851483a434d->enter($__internal_6b0f93f44f928cf91f592e0d44f8c7359beeebac037b8cca358b5851483a434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_457507d6d3f2d2279504e3fcf5489fcf835b43146570838c07b6e0bb541e5209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457507d6d3f2d2279504e3fcf5489fcf835b43146570838c07b6e0bb541e5209->enter($__internal_457507d6d3f2d2279504e3fcf5489fcf835b43146570838c07b6e0bb541e5209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_457507d6d3f2d2279504e3fcf5489fcf835b43146570838c07b6e0bb541e5209->leave($__internal_457507d6d3f2d2279504e3fcf5489fcf835b43146570838c07b6e0bb541e5209_prof);

        
        $__internal_6b0f93f44f928cf91f592e0d44f8c7359beeebac037b8cca358b5851483a434d->leave($__internal_6b0f93f44f928cf91f592e0d44f8c7359beeebac037b8cca358b5851483a434d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCentre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctProvince) }}
                        {{ form_row(edit_form.ctrNom) }}
                        {{ form_row(edit_form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCentre/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCentre\\edit.html.twig");
    }
}
