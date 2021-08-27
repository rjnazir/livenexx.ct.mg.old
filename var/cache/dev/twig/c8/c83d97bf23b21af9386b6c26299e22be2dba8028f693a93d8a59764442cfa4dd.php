<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_0d3d3e561f3de2f317a66f663fcc13efa274c2c55de35ae960ce5453ff4f89a8 extends Twig_Template
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
        $__internal_fc69b4a8fb74431c31ce80e891443bc6d9f4692b8f87789edd51dd3e2360d787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc69b4a8fb74431c31ce80e891443bc6d9f4692b8f87789edd51dd3e2360d787->enter($__internal_fc69b4a8fb74431c31ce80e891443bc6d9f4692b8f87789edd51dd3e2360d787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ca982e60a17233cb630f988942f6d2877d828211b4d80f585a4ea07a9ad4fb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca982e60a17233cb630f988942f6d2877d828211b4d80f585a4ea07a9ad4fb40->enter($__internal_ca982e60a17233cb630f988942f6d2877d828211b4d80f585a4ea07a9ad4fb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fc69b4a8fb74431c31ce80e891443bc6d9f4692b8f87789edd51dd3e2360d787->leave($__internal_fc69b4a8fb74431c31ce80e891443bc6d9f4692b8f87789edd51dd3e2360d787_prof);

        
        $__internal_ca982e60a17233cb630f988942f6d2877d828211b4d80f585a4ea07a9ad4fb40->leave($__internal_ca982e60a17233cb630f988942f6d2877d828211b4d80f585a4ea07a9ad4fb40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
