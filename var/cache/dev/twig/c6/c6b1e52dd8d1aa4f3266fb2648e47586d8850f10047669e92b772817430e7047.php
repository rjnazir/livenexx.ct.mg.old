<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ef82fe9a73e75fd7012b296d2d7d235596f8190e9d0367466303f2d4640a511d extends Twig_Template
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
        $__internal_9b4ce1f2d59e55f1bac464cefc1dd0254188175294bbdd256bf68318ae0d376e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4ce1f2d59e55f1bac464cefc1dd0254188175294bbdd256bf68318ae0d376e->enter($__internal_9b4ce1f2d59e55f1bac464cefc1dd0254188175294bbdd256bf68318ae0d376e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_25e9224930e507956e7a404db27e5b0c33bc8a7e03f1a3f4adb8901da80678f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e9224930e507956e7a404db27e5b0c33bc8a7e03f1a3f4adb8901da80678f5->enter($__internal_25e9224930e507956e7a404db27e5b0c33bc8a7e03f1a3f4adb8901da80678f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9b4ce1f2d59e55f1bac464cefc1dd0254188175294bbdd256bf68318ae0d376e->leave($__internal_9b4ce1f2d59e55f1bac464cefc1dd0254188175294bbdd256bf68318ae0d376e_prof);

        
        $__internal_25e9224930e507956e7a404db27e5b0c33bc8a7e03f1a3f4adb8901da80678f5->leave($__internal_25e9224930e507956e7a404db27e5b0c33bc8a7e03f1a3f4adb8901da80678f5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
