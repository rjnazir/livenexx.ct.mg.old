<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92f8f13a517b61b35821e19091f03f93a7fbdfe0b468246620e55a5a5f869a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b9fb21e16a413265fb4e01b3621b98e38dc18fa235ca4f22bbd196d0668fad5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fb21e16a413265fb4e01b3621b98e38dc18fa235ca4f22bbd196d0668fad5f->enter($__internal_b9fb21e16a413265fb4e01b3621b98e38dc18fa235ca4f22bbd196d0668fad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d17ba8aeb4cc5e7f9432aaa9c8811d1590d34f8fb571154f7d23b4e4eb3cbbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17ba8aeb4cc5e7f9432aaa9c8811d1590d34f8fb571154f7d23b4e4eb3cbbc6->enter($__internal_d17ba8aeb4cc5e7f9432aaa9c8811d1590d34f8fb571154f7d23b4e4eb3cbbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fb21e16a413265fb4e01b3621b98e38dc18fa235ca4f22bbd196d0668fad5f->leave($__internal_b9fb21e16a413265fb4e01b3621b98e38dc18fa235ca4f22bbd196d0668fad5f_prof);

        
        $__internal_d17ba8aeb4cc5e7f9432aaa9c8811d1590d34f8fb571154f7d23b4e4eb3cbbc6->leave($__internal_d17ba8aeb4cc5e7f9432aaa9c8811d1590d34f8fb571154f7d23b4e4eb3cbbc6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de05ba204f59a7b2050cc536c26702be4db904e07575abd4210b7ef15d97a67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de05ba204f59a7b2050cc536c26702be4db904e07575abd4210b7ef15d97a67e->enter($__internal_de05ba204f59a7b2050cc536c26702be4db904e07575abd4210b7ef15d97a67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8525d8f36c88c3cdccc01aae108f8c0da190ac4d963697d71bb610775b9548e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8525d8f36c88c3cdccc01aae108f8c0da190ac4d963697d71bb610775b9548e3->enter($__internal_8525d8f36c88c3cdccc01aae108f8c0da190ac4d963697d71bb610775b9548e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8525d8f36c88c3cdccc01aae108f8c0da190ac4d963697d71bb610775b9548e3->leave($__internal_8525d8f36c88c3cdccc01aae108f8c0da190ac4d963697d71bb610775b9548e3_prof);

        
        $__internal_de05ba204f59a7b2050cc536c26702be4db904e07575abd4210b7ef15d97a67e->leave($__internal_de05ba204f59a7b2050cc536c26702be4db904e07575abd4210b7ef15d97a67e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
