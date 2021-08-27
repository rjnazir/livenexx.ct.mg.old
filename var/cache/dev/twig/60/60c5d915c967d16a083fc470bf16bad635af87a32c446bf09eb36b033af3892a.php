<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6862bd6fb259edecd4798d7859bcfdd24c49d17b516acc9ddcd483d915622ff9 extends Twig_Template
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
        $__internal_ecdeba38764b43c8e9f0a3e741cbfc12e1237d7da4d9dacbbe53ebed6b8320a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecdeba38764b43c8e9f0a3e741cbfc12e1237d7da4d9dacbbe53ebed6b8320a0->enter($__internal_ecdeba38764b43c8e9f0a3e741cbfc12e1237d7da4d9dacbbe53ebed6b8320a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_487ac3f5ba5623363315ffd3002bc5ed1413bdbb33fa53f2814ea02fa8ccf4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487ac3f5ba5623363315ffd3002bc5ed1413bdbb33fa53f2814ea02fa8ccf4a3->enter($__internal_487ac3f5ba5623363315ffd3002bc5ed1413bdbb33fa53f2814ea02fa8ccf4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ecdeba38764b43c8e9f0a3e741cbfc12e1237d7da4d9dacbbe53ebed6b8320a0->leave($__internal_ecdeba38764b43c8e9f0a3e741cbfc12e1237d7da4d9dacbbe53ebed6b8320a0_prof);

        
        $__internal_487ac3f5ba5623363315ffd3002bc5ed1413bdbb33fa53f2814ea02fa8ccf4a3->leave($__internal_487ac3f5ba5623363315ffd3002bc5ed1413bdbb33fa53f2814ea02fa8ccf4a3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
