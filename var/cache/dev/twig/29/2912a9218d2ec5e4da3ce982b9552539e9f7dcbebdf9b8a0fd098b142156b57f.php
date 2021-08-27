<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dc9a42abb66780db973ea4d7e31af744f30f1a8886c7e1636ee2fd9816569aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_2c04f2c804305b2cbe1007de781e85e97c8f0594b53a9d6f2b19d4a5a54b0d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c04f2c804305b2cbe1007de781e85e97c8f0594b53a9d6f2b19d4a5a54b0d79->enter($__internal_2c04f2c804305b2cbe1007de781e85e97c8f0594b53a9d6f2b19d4a5a54b0d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_ac9334c98e60433009e1d5233779b1a7ff1dac5fafa2c0ca4e9c092ca6a3104a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9334c98e60433009e1d5233779b1a7ff1dac5fafa2c0ca4e9c092ca6a3104a->enter($__internal_ac9334c98e60433009e1d5233779b1a7ff1dac5fafa2c0ca4e9c092ca6a3104a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c04f2c804305b2cbe1007de781e85e97c8f0594b53a9d6f2b19d4a5a54b0d79->leave($__internal_2c04f2c804305b2cbe1007de781e85e97c8f0594b53a9d6f2b19d4a5a54b0d79_prof);

        
        $__internal_ac9334c98e60433009e1d5233779b1a7ff1dac5fafa2c0ca4e9c092ca6a3104a->leave($__internal_ac9334c98e60433009e1d5233779b1a7ff1dac5fafa2c0ca4e9c092ca6a3104a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0988e47d89b6a26f1b7a1c3d7a0d37d798115fe43a91b2170a1fe0bd81557dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0988e47d89b6a26f1b7a1c3d7a0d37d798115fe43a91b2170a1fe0bd81557dcb->enter($__internal_0988e47d89b6a26f1b7a1c3d7a0d37d798115fe43a91b2170a1fe0bd81557dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e131823350ace5d45bfd1d458de309e5b0a099979fab4675702665dd7a93205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e131823350ace5d45bfd1d458de309e5b0a099979fab4675702665dd7a93205->enter($__internal_5e131823350ace5d45bfd1d458de309e5b0a099979fab4675702665dd7a93205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5e131823350ace5d45bfd1d458de309e5b0a099979fab4675702665dd7a93205->leave($__internal_5e131823350ace5d45bfd1d458de309e5b0a099979fab4675702665dd7a93205_prof);

        
        $__internal_0988e47d89b6a26f1b7a1c3d7a0d37d798115fe43a91b2170a1fe0bd81557dcb->leave($__internal_0988e47d89b6a26f1b7a1c3d7a0d37d798115fe43a91b2170a1fe0bd81557dcb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
