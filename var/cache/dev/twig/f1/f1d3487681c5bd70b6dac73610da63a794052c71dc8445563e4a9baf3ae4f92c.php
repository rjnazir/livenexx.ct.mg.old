<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_876aa941235daf637412ff12bdf4c10af0af25db7208f9633ae1902cd44c1b29 extends Twig_Template
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
        $__internal_22787ba395198f6d4e1b427d15e68ca1c8053e8a511fd3f35d62de9534e3ae8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22787ba395198f6d4e1b427d15e68ca1c8053e8a511fd3f35d62de9534e3ae8f->enter($__internal_22787ba395198f6d4e1b427d15e68ca1c8053e8a511fd3f35d62de9534e3ae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0bb31ada3bf83890049ae3d803f4a2a8b960846b851f3b620c441eff77daa674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb31ada3bf83890049ae3d803f4a2a8b960846b851f3b620c441eff77daa674->enter($__internal_0bb31ada3bf83890049ae3d803f4a2a8b960846b851f3b620c441eff77daa674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_22787ba395198f6d4e1b427d15e68ca1c8053e8a511fd3f35d62de9534e3ae8f->leave($__internal_22787ba395198f6d4e1b427d15e68ca1c8053e8a511fd3f35d62de9534e3ae8f_prof);

        
        $__internal_0bb31ada3bf83890049ae3d803f4a2a8b960846b851f3b620c441eff77daa674->leave($__internal_0bb31ada3bf83890049ae3d803f4a2a8b960846b851f3b620c441eff77daa674_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
