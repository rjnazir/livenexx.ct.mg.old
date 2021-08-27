<?php

/* @Admin/CtReception/index.html.twig */
class __TwigTemplate_29cfedd3ee6c24199ab0ccb06d0baedc9645f0ca213352f0ad64020588973e3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/index.html.twig", 1);
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
        $__internal_ab331c84c5cc2e263dfa5cf0579ed3c3db89da29531407f7da17e6a7c7a6bbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab331c84c5cc2e263dfa5cf0579ed3c3db89da29531407f7da17e6a7c7a6bbb8->enter($__internal_ab331c84c5cc2e263dfa5cf0579ed3c3db89da29531407f7da17e6a7c7a6bbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/index.html.twig"));

        $__internal_a3af25a1c352785039973443d1e0cc32d7c0e8d5a29118c3b9d4d3fdae08816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3af25a1c352785039973443d1e0cc32d7c0e8d5a29118c3b9d4d3fdae08816d->enter($__internal_a3af25a1c352785039973443d1e0cc32d7c0e8d5a29118c3b9d4d3fdae08816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/index.html.twig"));

        // line 5
        $context["menu_reception"] = true;
        // line 6
        $context["menu_reception"] = true;
        // line 7
        $context["menu_reception_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab331c84c5cc2e263dfa5cf0579ed3c3db89da29531407f7da17e6a7c7a6bbb8->leave($__internal_ab331c84c5cc2e263dfa5cf0579ed3c3db89da29531407f7da17e6a7c7a6bbb8_prof);

        
        $__internal_a3af25a1c352785039973443d1e0cc32d7c0e8d5a29118c3b9d4d3fdae08816d->leave($__internal_a3af25a1c352785039973443d1e0cc32d7c0e8d5a29118c3b9d4d3fdae08816d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa3b3e7406cd826b0281255f5f489a1fd8f2ea0ca9046f5aaa179b3844aa46ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3b3e7406cd826b0281255f5f489a1fd8f2ea0ca9046f5aaa179b3844aa46ae->enter($__internal_aa3b3e7406cd826b0281255f5f489a1fd8f2ea0ca9046f5aaa179b3844aa46ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e057c5c3f56c6f5398c0f3a425002bcf8d9a9b81cc6ae001f419278414dbdada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e057c5c3f56c6f5398c0f3a425002bcf8d9a9b81cc6ae001f419278414dbdada->enter($__internal_e057c5c3f56c6f5398c0f3a425002bcf8d9a9b81cc6ae001f419278414dbdada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des réceptions ";
        
        $__internal_e057c5c3f56c6f5398c0f3a425002bcf8d9a9b81cc6ae001f419278414dbdada->leave($__internal_e057c5c3f56c6f5398c0f3a425002bcf8d9a9b81cc6ae001f419278414dbdada_prof);

        
        $__internal_aa3b3e7406cd826b0281255f5f489a1fd8f2ea0ca9046f5aaa179b3844aa46ae->leave($__internal_aa3b3e7406cd826b0281255f5f489a1fd8f2ea0ca9046f5aaa179b3844aa46ae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_45da6ee6cd969f351fad5684566786ff58bbede06bcc580ed08b31c51b6955a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45da6ee6cd969f351fad5684566786ff58bbede06bcc580ed08b31c51b6955a2->enter($__internal_45da6ee6cd969f351fad5684566786ff58bbede06bcc580ed08b31c51b6955a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78168105acda7db0515dab9d3341cde07e4c69e9a96b65a7214e708988d4459d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78168105acda7db0515dab9d3341cde07e4c69e9a96b65a7214e708988d4459d->enter($__internal_78168105acda7db0515dab9d3341cde07e4c69e9a96b65a7214e708988d4459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une Réception
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-reception\" class=\"table table-bordered table-condensed text-center\">
                            <thead>
                            <tr>
                                <th>Group</th>
                                <th class=\"fit\">Id</th>
                                <th>Prop</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Numéro de serie</th>
                                <th>Numéro moteur</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["receptions"] ?? $this->getContext($context, "receptions"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group_index"]) {
            // line 63
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["receptions"] ?? $this->getContext($context, "receptions")), $context["group_index"], array(), "array"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["reception"]) {
                // line 64
                echo "                                <tr>
                                    ";
                // line 65
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 66
                    echo "                                    <td rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["receptions"] ?? $this->getContext($context, "receptions")), $context["group_index"], array(), "array")), "html", null, true);
                    echo "\">
                                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $context["group_index"], "html", null, true);
                    echo "
                                    </td>
                                    ";
                }
                // line 70
                echo "                                    <td class=\"fit\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reception"], "id", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["reception"], "rcpProprietaire", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reception"], "ctTypeReception", array()), "tprcpLibelle", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reception"], "ctVehicule", array()), "ctGenre", array()), "grLibelle", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reception"], "ctVehicule", array()), "vhcNumSerie", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reception"], "ctVehicule", array()), "vhcNumMoteur", array()), "html", null, true);
                echo "</td>
                                    ";
                // line 76
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 77
                    echo "                                    <td rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["receptions"] ?? $this->getContext($context, "receptions")), $context["group_index"], array(), "array")), "html", null, true);
                    echo "\">
                                    <a class=\"btn btn-primary\" title=\"Modifier\"
                                    href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_edit", array("id" => $this->getAttribute($context["reception"], "id", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                    href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_delete", array("id" => $this->getAttribute($context["reception"], "id", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-trash\"></i>
                                    </a>
                                    <a class=\"btn btn-warning\" title=\"Voir\"
                                    href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_view", array("id" => $this->getAttribute($context["reception"], "id", array()))), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-eye\"></i>
                                    </a>
                                    </td>
                                    ";
                }
                // line 92
                echo "                                </tr>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reception'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group_index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
                                    ";
        // line 97
        echo "                                    ";
        // line 98
        echo "                                    ";
        // line 99
        echo "                                    ";
        // line 100
        echo "                                    ";
        // line 101
        echo "                                        ";
        // line 102
        echo "                                           ";
        // line 103
        echo "                                            ";
        // line 104
        echo "                                        ";
        // line 105
        echo "                                        ";
        // line 106
        echo "                                           ";
        // line 107
        echo "                                            ";
        // line 108
        echo "                                        ";
        // line 109
        echo "                                        ";
        // line 110
        echo "                                           ";
        // line 111
        echo "                                            ";
        // line 112
        echo "                                        ";
        // line 113
        echo "                                    ";
        // line 114
        echo "                                    ";
        // line 115
        echo "                                        ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                    ";
        // line 118
        echo "                                    ";
        // line 119
        echo "                                    ";
        // line 120
        echo "                                    ";
        // line 121
        echo "                                    ";
        // line 122
        echo "                                    ";
        // line 123
        echo "                                        ";
        // line 124
        echo "                                           ";
        // line 125
        echo "                                            ";
        // line 126
        echo "                                        ";
        // line 127
        echo "                                        ";
        // line 128
        echo "                                           ";
        // line 129
        echo "                                            ";
        // line 130
        echo "                                        ";
        // line 131
        echo "                                        ";
        // line 132
        echo "                                           ";
        // line 133
        echo "                                            ";
        // line 134
        echo "                                        ";
        // line 135
        echo "                                    ";
        // line 136
        echo "                                </tr>
                            ";
        // line 138
        echo "                            </tbody>
                        </table>

                        ";
        // line 142
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_78168105acda7db0515dab9d3341cde07e4c69e9a96b65a7214e708988d4459d->leave($__internal_78168105acda7db0515dab9d3341cde07e4c69e9a96b65a7214e708988d4459d_prof);

        
        $__internal_45da6ee6cd969f351fad5684566786ff58bbede06bcc580ed08b31c51b6955a2->leave($__internal_45da6ee6cd969f351fad5684566786ff58bbede06bcc580ed08b31c51b6955a2_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7247f858a33f50d47eb4293c2063d7318dfb46c395e4790d97d524fbf9797e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7247f858a33f50d47eb4293c2063d7318dfb46c395e4790d97d524fbf9797e0->enter($__internal_c7247f858a33f50d47eb4293c2063d7318dfb46c395e4790d97d524fbf9797e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a72624b94ede08abb24ccc50e93cd1f452ee426db1dc818314c4276476998217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72624b94ede08abb24ccc50e93cd1f452ee426db1dc818314c4276476998217->enter($__internal_a72624b94ede08abb24ccc50e93cd1f452ee426db1dc818314c4276476998217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
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
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
";
        
        $__internal_a72624b94ede08abb24ccc50e93cd1f452ee426db1dc818314c4276476998217->leave($__internal_a72624b94ede08abb24ccc50e93cd1f452ee426db1dc818314c4276476998217_prof);

        
        $__internal_c7247f858a33f50d47eb4293c2063d7318dfb46c395e4790d97d524fbf9797e0->leave($__internal_c7247f858a33f50d47eb4293c2063d7318dfb46c395e4790d97d524fbf9797e0_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 156,  422 => 155,  401 => 142,  396 => 138,  393 => 136,  391 => 135,  389 => 134,  387 => 133,  385 => 132,  383 => 131,  381 => 130,  379 => 129,  377 => 128,  375 => 127,  373 => 126,  371 => 125,  369 => 124,  367 => 123,  365 => 122,  363 => 121,  361 => 120,  359 => 119,  357 => 118,  355 => 117,  353 => 116,  351 => 115,  349 => 114,  347 => 113,  345 => 112,  343 => 111,  341 => 110,  339 => 109,  337 => 108,  335 => 107,  333 => 106,  331 => 105,  329 => 104,  327 => 103,  325 => 102,  323 => 101,  321 => 100,  319 => 99,  317 => 98,  315 => 97,  312 => 95,  298 => 94,  283 => 92,  275 => 87,  268 => 83,  261 => 79,  255 => 77,  253 => 76,  249 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 71,  228 => 70,  222 => 67,  217 => 66,  215 => 65,  212 => 64,  194 => 63,  177 => 62,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des réceptions {% endblock %}

{% set menu_reception      = true %}
{% set menu_reception      = true %}
{% set menu_reception_list = true %}

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
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('reception_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une Réception
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('reception_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-reception\" class=\"table table-bordered table-condensed text-center\">
                            <thead>
                            <tr>
                                <th>Group</th>
                                <th class=\"fit\">Id</th>
                                <th>Prop</th>
                                <th>Type</th>
                                <th>Genre</th>
                                <th>Numéro de serie</th>
                                <th>Numéro moteur</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for group_index in receptions|keys %}
                                {% for reception in receptions[group_index] %}
                                <tr>
                                    {% if loop.first %}
                                    <td rowspan=\"{{ receptions[group_index] | length }}\">
                                        {{ group_index }}
                                    </td>
                                    {% endif %}
                                    <td class=\"fit\">{{ reception.id }}</td>
                                    <td>{{ reception.rcpProprietaire }}</td>
                                    <td>{{ reception.ctTypeReception.tprcpLibelle }}</td>
                                    <td>{{ reception.ctVehicule.ctGenre.grLibelle }}</td>
                                    <td>{{ reception.ctVehicule.vhcNumSerie }}</td>
                                    <td>{{ reception.ctVehicule.vhcNumMoteur }}</td>
                                    {% if loop.first %}
                                    <td rowspan=\"{{ receptions[group_index] | length }}\">
                                    <a class=\"btn btn-primary\" title=\"Modifier\"
                                    href=\"{{ path('reception_edit', { 'id': reception.id }) }}\">
                                    <i class=\"fa fa-edit\"></i>
                                    </a>
                                    <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                    href=\"{{ path('reception_delete', { 'id': reception.id }) }}\">
                                    <i class=\"fa fa-trash\"></i>
                                    </a>
                                    <a class=\"btn btn-warning\" title=\"Voir\"
                                    href=\"{{ path('reception_view', { 'id': reception.id }) }}\">
                                    <i class=\"fa fa-eye\"></i>
                                    </a>
                                    </td>
                                    {% endif %}
                                </tr>
                                {% endfor %}
                            {% endfor %}

                                    {#<td>{{ reception.ctTypeReception.tprcpLibelle }}</td>#}
                                    {#<td>{{ reception.ctVehicule.ctGenre.grLibelle }}</td>#}
                                    {#<td>{{ reception.ctVehicule.vhcNumSerie }}</td>#}
                                    {#<td>{{ reception.ctVehicule.vhcNumMoteur }}</td>#}
                                    {#<td>#}
                                        {#<a class=\"btn btn-primary\" title=\"Modifier\"#}
                                           {#href=\"{{ path('reception_edit', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-edit\"></i>#}
                                        {#</a>#}
                                        {#<a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"#}
                                           {#href=\"{{ path('reception_delete', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-trash\"></i>#}
                                        {#</a>#}
                                        {#<a class=\"btn btn-warning\" title=\"Voir\"#}
                                           {#href=\"{{ path('reception_view', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-eye\"></i>#}
                                        {#</a>#}
                                    {#</td>#}
                                    {#<td>#}
                                        {#<input type=\"checkbox\" value=\"{{ reception.id }}\" name=\"delete[]\" />#}
                                    {#</td>#}
                                    {#<td>{{ reception.id }}</td>#}
                                    {#<td>{{ reception.ctTypeReception.tprcpLibelle }}</td>#}
                                    {#<td>{{ reception.ctVehicule.ctGenre.grLibelle }}</td>#}
                                    {#<td>{{ reception.ctVehicule.vhcNumSerie }}</td>#}
                                    {#<td>{{ reception.ctVehicule.vhcNumMoteur }}</td>#}
                                    {#<td>#}
                                        {#<a class=\"btn btn-primary\" title=\"Modifier\"#}
                                           {#href=\"{{ path('reception_edit', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-edit\"></i>#}
                                        {#</a>#}
                                        {#<a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"#}
                                           {#href=\"{{ path('reception_delete', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-trash\"></i>#}
                                        {#</a>#}
                                        {#<a class=\"btn btn-warning\" title=\"Voir\"#}
                                           {#href=\"{{ path('reception_view', { 'id': reception.id }) }}\">#}
                                            {#<i class=\"fa fa-eye\"></i>#}
                                        {#</a>#}
                                    {#</td>#}
                                </tr>
                            {#{% endfor %}#}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
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
            \$('#list-reception').DataTable(
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
                        \"sEmptyTable\": \"Aucune reception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                });
        });
    </script>
{% endblock %}
", "@Admin/CtReception/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\index.html.twig");
    }
}
