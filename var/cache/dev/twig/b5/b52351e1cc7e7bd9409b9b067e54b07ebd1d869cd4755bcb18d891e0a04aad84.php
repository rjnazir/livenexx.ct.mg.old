<?php

/* @Admin/CtAnomalie/add.html.twig */
class __TwigTemplate_fddb2b2b01aa534ecc9f3c29c1df17f80d444979b12f471d7f19a0737367b91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtAnomalie/add.html.twig", 1);
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
        $__internal_15b459ae0f65ae9a0f8b6a6048484098fae45533e0ac3c4d9c98a743cc622944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b459ae0f65ae9a0f8b6a6048484098fae45533e0ac3c4d9c98a743cc622944->enter($__internal_15b459ae0f65ae9a0f8b6a6048484098fae45533e0ac3c4d9c98a743cc622944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/add.html.twig"));

        $__internal_3e7f5ee01fecae0592d7585de903cd725854b8f255f42f4d5efa31968c0dad40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7f5ee01fecae0592d7585de903cd725854b8f255f42f4d5efa31968c0dad40->enter($__internal_3e7f5ee01fecae0592d7585de903cd725854b8f255f42f4d5efa31968c0dad40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtAnomalie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b459ae0f65ae9a0f8b6a6048484098fae45533e0ac3c4d9c98a743cc622944->leave($__internal_15b459ae0f65ae9a0f8b6a6048484098fae45533e0ac3c4d9c98a743cc622944_prof);

        
        $__internal_3e7f5ee01fecae0592d7585de903cd725854b8f255f42f4d5efa31968c0dad40->leave($__internal_3e7f5ee01fecae0592d7585de903cd725854b8f255f42f4d5efa31968c0dad40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83f7f520de42a0972946798b4835044a69dfff8217738d6591943bfea4c90f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f7f520de42a0972946798b4835044a69dfff8217738d6591943bfea4c90f5c->enter($__internal_83f7f520de42a0972946798b4835044a69dfff8217738d6591943bfea4c90f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d68435ee807804c31b3d9fe41fa5d9e062e8c71c487be1535f8a39abe4d7dcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d68435ee807804c31b3d9fe41fa5d9e062e8c71c487be1535f8a39abe4d7dcc->enter($__internal_5d68435ee807804c31b3d9fe41fa5d9e062e8c71c487be1535f8a39abe4d7dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Anomalie ";
        
        $__internal_5d68435ee807804c31b3d9fe41fa5d9e062e8c71c487be1535f8a39abe4d7dcc->leave($__internal_5d68435ee807804c31b3d9fe41fa5d9e062e8c71c487be1535f8a39abe4d7dcc_prof);

        
        $__internal_83f7f520de42a0972946798b4835044a69dfff8217738d6591943bfea4c90f5c->leave($__internal_83f7f520de42a0972946798b4835044a69dfff8217738d6591943bfea4c90f5c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a82916373f16b4d4af178cc879b93291d7857248997278f9453628004f56f05f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82916373f16b4d4af178cc879b93291d7857248997278f9453628004f56f05f->enter($__internal_a82916373f16b4d4af178cc879b93291d7857248997278f9453628004f56f05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b42721f8452adbb11808632e405b07f1c6f93c1bafb851b30bf08a15411b25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b42721f8452adbb11808632e405b07f1c6f93c1bafb851b30bf08a15411b25c->enter($__internal_8b42721f8452adbb11808632e405b07f1c6f93c1bafb851b30bf08a15411b25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalieType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlLibelle", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anmlCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
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
        
        $__internal_8b42721f8452adbb11808632e405b07f1c6f93c1bafb851b30bf08a15411b25c->leave($__internal_8b42721f8452adbb11808632e405b07f1c6f93c1bafb851b30bf08a15411b25c_prof);

        
        $__internal_a82916373f16b4d4af178cc879b93291d7857248997278f9453628004f56f05f->leave($__internal_a82916373f16b4d4af178cc879b93291d7857248997278f9453628004f56f05f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtAnomalie/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Anomalie {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.ctAnomalieType) }}
                        {{ form_row(form.anmlLibelle) }}
                        {{ form_row(form.anmlCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_anomalie\"/>
                        <a href=\"{{ path('anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtAnomalie/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtAnomalie\\add.html.twig");
    }
}
