<?php

/* AdminBundle:CtReception:add.html.twig */
class __TwigTemplate_1471594a126daa63f4f527114a5dfb81de5bbe8445f9852d523fca0ff80ba39b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:add.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 3
        if ((( !array_key_exists("show_first_page", $context) &&  !array_key_exists("is_stop", $context)) || (array_key_exists("is_stop", $context) && (($context["is_stop"] ?? null) == false)))) {
            // line 5
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => ":form:fields.html.twig"));
            // line 8
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
            // line 10
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
            // line 11
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctSourceEnergie", array()), array(0 => $this));
            // line 12
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctCarosserie", array()), array(0 => $this));
            // line 13
            if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? null) == "isole"))) {
                // line 14
                $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctMotif", array()), array(0 => $this));
            }
            // line 16
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctUtilisation", array()), array(0 => $this));
        }
        // line 54
        $context["menu_reception"] = true;
        // line 55
        $context["menu_reception_create"] = true;
        // line 56
        $context["menu_reception_create_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 21
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 22
            $context["required"] = false;
        }
        // line 24
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 26
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 27
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 28
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 29
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 32
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 33
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 34
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 35
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 36
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 39
        $context["options"] = ($context["choices"] ?? null);
        // line 40
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 41
        echo "</select>
    </span>";
    }

    // line 45
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
    }

    // line 52
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Réception ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 60
            echo "        <div class=\"callout callout-success\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 65
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 66
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
    ";
        // line 70
        if (((array_key_exists("is_stop", $context) && (($context["is_stop"] ?? null) == true)) && array_key_exists("id_recep", $context))) {
            // line 71
            echo "        <div style=\"text-align: center\">
            <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => ($context["id_recep"] ?? null))), "html", null, true);
            echo "\"
               class=\"btn btn-primary btn-lg\" target=\"_blank\">
                Générer PV
            </a>
        </div>
    ";
        } else {
            // line 78
            echo "        ";
            if (array_key_exists("show_first_page", $context)) {
                // line 79
                echo "            <div class=\"row\">
                <div class=\"col-md-6\" id=\"id-choix-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Nouvelle réception</h3>
                        </div>
                        <form name=\"nb_vehicule\" id=\"nb_vehicule\" action=\"";
                // line 85
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_new");
                echo "\" method=\"post\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                            <select class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type\">
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
                // line 94
                if (($context["type_receptions"] ?? null)) {
                    // line 95
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["rcpt"]) {
                        // line 96
                        echo "                                                        <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "\">
                                                            ";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "
                                                        </option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcpt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                                ";
                }
                // line 101
                echo "
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id=\"creer-form\" class=\"hide\">
                                    <div class=\"form-group\" id=\"nb-vehicule-form\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                                <input type=\"number\" min=\"1\" id=\"ct_nb_total_vehicule\" name=\"ct_nb_total_vehicule\" class=\"form-control\" value=\"\" oninvalid=\"setErrorClass(\$(this));\"
                                                placeholder=\"Nombre de vehicules\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-6 col-md-6 col-lg-4 text-center\">
                                                <button type=\"submit\" class=\"btn btn-success form-control\" id=\"ct_creer_recep\">Cr&eacute;er</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-md-6\" id=\"id-bilan-reception\">
                    <div class=\"box box-success\">
                        <div class=\"box-header text-center\">
                            <h3 class=\"box-title\">Bilan</h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"kl-fdc\">
                                <div class=\"form-group\">
                                    <select required class=\"form-control\" data-placeholder=\"Choisir\" id=\"select-type-bilan\">
                                        <option value=\"\" selected=\"selected\">
                                            Choisir
                                        </option>
                                        ";
                // line 139
                if (($context["type_receptions"] ?? null)) {
                    // line 140
                    echo "                                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["type_receptions"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["rcpt"]) {
                        // line 141
                        echo "                                                <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "id", array()), "html", null, true);
                        echo "\">
                                                    ";
                        // line 142
                        echo twig_escape_filter($this->env, $this->getAttribute($context["rcpt"], "tprcpLibelle", array()), "html", null, true);
                        echo "
                                                </option>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rcpt'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "                                        ";
                }
                // line 146
                echo "
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                <input required type=\"text\" id=\"ct_date_generer\" name=\"ct_date_generer\" class=\"form-control cs-datepicker\">
                                </div>
                                <a href=\"";
                // line 152
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_fdc_rec");
                echo "\"
                                   class=\"btn btn-primary btn-lg\" id=\"ct_link_generer_feuille_caisse\" target=\"_blank\">
                                    Feuille de caisse
                                </a>
                                <a href=\"";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_fdctrl_rec");
                echo "\"
                                   class=\"btn btn-danger btn-lg\" id=\"ct_link_generer_fiche_controle\" target=\"_blank\">
                                    Fiche de contrôle
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        ";
            } else {
                // line 168
                echo "
            <div class=\"panel panel-default\">
                <div class=\"panel-heading text-center\"><h3>Nouvelle Réception ";
                // line 170
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["rec_type"] ?? null)), "html", null, true);
                echo "
                        ";
                // line 171
                if (array_key_exists("nb_vehicule", $context)) {
                    echo "<span class=\"label label-warning\">";
                    if (array_key_exists("num_saisie", $context)) {
                        echo twig_escape_filter($this->env, ($context["num_saisie"] ?? null), "html", null, true);
                    }
                    echo "/";
                    echo twig_escape_filter($this->env, ($context["nb_vehicule"] ?? null), "html", null, true);
                    echo " V&eacute;hicules</span>";
                }
                echo "</h3></div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        ";
                // line 174
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
                echo "
                        ";
                // line 176
                echo "                        <div class=\"col-md-6\">
                            <div class=\"box box-success\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations véhicule</h3>
                                </div>

                                <div class=\"box-body\">
                                    ";
                // line 183
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctGenre", array()), 'row');
                echo "
                                    ";
                // line 184
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctMarque", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 186
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcType", array()), 'row');
                echo "
                                    <div class=\"form-group\">
                                        ";
                // line 188
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcNumSerie", array()), 'label');
                echo "
                                        ";
                // line 189
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcNumSerie", array()), 'widget', array("attr" => array("class" => "form-control", "ajax-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_vehicule"))));
                // line 196
                echo "
                                    </div>
                                    ";
                // line 198
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
                echo "
                                    ";
                // line 199
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctCarosserie", array()), 'row');
                echo "
                                    ";
                // line 200
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctSourceEnergie", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 202
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcCylindre", array()), 'row');
                echo "
                                    ";
                // line 203
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPuissance", array()), 'row');
                echo "
                                    ";
                // line 204
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
                echo "
                                    ";
                // line 205
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
                echo "
                                    ";
                // line 206
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
                echo "
                                    ";
                // line 211
                echo "
                                    <div class=\"hidden\">
                                        ";
                // line 215
                echo "                                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcHauteur", array()), 'row');
                echo "
                                        ";
                // line 216
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcLongueur", array()), 'row');
                echo "
                                        ";
                // line 217
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcLargeur", array()), 'row');
                echo "
                                        ";
                // line 218
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcProvenance", array()), 'row');
                echo "
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
                // line 225
                echo "                        <div class=\"col-md-6\">
                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations réception</h3>
                                </div>

                                <div class=\"box-body\">
                                    ";
                // line 232
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctUtilisation", array()), 'row');
                echo "
                                    ";
                // line 233
                if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? null) == "isole"))) {
                    // line 234
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctMotif", array()), 'row');
                    echo "
                                    ";
                } else {
                    // line 236
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctMotif", array()), 'row', array("attr" => array("disabled" => "disabled")));
                    echo "
                                    ";
                }
                // line 238
                echo "                                    <hr>
                                    ";
                // line 239
                if ((array_key_exists("rec_type", $context) && (($context["rec_type"] ?? null) == "isole"))) {
                    // line 240
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpImmatriculation", array()), 'row');
                    echo "
                                    ";
                }
                // line 242
                echo "                                    ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpProprietaire", array()), 'row');
                echo "
                                    ";
                // line 243
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpProfession", array()), 'row');
                echo "
                                    ";
                // line 244
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpAdresse", array()), 'row');
                echo "
                                    <hr>
                                    ";
                // line 246
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpNbrAssis", array()), 'row');
                echo "
                                    ";
                // line 247
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpNbrDebout", array()), 'row');
                echo "
                                    ";
                // line 248
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rcpMiseService", array()), 'row');
                echo "
                                </div>
