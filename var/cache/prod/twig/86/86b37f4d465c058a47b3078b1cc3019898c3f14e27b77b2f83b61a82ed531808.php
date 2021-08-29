<?php

/* AdminBundle:CtConstatationAvDedouanement:add.html.twig */
class __TwigTemplate_2b92151668b92cbcb2e12e346bcbb882bea505ec9bea3afd3b764f63a5ee3771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanement:add.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? null), "ctVerificateur", array()), array(0 => $this));
        // line 33
        $context["menu_const_av_ded"] = true;
        // line 34
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 7
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? null);
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    ";
        // line 49
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Feuille de caisse</h3>
                </div>

                <div class=\"box-body\">
                    <form id=\"ct_fdc_form\">
                        <div class=\"modal-body\">

                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_fdc_date\">Séléctionner la date</label>
                                    <input required id=\"ct_fdc_date\" name=\"ct_fdc_date\" class=\"form-control datepicker\"
                                           value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "\" />
                                </div>
                            </div>
                                <!-- Centre -->
                            <div class=\"";
        // line 69
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fdc_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fdc_centre\" name=\"ct_fdc_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                ";
        // line 80
        echo "                                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 81
            echo "                                                            ";
            // line 82
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\">
                                                                    ";
            // line 83
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                                </option>
                                                            ";
            // line 86
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                                    ";
        // line 89
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-2\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-feuille-caisse\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-left\" id=\"link-download-feuille-caisse\"></span>
                                </div>
                                <div class=\"col-md-5\">
                                    <span class=\"pull-right\" id=\"link-download-feuille-caisse-omavet\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        ";
        // line 115
        echo "        <div class=\"col-md-6\">
            <div class=\"box box-primary kl-bloc-visite\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Fiche de Controle</h3>
                </div>

                <div class=\"box-body\">
                    <form>
                        <div class=\"modal-body\">
                            <!-- Année -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_date_verif\">Séléctionner la date</label>
                                    <input required id=\"ct_date_verif\" name=\"ct_date_verif\" class=\"form-control datepicker\"
                                           value=\"26/10/2017\" />
                                </div>
                            </div>

                            <!-- Centre -->
                        <div class=\"";
        // line 134
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif_centre\">Séléctionner le centre</label>
                                    <select required id=\"ct_verif_centre\" name=\"ct_verif_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            ";
        // line 145
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 146
            echo "                                                        ";
            // line 147
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\">
                                                                ";
            // line 148
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                            </option>
                                                        ";
            // line 151
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                                                ";
        // line 154
        echo "                                    </select>
                                </div>
                            </div>
                        </div>

                            <!-- Verificateur -->
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif\">Séléctionner verificateur</label>
                                    <select required id=\"ct_verif\" name=\"ct_verif\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["verificateurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["verif"]) {
            // line 169
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["verif"], "id", array()), "html", null, true);
            echo "\">
                                                ";
            // line 170
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["verif"], "usrName", array())), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['verif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <button type=\"submit\" class=\"pull-left btn btn-primary\"
                                            id=\"btn-generate-fiche-verif\">
                                        Générer
                                    </button>
                                </div>
                                <div class=\"col-md-offset-2 col-md-6\">
                                    <span class=\"pull-left\" id=\"link-download-fiche-verif\"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caractéristiques du véhicule</h3></div>
        <div class=\"panel-body\">
            ";
        // line 198
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "ctConstAvDedCaracs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cadc"]) {
            // line 201
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctGenre", array()), array(0 => $this));
            // line 202
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctMarque", array()), array(0 => $this));
            // line 203
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), array(0 => $this));
            // line 204
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctCarosserie", array()), array(0 => $this));
            // line 205
            echo "                <div class=\"col-md-4\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                ";
            // line 209
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctConstAvDedType", array()), 'widget', array("attr" => array("class" => "form-control hide")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 212
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadInputCaracType", array()), 'widget', array("attr" => array("class" => "form-control kl-select-cadt")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 215
            if (($this->getAttribute($this->getAttribute($context["cadc"], "vars", array()), "id", array()) == "ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1")) {
                // line 216
                echo "                                    <a href=\"javascript:void(0)\" class=\"btn btn-primary\" id=\"id-clear-carte-grise\">
                                        Pas de carte grise
                                    </a>
                                ";
            } else {
                // line 220
                echo "                                    <div class=\"kl-padding-top\"></div>
                                ";
            }
            // line 222
            echo "                            </div>
                            <div class=\"form-group\">
                                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'label');
            echo "
                                ";
            // line 225
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 228
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'label');
            echo "
                                ";
            // line 229
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 232
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'label');
            echo "
                                ";
            // line 233
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 236
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'label');
            echo "
                                ";
            // line 237
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 240
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'label');
            echo "
                                ";
            // line 241
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 244
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'label');
            echo "
                                ";
            // line 245
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 248
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'label');
            echo "
                                ";
            // line 249
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 252
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'label');
            echo "
                                ";
            // line 253
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 256
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'label');
            echo "
                                ";
            // line 257
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 260
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'label');
            echo "
                                ";
            // line 261
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 264
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'label');
            echo "
                                ";
            // line 265
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                ";
            // line 269
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'label');
            echo "
                                ";
            // line 270
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 273
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'label');
            echo "
                                ";
            // line 274
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 277
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'label');
            echo "
                                ";
            // line 278
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                ";
            // line 282
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'label');
            echo "
                                ";
            // line 283
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 286
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'label');
            echo "
                                ";
            // line 287
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group\">
                                ";
            // line 290
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'label');
            echo "
                                ";
            // line 291
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                            <div class=\"form-group hidden\">
                                ";
            // line 294
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'label');
            echo "
                                ";
            // line 295
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cadc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 305
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadImmatriculation", array()), 'row');
        echo "
                        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadProvenance", array()), 'row');
        echo "
                        ";
        // line 308
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadDateEmbarquement", array()), 'row');
        echo "
                        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadLieuEmbarquement", array()), 'row');
        echo "
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadProprietaireNom", array()), 'row');
        echo "
                        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadProprietaireAdresse", array()), 'row');
        echo "
                        ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadDivers", array()), 'row');
        echo "
                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadObservation", array()), 'row');
        echo "
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadConforme", array()), 'row');
        echo "
                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadBonEtat", array()), 'row');
        echo "
                        ";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadSecPers", array()), 'row');
        echo "
                        ";
        // line 317
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadSecMarch", array()), 'row');
        echo "
                        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cadProtecEnv", array()), 'row');
        echo "
                    ";
        // line 320
        echo "                </div>
            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 325
        echo "                    <div class=\"box box-warning\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                        </div>

                        <div class=\"row\">
                            <div class=\"box-body\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                    <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" ";
        // line 335
        echo ">
                                        ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_use"]) {
            // line 337
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "id", array()), "html", null, true);
            echo "\" selected>
                                                ";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "ituNumero", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 342
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 344
                echo "                                                ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 345
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 346
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                }
                // line 349
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"box-footer\">
            ";
        // line 362
        if (array_key_exists("is_generated", $context)) {
            // line 363
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generer_pv", array("id" => $this->getAttribute(($context["const_av_ded"] ?? null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Générer PV
                </a>
            ";
        } else {
            // line 368
            echo "                <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            ";
        }
        // line 370
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
        echo "\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        ";
        // line 375
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    // line 379
    public function block_javascripts($context, array $blocks = array())
    {
        // line 380
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script>
        var _generate_feuille_caisse_ajax_uri = \"";
        // line 386
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generate_reporting_feuille_caisse_ajax");
        echo "\";
        var _select_verif_by_centre_ajax_uri = \"";
        // line 387
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _generate_fiche_ctrl_verif_ajax_uri = \"";
        // line 388
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generate_reporting_fiche_controle_ajax");
        echo "\";
    </script>

    <script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.constatation.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanement:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 391,  806 => 388,  802 => 387,  798 => 386,  792 => 383,  785 => 380,  782 => 379,  775 => 375,  766 => 370,  762 => 368,  753 => 363,  751 => 362,  739 => 352,  732 => 350,  726 => 349,  720 => 346,  715 => 345,  712 => 344,  708 => 343,  703 => 342,  698 => 341,  689 => 338,  684 => 337,  680 => 336,  677 => 335,  665 => 325,  659 => 320,  655 => 318,  651 => 317,  647 => 316,  643 => 315,  639 => 314,  635 => 313,  631 => 312,  627 => 311,  623 => 310,  619 => 309,  615 => 308,  611 => 307,  607 => 306,  602 => 305,  597 => 301,  585 => 295,  581 => 294,  575 => 291,  571 => 290,  565 => 287,  561 => 286,  555 => 283,  551 => 282,  544 => 278,  540 => 277,  534 => 274,  530 => 273,  524 => 270,  520 => 269,  513 => 265,  509 => 264,  503 => 261,  499 => 260,  493 => 257,  489 => 256,  483 => 253,  479 => 252,  473 => 249,  469 => 248,  463 => 245,  459 => 244,  453 => 241,  449 => 240,  443 => 237,  439 => 236,  433 => 233,  429 => 232,  423 => 229,  419 => 228,  413 => 225,  409 => 224,  405 => 222,  401 => 220,  395 => 216,  393 => 215,  387 => 212,  381 => 209,  375 => 205,  372 => 204,  369 => 203,  366 => 202,  363 => 201,  359 => 200,  354 => 198,  327 => 173,  318 => 170,  313 => 169,  309 => 168,  293 => 154,  291 => 152,  285 => 151,  280 => 148,  275 => 147,  273 => 146,  268 => 145,  254 => 134,  233 => 115,  206 => 89,  204 => 87,  198 => 86,  193 => 83,  188 => 82,  186 => 81,  181 => 80,  167 => 69,  160 => 65,  142 => 49,  139 => 47,  130 => 44,  127 => 43,  122 => 42,  113 => 39,  110 => 38,  105 => 37,  102 => 36,  95 => 31,  90 => 27,  88 => 26,  86 => 25,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  67 => 15,  60 => 14,  58 => 13,  52 => 12,  48 => 10,  45 => 8,  43 => 7,  40 => 6,  36 => 1,  34 => 34,  32 => 33,  30 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:CtConstatationAvDedouanement:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanement/add.html.twig");
    }
}
