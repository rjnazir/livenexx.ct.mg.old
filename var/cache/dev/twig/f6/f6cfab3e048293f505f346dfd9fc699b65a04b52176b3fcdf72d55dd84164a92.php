<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_dc9b3be844d665eb48dd6956b3b7f24caedd0a91e82917c2bea9afc32624a1bd extends Twig_Template
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
        $__internal_f0fa305f4af31b1b0d3c03dcb04e897ccab79bc804bd56e950319ea95c02f188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fa305f4af31b1b0d3c03dcb04e897ccab79bc804bd56e950319ea95c02f188->enter($__internal_f0fa305f4af31b1b0d3c03dcb04e897ccab79bc804bd56e950319ea95c02f188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_68ef4f3424ab272a29e225c6bb97fdbea294ea803472810ca02c0094588a8c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ef4f3424ab272a29e225c6bb97fdbea294ea803472810ca02c0094588a8c69->enter($__internal_68ef4f3424ab272a29e225c6bb97fdbea294ea803472810ca02c0094588a8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f0fa305f4af31b1b0d3c03dcb04e897ccab79bc804bd56e950319ea95c02f188->leave($__internal_f0fa305f4af31b1b0d3c03dcb04e897ccab79bc804bd56e950319ea95c02f188_prof);

        
        $__internal_68ef4f3424ab272a29e225c6bb97fdbea294ea803472810ca02c0094588a8c69->leave($__internal_68ef4f3424ab272a29e225c6bb97fdbea294ea803472810ca02c0094588a8c69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
