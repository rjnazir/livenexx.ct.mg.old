<?php

/* AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig */
class __TwigTemplate_77e6925a5aeda02ad69ab598d1b74484d4473f9517bfd1541296098a357e7c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", 1);
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
        $__internal_baa721b5e73f10b50cd278e5fdbb777d0fd3c42db55e231c1fee3295b6faa19b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa721b5e73f10b50cd278e5fdbb777d0fd3c42db55e231c1fee3295b6faa19b->enter($__internal_baa721b5e73f10b50cd278e5fdbb777d0fd3c42db55e231c1fee3295b6faa19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        $__internal_599be5f0b7445c701914b51a5ce77d90dc92e8b8cdc40006f2aafb3017b7eebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599be5f0b7445c701914b51a5ce77d90dc92e8b8cdc40006f2aafb3017b7eebc->enter($__internal_599be5f0b7445c701914b51a5ce77d90dc92e8b8cdc40006f2aafb3017b7eebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_const_av_ded"] = true;
        // line 8
        $context["menu_const_av_ded_type_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa721b5e73f10b50cd278e5fdbb777d0fd3c42db55e231c1fee3295b6faa19b->leave($__internal_baa721b5e73f10b50cd278e5fdbb777d0fd3c42db55e231c1fee3295b6faa19b_prof);

        
        $__internal_599be5f0b7445c701914b51a5ce77d90dc92e8b8cdc40006f2aafb3017b7eebc->leave($__internal_599be5f0b7445c701914b51a5ce77d90dc92e8b8cdc40006f2aafb3017b7eebc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2df10aa92e482a774bc5e17da88f6c0c6fa7a8f724b043ebef1af78e44a2f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2df10aa92e482a774bc5e17da88f6c0c6fa7a8f724b043ebef1af78e44a2f1b->enter($__internal_f2df10aa92e482a774bc5e17da88f6c0c6fa7a8f724b043ebef1af78e44a2f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_630bbecaccc778ee08fe88ca9377bacd1d654832ebaba3e1673059c244a1eaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630bbecaccc778ee08fe88ca9377bacd1d654832ebaba3e1673059c244a1eaa9->enter($__internal_630bbecaccc778ee08fe88ca9377bacd1d654832ebaba3e1673059c244a1eaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_630bbecaccc778ee08fe88ca9377bacd1d654832ebaba3e1673059c244a1eaa9->leave($__internal_630bbecaccc778ee08fe88ca9377bacd1d654832ebaba3e1673059c244a1eaa9_prof);

        
        $__internal_f2df10aa92e482a774bc5e17da88f6c0c6fa7a8f724b043ebef1af78e44a2f1b->leave($__internal_f2df10aa92e482a774bc5e17da88f6c0c6fa7a8f724b043ebef1af78e44a2f1b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd89afe0b6770b9e1d7542b0dc65bb6e72581cd4e395603766a6cc02361cb6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd89afe0b6770b9e1d7542b0dc65bb6e72581cd4e395603766a6cc02361cb6ee->enter($__internal_cd89afe0b6770b9e1d7542b0dc65bb6e72581cd4e395603766a6cc02361cb6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d47db0b607bf470544e6c4663580d88c9688ad87bfd7527e2d5c09a14c33277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d47db0b607bf470544e6c4663580d88c9688ad87bfd7527e2d5c09a14c33277->enter($__internal_8d47db0b607bf470544e6c4663580d88c9688ad87bfd7527e2d5c09a14c33277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedType", array()), 'row');
        echo "
                    ";
        // line 33
        echo "                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_carac_index");
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
        
        $__internal_8d47db0b607bf470544e6c4663580d88c9688ad87bfd7527e2d5c09a14c33277->leave($__internal_8d47db0b607bf470544e6c4663580d88c9688ad87bfd7527e2d5c09a14c33277_prof);

        
        $__internal_cd89afe0b6770b9e1d7542b0dc65bb6e72581cd4e395603766a6cc02361cb6ee->leave($__internal_cd89afe0b6770b9e1d7542b0dc65bb6e72581cd4e395603766a6cc02361cb6ee_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  135 => 37,  129 => 33,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout motif {% endblock %}

{% set menu_const_av_ded                = true %}
{% set menu_const_av_ded_type_create    = true %}

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
                    <h3 class=\"box-title\">Créer une constatation avant dedouanement</h3>
                </div>

                <div class=\"box-body\">
                    {{ form_row(form.ctConstAvDedType) }}
                    {#{{ form_row(form.ctConstAvDed.ctVerificateur) }}#}
                </div>

                <div class=\"box-footer\">
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                    <a href=\"{{ path('const_av_ded_carac_index') }}\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à la liste
                    </a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanementCarac:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanementCarac/add.html.twig");
    }
}
