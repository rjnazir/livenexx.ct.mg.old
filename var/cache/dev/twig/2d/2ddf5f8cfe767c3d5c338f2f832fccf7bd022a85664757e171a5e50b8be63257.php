<?php

/* AdminBundle:CtVisite:edit.html.twig */
class __TwigTemplate_a7352e50c6cc9baa2f361f6dfd175d7d9c652c7e2b08f9fea20e67f6e2d687d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisite:edit.html.twig", 1);
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
        $__internal_ec82549b0e5e8f0e643ddbf00ca869c814b7139de802188275a0606c90d3c6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec82549b0e5e8f0e643ddbf00ca869c814b7139de802188275a0606c90d3c6ee->enter($__internal_ec82549b0e5e8f0e643ddbf00ca869c814b7139de802188275a0606c90d3c6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:edit.html.twig"));

        $__internal_11ffedd68ac6b4c9971a47dfadb97fbb1f16deb17a581d82ef6733beb9306025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ffedd68ac6b4c9971a47dfadb97fbb1f16deb17a581d82ef6733beb9306025->enter($__internal_11ffedd68ac6b4c9971a47dfadb97fbb1f16deb17a581d82ef6733beb9306025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:fields.html.twig"));
        // line 9
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), array(0 => $this));
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), array(0 => $this));
        // line 11
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 12
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), array(0 => $this));
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalie", array()), array(0 => $this));
        // line 42
        $context["menu_visite"] = true;
        // line 43
        $context["menu_visite_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec82549b0e5e8f0e643ddbf00ca869c814b7139de802188275a0606c90d3c6ee->leave($__internal_ec82549b0e5e8f0e643ddbf00ca869c814b7139de802188275a0606c90d3c6ee_prof);

        
        $__internal_11ffedd68ac6b4c9971a47dfadb97fbb1f16deb17a581d82ef6733beb9306025->leave($__internal_11ffedd68ac6b4c9971a47dfadb97fbb1f16deb17a581d82ef6733beb9306025_prof);

    }

    // line 15
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_00d9ec163770194966aaac032a18b95d4f89b22ee226302b68c1841a760109e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d9ec163770194966aaac032a18b95d4f89b22ee226302b68c1841a760109e2->enter($__internal_00d9ec163770194966aaac032a18b95d4f89b22ee226302b68c1841a760109e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9a6d5f3e020cbd0bfd777c2cb720685dc0e96064d3cdceee5fabb8d4ecda96b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6d5f3e020cbd0bfd777c2cb720685dc0e96064d3cdceee5fabb8d4ecda96b5->enter($__internal_9a6d5f3e020cbd0bfd777c2cb720685dc0e96064d3cdceee5fabb8d4ecda96b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_9a6d5f3e020cbd0bfd777c2cb720685dc0e96064d3cdceee5fabb8d4ecda96b5->leave($__internal_9a6d5f3e020cbd0bfd777c2cb720685dc0e96064d3cdceee5fabb8d4ecda96b5_prof);

        
        $__internal_00d9ec163770194966aaac032a18b95d4f89b22ee226302b68c1841a760109e2->leave($__internal_00d9ec163770194966aaac032a18b95d4f89b22ee226302b68c1841a760109e2_prof);

    }

    // line 40
    public function block_title($context, array $blocks = array())
    {
        $__internal_34a7d43f9998e1012ea89c5ad8d0aea72ea26d1291d5dba6ddcdfb772b04e35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a7d43f9998e1012ea89c5ad8d0aea72ea26d1291d5dba6ddcdfb772b04e35b->enter($__internal_34a7d43f9998e1012ea89c5ad8d0aea72ea26d1291d5dba6ddcdfb772b04e35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_382fa98170c5ea5c81f6317990d9c437e0cc13fd2397330e52533f9790e2dae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382fa98170c5ea5c81f6317990d9c437e0cc13fd2397330e52533f9790e2dae2->enter($__internal_382fa98170c5ea5c81f6317990d9c437e0cc13fd2397330e52533f9790e2dae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Visite technique ";
        
        $__internal_382fa98170c5ea5c81f6317990d9c437e0cc13fd2397330e52533f9790e2dae2->leave($__internal_382fa98170c5ea5c81f6317990d9c437e0cc13fd2397330e52533f9790e2dae2_prof);

        
        $__internal_34a7d43f9998e1012ea89c5ad8d0aea72ea26d1291d5dba6ddcdfb772b04e35b->leave($__internal_34a7d43f9998e1012ea89c5ad8d0aea72ea26d1291d5dba6ddcdfb772b04e35b_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb88805fe647e3ecfa746c2ba0bab0ee3f7ab06cb7fbae794223cffdefe4f15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb88805fe647e3ecfa746c2ba0bab0ee3f7ab06cb7fbae794223cffdefe4f15c->enter($__internal_fb88805fe647e3ecfa746c2ba0bab0ee3f7ab06cb7fbae794223cffdefe4f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19f2ce812ef660da9607cb1e948326e291d39e602810cd0e81b11e2d6cdc363b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f2ce812ef660da9607cb1e948326e291d39e602810cd0e81b11e2d6cdc363b->enter($__internal_19f2ce812ef660da9607cb1e948326e291d39e602810cd0e81b11e2d6cdc363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "        <div class=\"callout callout-success\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "        <div class=\"callout callout-danger\">
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
        echo "
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 61
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"";
        // line 67
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateEmission", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 73
        echo "
                        <hr>
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgImmatriculation", array()), 'row');
        echo "
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumIdentification", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNom", array()), 'row');
        echo "
                        ";
        // line 80
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgProfession", array()), 'row');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAdresse", array()), 'row');
        echo "
                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPhone", array()), 'row');
        echo "
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgCommune", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgIsTransport", array()), 'row');
        echo "
                        <div id=\"form-transport\" class=\"";
        // line 86
        if (($this->getAttribute($this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctCarteGrise", array()), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNomCooperative", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgItineraire", array()), 'row');
        echo "
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumVignette", array()), 'row');
        echo "
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctZoneDeserte", array()), 'row');
        echo "
                        </div>
                    </div>
                </div>
    
                ";
        // line 96
        echo "                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctCarosserie", array()), 'row');
        echo "
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctSourceEnergie", array()), 'row');
        echo "
                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPuissanceAdmin", array()), 'row');
        echo "
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrAssis", array()), 'row');
        echo "
                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-edit")));
        // line 118
        echo "
                    </div>

                    ";
        // line 122
        echo "                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\"
                               value=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "id", array()), "html", null, true);
        echo "\" />
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                        ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNbrDebout", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgRta", array()), 'row');
        echo "
                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgPatente", array()), 'row');
        echo "
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgAni", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgNumCarteViolette", array()), 'row');
        echo "
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuCarteViolette", array()), 'row');
        echo "
                        ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateCarteViolette", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgDateVignette", array()), 'row');
        echo "
                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCarteGrise", array()), "cgLieuVignette", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
    
            ";
        // line 148
        echo "            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations visite technique</h3>
                    </div>
    
                    <div class=\"box-body\">
                        <div class=\"";
        // line 155
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctTypeVisite", array()), 'row');
        echo "
                        <hr>
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUsage", array()), 'row');
        echo "
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctUtilisation", array()), 'row');
        echo "
                        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctAnomalie", array()), 'row');
        echo "
                        <div id=\"form-duree-reparation\" class=\"";
        // line 163
        if ((twig_length_filter($this->env, $this->getAttribute(($context["visite"] ?? $this->getContext($context, "visite")), "ctAnomalie", array())) == 0)) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDureeReparation", array()), 'row');
        echo "
                        </div>
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vstDateExpiration", array()), 'row');
        echo "
                        ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), 'row');
        echo "
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVisiteExtra", array()), 'row');
        echo "
                    </div>
                </div>
            
                ";
        // line 173
        echo "                <div class=\"box box-warning\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations imprimés techniques utilisés</h3>
                    </div>

                    <div class=\"row\">
                        <div class=\"box-body\">
                            <div class=\"form-group\" style=\"margin: 0 8px 0 8px; padding:  0 8px 0 8px;\">
                                <label for=\"ct_imprime_tech_use\">Séléctionner les N° imprimés utilisés</label>
                                <select id=\"ct_imprime_tech_use\" name=\"ct_imprime_tech_use[]\" class=\"form-control select2 mx-6\"
                                    style=\"width: 100%;\" data-placeholder=\" Choisir\" multiple=\"\" required >
                                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? $this->getContext($context, "imprimes_use")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_use"]) {
            // line 185
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "id", array()), "html", null, true);
            echo "\" selected>
                                            ";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "ituNumero", array()), "html", null, true);
            echo "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? $this->getContext($context, "imprimes_tech")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 190
            echo "                                    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                        ";
            // line 191
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? $this->getContext($context, "imprimes_tech_use")));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 192
                echo "                                            ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 193
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 194
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                            </option>
                                            ";
                }
                // line 197
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                                    </optgroup>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        ";
        // line 209
        echo "        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                               value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                        <span class=\"kl-edit-link-download-cv\" id=\"link-download\"></span>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        ";
        // line 229
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
        // line 233
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_19f2ce812ef660da9607cb1e948326e291d39e602810cd0e81b11e2d6cdc363b->leave($__internal_19f2ce812ef660da9607cb1e948326e291d39e602810cd0e81b11e2d6cdc363b_prof);

        
        $__internal_fb88805fe647e3ecfa746c2ba0bab0ee3f7ab06cb7fbae794223cffdefe4f15c->leave($__internal_fb88805fe647e3ecfa746c2ba0bab0ee3f7ab06cb7fbae794223cffdefe4f15c_prof);

    }

    // line 236
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b203804fda16de41ac8cc2c7cd4aa8f2812fbcb6df7fa31d369d0da95f28a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b203804fda16de41ac8cc2c7cd4aa8f2812fbcb6df7fa31d369d0da95f28a4f->enter($__internal_5b203804fda16de41ac8cc2c7cd4aa8f2812fbcb6df7fa31d369d0da95f28a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_65238adaccf21cbae67a7832e4a69ca47d319c66a8e08059c51c50fdd22ac1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65238adaccf21cbae67a7832e4a69ca47d319c66a8e08059c51c50fdd22ac1db->enter($__internal_65238adaccf21cbae67a7832e4a69ca47d319c66a8e08059c51c50fdd22ac1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 237
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>
    <script>
        \$(\".ct_imprime_tech_use\").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        var _fill_form_carte_grise_ajax_uri = \"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_fill_info_by_immatriculation_ajax");
        echo "\";
        var _autocomplete_numero_serie_ajax_uri = \"";
        // line 249
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_serie_ajax");
        echo "\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_show_numero_immatriculation_ajax");
        echo "\";
        var _generate_reporting_ajax_uri = \"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_reporting_ajax");
        echo "\";
        var _generate_pv_visite_ajax_uri = \"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_generate_pv_visite_ajax");
        echo "\"
        var _select_verif_by_centre_ajax_uri = \"";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_verificateur_by_centre_ajax");
        echo "\";
        var _select_usage_by_type_visite_ajax_uri = \"";
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_usage_by_type_visite_ajax");
        echo "\";
        var _select_expiration_by_usage_ajax_uri = \"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_select_expiration_by_usage_ajax");
        echo "\";
    </script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/add.visite.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_65238adaccf21cbae67a7832e4a69ca47d319c66a8e08059c51c50fdd22ac1db->leave($__internal_65238adaccf21cbae67a7832e4a69ca47d319c66a8e08059c51c50fdd22ac1db_prof);

        
        $__internal_5b203804fda16de41ac8cc2c7cd4aa8f2812fbcb6df7fa31d369d0da95f28a4f->leave($__internal_5b203804fda16de41ac8cc2c7cd4aa8f2812fbcb6df7fa31d369d0da95f28a4f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisite:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 257,  664 => 255,  660 => 254,  656 => 253,  652 => 252,  648 => 251,  644 => 250,  640 => 249,  636 => 248,  627 => 242,  618 => 237,  609 => 236,  597 => 233,  591 => 229,  574 => 214,  567 => 209,  557 => 200,  550 => 198,  544 => 197,  538 => 194,  533 => 193,  530 => 192,  526 => 191,  521 => 190,  516 => 189,  507 => 186,  502 => 185,  498 => 184,  485 => 173,  478 => 168,  474 => 167,  470 => 166,  465 => 164,  459 => 163,  455 => 162,  451 => 161,  447 => 160,  442 => 158,  437 => 156,  431 => 155,  422 => 148,  414 => 142,  410 => 141,  405 => 139,  401 => 138,  397 => 137,  392 => 135,  388 => 134,  384 => 133,  379 => 131,  375 => 130,  371 => 129,  367 => 128,  363 => 127,  359 => 126,  355 => 125,  351 => 124,  347 => 122,  342 => 118,  340 => 114,  336 => 113,  332 => 112,  328 => 111,  324 => 110,  320 => 109,  316 => 108,  312 => 107,  308 => 106,  304 => 105,  300 => 104,  296 => 103,  292 => 102,  284 => 96,  276 => 90,  272 => 89,  268 => 88,  264 => 87,  258 => 86,  254 => 85,  249 => 83,  245 => 82,  241 => 81,  236 => 80,  232 => 78,  227 => 76,  223 => 75,  219 => 73,  217 => 70,  212 => 68,  206 => 67,  198 => 61,  192 => 57,  189 => 56,  180 => 53,  177 => 52,  172 => 51,  163 => 48,  160 => 47,  155 => 46,  146 => 45,  127 => 40,  116 => 36,  114 => 35,  112 => 34,  106 => 31,  104 => 30,  102 => 29,  100 => 28,  98 => 27,  93 => 24,  86 => 23,  84 => 22,  78 => 21,  74 => 19,  71 => 17,  69 => 16,  60 => 15,  50 => 1,  48 => 43,  46 => 42,  44 => 13,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 3,  11 => 1,);
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

