<?php

/* AdminBundle:CtTypeAnomalie:add.html.twig */
class __TwigTemplate_d99694358697e8bf1fc38619cfb70c68af50b7f43e206043a9b3ad01fe1910f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeAnomalie:add.html.twig", 1);
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
        $__internal_e145a075061315ccffa25c2149b4f911b7c5ea75d8c81684daa0343f3da26f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e145a075061315ccffa25c2149b4f911b7c5ea75d8c81684daa0343f3da26f56->enter($__internal_e145a075061315ccffa25c2149b4f911b7c5ea75d8c81684daa0343f3da26f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        $__internal_653c1b43d9eb3682c02675c6448e1b549474c5376e8089947795a5b47bea60e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653c1b43d9eb3682c02675c6448e1b549474c5376e8089947795a5b47bea60e1->enter($__internal_653c1b43d9eb3682c02675c6448e1b549474c5376e8089947795a5b47bea60e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeAnomalie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_anomalie"] = true;
        // line 8
        $context["menu_type_anomalie"] = true;
        // line 9
        $context["menu_type_anomalie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e145a075061315ccffa25c2149b4f911b7c5ea75d8c81684daa0343f3da26f56->leave($__internal_e145a075061315ccffa25c2149b4f911b7c5ea75d8c81684daa0343f3da26f56_prof);

        
        $__internal_653c1b43d9eb3682c02675c6448e1b549474c5376e8089947795a5b47bea60e1->leave($__internal_653c1b43d9eb3682c02675c6448e1b549474c5376e8089947795a5b47bea60e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_664286c404b19ec02ccea76495615db88e8450c3b43409d9cee0c904a33115ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664286c404b19ec02ccea76495615db88e8450c3b43409d9cee0c904a33115ae->enter($__internal_664286c404b19ec02ccea76495615db88e8450c3b43409d9cee0c904a33115ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8ea63a7a246eacd6d113265d4d6ad326035c9bc41e81fe19f657a58ff25c479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ea63a7a246eacd6d113265d4d6ad326035c9bc41e81fe19f657a58ff25c479->enter($__internal_c8ea63a7a246eacd6d113265d4d6ad326035c9bc41e81fe19f657a58ff25c479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type anomalie ";
        
        $__internal_c8ea63a7a246eacd6d113265d4d6ad326035c9bc41e81fe19f657a58ff25c479->leave($__internal_c8ea63a7a246eacd6d113265d4d6ad326035c9bc41e81fe19f657a58ff25c479_prof);

        
        $__internal_664286c404b19ec02ccea76495615db88e8450c3b43409d9cee0c904a33115ae->leave($__internal_664286c404b19ec02ccea76495615db88e8450c3b43409d9cee0c904a33115ae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_312f6b750e6c4026d96d464676d7696863d8ff23f9dcfc32609bd3f8200c460b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312f6b750e6c4026d96d464676d7696863d8ff23f9dcfc32609bd3f8200c460b->enter($__internal_312f6b750e6c4026d96d464676d7696863d8ff23f9dcfc32609bd3f8200c460b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e27c1571d725a08c4113c7ca298084828865ceffa9854d1be4298dfd0ea7677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e27c1571d725a08c4113c7ca298084828865ceffa9854d1be4298dfd0ea7677->enter($__internal_1e27c1571d725a08c4113c7ca298084828865ceffa9854d1be4298dfd0ea7677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "atpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_1e27c1571d725a08c4113c7ca298084828865ceffa9854d1be4298dfd0ea7677->leave($__internal_1e27c1571d725a08c4113c7ca298084828865ceffa9854d1be4298dfd0ea7677_prof);

        
        $__internal_312f6b750e6c4026d96d464676d7696863d8ff23f9dcfc32609bd3f8200c460b->leave($__internal_312f6b750e6c4026d96d464676d7696863d8ff23f9dcfc32609bd3f8200c460b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeAnomalie:add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type anomalie {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type d'anomalie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.atpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_anomalie\"/>
                        <a href=\"{{ path('type_anomalie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeAnomalie:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeAnomalie/add.html.twig");
    }
}
