<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3b6d10ce9e9a70efede9122a2818048d32f21267e81f523da48b2de759a59b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01605e8e89e8f171f92633a23af45598ec0cf692da9d73cb8d11f95c752c1539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01605e8e89e8f171f92633a23af45598ec0cf692da9d73cb8d11f95c752c1539->enter($__internal_01605e8e89e8f171f92633a23af45598ec0cf692da9d73cb8d11f95c752c1539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_7d6dc3d801f4a44fb2ac014d4b2244b722e7ac4bcd5ecb1943c0336396630d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6dc3d801f4a44fb2ac014d4b2244b722e7ac4bcd5ecb1943c0336396630d1d->enter($__internal_7d6dc3d801f4a44fb2ac014d4b2244b722e7ac4bcd5ecb1943c0336396630d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01605e8e89e8f171f92633a23af45598ec0cf692da9d73cb8d11f95c752c1539->leave($__internal_01605e8e89e8f171f92633a23af45598ec0cf692da9d73cb8d11f95c752c1539_prof);

        
        $__internal_7d6dc3d801f4a44fb2ac014d4b2244b722e7ac4bcd5ecb1943c0336396630d1d->leave($__internal_7d6dc3d801f4a44fb2ac014d4b2244b722e7ac4bcd5ecb1943c0336396630d1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_527698692e8aab7be41fb0102eca13790d076c14cec68138f0aec00828404f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527698692e8aab7be41fb0102eca13790d076c14cec68138f0aec00828404f21->enter($__internal_527698692e8aab7be41fb0102eca13790d076c14cec68138f0aec00828404f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f543cea1883c5f1120e83b57d1f65f30a94760a3990ff5989d9b368c4b6b9203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f543cea1883c5f1120e83b57d1f65f30a94760a3990ff5989d9b368c4b6b9203->enter($__internal_f543cea1883c5f1120e83b57d1f65f30a94760a3990ff5989d9b368c4b6b9203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f543cea1883c5f1120e83b57d1f65f30a94760a3990ff5989d9b368c4b6b9203->leave($__internal_f543cea1883c5f1120e83b57d1f65f30a94760a3990ff5989d9b368c4b6b9203_prof);

        
        $__internal_527698692e8aab7be41fb0102eca13790d076c14cec68138f0aec00828404f21->leave($__internal_527698692e8aab7be41fb0102eca13790d076c14cec68138f0aec00828404f21_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e03d302a7886252fc90e802f853178b11ebde227b92a51b3d2c2901b18feb179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03d302a7886252fc90e802f853178b11ebde227b92a51b3d2c2901b18feb179->enter($__internal_e03d302a7886252fc90e802f853178b11ebde227b92a51b3d2c2901b18feb179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6d97db57ab4687450a7dcdbd698cc0ac6111c107eba08a623b91d5b39e78c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d97db57ab4687450a7dcdbd698cc0ac6111c107eba08a623b91d5b39e78c90->enter($__internal_f6d97db57ab4687450a7dcdbd698cc0ac6111c107eba08a623b91d5b39e78c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f6d97db57ab4687450a7dcdbd698cc0ac6111c107eba08a623b91d5b39e78c90->leave($__internal_f6d97db57ab4687450a7dcdbd698cc0ac6111c107eba08a623b91d5b39e78c90_prof);

        
        $__internal_e03d302a7886252fc90e802f853178b11ebde227b92a51b3d2c2901b18feb179->leave($__internal_e03d302a7886252fc90e802f853178b11ebde227b92a51b3d2c2901b18feb179_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e261590579ab63548933627171c14a224e06c12a0c2c6d8f54f5cfc462270ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e261590579ab63548933627171c14a224e06c12a0c2c6d8f54f5cfc462270ba9->enter($__internal_e261590579ab63548933627171c14a224e06c12a0c2c6d8f54f5cfc462270ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_931e2b749682067c91aa5500cb79e10e5edabe4060b76377642e84d857bcab98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931e2b749682067c91aa5500cb79e10e5edabe4060b76377642e84d857bcab98->enter($__internal_931e2b749682067c91aa5500cb79e10e5edabe4060b76377642e84d857bcab98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_931e2b749682067c91aa5500cb79e10e5edabe4060b76377642e84d857bcab98->leave($__internal_931e2b749682067c91aa5500cb79e10e5edabe4060b76377642e84d857bcab98_prof);

        
        $__internal_e261590579ab63548933627171c14a224e06c12a0c2c6d8f54f5cfc462270ba9->leave($__internal_e261590579ab63548933627171c14a224e06c12a0c2c6d8f54f5cfc462270ba9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
