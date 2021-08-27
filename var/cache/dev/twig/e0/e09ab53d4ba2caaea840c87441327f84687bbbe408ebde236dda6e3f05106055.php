<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_94188a499e504cf88d5f255f68d5059bacbfd6d2752ba1b42475e756e7cc78c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19d5f425d390ef2337c61629b23e35ac2ed5ec2c26c0b095974f4726cbc50df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d5f425d390ef2337c61629b23e35ac2ed5ec2c26c0b095974f4726cbc50df2->enter($__internal_19d5f425d390ef2337c61629b23e35ac2ed5ec2c26c0b095974f4726cbc50df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_2bd606b795cd0a3da003a7f0148cc0b7845b58e02cc18dfdc01b872d36b319e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd606b795cd0a3da003a7f0148cc0b7845b58e02cc18dfdc01b872d36b319e7->enter($__internal_2bd606b795cd0a3da003a7f0148cc0b7845b58e02cc18dfdc01b872d36b319e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d5f425d390ef2337c61629b23e35ac2ed5ec2c26c0b095974f4726cbc50df2->leave($__internal_19d5f425d390ef2337c61629b23e35ac2ed5ec2c26c0b095974f4726cbc50df2_prof);

        
        $__internal_2bd606b795cd0a3da003a7f0148cc0b7845b58e02cc18dfdc01b872d36b319e7->leave($__internal_2bd606b795cd0a3da003a7f0148cc0b7845b58e02cc18dfdc01b872d36b319e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f23963b2d296c00eeac9ea1903e69485e7728d2538a01ea98a91cab527e49c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f23963b2d296c00eeac9ea1903e69485e7728d2538a01ea98a91cab527e49c1->enter($__internal_6f23963b2d296c00eeac9ea1903e69485e7728d2538a01ea98a91cab527e49c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f235edd2fa2e58a2604fc2ef63ce77054cf8ff96ac59dd654404bc5621143e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f235edd2fa2e58a2604fc2ef63ce77054cf8ff96ac59dd654404bc5621143e0->enter($__internal_3f235edd2fa2e58a2604fc2ef63ce77054cf8ff96ac59dd654404bc5621143e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3f235edd2fa2e58a2604fc2ef63ce77054cf8ff96ac59dd654404bc5621143e0->leave($__internal_3f235edd2fa2e58a2604fc2ef63ce77054cf8ff96ac59dd654404bc5621143e0_prof);

        
        $__internal_6f23963b2d296c00eeac9ea1903e69485e7728d2538a01ea98a91cab527e49c1->leave($__internal_6f23963b2d296c00eeac9ea1903e69485e7728d2538a01ea98a91cab527e49c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d802fa7df99a9c5fa1d230328a350ff28098547e96214998375998f38d967db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d802fa7df99a9c5fa1d230328a350ff28098547e96214998375998f38d967db2->enter($__internal_d802fa7df99a9c5fa1d230328a350ff28098547e96214998375998f38d967db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04ac72b2ac9459fdd49e2a84b0bfc5ad4e9b46d91d2745ca96de39bca8abb2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ac72b2ac9459fdd49e2a84b0bfc5ad4e9b46d91d2745ca96de39bca8abb2a6->enter($__internal_04ac72b2ac9459fdd49e2a84b0bfc5ad4e9b46d91d2745ca96de39bca8abb2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_04ac72b2ac9459fdd49e2a84b0bfc5ad4e9b46d91d2745ca96de39bca8abb2a6->leave($__internal_04ac72b2ac9459fdd49e2a84b0bfc5ad4e9b46d91d2745ca96de39bca8abb2a6_prof);

        
        $__internal_d802fa7df99a9c5fa1d230328a350ff28098547e96214998375998f38d967db2->leave($__internal_d802fa7df99a9c5fa1d230328a350ff28098547e96214998375998f38d967db2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
