<?php

/* @Admin/CtUsage/add.html.twig */
class __TwigTemplate_302db0097ad604bb810ff627ed7396c7adbe3867480ec49f7bb191730333b620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsage/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2928d8f3c760bf3fa22e519d1eed48a7a9fb8584d024fd8f73462dfed89cd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2928d8f3c760bf3fa22e519d1eed48a7a9fb8584d024fd8f73462dfed89cd82->enter($__internal_e2928d8f3c760bf3fa22e519d1eed48a7a9fb8584d024fd8f73462dfed89cd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/add.html.twig"));

        $__internal_613a413aca42db57b3cb0d4bf692f86d1ef4212f869b05e3a4f60e1f0cc65a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613a413aca42db57b3cb0d4bf692f86d1ef4212f869b05e3a4f60e1f0cc65a40->enter($__internal_613a413aca42db57b3cb0d4bf692f86d1ef4212f869b05e3a4f60e1f0cc65a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeUsage", array()), array(0 => $this));
        // line 8
        $context["menu_usage"] = true;
        // line 9
        $context["menu_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2928d8f3c760bf3fa22e519d1eed48a7a9fb8584d024fd8f73462dfed89cd82->leave($__internal_e2928d8f3c760bf3fa22e519d1eed48a7a9fb8584d024fd8f73462dfed89cd82_prof);

        
        $__internal_613a413aca42db57b3cb0d4bf692f86d1ef4212f869b05e3a4f60e1f0cc65a40->leave($__internal_613a413aca42db57b3cb0d4bf692f86d1ef4212f869b05e3a4f60e1f0cc65a40_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_abdc79e0cc634595159c6a82eeb21832e04d2fa12a7ec29d0b44ff8142b8b3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdc79e0cc634595159c6a82eeb21832e04d2fa12a7ec29d0b44ff8142b8b3f5->enter($__internal_abdc79e0cc634595159c6a82eeb21832e04d2fa12a7ec29d0b44ff8142b8b3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_348ff2f64fef2c139fd712be658adf482275cff2df0a1cf3e689943cab6e988e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348ff2f64fef2c139fd712be658adf482275cff2df0a1cf3e689943cab6e988e->enter($__internal_348ff2f64fef2c139fd712be658adf482275cff2df0a1cf3e689943cab6e988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout usage ";
        
        $__internal_348ff2f64fef2c139fd712be658adf482275cff2df0a1cf3e689943cab6e988e->leave($__internal_348ff2f64fef2c139fd712be658adf482275cff2df0a1cf3e689943cab6e988e_prof);

        
        $__internal_abdc79e0cc634595159c6a82eeb21832e04d2fa12a7ec29d0b44ff8142b8b3f5->leave($__internal_abdc79e0cc634595159c6a82eeb21832e04d2fa12a7ec29d0b44ff8142b8b3f5_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_10726be029c190c6242d8d0c2b406f13b95a5c8d4d08d40b3d3d163d45d34cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10726be029c190c6242d8d0c2b406f13b95a5c8d4d08d40b3d3d163d45d34cea->enter($__internal_10726be029c190c6242d8d0c2b406f13b95a5c8d4d08d40b3d3d163d45d34cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_808628f1d9112b2e718417a05f276189838eb479604b01871ff81535d621a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808628f1d9112b2e718417a05f276189838eb479604b01871ff81535d621a5da->enter($__internal_808628f1d9112b2e718417a05f276189838eb479604b01871ff81535d621a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 12
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 13
            $context["required"] = false;
        }
        // line 15
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 17
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 18
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 19
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 20
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 23
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 24
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 25
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 26
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 27
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 30
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 31
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 32
        echo "</select>
    </span>";
        
        $__internal_808628f1d9112b2e718417a05f276189838eb479604b01871ff81535d621a5da->leave($__internal_808628f1d9112b2e718417a05f276189838eb479604b01871ff81535d621a5da_prof);

        
        $__internal_10726be029c190c6242d8d0c2b406f13b95a5c8d4d08d40b3d3d163d45d34cea->leave($__internal_10726be029c190c6242d8d0c2b406f13b95a5c8d4d08d40b3d3d163d45d34cea_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b24088da65a24e2c3973cbe8a826fdd131f43f5fc0481ce6ddb56edabe9004e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b24088da65a24e2c3973cbe8a826fdd131f43f5fc0481ce6ddb56edabe9004e->enter($__internal_4b24088da65a24e2c3973cbe8a826fdd131f43f5fc0481ce6ddb56edabe9004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4939a75382f4a71f2d316e144cf3b94ec185e644ed2b569f9417c55118a2903a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4939a75382f4a71f2d316e144cf3b94ec185e644ed2b569f9417c55118a2903a->enter($__internal_4939a75382f4a71f2d316e144cf3b94ec185e644ed2b569f9417c55118a2903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usgValidite", array()), 'row');
        echo "
                    </div>

                    <div class=\"hide\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeUsage", array()), 'row');
        echo "</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4939a75382f4a71f2d316e144cf3b94ec185e644ed2b569f9417c55118a2903a->leave($__internal_4939a75382f4a71f2d316e144cf3b94ec185e644ed2b569f9417c55118a2903a_prof);

        
        $__internal_4b24088da65a24e2c3973cbe8a826fdd131f43f5fc0481ce6ddb56edabe9004e->leave($__internal_4b24088da65a24e2c3973cbe8a826fdd131f43f5fc0481ce6ddb56edabe9004e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsage/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 70,  212 => 65,  205 => 61,  199 => 58,  195 => 57,  186 => 51,  180 => 47,  171 => 44,  168 => 43,  163 => 42,  154 => 39,  151 => 38,  146 => 37,  137 => 36,  126 => 32,  124 => 31,  122 => 30,  116 => 27,  114 => 26,  112 => 25,  110 => 24,  108 => 23,  103 => 20,  96 => 19,  94 => 18,  88 => 17,  84 => 15,  81 => 13,  79 => 12,  70 => 11,  51 => 6,  41 => 1,  39 => 9,  37 => 8,  35 => 4,  33 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}
{% form_theme form.ctTypeUsage _self %}

{% block title %}{{ parent() }} Ajout usage {% endblock %}

{% set menu_usage        = true %}
{% set menu_usage_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.usgLibelle) }}
                        {{ form_row(form.usgValidite) }}
                    </div>

                    <div class=\"hide\">{{ form_row(form.ctTypeUsage) }}</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_usage\"/>
                        <a href=\"{{ path('usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUsage/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsage\\add.html.twig");
    }
}
