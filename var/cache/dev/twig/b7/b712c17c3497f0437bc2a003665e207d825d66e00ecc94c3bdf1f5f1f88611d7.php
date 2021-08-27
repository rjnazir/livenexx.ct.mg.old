<?php

/* AdminBundle:CtConstatationAvDedouanement:view.html.twig */
class __TwigTemplate_2326236c53740c0269edcd03910dee0fead142aa69748b637f99113f6346d8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanement:view.html.twig", 1);
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
        $__internal_7fe4516a2e70a5a5c7516cff0e102fa2f62e6bcbe18464e9a41294c054d8c4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe4516a2e70a5a5c7516cff0e102fa2f62e6bcbe18464e9a41294c054d8c4fc->enter($__internal_7fe4516a2e70a5a5c7516cff0e102fa2f62e6bcbe18464e9a41294c054d8c4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:view.html.twig"));

        $__internal_288fdf14290b960fad86ea1acbac185ab1d14bfa48c074f778bc4301d0537b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288fdf14290b960fad86ea1acbac185ab1d14bfa48c074f778bc4301d0537b8d->enter($__internal_288fdf14290b960fad86ea1acbac185ab1d14bfa48c074f778bc4301d0537b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:view.html.twig"));

        // line 5
        $context["menu_const_av_ded"] = true;
        // line 6
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe4516a2e70a5a5c7516cff0e102fa2f62e6bcbe18464e9a41294c054d8c4fc->leave($__internal_7fe4516a2e70a5a5c7516cff0e102fa2f62e6bcbe18464e9a41294c054d8c4fc_prof);

        
        $__internal_288fdf14290b960fad86ea1acbac185ab1d14bfa48c074f778bc4301d0537b8d->leave($__internal_288fdf14290b960fad86ea1acbac185ab1d14bfa48c074f778bc4301d0537b8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a533fefd9421ad4b6c0ffb6d8aa8a6bd0355cc48f7c08488358f6a8e5e4168d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a533fefd9421ad4b6c0ffb6d8aa8a6bd0355cc48f7c08488358f6a8e5e4168d->enter($__internal_2a533fefd9421ad4b6c0ffb6d8aa8a6bd0355cc48f7c08488358f6a8e5e4168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5ec318c87bea59d68bd12b276ff46cc48d3b230f4c54b59c6c282902795d8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ec318c87bea59d68bd12b276ff46cc48d3b230f4c54b59c6c282902795d8eb->enter($__internal_e5ec318c87bea59d68bd12b276ff46cc48d3b230f4c54b59c6c282902795d8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Detail Reception ";
        
        $__internal_e5ec318c87bea59d68bd12b276ff46cc48d3b230f4c54b59c6c282902795d8eb->leave($__internal_e5ec318c87bea59d68bd12b276ff46cc48d3b230f4c54b59c6c282902795d8eb_prof);

        
        $__internal_2a533fefd9421ad4b6c0ffb6d8aa8a6bd0355cc48f7c08488358f6a8e5e4168d->leave($__internal_2a533fefd9421ad4b6c0ffb6d8aa8a6bd0355cc48f7c08488358f6a8e5e4168d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb15447637ccb09a3081d9020a1da098f377371dc8f4c71a1998982dc963a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb15447637ccb09a3081d9020a1da098f377371dc8f4c71a1998982dc963a8b->enter($__internal_9bb15447637ccb09a3081d9020a1da098f377371dc8f4c71a1998982dc963a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_587eb39df7cd049342da19ce56b8504efe0fbfc50fda901e7129e11643820977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587eb39df7cd049342da19ce56b8504efe0fbfc50fda901e7129e11643820977->enter($__internal_587eb39df7cd049342da19ce56b8504efe0fbfc50fda901e7129e11643820977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "ctVerificateur", array()), "usrName", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Immatricule vehicule</td>
                                        <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadImmatriculation", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Provenance</td>
                                        <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadProvenance", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Port d'embarquement</td>
                                        <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadLieuEmbarquement", array()), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Date d'embarquement</td>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadDateEmbarquement", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Proprietaire</td>
                                        <td>";
        // line 61
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadProprietaireNom", array())), "html", null, true);
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
        echo (($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadConforme", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Bon etat</td>
                                        <td>";
        // line 77
        echo (($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadBonEtat", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des personnes</td>
                                        <td>";
        // line 81
        echo (($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadSecPers", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des marchandises</td>
                                        <td>";
        // line 85
        echo (($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadSecMarch", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Protection de l'environnement</td>
                                        <td>";
        // line 89
        echo (($this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadProtecEnv", array())) ? ("OUI") : ("NON"));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Divers</td>
                                        <td>";
        // line 93
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "cadDivers", array())), "html", null, true);
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
        $context["cad_cars"] = $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "ctConstAvDedCaracs", array());
        // line 108
        echo "                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table\">
                            <thead>
                                <th>Vehicule</th>
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
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
        $context['_seq'] = twig_ensure_traversable(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")));
        foreach ($context['_seq'] as $context["_key"] => $context["cad_car"]) {
            // line 261
            echo "                                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cad_cars"] ?? $this->getContext($context, "cad_cars")), 1, array(), "array"), "cadPoidsMaxima", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generer_pv", array("id" => $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "id", array()))), "html", null, true);
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
        
        $__internal_587eb39df7cd049342da19ce56b8504efe0fbfc50fda901e7129e11643820977->leave($__internal_587eb39df7cd049342da19ce56b8504efe0fbfc50fda901e7129e11643820977_prof);

        
        $__internal_9bb15447637ccb09a3081d9020a1da098f377371dc8f4c71a1998982dc963a8b->leave($__internal_9bb15447637ccb09a3081d9020a1da098f377371dc8f4c71a1998982dc963a8b_prof);

    }

    // line 294
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4aa53d4636914042c08a67629a958e65fb70d1f6e4707df3faf1359661e58e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa53d4636914042c08a67629a958e65fb70d1f6e4707df3faf1359661e58e3a->enter($__internal_4aa53d4636914042c08a67629a958e65fb70d1f6e4707df3faf1359661e58e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6cafdc1b27fa2fa4e20245877192f3ae881e389e4eef085cb632cb4c98e486aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cafdc1b27fa2fa4e20245877192f3ae881e389e4eef085cb632cb4c98e486aa->enter($__internal_6cafdc1b27fa2fa4e20245877192f3ae881e389e4eef085cb632cb4c98e486aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6cafdc1b27fa2fa4e20245877192f3ae881e389e4eef085cb632cb4c98e486aa->leave($__internal_6cafdc1b27fa2fa4e20245877192f3ae881e389e4eef085cb632cb4c98e486aa_prof);

        
        $__internal_4aa53d4636914042c08a67629a958e65fb70d1f6e4707df3faf1359661e58e3a->leave($__internal_4aa53d4636914042c08a67629a958e65fb70d1f6e4707df3faf1359661e58e3a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanement:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 322,  724 => 295,  715 => 294,  696 => 285,  694 => 284,  692 => 283,  690 => 282,  688 => 281,  686 => 280,  684 => 279,  682 => 278,  680 => 277,  678 => 276,  676 => 275,  669 => 270,  660 => 263,  651 => 261,  647 => 260,  641 => 256,  632 => 254,  628 => 253,  622 => 249,  613 => 247,  609 => 246,  603 => 242,  594 => 240,  590 => 239,  584 => 235,  575 => 233,  571 => 232,  565 => 228,  556 => 226,  552 => 225,  546 => 221,  537 => 219,  533 => 218,  527 => 214,  518 => 212,  514 => 211,  508 => 207,  501 => 205,  495 => 203,  493 => 202,  490 => 201,  486 => 200,  480 => 196,  471 => 194,  467 => 193,  461 => 189,  452 => 187,  448 => 186,  442 => 182,  435 => 180,  429 => 178,  427 => 177,  424 => 176,  420 => 175,  414 => 171,  405 => 169,  401 => 168,  395 => 164,  386 => 162,  382 => 161,  376 => 157,  367 => 155,  363 => 154,  357 => 150,  350 => 148,  344 => 146,  342 => 145,  339 => 144,  335 => 143,  329 => 139,  322 => 137,  316 => 135,  314 => 134,  311 => 133,  307 => 132,  301 => 128,  292 => 126,  288 => 125,  281 => 120,  274 => 118,  268 => 116,  266 => 115,  263 => 114,  259 => 113,  252 => 108,  250 => 107,  233 => 93,  226 => 89,  219 => 85,  212 => 81,  205 => 77,  198 => 73,  183 => 61,  176 => 57,  169 => 53,  162 => 49,  155 => 45,  148 => 41,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Detail Reception {% endblock %}

{% set menu_const_av_ded           = true %}
{% set menu_const_av_ded_create    = true %}

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
                                        <td>{{ const_av_ded.ctVerificateur.usrName }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Immatricule vehicule</td>
                                        <td>{{ const_av_ded.cadImmatriculation }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Provenance</td>
                                        <td>{{ const_av_ded.cadProvenance }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Port d'embarquement</td>
                                        <td>{{ const_av_ded.cadLieuEmbarquement }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Date d'embarquement</td>
                                        <td>{{ const_av_ded.cadDateEmbarquement|date('d-m-Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Proprietaire</td>
                                        <td>{{ const_av_ded.cadProprietaireNom|upper }}</td>
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
                                        <td>{{ const_av_ded.cadConforme ? 'OUI' : 'NON' }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Bon etat</td>
                                        <td>{{ const_av_ded.cadBonEtat ? 'OUI' : 'NON' }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des personnes</td>
                                        <td>{{ const_av_ded.cadSecPers ? 'OUI' : 'NON' }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Securite des marchandises</td>
                                        <td>{{ const_av_ded.cadSecMarch ? 'OUI' : 'NON' }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Protection de l'environnement</td>
                                        <td>{{ const_av_ded.cadProtecEnv ? 'OUI' : 'NON' }}</td>
                                    </tr>
                                    <tr>
                                        <td class=\"text-success\"> Divers</td>
                                        <td>{{ const_av_ded.cadDivers|upper }}</td>
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
                {% set cad_cars = const_av_ded.ctConstAvDedCaracs %}
                <div class=\"box-body\">
                    <div class=\"table-responsive panel\">
                        <table class=\"table\">
                            <thead>
                                <th>Vehicule</th>
                                {% for cad_car in cad_cars %}
                                    <th>
                                        {% if cad_car.ctConstAvDedType %}
                                            {{ cad_car.ctConstAvDedType.cadTpLibelle }}
                                        {% endif %}
                                    </th>
                                {% endfor %}
                                <th>Observation</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Mise en circulation</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadPremiereCircule }}</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Genre</td>
                                    {% for cad_car in cad_cars %}
                                        <td>
                                            {% if cad_car.ctGenre %}
                                                {{ cad_car.ctGenre.grLibelle }}
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Marque</td>
                                    {% for cad_car in cad_cars %}
                                        <td>
                                            {% if cad_car.ctMarque %}
                                                {{ cad_car.ctMarque.mrqLibelle }}
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Type</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadTypeCar }}</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Numero de serie type</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadNumSerieType }}</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Numero de moteur</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadNumMoteur }}</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Source d'energie</td>
                                    {% for cad_car in cad_cars %}
                                        <td>
                                            {% if cad_car.ctSourceEnergie %}
                                                {{ cad_car.ctSourceEnergie.sreLibelle }}
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Cylindre</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadCylindre }}cm3</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Puissance</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadPuissance }}CV</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Carosserie</td>
                                    {% for cad_car in cad_cars %}
                                        <td>
                                            {% if cad_car.ctCarosserie %}
                                                {{ cad_car.ctCarosserie.crsLibelle }}
                                            {% endif %}
                                        </td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Nombre de places assises</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadNbrAssis }}</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Largeur</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadLargeur }}mm</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Hauteur</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadHauteur }}mm</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Longueur</td>
                                    {% for cad_car in cad_cars %}
                                    <td>{{ cad_car.cadLongueur }}mm</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Charge Utile</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadChargeUtile }}kg</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids a vide</td>
                                    {% for cad_car in cad_cars %}
                                     <td>{{ cad_car.cadPoidsVide }}kg</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids total en charge</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_car.cadPoidsTotalCharge }}kg</td>
                                    {% endfor %}
                                    <td></td>
                                </tr>
                                <tr>
                                    <td> Poids maxima</td>
                                    {% for cad_car in cad_cars %}
                                        <td>{{ cad_cars[1].cadPoidsMaxima }}</td>
                                    {% endfor %}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"box-footer\">
                <a href=\"{{ path('const_av_ded_generer_pv', { 'id': const_av_ded.id }) }}\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Generer PV
                </a>
                {#{% if (is_pv_generated is defined and is_pv_generated == true) %}#}
                    {#<a href=\"{{ path('const_av_ded_download_pv', { 'id': const_av_ded.id }) }}\"#}
                       {#class=\"btn btn-danger\" >#}
                        {#Telecharger PV#}
                    {#</a>#}
                {#{% else %}#}
                    {#<a href=\"{{ path('const_av_ded_download_pv', { 'id': const_av_ded.id }) }}\"#}
                       {#class=\"btn btn-danger disabled\" >#}
                        {#Telecharger PV#}
                    {#</a>#}
                {#{% endif %}#}
                <a href=\"{{ path('const_av_ded_index') }}\"
                   class=\"btn btn-default pull-left btn-mini-rectif\" >
                    Retour à la liste
                </a>
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
    <script>
        var _generate_pv_ajax_uri = \"{{ path('reception_generer_pv_ajax') }}\";
    </script>
{% endblock %}
", "AdminBundle:CtConstatationAvDedouanement:view.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanement/view.html.twig");
    }
}
