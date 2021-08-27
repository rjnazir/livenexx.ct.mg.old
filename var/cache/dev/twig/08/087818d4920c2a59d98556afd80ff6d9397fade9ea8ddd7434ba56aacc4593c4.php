<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6321f93feef2007d6d179703bf9db1307c45f4f4b931856918d6750d1f82368 extends Twig_Template
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
        $__internal_556a675ba15ce68709a499b4ac7e36881d5dcf3977fd322ada982d149e849796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556a675ba15ce68709a499b4ac7e36881d5dcf3977fd322ada982d149e849796->enter($__internal_556a675ba15ce68709a499b4ac7e36881d5dcf3977fd322ada982d149e849796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_4d240b6937443fcce2aa7920a600cdcfca28bb5064662f755b87ef5ce7ffc5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d240b6937443fcce2aa7920a600cdcfca28bb5064662f755b87ef5ce7ffc5d1->enter($__internal_4d240b6937443fcce2aa7920a600cdcfca28bb5064662f755b87ef5ce7ffc5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_556a675ba15ce68709a499b4ac7e36881d5dcf3977fd322ada982d149e849796->leave($__internal_556a675ba15ce68709a499b4ac7e36881d5dcf3977fd322ada982d149e849796_prof);

        
        $__internal_4d240b6937443fcce2aa7920a600cdcfca28bb5064662f755b87ef5ce7ffc5d1->leave($__internal_4d240b6937443fcce2aa7920a600cdcfca28bb5064662f755b87ef5ce7ffc5d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
