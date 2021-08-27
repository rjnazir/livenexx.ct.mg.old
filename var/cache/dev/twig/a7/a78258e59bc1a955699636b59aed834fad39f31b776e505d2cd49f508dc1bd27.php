<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d81454c4e77537485e5c235e6e38f12ca644b485366930e348aeb9f32ba4a8f3 extends Twig_Template
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
        $__internal_5fee423ba8472eceeae9133a9ed2ac79d6b0f4b94038abbd193a78f107a9cad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fee423ba8472eceeae9133a9ed2ac79d6b0f4b94038abbd193a78f107a9cad5->enter($__internal_5fee423ba8472eceeae9133a9ed2ac79d6b0f4b94038abbd193a78f107a9cad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_cefe25d487ef654d7f0b8b20175930337bd020c10fdc89a070f49cd9ae02abf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefe25d487ef654d7f0b8b20175930337bd020c10fdc89a070f49cd9ae02abf3->enter($__internal_cefe25d487ef654d7f0b8b20175930337bd020c10fdc89a070f49cd9ae02abf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5fee423ba8472eceeae9133a9ed2ac79d6b0f4b94038abbd193a78f107a9cad5->leave($__internal_5fee423ba8472eceeae9133a9ed2ac79d6b0f4b94038abbd193a78f107a9cad5_prof);

        
        $__internal_cefe25d487ef654d7f0b8b20175930337bd020c10fdc89a070f49cd9ae02abf3->leave($__internal_cefe25d487ef654d7f0b8b20175930337bd020c10fdc89a070f49cd9ae02abf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
