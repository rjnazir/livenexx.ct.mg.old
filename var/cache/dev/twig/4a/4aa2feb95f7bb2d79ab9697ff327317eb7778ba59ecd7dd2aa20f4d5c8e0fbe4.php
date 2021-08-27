<?php

/* @Admin/CtVisiteExtra/add.html.twig */
class __TwigTemplate_9c357547fbb0e231965f3e7308dd5ff1a7af5437bf7e54852ffbc98ed149db9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtra/add.html.twig", 1);
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
        $__internal_229fda55e0577c6d45ac56f21410b68c521e2e9465c9a25a83f346dfed9a5006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229fda55e0577c6d45ac56f21410b68c521e2e9465c9a25a83f346dfed9a5006->enter($__internal_229fda55e0577c6d45ac56f21410b68c521e2e9465c9a25a83f346dfed9a5006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/add.html.twig"));

        $__internal_c387949b45b28a2243c7d7c9e17cef5d68f5c0eb088513279aaac7b1224983fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c387949b45b28a2243c7d7c9e17cef5d68f5c0eb088513279aaac7b1224983fb->enter($__internal_c387949b45b28a2243c7d7c9e17cef5d68f5c0eb088513279aaac7b1224983fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtra/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_type"] = true;
        // line 9
        $context["menu_visite_extra_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_229fda55e0577c6d45ac56f21410b68c521e2e9465c9a25a83f346dfed9a5006->leave($__internal_229fda55e0577c6d45ac56f21410b68c521e2e9465c9a25a83f346dfed9a5006_prof);

        
        $__internal_c387949b45b28a2243c7d7c9e17cef5d68f5c0eb088513279aaac7b1224983fb->leave($__internal_c387949b45b28a2243c7d7c9e17cef5d68f5c0eb088513279aaac7b1224983fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_129d68906a0ed75e7e83e8f7605c4272f0d4515fb87c313e777c52cfa0b6a25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129d68906a0ed75e7e83e8f7605c4272f0d4515fb87c313e777c52cfa0b6a25b->enter($__internal_129d68906a0ed75e7e83e8f7605c4272f0d4515fb87c313e777c52cfa0b6a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b0c1a158d05f10f5e04bf4410724ac0cc0a2593fe1097d75eceb715b75628dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0c1a158d05f10f5e04bf4410724ac0cc0a2593fe1097d75eceb715b75628dc->enter($__internal_4b0c1a158d05f10f5e04bf4410724ac0cc0a2593fe1097d75eceb715b75628dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout visite_extra ";
        
        $__internal_4b0c1a158d05f10f5e04bf4410724ac0cc0a2593fe1097d75eceb715b75628dc->leave($__internal_4b0c1a158d05f10f5e04bf4410724ac0cc0a2593fe1097d75eceb715b75628dc_prof);

        
        $__internal_129d68906a0ed75e7e83e8f7605c4272f0d4515fb87c313e777c52cfa0b6a25b->leave($__internal_129d68906a0ed75e7e83e8f7605c4272f0d4515fb87c313e777c52cfa0b6a25b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e998ee675282e6e174fb0cb2ea1f67bb4f98f98829e4a620c3646c13f2d3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e998ee675282e6e174fb0cb2ea1f67bb4f98f98829e4a620c3646c13f2d3e1->enter($__internal_36e998ee675282e6e174fb0cb2ea1f67bb4f98f98829e4a620c3646c13f2d3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f9a1591a933c7148d3abbaa90cf3795f1495ad3d3933640ae8bfc1bca5937d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9a1591a933c7148d3abbaa90cf3795f1495ad3d3933640ae8bfc1bca5937d4->enter($__internal_1f9a1591a933c7148d3abbaa90cf3795f1495ad3d3933640ae8bfc1bca5937d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
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
        
        $__internal_1f9a1591a933c7148d3abbaa90cf3795f1495ad3d3933640ae8bfc1bca5937d4->leave($__internal_1f9a1591a933c7148d3abbaa90cf3795f1495ad3d3933640ae8bfc1bca5937d4_prof);

        
        $__internal_36e998ee675282e6e174fb0cb2ea1f67bb4f98f98829e4a620c3646c13f2d3e1->leave($__internal_36e998ee675282e6e174fb0cb2ea1f67bb4f98f98829e4a620c3646c13f2d3e1_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtra/add.html.twig";
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

{% block title %}{{ parent() }} Ajout visite_extra {% endblock %}

{% set menu_visite_extra           = true %}
{% set menu_visite_extra_type      = true %}
{% set menu_visite_extra_type_create = true %}

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
                        <h3 class=\"box-title\">Créer une visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtra/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtra\\add.html.twig");
    }
}
