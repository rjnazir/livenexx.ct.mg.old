<?php

/* AdminBundle:CtCarteGrise:add.html.twig */
class __TwigTemplate_921ba009cb5e9ea59e0985e2e043dfe3c06a0bc782a430519c62a5a4f2f5f593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarteGrise:add.html.twig", 1);
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
        $__internal_b77cbac365e42ee935ccdc53013df156c19c673f58c8954171862bd3f0ff59b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77cbac365e42ee935ccdc53013df156c19c673f58c8954171862bd3f0ff59b7->enter($__internal_b77cbac365e42ee935ccdc53013df156c19c673f58c8954171862bd3f0ff59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:add.html.twig"));

        $__internal_5b9cd3079e38a2aaef500a8d540815ce71a04d3484bca5fab651888efe813c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9cd3079e38a2aaef500a8d540815ce71a04d3484bca5fab651888efe813c1d->enter($__internal_5b9cd3079e38a2aaef500a8d540815ce71a04d3484bca5fab651888efe813c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarosserie", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), array(0 => $this));
        // line 44
        $context["menu_carte_grise"] = true;
        // line 45
        $context["menu_carte_grise_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77cbac365e42ee935ccdc53013df156c19c673f58c8954171862bd3f0ff59b7->leave($__internal_b77cbac365e42ee935ccdc53013df156c19c673f58c8954171862bd3f0ff59b7_prof);

        
        $__internal_5b9cd3079e38a2aaef500a8d540815ce71a04d3484bca5fab651888efe813c1d->leave($__internal_5b9cd3079e38a2aaef500a8d540815ce71a04d3484bca5fab651888efe813c1d_prof);

    }

    // line 10
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_816e7a039c06c3205b025e457a8bc8457841592fbe2ded04c06a356368da0c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_816e7a039c06c3205b025e457a8bc8457841592fbe2ded04c06a356368da0c8f->enter($__internal_816e7a039c06c3205b025e457a8bc8457841592fbe2ded04c06a356368da0c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_0e09d1d751bde5a31faa5c2b30d00169766fbe7c11e6151db9f9ef9691dbd6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e09d1d751bde5a31faa5c2b30d00169766fbe7c11e6151db9f9ef9691dbd6d1->enter($__internal_0e09d1d751bde5a31faa5c2b30d00169766fbe7c11e6151db9f9ef9691dbd6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 11
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 12
            $context["required"] = false;
        }
        // line 14
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 16
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 17
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 18
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 19
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 22
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 23
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 24
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 25
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 26
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 29
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 30
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 31
        echo "</select>
    </span>";
        
        $__internal_0e09d1d751bde5a31faa5c2b30d00169766fbe7c11e6151db9f9ef9691dbd6d1->leave($__internal_0e09d1d751bde5a31faa5c2b30d00169766fbe7c11e6151db9f9ef9691dbd6d1_prof);

        
        $__internal_816e7a039c06c3205b025e457a8bc8457841592fbe2ded04c06a356368da0c8f->leave($__internal_816e7a039c06c3205b025e457a8bc8457841592fbe2ded04c06a356368da0c8f_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_be1a2180ebffe001e6a41b42ca0ac1271f8b82401c70a314b0794078d5106792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be1a2180ebffe001e6a41b42ca0ac1271f8b82401c70a314b0794078d5106792->enter($__internal_be1a2180ebffe001e6a41b42ca0ac1271f8b82401c70a314b0794078d5106792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4613cf88d073dcc439f7c87dbbb4cef3768784e492acf3a84ad0a60f664dae3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4613cf88d073dcc439f7c87dbbb4cef3768784e492acf3a84ad0a60f664dae3c->enter($__internal_4613cf88d073dcc439f7c87dbbb4cef3768784e492acf3a84ad0a60f664dae3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Carte grise ";
        
        $__internal_4613cf88d073dcc439f7c87dbbb4cef3768784e492acf3a84ad0a60f664dae3c->leave($__internal_4613cf88d073dcc439f7c87dbbb4cef3768784e492acf3a84ad0a60f664dae3c_prof);

        
        $__internal_be1a2180ebffe001e6a41b42ca0ac1271f8b82401c70a314b0794078d5106792->leave($__internal_be1a2180ebffe001e6a41b42ca0ac1271f8b82401c70a314b0794078d5106792_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9f0148d84b507d8a27fe3d516a2c4ba378d55420220afaecd88d5c83d493df3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9f0148d84b507d8a27fe3d516a2c4ba378d55420220afaecd88d5c83d493df3->enter($__internal_e9f0148d84b507d8a27fe3d516a2c4ba378d55420220afaecd88d5c83d493df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e123b22880ae13e3c0413d8fbfddaf204717b164e6057b5c5ff1018b9e1b1a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e123b22880ae13e3c0413d8fbfddaf204717b164e6057b5c5ff1018b9e1b1a02->enter($__internal_e123b22880ae13e3c0413d8fbfddaf204717b164e6057b5c5ff1018b9e1b1a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e123b22880ae13e3c0413d8fbfddaf204717b164e6057b5c5ff1018b9e1b1a02->leave($__internal_e123b22880ae13e3c0413d8fbfddaf204717b164e6057b5c5ff1018b9e1b1a02_prof);

        
        $__internal_e9f0148d84b507d8a27fe3d516a2c4ba378d55420220afaecd88d5c83d493df3->leave($__internal_e9f0148d84b507d8a27fe3d516a2c4ba378d55420220afaecd88d5c83d493df3_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cf1f1bda1780f0ddbc736e4f191f97f3872d02adfdaa6a7a843b59fece8b5c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf1f1bda1780f0ddbc736e4f191f97f3872d02adfdaa6a7a843b59fece8b5c5->enter($__internal_9cf1f1bda1780f0ddbc736e4f191f97f3872d02adfdaa6a7a843b59fece8b5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28ab836fb5dd57b370359b3d03ec47532754d003af9f08d2376a5f0645c7a7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ab836fb5dd57b370359b3d03ec47532754d003af9f08d2376a5f0645c7a7cb->enter($__internal_28ab836fb5dd57b370359b3d03ec47532754d003af9f08d2376a5f0645c7a7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "        <div class=\"callout callout-success\">
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    ";
        // line 60
        echo "    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_identification\">Par numéro d'identification</label>
                                <input id=\"ct_numero_identification\" name=\"ct_numero_identification\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"carte-grise-form\">
        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 97
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"";
        // line 104
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgDateEmission", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgImmatriculation", array()), 'row');
        echo "
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNumIdentification", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNom", array()), 'row');
        echo "
                            ";
        // line 114
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgProfession", array()), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgAdresse", array()), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgPhone", array()), 'row');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgCommune", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgIsTransport", array()), 'row');
        echo "
                            <div id=\"form-transport\" class=\"hidden\">
                                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNomCooperative", array()), 'row');
        echo "
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgItineraire", array()), 'row');
        echo "
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNumVignette", array()), 'row');
        echo "
                                ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctZoneDeserte", array()), 'row');
        echo "
                            </div>
                            <hr>
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNumCarteViolette", array()), 'row');
        echo "
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgLieuCarteViolette", array()), 'row');
        echo "
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgDateCarteViolette", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 132
        echo "
                            <hr>
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgPatente", array()), 'row');
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgAni", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 141
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgPuissanceAdmin", array()), 'row');
        echo "
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNbrAssis", array()), 'row');
        echo "
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 165
        echo "
                        </div>

                        ";
        // line 169
        echo "                        <div class=\"hidden\">
                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                            ";
        // line 175
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgNbrDebout", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgRta", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgDateVignette", array()), 'row');
        echo "
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cgLieuVignette", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 188
        echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carte_grise\"/>
                        </div>
                    </div>
                </div>
            </div>
        ";
        // line 197
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_28ab836fb5dd57b370359b3d03ec47532754d003af9f08d2376a5f0645c7a7cb->leave($__internal_28ab836fb5dd57b370359b3d03ec47532754d003af9f08d2376a5f0645c7a7cb_prof);

        
        $__internal_9cf1f1bda1780f0ddbc736e4f191f97f3872d02adfdaa6a7a843b59fece8b5c5->leave($__internal_9cf1f1bda1780f0ddbc736e4f191f97f3872d02adfdaa6a7a843b59fece8b5c5_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb1d0878fc2b0bc96a6da8a36f4875307be666fe0aaa54163c539070fa7cc4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1d0878fc2b0bc96a6da8a36f4875307be666fe0aaa54163c539070fa7cc4a1->enter($__internal_fb1d0878fc2b0bc96a6da8a36f4875307be666fe0aaa54163c539070fa7cc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7a1d7e72b85562391e3a5612317aeac73286499e2fc1bc2845fd4db655341afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1d7e72b85562391e3a5612317aeac73286499e2fc1bc2845fd4db655341afd->enter($__internal_7a1d7e72b85562391e3a5612317aeac73286499e2fc1bc2845fd4db655341afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 202
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _check_numero_ajax_uri = \"";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_check_carte_grise_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vehicule_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_identification_ajax_uri = \"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vehicule_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _fill_form_ajax_uri = \"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_form_ajax");
        echo "\";
        var _fill_form_by_numero_identification_ajax_uri = \"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_form_by_numero_identification_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.carte.grise.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7a1d7e72b85562391e3a5612317aeac73286499e2fc1bc2845fd4db655341afd->leave($__internal_7a1d7e72b85562391e3a5612317aeac73286499e2fc1bc2845fd4db655341afd_prof);

        
        $__internal_fb1d0878fc2b0bc96a6da8a36f4875307be666fe0aaa54163c539070fa7cc4a1->leave($__internal_fb1d0878fc2b0bc96a6da8a36f4875307be666fe0aaa54163c539070fa7cc4a1_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarteGrise:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 215,  546 => 213,  542 => 212,  538 => 211,  534 => 210,  530 => 209,  526 => 208,  521 => 206,  513 => 202,  504 => 201,  491 => 197,  480 => 188,  471 => 181,  467 => 180,  462 => 178,  457 => 176,  453 => 175,  449 => 174,  445 => 173,  441 => 172,  437 => 171,  433 => 170,  430 => 169,  425 => 165,  423 => 161,  418 => 159,  414 => 158,  410 => 157,  406 => 156,  402 => 155,  398 => 154,  394 => 153,  390 => 152,  386 => 151,  382 => 150,  378 => 149,  374 => 148,  365 => 141,  357 => 135,  353 => 134,  349 => 132,  347 => 129,  343 => 128,  339 => 127,  333 => 124,  329 => 123,  325 => 122,  321 => 121,  316 => 119,  311 => 117,  307 => 116,  303 => 115,  298 => 114,  294 => 112,  289 => 110,  285 => 109,  280 => 107,  275 => 105,  269 => 104,  260 => 97,  255 => 94,  219 => 60,  216 => 58,  207 => 55,  204 => 54,  199 => 53,  190 => 50,  187 => 49,  182 => 48,  173 => 47,  161 => 41,  154 => 38,  145 => 37,  126 => 35,  115 => 31,  113 => 30,  111 => 29,  105 => 26,  103 => 25,  101 => 24,  99 => 23,  97 => 22,  92 => 19,  85 => 18,  83 => 17,  77 => 16,  73 => 14,  70 => 12,  68 => 11,  59 => 10,  49 => 1,  47 => 45,  45 => 44,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 3,  11 => 1,);
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

{% form_theme form ':form:fields.html.twig' %}

{% form_theme form.ctVehicule.ctMarque _self %}
{% form_theme form.ctVehicule.ctGenre _self %}
{% form_theme form.ctCarosserie _self %}
{% form_theme form.ctCentre _self %}

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

{% block title %}{{ parent() }} Ajout Carte grise {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_carte_grise        = true %}
{% set menu_carte_grise_create = true %}

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

    {# Formulaire recherche #}
    <div class=\"row\" id=\"search-form\">
        <div class=\"col-md-12\">
            <div class=\"box box-default\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Recherche</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                <input id=\"ct_numero_immatriculation\" name=\"ct_numero_immatriculation\"
                                       class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                <input id=\"ct_numero_serie\" name=\"ct_numero_serie\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"form-group\">
                                <label for=\"ct_numero_identification\">Par numéro d'identification</label>
                                <input id=\"ct_numero_identification\" name=\"ct_numero_identification\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"carte-grise-form\">
        {{ form_start(form) }}
            <div class=\"row\">
                {# Formulaire propriétaire #}
                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                {{ form_row(form.ctCentre) }}
                            </div>
                            {{ form_row(form.cgDateEmission) }}
                            <hr>
                            {{ form_row(form.cgImmatriculation) }}
                            {{ form_row(form.cgNumIdentification) }}
                            <hr>
                            {{ form_row(form.cgNom) }}
                            {#{{ form_row(form.cgPrenom) }}#}
                            {{ form_row(form.cgProfession) }}
                            {{ form_row(form.cgAdresse) }}
                            {{ form_row(form.cgPhone) }}
                            {{ form_row(form.cgCommune) }}
                            <hr>
                            {{ form_row(form.cgIsTransport) }}
                            <div id=\"form-transport\" class=\"hidden\">
                                {{ form_row(form.cgNomCooperative) }}
                                {{ form_row(form.cgItineraire) }}
                                {{ form_row(form.cgNumVignette) }}
                                {{ form_row(form.ctZoneDeserte) }}
                            </div>
                            <hr>
                            {{ form_row(form.cgNumCarteViolette) }}
                            {{ form_row(form.cgLieuCarteViolette) }}
                            {{ form_row(form.cgDateCarteViolette, {
                                'attr': {
                                    'class': ' datepicker-edit'
                                }}) }}
                            <hr>
                            {{ form_row(form.cgPatente) }}
                            {{ form_row(form.cgAni) }}
                        </div>
                    </div>
                </div>

                {# Formulaire véhicule #}
                <div class=\"col-md-6\">
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\">
                            {{ form_row(form.ctVehicule.ctGenre) }}
                            {{ form_row(form.ctVehicule.vhcType) }}
                            {{ form_row(form.ctVehicule.ctMarque) }}
                            {{ form_row(form.ctVehicule.vhcNumSerie) }}
                            {{ form_row(form.ctCarosserie) }}
                            {{ form_row(form.ctVehicule.vhcNumMoteur) }}
                            {{ form_row(form.ctSourceEnergie) }}
                            {{ form_row(form.cgPuissanceAdmin) }}
                            {{ form_row(form.cgNbrAssis) }}
                            {{ form_row(form.ctVehicule.vhcPoidsVide) }}
                            {{ form_row(form.ctVehicule.vhcChargeUtile) }}
                            {{ form_row(form.ctVehicule.vhcPoidsTotalCharge) }}
                            <hr>
                            {{ form_row(form.cgMiseEnService, {
                                'attr': {
                                    'class': ' datepicker-edit'
                                }})
                            }}
                        </div>

                        {# Champs cachés #}
                        <div class=\"hidden\">
                            {{ form_row(form.ctVehicule.vhcPuissance) }}
                            {{ form_row(form.ctVehicule.vhcCylindre) }}
                            {{ form_row(form.ctVehicule.vhcHauteur) }}
                            {{ form_row(form.ctVehicule.vhcLongueur) }}
                            {{ form_row(form.ctVehicule.vhcLargeur) }}
                            {{ form_row(form.ctVehicule.vhcProvenance) }}
                            {{ form_row(form.cgNbrDebout) }}
                            <hr>
                            {{ form_row(form.cgRta) }}
                            <hr>
                            {{ form_row(form.cgDateVignette) }}
                            {{ form_row(form.cgLieuVignette) }}
                        </div>
                    </div>
                </div>
            </div>

            {# Formulaire enregistrement #}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_carte_grise\"/>
                        </div>
                    </div>
                </div>
            </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _check_numero_ajax_uri = \"{{ path('carte_grise_check_carte_grise_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('vehicule_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_identification_ajax_uri = \"{{ path('vehicule_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _fill_form_ajax_uri = \"{{ path('carte_grise_fill_form_ajax') }}\";
        var _fill_form_by_numero_identification_ajax_uri = \"{{ path('carte_grise_fill_form_by_numero_identification_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/add.carte.grise.js') }}\"></script>
{% endblock %}", "AdminBundle:CtCarteGrise:add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarteGrise/add.html.twig");
    }
}
