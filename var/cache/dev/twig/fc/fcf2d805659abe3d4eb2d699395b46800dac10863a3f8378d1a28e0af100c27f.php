<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e877d6b0e8f3845b2f0d971c61978e9cf8b62f05a3cf350477b9fb7fb37669d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_308ef2e1bf75ffc1f7125216ced6bdb70d4bf13c9cb8f91c6f929483e24b7326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308ef2e1bf75ffc1f7125216ced6bdb70d4bf13c9cb8f91c6f929483e24b7326->enter($__internal_308ef2e1bf75ffc1f7125216ced6bdb70d4bf13c9cb8f91c6f929483e24b7326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_ebdcbb19f32227189abd4696e7ed1c786e3fb3f207d023140de8be7e09ac6ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdcbb19f32227189abd4696e7ed1c786e3fb3f207d023140de8be7e09ac6ed9->enter($__internal_ebdcbb19f32227189abd4696e7ed1c786e3fb3f207d023140de8be7e09ac6ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308ef2e1bf75ffc1f7125216ced6bdb70d4bf13c9cb8f91c6f929483e24b7326->leave($__internal_308ef2e1bf75ffc1f7125216ced6bdb70d4bf13c9cb8f91c6f929483e24b7326_prof);

        
        $__internal_ebdcbb19f32227189abd4696e7ed1c786e3fb3f207d023140de8be7e09ac6ed9->leave($__internal_ebdcbb19f32227189abd4696e7ed1c786e3fb3f207d023140de8be7e09ac6ed9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4737a2fa4a01dac7f9a6b8972981266892dad334280e20f8d40ba6a6c25b6f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4737a2fa4a01dac7f9a6b8972981266892dad334280e20f8d40ba6a6c25b6f0a->enter($__internal_4737a2fa4a01dac7f9a6b8972981266892dad334280e20f8d40ba6a6c25b6f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c051c4abca2b1b1b612a7be317dcc32e3607a41af4acb31700ae72ddd65a1692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c051c4abca2b1b1b612a7be317dcc32e3607a41af4acb31700ae72ddd65a1692->enter($__internal_c051c4abca2b1b1b612a7be317dcc32e3607a41af4acb31700ae72ddd65a1692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c051c4abca2b1b1b612a7be317dcc32e3607a41af4acb31700ae72ddd65a1692->leave($__internal_c051c4abca2b1b1b612a7be317dcc32e3607a41af4acb31700ae72ddd65a1692_prof);

        
        $__internal_4737a2fa4a01dac7f9a6b8972981266892dad334280e20f8d40ba6a6c25b6f0a->leave($__internal_4737a2fa4a01dac7f9a6b8972981266892dad334280e20f8d40ba6a6c25b6f0a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
