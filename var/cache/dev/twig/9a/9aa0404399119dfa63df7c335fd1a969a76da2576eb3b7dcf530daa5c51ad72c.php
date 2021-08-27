<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d4e911cf1a835405a8e1b729b638480fa0f9b7dcc57640c5ede6bc79fa14298c extends Twig_Template
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
        $__internal_03f8fde6e9b990360850bdce834733a06b8e74a5344c5ec900901040b89b9ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f8fde6e9b990360850bdce834733a06b8e74a5344c5ec900901040b89b9ea7->enter($__internal_03f8fde6e9b990360850bdce834733a06b8e74a5344c5ec900901040b89b9ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_477ee47e9a45710e1e9347e983d0ee0c82c343ba2ea112a74e130538c2791fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477ee47e9a45710e1e9347e983d0ee0c82c343ba2ea112a74e130538c2791fcb->enter($__internal_477ee47e9a45710e1e9347e983d0ee0c82c343ba2ea112a74e130538c2791fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_03f8fde6e9b990360850bdce834733a06b8e74a5344c5ec900901040b89b9ea7->leave($__internal_03f8fde6e9b990360850bdce834733a06b8e74a5344c5ec900901040b89b9ea7_prof);

        
        $__internal_477ee47e9a45710e1e9347e983d0ee0c82c343ba2ea112a74e130538c2791fcb->leave($__internal_477ee47e9a45710e1e9347e983d0ee0c82c343ba2ea112a74e130538c2791fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
