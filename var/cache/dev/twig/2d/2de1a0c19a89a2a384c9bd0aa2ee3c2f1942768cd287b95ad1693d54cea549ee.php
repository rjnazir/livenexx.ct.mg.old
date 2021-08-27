<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e39a586884e7d7bcac4ca3818c5a3bdd2c7eda0895224775f212c98e2c240936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae4b27711a3d90a0d1efa0545f994c25559f6f7e90a112bb0777530d5e52747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae4b27711a3d90a0d1efa0545f994c25559f6f7e90a112bb0777530d5e52747->enter($__internal_eae4b27711a3d90a0d1efa0545f994c25559f6f7e90a112bb0777530d5e52747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7238ba166531bf99fd385ce7ea6fb450430a2e9e2bb23f14f8dc1e2506eef4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7238ba166531bf99fd385ce7ea6fb450430a2e9e2bb23f14f8dc1e2506eef4ef->enter($__internal_7238ba166531bf99fd385ce7ea6fb450430a2e9e2bb23f14f8dc1e2506eef4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae4b27711a3d90a0d1efa0545f994c25559f6f7e90a112bb0777530d5e52747->leave($__internal_eae4b27711a3d90a0d1efa0545f994c25559f6f7e90a112bb0777530d5e52747_prof);

        
        $__internal_7238ba166531bf99fd385ce7ea6fb450430a2e9e2bb23f14f8dc1e2506eef4ef->leave($__internal_7238ba166531bf99fd385ce7ea6fb450430a2e9e2bb23f14f8dc1e2506eef4ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_451c6dc23d5df02c72c81bb9c3308bdfbd8574b07e3f36c3bec1ba35337642a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451c6dc23d5df02c72c81bb9c3308bdfbd8574b07e3f36c3bec1ba35337642a8->enter($__internal_451c6dc23d5df02c72c81bb9c3308bdfbd8574b07e3f36c3bec1ba35337642a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1d133ccd98f509e675191c8e242c3db02fdb75ec4a279a0bc812e0b5a041869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d133ccd98f509e675191c8e242c3db02fdb75ec4a279a0bc812e0b5a041869->enter($__internal_a1d133ccd98f509e675191c8e242c3db02fdb75ec4a279a0bc812e0b5a041869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a1d133ccd98f509e675191c8e242c3db02fdb75ec4a279a0bc812e0b5a041869->leave($__internal_a1d133ccd98f509e675191c8e242c3db02fdb75ec4a279a0bc812e0b5a041869_prof);

        
        $__internal_451c6dc23d5df02c72c81bb9c3308bdfbd8574b07e3f36c3bec1ba35337642a8->leave($__internal_451c6dc23d5df02c72c81bb9c3308bdfbd8574b07e3f36c3bec1ba35337642a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_431d5d26d7ebc5980451ae3c79bcb5713e9281fb05bb1164864663ea1e4faccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431d5d26d7ebc5980451ae3c79bcb5713e9281fb05bb1164864663ea1e4faccb->enter($__internal_431d5d26d7ebc5980451ae3c79bcb5713e9281fb05bb1164864663ea1e4faccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_905d64b28c3eddcea6f4b4da347a0fe97b99ca83f5819f607170776410dfc035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905d64b28c3eddcea6f4b4da347a0fe97b99ca83f5819f607170776410dfc035->enter($__internal_905d64b28c3eddcea6f4b4da347a0fe97b99ca83f5819f607170776410dfc035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_905d64b28c3eddcea6f4b4da347a0fe97b99ca83f5819f607170776410dfc035->leave($__internal_905d64b28c3eddcea6f4b4da347a0fe97b99ca83f5819f607170776410dfc035_prof);

        
        $__internal_431d5d26d7ebc5980451ae3c79bcb5713e9281fb05bb1164864663ea1e4faccb->leave($__internal_431d5d26d7ebc5980451ae3c79bcb5713e9281fb05bb1164864663ea1e4faccb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
