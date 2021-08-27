<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_d426d4db3440011d667d32667169be477598fed4814d56b34aa968f05ca3ade2 extends Twig_Template
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
        $__internal_ab8bd80acc28daead97c06f3fd17460895cc66d31da0d2a545565f483f85aed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8bd80acc28daead97c06f3fd17460895cc66d31da0d2a545565f483f85aed8->enter($__internal_ab8bd80acc28daead97c06f3fd17460895cc66d31da0d2a545565f483f85aed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_201b24f072e0de24c88a0b2e18c949f70703a0e073b95f0491e7d76a98978696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201b24f072e0de24c88a0b2e18c949f70703a0e073b95f0491e7d76a98978696->enter($__internal_201b24f072e0de24c88a0b2e18c949f70703a0e073b95f0491e7d76a98978696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ab8bd80acc28daead97c06f3fd17460895cc66d31da0d2a545565f483f85aed8->leave($__internal_ab8bd80acc28daead97c06f3fd17460895cc66d31da0d2a545565f483f85aed8_prof);

        
        $__internal_201b24f072e0de24c88a0b2e18c949f70703a0e073b95f0491e7d76a98978696->leave($__internal_201b24f072e0de24c88a0b2e18c949f70703a0e073b95f0491e7d76a98978696_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8df072e2930ef183b18fe086729e783f99f7561bdeda757ff72568b4b0edb660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df072e2930ef183b18fe086729e783f99f7561bdeda757ff72568b4b0edb660->enter($__internal_8df072e2930ef183b18fe086729e783f99f7561bdeda757ff72568b4b0edb660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a179140f3fd0b0d6b22aed293b61d689a37f8a973f1fa4234a3bd2874e5dc6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a179140f3fd0b0d6b22aed293b61d689a37f8a973f1fa4234a3bd2874e5dc6e1->enter($__internal_a179140f3fd0b0d6b22aed293b61d689a37f8a973f1fa4234a3bd2874e5dc6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a179140f3fd0b0d6b22aed293b61d689a37f8a973f1fa4234a3bd2874e5dc6e1->leave($__internal_a179140f3fd0b0d6b22aed293b61d689a37f8a973f1fa4234a3bd2874e5dc6e1_prof);

        
        $__internal_8df072e2930ef183b18fe086729e783f99f7561bdeda757ff72568b4b0edb660->leave($__internal_8df072e2930ef183b18fe086729e783f99f7561bdeda757ff72568b4b0edb660_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ae3a3715f12f8f32b4518fc74a1d65f7d7b12fa0c6211f1e0a88d2cee4900a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae3a3715f12f8f32b4518fc74a1d65f7d7b12fa0c6211f1e0a88d2cee4900a2->enter($__internal_7ae3a3715f12f8f32b4518fc74a1d65f7d7b12fa0c6211f1e0a88d2cee4900a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ae2b3698c2467a48a554ee8616b0a74eb87eaf2be912482ef819fb33c63919c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2b3698c2467a48a554ee8616b0a74eb87eaf2be912482ef819fb33c63919c2->enter($__internal_ae2b3698c2467a48a554ee8616b0a74eb87eaf2be912482ef819fb33c63919c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ae2b3698c2467a48a554ee8616b0a74eb87eaf2be912482ef819fb33c63919c2->leave($__internal_ae2b3698c2467a48a554ee8616b0a74eb87eaf2be912482ef819fb33c63919c2_prof);

        
        $__internal_7ae3a3715f12f8f32b4518fc74a1d65f7d7b12fa0c6211f1e0a88d2cee4900a2->leave($__internal_7ae3a3715f12f8f32b4518fc74a1d65f7d7b12fa0c6211f1e0a88d2cee4900a2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_507a68a68b162d4e794a6f333ebe3e0131c789d9bc48f1a48e6b1237c2b6e6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507a68a68b162d4e794a6f333ebe3e0131c789d9bc48f1a48e6b1237c2b6e6b0->enter($__internal_507a68a68b162d4e794a6f333ebe3e0131c789d9bc48f1a48e6b1237c2b6e6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ce0a1e9c7aa0d89b49e8fc6941e7fa1125c5aca68bc03b9c56c6d6c1de151649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0a1e9c7aa0d89b49e8fc6941e7fa1125c5aca68bc03b9c56c6d6c1de151649->enter($__internal_ce0a1e9c7aa0d89b49e8fc6941e7fa1125c5aca68bc03b9c56c6d6c1de151649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ce0a1e9c7aa0d89b49e8fc6941e7fa1125c5aca68bc03b9c56c6d6c1de151649->leave($__internal_ce0a1e9c7aa0d89b49e8fc6941e7fa1125c5aca68bc03b9c56c6d6c1de151649_prof);

        
        $__internal_507a68a68b162d4e794a6f333ebe3e0131c789d9bc48f1a48e6b1237c2b6e6b0->leave($__internal_507a68a68b162d4e794a6f333ebe3e0131c789d9bc48f1a48e6b1237c2b6e6b0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
