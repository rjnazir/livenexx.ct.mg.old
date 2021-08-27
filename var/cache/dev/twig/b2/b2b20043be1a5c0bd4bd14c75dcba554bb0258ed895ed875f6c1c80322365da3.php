<?php

/* @Admin/CtReception/duplicata.html.twig */
class __TwigTemplate_be5dadc12e68e6e9b2922ddca349eefb6546c8cee6a13dca5d69dd0816525d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtReception/duplicata.html.twig", 1);
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
        $__internal_4c87326047c9e0751b6351eb0d46efb12f9ec9b3677061b5e8e7750bc86babe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c87326047c9e0751b6351eb0d46efb12f9ec9b3677061b5e8e7750bc86babe6->enter($__internal_4c87326047c9e0751b6351eb0d46efb12f9ec9b3677061b5e8e7750bc86babe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/duplicata.html.twig"));

        $__internal_73f1fb1b9a350aabbda1826557f6f4cc3b35fa510a563d8004a0ecb35b30e90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f1fb1b9a350aabbda1826557f6f4cc3b35fa510a563d8004a0ecb35b30e90c->enter($__internal_73f1fb1b9a350aabbda1826557f6f4cc3b35fa510a563d8004a0ecb35b30e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtReception/duplicata.html.twig"));

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
        
        $__internal_4c87326047c9e0751b6351eb0d46efb12f9ec9b3677061b5e8e7750bc86babe6->leave($__internal_4c87326047c9e0751b6351eb0d46efb12f9ec9b3677061b5e8e7750bc86babe6_prof);

        
        $__internal_73f1fb1b9a350aabbda1826557f6f4cc3b35fa510a563d8004a0ecb35b30e90c->leave($__internal_73f1fb1b9a350aabbda1826557f6f4cc3b35fa510a563d8004a0ecb35b30e90c_prof);

    }

    // line 12
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d083e569550a0fc0a561c2887fcaa10c39205dc4cd806802c172190bf64c9fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d083e569550a0fc0a561c2887fcaa10c39205dc4cd806802c172190bf64c9fae->enter($__internal_d083e569550a0fc0a561c2887fcaa10c39205dc4cd806802c172190bf64c9fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c59f6146b8486a9bcfc64f3e18ff9f90bd631546807c60a761af5315b87404a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59f6146b8486a9bcfc64f3e18ff9f90bd631546807c60a761af5315b87404a7->enter($__internal_c59f6146b8486a9bcfc64f3e18ff9f90bd631546807c60a761af5315b87404a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_c59f6146b8486a9bcfc64f3e18ff9f90bd631546807c60a761af5315b87404a7->leave($__internal_c59f6146b8486a9bcfc64f3e18ff9f90bd631546807c60a761af5315b87404a7_prof);

        
        $__internal_d083e569550a0fc0a561c2887fcaa10c39205dc4cd806802c172190bf64c9fae->leave($__internal_d083e569550a0fc0a561c2887fcaa10c39205dc4cd806802c172190bf64c9fae_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bd5a7c9d64797ccf244c43be00393d058d4e38ada9c7ec23d3e04e3b719908d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd5a7c9d64797ccf244c43be00393d058d4e38ada9c7ec23d3e04e3b719908d->enter($__internal_3bd5a7c9d64797ccf244c43be00393d058d4e38ada9c7ec23d3e04e3b719908d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7fd52897aafa11e1107e155614284e5ca38bec5e35443d32eb85d23972f1cd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd52897aafa11e1107e155614284e5ca38bec5e35443d32eb85d23972f1cd2b->enter($__internal_7fd52897aafa11e1107e155614284e5ca38bec5e35443d32eb85d23972f1cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7fd52897aafa11e1107e155614284e5ca38bec5e35443d32eb85d23972f1cd2b->leave($__internal_7fd52897aafa11e1107e155614284e5ca38bec5e35443d32eb85d23972f1cd2b_prof);

        
        $__internal_3bd5a7c9d64797ccf244c43be00393d058d4e38ada9c7ec23d3e04e3b719908d->leave($__internal_3bd5a7c9d64797ccf244c43be00393d058d4e38ada9c7ec23d3e04e3b719908d_prof);

    }

    // line 44
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6742d58a0e33ec9e651593bb733ab4ecfb60d91661b4729c1c62ae9df904311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6742d58a0e33ec9e651593bb733ab4ecfb60d91661b4729c1c62ae9df904311->enter($__internal_a6742d58a0e33ec9e651593bb733ab4ecfb60d91661b4729c1c62ae9df904311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22acec2171fd8d85e8fefb95bb5921b30e1f03cb62696348cee239b2c2b242ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22acec2171fd8d85e8fefb95bb5921b30e1f03cb62696348cee239b2c2b242ee->enter($__internal_22acec2171fd8d85e8fefb95bb5921b30e1f03cb62696348cee239b2c2b242ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Réception ";
        
        $__internal_22acec2171fd8d85e8fefb95bb5921b30e1f03cb62696348cee239b2c2b242ee->leave($__internal_22acec2171fd8d85e8fefb95bb5921b30e1f03cb62696348cee239b2c2b242ee_prof);

        
        $__internal_a6742d58a0e33ec9e651593bb733ab4ecfb60d91661b4729c1c62ae9df904311->leave($__internal_a6742d58a0e33ec9e651593bb733ab4ecfb60d91661b4729c1c62ae9df904311_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ca01d6b832a0f614c1490de297263246a73803e25226d81723c35792e09246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ca01d6b832a0f614c1490de297263246a73803e25226d81723c35792e09246->enter($__internal_b1ca01d6b832a0f614c1490de297263246a73803e25226d81723c35792e09246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d23bc28388f0ea7d13ddfc4f23b60f0b006df47c65bfc323d07e1ee1a3ef7c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23bc28388f0ea7d13ddfc4f23b60f0b006df47c65bfc323d07e1ee1a3ef7c8e->enter($__internal_d23bc28388f0ea7d13ddfc4f23b60f0b006df47c65bfc323d07e1ee1a3ef7c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d23bc28388f0ea7d13ddfc4f23b60f0b006df47c65bfc323d07e1ee1a3ef7c8e->leave($__internal_d23bc28388f0ea7d13ddfc4f23b60f0b006df47c65bfc323d07e1ee1a3ef7c8e_prof);

        
        $__internal_b1ca01d6b832a0f614c1490de297263246a73803e25226d81723c35792e09246->leave($__internal_b1ca01d6b832a0f614c1490de297263246a73803e25226d81723c35792e09246_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd1649e64574a002f24ac0c22e5da7b49a4ca95a60115c5c3ba6c03b0d00b8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1649e64574a002f24ac0c22e5da7b49a4ca95a60115c5c3ba6c03b0d00b8e5->enter($__internal_dd1649e64574a002f24ac0c22e5da7b49a4ca95a60115c5c3ba6c03b0d00b8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_017943345b03f2f033ddad89375df8d424704eb1600c498e16e563b08a27c7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_017943345b03f2f033ddad89375df8d424704eb1600c498e16e563b08a27c7d2->enter($__internal_017943345b03f2f033ddad89375df8d424704eb1600c498e16e563b08a27c7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_017943345b03f2f033ddad89375df8d424704eb1600c498e16e563b08a27c7d2->leave($__internal_017943345b03f2f033ddad89375df8d424704eb1600c498e16e563b08a27c7d2_prof);

        
        $__internal_dd1649e64574a002f24ac0c22e5da7b49a4ca95a60115c5c3ba6c03b0d00b8e5->leave($__internal_dd1649e64574a002f24ac0c22e5da7b49a4ca95a60115c5c3ba6c03b0d00b8e5_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtReception/duplicata.html.twig";
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
{% endblock %}", "@Admin/CtReception/duplicata.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtReception\\duplicata.html.twig");
    }
}
