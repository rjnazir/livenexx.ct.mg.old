<?php

/* :form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_113e51a806137daa695f417c63371ceae745083963ebc39f831a3e1bc0416742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form:bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_008663ee19471fc3e5e02346314f9295cd614cefeaf7727119691a13dfedaa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008663ee19471fc3e5e02346314f9295cd614cefeaf7727119691a13dfedaa5c->enter($__internal_008663ee19471fc3e5e02346314f9295cd614cefeaf7727119691a13dfedaa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_56049d092e2ab9ce342b902b660503f5507ece57a1059ecaff19cf856eb3e0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56049d092e2ab9ce342b902b660503f5507ece57a1059ecaff19cf856eb3e0f2->enter($__internal_56049d092e2ab9ce342b902b660503f5507ece57a1059ecaff19cf856eb3e0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:bootstrap_3_horizontal_layout.html.twig"));

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
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->displayBlock('radio_row', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('submit_row', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('reset_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_008663ee19471fc3e5e02346314f9295cd614cefeaf7727119691a13dfedaa5c->leave($__internal_008663ee19471fc3e5e02346314f9295cd614cefeaf7727119691a13dfedaa5c_prof);

        
        $__internal_56049d092e2ab9ce342b902b660503f5507ece57a1059ecaff19cf856eb3e0f2->leave($__internal_56049d092e2ab9ce342b902b660503f5507ece57a1059ecaff19cf856eb3e0f2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9aff8be25565918ab24153aa3fde102fdfc453d2eaaf1750e7a5d7ac98114ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aff8be25565918ab24153aa3fde102fdfc453d2eaaf1750e7a5d7ac98114ea2->enter($__internal_9aff8be25565918ab24153aa3fde102fdfc453d2eaaf1750e7a5d7ac98114ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_2cbb1eb8bbc1242039ba3a3978a9ec77f43c6366410d3eea18d27da271f90aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbb1eb8bbc1242039ba3a3978a9ec77f43c6366410d3eea18d27da271f90aa6->enter($__internal_2cbb1eb8bbc1242039ba3a3978a9ec77f43c6366410d3eea18d27da271f90aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_2cbb1eb8bbc1242039ba3a3978a9ec77f43c6366410d3eea18d27da271f90aa6->leave($__internal_2cbb1eb8bbc1242039ba3a3978a9ec77f43c6366410d3eea18d27da271f90aa6_prof);

        
        $__internal_9aff8be25565918ab24153aa3fde102fdfc453d2eaaf1750e7a5d7ac98114ea2->leave($__internal_9aff8be25565918ab24153aa3fde102fdfc453d2eaaf1750e7a5d7ac98114ea2_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4310ead78e908b463a7c4d5342187ac900b6a21f85369c238a17b5b28e1a764a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4310ead78e908b463a7c4d5342187ac900b6a21f85369c238a17b5b28e1a764a->enter($__internal_4310ead78e908b463a7c4d5342187ac900b6a21f85369c238a17b5b28e1a764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_01080dbf090f4557ec27cead64ba551220edd247f9f2561757a2c53ab7e5654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01080dbf090f4557ec27cead64ba551220edd247f9f2561757a2c53ab7e5654a->enter($__internal_01080dbf090f4557ec27cead64ba551220edd247f9f2561757a2c53ab7e5654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_01080dbf090f4557ec27cead64ba551220edd247f9f2561757a2c53ab7e5654a->leave($__internal_01080dbf090f4557ec27cead64ba551220edd247f9f2561757a2c53ab7e5654a_prof);

        
        $__internal_4310ead78e908b463a7c4d5342187ac900b6a21f85369c238a17b5b28e1a764a->leave($__internal_4310ead78e908b463a7c4d5342187ac900b6a21f85369c238a17b5b28e1a764a_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0de6f0c25db3133306aa9941c7b18e4db3538a8112b483f905256b749bd200b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de6f0c25db3133306aa9941c7b18e4db3538a8112b483f905256b749bd200b9->enter($__internal_0de6f0c25db3133306aa9941c7b18e4db3538a8112b483f905256b749bd200b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6098f7f5467f50a86943ce2df2bb15032fe42a7307dca506de9bbbac4fb5d792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6098f7f5467f50a86943ce2df2bb15032fe42a7307dca506de9bbbac4fb5d792->enter($__internal_6098f7f5467f50a86943ce2df2bb15032fe42a7307dca506de9bbbac4fb5d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_6098f7f5467f50a86943ce2df2bb15032fe42a7307dca506de9bbbac4fb5d792->leave($__internal_6098f7f5467f50a86943ce2df2bb15032fe42a7307dca506de9bbbac4fb5d792_prof);

        
        $__internal_0de6f0c25db3133306aa9941c7b18e4db3538a8112b483f905256b749bd200b9->leave($__internal_0de6f0c25db3133306aa9941c7b18e4db3538a8112b483f905256b749bd200b9_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_590fa678ff1e0bff99d26ad5055b1377db27b2dfe48c417325faa12ee26545a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590fa678ff1e0bff99d26ad5055b1377db27b2dfe48c417325faa12ee26545a1->enter($__internal_590fa678ff1e0bff99d26ad5055b1377db27b2dfe48c417325faa12ee26545a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9b2310282816152c675941e18b6931dd54afca90743a74298121e4ce38b4a9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2310282816152c675941e18b6931dd54afca90743a74298121e4ce38b4a9f8->enter($__internal_9b2310282816152c675941e18b6931dd54afca90743a74298121e4ce38b4a9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "name", array()) == twig_constant("Aes\\Bundle\\SettingBundle\\Entity\\Setting::TAUXCONVERSION_KEY"))) {
            // line 27
            echo "        <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">
                <div class=\"input-group input-group-sm\">
                    ";
            // line 31
            $this->displayBlock("form_widget", $context, $blocks);
            echo "
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 41
            echo "    <div class=\"form-group";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " has-error-group ";
            }
            echo "\">";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 43
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 46
            echo "        </div>
    </div>
    ";
        }
        
        $__internal_9b2310282816152c675941e18b6931dd54afca90743a74298121e4ce38b4a9f8->leave($__internal_9b2310282816152c675941e18b6931dd54afca90743a74298121e4ce38b4a9f8_prof);

        
        $__internal_590fa678ff1e0bff99d26ad5055b1377db27b2dfe48c417325faa12ee26545a1->leave($__internal_590fa678ff1e0bff99d26ad5055b1377db27b2dfe48c417325faa12ee26545a1_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2f630a61347114d4eabb070fdd15f5c9f29ff6f2f4abbff2929b9746d8330161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f630a61347114d4eabb070fdd15f5c9f29ff6f2f4abbff2929b9746d8330161->enter($__internal_2f630a61347114d4eabb070fdd15f5c9f29ff6f2f4abbff2929b9746d8330161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_4ed4e523a7e413d783d1662fa58a48832494292dc4f58bd4e935c84a7b59cfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed4e523a7e413d783d1662fa58a48832494292dc4f58bd4e935c84a7b59cfb5->enter($__internal_4ed4e523a7e413d783d1662fa58a48832494292dc4f58bd4e935c84a7b59cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4ed4e523a7e413d783d1662fa58a48832494292dc4f58bd4e935c84a7b59cfb5->leave($__internal_4ed4e523a7e413d783d1662fa58a48832494292dc4f58bd4e935c84a7b59cfb5_prof);

        
        $__internal_2f630a61347114d4eabb070fdd15f5c9f29ff6f2f4abbff2929b9746d8330161->leave($__internal_2f630a61347114d4eabb070fdd15f5c9f29ff6f2f4abbff2929b9746d8330161_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_27ae8049cd683aeee518d0a60ca8420d885891362e90ba1f5b6c6971af416810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ae8049cd683aeee518d0a60ca8420d885891362e90ba1f5b6c6971af416810->enter($__internal_27ae8049cd683aeee518d0a60ca8420d885891362e90ba1f5b6c6971af416810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_4d8c21594486e8d0bbb801193c307ef20884d459757bf4a1f9ba5b099d85305a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8c21594486e8d0bbb801193c307ef20884d459757bf4a1f9ba5b099d85305a->enter($__internal_4d8c21594486e8d0bbb801193c307ef20884d459757bf4a1f9ba5b099d85305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_4d8c21594486e8d0bbb801193c307ef20884d459757bf4a1f9ba5b099d85305a->leave($__internal_4d8c21594486e8d0bbb801193c307ef20884d459757bf4a1f9ba5b099d85305a_prof);

        
        $__internal_27ae8049cd683aeee518d0a60ca8420d885891362e90ba1f5b6c6971af416810->leave($__internal_27ae8049cd683aeee518d0a60ca8420d885891362e90ba1f5b6c6971af416810_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2ae9a03030307e8da6a904d057afcf301cf10953478e86db64d5750eb88bc00d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae9a03030307e8da6a904d057afcf301cf10953478e86db64d5750eb88bc00d->enter($__internal_2ae9a03030307e8da6a904d057afcf301cf10953478e86db64d5750eb88bc00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_637909db053df777a284b151bbf3c0f7ec3ed16453a2a8cbc6ceb16f0a284f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637909db053df777a284b151bbf3c0f7ec3ed16453a2a8cbc6ceb16f0a284f61->enter($__internal_637909db053df777a284b151bbf3c0f7ec3ed16453a2a8cbc6ceb16f0a284f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 60
        ob_start();
        // line 61
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 62
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 63
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_637909db053df777a284b151bbf3c0f7ec3ed16453a2a8cbc6ceb16f0a284f61->leave($__internal_637909db053df777a284b151bbf3c0f7ec3ed16453a2a8cbc6ceb16f0a284f61_prof);

        
        $__internal_2ae9a03030307e8da6a904d057afcf301cf10953478e86db64d5750eb88bc00d->leave($__internal_2ae9a03030307e8da6a904d057afcf301cf10953478e86db64d5750eb88bc00d_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_77dcf2cadf5d23db1992c2d3ed5a17eb525664d4b162007c39f312a672845589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dcf2cadf5d23db1992c2d3ed5a17eb525664d4b162007c39f312a672845589->enter($__internal_77dcf2cadf5d23db1992c2d3ed5a17eb525664d4b162007c39f312a672845589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_86f0c18f442c3f03dbe053ab1924301371322904a4a86ff70d15b9ada8766736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f0c18f442c3f03dbe053ab1924301371322904a4a86ff70d15b9ada8766736->enter($__internal_86f0c18f442c3f03dbe053ab1924301371322904a4a86ff70d15b9ada8766736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 72
        ob_start();
        // line 73
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 74
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 75
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_86f0c18f442c3f03dbe053ab1924301371322904a4a86ff70d15b9ada8766736->leave($__internal_86f0c18f442c3f03dbe053ab1924301371322904a4a86ff70d15b9ada8766736_prof);

        
        $__internal_77dcf2cadf5d23db1992c2d3ed5a17eb525664d4b162007c39f312a672845589->leave($__internal_77dcf2cadf5d23db1992c2d3ed5a17eb525664d4b162007c39f312a672845589_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_037680b6f8ae9a805f43a523d639dc61282222941a8376ae0a6a2450bbefc12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037680b6f8ae9a805f43a523d639dc61282222941a8376ae0a6a2450bbefc12f->enter($__internal_037680b6f8ae9a805f43a523d639dc61282222941a8376ae0a6a2450bbefc12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8c0b62f8ef498fcd2e1ca108b2e9832bcd36cf59aa07e646df1fa546728b6384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0b62f8ef498fcd2e1ca108b2e9832bcd36cf59aa07e646df1fa546728b6384->enter($__internal_8c0b62f8ef498fcd2e1ca108b2e9832bcd36cf59aa07e646df1fa546728b6384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 83
        ob_start();
        // line 84
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 85
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 86
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8c0b62f8ef498fcd2e1ca108b2e9832bcd36cf59aa07e646df1fa546728b6384->leave($__internal_8c0b62f8ef498fcd2e1ca108b2e9832bcd36cf59aa07e646df1fa546728b6384_prof);

        
        $__internal_037680b6f8ae9a805f43a523d639dc61282222941a8376ae0a6a2450bbefc12f->leave($__internal_037680b6f8ae9a805f43a523d639dc61282222941a8376ae0a6a2450bbefc12f_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_31f95b69f9ff17475314002ec8de35aff05cc202cbebcd74709c6c40eb00cc77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f95b69f9ff17475314002ec8de35aff05cc202cbebcd74709c6c40eb00cc77->enter($__internal_31f95b69f9ff17475314002ec8de35aff05cc202cbebcd74709c6c40eb00cc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_87a9162e955ed3708b3cae0264a4342221bc492e5b38d5c84cf3008af7c56d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a9162e955ed3708b3cae0264a4342221bc492e5b38d5c84cf3008af7c56d40->enter($__internal_87a9162e955ed3708b3cae0264a4342221bc492e5b38d5c84cf3008af7c56d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_87a9162e955ed3708b3cae0264a4342221bc492e5b38d5c84cf3008af7c56d40->leave($__internal_87a9162e955ed3708b3cae0264a4342221bc492e5b38d5c84cf3008af7c56d40_prof);

        
        $__internal_31f95b69f9ff17475314002ec8de35aff05cc202cbebcd74709c6c40eb00cc77->leave($__internal_31f95b69f9ff17475314002ec8de35aff05cc202cbebcd74709c6c40eb00cc77_prof);

    }

    public function getTemplateName()
    {
        return ":form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  414 => 94,  405 => 93,  390 => 87,  386 => 86,  382 => 85,  379 => 84,  377 => 83,  368 => 82,  353 => 76,  349 => 75,  345 => 74,  342 => 73,  340 => 72,  331 => 71,  316 => 65,  312 => 64,  308 => 63,  304 => 62,  297 => 61,  295 => 60,  286 => 59,  276 => 56,  267 => 55,  257 => 52,  248 => 51,  235 => 46,  233 => 44,  229 => 43,  227 => 42,  221 => 41,  208 => 31,  202 => 29,  200 => 28,  194 => 27,  192 => 26,  183 => 25,  173 => 22,  164 => 21,  152 => 16,  149 => 15,  143 => 13,  140 => 12,  138 => 11,  129 => 10,  119 => 5,  117 => 4,  108 => 3,  98 => 93,  95 => 92,  93 => 82,  90 => 81,  88 => 71,  85 => 70,  83 => 59,  80 => 58,  78 => 55,  75 => 54,  73 => 51,  70 => 50,  68 => 25,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
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
    {% if form.vars.name == constant('Aes\\\\Bundle\\\\SettingBundle\\\\Entity\\\\Setting::TAUXCONVERSION_KEY') %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                <div class=\"input-group input-group-sm\">
                    {{ block('form_widget') }}
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-info btn-flat\">
                          EUR
                      </button>
                    </span>
                </div>
            </div>
        </div>
    {% else %}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error-group {% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {#{{- form_errors(form) -}}#}
        </div>
    </div>
    {% endif %}
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
", ":form:bootstrap_3_horizontal_layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
