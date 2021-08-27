<?php

/* UserBundle:Email:emailUserRegister.html.twig */
class __TwigTemplate_4581a72ad6e94eb8ed7861d78e6a586f74f86500f97caf14323769e8a8135d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "UserBundle:Email:emailUserRegister.html.twig", 1);
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
        $__internal_20a7da21f30361b86ea0afe3e520ea07118e7f1f24e86d999d16385f330f4d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a7da21f30361b86ea0afe3e520ea07118e7f1f24e86d999d16385f330f4d1e->enter($__internal_20a7da21f30361b86ea0afe3e520ea07118e7f1f24e86d999d16385f330f4d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $__internal_ba0e53634af56d0fa9ddec35812cdff34ae31a6dc5a77694901f9c6ef3c14f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0e53634af56d0fa9ddec35812cdff34ae31a6dc5a77694901f9c6ef3c14f24->enter($__internal_ba0e53634af56d0fa9ddec35812cdff34ae31a6dc5a77694901f9c6ef3c14f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Email:emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a7da21f30361b86ea0afe3e520ea07118e7f1f24e86d999d16385f330f4d1e->leave($__internal_20a7da21f30361b86ea0afe3e520ea07118e7f1f24e86d999d16385f330f4d1e_prof);

        
        $__internal_ba0e53634af56d0fa9ddec35812cdff34ae31a6dc5a77694901f9c6ef3c14f24->leave($__internal_ba0e53634af56d0fa9ddec35812cdff34ae31a6dc5a77694901f9c6ef3c14f24_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_15d39b584ce609a919c3cf4797635851a1f3dddf8905279d37aede596cd86053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d39b584ce609a919c3cf4797635851a1f3dddf8905279d37aede596cd86053->enter($__internal_15d39b584ce609a919c3cf4797635851a1f3dddf8905279d37aede596cd86053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_e878b99127d9636aa97fc7a26f5200699f8d115b23dde5da8d1f784b0623604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e878b99127d9636aa97fc7a26f5200699f8d115b23dde5da8d1f784b0623604a->enter($__internal_e878b99127d9636aa97fc7a26f5200699f8d115b23dde5da8d1f784b0623604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        // line 4
        echo "\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo ",</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Voici votre identifiant :</p>

        <table>
            <tr>
                <td>Login</td>
                <td>:</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "username", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "password", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
";
        
        $__internal_e878b99127d9636aa97fc7a26f5200699f8d115b23dde5da8d1f784b0623604a->leave($__internal_e878b99127d9636aa97fc7a26f5200699f8d115b23dde5da8d1f784b0623604a_prof);

        
        $__internal_15d39b584ce609a919c3cf4797635851a1f3dddf8905279d37aede596cd86053->leave($__internal_15d39b584ce609a919c3cf4797635851a1f3dddf8905279d37aede596cd86053_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_edef73d3766e090e42d0ac918acfdcdec978159b6f6c39eb26395535c54e226f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edef73d3766e090e42d0ac918acfdcdec978159b6f6c39eb26395535c54e226f->enter($__internal_edef73d3766e090e42d0ac918acfdcdec978159b6f6c39eb26395535c54e226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_cd5f51711c835bab3ef63ad2bbcbbe02f415c7f2ee97d98de82d6e87d643e01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5f51711c835bab3ef63ad2bbcbbe02f415c7f2ee97d98de82d6e87d643e01f->enter($__internal_cd5f51711c835bab3ef63ad2bbcbbe02f415c7f2ee97d98de82d6e87d643e01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_cd5f51711c835bab3ef63ad2bbcbbe02f415c7f2ee97d98de82d6e87d643e01f->leave($__internal_cd5f51711c835bab3ef63ad2bbcbbe02f415c7f2ee97d98de82d6e87d643e01f_prof);

        
        $__internal_edef73d3766e090e42d0ac918acfdcdec978159b6f6c39eb26395535c54e226f->leave($__internal_edef73d3766e090e42d0ac918acfdcdec978159b6f6c39eb26395535c54e226f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Email:emailUserRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  71 => 17,  63 => 12,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
\t    <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Voici votre identifiant :</p>

        <table>
            <tr>
                <td>Login</td>
                <td>:</td>
                <td>{{ data['username'] }}</td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td>{{ data['password'] }}</td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
{% endblock %}

{% block body_html_footer_action %}
{% endblock %}", "UserBundle:Email:emailUserRegister.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle/Resources/views/Email/emailUserRegister.html.twig");
    }
}
