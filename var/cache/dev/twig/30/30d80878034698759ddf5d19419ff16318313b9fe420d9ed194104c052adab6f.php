<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f6301480ecb664246c94bbb95f82f1642c4e4bdb039577ac82144947d48b500a extends Twig_Template
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
        $__internal_02b0cd3254953e58b5fb86b4fee5a37b45c668d09594ade67f8cfe6488da094d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b0cd3254953e58b5fb86b4fee5a37b45c668d09594ade67f8cfe6488da094d->enter($__internal_02b0cd3254953e58b5fb86b4fee5a37b45c668d09594ade67f8cfe6488da094d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f507c3d321cd5d4c4e80f2b5e0eb3da7e807c7e8b1c6fd150181295491d43e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f507c3d321cd5d4c4e80f2b5e0eb3da7e807c7e8b1c6fd150181295491d43e5c->enter($__internal_f507c3d321cd5d4c4e80f2b5e0eb3da7e807c7e8b1c6fd150181295491d43e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_02b0cd3254953e58b5fb86b4fee5a37b45c668d09594ade67f8cfe6488da094d->leave($__internal_02b0cd3254953e58b5fb86b4fee5a37b45c668d09594ade67f8cfe6488da094d_prof);

        
        $__internal_f507c3d321cd5d4c4e80f2b5e0eb3da7e807c7e8b1c6fd150181295491d43e5c->leave($__internal_f507c3d321cd5d4c4e80f2b5e0eb3da7e807c7e8b1c6fd150181295491d43e5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
