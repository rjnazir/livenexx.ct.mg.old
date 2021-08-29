<?php

/* @Admin/CtVisite/edit.html.twig */
class __TwigTemplate_db48d3b1f398f90b9f589d2fbaa9533b83891acc2f26248f835bdf4506809f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtVisite/edit.html.twig", 1);
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? null), array(0 => ":form:fields.html.twig"));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctUsage", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctVerificateur", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctCentre", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctVisiteExtra", array()), array(0 => $this));
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? null), "ctAnomalie", array()), array(0 => $this));
        // line 42
        $context["menu_visite"] = true;
        // line 43
        $context["menu_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 16
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 17
            $context["required"] = false;
        }
        // line 19
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 21
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 22
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 23
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 24
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 27
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 28
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 29
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 30
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 31
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 34
        $context["options"] = ($context["choices"] ?? null);
        // line 35
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 36
        echo "</select>
    </span>";
    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite technique ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-success\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 61
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"";
        // line 67
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgDateEmission", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 73
        echo "
                        <hr>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                        ";
        // line 80
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                        <div id=\"form-transport\" class=\"";
        // line 86
        if (($this->getAttribute($this->getAttribute(($context["visite"] ?? null), "ctCarteGrise", array()), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>
    
                ";
        // line 96
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 118
        echo "
                    </div>

                    ";
        // line 122
        echo "                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visite"] ?? null), "id", array()), "html", null, true);
        echo "\" />
                        ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? null), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
    
            ";
        // line 147
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations visite technique</h3>
                    </div>
    
                    <div class=\"box-body\">
                        <div class=\"";
        // line 154
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctTypeVisite", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctUtilisation", array()), 'row');
        echo "
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctAnomalie", array()), 'row');
        echo "
                        <div id=\"form-duree-reparation\" class=\"";
        // line 162
        if ((twig_length_filter($this->env, $this->getAttribute(($context["visite"] ?? null), "ctAnomalie", array())) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "vstDureeReparation", array()), 'row');
        echo "
                        </div>
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "vstDateExpiration", array()), 'row');
        echo "
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? null), "ctVisiteExtra", array()), 'row');
        echo "
                    </div>
                </div>
            
                ";
        // line 172
        echo "                <div class=\"box box-warning\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                    </div>

                    <div class=\"row\">
                        <div class=\"box-body\">
                            <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                    style=\"width: 100%;\" data-placeholder=\" Choisir\" multiple=\"\" ";
        // line 182
        echo " >
                                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_use"]) {
            // line 184
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "id", array()), "html", null, true);
            echo "\" selected>
                                            ";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "ituNumero", array()), "html", null, true);
            echo "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 189
            echo "                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                        ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 191
                echo "                                            ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 192
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 193
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                            </option>
                                            ";
                }
                // line 196
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                    </optgroup>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        ";
        // line 208
        echo "        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                               value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                        <span class=\"kl-edit-link-download-cv\" id=\"link-download\"></span>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        ";
        // line 228
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        // line 232
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
";
    }

    // line 235
    public function block_javascripts($context, array $blocks = array())
    {
        // line 236
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        \$(\".ct_imprime_tech_use\").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _generate_reporting_ajax_uri = \"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_ajax");
        echo "\";
        var _generate_pv_visite_ajax_uri = \"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_pv_visite_ajax");
        echo "\"
        var _select_verif_by_centre_ajax_uri = \"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _select_usage_by_type_visite_ajax_uri = \"";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_usage_by_type_visite_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.visite.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/CtVisite/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 256,  611 => 254,  607 => 253,  603 => 252,  599 => 251,  595 => 250,  591 => 249,  587 => 248,  583 => 247,  574 => 241,  565 => 236,  562 => 235,  556 => 232,  550 => 228,  533 => 213,  526 => 208,  516 => 199,  509 => 197,  503 => 196,  497 => 193,  492 => 192,  489 => 191,  485 => 190,  480 => 189,  475 => 188,  466 => 185,  461 => 184,  457 => 183,  454 => 182,  442 => 172,  435 => 167,  431 => 166,  427 => 165,  422 => 163,  416 => 162,  412 => 161,  408 => 160,  404 => 159,  399 => 157,  394 => 155,  388 => 154,  379 => 147,  371 => 141,  367 => 140,  362 => 138,  358 => 137,  354 => 136,  349 => 134,  345 => 133,  341 => 132,  336 => 130,  332 => 129,  328 => 128,  324 => 127,  320 => 126,  316 => 125,  312 => 124,  308 => 123,  305 => 122,  300 => 118,  298 => 114,  294 => 113,  290 => 112,  286 => 111,  282 => 110,  278 => 109,  274 => 108,  270 => 107,  266 => 106,  262 => 105,  258 => 104,  254 => 103,  250 => 102,  242 => 96,  234 => 90,  230 => 89,  226 => 88,  222 => 87,  216 => 86,  212 => 85,  207 => 83,  203 => 82,  199 => 81,  194 => 80,  190 => 78,  185 => 76,  181 => 75,  177 => 73,  175 => 70,  170 => 68,  164 => 67,  156 => 61,  150 => 57,  147 => 56,  138 => 53,  135 => 52,  130 => 51,  121 => 48,  118 => 47,  113 => 46,  110 => 45,  103 => 40,  98 => 36,  96 => 35,  94 => 34,  88 => 31,  86 => 30,  84 => 29,  82 => 28,  80 => 27,  75 => 24,  68 => 23,  66 => 22,  60 => 21,  56 => 19,  53 => 17,  51 => 16,  48 => 15,  44 => 1,  42 => 43,  40 => 42,  38 => 13,  36 => 12,  34 => 11,  32 => 10,  30 => 9,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtVisite/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtVisite\\edit.html.twig");
    }
}
