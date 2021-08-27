<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_bdde9df59ca5ee363d884c9284282fd3b21d157168782ee946acbd4fe0651e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_590956b32f294232c6f48a0757edf8b7c8ae06ee0422f7da066cffce3b3a78b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590956b32f294232c6f48a0757edf8b7c8ae06ee0422f7da066cffce3b3a78b6->enter($__internal_590956b32f294232c6f48a0757edf8b7c8ae06ee0422f7da066cffce3b3a78b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_16e2f2b7f32608fdd7c3be1ffc0c7ad267e045f684665b56ec382f54f2bd4af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e2f2b7f32608fdd7c3be1ffc0c7ad267e045f684665b56ec382f54f2bd4af5->enter($__internal_16e2f2b7f32608fdd7c3be1ffc0c7ad267e045f684665b56ec382f54f2bd4af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_590956b32f294232c6f48a0757edf8b7c8ae06ee0422f7da066cffce3b3a78b6->leave($__internal_590956b32f294232c6f48a0757edf8b7c8ae06ee0422f7da066cffce3b3a78b6_prof);

        
        $__internal_16e2f2b7f32608fdd7c3be1ffc0c7ad267e045f684665b56ec382f54f2bd4af5->leave($__internal_16e2f2b7f32608fdd7c3be1ffc0c7ad267e045f684665b56ec382f54f2bd4af5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5389c6d5e52e98e5b1304fe466e3e76f0001f72ce79eba3757414c1f26adca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5389c6d5e52e98e5b1304fe466e3e76f0001f72ce79eba3757414c1f26adca31->enter($__internal_5389c6d5e52e98e5b1304fe466e3e76f0001f72ce79eba3757414c1f26adca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3f2a0df6ccba7bb3531326d20423e15195b2d01b8924227a5efefe70ac8c0900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2a0df6ccba7bb3531326d20423e15195b2d01b8924227a5efefe70ac8c0900->enter($__internal_3f2a0df6ccba7bb3531326d20423e15195b2d01b8924227a5efefe70ac8c0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3f2a0df6ccba7bb3531326d20423e15195b2d01b8924227a5efefe70ac8c0900->leave($__internal_3f2a0df6ccba7bb3531326d20423e15195b2d01b8924227a5efefe70ac8c0900_prof);

        
        $__internal_5389c6d5e52e98e5b1304fe466e3e76f0001f72ce79eba3757414c1f26adca31->leave($__internal_5389c6d5e52e98e5b1304fe466e3e76f0001f72ce79eba3757414c1f26adca31_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4b8b9eebec4a8deea0b5d071788138b242162c7b2d5dcf02adde61f049ee4db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8b9eebec4a8deea0b5d071788138b242162c7b2d5dcf02adde61f049ee4db7->enter($__internal_4b8b9eebec4a8deea0b5d071788138b242162c7b2d5dcf02adde61f049ee4db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_829d22aa3650f416adb4212d69b073ff913a500bbfd9e6553747f17ec8bce094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829d22aa3650f416adb4212d69b073ff913a500bbfd9e6553747f17ec8bce094->enter($__internal_829d22aa3650f416adb4212d69b073ff913a500bbfd9e6553747f17ec8bce094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_829d22aa3650f416adb4212d69b073ff913a500bbfd9e6553747f17ec8bce094->leave($__internal_829d22aa3650f416adb4212d69b073ff913a500bbfd9e6553747f17ec8bce094_prof);

        
        $__internal_4b8b9eebec4a8deea0b5d071788138b242162c7b2d5dcf02adde61f049ee4db7->leave($__internal_4b8b9eebec4a8deea0b5d071788138b242162c7b2d5dcf02adde61f049ee4db7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b8168aabc6cad87e71a4242e859c61342b911ae075a4d5c92114afcbcafc4f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8168aabc6cad87e71a4242e859c61342b911ae075a4d5c92114afcbcafc4f9b->enter($__internal_b8168aabc6cad87e71a4242e859c61342b911ae075a4d5c92114afcbcafc4f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_71b72363f6b8daa3c52bef30b0ff018250cc9515bc90e808b3150349a7b9de62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b72363f6b8daa3c52bef30b0ff018250cc9515bc90e808b3150349a7b9de62->enter($__internal_71b72363f6b8daa3c52bef30b0ff018250cc9515bc90e808b3150349a7b9de62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_71b72363f6b8daa3c52bef30b0ff018250cc9515bc90e808b3150349a7b9de62->leave($__internal_71b72363f6b8daa3c52bef30b0ff018250cc9515bc90e808b3150349a7b9de62_prof);

        
        $__internal_b8168aabc6cad87e71a4242e859c61342b911ae075a4d5c92114afcbcafc4f9b->leave($__internal_b8168aabc6cad87e71a4242e859c61342b911ae075a4d5c92114afcbcafc4f9b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
