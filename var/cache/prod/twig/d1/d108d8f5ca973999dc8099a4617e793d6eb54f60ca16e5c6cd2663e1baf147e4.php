<?php

/* backoffice/base_admin_footer.html.twig */
class __TwigTemplate_b80030efcc1c88ab326e83de2ed0aeb3c508fd8fc7d2b4a9a20470cd71639389 extends Twig_Template
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
        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "backoffice/base_admin_footer.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_footer.html.twig");
    }
}
