<?php

/* @Admin/CtZoneDeserte/add.html.twig */
class __TwigTemplate_8754a07feb3c448398d8436c8316cef689fbadceae53b806d345f5e23b54e96b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtZoneDeserte/add.html.twig", 1);
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
        $__internal_670553d868d0494707e19c045c3441fd557c46203121b7d8dda6c547340cd8c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670553d868d0494707e19c045c3441fd557c46203121b7d8dda6c547340cd8c8->enter($__internal_670553d868d0494707e19c045c3441fd557c46203121b7d8dda6c547340cd8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        $__internal_d10ac82f444146e2501c467f5c6de27e10c848a030a8485285cfd76166552343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10ac82f444146e2501c467f5c6de27e10c848a030a8485285cfd76166552343->enter($__internal_d10ac82f444146e2501c467f5c6de27e10c848a030a8485285cfd76166552343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtZoneDeserte/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_zone_deserte"] = true;
        // line 8
        $context["menu_zone_deserte_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_670553d868d0494707e19c045c3441fd557c46203121b7d8dda6c547340cd8c8->leave($__internal_670553d868d0494707e19c045c3441fd557c46203121b7d8dda6c547340cd8c8_prof);

        
        $__internal_d10ac82f444146e2501c467f5c6de27e10c848a030a8485285cfd76166552343->leave($__internal_d10ac82f444146e2501c467f5c6de27e10c848a030a8485285cfd76166552343_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_796824115fe52dab16f711ef4e039273fffdff2646769e033e2bda1f1583f103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796824115fe52dab16f711ef4e039273fffdff2646769e033e2bda1f1583f103->enter($__internal_796824115fe52dab16f711ef4e039273fffdff2646769e033e2bda1f1583f103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27e6e1e350687c9b036291d4614d2493d9b13cdf3f204a385b0d6a3794e3962e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e6e1e350687c9b036291d4614d2493d9b13cdf3f204a385b0d6a3794e3962e->enter($__internal_27e6e1e350687c9b036291d4614d2493d9b13cdf3f204a385b0d6a3794e3962e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Zone de déserte ";
        
        $__internal_27e6e1e350687c9b036291d4614d2493d9b13cdf3f204a385b0d6a3794e3962e->leave($__internal_27e6e1e350687c9b036291d4614d2493d9b13cdf3f204a385b0d6a3794e3962e_prof);

        
        $__internal_796824115fe52dab16f711ef4e039273fffdff2646769e033e2bda1f1583f103->leave($__internal_796824115fe52dab16f711ef4e039273fffdff2646769e033e2bda1f1583f103_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8a60a0cf607f573f3a130c6643fb68e07a910c5640379c8a45a1dd6b92d3092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a60a0cf607f573f3a130c6643fb68e07a910c5640379c8a45a1dd6b92d3092->enter($__internal_a8a60a0cf607f573f3a130c6643fb68e07a910c5640379c8a45a1dd6b92d3092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd3991be0d3999c5c866f9ad007756e52194e83803412ae3df9516af7bb120d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3991be0d3999c5c866f9ad007756e52194e83803412ae3df9516af7bb120d2->enter($__internal_fd3991be0d3999c5c866f9ad007756e52194e83803412ae3df9516af7bb120d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zdLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_fd3991be0d3999c5c866f9ad007756e52194e83803412ae3df9516af7bb120d2->leave($__internal_fd3991be0d3999c5c866f9ad007756e52194e83803412ae3df9516af7bb120d2_prof);

        
        $__internal_a8a60a0cf607f573f3a130c6643fb68e07a910c5640379c8a45a1dd6b92d3092->leave($__internal_a8a60a0cf607f573f3a130c6643fb68e07a910c5640379c8a45a1dd6b92d3092_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtZoneDeserte/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Zone de déserte {% endblock %}

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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une zone de déserte</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.zdLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_zone_deserte\"/>
                        <a href=\"{{ path('zone_deserte_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtZoneDeserte/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtZoneDeserte\\add.html.twig");
    }
}
