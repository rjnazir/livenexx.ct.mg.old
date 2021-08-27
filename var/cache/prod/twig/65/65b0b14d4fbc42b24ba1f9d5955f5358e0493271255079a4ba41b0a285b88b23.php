<?php

/* form/custom_fields.html.twig */
class __TwigTemplate_3932815de55bcd7490b09876c9437781fbf3a767e672ed4e1372087bfcf99f41 extends Twig_Template
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
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 4
            echo "            <ul>
                ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 14
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 15
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        ";
        }
        // line 18
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>
";
    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 24
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 25
        if ((($context["type"] ?? null) == "file")) {
            // line 26
            echo "        <input class=\"inputfile\" type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" ";
            }
            echo "  />
        ";
            // line 28
            echo "    ";
        } else {
            // line 30
            echo "        <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty(($context["value"] ?? null))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
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
    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        ob_start();
        // line 37
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 38
        if (($context["compound"] ?? null)) {
            // line 39
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 43
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
            echo "
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                    </div> 
                </div>
            </div> 
        ";
        } else {
            // line 50
            echo "            <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) ? ("has-error") : (""));
            echo "\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
            ";
            // line 54
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
                        ";
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
            echo "
                        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
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
    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
";
    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 84
        echo "    <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
";
    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        // line 89
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 90
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
    </div>
";
    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 96
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'widget')));
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 102
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 103
            $context["required"] = false;
        }
        // line 106
        echo "    <select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 107
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 108
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 110
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 111
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 112
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 113
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 114
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 117
        $context["options"] = ($context["choices"] ?? null);
        // line 118
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 119
        echo "</select>
";
    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>
";
    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 130
        echo "<div class=\"col-sm-10\">";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "form/custom_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  424 => 135,  418 => 133,  416 => 132,  412 => 131,  410 => 130,  407 => 129,  398 => 125,  395 => 123,  390 => 119,  388 => 118,  386 => 117,  380 => 114,  378 => 113,  376 => 112,  374 => 111,  372 => 110,  363 => 108,  361 => 107,  354 => 106,  351 => 103,  349 => 102,  346 => 101,  339 => 98,  336 => 97,  333 => 96,  330 => 95,  327 => 94,  318 => 90,  315 => 89,  312 => 88,  297 => 84,  294 => 82,  285 => 78,  282 => 76,  273 => 72,  270 => 70,  261 => 66,  258 => 64,  252 => 60,  244 => 56,  240 => 55,  235 => 54,  228 => 50,  220 => 45,  216 => 44,  211 => 43,  204 => 39,  202 => 38,  200 => 37,  197 => 36,  194 => 35,  189 => 32,  185 => 31,  172 => 30,  169 => 28,  156 => 26,  154 => 25,  152 => 24,  149 => 23,  142 => 19,  137 => 18,  131 => 16,  129 => 15,  124 => 14,  121 => 13,  116 => 10,  112 => 8,  103 => 6,  99 => 5,  96 => 4,  93 => 3,  90 => 2,  87 => 1,  83 => 129,  81 => 123,  79 => 101,  77 => 94,  74 => 93,  72 => 88,  69 => 87,  67 => 82,  64 => 81,  62 => 76,  59 => 75,  57 => 70,  54 => 69,  52 => 64,  49 => 63,  47 => 35,  44 => 34,  42 => 23,  39 => 22,  37 => 13,  34 => 12,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/custom_fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\custom_fields.html.twig");
    }
}
