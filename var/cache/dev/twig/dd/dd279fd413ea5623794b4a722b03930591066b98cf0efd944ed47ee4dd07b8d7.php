<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_b13eb88dad4203cc83bbb79dd99cc0e126e306f4e0c7ea4bac9349a366902ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2045d8862b537dfd8c894acca5327fe71b5f1f14082896cd1063830808d730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2045d8862b537dfd8c894acca5327fe71b5f1f14082896cd1063830808d730->enter($__internal_7a2045d8862b537dfd8c894acca5327fe71b5f1f14082896cd1063830808d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_540a835d4e00c0836a114a1f1d70e01f76338523844675176520dc3a4da723d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540a835d4e00c0836a114a1f1d70e01f76338523844675176520dc3a4da723d6->enter($__internal_540a835d4e00c0836a114a1f1d70e01f76338523844675176520dc3a4da723d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a2045d8862b537dfd8c894acca5327fe71b5f1f14082896cd1063830808d730->leave($__internal_7a2045d8862b537dfd8c894acca5327fe71b5f1f14082896cd1063830808d730_prof);

        
        $__internal_540a835d4e00c0836a114a1f1d70e01f76338523844675176520dc3a4da723d6->leave($__internal_540a835d4e00c0836a114a1f1d70e01f76338523844675176520dc3a4da723d6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39b440684331d2f8b9ac1432936eea3933dc39ef87eb1cd8b2154c68359f5178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b440684331d2f8b9ac1432936eea3933dc39ef87eb1cd8b2154c68359f5178->enter($__internal_39b440684331d2f8b9ac1432936eea3933dc39ef87eb1cd8b2154c68359f5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2d248a77459ba0114d043d6b61af18fe270b8a44543a049fc4b17e3b657c0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d248a77459ba0114d043d6b61af18fe270b8a44543a049fc4b17e3b657c0c2->enter($__internal_f2d248a77459ba0114d043d6b61af18fe270b8a44543a049fc4b17e3b657c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f2d248a77459ba0114d043d6b61af18fe270b8a44543a049fc4b17e3b657c0c2->leave($__internal_f2d248a77459ba0114d043d6b61af18fe270b8a44543a049fc4b17e3b657c0c2_prof);

        
        $__internal_39b440684331d2f8b9ac1432936eea3933dc39ef87eb1cd8b2154c68359f5178->leave($__internal_39b440684331d2f8b9ac1432936eea3933dc39ef87eb1cd8b2154c68359f5178_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
