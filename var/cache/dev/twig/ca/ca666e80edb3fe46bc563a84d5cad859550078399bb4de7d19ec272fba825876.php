<?php

/* @Admin/CtVisiteExtra/edit.html.twig */
class __TwigTemplate_829d560809aca98c4a129aab5c81e25f1ae6b14cb3f415747cbc9f770def0625 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/edit.html.twig", 1);
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
        $__internal_3287cd3ff79f8f9d9883faa83cb1c89763372ba87252ea25bed0f44c9ab29ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3287cd3ff79f8f9d9883faa83cb1c89763372ba87252ea25bed0f44c9ab29ad5->enter($__internal_3287cd3ff79f8f9d9883faa83cb1c89763372ba87252ea25bed0f44c9ab29ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        $__internal_bd1131b779b356517be8ec8152db036654cd98260aca9c24ef8192135bf13a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1131b779b356517be8ec8152db036654cd98260aca9c24ef8192135bf13a67->enter($__internal_bd1131b779b356517be8ec8152db036654cd98260aca9c24ef8192135bf13a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3287cd3ff79f8f9d9883faa83cb1c89763372ba87252ea25bed0f44c9ab29ad5->leave($__internal_3287cd3ff79f8f9d9883faa83cb1c89763372ba87252ea25bed0f44c9ab29ad5_prof);

        
        $__internal_bd1131b779b356517be8ec8152db036654cd98260aca9c24ef8192135bf13a67->leave($__internal_bd1131b779b356517be8ec8152db036654cd98260aca9c24ef8192135bf13a67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b35fa8d89fc0c38daaeef49bf9e3b5a614847fa8c63a3332007c96813890f752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35fa8d89fc0c38daaeef49bf9e3b5a614847fa8c63a3332007c96813890f752->enter($__internal_b35fa8d89fc0c38daaeef49bf9e3b5a614847fa8c63a3332007c96813890f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa394cf38349f675d9c9dae5881c3ef063dcdc2fb2d11a983e5ecd450e7a3b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa394cf38349f675d9c9dae5881c3ef063dcdc2fb2d11a983e5ecd450e7a3b19->enter($__internal_aa394cf38349f675d9c9dae5881c3ef063dcdc2fb2d11a983e5ecd450e7a3b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite extra ";
        
        $__internal_aa394cf38349f675d9c9dae5881c3ef063dcdc2fb2d11a983e5ecd450e7a3b19->leave($__internal_aa394cf38349f675d9c9dae5881c3ef063dcdc2fb2d11a983e5ecd450e7a3b19_prof);

        
        $__internal_b35fa8d89fc0c38daaeef49bf9e3b5a614847fa8c63a3332007c96813890f752->leave($__internal_b35fa8d89fc0c38daaeef49bf9e3b5a614847fa8c63a3332007c96813890f752_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f7270b94f1c6160081b04660ffaef1144c9cfaf3230b76dead159e33681561c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7270b94f1c6160081b04660ffaef1144c9cfaf3230b76dead159e33681561c->enter($__internal_6f7270b94f1c6160081b04660ffaef1144c9cfaf3230b76dead159e33681561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29da64d41b1cb9ff618e6fff2b05ee780e38914fa0c672749890d4039b40cbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29da64d41b1cb9ff618e6fff2b05ee780e38914fa0c672749890d4039b40cbd3->enter($__internal_29da64d41b1cb9ff618e6fff2b05ee780e38914fa0c672749890d4039b40cbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_29da64d41b1cb9ff618e6fff2b05ee780e38914fa0c672749890d4039b40cbd3->leave($__internal_29da64d41b1cb9ff618e6fff2b05ee780e38914fa0c672749890d4039b40cbd3_prof);

        
        $__internal_6f7270b94f1c6160081b04660ffaef1144c9cfaf3230b76dead159e33681561c->leave($__internal_6f7270b94f1c6160081b04660ffaef1144c9cfaf3230b76dead159e33681561c_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  131 => 35,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Visite extra {% endblock %}

{% set menu_visite_extra = true %}

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtra/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\edit.html.twig");
    }
}
