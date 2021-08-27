<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f8b51c529e42eb7cd6887d30e8d7a2ccc1935fc831e3daa546fd15d71bc75e38 extends Twig_Template
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
        $__internal_d8b996f0beb49b29ce82e235310c474d1c1f1bc9b810b84ec0002fb0ae95a23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b996f0beb49b29ce82e235310c474d1c1f1bc9b810b84ec0002fb0ae95a23c->enter($__internal_d8b996f0beb49b29ce82e235310c474d1c1f1bc9b810b84ec0002fb0ae95a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1a38b89231b2c1cbea4dac131f9f18bca543cb65626dfcbc648b666652491cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a38b89231b2c1cbea4dac131f9f18bca543cb65626dfcbc648b666652491cb8->enter($__internal_1a38b89231b2c1cbea4dac131f9f18bca543cb65626dfcbc648b666652491cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d8b996f0beb49b29ce82e235310c474d1c1f1bc9b810b84ec0002fb0ae95a23c->leave($__internal_d8b996f0beb49b29ce82e235310c474d1c1f1bc9b810b84ec0002fb0ae95a23c_prof);

        
        $__internal_1a38b89231b2c1cbea4dac131f9f18bca543cb65626dfcbc648b666652491cb8->leave($__internal_1a38b89231b2c1cbea4dac131f9f18bca543cb65626dfcbc648b666652491cb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
