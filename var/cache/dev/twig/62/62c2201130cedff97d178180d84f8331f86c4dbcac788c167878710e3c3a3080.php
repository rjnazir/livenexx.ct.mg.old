<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9056fd2e723c8a9c79c8e95aa1d75e1040a76716b68c7fb3e6c5f28472bc2c87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edd2a56cbe99b52e4418ba303b2da97c9539991bd28afc52f60e476d0a762539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd2a56cbe99b52e4418ba303b2da97c9539991bd28afc52f60e476d0a762539->enter($__internal_edd2a56cbe99b52e4418ba303b2da97c9539991bd28afc52f60e476d0a762539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_270b482cae327b3387877361ed40bb56bb530ef5ffb3982c11fa218b235f53ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270b482cae327b3387877361ed40bb56bb530ef5ffb3982c11fa218b235f53ae->enter($__internal_270b482cae327b3387877361ed40bb56bb530ef5ffb3982c11fa218b235f53ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd2a56cbe99b52e4418ba303b2da97c9539991bd28afc52f60e476d0a762539->leave($__internal_edd2a56cbe99b52e4418ba303b2da97c9539991bd28afc52f60e476d0a762539_prof);

        
        $__internal_270b482cae327b3387877361ed40bb56bb530ef5ffb3982c11fa218b235f53ae->leave($__internal_270b482cae327b3387877361ed40bb56bb530ef5ffb3982c11fa218b235f53ae_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_df318920c651837b4e06b503b5ac8efbf47b7ddee57bdc9aa7b599633948cd92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df318920c651837b4e06b503b5ac8efbf47b7ddee57bdc9aa7b599633948cd92->enter($__internal_df318920c651837b4e06b503b5ac8efbf47b7ddee57bdc9aa7b599633948cd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e131ea5d2e537317d5abd4d679e260fc50643cd2ba4a86c6baf993c0d01782bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e131ea5d2e537317d5abd4d679e260fc50643cd2ba4a86c6baf993c0d01782bd->enter($__internal_e131ea5d2e537317d5abd4d679e260fc50643cd2ba4a86c6baf993c0d01782bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e131ea5d2e537317d5abd4d679e260fc50643cd2ba4a86c6baf993c0d01782bd->leave($__internal_e131ea5d2e537317d5abd4d679e260fc50643cd2ba4a86c6baf993c0d01782bd_prof);

        
        $__internal_df318920c651837b4e06b503b5ac8efbf47b7ddee57bdc9aa7b599633948cd92->leave($__internal_df318920c651837b4e06b503b5ac8efbf47b7ddee57bdc9aa7b599633948cd92_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_074dcd69caf10f2760f3008f08c4aacaddf661b9f12ef364fd51e86e0869d394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074dcd69caf10f2760f3008f08c4aacaddf661b9f12ef364fd51e86e0869d394->enter($__internal_074dcd69caf10f2760f3008f08c4aacaddf661b9f12ef364fd51e86e0869d394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1538283dd986320e8bcae4b0d3b30318ad4d301a1400bcd57c75ad089bcebace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1538283dd986320e8bcae4b0d3b30318ad4d301a1400bcd57c75ad089bcebace->enter($__internal_1538283dd986320e8bcae4b0d3b30318ad4d301a1400bcd57c75ad089bcebace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_1538283dd986320e8bcae4b0d3b30318ad4d301a1400bcd57c75ad089bcebace->leave($__internal_1538283dd986320e8bcae4b0d3b30318ad4d301a1400bcd57c75ad089bcebace_prof);

        
        $__internal_074dcd69caf10f2760f3008f08c4aacaddf661b9f12ef364fd51e86e0869d394->leave($__internal_074dcd69caf10f2760f3008f08c4aacaddf661b9f12ef364fd51e86e0869d394_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
