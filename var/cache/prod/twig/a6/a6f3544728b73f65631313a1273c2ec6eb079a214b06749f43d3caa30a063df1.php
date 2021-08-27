<?php

/* form/fields.html.twig */
class __TwigTemplate_b35b28bf67645adc7dc28788b5c0a02fba108116320f418793089652a5c4a601 extends Twig_Template
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
    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 2
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 3
        if (twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array()))) {
            // line 4
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
        ";
        }
        // line 6
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
    </div>
";
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 14
        if ((($context["type"] ?? null) == "file")) {
            // line 15
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
            // line 17
            echo "    ";
        } else {
            // line 19
            echo "            <input type=\"";
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
            // line 21
            echo "
    ";
        }
        // line 23
        echo "
";
    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 29
        if (($context["compound"] ?? null)) {
            // line 30
            echo "        <div class=\"form-group\">
";
            // line 32
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
";
            // line 34
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
            echo "
        </div>
    ";
        } else {
            // line 37
            echo "        <div class=\"form-group\">
";
            // line 39
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            echo "
";
            // line 41
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("attr" => ($context["attr"] ?? null)));
            echo "
        </div>
    ";
        }
        // line 44
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
";
    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 68
        echo "        <input oninvalid=\"setErrorClass(\$(this));\" class=\"checkbox-custom-style\" type=\"checkbox\" ";
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

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"text_widget2\">
        <input oninvalid=\"setErrorClass(\$(this));\" type=\"text\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
    </div>
";
    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 80
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" => $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'widget')));
            // line 81
            echo "    ";
        }
        // line 82
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 87
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 88
            $context["required"] = false;
        }
        // line 91
        echo "<select oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 92
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 93
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? null) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 95
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 96
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 97
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 98
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 99
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 102
        $context["options"] = ($context["choices"] ?? null);
        // line 103
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 104
        echo "</select>
";
    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>
";
    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 116
        echo "<div class=\"col-sm-10\">";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 119
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => ($context["choice_translation_domain"] ?? null)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 121,  357 => 119,  355 => 118,  351 => 117,  349 => 116,  346 => 115,  337 => 110,  334 => 108,  329 => 104,  327 => 103,  325 => 102,  319 => 99,  317 => 98,  315 => 97,  313 => 96,  311 => 95,  302 => 93,  300 => 92,  293 => 91,  290 => 88,  288 => 87,  285 => 86,  278 => 82,  275 => 81,  272 => 80,  269 => 79,  266 => 78,  257 => 74,  254 => 73,  251 => 72,  236 => 68,  233 => 66,  224 => 62,  221 => 60,  212 => 57,  209 => 55,  200 => 50,  197 => 48,  191 => 44,  184 => 41,  179 => 39,  176 => 37,  169 => 34,  164 => 32,  161 => 30,  159 => 29,  157 => 28,  155 => 27,  152 => 26,  147 => 23,  143 => 21,  130 => 19,  127 => 17,  114 => 15,  112 => 14,  110 => 12,  107 => 11,  100 => 7,  95 => 6,  89 => 4,  87 => 3,  82 => 2,  79 => 1,  75 => 115,  73 => 108,  71 => 86,  69 => 78,  66 => 77,  64 => 72,  61 => 71,  59 => 66,  56 => 65,  54 => 60,  52 => 55,  48 => 53,  46 => 48,  43 => 47,  41 => 26,  38 => 25,  36 => 11,  33 => 10,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
