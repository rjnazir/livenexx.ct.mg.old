<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_69ba1a18733f3b12f03c8f98ddb056a3f89ca1c151fb11457b68633029f9ab24 extends Twig_Template
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
        $__internal_7a8ace975c251f384e829d2fe1875b8f2e687b9df272c03b3d0323a09fbbf66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8ace975c251f384e829d2fe1875b8f2e687b9df272c03b3d0323a09fbbf66f->enter($__internal_7a8ace975c251f384e829d2fe1875b8f2e687b9df272c03b3d0323a09fbbf66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d98e97c00a82db091af06bbe4face73af3ef7bd4b906f8e81235f90ffa761525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98e97c00a82db091af06bbe4face73af3ef7bd4b906f8e81235f90ffa761525->enter($__internal_d98e97c00a82db091af06bbe4face73af3ef7bd4b906f8e81235f90ffa761525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7a8ace975c251f384e829d2fe1875b8f2e687b9df272c03b3d0323a09fbbf66f->leave($__internal_7a8ace975c251f384e829d2fe1875b8f2e687b9df272c03b3d0323a09fbbf66f_prof);

        
        $__internal_d98e97c00a82db091af06bbe4face73af3ef7bd4b906f8e81235f90ffa761525->leave($__internal_d98e97c00a82db091af06bbe4face73af3ef7bd4b906f8e81235f90ffa761525_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