";
                // line 261
                echo "                            </div>

                            ";
                // line 264
                echo "                            <div class=\"box box-warning\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                                </div>

                                <div class=\"row\">
                                    <div class=\"box-body\">
                                        <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                            <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                            <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                                style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" ";
                // line 274
                echo ">
                                                ";
                // line 275
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
                    // line 276
                    echo "                                                <optgroup label=\"";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
                    echo "\">
                                                    ";
                    // line 277
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                        // line 278
                        echo "                                                        ";
                        if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                            // line 279
                            echo "                                                        <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                            echo "\">
                                                            ";
                            // line 280
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                            echo "
                                                        </option>
                                                        ";
                        }
                        // line 283
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 284
                    echo "                                                </optgroup>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 286
                echo "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"box-footer\">
                                        <input type=\"hidden\" name=\"num_saisie\" id=\"num_saisie\" value=\"";
                // line 291
                if (array_key_exists("num_saisie", $context)) {
                    echo twig_escape_filter($this->env, ($context["num_saisie"] ?? null), "html", null, true);
                }
                echo "\">
                                        <input type=\"hidden\" name=\"nb-total-vehicule\" id=\"id-nb-total-vehicule\" value=\"";
                // line 292
                if (array_key_exists("nb_vehicule", $context)) {
                    echo twig_escape_filter($this->env, ($context["nb_vehicule"] ?? null), "html", null, true);
                }
                echo "\">
                                        <input type=\"hidden\" id=\"id-is-focus\" value=\" ";
                // line 293
                echo twig_escape_filter($this->env, ($context["is_focus"] ?? null), "html", null, true);
                echo "\" name=\"\"/>
                                        ";
                // line 294
                if ((array_key_exists("is_stop", $context) && (($context["is_stop"] ?? null) == false))) {
                    // line 295
                    echo "                                            <input type=\"submit\" class=\"btn btn-warning\" value=\"Suivant\" name=\"new_type_reception\"/>
                                        ";
                } else {
                    // line 297
                    echo "                                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_type_reception\"/>
                                        ";
                }
                // line 299
                echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                // line 303
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
                echo "
                    </div>
                </div>
            </div>



        ";
            }
            // line 311
            echo "    ";
        }
        // line 312
        echo "

