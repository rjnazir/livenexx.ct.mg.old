<?php

/* @Admin/CtTypeConstatationAvDedouanement/add.html.twig */
class __TwigTemplate_c61e5acbd6f9f32f51535cb6cd06e603b75df3a154c1d5645ff11f9a8209a169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig", 1);
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
        $__internal_05755cb449d0feadc53cfe9dead4bb6e43c1491c6f0b67f3b1db6f7742aafb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05755cb449d0feadc53cfe9dead4bb6e43c1491c6f0b67f3b1db6f7742aafb2c->enter($__internal_05755cb449d0feadc53cfe9dead4bb6e43c1491c6f0b67f3b1db6f7742aafb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        $__internal_421421f99fffc08c49f0e0603767e5b1e39bd82d5d53f8d2e4fde9e3028c7f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421421f99fffc08c49f0e0603767e5b1e39bd82d5d53f8d2e4fde9e3028c7f8a->enter($__internal_421421f99fffc08c49f0e0603767e5b1e39bd82d5d53f8d2e4fde9e3028c7f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded_type"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05755cb449d0feadc53cfe9dead4bb6e43c1491c6f0b67f3b1db6f7742aafb2c->leave($__internal_05755cb449d0feadc53cfe9dead4bb6e43c1491c6f0b67f3b1db6f7742aafb2c_prof);

        
        $__internal_421421f99fffc08c49f0e0603767e5b1e39bd82d5d53f8d2e4fde9e3028c7f8a->leave($__internal_421421f99fffc08c49f0e0603767e5b1e39bd82d5d53f8d2e4fde9e3028c7f8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69e9fe694ab0665d23886534778b04b5e76074f2d6afd26e36a914eefa92ceef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e9fe694ab0665d23886534778b04b5e76074f2d6afd26e36a914eefa92ceef->enter($__internal_69e9fe694ab0665d23886534778b04b5e76074f2d6afd26e36a914eefa92ceef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fa698447073ff511f642c4a3d13d334b91ff88788eb9f1576583c6856d4d0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa698447073ff511f642c4a3d13d334b91ff88788eb9f1576583c6856d4d0f0->enter($__internal_6fa698447073ff511f642c4a3d13d334b91ff88788eb9f1576583c6856d4d0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type constatation ";
        
        $__internal_6fa698447073ff511f642c4a3d13d334b91ff88788eb9f1576583c6856d4d0f0->leave($__internal_6fa698447073ff511f642c4a3d13d334b91ff88788eb9f1576583c6856d4d0f0_prof);

        
        $__internal_69e9fe694ab0665d23886534778b04b5e76074f2d6afd26e36a914eefa92ceef->leave($__internal_69e9fe694ab0665d23886534778b04b5e76074f2d6afd26e36a914eefa92ceef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9494729513f175e4f1957976e988f874d950435efbc971759b285e3bd826642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9494729513f175e4f1957976e988f874d950435efbc971759b285e3bd826642->enter($__internal_f9494729513f175e4f1957976e988f874d950435efbc971759b285e3bd826642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce197ce52862b2c81c0e6a15e94f13d16819827bbecaf80f46d5bf9c7791228d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce197ce52862b2c81c0e6a15e94f13d16819827bbecaf80f46d5bf9c7791228d->enter($__internal_ce197ce52862b2c81c0e6a15e94f13d16819827bbecaf80f46d5bf9c7791228d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadTpLibelle", array()), 'row');
        echo "
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ce197ce52862b2c81c0e6a15e94f13d16819827bbecaf80f46d5bf9c7791228d->leave($__internal_ce197ce52862b2c81c0e6a15e94f13d16819827bbecaf80f46d5bf9c7791228d_prof);

        
        $__internal_f9494729513f175e4f1957976e988f874d950435efbc971759b285e3bd826642->leave($__internal_f9494729513f175e4f1957976e988f874d950435efbc971759b285e3bd826642_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeConstatationAvDedouanement/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type constatation {% endblock %}

{% set menu_const_av_ded_type      = true %}
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
                {{ form_start(form) }}
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer un type de constatation avant dédouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.cadTpLibelle) }}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_const_av_ded_type\"/>
                    <a href=\"{{ path('type_const_av_ded_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeConstatationAvDedouanement/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeConstatationAvDedouanement\\add.html.twig");
    }
}
