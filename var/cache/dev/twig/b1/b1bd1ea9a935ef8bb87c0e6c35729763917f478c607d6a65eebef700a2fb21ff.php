<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_0c44b5c774c5e82bfb7fd11ab67eff4ffb279b9828f842b93be409679e353973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65b93c1423b962d518c13db745cabd97f5f1d92c933cda67fad4d94a93c4d70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b93c1423b962d518c13db745cabd97f5f1d92c933cda67fad4d94a93c4d70e->enter($__internal_65b93c1423b962d518c13db745cabd97f5f1d92c933cda67fad4d94a93c4d70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_914685d135a270c7409c9d054d73b8b05053ff31f86e890d50f2c60ed13de0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914685d135a270c7409c9d054d73b8b05053ff31f86e890d50f2c60ed13de0bf->enter($__internal_914685d135a270c7409c9d054d73b8b05053ff31f86e890d50f2c60ed13de0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b93c1423b962d518c13db745cabd97f5f1d92c933cda67fad4d94a93c4d70e->leave($__internal_65b93c1423b962d518c13db745cabd97f5f1d92c933cda67fad4d94a93c4d70e_prof);

        
        $__internal_914685d135a270c7409c9d054d73b8b05053ff31f86e890d50f2c60ed13de0bf->leave($__internal_914685d135a270c7409c9d054d73b8b05053ff31f86e890d50f2c60ed13de0bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10dc2636587109e72096ffbe34eca059296b21ac910486a7370b64e6df5e9468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dc2636587109e72096ffbe34eca059296b21ac910486a7370b64e6df5e9468->enter($__internal_10dc2636587109e72096ffbe34eca059296b21ac910486a7370b64e6df5e9468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d27362cf8e8a0d1d0ea0311a26ae3cd565871b85e1b657712f8887bf71fe4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d27362cf8e8a0d1d0ea0311a26ae3cd565871b85e1b657712f8887bf71fe4d2->enter($__internal_3d27362cf8e8a0d1d0ea0311a26ae3cd565871b85e1b657712f8887bf71fe4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_3d27362cf8e8a0d1d0ea0311a26ae3cd565871b85e1b657712f8887bf71fe4d2->leave($__internal_3d27362cf8e8a0d1d0ea0311a26ae3cd565871b85e1b657712f8887bf71fe4d2_prof);

        
        $__internal_10dc2636587109e72096ffbe34eca059296b21ac910486a7370b64e6df5e9468->leave($__internal_10dc2636587109e72096ffbe34eca059296b21ac910486a7370b64e6df5e9468_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fa767d64556744305c831748cdc6bc91f977f1222a5c37259798a1f5a788708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa767d64556744305c831748cdc6bc91f977f1222a5c37259798a1f5a788708->enter($__internal_5fa767d64556744305c831748cdc6bc91f977f1222a5c37259798a1f5a788708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89d46147ab186307ce53ace274ed55dd13e1f3ed8fc21e5d6c0dba38809f029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89d46147ab186307ce53ace274ed55dd13e1f3ed8fc21e5d6c0dba38809f029->enter($__internal_e89d46147ab186307ce53ace274ed55dd13e1f3ed8fc21e5d6c0dba38809f029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
";
        
        $__internal_e89d46147ab186307ce53ace274ed55dd13e1f3ed8fc21e5d6c0dba38809f029->leave($__internal_e89d46147ab186307ce53ace274ed55dd13e1f3ed8fc21e5d6c0dba38809f029_prof);

        
        $__internal_5fa767d64556744305c831748cdc6bc91f977f1222a5c37259798a1f5a788708->leave($__internal_5fa767d64556744305c831748cdc6bc91f977f1222a5c37259798a1f5a788708_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %} {{ parent() }} Erreur 500 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 500</h1>
                <p>Désolé, une erreur est survenue !</p>
            </div>
        </div>
    </section>
{% endblock %}", "@Twig/Exception/error.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\TwigBundle\\views\\Exception\\error.html.twig");
    }
}
