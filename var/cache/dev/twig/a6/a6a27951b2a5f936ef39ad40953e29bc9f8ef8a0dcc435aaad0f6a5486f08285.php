<?php

/* AdminBundle:CtProvince:edit.html.twig */
class __TwigTemplate_ef7ea236f3e3a62285b60a5e6e7787b86aa5ba725cb965c476f5c31bf937a8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:edit.html.twig", 1);
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
        $__internal_32b78074a8b578bdb90c46ae1e3ff68b2c3a209b7231de417044bb11666b6094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b78074a8b578bdb90c46ae1e3ff68b2c3a209b7231de417044bb11666b6094->enter($__internal_32b78074a8b578bdb90c46ae1e3ff68b2c3a209b7231de417044bb11666b6094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        $__internal_8416a3c9accd1f31d8ca2bd3f234ed0b656aa774587942ee4039c7f4c8d84504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8416a3c9accd1f31d8ca2bd3f234ed0b656aa774587942ee4039c7f4c8d84504->enter($__internal_8416a3c9accd1f31d8ca2bd3f234ed0b656aa774587942ee4039c7f4c8d84504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b78074a8b578bdb90c46ae1e3ff68b2c3a209b7231de417044bb11666b6094->leave($__internal_32b78074a8b578bdb90c46ae1e3ff68b2c3a209b7231de417044bb11666b6094_prof);

        
        $__internal_8416a3c9accd1f31d8ca2bd3f234ed0b656aa774587942ee4039c7f4c8d84504->leave($__internal_8416a3c9accd1f31d8ca2bd3f234ed0b656aa774587942ee4039c7f4c8d84504_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2edba5af26a61bf685ef55f25b8784baedb6a308acaa0db6b9d26fc562f229b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edba5af26a61bf685ef55f25b8784baedb6a308acaa0db6b9d26fc562f229b7->enter($__internal_2edba5af26a61bf685ef55f25b8784baedb6a308acaa0db6b9d26fc562f229b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47b06ab830e0325765c6c234410ca84648341dc2e082eea113c73741c057a000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b06ab830e0325765c6c234410ca84648341dc2e082eea113c73741c057a000->enter($__internal_47b06ab830e0325765c6c234410ca84648341dc2e082eea113c73741c057a000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Province ";
        
        $__internal_47b06ab830e0325765c6c234410ca84648341dc2e082eea113c73741c057a000->leave($__internal_47b06ab830e0325765c6c234410ca84648341dc2e082eea113c73741c057a000_prof);

        
        $__internal_2edba5af26a61bf685ef55f25b8784baedb6a308acaa0db6b9d26fc562f229b7->leave($__internal_2edba5af26a61bf685ef55f25b8784baedb6a308acaa0db6b9d26fc562f229b7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0efa789c6c4cf0116fcfc9eebee9637d1f44b996a3b9a89ada4f5ff68b428638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0efa789c6c4cf0116fcfc9eebee9637d1f44b996a3b9a89ada4f5ff68b428638->enter($__internal_0efa789c6c4cf0116fcfc9eebee9637d1f44b996a3b9a89ada4f5ff68b428638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c56c266c71d8b728a23b656bcb239c59d46647fe2be5391fea5924d30b150d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56c266c71d8b728a23b656bcb239c59d46647fe2be5391fea5924d30b150d29->enter($__internal_c56c266c71d8b728a23b656bcb239c59d46647fe2be5391fea5924d30b150d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
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
        
        $__internal_c56c266c71d8b728a23b656bcb239c59d46647fe2be5391fea5924d30b150d29->leave($__internal_c56c266c71d8b728a23b656bcb239c59d46647fe2be5391fea5924d30b150d29_prof);

        
        $__internal_0efa789c6c4cf0116fcfc9eebee9637d1f44b996a3b9a89ada4f5ff68b428638->leave($__internal_0efa789c6c4cf0116fcfc9eebee9637d1f44b996a3b9a89ada4f5ff68b428638_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Editer une province</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.prvNom) }}
                        {{ form_row(edit_form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/edit.html.twig");
    }
}
