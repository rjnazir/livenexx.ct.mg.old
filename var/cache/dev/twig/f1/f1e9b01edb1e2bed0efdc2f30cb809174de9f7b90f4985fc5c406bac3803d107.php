<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_29465e72186905df12715796ca1a70b822ebca8adb89dd1633461982ead4e69e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_0ad8cf162ec1d8d5660e7c90604154e4c312b851674b6e92dbc8f09f7c54301d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad8cf162ec1d8d5660e7c90604154e4c312b851674b6e92dbc8f09f7c54301d->enter($__internal_0ad8cf162ec1d8d5660e7c90604154e4c312b851674b6e92dbc8f09f7c54301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_f9446786e560548391b6f4d9733cacb1b74d780e4d8c4dd0ebe71b6f9fc2bf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9446786e560548391b6f4d9733cacb1b74d780e4d8c4dd0ebe71b6f9fc2bf1c->enter($__internal_f9446786e560548391b6f4d9733cacb1b74d780e4d8c4dd0ebe71b6f9fc2bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ad8cf162ec1d8d5660e7c90604154e4c312b851674b6e92dbc8f09f7c54301d->leave($__internal_0ad8cf162ec1d8d5660e7c90604154e4c312b851674b6e92dbc8f09f7c54301d_prof);

        
        $__internal_f9446786e560548391b6f4d9733cacb1b74d780e4d8c4dd0ebe71b6f9fc2bf1c->leave($__internal_f9446786e560548391b6f4d9733cacb1b74d780e4d8c4dd0ebe71b6f9fc2bf1c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80f7cdecbcdf50076f1068846eb81975796d1125e3367565fd519100ce3e6d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f7cdecbcdf50076f1068846eb81975796d1125e3367565fd519100ce3e6d87->enter($__internal_80f7cdecbcdf50076f1068846eb81975796d1125e3367565fd519100ce3e6d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f91e6fae3c690ce6c1c995beeb45eb85bb269ad2f9ab0aa8253c2a5222b5bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f91e6fae3c690ce6c1c995beeb45eb85bb269ad2f9ab0aa8253c2a5222b5bc9->enter($__internal_4f91e6fae3c690ce6c1c995beeb45eb85bb269ad2f9ab0aa8253c2a5222b5bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4f91e6fae3c690ce6c1c995beeb45eb85bb269ad2f9ab0aa8253c2a5222b5bc9->leave($__internal_4f91e6fae3c690ce6c1c995beeb45eb85bb269ad2f9ab0aa8253c2a5222b5bc9_prof);

        
        $__internal_80f7cdecbcdf50076f1068846eb81975796d1125e3367565fd519100ce3e6d87->leave($__internal_80f7cdecbcdf50076f1068846eb81975796d1125e3367565fd519100ce3e6d87_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
