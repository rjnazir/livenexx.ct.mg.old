<?php

/* form/bootstrap_3_horizontal_layout_custom.html.twig */
class __TwigTemplate_c6e27a763cb765a171a1ac9a70d7b6f6287f3f5520f4b31ba692f19b6896d1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/bootstrap_3_horizontal_layout_custom.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc23ef40f2d2d5d585b3396410e3d56f2747488bfcc73655d6d2eb423a88bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc23ef40f2d2d5d585b3396410e3d56f2747488bfcc73655d6d2eb423a88bd6->enter($__internal_0fc23ef40f2d2d5d585b3396410e3d56f2747488bfcc73655d6d2eb423a88bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_5ba007fda8dc2ce34fb56969684b349096ca9e7a69d553e2021bd4e6989138e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba007fda8dc2ce34fb56969684b349096ca9e7a69d553e2021bd4e6989138e2->enter($__internal_5ba007fda8dc2ce34fb56969684b349096ca9e7a69d553e2021bd4e6989138e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout_custom.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('radio_row', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('submit_row', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('reset_row', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_0fc23ef40f2d2d5d585b3396410e3d56f2747488bfcc73655d6d2eb423a88bd6->leave($__internal_0fc23ef40f2d2d5d585b3396410e3d56f2747488bfcc73655d6d2eb423a88bd6_prof);

        
        $__internal_5ba007fda8dc2ce34fb56969684b349096ca9e7a69d553e2021bd4e6989138e2->leave($__internal_5ba007fda8dc2ce34fb56969684b349096ca9e7a69d553e2021bd4e6989138e2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_14f20985f0fe2e87a6e1355b68bd9b6ace2ab526f1d537d4ea64520060bfa652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f20985f0fe2e87a6e1355b68bd9b6ace2ab526f1d537d4ea64520060bfa652->enter($__internal_14f20985f0fe2e87a6e1355b68bd9b6ace2ab526f1d537d4ea64520060bfa652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e2502b463f8fbbe63de2bbf43cf464b3bd90bf03eb10adb5b07ade9aae571323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2502b463f8fbbe63de2bbf43cf464b3bd90bf03eb10adb5b07ade9aae571323->enter($__internal_e2502b463f8fbbe63de2bbf43cf464b3bd90bf03eb10adb5b07ade9aae571323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e2502b463f8fbbe63de2bbf43cf464b3bd90bf03eb10adb5b07ade9aae571323->leave($__internal_e2502b463f8fbbe63de2bbf43cf464b3bd90bf03eb10adb5b07ade9aae571323_prof);

        
        $__internal_14f20985f0fe2e87a6e1355b68bd9b6ace2ab526f1d537d4ea64520060bfa652->leave($__internal_14f20985f0fe2e87a6e1355b68bd9b6ace2ab526f1d537d4ea64520060bfa652_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5d6f50a3d355b12a92d54b866c045987e21fff327921e924f3fe0dd83f141d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6f50a3d355b12a92d54b866c045987e21fff327921e924f3fe0dd83f141d56->enter($__internal_5d6f50a3d355b12a92d54b866c045987e21fff327921e924f3fe0dd83f141d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_448a3af6a140bb19f466473c39927d4201c4bee4a8ea6e135900ddb0e16a49e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448a3af6a140bb19f466473c39927d4201c4bee4a8ea6e135900ddb0e16a49e0->enter($__internal_448a3af6a140bb19f466473c39927d4201c4bee4a8ea6e135900ddb0e16a49e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_448a3af6a140bb19f466473c39927d4201c4bee4a8ea6e135900ddb0e16a49e0->leave($__internal_448a3af6a140bb19f466473c39927d4201c4bee4a8ea6e135900ddb0e16a49e0_prof);

        
        $__internal_5d6f50a3d355b12a92d54b866c045987e21fff327921e924f3fe0dd83f141d56->leave($__internal_5d6f50a3d355b12a92d54b866c045987e21fff327921e924f3fe0dd83f141d56_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9410449723e9987ea2c83eeb390eeaf5502330ea8548c547d16b99fc7647d087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9410449723e9987ea2c83eeb390eeaf5502330ea8548c547d16b99fc7647d087->enter($__internal_9410449723e9987ea2c83eeb390eeaf5502330ea8548c547d16b99fc7647d087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_4abac66f364f2e598ab84c21b23e289e11f61961098a6bc06ea312f69f84419c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abac66f364f2e598ab84c21b23e289e11f61961098a6bc06ea312f69f84419c->enter($__internal_4abac66f364f2e598ab84c21b23e289e11f61961098a6bc06ea312f69f84419c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_4abac66f364f2e598ab84c21b23e289e11f61961098a6bc06ea312f69f84419c->leave($__internal_4abac66f364f2e598ab84c21b23e289e11f61961098a6bc06ea312f69f84419c_prof);

        
        $__internal_9410449723e9987ea2c83eeb390eeaf5502330ea8548c547d16b99fc7647d087->leave($__internal_9410449723e9987ea2c83eeb390eeaf5502330ea8548c547d16b99fc7647d087_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cabc360cc87dfee0e03c73a427c038f11df8073d97b98c6dfcc9eeb64342b3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabc360cc87dfee0e03c73a427c038f11df8073d97b98c6dfcc9eeb64342b3c8->enter($__internal_cabc360cc87dfee0e03c73a427c038f11df8073d97b98c6dfcc9eeb64342b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bc2db96b3eb851f9475df3558c64aedc199d3dc1a4f8e2c9d2b790a5d74ba049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc2db96b3eb851f9475df3558c64aedc199d3dc1a4f8e2c9d2b790a5d74ba049->enter($__internal_bc2db96b3eb851f9475df3558c64aedc199d3dc1a4f8e2c9d2b790a5d74ba049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error ";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
        ";
        // line 32
        echo "</div>";
        
        $__internal_bc2db96b3eb851f9475df3558c64aedc199d3dc1a4f8e2c9d2b790a5d74ba049->leave($__internal_bc2db96b3eb851f9475df3558c64aedc199d3dc1a4f8e2c9d2b790a5d74ba049_prof);

        
        $__internal_cabc360cc87dfee0e03c73a427c038f11df8073d97b98c6dfcc9eeb64342b3c8->leave($__internal_cabc360cc87dfee0e03c73a427c038f11df8073d97b98c6dfcc9eeb64342b3c8_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4a7adc94f5f6d4d00dc940f5a5b309aa03d389c75da01e4edce2c642288fef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7adc94f5f6d4d00dc940f5a5b309aa03d389c75da01e4edce2c642288fef52->enter($__internal_4a7adc94f5f6d4d00dc940f5a5b309aa03d389c75da01e4edce2c642288fef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b0ef869912b9e5d8f54adc78524de328a0a7e162af705ad3b3379144e2229e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ef869912b9e5d8f54adc78524de328a0a7e162af705ad3b3379144e2229e3d->enter($__internal_b0ef869912b9e5d8f54adc78524de328a0a7e162af705ad3b3379144e2229e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b0ef869912b9e5d8f54adc78524de328a0a7e162af705ad3b3379144e2229e3d->leave($__internal_b0ef869912b9e5d8f54adc78524de328a0a7e162af705ad3b3379144e2229e3d_prof);

        
        $__internal_4a7adc94f5f6d4d00dc940f5a5b309aa03d389c75da01e4edce2c642288fef52->leave($__internal_4a7adc94f5f6d4d00dc940f5a5b309aa03d389c75da01e4edce2c642288fef52_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3f76fd124d4472928d1e762c2ab27eabfa668ffe932ba0503ce432f97ea0b15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f76fd124d4472928d1e762c2ab27eabfa668ffe932ba0503ce432f97ea0b15d->enter($__internal_3f76fd124d4472928d1e762c2ab27eabfa668ffe932ba0503ce432f97ea0b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cd57e0dc1e9b62d34f84db8c14a0d19ab84a6f4e748b46fc6b2c73fd2267aa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd57e0dc1e9b62d34f84db8c14a0d19ab84a6f4e748b46fc6b2c73fd2267aa14->enter($__internal_cd57e0dc1e9b62d34f84db8c14a0d19ab84a6f4e748b46fc6b2c73fd2267aa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_cd57e0dc1e9b62d34f84db8c14a0d19ab84a6f4e748b46fc6b2c73fd2267aa14->leave($__internal_cd57e0dc1e9b62d34f84db8c14a0d19ab84a6f4e748b46fc6b2c73fd2267aa14_prof);

        
        $__internal_3f76fd124d4472928d1e762c2ab27eabfa668ffe932ba0503ce432f97ea0b15d->leave($__internal_3f76fd124d4472928d1e762c2ab27eabfa668ffe932ba0503ce432f97ea0b15d_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_ac8437504c64a9f6051c07679d1fb3b2dd393e2411d1f9645cb294fe86ee66f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8437504c64a9f6051c07679d1fb3b2dd393e2411d1f9645cb294fe86ee66f1->enter($__internal_ac8437504c64a9f6051c07679d1fb3b2dd393e2411d1f9645cb294fe86ee66f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_f6754ddcdcf463c4c7a0282f9f68696a20720e53a8c42ddbc4b83d09156cd503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6754ddcdcf463c4c7a0282f9f68696a20720e53a8c42ddbc4b83d09156cd503->enter($__internal_f6754ddcdcf463c4c7a0282f9f68696a20720e53a8c42ddbc4b83d09156cd503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 44
        ob_start();
        // line 45
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 46
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 47
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f6754ddcdcf463c4c7a0282f9f68696a20720e53a8c42ddbc4b83d09156cd503->leave($__internal_f6754ddcdcf463c4c7a0282f9f68696a20720e53a8c42ddbc4b83d09156cd503_prof);

        
        $__internal_ac8437504c64a9f6051c07679d1fb3b2dd393e2411d1f9645cb294fe86ee66f1->leave($__internal_ac8437504c64a9f6051c07679d1fb3b2dd393e2411d1f9645cb294fe86ee66f1_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_514250d85578d72e3ac2ab86daf1d1059c092b6131804dcd63e682850fc8f29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514250d85578d72e3ac2ab86daf1d1059c092b6131804dcd63e682850fc8f29f->enter($__internal_514250d85578d72e3ac2ab86daf1d1059c092b6131804dcd63e682850fc8f29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_144b9ceb728cc12ff531a90025bfa2274c426c19cf8ec3f88a804c4da2994edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144b9ceb728cc12ff531a90025bfa2274c426c19cf8ec3f88a804c4da2994edb->enter($__internal_144b9ceb728cc12ff531a90025bfa2274c426c19cf8ec3f88a804c4da2994edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 56
        ob_start();
        // line 57
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 58
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 59
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_144b9ceb728cc12ff531a90025bfa2274c426c19cf8ec3f88a804c4da2994edb->leave($__internal_144b9ceb728cc12ff531a90025bfa2274c426c19cf8ec3f88a804c4da2994edb_prof);

        
        $__internal_514250d85578d72e3ac2ab86daf1d1059c092b6131804dcd63e682850fc8f29f->leave($__internal_514250d85578d72e3ac2ab86daf1d1059c092b6131804dcd63e682850fc8f29f_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_006bc6eaea42d714bfc9b60bbb8557535d00fb049dc3f37b73e94d17c226f363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006bc6eaea42d714bfc9b60bbb8557535d00fb049dc3f37b73e94d17c226f363->enter($__internal_006bc6eaea42d714bfc9b60bbb8557535d00fb049dc3f37b73e94d17c226f363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7ece2118f7f28262ea8ef7d03f212062c0097bc237b742b8f70582c5c5bdc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ece2118f7f28262ea8ef7d03f212062c0097bc237b742b8f70582c5c5bdc2c3->enter($__internal_7ece2118f7f28262ea8ef7d03f212062c0097bc237b742b8f70582c5c5bdc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 67
        ob_start();
        // line 68
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 69
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 70
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7ece2118f7f28262ea8ef7d03f212062c0097bc237b742b8f70582c5c5bdc2c3->leave($__internal_7ece2118f7f28262ea8ef7d03f212062c0097bc237b742b8f70582c5c5bdc2c3_prof);

        
        $__internal_006bc6eaea42d714bfc9b60bbb8557535d00fb049dc3f37b73e94d17c226f363->leave($__internal_006bc6eaea42d714bfc9b60bbb8557535d00fb049dc3f37b73e94d17c226f363_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_cbfe2d334db991b3a827b3ff16e6e7e597db6bc70f564335e872fd449edfc5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfe2d334db991b3a827b3ff16e6e7e597db6bc70f564335e872fd449edfc5ce->enter($__internal_cbfe2d334db991b3a827b3ff16e6e7e597db6bc70f564335e872fd449edfc5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_87177068b9c7f86540fd5901512546db1cf3870d0f878ff1f70e60c15e5c1c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87177068b9c7f86540fd5901512546db1cf3870d0f878ff1f70e60c15e5c1c4b->enter($__internal_87177068b9c7f86540fd5901512546db1cf3870d0f878ff1f70e60c15e5c1c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_87177068b9c7f86540fd5901512546db1cf3870d0f878ff1f70e60c15e5c1c4b->leave($__internal_87177068b9c7f86540fd5901512546db1cf3870d0f878ff1f70e60c15e5c1c4b_prof);

        
        $__internal_cbfe2d334db991b3a827b3ff16e6e7e597db6bc70f564335e872fd449edfc5ce->leave($__internal_cbfe2d334db991b3a827b3ff16e6e7e597db6bc70f564335e872fd449edfc5ce_prof);

    }

    public function getTemplateName()
    {
        return "form/bootstrap_3_horizontal_layout_custom.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  387 => 78,  378 => 77,  363 => 71,  359 => 70,  355 => 69,  352 => 68,  350 => 67,  341 => 66,  326 => 60,  322 => 59,  318 => 58,  315 => 57,  313 => 56,  304 => 55,  289 => 49,  285 => 48,  281 => 47,  277 => 46,  270 => 45,  268 => 44,  259 => 43,  249 => 40,  240 => 39,  230 => 36,  221 => 35,  211 => 32,  208 => 31,  206 => 30,  204 => 29,  200 => 28,  198 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 77,  95 => 76,  93 => 66,  90 => 65,  88 => 55,  85 => 54,  83 => 43,  80 => 42,  78 => 39,  75 => 38,  73 => 35,  70 => 34,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-4
{%- endblock form_label_class %}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
        {##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-6
{%- endblock form_group_class %}
", "form/bootstrap_3_horizontal_layout_custom.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\bootstrap_3_horizontal_layout_custom.html.twig");
    }
}
