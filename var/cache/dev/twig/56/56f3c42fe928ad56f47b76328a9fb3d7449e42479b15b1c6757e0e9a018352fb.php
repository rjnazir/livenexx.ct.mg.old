<?php

/* AdminBundle:CtGenreTarif:add.html.twig */
class __TwigTemplate_43b2de525a3dc8e4fdc169708d31ab0244c635324e0219412bce571b8b7dd1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreTarif:add.html.twig", 1);
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
        $__internal_77840b8ce44d68ced2664bb218c39303c6ebf13f5fabf7a654f42ff4baa07a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77840b8ce44d68ced2664bb218c39303c6ebf13f5fabf7a654f42ff4baa07a17->enter($__internal_77840b8ce44d68ced2664bb218c39303c6ebf13f5fabf7a654f42ff4baa07a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:add.html.twig"));

        $__internal_5a5d8d7e43420718adf57a4a8c40fa8c8493d69530144ac86d785c61d1c7c8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5d8d7e43420718adf57a4a8c40fa8c8493d69530144ac86d785c61d1c7c8d8->enter($__internal_5a5d8d7e43420718adf57a4a8c40fa8c8493d69530144ac86d785c61d1c7c8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre"] = true;
        // line 8
        $context["menu_genre_tarif"] = true;
        // line 9
        $context["menu_genre_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77840b8ce44d68ced2664bb218c39303c6ebf13f5fabf7a654f42ff4baa07a17->leave($__internal_77840b8ce44d68ced2664bb218c39303c6ebf13f5fabf7a654f42ff4baa07a17_prof);

        
        $__internal_5a5d8d7e43420718adf57a4a8c40fa8c8493d69530144ac86d785c61d1c7c8d8->leave($__internal_5a5d8d7e43420718adf57a4a8c40fa8c8493d69530144ac86d785c61d1c7c8d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa8476edad0fa8bd01dea7be4b740e6a38b1dfbd4516ea3215d3dc54c59f5d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8476edad0fa8bd01dea7be4b740e6a38b1dfbd4516ea3215d3dc54c59f5d65->enter($__internal_fa8476edad0fa8bd01dea7be4b740e6a38b1dfbd4516ea3215d3dc54c59f5d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c77e969f2984a28152939c6c1e1e88f747319bccd046807ca5e021764c398297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c77e969f2984a28152939c6c1e1e88f747319bccd046807ca5e021764c398297->enter($__internal_c77e969f2984a28152939c6c1e1e88f747319bccd046807ca5e021764c398297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif genre ";
        
        $__internal_c77e969f2984a28152939c6c1e1e88f747319bccd046807ca5e021764c398297->leave($__internal_c77e969f2984a28152939c6c1e1e88f747319bccd046807ca5e021764c398297_prof);

        
        $__internal_fa8476edad0fa8bd01dea7be4b740e6a38b1dfbd4516ea3215d3dc54c59f5d65->leave($__internal_fa8476edad0fa8bd01dea7be4b740e6a38b1dfbd4516ea3215d3dc54c59f5d65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b713165cfc888bb9c8a7758bed1ab50c3f85f7408a0e9f70a9f3797dce621f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b713165cfc888bb9c8a7758bed1ab50c3f85f7408a0e9f70a9f3797dce621f8f->enter($__internal_b713165cfc888bb9c8a7758bed1ab50c3f85f7408a0e9f70a9f3797dce621f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b566b1a53a234289b860b9b2a69ccdc2244809c91cfe64a41617588b1ae80154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b566b1a53a234289b860b9b2a69ccdc2244809c91cfe64a41617588b1ae80154->enter($__internal_b566b1a53a234289b860b9b2a69ccdc2244809c91cfe64a41617588b1ae80154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 20
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ajouter tarif genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 36
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_b566b1a53a234289b860b9b2a69ccdc2244809c91cfe64a41617588b1ae80154->leave($__internal_b566b1a53a234289b860b9b2a69ccdc2244809c91cfe64a41617588b1ae80154_prof);

        
        $__internal_b713165cfc888bb9c8a7758bed1ab50c3f85f7408a0e9f70a9f3797dce621f8f->leave($__internal_b713165cfc888bb9c8a7758bed1ab50c3f85f7408a0e9f70a9f3797dce621f8f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreTarif:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  143 => 40,  137 => 36,  133 => 34,  129 => 33,  120 => 27,  114 => 23,  105 => 20,  102 => 19,  98 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Tarif genre {% endblock %}

{% set menu_genre               = true %}
{% set menu_genre_tarif          = true %}
{% set menu_genre_tarif_create   = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif genre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctGenre) }}
                        {{ form_row(form.grtPrix) }}
                        {#{{ form_row(form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre\"/>
                        <a href=\"{{ path('genre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenreTarif:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreTarif/add.html.twig");
    }
}
