<?php

/* @Admin/CtGenreTarif/add.html.twig */
class __TwigTemplate_3d996e91e552d990937f7815e90f208fc916183b064fdcbef84e3a860d1dd4bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreTarif/add.html.twig", 1);
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
        $__internal_ef8acb88d354a4d855d641553a98073af1d5c9c42cc4b1b2c6efaf9bc21ff0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8acb88d354a4d855d641553a98073af1d5c9c42cc4b1b2c6efaf9bc21ff0a5->enter($__internal_ef8acb88d354a4d855d641553a98073af1d5c9c42cc4b1b2c6efaf9bc21ff0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/add.html.twig"));

        $__internal_d7a6f8fa2e9063b95f07d1535a77a67f32d7420cb930ade29c343889163f3a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a6f8fa2e9063b95f07d1535a77a67f32d7420cb930ade29c343889163f3a9a->enter($__internal_d7a6f8fa2e9063b95f07d1535a77a67f32d7420cb930ade29c343889163f3a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/add.html.twig"));

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
        
        $__internal_ef8acb88d354a4d855d641553a98073af1d5c9c42cc4b1b2c6efaf9bc21ff0a5->leave($__internal_ef8acb88d354a4d855d641553a98073af1d5c9c42cc4b1b2c6efaf9bc21ff0a5_prof);

        
        $__internal_d7a6f8fa2e9063b95f07d1535a77a67f32d7420cb930ade29c343889163f3a9a->leave($__internal_d7a6f8fa2e9063b95f07d1535a77a67f32d7420cb930ade29c343889163f3a9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3deb1ea7658329549614bb963120bbba0d8aa6229aedbfb9e463041036388e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3deb1ea7658329549614bb963120bbba0d8aa6229aedbfb9e463041036388e7f->enter($__internal_3deb1ea7658329549614bb963120bbba0d8aa6229aedbfb9e463041036388e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f6ba2b909e030f08f133678b0a5ee3bdb2c8ab42753f4672c8bd7b1294931ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6ba2b909e030f08f133678b0a5ee3bdb2c8ab42753f4672c8bd7b1294931ad->enter($__internal_9f6ba2b909e030f08f133678b0a5ee3bdb2c8ab42753f4672c8bd7b1294931ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif genre ";
        
        $__internal_9f6ba2b909e030f08f133678b0a5ee3bdb2c8ab42753f4672c8bd7b1294931ad->leave($__internal_9f6ba2b909e030f08f133678b0a5ee3bdb2c8ab42753f4672c8bd7b1294931ad_prof);

        
        $__internal_3deb1ea7658329549614bb963120bbba0d8aa6229aedbfb9e463041036388e7f->leave($__internal_3deb1ea7658329549614bb963120bbba0d8aa6229aedbfb9e463041036388e7f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f0a618285ce91c9fd5f232e5f3582a3aa31da5eccf0f37255e2af2d81cf0523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0a618285ce91c9fd5f232e5f3582a3aa31da5eccf0f37255e2af2d81cf0523->enter($__internal_1f0a618285ce91c9fd5f232e5f3582a3aa31da5eccf0f37255e2af2d81cf0523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_938cc9a060a87351ffd24c13902570077d084575ab80464ad657d550d4506fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938cc9a060a87351ffd24c13902570077d084575ab80464ad657d550d4506fa1->enter($__internal_938cc9a060a87351ffd24c13902570077d084575ab80464ad657d550d4506fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_938cc9a060a87351ffd24c13902570077d084575ab80464ad657d550d4506fa1->leave($__internal_938cc9a060a87351ffd24c13902570077d084575ab80464ad657d550d4506fa1_prof);

        
        $__internal_1f0a618285ce91c9fd5f232e5f3582a3aa31da5eccf0f37255e2af2d81cf0523->leave($__internal_1f0a618285ce91c9fd5f232e5f3582a3aa31da5eccf0f37255e2af2d81cf0523_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreTarif/add.html.twig";
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
{% endblock %}", "@Admin/CtGenreTarif/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreTarif\\add.html.twig");
    }
}
