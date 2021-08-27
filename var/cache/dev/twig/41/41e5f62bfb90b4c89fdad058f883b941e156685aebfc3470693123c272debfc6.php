<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e6cb731cff9f1600ca592e3317121247580ebf5b69c46538a2745eb35977e0ec extends Twig_Template
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
        $__internal_5e2f117ebaca86fc0971223d4ac59bccf5468d6aa9b1d1c13c66cba658fc2aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e2f117ebaca86fc0971223d4ac59bccf5468d6aa9b1d1c13c66cba658fc2aef->enter($__internal_5e2f117ebaca86fc0971223d4ac59bccf5468d6aa9b1d1c13c66cba658fc2aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9425ab9dfa046a28d6d32b1eb8a76afe1593d00685b5e21e7d0107ddc6cdce3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9425ab9dfa046a28d6d32b1eb8a76afe1593d00685b5e21e7d0107ddc6cdce3d->enter($__internal_9425ab9dfa046a28d6d32b1eb8a76afe1593d00685b5e21e7d0107ddc6cdce3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5e2f117ebaca86fc0971223d4ac59bccf5468d6aa9b1d1c13c66cba658fc2aef->leave($__internal_5e2f117ebaca86fc0971223d4ac59bccf5468d6aa9b1d1c13c66cba658fc2aef_prof);

        
        $__internal_9425ab9dfa046a28d6d32b1eb8a76afe1593d00685b5e21e7d0107ddc6cdce3d->leave($__internal_9425ab9dfa046a28d6d32b1eb8a76afe1593d00685b5e21e7d0107ddc6cdce3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
