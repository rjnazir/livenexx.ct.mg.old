<?php

/* @Admin/CtProvince/add.html.twig */
class __TwigTemplate_9d523901c474b62673516f58aa2be3c98d35dc0d29fa743a7671442744e33b87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtProvince/add.html.twig", 1);
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
        $__internal_6d595651083b43f2554b212c6091000030796f4e0134fe3cae5f15bc6a53e794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d595651083b43f2554b212c6091000030796f4e0134fe3cae5f15bc6a53e794->enter($__internal_6d595651083b43f2554b212c6091000030796f4e0134fe3cae5f15bc6a53e794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/add.html.twig"));

        $__internal_c4c767a45a59ecec0c7947f5c593a1e6d1283ee61430e8828917c55f5d7d4e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c767a45a59ecec0c7947f5c593a1e6d1283ee61430e8828917c55f5d7d4e24->enter($__internal_c4c767a45a59ecec0c7947f5c593a1e6d1283ee61430e8828917c55f5d7d4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtProvince/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_province"] = true;
        // line 8
        $context["menu_province_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d595651083b43f2554b212c6091000030796f4e0134fe3cae5f15bc6a53e794->leave($__internal_6d595651083b43f2554b212c6091000030796f4e0134fe3cae5f15bc6a53e794_prof);

        
        $__internal_c4c767a45a59ecec0c7947f5c593a1e6d1283ee61430e8828917c55f5d7d4e24->leave($__internal_c4c767a45a59ecec0c7947f5c593a1e6d1283ee61430e8828917c55f5d7d4e24_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d9e7e1f889d936857cefc8156a30fab2fea4bacd074288bdd47a8ed765a6693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9e7e1f889d936857cefc8156a30fab2fea4bacd074288bdd47a8ed765a6693->enter($__internal_3d9e7e1f889d936857cefc8156a30fab2fea4bacd074288bdd47a8ed765a6693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79ac014e266cd788cfc2de37af696babf4a2daed365cec68e6a52f7522d09285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ac014e266cd788cfc2de37af696babf4a2daed365cec68e6a52f7522d09285->enter($__internal_79ac014e266cd788cfc2de37af696babf4a2daed365cec68e6a52f7522d09285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Province ";
        
        $__internal_79ac014e266cd788cfc2de37af696babf4a2daed365cec68e6a52f7522d09285->leave($__internal_79ac014e266cd788cfc2de37af696babf4a2daed365cec68e6a52f7522d09285_prof);

        
        $__internal_3d9e7e1f889d936857cefc8156a30fab2fea4bacd074288bdd47a8ed765a6693->leave($__internal_3d9e7e1f889d936857cefc8156a30fab2fea4bacd074288bdd47a8ed765a6693_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e599ba62ca8cf42c021c78d224cc2be4b2ac02a96c0cbc110a47c17875dfa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e599ba62ca8cf42c021c78d224cc2be4b2ac02a96c0cbc110a47c17875dfa3->enter($__internal_f8e599ba62ca8cf42c021c78d224cc2be4b2ac02a96c0cbc110a47c17875dfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9af2da4a7d05c88999a7003d27b09b6e1539a6c2a6f0212f4bd2c6452f1ce83f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af2da4a7d05c88999a7003d27b09b6e1539a6c2a6f0212f4bd2c6452f1ce83f->enter($__internal_9af2da4a7d05c88999a7003d27b09b6e1539a6c2a6f0212f4bd2c6452f1ce83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9af2da4a7d05c88999a7003d27b09b6e1539a6c2a6f0212f4bd2c6452f1ce83f->leave($__internal_9af2da4a7d05c88999a7003d27b09b6e1539a6c2a6f0212f4bd2c6452f1ce83f_prof);

        
        $__internal_f8e599ba62ca8cf42c021c78d224cc2be4b2ac02a96c0cbc110a47c17875dfa3->leave($__internal_f8e599ba62ca8cf42c021c78d224cc2be4b2ac02a96c0cbc110a47c17875dfa3_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtProvince/add.html.twig";
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
{% endblock %}", "@Admin/CtProvince/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtProvince\\add.html.twig");
    }
}
