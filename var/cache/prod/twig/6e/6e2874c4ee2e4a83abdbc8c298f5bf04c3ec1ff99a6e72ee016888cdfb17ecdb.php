<?php

/* @Admin/CtHistorique/index.html.twig */
class __TwigTemplate_e4291ade591b25fee4750be7f3a326ed7bb099faf78c9f0f9344211ae5e6a98d extends Twig_Template
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
        // line 12
        $context["menu_historique"] = true;
        // line 13
        $context["menu_historique_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des historiques ";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        echo twig_escape_filter($this->env, ($context["numero_serie_search"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["numero_serie_search"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["receptions"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["cartes_grise"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["contre_visites"] ?? null));
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
    }

    // line 311
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  701 => 416,  697 => 415,  692 => 413,  688 => 412,  683 => 410,  581 => 312,  578 => 311,  562 => 297,  553 => 294,  550 => 293,  546 => 291,  542 => 289,  540 => 288,  536 => 286,  530 => 284,  528 => 283,  524 => 281,  518 => 279,  516 => 278,  512 => 276,  506 => 274,  504 => 273,  500 => 271,  494 => 269,  492 => 268,  488 => 266,  484 => 265,  461 => 244,  449 => 233,  440 => 230,  437 => 229,  433 => 227,  429 => 225,  427 => 224,  423 => 222,  417 => 220,  415 => 219,  411 => 217,  405 => 215,  403 => 214,  399 => 212,  393 => 210,  391 => 209,  387 => 207,  381 => 205,  379 => 204,  375 => 202,  371 => 201,  348 => 180,  336 => 169,  327 => 166,  324 => 165,  318 => 163,  316 => 162,  310 => 159,  306 => 157,  300 => 155,  298 => 154,  294 => 152,  290 => 151,  269 => 132,  258 => 122,  249 => 119,  246 => 118,  240 => 116,  238 => 115,  234 => 113,  228 => 111,  226 => 110,  220 => 107,  216 => 105,  210 => 103,  208 => 102,  204 => 100,  200 => 99,  178 => 79,  162 => 65,  156 => 62,  136 => 45,  130 => 42,  120 => 34,  117 => 32,  108 => 29,  103 => 28,  99 => 27,  96 => 26,  87 => 23,  84 => 22,  79 => 21,  70 => 18,  67 => 17,  62 => 16,  59 => 15,  53 => 9,  46 => 6,  43 => 5,  36 => 3,  32 => 1,  30 => 13,  28 => 12,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtHistorique/index.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtHistorique\\index.html.twig");
    }
}
