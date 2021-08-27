<?php

/* @Admin/CtMarque/edit.html.twig */
class __TwigTemplate_f3b8fae6f2caa12d37747f6e80a52bf23b2318c324fdd0b4f3701f3639c9605a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMarque/edit.html.twig", 1);
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
        $__internal_0c8211db4e5c49a1a28eed12cb9d06c3949665dff9a389ce3a09b39369ea265e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8211db4e5c49a1a28eed12cb9d06c3949665dff9a389ce3a09b39369ea265e->enter($__internal_0c8211db4e5c49a1a28eed12cb9d06c3949665dff9a389ce3a09b39369ea265e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        $__internal_d951e458ee41701eb60324527b67b872cb4c9a5816e2353d0bffeba287176965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d951e458ee41701eb60324527b67b872cb4c9a5816e2353d0bffeba287176965->enter($__internal_d951e458ee41701eb60324527b67b872cb4c9a5816e2353d0bffeba287176965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMarque/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c8211db4e5c49a1a28eed12cb9d06c3949665dff9a389ce3a09b39369ea265e->leave($__internal_0c8211db4e5c49a1a28eed12cb9d06c3949665dff9a389ce3a09b39369ea265e_prof);

        
        $__internal_d951e458ee41701eb60324527b67b872cb4c9a5816e2353d0bffeba287176965->leave($__internal_d951e458ee41701eb60324527b67b872cb4c9a5816e2353d0bffeba287176965_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e81492f6d4147cbea1d72d82a7c113fe0149f4d6b830d5426ebf11ef173d2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e81492f6d4147cbea1d72d82a7c113fe0149f4d6b830d5426ebf11ef173d2c1->enter($__internal_5e81492f6d4147cbea1d72d82a7c113fe0149f4d6b830d5426ebf11ef173d2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96edb188ecff4ee069c441a34260ae00492624cd2a06586e8e9143b4be493cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96edb188ecff4ee069c441a34260ae00492624cd2a06586e8e9143b4be493cf8->enter($__internal_96edb188ecff4ee069c441a34260ae00492624cd2a06586e8e9143b4be493cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_96edb188ecff4ee069c441a34260ae00492624cd2a06586e8e9143b4be493cf8->leave($__internal_96edb188ecff4ee069c441a34260ae00492624cd2a06586e8e9143b4be493cf8_prof);

        
        $__internal_5e81492f6d4147cbea1d72d82a7c113fe0149f4d6b830d5426ebf11ef173d2c1->leave($__internal_5e81492f6d4147cbea1d72d82a7c113fe0149f4d6b830d5426ebf11ef173d2c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_602b56256449df8b77d8b1eec9315a412243f3289d960b345204ec4fb1e2c4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602b56256449df8b77d8b1eec9315a412243f3289d960b345204ec4fb1e2c4b0->enter($__internal_602b56256449df8b77d8b1eec9315a412243f3289d960b345204ec4fb1e2c4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c05f8db71b34b965e4ea915c9251981a6a4068fa213cc8e31b815a467bfe013a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05f8db71b34b965e4ea915c9251981a6a4068fa213cc8e31b815a467bfe013a->enter($__internal_c05f8db71b34b965e4ea915c9251981a6a4068fa213cc8e31b815a467bfe013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
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
        
        $__internal_c05f8db71b34b965e4ea915c9251981a6a4068fa213cc8e31b815a467bfe013a->leave($__internal_c05f8db71b34b965e4ea915c9251981a6a4068fa213cc8e31b815a467bfe013a_prof);

        
        $__internal_602b56256449df8b77d8b1eec9315a412243f3289d960b345204ec4fb1e2c4b0->leave($__internal_602b56256449df8b77d8b1eec9315a412243f3289d960b345204ec4fb1e2c4b0_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMarque/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMarque/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMarque\\edit.html.twig");
    }
}
