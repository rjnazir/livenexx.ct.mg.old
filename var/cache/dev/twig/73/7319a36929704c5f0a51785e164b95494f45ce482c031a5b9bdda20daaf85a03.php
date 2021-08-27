<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_042ae9396423b2497085fffd86881bf5fa6b17a9be7ef5e74fcafc7fb1bcd980 extends Twig_Template
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
        $__internal_28b22e3dade791ea15648b3e7e5ce451d5a1c2ab7fef6cd2a9c277abc016e6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28b22e3dade791ea15648b3e7e5ce451d5a1c2ab7fef6cd2a9c277abc016e6a4->enter($__internal_28b22e3dade791ea15648b3e7e5ce451d5a1c2ab7fef6cd2a9c277abc016e6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_10051c3d534c6bf2ec1fa8d9bd76ce3a93367ba1e59d0f75c413db52a1229830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10051c3d534c6bf2ec1fa8d9bd76ce3a93367ba1e59d0f75c413db52a1229830->enter($__internal_10051c3d534c6bf2ec1fa8d9bd76ce3a93367ba1e59d0f75c413db52a1229830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_28b22e3dade791ea15648b3e7e5ce451d5a1c2ab7fef6cd2a9c277abc016e6a4->leave($__internal_28b22e3dade791ea15648b3e7e5ce451d5a1c2ab7fef6cd2a9c277abc016e6a4_prof);

        
        $__internal_10051c3d534c6bf2ec1fa8d9bd76ce3a93367ba1e59d0f75c413db52a1229830->leave($__internal_10051c3d534c6bf2ec1fa8d9bd76ce3a93367ba1e59d0f75c413db52a1229830_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
