<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0fd10d170bc46b6a255d6efcc54ff1d771c6fbfbcd2365e58d77284806a422f8 extends Twig_Template
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
        $__internal_191af3bdb02fbb32c22befab26a4732354c36b523bb1538071dc1ffb6d429ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191af3bdb02fbb32c22befab26a4732354c36b523bb1538071dc1ffb6d429ef4->enter($__internal_191af3bdb02fbb32c22befab26a4732354c36b523bb1538071dc1ffb6d429ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f63768e7e2332aa45e3eb5e9e2b6ea99fb5ffd7ca8c2caf6e3269e9e4dbb2d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63768e7e2332aa45e3eb5e9e2b6ea99fb5ffd7ca8c2caf6e3269e9e4dbb2d58->enter($__internal_f63768e7e2332aa45e3eb5e9e2b6ea99fb5ffd7ca8c2caf6e3269e9e4dbb2d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_191af3bdb02fbb32c22befab26a4732354c36b523bb1538071dc1ffb6d429ef4->leave($__internal_191af3bdb02fbb32c22befab26a4732354c36b523bb1538071dc1ffb6d429ef4_prof);

        
        $__internal_f63768e7e2332aa45e3eb5e9e2b6ea99fb5ffd7ca8c2caf6e3269e9e4dbb2d58->leave($__internal_f63768e7e2332aa45e3eb5e9e2b6ea99fb5ffd7ca8c2caf6e3269e9e4dbb2d58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
