<?php

/* AdminBundle:CtAnomalie:add.html.twig */
class __TwigTemplate_97bfe8451f42ffc3f73df4db85c3b577ee404625987a8a65ed9649127d19ee73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:add.html.twig", 1);
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
        $__internal_83fe110911d3404529a17e6c6dc235959f38c10ef0de1491c7c8e25dc32e693e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fe110911d3404529a17e6c6dc235959f38c10ef0de1491c7c8e25dc32e693e->enter($__internal_83fe110911d3404529a17e6c6dc235959f38c10ef0de1491c7c8e25dc32e693e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:add.html.twig"));

        $__internal_bf3f8691e156bb718dee6137ad415f0473c3777c1bf28de9e7446338f9df9111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3f8691e156bb718dee6137ad415f0473c3777c1bf28de9e7446338f9df9111->enter($__internal_bf3f8691e156bb718dee6137ad415f0473c3777c1bf28de9e7446338f9df9111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83fe110911d3404529a17e6c6dc235959f38c10ef0de1491c7c8e25dc32e693e->leave($__internal_83fe110911d3404529a17e6c6dc235959f38c10ef0de1491c7c8e25dc32e693e_prof);

        
        $__internal_bf3f8691e156bb718dee6137ad415f0473c3777c1bf28de9e7446338f9df9111->leave($__internal_bf3f8691e156bb718dee6137ad415f0473c3777c1bf28de9e7446338f9df9111_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e0eeb4580dedcf1d6114650b9bf5a291c6610d1805ee924d2ba0d515effc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e0eeb4580dedcf1d6114650b9bf5a291c6610d1805ee924d2ba0d515effc83->enter($__internal_c4e0eeb4580dedcf1d6114650b9bf5a291c6610d1805ee924d2ba0d515effc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_555145aae5a87649f7aee6b4e448fb94f705e81acf2e0ee2be62b83d46c2976c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555145aae5a87649f7aee6b4e448fb94f705e81acf2e0ee2be62b83d46c2976c->enter($__internal_555145aae5a87649f7aee6b4e448fb94f705e81acf2e0ee2be62b83d46c2976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Anomalie ";
        
        $__internal_555145aae5a87649f7aee6b4e448fb94f705e81acf2e0ee2be62b83d46c2976c->leave($__internal_555145aae5a87649f7aee6b4e448fb94f705e81acf2e0ee2be62b83d46c2976c_prof);

        
        $__internal_c4e0eeb4580dedcf1d6114650b9bf5a291c6610d1805ee924d2ba0d515effc83->leave($__internal_c4e0eeb4580dedcf1d6114650b9bf5a291c6610d1805ee924d2ba0d515effc83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39bc607c0421d759443608bb26e14f71d7a4c3d828ce7935fcd261b1b3404bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39bc607c0421d759443608bb26e14f71d7a4c3d828ce7935fcd261b1b3404bf3->enter($__internal_39bc607c0421d759443608bb26e14f71d7a4c3d828ce7935fcd261b1b3404bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40f0dffc3051c628ca700a784f85ba996805e6b40ad1dad3de5faa10d9629510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f0dffc3051c628ca700a784f85ba996805e6b40ad1dad3de5faa10d9629510->enter($__internal_40f0dffc3051c628ca700a784f85ba996805e6b40ad1dad3de5faa10d9629510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_40f0dffc3051c628ca700a784f85ba996805e6b40ad1dad3de5faa10d9629510->leave($__internal_40f0dffc3051c628ca700a784f85ba996805e6b40ad1dad3de5faa10d9629510_prof);

        
        $__internal_39bc607c0421d759443608bb26e14f71d7a4c3d828ce7935fcd261b1b3404bf3->leave($__internal_39bc607c0421d759443608bb26e14f71d7a4c3d828ce7935fcd261b1b3404bf3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Anomalie {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.ctAnomalieType) }}
                        {{ form_row(form.anmlLibelle) }}
                        {{ form_row(form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtAnomalie:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/add.html.twig");
    }
}
