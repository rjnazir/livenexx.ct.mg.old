<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_92794c558be50bf3178d5169f4abe26a2f2b332be4615cac4d47b7705904ce15 extends Twig_Template
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
        $__internal_126cf68e1faf0f7f3127c073f1186e35b32d3b16410841773e177893b6ace22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126cf68e1faf0f7f3127c073f1186e35b32d3b16410841773e177893b6ace22e->enter($__internal_126cf68e1faf0f7f3127c073f1186e35b32d3b16410841773e177893b6ace22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d11e57ac9467afcafce8430374ef84e21024ea528b8c03d031d8bd4be47cd930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11e57ac9467afcafce8430374ef84e21024ea528b8c03d031d8bd4be47cd930->enter($__internal_d11e57ac9467afcafce8430374ef84e21024ea528b8c03d031d8bd4be47cd930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_126cf68e1faf0f7f3127c073f1186e35b32d3b16410841773e177893b6ace22e->leave($__internal_126cf68e1faf0f7f3127c073f1186e35b32d3b16410841773e177893b6ace22e_prof);

        
        $__internal_d11e57ac9467afcafce8430374ef84e21024ea528b8c03d031d8bd4be47cd930->leave($__internal_d11e57ac9467afcafce8430374ef84e21024ea528b8c03d031d8bd4be47cd930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
