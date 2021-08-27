<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0052611029406a8066fc29bcc6e363b9988a56760f9545edfaf6bb6b6177e831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7a5d0c07efe4714905b8d709f3408f8cdbe2bafc89290b9b29f986a8f02b3f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d0c07efe4714905b8d709f3408f8cdbe2bafc89290b9b29f986a8f02b3f0f->enter($__internal_7a5d0c07efe4714905b8d709f3408f8cdbe2bafc89290b9b29f986a8f02b3f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_191519cd3ecc5e090e37ecc1f53bcd4ce454392803d81a00240bd23d1a2f01eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191519cd3ecc5e090e37ecc1f53bcd4ce454392803d81a00240bd23d1a2f01eb->enter($__internal_191519cd3ecc5e090e37ecc1f53bcd4ce454392803d81a00240bd23d1a2f01eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a5d0c07efe4714905b8d709f3408f8cdbe2bafc89290b9b29f986a8f02b3f0f->leave($__internal_7a5d0c07efe4714905b8d709f3408f8cdbe2bafc89290b9b29f986a8f02b3f0f_prof);

        
        $__internal_191519cd3ecc5e090e37ecc1f53bcd4ce454392803d81a00240bd23d1a2f01eb->leave($__internal_191519cd3ecc5e090e37ecc1f53bcd4ce454392803d81a00240bd23d1a2f01eb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9be5425bb77a4769532a3dde81a7706870b37baee19c6289bba51afc1fe32586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be5425bb77a4769532a3dde81a7706870b37baee19c6289bba51afc1fe32586->enter($__internal_9be5425bb77a4769532a3dde81a7706870b37baee19c6289bba51afc1fe32586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c154a8c02eb665885eab95b4c4acd9a1a232ac0cb71ee379a3314cf1832daa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c154a8c02eb665885eab95b4c4acd9a1a232ac0cb71ee379a3314cf1832daa0a->enter($__internal_c154a8c02eb665885eab95b4c4acd9a1a232ac0cb71ee379a3314cf1832daa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c154a8c02eb665885eab95b4c4acd9a1a232ac0cb71ee379a3314cf1832daa0a->leave($__internal_c154a8c02eb665885eab95b4c4acd9a1a232ac0cb71ee379a3314cf1832daa0a_prof);

        
        $__internal_9be5425bb77a4769532a3dde81a7706870b37baee19c6289bba51afc1fe32586->leave($__internal_9be5425bb77a4769532a3dde81a7706870b37baee19c6289bba51afc1fe32586_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
