<?php

/* AdminBundle:CtTypeReception:add.html.twig */
class __TwigTemplate_dc3ef5784280cb68c63a69f6af16c7029870c144b1ec882316c2cf0c2d0834bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtTypeReception:add.html.twig", 1);
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
        $__internal_36307e765d984d41c9138c2270fe78e14f2daba4f407c4ee9fc40fec95f6b8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36307e765d984d41c9138c2270fe78e14f2daba4f407c4ee9fc40fec95f6b8b7->enter($__internal_36307e765d984d41c9138c2270fe78e14f2daba4f407c4ee9fc40fec95f6b8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        $__internal_f3259d48a9f3cb6aaaa0063284b59d388611de41001d13d242d46f77518c0f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3259d48a9f3cb6aaaa0063284b59d388611de41001d13d242d46f77518c0f3a->enter($__internal_f3259d48a9f3cb6aaaa0063284b59d388611de41001d13d242d46f77518c0f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtTypeReception:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_reception"] = true;
        // line 8
        $context["menu_type_reception"] = true;
        // line 9
        $context["menu_type_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36307e765d984d41c9138c2270fe78e14f2daba4f407c4ee9fc40fec95f6b8b7->leave($__internal_36307e765d984d41c9138c2270fe78e14f2daba4f407c4ee9fc40fec95f6b8b7_prof);

        
        $__internal_f3259d48a9f3cb6aaaa0063284b59d388611de41001d13d242d46f77518c0f3a->leave($__internal_f3259d48a9f3cb6aaaa0063284b59d388611de41001d13d242d46f77518c0f3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebf49fef3bae9176567e7ff6d4b7bf66ec129937b076eb73696432d2e6962322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf49fef3bae9176567e7ff6d4b7bf66ec129937b076eb73696432d2e6962322->enter($__internal_ebf49fef3bae9176567e7ff6d4b7bf66ec129937b076eb73696432d2e6962322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c16a0d949c7a76b0095f4390e1935600822318a1da6926792c8db97dd793b542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16a0d949c7a76b0095f4390e1935600822318a1da6926792c8db97dd793b542->enter($__internal_c16a0d949c7a76b0095f4390e1935600822318a1da6926792c8db97dd793b542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Type de réception ";
        
        $__internal_c16a0d949c7a76b0095f4390e1935600822318a1da6926792c8db97dd793b542->leave($__internal_c16a0d949c7a76b0095f4390e1935600822318a1da6926792c8db97dd793b542_prof);

        
        $__internal_ebf49fef3bae9176567e7ff6d4b7bf66ec129937b076eb73696432d2e6962322->leave($__internal_ebf49fef3bae9176567e7ff6d4b7bf66ec129937b076eb73696432d2e6962322_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1006f3025adb7c313f2cd33643628d53c3c562e3782bc2dd0702cd8b4a7a68a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1006f3025adb7c313f2cd33643628d53c3c562e3782bc2dd0702cd8b4a7a68a->enter($__internal_c1006f3025adb7c313f2cd33643628d53c3c562e3782bc2dd0702cd8b4a7a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe3217ac359968520d97c820036c862b3df85265625e596b47247c0f5186ff54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3217ac359968520d97c820036c862b3df85265625e596b47247c0f5186ff54->enter($__internal_fe3217ac359968520d97c820036c862b3df85265625e596b47247c0f5186ff54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tprcpLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
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
        
        $__internal_fe3217ac359968520d97c820036c862b3df85265625e596b47247c0f5186ff54->leave($__internal_fe3217ac359968520d97c820036c862b3df85265625e596b47247c0f5186ff54_prof);

        
        $__internal_c1006f3025adb7c313f2cd33643628d53c3c562e3782bc2dd0702cd8b4a7a68a->leave($__internal_c1006f3025adb7c313f2cd33643628d53c3c562e3782bc2dd0702cd8b4a7a68a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtTypeReception:add.html.twig";
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

{% block title %}{{ parent() }} Ajout Type de réception {% endblock %}

{% set menu_reception        = true %}
{% set menu_type_reception        = true %}
{% set menu_type_reception_create = true %}

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
                        <h3 class=\"box-title\">Créer un type de réception</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.tprcpLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                        <a href=\"{{ path('type_reception_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtTypeReception:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtTypeReception/add.html.twig");
    }
}
