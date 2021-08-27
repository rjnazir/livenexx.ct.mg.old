<?php

/* @User/Email/emailUserRegister.html.twig */
class __TwigTemplate_5ce47b3f077503795e2595948972d73c42f36fd00ba903d7ef2cbea341c37a02 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_html_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<td valign=\"middle\" style=\"width:430px; padding:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px;\">
\t    <p style=\"margin-top:10px;margin-bottom:10px;\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "firstname", array()), "html", null, true);
        echo ",</p>
\t    <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Voici votre identifiant :</p>

        <table>
            <tr>
                <td>Login</td>
                <td>:</td>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "username", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td>:</td>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "password", array(), "array"), "html", null, true);
        echo "</td>
            </tr>
        </table>

        <p style=\"margin-top:10px;margin-bottom:10px;\"><br><br>Merci</p>
\t</td>
";
    }

    // line 25
    public function block_body_html_footer_action($context, array $blocks = array())
    {
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
        return array (  64 => 25,  53 => 17,  45 => 12,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@User/Email/emailUserRegister.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\Email\\emailUserRegister.html.twig");
    }
}
