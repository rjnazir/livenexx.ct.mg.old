<?php

/* AdminBundle:CtSourceEnergie:add.html.twig */
class __TwigTemplate_f0f265b3345d446b8e23b63b159c92836d8f60e24527539cfc8cc0427686ec6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtSourceEnergie:add.html.twig", 1);
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
        $__internal_71df9d97d5a012b8de59664f1f63b82925462001f792b3a14b8ebbcc92458151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71df9d97d5a012b8de59664f1f63b82925462001f792b3a14b8ebbcc92458151->enter($__internal_71df9d97d5a012b8de59664f1f63b82925462001f792b3a14b8ebbcc92458151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:add.html.twig"));

        $__internal_afadc6eb7e9d333c1746d9a69f58652d95ea6e555119fe2c591102fa3f3365b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afadc6eb7e9d333c1746d9a69f58652d95ea6e555119fe2c591102fa3f3365b4->enter($__internal_afadc6eb7e9d333c1746d9a69f58652d95ea6e555119fe2c591102fa3f3365b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtSourceEnergie:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_energie"] = true;
        // line 8
        $context["menu_energie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71df9d97d5a012b8de59664f1f63b82925462001f792b3a14b8ebbcc92458151->leave($__internal_71df9d97d5a012b8de59664f1f63b82925462001f792b3a14b8ebbcc92458151_prof);

        
        $__internal_afadc6eb7e9d333c1746d9a69f58652d95ea6e555119fe2c591102fa3f3365b4->leave($__internal_afadc6eb7e9d333c1746d9a69f58652d95ea6e555119fe2c591102fa3f3365b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b276eb809c476b2e5354a1b0f75d20086f42125d56c845c96c81aab2fba5ecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b276eb809c476b2e5354a1b0f75d20086f42125d56c845c96c81aab2fba5ecf5->enter($__internal_b276eb809c476b2e5354a1b0f75d20086f42125d56c845c96c81aab2fba5ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd3584a03d0851180cad3db9897a1830787e8f9004a56ff3201df689691351e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd3584a03d0851180cad3db9897a1830787e8f9004a56ff3201df689691351e0->enter($__internal_dd3584a03d0851180cad3db9897a1830787e8f9004a56ff3201df689691351e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_dd3584a03d0851180cad3db9897a1830787e8f9004a56ff3201df689691351e0->leave($__internal_dd3584a03d0851180cad3db9897a1830787e8f9004a56ff3201df689691351e0_prof);

        
        $__internal_b276eb809c476b2e5354a1b0f75d20086f42125d56c845c96c81aab2fba5ecf5->leave($__internal_b276eb809c476b2e5354a1b0f75d20086f42125d56c845c96c81aab2fba5ecf5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1047de1703e4e81709de905f4d505ba308d8a5a3e76950651e1c4afdfd1a51a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1047de1703e4e81709de905f4d505ba308d8a5a3e76950651e1c4afdfd1a51a2->enter($__internal_1047de1703e4e81709de905f4d505ba308d8a5a3e76950651e1c4afdfd1a51a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c7da20ca50fc0d0e8992832cd2c98f91fc2a402e053104c065c6dd87d975935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7da20ca50fc0d0e8992832cd2c98f91fc2a402e053104c065c6dd87d975935->enter($__internal_7c7da20ca50fc0d0e8992832cd2c98f91fc2a402e053104c065c6dd87d975935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sreLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
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
        
        $__internal_7c7da20ca50fc0d0e8992832cd2c98f91fc2a402e053104c065c6dd87d975935->leave($__internal_7c7da20ca50fc0d0e8992832cd2c98f91fc2a402e053104c065c6dd87d975935_prof);

        
        $__internal_1047de1703e4e81709de905f4d505ba308d8a5a3e76950651e1c4afdfd1a51a2->leave($__internal_1047de1703e4e81709de905f4d505ba308d8a5a3e76950651e1c4afdfd1a51a2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtSourceEnergie:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Catégorie {% endblock %}

{% set menu_energie        = true %}
{% set menu_energie_create = true %}

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
                        <h3 class=\"box-title\">Créer une energie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.sreLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_energie\"/>
                        <a href=\"{{ path('energie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtSourceEnergie:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtSourceEnergie/add.html.twig");
    }
}
