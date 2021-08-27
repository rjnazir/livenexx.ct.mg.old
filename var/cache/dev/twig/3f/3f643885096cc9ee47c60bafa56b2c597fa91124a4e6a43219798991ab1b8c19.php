<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_90079af311f02986fff44bbbe0fc13b3d29e77789cd6ea72f5d685693773b7c3 extends Twig_Template
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
        $__internal_f52380bcfd884ecc3ea6f380cbb7850e8e1d6961ddd9027ee163b5d51d441c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52380bcfd884ecc3ea6f380cbb7850e8e1d6961ddd9027ee163b5d51d441c7d->enter($__internal_f52380bcfd884ecc3ea6f380cbb7850e8e1d6961ddd9027ee163b5d51d441c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_7b9cd3627b0da170a00db22d7e9851321dbdc9f9d35c13d27b5adda59b31d1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9cd3627b0da170a00db22d7e9851321dbdc9f9d35c13d27b5adda59b31d1cb->enter($__internal_7b9cd3627b0da170a00db22d7e9851321dbdc9f9d35c13d27b5adda59b31d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_f52380bcfd884ecc3ea6f380cbb7850e8e1d6961ddd9027ee163b5d51d441c7d->leave($__internal_f52380bcfd884ecc3ea6f380cbb7850e8e1d6961ddd9027ee163b5d51d441c7d_prof);

        
        $__internal_7b9cd3627b0da170a00db22d7e9851321dbdc9f9d35c13d27b5adda59b31d1cb->leave($__internal_7b9cd3627b0da170a00db22d7e9851321dbdc9f9d35c13d27b5adda59b31d1cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
