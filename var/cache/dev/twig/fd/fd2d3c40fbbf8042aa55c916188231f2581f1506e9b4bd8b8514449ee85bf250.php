<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_03ddf34e33e1781e585ce6aa0906c89208f5da2e34bb5e53c4db3dae995cbdf3 extends Twig_Template
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
        $__internal_0daa23a99e2d6c599a1c388092b4d69fff81987380ef22149c32619d3b87d916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0daa23a99e2d6c599a1c388092b4d69fff81987380ef22149c32619d3b87d916->enter($__internal_0daa23a99e2d6c599a1c388092b4d69fff81987380ef22149c32619d3b87d916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1baaf80afcfbc101877b53883f20f6bd7a68d948029739133564a4efb88a0c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1baaf80afcfbc101877b53883f20f6bd7a68d948029739133564a4efb88a0c9d->enter($__internal_1baaf80afcfbc101877b53883f20f6bd7a68d948029739133564a4efb88a0c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_0daa23a99e2d6c599a1c388092b4d69fff81987380ef22149c32619d3b87d916->leave($__internal_0daa23a99e2d6c599a1c388092b4d69fff81987380ef22149c32619d3b87d916_prof);

        
        $__internal_1baaf80afcfbc101877b53883f20f6bd7a68d948029739133564a4efb88a0c9d->leave($__internal_1baaf80afcfbc101877b53883f20f6bd7a68d948029739133564a4efb88a0c9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
