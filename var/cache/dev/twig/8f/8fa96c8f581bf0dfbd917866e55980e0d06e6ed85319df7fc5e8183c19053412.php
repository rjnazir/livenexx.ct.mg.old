<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e98cafdec0d1acb5959fe8995fd54b5dd514993350554f06c573d6e8703eebe4 extends Twig_Template
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
        $__internal_dead989827ca55b68b0dc594befb2c9438e424fae8cd538291f82908854bb6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dead989827ca55b68b0dc594befb2c9438e424fae8cd538291f82908854bb6d6->enter($__internal_dead989827ca55b68b0dc594befb2c9438e424fae8cd538291f82908854bb6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6557d5d8d5758b7b1ddc6f9e4339db35f9a4cf44bcea6ec8750bd6a3ea40fde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6557d5d8d5758b7b1ddc6f9e4339db35f9a4cf44bcea6ec8750bd6a3ea40fde3->enter($__internal_6557d5d8d5758b7b1ddc6f9e4339db35f9a4cf44bcea6ec8750bd6a3ea40fde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dead989827ca55b68b0dc594befb2c9438e424fae8cd538291f82908854bb6d6->leave($__internal_dead989827ca55b68b0dc594befb2c9438e424fae8cd538291f82908854bb6d6_prof);

        
        $__internal_6557d5d8d5758b7b1ddc6f9e4339db35f9a4cf44bcea6ec8750bd6a3ea40fde3->leave($__internal_6557d5d8d5758b7b1ddc6f9e4339db35f9a4cf44bcea6ec8750bd6a3ea40fde3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
