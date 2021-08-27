<?php

/* :form:fields.html.twig */
class __TwigTemplate_629044242f7314346338c248b8bddf8caeaa78415bbad954b1c9520d2081fd5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        $__internal_e122be9f2be509d74fad34bf7349eba40fb3dd73aec3ffc70526a834dcad4efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e122be9f2be509d74fad34bf7349eba40fb3dd73aec3ffc70526a834dcad4efc->enter($__internal_e122be9f2be509d74fad34bf7349eba40fb3dd73aec3ffc70526a834dcad4efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        $__internal_27b3c865e9db00e5a6f79a015155c12d7119ad7d18dcb4406b084fb5ffd30a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b3c865e9db00e5a6f79a015155c12d7119ad7d18dcb4406b084fb5ffd30a12->enter($__internal_27b3c865e9db00e5a6f79a015155c12d7119ad7d18dcb4406b084fb5ffd30a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        // line 1
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('number_widget', $context, $blocks);
        // line 53
        echo "

";
        // line 55
        $this->displayBlock('text_widget', $context, $blocks);
        // line 60
        $this->displayBlock('email_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('field_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 86
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 108
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 115
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        
        $__internal_e122be9f2be509d74fad34bf7349eba40fb3dd73aec3ffc70526a834dcad4efc->leave($__internal_e122be9f2be509d74fad34bf7349eba40fb3dd73aec3ffc70526a834dcad4efc_prof);

        
        $__internal_27b3c865e9db00e5a6f79a015155c12d7119ad7d18dcb4406b084fb5ffd30a12->leave($__internal_27b3c865e9db00e5a6f79a015155c12d7119ad7d18dcb4406b084fb5ffd30a12_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8c29c893dcf7da3c3c5ea0a621707c55bba67fe1357b53900b25a24805d42c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c29c893dcf7da3c3c5ea0a621707c55bba67fe1357b53900b25a24805d42c19->enter($__internal_8c29c893dcf7da3c3c5ea0a621707c55bba67fe1357b53900b25a24805d42c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_7fe8cd22f2b223172077435bd23bc85062509cc2b4b1ff24112a6eb370a31911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8cd22f2b223172077435bd23bc85062509cc2b4b1ff24112a6eb370a31911->enter($__internal_7fe8cd22f2b223172077435bd23bc85062509cc2b4b1ff24112a6eb370a31911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 2
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 3
        if (twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()))) {
            // line 4
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 6
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        
        $__internal_7fe8cd22f2b223172077435bd23bc85062509cc2b4b1ff24112a6eb370a31911->leave($__internal_7fe8cd22f2b223172077435bd23bc85062509cc2b4b1ff24112a6eb370a31911_prof);

        
        $__internal_8c29c893dcf7da3c3c5ea0a621707c55bba67fe1357b53900b25a24805d42c19->leave($__internal_8c29c893dcf7da3c3c5ea0a621707c55bba67fe1357b53900b25a24805d42c19_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_acfe477239df82df359df6b45ab75d92d4426c8f2878dc8d5b35d7f28d2021a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfe477239df82df359df6b45ab75d92d4426c8f2878dc8d5b35d7f28d2021a9->enter($__internal_acfe477239df82df359df6b45ab75d92d4426c8f2878dc8d5b35d7f28d2021a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2759f2331416fd6655f5cecfd75607568939a5cb585027e2080fb243bdf3b1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2759f2331416fd6655f5cecfd75607568939a5cb585027e2080fb243bdf3b1e4->enter($__internal_2759f2331416fd6655f5cecfd75607568939a5cb585027e2080fb243bdf3b1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 14
        if ((($context["type"] ?? $this->getContext($context, "type")) == "file")) {
            // line 15
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
            // line 17
            echo "    ";
        } else {
            // line 19
            echo "            <input type=\"";
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
            // line 21
            echo "
    ";
        }
        // line 23
        echo "
";
        
        $__internal_2759f2331416fd6655f5cecfd75607568939a5cb585027e2080fb243bdf3b1e4->leave($__internal_2759f2331416fd6655f5cecfd75607568939a5cb585027e2080fb243bdf3b1e4_prof);

        
        $__internal_acfe477239df82df359df6b45ab75d92d4426c8f2878dc8d5b35d7f28d2021a9->leave($__internal_acfe477239df82df359df6b45ab75d92d4426c8f2878dc8d5b35d7f28d2021a9_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7f6f030b8c44ff3c0e6eb9eb3e70dcde7acfeaa2b0a0210f7fdf0dca66994bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6f030b8c44ff3c0e6eb9eb3e70dcde7acfeaa2b0a0210f7fdf0dca66994bb3->enter($__internal_7f6f030b8c44ff3c0e6eb9eb3e70dcde7acfeaa2b0a0210f7fdf0dca66994bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e52655351e1c38d4418885851373c039c2272c42f3858ab337e562d2e09590d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52655351e1c38d4418885851373c039c2272c42f3858ab337e562d2e09590d7->enter($__internal_e52655351e1c38d4418885851373c039c2272c42f3858ab337e562d2e09590d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 27
        ob_start();
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 29
        if (($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 30
            echo "        <div class=\"form-group\">
";
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
";
            // line 34
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
        </div>
    ";
        } else {
            // line 37
            echo "        <div class=\"form-group\">
";
            // line 39
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
";
            // line 41
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
            echo "
        </div>
    ";
        }
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e52655351e1c38d4418885851373c039c2272c42f3858ab337e562d2e09590d7->leave($__internal_e52655351e1c38d4418885851373c039c2272c42f3858ab337e562d2e09590d7_prof);

        
        $__internal_7f6f030b8c44ff3c0e6eb9eb3e70dcde7acfeaa2b0a0210f7fdf0dca66994bb3->leave($__internal_7f6f030b8c44ff3c0e6eb9eb3e70dcde7acfeaa2b0a0210f7fdf0dca66994bb3_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_aa0bc5bf3bd778464b85d9d1abcb5bc4cae2e6e5ce1d0ea9a2c4eec4d45db1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0bc5bf3bd778464b85d9d1abcb5bc4cae2e6e5ce1d0ea9a2c4eec4d45db1ee->enter($__internal_aa0bc5bf3bd778464b85d9d1abcb5bc4cae2e6e5ce1d0ea9a2c4eec4d45db1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_9059bf37a03f312118752e9641dba1a1fb8dc1d56d6cab622512e9260f94bdd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9059bf37a03f312118752e9641dba1a1fb8dc1d56d6cab622512e9260f94bdd2->enter($__internal_9059bf37a03f312118752e9641dba1a1fb8dc1d56d6cab622512e9260f94bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_9059bf37a03f312118752e9641dba1a1fb8dc1d56d6cab622512e9260f94bdd2->leave($__internal_9059bf37a03f312118752e9641dba1a1fb8dc1d56d6cab622512e9260f94bdd2_prof);

        
        $__internal_aa0bc5bf3bd778464b85d9d1abcb5bc4cae2e6e5ce1d0ea9a2c4eec4d45db1ee->leave($__internal_aa0bc5bf3bd778464b85d9d1abcb5bc4cae2e6e5ce1d0ea9a2c4eec4d45db1ee_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_a9423f349f682680093466ea191a6ce7be0d41a01544d56bc5873d9ebe938f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9423f349f682680093466ea191a6ce7be0d41a01544d56bc5873d9ebe938f3c->enter($__internal_a9423f349f682680093466ea191a6ce7be0d41a01544d56bc5873d9ebe938f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_13e57471a20ecff9131fef2b20902aa69853258f69365a93f7147724ff865943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e57471a20ecff9131fef2b20902aa69853258f69365a93f7147724ff865943->enter($__internal_13e57471a20ecff9131fef2b20902aa69853258f69365a93f7147724ff865943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_13e57471a20ecff9131fef2b20902aa69853258f69365a93f7147724ff865943->leave($__internal_13e57471a20ecff9131fef2b20902aa69853258f69365a93f7147724ff865943_prof);

        
        $__internal_a9423f349f682680093466ea191a6ce7be0d41a01544d56bc5873d9ebe938f3c->leave($__internal_a9423f349f682680093466ea191a6ce7be0d41a01544d56bc5873d9ebe938f3c_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a2ee9ca314b57bd2f011dcd2f04dfc4e5aa771056e149bde95d748ca576e3bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ee9ca314b57bd2f011dcd2f04dfc4e5aa771056e149bde95d748ca576e3bc7->enter($__internal_a2ee9ca314b57bd2f011dcd2f04dfc4e5aa771056e149bde95d748ca576e3bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_7d509323503421336473c27587c0ccef6541fb489a131e3b72ca5c9640214bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d509323503421336473c27587c0ccef6541fb489a131e3b72ca5c9640214bf1->enter($__internal_7d509323503421336473c27587c0ccef6541fb489a131e3b72ca5c9640214bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_7d509323503421336473c27587c0ccef6541fb489a131e3b72ca5c9640214bf1->leave($__internal_7d509323503421336473c27587c0ccef6541fb489a131e3b72ca5c9640214bf1_prof);

        
        $__internal_a2ee9ca314b57bd2f011dcd2f04dfc4e5aa771056e149bde95d748ca576e3bc7->leave($__internal_a2ee9ca314b57bd2f011dcd2f04dfc4e5aa771056e149bde95d748ca576e3bc7_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b41937794dfd91e95c01bd88df73cec922b5abb76547f4548b9bbeee742755e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41937794dfd91e95c01bd88df73cec922b5abb76547f4548b9bbeee742755e6->enter($__internal_b41937794dfd91e95c01bd88df73cec922b5abb76547f4548b9bbeee742755e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e6c89f35a207d8cb47056f35639ef38c13b7c3b47a0bb85a5137b06480df3aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c89f35a207d8cb47056f35639ef38c13b7c3b47a0bb85a5137b06480df3aeb->enter($__internal_e6c89f35a207d8cb47056f35639ef38c13b7c3b47a0bb85a5137b06480df3aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 68
        echo "        <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
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
        
        $__internal_e6c89f35a207d8cb47056f35639ef38c13b7c3b47a0bb85a5137b06480df3aeb->leave($__internal_e6c89f35a207d8cb47056f35639ef38c13b7c3b47a0bb85a5137b06480df3aeb_prof);

        
        $__internal_b41937794dfd91e95c01bd88df73cec922b5abb76547f4548b9bbeee742755e6->leave($__internal_b41937794dfd91e95c01bd88df73cec922b5abb76547f4548b9bbeee742755e6_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_1a3cd7cfdba64a4c86d1832d6877285d8e3a4f76a5006d22718baf7e32f3f4d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3cd7cfdba64a4c86d1832d6877285d8e3a4f76a5006d22718baf7e32f3f4d2->enter($__internal_1a3cd7cfdba64a4c86d1832d6877285d8e3a4f76a5006d22718baf7e32f3f4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_5102b85ba115b655b6b3c8fbd7e41d6b43838772f8afce036cb3a42ae898372d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5102b85ba115b655b6b3c8fbd7e41d6b43838772f8afce036cb3a42ae898372d->enter($__internal_5102b85ba115b655b6b3c8fbd7e41d6b43838772f8afce036cb3a42ae898372d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        // line 73
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
    </div>
";
        
        $__internal_5102b85ba115b655b6b3c8fbd7e41d6b43838772f8afce036cb3a42ae898372d->leave($__internal_5102b85ba115b655b6b3c8fbd7e41d6b43838772f8afce036cb3a42ae898372d_prof);

        
        $__internal_1a3cd7cfdba64a4c86d1832d6877285d8e3a4f76a5006d22718baf7e32f3f4d2->leave($__internal_1a3cd7cfdba64a4c86d1832d6877285d8e3a4f76a5006d22718baf7e32f3f4d2_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_0c7b931b91d656e8dbe8924c96648db1480c282d4837b397828e90e7dd98db1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7b931b91d656e8dbe8924c96648db1480c282d4837b397828e90e7dd98db1d->enter($__internal_0c7b931b91d656e8dbe8924c96648db1480c282d4837b397828e90e7dd98db1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_a7df58d4c63ab877037c243c6220d2954bb77cfe3e66663a3be847b1a4b2d056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7df58d4c63ab877037c243c6220d2954bb77cfe3e66663a3be847b1a4b2d056->enter($__internal_a7df58d4c63ab877037c243c6220d2954bb77cfe3e66663a3be847b1a4b2d056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 79
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 80
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? $this->getContext($context, "prototype")), 'widget')));
            // line 81
            echo "    ";
        }
        // line 82
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        
        $__internal_a7df58d4c63ab877037c243c6220d2954bb77cfe3e66663a3be847b1a4b2d056->leave($__internal_a7df58d4c63ab877037c243c6220d2954bb77cfe3e66663a3be847b1a4b2d056_prof);

        
        $__internal_0c7b931b91d656e8dbe8924c96648db1480c282d4837b397828e90e7dd98db1d->leave($__internal_0c7b931b91d656e8dbe8924c96648db1480c282d4837b397828e90e7dd98db1d_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b998b509ed6bc42ea8100a877d7394fc8c2a2247ed89a1a53869aa92cc2ab4ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b998b509ed6bc42ea8100a877d7394fc8c2a2247ed89a1a53869aa92cc2ab4ad->enter($__internal_b998b509ed6bc42ea8100a877d7394fc8c2a2247ed89a1a53869aa92cc2ab4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d4315ca93c90209601dc074082f644a86acfd15ace515f9e935183fc3556fda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4315ca93c90209601dc074082f644a86acfd15ace515f9e935183fc3556fda3->enter($__internal_d4315ca93c90209601dc074082f644a86acfd15ace515f9e935183fc3556fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 87
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 88
            $context["required"] = false;
        }
        // line 91
        echo "<select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 92
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 93
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 95
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 96
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 97
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 98
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 99
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 102
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 103
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 104
        echo "</select>
";
        
        $__internal_d4315ca93c90209601dc074082f644a86acfd15ace515f9e935183fc3556fda3->leave($__internal_d4315ca93c90209601dc074082f644a86acfd15ace515f9e935183fc3556fda3_prof);

        
        $__internal_b998b509ed6bc42ea8100a877d7394fc8c2a2247ed89a1a53869aa92cc2ab4ad->leave($__internal_b998b509ed6bc42ea8100a877d7394fc8c2a2247ed89a1a53869aa92cc2ab4ad_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_dce9925876d7e34a3b11858cc4f7830e6d5d502392cb2da705ee1f6c1bebb471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce9925876d7e34a3b11858cc4f7830e6d5d502392cb2da705ee1f6c1bebb471->enter($__internal_dce9925876d7e34a3b11858cc4f7830e6d5d502392cb2da705ee1f6c1bebb471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2a7351e3b44b5a1180cf7aee2dee644ee926388d5afc15d073ea670848bdd7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7351e3b44b5a1180cf7aee2dee644ee926388d5afc15d073ea670848bdd7af->enter($__internal_2a7351e3b44b5a1180cf7aee2dee644ee926388d5afc15d073ea670848bdd7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_2a7351e3b44b5a1180cf7aee2dee644ee926388d5afc15d073ea670848bdd7af->leave($__internal_2a7351e3b44b5a1180cf7aee2dee644ee926388d5afc15d073ea670848bdd7af_prof);

        
        $__internal_dce9925876d7e34a3b11858cc4f7830e6d5d502392cb2da705ee1f6c1bebb471->leave($__internal_dce9925876d7e34a3b11858cc4f7830e6d5d502392cb2da705ee1f6c1bebb471_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_006eea7f69640aa4bf56ad80983f7933bfb9731a6113c76f3e2ce67a55982ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006eea7f69640aa4bf56ad80983f7933bfb9731a6113c76f3e2ce67a55982ae4->enter($__internal_006eea7f69640aa4bf56ad80983f7933bfb9731a6113c76f3e2ce67a55982ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_437d28007adc067f8827901dc0939255548647ca2e084eaa8f73a69b6eb7e98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437d28007adc067f8827901dc0939255548647ca2e084eaa8f73a69b6eb7e98c->enter($__internal_437d28007adc067f8827901dc0939255548647ca2e084eaa8f73a69b6eb7e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 116
        echo "<div class=\"col-sm-10\">";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</div>";
        
        $__internal_437d28007adc067f8827901dc0939255548647ca2e084eaa8f73a69b6eb7e98c->leave($__internal_437d28007adc067f8827901dc0939255548647ca2e084eaa8f73a69b6eb7e98c_prof);

        
        $__internal_006eea7f69640aa4bf56ad80983f7933bfb9731a6113c76f3e2ce67a55982ae4->leave($__internal_006eea7f69640aa4bf56ad80983f7933bfb9731a6113c76f3e2ce67a55982ae4_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  513 => 121,  507 => 119,  505 => 118,  501 => 117,  499 => 116,  490 => 115,  475 => 110,  466 => 108,  455 => 104,  453 => 103,  451 => 102,  445 => 99,  443 => 98,  441 => 97,  439 => 96,  437 => 95,  428 => 93,  426 => 92,  419 => 91,  416 => 88,  414 => 87,  405 => 86,  392 => 82,  389 => 81,  386 => 80,  383 => 79,  374 => 78,  359 => 74,  356 => 73,  347 => 72,  326 => 68,  317 => 66,  302 => 62,  293 => 60,  278 => 57,  269 => 55,  254 => 50,  245 => 48,  233 => 44,  226 => 41,  221 => 39,  218 => 37,  211 => 34,  206 => 32,  203 => 30,  201 => 29,  199 => 28,  197 => 27,  188 => 26,  177 => 23,  173 => 21,  160 => 19,  157 => 17,  144 => 15,  142 => 14,  140 => 12,  131 => 11,  118 => 7,  113 => 6,  107 => 4,  105 => 3,  100 => 2,  91 => 1,  81 => 115,  79 => 108,  77 => 86,  75 => 78,  72 => 77,  70 => 72,  67 => 71,  65 => 66,  62 => 65,  60 => 60,  58 => 55,  54 => 53,  52 => 48,  49 => 47,  47 => 26,  44 => 25,  42 => 11,  39 => 10,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_widget_compound %}
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
        <div class=\"form-group\">
{#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
            {{ form_label(form) }}
{#            {{ form_errors(form) }}#}
            {{ form_widget(form, {'attr': attr}) }}
        </div>
    {% else %}
        <div class=\"form-group\">
{#            {{ form_label(form, \"\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}#}
            {{ form_label(form) }}
{#            {{ form_errors(form) }}#}
            {{ form_widget(form, {'attr': attr}) }}
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
{%- endblock choice_widget_expanded -%}", ":form:fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/form/fields.html.twig");
    }
}
