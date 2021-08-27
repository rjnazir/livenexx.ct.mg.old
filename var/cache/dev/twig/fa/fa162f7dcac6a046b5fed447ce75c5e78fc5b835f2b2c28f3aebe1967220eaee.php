<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_f0be25d39606d05a98b9b12650c550d63e62f3c818e760e80ad0bdfd2499707d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85782c0854e13692242189d4e593ec134da9bfa9a290163a77984f4dcc99a7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85782c0854e13692242189d4e593ec134da9bfa9a290163a77984f4dcc99a7e8->enter($__internal_85782c0854e13692242189d4e593ec134da9bfa9a290163a77984f4dcc99a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_370680f0bacc50b859edf90b6f38820ef0c89eb824beb29ced9b7131868cc75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370680f0bacc50b859edf90b6f38820ef0c89eb824beb29ced9b7131868cc75d->enter($__internal_370680f0bacc50b859edf90b6f38820ef0c89eb824beb29ced9b7131868cc75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_85782c0854e13692242189d4e593ec134da9bfa9a290163a77984f4dcc99a7e8->leave($__internal_85782c0854e13692242189d4e593ec134da9bfa9a290163a77984f4dcc99a7e8_prof);

        
        $__internal_370680f0bacc50b859edf90b6f38820ef0c89eb824beb29ced9b7131868cc75d->leave($__internal_370680f0bacc50b859edf90b6f38820ef0c89eb824beb29ced9b7131868cc75d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aa3573b7f908fc64ca0db2fa293d98ae9302c054775dc140ffbbe0b6106c2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa3573b7f908fc64ca0db2fa293d98ae9302c054775dc140ffbbe0b6106c2b8->enter($__internal_9aa3573b7f908fc64ca0db2fa293d98ae9302c054775dc140ffbbe0b6106c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8576120a9e7615197c135a8dc3b4cbf272884dec80db1a0b560e56bbfe5f799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8576120a9e7615197c135a8dc3b4cbf272884dec80db1a0b560e56bbfe5f799->enter($__internal_b8576120a9e7615197c135a8dc3b4cbf272884dec80db1a0b560e56bbfe5f799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8576120a9e7615197c135a8dc3b4cbf272884dec80db1a0b560e56bbfe5f799->leave($__internal_b8576120a9e7615197c135a8dc3b4cbf272884dec80db1a0b560e56bbfe5f799_prof);

        
        $__internal_9aa3573b7f908fc64ca0db2fa293d98ae9302c054775dc140ffbbe0b6106c2b8->leave($__internal_9aa3573b7f908fc64ca0db2fa293d98ae9302c054775dc140ffbbe0b6106c2b8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e2fd64802f141abc3cb9b193ffef73608515a1119c546e119a88b425653ada6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2fd64802f141abc3cb9b193ffef73608515a1119c546e119a88b425653ada6->enter($__internal_9e2fd64802f141abc3cb9b193ffef73608515a1119c546e119a88b425653ada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89c144d0c4801ad3333946f2ba6b3cd702add4eb7b2652ecfcf4169ff7f69da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c144d0c4801ad3333946f2ba6b3cd702add4eb7b2652ecfcf4169ff7f69da7->enter($__internal_89c144d0c4801ad3333946f2ba6b3cd702add4eb7b2652ecfcf4169ff7f69da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_89c144d0c4801ad3333946f2ba6b3cd702add4eb7b2652ecfcf4169ff7f69da7->leave($__internal_89c144d0c4801ad3333946f2ba6b3cd702add4eb7b2652ecfcf4169ff7f69da7_prof);

        
        $__internal_9e2fd64802f141abc3cb9b193ffef73608515a1119c546e119a88b425653ada6->leave($__internal_9e2fd64802f141abc3cb9b193ffef73608515a1119c546e119a88b425653ada6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a86ea5d576d31de33a73e33e8763cf5271da76be37cb4918f5d6a4015877982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a86ea5d576d31de33a73e33e8763cf5271da76be37cb4918f5d6a4015877982->enter($__internal_7a86ea5d576d31de33a73e33e8763cf5271da76be37cb4918f5d6a4015877982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9ffe17dd154f3a17653715689bd34d14203936c721986ceeb555990bed1a1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ffe17dd154f3a17653715689bd34d14203936c721986ceeb555990bed1a1ac->enter($__internal_f9ffe17dd154f3a17653715689bd34d14203936c721986ceeb555990bed1a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9ffe17dd154f3a17653715689bd34d14203936c721986ceeb555990bed1a1ac->leave($__internal_f9ffe17dd154f3a17653715689bd34d14203936c721986ceeb555990bed1a1ac_prof);

        
        $__internal_7a86ea5d576d31de33a73e33e8763cf5271da76be37cb4918f5d6a4015877982->leave($__internal_7a86ea5d576d31de33a73e33e8763cf5271da76be37cb4918f5d6a4015877982_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
