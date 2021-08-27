<?php

/* @Admin/CtUtilisation/edit.html.twig */
class __TwigTemplate_b96cc0715bde1704f621822d0f6a4015c04ed163174aa1abe74f5c7a712b06a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtUtilisation/edit.html.twig", 1);
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
        $__internal_3e5596892de7507ef77c9e421681bf47524d859594d24318a93e35cd151a8f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5596892de7507ef77c9e421681bf47524d859594d24318a93e35cd151a8f43->enter($__internal_3e5596892de7507ef77c9e421681bf47524d859594d24318a93e35cd151a8f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/edit.html.twig"));

        $__internal_5d1ac0ae59caa99c953ad6903ec4aa548c327d858b93fddbc171fd669ec147ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1ac0ae59caa99c953ad6903ec4aa548c327d858b93fddbc171fd669ec147ba->enter($__internal_5d1ac0ae59caa99c953ad6903ec4aa548c327d858b93fddbc171fd669ec147ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtUtilisation/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5596892de7507ef77c9e421681bf47524d859594d24318a93e35cd151a8f43->leave($__internal_3e5596892de7507ef77c9e421681bf47524d859594d24318a93e35cd151a8f43_prof);

        
        $__internal_5d1ac0ae59caa99c953ad6903ec4aa548c327d858b93fddbc171fd669ec147ba->leave($__internal_5d1ac0ae59caa99c953ad6903ec4aa548c327d858b93fddbc171fd669ec147ba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea344b361803dcb3a6c9e1669d80a11c7d4e9880e1bdd7431c50fd3eea336b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea344b361803dcb3a6c9e1669d80a11c7d4e9880e1bdd7431c50fd3eea336b2d->enter($__internal_ea344b361803dcb3a6c9e1669d80a11c7d4e9880e1bdd7431c50fd3eea336b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be2019acef5cc8136df0716fbfc442c6c1202404c868284f2bb408c84e720c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2019acef5cc8136df0716fbfc442c6c1202404c868284f2bb408c84e720c04->enter($__internal_be2019acef5cc8136df0716fbfc442c6c1202404c868284f2bb408c84e720c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisation ";
        
        $__internal_be2019acef5cc8136df0716fbfc442c6c1202404c868284f2bb408c84e720c04->leave($__internal_be2019acef5cc8136df0716fbfc442c6c1202404c868284f2bb408c84e720c04_prof);

        
        $__internal_ea344b361803dcb3a6c9e1669d80a11c7d4e9880e1bdd7431c50fd3eea336b2d->leave($__internal_ea344b361803dcb3a6c9e1669d80a11c7d4e9880e1bdd7431c50fd3eea336b2d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f6b67b763a36e8ed1696e4206dc50f3a60319c50db19200057452d0739c11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f6b67b763a36e8ed1696e4206dc50f3a60319c50db19200057452d0739c11e->enter($__internal_b7f6b67b763a36e8ed1696e4206dc50f3a60319c50db19200057452d0739c11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86f54b23d02dc4cc625bc110aabdc8e65c5e265a7e710c9817b525579cb1b6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f54b23d02dc4cc625bc110aabdc8e65c5e265a7e710c9817b525579cb1b6e7->enter($__internal_86f54b23d02dc4cc625bc110aabdc8e65c5e265a7e710c9817b525579cb1b6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
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
        
        $__internal_86f54b23d02dc4cc625bc110aabdc8e65c5e265a7e710c9817b525579cb1b6e7->leave($__internal_86f54b23d02dc4cc625bc110aabdc8e65c5e265a7e710c9817b525579cb1b6e7_prof);

        
        $__internal_b7f6b67b763a36e8ed1696e4206dc50f3a60319c50db19200057452d0739c11e->leave($__internal_b7f6b67b763a36e8ed1696e4206dc50f3a60319c50db19200057452d0739c11e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtUtilisation/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Utilisation {% endblock %}

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Editer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtUtilisation/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtUtilisation\\edit.html.twig");
    }
}
