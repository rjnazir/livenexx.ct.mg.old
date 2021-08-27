<?php

/* form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_6c6c025627678aa0776cc63f8dbf5e959ac52163681fae1082d756f5d09939de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "form/bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_dff1268b8897cafacc652e694aa9d18c6de9329f0ed6465e68d2592648b0c789 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff1268b8897cafacc652e694aa9d18c6de9329f0ed6465e68d2592648b0c789->enter($__internal_dff1268b8897cafacc652e694aa9d18c6de9329f0ed6465e68d2592648b0c789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3c1a789c234591f2acd8755ad7938543171434bbf41c612209c9ef4aa7f616f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1a789c234591f2acd8755ad7938543171434bbf41c612209c9ef4aa7f616f8->enter($__internal_3c1a789c234591f2acd8755ad7938543171434bbf41c612209c9ef4aa7f616f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_dff1268b8897cafacc652e694aa9d18c6de9329f0ed6465e68d2592648b0c789->leave($__internal_dff1268b8897cafacc652e694aa9d18c6de9329f0ed6465e68d2592648b0c789_prof);

        
        $__internal_3c1a789c234591f2acd8755ad7938543171434bbf41c612209c9ef4aa7f616f8->leave($__internal_3c1a789c234591f2acd8755ad7938543171434bbf41c612209c9ef4aa7f616f8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ccdbf4dcfbf69e725f729941f3effc6649be44f5600ac2d0bc0fabe965281de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccdbf4dcfbf69e725f729941f3effc6649be44f5600ac2d0bc0fabe965281de0->enter($__internal_ccdbf4dcfbf69e725f729941f3effc6649be44f5600ac2d0bc0fabe965281de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ef113aab618552522f162d6fe3e5e113eaebee0ce4f729c77a3b5ec1db4ef4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef113aab618552522f162d6fe3e5e113eaebee0ce4f729c77a3b5ec1db4ef4cb->enter($__internal_ef113aab618552522f162d6fe3e5e113eaebee0ce4f729c77a3b5ec1db4ef4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ef113aab618552522f162d6fe3e5e113eaebee0ce4f729c77a3b5ec1db4ef4cb->leave($__internal_ef113aab618552522f162d6fe3e5e113eaebee0ce4f729c77a3b5ec1db4ef4cb_prof);

        
        $__internal_ccdbf4dcfbf69e725f729941f3effc6649be44f5600ac2d0bc0fabe965281de0->leave($__internal_ccdbf4dcfbf69e725f729941f3effc6649be44f5600ac2d0bc0fabe965281de0_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c1ad912d465666796c1ff65ddb9200b20f675b03d2819d4995fbf163b51dcb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ad912d465666796c1ff65ddb9200b20f675b03d2819d4995fbf163b51dcb57->enter($__internal_c1ad912d465666796c1ff65ddb9200b20f675b03d2819d4995fbf163b51dcb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b7a84198f7337e70aa10c26442a37c0cb437bebe20231e1a6ac02d924c37e41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a84198f7337e70aa10c26442a37c0cb437bebe20231e1a6ac02d924c37e41e->enter($__internal_b7a84198f7337e70aa10c26442a37c0cb437bebe20231e1a6ac02d924c37e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_b7a84198f7337e70aa10c26442a37c0cb437bebe20231e1a6ac02d924c37e41e->leave($__internal_b7a84198f7337e70aa10c26442a37c0cb437bebe20231e1a6ac02d924c37e41e_prof);

        
        $__internal_c1ad912d465666796c1ff65ddb9200b20f675b03d2819d4995fbf163b51dcb57->leave($__internal_c1ad912d465666796c1ff65ddb9200b20f675b03d2819d4995fbf163b51dcb57_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5ca5ee004c80304bec9b718f54d2469955e7ee52a4ed2ecccf3e4a72dcb0f781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca5ee004c80304bec9b718f54d2469955e7ee52a4ed2ecccf3e4a72dcb0f781->enter($__internal_5ca5ee004c80304bec9b718f54d2469955e7ee52a4ed2ecccf3e4a72dcb0f781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_acfd3b8b54ce475c2583cc44b2014d3157a36ee7849b3d49081fc905c1de7bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfd3b8b54ce475c2583cc44b2014d3157a36ee7849b3d49081fc905c1de7bb5->enter($__internal_acfd3b8b54ce475c2583cc44b2014d3157a36ee7849b3d49081fc905c1de7bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-4";
        
        $__internal_acfd3b8b54ce475c2583cc44b2014d3157a36ee7849b3d49081fc905c1de7bb5->leave($__internal_acfd3b8b54ce475c2583cc44b2014d3157a36ee7849b3d49081fc905c1de7bb5_prof);

        
        $__internal_5ca5ee004c80304bec9b718f54d2469955e7ee52a4ed2ecccf3e4a72dcb0f781->leave($__internal_5ca5ee004c80304bec9b718f54d2469955e7ee52a4ed2ecccf3e4a72dcb0f781_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_65d7379ea39a482012dae7a861e2a1aee50122b903b353f28f5edc6a2ab1cde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d7379ea39a482012dae7a861e2a1aee50122b903b353f28f5edc6a2ab1cde2->enter($__internal_65d7379ea39a482012dae7a861e2a1aee50122b903b353f28f5edc6a2ab1cde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_63251b75ee98f7795cf89c930df5e30b4a5cebcd42257a5d20a5bb8072582d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63251b75ee98f7795cf89c930df5e30b4a5cebcd42257a5d20a5bb8072582d58->enter($__internal_63251b75ee98f7795cf89c930df5e30b4a5cebcd42257a5d20a5bb8072582d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_63251b75ee98f7795cf89c930df5e30b4a5cebcd42257a5d20a5bb8072582d58->leave($__internal_63251b75ee98f7795cf89c930df5e30b4a5cebcd42257a5d20a5bb8072582d58_prof);

        
        $__internal_65d7379ea39a482012dae7a861e2a1aee50122b903b353f28f5edc6a2ab1cde2->leave($__internal_65d7379ea39a482012dae7a861e2a1aee50122b903b353f28f5edc6a2ab1cde2_prof);

    }

    // line 51
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e8911b81065a145f4f9ff73706ab4f2cb35a81a6c3709510305a408ade3b4745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8911b81065a145f4f9ff73706ab4f2cb35a81a6c3709510305a408ade3b4745->enter($__internal_e8911b81065a145f4f9ff73706ab4f2cb35a81a6c3709510305a408ade3b4745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_176200bacdf744c8f1305bb8018297d6f9c267916b2c184f15799a7e9e90db12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176200bacdf744c8f1305bb8018297d6f9c267916b2c184f15799a7e9e90db12->enter($__internal_176200bacdf744c8f1305bb8018297d6f9c267916b2c184f15799a7e9e90db12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 52
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_176200bacdf744c8f1305bb8018297d6f9c267916b2c184f15799a7e9e90db12->leave($__internal_176200bacdf744c8f1305bb8018297d6f9c267916b2c184f15799a7e9e90db12_prof);

        
        $__internal_e8911b81065a145f4f9ff73706ab4f2cb35a81a6c3709510305a408ade3b4745->leave($__internal_e8911b81065a145f4f9ff73706ab4f2cb35a81a6c3709510305a408ade3b4745_prof);

    }

    // line 55
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9950b0e03a928bc6a246392661d7c293e69e8d835c1a3c50245501c9bb42ed56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9950b0e03a928bc6a246392661d7c293e69e8d835c1a3c50245501c9bb42ed56->enter($__internal_9950b0e03a928bc6a246392661d7c293e69e8d835c1a3c50245501c9bb42ed56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_5c9b41b3e42e5fbdd359effeea1ca079e04dd356b0369ab8eedf2432d18feea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9b41b3e42e5fbdd359effeea1ca079e04dd356b0369ab8eedf2432d18feea9->enter($__internal_5c9b41b3e42e5fbdd359effeea1ca079e04dd356b0369ab8eedf2432d18feea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 56
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5c9b41b3e42e5fbdd359effeea1ca079e04dd356b0369ab8eedf2432d18feea9->leave($__internal_5c9b41b3e42e5fbdd359effeea1ca079e04dd356b0369ab8eedf2432d18feea9_prof);

        
        $__internal_9950b0e03a928bc6a246392661d7c293e69e8d835c1a3c50245501c9bb42ed56->leave($__internal_9950b0e03a928bc6a246392661d7c293e69e8d835c1a3c50245501c9bb42ed56_prof);

    }

    // line 59
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_09c360d10168cae6030e37465611e83cc604e5be9ace54f9dd5fdff7a610d9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c360d10168cae6030e37465611e83cc604e5be9ace54f9dd5fdff7a610d9b6->enter($__internal_09c360d10168cae6030e37465611e83cc604e5be9ace54f9dd5fdff7a610d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_5b3db0df52b7d6916ee32bd9da464f97cb54f04853175a7d876d861e695db119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3db0df52b7d6916ee32bd9da464f97cb54f04853175a7d876d861e695db119->enter($__internal_5b3db0df52b7d6916ee32bd9da464f97cb54f04853175a7d876d861e695db119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_5b3db0df52b7d6916ee32bd9da464f97cb54f04853175a7d876d861e695db119->leave($__internal_5b3db0df52b7d6916ee32bd9da464f97cb54f04853175a7d876d861e695db119_prof);

        
        $__internal_09c360d10168cae6030e37465611e83cc604e5be9ace54f9dd5fdff7a610d9b6->leave($__internal_09c360d10168cae6030e37465611e83cc604e5be9ace54f9dd5fdff7a610d9b6_prof);

    }

    // line 71
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_54a8bd1e4a5b1a3b9f83a1c60aca8fb9f7c6dc83509e4515a5e39a1b5720c9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a8bd1e4a5b1a3b9f83a1c60aca8fb9f7c6dc83509e4515a5e39a1b5720c9f4->enter($__internal_54a8bd1e4a5b1a3b9f83a1c60aca8fb9f7c6dc83509e4515a5e39a1b5720c9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0f023926a0b1b9dddadc589f70b3d90d264fe210fa15b90156406cb13c6e627a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f023926a0b1b9dddadc589f70b3d90d264fe210fa15b90156406cb13c6e627a->enter($__internal_0f023926a0b1b9dddadc589f70b3d90d264fe210fa15b90156406cb13c6e627a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0f023926a0b1b9dddadc589f70b3d90d264fe210fa15b90156406cb13c6e627a->leave($__internal_0f023926a0b1b9dddadc589f70b3d90d264fe210fa15b90156406cb13c6e627a_prof);

        
        $__internal_54a8bd1e4a5b1a3b9f83a1c60aca8fb9f7c6dc83509e4515a5e39a1b5720c9f4->leave($__internal_54a8bd1e4a5b1a3b9f83a1c60aca8fb9f7c6dc83509e4515a5e39a1b5720c9f4_prof);

    }

    // line 82
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4776a86fb4499fa89830437190bd1e5c0c7cd8a6640d2cd151154ad6bf99f0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4776a86fb4499fa89830437190bd1e5c0c7cd8a6640d2cd151154ad6bf99f0f6->enter($__internal_4776a86fb4499fa89830437190bd1e5c0c7cd8a6640d2cd151154ad6bf99f0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_8b068c27c66da6a9f49b95c83a4848f36695e3cdfedd4414997f85fad4528847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b068c27c66da6a9f49b95c83a4848f36695e3cdfedd4414997f85fad4528847->enter($__internal_8b068c27c66da6a9f49b95c83a4848f36695e3cdfedd4414997f85fad4528847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_8b068c27c66da6a9f49b95c83a4848f36695e3cdfedd4414997f85fad4528847->leave($__internal_8b068c27c66da6a9f49b95c83a4848f36695e3cdfedd4414997f85fad4528847_prof);

        
        $__internal_4776a86fb4499fa89830437190bd1e5c0c7cd8a6640d2cd151154ad6bf99f0f6->leave($__internal_4776a86fb4499fa89830437190bd1e5c0c7cd8a6640d2cd151154ad6bf99f0f6_prof);

    }

    // line 93
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ae2a8f93c779c14b93777032a25c56f011500936681623656dea5cc134d4ca2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2a8f93c779c14b93777032a25c56f011500936681623656dea5cc134d4ca2c->enter($__internal_ae2a8f93c779c14b93777032a25c56f011500936681623656dea5cc134d4ca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_84ee18660b1c497482ce3875e85b456f58c6ca058a43eb67000b1768f54e3487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ee18660b1c497482ce3875e85b456f58c6ca058a43eb67000b1768f54e3487->enter($__internal_84ee18660b1c497482ce3875e85b456f58c6ca058a43eb67000b1768f54e3487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 94
        echo "col-sm-6";
        
        $__internal_84ee18660b1c497482ce3875e85b456f58c6ca058a43eb67000b1768f54e3487->leave($__internal_84ee18660b1c497482ce3875e85b456f58c6ca058a43eb67000b1768f54e3487_prof);

        
        $__internal_ae2a8f93c779c14b93777032a25c56f011500936681623656dea5cc134d4ca2c->leave($__internal_ae2a8f93c779c14b93777032a25c56f011500936681623656dea5cc134d4ca2c_prof);

    }

    public function getTemplateName()
    {
        return "form/bootstrap_3_horizontal_layout.html.twig";
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
", "form/bootstrap_3_horizontal_layout.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
