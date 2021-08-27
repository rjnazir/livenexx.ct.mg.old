<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_79679ad6c3dd2a55ae6d34e4ec2393f5eb46513f7d85244bac745220d300d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_01d0924869e518731025e48b22d6b12484de978e78696422a17e2900ebc78961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d0924869e518731025e48b22d6b12484de978e78696422a17e2900ebc78961->enter($__internal_01d0924869e518731025e48b22d6b12484de978e78696422a17e2900ebc78961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0f2fe6fd2471633cbf3252ac7b7628ab5faae8272fa3502e51e98d3008f188db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2fe6fd2471633cbf3252ac7b7628ab5faae8272fa3502e51e98d3008f188db->enter($__internal_0f2fe6fd2471633cbf3252ac7b7628ab5faae8272fa3502e51e98d3008f188db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d0924869e518731025e48b22d6b12484de978e78696422a17e2900ebc78961->leave($__internal_01d0924869e518731025e48b22d6b12484de978e78696422a17e2900ebc78961_prof);

        
        $__internal_0f2fe6fd2471633cbf3252ac7b7628ab5faae8272fa3502e51e98d3008f188db->leave($__internal_0f2fe6fd2471633cbf3252ac7b7628ab5faae8272fa3502e51e98d3008f188db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_009a5dc3a0328552b6e2b6b2dd10b7cbb1619a47d39aa49c7b5fdaee0c472672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009a5dc3a0328552b6e2b6b2dd10b7cbb1619a47d39aa49c7b5fdaee0c472672->enter($__internal_009a5dc3a0328552b6e2b6b2dd10b7cbb1619a47d39aa49c7b5fdaee0c472672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f7dbdce428d8c656f6919d29dfb7001d9f3497e64732910535b45b5c9636f020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dbdce428d8c656f6919d29dfb7001d9f3497e64732910535b45b5c9636f020->enter($__internal_f7dbdce428d8c656f6919d29dfb7001d9f3497e64732910535b45b5c9636f020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f7dbdce428d8c656f6919d29dfb7001d9f3497e64732910535b45b5c9636f020->leave($__internal_f7dbdce428d8c656f6919d29dfb7001d9f3497e64732910535b45b5c9636f020_prof);

        
        $__internal_009a5dc3a0328552b6e2b6b2dd10b7cbb1619a47d39aa49c7b5fdaee0c472672->leave($__internal_009a5dc3a0328552b6e2b6b2dd10b7cbb1619a47d39aa49c7b5fdaee0c472672_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_994e4af4922589cfa0d5b8818bb7c0fe5c7ada5a43011ec78d7e23d4a64c9acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994e4af4922589cfa0d5b8818bb7c0fe5c7ada5a43011ec78d7e23d4a64c9acb->enter($__internal_994e4af4922589cfa0d5b8818bb7c0fe5c7ada5a43011ec78d7e23d4a64c9acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a61f5593e814b215d4cf9e6e44d25c39090ef41861dd2218e1a4244cbb402fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61f5593e814b215d4cf9e6e44d25c39090ef41861dd2218e1a4244cbb402fee->enter($__internal_a61f5593e814b215d4cf9e6e44d25c39090ef41861dd2218e1a4244cbb402fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a61f5593e814b215d4cf9e6e44d25c39090ef41861dd2218e1a4244cbb402fee->leave($__internal_a61f5593e814b215d4cf9e6e44d25c39090ef41861dd2218e1a4244cbb402fee_prof);

        
        $__internal_994e4af4922589cfa0d5b8818bb7c0fe5c7ada5a43011ec78d7e23d4a64c9acb->leave($__internal_994e4af4922589cfa0d5b8818bb7c0fe5c7ada5a43011ec78d7e23d4a64c9acb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67b7ce68a786a5d695f2da00a47f7939b97d7cc0e54b54234a0db9323ee733fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b7ce68a786a5d695f2da00a47f7939b97d7cc0e54b54234a0db9323ee733fe->enter($__internal_67b7ce68a786a5d695f2da00a47f7939b97d7cc0e54b54234a0db9323ee733fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a02b7be370157729edd855f702ad75f87d23c616436a2f56e10df6f7e2940fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02b7be370157729edd855f702ad75f87d23c616436a2f56e10df6f7e2940fc6->enter($__internal_a02b7be370157729edd855f702ad75f87d23c616436a2f56e10df6f7e2940fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a02b7be370157729edd855f702ad75f87d23c616436a2f56e10df6f7e2940fc6->leave($__internal_a02b7be370157729edd855f702ad75f87d23c616436a2f56e10df6f7e2940fc6_prof);

        
        $__internal_67b7ce68a786a5d695f2da00a47f7939b97d7cc0e54b54234a0db9323ee733fe->leave($__internal_67b7ce68a786a5d695f2da00a47f7939b97d7cc0e54b54234a0db9323ee733fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
