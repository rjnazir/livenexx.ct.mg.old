<?php

/* UserBundle:Email:email_link_validation.html.twig */
class __TwigTemplate_e4fd12edc095c0e8c011c84db2ff2aa56c99babd46939a7211ce582b42ce679f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "UserBundle:Email:email_link_validation.html.twig", 1);
        $this->blocks = array(
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutEmail.email.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e530835b4b1c2ca67f845734e470c837f91489f476856c320289ece7db63a157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e530835b4b1c2ca67f845734e470c837f91489f476856c320289ece7db63a157->enter($__internal_e530835b4b1c2ca67f845734e470c837f91489f476856c320289ece7db63a157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $__internal_3fac48faef2c5002266f1177e58ab2bc885d7f2bba63d02d9fb4723aa65744eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fac48faef2c5002266f1177e58ab2bc885d7f2bba63d02d9fb4723aa65744eb->enter($__internal_3fac48faef2c5002266f1177e58ab2bc885d7f2bba63d02d9fb4723aa65744eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e530835b4b1c2ca67f845734e470c837f91489f476856c320289ece7db63a157->leave($__internal_e530835b4b1c2ca67f845734e470c837f91489f476856c320289ece7db63a157_prof);

        
        $__internal_3fac48faef2c5002266f1177e58ab2bc885d7f2bba63d02d9fb4723aa65744eb->leave($__internal_3fac48faef2c5002266f1177e58ab2bc885d7f2bba63d02d9fb4723aa65744eb_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_f00a5f2538652f0464b43b0d9953c81d2713a156b7f4cb01b693ac613de2123d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f00a5f2538652f0464b43b0d9953c81d2713a156b7f4cb01b693ac613de2123d->enter($__internal_f00a5f2538652f0464b43b0d9953c81d2713a156b7f4cb01b693ac613de2123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_bf41df351d2532f29092633162a452d3a3b6c547faea587758a1560a50189d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf41df351d2532f29092633162a452d3a3b6c547faea587758a1560a50189d28->enter($__internal_bf41df351d2532f29092633162a452d3a3b6c547faea587758a1560a50189d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 4
        echo "\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo ",</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">
            <br><br>Cliquer sur le lien pour valider votre compte :
        </p>

        <table>
            <tr>
                <td>Lien</td>
                <td>:</td>
                <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
        echo "\" title=\"Cliquez-ici\">Valider compte</a></td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
";
        
        $__internal_bf41df351d2532f29092633162a452d3a3b6c547faea587758a1560a50189d28->leave($__internal_bf41df351d2532f29092633162a452d3a3b6c547faea587758a1560a50189d28_prof);

        
        $__internal_f00a5f2538652f0464b43b0d9953c81d2713a156b7f4cb01b693ac613de2123d->leave($__internal_f00a5f2538652f0464b43b0d9953c81d2713a156b7f4cb01b693ac613de2123d_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_445dbc007414f773a90f64427610b5f3410d35c37fb0b974f8b2fa9355c8830b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445dbc007414f773a90f64427610b5f3410d35c37fb0b974f8b2fa9355c8830b->enter($__internal_445dbc007414f773a90f64427610b5f3410d35c37fb0b974f8b2fa9355c8830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_b6ce4a65a4169febbd0f8e52cb4672cbeba482d3deea4346ea5b6cff828c2924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ce4a65a4169febbd0f8e52cb4672cbeba482d3deea4346ea5b6cff828c2924->enter($__internal_b6ce4a65a4169febbd0f8e52cb4672cbeba482d3deea4346ea5b6cff828c2924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_b6ce4a65a4169febbd0f8e52cb4672cbeba482d3deea4346ea5b6cff828c2924->leave($__internal_b6ce4a65a4169febbd0f8e52cb4672cbeba482d3deea4346ea5b6cff828c2924_prof);

        
        $__internal_445dbc007414f773a90f64427610b5f3410d35c37fb0b974f8b2fa9355c8830b->leave($__internal_445dbc007414f773a90f64427610b5f3410d35c37fb0b974f8b2fa9355c8830b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Email:email_link_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  65 => 14,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutEmail.email.twig' %}

{% block body_html_content %}
\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour {{ user.firstname }},</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">
            <br><br>Cliquer sur le lien pour valider votre compte :
        </p>

        <table>
            <tr>
                <td>Lien</td>
                <td>:</td>
                <td><a href=\"{{ link }}\" title=\"Cliquez-ici\">Valider compte</a></td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
{% endblock %}

{% block body_html_footer_action %}
{% endblock %}", "UserBundle:Email:email_link_validation.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Email/email_link_validation.html.twig");
    }
}
