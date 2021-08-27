<?php

/* AdminBundle:CtUtilisation:add.html.twig */
class __TwigTemplate_80caa838f05ef3279014217da05c34201d8b3fadc8eb5f121135896b866da32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:add.html.twig", 1);
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
        $__internal_db8bde440d176bce1814decd1fac0fff9faec304cda57531d6c99f1208060856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8bde440d176bce1814decd1fac0fff9faec304cda57531d6c99f1208060856->enter($__internal_db8bde440d176bce1814decd1fac0fff9faec304cda57531d6c99f1208060856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:add.html.twig"));

        $__internal_a8151503051254ef8cc0dd9e6c8cb62279f6abc3312681b256cda2e444d9b3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8151503051254ef8cc0dd9e6c8cb62279f6abc3312681b256cda2e444d9b3bb->enter($__internal_a8151503051254ef8cc0dd9e6c8cb62279f6abc3312681b256cda2e444d9b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_utilisation"] = true;
        // line 8
        $context["menu_utilisation_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8bde440d176bce1814decd1fac0fff9faec304cda57531d6c99f1208060856->leave($__internal_db8bde440d176bce1814decd1fac0fff9faec304cda57531d6c99f1208060856_prof);

        
        $__internal_a8151503051254ef8cc0dd9e6c8cb62279f6abc3312681b256cda2e444d9b3bb->leave($__internal_a8151503051254ef8cc0dd9e6c8cb62279f6abc3312681b256cda2e444d9b3bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac203ca07957fc1b85c3db2f78c83aaaf1272df262d514866e1ca62eef1a138e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac203ca07957fc1b85c3db2f78c83aaaf1272df262d514866e1ca62eef1a138e->enter($__internal_ac203ca07957fc1b85c3db2f78c83aaaf1272df262d514866e1ca62eef1a138e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba91b46cbd2939d42d9d579efe1cd1b15b3ba342f2b7c59a60a1f848e0b84040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba91b46cbd2939d42d9d579efe1cd1b15b3ba342f2b7c59a60a1f848e0b84040->enter($__internal_ba91b46cbd2939d42d9d579efe1cd1b15b3ba342f2b7c59a60a1f848e0b84040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Catégorie ";
        
        $__internal_ba91b46cbd2939d42d9d579efe1cd1b15b3ba342f2b7c59a60a1f848e0b84040->leave($__internal_ba91b46cbd2939d42d9d579efe1cd1b15b3ba342f2b7c59a60a1f848e0b84040_prof);

        
        $__internal_ac203ca07957fc1b85c3db2f78c83aaaf1272df262d514866e1ca62eef1a138e->leave($__internal_ac203ca07957fc1b85c3db2f78c83aaaf1272df262d514866e1ca62eef1a138e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d489d0cbe367f3388ce8f3a416577f2fbef76878c121a8bb9efb3de5725eb155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d489d0cbe367f3388ce8f3a416577f2fbef76878c121a8bb9efb3de5725eb155->enter($__internal_d489d0cbe367f3388ce8f3a416577f2fbef76878c121a8bb9efb3de5725eb155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f970b720af773dc9a8e7b22e3f502d878ee861b61e11aff269d605e8473d4c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f970b720af773dc9a8e7b22e3f502d878ee861b61e11aff269d605e8473d4c3a->enter($__internal_f970b720af773dc9a8e7b22e3f502d878ee861b61e11aff269d605e8473d4c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "utLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
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
        
        $__internal_f970b720af773dc9a8e7b22e3f502d878ee861b61e11aff269d605e8473d4c3a->leave($__internal_f970b720af773dc9a8e7b22e3f502d878ee861b61e11aff269d605e8473d4c3a_prof);

        
        $__internal_d489d0cbe367f3388ce8f3a416577f2fbef76878c121a8bb9efb3de5725eb155->leave($__internal_d489d0cbe367f3388ce8f3a416577f2fbef76878c121a8bb9efb3de5725eb155_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:add.html.twig";
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

{% set menu_utilisation        = true %}
{% set menu_utilisation_create = true %}

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
                        <h3 class=\"box-title\">Créer une utilisation</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(form.utLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_utilisation\"/>
                        <a href=\"{{ path('utilisation_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\">
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtUtilisation:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/add.html.twig");
    }
}
