<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dde9f751dcd4e59364fd74a5a16a80183e2e7666ff3c0eb33c371adcdcddc31d extends Twig_Template
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
        $__internal_04480cad161d31ffa02f769c105e4faf4e2d5d359e7c4f3537bdaefc8576af8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04480cad161d31ffa02f769c105e4faf4e2d5d359e7c4f3537bdaefc8576af8b->enter($__internal_04480cad161d31ffa02f769c105e4faf4e2d5d359e7c4f3537bdaefc8576af8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3755e0dde5d065ad4667238ff5948dd2bafd55781066039a1e45808850ffcfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3755e0dde5d065ad4667238ff5948dd2bafd55781066039a1e45808850ffcfd3->enter($__internal_3755e0dde5d065ad4667238ff5948dd2bafd55781066039a1e45808850ffcfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_04480cad161d31ffa02f769c105e4faf4e2d5d359e7c4f3537bdaefc8576af8b->leave($__internal_04480cad161d31ffa02f769c105e4faf4e2d5d359e7c4f3537bdaefc8576af8b_prof);

        
        $__internal_3755e0dde5d065ad4667238ff5948dd2bafd55781066039a1e45808850ffcfd3->leave($__internal_3755e0dde5d065ad4667238ff5948dd2bafd55781066039a1e45808850ffcfd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
