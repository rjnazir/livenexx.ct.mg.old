<?php

/* @Admin/CtImprimeTech/add.html.twig */
class __TwigTemplate_230f5fb0cbb7e57ab574c860ad705af71f92cfecaadba742ece45f1bcc71cfc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtImprimeTech/add.html.twig", 1);
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
        $__internal_bba2fc072e4986e5f5dc9e72c00f4fa19a07cd72e0a3b93fcde4cfc698eb417b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba2fc072e4986e5f5dc9e72c00f4fa19a07cd72e0a3b93fcde4cfc698eb417b->enter($__internal_bba2fc072e4986e5f5dc9e72c00f4fa19a07cd72e0a3b93fcde4cfc698eb417b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/add.html.twig"));

        $__internal_46b2ca0df12dea47ab411568860a1cda83e7a47be644d4524dc27fa9899b5c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b2ca0df12dea47ab411568860a1cda83e7a47be644d4524dc27fa9899b5c74->enter($__internal_46b2ca0df12dea47ab411568860a1cda83e7a47be644d4524dc27fa9899b5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtImprimeTech/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_imprime_tech"] = true;
        // line 8
        $context["menu_imprime_tech_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba2fc072e4986e5f5dc9e72c00f4fa19a07cd72e0a3b93fcde4cfc698eb417b->leave($__internal_bba2fc072e4986e5f5dc9e72c00f4fa19a07cd72e0a3b93fcde4cfc698eb417b_prof);

        
        $__internal_46b2ca0df12dea47ab411568860a1cda83e7a47be644d4524dc27fa9899b5c74->leave($__internal_46b2ca0df12dea47ab411568860a1cda83e7a47be644d4524dc27fa9899b5c74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea1f6b98a1b60db03ea12df844b26c21a167392bd2680d7c8ddf3a82e28be59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea1f6b98a1b60db03ea12df844b26c21a167392bd2680d7c8ddf3a82e28be59->enter($__internal_dea1f6b98a1b60db03ea12df844b26c21a167392bd2680d7c8ddf3a82e28be59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d99729217c2c9c516e5b30982ced8f06e7d489478a0412375f6c8ec144f2b70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99729217c2c9c516e5b30982ced8f06e7d489478a0412375f6c8ec144f2b70c->enter($__internal_d99729217c2c9c516e5b30982ced8f06e7d489478a0412375f6c8ec144f2b70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_d99729217c2c9c516e5b30982ced8f06e7d489478a0412375f6c8ec144f2b70c->leave($__internal_d99729217c2c9c516e5b30982ced8f06e7d489478a0412375f6c8ec144f2b70c_prof);

        
        $__internal_dea1f6b98a1b60db03ea12df844b26c21a167392bd2680d7c8ddf3a82e28be59->leave($__internal_dea1f6b98a1b60db03ea12df844b26c21a167392bd2680d7c8ddf3a82e28be59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54bd1c4260ff4f17f40f49babf1bcd46f91d1155906cacf03f90888c675ca6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bd1c4260ff4f17f40f49babf1bcd46f91d1155906cacf03f90888c675ca6ae->enter($__internal_54bd1c4260ff4f17f40f49babf1bcd46f91d1155906cacf03f90888c675ca6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dffd8a52b89ade456799e3fff09d1ec57e4998c1b2e69ed1e97b16b9b0daa4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dffd8a52b89ade456799e3fff09d1ec57e4998c1b2e69ed1e97b16b9b0daa4c5->enter($__internal_dffd8a52b89ade456799e3fff09d1ec57e4998c1b2e69ed1e97b16b9b0daa4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "uteImprimeTech", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
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
        
        $__internal_dffd8a52b89ade456799e3fff09d1ec57e4998c1b2e69ed1e97b16b9b0daa4c5->leave($__internal_dffd8a52b89ade456799e3fff09d1ec57e4998c1b2e69ed1e97b16b9b0daa4c5_prof);

        
        $__internal_54bd1c4260ff4f17f40f49babf1bcd46f91d1155906cacf03f90888c675ca6ae->leave($__internal_54bd1c4260ff4f17f40f49babf1bcd46f91d1155906cacf03f90888c675ca6ae_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtImprimeTech/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  140 => 40,  132 => 35,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% set menu_imprime_tech        = true %}
{% set menu_imprime_tech_create = true %}

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
                        <h3 class=\"box-title\">Créer un imprimé technique</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.nomImprimeTech) }}
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.uteImprimeTech) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_imprime_tech\"/>
                        <a href=\"{{ path('imprime_tech_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtImprimeTech/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtImprimeTech\\add.html.twig");
    }
}
