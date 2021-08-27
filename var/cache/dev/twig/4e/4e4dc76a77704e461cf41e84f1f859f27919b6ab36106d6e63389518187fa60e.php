<?php

/* @Admin/CtReception/edit.html.twig */
class __TwigTemplate_dbb1499738929676a358691bc787ff6c0d5bd7fb8d31ada5e959f5f2e6264fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/edit.html.twig", 1);
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
        $__internal_d20a87b872527ad0cdc4d84d3007718150d19039422db4edf467f2f3faa9d4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d20a87b872527ad0cdc4d84d3007718150d19039422db4edf467f2f3faa9d4fc->enter($__internal_d20a87b872527ad0cdc4d84d3007718150d19039422db4edf467f2f3faa9d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/edit.html.twig"));

        $__internal_7142b4678f48b2d61f3df04fd37cbab9c5eacc4f815d063b249cf4da8b11c501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7142b4678f48b2d61f3df04fd37cbab9c5eacc4f815d063b249cf4da8b11c501->enter($__internal_7142b4678f48b2d61f3df04fd37cbab9c5eacc4f815d063b249cf4da8b11c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:fields.html.twig"));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctSourceEnergie", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), array(0 => $this));
        // line 48
        $context["menu_reception"] = true;
        // line 49
        $context["menu_reception_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d20a87b872527ad0cdc4d84d3007718150d19039422db4edf467f2f3faa9d4fc->leave($__internal_d20a87b872527ad0cdc4d84d3007718150d19039422db4edf467f2f3faa9d4fc_prof);

        
        $__internal_7142b4678f48b2d61f3df04fd37cbab9c5eacc4f815d063b249cf4da8b11c501->leave($__internal_7142b4678f48b2d61f3df04fd37cbab9c5eacc4f815d063b249cf4da8b11c501_prof);

    }

    // line 14
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3298b81b75b26854aab113f081a298ec03c86a5a1d217d78d6d237a535254dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3298b81b75b26854aab113f081a298ec03c86a5a1d217d78d6d237a535254dc6->enter($__internal_3298b81b75b26854aab113f081a298ec03c86a5a1d217d78d6d237a535254dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1a9a514536f28d8551feebc1ceb909aa56d1eee9f1f95bb386f53d8b4251eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9a514536f28d8551feebc1ceb909aa56d1eee9f1f95bb386f53d8b4251eced->enter($__internal_1a9a514536f28d8551feebc1ceb909aa56d1eee9f1f95bb386f53d8b4251eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 15
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 16
            $context["required"] = false;
        }
        // line 18
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 20
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 21
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 22
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 23
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 26
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 27
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 28
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 29
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 30
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 33
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 34
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 35
        echo "</select>
    </span>";
        
        $__internal_1a9a514536f28d8551feebc1ceb909aa56d1eee9f1f95bb386f53d8b4251eced->leave($__internal_1a9a514536f28d8551feebc1ceb909aa56d1eee9f1f95bb386f53d8b4251eced_prof);

        
        $__internal_3298b81b75b26854aab113f081a298ec03c86a5a1d217d78d6d237a535254dc6->leave($__internal_3298b81b75b26854aab113f081a298ec03c86a5a1d217d78d6d237a535254dc6_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf174da3fbca8cbd35a4a3f0281068a64c6bdda711b2c5af821e5fdce3f16bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf174da3fbca8cbd35a4a3f0281068a64c6bdda711b2c5af821e5fdce3f16bbf->enter($__internal_bf174da3fbca8cbd35a4a3f0281068a64c6bdda711b2c5af821e5fdce3f16bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5fdd43d2f2ef4ed00b5db50eea1d629b4500e8260a4aed9b7d9a52308f9fb559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdd43d2f2ef4ed00b5db50eea1d629b4500e8260a4aed9b7d9a52308f9fb559->enter($__internal_5fdd43d2f2ef4ed00b5db50eea1d629b4500e8260a4aed9b7d9a52308f9fb559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 40
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_5fdd43d2f2ef4ed00b5db50eea1d629b4500e8260a4aed9b7d9a52308f9fb559->leave($__internal_5fdd43d2f2ef4ed00b5db50eea1d629b4500e8260a4aed9b7d9a52308f9fb559_prof);

        
        $__internal_bf174da3fbca8cbd35a4a3f0281068a64c6bdda711b2c5af821e5fdce3f16bbf->leave($__internal_bf174da3fbca8cbd35a4a3f0281068a64c6bdda711b2c5af821e5fdce3f16bbf_prof);

    }

    // line 46
    public function block_title($context, array $blocks = array())
    {
        $__internal_899dcc36f98d6d5c39c135a88fd25381be7d829138700417ad23f74735089e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899dcc36f98d6d5c39c135a88fd25381be7d829138700417ad23f74735089e05->enter($__internal_899dcc36f98d6d5c39c135a88fd25381be7d829138700417ad23f74735089e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15e33e1251d670abdbd0bedca1b5e2c68ae10e24541e9a21a97363adfd023a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e33e1251d670abdbd0bedca1b5e2c68ae10e24541e9a21a97363adfd023a29->enter($__internal_15e33e1251d670abdbd0bedca1b5e2c68ae10e24541e9a21a97363adfd023a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Réception ";
        
        $__internal_15e33e1251d670abdbd0bedca1b5e2c68ae10e24541e9a21a97363adfd023a29->leave($__internal_15e33e1251d670abdbd0bedca1b5e2c68ae10e24541e9a21a97363adfd023a29_prof);

        
        $__internal_899dcc36f98d6d5c39c135a88fd25381be7d829138700417ad23f74735089e05->leave($__internal_899dcc36f98d6d5c39c135a88fd25381be7d829138700417ad23f74735089e05_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad647a2a4a9aeddee47bd5d6bdf40699da467598f3915aa1426c33d589a7b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad647a2a4a9aeddee47bd5d6bdf40699da467598f3915aa1426c33d589a7b56->enter($__internal_dad647a2a4a9aeddee47bd5d6bdf40699da467598f3915aa1426c33d589a7b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54cc14a2d2579dc412e330f35411bdc223a7531a75601abf9690e7a72b75e1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cc14a2d2579dc412e330f35411bdc223a7531a75601abf9690e7a72b75e1ef->enter($__internal_54cc14a2d2579dc412e330f35411bdc223a7531a75601abf9690e7a72b75e1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "        <div class=\"callout callout-success\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 58
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 59
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Modifier Réception ";
        // line 63
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["rec_type"] ?? $this->getContext($context, "rec_type"))), "html", null, true);
        echo "</h3></div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 68
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'label', array("label" => "Numero Serie"));
        echo "
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumSerie", array()), 'widget', array("attr" => array("class" => "form-control", "ajax-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_autocomplete_vehicule"))));
        // line 84
        echo "
                            </div>
                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpImmatriculation", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            <div class=\"hidden\">
                                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 106
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations réception</h3>
                        </div>

                        <div class=\"box-body\">
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpNbrAssis", array()), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpNbrDebout", array()), 'row');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpMiseService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 120
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctMotif", array()), 'row');
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpProprietaire", array()), 'row');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpAdresse", array()), 'row');
        echo "
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "rcpProfession", array()), 'row');
        echo "
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), 'row');
        echo "
                        </div>
