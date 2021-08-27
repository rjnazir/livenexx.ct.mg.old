<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f1c83555249c4dbdddb7af832c836fb81af8871927f251753a1318a79197cdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6af09fe40e710cb7f91b4966b2cd1649ea9d4bbeaa86c6bbdeea68e354edfa9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af09fe40e710cb7f91b4966b2cd1649ea9d4bbeaa86c6bbdeea68e354edfa9c->enter($__internal_6af09fe40e710cb7f91b4966b2cd1649ea9d4bbeaa86c6bbdeea68e354edfa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_ad2042545e31847b09a95b6a56dd07564a7632ba2b409e7212dff182cde5998a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2042545e31847b09a95b6a56dd07564a7632ba2b409e7212dff182cde5998a->enter($__internal_ad2042545e31847b09a95b6a56dd07564a7632ba2b409e7212dff182cde5998a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6af09fe40e710cb7f91b4966b2cd1649ea9d4bbeaa86c6bbdeea68e354edfa9c->leave($__internal_6af09fe40e710cb7f91b4966b2cd1649ea9d4bbeaa86c6bbdeea68e354edfa9c_prof);

        
        $__internal_ad2042545e31847b09a95b6a56dd07564a7632ba2b409e7212dff182cde5998a->leave($__internal_ad2042545e31847b09a95b6a56dd07564a7632ba2b409e7212dff182cde5998a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_724b7fd31bc9f612fa10686d8125866ad2be08bea1bb51b51f25a099f57ccda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724b7fd31bc9f612fa10686d8125866ad2be08bea1bb51b51f25a099f57ccda0->enter($__internal_724b7fd31bc9f612fa10686d8125866ad2be08bea1bb51b51f25a099f57ccda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e5f3d69359f13ff5df55c56b04e310d587a1d4ebad973480c63ad225275a416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5f3d69359f13ff5df55c56b04e310d587a1d4ebad973480c63ad225275a416->enter($__internal_7e5f3d69359f13ff5df55c56b04e310d587a1d4ebad973480c63ad225275a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7e5f3d69359f13ff5df55c56b04e310d587a1d4ebad973480c63ad225275a416->leave($__internal_7e5f3d69359f13ff5df55c56b04e310d587a1d4ebad973480c63ad225275a416_prof);

        
        $__internal_724b7fd31bc9f612fa10686d8125866ad2be08bea1bb51b51f25a099f57ccda0->leave($__internal_724b7fd31bc9f612fa10686d8125866ad2be08bea1bb51b51f25a099f57ccda0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
