<?php

/* AdminBundle:CtCarosserie:edit.html.twig */
class __TwigTemplate_07578c45abe1285cda1d167d913fad672c2a38327eef71033c45f8fe4c8811d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:edit.html.twig", 1);
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
        $__internal_48431c4abfbaa1ea63b64cb1d866a51f586aa3e7c3259e5deaa380b23c89751e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48431c4abfbaa1ea63b64cb1d866a51f586aa3e7c3259e5deaa380b23c89751e->enter($__internal_48431c4abfbaa1ea63b64cb1d866a51f586aa3e7c3259e5deaa380b23c89751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        $__internal_ca448ee0829be6fd4e668c89105f5ea68a0972678d8370f4abdccdb3a3ebf6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca448ee0829be6fd4e668c89105f5ea68a0972678d8370f4abdccdb3a3ebf6b8->enter($__internal_ca448ee0829be6fd4e668c89105f5ea68a0972678d8370f4abdccdb3a3ebf6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48431c4abfbaa1ea63b64cb1d866a51f586aa3e7c3259e5deaa380b23c89751e->leave($__internal_48431c4abfbaa1ea63b64cb1d866a51f586aa3e7c3259e5deaa380b23c89751e_prof);

        
        $__internal_ca448ee0829be6fd4e668c89105f5ea68a0972678d8370f4abdccdb3a3ebf6b8->leave($__internal_ca448ee0829be6fd4e668c89105f5ea68a0972678d8370f4abdccdb3a3ebf6b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_013518222e3ae0b4d10bd15e6975cf94ac725848874b06c3ae19ae941e56dd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013518222e3ae0b4d10bd15e6975cf94ac725848874b06c3ae19ae941e56dd5a->enter($__internal_013518222e3ae0b4d10bd15e6975cf94ac725848874b06c3ae19ae941e56dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a54f4eea6992d1f788bfbc99c74998c8aa93f8217c4615b0ddc1239faed3c35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54f4eea6992d1f788bfbc99c74998c8aa93f8217c4615b0ddc1239faed3c35e->enter($__internal_a54f4eea6992d1f788bfbc99c74998c8aa93f8217c4615b0ddc1239faed3c35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carrosserie ";
        
        $__internal_a54f4eea6992d1f788bfbc99c74998c8aa93f8217c4615b0ddc1239faed3c35e->leave($__internal_a54f4eea6992d1f788bfbc99c74998c8aa93f8217c4615b0ddc1239faed3c35e_prof);

        
        $__internal_013518222e3ae0b4d10bd15e6975cf94ac725848874b06c3ae19ae941e56dd5a->leave($__internal_013518222e3ae0b4d10bd15e6975cf94ac725848874b06c3ae19ae941e56dd5a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e2b18eb519d1953c0d814c2d0b31253b5529826d183a60124ad4417fb079f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2b18eb519d1953c0d814c2d0b31253b5529826d183a60124ad4417fb079f27->enter($__internal_8e2b18eb519d1953c0d814c2d0b31253b5529826d183a60124ad4417fb079f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e9c826e49bdb97f9105c7d4dac9dcc50fec4bb0e07da24732cd11eb0916079f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9c826e49bdb97f9105c7d4dac9dcc50fec4bb0e07da24732cd11eb0916079f->enter($__internal_6e9c826e49bdb97f9105c7d4dac9dcc50fec4bb0e07da24732cd11eb0916079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
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
        
        $__internal_6e9c826e49bdb97f9105c7d4dac9dcc50fec4bb0e07da24732cd11eb0916079f->leave($__internal_6e9c826e49bdb97f9105c7d4dac9dcc50fec4bb0e07da24732cd11eb0916079f_prof);

        
        $__internal_8e2b18eb519d1953c0d814c2d0b31253b5529826d183a60124ad4417fb079f27->leave($__internal_8e2b18eb519d1953c0d814c2d0b31253b5529826d183a60124ad4417fb079f27_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Carrosserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCarosserie:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/edit.html.twig");
    }
}
