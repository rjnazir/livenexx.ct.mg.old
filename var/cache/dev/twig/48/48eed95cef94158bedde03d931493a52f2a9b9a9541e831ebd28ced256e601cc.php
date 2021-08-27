<?php

/* @User/Email/emailUserRegister.html.twig */
class __TwigTemplate_15a409409d662b87be0df487f9ff1e8116162f0095b3a628a09523857c8fa3bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "@User/Email/emailUserRegister.html.twig", 1);
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
        $__internal_1e9d9a0c227bdcf515f258601e42464c3e3dc30e1e1394de65fc5547299e36ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9d9a0c227bdcf515f258601e42464c3e3dc30e1e1394de65fc5547299e36ed->enter($__internal_1e9d9a0c227bdcf515f258601e42464c3e3dc30e1e1394de65fc5547299e36ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $__internal_be99b07e20326faa2ca804a0b1ef928210d25664f4a6a5a0914d703cd74b4422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be99b07e20326faa2ca804a0b1ef928210d25664f4a6a5a0914d703cd74b4422->enter($__internal_be99b07e20326faa2ca804a0b1ef928210d25664f4a6a5a0914d703cd74b4422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/emailUserRegister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9d9a0c227bdcf515f258601e42464c3e3dc30e1e1394de65fc5547299e36ed->leave($__internal_1e9d9a0c227bdcf515f258601e42464c3e3dc30e1e1394de65fc5547299e36ed_prof);

        
        $__internal_be99b07e20326faa2ca804a0b1ef928210d25664f4a6a5a0914d703cd74b4422->leave($__internal_be99b07e20326faa2ca804a0b1ef928210d25664f4a6a5a0914d703cd74b4422_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_11cbeac0a761e94893fa2cf21ba301077fbb4aac1bd2d2b2805b014245603562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cbeac0a761e94893fa2cf21ba301077fbb4aac1bd2d2b2805b014245603562->enter($__internal_11cbeac0a761e94893fa2cf21ba301077fbb4aac1bd2d2b2805b014245603562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_18b1b8f5be57277795c5a3a17fac90df07174abe9e820404b8d7ca0913be5a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b1b8f5be57277795c5a3a17fac90df07174abe9e820404b8d7ca0913be5a9f->enter($__internal_18b1b8f5be57277795c5a3a17fac90df07174abe9e820404b8d7ca0913be5a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_18b1b8f5be57277795c5a3a17fac90df07174abe9e820404b8d7ca0913be5a9f->leave($__internal_18b1b8f5be57277795c5a3a17fac90df07174abe9e820404b8d7ca0913be5a9f_prof);

        
        $__internal_11cbeac0a761e94893fa2cf21ba301077fbb4aac1bd2d2b2805b014245603562->leave($__internal_11cbeac0a761e94893fa2cf21ba301077fbb4aac1bd2d2b2805b014245603562_prof);

    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_63a4d441668519c035443f8c559d0f03743bac2139f1528785e6a912139296b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a4d441668519c035443f8c559d0f03743bac2139f1528785e6a912139296b0->enter($__internal_63a4d441668519c035443f8c559d0f03743bac2139f1528785e6a912139296b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_fddb434935d454fd54203156bb1f61674a457b604a691a89cf71f8fda194f533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddb434935d454fd54203156bb1f61674a457b604a691a89cf71f8fda194f533->enter($__internal_fddb434935d454fd54203156bb1f61674a457b604a691a89cf71f8fda194f533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_fddb434935d454fd54203156bb1f61674a457b604a691a89cf71f8fda194f533->leave($__internal_fddb434935d454fd54203156bb1f61674a457b604a691a89cf71f8fda194f533_prof);

        
        $__internal_63a4d441668519c035443f8c559d0f03743bac2139f1528785e6a912139296b0->leave($__internal_63a4d441668519c035443f8c559d0f03743bac2139f1528785e6a912139296b0_prof);

    }

    public function getTemplateName()
    {
        return "@User/Email/emailUserRegister.html.twig";
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
{% endblock %}", "@User/Email/emailUserRegister.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Email\\emailUserRegister.html.twig");
    }
}