{#{% form_theme edit_form.ctCarteGrise.ctVehicule.ctMarque _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctVehicule.ctGenre _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctCentre _self %}#}
{#{% form_theme edit_form.ctCarteGrise.ctCarosserie _self %}#}
{% form_theme edit_form.ctUsage _self %}
{% form_theme edit_form.ctVerificateur _self %}
{% form_theme edit_form.ctCentre _self %}
{% form_theme edit_form.ctVisiteExtra _self %}
{% form_theme edit_form.ctAnomalie _self %}

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

{% block title %}{{ parent() }} Modification Visite technique {% endblock %}

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

    {{ form_start(edit_form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                {# Formulaire carte grise #}
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations carte grise</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-carte-grise\">
                        <div class=\"{% if app.user.ctRole.id != constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCarteGrise.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.ctCarteGrise.cgDateEmission, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }}) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgImmatriculation) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNumIdentification) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgNom) }}
                        {#{{ form_row(edit_form.ctCarteGrise.cgPrenom) }}#}
                        {{ form_row(edit_form.ctCarteGrise.cgProfession) }}
                        {{ form_row(edit_form.ctCarteGrise.cgAdresse) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPhone) }}
                        {{ form_row(edit_form.ctCarteGrise.cgCommune) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgIsTransport) }}
                        <div id=\"form-transport\" class=\"{% if visite.ctCarteGrise.cgIsTransport == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCarteGrise.cgNomCooperative) }}
                            {{ form_row(edit_form.ctCarteGrise.cgItineraire) }}
                            {{ form_row(edit_form.ctCarteGrise.cgNumVignette) }}
                            {{ form_row(edit_form.ctCarteGrise.ctZoneDeserte) }}
                        </div>
                    </div>
                </div>
    
                {# Formulaire véhicule #}
                <div class=\"box box-success\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations véhicule</h3>
                    </div>
    
                    <div class=\"box-body\" id=\"form-vehicule\">
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.ctGenre) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcType) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.ctMarque) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcNumSerie) }}
                        {{ form_row(edit_form.ctCarteGrise.ctCarosserie) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcNumMoteur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctSourceEnergie) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPuissanceAdmin) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNbrAssis) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPoidsTotalCharge) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPoidsVide) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcChargeUtile) }}
                        {{ form_row(edit_form.ctCarteGrise.cgMiseEnService, {
                            'attr': {
                                'class': ' datepicker-edit'
                            }})
                        }}
                    </div>

                    {# Champs cachés #}
                    <div class=\"hidden\">
                        <input type=\"text\" name=\"ct-visite-id\" id=\"ct-visite-id\"
                               value=\"{{ visite.id }}\" />
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcPuissance) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcCylindre) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcHauteur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcLongueur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcLargeur) }}
                        {{ form_row(edit_form.ctCarteGrise.ctVehicule.vhcProvenance) }}
                        {{ form_row(edit_form.ctCarteGrise.cgNbrDebout) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgRta) }}
                        {{ form_row(edit_form.ctCarteGrise.cgPatente) }}
                        {{ form_row(edit_form.ctCarteGrise.cgAni) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgNumCarteViolette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgLieuCarteViolette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgDateCarteViolette) }}
                        <hr>
                        {{ form_row(edit_form.ctCarteGrise.cgDateVignette) }}
                        {{ form_row(edit_form.ctCarteGrise.cgLieuVignette) }}
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
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.ctTypeVisite) }}
                        <hr>
                        {{ form_row(edit_form.ctUsage) }}
                        {{ form_row(edit_form.ctUtilisation) }}
                        {{ form_row(edit_form.ctAnomalie) }}
                        <div id=\"form-duree-reparation\" class=\"{% if visite.ctAnomalie|length == 0 %}hidden{% endif %}\">
                            {{ form_row(edit_form.vstDureeReparation) }}
                        </div>
                        {{ form_row(edit_form.vstDateExpiration) }}
                        {{ form_row(edit_form.ctVerificateur) }}
                        {{ form_row(edit_form.ctVisiteExtra) }}
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
                                    style=\"width: 100%;\" data-placeholder=\" Choisir\" multiple=\"\" required >
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
    
        {# Formulaire enregistrement #}
        <div class=\"row\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <div class=\"col-md-4\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_visite\"/>
                        <a href=\"{{ path('visite_new') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à l'ajout
                        </a>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-success\" id=\"btn-generate-reporting\"
                               value=\"Générer la carte visite\" name=\"generate_carte_visite\"/>
                        <span class=\"kl-edit-link-download-cv\" id=\"link-download\"></span>
                    </div>
                    <div class=\"col-md-4\">
                        <input type=\"button\" class=\"btn btn-primary\" id=\"btn-generate-pv-visite\"
                               value=\"Générer PV\" name=\"generate_pv_visite\"/>
                        <span class=\"kl-edit-link-download-pv\" id=\"link-download-pv\"></span>
                        {#<span class=\"kl-edit-link-download-pv\" id=\"link-download-pv-inapte\"></span>#}
                    </div>
                </div>
            </div>
        </div>
    {{ form_end(edit_form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}


    <!-- Vérification existence carte grise -->
    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>
    <script>
        \$(\".ct_imprime_tech_use\").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
        var _fill_form_carte_grise_ajax_uri = \"{{ path('carte_grise_fill_info_by_immatriculation_ajax') }}\";
        var _autocomplete_numero_serie_ajax_uri = \"{{ path('carte_grise_show_numero_serie_ajax') }}\";
        var _autocomplete_numero_immatriculation_ajax_uri = \"{{ path('carte_grise_show_numero_immatriculation_ajax') }}\";
        var _generate_reporting_ajax_uri = \"{{ path('visite_generate_reporting_ajax') }}\";
        var _generate_pv_visite_ajax_uri = \"{{ path('visite_generate_pv_visite_ajax') }}\"
        var _select_verif_by_centre_ajax_uri = \"{{ path('visite_select_verificateur_by_centre_ajax') }}\";
        var _select_usage_by_type_visite_ajax_uri = \"{{ path('visite_select_usage_by_type_visite_ajax') }}\";
        var _select_expiration_by_usage_ajax_uri = \"{{ path('visite_select_expiration_by_usage_ajax') }}\";
    </script>
    <script src=\"{{ asset('backoffice/js/add.visite.js') }}\"></script>
{% endblock %}", "AdminBundle:CtVisite:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisite/edit.html.twig");
    }
}
