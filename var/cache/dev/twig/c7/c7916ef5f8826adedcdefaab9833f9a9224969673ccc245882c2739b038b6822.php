<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_892cf24923da48264de859160136d3ea7ea18d549edd83306bbf306a666a7db1 extends Twig_Template
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
        $__internal_296a65b66a12b51b138715b1f67c88f5c752e30f21b330f3cad2294222138b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296a65b66a12b51b138715b1f67c88f5c752e30f21b330f3cad2294222138b86->enter($__internal_296a65b66a12b51b138715b1f67c88f5c752e30f21b330f3cad2294222138b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_eb14fa5ce714cd7ee1c39aaf745eae4b31e12a53e32de85c5679c0d0ea28da1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb14fa5ce714cd7ee1c39aaf745eae4b31e12a53e32de85c5679c0d0ea28da1b->enter($__internal_eb14fa5ce714cd7ee1c39aaf745eae4b31e12a53e32de85c5679c0d0ea28da1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_296a65b66a12b51b138715b1f67c88f5c752e30f21b330f3cad2294222138b86->leave($__internal_296a65b66a12b51b138715b1f67c88f5c752e30f21b330f3cad2294222138b86_prof);

        
        $__internal_eb14fa5ce714cd7ee1c39aaf745eae4b31e12a53e32de85c5679c0d0ea28da1b->leave($__internal_eb14fa5ce714cd7ee1c39aaf745eae4b31e12a53e32de85c5679c0d0ea28da1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
