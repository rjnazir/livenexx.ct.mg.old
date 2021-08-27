<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_803a36da29212b54087419dd6206acab105213a87b52fbc5e513fd9548857274 extends Twig_Template
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
        $__internal_53aa122791a6e5ea06d5917104089439a512824740a22e4281718c60d35d4c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53aa122791a6e5ea06d5917104089439a512824740a22e4281718c60d35d4c66->enter($__internal_53aa122791a6e5ea06d5917104089439a512824740a22e4281718c60d35d4c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_85def08e27867da5fc8c669de14cb981d3c29963440ffff5fda950e508f75099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85def08e27867da5fc8c669de14cb981d3c29963440ffff5fda950e508f75099->enter($__internal_85def08e27867da5fc8c669de14cb981d3c29963440ffff5fda950e508f75099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_53aa122791a6e5ea06d5917104089439a512824740a22e4281718c60d35d4c66->leave($__internal_53aa122791a6e5ea06d5917104089439a512824740a22e4281718c60d35d4c66_prof);

        
        $__internal_85def08e27867da5fc8c669de14cb981d3c29963440ffff5fda950e508f75099->leave($__internal_85def08e27867da5fc8c669de14cb981d3c29963440ffff5fda950e508f75099_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_297ef85a6f4dd3dc6be588c800bb43e93c66cf54612b3240866974a0fd44123f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297ef85a6f4dd3dc6be588c800bb43e93c66cf54612b3240866974a0fd44123f->enter($__internal_297ef85a6f4dd3dc6be588c800bb43e93c66cf54612b3240866974a0fd44123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ce6d0f17e8f9c7ae7ec8649810c2ccd8d9b4c21172f6d258a6ebe8b564c9a461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6d0f17e8f9c7ae7ec8649810c2ccd8d9b4c21172f6d258a6ebe8b564c9a461->enter($__internal_ce6d0f17e8f9c7ae7ec8649810c2ccd8d9b4c21172f6d258a6ebe8b564c9a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ce6d0f17e8f9c7ae7ec8649810c2ccd8d9b4c21172f6d258a6ebe8b564c9a461->leave($__internal_ce6d0f17e8f9c7ae7ec8649810c2ccd8d9b4c21172f6d258a6ebe8b564c9a461_prof);

        
        $__internal_297ef85a6f4dd3dc6be588c800bb43e93c66cf54612b3240866974a0fd44123f->leave($__internal_297ef85a6f4dd3dc6be588c800bb43e93c66cf54612b3240866974a0fd44123f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e03721933c74fe90f793fa9f4504e07c455d523ce4cef2f38c495ffcafd57cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e03721933c74fe90f793fa9f4504e07c455d523ce4cef2f38c495ffcafd57cf->enter($__internal_7e03721933c74fe90f793fa9f4504e07c455d523ce4cef2f38c495ffcafd57cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e1135e9da34eba0304defac8cd04ff2f71606e0e8036b7a183ed5988a257aa29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1135e9da34eba0304defac8cd04ff2f71606e0e8036b7a183ed5988a257aa29->enter($__internal_e1135e9da34eba0304defac8cd04ff2f71606e0e8036b7a183ed5988a257aa29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e1135e9da34eba0304defac8cd04ff2f71606e0e8036b7a183ed5988a257aa29->leave($__internal_e1135e9da34eba0304defac8cd04ff2f71606e0e8036b7a183ed5988a257aa29_prof);

        
        $__internal_7e03721933c74fe90f793fa9f4504e07c455d523ce4cef2f38c495ffcafd57cf->leave($__internal_7e03721933c74fe90f793fa9f4504e07c455d523ce4cef2f38c495ffcafd57cf_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_befa13fc5ac22ffe8b0b24f47aeb014b1ee1eda4db9c712c3e5fb1f7fc4d9c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_befa13fc5ac22ffe8b0b24f47aeb014b1ee1eda4db9c712c3e5fb1f7fc4d9c9c->enter($__internal_befa13fc5ac22ffe8b0b24f47aeb014b1ee1eda4db9c712c3e5fb1f7fc4d9c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dc64ea34884571d1cba71f4361c012e46d5e286677cf1a5a4f655096bc662bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc64ea34884571d1cba71f4361c012e46d5e286677cf1a5a4f655096bc662bdd->enter($__internal_dc64ea34884571d1cba71f4361c012e46d5e286677cf1a5a4f655096bc662bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dc64ea34884571d1cba71f4361c012e46d5e286677cf1a5a4f655096bc662bdd->leave($__internal_dc64ea34884571d1cba71f4361c012e46d5e286677cf1a5a4f655096bc662bdd_prof);

        
        $__internal_befa13fc5ac22ffe8b0b24f47aeb014b1ee1eda4db9c712c3e5fb1f7fc4d9c9c->leave($__internal_befa13fc5ac22ffe8b0b24f47aeb014b1ee1eda4db9c712c3e5fb1f7fc4d9c9c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
