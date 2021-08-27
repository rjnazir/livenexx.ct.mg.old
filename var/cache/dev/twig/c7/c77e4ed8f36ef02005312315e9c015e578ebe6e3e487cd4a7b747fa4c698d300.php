<?php

/* @Admin/CtImprimeTechUse/edit.html.twig */
class __TwigTemplate_649f6b931c0f0befa4c0baf9435e7e164514199018f5e56ee9d6ce358bc1eb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTechUse/edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
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
        $__internal_2409c3404f346bc36f48fa02e9d7e67b9235bd22da41b2a3f1a58273688523ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2409c3404f346bc36f48fa02e9d7e67b9235bd22da41b2a3f1a58273688523ae->enter($__internal_2409c3404f346bc36f48fa02e9d7e67b9235bd22da41b2a3f1a58273688523ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/edit.html.twig"));

        $__internal_c24c5c7cb74a9cc1e9a63007d4731729f81a13fd602b2b39f63e2c3f77b6572f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24c5c7cb74a9cc1e9a63007d4731729f81a13fd602b2b39f63e2c3f77b6572f->enter($__internal_c24c5c7cb74a9cc1e9a63007d4731729f81a13fd602b2b39f63e2c3f77b6572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTechUse/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctBordereau", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituMotifUsed", array()), array(0 => $this));
        // line 37
        $context["menu_imprime_tech_use"] = true;
        // line 38
        $context["menu_imprime_tech_use_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2409c3404f346bc36f48fa02e9d7e67b9235bd22da41b2a3f1a58273688523ae->leave($__internal_2409c3404f346bc36f48fa02e9d7e67b9235bd22da41b2a3f1a58273688523ae_prof);

        
        $__internal_c24c5c7cb74a9cc1e9a63007d4731729f81a13fd602b2b39f63e2c3f77b6572f->leave($__internal_c24c5c7cb74a9cc1e9a63007d4731729f81a13fd602b2b39f63e2c3f77b6572f_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6e55a737a56257c63492e0f427c7b3d14a6a8e95bc57a2f309f3970901a189f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e55a737a56257c63492e0f427c7b3d14a6a8e95bc57a2f309f3970901a189f1->enter($__internal_6e55a737a56257c63492e0f427c7b3d14a6a8e95bc57a2f309f3970901a189f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_235d03d0b523617e81c418f5c3bbbf799e59b0e0afbcede902abf09783c79945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d03d0b523617e81c418f5c3bbbf799e59b0e0afbcede902abf09783c79945->enter($__internal_235d03d0b523617e81c418f5c3bbbf799e59b0e0afbcede902abf09783c79945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 16
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 17
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 18
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 22
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 23
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 24
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 25
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 26
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 29
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 30
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 31
        echo "</select>
    </span>";
        
        $__internal_235d03d0b523617e81c418f5c3bbbf799e59b0e0afbcede902abf09783c79945->leave($__internal_235d03d0b523617e81c418f5c3bbbf799e59b0e0afbcede902abf09783c79945_prof);

        
        $__internal_6e55a737a56257c63492e0f427c7b3d14a6a8e95bc57a2f309f3970901a189f1->leave($__internal_6e55a737a56257c63492e0f427c7b3d14a6a8e95bc57a2f309f3970901a189f1_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_83a4f9cb4fc91618ade9a6d6459a27b92ab5ceb6d4b3dc34150a1e67df014fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a4f9cb4fc91618ade9a6d6459a27b92ab5ceb6d4b3dc34150a1e67df014fa0->enter($__internal_83a4f9cb4fc91618ade9a6d6459a27b92ab5ceb6d4b3dc34150a1e67df014fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cfa0cddabe1aa6d24d97cbd3c650fd68eb3ab23b2dc89b5d576d22c6a287c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfa0cddabe1aa6d24d97cbd3c650fd68eb3ab23b2dc89b5d576d22c6a287c83->enter($__internal_2cfa0cddabe1aa6d24d97cbd3c650fd68eb3ab23b2dc89b5d576d22c6a287c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification utilisation imprimé technique ";
        
        $__internal_2cfa0cddabe1aa6d24d97cbd3c650fd68eb3ab23b2dc89b5d576d22c6a287c83->leave($__internal_2cfa0cddabe1aa6d24d97cbd3c650fd68eb3ab23b2dc89b5d576d22c6a287c83_prof);

        
        $__internal_83a4f9cb4fc91618ade9a6d6459a27b92ab5ceb6d4b3dc34150a1e67df014fa0->leave($__internal_83a4f9cb4fc91618ade9a6d6459a27b92ab5ceb6d4b3dc34150a1e67df014fa0_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_56bc9112c6f9a4db6c51580346769fbccb616bd3192d4574f0cccaaf007d1a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bc9112c6f9a4db6c51580346769fbccb616bd3192d4574f0cccaaf007d1a41->enter($__internal_56bc9112c6f9a4db6c51580346769fbccb616bd3192d4574f0cccaaf007d1a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4608ac49b4c3d4c06c0f29be5f4abc21b688dd32ae62f9aa19f5ca82f11ecffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4608ac49b4c3d4c06c0f29be5f4abc21b688dd32ae62f9aa19f5ca82f11ecffc->enter($__internal_4608ac49b4c3d4c06c0f29be5f4abc21b688dd32ae62f9aa19f5ca82f11ecffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "        <div class=\"callout callout-success\">
            ";
            // line 43
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Modifier une utilisation d'imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctBordereau", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituNumero", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctControle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ituMotifUsed", array()), 'row');
        echo "
                    </div>


                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        ";
        // line 91
        echo "                    </div>
                ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4608ac49b4c3d4c06c0f29be5f4abc21b688dd32ae62f9aa19f5ca82f11ecffc->leave($__internal_4608ac49b4c3d4c06c0f29be5f4abc21b688dd32ae62f9aa19f5ca82f11ecffc_prof);

        
        $__internal_56bc9112c6f9a4db6c51580346769fbccb616bd3192d4574f0cccaaf007d1a41->leave($__internal_56bc9112c6f9a4db6c51580346769fbccb616bd3192d4574f0cccaaf007d1a41_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTechUse/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 92,  245 => 91,  236 => 81,  229 => 77,  222 => 73,  215 => 69,  208 => 65,  201 => 61,  192 => 55,  186 => 51,  177 => 48,  174 => 47,  169 => 46,  160 => 43,  157 => 42,  152 => 41,  143 => 40,  124 => 35,  113 => 31,  111 => 30,  109 => 29,  103 => 26,  101 => 25,  99 => 24,  97 => 23,  95 => 22,  90 => 19,  83 => 18,  81 => 17,  75 => 16,  71 => 14,  68 => 12,  66 => 11,  57 => 10,  47 => 1,  45 => 38,  43 => 37,  41 => 8,  39 => 7,  37 => 6,  35 => 5,  33 => 3,  11 => 1,);
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

{% form_theme edit_form.ctBordereau _self %}
{% form_theme edit_form.ctCentre _self %}
{% form_theme edit_form.ctImprimeTech _self %}
{% form_theme edit_form.ituMotifUsed _self %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Modification utilisation imprimé technique {% endblock %}

{% set menu_imprime_tech_use        = true %}
{% set menu_imprime_tech_use_create = true %}

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
                        <h3 class=\"box-title\">Modifier une utilisation d'imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctBordereau) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctCentre) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ituNumero) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctControle) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ituMotifUsed) }}
                    </div>


                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_it_in_bl\"/>
                        {# <a href=\"{{ path('bordereau_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a> #}
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTechUse/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTechUse\\edit.html.twig");
    }
}
