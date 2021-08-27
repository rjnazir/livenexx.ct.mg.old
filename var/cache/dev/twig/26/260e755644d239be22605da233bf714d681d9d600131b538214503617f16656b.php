<?php

/* @Admin/CtTypeVisite/add.html.twig */
class __TwigTemplate_c8520be7110dc809b32b69bc0c13cfb1bc0692cde24cdbd099b305a9c6e9d00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/add.html.twig", 1);
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
        $__internal_3b0ee7f9681b1be4d18a85297721683b403875d0239050472660080813036354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0ee7f9681b1be4d18a85297721683b403875d0239050472660080813036354->enter($__internal_3b0ee7f9681b1be4d18a85297721683b403875d0239050472660080813036354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        $__internal_d91eb7d61aec1b4ec268af472d05e47cbaa497ee5fe190f2a7770c958f12c61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91eb7d61aec1b4ec268af472d05e47cbaa497ee5fe190f2a7770c958f12c61c->enter($__internal_d91eb7d61aec1b4ec268af472d05e47cbaa497ee5fe190f2a7770c958f12c61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite"] = true;
        // line 8
        $context["menu_type_visite"] = true;
        // line 9
        $context["menu_type_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0ee7f9681b1be4d18a85297721683b403875d0239050472660080813036354->leave($__internal_3b0ee7f9681b1be4d18a85297721683b403875d0239050472660080813036354_prof);

        
        $__internal_d91eb7d61aec1b4ec268af472d05e47cbaa497ee5fe190f2a7770c958f12c61c->leave($__internal_d91eb7d61aec1b4ec268af472d05e47cbaa497ee5fe190f2a7770c958f12c61c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cdcee14038ea3755d9af7b15b299551bfde150d02e1c746e109d48670a372ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdcee14038ea3755d9af7b15b299551bfde150d02e1c746e109d48670a372ab2->enter($__internal_cdcee14038ea3755d9af7b15b299551bfde150d02e1c746e109d48670a372ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32240f2e22a090ad8a731d8987a91f174756577f4c0852ddfd54e5d342feae96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32240f2e22a090ad8a731d8987a91f174756577f4c0852ddfd54e5d342feae96->enter($__internal_32240f2e22a090ad8a731d8987a91f174756577f4c0852ddfd54e5d342feae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_32240f2e22a090ad8a731d8987a91f174756577f4c0852ddfd54e5d342feae96->leave($__internal_32240f2e22a090ad8a731d8987a91f174756577f4c0852ddfd54e5d342feae96_prof);

        
        $__internal_cdcee14038ea3755d9af7b15b299551bfde150d02e1c746e109d48670a372ab2->leave($__internal_cdcee14038ea3755d9af7b15b299551bfde150d02e1c746e109d48670a372ab2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb956bf8056374294e43edb753247a76c7a11873ee0dab78bf3e9c3ebe803708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb956bf8056374294e43edb753247a76c7a11873ee0dab78bf3e9c3ebe803708->enter($__internal_cb956bf8056374294e43edb753247a76c7a11873ee0dab78bf3e9c3ebe803708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5d1634ce6ef05d7da336bb947db42a13bd5a20a955dd0ba876911e3df98fae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d1634ce6ef05d7da336bb947db42a13bd5a20a955dd0ba876911e3df98fae0->enter($__internal_c5d1634ce6ef05d7da336bb947db42a13bd5a20a955dd0ba876911e3df98fae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpvLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
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
        
        $__internal_c5d1634ce6ef05d7da336bb947db42a13bd5a20a955dd0ba876911e3df98fae0->leave($__internal_c5d1634ce6ef05d7da336bb947db42a13bd5a20a955dd0ba876911e3df98fae0_prof);

        
        $__internal_cb956bf8056374294e43edb753247a76c7a11873ee0dab78bf3e9c3ebe803708->leave($__internal_cb956bf8056374294e43edb753247a76c7a11873ee0dab78bf3e9c3ebe803708_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de visite {% endblock %}

{% set menu_visite             = true %}
{% set menu_type_visite        = true %}
{% set menu_type_visite_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de visite</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpvLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_visite\"/>
                        <a href=\"{{ path('type_visite_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeVisite/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\add.html.twig");
    }
}
