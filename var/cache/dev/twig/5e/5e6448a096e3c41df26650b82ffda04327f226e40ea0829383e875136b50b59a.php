<?php

/* AdminBundle:CtGenreCategorie:edit.html.twig */
class __TwigTemplate_86d0f18fbd8a0ecac88719966fa16ca4e4432b9ec854d304425a55cebd11f0a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreCategorie:edit.html.twig", 1);
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
        $__internal_a94fca369b55eb74e0a880c80b8a18a60d24d8d955d218f6b1817a223b8277cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a94fca369b55eb74e0a880c80b8a18a60d24d8d955d218f6b1817a223b8277cc->enter($__internal_a94fca369b55eb74e0a880c80b8a18a60d24d8d955d218f6b1817a223b8277cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:edit.html.twig"));

        $__internal_18e45d38eeee16f510df1ca8a719a102d106968a4db7d77f73aadc386cc63cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e45d38eeee16f510df1ca8a719a102d106968a4db7d77f73aadc386cc63cb0->enter($__internal_18e45d38eeee16f510df1ca8a719a102d106968a4db7d77f73aadc386cc63cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreCategorie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_categorie"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a94fca369b55eb74e0a880c80b8a18a60d24d8d955d218f6b1817a223b8277cc->leave($__internal_a94fca369b55eb74e0a880c80b8a18a60d24d8d955d218f6b1817a223b8277cc_prof);

        
        $__internal_18e45d38eeee16f510df1ca8a719a102d106968a4db7d77f73aadc386cc63cb0->leave($__internal_18e45d38eeee16f510df1ca8a719a102d106968a4db7d77f73aadc386cc63cb0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c85e398e04020993fd778943f27373d7bd943e501377daed8a520cb65a42292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c85e398e04020993fd778943f27373d7bd943e501377daed8a520cb65a42292->enter($__internal_4c85e398e04020993fd778943f27373d7bd943e501377daed8a520cb65a42292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6233c24ec70e7e4dff8c841279963d6bd5f9aaf0c67cf62652961f5f249c31c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6233c24ec70e7e4dff8c841279963d6bd5f9aaf0c67cf62652961f5f249c31c8->enter($__internal_6233c24ec70e7e4dff8c841279963d6bd5f9aaf0c67cf62652961f5f249c31c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Genre Categorie ";
        
        $__internal_6233c24ec70e7e4dff8c841279963d6bd5f9aaf0c67cf62652961f5f249c31c8->leave($__internal_6233c24ec70e7e4dff8c841279963d6bd5f9aaf0c67cf62652961f5f249c31c8_prof);

        
        $__internal_4c85e398e04020993fd778943f27373d7bd943e501377daed8a520cb65a42292->leave($__internal_4c85e398e04020993fd778943f27373d7bd943e501377daed8a520cb65a42292_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8925084fa53b0e8904f4d62fd0b0907ff3c9847cf74715e2c6ede7f4bf39196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8925084fa53b0e8904f4d62fd0b0907ff3c9847cf74715e2c6ede7f4bf39196->enter($__internal_d8925084fa53b0e8904f4d62fd0b0907ff3c9847cf74715e2c6ede7f4bf39196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cd4fd1822011a7284a41f49faf3a648545462531aa3e7253347aa1d9e542fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd4fd1822011a7284a41f49faf3a648545462531aa3e7253347aa1d9e542fb8->enter($__internal_2cd4fd1822011a7284a41f49faf3a648545462531aa3e7253347aa1d9e542fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2cd4fd1822011a7284a41f49faf3a648545462531aa3e7253347aa1d9e542fb8->leave($__internal_2cd4fd1822011a7284a41f49faf3a648545462531aa3e7253347aa1d9e542fb8_prof);

        
        $__internal_d8925084fa53b0e8904f4d62fd0b0907ff3c9847cf74715e2c6ede7f4bf39196->leave($__internal_d8925084fa53b0e8904f4d62fd0b0907ff3c9847cf74715e2c6ede7f4bf39196_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreCategorie:edit.html.twig";
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
{% endblock %}", "AdminBundle:CtGenreCategorie:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreCategorie/edit.html.twig");
    }
}
