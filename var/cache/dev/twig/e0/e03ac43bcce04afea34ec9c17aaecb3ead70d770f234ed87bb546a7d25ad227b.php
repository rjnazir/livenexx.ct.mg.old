<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ecf59fc592b2ec0fac205d9bac7b44a1943421696a90325e8500aff75ed81aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2c3d1681f7a958d4430b66442153b53a8502fc3bd2c646a8f9a5c8f26afeb45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3d1681f7a958d4430b66442153b53a8502fc3bd2c646a8f9a5c8f26afeb45a->enter($__internal_2c3d1681f7a958d4430b66442153b53a8502fc3bd2c646a8f9a5c8f26afeb45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b2380ca30500187094549a53db3d7f2c69db1bed066145a9463f9ed2430c7e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2380ca30500187094549a53db3d7f2c69db1bed066145a9463f9ed2430c7e85->enter($__internal_b2380ca30500187094549a53db3d7f2c69db1bed066145a9463f9ed2430c7e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3d1681f7a958d4430b66442153b53a8502fc3bd2c646a8f9a5c8f26afeb45a->leave($__internal_2c3d1681f7a958d4430b66442153b53a8502fc3bd2c646a8f9a5c8f26afeb45a_prof);

        
        $__internal_b2380ca30500187094549a53db3d7f2c69db1bed066145a9463f9ed2430c7e85->leave($__internal_b2380ca30500187094549a53db3d7f2c69db1bed066145a9463f9ed2430c7e85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f216fdcbb5542e40673af41c050380199b8feaed74aedd4d5e4e265465e24e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f216fdcbb5542e40673af41c050380199b8feaed74aedd4d5e4e265465e24e26->enter($__internal_f216fdcbb5542e40673af41c050380199b8feaed74aedd4d5e4e265465e24e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0e30dab0f0e0751c17e64953cdb36bb3adc01d4422136c1c8e166b3e5e73121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e30dab0f0e0751c17e64953cdb36bb3adc01d4422136c1c8e166b3e5e73121->enter($__internal_d0e30dab0f0e0751c17e64953cdb36bb3adc01d4422136c1c8e166b3e5e73121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d0e30dab0f0e0751c17e64953cdb36bb3adc01d4422136c1c8e166b3e5e73121->leave($__internal_d0e30dab0f0e0751c17e64953cdb36bb3adc01d4422136c1c8e166b3e5e73121_prof);

        
        $__internal_f216fdcbb5542e40673af41c050380199b8feaed74aedd4d5e4e265465e24e26->leave($__internal_f216fdcbb5542e40673af41c050380199b8feaed74aedd4d5e4e265465e24e26_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
