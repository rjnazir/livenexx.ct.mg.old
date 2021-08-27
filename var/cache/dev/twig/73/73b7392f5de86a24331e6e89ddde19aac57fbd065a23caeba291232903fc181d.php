<?php

/* @Admin/CtUtilisation/add.html.twig */
class __TwigTemplate_a20516a1b6517181ddf311e9ad43c2283c5b904966a70ae82e8a04bde642f3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/add.html.twig", 1);
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
        $__internal_d74513d5781bc967e04ea5ed2bda21eb99d3c43d20c3a0ca6f0dd75542cfaeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74513d5781bc967e04ea5ed2bda21eb99d3c43d20c3a0ca6f0dd75542cfaeed->enter($__internal_d74513d5781bc967e04ea5ed2bda21eb99d3c43d20c3a0ca6f0dd75542cfaeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        $__internal_f6583dd8970a518f4d6f5c59076a520c0a45200e1a2fbda3b43281fa0b5ba03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6583dd8970a518f4d6f5c59076a520c0a45200e1a2fbda3b43281fa0b5ba03b->enter($__internal_f6583dd8970a518f4d6f5c59076a520c0a45200e1a2fbda3b43281fa0b5ba03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74513d5781bc967e04ea5ed2bda21eb99d3c43d20c3a0ca6f0dd75542cfaeed->leave($__internal_d74513d5781bc967e04ea5ed2bda21eb99d3c43d20c3a0ca6f0dd75542cfaeed_prof);

        
        $__internal_f6583dd8970a518f4d6f5c59076a520c0a45200e1a2fbda3b43281fa0b5ba03b->leave($__internal_f6583dd8970a518f4d6f5c59076a520c0a45200e1a2fbda3b43281fa0b5ba03b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64f47ee0cd0f2f770f51434b02dfae9e1568fc19e200cd83137eb449545bfd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f47ee0cd0f2f770f51434b02dfae9e1568fc19e200cd83137eb449545bfd9a->enter($__internal_64f47ee0cd0f2f770f51434b02dfae9e1568fc19e200cd83137eb449545bfd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fab6c8ddda8e5e1fc882c91f75a597bc6ee2429286284392c97eceab2c0db442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab6c8ddda8e5e1fc882c91f75a597bc6ee2429286284392c97eceab2c0db442->enter($__internal_fab6c8ddda8e5e1fc882c91f75a597bc6ee2429286284392c97eceab2c0db442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_fab6c8ddda8e5e1fc882c91f75a597bc6ee2429286284392c97eceab2c0db442->leave($__internal_fab6c8ddda8e5e1fc882c91f75a597bc6ee2429286284392c97eceab2c0db442_prof);

        
        $__internal_64f47ee0cd0f2f770f51434b02dfae9e1568fc19e200cd83137eb449545bfd9a->leave($__internal_64f47ee0cd0f2f770f51434b02dfae9e1568fc19e200cd83137eb449545bfd9a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a9cefb12d6c0b9c33f58497ccf9f383cf47e7483ac66a718ca5212307d3892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a9cefb12d6c0b9c33f58497ccf9f383cf47e7483ac66a718ca5212307d3892->enter($__internal_c8a9cefb12d6c0b9c33f58497ccf9f383cf47e7483ac66a718ca5212307d3892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de4ea09dad8691b47e759311428e6e68023ca91da7ea24833e5bccaea7265f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4ea09dad8691b47e759311428e6e68023ca91da7ea24833e5bccaea7265f98->enter($__internal_de4ea09dad8691b47e759311428e6e68023ca91da7ea24833e5bccaea7265f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
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
        
        $__internal_de4ea09dad8691b47e759311428e6e68023ca91da7ea24833e5bccaea7265f98->leave($__internal_de4ea09dad8691b47e759311428e6e68023ca91da7ea24833e5bccaea7265f98_prof);

        
        $__internal_c8a9cefb12d6c0b9c33f58497ccf9f383cf47e7483ac66a718ca5212307d3892->leave($__internal_c8a9cefb12d6c0b9c33f58497ccf9f383cf47e7483ac66a718ca5212307d3892_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUtilisation/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\add.html.twig");
    }
}
