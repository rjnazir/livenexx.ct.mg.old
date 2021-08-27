<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f6ef0502d79c1a25b39ca87e677ea4c396c574714760518031dfa95c4be6da7e extends Twig_Template
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
        $__internal_2b0c2527902996223f971e5718a5ebdae281db0df9dd7c5a3ba204bef03d1cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0c2527902996223f971e5718a5ebdae281db0df9dd7c5a3ba204bef03d1cde->enter($__internal_2b0c2527902996223f971e5718a5ebdae281db0df9dd7c5a3ba204bef03d1cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_29e077507e568ce6553fda015791ead97167e04c6dbad2f7b4dc299503eab051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e077507e568ce6553fda015791ead97167e04c6dbad2f7b4dc299503eab051->enter($__internal_29e077507e568ce6553fda015791ead97167e04c6dbad2f7b4dc299503eab051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2b0c2527902996223f971e5718a5ebdae281db0df9dd7c5a3ba204bef03d1cde->leave($__internal_2b0c2527902996223f971e5718a5ebdae281db0df9dd7c5a3ba204bef03d1cde_prof);

        
        $__internal_29e077507e568ce6553fda015791ead97167e04c6dbad2f7b4dc299503eab051->leave($__internal_29e077507e568ce6553fda015791ead97167e04c6dbad2f7b4dc299503eab051_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
