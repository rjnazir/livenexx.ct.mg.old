<?php

/* AdminBundle:CtMarque:add.html.twig */
class __TwigTemplate_04dade6c8ca75197290a3e246a1aff31d79e63f32efb49436f628e27b735b4c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:add.html.twig", 1);
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
        $__internal_e8349e1f807909f3bc0fd7faf44d928345461216cb8b73d3ce410667483be945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8349e1f807909f3bc0fd7faf44d928345461216cb8b73d3ce410667483be945->enter($__internal_e8349e1f807909f3bc0fd7faf44d928345461216cb8b73d3ce410667483be945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        $__internal_cbf35f2c6c2bf18b36a84600489d6a079521275d622ae87a883a9ffcf85aba56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf35f2c6c2bf18b36a84600489d6a079521275d622ae87a883a9ffcf85aba56->enter($__internal_cbf35f2c6c2bf18b36a84600489d6a079521275d622ae87a883a9ffcf85aba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8349e1f807909f3bc0fd7faf44d928345461216cb8b73d3ce410667483be945->leave($__internal_e8349e1f807909f3bc0fd7faf44d928345461216cb8b73d3ce410667483be945_prof);

        
        $__internal_cbf35f2c6c2bf18b36a84600489d6a079521275d622ae87a883a9ffcf85aba56->leave($__internal_cbf35f2c6c2bf18b36a84600489d6a079521275d622ae87a883a9ffcf85aba56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe4a44f3d3e46aa6bff773a16ed5ea0ae5f911c394c944ad598f9435af62e532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4a44f3d3e46aa6bff773a16ed5ea0ae5f911c394c944ad598f9435af62e532->enter($__internal_fe4a44f3d3e46aa6bff773a16ed5ea0ae5f911c394c944ad598f9435af62e532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fef07df222b666ad416f8b995ba6a975fc4e239c540587194e7fe1fd6b2a087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fef07df222b666ad416f8b995ba6a975fc4e239c540587194e7fe1fd6b2a087->enter($__internal_8fef07df222b666ad416f8b995ba6a975fc4e239c540587194e7fe1fd6b2a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_8fef07df222b666ad416f8b995ba6a975fc4e239c540587194e7fe1fd6b2a087->leave($__internal_8fef07df222b666ad416f8b995ba6a975fc4e239c540587194e7fe1fd6b2a087_prof);

        
        $__internal_fe4a44f3d3e46aa6bff773a16ed5ea0ae5f911c394c944ad598f9435af62e532->leave($__internal_fe4a44f3d3e46aa6bff773a16ed5ea0ae5f911c394c944ad598f9435af62e532_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_beb413c73795c8b11399da6c65b4f3cfc22c7a52ca27d2ec020264e44b433a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb413c73795c8b11399da6c65b4f3cfc22c7a52ca27d2ec020264e44b433a68->enter($__internal_beb413c73795c8b11399da6c65b4f3cfc22c7a52ca27d2ec020264e44b433a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_263a3801cea9e70393a40261928c743662fe8283d4b56a20a17ea315a520438e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263a3801cea9e70393a40261928c743662fe8283d4b56a20a17ea315a520438e->enter($__internal_263a3801cea9e70393a40261928c743662fe8283d4b56a20a17ea315a520438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_263a3801cea9e70393a40261928c743662fe8283d4b56a20a17ea315a520438e->leave($__internal_263a3801cea9e70393a40261928c743662fe8283d4b56a20a17ea315a520438e_prof);

        
        $__internal_beb413c73795c8b11399da6c65b4f3cfc22c7a52ca27d2ec020264e44b433a68->leave($__internal_beb413c73795c8b11399da6c65b4f3cfc22c7a52ca27d2ec020264e44b433a68_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:add.html.twig";
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
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/add.html.twig");
    }
}
