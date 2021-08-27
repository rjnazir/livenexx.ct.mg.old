<?php

/* AdminBundle:CtZoneDeserte:edit.html.twig */
class __TwigTemplate_b5b57f292ad8df042a761f3d050a0d5e6559e2750d982697eb0038f783ef017e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtZoneDeserte:edit.html.twig", 1);
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
        $__internal_b8603303615badb4e35a19354c025d7fcedc086f9ceef271a1ec181a96aab08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8603303615badb4e35a19354c025d7fcedc086f9ceef271a1ec181a96aab08b->enter($__internal_b8603303615badb4e35a19354c025d7fcedc086f9ceef271a1ec181a96aab08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        $__internal_6e2b277b3aaf6e9ebf7f349917f384ebed8c3fd0f8948370f85e00c3f3d6a482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2b277b3aaf6e9ebf7f349917f384ebed8c3fd0f8948370f85e00c3f3d6a482->enter($__internal_6e2b277b3aaf6e9ebf7f349917f384ebed8c3fd0f8948370f85e00c3f3d6a482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtZoneDeserte:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8603303615badb4e35a19354c025d7fcedc086f9ceef271a1ec181a96aab08b->leave($__internal_b8603303615badb4e35a19354c025d7fcedc086f9ceef271a1ec181a96aab08b_prof);

        
        $__internal_6e2b277b3aaf6e9ebf7f349917f384ebed8c3fd0f8948370f85e00c3f3d6a482->leave($__internal_6e2b277b3aaf6e9ebf7f349917f384ebed8c3fd0f8948370f85e00c3f3d6a482_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f52c6c70d8d20fd21ac740c62f2a862b71c37f40343a7c29f67a92ec00444a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f52c6c70d8d20fd21ac740c62f2a862b71c37f40343a7c29f67a92ec00444a->enter($__internal_b8f52c6c70d8d20fd21ac740c62f2a862b71c37f40343a7c29f67a92ec00444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6688265f7833f39fdf0346750d0cd2fac90ff8fdcc0fadcc4bf8daf128fb431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6688265f7833f39fdf0346750d0cd2fac90ff8fdcc0fadcc4bf8daf128fb431->enter($__internal_f6688265f7833f39fdf0346750d0cd2fac90ff8fdcc0fadcc4bf8daf128fb431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Zone de déserte ";
        
        $__internal_f6688265f7833f39fdf0346750d0cd2fac90ff8fdcc0fadcc4bf8daf128fb431->leave($__internal_f6688265f7833f39fdf0346750d0cd2fac90ff8fdcc0fadcc4bf8daf128fb431_prof);

        
        $__internal_b8f52c6c70d8d20fd21ac740c62f2a862b71c37f40343a7c29f67a92ec00444a->leave($__internal_b8f52c6c70d8d20fd21ac740c62f2a862b71c37f40343a7c29f67a92ec00444a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee1c848c90e74d10102721dbd0e2b78aca68e6cb68098b02f6fdbe30f5bec538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1c848c90e74d10102721dbd0e2b78aca68e6cb68098b02f6fdbe30f5bec538->enter($__internal_ee1c848c90e74d10102721dbd0e2b78aca68e6cb68098b02f6fdbe30f5bec538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7c694d087aea854ca554ad128e41e67fae861f47c05dbd0740997c22c0f2fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7c694d087aea854ca554ad128e41e67fae861f47c05dbd0740997c22c0f2fc2->enter($__internal_a7c694d087aea854ca554ad128e41e67fae861f47c05dbd0740997c22c0f2fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
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
        
        $__internal_a7c694d087aea854ca554ad128e41e67fae861f47c05dbd0740997c22c0f2fc2->leave($__internal_a7c694d087aea854ca554ad128e41e67fae861f47c05dbd0740997c22c0f2fc2_prof);

        
        $__internal_ee1c848c90e74d10102721dbd0e2b78aca68e6cb68098b02f6fdbe30f5bec538->leave($__internal_ee1c848c90e74d10102721dbd0e2b78aca68e6cb68098b02f6fdbe30f5bec538_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtZoneDeserte:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Zone de déserte {% endblock %}

{% set menu_zone_deserte        = true %}
{% set menu_zone_deserte_create = true %}

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
                        <h3 class=\"box-title\">Editer une zone_deserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtZoneDeserte:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtZoneDeserte/edit.html.twig");
    }
}
