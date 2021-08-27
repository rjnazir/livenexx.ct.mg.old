<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_923ff0effa0fa3f33a5249d1571e6adced2109f7fe717f5aa43a05b387d0cb58 extends Twig_Template
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
        $__internal_5535d13d73aa6017855cd1f709496b9ce27ba40aee62d9f1b35b6d52d04da2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5535d13d73aa6017855cd1f709496b9ce27ba40aee62d9f1b35b6d52d04da2e3->enter($__internal_5535d13d73aa6017855cd1f709496b9ce27ba40aee62d9f1b35b6d52d04da2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_54d2c210a2692a5782b81a0db83c2dd2f07f13067cc6499db1e9621bc6ce5cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d2c210a2692a5782b81a0db83c2dd2f07f13067cc6499db1e9621bc6ce5cdd->enter($__internal_54d2c210a2692a5782b81a0db83c2dd2f07f13067cc6499db1e9621bc6ce5cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_5535d13d73aa6017855cd1f709496b9ce27ba40aee62d9f1b35b6d52d04da2e3->leave($__internal_5535d13d73aa6017855cd1f709496b9ce27ba40aee62d9f1b35b6d52d04da2e3_prof);

        
        $__internal_54d2c210a2692a5782b81a0db83c2dd2f07f13067cc6499db1e9621bc6ce5cdd->leave($__internal_54d2c210a2692a5782b81a0db83c2dd2f07f13067cc6499db1e9621bc6ce5cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
