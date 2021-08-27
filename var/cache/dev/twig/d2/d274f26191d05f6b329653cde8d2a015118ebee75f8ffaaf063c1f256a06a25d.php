<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_945bef702f1146d404205406a56c8531bcd488fd5a01101c539886571efea37c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fee82210a926b86a8c9c39ba9472914c7679cf805fca0c0c538cee52e4f3cf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee82210a926b86a8c9c39ba9472914c7679cf805fca0c0c538cee52e4f3cf19->enter($__internal_fee82210a926b86a8c9c39ba9472914c7679cf805fca0c0c538cee52e4f3cf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_be97b9812e1a3563a98ab0c18752aac10225562863f9cd3fc1f8693e01af0220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be97b9812e1a3563a98ab0c18752aac10225562863f9cd3fc1f8693e01af0220->enter($__internal_be97b9812e1a3563a98ab0c18752aac10225562863f9cd3fc1f8693e01af0220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fee82210a926b86a8c9c39ba9472914c7679cf805fca0c0c538cee52e4f3cf19->leave($__internal_fee82210a926b86a8c9c39ba9472914c7679cf805fca0c0c538cee52e4f3cf19_prof);

        
        $__internal_be97b9812e1a3563a98ab0c18752aac10225562863f9cd3fc1f8693e01af0220->leave($__internal_be97b9812e1a3563a98ab0c18752aac10225562863f9cd3fc1f8693e01af0220_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f15b6071fc925bf8776fdf98c50cc2a3dbf93359edbb2a0c5e9681d527f1b6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15b6071fc925bf8776fdf98c50cc2a3dbf93359edbb2a0c5e9681d527f1b6c1->enter($__internal_f15b6071fc925bf8776fdf98c50cc2a3dbf93359edbb2a0c5e9681d527f1b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_182fb7860839ead509276076a14e9b813986d0602cd8adbc0f4c91fbf4b2e1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182fb7860839ead509276076a14e9b813986d0602cd8adbc0f4c91fbf4b2e1da->enter($__internal_182fb7860839ead509276076a14e9b813986d0602cd8adbc0f4c91fbf4b2e1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_182fb7860839ead509276076a14e9b813986d0602cd8adbc0f4c91fbf4b2e1da->leave($__internal_182fb7860839ead509276076a14e9b813986d0602cd8adbc0f4c91fbf4b2e1da_prof);

        
        $__internal_f15b6071fc925bf8776fdf98c50cc2a3dbf93359edbb2a0c5e9681d527f1b6c1->leave($__internal_f15b6071fc925bf8776fdf98c50cc2a3dbf93359edbb2a0c5e9681d527f1b6c1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
