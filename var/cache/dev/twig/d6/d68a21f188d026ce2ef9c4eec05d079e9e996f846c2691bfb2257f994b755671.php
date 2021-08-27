<?php

/* AdminBundle:CtCentre:edit.html.twig */
class __TwigTemplate_e4577fd03bcdcb9c89d97d33bc4962a942ba81b4ff6103a681de6d479701ff22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:edit.html.twig", 1);
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
        $__internal_2b2912a11fe3346d522c5fbc1c3130f632b7609b9f4796201ec3bead2dd591b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2912a11fe3346d522c5fbc1c3130f632b7609b9f4796201ec3bead2dd591b1->enter($__internal_2b2912a11fe3346d522c5fbc1c3130f632b7609b9f4796201ec3bead2dd591b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        $__internal_8a6e46b9bbbf953d2e01f8e29c8fc47137177b4ff4284894f11bc78e7b992d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6e46b9bbbf953d2e01f8e29c8fc47137177b4ff4284894f11bc78e7b992d30->enter($__internal_8a6e46b9bbbf953d2e01f8e29c8fc47137177b4ff4284894f11bc78e7b992d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2912a11fe3346d522c5fbc1c3130f632b7609b9f4796201ec3bead2dd591b1->leave($__internal_2b2912a11fe3346d522c5fbc1c3130f632b7609b9f4796201ec3bead2dd591b1_prof);

        
        $__internal_8a6e46b9bbbf953d2e01f8e29c8fc47137177b4ff4284894f11bc78e7b992d30->leave($__internal_8a6e46b9bbbf953d2e01f8e29c8fc47137177b4ff4284894f11bc78e7b992d30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f15c027045ce7fae23d3ed093c9985117f242933580f16254d853a63821b4da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f15c027045ce7fae23d3ed093c9985117f242933580f16254d853a63821b4da->enter($__internal_8f15c027045ce7fae23d3ed093c9985117f242933580f16254d853a63821b4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1124ca754fe0c6e99ba629588d6ea2983a115fd558d2621f000bae28555d59bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1124ca754fe0c6e99ba629588d6ea2983a115fd558d2621f000bae28555d59bb->enter($__internal_1124ca754fe0c6e99ba629588d6ea2983a115fd558d2621f000bae28555d59bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Centre ";
        
        $__internal_1124ca754fe0c6e99ba629588d6ea2983a115fd558d2621f000bae28555d59bb->leave($__internal_1124ca754fe0c6e99ba629588d6ea2983a115fd558d2621f000bae28555d59bb_prof);

        
        $__internal_8f15c027045ce7fae23d3ed093c9985117f242933580f16254d853a63821b4da->leave($__internal_8f15c027045ce7fae23d3ed093c9985117f242933580f16254d853a63821b4da_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed77a7afbb187a2390f24acf2842149e9be77e0904fb5a512f698e12d2a9e9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed77a7afbb187a2390f24acf2842149e9be77e0904fb5a512f698e12d2a9e9bb->enter($__internal_ed77a7afbb187a2390f24acf2842149e9be77e0904fb5a512f698e12d2a9e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_634dc6a5f0f53ba7eef4c25f3cd7776741f048735fdb6e5c726d3590a0d912fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634dc6a5f0f53ba7eef4c25f3cd7776741f048735fdb6e5c726d3590a0d912fb->enter($__internal_634dc6a5f0f53ba7eef4c25f3cd7776741f048735fdb6e5c726d3590a0d912fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_634dc6a5f0f53ba7eef4c25f3cd7776741f048735fdb6e5c726d3590a0d912fb->leave($__internal_634dc6a5f0f53ba7eef4c25f3cd7776741f048735fdb6e5c726d3590a0d912fb_prof);

        
        $__internal_ed77a7afbb187a2390f24acf2842149e9be77e0904fb5a512f698e12d2a9e9bb->leave($__internal_ed77a7afbb187a2390f24acf2842149e9be77e0904fb5a512f698e12d2a9e9bb_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Editer une centre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctProvince) }}
                        {{ form_row(edit_form.ctrNom) }}
                        {{ form_row(edit_form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/edit.html.twig");
    }
}
