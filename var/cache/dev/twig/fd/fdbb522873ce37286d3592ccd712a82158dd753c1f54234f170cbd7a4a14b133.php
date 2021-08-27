<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ecaff70a4b052b183300795304d42fad8621ae1a24fda26d2815bb78316aa2f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bc8272e6f2d5aa2225edfbdd9ad257a31f0abbf2e148b8c64c21626367b11961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8272e6f2d5aa2225edfbdd9ad257a31f0abbf2e148b8c64c21626367b11961->enter($__internal_bc8272e6f2d5aa2225edfbdd9ad257a31f0abbf2e148b8c64c21626367b11961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_a30fdd428de421d8337cc5004b5c885f3a5bc7558ea52606519392fb4783fa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30fdd428de421d8337cc5004b5c885f3a5bc7558ea52606519392fb4783fa15->enter($__internal_a30fdd428de421d8337cc5004b5c885f3a5bc7558ea52606519392fb4783fa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8272e6f2d5aa2225edfbdd9ad257a31f0abbf2e148b8c64c21626367b11961->leave($__internal_bc8272e6f2d5aa2225edfbdd9ad257a31f0abbf2e148b8c64c21626367b11961_prof);

        
        $__internal_a30fdd428de421d8337cc5004b5c885f3a5bc7558ea52606519392fb4783fa15->leave($__internal_a30fdd428de421d8337cc5004b5c885f3a5bc7558ea52606519392fb4783fa15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0bc852d312656d34da39723a81ec8f1243680d1ac49cb1e9749660221914156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0bc852d312656d34da39723a81ec8f1243680d1ac49cb1e9749660221914156->enter($__internal_a0bc852d312656d34da39723a81ec8f1243680d1ac49cb1e9749660221914156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd349268cc7ed666a1bcc34000f8517adb6d846989062e48305e31937a052c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd349268cc7ed666a1bcc34000f8517adb6d846989062e48305e31937a052c01->enter($__internal_cd349268cc7ed666a1bcc34000f8517adb6d846989062e48305e31937a052c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_cd349268cc7ed666a1bcc34000f8517adb6d846989062e48305e31937a052c01->leave($__internal_cd349268cc7ed666a1bcc34000f8517adb6d846989062e48305e31937a052c01_prof);

        
        $__internal_a0bc852d312656d34da39723a81ec8f1243680d1ac49cb1e9749660221914156->leave($__internal_a0bc852d312656d34da39723a81ec8f1243680d1ac49cb1e9749660221914156_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
