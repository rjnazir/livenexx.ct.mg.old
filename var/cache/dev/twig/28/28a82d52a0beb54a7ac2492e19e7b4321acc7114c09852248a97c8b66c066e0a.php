<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7edf94b79d278209297326c7f026a6b1e9cc02ce1d52c76e1167c477c5b47c58 extends Twig_Template
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
        $__internal_5d5e71e209572e4c0b4636c7dc82947f0b0f60697c66d62afb5438f19f246cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5e71e209572e4c0b4636c7dc82947f0b0f60697c66d62afb5438f19f246cf0->enter($__internal_5d5e71e209572e4c0b4636c7dc82947f0b0f60697c66d62afb5438f19f246cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_39cc7bea1297278bada59e0239f783a611adbc9f85911b70cae1d887042ef911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cc7bea1297278bada59e0239f783a611adbc9f85911b70cae1d887042ef911->enter($__internal_39cc7bea1297278bada59e0239f783a611adbc9f85911b70cae1d887042ef911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5d5e71e209572e4c0b4636c7dc82947f0b0f60697c66d62afb5438f19f246cf0->leave($__internal_5d5e71e209572e4c0b4636c7dc82947f0b0f60697c66d62afb5438f19f246cf0_prof);

        
        $__internal_39cc7bea1297278bada59e0239f783a611adbc9f85911b70cae1d887042ef911->leave($__internal_39cc7bea1297278bada59e0239f783a611adbc9f85911b70cae1d887042ef911_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
