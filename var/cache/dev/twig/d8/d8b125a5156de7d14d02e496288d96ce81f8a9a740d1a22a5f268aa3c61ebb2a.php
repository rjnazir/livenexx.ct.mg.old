<?php

/* AdminBundle:CtRole:edit.html.twig */
class __TwigTemplate_f8dde148425a4bdab4ac7c3400d6b37ca001f67ca139d69f9eb83702cfe35e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:edit.html.twig", 1);
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
        $__internal_8c0a7f209db82f2d5b77c295a6af0be3b30691fe19896a884fbdb6eda253ab78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0a7f209db82f2d5b77c295a6af0be3b30691fe19896a884fbdb6eda253ab78->enter($__internal_8c0a7f209db82f2d5b77c295a6af0be3b30691fe19896a884fbdb6eda253ab78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        $__internal_9ad964c0a749f9525a04f2904c5ac0fd855c32cd0c082a4a96efc5117e1b32e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad964c0a749f9525a04f2904c5ac0fd855c32cd0c082a4a96efc5117e1b32e3->enter($__internal_9ad964c0a749f9525a04f2904c5ac0fd855c32cd0c082a4a96efc5117e1b32e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c0a7f209db82f2d5b77c295a6af0be3b30691fe19896a884fbdb6eda253ab78->leave($__internal_8c0a7f209db82f2d5b77c295a6af0be3b30691fe19896a884fbdb6eda253ab78_prof);

        
        $__internal_9ad964c0a749f9525a04f2904c5ac0fd855c32cd0c082a4a96efc5117e1b32e3->leave($__internal_9ad964c0a749f9525a04f2904c5ac0fd855c32cd0c082a4a96efc5117e1b32e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11ae82d37ac9e7b2c72356454515bab06910a4fa2d41ba2d0c77c40cba0be031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ae82d37ac9e7b2c72356454515bab06910a4fa2d41ba2d0c77c40cba0be031->enter($__internal_11ae82d37ac9e7b2c72356454515bab06910a4fa2d41ba2d0c77c40cba0be031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4942c3efecb9d6e1ba67db0dbce2b62a4268014d4ce684f45a478974321ad5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4942c3efecb9d6e1ba67db0dbce2b62a4268014d4ce684f45a478974321ad5aa->enter($__internal_4942c3efecb9d6e1ba67db0dbce2b62a4268014d4ce684f45a478974321ad5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Catégorie ";
        
        $__internal_4942c3efecb9d6e1ba67db0dbce2b62a4268014d4ce684f45a478974321ad5aa->leave($__internal_4942c3efecb9d6e1ba67db0dbce2b62a4268014d4ce684f45a478974321ad5aa_prof);

        
        $__internal_11ae82d37ac9e7b2c72356454515bab06910a4fa2d41ba2d0c77c40cba0be031->leave($__internal_11ae82d37ac9e7b2c72356454515bab06910a4fa2d41ba2d0c77c40cba0be031_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e11ac9436af7438aa875c33730366cfd84ed84ce19af5f64ebcb6c6ebb22cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e11ac9436af7438aa875c33730366cfd84ed84ce19af5f64ebcb6c6ebb22cf4->enter($__internal_5e11ac9436af7438aa875c33730366cfd84ed84ce19af5f64ebcb6c6ebb22cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a05091a59e930f29ff4ad04620e4d1d386c90d8e4fbd1bffa40a43721b2fdbe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05091a59e930f29ff4ad04620e4d1d386c90d8e4fbd1bffa40a43721b2fdbe2->enter($__internal_a05091a59e930f29ff4ad04620e4d1d386c90d8e4fbd1bffa40a43721b2fdbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_a05091a59e930f29ff4ad04620e4d1d386c90d8e4fbd1bffa40a43721b2fdbe2->leave($__internal_a05091a59e930f29ff4ad04620e4d1d386c90d8e4fbd1bffa40a43721b2fdbe2_prof);

        
        $__internal_5e11ac9436af7438aa875c33730366cfd84ed84ce19af5f64ebcb6c6ebb22cf4->leave($__internal_5e11ac9436af7438aa875c33730366cfd84ed84ce19af5f64ebcb6c6ebb22cf4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:edit.html.twig";
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Catégorie {% endblock %}

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
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtRole:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/edit.html.twig");
    }
}
