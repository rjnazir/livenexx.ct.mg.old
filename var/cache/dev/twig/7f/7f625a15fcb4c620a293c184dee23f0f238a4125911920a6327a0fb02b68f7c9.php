<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_92694e41333d55e330911df51652e1004f26059188fc1e50f3a85ec24263359d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_f99183553a0f7da72d17271ef153acd3e75edd4a4df5fd1cdcdcafbc2e661f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99183553a0f7da72d17271ef153acd3e75edd4a4df5fd1cdcdcafbc2e661f55->enter($__internal_f99183553a0f7da72d17271ef153acd3e75edd4a4df5fd1cdcdcafbc2e661f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_0873d278d40e5f84944fd0939e365d17ff55c69f67c7b07c95dc8ad2d29bfa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0873d278d40e5f84944fd0939e365d17ff55c69f67c7b07c95dc8ad2d29bfa1d->enter($__internal_0873d278d40e5f84944fd0939e365d17ff55c69f67c7b07c95dc8ad2d29bfa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99183553a0f7da72d17271ef153acd3e75edd4a4df5fd1cdcdcafbc2e661f55->leave($__internal_f99183553a0f7da72d17271ef153acd3e75edd4a4df5fd1cdcdcafbc2e661f55_prof);

        
        $__internal_0873d278d40e5f84944fd0939e365d17ff55c69f67c7b07c95dc8ad2d29bfa1d->leave($__internal_0873d278d40e5f84944fd0939e365d17ff55c69f67c7b07c95dc8ad2d29bfa1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_31924b4f0a4b90cd6d4e98600618e4e12d5fe9be9b9f932f50f6f0cbb97d65f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31924b4f0a4b90cd6d4e98600618e4e12d5fe9be9b9f932f50f6f0cbb97d65f1->enter($__internal_31924b4f0a4b90cd6d4e98600618e4e12d5fe9be9b9f932f50f6f0cbb97d65f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae07527286851a0e07d9ee5f525159d8fab46ca018c2005429c50a49bfd6c515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae07527286851a0e07d9ee5f525159d8fab46ca018c2005429c50a49bfd6c515->enter($__internal_ae07527286851a0e07d9ee5f525159d8fab46ca018c2005429c50a49bfd6c515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 500 ";
        
        $__internal_ae07527286851a0e07d9ee5f525159d8fab46ca018c2005429c50a49bfd6c515->leave($__internal_ae07527286851a0e07d9ee5f525159d8fab46ca018c2005429c50a49bfd6c515_prof);

        
        $__internal_31924b4f0a4b90cd6d4e98600618e4e12d5fe9be9b9f932f50f6f0cbb97d65f1->leave($__internal_31924b4f0a4b90cd6d4e98600618e4e12d5fe9be9b9f932f50f6f0cbb97d65f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c1d6762aa8d2a899f3fa2a28404df7b65d798ecd9a966511762876110b68587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1d6762aa8d2a899f3fa2a28404df7b65d798ecd9a966511762876110b68587->enter($__internal_2c1d6762aa8d2a899f3fa2a28404df7b65d798ecd9a966511762876110b68587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c16a404fdaa04517552abe5b15f3546a56d352c7ac5074165214b078a1db2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c16a404fdaa04517552abe5b15f3546a56d352c7ac5074165214b078a1db2b4->enter($__internal_1c16a404fdaa04517552abe5b15f3546a56d352c7ac5074165214b078a1db2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c16a404fdaa04517552abe5b15f3546a56d352c7ac5074165214b078a1db2b4->leave($__internal_1c16a404fdaa04517552abe5b15f3546a56d352c7ac5074165214b078a1db2b4_prof);

        
        $__internal_2c1d6762aa8d2a899f3fa2a28404df7b65d798ecd9a966511762876110b68587->leave($__internal_2c1d6762aa8d2a899f3fa2a28404df7b65d798ecd9a966511762876110b68587_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
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
{% endblock %}", "TwigBundle:Exception:error.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
