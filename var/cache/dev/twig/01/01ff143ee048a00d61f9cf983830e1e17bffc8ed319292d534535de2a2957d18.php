<?php

/* AdminBundle:CtTypeVisite:edit.html.twig */
class __TwigTemplate_0ac6bd1ec31fcf54abc5c262dd8a29ff9e76446251d2770bf11b537f1d7b2445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:edit.html.twig", 1);
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
        $__internal_16c5c53d7336e2922471d207ee7322814f128aad939e9af77c62bfcef91ade76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c5c53d7336e2922471d207ee7322814f128aad939e9af77c62bfcef91ade76->enter($__internal_16c5c53d7336e2922471d207ee7322814f128aad939e9af77c62bfcef91ade76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        $__internal_2bc6df85b69c238476c48602590bfd552834556bba84879f4f551ebd3fa31464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc6df85b69c238476c48602590bfd552834556bba84879f4f551ebd3fa31464->enter($__internal_2bc6df85b69c238476c48602590bfd552834556bba84879f4f551ebd3fa31464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c5c53d7336e2922471d207ee7322814f128aad939e9af77c62bfcef91ade76->leave($__internal_16c5c53d7336e2922471d207ee7322814f128aad939e9af77c62bfcef91ade76_prof);

        
        $__internal_2bc6df85b69c238476c48602590bfd552834556bba84879f4f551ebd3fa31464->leave($__internal_2bc6df85b69c238476c48602590bfd552834556bba84879f4f551ebd3fa31464_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b6ba377555284f0600d581e63a0211c9ee673b24ef850340f34ef1f9b9f9d64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6ba377555284f0600d581e63a0211c9ee673b24ef850340f34ef1f9b9f9d64->enter($__internal_8b6ba377555284f0600d581e63a0211c9ee673b24ef850340f34ef1f9b9f9d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_774e0d9804b45ec7974e2d0a823de36a2ab9806d4a2ebf6101281d2f0c098881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774e0d9804b45ec7974e2d0a823de36a2ab9806d4a2ebf6101281d2f0c098881->enter($__internal_774e0d9804b45ec7974e2d0a823de36a2ab9806d4a2ebf6101281d2f0c098881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de visite ";
        
        $__internal_774e0d9804b45ec7974e2d0a823de36a2ab9806d4a2ebf6101281d2f0c098881->leave($__internal_774e0d9804b45ec7974e2d0a823de36a2ab9806d4a2ebf6101281d2f0c098881_prof);

        
        $__internal_8b6ba377555284f0600d581e63a0211c9ee673b24ef850340f34ef1f9b9f9d64->leave($__internal_8b6ba377555284f0600d581e63a0211c9ee673b24ef850340f34ef1f9b9f9d64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_489469bb3111cbd53892cabccd56644cb2a625c3f76d1f75722ea22d9050dce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489469bb3111cbd53892cabccd56644cb2a625c3f76d1f75722ea22d9050dce6->enter($__internal_489469bb3111cbd53892cabccd56644cb2a625c3f76d1f75722ea22d9050dce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f1bf03f9025b9bf52728dd4fecd7896a3fbfcfbde12036c676a72b6c1464aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1bf03f9025b9bf52728dd4fecd7896a3fbfcfbde12036c676a72b6c1464aa7->enter($__internal_9f1bf03f9025b9bf52728dd4fecd7896a3fbfcfbde12036c676a72b6c1464aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_9f1bf03f9025b9bf52728dd4fecd7896a3fbfcfbde12036c676a72b6c1464aa7->leave($__internal_9f1bf03f9025b9bf52728dd4fecd7896a3fbfcfbde12036c676a72b6c1464aa7_prof);

        
        $__internal_489469bb3111cbd53892cabccd56644cb2a625c3f76d1f75722ea22d9050dce6->leave($__internal_489469bb3111cbd53892cabccd56644cb2a625c3f76d1f75722ea22d9050dce6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeVisite:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/edit.html.twig");
    }
}
