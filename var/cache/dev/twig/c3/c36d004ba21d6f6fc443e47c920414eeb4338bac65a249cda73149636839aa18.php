<?php

/* AdminBundle:CtZoneDeserte:add.html.twig */
class __TwigTemplate_5249a728ffde46b77bad5efd5639ab7df44f3b0a2ce6c100cef08c9d10736338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:add.html.twig", 1);
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
        $__internal_c0bf9216a0ea1982cd7f0b721ad54ed3506b8c20a01e3c1c0e582e6382707c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bf9216a0ea1982cd7f0b721ad54ed3506b8c20a01e3c1c0e582e6382707c5a->enter($__internal_c0bf9216a0ea1982cd7f0b721ad54ed3506b8c20a01e3c1c0e582e6382707c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:add.html.twig"));

        $__internal_1cd78ec0e8851a49d2b4c49f6fc9308b5a7cbd253671ee568daa91b4848b6de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd78ec0e8851a49d2b4c49f6fc9308b5a7cbd253671ee568daa91b4848b6de6->enter($__internal_1cd78ec0e8851a49d2b4c49f6fc9308b5a7cbd253671ee568daa91b4848b6de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0bf9216a0ea1982cd7f0b721ad54ed3506b8c20a01e3c1c0e582e6382707c5a->leave($__internal_c0bf9216a0ea1982cd7f0b721ad54ed3506b8c20a01e3c1c0e582e6382707c5a_prof);

        
        $__internal_1cd78ec0e8851a49d2b4c49f6fc9308b5a7cbd253671ee568daa91b4848b6de6->leave($__internal_1cd78ec0e8851a49d2b4c49f6fc9308b5a7cbd253671ee568daa91b4848b6de6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f97918f49dd3f9335a942242a51226f1cf74eb9dde166756f00d83289fd91c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97918f49dd3f9335a942242a51226f1cf74eb9dde166756f00d83289fd91c0f->enter($__internal_f97918f49dd3f9335a942242a51226f1cf74eb9dde166756f00d83289fd91c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69b773da89b29fa717ae13c755a673b17693d384085afa8f1c7c985d54028fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b773da89b29fa717ae13c755a673b17693d384085afa8f1c7c985d54028fdc->enter($__internal_69b773da89b29fa717ae13c755a673b17693d384085afa8f1c7c985d54028fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Zone de déserte ";
        
        $__internal_69b773da89b29fa717ae13c755a673b17693d384085afa8f1c7c985d54028fdc->leave($__internal_69b773da89b29fa717ae13c755a673b17693d384085afa8f1c7c985d54028fdc_prof);

        
        $__internal_f97918f49dd3f9335a942242a51226f1cf74eb9dde166756f00d83289fd91c0f->leave($__internal_f97918f49dd3f9335a942242a51226f1cf74eb9dde166756f00d83289fd91c0f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6d074542cd40ac155ecf7a607edf85756c70ee22ce7e8398d73dd858692707d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d074542cd40ac155ecf7a607edf85756c70ee22ce7e8398d73dd858692707d->enter($__internal_d6d074542cd40ac155ecf7a607edf85756c70ee22ce7e8398d73dd858692707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81c21b702a38671bb09dd518c0382fa3edf4d156bf89c0905dcd8fe0867b7b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c21b702a38671bb09dd518c0382fa3edf4d156bf89c0905dcd8fe0867b7b32->enter($__internal_81c21b702a38671bb09dd518c0382fa3edf4d156bf89c0905dcd8fe0867b7b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_81c21b702a38671bb09dd518c0382fa3edf4d156bf89c0905dcd8fe0867b7b32->leave($__internal_81c21b702a38671bb09dd518c0382fa3edf4d156bf89c0905dcd8fe0867b7b32_prof);

        
        $__internal_d6d074542cd40ac155ecf7a607edf85756c70ee22ce7e8398d73dd858692707d->leave($__internal_d6d074542cd40ac155ecf7a607edf85756c70ee22ce7e8398d73dd858692707d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtZoneDeserte:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/add.html.twig");
    }
}
