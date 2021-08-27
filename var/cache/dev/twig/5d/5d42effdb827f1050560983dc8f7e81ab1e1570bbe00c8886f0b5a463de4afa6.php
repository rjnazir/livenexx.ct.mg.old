<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd384c6d9a2f883242f7bb3185ac40d4bc03081dd15f359211d22deba2240acb extends Twig_Template
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
        $__internal_c3914462e8633bc54c203d5e4a041fa044b93adf405bfd1db247c47080b7dd55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3914462e8633bc54c203d5e4a041fa044b93adf405bfd1db247c47080b7dd55->enter($__internal_c3914462e8633bc54c203d5e4a041fa044b93adf405bfd1db247c47080b7dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a7f8ddec336ccdccf431bc0f5e965909b503a23fce9a44b386d182a9280a3393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f8ddec336ccdccf431bc0f5e965909b503a23fce9a44b386d182a9280a3393->enter($__internal_a7f8ddec336ccdccf431bc0f5e965909b503a23fce9a44b386d182a9280a3393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c3914462e8633bc54c203d5e4a041fa044b93adf405bfd1db247c47080b7dd55->leave($__internal_c3914462e8633bc54c203d5e4a041fa044b93adf405bfd1db247c47080b7dd55_prof);

        
        $__internal_a7f8ddec336ccdccf431bc0f5e965909b503a23fce9a44b386d182a9280a3393->leave($__internal_a7f8ddec336ccdccf431bc0f5e965909b503a23fce9a44b386d182a9280a3393_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
