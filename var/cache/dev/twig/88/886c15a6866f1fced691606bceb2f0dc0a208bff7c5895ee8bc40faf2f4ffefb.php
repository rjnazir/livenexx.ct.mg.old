<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a89ae0979ddac1d83f3ef8c9b9d2ca88b60b60f7704db4e717ecc0e5e593775b extends Twig_Template
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
        $__internal_695eb77fbced1bc02f9c8924f3632c899b910794c046eb82780831f8c2c8d141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695eb77fbced1bc02f9c8924f3632c899b910794c046eb82780831f8c2c8d141->enter($__internal_695eb77fbced1bc02f9c8924f3632c899b910794c046eb82780831f8c2c8d141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_05f829e14c98af7ede620541e85d70b0a2571108ac6ab360970dca2d1d23f386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f829e14c98af7ede620541e85d70b0a2571108ac6ab360970dca2d1d23f386->enter($__internal_05f829e14c98af7ede620541e85d70b0a2571108ac6ab360970dca2d1d23f386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_695eb77fbced1bc02f9c8924f3632c899b910794c046eb82780831f8c2c8d141->leave($__internal_695eb77fbced1bc02f9c8924f3632c899b910794c046eb82780831f8c2c8d141_prof);

        
        $__internal_05f829e14c98af7ede620541e85d70b0a2571108ac6ab360970dca2d1d23f386->leave($__internal_05f829e14c98af7ede620541e85d70b0a2571108ac6ab360970dca2d1d23f386_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
