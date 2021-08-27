<?php

/* email/layoutEmail.email.twig */
class __TwigTemplate_f1da1180de0c237548780043921de0ef3c186df361428e7217aae676ba7e393c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
            'body_html_content' => array($this, 'block_body_html_content'),
            'body_html_footer_action' => array($this, 'block_body_html_footer_action'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
    }

    // line 5
    public function block_body_html($context, array $blocks = array())
    {
        // line 6
        echo "    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        ";
        // line 15
        $this->displayBlock('body_html_content', $context, $blocks);
        // line 16
        echo "                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            ";
        // line 19
        $this->displayBlock('body_html_footer_action', $context, $blocks);
        // line 20
        echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
";
    }

    // line 15
    public function block_body_html_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_body_html_footer_action($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "email/layoutEmail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 19,  81 => 15,  71 => 20,  69 => 19,  64 => 16,  62 => 15,  51 => 6,  48 => 5,  43 => 3,  38 => 1,  34 => 5,  31 => 4,  29 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "email/layoutEmail.email.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\email\\layoutEmail.email.twig");
    }
}
