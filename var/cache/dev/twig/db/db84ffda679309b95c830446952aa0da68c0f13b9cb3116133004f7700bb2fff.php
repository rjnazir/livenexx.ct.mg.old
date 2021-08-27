<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_5604e532dc24110b22dd5378198191ce7eae4c1c3db38a8e6916f5810c54c96a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_af75f5255039eb4c0413e0e3bb0c2f8b8febfc8328c421c3c2e27b1c8639d365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af75f5255039eb4c0413e0e3bb0c2f8b8febfc8328c421c3c2e27b1c8639d365->enter($__internal_af75f5255039eb4c0413e0e3bb0c2f8b8febfc8328c421c3c2e27b1c8639d365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_38d67837309d2f940e445f6863229264d86a9dd98285031543ce5071a0047a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d67837309d2f940e445f6863229264d86a9dd98285031543ce5071a0047a58->enter($__internal_38d67837309d2f940e445f6863229264d86a9dd98285031543ce5071a0047a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af75f5255039eb4c0413e0e3bb0c2f8b8febfc8328c421c3c2e27b1c8639d365->leave($__internal_af75f5255039eb4c0413e0e3bb0c2f8b8febfc8328c421c3c2e27b1c8639d365_prof);

        
        $__internal_38d67837309d2f940e445f6863229264d86a9dd98285031543ce5071a0047a58->leave($__internal_38d67837309d2f940e445f6863229264d86a9dd98285031543ce5071a0047a58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba7628ac5a31c7f68dd9dfce55af205d9cfaaa8c1be31a7bfaf3ba9caa44d816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7628ac5a31c7f68dd9dfce55af205d9cfaaa8c1be31a7bfaf3ba9caa44d816->enter($__internal_ba7628ac5a31c7f68dd9dfce55af205d9cfaaa8c1be31a7bfaf3ba9caa44d816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d6a081db86d30f6246937d0d7e8279f85e39be28e4f02caba917e552618f99e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a081db86d30f6246937d0d7e8279f85e39be28e4f02caba917e552618f99e1->enter($__internal_d6a081db86d30f6246937d0d7e8279f85e39be28e4f02caba917e552618f99e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_d6a081db86d30f6246937d0d7e8279f85e39be28e4f02caba917e552618f99e1->leave($__internal_d6a081db86d30f6246937d0d7e8279f85e39be28e4f02caba917e552618f99e1_prof);

        
        $__internal_ba7628ac5a31c7f68dd9dfce55af205d9cfaaa8c1be31a7bfaf3ba9caa44d816->leave($__internal_ba7628ac5a31c7f68dd9dfce55af205d9cfaaa8c1be31a7bfaf3ba9caa44d816_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
