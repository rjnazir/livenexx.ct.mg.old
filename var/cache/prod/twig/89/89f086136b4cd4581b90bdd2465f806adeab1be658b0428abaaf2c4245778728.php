<?php

/* @Admin/CtConstatationAvDedouanement/view.html.twig */
class __TwigTemplate_effcfbcd3595dbaf8df299a123ac239ef399d62eb29072af16b3cd0bd7db108e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanement/view.html.twig", 1);
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
        // line 5
        $context["menu_const_av_ded"] = true;
        // line 6
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Detail Reception ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
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
                        <span class=\"title-count-text\"> Constatation Avant Dedouanement </span>
                    </div>
                </div>
                <div class=\"box-body\">
                    <div class=\"col-sm-6\">
                        <div class=\"table-responsive panel\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"text-success\"> Verificateur</td>
                                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["const_av_ded"] ?? null), "ctVerificateur", array()), "usrName", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Immatricule vehicule</td>
                                        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadImmatriculation", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Provenance</td>
                                        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadProvenance", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Port d'embarquement</td>
                                        <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadLieuEmbarquement", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Date d'embarquement</td>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadDateEmbarquement", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Proprietaire</td>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadProprietaireNom", array())), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <div class=\"table-responsive panel\">
                            <table class=\"table\">
                                <tbody>
                                    <tr>
                                        <td class=\"text-success\"> Conforme</td>
                                        <td>";
        // line 73
        echo (($this->getAttribute(($context["const_av_ded"] ?? null), "cadConforme", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Bon etat</td>
                                        <td>";
        // line 77
        echo (($this->getAttribute(($context["const_av_ded"] ?? null), "cadBonEtat", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des personnes</td>
                                        <td>";
        // line 81
        echo (($this->getAttribute(($context["const_av_ded"] ?? null), "cadSecPers", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des marchandises</td>
                                        <td>";
        // line 85
        echo (($this->getAttribute(($context["const_av_ded"] ?? null), "cadSecMarch", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Protection de l'environnement</td>
                                        <td>";
        // line 89
        echo (($this->getAttribute(($context["const_av_ded"] ?? null), "cadProtecEnv", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Divers</td>
                                        <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? null), "cadDivers", array())), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> Caracteristiques du vehicule </span>
                    </div>
                </div>
                ";
        // line 107
        $context["cad_cars"] = $this->getAttribute(($context["const_av_ded"] ?? null), "ctConstAvDedCaracs", array());
        // line 108
        echo "                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table\">
                            <thead>
                                <th>Vehicule</th>
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 114
            echo "                                    <th>
                                        ";
            // line 115
            if ($this->getAttribute($context["cad_car"], "ctConstAvDedType", array())) {
                // line 116
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cad_car"], "ctConstAvDedType", array()), "cadTpLibelle", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 118
            echo "                                    </th>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                <th>Observation</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Mise en circulation</td>
                                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 126
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadPremiereCircule", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Genre</td>
                                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 133
            echo "                                        <td>
                                            ";
            // line 134
            if ($this->getAttribute($context["cad_car"], "ctGenre", array())) {
                // line 135
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cad_car"], "ctGenre", array()), "grLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 137
            echo "                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Marque</td>
                                    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 144
            echo "                                        <td>
                                            ";
            // line 145
            if ($this->getAttribute($context["cad_car"], "ctMarque", array())) {
                // line 146
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cad_car"], "ctMarque", array()), "mrqLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 148
            echo "                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Type</td>
                                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 155
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadTypeCar", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Numero de serie type</td>
                                    ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 162
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadNumSerieType", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Numero de moteur</td>
                                    ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 169
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadNumMoteur", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Source d'energie</td>
                                    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 176
            echo "                                        <td>
                                            ";
            // line 177
            if ($this->getAttribute($context["cad_car"], "ctSourceEnergie", array())) {
                // line 178
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cad_car"], "ctSourceEnergie", array()), "sreLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 180
            echo "                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Cylindre</td>
                                    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 187
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadCylindre", array()), "html", null, true);
            echo "cm3</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Puissance</td>
                                    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 194
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadPuissance", array()), "html", null, true);
            echo "CV</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Carosserie</td>
                                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 201
            echo "                                        <td>
                                            ";
            // line 202
            if ($this->getAttribute($context["cad_car"], "ctCarosserie", array())) {
                // line 203
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cad_car"], "ctCarosserie", array()), "crsLibelle", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 205
            echo "                                        </td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Nombre de places assises</td>
                                    ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 212
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadNbrAssis", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Largeur</td>
                                    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 219
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadLargeur", array()), "html", null, true);
            echo "mm</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Hauteur</td>
                                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 226
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadHauteur", array()), "html", null, true);
            echo "mm</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Longueur</td>
                                    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 233
            echo "                                    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadLongueur", array()), "html", null, true);
            echo "mm</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Charge Utile</td>
                                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 240
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadChargeUtile", array()), "html", null, true);
            echo "kg</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids a vide</td>
                                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 247
            echo "                                     <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadPoidsVide", array()), "html", null, true);
            echo "kg</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids total en charge</td>
                                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 254
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cad_car"], "cadPoidsTotalCharge", array()), "html", null, true);
            echo "kg</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids maxima</td>
                                    ";
        // line 260
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 261
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cad_cars"] ?? null), 1, array(), "array"), "cadPoidsMaxima", array()), "html", null, true);
            echo "</td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cad_car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        echo "                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"box-footer\">
                <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generer_pv", array("id" => $this->getAttribute(($context["const_av_ded"] ?? null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Generer PV
                </a>
                ";
        // line 275
        echo "                    ";
        // line 276
        echo "                       ";
        // line 277
        echo "                        ";
        // line 278
        echo "                    ";
        // line 279
        echo "                ";
        // line 280
        echo "                    ";
        // line 281
        echo "                       ";
        // line 282
        echo "                        ";
        // line 283
        echo "                    ";
        // line 284
        echo "                ";
        // line 285
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
        echo "\"
                   class=\"btn btn-default pull-left btn-mini-rectif\" >
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
";
    }

    // line 294
    public function block_javascripts($context, array $blocks = array())
    {
        // line 295
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
    <script>
        var _generate_pv_ajax_uri = \"";
        // line 322
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv_ajax");
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanement/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 322,  682 => 295,  679 => 294,  666 => 285,  664 => 284,  662 => 283,  660 => 282,  658 => 281,  656 => 280,  654 => 279,  652 => 278,  650 => 277,  648 => 276,  646 => 275,  639 => 270,  630 => 263,  621 => 261,  617 => 260,  611 => 256,  602 => 254,  598 => 253,  592 => 249,  583 => 247,  579 => 246,  573 => 242,  564 => 240,  560 => 239,  554 => 235,  545 => 233,  541 => 232,  535 => 228,  526 => 226,  522 => 225,  516 => 221,  507 => 219,  503 => 218,  497 => 214,  488 => 212,  484 => 211,  478 => 207,  471 => 205,  465 => 203,  463 => 202,  460 => 201,  456 => 200,  450 => 196,  441 => 194,  437 => 193,  431 => 189,  422 => 187,  418 => 186,  412 => 182,  405 => 180,  399 => 178,  397 => 177,  394 => 176,  390 => 175,  384 => 171,  375 => 169,  371 => 168,  365 => 164,  356 => 162,  352 => 161,  346 => 157,  337 => 155,  333 => 154,  327 => 150,  320 => 148,  314 => 146,  312 => 145,  309 => 144,  305 => 143,  299 => 139,  292 => 137,  286 => 135,  284 => 134,  281 => 133,  277 => 132,  271 => 128,  262 => 126,  258 => 125,  251 => 120,  244 => 118,  238 => 116,  236 => 115,  233 => 114,  229 => 113,  222 => 108,  220 => 107,  203 => 93,  196 => 89,  189 => 85,  182 => 81,  175 => 77,  168 => 73,  153 => 61,  146 => 57,  139 => 53,  132 => 49,  125 => 45,  118 => 41,  100 => 25,  91 => 22,  86 => 21,  82 => 20,  79 => 19,  70 => 16,  67 => 15,  62 => 14,  53 => 11,  50 => 10,  45 => 9,  42 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Admin/CtConstatationAvDedouanement/view.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanement\\view.html.twig");
    }
}
