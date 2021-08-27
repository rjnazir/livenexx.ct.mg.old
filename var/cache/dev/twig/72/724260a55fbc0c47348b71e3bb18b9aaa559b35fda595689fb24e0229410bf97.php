<?php

/* @Admin/CtTypeConstatationAvDedouanement/edit.html.twig */
class __TwigTemplate_85c923305cec63bcf895964d745ba4df6f9427d0cf4031f595e4bc5375ecdaa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", 1);
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
        $__internal_a93fd1f4d63611fa294e96fda02c1813255562628abedbf4661997a2f5c2fd13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93fd1f4d63611fa294e96fda02c1813255562628abedbf4661997a2f5c2fd13->enter($__internal_a93fd1f4d63611fa294e96fda02c1813255562628abedbf4661997a2f5c2fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        $__internal_b1d2a7fa3925d3a0be3b0a9fcbd09d9b5e8c2febba46efe82368b88d7aa12749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d2a7fa3925d3a0be3b0a9fcbd09d9b5e8c2febba46efe82368b88d7aa12749->enter($__internal_b1d2a7fa3925d3a0be3b0a9fcbd09d9b5e8c2febba46efe82368b88d7aa12749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93fd1f4d63611fa294e96fda02c1813255562628abedbf4661997a2f5c2fd13->leave($__internal_a93fd1f4d63611fa294e96fda02c1813255562628abedbf4661997a2f5c2fd13_prof);

        
        $__internal_b1d2a7fa3925d3a0be3b0a9fcbd09d9b5e8c2febba46efe82368b88d7aa12749->leave($__internal_b1d2a7fa3925d3a0be3b0a9fcbd09d9b5e8c2febba46efe82368b88d7aa12749_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea29e085baacbc2364ab997f97fc7e750885c1f74417282bb9e83968791bcee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea29e085baacbc2364ab997f97fc7e750885c1f74417282bb9e83968791bcee7->enter($__internal_ea29e085baacbc2364ab997f97fc7e750885c1f74417282bb9e83968791bcee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72df683a0de58389b2b9bb791ed8dfeb68734281adf2db0d08927a94a06cd110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72df683a0de58389b2b9bb791ed8dfeb68734281adf2db0d08927a94a06cd110->enter($__internal_72df683a0de58389b2b9bb791ed8dfeb68734281adf2db0d08927a94a06cd110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_72df683a0de58389b2b9bb791ed8dfeb68734281adf2db0d08927a94a06cd110->leave($__internal_72df683a0de58389b2b9bb791ed8dfeb68734281adf2db0d08927a94a06cd110_prof);

        
        $__internal_ea29e085baacbc2364ab997f97fc7e750885c1f74417282bb9e83968791bcee7->leave($__internal_ea29e085baacbc2364ab997f97fc7e750885c1f74417282bb9e83968791bcee7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0a90e4dee78ef02dd60d73b48262d20e8000a39b0d61e0929d1136621ef7a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a90e4dee78ef02dd60d73b48262d20e8000a39b0d61e0929d1136621ef7a2b->enter($__internal_c0a90e4dee78ef02dd60d73b48262d20e8000a39b0d61e0929d1136621ef7a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8309e080c3320150dce1bd16f1d88a82650544c01f7863f8228034620ebd3b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8309e080c3320150dce1bd16f1d88a82650544c01f7863f8228034620ebd3b3c->enter($__internal_8309e080c3320150dce1bd16f1d88a82650544c01f7863f8228034620ebd3b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8309e080c3320150dce1bd16f1d88a82650544c01f7863f8228034620ebd3b3c->leave($__internal_8309e080c3320150dce1bd16f1d88a82650544c01f7863f8228034620ebd3b3c_prof);

        
        $__internal_c0a90e4dee78ef02dd60d73b48262d20e8000a39b0d61e0929d1136621ef7a2b->leave($__internal_c0a90e4dee78ef02dd60d73b48262d20e8000a39b0d61e0929d1136621ef7a2b_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type constatation avant dédouanement {% endblock %}

{% set menu_const_av_ded_type        = true %}
{% set menu_const_av_ded_type_create = true %}

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
                    <h3 class=\"box-title\">Editer un type constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(edit_form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_const_av_ded\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeConstatationAvDedouanement/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\edit.html.twig");
    }
}
