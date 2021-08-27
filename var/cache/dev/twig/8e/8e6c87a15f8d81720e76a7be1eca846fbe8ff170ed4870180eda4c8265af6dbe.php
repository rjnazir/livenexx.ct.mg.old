<?php

/* @Admin/CtGenreCategorie/edit.html.twig */
class __TwigTemplate_8f914ef47291da3a1eb227900c93789887de6cedc69fe0400f3cc38d3c507ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/edit.html.twig", 1);
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
        $__internal_0894857a587ad3b715355a9541b474c575c46ab01c1b77c5b8fb1decf6a62c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0894857a587ad3b715355a9541b474c575c46ab01c1b77c5b8fb1decf6a62c09->enter($__internal_0894857a587ad3b715355a9541b474c575c46ab01c1b77c5b8fb1decf6a62c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        $__internal_b9a402244b66f5eb7ccd896f3f8cf7ccf37582280beba81826bee9f4e042bf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a402244b66f5eb7ccd896f3f8cf7ccf37582280beba81826bee9f4e042bf05->enter($__internal_b9a402244b66f5eb7ccd896f3f8cf7ccf37582280beba81826bee9f4e042bf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0894857a587ad3b715355a9541b474c575c46ab01c1b77c5b8fb1decf6a62c09->leave($__internal_0894857a587ad3b715355a9541b474c575c46ab01c1b77c5b8fb1decf6a62c09_prof);

        
        $__internal_b9a402244b66f5eb7ccd896f3f8cf7ccf37582280beba81826bee9f4e042bf05->leave($__internal_b9a402244b66f5eb7ccd896f3f8cf7ccf37582280beba81826bee9f4e042bf05_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c399e27b9259aa54325942865ee3d3d64a8a1379f49e9944ec13a338d9f6973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c399e27b9259aa54325942865ee3d3d64a8a1379f49e9944ec13a338d9f6973->enter($__internal_4c399e27b9259aa54325942865ee3d3d64a8a1379f49e9944ec13a338d9f6973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43a685ada3464176e07aa3787025737b1a88537e4f2f7efed6d8108bf9bf4a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a685ada3464176e07aa3787025737b1a88537e4f2f7efed6d8108bf9bf4a9e->enter($__internal_43a685ada3464176e07aa3787025737b1a88537e4f2f7efed6d8108bf9bf4a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre Categorie ";
        
        $__internal_43a685ada3464176e07aa3787025737b1a88537e4f2f7efed6d8108bf9bf4a9e->leave($__internal_43a685ada3464176e07aa3787025737b1a88537e4f2f7efed6d8108bf9bf4a9e_prof);

        
        $__internal_4c399e27b9259aa54325942865ee3d3d64a8a1379f49e9944ec13a338d9f6973->leave($__internal_4c399e27b9259aa54325942865ee3d3d64a8a1379f49e9944ec13a338d9f6973_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_59c4ba324cc730f5c138bd703a350c9aea3f507e71c0b00a28cf1bb49aa166ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c4ba324cc730f5c138bd703a350c9aea3f507e71c0b00a28cf1bb49aa166ce->enter($__internal_59c4ba324cc730f5c138bd703a350c9aea3f507e71c0b00a28cf1bb49aa166ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c2dc615acb9f2e5fd4334265d4a7f4fa3adbd7d516c7d1d282def1ffabf78bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2dc615acb9f2e5fd4334265d4a7f4fa3adbd7d516c7d1d282def1ffabf78bd->enter($__internal_7c2dc615acb9f2e5fd4334265d4a7f4fa3adbd7d516c7d1d282def1ffabf78bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcLibelle", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gcIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7c2dc615acb9f2e5fd4334265d4a7f4fa3adbd7d516c7d1d282def1ffabf78bd->leave($__internal_7c2dc615acb9f2e5fd4334265d4a7f4fa3adbd7d516c7d1d282def1ffabf78bd_prof);

        
        $__internal_59c4ba324cc730f5c138bd703a350c9aea3f507e71c0b00a28cf1bb49aa166ce->leave($__internal_59c4ba324cc730f5c138bd703a350c9aea3f507e71c0b00a28cf1bb49aa166ce_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Genre Categorie {% endblock %}

{% set menu_genre_categorie = true %}

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
                        <h3 class=\"box-title\">Editer une Genre Categorie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.gcLibelle) }}
                        {{ form_row(edit_form.gcIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre_categorie\"/>
                        <a href=\"{{ path('genre_categorie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreCategorie/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\edit.html.twig");
    }
}
