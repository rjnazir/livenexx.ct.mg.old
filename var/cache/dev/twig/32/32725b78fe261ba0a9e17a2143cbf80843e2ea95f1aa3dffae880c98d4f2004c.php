<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8526b8f7dc632a8204d2bc980775592007193004031a75cf488abb755a308f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9bf6a9939cf2f6d05f8c77478a0a63e4d774c3a366760aedfd60ce0d9b05e970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf6a9939cf2f6d05f8c77478a0a63e4d774c3a366760aedfd60ce0d9b05e970->enter($__internal_9bf6a9939cf2f6d05f8c77478a0a63e4d774c3a366760aedfd60ce0d9b05e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_66b96aee26ba693a17ba5d9ab617609ede8af7799819ef53e014e524194ca176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b96aee26ba693a17ba5d9ab617609ede8af7799819ef53e014e524194ca176->enter($__internal_66b96aee26ba693a17ba5d9ab617609ede8af7799819ef53e014e524194ca176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf6a9939cf2f6d05f8c77478a0a63e4d774c3a366760aedfd60ce0d9b05e970->leave($__internal_9bf6a9939cf2f6d05f8c77478a0a63e4d774c3a366760aedfd60ce0d9b05e970_prof);

        
        $__internal_66b96aee26ba693a17ba5d9ab617609ede8af7799819ef53e014e524194ca176->leave($__internal_66b96aee26ba693a17ba5d9ab617609ede8af7799819ef53e014e524194ca176_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8277adcc2a096cd33b5c8073ff020901ded59ebdd82483f4761a60344daa26ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8277adcc2a096cd33b5c8073ff020901ded59ebdd82483f4761a60344daa26ae->enter($__internal_8277adcc2a096cd33b5c8073ff020901ded59ebdd82483f4761a60344daa26ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5e8b706fd57336463e8b768ddc5abd6fe60d99a3a48b82bd210a45aa34648abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8b706fd57336463e8b768ddc5abd6fe60d99a3a48b82bd210a45aa34648abe->enter($__internal_5e8b706fd57336463e8b768ddc5abd6fe60d99a3a48b82bd210a45aa34648abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5e8b706fd57336463e8b768ddc5abd6fe60d99a3a48b82bd210a45aa34648abe->leave($__internal_5e8b706fd57336463e8b768ddc5abd6fe60d99a3a48b82bd210a45aa34648abe_prof);

        
        $__internal_8277adcc2a096cd33b5c8073ff020901ded59ebdd82483f4761a60344daa26ae->leave($__internal_8277adcc2a096cd33b5c8073ff020901ded59ebdd82483f4761a60344daa26ae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
