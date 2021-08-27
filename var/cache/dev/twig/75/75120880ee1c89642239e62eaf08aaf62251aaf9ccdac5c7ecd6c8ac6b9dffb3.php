<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5208177d7cdc2c4133c724edbe0ef4096fbd053046f551af5534aa29e292b424 extends Twig_Template
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
        $__internal_b28e6ef6f1d052cb3d2607aaca6199db3a4cba721f912ff7a031bf0a9196aae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28e6ef6f1d052cb3d2607aaca6199db3a4cba721f912ff7a031bf0a9196aae6->enter($__internal_b28e6ef6f1d052cb3d2607aaca6199db3a4cba721f912ff7a031bf0a9196aae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_97589442c278d2902173f85361e00801912ae6fdf7382787e2bbecb37effc1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97589442c278d2902173f85361e00801912ae6fdf7382787e2bbecb37effc1a4->enter($__internal_97589442c278d2902173f85361e00801912ae6fdf7382787e2bbecb37effc1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b28e6ef6f1d052cb3d2607aaca6199db3a4cba721f912ff7a031bf0a9196aae6->leave($__internal_b28e6ef6f1d052cb3d2607aaca6199db3a4cba721f912ff7a031bf0a9196aae6_prof);

        
        $__internal_97589442c278d2902173f85361e00801912ae6fdf7382787e2bbecb37effc1a4->leave($__internal_97589442c278d2902173f85361e00801912ae6fdf7382787e2bbecb37effc1a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
