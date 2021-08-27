<?php

/* @Admin/CtTypeDroitPtac/edit.html.twig */
class __TwigTemplate_ba311160c31565564f4848365c8e71e1e56f55f0158a18bf6d78cb75e3e1605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/edit.html.twig", 1);
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
        $__internal_61daecb4dada87457960ab017d3938cea60644b5c094c277c8601835655091eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61daecb4dada87457960ab017d3938cea60644b5c094c277c8601835655091eb->enter($__internal_61daecb4dada87457960ab017d3938cea60644b5c094c277c8601835655091eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        $__internal_ce31ef0989ec7c1659408a24cd35abec161fc25ab5d3fb6257d4787f931cd3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce31ef0989ec7c1659408a24cd35abec161fc25ab5d3fb6257d4787f931cd3d0->enter($__internal_ce31ef0989ec7c1659408a24cd35abec161fc25ab5d3fb6257d4787f931cd3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61daecb4dada87457960ab017d3938cea60644b5c094c277c8601835655091eb->leave($__internal_61daecb4dada87457960ab017d3938cea60644b5c094c277c8601835655091eb_prof);

        
        $__internal_ce31ef0989ec7c1659408a24cd35abec161fc25ab5d3fb6257d4787f931cd3d0->leave($__internal_ce31ef0989ec7c1659408a24cd35abec161fc25ab5d3fb6257d4787f931cd3d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c32cd0d1a0a8030977e37712cb7f051fc0727efd63a8d7c38360cd1a7a56b93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32cd0d1a0a8030977e37712cb7f051fc0727efd63a8d7c38360cd1a7a56b93b->enter($__internal_c32cd0d1a0a8030977e37712cb7f051fc0727efd63a8d7c38360cd1a7a56b93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b696d201f73dd41bad3331e1a31d9703d8f8326817547a71e1c063ff813563c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b696d201f73dd41bad3331e1a31d9703d8f8326817547a71e1c063ff813563c0->enter($__internal_b696d201f73dd41bad3331e1a31d9703d8f8326817547a71e1c063ff813563c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type de droit PTAC ";
        
        $__internal_b696d201f73dd41bad3331e1a31d9703d8f8326817547a71e1c063ff813563c0->leave($__internal_b696d201f73dd41bad3331e1a31d9703d8f8326817547a71e1c063ff813563c0_prof);

        
        $__internal_c32cd0d1a0a8030977e37712cb7f051fc0727efd63a8d7c38360cd1a7a56b93b->leave($__internal_c32cd0d1a0a8030977e37712cb7f051fc0727efd63a8d7c38360cd1a7a56b93b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7343c2079d7b4d451405057584f4027db4017a1fd85fefd11831fc0612947e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7343c2079d7b4d451405057584f4027db4017a1fd85fefd11831fc0612947e5a->enter($__internal_7343c2079d7b4d451405057584f4027db4017a1fd85fefd11831fc0612947e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32217dec159f0774a5ba88be3eef0a1ccc8109b9a478ab413eb09e5a5f4ea32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32217dec159f0774a5ba88be3eef0a1ccc8109b9a478ab413eb09e5a5f4ea32f->enter($__internal_32217dec159f0774a5ba88be3eef0a1ccc8109b9a478ab413eb09e5a5f4ea32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
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
        
        $__internal_32217dec159f0774a5ba88be3eef0a1ccc8109b9a478ab413eb09e5a5f4ea32f->leave($__internal_32217dec159f0774a5ba88be3eef0a1ccc8109b9a478ab413eb09e5a5f4ea32f_prof);

        
        $__internal_7343c2079d7b4d451405057584f4027db4017a1fd85fefd11831fc0612947e5a->leave($__internal_7343c2079d7b4d451405057584f4027db4017a1fd85fefd11831fc0612947e5a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type de droit PTAC {% endblock %}

{% set menu_type_droit_ptac        = true %}
{% set menu_type_droit_ptac_create = true %}

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
                        <h3 class=\"box-title\">Editer une type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeDroitPtac/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\edit.html.twig");
    }
}
