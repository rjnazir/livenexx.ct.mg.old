<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7e9047f046ab495d6ac7c06784c53c4980749971e3965acc0e0209201e1bee54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5013161a28004517bc35c05c1e8be8d9e1d5c6b11ff57a902356c34cc66d75f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5013161a28004517bc35c05c1e8be8d9e1d5c6b11ff57a902356c34cc66d75f1->enter($__internal_5013161a28004517bc35c05c1e8be8d9e1d5c6b11ff57a902356c34cc66d75f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1a56eb4d902b1fda40e5e26d4fe37e9c894ec67341e05b79903eb22b0b493fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a56eb4d902b1fda40e5e26d4fe37e9c894ec67341e05b79903eb22b0b493fa2->enter($__internal_1a56eb4d902b1fda40e5e26d4fe37e9c894ec67341e05b79903eb22b0b493fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_5013161a28004517bc35c05c1e8be8d9e1d5c6b11ff57a902356c34cc66d75f1->leave($__internal_5013161a28004517bc35c05c1e8be8d9e1d5c6b11ff57a902356c34cc66d75f1_prof);

        
        $__internal_1a56eb4d902b1fda40e5e26d4fe37e9c894ec67341e05b79903eb22b0b493fa2->leave($__internal_1a56eb4d902b1fda40e5e26d4fe37e9c894ec67341e05b79903eb22b0b493fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
