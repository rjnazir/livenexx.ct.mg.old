<?php

/* AdminBundle:CtMotifTarif:add.html.twig */
class __TwigTemplate_ce31bfb1a814cbb6fbeced6fe1b663fe9fa6f455c009db4276e748ff7ba735f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMotifTarif:add.html.twig", 1);
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
        $__internal_0f3086f206a16b960c9fe66280cb0d25f0c952e8b3afd8697186bb3cd30860da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3086f206a16b960c9fe66280cb0d25f0c952e8b3afd8697186bb3cd30860da->enter($__internal_0f3086f206a16b960c9fe66280cb0d25f0c952e8b3afd8697186bb3cd30860da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

        $__internal_1d4ea84a655e87a4de790fc2b83985b31372e5f8b7d079e868fdf1e956306a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4ea84a655e87a4de790fc2b83985b31372e5f8b7d079e868fdf1e956306a09->enter($__internal_1d4ea84a655e87a4de790fc2b83985b31372e5f8b7d079e868fdf1e956306a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMotifTarif:add.html.twig"));

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
        
        $__internal_0f3086f206a16b960c9fe66280cb0d25f0c952e8b3afd8697186bb3cd30860da->leave($__internal_0f3086f206a16b960c9fe66280cb0d25f0c952e8b3afd8697186bb3cd30860da_prof);

        
        $__internal_1d4ea84a655e87a4de790fc2b83985b31372e5f8b7d079e868fdf1e956306a09->leave($__internal_1d4ea84a655e87a4de790fc2b83985b31372e5f8b7d079e868fdf1e956306a09_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80ffd173cbfb19d5b70fcb9b1e6d4c483cc787a4f6e33349c8125fd843e87b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ffd173cbfb19d5b70fcb9b1e6d4c483cc787a4f6e33349c8125fd843e87b71->enter($__internal_80ffd173cbfb19d5b70fcb9b1e6d4c483cc787a4f6e33349c8125fd843e87b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2afedb748f03efa42ec02dabf87ba79dc2ec15e1f7db8575764661d5176beb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afedb748f03efa42ec02dabf87ba79dc2ec15e1f7db8575764661d5176beb87->enter($__internal_2afedb748f03efa42ec02dabf87ba79dc2ec15e1f7db8575764661d5176beb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif motif ";
        
        $__internal_2afedb748f03efa42ec02dabf87ba79dc2ec15e1f7db8575764661d5176beb87->leave($__internal_2afedb748f03efa42ec02dabf87ba79dc2ec15e1f7db8575764661d5176beb87_prof);

        
        $__internal_80ffd173cbfb19d5b70fcb9b1e6d4c483cc787a4f6e33349c8125fd843e87b71->leave($__internal_80ffd173cbfb19d5b70fcb9b1e6d4c483cc787a4f6e33349c8125fd843e87b71_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae05f035935c6354a45ce54474587b39f3e9f51508d525d00e8df49fcdccd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae05f035935c6354a45ce54474587b39f3e9f51508d525d00e8df49fcdccd00->enter($__internal_8ae05f035935c6354a45ce54474587b39f3e9f51508d525d00e8df49fcdccd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fca7ed770f740da81c6f00b5795b05ae7e4c61ede2fded2ecec291a6afac6571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca7ed770f740da81c6f00b5795b05ae7e4c61ede2fded2ecec291a6afac6571->enter($__internal_fca7ed770f740da81c6f00b5795b05ae7e4c61ede2fded2ecec291a6afac6571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fca7ed770f740da81c6f00b5795b05ae7e4c61ede2fded2ecec291a6afac6571->leave($__internal_fca7ed770f740da81c6f00b5795b05ae7e4c61ede2fded2ecec291a6afac6571_prof);

        
        $__internal_8ae05f035935c6354a45ce54474587b39f3e9f51508d525d00e8df49fcdccd00->leave($__internal_8ae05f035935c6354a45ce54474587b39f3e9f51508d525d00e8df49fcdccd00_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMotifTarif:add.html.twig";
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
{% endblock %}", "AdminBundle:CtMotifTarif:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMotifTarif/add.html.twig");
    }
}
