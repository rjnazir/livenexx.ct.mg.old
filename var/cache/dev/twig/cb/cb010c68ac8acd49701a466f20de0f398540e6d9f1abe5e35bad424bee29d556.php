<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1db00dae794f481a5293c79c4377836d39858a5ded80f3186e0f4eaca689b2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_952aca8f97847248dca354862e6f71a45ff14a746f23a04bedf6557ea1079dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952aca8f97847248dca354862e6f71a45ff14a746f23a04bedf6557ea1079dc3->enter($__internal_952aca8f97847248dca354862e6f71a45ff14a746f23a04bedf6557ea1079dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_750ec2e75db6b73002e93c463456b3480927442abafa3389cb10ed6e3e3c7c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750ec2e75db6b73002e93c463456b3480927442abafa3389cb10ed6e3e3c7c49->enter($__internal_750ec2e75db6b73002e93c463456b3480927442abafa3389cb10ed6e3e3c7c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952aca8f97847248dca354862e6f71a45ff14a746f23a04bedf6557ea1079dc3->leave($__internal_952aca8f97847248dca354862e6f71a45ff14a746f23a04bedf6557ea1079dc3_prof);

        
        $__internal_750ec2e75db6b73002e93c463456b3480927442abafa3389cb10ed6e3e3c7c49->leave($__internal_750ec2e75db6b73002e93c463456b3480927442abafa3389cb10ed6e3e3c7c49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85c920f14d074eee5b26658bf039c53cc5a542a285d9450eab284998076cf15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c920f14d074eee5b26658bf039c53cc5a542a285d9450eab284998076cf15f->enter($__internal_85c920f14d074eee5b26658bf039c53cc5a542a285d9450eab284998076cf15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db5da5d410e3b27acec53105f56103d5b466a58dc34600908414d87644d53333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5da5d410e3b27acec53105f56103d5b466a58dc34600908414d87644d53333->enter($__internal_db5da5d410e3b27acec53105f56103d5b466a58dc34600908414d87644d53333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_db5da5d410e3b27acec53105f56103d5b466a58dc34600908414d87644d53333->leave($__internal_db5da5d410e3b27acec53105f56103d5b466a58dc34600908414d87644d53333_prof);

        
        $__internal_85c920f14d074eee5b26658bf039c53cc5a542a285d9450eab284998076cf15f->leave($__internal_85c920f14d074eee5b26658bf039c53cc5a542a285d9450eab284998076cf15f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
