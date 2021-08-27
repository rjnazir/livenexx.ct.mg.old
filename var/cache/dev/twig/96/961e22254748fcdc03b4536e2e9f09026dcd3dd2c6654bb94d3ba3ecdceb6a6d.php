<?php

/* form/fields.html.twig */
class __TwigTemplate_ca2dbfa2b5cd0a014afac1f1bfe9fed9e382c7d0026fc6b1e769097c3caa2b14 extends Twig_Template
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
        $__internal_9e0e989f7dcb8840f511dbf8ebed34d25cb209f6d05220cc0650bfd8856f5958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0e989f7dcb8840f511dbf8ebed34d25cb209f6d05220cc0650bfd8856f5958->enter($__internal_9e0e989f7dcb8840f511dbf8ebed34d25cb209f6d05220cc0650bfd8856f5958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_c23ac4836bad53542d576b2a1cb99b86916c1d00f6f6b8aace4566f351f62f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23ac4836bad53542d576b2a1cb99b86916c1d00f6f6b8aace4566f351f62f2a->enter($__internal_c23ac4836bad53542d576b2a1cb99b86916c1d00f6f6b8aace4566f351f62f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

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
        
        $__internal_9e0e989f7dcb8840f511dbf8ebed34d25cb209f6d05220cc0650bfd8856f5958->leave($__internal_9e0e989f7dcb8840f511dbf8ebed34d25cb209f6d05220cc0650bfd8856f5958_prof);

        
        $__internal_c23ac4836bad53542d576b2a1cb99b86916c1d00f6f6b8aace4566f351f62f2a->leave($__internal_c23ac4836bad53542d576b2a1cb99b86916c1d00f6f6b8aace4566f351f62f2a_prof);

    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_1e6faf8a04bcec4e70f51ef41949122773653daca4d9fec0f47644e750f80306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6faf8a04bcec4e70f51ef41949122773653daca4d9fec0f47644e750f80306->enter($__internal_1e6faf8a04bcec4e70f51ef41949122773653daca4d9fec0f47644e750f80306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_28aeae24fffa37ace21f48dd14514cc90f27b98a44ee4e43eaca04801d8cb6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aeae24fffa37ace21f48dd14514cc90f27b98a44ee4e43eaca04801d8cb6c3->enter($__internal_28aeae24fffa37ace21f48dd14514cc90f27b98a44ee4e43eaca04801d8cb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_28aeae24fffa37ace21f48dd14514cc90f27b98a44ee4e43eaca04801d8cb6c3->leave($__internal_28aeae24fffa37ace21f48dd14514cc90f27b98a44ee4e43eaca04801d8cb6c3_prof);

        
        $__internal_1e6faf8a04bcec4e70f51ef41949122773653daca4d9fec0f47644e750f80306->leave($__internal_1e6faf8a04bcec4e70f51ef41949122773653daca4d9fec0f47644e750f80306_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d0d6a6e3f7bdb7471de6344177586ae8c1d5b738f03f2784d480d503d4c57689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d6a6e3f7bdb7471de6344177586ae8c1d5b738f03f2784d480d503d4c57689->enter($__internal_d0d6a6e3f7bdb7471de6344177586ae8c1d5b738f03f2784d480d503d4c57689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f466bf97efa425b0e211389579509ee0d6b306ac5a02a798fbae768cc0ee68ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f466bf97efa425b0e211389579509ee0d6b306ac5a02a798fbae768cc0ee68ea->enter($__internal_f466bf97efa425b0e211389579509ee0d6b306ac5a02a798fbae768cc0ee68ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_f466bf97efa425b0e211389579509ee0d6b306ac5a02a798fbae768cc0ee68ea->leave($__internal_f466bf97efa425b0e211389579509ee0d6b306ac5a02a798fbae768cc0ee68ea_prof);

        
        $__internal_d0d6a6e3f7bdb7471de6344177586ae8c1d5b738f03f2784d480d503d4c57689->leave($__internal_d0d6a6e3f7bdb7471de6344177586ae8c1d5b738f03f2784d480d503d4c57689_prof);

    }

    // line 26
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2dcbe4c5c905d0411032cb7666e296e89868d770f992e6a3e96e4a7a142102f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcbe4c5c905d0411032cb7666e296e89868d770f992e6a3e96e4a7a142102f2->enter($__internal_2dcbe4c5c905d0411032cb7666e296e89868d770f992e6a3e96e4a7a142102f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a77d6e02770072e389cb9c716a05e43b909d77359cd66122ac8523645575637b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77d6e02770072e389cb9c716a05e43b909d77359cd66122ac8523645575637b->enter($__internal_a77d6e02770072e389cb9c716a05e43b909d77359cd66122ac8523645575637b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a77d6e02770072e389cb9c716a05e43b909d77359cd66122ac8523645575637b->leave($__internal_a77d6e02770072e389cb9c716a05e43b909d77359cd66122ac8523645575637b_prof);

        
        $__internal_2dcbe4c5c905d0411032cb7666e296e89868d770f992e6a3e96e4a7a142102f2->leave($__internal_2dcbe4c5c905d0411032cb7666e296e89868d770f992e6a3e96e4a7a142102f2_prof);

    }

    // line 48
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_3ede05565f96ab64d334a1b7936ea7bc7bca8bb8c589e2faf8e5af86aa4b6268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ede05565f96ab64d334a1b7936ea7bc7bca8bb8c589e2faf8e5af86aa4b6268->enter($__internal_3ede05565f96ab64d334a1b7936ea7bc7bca8bb8c589e2faf8e5af86aa4b6268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_6965ca2e3b7c182fa4cd45b16b012b423b4b603ed21258164e42da56befc9d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6965ca2e3b7c182fa4cd45b16b012b423b4b603ed21258164e42da56befc9d30->enter($__internal_6965ca2e3b7c182fa4cd45b16b012b423b4b603ed21258164e42da56befc9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 50
        echo "            <input min=\"0\" oninvalid=\"setErrorClass(\$(this));\" class=\"form-control\" type=\"number\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        
        $__internal_6965ca2e3b7c182fa4cd45b16b012b423b4b603ed21258164e42da56befc9d30->leave($__internal_6965ca2e3b7c182fa4cd45b16b012b423b4b603ed21258164e42da56befc9d30_prof);

        
        $__internal_3ede05565f96ab64d334a1b7936ea7bc7bca8bb8c589e2faf8e5af86aa4b6268->leave($__internal_3ede05565f96ab64d334a1b7936ea7bc7bca8bb8c589e2faf8e5af86aa4b6268_prof);

    }

    // line 55
    public function block_text_widget($context, array $blocks = array())
    {
        $__internal_e0140f455db802243bffbc1ae83992628be159919b27b3706162b4142bf906de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0140f455db802243bffbc1ae83992628be159919b27b3706162b4142bf906de->enter($__internal_e0140f455db802243bffbc1ae83992628be159919b27b3706162b4142bf906de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_bb01a607d74d2fae42eabff2fc491278300da3e0aca638e34a8c09bc6b00c40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb01a607d74d2fae42eabff2fc491278300da3e0aca638e34a8c09bc6b00c40b->enter($__internal_bb01a607d74d2fae42eabff2fc491278300da3e0aca638e34a8c09bc6b00c40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "text_widget"));

        // line 57
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\" />
";
        
        $__internal_bb01a607d74d2fae42eabff2fc491278300da3e0aca638e34a8c09bc6b00c40b->leave($__internal_bb01a607d74d2fae42eabff2fc491278300da3e0aca638e34a8c09bc6b00c40b_prof);

        
        $__internal_e0140f455db802243bffbc1ae83992628be159919b27b3706162b4142bf906de->leave($__internal_e0140f455db802243bffbc1ae83992628be159919b27b3706162b4142bf906de_prof);

    }

    // line 60
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_23def4c263d091a19e14d4c34efb59357e1604ad3d77ae5fac8cbf5e71a680ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23def4c263d091a19e14d4c34efb59357e1604ad3d77ae5fac8cbf5e71a680ad->enter($__internal_23def4c263d091a19e14d4c34efb59357e1604ad3d77ae5fac8cbf5e71a680ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_4b9b5da586e7e07aa80b05caeb983b23f37ea0fa4ecc081528cd83e5a84cbf56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9b5da586e7e07aa80b05caeb983b23f37ea0fa4ecc081528cd83e5a84cbf56->enter($__internal_4b9b5da586e7e07aa80b05caeb983b23f37ea0fa4ecc081528cd83e5a84cbf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 62
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\" oninvalid=\"setErrorClass(\$(this));\"/>
";
        
        $__internal_4b9b5da586e7e07aa80b05caeb983b23f37ea0fa4ecc081528cd83e5a84cbf56->leave($__internal_4b9b5da586e7e07aa80b05caeb983b23f37ea0fa4ecc081528cd83e5a84cbf56_prof);

        
        $__internal_23def4c263d091a19e14d4c34efb59357e1604ad3d77ae5fac8cbf5e71a680ad->leave($__internal_23def4c263d091a19e14d4c34efb59357e1604ad3d77ae5fac8cbf5e71a680ad_prof);

    }

    // line 66
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_87c9cdec245102779c2fa6a573cfd11792318a3341f9f217e5bc059f97137948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c9cdec245102779c2fa6a573cfd11792318a3341f9f217e5bc059f97137948->enter($__internal_87c9cdec245102779c2fa6a573cfd11792318a3341f9f217e5bc059f97137948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_92aee82cc49cd0dfed3434cf5f5516694b848c2739abcf5cd91f1c21c6bf5533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92aee82cc49cd0dfed3434cf5f5516694b848c2739abcf5cd91f1c21c6bf5533->enter($__internal_92aee82cc49cd0dfed3434cf5f5516694b848c2739abcf5cd91f1c21c6bf5533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_92aee82cc49cd0dfed3434cf5f5516694b848c2739abcf5cd91f1c21c6bf5533->leave($__internal_92aee82cc49cd0dfed3434cf5f5516694b848c2739abcf5cd91f1c21c6bf5533_prof);

        
        $__internal_87c9cdec245102779c2fa6a573cfd11792318a3341f9f217e5bc059f97137948->leave($__internal_87c9cdec245102779c2fa6a573cfd11792318a3341f9f217e5bc059f97137948_prof);

    }

    // line 72
    public function block_field_widget($context, array $blocks = array())
    {
        $__internal_71c15ab10008572dd25b0f3cde27a49793bc4b50d72b5f0c38386f8862217505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c15ab10008572dd25b0f3cde27a49793bc4b50d72b5f0c38386f8862217505->enter($__internal_71c15ab10008572dd25b0f3cde27a49793bc4b50d72b5f0c38386f8862217505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

        $__internal_3eb6a906c7bdffbde635d42cceb9a073edc045db0194db894111ae064a0a8d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb6a906c7bdffbde635d42cceb9a073edc045db0194db894111ae064a0a8d78->enter($__internal_3eb6a906c7bdffbde635d42cceb9a073edc045db0194db894111ae064a0a8d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_widget"));

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
        
        $__internal_3eb6a906c7bdffbde635d42cceb9a073edc045db0194db894111ae064a0a8d78->leave($__internal_3eb6a906c7bdffbde635d42cceb9a073edc045db0194db894111ae064a0a8d78_prof);

        
        $__internal_71c15ab10008572dd25b0f3cde27a49793bc4b50d72b5f0c38386f8862217505->leave($__internal_71c15ab10008572dd25b0f3cde27a49793bc4b50d72b5f0c38386f8862217505_prof);

    }

    // line 78
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_31daf73e7cc50b813d0385dfeaf202079fe4ff77bc091bf8263ab2f638f75ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31daf73e7cc50b813d0385dfeaf202079fe4ff77bc091bf8263ab2f638f75ae6->enter($__internal_31daf73e7cc50b813d0385dfeaf202079fe4ff77bc091bf8263ab2f638f75ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_27d98454c083bb20c6c359364e3797c9aa1b6314d2578cd218bdb6e45a14a435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d98454c083bb20c6c359364e3797c9aa1b6314d2578cd218bdb6e45a14a435->enter($__internal_27d98454c083bb20c6c359364e3797c9aa1b6314d2578cd218bdb6e45a14a435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

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
        
        $__internal_27d98454c083bb20c6c359364e3797c9aa1b6314d2578cd218bdb6e45a14a435->leave($__internal_27d98454c083bb20c6c359364e3797c9aa1b6314d2578cd218bdb6e45a14a435_prof);

        
        $__internal_31daf73e7cc50b813d0385dfeaf202079fe4ff77bc091bf8263ab2f638f75ae6->leave($__internal_31daf73e7cc50b813d0385dfeaf202079fe4ff77bc091bf8263ab2f638f75ae6_prof);

    }

    // line 86
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_f15e42ccf2a10c87743e42982d36b7105ed34159f966ae87d85d9fa59b7bfb4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15e42ccf2a10c87743e42982d36b7105ed34159f966ae87d85d9fa59b7bfb4c->enter($__internal_f15e42ccf2a10c87743e42982d36b7105ed34159f966ae87d85d9fa59b7bfb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_3a1f22aa517940ed480754116a28bc7c15eb10612706834578d1c6b0ec4d7b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1f22aa517940ed480754116a28bc7c15eb10612706834578d1c6b0ec4d7b84->enter($__internal_3a1f22aa517940ed480754116a28bc7c15eb10612706834578d1c6b0ec4d7b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_3a1f22aa517940ed480754116a28bc7c15eb10612706834578d1c6b0ec4d7b84->leave($__internal_3a1f22aa517940ed480754116a28bc7c15eb10612706834578d1c6b0ec4d7b84_prof);

        
        $__internal_f15e42ccf2a10c87743e42982d36b7105ed34159f966ae87d85d9fa59b7bfb4c->leave($__internal_f15e42ccf2a10c87743e42982d36b7105ed34159f966ae87d85d9fa59b7bfb4c_prof);

    }

    // line 108
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d36f62f64aeddbab3c85562b3a5cec87d444f9f70979d1ccc9cd5cbafe2c5abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36f62f64aeddbab3c85562b3a5cec87d444f9f70979d1ccc9cd5cbafe2c5abe->enter($__internal_d36f62f64aeddbab3c85562b3a5cec87d444f9f70979d1ccc9cd5cbafe2c5abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6468c27a2ad4988a08646dedbbfe01c6127c9c69ec7b92c974d9360bb0d17fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6468c27a2ad4988a08646dedbbfe01c6127c9c69ec7b92c974d9360bb0d17fa5->enter($__internal_6468c27a2ad4988a08646dedbbfe01c6127c9c69ec7b92c974d9360bb0d17fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 110
        echo "        <textarea oninvalid=\"setErrorClass(\$(this));\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
";
        
        $__internal_6468c27a2ad4988a08646dedbbfe01c6127c9c69ec7b92c974d9360bb0d17fa5->leave($__internal_6468c27a2ad4988a08646dedbbfe01c6127c9c69ec7b92c974d9360bb0d17fa5_prof);

        
        $__internal_d36f62f64aeddbab3c85562b3a5cec87d444f9f70979d1ccc9cd5cbafe2c5abe->leave($__internal_d36f62f64aeddbab3c85562b3a5cec87d444f9f70979d1ccc9cd5cbafe2c5abe_prof);

    }

    // line 115
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4c7ec05aaef5a94678a7553b0fd951c575c4126b865c68aa5e6c700ddacba64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7ec05aaef5a94678a7553b0fd951c575c4126b865c68aa5e6c700ddacba64d->enter($__internal_4c7ec05aaef5a94678a7553b0fd951c575c4126b865c68aa5e6c700ddacba64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_3131a80ed68b16d12d774bc01be58b611aad62345a0215509c930dc579b39692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3131a80ed68b16d12d774bc01be58b611aad62345a0215509c930dc579b39692->enter($__internal_3131a80ed68b16d12d774bc01be58b611aad62345a0215509c930dc579b39692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_3131a80ed68b16d12d774bc01be58b611aad62345a0215509c930dc579b39692->leave($__internal_3131a80ed68b16d12d774bc01be58b611aad62345a0215509c930dc579b39692_prof);

        
        $__internal_4c7ec05aaef5a94678a7553b0fd951c575c4126b865c68aa5e6c700ddacba64d->leave($__internal_4c7ec05aaef5a94678a7553b0fd951c575c4126b865c68aa5e6c700ddacba64d_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
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
{%- endblock choice_widget_expanded -%}", "form/fields.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
