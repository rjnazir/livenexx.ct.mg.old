<?php

/* AdminBundle:CtSourceEnergie:edit.html.twig */
class __TwigTemplate_85f8d3768943a1895a53be71d27752bf03e3d8d1492c3a334eea2a0c45834602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtSourceEnergie:edit.html.twig", 1);
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
        $__internal_88472ae38932586415da21c0100aff6558e32c8d7d73c15e8439ceb13a4e0d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88472ae38932586415da21c0100aff6558e32c8d7d73c15e8439ceb13a4e0d04->enter($__internal_88472ae38932586415da21c0100aff6558e32c8d7d73c15e8439ceb13a4e0d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:edit.html.twig"));

        $__internal_dc3dd25e674a21e275ac52fb74030e4080eba385cbed8a8a576f33348feaa984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3dd25e674a21e275ac52fb74030e4080eba385cbed8a8a576f33348feaa984->enter($__internal_dc3dd25e674a21e275ac52fb74030e4080eba385cbed8a8a576f33348feaa984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88472ae38932586415da21c0100aff6558e32c8d7d73c15e8439ceb13a4e0d04->leave($__internal_88472ae38932586415da21c0100aff6558e32c8d7d73c15e8439ceb13a4e0d04_prof);

        
        $__internal_dc3dd25e674a21e275ac52fb74030e4080eba385cbed8a8a576f33348feaa984->leave($__internal_dc3dd25e674a21e275ac52fb74030e4080eba385cbed8a8a576f33348feaa984_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0706774a9e9eb4dd8f5b9bded957e88797928fc97b42e1a91859a84fcfe55e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0706774a9e9eb4dd8f5b9bded957e88797928fc97b42e1a91859a84fcfe55e72->enter($__internal_0706774a9e9eb4dd8f5b9bded957e88797928fc97b42e1a91859a84fcfe55e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d18bc921023a961aceb847b4b08de0823067f16ee9d29f5842465b027720e245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18bc921023a961aceb847b4b08de0823067f16ee9d29f5842465b027720e245->enter($__internal_d18bc921023a961aceb847b4b08de0823067f16ee9d29f5842465b027720e245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Source Energie ";
        
        $__internal_d18bc921023a961aceb847b4b08de0823067f16ee9d29f5842465b027720e245->leave($__internal_d18bc921023a961aceb847b4b08de0823067f16ee9d29f5842465b027720e245_prof);

        
        $__internal_0706774a9e9eb4dd8f5b9bded957e88797928fc97b42e1a91859a84fcfe55e72->leave($__internal_0706774a9e9eb4dd8f5b9bded957e88797928fc97b42e1a91859a84fcfe55e72_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_22b9368216931ff539859e82a9c70a809ffc8464ce0e949c9e6fd98aac90554e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b9368216931ff539859e82a9c70a809ffc8464ce0e949c9e6fd98aac90554e->enter($__internal_22b9368216931ff539859e82a9c70a809ffc8464ce0e949c9e6fd98aac90554e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_782725d2b18989ccd857a91a02bc18c441df8bf7a847cdc42c329de42991b736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782725d2b18989ccd857a91a02bc18c441df8bf7a847cdc42c329de42991b736->enter($__internal_782725d2b18989ccd857a91a02bc18c441df8bf7a847cdc42c329de42991b736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
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
        
        $__internal_782725d2b18989ccd857a91a02bc18c441df8bf7a847cdc42c329de42991b736->leave($__internal_782725d2b18989ccd857a91a02bc18c441df8bf7a847cdc42c329de42991b736_prof);

        
        $__internal_22b9368216931ff539859e82a9c70a809ffc8464ce0e949c9e6fd98aac90554e->leave($__internal_22b9368216931ff539859e82a9c70a809ffc8464ce0e949c9e6fd98aac90554e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtSourceEnergie:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Source Energie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Editer une source d'energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtSourceEnergie:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtSourceEnergie/edit.html.twig");
    }
}
