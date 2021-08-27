<?php

/* AdminBundle:CtImprimeTech:edit.html.twig */
class __TwigTemplate_b074f89a330ca1347f822407432fedc9c81e602f9ecc339ccfb33f528d17c315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtImprimeTech:edit.html.twig", 1);
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
        $__internal_000cecfab042e15972d3ddaaac3c236a6d73bdec364fff7ed3261eaf4c09a656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000cecfab042e15972d3ddaaac3c236a6d73bdec364fff7ed3261eaf4c09a656->enter($__internal_000cecfab042e15972d3ddaaac3c236a6d73bdec364fff7ed3261eaf4c09a656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:edit.html.twig"));

        $__internal_c1442fb8efebcb945600c559eb7bc5d967e7c872c4e6cbc63fd0878fa35ac5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1442fb8efebcb945600c559eb7bc5d967e7c872c4e6cbc63fd0878fa35ac5e1->enter($__internal_c1442fb8efebcb945600c559eb7bc5d967e7c872c4e6cbc63fd0878fa35ac5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtImprimeTech:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_000cecfab042e15972d3ddaaac3c236a6d73bdec364fff7ed3261eaf4c09a656->leave($__internal_000cecfab042e15972d3ddaaac3c236a6d73bdec364fff7ed3261eaf4c09a656_prof);

        
        $__internal_c1442fb8efebcb945600c559eb7bc5d967e7c872c4e6cbc63fd0878fa35ac5e1->leave($__internal_c1442fb8efebcb945600c559eb7bc5d967e7c872c4e6cbc63fd0878fa35ac5e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d2cfb62280b8db1873c93b48d9cead348b0bc3482c501737cbf40e7aec0cb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2cfb62280b8db1873c93b48d9cead348b0bc3482c501737cbf40e7aec0cb1e->enter($__internal_2d2cfb62280b8db1873c93b48d9cead348b0bc3482c501737cbf40e7aec0cb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9acd95ed071443d1bdc7a0db6801b8bdd3eeb3b540ea8252a63624528d5f3cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acd95ed071443d1bdc7a0db6801b8bdd3eeb3b540ea8252a63624528d5f3cef->enter($__internal_9acd95ed071443d1bdc7a0db6801b8bdd3eeb3b540ea8252a63624528d5f3cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique ";
        
        $__internal_9acd95ed071443d1bdc7a0db6801b8bdd3eeb3b540ea8252a63624528d5f3cef->leave($__internal_9acd95ed071443d1bdc7a0db6801b8bdd3eeb3b540ea8252a63624528d5f3cef_prof);

        
        $__internal_2d2cfb62280b8db1873c93b48d9cead348b0bc3482c501737cbf40e7aec0cb1e->leave($__internal_2d2cfb62280b8db1873c93b48d9cead348b0bc3482c501737cbf40e7aec0cb1e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b55985fef11a0bee5222f3330935dd12d93d86fe1efe645f480779d78b1f03f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55985fef11a0bee5222f3330935dd12d93d86fe1efe645f480779d78b1f03f0->enter($__internal_b55985fef11a0bee5222f3330935dd12d93d86fe1efe645f480779d78b1f03f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_901f5d6f6b987bf463730ce899839a55fd7085b039e8ffa8a55f3e3daecfe71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901f5d6f6b987bf463730ce899839a55fd7085b039e8ffa8a55f3e3daecfe71a->enter($__internal_901f5d6f6b987bf463730ce899839a55fd7085b039e8ffa8a55f3e3daecfe71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_901f5d6f6b987bf463730ce899839a55fd7085b039e8ffa8a55f3e3daecfe71a->leave($__internal_901f5d6f6b987bf463730ce899839a55fd7085b039e8ffa8a55f3e3daecfe71a_prof);

        
        $__internal_b55985fef11a0bee5222f3330935dd12d93d86fe1efe645f480779d78b1f03f0->leave($__internal_b55985fef11a0bee5222f3330935dd12d93d86fe1efe645f480779d78b1f03f0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtImprimeTech:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  140 => 40,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification imprimé technique {% endblock %}

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtImprimeTech:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtImprimeTech/edit.html.twig");
    }
}
