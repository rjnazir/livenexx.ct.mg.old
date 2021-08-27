<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfbd10b3e687de38dbada56a6bee287b42af00ae891cf8cf120586a60cce5d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f06592bf7d02494eb8b23db8d66a1a2df01172a33f742e3ea68d0370d1556bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06592bf7d02494eb8b23db8d66a1a2df01172a33f742e3ea68d0370d1556bb1->enter($__internal_f06592bf7d02494eb8b23db8d66a1a2df01172a33f742e3ea68d0370d1556bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_e96ab1d539cce169ce310cfb4d0de6fc3ecc4e4b2ae805416130dacaee7a4df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96ab1d539cce169ce310cfb4d0de6fc3ecc4e4b2ae805416130dacaee7a4df8->enter($__internal_e96ab1d539cce169ce310cfb4d0de6fc3ecc4e4b2ae805416130dacaee7a4df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06592bf7d02494eb8b23db8d66a1a2df01172a33f742e3ea68d0370d1556bb1->leave($__internal_f06592bf7d02494eb8b23db8d66a1a2df01172a33f742e3ea68d0370d1556bb1_prof);

        
        $__internal_e96ab1d539cce169ce310cfb4d0de6fc3ecc4e4b2ae805416130dacaee7a4df8->leave($__internal_e96ab1d539cce169ce310cfb4d0de6fc3ecc4e4b2ae805416130dacaee7a4df8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8167a368024634d5b2c5b1339f61233215372d3bc3defcf20e15563ea2df240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8167a368024634d5b2c5b1339f61233215372d3bc3defcf20e15563ea2df240->enter($__internal_f8167a368024634d5b2c5b1339f61233215372d3bc3defcf20e15563ea2df240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f3dcef11beee7665b8474aa2066cfa50936f59242e0db886b11e5d5b16bea309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dcef11beee7665b8474aa2066cfa50936f59242e0db886b11e5d5b16bea309->enter($__internal_f3dcef11beee7665b8474aa2066cfa50936f59242e0db886b11e5d5b16bea309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f3dcef11beee7665b8474aa2066cfa50936f59242e0db886b11e5d5b16bea309->leave($__internal_f3dcef11beee7665b8474aa2066cfa50936f59242e0db886b11e5d5b16bea309_prof);

        
        $__internal_f8167a368024634d5b2c5b1339f61233215372d3bc3defcf20e15563ea2df240->leave($__internal_f8167a368024634d5b2c5b1339f61233215372d3bc3defcf20e15563ea2df240_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfe5976e48d3926a4d2c75d97c78b2801f0686e9f79013b6b0b36106c5124828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe5976e48d3926a4d2c75d97c78b2801f0686e9f79013b6b0b36106c5124828->enter($__internal_cfe5976e48d3926a4d2c75d97c78b2801f0686e9f79013b6b0b36106c5124828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5bc174aa72886c07d7db69d1bb3a838b3aece4858997cd609bdb42058c12ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bc174aa72886c07d7db69d1bb3a838b3aece4858997cd609bdb42058c12ff4->enter($__internal_f5bc174aa72886c07d7db69d1bb3a838b3aece4858997cd609bdb42058c12ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5bc174aa72886c07d7db69d1bb3a838b3aece4858997cd609bdb42058c12ff4->leave($__internal_f5bc174aa72886c07d7db69d1bb3a838b3aece4858997cd609bdb42058c12ff4_prof);

        
        $__internal_cfe5976e48d3926a4d2c75d97c78b2801f0686e9f79013b6b0b36106c5124828->leave($__internal_cfe5976e48d3926a4d2c75d97c78b2801f0686e9f79013b6b0b36106c5124828_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea17100155b9e02463d008a09f17b35723c1860358ed3860be21f6b4493c4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea17100155b9e02463d008a09f17b35723c1860358ed3860be21f6b4493c4ba->enter($__internal_2ea17100155b9e02463d008a09f17b35723c1860358ed3860be21f6b4493c4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf89843555ee99bd4bdaffded1aaf6b3173dba6e8116a79e7252f6e034006e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf89843555ee99bd4bdaffded1aaf6b3173dba6e8116a79e7252f6e034006e4b->enter($__internal_bf89843555ee99bd4bdaffded1aaf6b3173dba6e8116a79e7252f6e034006e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bf89843555ee99bd4bdaffded1aaf6b3173dba6e8116a79e7252f6e034006e4b->leave($__internal_bf89843555ee99bd4bdaffded1aaf6b3173dba6e8116a79e7252f6e034006e4b_prof);

        
        $__internal_2ea17100155b9e02463d008a09f17b35723c1860358ed3860be21f6b4493c4ba->leave($__internal_2ea17100155b9e02463d008a09f17b35723c1860358ed3860be21f6b4493c4ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
