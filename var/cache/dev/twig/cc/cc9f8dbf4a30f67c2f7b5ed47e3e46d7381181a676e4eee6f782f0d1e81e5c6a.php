<?php

/* AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig */
class __TwigTemplate_39b771f523e01f398b81e88fb63a4eea4c15e530001a46486483d847cf674709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", 1);
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
        $__internal_2737521b2f8f186e99dc3d58f370987be39cfa32189a1853df39629e32ff95e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2737521b2f8f186e99dc3d58f370987be39cfa32189a1853df39629e32ff95e2->enter($__internal_2737521b2f8f186e99dc3d58f370987be39cfa32189a1853df39629e32ff95e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        $__internal_a4d55a1591561d56f16bbacf2bd2af6e2f75c31767c8174afe842107fe2c9bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d55a1591561d56f16bbacf2bd2af6e2f75c31767c8174afe842107fe2c9bf5->enter($__internal_a4d55a1591561d56f16bbacf2bd2af6e2f75c31767c8174afe842107fe2c9bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2737521b2f8f186e99dc3d58f370987be39cfa32189a1853df39629e32ff95e2->leave($__internal_2737521b2f8f186e99dc3d58f370987be39cfa32189a1853df39629e32ff95e2_prof);

        
        $__internal_a4d55a1591561d56f16bbacf2bd2af6e2f75c31767c8174afe842107fe2c9bf5->leave($__internal_a4d55a1591561d56f16bbacf2bd2af6e2f75c31767c8174afe842107fe2c9bf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c803f10d373320b82539ef791da9e0c6d4e8173ae494586048a62145366727ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c803f10d373320b82539ef791da9e0c6d4e8173ae494586048a62145366727ad->enter($__internal_c803f10d373320b82539ef791da9e0c6d4e8173ae494586048a62145366727ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2780c48e07fdefc9ca30587638ec72b0385de530626b0a1af621296eaef727d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2780c48e07fdefc9ca30587638ec72b0385de530626b0a1af621296eaef727d2->enter($__internal_2780c48e07fdefc9ca30587638ec72b0385de530626b0a1af621296eaef727d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type constatation avant dédouanement ";
        
        $__internal_2780c48e07fdefc9ca30587638ec72b0385de530626b0a1af621296eaef727d2->leave($__internal_2780c48e07fdefc9ca30587638ec72b0385de530626b0a1af621296eaef727d2_prof);

        
        $__internal_c803f10d373320b82539ef791da9e0c6d4e8173ae494586048a62145366727ad->leave($__internal_c803f10d373320b82539ef791da9e0c6d4e8173ae494586048a62145366727ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12bd286c02337e3788834da82d32715411a62449dab0ddcd79e8f7522044c3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bd286c02337e3788834da82d32715411a62449dab0ddcd79e8f7522044c3c8->enter($__internal_12bd286c02337e3788834da82d32715411a62449dab0ddcd79e8f7522044c3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be1b19ef96184632e83e5795acec4bb3ef86219b7e6db78ef6c854ea3ca581a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be1b19ef96184632e83e5795acec4bb3ef86219b7e6db78ef6c854ea3ca581a3->enter($__internal_be1b19ef96184632e83e5795acec4bb3ef86219b7e6db78ef6c854ea3ca581a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_be1b19ef96184632e83e5795acec4bb3ef86219b7e6db78ef6c854ea3ca581a3->leave($__internal_be1b19ef96184632e83e5795acec4bb3ef86219b7e6db78ef6c854ea3ca581a3_prof);

        
        $__internal_12bd286c02337e3788834da82d32715411a62449dab0ddcd79e8f7522044c3c8->leave($__internal_12bd286c02337e3788834da82d32715411a62449dab0ddcd79e8f7522044c3c8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtTypeConstatationAvDedouanement:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeConstatationAvDedouanement/edit.html.twig");
    }
}
