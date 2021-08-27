<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3c11454e6592ec8c8d6879c92e85fe31c95b08c7c9c21d2c2e054533e1dd92d7 extends Twig_Template
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
        $__internal_be9e30b680a8868970b35f9fddd8d5b5cc15f555a994ed80a605867c503cef76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9e30b680a8868970b35f9fddd8d5b5cc15f555a994ed80a605867c503cef76->enter($__internal_be9e30b680a8868970b35f9fddd8d5b5cc15f555a994ed80a605867c503cef76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bdee5303b056d6a32d3f194e64a1e7cf1245058fabfcdd2e308a9737aeaae58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdee5303b056d6a32d3f194e64a1e7cf1245058fabfcdd2e308a9737aeaae58a->enter($__internal_bdee5303b056d6a32d3f194e64a1e7cf1245058fabfcdd2e308a9737aeaae58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_be9e30b680a8868970b35f9fddd8d5b5cc15f555a994ed80a605867c503cef76->leave($__internal_be9e30b680a8868970b35f9fddd8d5b5cc15f555a994ed80a605867c503cef76_prof);

        
        $__internal_bdee5303b056d6a32d3f194e64a1e7cf1245058fabfcdd2e308a9737aeaae58a->leave($__internal_bdee5303b056d6a32d3f194e64a1e7cf1245058fabfcdd2e308a9737aeaae58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
