<?php

/* AdminBundle:CtCentre:add.html.twig */
class __TwigTemplate_9980684897bbf5cf30b9e2ae5c2dd992c62a6149c5808ddd241b75383ae71f6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:add.html.twig", 1);
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
        $__internal_84a7cffc96a212c0c8701a983f560b3538e7744ac569927a0c0b2e627d301cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a7cffc96a212c0c8701a983f560b3538e7744ac569927a0c0b2e627d301cb6->enter($__internal_84a7cffc96a212c0c8701a983f560b3538e7744ac569927a0c0b2e627d301cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        $__internal_6530fcacdd91da7111601bfd29c9ab1b91768323f58a2aca95ab6e813ff88502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6530fcacdd91da7111601bfd29c9ab1b91768323f58a2aca95ab6e813ff88502->enter($__internal_6530fcacdd91da7111601bfd29c9ab1b91768323f58a2aca95ab6e813ff88502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a7cffc96a212c0c8701a983f560b3538e7744ac569927a0c0b2e627d301cb6->leave($__internal_84a7cffc96a212c0c8701a983f560b3538e7744ac569927a0c0b2e627d301cb6_prof);

        
        $__internal_6530fcacdd91da7111601bfd29c9ab1b91768323f58a2aca95ab6e813ff88502->leave($__internal_6530fcacdd91da7111601bfd29c9ab1b91768323f58a2aca95ab6e813ff88502_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_204109971dfa8655f6fe04d547b42e226b5dff059b52f06accdfff06c2ccc8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204109971dfa8655f6fe04d547b42e226b5dff059b52f06accdfff06c2ccc8e9->enter($__internal_204109971dfa8655f6fe04d547b42e226b5dff059b52f06accdfff06c2ccc8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8c71fb7bde79935196a6d3158782682887e35e53cfa7298bb9fb28082413031f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71fb7bde79935196a6d3158782682887e35e53cfa7298bb9fb28082413031f->enter($__internal_8c71fb7bde79935196a6d3158782682887e35e53cfa7298bb9fb28082413031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Centre ";
        
        $__internal_8c71fb7bde79935196a6d3158782682887e35e53cfa7298bb9fb28082413031f->leave($__internal_8c71fb7bde79935196a6d3158782682887e35e53cfa7298bb9fb28082413031f_prof);

        
        $__internal_204109971dfa8655f6fe04d547b42e226b5dff059b52f06accdfff06c2ccc8e9->leave($__internal_204109971dfa8655f6fe04d547b42e226b5dff059b52f06accdfff06c2ccc8e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f75b7b5fadf23ab00430422134770c207e4b5c4e45b1bb22ad604fbd28bab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f75b7b5fadf23ab00430422134770c207e4b5c4e45b1bb22ad604fbd28bab7->enter($__internal_14f75b7b5fadf23ab00430422134770c207e4b5c4e45b1bb22ad604fbd28bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_175fcc4d3bbe6acb99f359de08fc32a16f8b8065930d9e1d754b8d32c7c65dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175fcc4d3bbe6acb99f359de08fc32a16f8b8065930d9e1d754b8d32c7c65dfe->enter($__internal_175fcc4d3bbe6acb99f359de08fc32a16f8b8065930d9e1d754b8d32c7c65dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctProvince", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrNom", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctrCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_175fcc4d3bbe6acb99f359de08fc32a16f8b8065930d9e1d754b8d32c7c65dfe->leave($__internal_175fcc4d3bbe6acb99f359de08fc32a16f8b8065930d9e1d754b8d32c7c65dfe_prof);

        
        $__internal_14f75b7b5fadf23ab00430422134770c207e4b5c4e45b1bb22ad604fbd28bab7->leave($__internal_14f75b7b5fadf23ab00430422134770c207e4b5c4e45b1bb22ad604fbd28bab7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  141 => 38,  133 => 33,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Centre {% endblock %}

{% set menu_centre        = true %}
{% set menu_centre_create = true %}

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
                        <h3 class=\"box-title\">Créer un centre</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctProvince) }}
                        {{ form_row(form.ctrNom) }}
                        {{ form_row(form.ctrCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_centre\"/>
                        <a href=\"{{ path('centre_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCentre:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/add.html.twig");
    }
}
