<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e31f2edc89fcf027520a5a8cf4cb8a2d5a4fd30463cb9ce3514728dae003b41 extends Twig_Template
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
        $__internal_2626e745708c6972aa5109f98d9fc8ff292a3a230a1838b22b0cff7201199dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2626e745708c6972aa5109f98d9fc8ff292a3a230a1838b22b0cff7201199dde->enter($__internal_2626e745708c6972aa5109f98d9fc8ff292a3a230a1838b22b0cff7201199dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30086d884ab3c50bc9af61c9b6e1d41a9f8bfdb88db58b622f9ad93043e6564b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30086d884ab3c50bc9af61c9b6e1d41a9f8bfdb88db58b622f9ad93043e6564b->enter($__internal_30086d884ab3c50bc9af61c9b6e1d41a9f8bfdb88db58b622f9ad93043e6564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2626e745708c6972aa5109f98d9fc8ff292a3a230a1838b22b0cff7201199dde->leave($__internal_2626e745708c6972aa5109f98d9fc8ff292a3a230a1838b22b0cff7201199dde_prof);

        
        $__internal_30086d884ab3c50bc9af61c9b6e1d41a9f8bfdb88db58b622f9ad93043e6564b->leave($__internal_30086d884ab3c50bc9af61c9b6e1d41a9f8bfdb88db58b622f9ad93043e6564b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
