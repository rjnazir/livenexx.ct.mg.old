<?php

/* @Admin/CtAnomalie/edit.html.twig */
class __TwigTemplate_0ddf5d47c5597c01e5db191e9309fd28703e3bccf0582a6dc47a623c66d7081c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtAnomalie/edit.html.twig", 1);
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
        $__internal_4c13c6905a78ebd25b1b6a7d34f3ae894d0f4cd67643a8909e45dcd903e39fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c13c6905a78ebd25b1b6a7d34f3ae894d0f4cd67643a8909e45dcd903e39fe9->enter($__internal_4c13c6905a78ebd25b1b6a7d34f3ae894d0f4cd67643a8909e45dcd903e39fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        $__internal_9c47d39c719eef6d0c4e34aa103fa44bdf928ca8a79457610349eac46da50a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c47d39c719eef6d0c4e34aa103fa44bdf928ca8a79457610349eac46da50a89->enter($__internal_9c47d39c719eef6d0c4e34aa103fa44bdf928ca8a79457610349eac46da50a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c13c6905a78ebd25b1b6a7d34f3ae894d0f4cd67643a8909e45dcd903e39fe9->leave($__internal_4c13c6905a78ebd25b1b6a7d34f3ae894d0f4cd67643a8909e45dcd903e39fe9_prof);

        
        $__internal_9c47d39c719eef6d0c4e34aa103fa44bdf928ca8a79457610349eac46da50a89->leave($__internal_9c47d39c719eef6d0c4e34aa103fa44bdf928ca8a79457610349eac46da50a89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_718bfc8dd4b1263884f718692cfef57eb7278097ad91bf525ce5134bb91d4708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_718bfc8dd4b1263884f718692cfef57eb7278097ad91bf525ce5134bb91d4708->enter($__internal_718bfc8dd4b1263884f718692cfef57eb7278097ad91bf525ce5134bb91d4708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea9e7903b9dd87e93b9fe47945d4f702897aa7143b87dec1e2d2e3236577ae75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9e7903b9dd87e93b9fe47945d4f702897aa7143b87dec1e2d2e3236577ae75->enter($__internal_ea9e7903b9dd87e93b9fe47945d4f702897aa7143b87dec1e2d2e3236577ae75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Anomalie ";
        
        $__internal_ea9e7903b9dd87e93b9fe47945d4f702897aa7143b87dec1e2d2e3236577ae75->leave($__internal_ea9e7903b9dd87e93b9fe47945d4f702897aa7143b87dec1e2d2e3236577ae75_prof);

        
        $__internal_718bfc8dd4b1263884f718692cfef57eb7278097ad91bf525ce5134bb91d4708->leave($__internal_718bfc8dd4b1263884f718692cfef57eb7278097ad91bf525ce5134bb91d4708_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_72701d5900df9a374cc634a045d5b30f84f15884b6db4d89b1b907b1fb0e83d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72701d5900df9a374cc634a045d5b30f84f15884b6db4d89b1b907b1fb0e83d5->enter($__internal_72701d5900df9a374cc634a045d5b30f84f15884b6db4d89b1b907b1fb0e83d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bb4af2745da28d7780784e03f157d39099e91febb9953baf84e064f42c382ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb4af2745da28d7780784e03f157d39099e91febb9953baf84e064f42c382ee->enter($__internal_1bb4af2745da28d7780784e03f157d39099e91febb9953baf84e064f42c382ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1bb4af2745da28d7780784e03f157d39099e91febb9953baf84e064f42c382ee->leave($__internal_1bb4af2745da28d7780784e03f157d39099e91febb9953baf84e064f42c382ee_prof);

        
        $__internal_72701d5900df9a374cc634a045d5b30f84f15884b6db4d89b1b907b1fb0e83d5->leave($__internal_72701d5900df9a374cc634a045d5b30f84f15884b6db4d89b1b907b1fb0e83d5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtAnomalie/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Anomalie {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctAnomalieType) }}
                        {{ form_row(edit_form.anmlLibelle) }}
                        {{ form_row(edit_form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtAnomalie/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtAnomalie\\edit.html.twig");
    }
}
