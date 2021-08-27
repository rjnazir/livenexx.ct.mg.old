<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8aa87b71f0276fddde7ce416a5a4adfe2ad558a1150ffb2ab3d9234e4782ad80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_ae2ffa0a214b886d7e695121475269cd1c66571309caf424fc56de95750c31f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2ffa0a214b886d7e695121475269cd1c66571309caf424fc56de95750c31f9->enter($__internal_ae2ffa0a214b886d7e695121475269cd1c66571309caf424fc56de95750c31f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a090bfb831a2c06cb53640df83f97a3d645655be834018cb3e83cf9e916df646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a090bfb831a2c06cb53640df83f97a3d645655be834018cb3e83cf9e916df646->enter($__internal_a090bfb831a2c06cb53640df83f97a3d645655be834018cb3e83cf9e916df646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae2ffa0a214b886d7e695121475269cd1c66571309caf424fc56de95750c31f9->leave($__internal_ae2ffa0a214b886d7e695121475269cd1c66571309caf424fc56de95750c31f9_prof);

        
        $__internal_a090bfb831a2c06cb53640df83f97a3d645655be834018cb3e83cf9e916df646->leave($__internal_a090bfb831a2c06cb53640df83f97a3d645655be834018cb3e83cf9e916df646_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc93e1cf38ad912db2e1112ba82d19d570cc47a81df062b26765d790e7be96e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc93e1cf38ad912db2e1112ba82d19d570cc47a81df062b26765d790e7be96e9->enter($__internal_cc93e1cf38ad912db2e1112ba82d19d570cc47a81df062b26765d790e7be96e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1a750c2d955e71b8866bbc013498dea96ff36da0a56538ca52ab121c31f0797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a750c2d955e71b8866bbc013498dea96ff36da0a56538ca52ab121c31f0797->enter($__internal_c1a750c2d955e71b8866bbc013498dea96ff36da0a56538ca52ab121c31f0797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c1a750c2d955e71b8866bbc013498dea96ff36da0a56538ca52ab121c31f0797->leave($__internal_c1a750c2d955e71b8866bbc013498dea96ff36da0a56538ca52ab121c31f0797_prof);

        
        $__internal_cc93e1cf38ad912db2e1112ba82d19d570cc47a81df062b26765d790e7be96e9->leave($__internal_cc93e1cf38ad912db2e1112ba82d19d570cc47a81df062b26765d790e7be96e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
