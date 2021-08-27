<?php

/* AdminBundle:CtTypeVisite:add.html.twig */
class __TwigTemplate_ff75e73335020577fdddfd0c1b75a0a4d6365dc2660c42f9a892a63b796ef959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeVisite:add.html.twig", 1);
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
        $__internal_7d34976d22f783607ec8cb1ab2f5a38de14469b68259b76296a4b39b91c779cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d34976d22f783607ec8cb1ab2f5a38de14469b68259b76296a4b39b91c779cf->enter($__internal_7d34976d22f783607ec8cb1ab2f5a38de14469b68259b76296a4b39b91c779cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

        $__internal_d65fa436fbaaa2d95cab3c2c5eae6fa3386a7fb306b9cd5a3727d34c5603c828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65fa436fbaaa2d95cab3c2c5eae6fa3386a7fb306b9cd5a3727d34c5603c828->enter($__internal_d65fa436fbaaa2d95cab3c2c5eae6fa3386a7fb306b9cd5a3727d34c5603c828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeVisite:add.html.twig"));

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
        
        $__internal_7d34976d22f783607ec8cb1ab2f5a38de14469b68259b76296a4b39b91c779cf->leave($__internal_7d34976d22f783607ec8cb1ab2f5a38de14469b68259b76296a4b39b91c779cf_prof);

        
        $__internal_d65fa436fbaaa2d95cab3c2c5eae6fa3386a7fb306b9cd5a3727d34c5603c828->leave($__internal_d65fa436fbaaa2d95cab3c2c5eae6fa3386a7fb306b9cd5a3727d34c5603c828_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddf0d73d6c83eccb420d764a06c4a5abdf61eb7863a00a24f3aa719e1fadf5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf0d73d6c83eccb420d764a06c4a5abdf61eb7863a00a24f3aa719e1fadf5f2->enter($__internal_ddf0d73d6c83eccb420d764a06c4a5abdf61eb7863a00a24f3aa719e1fadf5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d2d04793b30e9c385c0f6ebdcac6ef8c2d76581e48114c76b59b50951eb759a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2d04793b30e9c385c0f6ebdcac6ef8c2d76581e48114c76b59b50951eb759a->enter($__internal_9d2d04793b30e9c385c0f6ebdcac6ef8c2d76581e48114c76b59b50951eb759a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de visite ";
        
        $__internal_9d2d04793b30e9c385c0f6ebdcac6ef8c2d76581e48114c76b59b50951eb759a->leave($__internal_9d2d04793b30e9c385c0f6ebdcac6ef8c2d76581e48114c76b59b50951eb759a_prof);

        
        $__internal_ddf0d73d6c83eccb420d764a06c4a5abdf61eb7863a00a24f3aa719e1fadf5f2->leave($__internal_ddf0d73d6c83eccb420d764a06c4a5abdf61eb7863a00a24f3aa719e1fadf5f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c343979aa176790be1299108f6190e83f72238174001af7d56c0b818a0c8a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c343979aa176790be1299108f6190e83f72238174001af7d56c0b818a0c8a45->enter($__internal_8c343979aa176790be1299108f6190e83f72238174001af7d56c0b818a0c8a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e843c1ad4eae4687104eda7d8d6cf4623217f9e88fdb2ca0588fc550d756c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e843c1ad4eae4687104eda7d8d6cf4623217f9e88fdb2ca0588fc550d756c9a5->enter($__internal_e843c1ad4eae4687104eda7d8d6cf4623217f9e88fdb2ca0588fc550d756c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e843c1ad4eae4687104eda7d8d6cf4623217f9e88fdb2ca0588fc550d756c9a5->leave($__internal_e843c1ad4eae4687104eda7d8d6cf4623217f9e88fdb2ca0588fc550d756c9a5_prof);

        
        $__internal_8c343979aa176790be1299108f6190e83f72238174001af7d56c0b818a0c8a45->leave($__internal_8c343979aa176790be1299108f6190e83f72238174001af7d56c0b818a0c8a45_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeVisite:add.html.twig";
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
{% endblock %}", "AdminBundle:CtTypeVisite:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeVisite/add.html.twig");
    }
}
