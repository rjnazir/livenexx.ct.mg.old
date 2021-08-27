<?php

/* @User/User/edit.html.twig */
class __TwigTemplate_22e78c59c6be4e9bd7b8beff625d6b992135148f63462aa4004dff682d474d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@User/User/edit.html.twig", 1);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bc99ec2bf3286d22f53622beb09119c7e70997dc917d56a6a1f379e4adfec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc99ec2bf3286d22f53622beb09119c7e70997dc917d56a6a1f379e4adfec24->enter($__internal_5bc99ec2bf3286d22f53622beb09119c7e70997dc917d56a6a1f379e4adfec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/edit.html.twig"));

        $__internal_0d0458ee3d202661c793fa94f96183613733e604517e09e8a9d8087555cc6e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0458ee3d202661c793fa94f96183613733e604517e09e8a9d8087555cc6e6d->enter($__internal_0d0458ee3d202661c793fa94f96183613733e604517e09e8a9d8087555cc6e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/User/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), array(0 => $this));
        // line 33
        $context["menu_user"] = true;
        // line 34
        $context["menu_user_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bc99ec2bf3286d22f53622beb09119c7e70997dc917d56a6a1f379e4adfec24->leave($__internal_5bc99ec2bf3286d22f53622beb09119c7e70997dc917d56a6a1f379e4adfec24_prof);

        
        $__internal_0d0458ee3d202661c793fa94f96183613733e604517e09e8a9d8087555cc6e6d->leave($__internal_0d0458ee3d202661c793fa94f96183613733e604517e09e8a9d8087555cc6e6d_prof);

    }

    // line 6
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b298c133cc7c3c388e4bbfd2a3f45db7735170986923aa40230783db82ade11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b298c133cc7c3c388e4bbfd2a3f45db7735170986923aa40230783db82ade11e->enter($__internal_b298c133cc7c3c388e4bbfd2a3f45db7735170986923aa40230783db82ade11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a55632ba182769b40edce49df7a70b2c60fd59c533ec391313ff6ca2dd0c543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55632ba182769b40edce49df7a70b2c60fd59c533ec391313ff6ca2dd0c543f->enter($__internal_a55632ba182769b40edce49df7a70b2c60fd59c533ec391313ff6ca2dd0c543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 7
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 8
            $context["required"] = false;
        }
        // line 10
        echo "<span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                ";
        // line 12
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 13
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 14
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 15
            echo twig_escape_filter($this->env, (((($context["placeholder"] ?? $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "
                </option>";
        }
        // line 18
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 19
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 20
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 21
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 22
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 25
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 26
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 27
        echo "</select>
    </span>";
        
        $__internal_a55632ba182769b40edce49df7a70b2c60fd59c533ec391313ff6ca2dd0c543f->leave($__internal_a55632ba182769b40edce49df7a70b2c60fd59c533ec391313ff6ca2dd0c543f_prof);

        
        $__internal_b298c133cc7c3c388e4bbfd2a3f45db7735170986923aa40230783db82ade11e->leave($__internal_b298c133cc7c3c388e4bbfd2a3f45db7735170986923aa40230783db82ade11e_prof);

    }

    // line 31
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7323fc370f90f1cf813cb29b94d2fd42fba5b35c860c25307e63e3fd232a437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7323fc370f90f1cf813cb29b94d2fd42fba5b35c860c25307e63e3fd232a437->enter($__internal_b7323fc370f90f1cf813cb29b94d2fd42fba5b35c860c25307e63e3fd232a437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c536a7c96723b9320514a694a6e8789682fba471f5318acdd5dd330cc0448c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c536a7c96723b9320514a694a6e8789682fba471f5318acdd5dd330cc0448c7->enter($__internal_2c536a7c96723b9320514a694a6e8789682fba471f5318acdd5dd330cc0448c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Utilisateur ";
        
        $__internal_2c536a7c96723b9320514a694a6e8789682fba471f5318acdd5dd330cc0448c7->leave($__internal_2c536a7c96723b9320514a694a6e8789682fba471f5318acdd5dd330cc0448c7_prof);

        
        $__internal_b7323fc370f90f1cf813cb29b94d2fd42fba5b35c860c25307e63e3fd232a437->leave($__internal_b7323fc370f90f1cf813cb29b94d2fd42fba5b35c860c25307e63e3fd232a437_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_03e67d3b5c4c0ccc683a4ca71f53e2b73a908324ea0029f226f049634f01e001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e67d3b5c4c0ccc683a4ca71f53e2b73a908324ea0029f226f049634f01e001->enter($__internal_03e67d3b5c4c0ccc683a4ca71f53e2b73a908324ea0029f226f049634f01e001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3325fcc2c6e3bfa68f8404aa4fb49f0fe8b644164ecd0fa4f05be29427a6a47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3325fcc2c6e3bfa68f8404aa4fb49f0fe8b644164ecd0fa4f05be29427a6a47c->enter($__internal_3325fcc2c6e3bfa68f8404aa4fb49f0fe8b644164ecd0fa4f05be29427a6a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 38
            echo "        <div class=\"callout callout-success\">
            ";
            // line 39
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 43
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 44
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un utilisateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"";
        // line 57
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            echo "hidden";
        }
        echo "\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "ctCentre", array()), 'row');
        echo "
                        </div>
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrName", array()), 'row');
        echo "
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrAdresse", array()), 'row');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrProfession", array()), 'row');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrTelephone", array()), 'row');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "
                        <div class=\"hidden\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "usrPresence", array()), 'row');
        echo "
                        </div>
                        ";
        // line 68
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 69
            echo "                            <div class=\"row\">
                        ";
        } else {
            // line 71
            echo "                            <div class=\"hidden\">
                        ";
        }
        // line 73
        echo "                                <div class=\"form-group\">
                                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                        <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                        <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\"
                                                class=\"form-control\">
                                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_roles"] ?? $this->getContext($context, "user_roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["user_role"]) {
            // line 79
            echo "                                                <option ";
            if (( !(null === $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ctRole", array())) && ($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ctRole", array()), "id", array()) == $this->getAttribute($context["user_role"], "id", array())))) {
                echo "selected";
            }
            // line 80
            echo "                                                        value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "id", array()), "html", null, true);
            echo "\">
                                                    ";
            // line 81
            if (($this->getAttribute($context["user_role"], "roleName", array()) == "Admin")) {
                // line 82
                echo "                                                        Chef de centre
                                                    ";
            } else {
                // line 84
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user_role"], "roleName", array()), "html", null, true);
                echo "
                                                    ";
            }
            // line 86
            echo "                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "username", array()), 'row');
        echo "
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "first", array()), 'row');
        echo "
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "plainPassword", array()), "second", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_user\"/>
                        ";
        // line 100
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 101
            echo "                            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                        ";
        }
        // line 106
        echo "                    </div>
                ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_3325fcc2c6e3bfa68f8404aa4fb49f0fe8b644164ecd0fa4f05be29427a6a47c->leave($__internal_3325fcc2c6e3bfa68f8404aa4fb49f0fe8b644164ecd0fa4f05be29427a6a47c_prof);

        
        $__internal_03e67d3b5c4c0ccc683a4ca71f53e2b73a908324ea0029f226f049634f01e001->leave($__internal_03e67d3b5c4c0ccc683a4ca71f53e2b73a908324ea0029f226f049634f01e001_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cfb577d618945301d50b8b87ba308c5053ed6ec586d5cbf9025a59210cbece3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfb577d618945301d50b8b87ba308c5053ed6ec586d5cbf9025a59210cbece3->enter($__internal_9cfb577d618945301d50b8b87ba308c5053ed6ec586d5cbf9025a59210cbece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3fef7395e77bcb0d64f3905f22ac1aa286539d2e2ff8fdbe4642ebe0cae3e6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef7395e77bcb0d64f3905f22ac1aa286539d2e2ff8fdbe4642ebe0cae3e6d3->enter($__internal_3fef7395e77bcb0d64f3905f22ac1aa286539d2e2ff8fdbe4642ebe0cae3e6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
";
        
        $__internal_3fef7395e77bcb0d64f3905f22ac1aa286539d2e2ff8fdbe4642ebe0cae3e6d3->leave($__internal_3fef7395e77bcb0d64f3905f22ac1aa286539d2e2ff8fdbe4642ebe0cae3e6d3_prof);

        
        $__internal_9cfb577d618945301d50b8b87ba308c5053ed6ec586d5cbf9025a59210cbece3->leave($__internal_9cfb577d618945301d50b8b87ba308c5053ed6ec586d5cbf9025a59210cbece3_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 114,  335 => 113,  320 => 107,  317 => 106,  308 => 101,  306 => 100,  298 => 95,  294 => 94,  290 => 93,  283 => 88,  276 => 86,  270 => 84,  266 => 82,  264 => 81,  259 => 80,  254 => 79,  250 => 78,  243 => 73,  239 => 71,  235 => 69,  233 => 68,  228 => 66,  223 => 64,  219 => 63,  215 => 62,  211 => 61,  207 => 60,  202 => 58,  196 => 57,  187 => 51,  181 => 47,  172 => 44,  169 => 43,  164 => 42,  155 => 39,  152 => 38,  147 => 37,  138 => 36,  119 => 31,  108 => 27,  106 => 26,  104 => 25,  98 => 22,  96 => 21,  94 => 20,  92 => 19,  90 => 18,  85 => 15,  78 => 14,  76 => 13,  70 => 12,  66 => 10,  63 => 8,  61 => 7,  52 => 6,  42 => 1,  40 => 34,  38 => 33,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% form_theme edit_form.ctCentre _self %}
{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <span>
        <select class=\"select2\" data-placeholder=\"Choisir\" style=\"width: 100%;\" oninvalid=\"setErrorClass(\$(this));\"
                {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
            {%- if placeholder is not none -%}
                <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>
                    {{ placeholder != '' ? placeholder|trans({}, translation_domain) }}
                </option>
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
    </span>
{%- endblock choice_widget_collapsed -%}

{% block title %}{{ parent() }} Modification Utilisateur {% endblock %}

{% set menu_user        = true %}
{% set menu_user_create = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un utilisateur</h3>
                    </div>

                    <div class=\"box-body\">
                        <div class=\"{% if not is_granted('ROLE_SUPERADMIN') %}hidden{% endif %}\">
                            {{ form_row(edit_form.ctCentre) }}
                        </div>
                        {{ form_row(edit_form.usrName) }}
                        {{ form_row(edit_form.usrAdresse) }}
                        {{ form_row(edit_form.usrProfession) }}
                        {{ form_row(edit_form.usrTelephone) }}
                        {{ form_row(edit_form.email) }}
                        <div class=\"hidden\">
                            {{ form_row(edit_form.usrPresence) }}
                        </div>
                        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                            <div class=\"row\">
                        {% else %}
                            <div class=\"hidden\">
                        {% endif %}
                                <div class=\"form-group\">
                                    <div class=\"col-sm-6 col-md-6 col-lg-4\">
                                        <label for=\"ct_userbundle_user_role\">Rôle utilisateur</label>
                                        <select id=\"ct_userbundle_user_role\" name=\"ct_userbundle_user_role\"
                                                class=\"form-control\">
                                            {% for user_role in user_roles %}
                                                <option {% if user.ctRole is not null and (user.ctRole.id == user_role.id) %}selected{% endif %}
                                                        value=\"{{ user_role.id }}\">
                                                    {% if (user_role.roleName == 'Admin') %}
                                                        Chef de centre
                                                    {% else %}
                                                        {{ user_role.roleName }}
                                                    {% endif %}
                                                </option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        {{ form_row(edit_form.username) }}
                        {{ form_row(edit_form.plainPassword.first) }}
                        {{ form_row(edit_form.plainPassword.second) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_user\"/>
                        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('user_index') }}\"
                               class=\"btn btn-default pull-left btn-mini-rectif\" >
                                Retour à la liste
                            </a>
                        {% endif %}
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            // Enlever l'obligation du champ mot de passe
            \$('#ct_userbundle_user_plainPassword_first, #ct_userbundle_user_plainPassword_second').removeAttr('required');
        });
    </script>
{% endblock %}", "@User/User/edit.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\Service\\UserBundle\\Resources\\views\\User\\edit.html.twig");
    }
}
