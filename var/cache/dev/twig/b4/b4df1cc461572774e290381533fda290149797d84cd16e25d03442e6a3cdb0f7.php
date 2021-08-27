<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_2600f674e13a27a6979bd7df738da1ead82844a48af293bde02575527a349d48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7472bcaa28bea4638311929f6a48a59e750aacb9b419c79c0e64a6a2ae99410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7472bcaa28bea4638311929f6a48a59e750aacb9b419c79c0e64a6a2ae99410->enter($__internal_b7472bcaa28bea4638311929f6a48a59e750aacb9b419c79c0e64a6a2ae99410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d60346a92551f0820dadf0a29146cfa432822d1b796bb1e5d4440c88a9fc1e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60346a92551f0820dadf0a29146cfa432822d1b796bb1e5d4440c88a9fc1e6b->enter($__internal_d60346a92551f0820dadf0a29146cfa432822d1b796bb1e5d4440c88a9fc1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b7472bcaa28bea4638311929f6a48a59e750aacb9b419c79c0e64a6a2ae99410->leave($__internal_b7472bcaa28bea4638311929f6a48a59e750aacb9b419c79c0e64a6a2ae99410_prof);

        
        $__internal_d60346a92551f0820dadf0a29146cfa432822d1b796bb1e5d4440c88a9fc1e6b->leave($__internal_d60346a92551f0820dadf0a29146cfa432822d1b796bb1e5d4440c88a9fc1e6b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e621041ae8e72a8c12eaf654e2483357397aac627e782021c1daafdb341fd4aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e621041ae8e72a8c12eaf654e2483357397aac627e782021c1daafdb341fd4aa->enter($__internal_e621041ae8e72a8c12eaf654e2483357397aac627e782021c1daafdb341fd4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a7d1c05548d25a4fbdc2c4eb73c7c7a0995abe58682c0340a8e781a995d92c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d1c05548d25a4fbdc2c4eb73c7c7a0995abe58682c0340a8e781a995d92c68->enter($__internal_a7d1c05548d25a4fbdc2c4eb73c7c7a0995abe58682c0340a8e781a995d92c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a7d1c05548d25a4fbdc2c4eb73c7c7a0995abe58682c0340a8e781a995d92c68->leave($__internal_a7d1c05548d25a4fbdc2c4eb73c7c7a0995abe58682c0340a8e781a995d92c68_prof);

        
        $__internal_e621041ae8e72a8c12eaf654e2483357397aac627e782021c1daafdb341fd4aa->leave($__internal_e621041ae8e72a8c12eaf654e2483357397aac627e782021c1daafdb341fd4aa_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b720f07c5ca8f014e112a94b6cc42dd3201eb10e9a9390d1985fc746396b2e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b720f07c5ca8f014e112a94b6cc42dd3201eb10e9a9390d1985fc746396b2e0d->enter($__internal_b720f07c5ca8f014e112a94b6cc42dd3201eb10e9a9390d1985fc746396b2e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_b8b854f6e71275d0ae0b56366e381c98164a03c4c64e707aaa997bec2b4d5bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b854f6e71275d0ae0b56366e381c98164a03c4c64e707aaa997bec2b4d5bc0->enter($__internal_b8b854f6e71275d0ae0b56366e381c98164a03c4c64e707aaa997bec2b4d5bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_b8b854f6e71275d0ae0b56366e381c98164a03c4c64e707aaa997bec2b4d5bc0->leave($__internal_b8b854f6e71275d0ae0b56366e381c98164a03c4c64e707aaa997bec2b4d5bc0_prof);

        
        $__internal_b720f07c5ca8f014e112a94b6cc42dd3201eb10e9a9390d1985fc746396b2e0d->leave($__internal_b720f07c5ca8f014e112a94b6cc42dd3201eb10e9a9390d1985fc746396b2e0d_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_34ccdb6cc979382c015679590f2042ca4fcf94eeee25109f6ff5709f3609f43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ccdb6cc979382c015679590f2042ca4fcf94eeee25109f6ff5709f3609f43a->enter($__internal_34ccdb6cc979382c015679590f2042ca4fcf94eeee25109f6ff5709f3609f43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_337c2274f5319502301c61b3af5d6036b2414de3de85663a18ab4eb60210107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c2274f5319502301c61b3af5d6036b2414de3de85663a18ab4eb60210107f->enter($__internal_337c2274f5319502301c61b3af5d6036b2414de3de85663a18ab4eb60210107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_337c2274f5319502301c61b3af5d6036b2414de3de85663a18ab4eb60210107f->leave($__internal_337c2274f5319502301c61b3af5d6036b2414de3de85663a18ab4eb60210107f_prof);

        
        $__internal_34ccdb6cc979382c015679590f2042ca4fcf94eeee25109f6ff5709f3609f43a->leave($__internal_34ccdb6cc979382c015679590f2042ca4fcf94eeee25109f6ff5709f3609f43a_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_48ecb77ebd8694f221d91ae7ccc117963a313bf8cba70920823a04dc544f8bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ecb77ebd8694f221d91ae7ccc117963a313bf8cba70920823a04dc544f8bff->enter($__internal_48ecb77ebd8694f221d91ae7ccc117963a313bf8cba70920823a04dc544f8bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_bac98a5ea6d10d1de6910e9c398c0120b4e12a700914951cff681931dc527299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac98a5ea6d10d1de6910e9c398c0120b4e12a700914951cff681931dc527299->enter($__internal_bac98a5ea6d10d1de6910e9c398c0120b4e12a700914951cff681931dc527299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e0ead62c07d9de0b0fa1d4af776c249d236d1fcf1d112b07c7a70b838f525ef7 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_99ed441ef2636548ea465417a95f639457e8f1de09f74d14f12ac2cec784d0de = "{{") && ('' === $__internal_99ed441ef2636548ea465417a95f639457e8f1de09f74d14f12ac2cec784d0de || 0 === strpos($__internal_e0ead62c07d9de0b0fa1d4af776c249d236d1fcf1d112b07c7a70b838f525ef7, $__internal_99ed441ef2636548ea465417a95f639457e8f1de09f74d14f12ac2cec784d0de)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_bac98a5ea6d10d1de6910e9c398c0120b4e12a700914951cff681931dc527299->leave($__internal_bac98a5ea6d10d1de6910e9c398c0120b4e12a700914951cff681931dc527299_prof);

        
        $__internal_48ecb77ebd8694f221d91ae7ccc117963a313bf8cba70920823a04dc544f8bff->leave($__internal_48ecb77ebd8694f221d91ae7ccc117963a313bf8cba70920823a04dc544f8bff_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6d18adbe02735cd23951acf06da061e8a169677ba10ad04be0946fb70d12ff93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d18adbe02735cd23951acf06da061e8a169677ba10ad04be0946fb70d12ff93->enter($__internal_6d18adbe02735cd23951acf06da061e8a169677ba10ad04be0946fb70d12ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_7235fd845f6f7154da4b9cae195e03f7a8430fb7e0ce3adadd17126f92ee689e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7235fd845f6f7154da4b9cae195e03f7a8430fb7e0ce3adadd17126f92ee689e->enter($__internal_7235fd845f6f7154da4b9cae195e03f7a8430fb7e0ce3adadd17126f92ee689e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_7235fd845f6f7154da4b9cae195e03f7a8430fb7e0ce3adadd17126f92ee689e->leave($__internal_7235fd845f6f7154da4b9cae195e03f7a8430fb7e0ce3adadd17126f92ee689e_prof);

        
        $__internal_6d18adbe02735cd23951acf06da061e8a169677ba10ad04be0946fb70d12ff93->leave($__internal_6d18adbe02735cd23951acf06da061e8a169677ba10ad04be0946fb70d12ff93_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_9cc33055aeeac0f309caef50d2d1ecfd52a0971b6abd83e63ff4c99161ba92d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc33055aeeac0f309caef50d2d1ecfd52a0971b6abd83e63ff4c99161ba92d5->enter($__internal_9cc33055aeeac0f309caef50d2d1ecfd52a0971b6abd83e63ff4c99161ba92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4a2cfdffa14150c7b7e72b171f3ea854700a8040e679ba8f195be3d4913ebce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2cfdffa14150c7b7e72b171f3ea854700a8040e679ba8f195be3d4913ebce7->enter($__internal_4a2cfdffa14150c7b7e72b171f3ea854700a8040e679ba8f195be3d4913ebce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_4a2cfdffa14150c7b7e72b171f3ea854700a8040e679ba8f195be3d4913ebce7->leave($__internal_4a2cfdffa14150c7b7e72b171f3ea854700a8040e679ba8f195be3d4913ebce7_prof);

        
        $__internal_9cc33055aeeac0f309caef50d2d1ecfd52a0971b6abd83e63ff4c99161ba92d5->leave($__internal_9cc33055aeeac0f309caef50d2d1ecfd52a0971b6abd83e63ff4c99161ba92d5_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a1189ffcca53a8103d29b506339c48e132dd0b78680b05842ccf37be4db80689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1189ffcca53a8103d29b506339c48e132dd0b78680b05842ccf37be4db80689->enter($__internal_a1189ffcca53a8103d29b506339c48e132dd0b78680b05842ccf37be4db80689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b46e6153d8a561a4f7077b102073b954371c43782cb2f919595d82afcf683956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46e6153d8a561a4f7077b102073b954371c43782cb2f919595d82afcf683956->enter($__internal_b46e6153d8a561a4f7077b102073b954371c43782cb2f919595d82afcf683956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_b46e6153d8a561a4f7077b102073b954371c43782cb2f919595d82afcf683956->leave($__internal_b46e6153d8a561a4f7077b102073b954371c43782cb2f919595d82afcf683956_prof);

        
        $__internal_a1189ffcca53a8103d29b506339c48e132dd0b78680b05842ccf37be4db80689->leave($__internal_a1189ffcca53a8103d29b506339c48e132dd0b78680b05842ccf37be4db80689_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_76270228921e3de4c4b4b1477153cf900b30c3ff6fc37c2efdcb1f1d79dac700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76270228921e3de4c4b4b1477153cf900b30c3ff6fc37c2efdcb1f1d79dac700->enter($__internal_76270228921e3de4c4b4b1477153cf900b30c3ff6fc37c2efdcb1f1d79dac700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_817becb836f3fd1c66b2d6a8c49ead356f1fdd706755568c1ea3ac9832db5ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817becb836f3fd1c66b2d6a8c49ead356f1fdd706755568c1ea3ac9832db5ae3->enter($__internal_817becb836f3fd1c66b2d6a8c49ead356f1fdd706755568c1ea3ac9832db5ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_817becb836f3fd1c66b2d6a8c49ead356f1fdd706755568c1ea3ac9832db5ae3->leave($__internal_817becb836f3fd1c66b2d6a8c49ead356f1fdd706755568c1ea3ac9832db5ae3_prof);

        
        $__internal_76270228921e3de4c4b4b1477153cf900b30c3ff6fc37c2efdcb1f1d79dac700->leave($__internal_76270228921e3de4c4b4b1477153cf900b30c3ff6fc37c2efdcb1f1d79dac700_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_0b727d31081fab30cb6aff9e3903cce3270819e09a35a3d7527ddc622fb378e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b727d31081fab30cb6aff9e3903cce3270819e09a35a3d7527ddc622fb378e2->enter($__internal_0b727d31081fab30cb6aff9e3903cce3270819e09a35a3d7527ddc622fb378e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_30cc1a2ad829e9f83c107dfaf70f4eb3681d1bcaf5fb7bbde806fe652c532c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cc1a2ad829e9f83c107dfaf70f4eb3681d1bcaf5fb7bbde806fe652c532c56->enter($__internal_30cc1a2ad829e9f83c107dfaf70f4eb3681d1bcaf5fb7bbde806fe652c532c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_30cc1a2ad829e9f83c107dfaf70f4eb3681d1bcaf5fb7bbde806fe652c532c56->leave($__internal_30cc1a2ad829e9f83c107dfaf70f4eb3681d1bcaf5fb7bbde806fe652c532c56_prof);

        
        $__internal_0b727d31081fab30cb6aff9e3903cce3270819e09a35a3d7527ddc622fb378e2->leave($__internal_0b727d31081fab30cb6aff9e3903cce3270819e09a35a3d7527ddc622fb378e2_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_da649e7712e5e405cce5f62688219774dfd6095aab96c64f404edc829d7a2b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da649e7712e5e405cce5f62688219774dfd6095aab96c64f404edc829d7a2b9f->enter($__internal_da649e7712e5e405cce5f62688219774dfd6095aab96c64f404edc829d7a2b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b6d3273a8d80e931c91e47f27de32ac6bfdec0472a1119ae7a241a82b1c36621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d3273a8d80e931c91e47f27de32ac6bfdec0472a1119ae7a241a82b1c36621->enter($__internal_b6d3273a8d80e931c91e47f27de32ac6bfdec0472a1119ae7a241a82b1c36621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b6d3273a8d80e931c91e47f27de32ac6bfdec0472a1119ae7a241a82b1c36621->leave($__internal_b6d3273a8d80e931c91e47f27de32ac6bfdec0472a1119ae7a241a82b1c36621_prof);

        
        $__internal_da649e7712e5e405cce5f62688219774dfd6095aab96c64f404edc829d7a2b9f->leave($__internal_da649e7712e5e405cce5f62688219774dfd6095aab96c64f404edc829d7a2b9f_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7c5c943e2d5caf30c672b4d02eb27c46101a6a1133c3437df125e56987d343d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5c943e2d5caf30c672b4d02eb27c46101a6a1133c3437df125e56987d343d9->enter($__internal_7c5c943e2d5caf30c672b4d02eb27c46101a6a1133c3437df125e56987d343d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_af151a79e51d83ef95c2ad5b87a9522aa1e7c42095f4c3015531d3e3ded44793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af151a79e51d83ef95c2ad5b87a9522aa1e7c42095f4c3015531d3e3ded44793->enter($__internal_af151a79e51d83ef95c2ad5b87a9522aa1e7c42095f4c3015531d3e3ded44793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_af151a79e51d83ef95c2ad5b87a9522aa1e7c42095f4c3015531d3e3ded44793->leave($__internal_af151a79e51d83ef95c2ad5b87a9522aa1e7c42095f4c3015531d3e3ded44793_prof);

        
        $__internal_7c5c943e2d5caf30c672b4d02eb27c46101a6a1133c3437df125e56987d343d9->leave($__internal_7c5c943e2d5caf30c672b4d02eb27c46101a6a1133c3437df125e56987d343d9_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_90530da1cc0633c62219be7e2a74a7dabebff580229724bd2d7425b9e2e41723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90530da1cc0633c62219be7e2a74a7dabebff580229724bd2d7425b9e2e41723->enter($__internal_90530da1cc0633c62219be7e2a74a7dabebff580229724bd2d7425b9e2e41723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b39da7a7af0ac901c6ba8c6a925bd8e91aa47fe08013d811faf8872b0d730ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39da7a7af0ac901c6ba8c6a925bd8e91aa47fe08013d811faf8872b0d730ffd->enter($__internal_b39da7a7af0ac901c6ba8c6a925bd8e91aa47fe08013d811faf8872b0d730ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_b39da7a7af0ac901c6ba8c6a925bd8e91aa47fe08013d811faf8872b0d730ffd->leave($__internal_b39da7a7af0ac901c6ba8c6a925bd8e91aa47fe08013d811faf8872b0d730ffd_prof);

        
        $__internal_90530da1cc0633c62219be7e2a74a7dabebff580229724bd2d7425b9e2e41723->leave($__internal_90530da1cc0633c62219be7e2a74a7dabebff580229724bd2d7425b9e2e41723_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a23f98ba7aac4c11e79ede352568a689fdbb749153bbb76275ea7a663486fce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23f98ba7aac4c11e79ede352568a689fdbb749153bbb76275ea7a663486fce7->enter($__internal_a23f98ba7aac4c11e79ede352568a689fdbb749153bbb76275ea7a663486fce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_ade0925bb75e772c3f5859b2ce5bea9f76c156b41c60495598ac0875931f1d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade0925bb75e772c3f5859b2ce5bea9f76c156b41c60495598ac0875931f1d4e->enter($__internal_ade0925bb75e772c3f5859b2ce5bea9f76c156b41c60495598ac0875931f1d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_ade0925bb75e772c3f5859b2ce5bea9f76c156b41c60495598ac0875931f1d4e->leave($__internal_ade0925bb75e772c3f5859b2ce5bea9f76c156b41c60495598ac0875931f1d4e_prof);

        
        $__internal_a23f98ba7aac4c11e79ede352568a689fdbb749153bbb76275ea7a663486fce7->leave($__internal_a23f98ba7aac4c11e79ede352568a689fdbb749153bbb76275ea7a663486fce7_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c7c5d3096b2f3bdc275a1e57f8de65974d04e862056cb7659a9d0ac6d2220a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c5d3096b2f3bdc275a1e57f8de65974d04e862056cb7659a9d0ac6d2220a0d->enter($__internal_c7c5d3096b2f3bdc275a1e57f8de65974d04e862056cb7659a9d0ac6d2220a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_d14d5b64db67bda56818720f7c47e16586e5c3d9ebba92eb1f6a474d886ea2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14d5b64db67bda56818720f7c47e16586e5c3d9ebba92eb1f6a474d886ea2b9->enter($__internal_d14d5b64db67bda56818720f7c47e16586e5c3d9ebba92eb1f6a474d886ea2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_d14d5b64db67bda56818720f7c47e16586e5c3d9ebba92eb1f6a474d886ea2b9->leave($__internal_d14d5b64db67bda56818720f7c47e16586e5c3d9ebba92eb1f6a474d886ea2b9_prof);

        
        $__internal_c7c5d3096b2f3bdc275a1e57f8de65974d04e862056cb7659a9d0ac6d2220a0d->leave($__internal_c7c5d3096b2f3bdc275a1e57f8de65974d04e862056cb7659a9d0ac6d2220a0d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_38fce0e488be0120dca751ec0f087a9bfb32bde3ef2d841e8062f63e0c6534ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fce0e488be0120dca751ec0f087a9bfb32bde3ef2d841e8062f63e0c6534ef->enter($__internal_38fce0e488be0120dca751ec0f087a9bfb32bde3ef2d841e8062f63e0c6534ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_3df7e1c358b679ff994f751d776507bea925dc67283a1d0911339ebbb025da91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df7e1c358b679ff994f751d776507bea925dc67283a1d0911339ebbb025da91->enter($__internal_3df7e1c358b679ff994f751d776507bea925dc67283a1d0911339ebbb025da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3df7e1c358b679ff994f751d776507bea925dc67283a1d0911339ebbb025da91->leave($__internal_3df7e1c358b679ff994f751d776507bea925dc67283a1d0911339ebbb025da91_prof);

        
        $__internal_38fce0e488be0120dca751ec0f087a9bfb32bde3ef2d841e8062f63e0c6534ef->leave($__internal_38fce0e488be0120dca751ec0f087a9bfb32bde3ef2d841e8062f63e0c6534ef_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_64e4008e63dbdaad80075697b7032514562ca547eb6ff61173d6be95368bc2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e4008e63dbdaad80075697b7032514562ca547eb6ff61173d6be95368bc2c4->enter($__internal_64e4008e63dbdaad80075697b7032514562ca547eb6ff61173d6be95368bc2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e9bf35696a1b48a04e2f63a4049dd58e3399b30f055f08aa23bc760c4ddcbdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bf35696a1b48a04e2f63a4049dd58e3399b30f055f08aa23bc760c4ddcbdfa->enter($__internal_e9bf35696a1b48a04e2f63a4049dd58e3399b30f055f08aa23bc760c4ddcbdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e9bf35696a1b48a04e2f63a4049dd58e3399b30f055f08aa23bc760c4ddcbdfa->leave($__internal_e9bf35696a1b48a04e2f63a4049dd58e3399b30f055f08aa23bc760c4ddcbdfa_prof);

        
        $__internal_64e4008e63dbdaad80075697b7032514562ca547eb6ff61173d6be95368bc2c4->leave($__internal_64e4008e63dbdaad80075697b7032514562ca547eb6ff61173d6be95368bc2c4_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_50b8076224deba70f5a51563f346223b1530c5faaa072b315762ce4fa40464e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b8076224deba70f5a51563f346223b1530c5faaa072b315762ce4fa40464e9->enter($__internal_50b8076224deba70f5a51563f346223b1530c5faaa072b315762ce4fa40464e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3a02b854fb98c0f8ad4b70c8b81fd9db1a20d4c535bc57122866dbce9576c6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a02b854fb98c0f8ad4b70c8b81fd9db1a20d4c535bc57122866dbce9576c6f7->enter($__internal_3a02b854fb98c0f8ad4b70c8b81fd9db1a20d4c535bc57122866dbce9576c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3a02b854fb98c0f8ad4b70c8b81fd9db1a20d4c535bc57122866dbce9576c6f7->leave($__internal_3a02b854fb98c0f8ad4b70c8b81fd9db1a20d4c535bc57122866dbce9576c6f7_prof);

        
        $__internal_50b8076224deba70f5a51563f346223b1530c5faaa072b315762ce4fa40464e9->leave($__internal_50b8076224deba70f5a51563f346223b1530c5faaa072b315762ce4fa40464e9_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7bc655e67c6aa7daaf10f65a70e02ea786fb2d2270a4a16d766d74d87bb4c273 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc655e67c6aa7daaf10f65a70e02ea786fb2d2270a4a16d766d74d87bb4c273->enter($__internal_7bc655e67c6aa7daaf10f65a70e02ea786fb2d2270a4a16d766d74d87bb4c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2a21b143314829ae10168cc019e8587d04e88de733388cb54e39f2b7e4cc5e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a21b143314829ae10168cc019e8587d04e88de733388cb54e39f2b7e4cc5e79->enter($__internal_2a21b143314829ae10168cc019e8587d04e88de733388cb54e39f2b7e4cc5e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_2a21b143314829ae10168cc019e8587d04e88de733388cb54e39f2b7e4cc5e79->leave($__internal_2a21b143314829ae10168cc019e8587d04e88de733388cb54e39f2b7e4cc5e79_prof);

        
        $__internal_7bc655e67c6aa7daaf10f65a70e02ea786fb2d2270a4a16d766d74d87bb4c273->leave($__internal_7bc655e67c6aa7daaf10f65a70e02ea786fb2d2270a4a16d766d74d87bb4c273_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_dbab25091194fb22e189acc9829d1bb321f5546ce102fc3839c5c83413ecea66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbab25091194fb22e189acc9829d1bb321f5546ce102fc3839c5c83413ecea66->enter($__internal_dbab25091194fb22e189acc9829d1bb321f5546ce102fc3839c5c83413ecea66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7172dd0e0aa65738f1546ac5c2d9cfc740249aed3c9754b9d6a704fc0183130c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7172dd0e0aa65738f1546ac5c2d9cfc740249aed3c9754b9d6a704fc0183130c->enter($__internal_7172dd0e0aa65738f1546ac5c2d9cfc740249aed3c9754b9d6a704fc0183130c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_7172dd0e0aa65738f1546ac5c2d9cfc740249aed3c9754b9d6a704fc0183130c->leave($__internal_7172dd0e0aa65738f1546ac5c2d9cfc740249aed3c9754b9d6a704fc0183130c_prof);

        
        $__internal_dbab25091194fb22e189acc9829d1bb321f5546ce102fc3839c5c83413ecea66->leave($__internal_dbab25091194fb22e189acc9829d1bb321f5546ce102fc3839c5c83413ecea66_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_27860d5361bc5685f070a24aca09455b8e032925335782a6d7c4ef9aa5d583fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27860d5361bc5685f070a24aca09455b8e032925335782a6d7c4ef9aa5d583fa->enter($__internal_27860d5361bc5685f070a24aca09455b8e032925335782a6d7c4ef9aa5d583fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_567e8c15514fff7e89e13dd692e2d4c18760d1f1bb6c82930237b667b6c72292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567e8c15514fff7e89e13dd692e2d4c18760d1f1bb6c82930237b667b6c72292->enter($__internal_567e8c15514fff7e89e13dd692e2d4c18760d1f1bb6c82930237b667b6c72292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_567e8c15514fff7e89e13dd692e2d4c18760d1f1bb6c82930237b667b6c72292->leave($__internal_567e8c15514fff7e89e13dd692e2d4c18760d1f1bb6c82930237b667b6c72292_prof);

        
        $__internal_27860d5361bc5685f070a24aca09455b8e032925335782a6d7c4ef9aa5d583fa->leave($__internal_27860d5361bc5685f070a24aca09455b8e032925335782a6d7c4ef9aa5d583fa_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_62e327134ce7b893fad3ed6f7223fb8f9bda75bf0747412f1975a20bae74ce37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e327134ce7b893fad3ed6f7223fb8f9bda75bf0747412f1975a20bae74ce37->enter($__internal_62e327134ce7b893fad3ed6f7223fb8f9bda75bf0747412f1975a20bae74ce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_aafc52911f9f25329bdb7c8a1e3ab9dfd73add352e9eeef5ecf0c3bf3529efd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafc52911f9f25329bdb7c8a1e3ab9dfd73add352e9eeef5ecf0c3bf3529efd3->enter($__internal_aafc52911f9f25329bdb7c8a1e3ab9dfd73add352e9eeef5ecf0c3bf3529efd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aafc52911f9f25329bdb7c8a1e3ab9dfd73add352e9eeef5ecf0c3bf3529efd3->leave($__internal_aafc52911f9f25329bdb7c8a1e3ab9dfd73add352e9eeef5ecf0c3bf3529efd3_prof);

        
        $__internal_62e327134ce7b893fad3ed6f7223fb8f9bda75bf0747412f1975a20bae74ce37->leave($__internal_62e327134ce7b893fad3ed6f7223fb8f9bda75bf0747412f1975a20bae74ce37_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4b3b2f93ff1ec0947f4f860eaf0d9b303c587395ede667f15333d83ca560f114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3b2f93ff1ec0947f4f860eaf0d9b303c587395ede667f15333d83ca560f114->enter($__internal_4b3b2f93ff1ec0947f4f860eaf0d9b303c587395ede667f15333d83ca560f114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_df1597a58fb904b3700b54ecf221972ebbca74b655b96d7e4c632682e479106a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1597a58fb904b3700b54ecf221972ebbca74b655b96d7e4c632682e479106a->enter($__internal_df1597a58fb904b3700b54ecf221972ebbca74b655b96d7e4c632682e479106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_df1597a58fb904b3700b54ecf221972ebbca74b655b96d7e4c632682e479106a->leave($__internal_df1597a58fb904b3700b54ecf221972ebbca74b655b96d7e4c632682e479106a_prof);

        
        $__internal_4b3b2f93ff1ec0947f4f860eaf0d9b303c587395ede667f15333d83ca560f114->leave($__internal_4b3b2f93ff1ec0947f4f860eaf0d9b303c587395ede667f15333d83ca560f114_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1efd02378b9d3a8b3a9c76bc32db824c63ffc4b5d4ddb79ea481b9f005e887c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efd02378b9d3a8b3a9c76bc32db824c63ffc4b5d4ddb79ea481b9f005e887c8->enter($__internal_1efd02378b9d3a8b3a9c76bc32db824c63ffc4b5d4ddb79ea481b9f005e887c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_8ec707864b3d86e5dffedc54004a91a1b332cea2213682c3dd9e7b2c10f78516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec707864b3d86e5dffedc54004a91a1b332cea2213682c3dd9e7b2c10f78516->enter($__internal_8ec707864b3d86e5dffedc54004a91a1b332cea2213682c3dd9e7b2c10f78516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ec707864b3d86e5dffedc54004a91a1b332cea2213682c3dd9e7b2c10f78516->leave($__internal_8ec707864b3d86e5dffedc54004a91a1b332cea2213682c3dd9e7b2c10f78516_prof);

        
        $__internal_1efd02378b9d3a8b3a9c76bc32db824c63ffc4b5d4ddb79ea481b9f005e887c8->leave($__internal_1efd02378b9d3a8b3a9c76bc32db824c63ffc4b5d4ddb79ea481b9f005e887c8_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a7e5f4de928223cb5dda16987d6b1f2a1f88f41c97df76e5a5471c44a6fa5c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e5f4de928223cb5dda16987d6b1f2a1f88f41c97df76e5a5471c44a6fa5c25->enter($__internal_a7e5f4de928223cb5dda16987d6b1f2a1f88f41c97df76e5a5471c44a6fa5c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3b7fbcb9c11ca568c082f0f05ef9fe3f6c51415cac7247be829a218775b1b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7fbcb9c11ca568c082f0f05ef9fe3f6c51415cac7247be829a218775b1b160->enter($__internal_3b7fbcb9c11ca568c082f0f05ef9fe3f6c51415cac7247be829a218775b1b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3b7fbcb9c11ca568c082f0f05ef9fe3f6c51415cac7247be829a218775b1b160->leave($__internal_3b7fbcb9c11ca568c082f0f05ef9fe3f6c51415cac7247be829a218775b1b160_prof);

        
        $__internal_a7e5f4de928223cb5dda16987d6b1f2a1f88f41c97df76e5a5471c44a6fa5c25->leave($__internal_a7e5f4de928223cb5dda16987d6b1f2a1f88f41c97df76e5a5471c44a6fa5c25_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_98bff88100b19a6f19dab05dfbf5f95cfe963f295bb15be37d76f36d5e525c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bff88100b19a6f19dab05dfbf5f95cfe963f295bb15be37d76f36d5e525c2d->enter($__internal_98bff88100b19a6f19dab05dfbf5f95cfe963f295bb15be37d76f36d5e525c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8724fe195e0853f8416522084c5c10ba0e4ec15c7a5354115d6517d5889a1835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8724fe195e0853f8416522084c5c10ba0e4ec15c7a5354115d6517d5889a1835->enter($__internal_8724fe195e0853f8416522084c5c10ba0e4ec15c7a5354115d6517d5889a1835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_8724fe195e0853f8416522084c5c10ba0e4ec15c7a5354115d6517d5889a1835->leave($__internal_8724fe195e0853f8416522084c5c10ba0e4ec15c7a5354115d6517d5889a1835_prof);

        
        $__internal_98bff88100b19a6f19dab05dfbf5f95cfe963f295bb15be37d76f36d5e525c2d->leave($__internal_98bff88100b19a6f19dab05dfbf5f95cfe963f295bb15be37d76f36d5e525c2d_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_035a97cc7a7718f833026a26f86873b6d8d5dd6e40cd00056298de29859c4c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035a97cc7a7718f833026a26f86873b6d8d5dd6e40cd00056298de29859c4c4e->enter($__internal_035a97cc7a7718f833026a26f86873b6d8d5dd6e40cd00056298de29859c4c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5c560da04e89b2b1adc25763814fba444179783dd24b3a778b59c8c55298b93d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c560da04e89b2b1adc25763814fba444179783dd24b3a778b59c8c55298b93d->enter($__internal_5c560da04e89b2b1adc25763814fba444179783dd24b3a778b59c8c55298b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_5c560da04e89b2b1adc25763814fba444179783dd24b3a778b59c8c55298b93d->leave($__internal_5c560da04e89b2b1adc25763814fba444179783dd24b3a778b59c8c55298b93d_prof);

        
        $__internal_035a97cc7a7718f833026a26f86873b6d8d5dd6e40cd00056298de29859c4c4e->leave($__internal_035a97cc7a7718f833026a26f86873b6d8d5dd6e40cd00056298de29859c4c4e_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0aa80d0ba3c312fba60201ed26452247e5a5eb7e3430bd39c98f4a4f4454d683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa80d0ba3c312fba60201ed26452247e5a5eb7e3430bd39c98f4a4f4454d683->enter($__internal_0aa80d0ba3c312fba60201ed26452247e5a5eb7e3430bd39c98f4a4f4454d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a5228c1150568307201f34063331539538dd01e05ea5114c586d9b8517cfcd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5228c1150568307201f34063331539538dd01e05ea5114c586d9b8517cfcd2a->enter($__internal_a5228c1150568307201f34063331539538dd01e05ea5114c586d9b8517cfcd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a5228c1150568307201f34063331539538dd01e05ea5114c586d9b8517cfcd2a->leave($__internal_a5228c1150568307201f34063331539538dd01e05ea5114c586d9b8517cfcd2a_prof);

        
        $__internal_0aa80d0ba3c312fba60201ed26452247e5a5eb7e3430bd39c98f4a4f4454d683->leave($__internal_0aa80d0ba3c312fba60201ed26452247e5a5eb7e3430bd39c98f4a4f4454d683_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
