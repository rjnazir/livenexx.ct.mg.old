<?php

/* @Admin/CtRole/add.html.twig */
class __TwigTemplate_493a658aaffc905bbaa90ee6a3d626d120cedc47aaadc4f8a7a2016311cfbbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/add.html.twig", 1);
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
        $__internal_44b423e07434da80dc5ed52d76a8cb09454dc71e204ed93585d34391db03cc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b423e07434da80dc5ed52d76a8cb09454dc71e204ed93585d34391db03cc66->enter($__internal_44b423e07434da80dc5ed52d76a8cb09454dc71e204ed93585d34391db03cc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/add.html.twig"));

        $__internal_f72e37257cc0386a917bf33412521679463985ce7e1d822a0db3f7c660cade7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72e37257cc0386a917bf33412521679463985ce7e1d822a0db3f7c660cade7c->enter($__internal_f72e37257cc0386a917bf33412521679463985ce7e1d822a0db3f7c660cade7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44b423e07434da80dc5ed52d76a8cb09454dc71e204ed93585d34391db03cc66->leave($__internal_44b423e07434da80dc5ed52d76a8cb09454dc71e204ed93585d34391db03cc66_prof);

        
        $__internal_f72e37257cc0386a917bf33412521679463985ce7e1d822a0db3f7c660cade7c->leave($__internal_f72e37257cc0386a917bf33412521679463985ce7e1d822a0db3f7c660cade7c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02481495c986fb05e772162eadd8e391049cf7e5511ae26f2b9d33e24aa08029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02481495c986fb05e772162eadd8e391049cf7e5511ae26f2b9d33e24aa08029->enter($__internal_02481495c986fb05e772162eadd8e391049cf7e5511ae26f2b9d33e24aa08029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7364cd6cb87f9633b5e8e58bbed43a38f1a6e88fe93ba1fdf891568d16952683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7364cd6cb87f9633b5e8e58bbed43a38f1a6e88fe93ba1fdf891568d16952683->enter($__internal_7364cd6cb87f9633b5e8e58bbed43a38f1a6e88fe93ba1fdf891568d16952683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Rôle ";
        
        $__internal_7364cd6cb87f9633b5e8e58bbed43a38f1a6e88fe93ba1fdf891568d16952683->leave($__internal_7364cd6cb87f9633b5e8e58bbed43a38f1a6e88fe93ba1fdf891568d16952683_prof);

        
        $__internal_02481495c986fb05e772162eadd8e391049cf7e5511ae26f2b9d33e24aa08029->leave($__internal_02481495c986fb05e772162eadd8e391049cf7e5511ae26f2b9d33e24aa08029_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ed50e591997d7943065759882c64ab70eda9eef331de8c0499b75f6cc370c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed50e591997d7943065759882c64ab70eda9eef331de8c0499b75f6cc370c17->enter($__internal_6ed50e591997d7943065759882c64ab70eda9eef331de8c0499b75f6cc370c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5928d41b090027b30c156982d81d1f130cf2174f07b35d7db3257de5b59ec99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5928d41b090027b30c156982d81d1f130cf2174f07b35d7db3257de5b59ec99->enter($__internal_a5928d41b090027b30c156982d81d1f130cf2174f07b35d7db3257de5b59ec99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
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
        
        $__internal_a5928d41b090027b30c156982d81d1f130cf2174f07b35d7db3257de5b59ec99->leave($__internal_a5928d41b090027b30c156982d81d1f130cf2174f07b35d7db3257de5b59ec99_prof);

        
        $__internal_6ed50e591997d7943065759882c64ab70eda9eef331de8c0499b75f6cc370c17->leave($__internal_6ed50e591997d7943065759882c64ab70eda9eef331de8c0499b75f6cc370c17_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Rôle {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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
                        <h3 class=\"box-title\">Créer un rôle</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtRole/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\add.html.twig");
    }
}
