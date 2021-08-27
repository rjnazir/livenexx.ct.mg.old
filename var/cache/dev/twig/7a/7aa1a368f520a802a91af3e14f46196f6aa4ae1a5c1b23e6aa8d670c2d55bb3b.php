<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_218cd397d2709a86c347d534b9f96a5292d124b3fcc7f533a8797f1f520537eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_34318c067962bd96b592c6f35c68c67c32ed2d76201fdc83fed21a49517f8149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34318c067962bd96b592c6f35c68c67c32ed2d76201fdc83fed21a49517f8149->enter($__internal_34318c067962bd96b592c6f35c68c67c32ed2d76201fdc83fed21a49517f8149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $__internal_208cefcd26014e8eda98070bc27593c7c726f41582d1af716f3affe84d087645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208cefcd26014e8eda98070bc27593c7c726f41582d1af716f3affe84d087645->enter($__internal_208cefcd26014e8eda98070bc27593c7c726f41582d1af716f3affe84d087645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34318c067962bd96b592c6f35c68c67c32ed2d76201fdc83fed21a49517f8149->leave($__internal_34318c067962bd96b592c6f35c68c67c32ed2d76201fdc83fed21a49517f8149_prof);

        
        $__internal_208cefcd26014e8eda98070bc27593c7c726f41582d1af716f3affe84d087645->leave($__internal_208cefcd26014e8eda98070bc27593c7c726f41582d1af716f3affe84d087645_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7463bd314b3c213ae4fd955485163ff26870a91fd229ed705b5b75ec73975bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7463bd314b3c213ae4fd955485163ff26870a91fd229ed705b5b75ec73975bd3->enter($__internal_7463bd314b3c213ae4fd955485163ff26870a91fd229ed705b5b75ec73975bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9042eb17f00acf1e3bf7b0289aa08e442ee3d7af65941261fd3ef93c0aa27ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9042eb17f00acf1e3bf7b0289aa08e442ee3d7af65941261fd3ef93c0aa27ae7->enter($__internal_9042eb17f00acf1e3bf7b0289aa08e442ee3d7af65941261fd3ef93c0aa27ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 403 ";
        
        $__internal_9042eb17f00acf1e3bf7b0289aa08e442ee3d7af65941261fd3ef93c0aa27ae7->leave($__internal_9042eb17f00acf1e3bf7b0289aa08e442ee3d7af65941261fd3ef93c0aa27ae7_prof);

        
        $__internal_7463bd314b3c213ae4fd955485163ff26870a91fd229ed705b5b75ec73975bd3->leave($__internal_7463bd314b3c213ae4fd955485163ff26870a91fd229ed705b5b75ec73975bd3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cc5e44de0dc8dc033c65711576afd39dec7fe579ac4bf8175b093d6b1a1004f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc5e44de0dc8dc033c65711576afd39dec7fe579ac4bf8175b093d6b1a1004f->enter($__internal_7cc5e44de0dc8dc033c65711576afd39dec7fe579ac4bf8175b093d6b1a1004f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_451909d683abd6b6192c61cfe560470ed360e26e38f0399cad83f7e9e4bfdd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451909d683abd6b6192c61cfe560470ed360e26e38f0399cad83f7e9e4bfdd28->enter($__internal_451909d683abd6b6192c61cfe560470ed360e26e38f0399cad83f7e9e4bfdd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 403</h1>
                <p>Accès non autorisé</p>
            </div>
        </div>
    </section>
";
        
        $__internal_451909d683abd6b6192c61cfe560470ed360e26e38f0399cad83f7e9e4bfdd28->leave($__internal_451909d683abd6b6192c61cfe560470ed360e26e38f0399cad83f7e9e4bfdd28_prof);

        
        $__internal_7cc5e44de0dc8dc033c65711576afd39dec7fe579ac4bf8175b093d6b1a1004f->leave($__internal_7cc5e44de0dc8dc033c65711576afd39dec7fe579ac4bf8175b093d6b1a1004f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
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

{% block title %} {{ parent() }} Erreur 403 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 403</h1>
                <p>Accès non autorisé</p>
            </div>
        </div>
    </section>
{% endblock %}
", "TwigBundle:Exception:error403.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error403.html.twig");
    }
}
