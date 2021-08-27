<?php

/* @Admin/CtMotifTarif/edit.html.twig */
class __TwigTemplate_5da87f03c6efa286e1faccc0c2b3e821f127fed7e832aefb8c81f7e44c4f8a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/edit.html.twig", 1);
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
        $__internal_9aa300e2238868301a43df37e3b1621f4fd3c7f56b46478b538fd03f7a0715f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa300e2238868301a43df37e3b1621f4fd3c7f56b46478b538fd03f7a0715f6->enter($__internal_9aa300e2238868301a43df37e3b1621f4fd3c7f56b46478b538fd03f7a0715f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/edit.html.twig"));

        $__internal_fb4ed1e8492c8d9d753ff1615f18efa3a7ea56e68bfb900c2c1d407fd32cd7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4ed1e8492c8d9d753ff1615f18efa3a7ea56e68bfb900c2c1d407fd32cd7ba->enter($__internal_fb4ed1e8492c8d9d753ff1615f18efa3a7ea56e68bfb900c2c1d407fd32cd7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aa300e2238868301a43df37e3b1621f4fd3c7f56b46478b538fd03f7a0715f6->leave($__internal_9aa300e2238868301a43df37e3b1621f4fd3c7f56b46478b538fd03f7a0715f6_prof);

        
        $__internal_fb4ed1e8492c8d9d753ff1615f18efa3a7ea56e68bfb900c2c1d407fd32cd7ba->leave($__internal_fb4ed1e8492c8d9d753ff1615f18efa3a7ea56e68bfb900c2c1d407fd32cd7ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ea3ec31eb43f71ac85e87df89c5908928555628cf17688b4533b1c6d66af38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea3ec31eb43f71ac85e87df89c5908928555628cf17688b4533b1c6d66af38c->enter($__internal_0ea3ec31eb43f71ac85e87df89c5908928555628cf17688b4533b1c6d66af38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfc841bc4085c8499b495fa66f7e51895dcf00a8cf6ea3528c33ba410a33cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc841bc4085c8499b495fa66f7e51895dcf00a8cf6ea3528c33ba410a33cf95->enter($__internal_dfc841bc4085c8499b495fa66f7e51895dcf00a8cf6ea3528c33ba410a33cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de motif ";
        
        $__internal_dfc841bc4085c8499b495fa66f7e51895dcf00a8cf6ea3528c33ba410a33cf95->leave($__internal_dfc841bc4085c8499b495fa66f7e51895dcf00a8cf6ea3528c33ba410a33cf95_prof);

        
        $__internal_0ea3ec31eb43f71ac85e87df89c5908928555628cf17688b4533b1c6d66af38c->leave($__internal_0ea3ec31eb43f71ac85e87df89c5908928555628cf17688b4533b1c6d66af38c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2383bfb6840dee909cfe3c368bd5d0b0aa76ec408dfa47bf85b416add29db353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2383bfb6840dee909cfe3c368bd5d0b0aa76ec408dfa47bf85b416add29db353->enter($__internal_2383bfb6840dee909cfe3c368bd5d0b0aa76ec408dfa47bf85b416add29db353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_777182fcf835aefb55c831171f28c8240e18ee8f3175b0c7e670e0a40aa7fe38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777182fcf835aefb55c831171f28c8240e18ee8f3175b0c7e670e0a40aa7fe38->enter($__internal_777182fcf835aefb55c831171f28c8240e18ee8f3175b0c7e670e0a40aa7fe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_777182fcf835aefb55c831171f28c8240e18ee8f3175b0c7e670e0a40aa7fe38->leave($__internal_777182fcf835aefb55c831171f28c8240e18ee8f3175b0c7e670e0a40aa7fe38_prof);

        
        $__internal_2383bfb6840dee909cfe3c368bd5d0b0aa76ec408dfa47bf85b416add29db353->leave($__internal_2383bfb6840dee909cfe3c368bd5d0b0aa76ec408dfa47bf85b416add29db353_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/edit.html.twig";
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
{% endblock %}", "@Admin/CtMotifTarif/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\edit.html.twig");
    }
}
