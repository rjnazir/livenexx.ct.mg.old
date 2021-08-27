<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_a1c18609b0bc8b57e3a9567ad75226e171ed7c6b8e18725565a217c3e6aec907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6201a6a6953f54c258389c7646214b49cb7841ce5a42d0af8cd92a0ba99625d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6201a6a6953f54c258389c7646214b49cb7841ce5a42d0af8cd92a0ba99625d->enter($__internal_a6201a6a6953f54c258389c7646214b49cb7841ce5a42d0af8cd92a0ba99625d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_e75f98dc1e73ad3051913e39f798bca96d899ff11b161fa4280a7c53ee97b4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75f98dc1e73ad3051913e39f798bca96d899ff11b161fa4280a7c53ee97b4c2->enter($__internal_e75f98dc1e73ad3051913e39f798bca96d899ff11b161fa4280a7c53ee97b4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a6201a6a6953f54c258389c7646214b49cb7841ce5a42d0af8cd92a0ba99625d->leave($__internal_a6201a6a6953f54c258389c7646214b49cb7841ce5a42d0af8cd92a0ba99625d_prof);

        
        $__internal_e75f98dc1e73ad3051913e39f798bca96d899ff11b161fa4280a7c53ee97b4c2->leave($__internal_e75f98dc1e73ad3051913e39f798bca96d899ff11b161fa4280a7c53ee97b4c2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
