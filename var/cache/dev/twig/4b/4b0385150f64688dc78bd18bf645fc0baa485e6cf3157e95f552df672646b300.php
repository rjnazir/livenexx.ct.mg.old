<?php

/* @Admin/CtZoneDeserte/edit.html.twig */
class __TwigTemplate_094a6ca3c270bc8e6a88a949d75efce5f5cc3782a349feab88966a2504a6ee9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/edit.html.twig", 1);
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
        $__internal_485fc83a03a4fae0dabdc1d7fe2bcbdf7c61d59e292a358736a48527101d867a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485fc83a03a4fae0dabdc1d7fe2bcbdf7c61d59e292a358736a48527101d867a->enter($__internal_485fc83a03a4fae0dabdc1d7fe2bcbdf7c61d59e292a358736a48527101d867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        $__internal_5a14d78418fcd9eff928297f596fde97f03d311e94c90f57b81c9e00ccc9125d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a14d78418fcd9eff928297f596fde97f03d311e94c90f57b81c9e00ccc9125d->enter($__internal_5a14d78418fcd9eff928297f596fde97f03d311e94c90f57b81c9e00ccc9125d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485fc83a03a4fae0dabdc1d7fe2bcbdf7c61d59e292a358736a48527101d867a->leave($__internal_485fc83a03a4fae0dabdc1d7fe2bcbdf7c61d59e292a358736a48527101d867a_prof);

        
        $__internal_5a14d78418fcd9eff928297f596fde97f03d311e94c90f57b81c9e00ccc9125d->leave($__internal_5a14d78418fcd9eff928297f596fde97f03d311e94c90f57b81c9e00ccc9125d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0ba961deaf392575cb90b632fa2911209bbfb6e83165102c3277cc862334c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0ba961deaf392575cb90b632fa2911209bbfb6e83165102c3277cc862334c3->enter($__internal_7c0ba961deaf392575cb90b632fa2911209bbfb6e83165102c3277cc862334c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67931db4a81bf7e5d8eb85943834c94c4f147c4917aeada4f29172fe01bebdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67931db4a81bf7e5d8eb85943834c94c4f147c4917aeada4f29172fe01bebdf7->enter($__internal_67931db4a81bf7e5d8eb85943834c94c4f147c4917aeada4f29172fe01bebdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_67931db4a81bf7e5d8eb85943834c94c4f147c4917aeada4f29172fe01bebdf7->leave($__internal_67931db4a81bf7e5d8eb85943834c94c4f147c4917aeada4f29172fe01bebdf7_prof);

        
        $__internal_7c0ba961deaf392575cb90b632fa2911209bbfb6e83165102c3277cc862334c3->leave($__internal_7c0ba961deaf392575cb90b632fa2911209bbfb6e83165102c3277cc862334c3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bf2b0f3c8388964d1f12282f95cd2595376ac213568be8075b32b389f95c9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf2b0f3c8388964d1f12282f95cd2595376ac213568be8075b32b389f95c9d7->enter($__internal_2bf2b0f3c8388964d1f12282f95cd2595376ac213568be8075b32b389f95c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e8a1197f135de51509e51d7c4c0a80e010cef55fffe84dbc1313e193de93dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8a1197f135de51509e51d7c4c0a80e010cef55fffe84dbc1313e193de93dac->enter($__internal_7e8a1197f135de51509e51d7c4c0a80e010cef55fffe84dbc1313e193de93dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7e8a1197f135de51509e51d7c4c0a80e010cef55fffe84dbc1313e193de93dac->leave($__internal_7e8a1197f135de51509e51d7c4c0a80e010cef55fffe84dbc1313e193de93dac_prof);

        
        $__internal_2bf2b0f3c8388964d1f12282f95cd2595376ac213568be8075b32b389f95c9d7->leave($__internal_2bf2b0f3c8388964d1f12282f95cd2595376ac213568be8075b32b389f95c9d7_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Zone de déserte {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtZoneDeserte/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\edit.html.twig");
    }
}
