<?php

/* @Admin/CtDroitPtac/add.html.twig */
class __TwigTemplate_ba12974ca94e5bb7d027dc1fa198e88ad32844a7fe29baa7b2b6e6078dff3c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtDroitPtac/add.html.twig", 1);
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
        $__internal_c78512a902a751dbb0028997055acb7e9c8a9260d950649842b33d7ce8ae1ca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78512a902a751dbb0028997055acb7e9c8a9260d950649842b33d7ce8ae1ca7->enter($__internal_c78512a902a751dbb0028997055acb7e9c8a9260d950649842b33d7ce8ae1ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/add.html.twig"));

        $__internal_c24ac9a515ecd2d559b99a6373cea7c1330d69ed3f1d809fceb6b8a2fd42ab99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24ac9a515ecd2d559b99a6373cea7c1330d69ed3f1d809fceb6b8a2fd42ab99->enter($__internal_c24ac9a515ecd2d559b99a6373cea7c1330d69ed3f1d809fceb6b8a2fd42ab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtDroitPtac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), array(0 => $this));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeDroitPtac", array()), array(0 => $this));
        // line 33
        $context["menu_droit_ptac"] = true;
        // line 34
        $context["menu_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78512a902a751dbb0028997055acb7e9c8a9260d950649842b33d7ce8ae1ca7->leave($__internal_c78512a902a751dbb0028997055acb7e9c8a9260d950649842b33d7ce8ae1ca7_prof);

        
        $__internal_c24ac9a515ecd2d559b99a6373cea7c1330d69ed3f1d809fceb6b8a2fd42ab99->leave($__internal_c24ac9a515ecd2d559b99a6373cea7c1330d69ed3f1d809fceb6b8a2fd42ab99_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_99aeab15e6aeef5e2cd809506e4c8bdf925fa0a3112204ea00eb7fb7bee36231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99aeab15e6aeef5e2cd809506e4c8bdf925fa0a3112204ea00eb7fb7bee36231->enter($__internal_99aeab15e6aeef5e2cd809506e4c8bdf925fa0a3112204ea00eb7fb7bee36231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_7b87fe9caaba213d39f930a374f4df28a9a01d4fede1f223347de26ff7a299e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b87fe9caaba213d39f930a374f4df28a9a01d4fede1f223347de26ff7a299e8->enter($__internal_7b87fe9caaba213d39f930a374f4df28a9a01d4fede1f223347de26ff7a299e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_7b87fe9caaba213d39f930a374f4df28a9a01d4fede1f223347de26ff7a299e8->leave($__internal_7b87fe9caaba213d39f930a374f4df28a9a01d4fede1f223347de26ff7a299e8_prof);

        
        $__internal_99aeab15e6aeef5e2cd809506e4c8bdf925fa0a3112204ea00eb7fb7bee36231->leave($__internal_99aeab15e6aeef5e2cd809506e4c8bdf925fa0a3112204ea00eb7fb7bee36231_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_752b35afa1f12b0b97b5a4df1ef1cc1ce076bf23d6fa45acf45b17779a0df270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752b35afa1f12b0b97b5a4df1ef1cc1ce076bf23d6fa45acf45b17779a0df270->enter($__internal_752b35afa1f12b0b97b5a4df1ef1cc1ce076bf23d6fa45acf45b17779a0df270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7722718bd9e2e9b947acd2c3fd1a84c648b593f634bda7fd03fcc901c8c14be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7722718bd9e2e9b947acd2c3fd1a84c648b593f634bda7fd03fcc901c8c14be->enter($__internal_d7722718bd9e2e9b947acd2c3fd1a84c648b593f634bda7fd03fcc901c8c14be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Droit Ptac ";
        
        $__internal_d7722718bd9e2e9b947acd2c3fd1a84c648b593f634bda7fd03fcc901c8c14be->leave($__internal_d7722718bd9e2e9b947acd2c3fd1a84c648b593f634bda7fd03fcc901c8c14be_prof);

        
        $__internal_752b35afa1f12b0b97b5a4df1ef1cc1ce076bf23d6fa45acf45b17779a0df270->leave($__internal_752b35afa1f12b0b97b5a4df1ef1cc1ce076bf23d6fa45acf45b17779a0df270_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d88b9708dc68dbbcba0c7548e467539ac328bd7c98d9606f45f69bc060952094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88b9708dc68dbbcba0c7548e467539ac328bd7c98d9606f45f69bc060952094->enter($__internal_d88b9708dc68dbbcba0c7548e467539ac328bd7c98d9606f45f69bc060952094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1eba624798b21e0350b558961d966e7642be9756c8d4e1696fc9741d3a4ec3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eba624798b21e0350b558961d966e7642be9756c8d4e1696fc9741d3a4ec3e->enter($__internal_e1eba624798b21e0350b558961d966e7642be9756c8d4e1696fc9741d3a4ec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un Droit Ptac</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeDroitPtac", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenreCategorie", array()), 'row');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpPrixMin", array()), 'row');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpPrixMax", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dpDroit", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_droit_ptac\"/>
                        <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e1eba624798b21e0350b558961d966e7642be9756c8d4e1696fc9741d3a4ec3e->leave($__internal_e1eba624798b21e0350b558961d966e7642be9756c8d4e1696fc9741d3a4ec3e_prof);

        
        $__internal_d88b9708dc68dbbcba0c7548e467539ac328bd7c98d9606f45f69bc060952094->leave($__internal_d88b9708dc68dbbcba0c7548e467539ac328bd7c98d9606f45f69bc060952094_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtDroitPtac/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 71,  221 => 66,  213 => 61,  209 => 60,  205 => 59,  201 => 58,  197 => 57,  188 => 51,  182 => 47,  173 => 44,  170 => 43,  165 => 42,  156 => 39,  153 => 38,  148 => 37,  139 => 36,  120 => 31,  109 => 27,  107 => 26,  105 => 25,  99 => 22,  97 => 21,  95 => 20,  93 => 19,  91 => 18,  86 => 15,  79 => 14,  77 => 13,  71 => 12,  67 => 10,  64 => 8,  62 => 7,  53 => 6,  43 => 1,  41 => 34,  39 => 33,  37 => 5,  35 => 4,  33 => 3,  11 => 1,);
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
{% form_theme form.ctGenreCategorie _self %}
{% form_theme form.ctTypeDroitPtac _self %}
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

{% block title %}{{ parent() }} Ajout Droit Ptac {% endblock %}

{% set menu_droit_ptac           = true %}
{% set menu_droit_ptac_create    = true %}

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
                        <h3 class=\"box-title\">Créer un Droit Ptac</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctTypeDroitPtac) }}
                        {{ form_row(form.ctGenreCategorie) }}
                        {{ form_row(form.dpPrixMin) }}
                        {{ form_row(form.dpPrixMax) }}
                        {{ form_row(form.dpDroit) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_droit_ptac\"/>
                        <a href=\"{{ path('droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtDroitPtac/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtDroitPtac\\add.html.twig");
    }
}
