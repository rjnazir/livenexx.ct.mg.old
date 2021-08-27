<?php

/* AdminBundle:CtAnomalie:edit.html.twig */
class __TwigTemplate_d429161cd2ddc8aae9e4edf6226bbbc503fabb94cce29bdfe3beef7503ac1199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:edit.html.twig", 1);
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
        $__internal_e61bc87d12b54dcda9afd92bb34cdf2060b8849097617f69294bb1bd90e56665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61bc87d12b54dcda9afd92bb34cdf2060b8849097617f69294bb1bd90e56665->enter($__internal_e61bc87d12b54dcda9afd92bb34cdf2060b8849097617f69294bb1bd90e56665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        $__internal_5dab569432ce1bef23001a57ef3f2a1fb4862cab8f0664fa87a14d8994104008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dab569432ce1bef23001a57ef3f2a1fb4862cab8f0664fa87a14d8994104008->enter($__internal_5dab569432ce1bef23001a57ef3f2a1fb4862cab8f0664fa87a14d8994104008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61bc87d12b54dcda9afd92bb34cdf2060b8849097617f69294bb1bd90e56665->leave($__internal_e61bc87d12b54dcda9afd92bb34cdf2060b8849097617f69294bb1bd90e56665_prof);

        
        $__internal_5dab569432ce1bef23001a57ef3f2a1fb4862cab8f0664fa87a14d8994104008->leave($__internal_5dab569432ce1bef23001a57ef3f2a1fb4862cab8f0664fa87a14d8994104008_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c678a73f52cd97975b156a4e25f52f9d4ba81a369e758dab661409385d6995c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c678a73f52cd97975b156a4e25f52f9d4ba81a369e758dab661409385d6995c6->enter($__internal_c678a73f52cd97975b156a4e25f52f9d4ba81a369e758dab661409385d6995c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8662fbeed0f50508030fbe7673ecf01d9969e74539a1800d3c36740b17d8ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8662fbeed0f50508030fbe7673ecf01d9969e74539a1800d3c36740b17d8ab4->enter($__internal_e8662fbeed0f50508030fbe7673ecf01d9969e74539a1800d3c36740b17d8ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_e8662fbeed0f50508030fbe7673ecf01d9969e74539a1800d3c36740b17d8ab4->leave($__internal_e8662fbeed0f50508030fbe7673ecf01d9969e74539a1800d3c36740b17d8ab4_prof);

        
        $__internal_c678a73f52cd97975b156a4e25f52f9d4ba81a369e758dab661409385d6995c6->leave($__internal_c678a73f52cd97975b156a4e25f52f9d4ba81a369e758dab661409385d6995c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e107d0fad7432af022c483689da043e570a80b03749e04162bb7481e2477a868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e107d0fad7432af022c483689da043e570a80b03749e04162bb7481e2477a868->enter($__internal_e107d0fad7432af022c483689da043e570a80b03749e04162bb7481e2477a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2482aea7029ebb42351c4de923db89a9d1a07041d3538ed6efdfb0ec5fa5bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2482aea7029ebb42351c4de923db89a9d1a07041d3538ed6efdfb0ec5fa5bb2->enter($__internal_c2482aea7029ebb42351c4de923db89a9d1a07041d3538ed6efdfb0ec5fa5bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_c2482aea7029ebb42351c4de923db89a9d1a07041d3538ed6efdfb0ec5fa5bb2->leave($__internal_c2482aea7029ebb42351c4de923db89a9d1a07041d3538ed6efdfb0ec5fa5bb2_prof);

        
        $__internal_e107d0fad7432af022c483689da043e570a80b03749e04162bb7481e2477a868->leave($__internal_e107d0fad7432af022c483689da043e570a80b03749e04162bb7481e2477a868_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Anomalie {% endblock %}

{% set menu_anomalie        = true %}
{% set menu_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctAnomalieType) }}
                        {{ form_row(edit_form.anmlLibelle) }}
                        {{ form_row(edit_form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtAnomalie:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/edit.html.twig");
    }
}
