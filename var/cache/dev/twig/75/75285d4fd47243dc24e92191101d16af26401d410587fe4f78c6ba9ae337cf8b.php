<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_58bc93132b21456a1f2eb71a6e9386829000db89bbbd9e23cc1d7b2b7a224498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_59cdc6665e3a3dd86b7a4bab6d13019d5a782ae5817de3799059915c3a212241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cdc6665e3a3dd86b7a4bab6d13019d5a782ae5817de3799059915c3a212241->enter($__internal_59cdc6665e3a3dd86b7a4bab6d13019d5a782ae5817de3799059915c3a212241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_1b662a652027bc2e43fa0ef4ad87b461b873cbb60208f8cdf44ce3d5daa99cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b662a652027bc2e43fa0ef4ad87b461b873cbb60208f8cdf44ce3d5daa99cb5->enter($__internal_1b662a652027bc2e43fa0ef4ad87b461b873cbb60208f8cdf44ce3d5daa99cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59cdc6665e3a3dd86b7a4bab6d13019d5a782ae5817de3799059915c3a212241->leave($__internal_59cdc6665e3a3dd86b7a4bab6d13019d5a782ae5817de3799059915c3a212241_prof);

        
        $__internal_1b662a652027bc2e43fa0ef4ad87b461b873cbb60208f8cdf44ce3d5daa99cb5->leave($__internal_1b662a652027bc2e43fa0ef4ad87b461b873cbb60208f8cdf44ce3d5daa99cb5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6378e45143b595b3b2fc43f5cedf3393e3ff21ee33dc28455281daba9edff91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6378e45143b595b3b2fc43f5cedf3393e3ff21ee33dc28455281daba9edff91->enter($__internal_b6378e45143b595b3b2fc43f5cedf3393e3ff21ee33dc28455281daba9edff91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54b71c0fc417d3e99690dac7753192d040ac7eea8c527951b96f3900b463fb33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b71c0fc417d3e99690dac7753192d040ac7eea8c527951b96f3900b463fb33->enter($__internal_54b71c0fc417d3e99690dac7753192d040ac7eea8c527951b96f3900b463fb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_54b71c0fc417d3e99690dac7753192d040ac7eea8c527951b96f3900b463fb33->leave($__internal_54b71c0fc417d3e99690dac7753192d040ac7eea8c527951b96f3900b463fb33_prof);

        
        $__internal_b6378e45143b595b3b2fc43f5cedf3393e3ff21ee33dc28455281daba9edff91->leave($__internal_b6378e45143b595b3b2fc43f5cedf3393e3ff21ee33dc28455281daba9edff91_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
