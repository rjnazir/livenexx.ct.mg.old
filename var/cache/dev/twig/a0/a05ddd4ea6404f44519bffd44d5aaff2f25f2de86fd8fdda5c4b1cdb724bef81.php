<?php

/* AdminBundle:CtTypeAnomalie:edit.html.twig */
class __TwigTemplate_7026a4baba8cc72ede28bd8ad5702f27cb7b0b28509e57eb333b87e2d07fa3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:edit.html.twig", 1);
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
        $__internal_6a3d9e91e8112a4043a695341391a0142cd74e90efadf029f9d20ecc7c831337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3d9e91e8112a4043a695341391a0142cd74e90efadf029f9d20ecc7c831337->enter($__internal_6a3d9e91e8112a4043a695341391a0142cd74e90efadf029f9d20ecc7c831337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:edit.html.twig"));

        $__internal_46e2721e6debaf22608107eb9446ab6225d6906a840e21ed228c132571a5f2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e2721e6debaf22608107eb9446ab6225d6906a840e21ed228c132571a5f2c9->enter($__internal_46e2721e6debaf22608107eb9446ab6225d6906a840e21ed228c132571a5f2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3d9e91e8112a4043a695341391a0142cd74e90efadf029f9d20ecc7c831337->leave($__internal_6a3d9e91e8112a4043a695341391a0142cd74e90efadf029f9d20ecc7c831337_prof);

        
        $__internal_46e2721e6debaf22608107eb9446ab6225d6906a840e21ed228c132571a5f2c9->leave($__internal_46e2721e6debaf22608107eb9446ab6225d6906a840e21ed228c132571a5f2c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f6f2be7aa15a0085d31bd7a12cabb81d1ee733d5a597355885b69e8236c6cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6f2be7aa15a0085d31bd7a12cabb81d1ee733d5a597355885b69e8236c6cf0->enter($__internal_6f6f2be7aa15a0085d31bd7a12cabb81d1ee733d5a597355885b69e8236c6cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c58d33163963345e0548f0cb1c16af846045770048040057cb55428e32e644c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c58d33163963345e0548f0cb1c16af846045770048040057cb55428e32e644c->enter($__internal_6c58d33163963345e0548f0cb1c16af846045770048040057cb55428e32e644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type anomalie ";
        
        $__internal_6c58d33163963345e0548f0cb1c16af846045770048040057cb55428e32e644c->leave($__internal_6c58d33163963345e0548f0cb1c16af846045770048040057cb55428e32e644c_prof);

        
        $__internal_6f6f2be7aa15a0085d31bd7a12cabb81d1ee733d5a597355885b69e8236c6cf0->leave($__internal_6f6f2be7aa15a0085d31bd7a12cabb81d1ee733d5a597355885b69e8236c6cf0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab6e13ecab100fab8bcfefe13bd6f070829bcdc6b2240b1cc7b8b85a5f18477a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab6e13ecab100fab8bcfefe13bd6f070829bcdc6b2240b1cc7b8b85a5f18477a->enter($__internal_ab6e13ecab100fab8bcfefe13bd6f070829bcdc6b2240b1cc7b8b85a5f18477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51bd7cbc8d989adbf8aac3b83a6b13201985fb56aa135eabdd3040f70ee6bc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bd7cbc8d989adbf8aac3b83a6b13201985fb56aa135eabdd3040f70ee6bc0d->enter($__internal_51bd7cbc8d989adbf8aac3b83a6b13201985fb56aa135eabdd3040f70ee6bc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <div class=\"callout callout-success\">
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_51bd7cbc8d989adbf8aac3b83a6b13201985fb56aa135eabdd3040f70ee6bc0d->leave($__internal_51bd7cbc8d989adbf8aac3b83a6b13201985fb56aa135eabdd3040f70ee6bc0d_prof);

        
        $__internal_ab6e13ecab100fab8bcfefe13bd6f070829bcdc6b2240b1cc7b8b85a5f18477a->leave($__internal_ab6e13ecab100fab8bcfefe13bd6f070829bcdc6b2240b1cc7b8b85a5f18477a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Type anomalie {% endblock %}

{% set menu_anomalie             = true %}
{% set menu_type_anomalie        = true %}
{% set menu_type_anomalie_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeAnomalie:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/edit.html.twig");
    }
}
