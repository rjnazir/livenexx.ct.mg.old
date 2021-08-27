<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9d0a7b504a06ed33cbb58c3f4d800886913892503b5d73ed9769ca07765e836d extends Twig_Template
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
        $__internal_70317343c961d0dd1e4d63bd8edf4a6474bb64a2af1e9133eb617fff3e147572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70317343c961d0dd1e4d63bd8edf4a6474bb64a2af1e9133eb617fff3e147572->enter($__internal_70317343c961d0dd1e4d63bd8edf4a6474bb64a2af1e9133eb617fff3e147572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c3e92adb37fb077e8039efba7621100b9b2335ef2f7697f0187e235f2fd18fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e92adb37fb077e8039efba7621100b9b2335ef2f7697f0187e235f2fd18fde->enter($__internal_c3e92adb37fb077e8039efba7621100b9b2335ef2f7697f0187e235f2fd18fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_70317343c961d0dd1e4d63bd8edf4a6474bb64a2af1e9133eb617fff3e147572->leave($__internal_70317343c961d0dd1e4d63bd8edf4a6474bb64a2af1e9133eb617fff3e147572_prof);

        
        $__internal_c3e92adb37fb077e8039efba7621100b9b2335ef2f7697f0187e235f2fd18fde->leave($__internal_c3e92adb37fb077e8039efba7621100b9b2335ef2f7697f0187e235f2fd18fde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
