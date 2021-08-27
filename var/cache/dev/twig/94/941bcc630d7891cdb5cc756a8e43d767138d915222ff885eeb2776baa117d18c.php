<?php

/* @Admin/CtTypeDroitPtac/add.html.twig */
class __TwigTemplate_24f532acb1090a66435573e71a7166f9b2236f9f4299833b62dde275a1df0540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeDroitPtac/add.html.twig", 1);
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
        $__internal_73b7d649b01aee4d6b9b3cc3fd076d7eae2d2efde120ccdee81abcf8cf86081f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b7d649b01aee4d6b9b3cc3fd076d7eae2d2efde120ccdee81abcf8cf86081f->enter($__internal_73b7d649b01aee4d6b9b3cc3fd076d7eae2d2efde120ccdee81abcf8cf86081f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/add.html.twig"));

        $__internal_b1e87f9246d86be481742b07c3d5029f24858833da2bc35c6ab1999098b670d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e87f9246d86be481742b07c3d5029f24858833da2bc35c6ab1999098b670d1->enter($__internal_b1e87f9246d86be481742b07c3d5029f24858833da2bc35c6ab1999098b670d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeDroitPtac/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_droit_ptac"] = true;
        // line 8
        $context["menu_type_droit_ptac_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b7d649b01aee4d6b9b3cc3fd076d7eae2d2efde120ccdee81abcf8cf86081f->leave($__internal_73b7d649b01aee4d6b9b3cc3fd076d7eae2d2efde120ccdee81abcf8cf86081f_prof);

        
        $__internal_b1e87f9246d86be481742b07c3d5029f24858833da2bc35c6ab1999098b670d1->leave($__internal_b1e87f9246d86be481742b07c3d5029f24858833da2bc35c6ab1999098b670d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d292724abb64aca50a697e08835365d397bddccd8c8700cb5797e060a2d58cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d292724abb64aca50a697e08835365d397bddccd8c8700cb5797e060a2d58cd2->enter($__internal_d292724abb64aca50a697e08835365d397bddccd8c8700cb5797e060a2d58cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_275e39a5edff168e92cde6c9432adb248f379e276042b4539fdb8244159d24ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275e39a5edff168e92cde6c9432adb248f379e276042b4539fdb8244159d24ed->enter($__internal_275e39a5edff168e92cde6c9432adb248f379e276042b4539fdb8244159d24ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de droit_ptac ";
        
        $__internal_275e39a5edff168e92cde6c9432adb248f379e276042b4539fdb8244159d24ed->leave($__internal_275e39a5edff168e92cde6c9432adb248f379e276042b4539fdb8244159d24ed_prof);

        
        $__internal_d292724abb64aca50a697e08835365d397bddccd8c8700cb5797e060a2d58cd2->leave($__internal_d292724abb64aca50a697e08835365d397bddccd8c8700cb5797e060a2d58cd2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ea1a138738b9920c7efb7e056d477602c98a6d033db08597f6117da389ca9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ea1a138738b9920c7efb7e056d477602c98a6d033db08597f6117da389ca9d->enter($__internal_84ea1a138738b9920c7efb7e056d477602c98a6d033db08597f6117da389ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e89db8cfe71f06122654307f687cdd36faeb8a1c625ebdc261814b7a8a34ac6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89db8cfe71f06122654307f687cdd36faeb8a1c625ebdc261814b7a8a34ac6a->enter($__internal_e89db8cfe71f06122654307f687cdd36faeb8a1c625ebdc261814b7a8a34ac6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tpDpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_e89db8cfe71f06122654307f687cdd36faeb8a1c625ebdc261814b7a8a34ac6a->leave($__internal_e89db8cfe71f06122654307f687cdd36faeb8a1c625ebdc261814b7a8a34ac6a_prof);

        
        $__internal_84ea1a138738b9920c7efb7e056d477602c98a6d033db08597f6117da389ca9d->leave($__internal_84ea1a138738b9920c7efb7e056d477602c98a6d033db08597f6117da389ca9d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeDroitPtac/add.html.twig";
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout Type de droit_ptac {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un type de droit PTAC</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tpDpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_droit_ptac\"/>
                        <a href=\"{{ path('type_droit_ptac_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeDroitPtac/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeDroitPtac\\add.html.twig");
    }
}
