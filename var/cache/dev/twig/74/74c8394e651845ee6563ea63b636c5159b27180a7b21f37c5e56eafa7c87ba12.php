<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_cbe9ba73c6344bbeede0232553acff12bab02f5166fcddaf917774492978128d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_458a6ae7743900a0fa134874e8c31f038a0b069b675e5f8949fc7e2b470b06c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458a6ae7743900a0fa134874e8c31f038a0b069b675e5f8949fc7e2b470b06c8->enter($__internal_458a6ae7743900a0fa134874e8c31f038a0b069b675e5f8949fc7e2b470b06c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_b9a5e599e8519364333e341ef48196d3e742566f7ec8e57bfe615f6aada5fdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a5e599e8519364333e341ef48196d3e742566f7ec8e57bfe615f6aada5fdaa->enter($__internal_b9a5e599e8519364333e341ef48196d3e742566f7ec8e57bfe615f6aada5fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458a6ae7743900a0fa134874e8c31f038a0b069b675e5f8949fc7e2b470b06c8->leave($__internal_458a6ae7743900a0fa134874e8c31f038a0b069b675e5f8949fc7e2b470b06c8_prof);

        
        $__internal_b9a5e599e8519364333e341ef48196d3e742566f7ec8e57bfe615f6aada5fdaa->leave($__internal_b9a5e599e8519364333e341ef48196d3e742566f7ec8e57bfe615f6aada5fdaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd2d7468792d50634d7447691e05fca6cb9976d6a00cc1c68c633ea43ef101c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd2d7468792d50634d7447691e05fca6cb9976d6a00cc1c68c633ea43ef101c0->enter($__internal_dd2d7468792d50634d7447691e05fca6cb9976d6a00cc1c68c633ea43ef101c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6a9cefde46682d1095b7b8cb24ce2138fd1a4b210c80ff2b2d4c67b2ac9e36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a9cefde46682d1095b7b8cb24ce2138fd1a4b210c80ff2b2d4c67b2ac9e36b->enter($__internal_f6a9cefde46682d1095b7b8cb24ce2138fd1a4b210c80ff2b2d4c67b2ac9e36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f6a9cefde46682d1095b7b8cb24ce2138fd1a4b210c80ff2b2d4c67b2ac9e36b->leave($__internal_f6a9cefde46682d1095b7b8cb24ce2138fd1a4b210c80ff2b2d4c67b2ac9e36b_prof);

        
        $__internal_dd2d7468792d50634d7447691e05fca6cb9976d6a00cc1c68c633ea43ef101c0->leave($__internal_dd2d7468792d50634d7447691e05fca6cb9976d6a00cc1c68c633ea43ef101c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
