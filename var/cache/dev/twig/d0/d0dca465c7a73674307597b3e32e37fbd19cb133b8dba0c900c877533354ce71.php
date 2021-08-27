<?php

/* @Admin/CtCarosserie/add.html.twig */
class __TwigTemplate_11c944766529b8f72d23425cad811fb8eb6797e0c77e438abfb00c3f4d1d7e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtCarosserie/add.html.twig", 1);
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
        $__internal_8f89a4d2a63bbf860ba0fcc13d221b3cb921fec011082eae6d8c551f9f77b718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f89a4d2a63bbf860ba0fcc13d221b3cb921fec011082eae6d8c551f9f77b718->enter($__internal_8f89a4d2a63bbf860ba0fcc13d221b3cb921fec011082eae6d8c551f9f77b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        $__internal_da6c5ce24c6463b85cff878d72644c97068e9a70a0fcdf7032f6015257c95fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6c5ce24c6463b85cff878d72644c97068e9a70a0fcdf7032f6015257c95fd2->enter($__internal_da6c5ce24c6463b85cff878d72644c97068e9a70a0fcdf7032f6015257c95fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtCarosserie/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f89a4d2a63bbf860ba0fcc13d221b3cb921fec011082eae6d8c551f9f77b718->leave($__internal_8f89a4d2a63bbf860ba0fcc13d221b3cb921fec011082eae6d8c551f9f77b718_prof);

        
        $__internal_da6c5ce24c6463b85cff878d72644c97068e9a70a0fcdf7032f6015257c95fd2->leave($__internal_da6c5ce24c6463b85cff878d72644c97068e9a70a0fcdf7032f6015257c95fd2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e7d8eccc5f705bc5ac6c27136d00b9485d5590ff811b408d378c63ffbab88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e7d8eccc5f705bc5ac6c27136d00b9485d5590ff811b408d378c63ffbab88d->enter($__internal_72e7d8eccc5f705bc5ac6c27136d00b9485d5590ff811b408d378c63ffbab88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f7e87f4907eadc60916dc3fb0cd2be96b21f392645432f9d5c8515e7f4fe5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7e87f4907eadc60916dc3fb0cd2be96b21f392645432f9d5c8515e7f4fe5b5->enter($__internal_2f7e87f4907eadc60916dc3fb0cd2be96b21f392645432f9d5c8515e7f4fe5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Carroserie ";
        
        $__internal_2f7e87f4907eadc60916dc3fb0cd2be96b21f392645432f9d5c8515e7f4fe5b5->leave($__internal_2f7e87f4907eadc60916dc3fb0cd2be96b21f392645432f9d5c8515e7f4fe5b5_prof);

        
        $__internal_72e7d8eccc5f705bc5ac6c27136d00b9485d5590ff811b408d378c63ffbab88d->leave($__internal_72e7d8eccc5f705bc5ac6c27136d00b9485d5590ff811b408d378c63ffbab88d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a33dac57b808ad6e46f29c7b81686d1928f66f27132a2bc4835231487a9a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a33dac57b808ad6e46f29c7b81686d1928f66f27132a2bc4835231487a9a1f->enter($__internal_39a33dac57b808ad6e46f29c7b81686d1928f66f27132a2bc4835231487a9a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_344529d98440ba5c178e8e15aff73e029714649e96bf6b684eee77a2d2f20d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344529d98440ba5c178e8e15aff73e029714649e96bf6b684eee77a2d2f20d66->enter($__internal_344529d98440ba5c178e8e15aff73e029714649e96bf6b684eee77a2d2f20d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
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
        
        $__internal_344529d98440ba5c178e8e15aff73e029714649e96bf6b684eee77a2d2f20d66->leave($__internal_344529d98440ba5c178e8e15aff73e029714649e96bf6b684eee77a2d2f20d66_prof);

        
        $__internal_39a33dac57b808ad6e46f29c7b81686d1928f66f27132a2bc4835231487a9a1f->leave($__internal_39a33dac57b808ad6e46f29c7b81686d1928f66f27132a2bc4835231487a9a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtCarosserie/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Carroserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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
                        <h3 class=\"box-title\">Créer une carrosserie</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtCarosserie/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtCarosserie\\add.html.twig");
    }
}
