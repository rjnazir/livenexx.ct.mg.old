<?php

/* AdminBundle:CtVisiteExtra:edit.html.twig */
class __TwigTemplate_dd730fb90533fbd8cd70000d87e88bcc4d5755070219dce2d627c155e6beb80d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtra:edit.html.twig", 1);
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
        $__internal_e1374ffc8ebe3fd909b2c981b37455e832fcf7d70164b72ac179c91ec901b0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1374ffc8ebe3fd909b2c981b37455e832fcf7d70164b72ac179c91ec901b0a2->enter($__internal_e1374ffc8ebe3fd909b2c981b37455e832fcf7d70164b72ac179c91ec901b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:edit.html.twig"));

        $__internal_cca90d36aeca40a06c002cf5df58ee766a5a1ede84b18e026676e8c14a473741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca90d36aeca40a06c002cf5df58ee766a5a1ede84b18e026676e8c14a473741->enter($__internal_cca90d36aeca40a06c002cf5df58ee766a5a1ede84b18e026676e8c14a473741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1374ffc8ebe3fd909b2c981b37455e832fcf7d70164b72ac179c91ec901b0a2->leave($__internal_e1374ffc8ebe3fd909b2c981b37455e832fcf7d70164b72ac179c91ec901b0a2_prof);

        
        $__internal_cca90d36aeca40a06c002cf5df58ee766a5a1ede84b18e026676e8c14a473741->leave($__internal_cca90d36aeca40a06c002cf5df58ee766a5a1ede84b18e026676e8c14a473741_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce4489e23b186e62b8873a1104d39e0f110f03dad7a03895ff5b27fbe58e5deb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4489e23b186e62b8873a1104d39e0f110f03dad7a03895ff5b27fbe58e5deb->enter($__internal_ce4489e23b186e62b8873a1104d39e0f110f03dad7a03895ff5b27fbe58e5deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b845e5548fe7b1286b99e777f1695af76b3b74838a2062989fd67df32a28874a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b845e5548fe7b1286b99e777f1695af76b3b74838a2062989fd67df32a28874a->enter($__internal_b845e5548fe7b1286b99e777f1695af76b3b74838a2062989fd67df32a28874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite extra ";
        
        $__internal_b845e5548fe7b1286b99e777f1695af76b3b74838a2062989fd67df32a28874a->leave($__internal_b845e5548fe7b1286b99e777f1695af76b3b74838a2062989fd67df32a28874a_prof);

        
        $__internal_ce4489e23b186e62b8873a1104d39e0f110f03dad7a03895ff5b27fbe58e5deb->leave($__internal_ce4489e23b186e62b8873a1104d39e0f110f03dad7a03895ff5b27fbe58e5deb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_675753c5a9625678b94aa0af905d18c5c60d13d1391a1c0ce3b24083def447a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675753c5a9625678b94aa0af905d18c5c60d13d1391a1c0ce3b24083def447a3->enter($__internal_675753c5a9625678b94aa0af905d18c5c60d13d1391a1c0ce3b24083def447a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a46a559fda4d6f013a6ac649d8c3a850b60774b1c03f6df9a2cc3a20a92b6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a46a559fda4d6f013a6ac649d8c3a850b60774b1c03f6df9a2cc3a20a92b6e8->enter($__internal_4a46a559fda4d6f013a6ac649d8c3a850b60774b1c03f6df9a2cc3a20a92b6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vsteLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_4a46a559fda4d6f013a6ac649d8c3a850b60774b1c03f6df9a2cc3a20a92b6e8->leave($__internal_4a46a559fda4d6f013a6ac649d8c3a850b60774b1c03f6df9a2cc3a20a92b6e8_prof);

        
        $__internal_675753c5a9625678b94aa0af905d18c5c60d13d1391a1c0ce3b24083def447a3->leave($__internal_675753c5a9625678b94aa0af905d18c5c60d13d1391a1c0ce3b24083def447a3_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtra:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  131 => 35,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification Visite extra {% endblock %}

{% set menu_visite_extra = true %}

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
                        <h3 class=\"box-title\">Editer une visite extra</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.vsteLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtVisiteExtra:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtra/edit.html.twig");
    }
}
