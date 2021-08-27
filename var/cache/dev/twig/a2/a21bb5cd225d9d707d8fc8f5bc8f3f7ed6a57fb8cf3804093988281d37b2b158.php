<?php

/* form/custom_fields.html.twig */
class __TwigTemplate_4a860b000e2ddf0cd20e44b095d1cb92bdd86d2fe76c8823dcc3f98ac5ad0f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
            'number_widget' => array($this, 'block_number_widget'),
            'text_widget' => array($this, 'block_text_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1daa175c0e3a9192db94c9220d7780624bac2524b413476fb4ee34109403e8a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daa175c0e3a9192db94c9220d7780624bac2524b413476fb4ee34109403e8a5->enter($__internal_1daa175c0e3a9192db94c9220d7780624bac2524b413476fb4ee34109403e8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

        $__internal_206b7b59de7f03bfc3c2401bafd4d60de480b6e888b97e571b8a0595ebd59c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206b7b59de7f03bfc3c2401bafd4d60de480b6e888b97e571b8a0595ebd59c6f->enter($__internal_206b7b59de7f03bfc3c2401bafd4d60de480b6e888b97e571b8a0595ebd59c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/custom_fields.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_row', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('number_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('text_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('email_widget', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "    
";
        // line 88
        $this->displayBlock('field_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 101
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 123
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 129
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_1daa175c0e3a9192db94c9220d7780624bac2524b413476fb4ee34109403e8a5->leave($__internal_1daa175c0e3a9192db94c9220d7780624bac2524b413476fb4ee34109403e8a5_prof);

        
        $__internal_206b7b59de7f03bfc3c2401bafd4d60de480b6e888b97e571b8a0595ebd59c6f->leave($__internal_206b7b59de7f03bfc3c2401bafd4d60de480b6e888b97e571b8a0595ebd59c6f_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cd83a7d2ccd73da0929d39c6381e26d3a5958d957a5392b2030a08050409dfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd83a7d2ccd73da0929d39c6381e26d3a5958d957a5392b2030a08050409dfda->enter($__internal_cd83a7d2ccd73da0929d39c6381e26d3a5958d957a5392b2030a08050409dfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ff899216d0514105ed25c5a5a01df82500306739e8cd0b4e8cedd425a569b2e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff899216d0514105ed25c5a5a01df82500306739e8cd0b4e8cedd425a569b2e4->enter($__internal_ff899216d0514105ed25c5a5a01df82500306739e8cd0b4e8cedd425a569b2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "            <ul>
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "                    <li class=\"error-message\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            </ul>
        ";
        }
        // line 10
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ff899216d0514105ed25c5a5a01df82500306739e8cd0b4e8cedd425a569b2e4->leave($__internal_ff899216d0514105ed25c5a5a01df82500306739e8cd0b4e8cedd425a569b2e4_prof);

        
        $__internal_cd83a7d2ccd73da0929d39c6381e26d3a5958d957a5392b2030a08050409dfda->leave($__internal_cd83a7d2ccd73da0929d39c6381e26d3a5958d957a5392b2030a08050409dfda_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_c3aa48d26bf0f03531b34c56a96efc1db3f26b3be0780b64cd28265298ed2735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3aa48d26bf0f03531b34c56a96efc1db3f26b3be0780b64cd28265298ed2735->enter($__internal_c3aa48d26bf0f03531b34c56a96efc1db3f26b3be0780b64cd28265298ed2735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_d6ed0159d4471592909ef651f88fbffde5f6dd88ea323b03a439750c18fa05d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ed0159d4471592909ef651f88fbffde5f6dd88ea323b03a439750c18fa05d1->enter($__internal_d6ed0159d4471592909ef651f88fbffde5f6dd88ea323b03a439750c18fa05d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 14
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 18
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        
        $__internal_d6ed0159d4471592909ef651f88fbffde5f6dd88ea323b03a439750c18fa05d1->leave($__internal_d6ed0159d4471592909ef651f88fbffde5f6dd88ea323b03a439750c18fa05d1_prof);

        
        $__internal_c3aa48d26bf0f03531b34c56a96efc1db3f26b3be0780b64cd28265298ed2735->leave($__internal_c3aa48d26bf0f03531b34c56a96efc1db3f26b3be0780b64cd28265298ed2735_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_00772a2dd2b2bce12691483eb2ae50b63fd2bb5104f09a3db938174038c916b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00772a2dd2b2bce12691483eb2ae50b63fd2bb5104f09a3db938174038c916b0->enter($__internal_00772a2dd2b2bce12691483eb2ae50b63fd2bb5104f09a3db938174038c916b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_7cc94582868bd8a1c9698c4ec50bec0d57354ff86d00e5f25560f99cb69b28d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc94582868bd8a1c9698c4ec50bec0d57354ff86d00e5f25560f99cb69b28d8->enter($__internal_7cc94582868bd8a1c9698c4ec50bec0d57354ff86d00e5f25560f99cb69b28d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 24
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 25
        if ((($context["type"] ?? $this->getContext($context, "type")) == "file")) {
            // line 26
            echo "        <input class=\"inputfile\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "  />
        ";
            // line 28
            echo "    ";
        } else {
            // line 30
            echo "        <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
";
            // line 31
            echo "        
    ";
        }
        // line 32
        echo "    
";
        
        $__internal_7cc94582868bd8a1c9698c4ec50bec0d57354ff86d00e5f25560f99cb69b28d8->leave($__internal_7cc94582868bd8a1c9698c4ec50bec0d57354ff86d00e5f25560f99cb69b28d8_prof);

        
        $__internal_00772a2dd2b2bce12691483eb2ae50b63fd2bb5104f09a3db938174038c916b0->leave($__internal_00772a2dd2b2bce12691483eb2ae50b63fd2bb5104f09a3db938174038c916b0_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6b8928f42616f8f1a89cdeb3326f421f4676f8d3b3bff5b3d0a631936bf25f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8928f42616f8f1a89cdeb3326f421f4676f8d3b3bff5b3d0a631936bf25f56->enter($__internal_6b8928f42616f8f1a89cdeb3326f421f4676f8d3b3bff5b3d0a631936bf25f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c292e9f8fdba88eb4a571b31486bc9a57e7416c97316ecc679b776465aa86999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c292e9f8fdba88eb4a571b31486bc9a57e7416c97316ecc679b776465aa86999->enter($__internal_c292e9f8fdba88eb4a571b31486bc9a57e7416c97316ecc679b776465aa86999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 36
        echo "    ";
        ob_start();
        // line 37
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 38
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 39
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 43
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div> 
                </div>
            </div> 
        ";
        } else {
            // line 50
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 54
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                    </div>
                </div>
            </div> 
        ";
        }
        // line 60
        echo "     
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c292e9f8fdba88eb4a571b31486bc9a57e7416c97316ecc679b776465aa86999->leave($__internal_c292e9f8fdba88eb4a571b31486bc9a57e7416c97316ecc679b776465aa86999_prof);

        
        $__internal_6b8928f42616f8f1a89cdeb3326f421f4676f8d3b3bff5b3d0a631936bf25f56->leave($__internal_6b8928f42616f8f1a89cdeb3326f421f4676f8d3b3bff5b3d0a631936bf25f56_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_7d672572d7935eefd03d7eb06a82a230f5ca0052dcc243bfe39fe0af6f2cab57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d672572d7935eefd03d7eb06a82a230f5ca0052dcc243bfe39fe0af6f2cab57->enter($__internal_7d672572d7935eefd03d7eb06a82a230f5ca0052dcc243bfe39fe0af6f2cab57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_592db983b9cc29f2118a2cd731516e7f289f0d38012da39f1f94b195f737549a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592db983b9cc29f2118a2cd731516e7f289f0d38012da39f1f94b195f737549a->enter($__internal_592db983b9cc29f2118a2cd731516e7f289f0d38012da39f1f94b195f737549a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_592db983b9cc29f2118a2cd731516e7f289f0d38012da39f1f94b195f737549a->leave($__internal_592db983b9cc29f2118a2cd731516e7f289f0d38012da39f1f94b195f737549a_prof);

        
        $__internal_7d672572d7935eefd03d7eb06a82a230f5ca0052dcc243bfe39fe0af6f2cab57->leave($__internal_7d672572d7935eefd03d7eb06a82a230f5ca0052dcc243bfe39fe0af6f2cab57_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_3e394c783bd3326c5c8ec5bc3ea43b27f4027f94bcf7aa835eb41f5852aebb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e394c783bd3326c5c8ec5bc3ea43b27f4027f94bcf7aa835eb41f5852aebb2c->enter($__internal_3e394c783bd3326c5c8ec5bc3ea43b27f4027f94bcf7aa835eb41f5852aebb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_a95522e446cabd4473b7db6e3694fef0c873cffc14784467cb0a93214c5c7558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95522e446cabd4473b7db6e3694fef0c873cffc14784467cb0a93214c5c7558->enter($__internal_a95522e446cabd4473b7db6e3694fef0c873cffc14784467cb0a93214c5c7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_a95522e446cabd4473b7db6e3694fef0c873cffc14784467cb0a93214c5c7558->leave($__internal_a95522e446cabd4473b7db6e3694fef0c873cffc14784467cb0a93214c5c7558_prof);

        
        $__internal_3e394c783bd3326c5c8ec5bc3ea43b27f4027f94bcf7aa835eb41f5852aebb2c->leave($__internal_3e394c783bd3326c5c8ec5bc3ea43b27f4027f94bcf7aa835eb41f5852aebb2c_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_df693b902913bf0ff892462e18b87856a764b9a40f4cb0950c03427681e3da36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df693b902913bf0ff892462e18b87856a764b9a40f4cb0950c03427681e3da36->enter($__internal_df693b902913bf0ff892462e18b87856a764b9a40f4cb0950c03427681e3da36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_15dc628b6e12bba36c1287a0b639b5800db6a3409d268d15cd6362591973db28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dc628b6e12bba36c1287a0b639b5800db6a3409d268d15cd6362591973db28->enter($__internal_15dc628b6e12bba36c1287a0b639b5800db6a3409d268d15cd6362591973db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_15dc628b6e12bba36c1287a0b639b5800db6a3409d268d15cd6362591973db28->leave($__internal_15dc628b6e12bba36c1287a0b639b5800db6a3409d268d15cd6362591973db28_prof);

        
        $__internal_df693b902913bf0ff892462e18b87856a764b9a40f4cb0950c03427681e3da36->leave($__internal_df693b902913bf0ff892462e18b87856a764b9a40f4cb0950c03427681e3da36_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9d9f6e5db619c83e75d26d8dee227d275cdf2877c9c879d7690bd26caa6f72e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9f6e5db619c83e75d26d8dee227d275cdf2877c9c879d7690bd26caa6f72e6->enter($__internal_9d9f6e5db619c83e75d26d8dee227d275cdf2877c9c879d7690bd26caa6f72e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_37ff9235f2bd7c0da059f6ee768e76ed19dda1709fead12b94ade3c24e20eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ff9235f2bd7c0da059f6ee768e76ed19dda1709fead12b94ade3c24e20eedf->enter($__internal_37ff9235f2bd7c0da059f6ee768e76ed19dda1709fead12b94ade3c24e20eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 84
        echo "    <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        
        $__internal_37ff9235f2bd7c0da059f6ee768e76ed19dda1709fead12b94ade3c24e20eedf->leave($__internal_37ff9235f2bd7c0da059f6ee768e76ed19dda1709fead12b94ade3c24e20eedf_prof);

        
        $__internal_9d9f6e5db619c83e75d26d8dee227d275cdf2877c9c879d7690bd26caa6f72e6->leave($__internal_9d9f6e5db619c83e75d26d8dee227d275cdf2877c9c879d7690bd26caa6f72e6_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_deba57def0261c700a1756239b9cb4f52cd3feb4318ae26c3a18da0f1ffd9feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deba57def0261c700a1756239b9cb4f52cd3feb4318ae26c3a18da0f1ffd9feb->enter($__internal_deba57def0261c700a1756239b9cb4f52cd3feb4318ae26c3a18da0f1ffd9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_b2d1ce62d70d7be96f5eb7adbfd2adc9e22e2190cff064db94c6b9027072f91c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d1ce62d70d7be96f5eb7adbfd2adc9e22e2190cff064db94c6b9027072f91c->enter($__internal_b2d1ce62d70d7be96f5eb7adbfd2adc9e22e2190cff064db94c6b9027072f91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        // line 89
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 90
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    </div>
";
        
        $__internal_b2d1ce62d70d7be96f5eb7adbfd2adc9e22e2190cff064db94c6b9027072f91c->leave($__internal_b2d1ce62d70d7be96f5eb7adbfd2adc9e22e2190cff064db94c6b9027072f91c_prof);

        
        $__internal_deba57def0261c700a1756239b9cb4f52cd3feb4318ae26c3a18da0f1ffd9feb->leave($__internal_deba57def0261c700a1756239b9cb4f52cd3feb4318ae26c3a18da0f1ffd9feb_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_fc131d5b9ef6108a7722b62adf305848a86601ce0017ffc93bddc14f644508a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc131d5b9ef6108a7722b62adf305848a86601ce0017ffc93bddc14f644508a5->enter($__internal_fc131d5b9ef6108a7722b62adf305848a86601ce0017ffc93bddc14f644508a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_d42f5d26d88aa2d6fd9c429eb2792668c55e61d576ee9bfe2138d6bc440cf7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42f5d26d88aa2d6fd9c429eb2792668c55e61d576ee9bfe2138d6bc440cf7d9->enter($__internal_d42f5d26d88aa2d6fd9c429eb2792668c55e61d576ee9bfe2138d6bc440cf7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 95
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 96
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'widget')));
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        
        $__internal_d42f5d26d88aa2d6fd9c429eb2792668c55e61d576ee9bfe2138d6bc440cf7d9->leave($__internal_d42f5d26d88aa2d6fd9c429eb2792668c55e61d576ee9bfe2138d6bc440cf7d9_prof);

        
        $__internal_fc131d5b9ef6108a7722b62adf305848a86601ce0017ffc93bddc14f644508a5->leave($__internal_fc131d5b9ef6108a7722b62adf305848a86601ce0017ffc93bddc14f644508a5_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d71fb7757cc25a5483ad0bcd375ea5fa925588e4a58ab31462b680803f7a207c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71fb7757cc25a5483ad0bcd375ea5fa925588e4a58ab31462b680803f7a207c->enter($__internal_d71fb7757cc25a5483ad0bcd375ea5fa925588e4a58ab31462b680803f7a207c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_df602ee03ac6debe6e9f64f6bcab44fb8525b2f2d8ecd9007281332aa862d5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df602ee03ac6debe6e9f64f6bcab44fb8525b2f2d8ecd9007281332aa862d5aa->enter($__internal_df602ee03ac6debe6e9f64f6bcab44fb8525b2f2d8ecd9007281332aa862d5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 102
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 103
            $context["required"] = false;
        }
        // line 106
        echo "    <select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 107
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 108
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 110
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 111
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 112
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 113
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 114
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 117
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 118
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 119
        echo "</select>
";
        
        $__internal_df602ee03ac6debe6e9f64f6bcab44fb8525b2f2d8ecd9007281332aa862d5aa->leave($__internal_df602ee03ac6debe6e9f64f6bcab44fb8525b2f2d8ecd9007281332aa862d5aa_prof);

        
        $__internal_d71fb7757cc25a5483ad0bcd375ea5fa925588e4a58ab31462b680803f7a207c->leave($__internal_d71fb7757cc25a5483ad0bcd375ea5fa925588e4a58ab31462b680803f7a207c_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c55b86973a8acc1c13d05201beaaab7c5fa127bf01451ac1cb8b8bcf81ca31dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55b86973a8acc1c13d05201beaaab7c5fa127bf01451ac1cb8b8bcf81ca31dc->enter($__internal_c55b86973a8acc1c13d05201beaaab7c5fa127bf01451ac1cb8b8bcf81ca31dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_15afad1910e1a417f6dfb6ae27522c219b4bceec68ff0a43c3c5d1181ce13eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15afad1910e1a417f6dfb6ae27522c219b4bceec68ff0a43c3c5d1181ce13eee->enter($__internal_15afad1910e1a417f6dfb6ae27522c219b4bceec68ff0a43c3c5d1181ce13eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_15afad1910e1a417f6dfb6ae27522c219b4bceec68ff0a43c3c5d1181ce13eee->leave($__internal_15afad1910e1a417f6dfb6ae27522c219b4bceec68ff0a43c3c5d1181ce13eee_prof);

        
        $__internal_c55b86973a8acc1c13d05201beaaab7c5fa127bf01451ac1cb8b8bcf81ca31dc->leave($__internal_c55b86973a8acc1c13d05201beaaab7c5fa127bf01451ac1cb8b8bcf81ca31dc_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_14324a2b010bcc75889c69220748e332dd5e0b6919e74b7f8594aa5cdea5e530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14324a2b010bcc75889c69220748e332dd5e0b6919e74b7f8594aa5cdea5e530->enter($__internal_14324a2b010bcc75889c69220748e332dd5e0b6919e74b7f8594aa5cdea5e530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9b15de5659dd44c4efa42e625b293f54636c21cbb71bd8d80cc0df68e6b235af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b15de5659dd44c4efa42e625b293f54636c21cbb71bd8d80cc0df68e6b235af->enter($__internal_9b15de5659dd44c4efa42e625b293f54636c21cbb71bd8d80cc0df68e6b235af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 130
        echo "<div class=\"col-sm-10\">";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</div>";
        
        $__internal_9b15de5659dd44c4efa42e625b293f54636c21cbb71bd8d80cc0df68e6b235af->leave($__internal_9b15de5659dd44c4efa42e625b293f54636c21cbb71bd8d80cc0df68e6b235af_prof);

        
        $__internal_14324a2b010bcc75889c69220748e332dd5e0b6919e74b7f8594aa5cdea5e530->leave($__internal_14324a2b010bcc75889c69220748e332dd5e0b6919e74b7f8594aa5cdea5e530_prof);

    }

    public function getTemplateName()
    {
        return "form/custom_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  586 => 135,  580 => 133,  578 => 132,  574 => 131,  572 => 130,  563 => 129,  548 => 125,  539 => 123,  528 => 119,  526 => 118,  524 => 117,  518 => 114,  516 => 113,  514 => 112,  512 => 111,  510 => 110,  501 => 108,  499 => 107,  492 => 106,  489 => 103,  487 => 102,  478 => 101,  465 => 98,  462 => 97,  459 => 96,  456 => 95,  447 => 94,  432 => 90,  429 => 89,  420 => 88,  399 => 84,  390 => 82,  375 => 78,  366 => 76,  351 => 72,  342 => 70,  327 => 66,  318 => 64,  306 => 60,  298 => 56,  294 => 55,  289 => 54,  282 => 50,  274 => 45,  270 => 44,  265 => 43,  258 => 39,  256 => 38,  254 => 37,  251 => 36,  242 => 35,  231 => 32,  227 => 31,  214 => 30,  211 => 28,  198 => 26,  196 => 25,  194 => 24,  185 => 23,  172 => 19,  167 => 18,  161 => 16,  159 => 15,  154 => 14,  145 => 13,  134 => 10,  130 => 8,  121 => 6,  117 => 5,  114 => 4,  111 => 3,  108 => 2,  99 => 1,  89 => 129,  87 => 123,  85 => 101,  83 => 94,  80 => 93,  78 => 88,  75 => 87,  73 => 82,  70 => 81,  68 => 76,  65 => 75,  63 => 70,  60 => 69,  58 => 64,  55 => 63,  53 => 35,  50 => 34,  48 => 23,  45 => 22,  43 => 13,  40 => 12,  38 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul>
                {% for error in errors %}
                    <li class=\"error-message\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{% block form_widget_compound %}
    <div {{ block('widget_container_attributes') }}>
        {% if form.parent is empty %}
            {{ form_errors(form) }}
        {% endif %}
        {{ block('form_rows') }}
        {{ form_rest(form) }}
    </div>
{% endblock form_widget_compound %}

{% block form_widget_simple %}
    {%- set type = type|default('text') -%}    
    {% if type == 'file' %}
        <input class=\"inputfile\" type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}  />
        {#<label for=\"file\" class=\"inputfile-text btn btn-primary\" onclick=\"\$(this).prev().trigger('click');\">Choose a file</label>#}
    {% else %}
{#        <div class=\"col-sm-10 \">#}
        <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{#        </div>#}        
    {% endif %}    
{% endblock form_widget_simple %}

{% block form_row %}
    {% spaceless %}
        {%- set attr = attr|merge( {'class': (attr.class|default('') ~ ' form-control')|trim }) -%}
        {% if compound %}
            <div class=\"form-group {{ errors|length > 0 ? 'has-error' : '' }}\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            {#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
                        {{ form_label(form) }}
                        {{ form_widget(form, {'attr': attr}) }}
                        {{ form_errors(form) }}
                    </div> 
                </div>
            </div> 
        {% else %}
            <div class=\"form-group {{ errors|length > 0 ? 'has-error' : '' }}\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            {#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
                        {{ form_label(form) }}
                        {{ form_widget(form, {'attr': attr}) }}
                        {{ form_errors(form) }}
                    </div>
                </div>
            </div> 
        {% endif %}     
    {% endspaceless %}
{% endblock form_row %}

{% block number_widget %}
{#        <div class=\"col-sm-10\">#}
    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
{#        </div>#}
{% endblock %}

{% block text_widget %}
{#    <div class=\"col-sm-10\">#}
        <input type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" oninvalid=\"setErrorClass(\$(this));\" />
{#    </div>#}
{% endblock %}

{% block email_widget %}
{#    <div class=\"col-sm-10\">#}
    <input type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" oninvalid=\"setErrorClass(\$(this));\"/>
{#    </div>#}
{% endblock %}

{% block checkbox_widget %}
{#    <div class=\"col-sm-10\">#}
    <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{#    </div>#}
{% endblock checkbox_widget %}
    
{% block field_widget %}
    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" {{ block('widget_attributes') }} value=\"{{ value }}\" />
    </div>
{% endblock field_widget %}

{% block collection_widget %}
    {% if prototype is defined %}
        {% set attr = attr|merge({'data-prototype': form_widget(prototype) }) %}
    {% endif %}
    {{ block('form_widget') }}
{% endblock collection_widget %}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
{#    <div class=\"col-sm-10\">#}
    <select oninvalid=\"setErrorClass(\$(this));\" {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
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
{#    </div>#}
{%- endblock choice_widget_collapsed -%}

{%- block textarea_widget -%}
{#    <div class=\"col-sm-10\">#}
        <textarea oninvalid=\"setErrorClass(\$(this));\" {{ block('widget_attributes') }}>{{ value }}</textarea>
{#    </div>#}
{%- endblock textarea_widget -%}

{%- block choice_widget_expanded -%}
    <div class=\"col-sm-10\">
        {%- for child in form %}
            {{- form_widget(child) -}}
            {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
        {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}", "form/custom_fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\custom_fields.html.twig");
    }
}
