<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_b3f3d9df0296d7bf595c41fe8cdb60cc0a40c1fba6377c19a720bd1dcc25bb6a extends Twig_Template
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
        $__internal_340a484c0654c9ee36838965bf1f97829fc84eec06164d72bb23545831d0f6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340a484c0654c9ee36838965bf1f97829fc84eec06164d72bb23545831d0f6e0->enter($__internal_340a484c0654c9ee36838965bf1f97829fc84eec06164d72bb23545831d0f6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_1592871b9bfb176af302db0d400387df1df89cea1e307e4c61e3c998cfc063e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1592871b9bfb176af302db0d400387df1df89cea1e307e4c61e3c998cfc063e4->enter($__internal_1592871b9bfb176af302db0d400387df1df89cea1e307e4c61e3c998cfc063e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_340a484c0654c9ee36838965bf1f97829fc84eec06164d72bb23545831d0f6e0->leave($__internal_340a484c0654c9ee36838965bf1f97829fc84eec06164d72bb23545831d0f6e0_prof);

        
        $__internal_1592871b9bfb176af302db0d400387df1df89cea1e307e4c61e3c998cfc063e4->leave($__internal_1592871b9bfb176af302db0d400387df1df89cea1e307e4c61e3c998cfc063e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
