<?php

/* @Admin/CtGenreCategorie/add.html.twig */
class __TwigTemplate_d62a427a6727afcda2c7b4b89ee2e671bce915875298da20f45c0e0f9da44d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreCategorie/add.html.twig", 1);
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
        $__internal_507be8fd29b3ba44b8029f963cfd7b02e1c196daaaac0828c96a7b2eeca74750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507be8fd29b3ba44b8029f963cfd7b02e1c196daaaac0828c96a7b2eeca74750->enter($__internal_507be8fd29b3ba44b8029f963cfd7b02e1c196daaaac0828c96a7b2eeca74750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        $__internal_1a39be70ce6192ef520f1b4cac67c12114c52e1fef547719ab52f5b31e764860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a39be70ce6192ef520f1b4cac67c12114c52e1fef547719ab52f5b31e764860->enter($__internal_1a39be70ce6192ef520f1b4cac67c12114c52e1fef547719ab52f5b31e764860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreCategorie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507be8fd29b3ba44b8029f963cfd7b02e1c196daaaac0828c96a7b2eeca74750->leave($__internal_507be8fd29b3ba44b8029f963cfd7b02e1c196daaaac0828c96a7b2eeca74750_prof);

        
        $__internal_1a39be70ce6192ef520f1b4cac67c12114c52e1fef547719ab52f5b31e764860->leave($__internal_1a39be70ce6192ef520f1b4cac67c12114c52e1fef547719ab52f5b31e764860_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d9616be82f85ca56363e4b46527d00cd142385c49dd5375470d79a5d3ad191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d9616be82f85ca56363e4b46527d00cd142385c49dd5375470d79a5d3ad191->enter($__internal_97d9616be82f85ca56363e4b46527d00cd142385c49dd5375470d79a5d3ad191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_792a8b15adcedef41b212b7d5633e50625e86d2060ae70ee5db68d966e8d9292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792a8b15adcedef41b212b7d5633e50625e86d2060ae70ee5db68d966e8d9292->enter($__internal_792a8b15adcedef41b212b7d5633e50625e86d2060ae70ee5db68d966e8d9292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_792a8b15adcedef41b212b7d5633e50625e86d2060ae70ee5db68d966e8d9292->leave($__internal_792a8b15adcedef41b212b7d5633e50625e86d2060ae70ee5db68d966e8d9292_prof);

        
        $__internal_97d9616be82f85ca56363e4b46527d00cd142385c49dd5375470d79a5d3ad191->leave($__internal_97d9616be82f85ca56363e4b46527d00cd142385c49dd5375470d79a5d3ad191_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2238dbb53c70736f1bb707d4c5325266502052f76d34a1d1df4c36358783515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2238dbb53c70736f1bb707d4c5325266502052f76d34a1d1df4c36358783515->enter($__internal_b2238dbb53c70736f1bb707d4c5325266502052f76d34a1d1df4c36358783515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_490feeefa0b6443c8eba75467a262fa7f55db8cbe722a13441211af0c09fb1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490feeefa0b6443c8eba75467a262fa7f55db8cbe722a13441211af0c09fb1a8->enter($__internal_490feeefa0b6443c8eba75467a262fa7f55db8cbe722a13441211af0c09fb1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une Genre Categorie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gcLibelle", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gcIsCalculable", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre_categorie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
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
        
        $__internal_490feeefa0b6443c8eba75467a262fa7f55db8cbe722a13441211af0c09fb1a8->leave($__internal_490feeefa0b6443c8eba75467a262fa7f55db8cbe722a13441211af0c09fb1a8_prof);

        
        $__internal_b2238dbb53c70736f1bb707d4c5325266502052f76d34a1d1df4c36358783515->leave($__internal_b2238dbb53c70736f1bb707d4c5325266502052f76d34a1d1df4c36358783515_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreCategorie/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Genre Categorie {% endblock %}

{% set menu_genre_categorie           = true %}
{% set menu_genre_categorie_create = true %}

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
                        <h3 class=\"box-title\">Créer une Genre Categorie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.gcLibelle) }}
                        {{ form_row(form.gcIsCalculable) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_genre_categorie\"/>
                        <a href=\"{{ path('genre_categorie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreCategorie/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreCategorie\\add.html.twig");
    }
}
