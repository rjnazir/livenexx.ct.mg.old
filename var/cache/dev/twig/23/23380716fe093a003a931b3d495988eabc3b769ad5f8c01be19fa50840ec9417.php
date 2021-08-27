<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_6bb3bfd00a79c43df9b3dbe2aa9fcdb5ba48dac21fcbb6ac35f194c1952c8505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b571eb5ba5d566488466688e1dbe512ade8b74a16527decab7918484bedb6d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b571eb5ba5d566488466688e1dbe512ade8b74a16527decab7918484bedb6d0d->enter($__internal_b571eb5ba5d566488466688e1dbe512ade8b74a16527decab7918484bedb6d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_926887ac3688399ab458ebb7087b3f8c52af4de708ce707e5bcf71a776500fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926887ac3688399ab458ebb7087b3f8c52af4de708ce707e5bcf71a776500fdd->enter($__internal_926887ac3688399ab458ebb7087b3f8c52af4de708ce707e5bcf71a776500fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b571eb5ba5d566488466688e1dbe512ade8b74a16527decab7918484bedb6d0d->leave($__internal_b571eb5ba5d566488466688e1dbe512ade8b74a16527decab7918484bedb6d0d_prof);

        
        $__internal_926887ac3688399ab458ebb7087b3f8c52af4de708ce707e5bcf71a776500fdd->leave($__internal_926887ac3688399ab458ebb7087b3f8c52af4de708ce707e5bcf71a776500fdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_614dbe9ed565dbb1945e406471aa948a4ae6e1aac28a80f84944f254ba53336b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614dbe9ed565dbb1945e406471aa948a4ae6e1aac28a80f84944f254ba53336b->enter($__internal_614dbe9ed565dbb1945e406471aa948a4ae6e1aac28a80f84944f254ba53336b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_57acf75fd08d532d920059d63d817052a9eb0a53d0ce85dc2fad27876a035f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57acf75fd08d532d920059d63d817052a9eb0a53d0ce85dc2fad27876a035f51->enter($__internal_57acf75fd08d532d920059d63d817052a9eb0a53d0ce85dc2fad27876a035f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_57acf75fd08d532d920059d63d817052a9eb0a53d0ce85dc2fad27876a035f51->leave($__internal_57acf75fd08d532d920059d63d817052a9eb0a53d0ce85dc2fad27876a035f51_prof);

        
        $__internal_614dbe9ed565dbb1945e406471aa948a4ae6e1aac28a80f84944f254ba53336b->leave($__internal_614dbe9ed565dbb1945e406471aa948a4ae6e1aac28a80f84944f254ba53336b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
