<?php

/* ::base.html.twig */
class __TwigTemplate_fb98a6914955f33e9ca002fd9a662b7c8d84d7be9c05ddb1eb8cddccfa8f7730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e3f5103f85f64b9dcdf1944c8231ee05be4fd36dbc9acf5c1894acfd3844bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e3f5103f85f64b9dcdf1944c8231ee05be4fd36dbc9acf5c1894acfd3844bf->enter($__internal_56e3f5103f85f64b9dcdf1944c8231ee05be4fd36dbc9acf5c1894acfd3844bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_94e8b7b6d93ea7b9ca0ae92535b96721a9c5ea8affe83ac3cf6c9ab86571af49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e8b7b6d93ea7b9ca0ae92535b96721a9c5ea8affe83ac3cf6c9ab86571af49->enter($__internal_94e8b7b6d93ea7b9ca0ae92535b96721a9c5ea8affe83ac3cf6c9ab86571af49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_56e3f5103f85f64b9dcdf1944c8231ee05be4fd36dbc9acf5c1894acfd3844bf->leave($__internal_56e3f5103f85f64b9dcdf1944c8231ee05be4fd36dbc9acf5c1894acfd3844bf_prof);

        
        $__internal_94e8b7b6d93ea7b9ca0ae92535b96721a9c5ea8affe83ac3cf6c9ab86571af49->leave($__internal_94e8b7b6d93ea7b9ca0ae92535b96721a9c5ea8affe83ac3cf6c9ab86571af49_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fc94f2942b667d8c4fe2498dbc46092b83188a625c6aaef394a6acdada4bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1fc94f2942b667d8c4fe2498dbc46092b83188a625c6aaef394a6acdada4bb0->enter($__internal_f1fc94f2942b667d8c4fe2498dbc46092b83188a625c6aaef394a6acdada4bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e20438a28a0c12960fc65dcae436062e8a605bf8a0f42b7ff1a8e2d3f92146bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20438a28a0c12960fc65dcae436062e8a605bf8a0f42b7ff1a8e2d3f92146bd->enter($__internal_e20438a28a0c12960fc65dcae436062e8a605bf8a0f42b7ff1a8e2d3f92146bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e20438a28a0c12960fc65dcae436062e8a605bf8a0f42b7ff1a8e2d3f92146bd->leave($__internal_e20438a28a0c12960fc65dcae436062e8a605bf8a0f42b7ff1a8e2d3f92146bd_prof);

        
        $__internal_f1fc94f2942b667d8c4fe2498dbc46092b83188a625c6aaef394a6acdada4bb0->leave($__internal_f1fc94f2942b667d8c4fe2498dbc46092b83188a625c6aaef394a6acdada4bb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5311bae1811ccbea02a324dc6f620e10ca9852d81115c82b293945550f7c9fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5311bae1811ccbea02a324dc6f620e10ca9852d81115c82b293945550f7c9fd2->enter($__internal_5311bae1811ccbea02a324dc6f620e10ca9852d81115c82b293945550f7c9fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_948973855586f5df15a882c30b6c301a5848e4856b0c831db48557dc46f28d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948973855586f5df15a882c30b6c301a5848e4856b0c831db48557dc46f28d81->enter($__internal_948973855586f5df15a882c30b6c301a5848e4856b0c831db48557dc46f28d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_948973855586f5df15a882c30b6c301a5848e4856b0c831db48557dc46f28d81->leave($__internal_948973855586f5df15a882c30b6c301a5848e4856b0c831db48557dc46f28d81_prof);

        
        $__internal_5311bae1811ccbea02a324dc6f620e10ca9852d81115c82b293945550f7c9fd2->leave($__internal_5311bae1811ccbea02a324dc6f620e10ca9852d81115c82b293945550f7c9fd2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6773388ad76e4bf23a877159f0bbf9baf5564e78062f489f1c8aca5bd5888a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6773388ad76e4bf23a877159f0bbf9baf5564e78062f489f1c8aca5bd5888a8->enter($__internal_f6773388ad76e4bf23a877159f0bbf9baf5564e78062f489f1c8aca5bd5888a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ed130cb9c18a1d8c02476a3ba348a44c5dff2485d3e6c1a802795b9a2ee6e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed130cb9c18a1d8c02476a3ba348a44c5dff2485d3e6c1a802795b9a2ee6e66->enter($__internal_7ed130cb9c18a1d8c02476a3ba348a44c5dff2485d3e6c1a802795b9a2ee6e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ed130cb9c18a1d8c02476a3ba348a44c5dff2485d3e6c1a802795b9a2ee6e66->leave($__internal_7ed130cb9c18a1d8c02476a3ba348a44c5dff2485d3e6c1a802795b9a2ee6e66_prof);

        
        $__internal_f6773388ad76e4bf23a877159f0bbf9baf5564e78062f489f1c8aca5bd5888a8->leave($__internal_f6773388ad76e4bf23a877159f0bbf9baf5564e78062f489f1c8aca5bd5888a8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f99fbe0570f964d5781923160174cb5870db8efd187ce327321f0db65865b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f99fbe0570f964d5781923160174cb5870db8efd187ce327321f0db65865b31->enter($__internal_0f99fbe0570f964d5781923160174cb5870db8efd187ce327321f0db65865b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a16289203de35150b6f147b0f9b652543ed1dc003c0060ab93111337b4b719a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16289203de35150b6f147b0f9b652543ed1dc003c0060ab93111337b4b719a6->enter($__internal_a16289203de35150b6f147b0f9b652543ed1dc003c0060ab93111337b4b719a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a16289203de35150b6f147b0f9b652543ed1dc003c0060ab93111337b4b719a6->leave($__internal_a16289203de35150b6f147b0f9b652543ed1dc003c0060ab93111337b4b719a6_prof);

        
        $__internal_0f99fbe0570f964d5781923160174cb5870db8efd187ce327321f0db65865b31->leave($__internal_0f99fbe0570f964d5781923160174cb5870db8efd187ce327321f0db65865b31_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/base.html.twig");
    }
}
