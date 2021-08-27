<?php

/* @Admin/CtContreVisite/add.html.twig */
class __TwigTemplate_ad1117f5c10ff125b0eb3eac3ab34aeb9d6e5e5dd7108d009f67c5586ca80e9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtContreVisite/add.html.twig", 1);
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
        $__internal_ea370fbf53eb2d71ef4adefe069e0aa198cf2f8a697a1395234ef7b5a8b2533d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea370fbf53eb2d71ef4adefe069e0aa198cf2f8a697a1395234ef7b5a8b2533d->enter($__internal_ea370fbf53eb2d71ef4adefe069e0aa198cf2f8a697a1395234ef7b5a8b2533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtContreVisite/add.html.twig"));

        $__internal_99590daab6276110f43fc6d894110fd258cc1eeb42b6a37b7e2b892ac3c33327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99590daab6276110f43fc6d894110fd258cc1eeb42b6a37b7e2b892ac3c33327->enter($__internal_99590daab6276110f43fc6d894110fd258cc1eeb42b6a37b7e2b892ac3c33327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtContreVisite/add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:fields.html.twig"));
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
        $context["menu_contre_visite"] = true;
        // line 51
        $context["menu_contre_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea370fbf53eb2d71ef4adefe069e0aa198cf2f8a697a1395234ef7b5a8b2533d->leave($__internal_ea370fbf53eb2d71ef4adefe069e0aa198cf2f8a697a1395234ef7b5a8b2533d_prof);

        
        $__internal_99590daab6276110f43fc6d894110fd258cc1eeb42b6a37b7e2b892ac3c33327->leave($__internal_99590daab6276110f43fc6d894110fd258cc1eeb42b6a37b7e2b892ac3c33327_prof);

    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dd8170520eebb5061f20da5c711ed80ce85f5486ba068455d0dd8854e7e3b640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8170520eebb5061f20da5c711ed80ce85f5486ba068455d0dd8854e7e3b640->enter($__internal_dd8170520eebb5061f20da5c711ed80ce85f5486ba068455d0dd8854e7e3b640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_445468b07f87f23ec829ad2edffb862519b4161cc9d09cb78ae37e4660bdaf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445468b07f87f23ec829ad2edffb862519b4161cc9d09cb78ae37e4660bdaf1a->enter($__internal_445468b07f87f23ec829ad2edffb862519b4161cc9d09cb78ae37e4660bdaf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_445468b07f87f23ec829ad2edffb862519b4161cc9d09cb78ae37e4660bdaf1a->leave($__internal_445468b07f87f23ec829ad2edffb862519b4161cc9d09cb78ae37e4660bdaf1a_prof);

        
        $__internal_dd8170520eebb5061f20da5c711ed80ce85f5486ba068455d0dd8854e7e3b640->leave($__internal_dd8170520eebb5061f20da5c711ed80ce85f5486ba068455d0dd8854e7e3b640_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5b54e0c90b8e4dba8b94484c5c64099e30d41afd1ba9718abb480522b43b9f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b54e0c90b8e4dba8b94484c5c64099e30d41afd1ba9718abb480522b43b9f2->enter($__internal_c5b54e0c90b8e4dba8b94484c5c64099e30d41afd1ba9718abb480522b43b9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb9ec0486fc63b2ffb525e528db475402402e1dfb0345e9b465045725e2c7096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9ec0486fc63b2ffb525e528db475402402e1dfb0345e9b465045725e2c7096->enter($__internal_cb9ec0486fc63b2ffb525e528db475402402e1dfb0345e9b465045725e2c7096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout Contre visite technique ";
        
        $__internal_cb9ec0486fc63b2ffb525e528db475402402e1dfb0345e9b465045725e2c7096->leave($__internal_cb9ec0486fc63b2ffb525e528db475402402e1dfb0345e9b465045725e2c7096_prof);

        
        $__internal_c5b54e0c90b8e4dba8b94484c5c64099e30d41afd1ba9718abb480522b43b9f2->leave($__internal_c5b54e0c90b8e4dba8b94484c5c64099e30d41afd1ba9718abb480522b43b9f2_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b7bd8107beab2d1085bc677931d681c8576a45a32d29af5aac195cd76aa1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b7bd8107beab2d1085bc677931d681c8576a45a32d29af5aac195cd76aa1d8->enter($__internal_59b7bd8107beab2d1085bc677931d681c8576a45a32d29af5aac195cd76aa1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5704daca4c5cfcd94d6487c1dfa60e19b1ea67007699c8f4b1e676ae7b59e369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5704daca4c5cfcd94d6487c1dfa60e19b1ea67007699c8f4b1e676ae7b59e369->enter($__internal_5704daca4c5cfcd94d6487c1dfa60e19b1ea67007699c8f4b1e676ae7b59e369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5704daca4c5cfcd94d6487c1dfa60e19b1ea67007699c8f4b1e676ae7b59e369->leave($__internal_5704daca4c5cfcd94d6487c1dfa60e19b1ea67007699c8f4b1e676ae7b59e369_prof);

        
        $__internal_59b7bd8107beab2d1085bc677931d681c8576a45a32d29af5aac195cd76aa1d8->leave($__internal_59b7bd8107beab2d1085bc677931d681c8576a45a32d29af5aac195cd76aa1d8_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c5c3ef935fafc89c5dfe5a981e69589ce03681f804354be2376af204dbd24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c5c3ef935fafc89c5dfe5a981e69589ce03681f804354be2376af204dbd24c->enter($__internal_b2c5c3ef935fafc89c5dfe5a981e69589ce03681f804354be2376af204dbd24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f27d8a2c2c7b287e3b853033581763691526e2b3221dd0e5f8b16448ecde33d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f27d8a2c2c7b287e3b853033581763691526e2b3221dd0e5f8b16448ecde33d->enter($__internal_9f27d8a2c2c7b287e3b853033581763691526e2b3221dd0e5f8b16448ecde33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <form action=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_search_by_immatriculation");
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                    <select required id=\"ct_numero_immatriculation\"
                                            name=\"ct_numero_immatriculation\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro immatriculation</option>
                                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_numero_immatriculation"] ?? $this->getContext($context, "list_numero_immatriculation")));
        foreach ($context['_seq'] as $context["_key"] => $context["numero_immatriculation"]) {
            // line 83
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_immatriculation"], "cgImmatriculation", array()), "html", null, true);
            echo "\">
                                                ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_immatriculation"], "cgImmatriculation", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numero_immatriculation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6\">
                            <form action=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_search_by_serie");
        echo "\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                    <select required id=\"ct_numero_serie\"
                                        name=\"ct_numero_serie\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro série</option>
                                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_numero_serie"] ?? $this->getContext($context, "list_numero_serie")));
        foreach ($context['_seq'] as $context["_key"] => $context["numero_serie"]) {
            // line 102
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_serie"], "vhcNumSerie", array()), "html", null, true);
            echo "\">
                                                ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["numero_serie"], "vhcNumSerie", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numero_serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"visite-form\">
        ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 124
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations carte grise</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-carte-grise\">
                            <div class=\"";
        // line 130
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateEmission", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                            ";
        // line 140
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                            ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                        </div>
                    </div>

                    ";
        // line 148
        echo "                    <div class=\"box box-success\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations véhicule</h3>
                        </div>

                        <div class=\"box-body\" id=\"form-vehicule\">
                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                            ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                            ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                            <div id=\"form-transport\" class=\"hidden\">
                                ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                                ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                                ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                            </div>
                        </div>

                        ";
        // line 178
        echo "                        <div class=\"hidden\">
                            <input type=\"text\" name=\"ct-carte-grise-id\" id=\"ct-carte-grise-id\" />
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                            ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                            ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                            ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                            ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 192
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                            ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                            ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                            ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                            <hr>
                            ";
        // line 199
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctTypeVisite", array()), 'row');
        echo "
                            ";
        // line 200
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUtilisation", array()), 'row');
        echo "
                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVisiteExtra", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 207
        echo "                <div class=\"col-md-6\">
                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Informations visite technique</h3>
                        </div>

                        <div class=\"box-body\">
                            <div class=\"";
        // line 214
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctCentre", array()), 'row');
        echo "
                            </div>
                            ";
        // line 217
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctVerificateur", array()), 'row');
        echo "
                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctUsage", array()), 'row');
        echo "
                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vstDateExpiration", array()), 'row');
        echo "
                            ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ctAnomalie", array()), 'row');
        echo "
                            <div id=\"form-duree-reparation\" class=\"hidden\">
                                ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vstDureeReparation", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>

                    ";
        // line 228
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
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? $this->getContext($context, "imprimes_tech")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 240
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? $this->getContext($context, "imprimes_tech_use")));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 242
                echo "                                                ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 243
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 244
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                }
                // line 247
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 259
        echo "            ";
        // line 260
        echo "                ";
        // line 261
        echo "                    ";
        // line 262
        echo "                        ";
        // line 263
        echo "                            ";
        // line 264
        echo "                                ";
        // line 265
        echo "                                    ";
        // line 266
        echo "                                    ";
        // line 267
        echo "                                           ";
        // line 268
        echo "                                ";
        // line 269
        echo "                                ";
        // line 270
        echo "                                    ";
        // line 271
        echo "                                ";
        // line 272
        echo "                        ";
        // line 273
        echo "                    ";
        // line 274
        echo "                ";
        // line 275
        echo "            ";
        // line 276
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_9f27d8a2c2c7b287e3b853033581763691526e2b3221dd0e5f8b16448ecde33d->leave($__internal_9f27d8a2c2c7b287e3b853033581763691526e2b3221dd0e5f8b16448ecde33d_prof);

        
        $__internal_b2c5c3ef935fafc89c5dfe5a981e69589ce03681f804354be2376af204dbd24c->leave($__internal_b2c5c3ef935fafc89c5dfe5a981e69589ce03681f804354be2376af204dbd24c_prof);

    }

    // line 280
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fa08fdfada0d068ca8c5c7128c29f496b2505de2e194c93216daaeb638ba0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa08fdfada0d068ca8c5c7128c29f496b2505de2e194c93216daaeb638ba0de->enter($__internal_9fa08fdfada0d068ca8c5c7128c29f496b2505de2e194c93216daaeb638ba0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fba4101a2c052f98ba08789dbc7783c7807c0b8fc4126f3367734bd8cd2e0f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba4101a2c052f98ba08789dbc7783c7807c0b8fc4126f3367734bd8cd2e0f3e->enter($__internal_fba4101a2c052f98ba08789dbc7783c7807c0b8fc4126f3367734bd8cd2e0f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 281
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _select_verif_by_centre_ajax_uri = \"";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.contre.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fba4101a2c052f98ba08789dbc7783c7807c0b8fc4126f3367734bd8cd2e0f3e->leave($__internal_fba4101a2c052f98ba08789dbc7783c7807c0b8fc4126f3367734bd8cd2e0f3e_prof);

        
        $__internal_9fa08fdfada0d068ca8c5c7128c29f496b2505de2e194c93216daaeb638ba0de->leave($__internal_9fa08fdfada0d068ca8c5c7128c29f496b2505de2e194c93216daaeb638ba0de_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtContreVisite/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  740 => 292,  735 => 290,  731 => 289,  727 => 288,  723 => 287,  718 => 285,  710 => 281,  701 => 280,  687 => 276,  685 => 275,  683 => 274,  681 => 273,  679 => 272,  677 => 271,  675 => 270,  673 => 269,  671 => 268,  669 => 267,  667 => 266,  665 => 265,  663 => 264,  661 => 263,  659 => 262,  657 => 261,  655 => 260,  653 => 259,  643 => 250,  636 => 248,  630 => 247,  624 => 244,  619 => 243,  616 => 242,  612 => 241,  607 => 240,  603 => 239,  590 => 228,  582 => 222,  577 => 220,  573 => 219,  569 => 218,  565 => 217,  560 => 215,  554 => 214,  545 => 207,  537 => 201,  533 => 200,  529 => 199,  524 => 197,  520 => 196,  515 => 194,  511 => 193,  507 => 192,  502 => 190,  498 => 189,  494 => 188,  489 => 186,  485 => 185,  481 => 184,  477 => 183,  473 => 182,  469 => 181,  465 => 180,  461 => 178,  454 => 173,  450 => 172,  446 => 171,  442 => 170,  437 => 168,  432 => 166,  428 => 165,  424 => 164,  420 => 163,  416 => 162,  412 => 161,  408 => 160,  404 => 159,  400 => 158,  396 => 157,  392 => 156,  388 => 155,  384 => 154,  376 => 148,  369 => 143,  365 => 142,  361 => 141,  356 => 140,  352 => 138,  347 => 136,  343 => 135,  338 => 133,  333 => 131,  327 => 130,  319 => 124,  313 => 120,  297 => 106,  288 => 103,  283 => 102,  279 => 101,  270 => 95,  260 => 87,  251 => 84,  246 => 83,  242 => 82,  233 => 76,  221 => 66,  218 => 64,  209 => 61,  206 => 60,  201 => 59,  192 => 56,  189 => 55,  184 => 54,  175 => 53,  163 => 47,  156 => 44,  147 => 43,  128 => 40,  117 => 36,  115 => 35,  113 => 34,  107 => 31,  105 => 30,  103 => 29,  101 => 28,  99 => 27,  94 => 24,  87 => 23,  85 => 22,  79 => 21,  75 => 19,  72 => 17,  70 => 16,  61 => 15,  51 => 1,  49 => 51,  47 => 50,  45 => 13,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 3,  11 => 1,);
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

{#{% form_theme form.ctCarteGrise.ctVehicule.ctMarque _self %}#}
{#{% form_theme form.ctCarteGrise.ctVehicule.ctGenre _self %}#}
{#{% form_theme form.ctCarteGrise.ctCentre _self %}#}
{#{% form_theme form.ctCarteGrise.ctCarosserie _self %}#}
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

{% block title %}{{ parent() }} Ajout Contre visite technique {% endblock %}


{% block stylesheets %}
    {{ parent() }}

    <!-- JQuery UI -->
    <link href=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}\" rel=\"Stylesheet\"></link>
{% endblock %}

{% set menu_contre_visite        = true %}
{% set menu_contre_visite_create = true %}

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
                            <form action=\"{{ path('contre_visite_search_by_immatriculation') }}\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_immatriculation\">Par numéro d'immatriculation</label>
                                    <select required id=\"ct_numero_immatriculation\"
                                            name=\"ct_numero_immatriculation\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro immatriculation</option>
                                        {% for numero_immatriculation in list_numero_immatriculation %}
                                            <option value=\"{{ numero_immatriculation.cgImmatriculation }}\">
                                                {{ numero_immatriculation.cgImmatriculation }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-6\">
                            <form action=\"{{ path('contre_visite_search_by_serie') }}\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label for=\"ct_numero_serie\">Par numéro dans la série du type</label>
                                    <select required id=\"ct_numero_serie\"
                                        name=\"ct_numero_serie\" class=\"form-control select2\">
                                        <option value=\"\" disabled selected>Séléctionner numéro série</option>
                                        {% for numero_serie in list_numero_serie %}
                                            <option value=\"{{ numero_serie.vhcNumSerie }}\">
                                                {{ numero_serie.vhcNumSerie }}
                                            </option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Rechercher\" name=\"search_visite\"/>
                                </div>
                            </form>
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
                            {{ form_row(form.ctCarteGrise.cgNumIdentification) }}
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgNom) }}
                            {#{{ form_row(form.ctCarteGrise.cgPrenom) }}#}
                            {{ form_row(form.ctCarteGrise.cgProfession) }}
                            {{ form_row(form.ctCarteGrise.cgAdresse) }}
                            {{ form_row(form.ctCarteGrise.cgPhone) }}
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
                            <hr>
                            {{ form_row(form.ctCarteGrise.cgIsTransport) }}
                            <div id=\"form-transport\" class=\"hidden\">
                                {{ form_row(form.ctCarteGrise.cgNomCooperative) }}
                                {{ form_row(form.ctCarteGrise.cgItineraire) }}
                                {{ form_row(form.ctCarteGrise.cgNumVignette) }}
                                {{ form_row(form.ctCarteGrise.ctZoneDeserte) }}
                            </div>
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
                            {{ form_row(form.ctCarteGrise.cgDateVignette) }}
                            {{ form_row(form.ctCarteGrise.cgLieuVignette) }}
                            <hr>
                            {{ form_row(form.ctTypeVisite) }}
                            {{ form_row(form.ctUtilisation) }}
                            {{ form_row(form.ctVisiteExtra) }}
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
                            {{ form_row(form.ctVerificateur) }}
                            {{ form_row(form.ctUsage) }}
                            {{ form_row(form.vstDateExpiration) }}
                            {{ form_row(form.ctAnomalie) }}
                            <div id=\"form-duree-reparation\" class=\"hidden\">
                                {{ form_row(form.vstDureeReparation) }}
                            </div>
                        </div>
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

            {# Formulaire enregistrement #}
            {#<div class=\"row\">#}
                {#<div class=\"col-md-12\">#}
                    {#<div class=\"box box-success\">#}
                        {#<div class=\"box-body\">#}
                            {#<div class=\"row\">#}
                                {#<div class=\"col-md-4\">#}
                                    {#<input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_visite\"/>#}
                                    {#<input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"#}
                                           {#value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>#}
                                {#</div>#}
                                {#<div class=\"col-md-4\">#}
                                    {#<span class=\"pull-left\" id=\"link-download\"></span>#}
                                {#</div>#}
                        {#</div>#}
                    {#</div>#}
                {#</div>#}
            {#</div>#}
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _select_expiration_by_usage_ajax_uri = \"{{ path('visite_select_expiration_by_usage_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/add.contre.visite.js') }}\"></script>
{% endblock %}", "@Admin/CtContreVisite/add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtContreVisite\\add.html.twig");
    }
}
