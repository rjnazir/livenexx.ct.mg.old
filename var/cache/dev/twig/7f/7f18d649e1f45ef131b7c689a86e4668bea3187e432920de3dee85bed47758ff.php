<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6bd083a3e7153f23bb055cc9e217a58e44ac11d87acdcd0eb202409444568d1b extends Twig_Template
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
        $__internal_850b6ad9f2589a0c52ab167ceca1bb0260989c90f1e6976f8cf21fb32631103f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850b6ad9f2589a0c52ab167ceca1bb0260989c90f1e6976f8cf21fb32631103f->enter($__internal_850b6ad9f2589a0c52ab167ceca1bb0260989c90f1e6976f8cf21fb32631103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_9310dc783ead5c6feed7299c49af73bffbde6fdf8b7d596e52959d1642e86c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9310dc783ead5c6feed7299c49af73bffbde6fdf8b7d596e52959d1642e86c14->enter($__internal_9310dc783ead5c6feed7299c49af73bffbde6fdf8b7d596e52959d1642e86c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_850b6ad9f2589a0c52ab167ceca1bb0260989c90f1e6976f8cf21fb32631103f->leave($__internal_850b6ad9f2589a0c52ab167ceca1bb0260989c90f1e6976f8cf21fb32631103f_prof);

        
        $__internal_9310dc783ead5c6feed7299c49af73bffbde6fdf8b7d596e52959d1642e86c14->leave($__internal_9310dc783ead5c6feed7299c49af73bffbde6fdf8b7d596e52959d1642e86c14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
