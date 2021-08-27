<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e9351d96b7724f37edd909ac16735e6cdaf73f97624b8d4601a7f4cc5b8721a8 extends Twig_Template
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
        $__internal_f2548055338dc3c66bc9b3d45627dfb8ecb0db07a40d369339f75cf4e9791d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2548055338dc3c66bc9b3d45627dfb8ecb0db07a40d369339f75cf4e9791d32->enter($__internal_f2548055338dc3c66bc9b3d45627dfb8ecb0db07a40d369339f75cf4e9791d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_c43ad2c29efbd23a556b16837d2ca893ea568e58993572ac89ab7bc1e89adfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43ad2c29efbd23a556b16837d2ca893ea568e58993572ac89ab7bc1e89adfc5->enter($__internal_c43ad2c29efbd23a556b16837d2ca893ea568e58993572ac89ab7bc1e89adfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f2548055338dc3c66bc9b3d45627dfb8ecb0db07a40d369339f75cf4e9791d32->leave($__internal_f2548055338dc3c66bc9b3d45627dfb8ecb0db07a40d369339f75cf4e9791d32_prof);

        
        $__internal_c43ad2c29efbd23a556b16837d2ca893ea568e58993572ac89ab7bc1e89adfc5->leave($__internal_c43ad2c29efbd23a556b16837d2ca893ea568e58993572ac89ab7bc1e89adfc5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
