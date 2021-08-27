<?php

/* AdminBundle:CtConstatationAvDedouanement:edit.html.twig */
class __TwigTemplate_312f75a218abf45c15f294f205f274eb36d1b4b6e2722787b08c3edc6f97db81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig", 1);
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
        $__internal_f1692dea653771ed7597640acdee9fe63a671112d6364b77e378f053bc9cc676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1692dea653771ed7597640acdee9fe63a671112d6364b77e378f053bc9cc676->enter($__internal_f1692dea653771ed7597640acdee9fe63a671112d6364b77e378f053bc9cc676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig"));

        $__internal_73e27d9735f104a73f1f64c4c3a9fde76b547ed97da621c6dc3c5131e6ce164f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e27d9735f104a73f1f64c4c3a9fde76b547ed97da621c6dc3c5131e6ce164f->enter($__internal_73e27d9735f104a73f1f64c4c3a9fde76b547ed97da621c6dc3c5131e6ce164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 4
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), array(0 => $this));
        // line 33
        $context["menu_const_av_ded"] = true;
        // line 34
        $context["menu_const_av_ded_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1692dea653771ed7597640acdee9fe63a671112d6364b77e378f053bc9cc676->leave($__internal_f1692dea653771ed7597640acdee9fe63a671112d6364b77e378f053bc9cc676_prof);

        
        $__internal_73e27d9735f104a73f1f64c4c3a9fde76b547ed97da621c6dc3c5131e6ce164f->leave($__internal_73e27d9735f104a73f1f64c4c3a9fde76b547ed97da621c6dc3c5131e6ce164f_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bcfa3f5548bd3d1a9001a55460ff3587419f715d620b0947dd45ac9b45c30b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfa3f5548bd3d1a9001a55460ff3587419f715d620b0947dd45ac9b45c30b48->enter($__internal_bcfa3f5548bd3d1a9001a55460ff3587419f715d620b0947dd45ac9b45c30b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a9d821f7049e76d2565d530f6536d40e4a0baa3466d26b6d09ac1c86917e6766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d821f7049e76d2565d530f6536d40e4a0baa3466d26b6d09ac1c86917e6766->enter($__internal_a9d821f7049e76d2565d530f6536d40e4a0baa3466d26b6d09ac1c86917e6766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_a9d821f7049e76d2565d530f6536d40e4a0baa3466d26b6d09ac1c86917e6766->leave($__internal_a9d821f7049e76d2565d530f6536d40e4a0baa3466d26b6d09ac1c86917e6766_prof);

        
        $__internal_bcfa3f5548bd3d1a9001a55460ff3587419f715d620b0947dd45ac9b45c30b48->leave($__internal_bcfa3f5548bd3d1a9001a55460ff3587419f715d620b0947dd45ac9b45c30b48_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba7be4130188a0d29990b040b9ea697b4554ace4875d48db2fdb230bb2f5f8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7be4130188a0d29990b040b9ea697b4554ace4875d48db2fdb230bb2f5f8e3->enter($__internal_ba7be4130188a0d29990b040b9ea697b4554ace4875d48db2fdb230bb2f5f8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a2b27bde2b6540e7ed469e32421a00316966c28ac67bb9c5f5b9460ec70c1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2b27bde2b6540e7ed469e32421a00316966c28ac67bb9c5f5b9460ec70c1f1->enter($__internal_9a2b27bde2b6540e7ed469e32421a00316966c28ac67bb9c5f5b9460ec70c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout motif ";
        
        $__internal_9a2b27bde2b6540e7ed469e32421a00316966c28ac67bb9c5f5b9460ec70c1f1->leave($__internal_9a2b27bde2b6540e7ed469e32421a00316966c28ac67bb9c5f5b9460ec70c1f1_prof);

        
        $__internal_ba7be4130188a0d29990b040b9ea697b4554ace4875d48db2fdb230bb2f5f8e3->leave($__internal_ba7be4130188a0d29990b040b9ea697b4554ace4875d48db2fdb230bb2f5f8e3_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c00f95085f1e905b9d971ffa2363d20c98bcfafd3d2cce4431942a0aaabce0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c00f95085f1e905b9d971ffa2363d20c98bcfafd3d2cce4431942a0aaabce0e->enter($__internal_8c00f95085f1e905b9d971ffa2363d20c98bcfafd3d2cce4431942a0aaabce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8572f6c58d3a9a87af01966bed8e90111c7e07b015c655a7c5d3c6d79f9d8a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8572f6c58d3a9a87af01966bed8e90111c7e07b015c655a7c5d3c6d79f9d8a38->enter($__internal_8572f6c58d3a9a87af01966bed8e90111c7e07b015c655a7c5d3c6d79f9d8a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caracteristiques du vehicule</h3></div>
        <div class=\"panel-body\">
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
            <div class=\"row\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctConstAvDedCaracs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["cadc"]) {
            // line 55
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctGenre", array()), array(0 => $this));
            // line 56
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctMarque", array()), array(0 => $this));
            // line 57
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), array(0 => $this));
            // line 58
            echo "                    ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute($context["cadc"], "ctCarosserie", array()), array(0 => $this));
            // line 59
            echo "                    <div class=\"col-md-6\">
                        <div class=\"box box-success\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    ";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctConstAvDedType", array()), 'widget', array("attr" => array("class" => "form-control hide")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadInputCaracType", array()), 'widget', array("attr" => array("class" => "form-control kl-select-cadt")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'label');
            echo "
                                    ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPremiereCircule", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'label');
            echo "
                                    ";
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctGenre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'label');
            echo "
                                    ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctMarque", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 81
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'label');
            echo "
                                    ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadTypeCar", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'label');
            echo "
                                    ";
            // line 86
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumSerieType", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'label');
            echo "
                                    ";
            // line 90
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNumMoteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'label');
            echo "
                                    ";
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctSourceEnergie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'label');
            echo "
                                    ";
            // line 98
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadCylindre", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'label');
            echo "
                                    ";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPuissance", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 105
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'label');
            echo "
                                    ";
            // line 106
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "ctCarosserie", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'label');
            echo "
                                    ";
            // line 110
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadNbrAssis", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    ";
            // line 114
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'label');
            echo "
                                    ";
            // line 115
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLargeur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'label');
            echo "
                                    ";
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadHauteur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'label');
            echo "
                                    ";
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadLongueur", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <hr/>
                                <div class=\"form-group\">
                                    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'label');
            echo "
                                    ";
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadChargeUtile", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 131
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'label');
            echo "
                                    ";
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsVide", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 135
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'label');
            echo "
                                    ";
            // line 136
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsTotalCharge", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
                                </div>
                                <div class=\"form-group\">
                                    ";
            // line 139
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["cadc"], "cadPoidsMaxima", array()), 'label');
            echo "
                                    ";
            // line 140
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
        // line 146
        echo "            </div>
            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 150
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctVerificateur", array()), 'row');
        echo "
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadImmatriculation", array()), 'row');
        echo "
                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProvenance", array()), 'row');
        echo "
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadDateEmbarquement", array()), 'row');
        echo "
                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadLieuEmbarquement", array()), 'row');
        echo "
                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProprietaireNom", array()), 'row');
        echo "
                    ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProprietaireAdresse", array()), 'row');
        echo "
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadDivers", array()), 'row');
        echo "
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadConforme", array()), 'row');
        echo "
                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadBonEtat", array()), 'row');
        echo "
                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadSecPers", array()), 'row');
        echo "
                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadSecMarch", array()), 'row');
        echo "
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "cadProtecEnv", array()), 'row');
        echo "
                    ";
        // line 164
        echo "                </div>
            </div>

            <div class=\"kl-cav\">
                <div class=\"col-md-12\">
                    ";
        // line 170
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
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_use"] ?? $this->getContext($context, "imprimes_use")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_use"]) {
            // line 182
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "id", array()), "html", null, true);
            echo "\" selected>
                                                ";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_use"], "ituNumero", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_use'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech"] ?? $this->getContext($context, "imprimes_tech")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech"]) {
            // line 187
            echo "                                        <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech"], "nomImprimeTech", array())), "html", null, true);
            echo "\">
                                            ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imprimes_tech_use"] ?? $this->getContext($context, "imprimes_tech_use")));
            foreach ($context['_seq'] as $context["_key"] => $context["imprime_tech_use"]) {
                // line 189
                echo "                                                ";
                if (($this->getAttribute($context["imprime_tech"], "id", array()) == $this->getAttribute($this->getAttribute($context["imprime_tech_use"], "ctImprimeTech", array()), "id", array()))) {
                    // line 190
                    echo "                                                <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "id", array()), "html", null, true);
                    echo "\">
                                                    ";
                    // line 191
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["imprime_tech_use"], "ituNumero", array())), "html", null, true);
                    echo "
                                                </option>
                                                ";
                }
                // line 194
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech_use'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "                                        </optgroup>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprime_tech'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"box-footer\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
        echo "\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        ";
        // line 212
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8572f6c58d3a9a87af01966bed8e90111c7e07b015c655a7c5d3c6d79f9d8a38->leave($__internal_8572f6c58d3a9a87af01966bed8e90111c7e07b015c655a7c5d3c6d79f9d8a38_prof);

        
        $__internal_8c00f95085f1e905b9d971ffa2363d20c98bcfafd3d2cce4431942a0aaabce0e->leave($__internal_8c00f95085f1e905b9d971ffa2363d20c98bcfafd3d2cce4431942a0aaabce0e_prof);

    }

    // line 216
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cf5e297817ac74f21f5d189f88f6ad234fe34a4162d05105baae9e191965b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf5e297817ac74f21f5d189f88f6ad234fe34a4162d05105baae9e191965b6e->enter($__internal_5cf5e297817ac74f21f5d189f88f6ad234fe34a4162d05105baae9e191965b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45cbf895edea4bb3915e342a1afee7cc8fd8b999e37c90d0c73fc177c057ea00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cbf895edea4bb3915e342a1afee7cc8fd8b999e37c90d0c73fc177c057ea00->enter($__internal_45cbf895edea4bb3915e342a1afee7cc8fd8b999e37c90d0c73fc177c057ea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 217
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <!-- JQuery UI -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-ui-1.12.1/jquery-ui.js"), "html", null, true);
        echo "\" ></script>

    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/js/edit.reception.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_45cbf895edea4bb3915e342a1afee7cc8fd8b999e37c90d0c73fc177c057ea00->leave($__internal_45cbf895edea4bb3915e342a1afee7cc8fd8b999e37c90d0c73fc177c057ea00_prof);

        
        $__internal_5cf5e297817ac74f21f5d189f88f6ad234fe34a4162d05105baae9e191965b6e->leave($__internal_5cf5e297817ac74f21f5d189f88f6ad234fe34a4162d05105baae9e191965b6e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtConstatationAvDedouanement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 222,  601 => 220,  594 => 217,  585 => 216,  572 => 212,  564 => 207,  552 => 197,  545 => 195,  539 => 194,  533 => 191,  528 => 190,  525 => 189,  521 => 188,  516 => 187,  511 => 186,  502 => 183,  497 => 182,  493 => 181,  480 => 170,  473 => 164,  469 => 162,  465 => 161,  461 => 160,  457 => 159,  453 => 158,  449 => 157,  445 => 156,  441 => 155,  437 => 154,  433 => 153,  429 => 152,  425 => 151,  420 => 150,  415 => 146,  403 => 140,  399 => 139,  393 => 136,  389 => 135,  383 => 132,  379 => 131,  373 => 128,  369 => 127,  362 => 123,  358 => 122,  352 => 119,  348 => 118,  342 => 115,  338 => 114,  331 => 110,  327 => 109,  321 => 106,  317 => 105,  311 => 102,  307 => 101,  301 => 98,  297 => 97,  291 => 94,  287 => 93,  281 => 90,  277 => 89,  271 => 86,  267 => 85,  261 => 82,  257 => 81,  251 => 78,  247 => 77,  241 => 74,  237 => 73,  231 => 70,  227 => 69,  221 => 66,  215 => 63,  209 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  193 => 54,  188 => 52,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 4,  34 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}
{% form_theme edit_form.ctVerificateur _self %}

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


    <div class=\"panel panel-default\">
        <div class=\"panel-heading text-center\"><h3>Caracteristiques du vehicule</h3></div>
        <div class=\"panel-body\">
            {{ form_start(edit_form) }}
            <div class=\"row\">
                {% for cadc in edit_form.ctConstAvDedCaracs %}
                    {% form_theme cadc.ctGenre _self %}
                    {% form_theme cadc.ctMarque _self %}
                    {% form_theme cadc.ctSourceEnergie _self %}
                    {% form_theme cadc.ctCarosserie _self %}
                    <div class=\"col-md-6\">
                        <div class=\"box box-success\">
                            <div class=\"box-body\">
                                <div class=\"form-group\">
                                    {{ form_widget(cadc.ctConstAvDedType, {'attr': {'class': 'form-control hide'}})}}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_widget(cadc.cadInputCaracType, {'attr': {'class': 'form-control kl-select-cadt'}})}}
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
                                <div class=\"form-group\">
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
                    {{ form_row(edit_form.ctVerificateur ) }}
                    {{ form_row(edit_form.cadImmatriculation ) }}
                    {{ form_row(edit_form.cadProvenance) }}
                    {{ form_row(edit_form.cadDateEmbarquement) }}
                    {{ form_row(edit_form.cadLieuEmbarquement) }}
                    {{ form_row(edit_form.cadProprietaireNom) }}
                    {{ form_row(edit_form.cadProprietaireAdresse) }}
                    {{ form_row(edit_form.cadDivers) }}
                    {{ form_row(edit_form.cadConforme) }}
                    {{ form_row(edit_form.cadBonEtat) }}
                    {{ form_row(edit_form.cadSecPers) }}
                    {{ form_row(edit_form.cadSecMarch) }}
                    {{ form_row(edit_form.cadProtecEnv) }}
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
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_motif\"/>
            <a href=\"{{ path('const_av_ded_index') }}\"
               class=\"btn btn-default pull-left btn-mini-rectif\" >
                Retour à la liste
            </a>
        </div>
        {{ form_end(edit_form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <!-- JQuery UI -->
    <script src=\"{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}\" ></script>

    <script src=\"{{ asset('backoffice/js/edit.reception.js') }}\"></script>
{% endblock %}", "AdminBundle:CtConstatationAvDedouanement:edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtConstatationAvDedouanement/edit.html.twig");
    }
}
