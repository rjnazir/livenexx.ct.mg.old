<?php

/* @Admin/CtConstatationAvDedouanement/add.html.twig */
class __TwigTemplate_e014c5baddbd21c70a052b57877a421d22042046f8c9e5897df130ac5eb5dbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtConstatationAvDedouanement/add.html.twig", 1);
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
        $__internal_0a827ff3b563193dce0298ec724e339475a2739057edd75aaac6bae045febdd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a827ff3b563193dce0298ec724e339475a2739057edd75aaac6bae045febdd0->enter($__internal_0a827ff3b563193dce0298ec724e339475a2739057edd75aaac6bae045febdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanement/add.html.twig"));

        $__internal_aae331d2d3386a6fd9bdecb97c3317e559f29bd7ff60d9b2b78ab6339d0df8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae331d2d3386a6fd9bdecb97c3317e559f29bd7ff60d9b2b78ab6339d0df8a4->enter($__internal_aae331d2d3386a6fd9bdecb97c3317e559f29bd7ff60d9b2b78ab6339d0df8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtConstatationAvDedouanement/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), array(0 => $this));
        // line 33
        $context["menu_const_av_ded"] = true;
        // line 34
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a827ff3b563193dce0298ec724e339475a2739057edd75aaac6bae045febdd0->leave($__internal_0a827ff3b563193dce0298ec724e339475a2739057edd75aaac6bae045febdd0_prof);

        
        $__internal_aae331d2d3386a6fd9bdecb97c3317e559f29bd7ff60d9b2b78ab6339d0df8a4->leave($__internal_aae331d2d3386a6fd9bdecb97c3317e559f29bd7ff60d9b2b78ab6339d0df8a4_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b0e6f9596058f8612d92f6282a2ee41a806a6bbe6d8bc19468848f8b689ca87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e6f9596058f8612d92f6282a2ee41a806a6bbe6d8bc19468848f8b689ca87d->enter($__internal_b0e6f9596058f8612d92f6282a2ee41a806a6bbe6d8bc19468848f8b689ca87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_595c6a99172685a69c74ed32cd6af19eeef4c67e813da4f743187f095fe8f459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595c6a99172685a69c74ed32cd6af19eeef4c67e813da4f743187f095fe8f459->enter($__internal_595c6a99172685a69c74ed32cd6af19eeef4c67e813da4f743187f095fe8f459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_595c6a99172685a69c74ed32cd6af19eeef4c67e813da4f743187f095fe8f459->leave($__internal_595c6a99172685a69c74ed32cd6af19eeef4c67e813da4f743187f095fe8f459_prof);

        
        $__internal_b0e6f9596058f8612d92f6282a2ee41a806a6bbe6d8bc19468848f8b689ca87d->leave($__internal_b0e6f9596058f8612d92f6282a2ee41a806a6bbe6d8bc19468848f8b689ca87d_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_af51a756c04d7ebaac7727be520dc438d40f247b235c020a11485353fc69f16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af51a756c04d7ebaac7727be520dc438d40f247b235c020a11485353fc69f16c->enter($__internal_af51a756c04d7ebaac7727be520dc438d40f247b235c020a11485353fc69f16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb11d37039e75e45428cd09af4e7dad38a48175bf746e95b98953cd1329844a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb11d37039e75e45428cd09af4e7dad38a48175bf746e95b98953cd1329844a3->enter($__internal_cb11d37039e75e45428cd09af4e7dad38a48175bf746e95b98953cd1329844a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_cb11d37039e75e45428cd09af4e7dad38a48175bf746e95b98953cd1329844a3->leave($__internal_cb11d37039e75e45428cd09af4e7dad38a48175bf746e95b98953cd1329844a3_prof);

        
        $__internal_af51a756c04d7ebaac7727be520dc438d40f247b235c020a11485353fc69f16c->leave($__internal_af51a756c04d7ebaac7727be520dc438d40f247b235c020a11485353fc69f16c_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_eae2141d789b55cb51df41689987008c1c742b242cb494dbf974ae3019a1f758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae2141d789b55cb51df41689987008c1c742b242cb494dbf974ae3019a1f758->enter($__internal_eae2141d789b55cb51df41689987008c1c742b242cb494dbf974ae3019a1f758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e8154d9415bb29a018e5fd83dded3c2dc8eadeac6daf536ca024b20abba302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8154d9415bb29a018e5fd83dded3c2dc8eadeac6daf536ca024b20abba302b->enter($__internal_7e8154d9415bb29a018e5fd83dded3c2dc8eadeac6daf536ca024b20abba302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 79
            echo "                                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                        ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 81
                echo "                                                            ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
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
                }
                // line 86
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                                    </optgroup>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
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
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 144
            echo "                                                <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 146
                echo "                                                        ";
                if (($this->getAttribute($context["province"], "id", array()) == $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "id", array()))) {
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
                }
                // line 151
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        $context['_seq'] = twig_ensure_traversable(($context["verificateurs"] ?? $this->getContext($context, "verificateurs")));
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctConstAvDedCaracs", array()));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadImmatriculation", array()), 'row');
        echo "
                        ";
        // line 307
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProvenance", array()), 'row');
        echo "
                        ";
        // line 308
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadDateEmbarquement", array()), 'row');
        echo "
                        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadLieuEmbarquement", array()), 'row');
        echo "
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProprietaireNom", array()), 'row');
        echo "
                        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProprietaireAdresse", array()), 'row');
        echo "
                        ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadDivers", array()), 'row');
        echo "
                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadObservation", array()), 'row');
        echo "
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadConforme", array()), 'row');
        echo "
                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadBonEtat", array()), 'row');
        echo "
                        ";
        // line 316
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadSecPers", array()), 'row');
        echo "
                        ";
        // line 317
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadSecMarch", array()), 'row');
        echo "
                        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cadProtecEnv", array()), 'row');
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
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required>
                                        ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? $this->getContext($context, "imprimes_use")));
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
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? $this->getContext($context, "imprimes_tech")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 342
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? $this->getContext($context, "imprimes_tech_use")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_generer_pv", array("id" => $this->getAttribute(($context["const_av_ded"] ?? $this->getContext($context, "const_av_ded")), "id", array()))), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_7e8154d9415bb29a018e5fd83dded3c2dc8eadeac6daf536ca024b20abba302b->leave($__internal_7e8154d9415bb29a018e5fd83dded3c2dc8eadeac6daf536ca024b20abba302b_prof);

        
        $__internal_eae2141d789b55cb51df41689987008c1c742b242cb494dbf974ae3019a1f758->leave($__internal_eae2141d789b55cb51df41689987008c1c742b242cb494dbf974ae3019a1f758_prof);

    }

    // line 379
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6bef01d047536a003f2db73ec9e8d7cf5ddfc8891f6c48d6fb34df7855de5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bef01d047536a003f2db73ec9e8d7cf5ddfc8891f6c48d6fb34df7855de5ef->enter($__internal_f6bef01d047536a003f2db73ec9e8d7cf5ddfc8891f6c48d6fb34df7855de5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_84becf26751743ff8389e365da6135f68fcacd86d8717703aeb7ecf6e4ad8c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84becf26751743ff8389e365da6135f68fcacd86d8717703aeb7ecf6e4ad8c9b->enter($__internal_84becf26751743ff8389e365da6135f68fcacd86d8717703aeb7ecf6e4ad8c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_84becf26751743ff8389e365da6135f68fcacd86d8717703aeb7ecf6e4ad8c9b->leave($__internal_84becf26751743ff8389e365da6135f68fcacd86d8717703aeb7ecf6e4ad8c9b_prof);

        
        $__internal_f6bef01d047536a003f2db73ec9e8d7cf5ddfc8891f6c48d6fb34df7855de5ef->leave($__internal_f6bef01d047536a003f2db73ec9e8d7cf5ddfc8891f6c48d6fb34df7855de5ef_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtConstatationAvDedouanement/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  894 => 391,  888 => 388,  884 => 387,  880 => 386,  874 => 383,  867 => 380,  858 => 379,  845 => 375,  836 => 370,  832 => 368,  823 => 363,  821 => 362,  809 => 352,  802 => 350,  796 => 349,  790 => 346,  785 => 345,  782 => 344,  778 => 343,  773 => 342,  768 => 341,  759 => 338,  754 => 337,  750 => 336,  737 => 325,  731 => 320,  727 => 318,  723 => 317,  719 => 316,  715 => 315,  711 => 314,  707 => 313,  703 => 312,  699 => 311,  695 => 310,  691 => 309,  687 => 308,  683 => 307,  679 => 306,  674 => 305,  669 => 301,  657 => 295,  653 => 294,  647 => 291,  643 => 290,  637 => 287,  633 => 286,  627 => 283,  623 => 282,  616 => 278,  612 => 277,  606 => 274,  602 => 273,  596 => 270,  592 => 269,  585 => 265,  581 => 264,  575 => 261,  571 => 260,  565 => 257,  561 => 256,  555 => 253,  551 => 252,  545 => 249,  541 => 248,  535 => 245,  531 => 244,  525 => 241,  521 => 240,  515 => 237,  511 => 236,  505 => 233,  501 => 232,  495 => 229,  491 => 228,  485 => 225,  481 => 224,  477 => 222,  473 => 220,  467 => 216,  465 => 215,  459 => 212,  453 => 209,  447 => 205,  444 => 204,  441 => 203,  438 => 202,  435 => 201,  431 => 200,  426 => 198,  399 => 173,  390 => 170,  385 => 169,  381 => 168,  365 => 154,  358 => 152,  352 => 151,  346 => 148,  341 => 147,  338 => 146,  334 => 145,  329 => 144,  325 => 143,  311 => 134,  290 => 115,  263 => 89,  256 => 87,  250 => 86,  244 => 83,  239 => 82,  236 => 81,  232 => 80,  227 => 79,  223 => 78,  209 => 69,  202 => 65,  184 => 49,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 4,  34 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}
{% form_theme form.ctVerificateur _self %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
            {%- endif -%}
            {%- if preferred_choices|length > 0 -%}
                {% set options = preferred_choices %}
                {{- block('choice_widget_options') -}}
                {%- if choices|length > 0 and separator is not none -%}
                    <option disabled=\"disabled\">{{ separator }}</option>
                {%- endif -%}
            {%- endif -%}
            {%- set options = choices -%}
            {{- block('choice_widget_options') -}}
        </select>
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Ajout motif {% endblock %}

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

    {# Formulaire génération feuille de caiise #}
    <div class=\"row\">
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
                                           value=\"{{ \"now\"|date(\"d/m/Y\") }}\" />
                                </div>
                            </div>
                                <!-- Centre -->
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                <div class=\"row\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_fdc_centre\">Séléctionner le centre</label>
                                        <select id=\"ct_fdc_centre\" name=\"ct_fdc_centre\" class=\"form-control select2\"
                                                style=\"width: 100%;\" data-placeholder=\"Choisir\" required>
                                                <option value=\"\" selected=\"selected\">
                                                    Choisir
                                                </option>
                                                {% for province in provinces %}
                                                    <optgroup label=\"{{ province.prvNom }}\">
                                                        {% for centre in centres %}
                                                            {% if province.id == centre.ctProvince.id %}
                                                                <option value=\"{{ centre.id }}\">
                                                                    {{ centre.ctrNom|upper }}
                                                                </option>
                                                            {% endif %}
                                                        {% endfor %}
                                                    </optgroup>
                                                {% endfor %}
                                        </select>
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

        {# Formulaire generation Fiche de Controle Verificateur #}
        <div class=\"col-md-6\">
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
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            <div class=\"row\">
                                <div class=\"form-group\">
                                    <label for=\"ct_verif_centre\">Séléctionner le centre</label>
                                    <select required id=\"ct_verif_centre\" name=\"ct_verif_centre\" class=\"form-control select2\"
                                            style=\"width: 100%;\" data-placeholder=\"Choisir\">
                                            <option value=\"\" selected=\"selected\">
                                                Choisir
                                            </option>
                                            {% for province in provinces %}
                                                <optgroup label=\"{{ province.prvNom }}\">
                                                    {% for centre in centres %}
                                                        {% if province.id == centre.ctProvince.id %}
                                                            <option value=\"{{ centre.id }}\">
                                                                {{ centre.ctrNom|upper }}
                                                            </option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </optgroup>
                                            {% endfor %}
                                    </select>
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
                                        {% for verif in verificateurs %}
                                            <option value=\"{{ verif.id }}\">
                                                {{ verif.usrName|upper }}
                                            </option>
                                        {% endfor %}
                                    </select>
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
            {{ form_start(form) }}
            <div class=\"row\">
                {% for cadc in form.ctConstAvDedCaracs %}
                    {% form_theme cadc.ctGenre _self %}
                    {% form_theme cadc.ctMarque _self %}
                    {% form_theme cadc.ctSourceEnergie _self %}
                    {% form_theme cadc.ctCarosserie _self %}
                <div class=\"col-md-4\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                {{ form_widget(cadc.ctConstAvDedType, {'attr': {'class': 'form-control hide'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(cadc.cadInputCaracType, {'attr': {'class': 'form-control kl-select-cadt'}})}}
                            </div>
                            <div class=\"form-group\">
                                {% if cadc.vars.id == 'ct_service_metiermanagerbundle_constatation_av_ded_ctConstAvDedCaracs_1' %}
                                    <a href=\"javascript:void(0)\" class=\"btn btn-primary\" id=\"id-clear-carte-grise\">
                                        Pas de carte grise
                                    </a>
                                {% else %}
                                    <div class=\"kl-padding-top\"></div>
                                {% endif %}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadPremiereCircule) }}
                                {{ form_widget(cadc.cadPremiereCircule,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.ctGenre) }}
                                {{ form_widget(cadc.ctGenre,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.ctMarque) }}
                                {{ form_widget(cadc.ctMarque,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadTypeCar) }}
                                {{ form_widget(cadc.cadTypeCar,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadNumSerieType) }}
                                {{ form_widget(cadc.cadNumSerieType,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadNumMoteur) }}
                                {{ form_widget(cadc.cadNumMoteur,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.ctSourceEnergie) }}
                                {{ form_widget(cadc.ctSourceEnergie,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadCylindre) }}
                                {{ form_widget(cadc.cadCylindre,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadPuissance) }}
                                {{ form_widget(cadc.cadPuissance,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.ctCarosserie) }}
                                {{ form_widget(cadc.ctCarosserie,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadNbrAssis) }}
                                {{ form_widget(cadc.cadNbrAssis,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadLargeur) }}
                                {{ form_widget(cadc.cadLargeur,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadHauteur) }}
                                {{ form_widget(cadc.cadHauteur,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadLongueur) }}
                                {{ form_widget(cadc.cadLongueur,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <hr/>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadChargeUtile) }}
                                {{ form_widget(cadc.cadChargeUtile,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadPoidsVide) }}
                                {{ form_widget(cadc.cadPoidsVide,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_label(cadc.cadPoidsTotalCharge) }}
                                {{ form_widget(cadc.cadPoidsTotalCharge,{'attr': {'class': 'form-control'}})}}
                            </div>
                            <div class=\"form-group hidden\">
                                {{ form_label(cadc.cadPoidsMaxima) }}
                                {{ form_widget(cadc.cadPoidsMaxima,{'attr': {'class': 'form-control'}})}}
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    {#<div class=\"box-body\">#}
                        {{ form_row(form.ctVerificateur ) }}
                        {{ form_row(form.cadImmatriculation ) }}
                        {{ form_row(form.cadProvenance) }}
                        {{ form_row(form.cadDateEmbarquement) }}
                        {{ form_row(form.cadLieuEmbarquement) }}
                        {{ form_row(form.cadProprietaireNom) }}
                        {{ form_row(form.cadProprietaireAdresse) }}
                        {{ form_row(form.cadDivers) }}
                        {{ form_row(form.cadObservation) }}
                        {{ form_row(form.cadConforme) }}
                        {{ form_row(form.cadBonEtat) }}
                        {{ form_row(form.cadSecPers) }}
                        {{ form_row(form.cadSecMarch) }}
                        {{ form_row(form.cadProtecEnv) }}
                    {#</div>#}
                </div>
            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    {# Informations des imprimés utilisés #}
                    <div class=\"box box-warning\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                        </div>

                        <div class=\"row\">
                            <div class=\"box-body\">
                                <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                    <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                    <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                        style=\"width: 100%;\" data-placeholder=\"  Choisir\" multiple=\"\" required>
                                        {% for imprime_use in imprimes_use %}
                                            <option value=\"{{ imprime_use.id }}\" selected>
                                                {{ imprime_use.ituNumero }}
                                            </option>
                                        {% endfor %}
                                        {% for imprime_tech in imprimes_tech %}
                                        <optgroup label=\"{{ imprime_tech.nomImprimeTech|upper }}\">
                                            {% for imprime_tech_use in imprimes_tech_use %}
                                                {% if imprime_tech.id == imprime_tech_use.ctImprimeTech.id %}
                                                <option value=\"{{ imprime_tech_use.id }}\">
                                                    {{ imprime_tech_use.ituNumero|upper }}
                                                </option>
                                                {% endif %}
                                            {% endfor %}
                                        </optgroup>
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"box-footer\">
            {% if is_generated is defined %}
                <a href=\"{{ path('const_av_ded_generer_pv', { 'id': const_av_ded.id }) }}\" target=\"_blank\"
                   class=\"btn btn-primary\" >
                    Générer PV
                </a>
            {% else %}
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            {% endif %}
            <a href=\"{{ path('const_av_ded_index') }}\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script>
        var _generate_feuille_caisse_ajax_uri = \"{{ path('const_av_ded_generate_reporting_feuille_caisse_ajax') }}\";
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _generate_fiche_ctrl_verif_ajax_uri = \"{{ path('const_av_ded_generate_reporting_fiche_controle_ajax') }}\";
    </script>

    <script src=\"{{ asset('backoffice/js/add.constatation.js') }}\"></script>
{% endblock %}", "@Admin/CtConstatationAvDedouanement/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtConstatationAvDedouanement\\add.html.twig");
    }
}
