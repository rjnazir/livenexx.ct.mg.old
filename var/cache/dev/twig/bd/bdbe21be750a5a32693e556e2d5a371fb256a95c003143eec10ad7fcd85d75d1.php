<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_99080c9fe8b09cf461f217b1e46961aaaf4ad26af2e8efd1f8ba16a1bff9244f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_bbb2460a5123bc5261877b9f8cb14ab2742be1e5ef6cc91cec187e55aa313531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb2460a5123bc5261877b9f8cb14ab2742be1e5ef6cc91cec187e55aa313531->enter($__internal_bbb2460a5123bc5261877b9f8cb14ab2742be1e5ef6cc91cec187e55aa313531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b251a5a9820e1cb5409d91e3fe61515154af2dbe33e1d911ec699f5a7307762a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b251a5a9820e1cb5409d91e3fe61515154af2dbe33e1d911ec699f5a7307762a->enter($__internal_b251a5a9820e1cb5409d91e3fe61515154af2dbe33e1d911ec699f5a7307762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb2460a5123bc5261877b9f8cb14ab2742be1e5ef6cc91cec187e55aa313531->leave($__internal_bbb2460a5123bc5261877b9f8cb14ab2742be1e5ef6cc91cec187e55aa313531_prof);

        
        $__internal_b251a5a9820e1cb5409d91e3fe61515154af2dbe33e1d911ec699f5a7307762a->leave($__internal_b251a5a9820e1cb5409d91e3fe61515154af2dbe33e1d911ec699f5a7307762a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_965ed8bbcc3c200d6a7405240d93d385d9d35c772e7ea922427c92e684f6bbd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965ed8bbcc3c200d6a7405240d93d385d9d35c772e7ea922427c92e684f6bbd1->enter($__internal_965ed8bbcc3c200d6a7405240d93d385d9d35c772e7ea922427c92e684f6bbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8dc7edbf71a814bfee4e99fc9ba57e8600972c483fb7838889784fe5c2c641e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc7edbf71a814bfee4e99fc9ba57e8600972c483fb7838889784fe5c2c641e2->enter($__internal_8dc7edbf71a814bfee4e99fc9ba57e8600972c483fb7838889784fe5c2c641e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8dc7edbf71a814bfee4e99fc9ba57e8600972c483fb7838889784fe5c2c641e2->leave($__internal_8dc7edbf71a814bfee4e99fc9ba57e8600972c483fb7838889784fe5c2c641e2_prof);

        
        $__internal_965ed8bbcc3c200d6a7405240d93d385d9d35c772e7ea922427c92e684f6bbd1->leave($__internal_965ed8bbcc3c200d6a7405240d93d385d9d35c772e7ea922427c92e684f6bbd1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
