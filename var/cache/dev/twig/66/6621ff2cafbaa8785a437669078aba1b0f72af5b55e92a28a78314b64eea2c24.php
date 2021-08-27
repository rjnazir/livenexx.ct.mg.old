<?php

/* @Admin/CtGenreTarif/edit.html.twig */
class __TwigTemplate_7c44e444095918a6a17ba90e385ab39bbeed159ff045e941e2fe62aef3ceedaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreTarif/edit.html.twig", 1);
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
        $__internal_1b85f97f4bb9b09aa9cd5731404a901b752f63ae40a9d5f61fad0b4eaa89e4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b85f97f4bb9b09aa9cd5731404a901b752f63ae40a9d5f61fad0b4eaa89e4bf->enter($__internal_1b85f97f4bb9b09aa9cd5731404a901b752f63ae40a9d5f61fad0b4eaa89e4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/edit.html.twig"));

        $__internal_79938dc6965821c865952426a63c9ee9758b2f30d23876777d1718849854792e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79938dc6965821c865952426a63c9ee9758b2f30d23876777d1718849854792e->enter($__internal_79938dc6965821c865952426a63c9ee9758b2f30d23876777d1718849854792e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_genre_tarif"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b85f97f4bb9b09aa9cd5731404a901b752f63ae40a9d5f61fad0b4eaa89e4bf->leave($__internal_1b85f97f4bb9b09aa9cd5731404a901b752f63ae40a9d5f61fad0b4eaa89e4bf_prof);

        
        $__internal_79938dc6965821c865952426a63c9ee9758b2f30d23876777d1718849854792e->leave($__internal_79938dc6965821c865952426a63c9ee9758b2f30d23876777d1718849854792e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4181f27029a5454e40d22fb13de9827d43fbff058a51a5ab69268d84f1aaee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4181f27029a5454e40d22fb13de9827d43fbff058a51a5ab69268d84f1aaee0->enter($__internal_e4181f27029a5454e40d22fb13de9827d43fbff058a51a5ab69268d84f1aaee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1196ca292e08d57c6896d7994880b1740f2b177764935ec16b41666fea076d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1196ca292e08d57c6896d7994880b1740f2b177764935ec16b41666fea076d8->enter($__internal_a1196ca292e08d57c6896d7994880b1740f2b177764935ec16b41666fea076d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification tarif de genre ";
        
        $__internal_a1196ca292e08d57c6896d7994880b1740f2b177764935ec16b41666fea076d8->leave($__internal_a1196ca292e08d57c6896d7994880b1740f2b177764935ec16b41666fea076d8_prof);

        
        $__internal_e4181f27029a5454e40d22fb13de9827d43fbff058a51a5ab69268d84f1aaee0->leave($__internal_e4181f27029a5454e40d22fb13de9827d43fbff058a51a5ab69268d84f1aaee0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2b211945b5fe74b45a523c29304e9e0a912dd0d2f6c0926d76e259cc1a243a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b211945b5fe74b45a523c29304e9e0a912dd0d2f6c0926d76e259cc1a243a5->enter($__internal_b2b211945b5fe74b45a523c29304e9e0a912dd0d2f6c0926d76e259cc1a243a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca563583f00070a7e2f792c61c280a0e6a300cd7f7704b675ec5c7b54a64902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca563583f00070a7e2f792c61c280a0e6a300cd7f7704b675ec5c7b54a64902->enter($__internal_eca563583f00070a7e2f792c61c280a0e6a300cd7f7704b675ec5c7b54a64902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "grtPrix", array()), 'row');
        echo "
                        ";
        // line 33
        echo "                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_eca563583f00070a7e2f792c61c280a0e6a300cd7f7704b675ec5c7b54a64902->leave($__internal_eca563583f00070a7e2f792c61c280a0e6a300cd7f7704b675ec5c7b54a64902_prof);

        
        $__internal_b2b211945b5fe74b45a523c29304e9e0a912dd0d2f6c0926d76e259cc1a243a5->leave($__internal_b2b211945b5fe74b45a523c29304e9e0a912dd0d2f6c0926d76e259cc1a243a5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreTarif/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  131 => 33,  127 => 31,  123 => 30,  114 => 24,  108 => 20,  99 => 17,  96 => 16,  91 => 15,  82 => 12,  79 => 11,  74 => 10,  65 => 9,  46 => 5,  36 => 1,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Modification tarif de genre {% endblock %}

{% set menu_genre_tarif = true %}

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
                        <h3 class=\"box-title\">Editer un tarif genre</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.ctGenre) }}
                        {{ form_row(edit_form.grtPrix) }}
                        {#{{ form_row(edit_form.grtAnnee) }}#}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_genre\"/>
                        <a href=\"{{ path('genre_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtGenreTarif/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreTarif\\edit.html.twig");
    }
}
