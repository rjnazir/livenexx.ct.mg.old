<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5a30c80c89ec125006c9a517e3691073439be0f573d5b801078bfe52c3d49e46 extends Twig_Template
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
        $__internal_b7eb9a29b8333f0cfbc51928177a4932964cb173ce80a83da901e43ad7c34f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7eb9a29b8333f0cfbc51928177a4932964cb173ce80a83da901e43ad7c34f46->enter($__internal_b7eb9a29b8333f0cfbc51928177a4932964cb173ce80a83da901e43ad7c34f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_50049269f572512cd5b6c926f59095b92d055a3920374c4af3a680c14309e450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50049269f572512cd5b6c926f59095b92d055a3920374c4af3a680c14309e450->enter($__internal_50049269f572512cd5b6c926f59095b92d055a3920374c4af3a680c14309e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b7eb9a29b8333f0cfbc51928177a4932964cb173ce80a83da901e43ad7c34f46->leave($__internal_b7eb9a29b8333f0cfbc51928177a4932964cb173ce80a83da901e43ad7c34f46_prof);

        
        $__internal_50049269f572512cd5b6c926f59095b92d055a3920374c4af3a680c14309e450->leave($__internal_50049269f572512cd5b6c926f59095b92d055a3920374c4af3a680c14309e450_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
