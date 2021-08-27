<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_25a6653de881eadf4b62b073247cfa6413bcbb843589387422cbf9c2a66ab0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_c7e0ea22606aa3ffb3b0972bbe826647b89db66d58a95b20afeec512c34e9269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e0ea22606aa3ffb3b0972bbe826647b89db66d58a95b20afeec512c34e9269->enter($__internal_c7e0ea22606aa3ffb3b0972bbe826647b89db66d58a95b20afeec512c34e9269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_bb170b4d4657045b355ee8604a5ed8d9f088b68911dad752a8f80474403b2c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb170b4d4657045b355ee8604a5ed8d9f088b68911dad752a8f80474403b2c6b->enter($__internal_bb170b4d4657045b355ee8604a5ed8d9f088b68911dad752a8f80474403b2c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7e0ea22606aa3ffb3b0972bbe826647b89db66d58a95b20afeec512c34e9269->leave($__internal_c7e0ea22606aa3ffb3b0972bbe826647b89db66d58a95b20afeec512c34e9269_prof);

        
        $__internal_bb170b4d4657045b355ee8604a5ed8d9f088b68911dad752a8f80474403b2c6b->leave($__internal_bb170b4d4657045b355ee8604a5ed8d9f088b68911dad752a8f80474403b2c6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f932fc8963130cc3d9ea8f6de65525673e8445a44de7949ef06d0598e42d9232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f932fc8963130cc3d9ea8f6de65525673e8445a44de7949ef06d0598e42d9232->enter($__internal_f932fc8963130cc3d9ea8f6de65525673e8445a44de7949ef06d0598e42d9232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1a37cf8919f63684103d41274eec307eab8e78df2e5c0c7004999f898b16bce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a37cf8919f63684103d41274eec307eab8e78df2e5c0c7004999f898b16bce7->enter($__internal_1a37cf8919f63684103d41274eec307eab8e78df2e5c0c7004999f898b16bce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_1a37cf8919f63684103d41274eec307eab8e78df2e5c0c7004999f898b16bce7->leave($__internal_1a37cf8919f63684103d41274eec307eab8e78df2e5c0c7004999f898b16bce7_prof);

        
        $__internal_f932fc8963130cc3d9ea8f6de65525673e8445a44de7949ef06d0598e42d9232->leave($__internal_f932fc8963130cc3d9ea8f6de65525673e8445a44de7949ef06d0598e42d9232_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
