<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fd6ce486008a45ae682fdbb097b35adc919213fda3c24cd13ffc17dc4b6032f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bafd0e5389d2fe3b17eecd6e8b76fe095eb6305d94900eb9f7343a1099ee913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bafd0e5389d2fe3b17eecd6e8b76fe095eb6305d94900eb9f7343a1099ee913->enter($__internal_2bafd0e5389d2fe3b17eecd6e8b76fe095eb6305d94900eb9f7343a1099ee913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_07b26221f9545f808a44a6c5223086e4cfa7d36067f729491bd057ff763dac62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b26221f9545f808a44a6c5223086e4cfa7d36067f729491bd057ff763dac62->enter($__internal_07b26221f9545f808a44a6c5223086e4cfa7d36067f729491bd057ff763dac62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2bafd0e5389d2fe3b17eecd6e8b76fe095eb6305d94900eb9f7343a1099ee913->leave($__internal_2bafd0e5389d2fe3b17eecd6e8b76fe095eb6305d94900eb9f7343a1099ee913_prof);

        
        $__internal_07b26221f9545f808a44a6c5223086e4cfa7d36067f729491bd057ff763dac62->leave($__internal_07b26221f9545f808a44a6c5223086e4cfa7d36067f729491bd057ff763dac62_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_276d6aa4a6d42683026aef283fb10bdbd9955adeac87b79b7b143ecb5f83de29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276d6aa4a6d42683026aef283fb10bdbd9955adeac87b79b7b143ecb5f83de29->enter($__internal_276d6aa4a6d42683026aef283fb10bdbd9955adeac87b79b7b143ecb5f83de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9582e0462805a6d56da8d364f4fb5295388587bb5e99e61d228770076762e313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9582e0462805a6d56da8d364f4fb5295388587bb5e99e61d228770076762e313->enter($__internal_9582e0462805a6d56da8d364f4fb5295388587bb5e99e61d228770076762e313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9582e0462805a6d56da8d364f4fb5295388587bb5e99e61d228770076762e313->leave($__internal_9582e0462805a6d56da8d364f4fb5295388587bb5e99e61d228770076762e313_prof);

        
        $__internal_276d6aa4a6d42683026aef283fb10bdbd9955adeac87b79b7b143ecb5f83de29->leave($__internal_276d6aa4a6d42683026aef283fb10bdbd9955adeac87b79b7b143ecb5f83de29_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
