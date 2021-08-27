<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_4a7ce54b719c68480e9bcc082c823b8155005308059fdfef8bb78273f1dcc882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c394bf986371f72c05ce9486e99cbdf138a15bcb17bf1c2b445c14f44ba7be4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c394bf986371f72c05ce9486e99cbdf138a15bcb17bf1c2b445c14f44ba7be4f->enter($__internal_c394bf986371f72c05ce9486e99cbdf138a15bcb17bf1c2b445c14f44ba7be4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f7b931ad2e891dc66973c487aa84de93781ad95ede4d3a18e44b83cb16d31837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b931ad2e891dc66973c487aa84de93781ad95ede4d3a18e44b83cb16d31837->enter($__internal_f7b931ad2e891dc66973c487aa84de93781ad95ede4d3a18e44b83cb16d31837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c394bf986371f72c05ce9486e99cbdf138a15bcb17bf1c2b445c14f44ba7be4f->leave($__internal_c394bf986371f72c05ce9486e99cbdf138a15bcb17bf1c2b445c14f44ba7be4f_prof);

        
        $__internal_f7b931ad2e891dc66973c487aa84de93781ad95ede4d3a18e44b83cb16d31837->leave($__internal_f7b931ad2e891dc66973c487aa84de93781ad95ede4d3a18e44b83cb16d31837_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
