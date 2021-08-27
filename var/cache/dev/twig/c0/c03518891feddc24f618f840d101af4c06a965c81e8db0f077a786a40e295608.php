<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e952de7cdace76deaef0beb09178f0e6ab6c83149db262b8c47df6770d0cee20 extends Twig_Template
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
        $__internal_499924a4bdda7d15a56b04616a40e62fa19c2459bd223ef36e99eb4b73bcc143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499924a4bdda7d15a56b04616a40e62fa19c2459bd223ef36e99eb4b73bcc143->enter($__internal_499924a4bdda7d15a56b04616a40e62fa19c2459bd223ef36e99eb4b73bcc143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ce67100a72f8e0dc59af5e907f41594d8e769d7bd6051d09bbb4edf41c18828b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce67100a72f8e0dc59af5e907f41594d8e769d7bd6051d09bbb4edf41c18828b->enter($__internal_ce67100a72f8e0dc59af5e907f41594d8e769d7bd6051d09bbb4edf41c18828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_499924a4bdda7d15a56b04616a40e62fa19c2459bd223ef36e99eb4b73bcc143->leave($__internal_499924a4bdda7d15a56b04616a40e62fa19c2459bd223ef36e99eb4b73bcc143_prof);

        
        $__internal_ce67100a72f8e0dc59af5e907f41594d8e769d7bd6051d09bbb4edf41c18828b->leave($__internal_ce67100a72f8e0dc59af5e907f41594d8e769d7bd6051d09bbb4edf41c18828b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
