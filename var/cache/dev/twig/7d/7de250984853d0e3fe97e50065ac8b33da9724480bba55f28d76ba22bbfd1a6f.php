<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_da1a9481cbdbc969e7df5225f7bb98689f71cbd4b61ffcd19816e1d38f4c111f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error500.html.twig", 1);
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
        $__internal_55343ac3cf5708a62785d709f8276b820fd2734dba5622eb934e5bee0cf23cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55343ac3cf5708a62785d709f8276b820fd2734dba5622eb934e5bee0cf23cf8->enter($__internal_55343ac3cf5708a62785d709f8276b820fd2734dba5622eb934e5bee0cf23cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $__internal_0ca6b62334f67153eec0c13afa1fd80344bb65803163b0781c3986b5d4b1e51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca6b62334f67153eec0c13afa1fd80344bb65803163b0781c3986b5d4b1e51b->enter($__internal_0ca6b62334f67153eec0c13afa1fd80344bb65803163b0781c3986b5d4b1e51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55343ac3cf5708a62785d709f8276b820fd2734dba5622eb934e5bee0cf23cf8->leave($__internal_55343ac3cf5708a62785d709f8276b820fd2734dba5622eb934e5bee0cf23cf8_prof);

        
        $__internal_0ca6b62334f67153eec0c13afa1fd80344bb65803163b0781c3986b5d4b1e51b->leave($__internal_0ca6b62334f67153eec0c13afa1fd80344bb65803163b0781c3986b5d4b1e51b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0206e9f9cfea7d85d290b7a297d2423b9cee321b04e7bfbaa0392d2de648130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0206e9f9cfea7d85d290b7a297d2423b9cee321b04e7bfbaa0392d2de648130->enter($__internal_d0206e9f9cfea7d85d290b7a297d2423b9cee321b04e7bfbaa0392d2de648130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4282a4071f8d2672ef6cf6f9e72fba454a780ed71ad304b8f62357fafb85249a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4282a4071f8d2672ef6cf6f9e72fba454a780ed71ad304b8f62357fafb85249a->enter($__internal_4282a4071f8d2672ef6cf6f9e72fba454a780ed71ad304b8f62357fafb85249a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_4282a4071f8d2672ef6cf6f9e72fba454a780ed71ad304b8f62357fafb85249a->leave($__internal_4282a4071f8d2672ef6cf6f9e72fba454a780ed71ad304b8f62357fafb85249a_prof);

        
        $__internal_d0206e9f9cfea7d85d290b7a297d2423b9cee321b04e7bfbaa0392d2de648130->leave($__internal_d0206e9f9cfea7d85d290b7a297d2423b9cee321b04e7bfbaa0392d2de648130_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_614eb4bdf6226ca36e7a692773fe1af765e27bb8253d1570ef893e5097834153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614eb4bdf6226ca36e7a692773fe1af765e27bb8253d1570ef893e5097834153->enter($__internal_614eb4bdf6226ca36e7a692773fe1af765e27bb8253d1570ef893e5097834153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2397a7eb45286128f5e75e1c5aa2231e1607185f0b01ea6b58ad41a7e980e025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2397a7eb45286128f5e75e1c5aa2231e1607185f0b01ea6b58ad41a7e980e025->enter($__internal_2397a7eb45286128f5e75e1c5aa2231e1607185f0b01ea6b58ad41a7e980e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
";
        
        $__internal_2397a7eb45286128f5e75e1c5aa2231e1607185f0b01ea6b58ad41a7e980e025->leave($__internal_2397a7eb45286128f5e75e1c5aa2231e1607185f0b01ea6b58ad41a7e980e025_prof);

        
        $__internal_614eb4bdf6226ca36e7a692773fe1af765e27bb8253d1570ef893e5097834153->leave($__internal_614eb4bdf6226ca36e7a692773fe1af765e27bb8253d1570ef893e5097834153_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
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

{% block title %} {{ parent() }} Erreur 500 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
{% endblock %}", "TwigBundle:Exception:error500.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error500.html.twig");
    }
}
