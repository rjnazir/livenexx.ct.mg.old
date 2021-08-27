<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_f92957d4be0a5c79476179741605639dae777b89ec67641b7ce877cdd84d2db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_465ca8ebd701d4118a98592aab014b1051fd944b6ecf9e54b85d27f4331276fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465ca8ebd701d4118a98592aab014b1051fd944b6ecf9e54b85d27f4331276fc->enter($__internal_465ca8ebd701d4118a98592aab014b1051fd944b6ecf9e54b85d27f4331276fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6376a92eddfe4ddd7c7d429078dd4ff26aabb6f45cefd9f5c44dfc93cb76aff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6376a92eddfe4ddd7c7d429078dd4ff26aabb6f45cefd9f5c44dfc93cb76aff3->enter($__internal_6376a92eddfe4ddd7c7d429078dd4ff26aabb6f45cefd9f5c44dfc93cb76aff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465ca8ebd701d4118a98592aab014b1051fd944b6ecf9e54b85d27f4331276fc->leave($__internal_465ca8ebd701d4118a98592aab014b1051fd944b6ecf9e54b85d27f4331276fc_prof);

        
        $__internal_6376a92eddfe4ddd7c7d429078dd4ff26aabb6f45cefd9f5c44dfc93cb76aff3->leave($__internal_6376a92eddfe4ddd7c7d429078dd4ff26aabb6f45cefd9f5c44dfc93cb76aff3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b5fd0f22442164015e2d33607abdd81e02a149f2869fc54f2bf2f50ee3924c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fd0f22442164015e2d33607abdd81e02a149f2869fc54f2bf2f50ee3924c7f->enter($__internal_b5fd0f22442164015e2d33607abdd81e02a149f2869fc54f2bf2f50ee3924c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e37bf5507b9eb0157a8d2ca1951db913fbff03872d55f53a30ff1a49f429407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37bf5507b9eb0157a8d2ca1951db913fbff03872d55f53a30ff1a49f429407f->enter($__internal_e37bf5507b9eb0157a8d2ca1951db913fbff03872d55f53a30ff1a49f429407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e37bf5507b9eb0157a8d2ca1951db913fbff03872d55f53a30ff1a49f429407f->leave($__internal_e37bf5507b9eb0157a8d2ca1951db913fbff03872d55f53a30ff1a49f429407f_prof);

        
        $__internal_b5fd0f22442164015e2d33607abdd81e02a149f2869fc54f2bf2f50ee3924c7f->leave($__internal_b5fd0f22442164015e2d33607abdd81e02a149f2869fc54f2bf2f50ee3924c7f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_076f6efdc63dc7944f095efb676f1efcd1b08d7b945d0b9655c28d4428a35312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076f6efdc63dc7944f095efb676f1efcd1b08d7b945d0b9655c28d4428a35312->enter($__internal_076f6efdc63dc7944f095efb676f1efcd1b08d7b945d0b9655c28d4428a35312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e5958bcf5562e151519460f46203106c300ebc2b9f459d365ae7df503d964f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5958bcf5562e151519460f46203106c300ebc2b9f459d365ae7df503d964f9->enter($__internal_9e5958bcf5562e151519460f46203106c300ebc2b9f459d365ae7df503d964f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9e5958bcf5562e151519460f46203106c300ebc2b9f459d365ae7df503d964f9->leave($__internal_9e5958bcf5562e151519460f46203106c300ebc2b9f459d365ae7df503d964f9_prof);

        
        $__internal_076f6efdc63dc7944f095efb676f1efcd1b08d7b945d0b9655c28d4428a35312->leave($__internal_076f6efdc63dc7944f095efb676f1efcd1b08d7b945d0b9655c28d4428a35312_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
