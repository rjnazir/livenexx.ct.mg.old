<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2500d1089bf8a3c55cde3d2493e1a3d8339a63cabc0cd714bf9322710fed2b83 extends Twig_Template
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
        $__internal_2ac3228748899244b28c87f653b73efb00bcd4203b44f8289949eac9049f20b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac3228748899244b28c87f653b73efb00bcd4203b44f8289949eac9049f20b2->enter($__internal_2ac3228748899244b28c87f653b73efb00bcd4203b44f8289949eac9049f20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_195fad5b4576068955b8bc6e61c1b997ed72dc4b0ce765b75b6920818737df2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195fad5b4576068955b8bc6e61c1b997ed72dc4b0ce765b75b6920818737df2a->enter($__internal_195fad5b4576068955b8bc6e61c1b997ed72dc4b0ce765b75b6920818737df2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2ac3228748899244b28c87f653b73efb00bcd4203b44f8289949eac9049f20b2->leave($__internal_2ac3228748899244b28c87f653b73efb00bcd4203b44f8289949eac9049f20b2_prof);

        
        $__internal_195fad5b4576068955b8bc6e61c1b997ed72dc4b0ce765b75b6920818737df2a->leave($__internal_195fad5b4576068955b8bc6e61c1b997ed72dc4b0ce765b75b6920818737df2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
