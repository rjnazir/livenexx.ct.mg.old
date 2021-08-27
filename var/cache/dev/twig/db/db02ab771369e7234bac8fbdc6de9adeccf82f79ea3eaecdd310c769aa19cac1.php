<?php

/* AdminBundle:CtTypeUsage:add.html.twig */
class __TwigTemplate_ad7a94ba23f7f60f61c57651b8806a748924a6d5064316042b224a672043f126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeUsage:add.html.twig", 1);
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
        $__internal_de3209995e4c03d316671ae2298bafe0a08af70b2f791e912726e43fc22bb519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3209995e4c03d316671ae2298bafe0a08af70b2f791e912726e43fc22bb519->enter($__internal_de3209995e4c03d316671ae2298bafe0a08af70b2f791e912726e43fc22bb519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:add.html.twig"));

        $__internal_f6ebe732f404dc2534fcaa00a40f49e291f55c0d5422e97f288e27038e2c64ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ebe732f404dc2534fcaa00a40f49e291f55c0d5422e97f288e27038e2c64ad->enter($__internal_f6ebe732f404dc2534fcaa00a40f49e291f55c0d5422e97f288e27038e2c64ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeUsage:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3209995e4c03d316671ae2298bafe0a08af70b2f791e912726e43fc22bb519->leave($__internal_de3209995e4c03d316671ae2298bafe0a08af70b2f791e912726e43fc22bb519_prof);

        
        $__internal_f6ebe732f404dc2534fcaa00a40f49e291f55c0d5422e97f288e27038e2c64ad->leave($__internal_f6ebe732f404dc2534fcaa00a40f49e291f55c0d5422e97f288e27038e2c64ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8819742a427bc8793a03b12a589efb0a5913570c5e9cf839281b0fbfa578a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8819742a427bc8793a03b12a589efb0a5913570c5e9cf839281b0fbfa578a4->enter($__internal_ee8819742a427bc8793a03b12a589efb0a5913570c5e9cf839281b0fbfa578a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d65058a16924888f8160c1f5dbd384f4f64afea68fb12eb964bc44a3cb68f862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65058a16924888f8160c1f5dbd384f4f64afea68fb12eb964bc44a3cb68f862->enter($__internal_d65058a16924888f8160c1f5dbd384f4f64afea68fb12eb964bc44a3cb68f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout type d'usage ";
        
        $__internal_d65058a16924888f8160c1f5dbd384f4f64afea68fb12eb964bc44a3cb68f862->leave($__internal_d65058a16924888f8160c1f5dbd384f4f64afea68fb12eb964bc44a3cb68f862_prof);

        
        $__internal_ee8819742a427bc8793a03b12a589efb0a5913570c5e9cf839281b0fbfa578a4->leave($__internal_ee8819742a427bc8793a03b12a589efb0a5913570c5e9cf839281b0fbfa578a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f36d0ab44cfb39034f67c4f6f5e0d009c036ac6ae0e1c9ad565287b710b100fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36d0ab44cfb39034f67c4f6f5e0d009c036ac6ae0e1c9ad565287b710b100fe->enter($__internal_f36d0ab44cfb39034f67c4f6f5e0d009c036ac6ae0e1c9ad565287b710b100fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf4e4a9786e137388bd51da60cb6e941af5ffe8a1a12d09a46249e7c367f823b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4e4a9786e137388bd51da60cb6e941af5ffe8a1a12d09a46249e7c367f823b->enter($__internal_bf4e4a9786e137388bd51da60cb6e941af5ffe8a1a12d09a46249e7c367f823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
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
        
        $__internal_bf4e4a9786e137388bd51da60cb6e941af5ffe8a1a12d09a46249e7c367f823b->leave($__internal_bf4e4a9786e137388bd51da60cb6e941af5ffe8a1a12d09a46249e7c367f823b_prof);

        
        $__internal_f36d0ab44cfb39034f67c4f6f5e0d009c036ac6ae0e1c9ad565287b710b100fe->leave($__internal_f36d0ab44cfb39034f67c4f6f5e0d009c036ac6ae0e1c9ad565287b710b100fe_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeUsage:add.html.twig";
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

{% block title %}{{ parent() }} Ajout type d'usage {% endblock %}

{% set menu_type_usage        = true %}
{% set menu_type_usage_create = true %}

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
                        <h3 class=\"box-title\">Créer un type d'usage</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeUsage:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeUsage/add.html.twig");
    }
}
