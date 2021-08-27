<?php

/* AdminBundle:CtProcesVerbal:add.html.twig */
class __TwigTemplate_183b842cc7a61c4b9d4151028993d5bcd2e9e05cf315576e0561b55799d6d640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:add.html.twig", 1);
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
        $__internal_defd0e14bd150f88acfacb7a5fe79572c219dea6d70225f0d75c84cea1975ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_defd0e14bd150f88acfacb7a5fe79572c219dea6d70225f0d75c84cea1975ae3->enter($__internal_defd0e14bd150f88acfacb7a5fe79572c219dea6d70225f0d75c84cea1975ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        $__internal_2e8ff0ed6c1f35603300ba545172d079d652b7ff90a0f771a7b3e9fd44ca98f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8ff0ed6c1f35603300ba545172d079d652b7ff90a0f771a7b3e9fd44ca98f1->enter($__internal_2e8ff0ed6c1f35603300ba545172d079d652b7ff90a0f771a7b3e9fd44ca98f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_defd0e14bd150f88acfacb7a5fe79572c219dea6d70225f0d75c84cea1975ae3->leave($__internal_defd0e14bd150f88acfacb7a5fe79572c219dea6d70225f0d75c84cea1975ae3_prof);

        
        $__internal_2e8ff0ed6c1f35603300ba545172d079d652b7ff90a0f771a7b3e9fd44ca98f1->leave($__internal_2e8ff0ed6c1f35603300ba545172d079d652b7ff90a0f771a7b3e9fd44ca98f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace960d6ef347bbabb5600cdb7b5e220d51203c5f5329d50ffe792dda6ec4f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace960d6ef347bbabb5600cdb7b5e220d51203c5f5329d50ffe792dda6ec4f96->enter($__internal_ace960d6ef347bbabb5600cdb7b5e220d51203c5f5329d50ffe792dda6ec4f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00bcdce22f5acddf6064e7fc8884643d5a4819d9c814c717f5dd67b7ce49992e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bcdce22f5acddf6064e7fc8884643d5a4819d9c814c717f5dd67b7ce49992e->enter($__internal_00bcdce22f5acddf6064e7fc8884643d5a4819d9c814c717f5dd67b7ce49992e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_00bcdce22f5acddf6064e7fc8884643d5a4819d9c814c717f5dd67b7ce49992e->leave($__internal_00bcdce22f5acddf6064e7fc8884643d5a4819d9c814c717f5dd67b7ce49992e_prof);

        
        $__internal_ace960d6ef347bbabb5600cdb7b5e220d51203c5f5329d50ffe792dda6ec4f96->leave($__internal_ace960d6ef347bbabb5600cdb7b5e220d51203c5f5329d50ffe792dda6ec4f96_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_20a90333e81c508c2118f26ad68691e3e2eca3becb79fa93b26b64bed0c95bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a90333e81c508c2118f26ad68691e3e2eca3becb79fa93b26b64bed0c95bee->enter($__internal_20a90333e81c508c2118f26ad68691e3e2eca3becb79fa93b26b64bed0c95bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5808633dfc92bfe3742111596a80d2a15addacd1c657889379bdaac62a7f9f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5808633dfc92bfe3742111596a80d2a15addacd1c657889379bdaac62a7f9f05->enter($__internal_5808633dfc92bfe3742111596a80d2a15addacd1c657889379bdaac62a7f9f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
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
        
        $__internal_5808633dfc92bfe3742111596a80d2a15addacd1c657889379bdaac62a7f9f05->leave($__internal_5808633dfc92bfe3742111596a80d2a15addacd1c657889379bdaac62a7f9f05_prof);

        
        $__internal_20a90333e81c508c2118f26ad68691e3e2eca3becb79fa93b26b64bed0c95bee->leave($__internal_20a90333e81c508c2118f26ad68691e3e2eca3becb79fa93b26b64bed0c95bee_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout proces verbal {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_create    = true %}

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
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.pvType) }}
                        {{ form_row(form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/add.html.twig");
    }
}
