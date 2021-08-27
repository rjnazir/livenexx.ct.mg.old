<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8ed685b12919ee7f79624f546623d865b352dd41f094e5ddd359a3ea5e1e6915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fa1ad28ada99a277ded00fccc611b699c3eca41c8dd436cf086451250d0f2c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1ad28ada99a277ded00fccc611b699c3eca41c8dd436cf086451250d0f2c1c->enter($__internal_fa1ad28ada99a277ded00fccc611b699c3eca41c8dd436cf086451250d0f2c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_02bae7f0bed492089f7e1a16563cab9edd75636634ce90e18804ebeca0c15de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bae7f0bed492089f7e1a16563cab9edd75636634ce90e18804ebeca0c15de8->enter($__internal_02bae7f0bed492089f7e1a16563cab9edd75636634ce90e18804ebeca0c15de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1ad28ada99a277ded00fccc611b699c3eca41c8dd436cf086451250d0f2c1c->leave($__internal_fa1ad28ada99a277ded00fccc611b699c3eca41c8dd436cf086451250d0f2c1c_prof);

        
        $__internal_02bae7f0bed492089f7e1a16563cab9edd75636634ce90e18804ebeca0c15de8->leave($__internal_02bae7f0bed492089f7e1a16563cab9edd75636634ce90e18804ebeca0c15de8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22897d54f40963f1c266452d26b4d19043c3ca9e7766f43b4f0f92f6c99263ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22897d54f40963f1c266452d26b4d19043c3ca9e7766f43b4f0f92f6c99263ea->enter($__internal_22897d54f40963f1c266452d26b4d19043c3ca9e7766f43b4f0f92f6c99263ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1caa491413e1627af89c8d8a01892214cff30c2c2fae63bef39aaa9224b6641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1caa491413e1627af89c8d8a01892214cff30c2c2fae63bef39aaa9224b6641->enter($__internal_a1caa491413e1627af89c8d8a01892214cff30c2c2fae63bef39aaa9224b6641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a1caa491413e1627af89c8d8a01892214cff30c2c2fae63bef39aaa9224b6641->leave($__internal_a1caa491413e1627af89c8d8a01892214cff30c2c2fae63bef39aaa9224b6641_prof);

        
        $__internal_22897d54f40963f1c266452d26b4d19043c3ca9e7766f43b4f0f92f6c99263ea->leave($__internal_22897d54f40963f1c266452d26b4d19043c3ca9e7766f43b4f0f92f6c99263ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
