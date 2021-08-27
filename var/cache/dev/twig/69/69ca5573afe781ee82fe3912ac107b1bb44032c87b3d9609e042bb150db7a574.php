<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_00dda934d659bac1b49445669c65c63a8068cc8a336df19b4baedb66b25724e6 extends Twig_Template
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
        $__internal_9d33c2bd282ec15b35e96ab779d7044584a525bd9a9dcea0655928b41f4efb27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d33c2bd282ec15b35e96ab779d7044584a525bd9a9dcea0655928b41f4efb27->enter($__internal_9d33c2bd282ec15b35e96ab779d7044584a525bd9a9dcea0655928b41f4efb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0d53862ad5c4d2e8380b3f3f7d75e986ae812c5cec485fe1d4c9032182016a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d53862ad5c4d2e8380b3f3f7d75e986ae812c5cec485fe1d4c9032182016a67->enter($__internal_0d53862ad5c4d2e8380b3f3f7d75e986ae812c5cec485fe1d4c9032182016a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9d33c2bd282ec15b35e96ab779d7044584a525bd9a9dcea0655928b41f4efb27->leave($__internal_9d33c2bd282ec15b35e96ab779d7044584a525bd9a9dcea0655928b41f4efb27_prof);

        
        $__internal_0d53862ad5c4d2e8380b3f3f7d75e986ae812c5cec485fe1d4c9032182016a67->leave($__internal_0d53862ad5c4d2e8380b3f3f7d75e986ae812c5cec485fe1d4c9032182016a67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
