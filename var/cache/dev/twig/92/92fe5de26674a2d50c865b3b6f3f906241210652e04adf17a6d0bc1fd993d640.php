<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b057e14f79b7ccb386a5be65c0f455d5803489f526c59a6b789c12950fbbfd69 extends Twig_Template
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
        $__internal_67a979ce1db96f5a6b0b6f3b6b0e4018324fe7fc7e422dd7ad528523e5d10e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a979ce1db96f5a6b0b6f3b6b0e4018324fe7fc7e422dd7ad528523e5d10e26->enter($__internal_67a979ce1db96f5a6b0b6f3b6b0e4018324fe7fc7e422dd7ad528523e5d10e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_51fd4ed6f2db133b6d8492d24c03c107f127d481740db704674f0672de7d3a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fd4ed6f2db133b6d8492d24c03c107f127d481740db704674f0672de7d3a0d->enter($__internal_51fd4ed6f2db133b6d8492d24c03c107f127d481740db704674f0672de7d3a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67a979ce1db96f5a6b0b6f3b6b0e4018324fe7fc7e422dd7ad528523e5d10e26->leave($__internal_67a979ce1db96f5a6b0b6f3b6b0e4018324fe7fc7e422dd7ad528523e5d10e26_prof);

        
        $__internal_51fd4ed6f2db133b6d8492d24c03c107f127d481740db704674f0672de7d3a0d->leave($__internal_51fd4ed6f2db133b6d8492d24c03c107f127d481740db704674f0672de7d3a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
