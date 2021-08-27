<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5e6412c11a0241481fb85705e3ccdc690eb0cf7adf9169a24e3329410fad557c extends Twig_Template
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
        $__internal_bd6571e3fd84e9b8cc1f92c4508b5ab03c2742c2b2bd77a8d78f52d1fc256503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6571e3fd84e9b8cc1f92c4508b5ab03c2742c2b2bd77a8d78f52d1fc256503->enter($__internal_bd6571e3fd84e9b8cc1f92c4508b5ab03c2742c2b2bd77a8d78f52d1fc256503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_a7ab05869db991f019976e7de1de6f7a99113c4622f015a00ece00fcbaf12cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ab05869db991f019976e7de1de6f7a99113c4622f015a00ece00fcbaf12cf0->enter($__internal_a7ab05869db991f019976e7de1de6f7a99113c4622f015a00ece00fcbaf12cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_bd6571e3fd84e9b8cc1f92c4508b5ab03c2742c2b2bd77a8d78f52d1fc256503->leave($__internal_bd6571e3fd84e9b8cc1f92c4508b5ab03c2742c2b2bd77a8d78f52d1fc256503_prof);

        
        $__internal_a7ab05869db991f019976e7de1de6f7a99113c4622f015a00ece00fcbaf12cf0->leave($__internal_a7ab05869db991f019976e7de1de6f7a99113c4622f015a00ece00fcbaf12cf0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
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
", "FOSUserBundle:Profile:show_content.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
