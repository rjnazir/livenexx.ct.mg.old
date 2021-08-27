<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_6047c55b31a279ae72432e4d4fec7cdaffe2a3a31599943aa5903775159bc255 extends Twig_Template
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
        $__internal_7c23d2179c182a516239f95891807241d6075076c10e20632b1fe936d11e99b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c23d2179c182a516239f95891807241d6075076c10e20632b1fe936d11e99b0->enter($__internal_7c23d2179c182a516239f95891807241d6075076c10e20632b1fe936d11e99b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_cf8500b57dc1208549fb4d41b8d403fa9e55ebd2c35fbbaa0fdc6c9a8776b87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8500b57dc1208549fb4d41b8d403fa9e55ebd2c35fbbaa0fdc6c9a8776b87f->enter($__internal_cf8500b57dc1208549fb4d41b8d403fa9e55ebd2c35fbbaa0fdc6c9a8776b87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7c23d2179c182a516239f95891807241d6075076c10e20632b1fe936d11e99b0->leave($__internal_7c23d2179c182a516239f95891807241d6075076c10e20632b1fe936d11e99b0_prof);

        
        $__internal_cf8500b57dc1208549fb4d41b8d403fa9e55ebd2c35fbbaa0fdc6c9a8776b87f->leave($__internal_cf8500b57dc1208549fb4d41b8d403fa9e55ebd2c35fbbaa0fdc6c9a8776b87f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
