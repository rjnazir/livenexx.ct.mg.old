<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b3f406bf8d26184fec706c30f910a55b0cbae561cbd4f4098fadf5417d91d001 extends Twig_Template
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
        $__internal_510c0ed5a3b672507fc51cf80566987279e87a82d21b4c6e2cddc1616a985b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510c0ed5a3b672507fc51cf80566987279e87a82d21b4c6e2cddc1616a985b1b->enter($__internal_510c0ed5a3b672507fc51cf80566987279e87a82d21b4c6e2cddc1616a985b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_bf7425cca2b8a8bd0b8f952c3a2bfd438a38fef6cb2e267dd6d4ba8e68b2d68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7425cca2b8a8bd0b8f952c3a2bfd438a38fef6cb2e267dd6d4ba8e68b2d68c->enter($__internal_bf7425cca2b8a8bd0b8f952c3a2bfd438a38fef6cb2e267dd6d4ba8e68b2d68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_510c0ed5a3b672507fc51cf80566987279e87a82d21b4c6e2cddc1616a985b1b->leave($__internal_510c0ed5a3b672507fc51cf80566987279e87a82d21b4c6e2cddc1616a985b1b_prof);

        
        $__internal_bf7425cca2b8a8bd0b8f952c3a2bfd438a38fef6cb2e267dd6d4ba8e68b2d68c->leave($__internal_bf7425cca2b8a8bd0b8f952c3a2bfd438a38fef6cb2e267dd6d4ba8e68b2d68c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
