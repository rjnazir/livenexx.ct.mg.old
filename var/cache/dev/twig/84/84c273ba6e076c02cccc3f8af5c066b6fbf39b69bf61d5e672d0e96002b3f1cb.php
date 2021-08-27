<?php

/* AdminBundle:CtMarque:edit.html.twig */
class __TwigTemplate_3ccd2331be96a3d4498026e2b61aafa28622023562a22eaf37044d3d067f6d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:edit.html.twig", 1);
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
        $__internal_2f06da855084a289460f28fb877d816a0e7f1af7b19ee1ed7c6ae4bc1aafb373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f06da855084a289460f28fb877d816a0e7f1af7b19ee1ed7c6ae4bc1aafb373->enter($__internal_2f06da855084a289460f28fb877d816a0e7f1af7b19ee1ed7c6ae4bc1aafb373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        $__internal_2e0cfd51d1c3652c421eba9a542367661b261cdfee5cf088b9eed24631c2c40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0cfd51d1c3652c421eba9a542367661b261cdfee5cf088b9eed24631c2c40c->enter($__internal_2e0cfd51d1c3652c421eba9a542367661b261cdfee5cf088b9eed24631c2c40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_marque"] = true;
        // line 8
        $context["menu_marque_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f06da855084a289460f28fb877d816a0e7f1af7b19ee1ed7c6ae4bc1aafb373->leave($__internal_2f06da855084a289460f28fb877d816a0e7f1af7b19ee1ed7c6ae4bc1aafb373_prof);

        
        $__internal_2e0cfd51d1c3652c421eba9a542367661b261cdfee5cf088b9eed24631c2c40c->leave($__internal_2e0cfd51d1c3652c421eba9a542367661b261cdfee5cf088b9eed24631c2c40c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38b56510072f153178f89732e263e5f3410fbf0b02d56cdff6ce03beb894a704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b56510072f153178f89732e263e5f3410fbf0b02d56cdff6ce03beb894a704->enter($__internal_38b56510072f153178f89732e263e5f3410fbf0b02d56cdff6ce03beb894a704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3557ddda484d85424287dcdffe59630317a184ee990ce43c648434721ffc31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3557ddda484d85424287dcdffe59630317a184ee990ce43c648434721ffc31b->enter($__internal_d3557ddda484d85424287dcdffe59630317a184ee990ce43c648434721ffc31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Marque ";
        
        $__internal_d3557ddda484d85424287dcdffe59630317a184ee990ce43c648434721ffc31b->leave($__internal_d3557ddda484d85424287dcdffe59630317a184ee990ce43c648434721ffc31b_prof);

        
        $__internal_38b56510072f153178f89732e263e5f3410fbf0b02d56cdff6ce03beb894a704->leave($__internal_38b56510072f153178f89732e263e5f3410fbf0b02d56cdff6ce03beb894a704_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_39b2fa6d85dfe0de486b507af45eb437efa7d1e6440c82f9f8a1759a02b54ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b2fa6d85dfe0de486b507af45eb437efa7d1e6440c82f9f8a1759a02b54ed0->enter($__internal_39b2fa6d85dfe0de486b507af45eb437efa7d1e6440c82f9f8a1759a02b54ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af97d07bcf1bcf21d2427adbfbc9dbb713b3a88c2680694703fe2d10ba43fbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af97d07bcf1bcf21d2427adbfbc9dbb713b3a88c2680694703fe2d10ba43fbdb->enter($__internal_af97d07bcf1bcf21d2427adbfbc9dbb713b3a88c2680694703fe2d10ba43fbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "mrqLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
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
        
        $__internal_af97d07bcf1bcf21d2427adbfbc9dbb713b3a88c2680694703fe2d10ba43fbdb->leave($__internal_af97d07bcf1bcf21d2427adbfbc9dbb713b3a88c2680694703fe2d10ba43fbdb_prof);

        
        $__internal_39b2fa6d85dfe0de486b507af45eb437efa7d1e6440c82f9f8a1759a02b54ed0->leave($__internal_39b2fa6d85dfe0de486b507af45eb437efa7d1e6440c82f9f8a1759a02b54ed0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:edit.html.twig";
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

{% block title %}{{ parent() }} Modification Marque {% endblock %}

{% set menu_marque        = true %}
{% set menu_marque_create = true %}

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
                        <h3 class=\"box-title\">Editer une marque</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.mrqLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_marque\"/>
                        <a href=\"{{ path('marque_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtMarque:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/edit.html.twig");
    }
}
