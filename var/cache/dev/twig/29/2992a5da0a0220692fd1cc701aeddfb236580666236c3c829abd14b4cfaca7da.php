<?php

/* AdminBundle:CtRole:add.html.twig */
class __TwigTemplate_74881c3deff01622a745954f4bc559455136bdbe9dbb1ebe2bd213fa88bd2176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:add.html.twig", 1);
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
        $__internal_6acb910e31a3fc9c9de619bdda36cb524d53be5fb3c2600458bbc44c06557c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6acb910e31a3fc9c9de619bdda36cb524d53be5fb3c2600458bbc44c06557c3a->enter($__internal_6acb910e31a3fc9c9de619bdda36cb524d53be5fb3c2600458bbc44c06557c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        $__internal_ddc3a542045fb2ab14d285df5f419b097324b1a66ff8e2e22bcf0775b23f7f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc3a542045fb2ab14d285df5f419b097324b1a66ff8e2e22bcf0775b23f7f06->enter($__internal_ddc3a542045fb2ab14d285df5f419b097324b1a66ff8e2e22bcf0775b23f7f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6acb910e31a3fc9c9de619bdda36cb524d53be5fb3c2600458bbc44c06557c3a->leave($__internal_6acb910e31a3fc9c9de619bdda36cb524d53be5fb3c2600458bbc44c06557c3a_prof);

        
        $__internal_ddc3a542045fb2ab14d285df5f419b097324b1a66ff8e2e22bcf0775b23f7f06->leave($__internal_ddc3a542045fb2ab14d285df5f419b097324b1a66ff8e2e22bcf0775b23f7f06_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a663fd66a3b4ba0eae6d366ae1f90728216750c7487922fe2421fd39bc5af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a663fd66a3b4ba0eae6d366ae1f90728216750c7487922fe2421fd39bc5af2->enter($__internal_89a663fd66a3b4ba0eae6d366ae1f90728216750c7487922fe2421fd39bc5af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1556a834f99b5d7946cc2d76dc6f8f69d4a85f025a69f4e30bea753ae0c3e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1556a834f99b5d7946cc2d76dc6f8f69d4a85f025a69f4e30bea753ae0c3e8ae->enter($__internal_1556a834f99b5d7946cc2d76dc6f8f69d4a85f025a69f4e30bea753ae0c3e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Rôle ";
        
        $__internal_1556a834f99b5d7946cc2d76dc6f8f69d4a85f025a69f4e30bea753ae0c3e8ae->leave($__internal_1556a834f99b5d7946cc2d76dc6f8f69d4a85f025a69f4e30bea753ae0c3e8ae_prof);

        
        $__internal_89a663fd66a3b4ba0eae6d366ae1f90728216750c7487922fe2421fd39bc5af2->leave($__internal_89a663fd66a3b4ba0eae6d366ae1f90728216750c7487922fe2421fd39bc5af2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d2110233d57f02102f7a4d4fdd432ea414729f1c6994729bd21cbe538c63453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2110233d57f02102f7a4d4fdd432ea414729f1c6994729bd21cbe538c63453->enter($__internal_3d2110233d57f02102f7a4d4fdd432ea414729f1c6994729bd21cbe538c63453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3c5ac5f445542e77a6b87c340bdcea78f53f173322e89e12f145150ec1cd450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c5ac5f445542e77a6b87c340bdcea78f53f173322e89e12f145150ec1cd450->enter($__internal_f3c5ac5f445542e77a6b87c340bdcea78f53f173322e89e12f145150ec1cd450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3c5ac5f445542e77a6b87c340bdcea78f53f173322e89e12f145150ec1cd450->leave($__internal_f3c5ac5f445542e77a6b87c340bdcea78f53f173322e89e12f145150ec1cd450_prof);

        
        $__internal_3d2110233d57f02102f7a4d4fdd432ea414729f1c6994729bd21cbe538c63453->leave($__internal_3d2110233d57f02102f7a4d4fdd432ea414729f1c6994729bd21cbe538c63453_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:add.html.twig";
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
{% endblock %}", "AdminBundle:CtRole:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/add.html.twig");
    }
}
