<?php

/* @Admin/CtConstatationAvDedouanementCarac/add.html.twig */
class __TwigTemplate_8ad108c5393af645ba2245973795dca24d5e527d6395542e8bbf2aad7404e43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", 1);
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
        $__internal_9e33e050f340121e04a1755407f3ddc3baf852da835ca7cdf1b543b57b1102e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e33e050f340121e04a1755407f3ddc3baf852da835ca7cdf1b543b57b1102e2->enter($__internal_9e33e050f340121e04a1755407f3ddc3baf852da835ca7cdf1b543b57b1102e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        $__internal_ad3859f3286f574e865f6740b9b340c67147fd2c0f98ee62af06d2df05a7c13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3859f3286f574e865f6740b9b340c67147fd2c0f98ee62af06d2df05a7c13f->enter($__internal_ad3859f3286f574e865f6740b9b340c67147fd2c0f98ee62af06d2df05a7c13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e33e050f340121e04a1755407f3ddc3baf852da835ca7cdf1b543b57b1102e2->leave($__internal_9e33e050f340121e04a1755407f3ddc3baf852da835ca7cdf1b543b57b1102e2_prof);

        
        $__internal_ad3859f3286f574e865f6740b9b340c67147fd2c0f98ee62af06d2df05a7c13f->leave($__internal_ad3859f3286f574e865f6740b9b340c67147fd2c0f98ee62af06d2df05a7c13f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16e4496666775e6b421bd495549e1ec812f9aa55c69ae075cea0eb9e160caa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16e4496666775e6b421bd495549e1ec812f9aa55c69ae075cea0eb9e160caa43->enter($__internal_16e4496666775e6b421bd495549e1ec812f9aa55c69ae075cea0eb9e160caa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53921412294fe7f28690bd9ffa9431d72d8406cf5c431a46e5262bec906fcc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53921412294fe7f28690bd9ffa9431d72d8406cf5c431a46e5262bec906fcc6e->enter($__internal_53921412294fe7f28690bd9ffa9431d72d8406cf5c431a46e5262bec906fcc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_53921412294fe7f28690bd9ffa9431d72d8406cf5c431a46e5262bec906fcc6e->leave($__internal_53921412294fe7f28690bd9ffa9431d72d8406cf5c431a46e5262bec906fcc6e_prof);

        
        $__internal_16e4496666775e6b421bd495549e1ec812f9aa55c69ae075cea0eb9e160caa43->leave($__internal_16e4496666775e6b421bd495549e1ec812f9aa55c69ae075cea0eb9e160caa43_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd25081ed6de98793e1957b0bec148d75f67966db1a66f0a912819f004c85e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd25081ed6de98793e1957b0bec148d75f67966db1a66f0a912819f004c85e62->enter($__internal_fd25081ed6de98793e1957b0bec148d75f67966db1a66f0a912819f004c85e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54f7ba76b1fc79b4c9bd2be6b0c4367822ee20343e11acaafcfe39bf2181b879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f7ba76b1fc79b4c9bd2be6b0c4367822ee20343e11acaafcfe39bf2181b879->enter($__internal_54f7ba76b1fc79b4c9bd2be6b0c4367822ee20343e11acaafcfe39bf2181b879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
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
        
        $__internal_54f7ba76b1fc79b4c9bd2be6b0c4367822ee20343e11acaafcfe39bf2181b879->leave($__internal_54f7ba76b1fc79b4c9bd2be6b0c4367822ee20343e11acaafcfe39bf2181b879_prof);

        
        $__internal_fd25081ed6de98793e1957b0bec148d75f67966db1a66f0a912819f004c85e62->leave($__internal_fd25081ed6de98793e1957b0bec148d75f67966db1a66f0a912819f004c85e62_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanementCarac/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtConstatationAvDedouanementCarac/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanementCarac\\add.html.twig");
    }
}