";
        // line 138
        echo "
                    </div>

                    ";
        // line 142
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
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? $this->getContext($context, "imprimes_use")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_use"]) {
            // line 154
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "id", array()), "html", null, true);
            echo "\" selected>
                                                ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "ituNumero", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? $this->getContext($context, "imprimes_tech")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 159
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? $this->getContext($context, "imprimes_tech_use")));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 161
                echo "                                                ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 162
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 163
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                }
                // line 166
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                    </select>
                                </div>
                            </div>

                            <div class=\"box-footer\">
                                <div class=\"box-footer\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                                    <a href=\"";
        // line 176
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_index");
        echo "\"
                                    class=\"btn btn-default pull-left btn-mini-rectif\" >
                                        Retour à la liste
                                    </a>
                                    <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_generer_pv", array("id" => $this->getAttribute(($context["reception"] ?? $this->getContext($context, "reception")), "id", array()))), "html", null, true);
        echo "\"
                                    class=\"btn btn-warning\" target=\"_blank\">
                                        Générer PV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>

        </div>
    </div>

";
        
        $__internal_54cc14a2d2579dc412e330f35411bdc223a7531a75601abf9690e7a72b75e1ef->leave($__internal_54cc14a2d2579dc412e330f35411bdc223a7531a75601abf9690e7a72b75e1ef_prof);

        
        $__internal_dad647a2a4a9aeddee47bd5d6bdf40699da467598f3915aa1426c33d589a7b56->leave($__internal_dad647a2a4a9aeddee47bd5d6bdf40699da467598f3915aa1426c33d589a7b56_prof);

    }

    // line 197
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a187b72060f5da03609f63754a0ec10902a81e37ba02b7e574174f4ece3c689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a187b72060f5da03609f63754a0ec10902a81e37ba02b7e574174f4ece3c689->enter($__internal_1a187b72060f5da03609f63754a0ec10902a81e37ba02b7e574174f4ece3c689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38a093daa7f0c3914f5c7ab46af9fa4c10cf6ad8ecdfddb48e9d75878b74989b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a093daa7f0c3914f5c7ab46af9fa4c10cf6ad8ecdfddb48e9d75878b74989b->enter($__internal_38a093daa7f0c3914f5c7ab46af9fa4c10cf6ad8ecdfddb48e9d75878b74989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_38a093daa7f0c3914f5c7ab46af9fa4c10cf6ad8ecdfddb48e9d75878b74989b->leave($__internal_38a093daa7f0c3914f5c7ab46af9fa4c10cf6ad8ecdfddb48e9d75878b74989b_prof);

        
        $__internal_1a187b72060f5da03609f63754a0ec10902a81e37ba02b7e574174f4ece3c689->leave($__internal_1a187b72060f5da03609f63754a0ec10902a81e37ba02b7e574174f4ece3c689_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 203,  504 => 201,  497 => 198,  488 => 197,  471 => 189,  459 => 180,  452 => 176,  443 => 169,  436 => 167,  430 => 166,  424 => 163,  419 => 162,  416 => 161,  412 => 160,  407 => 159,  402 => 158,  393 => 155,  388 => 154,  384 => 153,  371 => 142,  366 => 138,  361 => 125,  357 => 124,  353 => 123,  349 => 122,  345 => 121,  342 => 120,  340 => 117,  336 => 116,  332 => 115,  328 => 114,  324 => 113,  315 => 106,  306 => 99,  302 => 98,  298 => 97,  294 => 96,  289 => 94,  285 => 93,  281 => 92,  277 => 91,  273 => 90,  269 => 89,  265 => 88,  261 => 87,  257 => 86,  253 => 84,  251 => 78,  247 => 77,  242 => 75,  233 => 68,  229 => 66,  223 => 63,  220 => 62,  211 => 59,  208 => 58,  203 => 57,  194 => 54,  191 => 53,  186 => 52,  177 => 51,  158 => 46,  146 => 43,  139 => 40,  130 => 39,  119 => 35,  117 => 34,  115 => 33,  109 => 30,  107 => 29,  105 => 28,  103 => 27,  101 => 26,  96 => 23,  89 => 22,  87 => 21,  81 => 20,  77 => 18,  74 => 16,  72 => 15,  63 => 14,  53 => 1,  51 => 49,  49 => 48,  47 => 12,  45 => 11,  43 => 10,  41 => 9,  39 => 8,  37 => 6,  35 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:fields.html.twig' %}

{#{% form_theme edit_form.ctCentre _self %}#}
{% form_theme edit_form.ctVehicule.ctGenre _self %}
{#{% form_theme edit_form.ctTypeReception _self %}#}
{% form_theme edit_form.ctVehicule.ctMarque _self %}
{% form_theme edit_form.ctSourceEnergie _self %}
{% form_theme edit_form.ctCarosserie _self %}
{% form_theme edit_form.ctMotif _self %}
{% form_theme edit_form.ctUtilisation _self %}

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
{% set menu_reception_create = true %}

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
        <div class=\"panel-heading text-center\"><h3>Modifier Réception {{ rec_type|capitalize }}</h3></div>
        <div class=\"panel-body\">
            <div class=\"row\">
                {{ form_start(edit_form) }}
                {# Formulaire véhicule #}
                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            {{ form_row(edit_form.ctVehicule.vhcType) }}
                            <div class=\"form-group\">
                                {{ form_label(edit_form.ctVehicule.vhcNumSerie, 'Numero Serie') }}
                                {{ form_widget(edit_form.ctVehicule.vhcNumSerie, {
                                    'attr': {
                                        'class': 'form-control',
                                        'ajax-url': path('reception_autocomplete_vehicule')
                                    }
                                }
                                )}}
                            </div>
                            {{ form_row(edit_form.ctVehicule.vhcNumMoteur) }}
                            {{ form_row(edit_form.rcpImmatriculation) }}
                            {{ form_row(edit_form.ctVehicule.ctGenre) }}
                            {{ form_row(edit_form.ctVehicule.ctMarque) }}
                            {{ form_row(edit_form.ctVehicule.vhcCylindre) }}
                            {{ form_row(edit_form.ctVehicule.vhcPuissance) }}
                            {{ form_row(edit_form.ctVehicule.vhcChargeUtile) }}
                            {{ form_row(edit_form.ctVehicule.vhcPoidsVide) }}
                            {{ form_row(edit_form.ctVehicule.vhcPoidsTotalCharge) }}
                            <div class=\"hidden\">
                                {{ form_row(edit_form.ctVehicule.vhcHauteur) }}
                                {{ form_row(edit_form.ctVehicule.vhcLongueur) }}
                                {{ form_row(edit_form.ctVehicule.vhcLargeur) }}
                                {{ form_row(edit_form.ctVehicule.vhcProvenance) }}
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
                            {{ form_row(edit_form.ctSourceEnergie) }}
                            {{ form_row(edit_form.ctCarosserie) }}
                            {{ form_row(edit_form.rcpNbrAssis) }}
                            {{ form_row(edit_form.rcpNbrDebout) }}
                            {{ form_row(edit_form.rcpMiseService, {
                                'attr': {
                                    'class': ' datepicker-edit'
                                }}) }}
                            {{ form_row(edit_form.ctMotif) }}
                            {{ form_row(edit_form.rcpProprietaire) }}
                            {{ form_row(edit_form.rcpAdresse) }}
                            {{ form_row(edit_form.rcpProfession) }}
                            {{ form_row(edit_form.ctUtilisation) }}
                        </div>
{#                         <div class=\"box-footer\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                            <a href=\"{{ path('reception_index') }}\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                            <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                               class=\"btn btn-warning\" target=\"_blank\">
                                Générer PV
                            </a>
                        </div> #}

                    </div>

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

                            <div class=\"box-footer\">
                                <div class=\"box-footer\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_reception\"/>
                                    <a href=\"{{ path('reception_index') }}\"
                                    class=\"btn btn-default pull-left btn-mini-rectif\" >
                                        Retour à la liste
                                    </a>
                                    <a href=\"{{ path('reception_generer_pv', { 'id': reception.id }) }}\"
                                    class=\"btn btn-warning\" target=\"_blank\">
                                        Générer PV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ form_end(edit_form) }}
            </div>

        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
{% endblock %}", "@Admin/CtReception/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\edit.html.twig");
    }
}
