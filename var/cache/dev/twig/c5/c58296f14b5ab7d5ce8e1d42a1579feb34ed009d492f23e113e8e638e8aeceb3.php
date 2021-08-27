<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4a9215bd7a655f6ad3a875b26c4cb1087b938f41ffbbd872aa77216c44d9a15f extends Twig_Template
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
        $__internal_0b68e96f40c28bd811ec68b4b902f076222f31ba91803b04db8feaf902854c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b68e96f40c28bd811ec68b4b902f076222f31ba91803b04db8feaf902854c5d->enter($__internal_0b68e96f40c28bd811ec68b4b902f076222f31ba91803b04db8feaf902854c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ea754595a762e31d672d9ed693e165a48706fb98f25753e5287ee70330de719f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea754595a762e31d672d9ed693e165a48706fb98f25753e5287ee70330de719f->enter($__internal_ea754595a762e31d672d9ed693e165a48706fb98f25753e5287ee70330de719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b68e96f40c28bd811ec68b4b902f076222f31ba91803b04db8feaf902854c5d->leave($__internal_0b68e96f40c28bd811ec68b4b902f076222f31ba91803b04db8feaf902854c5d_prof);

        
        $__internal_ea754595a762e31d672d9ed693e165a48706fb98f25753e5287ee70330de719f->leave($__internal_ea754595a762e31d672d9ed693e165a48706fb98f25753e5287ee70330de719f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ce27bfeccd8e730079ae5d74d92383034311ef1c004ae0b50020283b98d315bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce27bfeccd8e730079ae5d74d92383034311ef1c004ae0b50020283b98d315bb->enter($__internal_ce27bfeccd8e730079ae5d74d92383034311ef1c004ae0b50020283b98d315bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e19e231a6a45474d2befcc97821afef8d7d1a861821b1fae5dcc40ed9a843c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19e231a6a45474d2befcc97821afef8d7d1a861821b1fae5dcc40ed9a843c91->enter($__internal_e19e231a6a45474d2befcc97821afef8d7d1a861821b1fae5dcc40ed9a843c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e19e231a6a45474d2befcc97821afef8d7d1a861821b1fae5dcc40ed9a843c91->leave($__internal_e19e231a6a45474d2befcc97821afef8d7d1a861821b1fae5dcc40ed9a843c91_prof);

        
        $__internal_ce27bfeccd8e730079ae5d74d92383034311ef1c004ae0b50020283b98d315bb->leave($__internal_ce27bfeccd8e730079ae5d74d92383034311ef1c004ae0b50020283b98d315bb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dac000a7292973ab922664e03f6b2f0fa007a04071998f6010f0bf6f955ed0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac000a7292973ab922664e03f6b2f0fa007a04071998f6010f0bf6f955ed0e6->enter($__internal_dac000a7292973ab922664e03f6b2f0fa007a04071998f6010f0bf6f955ed0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6eec8f184e59c393038f29b1f983e658cc70ebcdfb3e074a8e430ca09159605b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eec8f184e59c393038f29b1f983e658cc70ebcdfb3e074a8e430ca09159605b->enter($__internal_6eec8f184e59c393038f29b1f983e658cc70ebcdfb3e074a8e430ca09159605b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6eec8f184e59c393038f29b1f983e658cc70ebcdfb3e074a8e430ca09159605b->leave($__internal_6eec8f184e59c393038f29b1f983e658cc70ebcdfb3e074a8e430ca09159605b_prof);

        
        $__internal_dac000a7292973ab922664e03f6b2f0fa007a04071998f6010f0bf6f955ed0e6->leave($__internal_dac000a7292973ab922664e03f6b2f0fa007a04071998f6010f0bf6f955ed0e6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2c086817ae334e7880107761dc6dd132670d67ce48e6bd116f95286b90d13b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c086817ae334e7880107761dc6dd132670d67ce48e6bd116f95286b90d13b74->enter($__internal_2c086817ae334e7880107761dc6dd132670d67ce48e6bd116f95286b90d13b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_80fea052b12b01e73203c11543c91e8965695287d4f4db52a67188764f5f5c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fea052b12b01e73203c11543c91e8965695287d4f4db52a67188764f5f5c74->enter($__internal_80fea052b12b01e73203c11543c91e8965695287d4f4db52a67188764f5f5c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_80fea052b12b01e73203c11543c91e8965695287d4f4db52a67188764f5f5c74->leave($__internal_80fea052b12b01e73203c11543c91e8965695287d4f4db52a67188764f5f5c74_prof);

        
        $__internal_2c086817ae334e7880107761dc6dd132670d67ce48e6bd116f95286b90d13b74->leave($__internal_2c086817ae334e7880107761dc6dd132670d67ce48e6bd116f95286b90d13b74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
