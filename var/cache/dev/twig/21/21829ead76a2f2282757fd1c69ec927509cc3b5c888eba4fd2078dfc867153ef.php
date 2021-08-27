<?php

/* @User/Email/email_link_validation.html.twig */
class __TwigTemplate_c37a3297200d06d4cb70fae51ec3aa45ae52d7c0c4a04614386cba1c86c18554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutEmail.email.twig", "@User/Email/email_link_validation.html.twig", 1);
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
        $__internal_247a5cb6f0d272f96f7680446b90ceac1b9414576005896fd46a8537e6aa98c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247a5cb6f0d272f96f7680446b90ceac1b9414576005896fd46a8537e6aa98c8->enter($__internal_247a5cb6f0d272f96f7680446b90ceac1b9414576005896fd46a8537e6aa98c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $__internal_bc851384a4d998a0fe748f62a96ac1c0bbbc87863af93acdf2d98d9cd2d48fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc851384a4d998a0fe748f62a96ac1c0bbbc87863af93acdf2d98d9cd2d48fcf->enter($__internal_bc851384a4d998a0fe748f62a96ac1c0bbbc87863af93acdf2d98d9cd2d48fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Email/email_link_validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247a5cb6f0d272f96f7680446b90ceac1b9414576005896fd46a8537e6aa98c8->leave($__internal_247a5cb6f0d272f96f7680446b90ceac1b9414576005896fd46a8537e6aa98c8_prof);

        
        $__internal_bc851384a4d998a0fe748f62a96ac1c0bbbc87863af93acdf2d98d9cd2d48fcf->leave($__internal_bc851384a4d998a0fe748f62a96ac1c0bbbc87863af93acdf2d98d9cd2d48fcf_prof);

    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_00acee6356a3ffaa02dc33283320939160de343f8caaded5babe3c45755aead6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00acee6356a3ffaa02dc33283320939160de343f8caaded5babe3c45755aead6->enter($__internal_00acee6356a3ffaa02dc33283320939160de343f8caaded5babe3c45755aead6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_9426cc9e129942e9f8f86101639aa970aa1cf9e589727131d80c4938c29414b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9426cc9e129942e9f8f86101639aa970aa1cf9e589727131d80c4938c29414b8->enter($__internal_9426cc9e129942e9f8f86101639aa970aa1cf9e589727131d80c4938c29414b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

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
        
        $__internal_9426cc9e129942e9f8f86101639aa970aa1cf9e589727131d80c4938c29414b8->leave($__internal_9426cc9e129942e9f8f86101639aa970aa1cf9e589727131d80c4938c29414b8_prof);

        
        $__internal_00acee6356a3ffaa02dc33283320939160de343f8caaded5babe3c45755aead6->leave($__internal_00acee6356a3ffaa02dc33283320939160de343f8caaded5babe3c45755aead6_prof);

    }

    // line 22
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_4e4d32e0f60669a471a221f7b5ff7be434c362849aab1a5de7b9c78e82accb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4d32e0f60669a471a221f7b5ff7be434c362849aab1a5de7b9c78e82accb06->enter($__internal_4e4d32e0f60669a471a221f7b5ff7be434c362849aab1a5de7b9c78e82accb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_3f91853c8719c9cf1ba5daafea47b0ac04c7362dc3dac0c440ade0ae7e0634b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f91853c8719c9cf1ba5daafea47b0ac04c7362dc3dac0c440ade0ae7e0634b6->enter($__internal_3f91853c8719c9cf1ba5daafea47b0ac04c7362dc3dac0c440ade0ae7e0634b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_3f91853c8719c9cf1ba5daafea47b0ac04c7362dc3dac0c440ade0ae7e0634b6->leave($__internal_3f91853c8719c9cf1ba5daafea47b0ac04c7362dc3dac0c440ade0ae7e0634b6_prof);

        
        $__internal_4e4d32e0f60669a471a221f7b5ff7be434c362849aab1a5de7b9c78e82accb06->leave($__internal_4e4d32e0f60669a471a221f7b5ff7be434c362849aab1a5de7b9c78e82accb06_prof);

    }

    public function getTemplateName()
    {
        return "@User/Email/email_link_validation.html.twig";
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
{% endblock %}", "@User/Email/email_link_validation.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Email\\email_link_validation.html.twig");
    }
}
