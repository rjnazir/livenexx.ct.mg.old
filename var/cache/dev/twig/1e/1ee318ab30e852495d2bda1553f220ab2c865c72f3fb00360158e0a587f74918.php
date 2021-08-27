<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bd2e1b68d49de8a52faf1b523d36bfb09e9674be8d46f12572b09c6464cdd1cb extends Twig_Template
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
        $__internal_de46ee0766507157f1149887acee748841c8b95be591ad063f061998b5073b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de46ee0766507157f1149887acee748841c8b95be591ad063f061998b5073b9c->enter($__internal_de46ee0766507157f1149887acee748841c8b95be591ad063f061998b5073b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a58d09fb7b9c8a43f9f7a1e9a8f71808691a30b82d96e0a87c42a8790f63126b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58d09fb7b9c8a43f9f7a1e9a8f71808691a30b82d96e0a87c42a8790f63126b->enter($__internal_a58d09fb7b9c8a43f9f7a1e9a8f71808691a30b82d96e0a87c42a8790f63126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_de46ee0766507157f1149887acee748841c8b95be591ad063f061998b5073b9c->leave($__internal_de46ee0766507157f1149887acee748841c8b95be591ad063f061998b5073b9c_prof);

        
        $__internal_a58d09fb7b9c8a43f9f7a1e9a8f71808691a30b82d96e0a87c42a8790f63126b->leave($__internal_a58d09fb7b9c8a43f9f7a1e9a8f71808691a30b82d96e0a87c42a8790f63126b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
