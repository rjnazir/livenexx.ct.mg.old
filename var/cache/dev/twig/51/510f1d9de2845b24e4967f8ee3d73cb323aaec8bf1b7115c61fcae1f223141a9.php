<?php

/* AdminBundle:CtReception:duplicata.html.twig */
class __TwigTemplate_ffc9f5408f58a6e0986da3db4d1d57aaf031541f0d93fbfb5336895285132124 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtReception:duplicata.html.twig", 1);
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
        $__internal_527c0a92e08d1c6c5dad2c7478602868166e5a93d78e3cb08ec32282af6bed3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527c0a92e08d1c6c5dad2c7478602868166e5a93d78e3cb08ec32282af6bed3c->enter($__internal_527c0a92e08d1c6c5dad2c7478602868166e5a93d78e3cb08ec32282af6bed3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:duplicata.html.twig"));

        $__internal_929b122370b84d81deb0106ff761e98d118788ac77c84b07ce77c81c9315bc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929b122370b84d81deb0106ff761e98d118788ac77c84b07ce77c81c9315bc6e->enter($__internal_929b122370b84d81deb0106ff761e98d118788ac77c84b07ce77c81c9315bc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtReception:duplicata.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), array(0 => ":form:fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctSourceEnergie", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctCarosserie", array()), array(0 => $this));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctMotif", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctUtilisation", array()), array(0 => $this));
        // line 46
        $context["menu_reception"] = true;
        // line 47
        $context["menu_reception_create"] = true;
        // line 48
        $context["menu_reception_duplicata"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527c0a92e08d1c6c5dad2c7478602868166e5a93d78e3cb08ec32282af6bed3c->leave($__internal_527c0a92e08d1c6c5dad2c7478602868166e5a93d78e3cb08ec32282af6bed3c_prof);

        
        $__internal_929b122370b84d81deb0106ff761e98d118788ac77c84b07ce77c81c9315bc6e->leave($__internal_929b122370b84d81deb0106ff761e98d118788ac77c84b07ce77c81c9315bc6e_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_85647dd8d5c301eb8dd4fd84f9bd2d287e7c3d0535f506a597cf51ba3eeb02ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85647dd8d5c301eb8dd4fd84f9bd2d287e7c3d0535f506a597cf51ba3eeb02ba->enter($__internal_85647dd8d5c301eb8dd4fd84f9bd2d287e7c3d0535f506a597cf51ba3eeb02ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_83b0307e1bc4a7cdbe185e1cb581a00231cf2da1c3812a858089c9236f5008da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b0307e1bc4a7cdbe185e1cb581a00231cf2da1c3812a858089c9236f5008da->enter($__internal_83b0307e1bc4a7cdbe185e1cb581a00231cf2da1c3812a858089c9236f5008da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 13
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 14
            $context["required"] = false;
        }
        // line 16
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 18
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 19
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 20
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 21
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 24
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 25
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 26
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 27
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 28
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 31
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 32
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 33
        echo "</select>
    </span>";
        
        $__internal_83b0307e1bc4a7cdbe185e1cb581a00231cf2da1c3812a858089c9236f5008da->leave($__internal_83b0307e1bc4a7cdbe185e1cb581a00231cf2da1c3812a858089c9236f5008da_prof);

        
        $__internal_85647dd8d5c301eb8dd4fd84f9bd2d287e7c3d0535f506a597cf51ba3eeb02ba->leave($__internal_85647dd8d5c301eb8dd4fd84f9bd2d287e7c3d0535f506a597cf51ba3eeb02ba_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b3917dfccd97c4ebb340a149a3dee63bdd160981a6283c79add44905f5ace3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3917dfccd97c4ebb340a149a3dee63bdd160981a6283c79add44905f5ace3c->enter($__internal_2b3917dfccd97c4ebb340a149a3dee63bdd160981a6283c79add44905f5ace3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_105e1ce904087fe08dd707352e7e8af25545edb99482910b8149996fed172bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105e1ce904087fe08dd707352e7e8af25545edb99482910b8149996fed172bf1->enter($__internal_105e1ce904087fe08dd707352e7e8af25545edb99482910b8149996fed172bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 38
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_105e1ce904087fe08dd707352e7e8af25545edb99482910b8149996fed172bf1->leave($__internal_105e1ce904087fe08dd707352e7e8af25545edb99482910b8149996fed172bf1_prof);

        
        $__internal_2b3917dfccd97c4ebb340a149a3dee63bdd160981a6283c79add44905f5ace3c->leave($__internal_2b3917dfccd97c4ebb340a149a3dee63bdd160981a6283c79add44905f5ace3c_prof);

    }

    // line 44
    public function block_title($context, array $blocks = array())
    {
        $__internal_68f3e0cf54b96754383aee25cd50a949d2d4b2def58c8caac70621817c31e724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f3e0cf54b96754383aee25cd50a949d2d4b2def58c8caac70621817c31e724->enter($__internal_68f3e0cf54b96754383aee25cd50a949d2d4b2def58c8caac70621817c31e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6702114d697d4df6c0209ff6876cdd865ef2ac7b9ad8d02802acfa4c67f8e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6702114d697d4df6c0209ff6876cdd865ef2ac7b9ad8d02802acfa4c67f8e2f->enter($__internal_b6702114d697d4df6c0209ff6876cdd865ef2ac7b9ad8d02802acfa4c67f8e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Réception ";
        
        $__internal_b6702114d697d4df6c0209ff6876cdd865ef2ac7b9ad8d02802acfa4c67f8e2f->leave($__internal_b6702114d697d4df6c0209ff6876cdd865ef2ac7b9ad8d02802acfa4c67f8e2f_prof);

        
        $__internal_68f3e0cf54b96754383aee25cd50a949d2d4b2def58c8caac70621817c31e724->leave($__internal_68f3e0cf54b96754383aee25cd50a949d2d4b2def58c8caac70621817c31e724_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec128979f7db14792939ca64ed1b8ac3ac19c035983b3983260b0d05c1aaf793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec128979f7db14792939ca64ed1b8ac3ac19c035983b3983260b0d05c1aaf793->enter($__internal_ec128979f7db14792939ca64ed1b8ac3ac19c035983b3983260b0d05c1aaf793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3dff65320b7124a0c9383c97c0e0d7910c416806880f6e091f0d88f3404736a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dff65320b7124a0c9383c97c0e0d7910c416806880f6e091f0d88f3404736a->enter($__internal_c3dff65320b7124a0c9383c97c0e0d7910c416806880f6e091f0d88f3404736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"callout callout-success\">
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 57
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 58
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Duplicata Réception</h3></div>
        <div class=\"panel-body\">
            ";
        // line 65
        echo "            <div class=\"row\" id=\"search-form\">
                <div class=\"col-md-12\">
                    <div class=\"box box-default\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Recherche</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                        <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                               class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                        <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), 'form_start');
        echo "
                ";
        // line 95
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_pv\">Numéro PV</label>
                                <input id=\"ct_numero_pv\" name=\"ct_numero_pv\"
                                       class=\"form-control\" readonly />
                            </div>
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpImmatriculation", array()), 'row');
        echo "
                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            <div class=\"hidden\">
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 129
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations réception</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"ct_type_reception\">Type de réception</label>
                                <input id=\"ct_type_reception\" name=\"ct_type_reception\"
                                       class=\"form-control\" readonly />
                            </div>
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpNbrAssis", array()), 'row');
        echo "
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpNbrDebout", array()), 'row');
        echo "
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpMiseService", array()), 'row');
        echo "
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctMotif", array()), 'row');
        echo "
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpProprietaire", array()), 'row');
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpAdresse", array()), 'row');
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "rcpProfession", array()), 'row');
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), "ctUtilisation", array()), 'row');
        echo "
                        </div>
                        <div class=\"box-footer\">
                            <a href=\"#\"
                               class=\"btn btn-primary disabled\" id=\"ct_link_generer_pv\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div>

                    </div>
                </div>
                ";
        // line 161
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["duplicata_form"] ?? $this->getContext($context, "duplicata_form")), 'form_end');
        echo "
            </div>

        </div>
    </div>

";
        
        $__internal_c3dff65320b7124a0c9383c97c0e0d7910c416806880f6e091f0d88f3404736a->leave($__internal_c3dff65320b7124a0c9383c97c0e0d7910c416806880f6e091f0d88f3404736a_prof);

        
        $__internal_ec128979f7db14792939ca64ed1b8ac3ac19c035983b3983260b0d05c1aaf793->leave($__internal_ec128979f7db14792939ca64ed1b8ac3ac19c035983b3983260b0d05c1aaf793_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d02012a1c73ddd99714ff1bc26cadbb8c7bc639ceb3a6acb92633dac5fe82ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02012a1c73ddd99714ff1bc26cadbb8c7bc639ceb3a6acb92633dac5fe82ec1->enter($__internal_d02012a1c73ddd99714ff1bc26cadbb8c7bc639ceb3a6acb92633dac5fe82ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a6d98e7da7b9df7d187b77e4f7c44b10d07adb72860668dd57d4a36d1a95d667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d98e7da7b9df7d187b77e4f7c44b10d07adb72860668dd57d4a36d1a95d667->enter($__internal_a6d98e7da7b9df7d187b77e4f7c44b10d07adb72860668dd57d4a36d1a95d667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script>
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_num_serie_duplicata");
        echo "\";
        var _autocomplete_immatricule_ajax_uri = \"";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_immatricule_duplicata");
        echo "\";
        var _generer_pv_base_ajax_uri = \"";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv_duplicata_ajax");
        echo "\"
    </script>

    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a6d98e7da7b9df7d187b77e4f7c44b10d07adb72860668dd57d4a36d1a95d667->leave($__internal_a6d98e7da7b9df7d187b77e4f7c44b10d07adb72860668dd57d4a36d1a95d667_prof);

        
        $__internal_d02012a1c73ddd99714ff1bc26cadbb8c7bc639ceb3a6acb92633dac5fe82ec1->leave($__internal_d02012a1c73ddd99714ff1bc26cadbb8c7bc639ceb3a6acb92633dac5fe82ec1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtReception:duplicata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 181,  452 => 178,  448 => 177,  444 => 176,  438 => 173,  431 => 170,  422 => 169,  405 => 161,  391 => 150,  387 => 149,  383 => 148,  379 => 147,  375 => 146,  371 => 145,  367 => 144,  363 => 143,  359 => 142,  355 => 141,  341 => 129,  332 => 122,  328 => 121,  324 => 120,  320 => 119,  315 => 117,  311 => 116,  307 => 115,  303 => 114,  299 => 113,  295 => 112,  291 => 111,  287 => 110,  283 => 109,  279 => 108,  275 => 107,  261 => 95,  257 => 93,  227 => 65,  222 => 61,  213 => 58,  210 => 57,  205 => 56,  196 => 53,  193 => 52,  188 => 51,  179 => 50,  160 => 44,  148 => 41,  141 => 38,  132 => 37,  121 => 33,  119 => 32,  117 => 31,  111 => 28,  109 => 27,  107 => 26,  105 => 25,  103 => 24,  98 => 21,  91 => 20,  89 => 19,  83 => 18,  79 => 16,  76 => 14,  74 => 13,  65 => 12,  55 => 1,  53 => 48,  51 => 47,  49 => 46,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 3,  11 => 1,);
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

{% form_theme duplicata_form ':form:fields.html.twig' %}

{% form_theme duplicata_form.ctVehicule.ctGenre _self %}
{% form_theme duplicata_form.ctVehicule.ctMarque _self %}
{% form_theme duplicata_form.ctSourceEnergie _self %}
{% form_theme duplicata_form.ctCarosserie _self %}
{% form_theme duplicata_form.ctMotif _self %}
{% form_theme duplicata_form.ctUtilisation _self %}

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

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% block title %}{{ parent() }} Modification Réception {% endblock %}

{% set menu_reception             = true %}
{% set menu_reception_create      = true %}
{% set menu_reception_duplicata      = true %}

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
    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Duplicata Réception</h3></div>
        <div class=\"panel-body\">
            {# Formulaire recherche #}
            <div class=\"row\" id=\"search-form\">
                <div class=\"col-md-12\">
                    <div class=\"box box-default\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Recherche</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                        <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                               class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                        <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                {{ form_start(duplicata_form) }}
                {# Formulaire véhicule #}
                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_pv\">Numéro PV</label>
                                <input id=\"ct_numero_pv\" name=\"ct_numero_pv\"
                                       class=\"form-control\" readonly />
                            </div>
                            {{ form_row(duplicata_form.ctVehicule.vhcType) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcNumSerie) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcNumMoteur) }}
                            {{ form_row(duplicata_form.rcpImmatriculation) }}
                            {{ form_row(duplicata_form.ctVehicule.ctGenre) }}
                            {{ form_row(duplicata_form.ctVehicule.ctMarque) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcCylindre) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcPuissance) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcChargeUtile) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcPoidsVide) }}
                            {{ form_row(duplicata_form.ctVehicule.vhcPoidsTotalCharge) }}
                            <div class=\"hidden\">
                                {{ form_row(duplicata_form.ctVehicule.vhcHauteur) }}
                                {{ form_row(duplicata_form.ctVehicule.vhcLongueur) }}
                                {{ form_row(duplicata_form.ctVehicule.vhcLargeur) }}
                                {{ form_row(duplicata_form.ctVehicule.vhcProvenance) }}
                            </div>
                        </div>
                    </div>
                </div>

                {# Formulaire Reception #}
                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations réception</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                <label for=\"ct_type_reception\">Type de réception</label>
                                <input id=\"ct_type_reception\" name=\"ct_type_reception\"
                                       class=\"form-control\" readonly />
                            </div>
                            {{ form_row(duplicata_form.ctSourceEnergie) }}
                            {{ form_row(duplicata_form.ctCarosserie) }}
                            {{ form_row(duplicata_form.rcpNbrAssis) }}
                            {{ form_row(duplicata_form.rcpNbrDebout) }}
                            {{ form_row(duplicata_form.rcpMiseService) }}
                            {{ form_row(duplicata_form.ctMotif) }}
                            {{ form_row(duplicata_form.rcpProprietaire) }}
                            {{ form_row(duplicata_form.rcpAdresse) }}
                            {{ form_row(duplicata_form.rcpProfession) }}
                            {{ form_row(duplicata_form.ctUtilisation) }}
                        </div>
                        <div class=\"box-footer\">
                            <a href=\"#\"
                               class=\"btn btn-primary disabled\" id=\"ct_link_generer_pv\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div>

                    </div>
                </div>
                {{ form_end(duplicata_form) }}
            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script>
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('reception_autocomplete_num_serie_duplicata') }}\";
        var _autocomplete_immatricule_ajax_uri = \"{{ path('reception_autocomplete_immatricule_duplicata') }}\";
        var _generer_pv_base_ajax_uri = \"{{ path('reception_generer_pv_duplicata_ajax') }}\"
    </script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
{% endblock %}", "AdminBundle:CtReception:duplicata.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtReception/duplicata.html.twig");
    }
}
