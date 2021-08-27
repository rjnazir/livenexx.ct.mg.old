<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_40080ea853734df0fbe16c523d55ae2ac77c2bb36bd0bce975dec415c47bc5d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_267c6e6c2bde23582be6534ae9744d68aab89b1ad59d6dd2da47c6a849fedada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267c6e6c2bde23582be6534ae9744d68aab89b1ad59d6dd2da47c6a849fedada->enter($__internal_267c6e6c2bde23582be6534ae9744d68aab89b1ad59d6dd2da47c6a849fedada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $__internal_e5a6817dc84806506b58dff25dec151ddec8035be467ec6dae5b034833a79f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a6817dc84806506b58dff25dec151ddec8035be467ec6dae5b034833a79f96->enter($__internal_e5a6817dc84806506b58dff25dec151ddec8035be467ec6dae5b034833a79f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267c6e6c2bde23582be6534ae9744d68aab89b1ad59d6dd2da47c6a849fedada->leave($__internal_267c6e6c2bde23582be6534ae9744d68aab89b1ad59d6dd2da47c6a849fedada_prof);

        
        $__internal_e5a6817dc84806506b58dff25dec151ddec8035be467ec6dae5b034833a79f96->leave($__internal_e5a6817dc84806506b58dff25dec151ddec8035be467ec6dae5b034833a79f96_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac867f604367a9ad2b5a9249644e39f1e91d73d33376c00bbbd93fceea14c5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac867f604367a9ad2b5a9249644e39f1e91d73d33376c00bbbd93fceea14c5c1->enter($__internal_ac867f604367a9ad2b5a9249644e39f1e91d73d33376c00bbbd93fceea14c5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8610579f41affae2b82d7bc76796af3dae07fa19d72c568b7a877d81f8a3769c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8610579f41affae2b82d7bc76796af3dae07fa19d72c568b7a877d81f8a3769c->enter($__internal_8610579f41affae2b82d7bc76796af3dae07fa19d72c568b7a877d81f8a3769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " Erreur 404 ";
        
        $__internal_8610579f41affae2b82d7bc76796af3dae07fa19d72c568b7a877d81f8a3769c->leave($__internal_8610579f41affae2b82d7bc76796af3dae07fa19d72c568b7a877d81f8a3769c_prof);

        
        $__internal_ac867f604367a9ad2b5a9249644e39f1e91d73d33376c00bbbd93fceea14c5c1->leave($__internal_ac867f604367a9ad2b5a9249644e39f1e91d73d33376c00bbbd93fceea14c5c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a77ba33515eff259662d2062cd529fa7f377bfec00ae108a7fc917d4f9e77110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a77ba33515eff259662d2062cd529fa7f377bfec00ae108a7fc917d4f9e77110->enter($__internal_a77ba33515eff259662d2062cd529fa7f377bfec00ae108a7fc917d4f9e77110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06ca4593b1541d80d1949e8a5f96aa76809e9782c5bcdaa29c302b7e22ad1f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ca4593b1541d80d1949e8a5f96aa76809e9782c5bcdaa29c302b7e22ad1f32->enter($__internal_06ca4593b1541d80d1949e8a5f96aa76809e9782c5bcdaa29c302b7e22ad1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 404</h1>
                <p>Désolé, l'URL demandée n'a pas été trouvée</p>
            </div>
        </div>
    </section>
";
        
        $__internal_06ca4593b1541d80d1949e8a5f96aa76809e9782c5bcdaa29c302b7e22ad1f32->leave($__internal_06ca4593b1541d80d1949e8a5f96aa76809e9782c5bcdaa29c302b7e22ad1f32_prof);

        
        $__internal_a77ba33515eff259662d2062cd529fa7f377bfec00ae108a7fc917d4f9e77110->leave($__internal_a77ba33515eff259662d2062cd529fa7f377bfec00ae108a7fc917d4f9e77110_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %} {{ parent() }} Erreur 404 {% endblock %}

{% block body %}
    <section class=\"kl-content-page relative\">
        <div class=\"container\">
            <div class=\"col-md-12\">
                <h1>Erreur 404</h1>
                <p>Désolé, l'URL demandée n'a pas été trouvée</p>
            </div>
        </div>
    </section>
{% endblock %}
", "TwigBundle:Exception:error404.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources/TwigBundle/views/Exception/error404.html.twig");
    }
}
