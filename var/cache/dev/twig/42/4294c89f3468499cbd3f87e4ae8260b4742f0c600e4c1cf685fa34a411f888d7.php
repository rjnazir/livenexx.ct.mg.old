<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_da422ac8bd43b8351e66174e77bb7e65850e349ae08a71f7607ad298351cabd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_654a9599e4a5bc09e8a6d93e3c11211b328e3c191c0e4ed81af420f49a030b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654a9599e4a5bc09e8a6d93e3c11211b328e3c191c0e4ed81af420f49a030b1d->enter($__internal_654a9599e4a5bc09e8a6d93e3c11211b328e3c191c0e4ed81af420f49a030b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_ed6d90e8ebdbe574ab2f02af8a0d08ee18d011488919fafaaa914cdeac173a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6d90e8ebdbe574ab2f02af8a0d08ee18d011488919fafaaa914cdeac173a6d->enter($__internal_ed6d90e8ebdbe574ab2f02af8a0d08ee18d011488919fafaaa914cdeac173a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654a9599e4a5bc09e8a6d93e3c11211b328e3c191c0e4ed81af420f49a030b1d->leave($__internal_654a9599e4a5bc09e8a6d93e3c11211b328e3c191c0e4ed81af420f49a030b1d_prof);

        
        $__internal_ed6d90e8ebdbe574ab2f02af8a0d08ee18d011488919fafaaa914cdeac173a6d->leave($__internal_ed6d90e8ebdbe574ab2f02af8a0d08ee18d011488919fafaaa914cdeac173a6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf64a7cca48ed94ab1fce6f5e525857d5eef59f7df6f1c4a4a3474189503d60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf64a7cca48ed94ab1fce6f5e525857d5eef59f7df6f1c4a4a3474189503d60f->enter($__internal_bf64a7cca48ed94ab1fce6f5e525857d5eef59f7df6f1c4a4a3474189503d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8dd61958298543b8d0a25316a2890936f78b8daabd42f8916d51251a6762f4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd61958298543b8d0a25316a2890936f78b8daabd42f8916d51251a6762f4dd->enter($__internal_8dd61958298543b8d0a25316a2890936f78b8daabd42f8916d51251a6762f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8dd61958298543b8d0a25316a2890936f78b8daabd42f8916d51251a6762f4dd->leave($__internal_8dd61958298543b8d0a25316a2890936f78b8daabd42f8916d51251a6762f4dd_prof);

        
        $__internal_bf64a7cca48ed94ab1fce6f5e525857d5eef59f7df6f1c4a4a3474189503d60f->leave($__internal_bf64a7cca48ed94ab1fce6f5e525857d5eef59f7df6f1c4a4a3474189503d60f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
