<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c79866291fbcd820ed64978a499448e75602a8928c2221060e34544ad30b18dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_c0bb3bcca06342a866af201a39c786d43128acde6a64489a945c4b80e5b14dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bb3bcca06342a866af201a39c786d43128acde6a64489a945c4b80e5b14dd5->enter($__internal_c0bb3bcca06342a866af201a39c786d43128acde6a64489a945c4b80e5b14dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_ef81b95b2bd20750d68003899a3d8e0c469dbefc1062f22a3f055f7c8b63e663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef81b95b2bd20750d68003899a3d8e0c469dbefc1062f22a3f055f7c8b63e663->enter($__internal_ef81b95b2bd20750d68003899a3d8e0c469dbefc1062f22a3f055f7c8b63e663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0bb3bcca06342a866af201a39c786d43128acde6a64489a945c4b80e5b14dd5->leave($__internal_c0bb3bcca06342a866af201a39c786d43128acde6a64489a945c4b80e5b14dd5_prof);

        
        $__internal_ef81b95b2bd20750d68003899a3d8e0c469dbefc1062f22a3f055f7c8b63e663->leave($__internal_ef81b95b2bd20750d68003899a3d8e0c469dbefc1062f22a3f055f7c8b63e663_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_038d9028c1e5c232dfc3f6a6e1a123f8fb27903340a10602cb7188808010209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038d9028c1e5c232dfc3f6a6e1a123f8fb27903340a10602cb7188808010209c->enter($__internal_038d9028c1e5c232dfc3f6a6e1a123f8fb27903340a10602cb7188808010209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9354f0683abc3ea57135920f3a59403c88b542c1a2871bd81c5b03bd65aeb81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9354f0683abc3ea57135920f3a59403c88b542c1a2871bd81c5b03bd65aeb81a->enter($__internal_9354f0683abc3ea57135920f3a59403c88b542c1a2871bd81c5b03bd65aeb81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9354f0683abc3ea57135920f3a59403c88b542c1a2871bd81c5b03bd65aeb81a->leave($__internal_9354f0683abc3ea57135920f3a59403c88b542c1a2871bd81c5b03bd65aeb81a_prof);

        
        $__internal_038d9028c1e5c232dfc3f6a6e1a123f8fb27903340a10602cb7188808010209c->leave($__internal_038d9028c1e5c232dfc3f6a6e1a123f8fb27903340a10602cb7188808010209c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
