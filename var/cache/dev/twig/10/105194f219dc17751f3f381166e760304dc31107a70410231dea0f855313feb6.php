<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9f4cf3d187e02c7f71c44c5d3b62dfc940d13d3bc8f27106dd6bc5b825649a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18196ff86526435ac03d7a5fa1f1b607bd73e8d28a85324c3770075d06069258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18196ff86526435ac03d7a5fa1f1b607bd73e8d28a85324c3770075d06069258->enter($__internal_18196ff86526435ac03d7a5fa1f1b607bd73e8d28a85324c3770075d06069258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_70f026a084c80017ce6f88405528baf9a5448a90275f6564ffb4aee682ba7483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f026a084c80017ce6f88405528baf9a5448a90275f6564ffb4aee682ba7483->enter($__internal_70f026a084c80017ce6f88405528baf9a5448a90275f6564ffb4aee682ba7483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18196ff86526435ac03d7a5fa1f1b607bd73e8d28a85324c3770075d06069258->leave($__internal_18196ff86526435ac03d7a5fa1f1b607bd73e8d28a85324c3770075d06069258_prof);

        
        $__internal_70f026a084c80017ce6f88405528baf9a5448a90275f6564ffb4aee682ba7483->leave($__internal_70f026a084c80017ce6f88405528baf9a5448a90275f6564ffb4aee682ba7483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d56fd97dd4a3c189678e5ff7a70c246f47328ce65a4e225665149830e7de82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d56fd97dd4a3c189678e5ff7a70c246f47328ce65a4e225665149830e7de82d->enter($__internal_0d56fd97dd4a3c189678e5ff7a70c246f47328ce65a4e225665149830e7de82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6cf61a7669955a6fb8807b5d18ab091d3e93992a083aee9ff43df4f481e702fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf61a7669955a6fb8807b5d18ab091d3e93992a083aee9ff43df4f481e702fc->enter($__internal_6cf61a7669955a6fb8807b5d18ab091d3e93992a083aee9ff43df4f481e702fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6cf61a7669955a6fb8807b5d18ab091d3e93992a083aee9ff43df4f481e702fc->leave($__internal_6cf61a7669955a6fb8807b5d18ab091d3e93992a083aee9ff43df4f481e702fc_prof);

        
        $__internal_0d56fd97dd4a3c189678e5ff7a70c246f47328ce65a4e225665149830e7de82d->leave($__internal_0d56fd97dd4a3c189678e5ff7a70c246f47328ce65a4e225665149830e7de82d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad821816831aac6850acce7ee4e61966ea944565a3c1eb0bf525c0dd1bd4a046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad821816831aac6850acce7ee4e61966ea944565a3c1eb0bf525c0dd1bd4a046->enter($__internal_ad821816831aac6850acce7ee4e61966ea944565a3c1eb0bf525c0dd1bd4a046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_00aef8bae3e8765e15fc9de161bac4043b1149a234f3828e9106078e766c3457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00aef8bae3e8765e15fc9de161bac4043b1149a234f3828e9106078e766c3457->enter($__internal_00aef8bae3e8765e15fc9de161bac4043b1149a234f3828e9106078e766c3457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_00aef8bae3e8765e15fc9de161bac4043b1149a234f3828e9106078e766c3457->leave($__internal_00aef8bae3e8765e15fc9de161bac4043b1149a234f3828e9106078e766c3457_prof);

        
        $__internal_ad821816831aac6850acce7ee4e61966ea944565a3c1eb0bf525c0dd1bd4a046->leave($__internal_ad821816831aac6850acce7ee4e61966ea944565a3c1eb0bf525c0dd1bd4a046_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aaee45b0b9d0872f3d699371ea470b93982732e6179606e25245374cbaeeb187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaee45b0b9d0872f3d699371ea470b93982732e6179606e25245374cbaeeb187->enter($__internal_aaee45b0b9d0872f3d699371ea470b93982732e6179606e25245374cbaeeb187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f49e0458928d3aa7e4d78dfd0ae46862ba98df66c6140d575caad2285e3b3561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49e0458928d3aa7e4d78dfd0ae46862ba98df66c6140d575caad2285e3b3561->enter($__internal_f49e0458928d3aa7e4d78dfd0ae46862ba98df66c6140d575caad2285e3b3561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f49e0458928d3aa7e4d78dfd0ae46862ba98df66c6140d575caad2285e3b3561->leave($__internal_f49e0458928d3aa7e4d78dfd0ae46862ba98df66c6140d575caad2285e3b3561_prof);

        
        $__internal_aaee45b0b9d0872f3d699371ea470b93982732e6179606e25245374cbaeeb187->leave($__internal_aaee45b0b9d0872f3d699371ea470b93982732e6179606e25245374cbaeeb187_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
