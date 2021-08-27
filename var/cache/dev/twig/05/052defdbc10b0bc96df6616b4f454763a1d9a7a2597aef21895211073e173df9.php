<?php

/* @Admin/CtProvince/edit.html.twig */
class __TwigTemplate_3f2e72cf86730c2e62736e913631f7b9f7fda1284f9985e942a81b4f75d00c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/edit.html.twig", 1);
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
        $__internal_ffa91dbf61d80b964fb2babc1491d7c7ff30a1066a8b99eb3d0d9423dc9c904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa91dbf61d80b964fb2babc1491d7c7ff30a1066a8b99eb3d0d9423dc9c904e->enter($__internal_ffa91dbf61d80b964fb2babc1491d7c7ff30a1066a8b99eb3d0d9423dc9c904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        $__internal_c506d4a8aadc908198ca7a5e386dd1d87a2fa233a98099f16838442d9ca17a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c506d4a8aadc908198ca7a5e386dd1d87a2fa233a98099f16838442d9ca17a73->enter($__internal_c506d4a8aadc908198ca7a5e386dd1d87a2fa233a98099f16838442d9ca17a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa91dbf61d80b964fb2babc1491d7c7ff30a1066a8b99eb3d0d9423dc9c904e->leave($__internal_ffa91dbf61d80b964fb2babc1491d7c7ff30a1066a8b99eb3d0d9423dc9c904e_prof);

        
        $__internal_c506d4a8aadc908198ca7a5e386dd1d87a2fa233a98099f16838442d9ca17a73->leave($__internal_c506d4a8aadc908198ca7a5e386dd1d87a2fa233a98099f16838442d9ca17a73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_acf3530c7d4cb4eecbba9c6b09d5b532de313c64e54a00fe003fd96e2b9090c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf3530c7d4cb4eecbba9c6b09d5b532de313c64e54a00fe003fd96e2b9090c6->enter($__internal_acf3530c7d4cb4eecbba9c6b09d5b532de313c64e54a00fe003fd96e2b9090c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_589d64d5797cbe3774cdb56802c042584a7842e1eeba592d0cdca3ad0030b12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589d64d5797cbe3774cdb56802c042584a7842e1eeba592d0cdca3ad0030b12d->enter($__internal_589d64d5797cbe3774cdb56802c042584a7842e1eeba592d0cdca3ad0030b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_589d64d5797cbe3774cdb56802c042584a7842e1eeba592d0cdca3ad0030b12d->leave($__internal_589d64d5797cbe3774cdb56802c042584a7842e1eeba592d0cdca3ad0030b12d_prof);

        
        $__internal_acf3530c7d4cb4eecbba9c6b09d5b532de313c64e54a00fe003fd96e2b9090c6->leave($__internal_acf3530c7d4cb4eecbba9c6b09d5b532de313c64e54a00fe003fd96e2b9090c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54ccdc9e97249846bb1806c961b9448227bc4d2e3c4c22a723f63644719d15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54ccdc9e97249846bb1806c961b9448227bc4d2e3c4c22a723f63644719d15a->enter($__internal_b54ccdc9e97249846bb1806c961b9448227bc4d2e3c4c22a723f63644719d15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8c9fd933d5325e896ac35bc336dc7dee49b047db86596c0dc0077313c04f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c9fd933d5325e896ac35bc336dc7dee49b047db86596c0dc0077313c04f51a->enter($__internal_f8c9fd933d5325e896ac35bc336dc7dee49b047db86596c0dc0077313c04f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
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
        
        $__internal_f8c9fd933d5325e896ac35bc336dc7dee49b047db86596c0dc0077313c04f51a->leave($__internal_f8c9fd933d5325e896ac35bc336dc7dee49b047db86596c0dc0077313c04f51a_prof);

        
        $__internal_b54ccdc9e97249846bb1806c961b9448227bc4d2e3c4c22a723f63644719d15a->leave($__internal_b54ccdc9e97249846bb1806c961b9448227bc4d2e3c4c22a723f63644719d15a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProvince/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\edit.html.twig");
    }
}
