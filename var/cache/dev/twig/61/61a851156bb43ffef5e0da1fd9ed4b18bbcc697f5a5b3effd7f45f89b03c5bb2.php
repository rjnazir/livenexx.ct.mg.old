<?php

/* :form:bootstrap_3_horizontal_layout_custom.html.twig */
class __TwigTemplate_6d7fbd475f1aae1b3e28d5fd63a3c04e91761b034af8b01aefc381f04004fb80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form:bootstrap_3_horizontal_layout_custom.html.twig", 1);
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
        $__internal_a26e1bd63192b2105878059a5540b4fb5e4b65bf44b0b2f93e7c0834c23bedbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a26e1bd63192b2105878059a5540b4fb5e4b65bf44b0b2f93e7c0834c23bedbb->enter($__internal_a26e1bd63192b2105878059a5540b4fb5e4b65bf44b0b2f93e7c0834c23bedbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

        $__internal_65169ffb51055653beda01ff6f0a56b2b2e75b76eadd210884fecd33b529aa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65169ffb51055653beda01ff6f0a56b2b2e75b76eadd210884fecd33b529aa64->enter($__internal_65169ffb51055653beda01ff6f0a56b2b2e75b76eadd210884fecd33b529aa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout_custom.html.twig"));

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
        
        $__internal_a26e1bd63192b2105878059a5540b4fb5e4b65bf44b0b2f93e7c0834c23bedbb->leave($__internal_a26e1bd63192b2105878059a5540b4fb5e4b65bf44b0b2f93e7c0834c23bedbb_prof);

        
        $__internal_65169ffb51055653beda01ff6f0a56b2b2e75b76eadd210884fecd33b529aa64->leave($__internal_65169ffb51055653beda01ff6f0a56b2b2e75b76eadd210884fecd33b529aa64_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_92df3e6b31dabf9b8249109309083f21bb0831334e89b379e78761c2e7f67844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92df3e6b31dabf9b8249109309083f21bb0831334e89b379e78761c2e7f67844->enter($__internal_92df3e6b31dabf9b8249109309083f21bb0831334e89b379e78761c2e7f67844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7b6b83014facaadbffb514b349242e2b137cacb7044e683ee170f0c2551f28e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6b83014facaadbffb514b349242e2b137cacb7044e683ee170f0c2551f28e8->enter($__internal_7b6b83014facaadbffb514b349242e2b137cacb7044e683ee170f0c2551f28e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7b6b83014facaadbffb514b349242e2b137cacb7044e683ee170f0c2551f28e8->leave($__internal_7b6b83014facaadbffb514b349242e2b137cacb7044e683ee170f0c2551f28e8_prof);

        
        $__internal_92df3e6b31dabf9b8249109309083f21bb0831334e89b379e78761c2e7f67844->leave($__internal_92df3e6b31dabf9b8249109309083f21bb0831334e89b379e78761c2e7f67844_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e1f1edfedc26a8664e4f79e1840b94319c39df7e56f46fe9f7946bed28ec4f95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f1edfedc26a8664e4f79e1840b94319c39df7e56f46fe9f7946bed28ec4f95->enter($__internal_e1f1edfedc26a8664e4f79e1840b94319c39df7e56f46fe9f7946bed28ec4f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_26eb8c700d42e85aaec86a815ae07a717413407fb4e52b2104108abecae8907b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26eb8c700d42e85aaec86a815ae07a717413407fb4e52b2104108abecae8907b->enter($__internal_26eb8c700d42e85aaec86a815ae07a717413407fb4e52b2104108abecae8907b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_26eb8c700d42e85aaec86a815ae07a717413407fb4e52b2104108abecae8907b->leave($__internal_26eb8c700d42e85aaec86a815ae07a717413407fb4e52b2104108abecae8907b_prof);

        
        $__internal_e1f1edfedc26a8664e4f79e1840b94319c39df7e56f46fe9f7946bed28ec4f95->leave($__internal_e1f1edfedc26a8664e4f79e1840b94319c39df7e56f46fe9f7946bed28ec4f95_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_59d41e5231044726fd1b218b63aa2dc6cc1dcf7321f0c53cedffb4ee19042f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d41e5231044726fd1b218b63aa2dc6cc1dcf7321f0c53cedffb4ee19042f78->enter($__internal_59d41e5231044726fd1b218b63aa2dc6cc1dcf7321f0c53cedffb4ee19042f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6a10a24eaa6d2775f27583486f402d7596fe2ca2018ab160b795debcc7b5aacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a10a24eaa6d2775f27583486f402d7596fe2ca2018ab160b795debcc7b5aacd->enter($__internal_6a10a24eaa6d2775f27583486f402d7596fe2ca2018ab160b795debcc7b5aacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_6a10a24eaa6d2775f27583486f402d7596fe2ca2018ab160b795debcc7b5aacd->leave($__internal_6a10a24eaa6d2775f27583486f402d7596fe2ca2018ab160b795debcc7b5aacd_prof);

        
        $__internal_59d41e5231044726fd1b218b63aa2dc6cc1dcf7321f0c53cedffb4ee19042f78->leave($__internal_59d41e5231044726fd1b218b63aa2dc6cc1dcf7321f0c53cedffb4ee19042f78_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a37aae033c5fffb08d8114661a3992d3152bf4a1ba7b5cf65d2abb3b227577f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37aae033c5fffb08d8114661a3992d3152bf4a1ba7b5cf65d2abb3b227577f9->enter($__internal_a37aae033c5fffb08d8114661a3992d3152bf4a1ba7b5cf65d2abb3b227577f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f29cb741a4c09689e41c8e82a9ad8cc6be1b6ca714ffe644b5605fcef4a99e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29cb741a4c09689e41c8e82a9ad8cc6be1b6ca714ffe644b5605fcef4a99e04->enter($__internal_f29cb741a4c09689e41c8e82a9ad8cc6be1b6ca714ffe644b5605fcef4a99e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f29cb741a4c09689e41c8e82a9ad8cc6be1b6ca714ffe644b5605fcef4a99e04->leave($__internal_f29cb741a4c09689e41c8e82a9ad8cc6be1b6ca714ffe644b5605fcef4a99e04_prof);

        
        $__internal_a37aae033c5fffb08d8114661a3992d3152bf4a1ba7b5cf65d2abb3b227577f9->leave($__internal_a37aae033c5fffb08d8114661a3992d3152bf4a1ba7b5cf65d2abb3b227577f9_prof);

    }

    // line 35
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3d8763faceea3d521af99deefc62aa27647669dd725cfc45f1fe3b49ae6a6be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8763faceea3d521af99deefc62aa27647669dd725cfc45f1fe3b49ae6a6be1->enter($__internal_3d8763faceea3d521af99deefc62aa27647669dd725cfc45f1fe3b49ae6a6be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_35388cc2d9496f4a3931f05668a7e3475b58790dadfc77dfc02f598272215d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35388cc2d9496f4a3931f05668a7e3475b58790dadfc77dfc02f598272215d21->enter($__internal_35388cc2d9496f4a3931f05668a7e3475b58790dadfc77dfc02f598272215d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 36
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_35388cc2d9496f4a3931f05668a7e3475b58790dadfc77dfc02f598272215d21->leave($__internal_35388cc2d9496f4a3931f05668a7e3475b58790dadfc77dfc02f598272215d21_prof);

        
        $__internal_3d8763faceea3d521af99deefc62aa27647669dd725cfc45f1fe3b49ae6a6be1->leave($__internal_3d8763faceea3d521af99deefc62aa27647669dd725cfc45f1fe3b49ae6a6be1_prof);

    }

    // line 39
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3533337244215f15c457e8caad0125afc5e292af5f70de7e9aca08ff9ebc0258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3533337244215f15c457e8caad0125afc5e292af5f70de7e9aca08ff9ebc0258->enter($__internal_3533337244215f15c457e8caad0125afc5e292af5f70de7e9aca08ff9ebc0258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4b7a082b108af5af04df6cd4e4279878b906f0fa4db86ebe221061f0afc5f864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7a082b108af5af04df6cd4e4279878b906f0fa4db86ebe221061f0afc5f864->enter($__internal_4b7a082b108af5af04df6cd4e4279878b906f0fa4db86ebe221061f0afc5f864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 40
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4b7a082b108af5af04df6cd4e4279878b906f0fa4db86ebe221061f0afc5f864->leave($__internal_4b7a082b108af5af04df6cd4e4279878b906f0fa4db86ebe221061f0afc5f864_prof);

        
        $__internal_3533337244215f15c457e8caad0125afc5e292af5f70de7e9aca08ff9ebc0258->leave($__internal_3533337244215f15c457e8caad0125afc5e292af5f70de7e9aca08ff9ebc0258_prof);

    }

    // line 43
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2894156a0ad366a92a8c6575f9dd6dd6605f0df009dedf1f1fdcde30a3ef446a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2894156a0ad366a92a8c6575f9dd6dd6605f0df009dedf1f1fdcde30a3ef446a->enter($__internal_2894156a0ad366a92a8c6575f9dd6dd6605f0df009dedf1f1fdcde30a3ef446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c6692fad7691e8ad72e9b2ed8302cf7c91196c94375514d306507afb9e19479a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6692fad7691e8ad72e9b2ed8302cf7c91196c94375514d306507afb9e19479a->enter($__internal_c6692fad7691e8ad72e9b2ed8302cf7c91196c94375514d306507afb9e19479a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_c6692fad7691e8ad72e9b2ed8302cf7c91196c94375514d306507afb9e19479a->leave($__internal_c6692fad7691e8ad72e9b2ed8302cf7c91196c94375514d306507afb9e19479a_prof);

        
        $__internal_2894156a0ad366a92a8c6575f9dd6dd6605f0df009dedf1f1fdcde30a3ef446a->leave($__internal_2894156a0ad366a92a8c6575f9dd6dd6605f0df009dedf1f1fdcde30a3ef446a_prof);

    }

    // line 55
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_85ac44926105b3999f9eedc6e38017945404e001894113e6dcb86461bdfac1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ac44926105b3999f9eedc6e38017945404e001894113e6dcb86461bdfac1fc->enter($__internal_85ac44926105b3999f9eedc6e38017945404e001894113e6dcb86461bdfac1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_1ba297d878235b3efe507508b60ef421a3011d9aaac59b8b9f166263f42c1428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba297d878235b3efe507508b60ef421a3011d9aaac59b8b9f166263f42c1428->enter($__internal_1ba297d878235b3efe507508b60ef421a3011d9aaac59b8b9f166263f42c1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_1ba297d878235b3efe507508b60ef421a3011d9aaac59b8b9f166263f42c1428->leave($__internal_1ba297d878235b3efe507508b60ef421a3011d9aaac59b8b9f166263f42c1428_prof);

        
        $__internal_85ac44926105b3999f9eedc6e38017945404e001894113e6dcb86461bdfac1fc->leave($__internal_85ac44926105b3999f9eedc6e38017945404e001894113e6dcb86461bdfac1fc_prof);

    }

    // line 66
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e6f93662171e479379dedd3d185b287a0a5a6106ff1237cfbe826db420c482dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f93662171e479379dedd3d185b287a0a5a6106ff1237cfbe826db420c482dd->enter($__internal_e6f93662171e479379dedd3d185b287a0a5a6106ff1237cfbe826db420c482dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_71f4387c5ca3baba06b637c679c77847ba97fafaecfd356fee295236b10a998b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f4387c5ca3baba06b637c679c77847ba97fafaecfd356fee295236b10a998b->enter($__internal_71f4387c5ca3baba06b637c679c77847ba97fafaecfd356fee295236b10a998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_71f4387c5ca3baba06b637c679c77847ba97fafaecfd356fee295236b10a998b->leave($__internal_71f4387c5ca3baba06b637c679c77847ba97fafaecfd356fee295236b10a998b_prof);

        
        $__internal_e6f93662171e479379dedd3d185b287a0a5a6106ff1237cfbe826db420c482dd->leave($__internal_e6f93662171e479379dedd3d185b287a0a5a6106ff1237cfbe826db420c482dd_prof);

    }

    // line 77
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_f14a3f5ec5c1de4833cefcc647696c0e87302b3bc50cd16fed1a414eac82820e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14a3f5ec5c1de4833cefcc647696c0e87302b3bc50cd16fed1a414eac82820e->enter($__internal_f14a3f5ec5c1de4833cefcc647696c0e87302b3bc50cd16fed1a414eac82820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_1c8379747f2a6204fc06137e9574735f403d86ddf4bc7c603813c7f5332b2cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8379747f2a6204fc06137e9574735f403d86ddf4bc7c603813c7f5332b2cb3->enter($__internal_1c8379747f2a6204fc06137e9574735f403d86ddf4bc7c603813c7f5332b2cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 78
        echo "col-sm-6";
        
        $__internal_1c8379747f2a6204fc06137e9574735f403d86ddf4bc7c603813c7f5332b2cb3->leave($__internal_1c8379747f2a6204fc06137e9574735f403d86ddf4bc7c603813c7f5332b2cb3_prof);

        
        $__internal_f14a3f5ec5c1de4833cefcc647696c0e87302b3bc50cd16fed1a414eac82820e->leave($__internal_f14a3f5ec5c1de4833cefcc647696c0e87302b3bc50cd16fed1a414eac82820e_prof);

    }

    public function getTemplateName()
    {
        return ":form:bootstrap_3_horizontal_layout_custom.html.twig";
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
", ":form:bootstrap_3_horizontal_layout_custom.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/form/bootstrap_3_horizontal_layout_custom.html.twig");
    }
}
