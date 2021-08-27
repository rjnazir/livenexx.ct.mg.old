<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18f8151750d50ceb60120d6f7be7f00c81abe5375e387e910b1f2f20e5dcf74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_73a55eadde2036d53de31501eb8bb46d27be6d02dbbfd02959d16e7f98568ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a55eadde2036d53de31501eb8bb46d27be6d02dbbfd02959d16e7f98568ccb->enter($__internal_73a55eadde2036d53de31501eb8bb46d27be6d02dbbfd02959d16e7f98568ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ca23efe72823b112659a0bba5c66af900162e294f5a27acadfa6d2f8972aa926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca23efe72823b112659a0bba5c66af900162e294f5a27acadfa6d2f8972aa926->enter($__internal_ca23efe72823b112659a0bba5c66af900162e294f5a27acadfa6d2f8972aa926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73a55eadde2036d53de31501eb8bb46d27be6d02dbbfd02959d16e7f98568ccb->leave($__internal_73a55eadde2036d53de31501eb8bb46d27be6d02dbbfd02959d16e7f98568ccb_prof);

        
        $__internal_ca23efe72823b112659a0bba5c66af900162e294f5a27acadfa6d2f8972aa926->leave($__internal_ca23efe72823b112659a0bba5c66af900162e294f5a27acadfa6d2f8972aa926_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cdd2249f147dda9486abfca3e72d80430a20461bea298a48ed012b369d4f4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cdd2249f147dda9486abfca3e72d80430a20461bea298a48ed012b369d4f4a6->enter($__internal_0cdd2249f147dda9486abfca3e72d80430a20461bea298a48ed012b369d4f4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ffcc83a710836fa59ee7d63e814f9d189f9f02fe60f923b2149c60c326be406e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffcc83a710836fa59ee7d63e814f9d189f9f02fe60f923b2149c60c326be406e->enter($__internal_ffcc83a710836fa59ee7d63e814f9d189f9f02fe60f923b2149c60c326be406e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ffcc83a710836fa59ee7d63e814f9d189f9f02fe60f923b2149c60c326be406e->leave($__internal_ffcc83a710836fa59ee7d63e814f9d189f9f02fe60f923b2149c60c326be406e_prof);

        
        $__internal_0cdd2249f147dda9486abfca3e72d80430a20461bea298a48ed012b369d4f4a6->leave($__internal_0cdd2249f147dda9486abfca3e72d80430a20461bea298a48ed012b369d4f4a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19c732c737feee43293a39caf3d44ed0b040d87e1755a2ce14aa2c756c4c6493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19c732c737feee43293a39caf3d44ed0b040d87e1755a2ce14aa2c756c4c6493->enter($__internal_19c732c737feee43293a39caf3d44ed0b040d87e1755a2ce14aa2c756c4c6493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_40b65d83aef1d29be4ca5a311de3e62bc8458973939849a1f6435e5f60f05429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b65d83aef1d29be4ca5a311de3e62bc8458973939849a1f6435e5f60f05429->enter($__internal_40b65d83aef1d29be4ca5a311de3e62bc8458973939849a1f6435e5f60f05429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40b65d83aef1d29be4ca5a311de3e62bc8458973939849a1f6435e5f60f05429->leave($__internal_40b65d83aef1d29be4ca5a311de3e62bc8458973939849a1f6435e5f60f05429_prof);

        
        $__internal_19c732c737feee43293a39caf3d44ed0b040d87e1755a2ce14aa2c756c4c6493->leave($__internal_19c732c737feee43293a39caf3d44ed0b040d87e1755a2ce14aa2c756c4c6493_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c9e4029fc9d6b35cebcf36920e71a49bb44aeb89c1fe88d701e213d2a82d650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9e4029fc9d6b35cebcf36920e71a49bb44aeb89c1fe88d701e213d2a82d650->enter($__internal_5c9e4029fc9d6b35cebcf36920e71a49bb44aeb89c1fe88d701e213d2a82d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a1a3f75c7a7f414ad4674267e1641949c6c83658a0da3f683589caf97f42cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1a3f75c7a7f414ad4674267e1641949c6c83658a0da3f683589caf97f42cc9->enter($__internal_0a1a3f75c7a7f414ad4674267e1641949c6c83658a0da3f683589caf97f42cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a1a3f75c7a7f414ad4674267e1641949c6c83658a0da3f683589caf97f42cc9->leave($__internal_0a1a3f75c7a7f414ad4674267e1641949c6c83658a0da3f683589caf97f42cc9_prof);

        
        $__internal_5c9e4029fc9d6b35cebcf36920e71a49bb44aeb89c1fe88d701e213d2a82d650->leave($__internal_5c9e4029fc9d6b35cebcf36920e71a49bb44aeb89c1fe88d701e213d2a82d650_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
