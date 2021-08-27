<?php

/* :form:custom_fields.html.twig */
class __TwigTemplate_e56dfdaec253ea1a4dfeeb46b8cbd718d232b0e03af9c9d9169032ea20b838d8 extends Twig_Template
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
        $__internal_c790036cba2cbf4355dab59ae86a012cc593eb2b06e38d093e4bf42725505bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c790036cba2cbf4355dab59ae86a012cc593eb2b06e38d093e4bf42725505bcd->enter($__internal_c790036cba2cbf4355dab59ae86a012cc593eb2b06e38d093e4bf42725505bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

        $__internal_74a043c08c219d6a8581a92259654f8bdda7481b2934bccfe04956a71e71cad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a043c08c219d6a8581a92259654f8bdda7481b2934bccfe04956a71e71cad0->enter($__internal_74a043c08c219d6a8581a92259654f8bdda7481b2934bccfe04956a71e71cad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:custom_fields.html.twig"));

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
        
        $__internal_c790036cba2cbf4355dab59ae86a012cc593eb2b06e38d093e4bf42725505bcd->leave($__internal_c790036cba2cbf4355dab59ae86a012cc593eb2b06e38d093e4bf42725505bcd_prof);

        
        $__internal_74a043c08c219d6a8581a92259654f8bdda7481b2934bccfe04956a71e71cad0->leave($__internal_74a043c08c219d6a8581a92259654f8bdda7481b2934bccfe04956a71e71cad0_prof);

    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8d2066e4e80633ad21a5abbf0849f161fdffa9da3ec04faa7aea71265810833d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2066e4e80633ad21a5abbf0849f161fdffa9da3ec04faa7aea71265810833d->enter($__internal_8d2066e4e80633ad21a5abbf0849f161fdffa9da3ec04faa7aea71265810833d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_bc32cabfb16ba9a50f9b627c81e02438eb5eff1ccd29ef4af71c625431de261a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc32cabfb16ba9a50f9b627c81e02438eb5eff1ccd29ef4af71c625431de261a->enter($__internal_bc32cabfb16ba9a50f9b627c81e02438eb5eff1ccd29ef4af71c625431de261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_bc32cabfb16ba9a50f9b627c81e02438eb5eff1ccd29ef4af71c625431de261a->leave($__internal_bc32cabfb16ba9a50f9b627c81e02438eb5eff1ccd29ef4af71c625431de261a_prof);

        
        $__internal_8d2066e4e80633ad21a5abbf0849f161fdffa9da3ec04faa7aea71265810833d->leave($__internal_8d2066e4e80633ad21a5abbf0849f161fdffa9da3ec04faa7aea71265810833d_prof);

    }

    // line 13
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6e0a166d4cc3d45e5fe843e0a7d8a612b13b172a355c8ed6fb5108f919a25de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e0a166d4cc3d45e5fe843e0a7d8a612b13b172a355c8ed6fb5108f919a25de1->enter($__internal_6e0a166d4cc3d45e5fe843e0a7d8a612b13b172a355c8ed6fb5108f919a25de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_362d5af2d902d7f30153e00042cf06b93ac12c2ad8838f875102e5381edffdb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362d5af2d902d7f30153e00042cf06b93ac12c2ad8838f875102e5381edffdb3->enter($__internal_362d5af2d902d7f30153e00042cf06b93ac12c2ad8838f875102e5381edffdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_362d5af2d902d7f30153e00042cf06b93ac12c2ad8838f875102e5381edffdb3->leave($__internal_362d5af2d902d7f30153e00042cf06b93ac12c2ad8838f875102e5381edffdb3_prof);

        
        $__internal_6e0a166d4cc3d45e5fe843e0a7d8a612b13b172a355c8ed6fb5108f919a25de1->leave($__internal_6e0a166d4cc3d45e5fe843e0a7d8a612b13b172a355c8ed6fb5108f919a25de1_prof);

    }

    // line 23
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_15351e93dea805fd7b784ed7a58e8c192b0f5f22e3465435a025d63145b7bbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15351e93dea805fd7b784ed7a58e8c192b0f5f22e3465435a025d63145b7bbb0->enter($__internal_15351e93dea805fd7b784ed7a58e8c192b0f5f22e3465435a025d63145b7bbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d0bfa479aa50f94d7d1205377b604cfbc272a71130d2f91ea9c899cad2005811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bfa479aa50f94d7d1205377b604cfbc272a71130d2f91ea9c899cad2005811->enter($__internal_d0bfa479aa50f94d7d1205377b604cfbc272a71130d2f91ea9c899cad2005811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_d0bfa479aa50f94d7d1205377b604cfbc272a71130d2f91ea9c899cad2005811->leave($__internal_d0bfa479aa50f94d7d1205377b604cfbc272a71130d2f91ea9c899cad2005811_prof);

        
        $__internal_15351e93dea805fd7b784ed7a58e8c192b0f5f22e3465435a025d63145b7bbb0->leave($__internal_15351e93dea805fd7b784ed7a58e8c192b0f5f22e3465435a025d63145b7bbb0_prof);

    }

    // line 35
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_20e6c4d4ad3c3e34859c0b2d57dbdd6abb5cb0f134e8b577bc81945197b4622a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e6c4d4ad3c3e34859c0b2d57dbdd6abb5cb0f134e8b577bc81945197b4622a->enter($__internal_20e6c4d4ad3c3e34859c0b2d57dbdd6abb5cb0f134e8b577bc81945197b4622a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f203cf543523753915cd73466d8a225902f94afe71773ffa8ae685e4fd60b84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f203cf543523753915cd73466d8a225902f94afe71773ffa8ae685e4fd60b84d->enter($__internal_f203cf543523753915cd73466d8a225902f94afe71773ffa8ae685e4fd60b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f203cf543523753915cd73466d8a225902f94afe71773ffa8ae685e4fd60b84d->leave($__internal_f203cf543523753915cd73466d8a225902f94afe71773ffa8ae685e4fd60b84d_prof);

        
        $__internal_20e6c4d4ad3c3e34859c0b2d57dbdd6abb5cb0f134e8b577bc81945197b4622a->leave($__internal_20e6c4d4ad3c3e34859c0b2d57dbdd6abb5cb0f134e8b577bc81945197b4622a_prof);

    }

    // line 64
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_66496623c246dab3dcb786a30eb8ed913c811460b6cdc4dee8d17cbd6d03eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66496623c246dab3dcb786a30eb8ed913c811460b6cdc4dee8d17cbd6d03eb61->enter($__internal_66496623c246dab3dcb786a30eb8ed913c811460b6cdc4dee8d17cbd6d03eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_aeffaedf3968d406d1ed170aa8149c3ced7c4f7b085ae0978c1df82b128fa911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeffaedf3968d406d1ed170aa8149c3ced7c4f7b085ae0978c1df82b128fa911->enter($__internal_aeffaedf3968d406d1ed170aa8149c3ced7c4f7b085ae0978c1df82b128fa911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 66
        echo "    <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_aeffaedf3968d406d1ed170aa8149c3ced7c4f7b085ae0978c1df82b128fa911->leave($__internal_aeffaedf3968d406d1ed170aa8149c3ced7c4f7b085ae0978c1df82b128fa911_prof);

        
        $__internal_66496623c246dab3dcb786a30eb8ed913c811460b6cdc4dee8d17cbd6d03eb61->leave($__internal_66496623c246dab3dcb786a30eb8ed913c811460b6cdc4dee8d17cbd6d03eb61_prof);

    }

    // line 70
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_69e569fcc6b82d26d60407818597e5dbbfa2d0f9ec004bb4c3387f7a76af4367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e569fcc6b82d26d60407818597e5dbbfa2d0f9ec004bb4c3387f7a76af4367->enter($__internal_69e569fcc6b82d26d60407818597e5dbbfa2d0f9ec004bb4c3387f7a76af4367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_a1d661612fbf1f47f5a8f9da72a3cd4fa9a56a88bb0c4fe40536661652d325d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d661612fbf1f47f5a8f9da72a3cd4fa9a56a88bb0c4fe40536661652d325d2->enter($__internal_a1d661612fbf1f47f5a8f9da72a3cd4fa9a56a88bb0c4fe40536661652d325d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 72
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_a1d661612fbf1f47f5a8f9da72a3cd4fa9a56a88bb0c4fe40536661652d325d2->leave($__internal_a1d661612fbf1f47f5a8f9da72a3cd4fa9a56a88bb0c4fe40536661652d325d2_prof);

        
        $__internal_69e569fcc6b82d26d60407818597e5dbbfa2d0f9ec004bb4c3387f7a76af4367->leave($__internal_69e569fcc6b82d26d60407818597e5dbbfa2d0f9ec004bb4c3387f7a76af4367_prof);

    }

    // line 76
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_e778012184cf04c1803be72ce0e8a6d1c29a52d3cb060ecbca8c6431dc61e86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e778012184cf04c1803be72ce0e8a6d1c29a52d3cb060ecbca8c6431dc61e86c->enter($__internal_e778012184cf04c1803be72ce0e8a6d1c29a52d3cb060ecbca8c6431dc61e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_2d8f5ee388a87c2d42e8b736513947a159430eebf7848c8ba17205f9aa75c32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8f5ee388a87c2d42e8b736513947a159430eebf7848c8ba17205f9aa75c32a->enter($__internal_2d8f5ee388a87c2d42e8b736513947a159430eebf7848c8ba17205f9aa75c32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 78
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_2d8f5ee388a87c2d42e8b736513947a159430eebf7848c8ba17205f9aa75c32a->leave($__internal_2d8f5ee388a87c2d42e8b736513947a159430eebf7848c8ba17205f9aa75c32a_prof);

        
        $__internal_e778012184cf04c1803be72ce0e8a6d1c29a52d3cb060ecbca8c6431dc61e86c->leave($__internal_e778012184cf04c1803be72ce0e8a6d1c29a52d3cb060ecbca8c6431dc61e86c_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d1adfacd6c6ef2b3db9aa6b4ef2deebe3c066875678f4d28409c34e7ae8e4767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1adfacd6c6ef2b3db9aa6b4ef2deebe3c066875678f4d28409c34e7ae8e4767->enter($__internal_d1adfacd6c6ef2b3db9aa6b4ef2deebe3c066875678f4d28409c34e7ae8e4767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1fb92e869bfbbead182f58cb858e8aaf9a2e64f1f3242a335e4e5a6dfd27e544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb92e869bfbbead182f58cb858e8aaf9a2e64f1f3242a335e4e5a6dfd27e544->enter($__internal_1fb92e869bfbbead182f58cb858e8aaf9a2e64f1f3242a335e4e5a6dfd27e544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_1fb92e869bfbbead182f58cb858e8aaf9a2e64f1f3242a335e4e5a6dfd27e544->leave($__internal_1fb92e869bfbbead182f58cb858e8aaf9a2e64f1f3242a335e4e5a6dfd27e544_prof);

        
        $__internal_d1adfacd6c6ef2b3db9aa6b4ef2deebe3c066875678f4d28409c34e7ae8e4767->leave($__internal_d1adfacd6c6ef2b3db9aa6b4ef2deebe3c066875678f4d28409c34e7ae8e4767_prof);

    }

    // line 88
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_ab7e467d2c516e55553437576b97c90f892542e363a4c4c089c49aff1c6337e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7e467d2c516e55553437576b97c90f892542e363a4c4c089c49aff1c6337e8->enter($__internal_ab7e467d2c516e55553437576b97c90f892542e363a4c4c089c49aff1c6337e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_8f762d26bb089bb536b746542c2ae0d9321102353d19ec087fe53a37d654c569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f762d26bb089bb536b746542c2ae0d9321102353d19ec087fe53a37d654c569->enter($__internal_8f762d26bb089bb536b746542c2ae0d9321102353d19ec087fe53a37d654c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_8f762d26bb089bb536b746542c2ae0d9321102353d19ec087fe53a37d654c569->leave($__internal_8f762d26bb089bb536b746542c2ae0d9321102353d19ec087fe53a37d654c569_prof);

        
        $__internal_ab7e467d2c516e55553437576b97c90f892542e363a4c4c089c49aff1c6337e8->leave($__internal_ab7e467d2c516e55553437576b97c90f892542e363a4c4c089c49aff1c6337e8_prof);

    }

    // line 94
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_57aa5dad1debb77689bb1382614d1951135b391a806b58fbce8f62e8e3899cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57aa5dad1debb77689bb1382614d1951135b391a806b58fbce8f62e8e3899cb5->enter($__internal_57aa5dad1debb77689bb1382614d1951135b391a806b58fbce8f62e8e3899cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_fefbbc7f83db5f0d8454e63834cdeae22edc2a4314226aad555922810f6c597f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefbbc7f83db5f0d8454e63834cdeae22edc2a4314226aad555922810f6c597f->enter($__internal_fefbbc7f83db5f0d8454e63834cdeae22edc2a4314226aad555922810f6c597f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_fefbbc7f83db5f0d8454e63834cdeae22edc2a4314226aad555922810f6c597f->leave($__internal_fefbbc7f83db5f0d8454e63834cdeae22edc2a4314226aad555922810f6c597f_prof);

        
        $__internal_57aa5dad1debb77689bb1382614d1951135b391a806b58fbce8f62e8e3899cb5->leave($__internal_57aa5dad1debb77689bb1382614d1951135b391a806b58fbce8f62e8e3899cb5_prof);

    }

    // line 101
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3ae03c55be4e121ce509df85c7bab73c51830c86eaf21358f2f6f50f035b2bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae03c55be4e121ce509df85c7bab73c51830c86eaf21358f2f6f50f035b2bf4->enter($__internal_3ae03c55be4e121ce509df85c7bab73c51830c86eaf21358f2f6f50f035b2bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c6fd27ac3c925bef946cf641e80373815d54f252a596c1177ef3e87df52a1d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fd27ac3c925bef946cf641e80373815d54f252a596c1177ef3e87df52a1d40->enter($__internal_c6fd27ac3c925bef946cf641e80373815d54f252a596c1177ef3e87df52a1d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_c6fd27ac3c925bef946cf641e80373815d54f252a596c1177ef3e87df52a1d40->leave($__internal_c6fd27ac3c925bef946cf641e80373815d54f252a596c1177ef3e87df52a1d40_prof);

        
        $__internal_3ae03c55be4e121ce509df85c7bab73c51830c86eaf21358f2f6f50f035b2bf4->leave($__internal_3ae03c55be4e121ce509df85c7bab73c51830c86eaf21358f2f6f50f035b2bf4_prof);

    }

    // line 123
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_76ed85aff02a7d64bfa437aaab1dfe41fe07947c26ae2fc684d961e12a455ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ed85aff02a7d64bfa437aaab1dfe41fe07947c26ae2fc684d961e12a455ab4->enter($__internal_76ed85aff02a7d64bfa437aaab1dfe41fe07947c26ae2fc684d961e12a455ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0cf3c3db3205f839fe34a00adc9c30300ecb99ed62f245e77a4e2b67a6735cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf3c3db3205f839fe34a00adc9c30300ecb99ed62f245e77a4e2b67a6735cd6->enter($__internal_0cf3c3db3205f839fe34a00adc9c30300ecb99ed62f245e77a4e2b67a6735cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 125
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_0cf3c3db3205f839fe34a00adc9c30300ecb99ed62f245e77a4e2b67a6735cd6->leave($__internal_0cf3c3db3205f839fe34a00adc9c30300ecb99ed62f245e77a4e2b67a6735cd6_prof);

        
        $__internal_76ed85aff02a7d64bfa437aaab1dfe41fe07947c26ae2fc684d961e12a455ab4->leave($__internal_76ed85aff02a7d64bfa437aaab1dfe41fe07947c26ae2fc684d961e12a455ab4_prof);

    }

    // line 129
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f619fef76ba996c02301f9e0b5113ee3039305a0e509a94ad0338ca9c5579fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f619fef76ba996c02301f9e0b5113ee3039305a0e509a94ad0338ca9c5579fb5->enter($__internal_f619fef76ba996c02301f9e0b5113ee3039305a0e509a94ad0338ca9c5579fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_8624cfe27eb0a484c9782a127e74f917c94d20a704284ca6cd55da84ba5ae4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8624cfe27eb0a484c9782a127e74f917c94d20a704284ca6cd55da84ba5ae4cc->enter($__internal_8624cfe27eb0a484c9782a127e74f917c94d20a704284ca6cd55da84ba5ae4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_8624cfe27eb0a484c9782a127e74f917c94d20a704284ca6cd55da84ba5ae4cc->leave($__internal_8624cfe27eb0a484c9782a127e74f917c94d20a704284ca6cd55da84ba5ae4cc_prof);

        
        $__internal_f619fef76ba996c02301f9e0b5113ee3039305a0e509a94ad0338ca9c5579fb5->leave($__internal_f619fef76ba996c02301f9e0b5113ee3039305a0e509a94ad0338ca9c5579fb5_prof);

    }

    public function getTemplateName()
    {
        return ":form:custom_fields.html.twig";
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
{%- endblock choice_widget_expanded -%}", ":form:custom_fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/form/custom_fields.html.twig");
    }
}
