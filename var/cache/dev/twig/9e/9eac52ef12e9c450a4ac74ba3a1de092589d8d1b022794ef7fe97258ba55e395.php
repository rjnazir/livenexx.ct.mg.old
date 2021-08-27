<?php

/* @Admin/CtProcesVerbal/edit.html.twig */
class __TwigTemplate_0615790c0322bdd3396d41e1c3ca3e2cac37b6f8de785325934a2939b018667b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProcesVerbal/edit.html.twig", 1);
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
        $__internal_6e38424112a763106643838f741859b2598615126328367ae7443ca4333f93c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e38424112a763106643838f741859b2598615126328367ae7443ca4333f93c8->enter($__internal_6e38424112a763106643838f741859b2598615126328367ae7443ca4333f93c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        $__internal_250f552fb0b496f30b649a12a74a6d446c9b96d3598110e9386eb10c66d33649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250f552fb0b496f30b649a12a74a6d446c9b96d3598110e9386eb10c66d33649->enter($__internal_250f552fb0b496f30b649a12a74a6d446c9b96d3598110e9386eb10c66d33649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProcesVerbal/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e38424112a763106643838f741859b2598615126328367ae7443ca4333f93c8->leave($__internal_6e38424112a763106643838f741859b2598615126328367ae7443ca4333f93c8_prof);

        
        $__internal_250f552fb0b496f30b649a12a74a6d446c9b96d3598110e9386eb10c66d33649->leave($__internal_250f552fb0b496f30b649a12a74a6d446c9b96d3598110e9386eb10c66d33649_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fe0d906e7a6366334774e45b58bcb5851bc65e318efb5a0adf5aa2d37a17bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe0d906e7a6366334774e45b58bcb5851bc65e318efb5a0adf5aa2d37a17bfb->enter($__internal_0fe0d906e7a6366334774e45b58bcb5851bc65e318efb5a0adf5aa2d37a17bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_23cac6ec2ed8604919468e19b2e09c34722b25f2231b8531c582c23a3eba0507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cac6ec2ed8604919468e19b2e09c34722b25f2231b8531c582c23a3eba0507->enter($__internal_23cac6ec2ed8604919468e19b2e09c34722b25f2231b8531c582c23a3eba0507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Proces Verbal ";
        
        $__internal_23cac6ec2ed8604919468e19b2e09c34722b25f2231b8531c582c23a3eba0507->leave($__internal_23cac6ec2ed8604919468e19b2e09c34722b25f2231b8531c582c23a3eba0507_prof);

        
        $__internal_0fe0d906e7a6366334774e45b58bcb5851bc65e318efb5a0adf5aa2d37a17bfb->leave($__internal_0fe0d906e7a6366334774e45b58bcb5851bc65e318efb5a0adf5aa2d37a17bfb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b9c607c1cd717b9a451b1004058ccfc15b3c25fa820d788228e8dd8d096512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b9c607c1cd717b9a451b1004058ccfc15b3c25fa820d788228e8dd8d096512->enter($__internal_99b9c607c1cd717b9a451b1004058ccfc15b3c25fa820d788228e8dd8d096512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d718b2d7c1145ef19db32b48760f938092d19bc7e13fc1d937accb68ab82678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d718b2d7c1145ef19db32b48760f938092d19bc7e13fc1d937accb68ab82678->enter($__internal_4d718b2d7c1145ef19db32b48760f938092d19bc7e13fc1d937accb68ab82678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
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
        
        $__internal_4d718b2d7c1145ef19db32b48760f938092d19bc7e13fc1d937accb68ab82678->leave($__internal_4d718b2d7c1145ef19db32b48760f938092d19bc7e13fc1d937accb68ab82678_prof);

        
        $__internal_99b9c607c1cd717b9a451b1004058ccfc15b3c25fa820d788228e8dd8d096512->leave($__internal_99b9c607c1cd717b9a451b1004058ccfc15b3c25fa820d788228e8dd8d096512_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProcesVerbal/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  135 => 36,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Proces Verbal {% endblock %}

{% set menu_proces_verbal = true %}

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
                        <h3 class=\"box-title\">Editer un Proces Verbal</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.pvType) }}
                        {{ form_row(edit_form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtProcesVerbal/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProcesVerbal\\edit.html.twig");
    }
}
