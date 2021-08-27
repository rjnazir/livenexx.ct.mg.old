<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3e2e3061da5cf62694dade8fef535f75a40c6fea6ce6f15af2c0be005eabcf6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_dada19ac30499490fc3305cf4c639c0116b62076f87b285f1c17836e11b9a895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dada19ac30499490fc3305cf4c639c0116b62076f87b285f1c17836e11b9a895->enter($__internal_dada19ac30499490fc3305cf4c639c0116b62076f87b285f1c17836e11b9a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1bf18efa9ffb7e19c8572b874da32e29fe0b641fd9ca9b809cc7125182d3ff9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf18efa9ffb7e19c8572b874da32e29fe0b641fd9ca9b809cc7125182d3ff9e->enter($__internal_1bf18efa9ffb7e19c8572b874da32e29fe0b641fd9ca9b809cc7125182d3ff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dada19ac30499490fc3305cf4c639c0116b62076f87b285f1c17836e11b9a895->leave($__internal_dada19ac30499490fc3305cf4c639c0116b62076f87b285f1c17836e11b9a895_prof);

        
        $__internal_1bf18efa9ffb7e19c8572b874da32e29fe0b641fd9ca9b809cc7125182d3ff9e->leave($__internal_1bf18efa9ffb7e19c8572b874da32e29fe0b641fd9ca9b809cc7125182d3ff9e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c341cdd8baa8fa2588571d461c65c6071ac4dedde4f9515b9b7dff3010844a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c341cdd8baa8fa2588571d461c65c6071ac4dedde4f9515b9b7dff3010844a69->enter($__internal_c341cdd8baa8fa2588571d461c65c6071ac4dedde4f9515b9b7dff3010844a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f540e7d248283d57a2d5ce3eb765f026b567930dc5193a326c5f25ef6fc862f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f540e7d248283d57a2d5ce3eb765f026b567930dc5193a326c5f25ef6fc862f3->enter($__internal_f540e7d248283d57a2d5ce3eb765f026b567930dc5193a326c5f25ef6fc862f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_f540e7d248283d57a2d5ce3eb765f026b567930dc5193a326c5f25ef6fc862f3->leave($__internal_f540e7d248283d57a2d5ce3eb765f026b567930dc5193a326c5f25ef6fc862f3_prof);

        
        $__internal_c341cdd8baa8fa2588571d461c65c6071ac4dedde4f9515b9b7dff3010844a69->leave($__internal_c341cdd8baa8fa2588571d461c65c6071ac4dedde4f9515b9b7dff3010844a69_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
