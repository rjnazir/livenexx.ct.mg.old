<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c6f07dda65fa477e8ed4f2b1964ebbff1a87f24932d50fd744d41afad02cbcd9 extends Twig_Template
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
        $__internal_2cea8a4d5bcf4eeff1a9da84e651c734ca4332557042be1be622cacba761667f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cea8a4d5bcf4eeff1a9da84e651c734ca4332557042be1be622cacba761667f->enter($__internal_2cea8a4d5bcf4eeff1a9da84e651c734ca4332557042be1be622cacba761667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ce4605d3d564717838963acfe70d5291d3da28021e8870f0dc17a5c2ce8f895f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4605d3d564717838963acfe70d5291d3da28021e8870f0dc17a5c2ce8f895f->enter($__internal_ce4605d3d564717838963acfe70d5291d3da28021e8870f0dc17a5c2ce8f895f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2cea8a4d5bcf4eeff1a9da84e651c734ca4332557042be1be622cacba761667f->leave($__internal_2cea8a4d5bcf4eeff1a9da84e651c734ca4332557042be1be622cacba761667f_prof);

        
        $__internal_ce4605d3d564717838963acfe70d5291d3da28021e8870f0dc17a5c2ce8f895f->leave($__internal_ce4605d3d564717838963acfe70d5291d3da28021e8870f0dc17a5c2ce8f895f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
