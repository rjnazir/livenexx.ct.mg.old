<?php

/* AdminBundle:CtTypeDroitPtac:edit.html.twig */
class __TwigTemplate_c73e120022630deff51b7bb5b50e26a0f3d73d3611e8373a944cfad0a7ac5e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeDroitPtac:edit.html.twig", 1);
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
        $__internal_a55d7f58b849955f3a3c4c323142f2ed58895f1e2eeb3b222041e95c6337c972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55d7f58b849955f3a3c4c323142f2ed58895f1e2eeb3b222041e95c6337c972->enter($__internal_a55d7f58b849955f3a3c4c323142f2ed58895f1e2eeb3b222041e95c6337c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:edit.html.twig"));

        $__internal_94e0fa20497931dfe443fc258268506ab3f8d2f69d3dc28b326a3f7d98d3f95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e0fa20497931dfe443fc258268506ab3f8d2f69d3dc28b326a3f7d98d3f95d->enter($__internal_94e0fa20497931dfe443fc258268506ab3f8d2f69d3dc28b326a3f7d98d3f95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeDroitPtac:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55d7f58b849955f3a3c4c323142f2ed58895f1e2eeb3b222041e95c6337c972->leave($__internal_a55d7f58b849955f3a3c4c323142f2ed58895f1e2eeb3b222041e95c6337c972_prof);

        
        $__internal_94e0fa20497931dfe443fc258268506ab3f8d2f69d3dc28b326a3f7d98d3f95d->leave($__internal_94e0fa20497931dfe443fc258268506ab3f8d2f69d3dc28b326a3f7d98d3f95d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_54f1775d67ff016b7978dd030403aa8dd5d873c48e38406da1c2da471ef118af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f1775d67ff016b7978dd030403aa8dd5d873c48e38406da1c2da471ef118af->enter($__internal_54f1775d67ff016b7978dd030403aa8dd5d873c48e38406da1c2da471ef118af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12244c103589cb87375bb62199b0cd2259567b07071f98772acded720c007262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12244c103589cb87375bb62199b0cd2259567b07071f98772acded720c007262->enter($__internal_12244c103589cb87375bb62199b0cd2259567b07071f98772acded720c007262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de droit PTAC ";
        
        $__internal_12244c103589cb87375bb62199b0cd2259567b07071f98772acded720c007262->leave($__internal_12244c103589cb87375bb62199b0cd2259567b07071f98772acded720c007262_prof);

        
        $__internal_54f1775d67ff016b7978dd030403aa8dd5d873c48e38406da1c2da471ef118af->leave($__internal_54f1775d67ff016b7978dd030403aa8dd5d873c48e38406da1c2da471ef118af_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_48c9af58bdad50ff45f765cf50795665b4e3e4adb7356804901bbe6d74d2b785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c9af58bdad50ff45f765cf50795665b4e3e4adb7356804901bbe6d74d2b785->enter($__internal_48c9af58bdad50ff45f765cf50795665b4e3e4adb7356804901bbe6d74d2b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a53cf9a1bd995aba7b750f7596d010e5bdb412aecf45a9883b9c2cf19cf3b43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53cf9a1bd995aba7b750f7596d010e5bdb412aecf45a9883b9c2cf19cf3b43e->enter($__internal_a53cf9a1bd995aba7b750f7596d010e5bdb412aecf45a9883b9c2cf19cf3b43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
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
        
        $__internal_a53cf9a1bd995aba7b750f7596d010e5bdb412aecf45a9883b9c2cf19cf3b43e->leave($__internal_a53cf9a1bd995aba7b750f7596d010e5bdb412aecf45a9883b9c2cf19cf3b43e_prof);

        
        $__internal_48c9af58bdad50ff45f765cf50795665b4e3e4adb7356804901bbe6d74d2b785->leave($__internal_48c9af58bdad50ff45f765cf50795665b4e3e4adb7356804901bbe6d74d2b785_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeDroitPtac:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type de droit PTAC {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeDroitPtac:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeDroitPtac/edit.html.twig");
    }
}
