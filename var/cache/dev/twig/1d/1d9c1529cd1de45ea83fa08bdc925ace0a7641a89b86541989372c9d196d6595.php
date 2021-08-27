<?php

/* AdminBundle:CtBordereau:actived.html.twig */
class __TwigTemplate_aea0b80f528dc0d94d98fe0b963d97a7bbcccb431b2f9bf36dbfe792eb93879b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtBordereau:actived.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9295b97ac4c719a8ef9a88a15008d6f5c44e2f4a9ccecef992a92a24ff0918a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9295b97ac4c719a8ef9a88a15008d6f5c44e2f4a9ccecef992a92a24ff0918a3->enter($__internal_9295b97ac4c719a8ef9a88a15008d6f5c44e2f4a9ccecef992a92a24ff0918a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:actived.html.twig"));

        $__internal_07421dd60e02c3ac054f98fdde64d77fb2c73760bd002464f77b0f593e943629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07421dd60e02c3ac054f98fdde64d77fb2c73760bd002464f77b0f593e943629->enter($__internal_07421dd60e02c3ac054f98fdde64d77fb2c73760bd002464f77b0f593e943629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtBordereau:actived.html.twig"));

        // line 5
        $context["menu_bordereau"] = true;
        // line 6
        $context["menu_bordereau_activation"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9295b97ac4c719a8ef9a88a15008d6f5c44e2f4a9ccecef992a92a24ff0918a3->leave($__internal_9295b97ac4c719a8ef9a88a15008d6f5c44e2f4a9ccecef992a92a24ff0918a3_prof);

        
        $__internal_07421dd60e02c3ac054f98fdde64d77fb2c73760bd002464f77b0f593e943629->leave($__internal_07421dd60e02c3ac054f98fdde64d77fb2c73760bd002464f77b0f593e943629_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_005967692ac0b07e3597f1527671113378a425f5c1c78becaf91b6694b251e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005967692ac0b07e3597f1527671113378a425f5c1c78becaf91b6694b251e58->enter($__internal_005967692ac0b07e3597f1527671113378a425f5c1c78becaf91b6694b251e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_977e1a3497bc3992add76232e2974b5d378dd3321b6127614424d8eed439f6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977e1a3497bc3992add76232e2974b5d378dd3321b6127614424d8eed439f6b8->enter($__internal_977e1a3497bc3992add76232e2974b5d378dd3321b6127614424d8eed439f6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des imprimés techniques ";
        
        $__internal_977e1a3497bc3992add76232e2974b5d378dd3321b6127614424d8eed439f6b8->leave($__internal_977e1a3497bc3992add76232e2974b5d378dd3321b6127614424d8eed439f6b8_prof);

        
        $__internal_005967692ac0b07e3597f1527671113378a425f5c1c78becaf91b6694b251e58->leave($__internal_005967692ac0b07e3597f1527671113378a425f5c1c78becaf91b6694b251e58_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_19343fca4bca05313ebb35892382ca8f6005dc6404096a16b03dd0c26fe6c715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19343fca4bca05313ebb35892382ca8f6005dc6404096a16b03dd0c26fe6c715->enter($__internal_19343fca4bca05313ebb35892382ca8f6005dc6404096a16b03dd0c26fe6c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff37a3b818346e712667178cf828a9e8b6be5630b5046d8678ba3439b4e1fb3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff37a3b818346e712667178cf828a9e8b6be5630b5046d8678ba3439b4e1fb3b->enter($__internal_ff37a3b818346e712667178cf828a9e8b6be5630b5046d8678ba3439b4e1fb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                ";
        // line 44
        echo "
                <form action=\"";
        // line 45
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-use\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                ";
        // line 51
        echo "                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"7%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"22%\">Réf. expression de besoin</th>
                                <th width=\"9%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["its_in_bl"] ?? $this->getContext($context, "its_in_bl")));
        foreach ($context['_seq'] as $context["_key"] => $context["it_in_bl"]) {
            // line 62
            echo "                                <tr>
                                    ";
            // line 66
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blNumero", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["it_in_bl"], "ctImprimeTech", array()), "uteImprimeTech", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blDebutNumero", array()), "html", null, true);
            echo " ";
            if ($this->getAttribute($context["it_in_bl"], "blFinNumero", array())) {
                echo " à ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "blFinNumero", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["it_in_bl"], "refExpr", array()), "html", null, true);
            echo " du ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["it_in_bl"], "dateRefExpr", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary activation-elt\" title=\"Activer\" id=\"btn-imprime-tech-to-actived\"
                                           href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_actived", array("_id" => $this->getAttribute($context["it_in_bl"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-check\"></i>
                                            Activer
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it_in_bl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>

                        ";
        // line 85
        echo "                        ";
        // line 91
        echo "                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_ff37a3b818346e712667178cf828a9e8b6be5630b5046d8678ba3439b4e1fb3b->leave($__internal_ff37a3b818346e712667178cf828a9e8b6be5630b5046d8678ba3439b4e1fb3b_prof);

        
        $__internal_19343fca4bca05313ebb35892382ca8f6005dc6404096a16b03dd0c26fe6c715->leave($__internal_19343fca4bca05313ebb35892382ca8f6005dc6404096a16b03dd0c26fe6c715_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6018ce05c67bdc751dde8047a7c0a17ee74e8ee5b55e215768cdc8a9df072fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6018ce05c67bdc751dde8047a7c0a17ee74e8ee5b55e215768cdc8a9df072fd9->enter($__internal_6018ce05c67bdc751dde8047a7c0a17ee74e8ee5b55e215768cdc8a9df072fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c903f9e51fed6910cc193a34c8cfb01c2e0e4c21ac66b603d2f20541b8188af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c903f9e51fed6910cc193a34c8cfb01c2e0e4c21ac66b603d2f20541b8188af3->enter($__internal_c903f9e51fed6910cc193a34c8cfb01c2e0e4c21ac66b603d2f20541b8188af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 99
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-use').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_c903f9e51fed6910cc193a34c8cfb01c2e0e4c21ac66b603d2f20541b8188af3->leave($__internal_c903f9e51fed6910cc193a34c8cfb01c2e0e4c21ac66b603d2f20541b8188af3_prof);

        
        $__internal_6018ce05c67bdc751dde8047a7c0a17ee74e8ee5b55e215768cdc8a9df072fd9->leave($__internal_6018ce05c67bdc751dde8047a7c0a17ee74e8ee5b55e215768cdc8a9df072fd9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtBordereau:actived.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 99,  243 => 98,  228 => 91,  226 => 85,  221 => 81,  208 => 74,  200 => 71,  190 => 70,  186 => 69,  182 => 68,  178 => 67,  173 => 66,  170 => 62,  166 => 61,  154 => 51,  147 => 45,  144 => 44,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des imprimés techniques {% endblock %}

{% set menu_bordereau               = true %}
{% set menu_bordereau_activation    = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                {# <div class=\"row add-btn-top-list\">
                    <a href=\"#\">
                        <button type=\"submit\" name=\"_group_activation\" class=\"btn btn-primary activation-btn\">
                            <i class=\"fa fa-check\"></i>
                            Activer la sélection
                        </button>
                    </a>
                </div> #}

                <form action=\"{#{ path('bordereau_activation_group') }#}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"liste-imprime-tech-use\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                {# <th></th> #}
                                <th width=\"22%\">N° bordereau</th>
                                <th width=\"15%\">Nom centre</th>
                                <th width=\"15%\">Nom IT</th>
                                <th width=\"7%\">Unité</th>
                                <th width=\"10%\">N° IT</th>
                                <th width=\"22%\">Réf. expression de besoin</th>
                                <th width=\"9%\">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for it_in_bl in its_in_bl %}
                                <tr>
                                    {# <td>
                                        <input type=\"checkbox\" value=\"{{ it_in_bl.id }}\" name=\"activation[]\" />
                                    </td> #}
                                    <td>{{ it_in_bl.blNumero }}</td>
                                    <td>{{ it_in_bl.ctCentre.ctrNom }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.nomImprimeTech }}</td>
                                    <td>{{ it_in_bl.ctImprimeTech.uteImprimeTech }}</td>
                                    <td>{{ it_in_bl.blDebutNumero }} {% if (it_in_bl.blFinNumero) %} à {{ it_in_bl.blFinNumero }} {% endif %}</td>
                                    <td>{{ it_in_bl.refExpr }} du {{ it_in_bl.dateRefExpr|date('d/m/Y') }}</td>
                                    <td>
                                        <a class=\"btn btn-primary activation-elt\" title=\"Activer\" id=\"btn-imprime-tech-to-actived\"
                                           href=\"{{ path('bordereau_actived', { '_id': it_in_bl.id }) }}\">
                                            <i class=\"fa fa-check\"></i>
                                            Activer
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton activer #}
                        {# <a href=\"#\">
                            <button type=\"submit\" name=\"_group_activation\" class=\"btn btn-primary activation-btn\">
                                <i class=\"fa fa-check\"></i>
                                Activer la sélection
                            </button>
                        </a> #}
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#liste-imprime-tech-use').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtBordereau:actived.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtBordereau\\actived.html.twig");
    }
}
