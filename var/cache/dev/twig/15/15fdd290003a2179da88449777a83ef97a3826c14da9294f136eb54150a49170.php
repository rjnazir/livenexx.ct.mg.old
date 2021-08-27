<?php

/* @Admin/CtUsage/edit.html.twig */
class __TwigTemplate_bfda9fb30cfe97e50fcd067e2696ea3277b62cdafbcdffbbaba3a0759efe7241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUsage/edit.html.twig", 1);
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
        $__internal_d4b0be17e069e36b190a9de4e6bd3151d76dd3bbab13ee3ce6a26ee89e769181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b0be17e069e36b190a9de4e6bd3151d76dd3bbab13ee3ce6a26ee89e769181->enter($__internal_d4b0be17e069e36b190a9de4e6bd3151d76dd3bbab13ee3ce6a26ee89e769181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/edit.html.twig"));

        $__internal_c04881e7459cbae2c429ceb8962d7b8b37f3b8368f5f9cdd8b05dc660671cb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04881e7459cbae2c429ceb8962d7b8b37f3b8368f5f9cdd8b05dc660671cb6c->enter($__internal_c04881e7459cbae2c429ceb8962d7b8b37f3b8368f5f9cdd8b05dc660671cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUsage/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeUsage", array()), array(0 => $this));
        // line 8
        $context["menu_usage"] = true;
        // line 9
        $context["menu_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b0be17e069e36b190a9de4e6bd3151d76dd3bbab13ee3ce6a26ee89e769181->leave($__internal_d4b0be17e069e36b190a9de4e6bd3151d76dd3bbab13ee3ce6a26ee89e769181_prof);

        
        $__internal_c04881e7459cbae2c429ceb8962d7b8b37f3b8368f5f9cdd8b05dc660671cb6c->leave($__internal_c04881e7459cbae2c429ceb8962d7b8b37f3b8368f5f9cdd8b05dc660671cb6c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d7531e204eddf45320952aec4889229c20d50b3e1b5a95d5610c3e5fd5a0b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7531e204eddf45320952aec4889229c20d50b3e1b5a95d5610c3e5fd5a0b77->enter($__internal_1d7531e204eddf45320952aec4889229c20d50b3e1b5a95d5610c3e5fd5a0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e6bcbc196dfa1ee54c2c31f8a8d58e4330923893b96ad3a3afdaa21a9dcc6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6bcbc196dfa1ee54c2c31f8a8d58e4330923893b96ad3a3afdaa21a9dcc6cb->enter($__internal_9e6bcbc196dfa1ee54c2c31f8a8d58e4330923893b96ad3a3afdaa21a9dcc6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Usage ";
        
        $__internal_9e6bcbc196dfa1ee54c2c31f8a8d58e4330923893b96ad3a3afdaa21a9dcc6cb->leave($__internal_9e6bcbc196dfa1ee54c2c31f8a8d58e4330923893b96ad3a3afdaa21a9dcc6cb_prof);

        
        $__internal_1d7531e204eddf45320952aec4889229c20d50b3e1b5a95d5610c3e5fd5a0b77->leave($__internal_1d7531e204eddf45320952aec4889229c20d50b3e1b5a95d5610c3e5fd5a0b77_prof);

    }

    // line 11
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_156b43a6ad44b64b10d533985ed5540030eaa4f6a5ac0c57910f1afa15151a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156b43a6ad44b64b10d533985ed5540030eaa4f6a5ac0c57910f1afa15151a00->enter($__internal_156b43a6ad44b64b10d533985ed5540030eaa4f6a5ac0c57910f1afa15151a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_42752408a0f818c666cd28bf260a285c6c50c2ddb26ba9754062f101014e3bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42752408a0f818c666cd28bf260a285c6c50c2ddb26ba9754062f101014e3bd4->enter($__internal_42752408a0f818c666cd28bf260a285c6c50c2ddb26ba9754062f101014e3bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_42752408a0f818c666cd28bf260a285c6c50c2ddb26ba9754062f101014e3bd4->leave($__internal_42752408a0f818c666cd28bf260a285c6c50c2ddb26ba9754062f101014e3bd4_prof);

        
        $__internal_156b43a6ad44b64b10d533985ed5540030eaa4f6a5ac0c57910f1afa15151a00->leave($__internal_156b43a6ad44b64b10d533985ed5540030eaa4f6a5ac0c57910f1afa15151a00_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d77d8745c4435c933477fac4b58450b147fd4af58fdbabdb2a662e0a83e11078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77d8745c4435c933477fac4b58450b147fd4af58fdbabdb2a662e0a83e11078->enter($__internal_d77d8745c4435c933477fac4b58450b147fd4af58fdbabdb2a662e0a83e11078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fcb358f74fa81dade74605936eca690ef0995aceab30100544220b0e365e846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcb358f74fa81dade74605936eca690ef0995aceab30100544220b0e365e846->enter($__internal_1fcb358f74fa81dade74605936eca690ef0995aceab30100544220b0e365e846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgLibelle", array()), 'row');
        echo "
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usgValidite", array()), 'row');
        echo "
                    </div>

                    <div class=\"hide\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeUsage", array()), 'row');
        echo "</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1fcb358f74fa81dade74605936eca690ef0995aceab30100544220b0e365e846->leave($__internal_1fcb358f74fa81dade74605936eca690ef0995aceab30100544220b0e365e846_prof);

        
        $__internal_d77d8745c4435c933477fac4b58450b147fd4af58fdbabdb2a662e0a83e11078->leave($__internal_d77d8745c4435c933477fac4b58450b147fd4af58fdbabdb2a662e0a83e11078_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUsage/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}
{% form_theme edit_form.ctTypeUsage _self %}

{% block title %}{{ parent() }} Modification Usage {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.usgLibelle) }}
                        {{ form_row(edit_form.usgValidite) }}
                    </div>

                    <div class=\"hide\">{{ form_row(edit_form.ctTypeUsage) }}</div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_usage\"/>
                        <a href=\"{{ path('usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUsage/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUsage\\edit.html.twig");
    }
}
