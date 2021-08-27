<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_08f4fc248d595150dcbfed0f86db9cb03c11a6b612364aa61fdd3f625e36eca7 extends Twig_Template
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
        $__internal_b7f4e62606b77e0e46da77189c4b128f77d7543d665107d364f7dd7baf5caf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f4e62606b77e0e46da77189c4b128f77d7543d665107d364f7dd7baf5caf00->enter($__internal_b7f4e62606b77e0e46da77189c4b128f77d7543d665107d364f7dd7baf5caf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ca566475f6303ade92ff6eefd5b45af9c156cd296b229e50dd529a2619ec6c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca566475f6303ade92ff6eefd5b45af9c156cd296b229e50dd529a2619ec6c07->enter($__internal_ca566475f6303ade92ff6eefd5b45af9c156cd296b229e50dd529a2619ec6c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b7f4e62606b77e0e46da77189c4b128f77d7543d665107d364f7dd7baf5caf00->leave($__internal_b7f4e62606b77e0e46da77189c4b128f77d7543d665107d364f7dd7baf5caf00_prof);

        
        $__internal_ca566475f6303ade92ff6eefd5b45af9c156cd296b229e50dd529a2619ec6c07->leave($__internal_ca566475f6303ade92ff6eefd5b45af9c156cd296b229e50dd529a2619ec6c07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
