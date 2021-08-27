<?php

/* email/layoutEmail.email.twig */
class __TwigTemplate_3c1d15663bffd734f74da20d0fde09ebab9948302dc4df2f964dba43852121ec extends Twig_Template
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
        $__internal_4da63aff84d376eeb49bc0516e6e244476b00a2304a016468b9dd9f1f18ee3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da63aff84d376eeb49bc0516e6e244476b00a2304a016468b9dd9f1f18ee3da->enter($__internal_4da63aff84d376eeb49bc0516e6e244476b00a2304a016468b9dd9f1f18ee3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

        $__internal_01a708d50c7a9e4be931fbb98d398e4915a4e4e94040aad8b0124063ec7b6d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a708d50c7a9e4be931fbb98d398e4915a4e4e94040aad8b0124063ec7b6d5c->enter($__internal_01a708d50c7a9e4be931fbb98d398e4915a4e4e94040aad8b0124063ec7b6d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/layoutEmail.email.twig"));

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
        
        $__internal_4da63aff84d376eeb49bc0516e6e244476b00a2304a016468b9dd9f1f18ee3da->leave($__internal_4da63aff84d376eeb49bc0516e6e244476b00a2304a016468b9dd9f1f18ee3da_prof);

        
        $__internal_01a708d50c7a9e4be931fbb98d398e4915a4e4e94040aad8b0124063ec7b6d5c->leave($__internal_01a708d50c7a9e4be931fbb98d398e4915a4e4e94040aad8b0124063ec7b6d5c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1b8bb975e1bf7dc0b8fc3ec1f51cbfba4cee5cd7fcf918cc1c43962a951ab6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b8bb975e1bf7dc0b8fc3ec1f51cbfba4cee5cd7fcf918cc1c43962a951ab6a->enter($__internal_b1b8bb975e1bf7dc0b8fc3ec1f51cbfba4cee5cd7fcf918cc1c43962a951ab6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8c76c93f7b614e8807f7ed1ad9bd1679dd088f61bb428fdaabc3c84dbc57f022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c76c93f7b614e8807f7ed1ad9bd1679dd088f61bb428fdaabc3c84dbc57f022->enter($__internal_8c76c93f7b614e8807f7ed1ad9bd1679dd088f61bb428fdaabc3c84dbc57f022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        
        $__internal_8c76c93f7b614e8807f7ed1ad9bd1679dd088f61bb428fdaabc3c84dbc57f022->leave($__internal_8c76c93f7b614e8807f7ed1ad9bd1679dd088f61bb428fdaabc3c84dbc57f022_prof);

        
        $__internal_b1b8bb975e1bf7dc0b8fc3ec1f51cbfba4cee5cd7fcf918cc1c43962a951ab6a->leave($__internal_b1b8bb975e1bf7dc0b8fc3ec1f51cbfba4cee5cd7fcf918cc1c43962a951ab6a_prof);

    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_67f4c4ee4baa6807cd72a96b4002afae2b155b7259c03a91c274908ec1e52503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f4c4ee4baa6807cd72a96b4002afae2b155b7259c03a91c274908ec1e52503->enter($__internal_67f4c4ee4baa6807cd72a96b4002afae2b155b7259c03a91c274908ec1e52503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6f61eacfb7cc3cc59bde9de056875a6cf1ba0abfb79f74e69280624febfd4296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f61eacfb7cc3cc59bde9de056875a6cf1ba0abfb79f74e69280624febfd4296->enter($__internal_6f61eacfb7cc3cc59bde9de056875a6cf1ba0abfb79f74e69280624febfd4296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        
        $__internal_6f61eacfb7cc3cc59bde9de056875a6cf1ba0abfb79f74e69280624febfd4296->leave($__internal_6f61eacfb7cc3cc59bde9de056875a6cf1ba0abfb79f74e69280624febfd4296_prof);

        
        $__internal_67f4c4ee4baa6807cd72a96b4002afae2b155b7259c03a91c274908ec1e52503->leave($__internal_67f4c4ee4baa6807cd72a96b4002afae2b155b7259c03a91c274908ec1e52503_prof);

    }

    // line 5
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_88ca84ebfd15e0c48f6b8cc7f058491bad44f6e7259eb46ad78f7852b62f0332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ca84ebfd15e0c48f6b8cc7f058491bad44f6e7259eb46ad78f7852b62f0332->enter($__internal_88ca84ebfd15e0c48f6b8cc7f058491bad44f6e7259eb46ad78f7852b62f0332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5b9f316d05a5a4cc4f183d3eb94bc6d4d059bcac07d23162c563c37985af965e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9f316d05a5a4cc4f183d3eb94bc6d4d059bcac07d23162c563c37985af965e->enter($__internal_5b9f316d05a5a4cc4f183d3eb94bc6d4d059bcac07d23162c563c37985af965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

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
        
        $__internal_5b9f316d05a5a4cc4f183d3eb94bc6d4d059bcac07d23162c563c37985af965e->leave($__internal_5b9f316d05a5a4cc4f183d3eb94bc6d4d059bcac07d23162c563c37985af965e_prof);

        
        $__internal_88ca84ebfd15e0c48f6b8cc7f058491bad44f6e7259eb46ad78f7852b62f0332->leave($__internal_88ca84ebfd15e0c48f6b8cc7f058491bad44f6e7259eb46ad78f7852b62f0332_prof);

    }

    // line 15
    public function block_body_html_content($context, array $blocks = array())
    {
        $__internal_f78f8b882af825633023b515e53fd7845f8e0cf0737226dd893a2120599d3cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78f8b882af825633023b515e53fd7845f8e0cf0737226dd893a2120599d3cae->enter($__internal_f78f8b882af825633023b515e53fd7845f8e0cf0737226dd893a2120599d3cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        $__internal_17e8b783673f289b0a7a973f1a04586e0deb1c5089a592086a3a1aac49a706f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e8b783673f289b0a7a973f1a04586e0deb1c5089a592086a3a1aac49a706f8->enter($__internal_17e8b783673f289b0a7a973f1a04586e0deb1c5089a592086a3a1aac49a706f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_content"));

        
        $__internal_17e8b783673f289b0a7a973f1a04586e0deb1c5089a592086a3a1aac49a706f8->leave($__internal_17e8b783673f289b0a7a973f1a04586e0deb1c5089a592086a3a1aac49a706f8_prof);

        
        $__internal_f78f8b882af825633023b515e53fd7845f8e0cf0737226dd893a2120599d3cae->leave($__internal_f78f8b882af825633023b515e53fd7845f8e0cf0737226dd893a2120599d3cae_prof);

    }

    // line 19
    public function block_body_html_footer_action($context, array $blocks = array())
    {
        $__internal_e9450c22e0ef3a6ede374a72f1417885e0337c57597742177962fbc64202e2ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9450c22e0ef3a6ede374a72f1417885e0337c57597742177962fbc64202e2ef->enter($__internal_e9450c22e0ef3a6ede374a72f1417885e0337c57597742177962fbc64202e2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        $__internal_93887bfaf7372ff5d5614350ec74be206a21191f086953d362cedd2ba7ef8155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93887bfaf7372ff5d5614350ec74be206a21191f086953d362cedd2ba7ef8155->enter($__internal_93887bfaf7372ff5d5614350ec74be206a21191f086953d362cedd2ba7ef8155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html_footer_action"));

        
        $__internal_93887bfaf7372ff5d5614350ec74be206a21191f086953d362cedd2ba7ef8155->leave($__internal_93887bfaf7372ff5d5614350ec74be206a21191f086953d362cedd2ba7ef8155_prof);

        
        $__internal_e9450c22e0ef3a6ede374a72f1417885e0337c57597742177962fbc64202e2ef->leave($__internal_e9450c22e0ef3a6ede374a72f1417885e0337c57597742177962fbc64202e2ef_prof);

    }

    public function getTemplateName()
    {
        return "email/layoutEmail.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 19,  129 => 15,  113 => 20,  111 => 19,  106 => 16,  104 => 15,  93 => 6,  84 => 5,  67 => 3,  50 => 1,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}{% endblock %}

{% block body_text %}{% endblock %}

{% block body_html %}
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        </head>

        <body style=\"margin:0;\">
            <table width=\"620\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:12px;\">
                <tbody>
                    <tr>
                        {% block body_html_content %}{% endblock %}
                    </tr>
                    <tr>
                        <td colspan=\"2\">
                            {% block body_html_footer_action %}{% endblock %}
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>
{% endblock %}", "email/layoutEmail.email.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\email\\layoutEmail.email.twig");
    }
}
