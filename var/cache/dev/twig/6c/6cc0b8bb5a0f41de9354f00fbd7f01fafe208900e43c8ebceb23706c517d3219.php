<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_88581fbc8d6783d159180bbdf196fd46cdeaa8c9006bd958c96d4ffb0f45ac30 extends Twig_Template
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
        $__internal_51e171b7c8a5e8350e9f610592b58405195f25012567ee25639cf4b615e24c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e171b7c8a5e8350e9f610592b58405195f25012567ee25639cf4b615e24c05->enter($__internal_51e171b7c8a5e8350e9f610592b58405195f25012567ee25639cf4b615e24c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9b8d60e6beb2c7cacc749b22b1895ab6cfe94196d72d5e8714a3ab5facc5f52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8d60e6beb2c7cacc749b22b1895ab6cfe94196d72d5e8714a3ab5facc5f52a->enter($__internal_9b8d60e6beb2c7cacc749b22b1895ab6cfe94196d72d5e8714a3ab5facc5f52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_51e171b7c8a5e8350e9f610592b58405195f25012567ee25639cf4b615e24c05->leave($__internal_51e171b7c8a5e8350e9f610592b58405195f25012567ee25639cf4b615e24c05_prof);

        
        $__internal_9b8d60e6beb2c7cacc749b22b1895ab6cfe94196d72d5e8714a3ab5facc5f52a->leave($__internal_9b8d60e6beb2c7cacc749b22b1895ab6cfe94196d72d5e8714a3ab5facc5f52a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
