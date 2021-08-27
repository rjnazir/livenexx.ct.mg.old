<?php

/* @Admin/CtCentre/add.html.twig */
class __TwigTemplate_9a19c043b15c440bcf4e47bfa3cb72492ad5b474980aa14e67d68ec584a513aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCentre/add.html.twig", 1);
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
        $__internal_e2dda7f6a63a28bc878240f853a350f9de69b6d550de7fb81f91bdf75b3f3666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2dda7f6a63a28bc878240f853a350f9de69b6d550de7fb81f91bdf75b3f3666->enter($__internal_e2dda7f6a63a28bc878240f853a350f9de69b6d550de7fb81f91bdf75b3f3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/add.html.twig"));

        $__internal_047d34727492edb61d3af97a4c25d2ce54e0f52dd64e678ff4330a23e37770de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047d34727492edb61d3af97a4c25d2ce54e0f52dd64e678ff4330a23e37770de->enter($__internal_047d34727492edb61d3af97a4c25d2ce54e0f52dd64e678ff4330a23e37770de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCentre/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_centre"] = true;
        // line 8
        $context["menu_centre_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2dda7f6a63a28bc878240f853a350f9de69b6d550de7fb81f91bdf75b3f3666->leave($__internal_e2dda7f6a63a28bc878240f853a350f9de69b6d550de7fb81f91bdf75b3f3666_prof);

        
        $__internal_047d34727492edb61d3af97a4c25d2ce54e0f52dd64e678ff4330a23e37770de->leave($__internal_047d34727492edb61d3af97a4c25d2ce54e0f52dd64e678ff4330a23e37770de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c95cb778ae16a7e2b5a60f626562af1011f0f6ccedea664ccd20086aeb9b9a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95cb778ae16a7e2b5a60f626562af1011f0f6ccedea664ccd20086aeb9b9a68->enter($__internal_c95cb778ae16a7e2b5a60f626562af1011f0f6ccedea664ccd20086aeb9b9a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91da221821677ec5dca19e580322082cb1c27b091d9af9a8ecc73c67e66a7bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91da221821677ec5dca19e580322082cb1c27b091d9af9a8ecc73c67e66a7bb8->enter($__internal_91da221821677ec5dca19e580322082cb1c27b091d9af9a8ecc73c67e66a7bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Centre ";
        
        $__internal_91da221821677ec5dca19e580322082cb1c27b091d9af9a8ecc73c67e66a7bb8->leave($__internal_91da221821677ec5dca19e580322082cb1c27b091d9af9a8ecc73c67e66a7bb8_prof);

        
        $__internal_c95cb778ae16a7e2b5a60f626562af1011f0f6ccedea664ccd20086aeb9b9a68->leave($__internal_c95cb778ae16a7e2b5a60f626562af1011f0f6ccedea664ccd20086aeb9b9a68_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98caabf0a8dff7e560bc3fb7ddca96c6d3200456336fbc097d0927d80fe3cabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98caabf0a8dff7e560bc3fb7ddca96c6d3200456336fbc097d0927d80fe3cabc->enter($__internal_98caabf0a8dff7e560bc3fb7ddca96c6d3200456336fbc097d0927d80fe3cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86a7632900755be7a86b492a27ea21065c53dc561fdbeb95c6e0f252ab028468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a7632900755be7a86b492a27ea21065c53dc561fdbeb95c6e0f252ab028468->enter($__internal_86a7632900755be7a86b492a27ea21065c53dc561fdbeb95c6e0f252ab028468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86a7632900755be7a86b492a27ea21065c53dc561fdbeb95c6e0f252ab028468->leave($__internal_86a7632900755be7a86b492a27ea21065c53dc561fdbeb95c6e0f252ab028468_prof);

        
        $__internal_98caabf0a8dff7e560bc3fb7ddca96c6d3200456336fbc097d0927d80fe3cabc->leave($__internal_98caabf0a8dff7e560bc3fb7ddca96c6d3200456336fbc097d0927d80fe3cabc_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCentre/add.html.twig";
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
{% endblock %}", "@Admin/CtCentre/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCentre\\add.html.twig");
    }
}
