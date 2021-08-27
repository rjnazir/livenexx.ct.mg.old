<?php

/* @Admin/CtTypeAnomalie/add.html.twig */
class __TwigTemplate_d369efc57a1e922720b71345722d149879a5489b1046af045475f989f92f9120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/add.html.twig", 1);
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
        $__internal_880389ab526af83911e2d5735dd3b5146ffa8188a29a77d8d8cb04077420948a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880389ab526af83911e2d5735dd3b5146ffa8188a29a77d8d8cb04077420948a->enter($__internal_880389ab526af83911e2d5735dd3b5146ffa8188a29a77d8d8cb04077420948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        $__internal_f819e8428b5a988ddf7fed25d80335704d7277e7694b362da693f40740c71485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f819e8428b5a988ddf7fed25d80335704d7277e7694b362da693f40740c71485->enter($__internal_f819e8428b5a988ddf7fed25d80335704d7277e7694b362da693f40740c71485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880389ab526af83911e2d5735dd3b5146ffa8188a29a77d8d8cb04077420948a->leave($__internal_880389ab526af83911e2d5735dd3b5146ffa8188a29a77d8d8cb04077420948a_prof);

        
        $__internal_f819e8428b5a988ddf7fed25d80335704d7277e7694b362da693f40740c71485->leave($__internal_f819e8428b5a988ddf7fed25d80335704d7277e7694b362da693f40740c71485_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2baa3f846271e5ffc7a177c0a28f1a0e29b59fa220414a6f134068e1acd9e872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2baa3f846271e5ffc7a177c0a28f1a0e29b59fa220414a6f134068e1acd9e872->enter($__internal_2baa3f846271e5ffc7a177c0a28f1a0e29b59fa220414a6f134068e1acd9e872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de4e9486a44445070a807548e83ae0438eaaab9e8421978d2b4dec21491faeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e9486a44445070a807548e83ae0438eaaab9e8421978d2b4dec21491faeb6->enter($__internal_de4e9486a44445070a807548e83ae0438eaaab9e8421978d2b4dec21491faeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_de4e9486a44445070a807548e83ae0438eaaab9e8421978d2b4dec21491faeb6->leave($__internal_de4e9486a44445070a807548e83ae0438eaaab9e8421978d2b4dec21491faeb6_prof);

        
        $__internal_2baa3f846271e5ffc7a177c0a28f1a0e29b59fa220414a6f134068e1acd9e872->leave($__internal_2baa3f846271e5ffc7a177c0a28f1a0e29b59fa220414a6f134068e1acd9e872_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a761ad895a589ac362b06af74234039099964f3847ff8bebfcbb052e8bbf5417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a761ad895a589ac362b06af74234039099964f3847ff8bebfcbb052e8bbf5417->enter($__internal_a761ad895a589ac362b06af74234039099964f3847ff8bebfcbb052e8bbf5417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b473f3f8668fbfd81e2a59feb7d612227d0e47775776f1df7f0f42f8f3b7b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b473f3f8668fbfd81e2a59feb7d612227d0e47775776f1df7f0f42f8f3b7b59->enter($__internal_6b473f3f8668fbfd81e2a59feb7d612227d0e47775776f1df7f0f42f8f3b7b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
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
        
        $__internal_6b473f3f8668fbfd81e2a59feb7d612227d0e47775776f1df7f0f42f8f3b7b59->leave($__internal_6b473f3f8668fbfd81e2a59feb7d612227d0e47775776f1df7f0f42f8f3b7b59_prof);

        
        $__internal_a761ad895a589ac362b06af74234039099964f3847ff8bebfcbb052e8bbf5417->leave($__internal_a761ad895a589ac362b06af74234039099964f3847ff8bebfcbb052e8bbf5417_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

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
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeAnomalie/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\add.html.twig");
    }
}
