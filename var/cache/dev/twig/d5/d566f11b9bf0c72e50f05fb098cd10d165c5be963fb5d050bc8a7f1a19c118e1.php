<?php

/* AdminBundle:CtMotif:add.html.twig */
class __TwigTemplate_b1b3e47d3fd60223892ccef78deea89175582d3fd735a9f5273a59ce73daa165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotif:add.html.twig", 1);
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
        $__internal_be5b9d8cf9a8f730066833114a084571f1fba8fa4d8e2fe37ed277ca2492b07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5b9d8cf9a8f730066833114a084571f1fba8fa4d8e2fe37ed277ca2492b07b->enter($__internal_be5b9d8cf9a8f730066833114a084571f1fba8fa4d8e2fe37ed277ca2492b07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        $__internal_9fefda63047aa9aba2cc06a29b586b4ecd5715fa4ffc31676fc5d88e4057f258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fefda63047aa9aba2cc06a29b586b4ecd5715fa4ffc31676fc5d88e4057f258->enter($__internal_9fefda63047aa9aba2cc06a29b586b4ecd5715fa4ffc31676fc5d88e4057f258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_type"] = true;
        // line 9
        $context["menu_motif_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be5b9d8cf9a8f730066833114a084571f1fba8fa4d8e2fe37ed277ca2492b07b->leave($__internal_be5b9d8cf9a8f730066833114a084571f1fba8fa4d8e2fe37ed277ca2492b07b_prof);

        
        $__internal_9fefda63047aa9aba2cc06a29b586b4ecd5715fa4ffc31676fc5d88e4057f258->leave($__internal_9fefda63047aa9aba2cc06a29b586b4ecd5715fa4ffc31676fc5d88e4057f258_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b0685e13bb7c9b7448dfa9ecb092f3aef5fca90dc0aa8ecc010a4c1d18c6173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0685e13bb7c9b7448dfa9ecb092f3aef5fca90dc0aa8ecc010a4c1d18c6173->enter($__internal_8b0685e13bb7c9b7448dfa9ecb092f3aef5fca90dc0aa8ecc010a4c1d18c6173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e80e6195fcebeb34f29f6fe2655577c8be444438c5e91c4bb308bab193a431cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80e6195fcebeb34f29f6fe2655577c8be444438c5e91c4bb308bab193a431cf->enter($__internal_e80e6195fcebeb34f29f6fe2655577c8be444438c5e91c4bb308bab193a431cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_e80e6195fcebeb34f29f6fe2655577c8be444438c5e91c4bb308bab193a431cf->leave($__internal_e80e6195fcebeb34f29f6fe2655577c8be444438c5e91c4bb308bab193a431cf_prof);

        
        $__internal_8b0685e13bb7c9b7448dfa9ecb092f3aef5fca90dc0aa8ecc010a4c1d18c6173->leave($__internal_8b0685e13bb7c9b7448dfa9ecb092f3aef5fca90dc0aa8ecc010a4c1d18c6173_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a72ecc0712d6dbfad124d304899b9201e6f701ae48560a185cea12002a4d5e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72ecc0712d6dbfad124d304899b9201e6f701ae48560a185cea12002a4d5e36->enter($__internal_a72ecc0712d6dbfad124d304899b9201e6f701ae48560a185cea12002a4d5e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14c5d10c2e388918096d59c1f24c142c4600f31001ef7b17549e871442e27fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c5d10c2e388918096d59c1f24c142c4600f31001ef7b17549e871442e27fb6->enter($__internal_14c5d10c2e388918096d59c1f24c142c4600f31001ef7b17549e871442e27fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
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
        
        $__internal_14c5d10c2e388918096d59c1f24c142c4600f31001ef7b17549e871442e27fb6->leave($__internal_14c5d10c2e388918096d59c1f24c142c4600f31001ef7b17549e871442e27fb6_prof);

        
        $__internal_a72ecc0712d6dbfad124d304899b9201e6f701ae48560a185cea12002a4d5e36->leave($__internal_a72ecc0712d6dbfad124d304899b9201e6f701ae48560a185cea12002a4d5e36_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotif:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_motif           = true %}
{% set menu_motif_type      = true %}
{% set menu_motif_type_create = true %}

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
                        <h3 class=\"box-title\">Créer une motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.mtfLibelle) }}
                        {{ form_row(form.mtfIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotif:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotif/add.html.twig");
    }
}
