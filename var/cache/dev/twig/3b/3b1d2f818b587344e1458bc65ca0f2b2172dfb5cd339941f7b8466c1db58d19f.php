<?php

/* @Admin/CtMotifTarif/add.html.twig */
class __TwigTemplate_0416e92329156041d5c48a3b077f9e6c6cd2c90ea43259328b86b4e6e8429f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/add.html.twig", 1);
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
        $__internal_21f77f2b78a22a9a3b8a38772915575ceb1eebfe45bef18a90448a129d1d6f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f77f2b78a22a9a3b8a38772915575ceb1eebfe45bef18a90448a129d1d6f06->enter($__internal_21f77f2b78a22a9a3b8a38772915575ceb1eebfe45bef18a90448a129d1d6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        $__internal_7331aef7ac3e20f6c42de3d8c1b59e2e2bfde8bf522494b7d279965c6d65e4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7331aef7ac3e20f6c42de3d8c1b59e2e2bfde8bf522494b7d279965c6d65e4eb->enter($__internal_7331aef7ac3e20f6c42de3d8c1b59e2e2bfde8bf522494b7d279965c6d65e4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_motif"] = true;
        // line 8
        $context["menu_motif_tarif"] = true;
        // line 9
        $context["menu_motif_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f77f2b78a22a9a3b8a38772915575ceb1eebfe45bef18a90448a129d1d6f06->leave($__internal_21f77f2b78a22a9a3b8a38772915575ceb1eebfe45bef18a90448a129d1d6f06_prof);

        
        $__internal_7331aef7ac3e20f6c42de3d8c1b59e2e2bfde8bf522494b7d279965c6d65e4eb->leave($__internal_7331aef7ac3e20f6c42de3d8c1b59e2e2bfde8bf522494b7d279965c6d65e4eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8db2fde64778e60615f37e6b99d0f61439f928e150855aa2676396b453b9039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8db2fde64778e60615f37e6b99d0f61439f928e150855aa2676396b453b9039->enter($__internal_c8db2fde64778e60615f37e6b99d0f61439f928e150855aa2676396b453b9039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d2276c740331739de3c71a470a737d187ee1e8b5d38409ad3be821ebaf27df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2276c740331739de3c71a470a737d187ee1e8b5d38409ad3be821ebaf27df0->enter($__internal_5d2276c740331739de3c71a470a737d187ee1e8b5d38409ad3be821ebaf27df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_5d2276c740331739de3c71a470a737d187ee1e8b5d38409ad3be821ebaf27df0->leave($__internal_5d2276c740331739de3c71a470a737d187ee1e8b5d38409ad3be821ebaf27df0_prof);

        
        $__internal_c8db2fde64778e60615f37e6b99d0f61439f928e150855aa2676396b453b9039->leave($__internal_c8db2fde64778e60615f37e6b99d0f61439f928e150855aa2676396b453b9039_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56c44d119ba90edac5ac23853dde5b96c8500db8b19f2e35639934da21ec3058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c44d119ba90edac5ac23853dde5b96c8500db8b19f2e35639934da21ec3058->enter($__internal_56c44d119ba90edac5ac23853dde5b96c8500db8b19f2e35639934da21ec3058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6d4203159ca542d1f186ade4b87ee2f111150eab01bf94b14bd8b73f2b087ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d4203159ca542d1f186ade4b87ee2f111150eab01bf94b14bd8b73f2b087ea->enter($__internal_e6d4203159ca542d1f186ade4b87ee2f111150eab01bf94b14bd8b73f2b087ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctMotif", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mtfTrfPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
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
        
        $__internal_e6d4203159ca542d1f186ade4b87ee2f111150eab01bf94b14bd8b73f2b087ea->leave($__internal_e6d4203159ca542d1f186ade4b87ee2f111150eab01bf94b14bd8b73f2b087ea_prof);

        
        $__internal_56c44d119ba90edac5ac23853dde5b96c8500db8b19f2e35639934da21ec3058->leave($__internal_56c44d119ba90edac5ac23853dde5b96c8500db8b19f2e35639934da21ec3058_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 43,  139 => 38,  131 => 33,  127 => 32,  118 => 26,  112 => 22,  103 => 19,  100 => 18,  95 => 17,  86 => 14,  83 => 13,  78 => 12,  69 => 11,  50 => 5,  40 => 1,  38 => 9,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} Ajout Tarif motif {% endblock %}

{% set menu_motif = true %}
{% set menu_motif_tarif = true %}
{% set menu_motif_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif motif</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctMotif) }}
                        {{ form_row(form.mtfTrfPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
                        <a href=\"{{ path('motif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtMotifTarif/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\add.html.twig");
    }
}
