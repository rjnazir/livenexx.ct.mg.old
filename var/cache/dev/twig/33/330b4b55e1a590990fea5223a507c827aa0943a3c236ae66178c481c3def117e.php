<?php

/* @Admin/CtStatistiqueReception/add.html.twig */
class __TwigTemplate_d11c710b5d31f4ea1153bb30383cdf36b0c5c3f549779f1489e41c7e7f052ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtStatistiqueReception/add.html.twig", 1);
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
        $__internal_4ebef519bb22310910d7ea17655d8617044152255fe393dc91ae5f8bc607ac3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebef519bb22310910d7ea17655d8617044152255fe393dc91ae5f8bc607ac3c->enter($__internal_4ebef519bb22310910d7ea17655d8617044152255fe393dc91ae5f8bc607ac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtStatistiqueReception/add.html.twig"));

        $__internal_ff70715fd84bc0c01287c5ee5a10c79c96df37c9766fdebaad48c137755f7fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff70715fd84bc0c01287c5ee5a10c79c96df37c9766fdebaad48c137755f7fa2->enter($__internal_ff70715fd84bc0c01287c5ee5a10c79c96df37c9766fdebaad48c137755f7fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtStatistiqueReception/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), array(0 => $this));
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), array(0 => $this));
        // line 7
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCentre", array()), array(0 => $this));
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCarosserie", array()), array(0 => $this));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), array(0 => $this));
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalie", array()), array(0 => $this));
        // line 50
        $context["menu_visite"] = true;
        // line 51
        $context["menu_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebef519bb22310910d7ea17655d8617044152255fe393dc91ae5f8bc607ac3c->leave($__internal_4ebef519bb22310910d7ea17655d8617044152255fe393dc91ae5f8bc607ac3c_prof);

        
        $__internal_ff70715fd84bc0c01287c5ee5a10c79c96df37c9766fdebaad48c137755f7fa2->leave($__internal_ff70715fd84bc0c01287c5ee5a10c79c96df37c9766fdebaad48c137755f7fa2_prof);

    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5a7d2335e0911b26cc65a821206a5e29c7764f7e920a8e36da2cc926e37da917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7d2335e0911b26cc65a821206a5e29c7764f7e920a8e36da2cc926e37da917->enter($__internal_5a7d2335e0911b26cc65a821206a5e29c7764f7e920a8e36da2cc926e37da917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e8b8bd2f911c62a0baba3dbba701df716de02b58dc9b8d3b4ef4ff22bee483b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b8bd2f911c62a0baba3dbba701df716de02b58dc9b8d3b4ef4ff22bee483b2->enter($__internal_e8b8bd2f911c62a0baba3dbba701df716de02b58dc9b8d3b4ef4ff22bee483b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 16
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 17
            $context["required"] = false;
        }
        // line 19
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 21
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 22
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 23
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 24
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 27
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 28
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 29
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 30
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 31
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 34
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 35
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 36
        echo "</select>
    </span>";
        
        $__internal_e8b8bd2f911c62a0baba3dbba701df716de02b58dc9b8d3b4ef4ff22bee483b2->leave($__internal_e8b8bd2f911c62a0baba3dbba701df716de02b58dc9b8d3b4ef4ff22bee483b2_prof);

        
        $__internal_5a7d2335e0911b26cc65a821206a5e29c7764f7e920a8e36da2cc926e37da917->leave($__internal_5a7d2335e0911b26cc65a821206a5e29c7764f7e920a8e36da2cc926e37da917_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6d0501447cfea050df80491a280a7b0e8c8dc71fc2eaa4af36caa07b6a9e4ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d0501447cfea050df80491a280a7b0e8c8dc71fc2eaa4af36caa07b6a9e4ae->enter($__internal_c6d0501447cfea050df80491a280a7b0e8c8dc71fc2eaa4af36caa07b6a9e4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8ef1ba1044ae6652605245f9136bfc54df89c1f4fe55c2042c1211c72d4ee63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ef1ba1044ae6652605245f9136bfc54df89c1f4fe55c2042c1211c72d4ee63->enter($__internal_b8ef1ba1044ae6652605245f9136bfc54df89c1f4fe55c2042c1211c72d4ee63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Visite technique ";
        
        $__internal_b8ef1ba1044ae6652605245f9136bfc54df89c1f4fe55c2042c1211c72d4ee63->leave($__internal_b8ef1ba1044ae6652605245f9136bfc54df89c1f4fe55c2042c1211c72d4ee63_prof);

        
        $__internal_c6d0501447cfea050df80491a280a7b0e8c8dc71fc2eaa4af36caa07b6a9e4ae->leave($__internal_c6d0501447cfea050df80491a280a7b0e8c8dc71fc2eaa4af36caa07b6a9e4ae_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81f9c933ed15f8faa0bfc5ae82c77d0cf4042e0e917f1c0bd82398cb11845182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f9c933ed15f8faa0bfc5ae82c77d0cf4042e0e917f1c0bd82398cb11845182->enter($__internal_81f9c933ed15f8faa0bfc5ae82c77d0cf4042e0e917f1c0bd82398cb11845182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0937d213ac519a9b1304b26ff8920876282d06fd95d7387f80c98c997de0833a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0937d213ac519a9b1304b26ff8920876282d06fd95d7387f80c98c997de0833a->enter($__internal_0937d213ac519a9b1304b26ff8920876282d06fd95d7387f80c98c997de0833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 44
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <link href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"Stylesheet\"></link>
";
        
        $__internal_0937d213ac519a9b1304b26ff8920876282d06fd95d7387f80c98c997de0833a->leave($__internal_0937d213ac519a9b1304b26ff8920876282d06fd95d7387f80c98c997de0833a_prof);

        
        $__internal_81f9c933ed15f8faa0bfc5ae82c77d0cf4042e0e917f1c0bd82398cb11845182->leave($__internal_81f9c933ed15f8faa0bfc5ae82c77d0cf4042e0e917f1c0bd82398cb11845182_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dc2a6c5cb9a8f87ad914eafb0d430a37db96a03a2c694c79f5c057e991ceba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc2a6c5cb9a8f87ad914eafb0d430a37db96a03a2c694c79f5c057e991ceba1->enter($__internal_6dc2a6c5cb9a8f87ad914eafb0d430a37db96a03a2c694c79f5c057e991ceba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d6817a756988e5d21fcdc803a787a23543b6bb2194b08d9316ab9272923e2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6817a756988e5d21fcdc803a787a23543b6bb2194b08d9316ab9272923e2ae->enter($__internal_4d6817a756988e5d21fcdc803a787a23543b6bb2194b08d9316ab9272923e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "        <div class=\"callout callout-success\">
            ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 60
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    ";
        // line 66
        echo "    <div class=\"row\" id=\"search-form\">
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

    <div id=\"visite-form\">
        ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 99
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-carte-grise\">
                            <div class=\"";
        // line 105
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateEmission", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                            ";
        // line 114
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 121
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-vehicule\">
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row');
        echo "
                        </div>

                        ";
        // line 143
        echo "                        <div class=\"hidden\">
                            <input type=\"text\" name=\"ct-carte-grise-id\" id=\"ct-carte-grise-id\" />
                            ";
        // line 145
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 169
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations visite technique</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"";
        // line 176
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), 'row');
        echo "
                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUtilisation", array()), 'row');
        echo "
                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalie", array()), 'row');
        echo "
                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vstDateExpiration", array()), 'row');
        echo "
                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), 'row');
        echo "
                            ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 193
        echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite\"/>
                                    <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                                           value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                                </div>
                                <div class=\"col-md-4\">
                                    <span class=\"pull-left\" id=\"link-download\"></span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        // line 210
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_4d6817a756988e5d21fcdc803a787a23543b6bb2194b08d9316ab9272923e2ae->leave($__internal_4d6817a756988e5d21fcdc803a787a23543b6bb2194b08d9316ab9272923e2ae_prof);

        
        $__internal_6dc2a6c5cb9a8f87ad914eafb0d430a37db96a03a2c694c79f5c057e991ceba1->leave($__internal_6dc2a6c5cb9a8f87ad914eafb0d430a37db96a03a2c694c79f5c057e991ceba1_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98dd3d02b3040c2101a2dabffb89de22298baabce6d1ffab56740ff9a66b7a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dd3d02b3040c2101a2dabffb89de22298baabce6d1ffab56740ff9a66b7a25->enter($__internal_98dd3d02b3040c2101a2dabffb89de22298baabce6d1ffab56740ff9a66b7a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74286de7aa0073f4b14b5fb3d8c6ea7d43248ad7515039c93bd12bd12cdaa132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74286de7aa0073f4b14b5fb3d8c6ea7d43248ad7515039c93bd12bd12cdaa132->enter($__internal_74286de7aa0073f4b14b5fb3d8c6ea7d43248ad7515039c93bd12bd12cdaa132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 223
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _generate_reporting_ajax_uri = \"";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_74286de7aa0073f4b14b5fb3d8c6ea7d43248ad7515039c93bd12bd12cdaa132->leave($__internal_74286de7aa0073f4b14b5fb3d8c6ea7d43248ad7515039c93bd12bd12cdaa132_prof);

        
        $__internal_98dd3d02b3040c2101a2dabffb89de22298baabce6d1ffab56740ff9a66b7a25->leave($__internal_98dd3d02b3040c2101a2dabffb89de22298baabce6d1ffab56740ff9a66b7a25_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtStatistiqueReception/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 226,  572 => 224,  568 => 223,  564 => 222,  560 => 221,  555 => 219,  547 => 215,  538 => 214,  525 => 210,  506 => 193,  497 => 186,  493 => 185,  489 => 184,  485 => 183,  481 => 182,  477 => 181,  472 => 179,  467 => 177,  461 => 176,  452 => 169,  444 => 163,  440 => 162,  436 => 161,  431 => 159,  427 => 158,  423 => 157,  418 => 155,  414 => 154,  410 => 153,  405 => 151,  401 => 150,  397 => 149,  393 => 148,  389 => 147,  385 => 146,  381 => 145,  377 => 143,  371 => 139,  367 => 138,  363 => 137,  359 => 136,  355 => 135,  351 => 134,  347 => 133,  343 => 132,  339 => 131,  335 => 130,  331 => 129,  327 => 128,  323 => 127,  315 => 121,  308 => 116,  304 => 115,  299 => 114,  295 => 112,  290 => 110,  285 => 108,  280 => 106,  274 => 105,  266 => 99,  260 => 95,  229 => 66,  226 => 64,  217 => 61,  214 => 60,  209 => 59,  200 => 56,  197 => 55,  192 => 54,  183 => 53,  171 => 47,  164 => 44,  155 => 43,  136 => 40,  125 => 36,  123 => 35,  121 => 34,  115 => 31,  113 => 30,  111 => 29,  109 => 28,  107 => 27,  102 => 24,  95 => 23,  93 => 22,  87 => 21,  83 => 19,  80 => 17,  78 => 16,  69 => 15,  59 => 1,  57 => 51,  55 => 50,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 3,  11 => 1,);
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

{% form_theme form.ctCarteGrise.ctVehicule.ctMarque _self %}
{% form_theme form.ctCarteGrise.ctVehicule.ctGenre _self %}
{% form_theme form.ctCarteGrise.ctCentre _self %}
{% form_theme form.ctCarteGrise.ctCarosserie _self %}
{% form_theme form.ctUsage _self %}
{% form_theme form.ctVerificateur _self %}
{% form_theme form.ctCentre _self %}
{% form_theme form.ctVisiteExtra _self %}
{% form_theme form.ctAnomalie _self %}

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

{% block title %}{{ parent() }} Ajout Visite technique {% endblock %}


{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_visite        = true %}
{% set menu_visite_create = true %}

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

    <div id=\"visite-form\">
        {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-6\">
                    {# Formulaire carte grise #}
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-carte-grise\">
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                {{ form_row(form.ctCarteGrise.ctCentre) }}
                            </div>
                            {{ form_row(form.ctCarteGrise.cgDateEmission) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgImmatriculation) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgNom) }}
                            {#{{ form_row(form.ctCarteGrise.cgPrenom) }}#}
                            {{ form_row(form.ctCarteGrise.cgProfession) }}
                            {{ form_row(form.ctCarteGrise.cgAdresse) }}
                            {{ form_row(form.ctCarteGrise.cgCommune) }}
                        </div>
                    </div>

                    {# Formulaire véhicule #}
                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-vehicule\">
                            {{ form_row(form.ctCarteGrise.ctVehicule.ctGenre) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcType) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.ctMarque) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcNumSerie) }}
                            {{ form_row(form.ctCarteGrise.ctCarosserie) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcNumMoteur) }}
                            {{ form_row(form.ctCarteGrise.ctSourceEnergie) }}
                            {{ form_row(form.ctCarteGrise.cgPuissanceAdmin) }}
                            {{ form_row(form.ctCarteGrise.cgNbrAssis) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcPoidsTotalCharge) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcPoidsVide) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcChargeUtile) }}
                            {{ form_row(form.ctCarteGrise.cgMiseEnService) }}
                        </div>

                        {# Champs cachés #}
                        <div class=\"hidden\">
                            <input type=\"text\" name=\"ct-carte-grise-id\" id=\"ct-carte-grise-id\" />
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcPuissance) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcCylindre) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcHauteur) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcLongueur) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcLargeur) }}
                            {{ form_row(form.ctCarteGrise.ctVehicule.vhcProvenance) }}
                            {{ form_row(form.ctCarteGrise.cgNbrDebout) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgRta) }}
                            {{ form_row(form.ctCarteGrise.cgPatente) }}
                            {{ form_row(form.ctCarteGrise.cgAni) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgNumCarteViolette) }}
                            {{ form_row(form.ctCarteGrise.cgLieuCarteViolette) }}
                            {{ form_row(form.ctCarteGrise.cgDateCarteViolette) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgNumVignette) }}
                            {{ form_row(form.ctCarteGrise.cgDateVignette) }}
                            {{ form_row(form.ctCarteGrise.cgLieuVignette) }}
                        </div>
                    </div>
                </div>

                {# Formulaire visite #}
                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations visite technique</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                {{ form_row(form.ctCentre) }}
                            </div>
                            {{ form_row(form.ctTypeVisite) }}
                            <hr>
                            {{ form_row(form.ctUsage) }}
                            {{ form_row(form.ctUtilisation) }}
                            {{ form_row(form.ctAnomalie) }}
                            {{ form_row(form.vstDateExpiration) }}
                            {{ form_row(form.ctVerificateur) }}
                            {{ form_row(form.ctVisiteExtra) }}
                        </div>
                    </div>
                </div>
            </div>

            {# Formulaire enregistrement #}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"box box-success\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite\"/>
                                    <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                                           value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                                </div>
                                <div class=\"col-md-4\">
                                    <span class=\"pull-left\" id=\"link-download\"></span>
                                </div>
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
        var _fill_form_carte_grise_ajax_uri = \"{{ path('carte_grise_fill_info_by_immatriculation_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _generate_reporting_ajax_uri = \"{{ path('visite_generate_reporting_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/add.visite.js') }}\"></script>
{% endblock %}", "@Admin/CtStatistiqueReception/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtStatistiqueReception\\add.html.twig");
    }
}
