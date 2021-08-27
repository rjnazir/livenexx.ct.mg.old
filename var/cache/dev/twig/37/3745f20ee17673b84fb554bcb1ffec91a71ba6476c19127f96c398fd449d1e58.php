<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_afa6e8801631267c98e5adfef1d3ba986c5cf052474a96347cb4ca3b9d315dfe extends Twig_Template
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
        $__internal_8edc943a1f8abddef57c41736576e98cbdb8d7df2f3f0b3aaf1844d71c1530dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edc943a1f8abddef57c41736576e98cbdb8d7df2f3f0b3aaf1844d71c1530dd->enter($__internal_8edc943a1f8abddef57c41736576e98cbdb8d7df2f3f0b3aaf1844d71c1530dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fa05b2b943f91988cb07ec825378459f84cb5158c69c3bc6d99600aadcd93a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa05b2b943f91988cb07ec825378459f84cb5158c69c3bc6d99600aadcd93a5a->enter($__internal_fa05b2b943f91988cb07ec825378459f84cb5158c69c3bc6d99600aadcd93a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8edc943a1f8abddef57c41736576e98cbdb8d7df2f3f0b3aaf1844d71c1530dd->leave($__internal_8edc943a1f8abddef57c41736576e98cbdb8d7df2f3f0b3aaf1844d71c1530dd_prof);

        
        $__internal_fa05b2b943f91988cb07ec825378459f84cb5158c69c3bc6d99600aadcd93a5a->leave($__internal_fa05b2b943f91988cb07ec825378459f84cb5158c69c3bc6d99600aadcd93a5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
