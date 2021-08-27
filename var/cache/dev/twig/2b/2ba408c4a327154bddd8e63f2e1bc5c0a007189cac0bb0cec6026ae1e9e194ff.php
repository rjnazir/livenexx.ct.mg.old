<?php

/* AdminBundle:CtTypeReception:edit.html.twig */
class __TwigTemplate_8e180d53704f7145da061555613d51380b1f3df28ea3aef541f5728d8f0b6815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:edit.html.twig", 1);
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
        $__internal_0cc6aeb67c76aea87968b6a7ed9d462fc268f465f641e9d3f5180b3eba52cfb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc6aeb67c76aea87968b6a7ed9d462fc268f465f641e9d3f5180b3eba52cfb6->enter($__internal_0cc6aeb67c76aea87968b6a7ed9d462fc268f465f641e9d3f5180b3eba52cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:edit.html.twig"));

        $__internal_e0bade950bfc34de105cd031c60c56c7e7964e015a01733f3696492354f71793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bade950bfc34de105cd031c60c56c7e7964e015a01733f3696492354f71793->enter($__internal_e0bade950bfc34de105cd031c60c56c7e7964e015a01733f3696492354f71793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cc6aeb67c76aea87968b6a7ed9d462fc268f465f641e9d3f5180b3eba52cfb6->leave($__internal_0cc6aeb67c76aea87968b6a7ed9d462fc268f465f641e9d3f5180b3eba52cfb6_prof);

        
        $__internal_e0bade950bfc34de105cd031c60c56c7e7964e015a01733f3696492354f71793->leave($__internal_e0bade950bfc34de105cd031c60c56c7e7964e015a01733f3696492354f71793_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32cd7603b39045d916a5509ece4e597284dcb249ababeba255bcd90e05cfd9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cd7603b39045d916a5509ece4e597284dcb249ababeba255bcd90e05cfd9be->enter($__internal_32cd7603b39045d916a5509ece4e597284dcb249ababeba255bcd90e05cfd9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b12b518d39687265000f373277ec7cf363d1290d92742e72c82f086369e5fcdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b12b518d39687265000f373277ec7cf363d1290d92742e72c82f086369e5fcdf->enter($__internal_b12b518d39687265000f373277ec7cf363d1290d92742e72c82f086369e5fcdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de réception ";
        
        $__internal_b12b518d39687265000f373277ec7cf363d1290d92742e72c82f086369e5fcdf->leave($__internal_b12b518d39687265000f373277ec7cf363d1290d92742e72c82f086369e5fcdf_prof);

        
        $__internal_32cd7603b39045d916a5509ece4e597284dcb249ababeba255bcd90e05cfd9be->leave($__internal_32cd7603b39045d916a5509ece4e597284dcb249ababeba255bcd90e05cfd9be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_733e5989aff1ef53a8d5fd8f6bf270aa5e668a9b77b79c277cb32e9b3bd21a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733e5989aff1ef53a8d5fd8f6bf270aa5e668a9b77b79c277cb32e9b3bd21a7b->enter($__internal_733e5989aff1ef53a8d5fd8f6bf270aa5e668a9b77b79c277cb32e9b3bd21a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_279541fb5affedf59eca3fa36c050949856cff06d07122faa887cbbb8da1423f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279541fb5affedf59eca3fa36c050949856cff06d07122faa887cbbb8da1423f->enter($__internal_279541fb5affedf59eca3fa36c050949856cff06d07122faa887cbbb8da1423f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_279541fb5affedf59eca3fa36c050949856cff06d07122faa887cbbb8da1423f->leave($__internal_279541fb5affedf59eca3fa36c050949856cff06d07122faa887cbbb8da1423f_prof);

        
        $__internal_733e5989aff1ef53a8d5fd8f6bf270aa5e668a9b77b79c277cb32e9b3bd21a7b->leave($__internal_733e5989aff1ef53a8d5fd8f6bf270aa5e668a9b77b79c277cb32e9b3bd21a7b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type de réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Editer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeReception:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/edit.html.twig");
    }
}
