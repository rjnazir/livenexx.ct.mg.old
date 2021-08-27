<?php

/* @Admin/CtTypeAnomalie/edit.html.twig */
class __TwigTemplate_3874800f180dfa71f267f57969c995dd3612118a0a0a56312b9a526eac131377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeAnomalie/edit.html.twig", 1);
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
        $__internal_9960b1425266f248925d99eef5cf28c752fc7eed8be0f4dfbe907e78581df1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9960b1425266f248925d99eef5cf28c752fc7eed8be0f4dfbe907e78581df1a0->enter($__internal_9960b1425266f248925d99eef5cf28c752fc7eed8be0f4dfbe907e78581df1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

        $__internal_6478da09fc7e647c30038f13bf999d386ddc0756fefe5050653aac23edd8b91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6478da09fc7e647c30038f13bf999d386ddc0756fefe5050653aac23edd8b91f->enter($__internal_6478da09fc7e647c30038f13bf999d386ddc0756fefe5050653aac23edd8b91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeAnomalie/edit.html.twig"));

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
        
        $__internal_9960b1425266f248925d99eef5cf28c752fc7eed8be0f4dfbe907e78581df1a0->leave($__internal_9960b1425266f248925d99eef5cf28c752fc7eed8be0f4dfbe907e78581df1a0_prof);

        
        $__internal_6478da09fc7e647c30038f13bf999d386ddc0756fefe5050653aac23edd8b91f->leave($__internal_6478da09fc7e647c30038f13bf999d386ddc0756fefe5050653aac23edd8b91f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2037c0d6edb75bffc5603eb350450ab6ef835b6aa4840ea5cfc80970539a58bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2037c0d6edb75bffc5603eb350450ab6ef835b6aa4840ea5cfc80970539a58bb->enter($__internal_2037c0d6edb75bffc5603eb350450ab6ef835b6aa4840ea5cfc80970539a58bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d54850bf6bed0921814e6fb6c78c107c0f8a8844abb9210a46f769c43930fb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54850bf6bed0921814e6fb6c78c107c0f8a8844abb9210a46f769c43930fb54->enter($__internal_d54850bf6bed0921814e6fb6c78c107c0f8a8844abb9210a46f769c43930fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type anomalie ";
        
        $__internal_d54850bf6bed0921814e6fb6c78c107c0f8a8844abb9210a46f769c43930fb54->leave($__internal_d54850bf6bed0921814e6fb6c78c107c0f8a8844abb9210a46f769c43930fb54_prof);

        
        $__internal_2037c0d6edb75bffc5603eb350450ab6ef835b6aa4840ea5cfc80970539a58bb->leave($__internal_2037c0d6edb75bffc5603eb350450ab6ef835b6aa4840ea5cfc80970539a58bb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b8d371b791372f773fb52454f9cd37add46d7890585d1a00fdce41b00ad7ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8d371b791372f773fb52454f9cd37add46d7890585d1a00fdce41b00ad7ff3->enter($__internal_5b8d371b791372f773fb52454f9cd37add46d7890585d1a00fdce41b00ad7ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9fc63f57c5d075d7b51bbcece0bdfde808dfd06bf5bd723ea77e21c5b162b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fc63f57c5d075d7b51bbcece0bdfde808dfd06bf5bd723ea77e21c5b162b49->enter($__internal_a9fc63f57c5d075d7b51bbcece0bdfde808dfd06bf5bd723ea77e21c5b162b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a9fc63f57c5d075d7b51bbcece0bdfde808dfd06bf5bd723ea77e21c5b162b49->leave($__internal_a9fc63f57c5d075d7b51bbcece0bdfde808dfd06bf5bd723ea77e21c5b162b49_prof);

        
        $__internal_5b8d371b791372f773fb52454f9cd37add46d7890585d1a00fdce41b00ad7ff3->leave($__internal_5b8d371b791372f773fb52454f9cd37add46d7890585d1a00fdce41b00ad7ff3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeAnomalie/edit.html.twig";
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
{% endblock %}", "@Admin/CtTypeAnomalie/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeAnomalie\\edit.html.twig");
    }
}
