<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fdc0ad33c757d100881b6560895d75a69b22aae1866987818cb7db44d9ef5ac8 extends Twig_Template
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
        $__internal_df966816085a140b8a8e74eadb9df0b92a03b05ceb74513f462306db5477942d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df966816085a140b8a8e74eadb9df0b92a03b05ceb74513f462306db5477942d->enter($__internal_df966816085a140b8a8e74eadb9df0b92a03b05ceb74513f462306db5477942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_08dbd9f35b5c3bc279211a6d76a114be8788b78ce1845f3b2bec49689f2c9048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08dbd9f35b5c3bc279211a6d76a114be8788b78ce1845f3b2bec49689f2c9048->enter($__internal_08dbd9f35b5c3bc279211a6d76a114be8788b78ce1845f3b2bec49689f2c9048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_df966816085a140b8a8e74eadb9df0b92a03b05ceb74513f462306db5477942d->leave($__internal_df966816085a140b8a8e74eadb9df0b92a03b05ceb74513f462306db5477942d_prof);

        
        $__internal_08dbd9f35b5c3bc279211a6d76a114be8788b78ce1845f3b2bec49689f2c9048->leave($__internal_08dbd9f35b5c3bc279211a6d76a114be8788b78ce1845f3b2bec49689f2c9048_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
