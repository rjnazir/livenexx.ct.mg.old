<?php

/* AdminBundle:CtBordereau:search.html.twig */
class __TwigTemplate_6416e796a408a6a3ac1d126fbaf80715f23d33c1845da73ea452a3036ea2bf55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtBordereau:search.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
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
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["search_form"] ?? null), "ctCentre", array()), array(0 => $this));
        // line 39
        $context["menu_bordereau"] = true;
        // line 40
        $context["menu_bordereau_search"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 6
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 7
            $context["required"] = false;
        }
        // line 9
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 90%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 11
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 12
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 13
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 14
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 17
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 18
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 19
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 20
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 21
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 24
        $context["options"] = ($context["choices"] ?? null);
        // line 25
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 26
        echo "</select>
    </span>";
    }

    // line 30
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Recherche bordereau de livraison ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 44
            echo "        <div class=\"callout callout-success\">
            ";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    
    ";
        // line 55
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_search");
        echo "\" method=\"POST\">
        <div class=\"row\" id=\"search-form\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Recherche bordereau</h3>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"bl_numero\">Numéro du bordereau</label>
                                    <input required id=\"bl_numero\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["bl_numero"] ?? null), "html", null, true);
        echo "\" name=\"bl_numero\" class=\"form-control\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <label for=\"ct_centre_id\">Centre de destination</label>
                                    <select required id=\"ct_centre_id\" name=\"ct_centre_id\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner centre de destination</option>
                                            ";
        // line 77
        if ((($context["ct_centre_id"] ?? null) && ($context["ctr_nom"] ?? null))) {
            // line 78
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, ($context["ct_centre_id"] ?? null), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, ($context["ctr_nom"] ?? null), "html", null, true);
            echo "</option>
                                            ";
        }
        // line 80
        echo "                                            ";
        // line 82
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_centres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["list_centre"]) {
            // line 83
            echo "                                                        ";
            // line 84
            echo "                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["list_centre"], "id", array()), "html", null, true);
            echo "\">
                                                            ";
            // line 85
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["list_centre"], "ctrNom", array())), "html", null, true);
            echo "
                                                        </option>
                                                        ";
            // line 88
            echo "                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_centre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                                                ";
        // line 91
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        Rechercher
                                    </button>
                                </div>
                            </div>
                        </div>
                        ";
        // line 107
        if (($context["list_in_its"] ?? null)) {
            // line 108
            echo "                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"pull-left btn btn-success\"
                                            id=\"btn-generate-bordereau-livraison\" style=\"\">
                                        Générer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-2\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    <span class=\"pull-left\" id=\"link-download-bordereau-livraison\"></span>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 126
        echo "                    </div>
                </div>

                ";
        // line 130
        echo "                ";
        if (($context["list_in_its"] ?? null)) {
            // line 131
            echo "                <div class=\"row\" id=\"search-form\">
                    <div class=\"col-md-12\">
                        <div class=\"box box-success\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Liste des imprimés dans le bordereau</h3>
                            </div>
                            <div class=\"box-body table-responsive\">
                                <table id=\"liste-imprime-tech-bl\" class=\"table table-bordered table-striped table-condensed\">
                                    <thead>
                                    <tr>
                                        ";
            // line 142
            echo "                                        <th width=\"22%\">N° bordereau</th>
                                        <th width=\"15%\">Nom centre</th>
                                        <th width=\"15%\">Nom IT</th>
                                        <th width=\"8%\">Unité</th>
                                        <th width=\"13%\">N° IT</th>
                                        <th width=\"27%\">Réf. expression de besoin</th>
                                        ";
            // line 149
            echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list_in_its"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["list_in_it"]) {
                // line 153
                echo "                                        <tr>
                                            ";
                // line 157
                echo "                                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blNumero", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctCentre", array()), "ctrNom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctImprimeTech", array()), "nomImprimeTech", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["list_in_it"], "ctImprimeTech", array()), "uteImprimeTech", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blDebutNumero", array()), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["list_in_it"], "blFinNumero", array())) {
                    echo " à ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "blFinNumero", array()), "html", null, true);
                    echo " ";
                }
                echo "</td>
                                            <td>";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["list_in_it"], "refExpr", array()), "html", null, true);
                echo " du ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list_in_it"], "dateRefExpr", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_in_it'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 172
        echo "            </div>
        </div>
    </form>

";
    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _bordereau_generer_bl_uri = \"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_generer_bl");
        echo "\";
    </script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/search.bordereau.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:CtBordereau:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 187,  374 => 185,  369 => 183,  361 => 179,  358 => 178,  350 => 172,  341 => 165,  330 => 162,  320 => 161,  316 => 160,  312 => 159,  308 => 158,  303 => 157,  300 => 153,  296 => 152,  291 => 149,  283 => 142,  271 => 131,  268 => 130,  263 => 126,  243 => 108,  241 => 107,  223 => 91,  221 => 89,  215 => 88,  210 => 85,  205 => 84,  203 => 83,  198 => 82,  196 => 80,  188 => 78,  186 => 77,  173 => 67,  157 => 55,  154 => 53,  145 => 50,  142 => 49,  137 => 48,  128 => 45,  125 => 44,  120 => 43,  117 => 42,  111 => 36,  104 => 33,  101 => 32,  94 => 30,  89 => 26,  87 => 25,  85 => 24,  79 => 21,  77 => 20,  75 => 19,  73 => 18,  71 => 17,  66 => 14,  59 => 13,  57 => 12,  51 => 11,  47 => 9,  44 => 7,  42 => 6,  39 => 5,  35 => 1,  33 => 40,  31 => 39,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:CtBordereau:search.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtBordereau/search.html.twig");
    }
}
