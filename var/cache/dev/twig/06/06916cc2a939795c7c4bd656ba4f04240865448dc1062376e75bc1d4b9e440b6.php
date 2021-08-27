<?php

/* @Admin/CtSourceEnergie/add.html.twig */
class __TwigTemplate_7dfc89abf63aedb6783bc439a020a1b772a62e8b57f8b8ea4cdbecd52e06ea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtSourceEnergie/add.html.twig", 1);
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
        $__internal_95269549996b304d1874e0330cfa34b1260e176df652d3d1959acf2c8e2cc5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95269549996b304d1874e0330cfa34b1260e176df652d3d1959acf2c8e2cc5be->enter($__internal_95269549996b304d1874e0330cfa34b1260e176df652d3d1959acf2c8e2cc5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        $__internal_75273ef827da08a0777d456538a0727e3af501c9a3210ddbdfd5ea98013ae103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75273ef827da08a0777d456538a0727e3af501c9a3210ddbdfd5ea98013ae103->enter($__internal_75273ef827da08a0777d456538a0727e3af501c9a3210ddbdfd5ea98013ae103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtSourceEnergie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95269549996b304d1874e0330cfa34b1260e176df652d3d1959acf2c8e2cc5be->leave($__internal_95269549996b304d1874e0330cfa34b1260e176df652d3d1959acf2c8e2cc5be_prof);

        
        $__internal_75273ef827da08a0777d456538a0727e3af501c9a3210ddbdfd5ea98013ae103->leave($__internal_75273ef827da08a0777d456538a0727e3af501c9a3210ddbdfd5ea98013ae103_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5ea0db08c8e1d361aee54e91cad77836884c5c35ac3d3f19f9e322623c51d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ea0db08c8e1d361aee54e91cad77836884c5c35ac3d3f19f9e322623c51d98->enter($__internal_f5ea0db08c8e1d361aee54e91cad77836884c5c35ac3d3f19f9e322623c51d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_feaa6e36d009f2032674828826a34b8df129ad20354d97516a64041cd36fb171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feaa6e36d009f2032674828826a34b8df129ad20354d97516a64041cd36fb171->enter($__internal_feaa6e36d009f2032674828826a34b8df129ad20354d97516a64041cd36fb171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_feaa6e36d009f2032674828826a34b8df129ad20354d97516a64041cd36fb171->leave($__internal_feaa6e36d009f2032674828826a34b8df129ad20354d97516a64041cd36fb171_prof);

        
        $__internal_f5ea0db08c8e1d361aee54e91cad77836884c5c35ac3d3f19f9e322623c51d98->leave($__internal_f5ea0db08c8e1d361aee54e91cad77836884c5c35ac3d3f19f9e322623c51d98_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_73ba0321579276e2bee27d958747c5c498d21be1d903bf35fd552b6bc3c22339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ba0321579276e2bee27d958747c5c498d21be1d903bf35fd552b6bc3c22339->enter($__internal_73ba0321579276e2bee27d958747c5c498d21be1d903bf35fd552b6bc3c22339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b533374dc354a4feb847879b3d91c8a45f5e57fd2172d11e61aa88b8669bb2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b533374dc354a4feb847879b3d91c8a45f5e57fd2172d11e61aa88b8669bb2b->enter($__internal_2b533374dc354a4feb847879b3d91c8a45f5e57fd2172d11e61aa88b8669bb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_2b533374dc354a4feb847879b3d91c8a45f5e57fd2172d11e61aa88b8669bb2b->leave($__internal_2b533374dc354a4feb847879b3d91c8a45f5e57fd2172d11e61aa88b8669bb2b_prof);

        
        $__internal_73ba0321579276e2bee27d958747c5c498d21be1d903bf35fd552b6bc3c22339->leave($__internal_73ba0321579276e2bee27d958747c5c498d21be1d903bf35fd552b6bc3c22339_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtSourceEnergie/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtSourceEnergie/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtSourceEnergie\\add.html.twig");
    }
}
