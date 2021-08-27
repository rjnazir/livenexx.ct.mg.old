<?php

/* AdminBundle:CtMotifTarif:edit.html.twig */
class __TwigTemplate_ac76041dfd5db0129f89585c2ca94097e4e083329b040cfdbfc91445ee383d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotifTarif:edit.html.twig", 1);
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
        $__internal_6153bd2046696c97ce4e71af6de25be2670f2c83d0d7312f9f64961d6ed91344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6153bd2046696c97ce4e71af6de25be2670f2c83d0d7312f9f64961d6ed91344->enter($__internal_6153bd2046696c97ce4e71af6de25be2670f2c83d0d7312f9f64961d6ed91344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:edit.html.twig"));

        $__internal_9de7ddbc113d4b9ccab2defb2a054a0e4d9b5ef6b0d033600af3113479fae746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de7ddbc113d4b9ccab2defb2a054a0e4d9b5ef6b0d033600af3113479fae746->enter($__internal_9de7ddbc113d4b9ccab2defb2a054a0e4d9b5ef6b0d033600af3113479fae746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6153bd2046696c97ce4e71af6de25be2670f2c83d0d7312f9f64961d6ed91344->leave($__internal_6153bd2046696c97ce4e71af6de25be2670f2c83d0d7312f9f64961d6ed91344_prof);

        
        $__internal_9de7ddbc113d4b9ccab2defb2a054a0e4d9b5ef6b0d033600af3113479fae746->leave($__internal_9de7ddbc113d4b9ccab2defb2a054a0e4d9b5ef6b0d033600af3113479fae746_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e8eb5409a2454f9bb2ef53e9c4c40315cdf9026f4c8c8ae40e327303ca8a686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8eb5409a2454f9bb2ef53e9c4c40315cdf9026f4c8c8ae40e327303ca8a686->enter($__internal_9e8eb5409a2454f9bb2ef53e9c4c40315cdf9026f4c8c8ae40e327303ca8a686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f039c90400413330e9723f7aa1bc891cb7383cc8a7db0400b70d81c1e6eef8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f039c90400413330e9723f7aa1bc891cb7383cc8a7db0400b70d81c1e6eef8c0->enter($__internal_f039c90400413330e9723f7aa1bc891cb7383cc8a7db0400b70d81c1e6eef8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de motif ";
        
        $__internal_f039c90400413330e9723f7aa1bc891cb7383cc8a7db0400b70d81c1e6eef8c0->leave($__internal_f039c90400413330e9723f7aa1bc891cb7383cc8a7db0400b70d81c1e6eef8c0_prof);

        
        $__internal_9e8eb5409a2454f9bb2ef53e9c4c40315cdf9026f4c8c8ae40e327303ca8a686->leave($__internal_9e8eb5409a2454f9bb2ef53e9c4c40315cdf9026f4c8c8ae40e327303ca8a686_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_43c7703e0fb8784ecf31ec65037e610ee8fce28512f608b2b6c451587d9c5ccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c7703e0fb8784ecf31ec65037e610ee8fce28512f608b2b6c451587d9c5ccd->enter($__internal_43c7703e0fb8784ecf31ec65037e610ee8fce28512f608b2b6c451587d9c5ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5c58dfc3f8183b4c402229610f1d2cd6ac1bfacbad90a9e041d6f9274a6b95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c58dfc3f8183b4c402229610f1d2cd6ac1bfacbad90a9e041d6f9274a6b95d->enter($__internal_a5c58dfc3f8183b4c402229610f1d2cd6ac1bfacbad90a9e041d6f9274a6b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mtfTrfPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a5c58dfc3f8183b4c402229610f1d2cd6ac1bfacbad90a9e041d6f9274a6b95d->leave($__internal_a5c58dfc3f8183b4c402229610f1d2cd6ac1bfacbad90a9e041d6f9274a6b95d_prof);

        
        $__internal_43c7703e0fb8784ecf31ec65037e610ee8fce28512f608b2b6c451587d9c5ccd->leave($__internal_43c7703e0fb8784ecf31ec65037e610ee8fce28512f608b2b6c451587d9c5ccd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotifTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de motif {% endblock %}

{% set menu_motif_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif motif</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctMotif) }}
                        {{ form_row(edit_form.mtfTrfPrix) }}
                        {#{{ form_row(edit_form.mtfTrfDate) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_motif\"/>
                        <a href=\"{{ path('motif_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMotifTarif:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotifTarif/edit.html.twig");
    }
}
