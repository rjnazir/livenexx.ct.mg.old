<?php

/* @Admin/CtProcesVerbal/add.html.twig */
class __TwigTemplate_0cf6cbc48ca912e051c4367abf0f824e059052a192e64e8e4998b10c9c3260de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/add.html.twig", 1);
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
        $__internal_4838472a1642557202d94ef5ad06a7c265ad43abff61bcffd947bf4bad38ffb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4838472a1642557202d94ef5ad06a7c265ad43abff61bcffd947bf4bad38ffb0->enter($__internal_4838472a1642557202d94ef5ad06a7c265ad43abff61bcffd947bf4bad38ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        $__internal_5af25841b69455b9d6ec8c8d88ee44e5e031efbcecfc7eefa583fcc3fdb0aa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af25841b69455b9d6ec8c8d88ee44e5e031efbcecfc7eefa583fcc3fdb0aa3c->enter($__internal_5af25841b69455b9d6ec8c8d88ee44e5e031efbcecfc7eefa583fcc3fdb0aa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4838472a1642557202d94ef5ad06a7c265ad43abff61bcffd947bf4bad38ffb0->leave($__internal_4838472a1642557202d94ef5ad06a7c265ad43abff61bcffd947bf4bad38ffb0_prof);

        
        $__internal_5af25841b69455b9d6ec8c8d88ee44e5e031efbcecfc7eefa583fcc3fdb0aa3c->leave($__internal_5af25841b69455b9d6ec8c8d88ee44e5e031efbcecfc7eefa583fcc3fdb0aa3c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_01def035c8b45b62ed2c101c5a1d1a18c941ab5393c5195e7d020ecb0d77d00c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01def035c8b45b62ed2c101c5a1d1a18c941ab5393c5195e7d020ecb0d77d00c->enter($__internal_01def035c8b45b62ed2c101c5a1d1a18c941ab5393c5195e7d020ecb0d77d00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbf4a0a33680254409ce52198943cbf8aaf3fd6acc835653cea0327726461018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf4a0a33680254409ce52198943cbf8aaf3fd6acc835653cea0327726461018->enter($__internal_dbf4a0a33680254409ce52198943cbf8aaf3fd6acc835653cea0327726461018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_dbf4a0a33680254409ce52198943cbf8aaf3fd6acc835653cea0327726461018->leave($__internal_dbf4a0a33680254409ce52198943cbf8aaf3fd6acc835653cea0327726461018_prof);

        
        $__internal_01def035c8b45b62ed2c101c5a1d1a18c941ab5393c5195e7d020ecb0d77d00c->leave($__internal_01def035c8b45b62ed2c101c5a1d1a18c941ab5393c5195e7d020ecb0d77d00c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2e8103efcb031885fd15c2919cd868e6020c0e05f157b489bd8ec1211b56063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e8103efcb031885fd15c2919cd868e6020c0e05f157b489bd8ec1211b56063->enter($__internal_d2e8103efcb031885fd15c2919cd868e6020c0e05f157b489bd8ec1211b56063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c500e18f7c757ed2533529fb38a095eba7c8002536177670cb9891b66a545ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c500e18f7c757ed2533529fb38a095eba7c8002536177670cb9891b66a545ea8->enter($__internal_c500e18f7c757ed2533529fb38a095eba7c8002536177670cb9891b66a545ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c500e18f7c757ed2533529fb38a095eba7c8002536177670cb9891b66a545ea8->leave($__internal_c500e18f7c757ed2533529fb38a095eba7c8002536177670cb9891b66a545ea8_prof);

        
        $__internal_d2e8103efcb031885fd15c2919cd868e6020c0e05f157b489bd8ec1211b56063->leave($__internal_d2e8103efcb031885fd15c2919cd868e6020c0e05f157b489bd8ec1211b56063_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/add.html.twig";
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
{% endblock %}", "@Admin/CtProcesVerbal/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\add.html.twig");
    }
}
