<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_dc36bedbfb5d63b2dd9bf85aadd206e1137129b8329fa7da575250d4892ba06c extends Twig_Template
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
        $__internal_99151a1b003d798674549c859e6f9304567d1c28a3fba614d190a9cbc3340d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99151a1b003d798674549c859e6f9304567d1c28a3fba614d190a9cbc3340d60->enter($__internal_99151a1b003d798674549c859e6f9304567d1c28a3fba614d190a9cbc3340d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_fe818a5e5a42ea4155de4dd818c178d31dcc4947a017fee7a4d4dea3389663e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe818a5e5a42ea4155de4dd818c178d31dcc4947a017fee7a4d4dea3389663e1->enter($__internal_fe818a5e5a42ea4155de4dd818c178d31dcc4947a017fee7a4d4dea3389663e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_99151a1b003d798674549c859e6f9304567d1c28a3fba614d190a9cbc3340d60->leave($__internal_99151a1b003d798674549c859e6f9304567d1c28a3fba614d190a9cbc3340d60_prof);

        
        $__internal_fe818a5e5a42ea4155de4dd818c178d31dcc4947a017fee7a4d4dea3389663e1->leave($__internal_fe818a5e5a42ea4155de4dd818c178d31dcc4947a017fee7a4d4dea3389663e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
