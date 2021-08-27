<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2f8c0719122ef92bf43a98e6012a432b3d15f4837d976088f6cdaea2a9aa655a extends Twig_Template
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
        $__internal_6848cecba1aae8cc0e7178fe3b161ff92cecd93df1c2c69d7bfaf2afcbd84929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6848cecba1aae8cc0e7178fe3b161ff92cecd93df1c2c69d7bfaf2afcbd84929->enter($__internal_6848cecba1aae8cc0e7178fe3b161ff92cecd93df1c2c69d7bfaf2afcbd84929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ded12dca88ed21364332cdb40b61e1dbe16cab4f9bf4d86b673de93c69d39405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded12dca88ed21364332cdb40b61e1dbe16cab4f9bf4d86b673de93c69d39405->enter($__internal_ded12dca88ed21364332cdb40b61e1dbe16cab4f9bf4d86b673de93c69d39405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6848cecba1aae8cc0e7178fe3b161ff92cecd93df1c2c69d7bfaf2afcbd84929->leave($__internal_6848cecba1aae8cc0e7178fe3b161ff92cecd93df1c2c69d7bfaf2afcbd84929_prof);

        
        $__internal_ded12dca88ed21364332cdb40b61e1dbe16cab4f9bf4d86b673de93c69d39405->leave($__internal_ded12dca88ed21364332cdb40b61e1dbe16cab4f9bf4d86b673de93c69d39405_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
