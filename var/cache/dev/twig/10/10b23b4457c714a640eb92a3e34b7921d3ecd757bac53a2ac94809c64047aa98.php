<?php

/* base.html.twig */
class __TwigTemplate_820014a7d11e5630f7b8f96636ab25f9df9e043eb564847d32007105b80be4d2 extends Twig_Template
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
        $__internal_cd1aca9541530c6ef0e7b3451b71302a1d4c81368261435d62a9d2f810d91b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1aca9541530c6ef0e7b3451b71302a1d4c81368261435d62a9d2f810d91b97->enter($__internal_cd1aca9541530c6ef0e7b3451b71302a1d4c81368261435d62a9d2f810d91b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_546e4aa917f36fa1429f90971bc957ed33b933ad35e2a5f131bad178a9a55920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e4aa917f36fa1429f90971bc957ed33b933ad35e2a5f131bad178a9a55920->enter($__internal_546e4aa917f36fa1429f90971bc957ed33b933ad35e2a5f131bad178a9a55920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cd1aca9541530c6ef0e7b3451b71302a1d4c81368261435d62a9d2f810d91b97->leave($__internal_cd1aca9541530c6ef0e7b3451b71302a1d4c81368261435d62a9d2f810d91b97_prof);

        
        $__internal_546e4aa917f36fa1429f90971bc957ed33b933ad35e2a5f131bad178a9a55920->leave($__internal_546e4aa917f36fa1429f90971bc957ed33b933ad35e2a5f131bad178a9a55920_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2755904648b20250548ff9435b376f3cae2ff3942c91c3616025af14e8c3440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2755904648b20250548ff9435b376f3cae2ff3942c91c3616025af14e8c3440->enter($__internal_b2755904648b20250548ff9435b376f3cae2ff3942c91c3616025af14e8c3440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97b5d821b3b3ef25af0fe782d798a17b6d1c33bce50278dc94c8f3ccc197312f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b5d821b3b3ef25af0fe782d798a17b6d1c33bce50278dc94c8f3ccc197312f->enter($__internal_97b5d821b3b3ef25af0fe782d798a17b6d1c33bce50278dc94c8f3ccc197312f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97b5d821b3b3ef25af0fe782d798a17b6d1c33bce50278dc94c8f3ccc197312f->leave($__internal_97b5d821b3b3ef25af0fe782d798a17b6d1c33bce50278dc94c8f3ccc197312f_prof);

        
        $__internal_b2755904648b20250548ff9435b376f3cae2ff3942c91c3616025af14e8c3440->leave($__internal_b2755904648b20250548ff9435b376f3cae2ff3942c91c3616025af14e8c3440_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f63b366a96c0d81cfc242799ecfe41f65c2d26f34dba8ddcc3b7e23f127c3cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63b366a96c0d81cfc242799ecfe41f65c2d26f34dba8ddcc3b7e23f127c3cb0->enter($__internal_f63b366a96c0d81cfc242799ecfe41f65c2d26f34dba8ddcc3b7e23f127c3cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3cba9f21c8a65ef4532ca339ee76da31db67c8f8eb11580068b9b4dfa211b3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cba9f21c8a65ef4532ca339ee76da31db67c8f8eb11580068b9b4dfa211b3f1->enter($__internal_3cba9f21c8a65ef4532ca339ee76da31db67c8f8eb11580068b9b4dfa211b3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3cba9f21c8a65ef4532ca339ee76da31db67c8f8eb11580068b9b4dfa211b3f1->leave($__internal_3cba9f21c8a65ef4532ca339ee76da31db67c8f8eb11580068b9b4dfa211b3f1_prof);

        
        $__internal_f63b366a96c0d81cfc242799ecfe41f65c2d26f34dba8ddcc3b7e23f127c3cb0->leave($__internal_f63b366a96c0d81cfc242799ecfe41f65c2d26f34dba8ddcc3b7e23f127c3cb0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf363b726c96b564db231193f810ea4396a54fa216431fbb4a43bb73bad22063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf363b726c96b564db231193f810ea4396a54fa216431fbb4a43bb73bad22063->enter($__internal_cf363b726c96b564db231193f810ea4396a54fa216431fbb4a43bb73bad22063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_208eb52eab9ff800821d49643f3ab4d5ac628d5bfc0296cec41a027a83da26f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208eb52eab9ff800821d49643f3ab4d5ac628d5bfc0296cec41a027a83da26f5->enter($__internal_208eb52eab9ff800821d49643f3ab4d5ac628d5bfc0296cec41a027a83da26f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_208eb52eab9ff800821d49643f3ab4d5ac628d5bfc0296cec41a027a83da26f5->leave($__internal_208eb52eab9ff800821d49643f3ab4d5ac628d5bfc0296cec41a027a83da26f5_prof);

        
        $__internal_cf363b726c96b564db231193f810ea4396a54fa216431fbb4a43bb73bad22063->leave($__internal_cf363b726c96b564db231193f810ea4396a54fa216431fbb4a43bb73bad22063_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b838dda70bc6936941ec6a4deb8fffc25b08e5770e546529f6067ff2fefaa28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b838dda70bc6936941ec6a4deb8fffc25b08e5770e546529f6067ff2fefaa28b->enter($__internal_b838dda70bc6936941ec6a4deb8fffc25b08e5770e546529f6067ff2fefaa28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dde16e5c04f695ab70adf69b3892b483a4368d03fb6fd68fef2ec9227c26c451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde16e5c04f695ab70adf69b3892b483a4368d03fb6fd68fef2ec9227c26c451->enter($__internal_dde16e5c04f695ab70adf69b3892b483a4368d03fb6fd68fef2ec9227c26c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dde16e5c04f695ab70adf69b3892b483a4368d03fb6fd68fef2ec9227c26c451->leave($__internal_dde16e5c04f695ab70adf69b3892b483a4368d03fb6fd68fef2ec9227c26c451_prof);

        
        $__internal_b838dda70bc6936941ec6a4deb8fffc25b08e5770e546529f6067ff2fefaa28b->leave($__internal_b838dda70bc6936941ec6a4deb8fffc25b08e5770e546529f6067ff2fefaa28b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\base.html.twig");
    }
}
