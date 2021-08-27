<?php

/* @Admin/CtTypeReception/add.html.twig */
class __TwigTemplate_a7645f88ac5115c78ac63a3f4a397905e6be30825eb26f15ab59cb3690326e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeReception/add.html.twig", 1);
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
        $__internal_0452baaa1ab117d6ff62089a2dbb3b9f1a539fa9390cc069db2cfa3206832a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0452baaa1ab117d6ff62089a2dbb3b9f1a539fa9390cc069db2cfa3206832a42->enter($__internal_0452baaa1ab117d6ff62089a2dbb3b9f1a539fa9390cc069db2cfa3206832a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/add.html.twig"));

        $__internal_730a8f8bb920687732f2cf771ed9fe5c3fe5b555625074325eb1bf4c765793f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_730a8f8bb920687732f2cf771ed9fe5c3fe5b555625074325eb1bf4c765793f0->enter($__internal_730a8f8bb920687732f2cf771ed9fe5c3fe5b555625074325eb1bf4c765793f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeReception/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0452baaa1ab117d6ff62089a2dbb3b9f1a539fa9390cc069db2cfa3206832a42->leave($__internal_0452baaa1ab117d6ff62089a2dbb3b9f1a539fa9390cc069db2cfa3206832a42_prof);

        
        $__internal_730a8f8bb920687732f2cf771ed9fe5c3fe5b555625074325eb1bf4c765793f0->leave($__internal_730a8f8bb920687732f2cf771ed9fe5c3fe5b555625074325eb1bf4c765793f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc234fc7436f2ada439b9eac45f3d6c160b87c65938cdca113fc7140750e7c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc234fc7436f2ada439b9eac45f3d6c160b87c65938cdca113fc7140750e7c3e->enter($__internal_fc234fc7436f2ada439b9eac45f3d6c160b87c65938cdca113fc7140750e7c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9aa76ac89e74518d1408eac888a2fafabcd547fe957cd040e79b7f2d586da244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa76ac89e74518d1408eac888a2fafabcd547fe957cd040e79b7f2d586da244->enter($__internal_9aa76ac89e74518d1408eac888a2fafabcd547fe957cd040e79b7f2d586da244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de réception ";
        
        $__internal_9aa76ac89e74518d1408eac888a2fafabcd547fe957cd040e79b7f2d586da244->leave($__internal_9aa76ac89e74518d1408eac888a2fafabcd547fe957cd040e79b7f2d586da244_prof);

        
        $__internal_fc234fc7436f2ada439b9eac45f3d6c160b87c65938cdca113fc7140750e7c3e->leave($__internal_fc234fc7436f2ada439b9eac45f3d6c160b87c65938cdca113fc7140750e7c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e82234388323f75ec83354628d2fe9b951ab310ff4c280f9efc669573ae095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e82234388323f75ec83354628d2fe9b951ab310ff4c280f9efc669573ae095->enter($__internal_f5e82234388323f75ec83354628d2fe9b951ab310ff4c280f9efc669573ae095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d39c7c5f8cc5e0051bad1d41ee1bd0eec20bb18ab9d835d7f969d85fe0dda83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39c7c5f8cc5e0051bad1d41ee1bd0eec20bb18ab9d835d7f969d85fe0dda83e->enter($__internal_d39c7c5f8cc5e0051bad1d41ee1bd0eec20bb18ab9d835d7f969d85fe0dda83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_d39c7c5f8cc5e0051bad1d41ee1bd0eec20bb18ab9d835d7f969d85fe0dda83e->leave($__internal_d39c7c5f8cc5e0051bad1d41ee1bd0eec20bb18ab9d835d7f969d85fe0dda83e_prof);

        
        $__internal_f5e82234388323f75ec83354628d2fe9b951ab310ff4c280f9efc669573ae095->leave($__internal_f5e82234388323f75ec83354628d2fe9b951ab310ff4c280f9efc669573ae095_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeReception/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type de réception {% endblock %}

{% set menu_reception        = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeReception/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeReception\\add.html.twig");
    }
}
