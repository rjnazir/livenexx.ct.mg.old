<?php

/* backoffice/base_admin_footer.html.twig */
class __TwigTemplate_63d6a9838d6a39e4b9bb7cbcdd8062e18a76bf0cc31666ffb2c449a8ccc86f83 extends Twig_Template
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
        $__internal_dc7e9b4f7678dfc615db45e859630cbdc86316d422c7c569ae78d7f22f8bbdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7e9b4f7678dfc615db45e859630cbdc86316d422c7c569ae78d7f22f8bbdf0->enter($__internal_dc7e9b4f7678dfc615db45e859630cbdc86316d422c7c569ae78d7f22f8bbdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        $__internal_75f86b663efb44517a5309a0b11f56329766510a2a20dff70da8cad7416534e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f86b663efb44517a5309a0b11f56329766510a2a20dff70da8cad7416534e5->enter($__internal_75f86b663efb44517a5309a0b11f56329766510a2a20dff70da8cad7416534e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_dc7e9b4f7678dfc615db45e859630cbdc86316d422c7c569ae78d7f22f8bbdf0->leave($__internal_dc7e9b4f7678dfc615db45e859630cbdc86316d422c7c569ae78d7f22f8bbdf0_prof);

        
        $__internal_75f86b663efb44517a5309a0b11f56329766510a2a20dff70da8cad7416534e5->leave($__internal_75f86b663efb44517a5309a0b11f56329766510a2a20dff70da8cad7416534e5_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_footer.html.twig";
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
        return new Twig_Source("<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>", "backoffice/base_admin_footer.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_footer.html.twig");
    }
}
