<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ea48e75a3214abad669a3bcf4ee71ca50b52d3f2483360c7a55f396638c65b6d extends Twig_Template
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
        $__internal_6e7842e7b357a548bc6be40eca33a5f7817fe5031afb1848533ca2dab1b9ea3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7842e7b357a548bc6be40eca33a5f7817fe5031afb1848533ca2dab1b9ea3e->enter($__internal_6e7842e7b357a548bc6be40eca33a5f7817fe5031afb1848533ca2dab1b9ea3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_60e1731ae0ddd7b386a8c6ab5d2293f6dafb373ebe952f817bf44a4afc6d8577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e1731ae0ddd7b386a8c6ab5d2293f6dafb373ebe952f817bf44a4afc6d8577->enter($__internal_60e1731ae0ddd7b386a8c6ab5d2293f6dafb373ebe952f817bf44a4afc6d8577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6e7842e7b357a548bc6be40eca33a5f7817fe5031afb1848533ca2dab1b9ea3e->leave($__internal_6e7842e7b357a548bc6be40eca33a5f7817fe5031afb1848533ca2dab1b9ea3e_prof);

        
        $__internal_60e1731ae0ddd7b386a8c6ab5d2293f6dafb373ebe952f817bf44a4afc6d8577->leave($__internal_60e1731ae0ddd7b386a8c6ab5d2293f6dafb373ebe952f817bf44a4afc6d8577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
