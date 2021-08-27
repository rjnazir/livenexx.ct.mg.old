<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_601b437b958edfe8a700f433585a0c18ae88a0dee44a0715e276d9aa030dd39d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10bee0eec9ccb35bb86f2f4b2b7f8b7b5781ed7a0c9dcae0c00cd8ae256bcf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bee0eec9ccb35bb86f2f4b2b7f8b7b5781ed7a0c9dcae0c00cd8ae256bcf3c->enter($__internal_10bee0eec9ccb35bb86f2f4b2b7f8b7b5781ed7a0c9dcae0c00cd8ae256bcf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ec91f6c8f6b88b332c893e6af3d562ec52c9e572091aa6c0871b3849fec9e790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec91f6c8f6b88b332c893e6af3d562ec52c9e572091aa6c0871b3849fec9e790->enter($__internal_ec91f6c8f6b88b332c893e6af3d562ec52c9e572091aa6c0871b3849fec9e790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10bee0eec9ccb35bb86f2f4b2b7f8b7b5781ed7a0c9dcae0c00cd8ae256bcf3c->leave($__internal_10bee0eec9ccb35bb86f2f4b2b7f8b7b5781ed7a0c9dcae0c00cd8ae256bcf3c_prof);

        
        $__internal_ec91f6c8f6b88b332c893e6af3d562ec52c9e572091aa6c0871b3849fec9e790->leave($__internal_ec91f6c8f6b88b332c893e6af3d562ec52c9e572091aa6c0871b3849fec9e790_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae10bb8843f14f3e388358c6bb2d4402cc2daf15a17ec2e791fecf6a515b35c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae10bb8843f14f3e388358c6bb2d4402cc2daf15a17ec2e791fecf6a515b35c9->enter($__internal_ae10bb8843f14f3e388358c6bb2d4402cc2daf15a17ec2e791fecf6a515b35c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c08a201ade283664de3f1cfaac4cfb2b69d2564e182be2c7b074d51763e5f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c08a201ade283664de3f1cfaac4cfb2b69d2564e182be2c7b074d51763e5f4d->enter($__internal_8c08a201ade283664de3f1cfaac4cfb2b69d2564e182be2c7b074d51763e5f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8c08a201ade283664de3f1cfaac4cfb2b69d2564e182be2c7b074d51763e5f4d->leave($__internal_8c08a201ade283664de3f1cfaac4cfb2b69d2564e182be2c7b074d51763e5f4d_prof);

        
        $__internal_ae10bb8843f14f3e388358c6bb2d4402cc2daf15a17ec2e791fecf6a515b35c9->leave($__internal_ae10bb8843f14f3e388358c6bb2d4402cc2daf15a17ec2e791fecf6a515b35c9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d08abbc205467fd9a634776686bcdeeea7b4b62fe96d679cac966b5613d17ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08abbc205467fd9a634776686bcdeeea7b4b62fe96d679cac966b5613d17ba5->enter($__internal_d08abbc205467fd9a634776686bcdeeea7b4b62fe96d679cac966b5613d17ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_643aac08ada3dfd8ee72e53046ae72846f63929eaefb001217ebcafbe67bc59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643aac08ada3dfd8ee72e53046ae72846f63929eaefb001217ebcafbe67bc59e->enter($__internal_643aac08ada3dfd8ee72e53046ae72846f63929eaefb001217ebcafbe67bc59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_643aac08ada3dfd8ee72e53046ae72846f63929eaefb001217ebcafbe67bc59e->leave($__internal_643aac08ada3dfd8ee72e53046ae72846f63929eaefb001217ebcafbe67bc59e_prof);

        
        $__internal_d08abbc205467fd9a634776686bcdeeea7b4b62fe96d679cac966b5613d17ba5->leave($__internal_d08abbc205467fd9a634776686bcdeeea7b4b62fe96d679cac966b5613d17ba5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
