<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_67157227104559cf96543196efef41e46f26f890c2bd1c11ea71dc62fa363155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_d08620c00d0466e07a471ac2e30c76e70db6c693d91b7c58e78263571dfe6d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08620c00d0466e07a471ac2e30c76e70db6c693d91b7c58e78263571dfe6d53->enter($__internal_d08620c00d0466e07a471ac2e30c76e70db6c693d91b7c58e78263571dfe6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_32dbcc2487822e84cefa0d343e2771f3776e84e31c1654d3cc8bcacd1f231fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dbcc2487822e84cefa0d343e2771f3776e84e31c1654d3cc8bcacd1f231fa1->enter($__internal_32dbcc2487822e84cefa0d343e2771f3776e84e31c1654d3cc8bcacd1f231fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08620c00d0466e07a471ac2e30c76e70db6c693d91b7c58e78263571dfe6d53->leave($__internal_d08620c00d0466e07a471ac2e30c76e70db6c693d91b7c58e78263571dfe6d53_prof);

        
        $__internal_32dbcc2487822e84cefa0d343e2771f3776e84e31c1654d3cc8bcacd1f231fa1->leave($__internal_32dbcc2487822e84cefa0d343e2771f3776e84e31c1654d3cc8bcacd1f231fa1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a326bf88e47f0aacc155c80ba3f5fa228722e8e5e172c8001724229722f5a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a326bf88e47f0aacc155c80ba3f5fa228722e8e5e172c8001724229722f5a83->enter($__internal_6a326bf88e47f0aacc155c80ba3f5fa228722e8e5e172c8001724229722f5a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff8073a0a96c87dfee581a874ab14cbcd17c919508edc86bc0f8ab0b7be5328a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8073a0a96c87dfee581a874ab14cbcd17c919508edc86bc0f8ab0b7be5328a->enter($__internal_ff8073a0a96c87dfee581a874ab14cbcd17c919508edc86bc0f8ab0b7be5328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_ff8073a0a96c87dfee581a874ab14cbcd17c919508edc86bc0f8ab0b7be5328a->leave($__internal_ff8073a0a96c87dfee581a874ab14cbcd17c919508edc86bc0f8ab0b7be5328a_prof);

        
        $__internal_6a326bf88e47f0aacc155c80ba3f5fa228722e8e5e172c8001724229722f5a83->leave($__internal_6a326bf88e47f0aacc155c80ba3f5fa228722e8e5e172c8001724229722f5a83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
