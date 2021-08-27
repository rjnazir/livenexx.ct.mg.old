<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4aa90122de5189fa5d1802e282f451cd4cc102373b07a6ce59647a07d70def54 extends Twig_Template
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
        $__internal_e569411b2a819f93f8c1461695521c9ad2e0ae193bd9ede5db7ea2352a2acc17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e569411b2a819f93f8c1461695521c9ad2e0ae193bd9ede5db7ea2352a2acc17->enter($__internal_e569411b2a819f93f8c1461695521c9ad2e0ae193bd9ede5db7ea2352a2acc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_cb3884ee2fe3970a6864df0ca51664dfa13799efed5b7ce5a03feedd28e004a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3884ee2fe3970a6864df0ca51664dfa13799efed5b7ce5a03feedd28e004a1->enter($__internal_cb3884ee2fe3970a6864df0ca51664dfa13799efed5b7ce5a03feedd28e004a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e569411b2a819f93f8c1461695521c9ad2e0ae193bd9ede5db7ea2352a2acc17->leave($__internal_e569411b2a819f93f8c1461695521c9ad2e0ae193bd9ede5db7ea2352a2acc17_prof);

        
        $__internal_cb3884ee2fe3970a6864df0ca51664dfa13799efed5b7ce5a03feedd28e004a1->leave($__internal_cb3884ee2fe3970a6864df0ca51664dfa13799efed5b7ce5a03feedd28e004a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
