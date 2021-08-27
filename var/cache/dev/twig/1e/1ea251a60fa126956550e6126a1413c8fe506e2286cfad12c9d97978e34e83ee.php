<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_9940d2abff534d9e5769c698107dac85cea934b0380cc3d979c4dba4dd245562 extends Twig_Template
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
        $__internal_5c6b34f1cdeefa611c55b4192e5b843d74d192f806127bd5f5ef4576ee95e1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6b34f1cdeefa611c55b4192e5b843d74d192f806127bd5f5ef4576ee95e1c9->enter($__internal_5c6b34f1cdeefa611c55b4192e5b843d74d192f806127bd5f5ef4576ee95e1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_23e50d8dac727ea054187af51d5fd7856d45485f06a0206caeef4b1c00d5eec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e50d8dac727ea054187af51d5fd7856d45485f06a0206caeef4b1c00d5eec0->enter($__internal_23e50d8dac727ea054187af51d5fd7856d45485f06a0206caeef4b1c00d5eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5c6b34f1cdeefa611c55b4192e5b843d74d192f806127bd5f5ef4576ee95e1c9->leave($__internal_5c6b34f1cdeefa611c55b4192e5b843d74d192f806127bd5f5ef4576ee95e1c9_prof);

        
        $__internal_23e50d8dac727ea054187af51d5fd7856d45485f06a0206caeef4b1c00d5eec0->leave($__internal_23e50d8dac727ea054187af51d5fd7856d45485f06a0206caeef4b1c00d5eec0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