";
    }

    // line 316
    public function block_javascripts($context, array $blocks = array())
    {
        // line 317
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
    <!-- Base URL -->
    <script>
        var _base_url = \"";
        // line 325
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 325,  648 => 322,  643 => 320,  636 => 317,  633 => 316,  627 => 312,  624 => 311,  613 => 303,  607 => 299,  603 => 297,  599 => 295,  597 => 294,  593 => 293,  587 => 292,  581 => 291,  574 => 286,  567 => 284,  561 => 283,  555 => 280,  550 => 279,  547 => 278,  543 => 277,  538 => 276,  534 => 275,  531 => 274,  519 => 264,  515 => 261,  510 => 248,  506 => 247,  502 => 246,  497 => 244,  493 => 243,  488 => 242,  482 => 240,  480 => 239,  477 => 238,  471 => 236,  465 => 234,  463 => 233,  459 => 232,  450 => 225,  441 => 218,  437 => 217,  433 => 216,  428 => 215,  424 => 211,  420 => 206,  416 => 205,  412 => 204,  408 => 203,  404 => 202,  399 => 200,  395 => 199,  391 => 198,  387 => 196,  385 => 189,  381 => 188,  376 => 186,  371 => 184,  367 => 183,  358 => 176,  354 => 174,  340 => 171,  336 => 170,  332 => 168,  317 => 156,  310 => 152,  302 => 146,  299 => 145,  290 => 142,  285 => 141,  280 => 140,  278 => 139,  238 => 101,  235 => 100,  226 => 97,  221 => 96,  216 => 95,  214 => 94,  202 => 85,  194 => 79,  191 => 78,  182 => 72,  179 => 71,  177 => 70,  174 => 69,  165 => 66,  162 => 65,  157 => 64,  148 => 61,  145 => 60,  140 => 59,  137 => 58,  130 => 52,  124 => 49,  117 => 46,  114 => 45,  109 => 41,  107 => 40,  105 => 39,  99 => 36,  97 => 35,  95 => 34,  93 => 33,  91 => 32,  86 => 29,  79 => 28,  77 => 27,  71 => 26,  67 => 24,  64 => 22,  62 => 21,  59 => 20,  55 => 1,  53 => 56,  51 => 55,  49 => 54,  46 => 16,  43 => 14,  41 => 13,  39 => 12,  37 => 11,  35 => 10,  33 => 8,  31 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:CtReception:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/add.html.twig");
    }
}
