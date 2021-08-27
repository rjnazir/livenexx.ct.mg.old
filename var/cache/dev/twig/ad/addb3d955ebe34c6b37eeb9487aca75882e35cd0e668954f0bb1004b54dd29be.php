<?php

/* AdminBundle:CtProvince:add.html.twig */
class __TwigTemplate_c16837f924693a0aad988cd794bea424cfdb3815fb66cbc18c505aa9bb01aed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:add.html.twig", 1);
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
        $__internal_9e0fe19fef8fde9c5d76d167dabb5435f6b4c3644b3d920aacdc5fda4d40325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0fe19fef8fde9c5d76d167dabb5435f6b4c3644b3d920aacdc5fda4d40325d->enter($__internal_9e0fe19fef8fde9c5d76d167dabb5435f6b4c3644b3d920aacdc5fda4d40325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        $__internal_4d0a0da6d28585ac09b91dad8b90a9a7633d4eb00c23688f8d5ff27c432a358b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0a0da6d28585ac09b91dad8b90a9a7633d4eb00c23688f8d5ff27c432a358b->enter($__internal_4d0a0da6d28585ac09b91dad8b90a9a7633d4eb00c23688f8d5ff27c432a358b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e0fe19fef8fde9c5d76d167dabb5435f6b4c3644b3d920aacdc5fda4d40325d->leave($__internal_9e0fe19fef8fde9c5d76d167dabb5435f6b4c3644b3d920aacdc5fda4d40325d_prof);

        
        $__internal_4d0a0da6d28585ac09b91dad8b90a9a7633d4eb00c23688f8d5ff27c432a358b->leave($__internal_4d0a0da6d28585ac09b91dad8b90a9a7633d4eb00c23688f8d5ff27c432a358b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbeaabe25306bfc0f6289cf14f67da8841394f2c4bd852717818857e73bf478b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbeaabe25306bfc0f6289cf14f67da8841394f2c4bd852717818857e73bf478b->enter($__internal_bbeaabe25306bfc0f6289cf14f67da8841394f2c4bd852717818857e73bf478b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b55a3a53aa44bc7c441250e5da25ecad28077868609b23121a2ee53f9065216f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55a3a53aa44bc7c441250e5da25ecad28077868609b23121a2ee53f9065216f->enter($__internal_b55a3a53aa44bc7c441250e5da25ecad28077868609b23121a2ee53f9065216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Province ";
        
        $__internal_b55a3a53aa44bc7c441250e5da25ecad28077868609b23121a2ee53f9065216f->leave($__internal_b55a3a53aa44bc7c441250e5da25ecad28077868609b23121a2ee53f9065216f_prof);

        
        $__internal_bbeaabe25306bfc0f6289cf14f67da8841394f2c4bd852717818857e73bf478b->leave($__internal_bbeaabe25306bfc0f6289cf14f67da8841394f2c4bd852717818857e73bf478b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a938e29f6b346943739eb4cc399aa4334fb0168c7e18060663412b57e5d061c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a938e29f6b346943739eb4cc399aa4334fb0168c7e18060663412b57e5d061c->enter($__internal_3a938e29f6b346943739eb4cc399aa4334fb0168c7e18060663412b57e5d061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fc9bb7158c707b50ecd23107cc712386090be3fd0353f128b72f6f6a616e464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc9bb7158c707b50ecd23107cc712386090be3fd0353f128b72f6f6a616e464->enter($__internal_9fc9bb7158c707b50ecd23107cc712386090be3fd0353f128b72f6f6a616e464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvNom", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prvCode", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
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
        
        $__internal_9fc9bb7158c707b50ecd23107cc712386090be3fd0353f128b72f6f6a616e464->leave($__internal_9fc9bb7158c707b50ecd23107cc712386090be3fd0353f128b72f6f6a616e464_prof);

        
        $__internal_3a938e29f6b346943739eb4cc399aa4334fb0168c7e18060663412b57e5d061c->leave($__internal_3a938e29f6b346943739eb4cc399aa4334fb0168c7e18060663412b57e5d061c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Province {% endblock %}

{% set menu_province        = true %}
{% set menu_province_create = true %}

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
                        <h3 class=\"box-title\">Créer une province</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.prvNom) }}
                        {{ form_row(form.prvCode) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_province\"/>
                        <a href=\"{{ path('province_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProvince:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/add.html.twig");
    }
}
