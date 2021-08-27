<?php

/* @Admin/CtVisiteExtraTarif/add.html.twig */
class __TwigTemplate_f739f24bc53f57fc8ed5640d7e6a29df48a1104017cd677630e47f5eae3ae978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisiteExtraTarif/add.html.twig", 1);
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
        $__internal_94401e6ac9109cc7b1b0803eba70f8abeb2dc2ac005c9058f26d825f08f2f7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94401e6ac9109cc7b1b0803eba70f8abeb2dc2ac005c9058f26d825f08f2f7d6->enter($__internal_94401e6ac9109cc7b1b0803eba70f8abeb2dc2ac005c9058f26d825f08f2f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/add.html.twig"));

        $__internal_437e89b3d8253567a40f0c2975645dd0d79423c4831f034b5367c604b103adb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437e89b3d8253567a40f0c2975645dd0d79423c4831f034b5367c604b103adb3->enter($__internal_437e89b3d8253567a40f0c2975645dd0d79423c4831f034b5367c604b103adb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtVisiteExtraTarif/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_visite_extra"] = true;
        // line 8
        $context["menu_visite_extra_tarif"] = true;
        // line 9
        $context["menu_visite_extra_tarif_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94401e6ac9109cc7b1b0803eba70f8abeb2dc2ac005c9058f26d825f08f2f7d6->leave($__internal_94401e6ac9109cc7b1b0803eba70f8abeb2dc2ac005c9058f26d825f08f2f7d6_prof);

        
        $__internal_437e89b3d8253567a40f0c2975645dd0d79423c4831f034b5367c604b103adb3->leave($__internal_437e89b3d8253567a40f0c2975645dd0d79423c4831f034b5367c604b103adb3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b2f0c5e65f028b828901ff685691ae94f03e0b3f51c4eb462187f8699bf586e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2f0c5e65f028b828901ff685691ae94f03e0b3f51c4eb462187f8699bf586e->enter($__internal_0b2f0c5e65f028b828901ff685691ae94f03e0b3f51c4eb462187f8699bf586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a022d12f2ecebfa2c5e772a36173442a308d325a2ecfe392de2e2a1485ceef47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a022d12f2ecebfa2c5e772a36173442a308d325a2ecfe392de2e2a1485ceef47->enter($__internal_a022d12f2ecebfa2c5e772a36173442a308d325a2ecfe392de2e2a1485ceef47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Tarif Visite Extra ";
        
        $__internal_a022d12f2ecebfa2c5e772a36173442a308d325a2ecfe392de2e2a1485ceef47->leave($__internal_a022d12f2ecebfa2c5e772a36173442a308d325a2ecfe392de2e2a1485ceef47_prof);

        
        $__internal_0b2f0c5e65f028b828901ff685691ae94f03e0b3f51c4eb462187f8699bf586e->leave($__internal_0b2f0c5e65f028b828901ff685691ae94f03e0b3f51c4eb462187f8699bf586e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46913760a20b84cf86e79618629ecdba0f33e94fdb0480ac57ac38f2696879d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46913760a20b84cf86e79618629ecdba0f33e94fdb0480ac57ac38f2696879d1->enter($__internal_46913760a20b84cf86e79618629ecdba0f33e94fdb0480ac57ac38f2696879d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba5ff6dc174ef8f3707820a9962b60e89aa5f0ab5de09dd08e79df4f69c5c9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5ff6dc174ef8f3707820a9962b60e89aa5f0ab5de09dd08e79df4f69c5c9fb->enter($__internal_ba5ff6dc174ef8f3707820a9962b60e89aa5f0ab5de09dd08e79df4f69c5c9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vetPrix", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
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
        
        $__internal_ba5ff6dc174ef8f3707820a9962b60e89aa5f0ab5de09dd08e79df4f69c5c9fb->leave($__internal_ba5ff6dc174ef8f3707820a9962b60e89aa5f0ab5de09dd08e79df4f69c5c9fb_prof);

        
        $__internal_46913760a20b84cf86e79618629ecdba0f33e94fdb0480ac57ac38f2696879d1->leave($__internal_46913760a20b84cf86e79618629ecdba0f33e94fdb0480ac57ac38f2696879d1_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtVisiteExtraTarif/add.html.twig";
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

{% block title %}{{ parent() }} Ajout Tarif Visite Extra {% endblock %}

{% set menu_visite_extra = true %}
{% set menu_visite_extra_tarif = true %}
{% set menu_visite_extra_tarif_create = true %}

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
                        <h3 class=\"box-title\">Ajouter tarif visite extra</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.ctVisiteExtra) }}
                        {{ form_row(form.vetPrix) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite_extra\"/>
                        <a href=\"{{ path('visite_extra_tarif_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtVisiteExtraTarif/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisiteExtraTarif\\add.html.twig");
    }
}
