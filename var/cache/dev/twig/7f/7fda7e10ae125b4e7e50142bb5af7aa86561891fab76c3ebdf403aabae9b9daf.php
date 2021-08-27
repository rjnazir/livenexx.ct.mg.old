<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cfee46f8a83c5464cfa4d01ea4087c49c14a61975b8c200e4970ef181c40d5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_109bd1e7bb1f08e889adfc290c5d8c84aeb868eb1f4bae52c9579cde5cc32dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_109bd1e7bb1f08e889adfc290c5d8c84aeb868eb1f4bae52c9579cde5cc32dd8->enter($__internal_109bd1e7bb1f08e889adfc290c5d8c84aeb868eb1f4bae52c9579cde5cc32dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8c31096b225981dbbdeba27731f71b12c4122dec809709a66550e747936f996a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c31096b225981dbbdeba27731f71b12c4122dec809709a66550e747936f996a->enter($__internal_8c31096b225981dbbdeba27731f71b12c4122dec809709a66550e747936f996a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_109bd1e7bb1f08e889adfc290c5d8c84aeb868eb1f4bae52c9579cde5cc32dd8->leave($__internal_109bd1e7bb1f08e889adfc290c5d8c84aeb868eb1f4bae52c9579cde5cc32dd8_prof);

        
        $__internal_8c31096b225981dbbdeba27731f71b12c4122dec809709a66550e747936f996a->leave($__internal_8c31096b225981dbbdeba27731f71b12c4122dec809709a66550e747936f996a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a3b0b96b941fac4fbf5a3c2e5080bac108a5461c5f2be3314a3d9620f579c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3b0b96b941fac4fbf5a3c2e5080bac108a5461c5f2be3314a3d9620f579c73->enter($__internal_6a3b0b96b941fac4fbf5a3c2e5080bac108a5461c5f2be3314a3d9620f579c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc660ca1d304488aa2c3e200078833e254e656670255b5f706ce7cbfe1c036f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc660ca1d304488aa2c3e200078833e254e656670255b5f706ce7cbfe1c036f7->enter($__internal_fc660ca1d304488aa2c3e200078833e254e656670255b5f706ce7cbfe1c036f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fc660ca1d304488aa2c3e200078833e254e656670255b5f706ce7cbfe1c036f7->leave($__internal_fc660ca1d304488aa2c3e200078833e254e656670255b5f706ce7cbfe1c036f7_prof);

        
        $__internal_6a3b0b96b941fac4fbf5a3c2e5080bac108a5461c5f2be3314a3d9620f579c73->leave($__internal_6a3b0b96b941fac4fbf5a3c2e5080bac108a5461c5f2be3314a3d9620f579c73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
