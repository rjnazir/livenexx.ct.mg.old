<?php

/* :backoffice:base_admin_footer.html.twig */
class __TwigTemplate_6116e0afc2e916719c3442be3305509f934e56538af72fd6deb5b15199670302 extends Twig_Template
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
        $__internal_497f91604debef7c7892285a0fa6192cc13278f13161910fa0d5ac5c13c6a44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497f91604debef7c7892285a0fa6192cc13278f13161910fa0d5ac5c13c6a44c->enter($__internal_497f91604debef7c7892285a0fa6192cc13278f13161910fa0d5ac5c13c6a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        $__internal_2ac54fd99fda4fdd75adfa01126225443817d3f2f52ed5595f7655ad6e853cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac54fd99fda4fdd75adfa01126225443817d3f2f52ed5595f7655ad6e853cc7->enter($__internal_2ac54fd99fda4fdd75adfa01126225443817d3f2f52ed5595f7655ad6e853cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        <b>Contrôle technique</b>
    </div>
    <strong>Copyright &copy; 2017 <a href=\"#\">Livenexx</a>.</strong>
</footer>";
        
        $__internal_497f91604debef7c7892285a0fa6192cc13278f13161910fa0d5ac5c13c6a44c->leave($__internal_497f91604debef7c7892285a0fa6192cc13278f13161910fa0d5ac5c13c6a44c_prof);

        
        $__internal_2ac54fd99fda4fdd75adfa01126225443817d3f2f52ed5595f7655ad6e853cc7->leave($__internal_2ac54fd99fda4fdd75adfa01126225443817d3f2f52ed5595f7655ad6e853cc7_prof);

    }

    public function getTemplateName()
    {
        return ":backoffice:base_admin_footer.html.twig";
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
</footer>", ":backoffice:base_admin_footer.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_footer.html.twig");
    }
}
