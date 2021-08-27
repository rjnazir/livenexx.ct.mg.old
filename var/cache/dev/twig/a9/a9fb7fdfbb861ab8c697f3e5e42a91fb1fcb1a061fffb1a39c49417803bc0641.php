<?php

/* @Admin/CtRole/edit.html.twig */
class __TwigTemplate_afa51ef94419fe71f8afb7bd3ccc7903b2112bee5b26f0eb56b5c66d977e65f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/edit.html.twig", 1);
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
        $__internal_3662cc3d2565feacea37701d72f784d43d45a7fb32213ebd4db1710db53fca9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3662cc3d2565feacea37701d72f784d43d45a7fb32213ebd4db1710db53fca9f->enter($__internal_3662cc3d2565feacea37701d72f784d43d45a7fb32213ebd4db1710db53fca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/edit.html.twig"));

        $__internal_4e8eba60359a280896d43bce0890dd727d95f6ca9dc821f6e34478f49d5dcc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8eba60359a280896d43bce0890dd727d95f6ca9dc821f6e34478f49d5dcc44->enter($__internal_4e8eba60359a280896d43bce0890dd727d95f6ca9dc821f6e34478f49d5dcc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3662cc3d2565feacea37701d72f784d43d45a7fb32213ebd4db1710db53fca9f->leave($__internal_3662cc3d2565feacea37701d72f784d43d45a7fb32213ebd4db1710db53fca9f_prof);

        
        $__internal_4e8eba60359a280896d43bce0890dd727d95f6ca9dc821f6e34478f49d5dcc44->leave($__internal_4e8eba60359a280896d43bce0890dd727d95f6ca9dc821f6e34478f49d5dcc44_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbede33717cb1f61008cccde3322583221df10c9fdbd61f2fae890371ca1b743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbede33717cb1f61008cccde3322583221df10c9fdbd61f2fae890371ca1b743->enter($__internal_cbede33717cb1f61008cccde3322583221df10c9fdbd61f2fae890371ca1b743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb719e284b3c762d15ea0d3ead455f14a842c903fce4d76e3af02eb2900747b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb719e284b3c762d15ea0d3ead455f14a842c903fce4d76e3af02eb2900747b8->enter($__internal_bb719e284b3c762d15ea0d3ead455f14a842c903fce4d76e3af02eb2900747b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Catégorie ";
        
        $__internal_bb719e284b3c762d15ea0d3ead455f14a842c903fce4d76e3af02eb2900747b8->leave($__internal_bb719e284b3c762d15ea0d3ead455f14a842c903fce4d76e3af02eb2900747b8_prof);

        
        $__internal_cbede33717cb1f61008cccde3322583221df10c9fdbd61f2fae890371ca1b743->leave($__internal_cbede33717cb1f61008cccde3322583221df10c9fdbd61f2fae890371ca1b743_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1feba4f66fadf03cb0537d0ee9fe7b3b0e7a897e9fa0de7d794de161692998db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1feba4f66fadf03cb0537d0ee9fe7b3b0e7a897e9fa0de7d794de161692998db->enter($__internal_1feba4f66fadf03cb0537d0ee9fe7b3b0e7a897e9fa0de7d794de161692998db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_233aca0b46b0fc25f7217b8307df0aa692549e5c1e8478ec386999ac765654e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233aca0b46b0fc25f7217b8307df0aa692549e5c1e8478ec386999ac765654e8->enter($__internal_233aca0b46b0fc25f7217b8307df0aa692549e5c1e8478ec386999ac765654e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
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
        
        $__internal_233aca0b46b0fc25f7217b8307df0aa692549e5c1e8478ec386999ac765654e8->leave($__internal_233aca0b46b0fc25f7217b8307df0aa692549e5c1e8478ec386999ac765654e8_prof);

        
        $__internal_1feba4f66fadf03cb0537d0ee9fe7b3b0e7a897e9fa0de7d794de161692998db->leave($__internal_1feba4f66fadf03cb0537d0ee9fe7b3b0e7a897e9fa0de7d794de161692998db_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Catégorie {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtRole/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\edit.html.twig");
    }
}
