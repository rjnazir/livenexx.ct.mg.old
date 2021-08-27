<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_106b1fc7ee2d173de3ace9386bf3b93b6e85e899dd5f0a6f1576cdc07b297fbe extends Twig_Template
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
        $__internal_286773f1d23c4e43f53e83a8c1398c73540f9f59d500c17ed169befccd6da228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286773f1d23c4e43f53e83a8c1398c73540f9f59d500c17ed169befccd6da228->enter($__internal_286773f1d23c4e43f53e83a8c1398c73540f9f59d500c17ed169befccd6da228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_452552788e416849b388d0359c853262d6bd2a26a366b9489aebb43d1994b93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452552788e416849b388d0359c853262d6bd2a26a366b9489aebb43d1994b93e->enter($__internal_452552788e416849b388d0359c853262d6bd2a26a366b9489aebb43d1994b93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_286773f1d23c4e43f53e83a8c1398c73540f9f59d500c17ed169befccd6da228->leave($__internal_286773f1d23c4e43f53e83a8c1398c73540f9f59d500c17ed169befccd6da228_prof);

        
        $__internal_452552788e416849b388d0359c853262d6bd2a26a366b9489aebb43d1994b93e->leave($__internal_452552788e416849b388d0359c853262d6bd2a26a366b9489aebb43d1994b93e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
