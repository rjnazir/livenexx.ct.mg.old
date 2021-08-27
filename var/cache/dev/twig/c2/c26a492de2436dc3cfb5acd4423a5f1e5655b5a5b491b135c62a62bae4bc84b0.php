<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_275ca02f4731d7d49dff390a592126197c09f31d82a9ac6f271f2731659757a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_64859d89b7ad2daeca52f7618aaa455cf21f1606481f14d376e4bbf48fdc4f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64859d89b7ad2daeca52f7618aaa455cf21f1606481f14d376e4bbf48fdc4f3f->enter($__internal_64859d89b7ad2daeca52f7618aaa455cf21f1606481f14d376e4bbf48fdc4f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_ec1b2a38ba8180a76f55d8a4b9ac80cdf5cfe1b785b343e36510afab4782a3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec1b2a38ba8180a76f55d8a4b9ac80cdf5cfe1b785b343e36510afab4782a3b8->enter($__internal_ec1b2a38ba8180a76f55d8a4b9ac80cdf5cfe1b785b343e36510afab4782a3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64859d89b7ad2daeca52f7618aaa455cf21f1606481f14d376e4bbf48fdc4f3f->leave($__internal_64859d89b7ad2daeca52f7618aaa455cf21f1606481f14d376e4bbf48fdc4f3f_prof);

        
        $__internal_ec1b2a38ba8180a76f55d8a4b9ac80cdf5cfe1b785b343e36510afab4782a3b8->leave($__internal_ec1b2a38ba8180a76f55d8a4b9ac80cdf5cfe1b785b343e36510afab4782a3b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc890a9d59ead03df0e493afd1bc4cc576994e16a01a2add78c801c250f2ee02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc890a9d59ead03df0e493afd1bc4cc576994e16a01a2add78c801c250f2ee02->enter($__internal_cc890a9d59ead03df0e493afd1bc4cc576994e16a01a2add78c801c250f2ee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_531c37cdc8ee322d2faeca310473fd87dd6682773278e6d798d8e300ed69e8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531c37cdc8ee322d2faeca310473fd87dd6682773278e6d798d8e300ed69e8bc->enter($__internal_531c37cdc8ee322d2faeca310473fd87dd6682773278e6d798d8e300ed69e8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_531c37cdc8ee322d2faeca310473fd87dd6682773278e6d798d8e300ed69e8bc->leave($__internal_531c37cdc8ee322d2faeca310473fd87dd6682773278e6d798d8e300ed69e8bc_prof);

        
        $__internal_cc890a9d59ead03df0e493afd1bc4cc576994e16a01a2add78c801c250f2ee02->leave($__internal_cc890a9d59ead03df0e493afd1bc4cc576994e16a01a2add78c801c250f2ee02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
