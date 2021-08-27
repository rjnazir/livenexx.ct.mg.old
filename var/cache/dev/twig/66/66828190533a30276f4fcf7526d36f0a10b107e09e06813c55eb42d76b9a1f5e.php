<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5e79fe9893c12649dfe9150a92cee32f278c874e8dd687f99aab05f4346940b2 extends Twig_Template
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
        $__internal_1cdfffe2cfb52331d68e152925dda0127a64ec9e8a4cfcc6575560280f177219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdfffe2cfb52331d68e152925dda0127a64ec9e8a4cfcc6575560280f177219->enter($__internal_1cdfffe2cfb52331d68e152925dda0127a64ec9e8a4cfcc6575560280f177219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c277be7fe3dfc0105489f8e56e31946ba7fe00b7303200b1b8aee46d435a80d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c277be7fe3dfc0105489f8e56e31946ba7fe00b7303200b1b8aee46d435a80d5->enter($__internal_c277be7fe3dfc0105489f8e56e31946ba7fe00b7303200b1b8aee46d435a80d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1cdfffe2cfb52331d68e152925dda0127a64ec9e8a4cfcc6575560280f177219->leave($__internal_1cdfffe2cfb52331d68e152925dda0127a64ec9e8a4cfcc6575560280f177219_prof);

        
        $__internal_c277be7fe3dfc0105489f8e56e31946ba7fe00b7303200b1b8aee46d435a80d5->leave($__internal_c277be7fe3dfc0105489f8e56e31946ba7fe00b7303200b1b8aee46d435a80d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
