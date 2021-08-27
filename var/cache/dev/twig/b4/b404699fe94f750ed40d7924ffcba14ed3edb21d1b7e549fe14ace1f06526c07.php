<?php

/* AdminBundle:CtGenreCategorie:add.html.twig */
class __TwigTemplate_9ca34866be4a0595c6d9b633147d91618ff6134ab7e32d51dce62cffc190343a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreCategorie:add.html.twig", 1);
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
        $__internal_b0f4054f75b0ebcc2a4b03d16f2817ba2fc60bee14fdbce4ddd5647db01f150d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f4054f75b0ebcc2a4b03d16f2817ba2fc60bee14fdbce4ddd5647db01f150d->enter($__internal_b0f4054f75b0ebcc2a4b03d16f2817ba2fc60bee14fdbce4ddd5647db01f150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        $__internal_606b27d0c0561b345c70e88892bc13528f2cd06e6b4e00b6693f1ac17113f04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606b27d0c0561b345c70e88892bc13528f2cd06e6b4e00b6693f1ac17113f04f->enter($__internal_606b27d0c0561b345c70e88892bc13528f2cd06e6b4e00b6693f1ac17113f04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 8
        $context["menu_genre_categorie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f4054f75b0ebcc2a4b03d16f2817ba2fc60bee14fdbce4ddd5647db01f150d->leave($__internal_b0f4054f75b0ebcc2a4b03d16f2817ba2fc60bee14fdbce4ddd5647db01f150d_prof);

        
        $__internal_606b27d0c0561b345c70e88892bc13528f2cd06e6b4e00b6693f1ac17113f04f->leave($__internal_606b27d0c0561b345c70e88892bc13528f2cd06e6b4e00b6693f1ac17113f04f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c375fa88ce360175ad3d5b0019e1b78c757ddf021287574eba055b44c6da8e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c375fa88ce360175ad3d5b0019e1b78c757ddf021287574eba055b44c6da8e9c->enter($__internal_c375fa88ce360175ad3d5b0019e1b78c757ddf021287574eba055b44c6da8e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c357ba9cbb25b41d2126d35e28083b3d9c067e5db4736e9fb1fe1ff63698ab54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c357ba9cbb25b41d2126d35e28083b3d9c067e5db4736e9fb1fe1ff63698ab54->enter($__internal_c357ba9cbb25b41d2126d35e28083b3d9c067e5db4736e9fb1fe1ff63698ab54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Genre Categorie ";
        
        $__internal_c357ba9cbb25b41d2126d35e28083b3d9c067e5db4736e9fb1fe1ff63698ab54->leave($__internal_c357ba9cbb25b41d2126d35e28083b3d9c067e5db4736e9fb1fe1ff63698ab54_prof);

        
        $__internal_c375fa88ce360175ad3d5b0019e1b78c757ddf021287574eba055b44c6da8e9c->leave($__internal_c375fa88ce360175ad3d5b0019e1b78c757ddf021287574eba055b44c6da8e9c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0fe59010480f771a0d3afadc4a98198e8be2b7bb8f29b0165a398bf1e70093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0fe59010480f771a0d3afadc4a98198e8be2b7bb8f29b0165a398bf1e70093->enter($__internal_cb0fe59010480f771a0d3afadc4a98198e8be2b7bb8f29b0165a398bf1e70093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9671f568d18d3de7727b95ffc79a3d80aa6fe04209f146e14068a93304b715ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9671f568d18d3de7727b95ffc79a3d80aa6fe04209f146e14068a93304b715ea->enter($__internal_9671f568d18d3de7727b95ffc79a3d80aa6fe04209f146e14068a93304b715ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9671f568d18d3de7727b95ffc79a3d80aa6fe04209f146e14068a93304b715ea->leave($__internal_9671f568d18d3de7727b95ffc79a3d80aa6fe04209f146e14068a93304b715ea_prof);

        
        $__internal_cb0fe59010480f771a0d3afadc4a98198e8be2b7bb8f29b0165a398bf1e70093->leave($__internal_cb0fe59010480f771a0d3afadc4a98198e8be2b7bb8f29b0165a398bf1e70093_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreCategorie:add.html.twig";
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
{% endblock %}", "AdminBundle:CtGenreCategorie:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreCategorie/add.html.twig");
    }
}
