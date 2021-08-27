<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f8399bcfba6c21faab5f0f429a83a69d15af92eb4b20b8fa581940386fc3ce2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7ecaf095325e8ec0704487449c17d3858649b5db1f6ee42c255bf59baef82155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ecaf095325e8ec0704487449c17d3858649b5db1f6ee42c255bf59baef82155->enter($__internal_7ecaf095325e8ec0704487449c17d3858649b5db1f6ee42c255bf59baef82155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_91f19b1f195b8cdaba4bd95a09e26d491556bb7b633dd94a25947d0b00e5d1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f19b1f195b8cdaba4bd95a09e26d491556bb7b633dd94a25947d0b00e5d1d3->enter($__internal_91f19b1f195b8cdaba4bd95a09e26d491556bb7b633dd94a25947d0b00e5d1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ecaf095325e8ec0704487449c17d3858649b5db1f6ee42c255bf59baef82155->leave($__internal_7ecaf095325e8ec0704487449c17d3858649b5db1f6ee42c255bf59baef82155_prof);

        
        $__internal_91f19b1f195b8cdaba4bd95a09e26d491556bb7b633dd94a25947d0b00e5d1d3->leave($__internal_91f19b1f195b8cdaba4bd95a09e26d491556bb7b633dd94a25947d0b00e5d1d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2d16f7a6d1db30dd4e7a7cba3353c08905baba6997fa3ae2ca37ed25c7f4961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d16f7a6d1db30dd4e7a7cba3353c08905baba6997fa3ae2ca37ed25c7f4961->enter($__internal_c2d16f7a6d1db30dd4e7a7cba3353c08905baba6997fa3ae2ca37ed25c7f4961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5973ab4229450e147006b0ba8237e4c4e9b644f47c9a845b671dd156fa88e025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5973ab4229450e147006b0ba8237e4c4e9b644f47c9a845b671dd156fa88e025->enter($__internal_5973ab4229450e147006b0ba8237e4c4e9b644f47c9a845b671dd156fa88e025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5973ab4229450e147006b0ba8237e4c4e9b644f47c9a845b671dd156fa88e025->leave($__internal_5973ab4229450e147006b0ba8237e4c4e9b644f47c9a845b671dd156fa88e025_prof);

        
        $__internal_c2d16f7a6d1db30dd4e7a7cba3353c08905baba6997fa3ae2ca37ed25c7f4961->leave($__internal_c2d16f7a6d1db30dd4e7a7cba3353c08905baba6997fa3ae2ca37ed25c7f4961_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
