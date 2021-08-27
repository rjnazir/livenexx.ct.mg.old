<?php

/* AdminBundle:CtProcesVerbal:edit.html.twig */
class __TwigTemplate_429232781358f9634260548e29a1a0676a5f4ab58b3e7502043f6c8285ca8c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:edit.html.twig", 1);
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
        $__internal_438b6ca2305982f3056a69c6cb70b506226b088705fff965f5151aa95da39284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438b6ca2305982f3056a69c6cb70b506226b088705fff965f5151aa95da39284->enter($__internal_438b6ca2305982f3056a69c6cb70b506226b088705fff965f5151aa95da39284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        $__internal_af4aaf3609c3fe740dbca9d557d99efb1c75711c37abc2db8db0cc70a47b75aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4aaf3609c3fe740dbca9d557d99efb1c75711c37abc2db8db0cc70a47b75aa->enter($__internal_af4aaf3609c3fe740dbca9d557d99efb1c75711c37abc2db8db0cc70a47b75aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438b6ca2305982f3056a69c6cb70b506226b088705fff965f5151aa95da39284->leave($__internal_438b6ca2305982f3056a69c6cb70b506226b088705fff965f5151aa95da39284_prof);

        
        $__internal_af4aaf3609c3fe740dbca9d557d99efb1c75711c37abc2db8db0cc70a47b75aa->leave($__internal_af4aaf3609c3fe740dbca9d557d99efb1c75711c37abc2db8db0cc70a47b75aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cff8ff34c3a6a3c9c8e7182f580cf03fffb1791a6f126d73d3b894ad622dafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cff8ff34c3a6a3c9c8e7182f580cf03fffb1791a6f126d73d3b894ad622dafd->enter($__internal_1cff8ff34c3a6a3c9c8e7182f580cf03fffb1791a6f126d73d3b894ad622dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_085b5b3f8fa285cd505fd6fddb04353422b594ad9dfa05c89cc9d2302d552ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085b5b3f8fa285cd505fd6fddb04353422b594ad9dfa05c89cc9d2302d552ed0->enter($__internal_085b5b3f8fa285cd505fd6fddb04353422b594ad9dfa05c89cc9d2302d552ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_085b5b3f8fa285cd505fd6fddb04353422b594ad9dfa05c89cc9d2302d552ed0->leave($__internal_085b5b3f8fa285cd505fd6fddb04353422b594ad9dfa05c89cc9d2302d552ed0_prof);

        
        $__internal_1cff8ff34c3a6a3c9c8e7182f580cf03fffb1791a6f126d73d3b894ad622dafd->leave($__internal_1cff8ff34c3a6a3c9c8e7182f580cf03fffb1791a6f126d73d3b894ad622dafd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_695979beb78055f55cef5604a5bed72c9e90adc5519b4c9369b7ea411fa59514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695979beb78055f55cef5604a5bed72c9e90adc5519b4c9369b7ea411fa59514->enter($__internal_695979beb78055f55cef5604a5bed72c9e90adc5519b4c9369b7ea411fa59514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcefa32d92fb0fe090cc1ccaf67ab90114d39175573e0d0764fbbd8a18f6a6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcefa32d92fb0fe090cc1ccaf67ab90114d39175573e0d0764fbbd8a18f6a6d0->enter($__internal_bcefa32d92fb0fe090cc1ccaf67ab90114d39175573e0d0764fbbd8a18f6a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_bcefa32d92fb0fe090cc1ccaf67ab90114d39175573e0d0764fbbd8a18f6a6d0->leave($__internal_bcefa32d92fb0fe090cc1ccaf67ab90114d39175573e0d0764fbbd8a18f6a6d0_prof);

        
        $__internal_695979beb78055f55cef5604a5bed72c9e90adc5519b4c9369b7ea411fa59514->leave($__internal_695979beb78055f55cef5604a5bed72c9e90adc5519b4c9369b7ea411fa59514_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

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
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/edit.html.twig");
    }
}
