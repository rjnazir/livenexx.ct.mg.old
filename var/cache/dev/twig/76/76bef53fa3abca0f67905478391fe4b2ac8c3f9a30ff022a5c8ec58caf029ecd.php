<?php

/* @Admin/CtHistorique/index.html.twig */
class __TwigTemplate_efc49a3eb1ba46c554cb55e8efd17a305b83d736cd5a0758794c03937d3b054e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtHistorique/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_8e08314884bf694856da6b67d968ef3f355148c686765dec7de79223470140ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e08314884bf694856da6b67d968ef3f355148c686765dec7de79223470140ce->enter($__internal_8e08314884bf694856da6b67d968ef3f355148c686765dec7de79223470140ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtHistorique/index.html.twig"));

        $__internal_67edfb240720611c77c36909f85f96c092b56c68502b7b16634c9f62b7bc1067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67edfb240720611c77c36909f85f96c092b56c68502b7b16634c9f62b7bc1067->enter($__internal_67edfb240720611c77c36909f85f96c092b56c68502b7b16634c9f62b7bc1067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtHistorique/index.html.twig"));

        // line 12
        $context["menu_historique"] = true;
        // line 13
        $context["menu_historique_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e08314884bf694856da6b67d968ef3f355148c686765dec7de79223470140ce->leave($__internal_8e08314884bf694856da6b67d968ef3f355148c686765dec7de79223470140ce_prof);

        
        $__internal_67edfb240720611c77c36909f85f96c092b56c68502b7b16634c9f62b7bc1067->leave($__internal_67edfb240720611c77c36909f85f96c092b56c68502b7b16634c9f62b7bc1067_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4992ef50372f4d3cf39d25241a323dace13b2da8c58e1dbc2fa73a26f31e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4992ef50372f4d3cf39d25241a323dace13b2da8c58e1dbc2fa73a26f31e1b->enter($__internal_df4992ef50372f4d3cf39d25241a323dace13b2da8c58e1dbc2fa73a26f31e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bf570f0a49183b05c6b9133f87d05101f574a0d757bdb8f347f1e2028cc7006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf570f0a49183b05c6b9133f87d05101f574a0d757bdb8f347f1e2028cc7006->enter($__internal_7bf570f0a49183b05c6b9133f87d05101f574a0d757bdb8f347f1e2028cc7006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des historiques ";
        
        $__internal_7bf570f0a49183b05c6b9133f87d05101f574a0d757bdb8f347f1e2028cc7006->leave($__internal_7bf570f0a49183b05c6b9133f87d05101f574a0d757bdb8f347f1e2028cc7006_prof);

        
        $__internal_df4992ef50372f4d3cf39d25241a323dace13b2da8c58e1dbc2fa73a26f31e1b->leave($__internal_df4992ef50372f4d3cf39d25241a323dace13b2da8c58e1dbc2fa73a26f31e1b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7f5ba853f489cf5921d06bd6789ee9ed324df67d1d66656b309d6c05be5f08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f5ba853f489cf5921d06bd6789ee9ed324df67d1d66656b309d6c05be5f08a->enter($__internal_d7f5ba853f489cf5921d06bd6789ee9ed324df67d1d66656b309d6c05be5f08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_02c3903c3646f85a3eeb48f4ace780333e6010dfbd8c46e1a8a6d9977426d191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c3903c3646f85a3eeb48f4ace780333e6010dfbd8c46e1a8a6d9977426d191->enter($__internal_02c3903c3646f85a3eeb48f4ace780333e6010dfbd8c46e1a8a6d9977426d191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_02c3903c3646f85a3eeb48f4ace780333e6010dfbd8c46e1a8a6d9977426d191->leave($__internal_02c3903c3646f85a3eeb48f4ace780333e6010dfbd8c46e1a8a6d9977426d191_prof);

        
        $__internal_d7f5ba853f489cf5921d06bd6789ee9ed324df67d1d66656b309d6c05be5f08a->leave($__internal_d7f5ba853f489cf5921d06bd6789ee9ed324df67d1d66656b309d6c05be5f08a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_97284b42c6e6c511e4ec792b7b6e3315e2029926613643fa1649477b6e6dd193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97284b42c6e6c511e4ec792b7b6e3315e2029926613643fa1649477b6e6dd193->enter($__internal_97284b42c6e6c511e4ec792b7b6e3315e2029926613643fa1649477b6e6dd193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42c4ec8d24a5b8c9d7ed31ef38f5f1c7674adc44159657ad732152d91dc911be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c4ec8d24a5b8c9d7ed31ef38f5f1c7674adc44159657ad732152d91dc911be->enter($__internal_42c4ec8d24a5b8c9d7ed31ef38f5f1c7674adc44159657ad732152d91dc911be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-success\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 28
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 29
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    ";
        // line 34
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche par véhicule</h3>
                </div>

                <div class=\"box-body\">
                    <form action=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                            <input required id=\"ct_numero_serie\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["numero_serie_search"] ?? $this->getContext($context, "numero_serie_search")), "html", null, true);
        echo "\" name=\"ct_numero_serie\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\"></h3>
                </div>

                <div class=\"box-body\">
                    <form action=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
        echo "\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"ct_numero_serie\">Par immatriculation du vehicule</label>
                            <input required id=\"ct_numero_immatriculation\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["numero_serie_search"] ?? $this->getContext($context, "numero_serie_search")), "html", null, true);
        echo "\" name=\"ct_numero_immatriculation\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<div id=\"to-print\">
    <div class=\"row\">
        ";
        // line 79
        echo "        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Réception</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-reception\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Motif</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["receptions"] ?? $this->getContext($context, "receptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["reception"]) {
            // line 100
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 102
            if ($this->getAttribute($context["reception"], "ctCentre", array())) {
                // line 103
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reception"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 105
            echo "                                        </td>
                                        <td>
                                            ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["reception"], "rcpProprietaire", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 110
            if ($this->getAttribute($this->getAttribute($context["reception"], "ctVehicule", array()), "ctMarque", array())) {
                // line 111
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reception"], "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 113
            echo "                                        </td>
                                        <td>
                                            ";
            // line 115
            if ($this->getAttribute($context["reception"], "ctMotif", array())) {
                // line 116
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reception"], "ctMotif", array()), "mtfLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 118
            echo "                                        </td>
                                        <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reception"], "rcpCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 132
        echo "        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Carte grise</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cartes_grise"] ?? $this->getContext($context, "cartes_grise")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 152
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 154
            if ($this->getAttribute($context["carte_grise"], "ctCentre", array())) {
                // line 155
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["carte_grise"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 157
            echo "                                        </td>
                                        <td>
                                            ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "cgNom", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 162
            if ($this->getAttribute($this->getAttribute($context["carte_grise"], "ctVehicule", array()), "ctMarque", array())) {
                // line 163
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["carte_grise"], "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 165
            echo "                                        </td>
                                        <td>";
            // line 166
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carte_grise"], "cgCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 180
        echo "        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Visite technique</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-visite\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Vérificateur</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Aptitude</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 202
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 204
            if ($this->getAttribute($context["visite"], "ctCentre", array())) {
                // line 205
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 207
            echo "                                        </td>
                                        <td>
                                            ";
            // line 209
            if ($this->getAttribute($context["visite"], "ctVerificateur", array())) {
                // line 210
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctVerificateur", array()), "usrName", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 212
            echo "                                        </td>
                                        <td>
                                            ";
            // line 214
            if ($this->getAttribute($context["visite"], "ctCarteGrise", array())) {
                // line 215
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "cgNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 217
            echo "                                        </td>
                                        <td>
                                            ";
            // line 219
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array())) {
                // line 220
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 222
            echo "                                        </td>
                                        <td>
                                            ";
            // line 224
            if (($this->getAttribute($context["visite"], "vstIsApte", array()) == 1)) {
                // line 225
                echo "                                                Apte
                                            ";
            } else {
                // line 227
                echo "                                                Inapte
                                            ";
            }
            // line 229
            echo "                                        </td>
                                        <td>";
            // line 230
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visite"], "vstCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">

        ";
        // line 244
        echo "        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Contre visite</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Vérificateur</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Aptitude</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contre_visites"] ?? $this->getContext($context, "contre_visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["contre_visite"]) {
            // line 266
            echo "                                    <tr>
                                        <td>
                                            ";
            // line 268
            if ($this->getAttribute($context["contre_visite"], "ctCentre", array())) {
                // line 269
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contre_visite"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 271
            echo "                                        </td>
                                        <td>
                                            ";
            // line 273
            if ($this->getAttribute($context["contre_visite"], "ctVerificateur", array())) {
                // line 274
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contre_visite"], "ctVerificateur", array()), "usrName", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 276
            echo "                                        </td>
                                        <td>
                                            ";
            // line 278
            if ($this->getAttribute($context["contre_visite"], "ctCarteGrise", array())) {
                // line 279
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contre_visite"], "ctCarteGrise", array()), "cgNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 281
            echo "                                        </td>
                                        <td>
                                            ";
            // line 283
            if ($this->getAttribute($this->getAttribute($this->getAttribute($context["contre_visite"], "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array())) {
                // line 284
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["contre_visite"], "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 286
            echo "                                        </td>
                                        <td>
                                            ";
            // line 288
            if (($this->getAttribute($context["contre_visite"], "vstIsApte", array()) == 1)) {
                // line 289
                echo "                                                Apte
                                            ";
            } else {
                // line 291
                echo "                                                Inapte
                                            ";
            }
            // line 293
            echo "                                        </td>
                                        <td>";
            // line 294
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contre_visite"], "vstCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contre_visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div><center>
            <button id=\"print\" class=\"btn btn-primary hidden-print\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span> Print</button>
        </center></div>
";
        
        $__internal_42c4ec8d24a5b8c9d7ed31ef38f5f1c7674adc44159657ad732152d91dc911be->leave($__internal_42c4ec8d24a5b8c9d7ed31ef38f5f1c7674adc44159657ad732152d91dc911be_prof);

        
        $__internal_97284b42c6e6c511e4ec792b7b6e3315e2029926613643fa1649477b6e6dd193->leave($__internal_97284b42c6e6c511e4ec792b7b6e3315e2029926613643fa1649477b6e6dd193_prof);

    }

    // line 311
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea17b4d6f2d093f4b0a0a5706f150c5215abf2c9eca615d8ade3a297469e2c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea17b4d6f2d093f4b0a0a5706f150c5215abf2c9eca615d8ade3a297469e2c7e->enter($__internal_ea17b4d6f2d093f4b0a0a5706f150c5215abf2c9eca615d8ade3a297469e2c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bae66cc4d048d3bd539ad8f305c409844448262fd757f4d7d03254090998c992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae66cc4d048d3bd539ad8f305c409844448262fd757f4d7d03254090998c992->enter($__internal_bae66cc4d048d3bd539ad8f305c409844448262fd757f4d7d03254090998c992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 312
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
                {
                    \"responsive\":true,
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
                        \"sEmptyTable\": \"Aucune réception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-carte-grise').DataTable(
                {
                    \"responsive\":true,
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
                        \"sEmptyTable\": \"Aucune carte grise trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-visite').DataTable(
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
                        \"sEmptyTable\": \"Aucun visite trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-contre-visite').DataTable(
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
                        \"sEmptyTable\": \"Aucun contre visite trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );
        });
    </script>

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vehicule_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 413
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/jquery.jqprint-0.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/historique.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bae66cc4d048d3bd539ad8f305c409844448262fd757f4d7d03254090998c992->leave($__internal_bae66cc4d048d3bd539ad8f305c409844448262fd757f4d7d03254090998c992_prof);

        
        $__internal_ea17b4d6f2d093f4b0a0a5706f150c5215abf2c9eca615d8ade3a297469e2c7e->leave($__internal_ea17b4d6f2d093f4b0a0a5706f150c5215abf2c9eca615d8ade3a297469e2c7e_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtHistorique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 416,  751 => 415,  746 => 413,  742 => 412,  737 => 410,  635 => 312,  626 => 311,  604 => 297,  595 => 294,  592 => 293,  588 => 291,  584 => 289,  582 => 288,  578 => 286,  572 => 284,  570 => 283,  566 => 281,  560 => 279,  558 => 278,  554 => 276,  548 => 274,  546 => 273,  542 => 271,  536 => 269,  534 => 268,  530 => 266,  526 => 265,  503 => 244,  491 => 233,  482 => 230,  479 => 229,  475 => 227,  471 => 225,  469 => 224,  465 => 222,  459 => 220,  457 => 219,  453 => 217,  447 => 215,  445 => 214,  441 => 212,  435 => 210,  433 => 209,  429 => 207,  423 => 205,  421 => 204,  417 => 202,  413 => 201,  390 => 180,  378 => 169,  369 => 166,  366 => 165,  360 => 163,  358 => 162,  352 => 159,  348 => 157,  342 => 155,  340 => 154,  336 => 152,  332 => 151,  311 => 132,  300 => 122,  291 => 119,  288 => 118,  282 => 116,  280 => 115,  276 => 113,  270 => 111,  268 => 110,  262 => 107,  258 => 105,  252 => 103,  250 => 102,  246 => 100,  242 => 99,  220 => 79,  204 => 65,  198 => 62,  178 => 45,  172 => 42,  162 => 34,  159 => 32,  150 => 29,  145 => 28,  141 => 27,  138 => 26,  129 => 23,  126 => 22,  121 => 21,  112 => 18,  109 => 17,  104 => 16,  95 => 15,  83 => 9,  76 => 6,  67 => 5,  48 => 3,  38 => 1,  36 => 13,  34 => 12,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des historiques {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_historique      = true %}
{% set menu_historique_list = true %}

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

    {# Formulaire recherche #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche par véhicule</h3>
                </div>

                <div class=\"box-body\">
                    <form action=\"{{ path('historique_index') }}\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                            <input required id=\"ct_numero_serie\" value=\"{{ numero_serie_search }}\" name=\"ct_numero_serie\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\"></h3>
                </div>

                <div class=\"box-body\">
                    <form action=\"{{ path('historique_index') }}\" method=\"POST\">
                        <div class=\"form-group\">
                            <label for=\"ct_numero_serie\">Par immatriculation du vehicule</label>
                            <input required id=\"ct_numero_immatriculation\" value=\"{{ numero_serie_search }}\" name=\"ct_numero_immatriculation\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<div id=\"to-print\">
    <div class=\"row\">
        {# Réception #}
        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Réception</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-reception\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Motif</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for reception in receptions %}
                                    <tr>
                                        <td>
                                            {% if reception.ctCentre %}
                                                {{ reception.ctCentre.ctrNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ reception.rcpProprietaire }}
                                        </td>
                                        <td>
                                            {% if reception.ctVehicule.ctMarque %}
                                                {{ reception.ctVehicule.ctMarque.mrqLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if reception.ctMotif %}
                                                {{ reception.ctMotif.mtfLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>{{ reception.rcpCreated|date('d/m/Y') }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        {# Carte grise #}
        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Carte grise</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for carte_grise in cartes_grise %}
                                    <tr>
                                        <td>
                                            {% if carte_grise.ctCentre %}
                                                {{ carte_grise.ctCentre.ctrNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ carte_grise.cgNom }}
                                        </td>
                                        <td>
                                            {% if carte_grise.ctVehicule.ctMarque %}
                                                {{ carte_grise.ctVehicule.ctMarque.mrqLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>{{ carte_grise.cgCreated|date('d/m/Y') }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        {# Visite technique #}
        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Visite technique</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-visite\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Vérificateur</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Aptitude</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for visite in visites %}
                                    <tr>
                                        <td>
                                            {% if visite.ctCentre %}
                                                {{ visite.ctCentre.ctrNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if visite.ctVerificateur %}
                                                {{ visite.ctVerificateur.usrName }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if visite.ctCarteGrise %}
                                                {{ visite.ctCarteGrise.cgNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if visite.ctCarteGrise.ctVehicule.ctMarque %}
                                                {{ visite.ctCarteGrise.ctVehicule.ctMarque.mrqLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if visite.vstIsApte == 1 %}
                                                Apte
                                            {% else %}
                                                Inapte
                                            {% endif %}
                                        </td>
                                        <td>{{ visite.vstCreated|date('d/m/Y') }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">

        {# Contre visite #}
        <div class=\"col-md-12 kl-bloc-stat\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Contre visite</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"box-body table-responsive\">
                        <div class=\"box-body table-responsive\">
                            <table id=\"list-contre-visite\" class=\"table table-bordered table-striped table-condensed\">
                                <thead>
                                <tr>
                                    <th>Centre</th>
                                    <th>Vérificateur</th>
                                    <th>Nom propriétaire</th>
                                    <th>Marque</th>
                                    <th>Aptitude</th>
                                    <th>Date de création</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for contre_visite in contre_visites %}
                                    <tr>
                                        <td>
                                            {% if contre_visite.ctCentre %}
                                                {{ contre_visite.ctCentre.ctrNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if contre_visite.ctVerificateur %}
                                                {{ contre_visite.ctVerificateur.usrName }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if contre_visite.ctCarteGrise %}
                                                {{ contre_visite.ctCarteGrise.cgNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if contre_visite.ctCarteGrise.ctVehicule.ctMarque %}
                                                {{ contre_visite.ctCarteGrise.ctVehicule.ctMarque.mrqLibelle }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if contre_visite.vstIsApte == 1 %}
                                                Apte
                                            {% else %}
                                                Inapte
                                            {% endif %}
                                        </td>
                                        <td>{{ contre_visite.vstCreated|date('d/m/Y') }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div><center>
            <button id=\"print\" class=\"btn btn-primary hidden-print\"><span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span> Print</button>
        </center></div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-reception').DataTable(
                {
                    \"responsive\":true,
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
                        \"sEmptyTable\": \"Aucune réception trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-carte-grise').DataTable(
                {
                    \"responsive\":true,
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
                        \"sEmptyTable\": \"Aucune carte grise trouvée\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-visite').DataTable(
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
                        \"sEmptyTable\": \"Aucun visite trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );

            \$('#list-contre-visite').DataTable(
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
                        \"sEmptyTable\": \"Aucun contre visite trouvé\",
                        \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                    },
                    \"footerCallback\": function ( row, data, start, end, display ) {
                        \$('.title-count').html(display.length);
                    }
                }
            );
        });
    </script>

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('vehicule_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/jquery.jqprint-0.3.js') }}\"></script>
    <script src=\"{{ asset('backoffice/js/historique.js') }}\"></script>
{% endblock %}
", "@Admin/CtHistorique/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtHistorique\\index.html.twig");
    }
}
