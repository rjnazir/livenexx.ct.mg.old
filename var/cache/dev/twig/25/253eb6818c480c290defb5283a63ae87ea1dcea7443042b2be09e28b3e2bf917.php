<?php

/* @Admin/CtImprimeTech/edit.html.twig */
class __TwigTemplate_29d12d8e57fe64e0397bca0e1764715520db27708196445528ef604edf411292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/edit.html.twig", 1);
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
        $__internal_47b595f7900c3390ecd20931c36e6fa8a4cf0a99d003bea7592007adecaaed24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b595f7900c3390ecd20931c36e6fa8a4cf0a99d003bea7592007adecaaed24->enter($__internal_47b595f7900c3390ecd20931c36e6fa8a4cf0a99d003bea7592007adecaaed24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        $__internal_d412dd70283c33e0a2980c1e6520bd7cab8bfaf9047139c6a4c7afdaeed16a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d412dd70283c33e0a2980c1e6520bd7cab8bfaf9047139c6a4c7afdaeed16a1f->enter($__internal_d412dd70283c33e0a2980c1e6520bd7cab8bfaf9047139c6a4c7afdaeed16a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b595f7900c3390ecd20931c36e6fa8a4cf0a99d003bea7592007adecaaed24->leave($__internal_47b595f7900c3390ecd20931c36e6fa8a4cf0a99d003bea7592007adecaaed24_prof);

        
        $__internal_d412dd70283c33e0a2980c1e6520bd7cab8bfaf9047139c6a4c7afdaeed16a1f->leave($__internal_d412dd70283c33e0a2980c1e6520bd7cab8bfaf9047139c6a4c7afdaeed16a1f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcd812278e49d21ee756a9d2536470f835e0f9fa683a67a779221f150c786010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd812278e49d21ee756a9d2536470f835e0f9fa683a67a779221f150c786010->enter($__internal_fcd812278e49d21ee756a9d2536470f835e0f9fa683a67a779221f150c786010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8465b319a5d8abadff08b28368c98b216e458e0b74e60eb7be4b0a4dfa5b70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8465b319a5d8abadff08b28368c98b216e458e0b74e60eb7be4b0a4dfa5b70e->enter($__internal_a8465b319a5d8abadff08b28368c98b216e458e0b74e60eb7be4b0a4dfa5b70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification imprimé technique ";
        
        $__internal_a8465b319a5d8abadff08b28368c98b216e458e0b74e60eb7be4b0a4dfa5b70e->leave($__internal_a8465b319a5d8abadff08b28368c98b216e458e0b74e60eb7be4b0a4dfa5b70e_prof);

        
        $__internal_fcd812278e49d21ee756a9d2536470f835e0f9fa683a67a779221f150c786010->leave($__internal_fcd812278e49d21ee756a9d2536470f835e0f9fa683a67a779221f150c786010_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7c56ccbeab5780e4ec9a46253af132662856d6f50973461ee7271ec2141f4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c56ccbeab5780e4ec9a46253af132662856d6f50973461ee7271ec2141f4e4->enter($__internal_b7c56ccbeab5780e4ec9a46253af132662856d6f50973461ee7271ec2141f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c52de3d53e516ea7c1d41c45bfddc8cce13dac52586300462672e467b112a29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52de3d53e516ea7c1d41c45bfddc8cce13dac52586300462672e467b112a29e->enter($__internal_c52de3d53e516ea7c1d41c45bfddc8cce13dac52586300462672e467b112a29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_c52de3d53e516ea7c1d41c45bfddc8cce13dac52586300462672e467b112a29e->leave($__internal_c52de3d53e516ea7c1d41c45bfddc8cce13dac52586300462672e467b112a29e_prof);

        
        $__internal_b7c56ccbeab5780e4ec9a46253af132662856d6f50973461ee7271ec2141f4e4->leave($__internal_b7c56ccbeab5780e4ec9a46253af132662856d6f50973461ee7271ec2141f4e4_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  140 => 40,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification imprimé technique {% endblock %}

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Editer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTech/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\edit.html.twig");
    }
}
