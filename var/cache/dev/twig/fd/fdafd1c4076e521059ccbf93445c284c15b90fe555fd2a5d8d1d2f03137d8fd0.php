<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e8aa7840043b6d93b8d98a5fc7a6900673424d671d7dbda650f335c80bbaca13 extends Twig_Template
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
        $__internal_2a09fdc1925b693c868e963af97b83911339f6efa78200854be2ba04dc7c2bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a09fdc1925b693c868e963af97b83911339f6efa78200854be2ba04dc7c2bb0->enter($__internal_2a09fdc1925b693c868e963af97b83911339f6efa78200854be2ba04dc7c2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_aa3e7480593a6275ec711bf40635ec196d01db40cf81bb08449103a11762de97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3e7480593a6275ec711bf40635ec196d01db40cf81bb08449103a11762de97->enter($__internal_aa3e7480593a6275ec711bf40635ec196d01db40cf81bb08449103a11762de97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2a09fdc1925b693c868e963af97b83911339f6efa78200854be2ba04dc7c2bb0->leave($__internal_2a09fdc1925b693c868e963af97b83911339f6efa78200854be2ba04dc7c2bb0_prof);

        
        $__internal_aa3e7480593a6275ec711bf40635ec196d01db40cf81bb08449103a11762de97->leave($__internal_aa3e7480593a6275ec711bf40635ec196d01db40cf81bb08449103a11762de97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
