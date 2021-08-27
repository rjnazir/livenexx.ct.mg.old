<?php

/* AdminBundle:CtUtilisation:edit.html.twig */
class __TwigTemplate_9c64c5cceddf4eab18e68b5d6e2ab8a99b2f93361158c5787352521b8e2fe29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:edit.html.twig", 1);
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
        $__internal_785dc11aceb6e82ba675c9742b36b4e6cae3c708187f12ddf85f82ae289b590c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785dc11aceb6e82ba675c9742b36b4e6cae3c708187f12ddf85f82ae289b590c->enter($__internal_785dc11aceb6e82ba675c9742b36b4e6cae3c708187f12ddf85f82ae289b590c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:edit.html.twig"));

        $__internal_85bbb7c6e7253bbff6f95272ee7f3f581dda612e96b3ba8a94cc327e6b3f1804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bbb7c6e7253bbff6f95272ee7f3f581dda612e96b3ba8a94cc327e6b3f1804->enter($__internal_85bbb7c6e7253bbff6f95272ee7f3f581dda612e96b3ba8a94cc327e6b3f1804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785dc11aceb6e82ba675c9742b36b4e6cae3c708187f12ddf85f82ae289b590c->leave($__internal_785dc11aceb6e82ba675c9742b36b4e6cae3c708187f12ddf85f82ae289b590c_prof);

        
        $__internal_85bbb7c6e7253bbff6f95272ee7f3f581dda612e96b3ba8a94cc327e6b3f1804->leave($__internal_85bbb7c6e7253bbff6f95272ee7f3f581dda612e96b3ba8a94cc327e6b3f1804_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_29173becf19e65f6c00ac839fb319fc18235aa1734fed9bce9585a5909cb19cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29173becf19e65f6c00ac839fb319fc18235aa1734fed9bce9585a5909cb19cb->enter($__internal_29173becf19e65f6c00ac839fb319fc18235aa1734fed9bce9585a5909cb19cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d85d66164fb09137c551f9ec818ac17f88e7872276c129f842ef04d981f05bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85d66164fb09137c551f9ec818ac17f88e7872276c129f842ef04d981f05bce->enter($__internal_d85d66164fb09137c551f9ec818ac17f88e7872276c129f842ef04d981f05bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisation ";
        
        $__internal_d85d66164fb09137c551f9ec818ac17f88e7872276c129f842ef04d981f05bce->leave($__internal_d85d66164fb09137c551f9ec818ac17f88e7872276c129f842ef04d981f05bce_prof);

        
        $__internal_29173becf19e65f6c00ac839fb319fc18235aa1734fed9bce9585a5909cb19cb->leave($__internal_29173becf19e65f6c00ac839fb319fc18235aa1734fed9bce9585a5909cb19cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_15462dba0544e16b12d2c374033524f104a84f8a55140074bb74cc7bfc0f78a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15462dba0544e16b12d2c374033524f104a84f8a55140074bb74cc7bfc0f78a1->enter($__internal_15462dba0544e16b12d2c374033524f104a84f8a55140074bb74cc7bfc0f78a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7546aa5d8ede8ccfd7b3622a81ea1ffd851665616f0db27c44ade9fd71c5ef2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7546aa5d8ede8ccfd7b3622a81ea1ffd851665616f0db27c44ade9fd71c5ef2d->enter($__internal_7546aa5d8ede8ccfd7b3622a81ea1ffd851665616f0db27c44ade9fd71c5ef2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
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
        
        $__internal_7546aa5d8ede8ccfd7b3622a81ea1ffd851665616f0db27c44ade9fd71c5ef2d->leave($__internal_7546aa5d8ede8ccfd7b3622a81ea1ffd851665616f0db27c44ade9fd71c5ef2d_prof);

        
        $__internal_15462dba0544e16b12d2c374033524f104a84f8a55140074bb74cc7bfc0f78a1->leave($__internal_15462dba0544e16b12d2c374033524f104a84f8a55140074bb74cc7bfc0f78a1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Utilisation {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUtilisation:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/edit.html.twig");
    }
}
