<?php

/* @Admin/CtMarque/add.html.twig */
class __TwigTemplate_0e9f70888276308095b71b6b845c2cfebd3154dd7e0f4cbbc34866e1d033e9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/add.html.twig", 1);
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
        $__internal_ab1a15788025ef8a258e8043fcd27aa8e7d2b482239691ef90ad265af18ff794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1a15788025ef8a258e8043fcd27aa8e7d2b482239691ef90ad265af18ff794->enter($__internal_ab1a15788025ef8a258e8043fcd27aa8e7d2b482239691ef90ad265af18ff794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/add.html.twig"));

        $__internal_d029022dbeda1c6b7ac0245288547b13ca961674620164659911da59616e3204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d029022dbeda1c6b7ac0245288547b13ca961674620164659911da59616e3204->enter($__internal_d029022dbeda1c6b7ac0245288547b13ca961674620164659911da59616e3204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1a15788025ef8a258e8043fcd27aa8e7d2b482239691ef90ad265af18ff794->leave($__internal_ab1a15788025ef8a258e8043fcd27aa8e7d2b482239691ef90ad265af18ff794_prof);

        
        $__internal_d029022dbeda1c6b7ac0245288547b13ca961674620164659911da59616e3204->leave($__internal_d029022dbeda1c6b7ac0245288547b13ca961674620164659911da59616e3204_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9197e4073393b4e13e3bc4cb950296ba5615837db007b1aaf977a8ee8f9cc382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9197e4073393b4e13e3bc4cb950296ba5615837db007b1aaf977a8ee8f9cc382->enter($__internal_9197e4073393b4e13e3bc4cb950296ba5615837db007b1aaf977a8ee8f9cc382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a801350d710c8870cbd39239faf760297d031e2c10d3bb5d530343209207da32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a801350d710c8870cbd39239faf760297d031e2c10d3bb5d530343209207da32->enter($__internal_a801350d710c8870cbd39239faf760297d031e2c10d3bb5d530343209207da32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_a801350d710c8870cbd39239faf760297d031e2c10d3bb5d530343209207da32->leave($__internal_a801350d710c8870cbd39239faf760297d031e2c10d3bb5d530343209207da32_prof);

        
        $__internal_9197e4073393b4e13e3bc4cb950296ba5615837db007b1aaf977a8ee8f9cc382->leave($__internal_9197e4073393b4e13e3bc4cb950296ba5615837db007b1aaf977a8ee8f9cc382_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41ebd0c3dc5b2f3f578e25ac1470183659348a218f69af3d8ffd2b3ab78d8973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ebd0c3dc5b2f3f578e25ac1470183659348a218f69af3d8ffd2b3ab78d8973->enter($__internal_41ebd0c3dc5b2f3f578e25ac1470183659348a218f69af3d8ffd2b3ab78d8973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_807a3c88dd74463f53c820904a378dfb29b08b677c45351eecc125cfd0091124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807a3c88dd74463f53c820904a378dfb29b08b677c45351eecc125cfd0091124->enter($__internal_807a3c88dd74463f53c820904a378dfb29b08b677c45351eecc125cfd0091124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
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
        
        $__internal_807a3c88dd74463f53c820904a378dfb29b08b677c45351eecc125cfd0091124->leave($__internal_807a3c88dd74463f53c820904a378dfb29b08b677c45351eecc125cfd0091124_prof);

        
        $__internal_41ebd0c3dc5b2f3f578e25ac1470183659348a218f69af3d8ffd2b3ab78d8973->leave($__internal_41ebd0c3dc5b2f3f578e25ac1470183659348a218f69af3d8ffd2b3ab78d8973_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/add.html.twig";
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

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMarque/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\add.html.twig");
    }
}
