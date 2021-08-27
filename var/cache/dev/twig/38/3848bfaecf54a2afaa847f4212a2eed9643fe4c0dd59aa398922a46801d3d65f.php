<?php

/* AdminBundle:CtGenreTarif:edit.html.twig */
class __TwigTemplate_7e952b9f23a4ae384403fbda6337f71da69593f28d45816e81272617f703e970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtGenreTarif:edit.html.twig", 1);
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
        $__internal_e790ccf917d3816f318fb2cbcdc8302d4f6cba97299b75b25cfb8d98a3421a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e790ccf917d3816f318fb2cbcdc8302d4f6cba97299b75b25cfb8d98a3421a46->enter($__internal_e790ccf917d3816f318fb2cbcdc8302d4f6cba97299b75b25cfb8d98a3421a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        $__internal_ec92fa265747c6a8144a5d5fcbca39f45f21aae8d92808aef7b41a42a35f2651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec92fa265747c6a8144a5d5fcbca39f45f21aae8d92808aef7b41a42a35f2651->enter($__internal_ec92fa265747c6a8144a5d5fcbca39f45f21aae8d92808aef7b41a42a35f2651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtGenreTarif:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e790ccf917d3816f318fb2cbcdc8302d4f6cba97299b75b25cfb8d98a3421a46->leave($__internal_e790ccf917d3816f318fb2cbcdc8302d4f6cba97299b75b25cfb8d98a3421a46_prof);

        
        $__internal_ec92fa265747c6a8144a5d5fcbca39f45f21aae8d92808aef7b41a42a35f2651->leave($__internal_ec92fa265747c6a8144a5d5fcbca39f45f21aae8d92808aef7b41a42a35f2651_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7043404ad37fd1214e77e0d2ee5d3abbfe527f5683500519ab2e12c1a7c52a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7043404ad37fd1214e77e0d2ee5d3abbfe527f5683500519ab2e12c1a7c52a8f->enter($__internal_7043404ad37fd1214e77e0d2ee5d3abbfe527f5683500519ab2e12c1a7c52a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfc4149e0ea8a7f6f46663403d050d86ccd435a8b1ed033382f7df60a52b1bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc4149e0ea8a7f6f46663403d050d86ccd435a8b1ed033382f7df60a52b1bc7->enter($__internal_bfc4149e0ea8a7f6f46663403d050d86ccd435a8b1ed033382f7df60a52b1bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de genre ";
        
        $__internal_bfc4149e0ea8a7f6f46663403d050d86ccd435a8b1ed033382f7df60a52b1bc7->leave($__internal_bfc4149e0ea8a7f6f46663403d050d86ccd435a8b1ed033382f7df60a52b1bc7_prof);

        
        $__internal_7043404ad37fd1214e77e0d2ee5d3abbfe527f5683500519ab2e12c1a7c52a8f->leave($__internal_7043404ad37fd1214e77e0d2ee5d3abbfe527f5683500519ab2e12c1a7c52a8f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7db3b955648afb5bb453e65d17a16fec476008565a8bcfe353b19654a435adbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db3b955648afb5bb453e65d17a16fec476008565a8bcfe353b19654a435adbd->enter($__internal_7db3b955648afb5bb453e65d17a16fec476008565a8bcfe353b19654a435adbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27ef52d3ceab42a88f20fd030cc465fd5eee6056002d62acc798e63e82d50aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ef52d3ceab42a88f20fd030cc465fd5eee6056002d62acc798e63e82d50aee->enter($__internal_27ef52d3ceab42a88f20fd030cc465fd5eee6056002d62acc798e63e82d50aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_index");
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
        
        $__internal_27ef52d3ceab42a88f20fd030cc465fd5eee6056002d62acc798e63e82d50aee->leave($__internal_27ef52d3ceab42a88f20fd030cc465fd5eee6056002d62acc798e63e82d50aee_prof);

        
        $__internal_7db3b955648afb5bb453e65d17a16fec476008565a8bcfe353b19654a435adbd->leave($__internal_7db3b955648afb5bb453e65d17a16fec476008565a8bcfe353b19654a435adbd_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtGenreTarif:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de genre {% endblock %}

{% set menu_genre_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenre) }}
                        {{ form_row(edit_form.grtPrix) }}
                        {#{{ form_row(edit_form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtGenreTarif:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtGenreTarif/edit.html.twig");
    }
}
