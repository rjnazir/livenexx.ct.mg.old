<?php

/* AdminBundle:CtVisiteExtraTarif:add.html.twig */
class __TwigTemplate_7a5b3745336fb681868a97467213c70c4adb99239d7ffbb7991e5c283233ea0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtraTarif:add.html.twig", 1);
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
        $__internal_cb3fb65760c5e24b8bb4d5f6760f2aa1721d905061483e3609778e2ee7e19d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3fb65760c5e24b8bb4d5f6760f2aa1721d905061483e3609778e2ee7e19d65->enter($__internal_cb3fb65760c5e24b8bb4d5f6760f2aa1721d905061483e3609778e2ee7e19d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:add.html.twig"));

        $__internal_8f46415078aba1c8687ae469ebde035dac75aa7d2fb1b14451e87875e3c74143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f46415078aba1c8687ae469ebde035dac75aa7d2fb1b14451e87875e3c74143->enter($__internal_8f46415078aba1c8687ae469ebde035dac75aa7d2fb1b14451e87875e3c74143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtraTarif:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 9
        $context["menu_visite_extra_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3fb65760c5e24b8bb4d5f6760f2aa1721d905061483e3609778e2ee7e19d65->leave($__internal_cb3fb65760c5e24b8bb4d5f6760f2aa1721d905061483e3609778e2ee7e19d65_prof);

        
        $__internal_8f46415078aba1c8687ae469ebde035dac75aa7d2fb1b14451e87875e3c74143->leave($__internal_8f46415078aba1c8687ae469ebde035dac75aa7d2fb1b14451e87875e3c74143_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48f506fc2d2b172fe67a6beb288100e319f890054efe45f666d64543065c35c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48f506fc2d2b172fe67a6beb288100e319f890054efe45f666d64543065c35c3->enter($__internal_48f506fc2d2b172fe67a6beb288100e319f890054efe45f666d64543065c35c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e664ca5528307193c65d4fb2187e99884583a55443e729a5bd6df385d7d27d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e664ca5528307193c65d4fb2187e99884583a55443e729a5bd6df385d7d27d65->enter($__internal_e664ca5528307193c65d4fb2187e99884583a55443e729a5bd6df385d7d27d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif Visite Extra ";
        
        $__internal_e664ca5528307193c65d4fb2187e99884583a55443e729a5bd6df385d7d27d65->leave($__internal_e664ca5528307193c65d4fb2187e99884583a55443e729a5bd6df385d7d27d65_prof);

        
        $__internal_48f506fc2d2b172fe67a6beb288100e319f890054efe45f666d64543065c35c3->leave($__internal_48f506fc2d2b172fe67a6beb288100e319f890054efe45f666d64543065c35c3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb5198dfd0dd8329d2040175e328f258ebcbbe4615073f18da94d56c3e6470c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb5198dfd0dd8329d2040175e328f258ebcbbe4615073f18da94d56c3e6470c1->enter($__internal_bb5198dfd0dd8329d2040175e328f258ebcbbe4615073f18da94d56c3e6470c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52a8013bc621d4836f3b179206c0476bfd643fa58c860daedae7949104aced3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a8013bc621d4836f3b179206c0476bfd643fa58c860daedae7949104aced3f->enter($__internal_52a8013bc621d4836f3b179206c0476bfd643fa58c860daedae7949104aced3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_52a8013bc621d4836f3b179206c0476bfd643fa58c860daedae7949104aced3f->leave($__internal_52a8013bc621d4836f3b179206c0476bfd643fa58c860daedae7949104aced3f_prof);

        
        $__internal_bb5198dfd0dd8329d2040175e328f258ebcbbe4615073f18da94d56c3e6470c1->leave($__internal_bb5198dfd0dd8329d2040175e328f258ebcbbe4615073f18da94d56c3e6470c1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtraTarif:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Tarif Visite Extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}
{% set menu_visite_extra_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctVisiteExtra) }}
                        {{ form_row(form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtraTarif:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtraTarif/add.html.twig");
    }
}
