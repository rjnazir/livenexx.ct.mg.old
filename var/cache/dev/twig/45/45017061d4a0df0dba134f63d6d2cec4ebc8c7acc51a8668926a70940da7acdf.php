<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd8aaf2587a70f2ef4e89e56a6ff1773fffd7dd6c62988776fc668b6ca2d24fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a0b1ca19580f7ca79b4eb9725af4344d861ac62fa4d7ea50ec6aceb64c360c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b1ca19580f7ca79b4eb9725af4344d861ac62fa4d7ea50ec6aceb64c360c9b->enter($__internal_a0b1ca19580f7ca79b4eb9725af4344d861ac62fa4d7ea50ec6aceb64c360c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_206f341ada70144fbf3060a1fb35c3ec5261058cd51ccaa5ddebed352086f247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206f341ada70144fbf3060a1fb35c3ec5261058cd51ccaa5ddebed352086f247->enter($__internal_206f341ada70144fbf3060a1fb35c3ec5261058cd51ccaa5ddebed352086f247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0b1ca19580f7ca79b4eb9725af4344d861ac62fa4d7ea50ec6aceb64c360c9b->leave($__internal_a0b1ca19580f7ca79b4eb9725af4344d861ac62fa4d7ea50ec6aceb64c360c9b_prof);

        
        $__internal_206f341ada70144fbf3060a1fb35c3ec5261058cd51ccaa5ddebed352086f247->leave($__internal_206f341ada70144fbf3060a1fb35c3ec5261058cd51ccaa5ddebed352086f247_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a64118290c3d8bc47ea34e5802fc32e7ce6891be829274a2cc42980fce0aee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a64118290c3d8bc47ea34e5802fc32e7ce6891be829274a2cc42980fce0aee7->enter($__internal_4a64118290c3d8bc47ea34e5802fc32e7ce6891be829274a2cc42980fce0aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a591277318bfc84622b0b7becbe14b3f9be09b2a04e717bc0bb0bb95ab89d005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a591277318bfc84622b0b7becbe14b3f9be09b2a04e717bc0bb0bb95ab89d005->enter($__internal_a591277318bfc84622b0b7becbe14b3f9be09b2a04e717bc0bb0bb95ab89d005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a591277318bfc84622b0b7becbe14b3f9be09b2a04e717bc0bb0bb95ab89d005->leave($__internal_a591277318bfc84622b0b7becbe14b3f9be09b2a04e717bc0bb0bb95ab89d005_prof);

        
        $__internal_4a64118290c3d8bc47ea34e5802fc32e7ce6891be829274a2cc42980fce0aee7->leave($__internal_4a64118290c3d8bc47ea34e5802fc32e7ce6891be829274a2cc42980fce0aee7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
