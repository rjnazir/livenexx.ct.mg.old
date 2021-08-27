<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_86588a00040eba64c66e4b77e2b148cf385897b10ccd6a6c5c852006f6238ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_616e8f5bdb3155dfe9405903c626c6fec5562bf16812f1bf782f7d8b3309750e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616e8f5bdb3155dfe9405903c626c6fec5562bf16812f1bf782f7d8b3309750e->enter($__internal_616e8f5bdb3155dfe9405903c626c6fec5562bf16812f1bf782f7d8b3309750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_51299a56cd2f6fe70efe05f58316eb2e5524938971c6453b6e250fff40561967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51299a56cd2f6fe70efe05f58316eb2e5524938971c6453b6e250fff40561967->enter($__internal_51299a56cd2f6fe70efe05f58316eb2e5524938971c6453b6e250fff40561967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616e8f5bdb3155dfe9405903c626c6fec5562bf16812f1bf782f7d8b3309750e->leave($__internal_616e8f5bdb3155dfe9405903c626c6fec5562bf16812f1bf782f7d8b3309750e_prof);

        
        $__internal_51299a56cd2f6fe70efe05f58316eb2e5524938971c6453b6e250fff40561967->leave($__internal_51299a56cd2f6fe70efe05f58316eb2e5524938971c6453b6e250fff40561967_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5cd3957dbdefb75c7946be0c37395c7d35680a147afb70f5f554414939408a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cd3957dbdefb75c7946be0c37395c7d35680a147afb70f5f554414939408a7->enter($__internal_f5cd3957dbdefb75c7946be0c37395c7d35680a147afb70f5f554414939408a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69541ac0aa5f98f9969ad1c6678ba4dbc445e7ebb485bc10bb7b0e39bd720adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69541ac0aa5f98f9969ad1c6678ba4dbc445e7ebb485bc10bb7b0e39bd720adc->enter($__internal_69541ac0aa5f98f9969ad1c6678ba4dbc445e7ebb485bc10bb7b0e39bd720adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_69541ac0aa5f98f9969ad1c6678ba4dbc445e7ebb485bc10bb7b0e39bd720adc->leave($__internal_69541ac0aa5f98f9969ad1c6678ba4dbc445e7ebb485bc10bb7b0e39bd720adc_prof);

        
        $__internal_f5cd3957dbdefb75c7946be0c37395c7d35680a147afb70f5f554414939408a7->leave($__internal_f5cd3957dbdefb75c7946be0c37395c7d35680a147afb70f5f554414939408a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
