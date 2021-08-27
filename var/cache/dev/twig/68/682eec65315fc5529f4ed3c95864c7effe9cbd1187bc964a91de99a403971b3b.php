<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_aa3a946d02ea69466ddb9553468471f7bce3566a32b242631d87be1b52ea8087 extends Twig_Template
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
        $__internal_071d70508a928c3d0bbb5cae5d5e658ca3a4e0682ba046f3f5df60cb64a59d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071d70508a928c3d0bbb5cae5d5e658ca3a4e0682ba046f3f5df60cb64a59d4a->enter($__internal_071d70508a928c3d0bbb5cae5d5e658ca3a4e0682ba046f3f5df60cb64a59d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e31cc0d03485423d3486aaba8abcf1b2baedcdfd6f4e440021f1bdf6a9502dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31cc0d03485423d3486aaba8abcf1b2baedcdfd6f4e440021f1bdf6a9502dc4->enter($__internal_e31cc0d03485423d3486aaba8abcf1b2baedcdfd6f4e440021f1bdf6a9502dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_071d70508a928c3d0bbb5cae5d5e658ca3a4e0682ba046f3f5df60cb64a59d4a->leave($__internal_071d70508a928c3d0bbb5cae5d5e658ca3a4e0682ba046f3f5df60cb64a59d4a_prof);

        
        $__internal_e31cc0d03485423d3486aaba8abcf1b2baedcdfd6f4e440021f1bdf6a9502dc4->leave($__internal_e31cc0d03485423d3486aaba8abcf1b2baedcdfd6f4e440021f1bdf6a9502dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
