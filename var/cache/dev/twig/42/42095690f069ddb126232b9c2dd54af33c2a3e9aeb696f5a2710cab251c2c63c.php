<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_227c1b9c37315cd5bba5f15805197c2b386c526d95d4e55f304550b55c8fcb6d extends Twig_Template
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
        $__internal_f2316d0eddcda16ab5475c732097ad468d3380edb6433469571a0326da18ff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2316d0eddcda16ab5475c732097ad468d3380edb6433469571a0326da18ff12->enter($__internal_f2316d0eddcda16ab5475c732097ad468d3380edb6433469571a0326da18ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6ed3ff947bdd87ab7b958454b984d409709522c43c9900c6d0fd726cb24bb4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed3ff947bdd87ab7b958454b984d409709522c43c9900c6d0fd726cb24bb4d3->enter($__internal_6ed3ff947bdd87ab7b958454b984d409709522c43c9900c6d0fd726cb24bb4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f2316d0eddcda16ab5475c732097ad468d3380edb6433469571a0326da18ff12->leave($__internal_f2316d0eddcda16ab5475c732097ad468d3380edb6433469571a0326da18ff12_prof);

        
        $__internal_6ed3ff947bdd87ab7b958454b984d409709522c43c9900c6d0fd726cb24bb4d3->leave($__internal_6ed3ff947bdd87ab7b958454b984d409709522c43c9900c6d0fd726cb24bb4d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
