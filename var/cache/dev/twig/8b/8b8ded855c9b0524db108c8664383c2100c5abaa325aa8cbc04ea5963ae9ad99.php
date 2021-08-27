<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f729d2d68e7df8f235a86511b8dc6d5979c27d0bc7806f5a5764e6878f07abfe extends Twig_Template
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
        $__internal_7ba05f7c64ac8234d0dfbf443b49336f22ddddffd0310f7d458d088fefb357bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba05f7c64ac8234d0dfbf443b49336f22ddddffd0310f7d458d088fefb357bc->enter($__internal_7ba05f7c64ac8234d0dfbf443b49336f22ddddffd0310f7d458d088fefb357bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5bc4411c89fde86debf06e4accce63450e50624251ef2c11fd1e9f7eda722691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc4411c89fde86debf06e4accce63450e50624251ef2c11fd1e9f7eda722691->enter($__internal_5bc4411c89fde86debf06e4accce63450e50624251ef2c11fd1e9f7eda722691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7ba05f7c64ac8234d0dfbf443b49336f22ddddffd0310f7d458d088fefb357bc->leave($__internal_7ba05f7c64ac8234d0dfbf443b49336f22ddddffd0310f7d458d088fefb357bc_prof);

        
        $__internal_5bc4411c89fde86debf06e4accce63450e50624251ef2c11fd1e9f7eda722691->leave($__internal_5bc4411c89fde86debf06e4accce63450e50624251ef2c11fd1e9f7eda722691_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
