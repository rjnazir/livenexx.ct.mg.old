<?php

/* AdminBundle:CtImprimeTechUse:edit.html.twig */
class __TwigTemplate_4a26909cf20ff5d5d1f236ace817339658dc5a89ed60924a68d098ff59303310 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTechUse:edit.html.twig", 1);
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
        $__internal_b979e9fa65dcdf6d66a956e3ab9dfb010e180aead9a777230d36f426863ba009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b979e9fa65dcdf6d66a956e3ab9dfb010e180aead9a777230d36f426863ba009->enter($__internal_b979e9fa65dcdf6d66a956e3ab9dfb010e180aead9a777230d36f426863ba009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:edit.html.twig"));

        $__internal_b4a0725624d53d2d69014f9b726732caecded432bd34ab55b12f960eee45256e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a0725624d53d2d69014f9b726732caecded432bd34ab55b12f960eee45256e->enter($__internal_b4a0725624d53d2d69014f9b726732caecded432bd34ab55b12f960eee45256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTechUse:edit.html.twig"));

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
        
        $__internal_b979e9fa65dcdf6d66a956e3ab9dfb010e180aead9a777230d36f426863ba009->leave($__internal_b979e9fa65dcdf6d66a956e3ab9dfb010e180aead9a777230d36f426863ba009_prof);

        
        $__internal_b4a0725624d53d2d69014f9b726732caecded432bd34ab55b12f960eee45256e->leave($__internal_b4a0725624d53d2d69014f9b726732caecded432bd34ab55b12f960eee45256e_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_846dd7d1ed4400158f833511f186f01c6d22a1d3add686c23e623461ae8b605c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846dd7d1ed4400158f833511f186f01c6d22a1d3add686c23e623461ae8b605c->enter($__internal_846dd7d1ed4400158f833511f186f01c6d22a1d3add686c23e623461ae8b605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7cd0bde83d11cbbec9cde6e916355c1a409558a1c2cb1c784b4c106053467163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd0bde83d11cbbec9cde6e916355c1a409558a1c2cb1c784b4c106053467163->enter($__internal_7cd0bde83d11cbbec9cde6e916355c1a409558a1c2cb1c784b4c106053467163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_7cd0bde83d11cbbec9cde6e916355c1a409558a1c2cb1c784b4c106053467163->leave($__internal_7cd0bde83d11cbbec9cde6e916355c1a409558a1c2cb1c784b4c106053467163_prof);

        
        $__internal_846dd7d1ed4400158f833511f186f01c6d22a1d3add686c23e623461ae8b605c->leave($__internal_846dd7d1ed4400158f833511f186f01c6d22a1d3add686c23e623461ae8b605c_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6a8a8f56dbc6ba92f8aaf82d94b2576ca4dc4673d6fcd954bb212ed0fd3fa76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a8a8f56dbc6ba92f8aaf82d94b2576ca4dc4673d6fcd954bb212ed0fd3fa76->enter($__internal_a6a8a8f56dbc6ba92f8aaf82d94b2576ca4dc4673d6fcd954bb212ed0fd3fa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82f41f8d7e239e7fa055252cd982a257c555203dde4aac44faa5eacc86fe88de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f41f8d7e239e7fa055252cd982a257c555203dde4aac44faa5eacc86fe88de->enter($__internal_82f41f8d7e239e7fa055252cd982a257c555203dde4aac44faa5eacc86fe88de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification utilisation imprimé technique ";
        
        $__internal_82f41f8d7e239e7fa055252cd982a257c555203dde4aac44faa5eacc86fe88de->leave($__internal_82f41f8d7e239e7fa055252cd982a257c555203dde4aac44faa5eacc86fe88de_prof);

        
        $__internal_a6a8a8f56dbc6ba92f8aaf82d94b2576ca4dc4673d6fcd954bb212ed0fd3fa76->leave($__internal_a6a8a8f56dbc6ba92f8aaf82d94b2576ca4dc4673d6fcd954bb212ed0fd3fa76_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd938c8da40223b09285c51cd7dd50ce1c07482070e78f9fc486bfb7e622e0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd938c8da40223b09285c51cd7dd50ce1c07482070e78f9fc486bfb7e622e0ab->enter($__internal_dd938c8da40223b09285c51cd7dd50ce1c07482070e78f9fc486bfb7e622e0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1673452ac25cd97586ccfed8bd50e6947ee92ccb8a1740f1649d4f2bbcd64f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1673452ac25cd97586ccfed8bd50e6947ee92ccb8a1740f1649d4f2bbcd64f9->enter($__internal_d1673452ac25cd97586ccfed8bd50e6947ee92ccb8a1740f1649d4f2bbcd64f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d1673452ac25cd97586ccfed8bd50e6947ee92ccb8a1740f1649d4f2bbcd64f9->leave($__internal_d1673452ac25cd97586ccfed8bd50e6947ee92ccb8a1740f1649d4f2bbcd64f9_prof);

        
        $__internal_dd938c8da40223b09285c51cd7dd50ce1c07482070e78f9fc486bfb7e622e0ab->leave($__internal_dd938c8da40223b09285c51cd7dd50ce1c07482070e78f9fc486bfb7e622e0ab_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTechUse:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtImprimeTechUse:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTechUse/edit.html.twig");
    }
}
