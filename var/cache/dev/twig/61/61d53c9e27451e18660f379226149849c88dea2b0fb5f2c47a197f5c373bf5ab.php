<?php

/* :backoffice:base_admin_sidebar.html.twig */
class __TwigTemplate_88739765ad204bba09e322927000703251236264c6e42e631757814f37c08db9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab1ae1b4cb7b12659388005551a34ba6e3169b9e736c36113a5563fb104fedb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1ae1b4cb7b12659388005551a34ba6e3169b9e736c36113a5563fb104fedb2->enter($__internal_ab1ae1b4cb7b12659388005551a34ba6e3169b9e736c36113a5563fb104fedb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_sidebar.html.twig"));

        $__internal_67b042e3a59b852932646b0aba4fbb781ab227c8965236590e505de8e8b64bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b042e3a59b852932646b0aba4fbb781ab227c8965236590e505de8e8b64bc6->enter($__internal_67b042e3a59b852932646b0aba4fbb781ab227c8965236590e505de8e8b64bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backoffice:base_admin_sidebar.html.twig"));

        // line 1
        $context["active"] = "active";
        // line 2
        echo "
<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <ul class=\"sidebar-menu\">
            <li class=\"";
        // line 6
        if (array_key_exists("menu_dashboard", $context)) {
            echo "active";
        }
        echo " treeview\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\">
                    <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
                </a>
            </li>

            ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                ";
            // line 14
            echo "                <li class=\"treeview ";
            if ((array_key_exists("menu_user", $context) || array_key_exists("menu_role", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i>
                        <span>Administrateur</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 24
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_user", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-user\"></i>
                                <span>Utilisateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 33
            if (array_key_exists("menu_user_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 36
            if (array_key_exists("menu_user_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 42
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 43
                echo "                            ";
                // line 44
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_role", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-balance-scale\"></i>
                                    <span>Rôle</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 53
                if (array_key_exists("menu_role_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 56
                if (array_key_exists("menu_role_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 57
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 62
            echo "                    </ul>
                </li>
            ";
        }
        // line 65
        echo "
            ";
        // line 66
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 67
            echo "                ";
            // line 68
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_historique", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-archive\"></i>
                        <span>Historique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 77
            if (array_key_exists("menu_historique_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 83
        echo "
            ";
        // line 84
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE"))) {
            // line 85
            echo "                ";
            // line 86
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-download\"></i>
                        <span>Réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 95
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 96
                echo "                            ";
                // line 97
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_type_reception", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 106
                if (array_key_exists("menu_type_reception_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 107
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 109
                if (array_key_exists("menu_type_reception_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 110
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_reception_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 115
            echo "
                        ";
            // line 117
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-caret-square-o-down\"></i>
                                <span>Réception</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 126
            if (array_key_exists("menu_reception_create_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"";
            // line 129
            if (array_key_exists("menu_reception_duplicata", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 130
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_duplicata");
            echo "\"><i class=\"fa fa-circle-o\"></i> Duplicata</a>
                                </li>
                                <li class=\"";
            // line 132
            if (array_key_exists("menu_reception_search", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 133
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reception_search");
            echo "\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 140
        echo "
            ";
        // line 141
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 142
            echo "                ";
            // line 143
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_reception", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 152
            if (array_key_exists("menu_statistique_reception_voir", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_reception_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 158
        echo "
            ";
        // line 159
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 160
            echo "                ";
            // line 161
            echo "                <li class=\"treeview ";
            if (((array_key_exists("menu_carte_grise", $context) || array_key_exists("menu_visite", $context)) || array_key_exists("menu_contre_visite", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-stethoscope\"></i>
                        <span>Visite technique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 170
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 171
                echo "                            ";
                // line 172
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_type_visite", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 181
                if (array_key_exists("menu_type_visite_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 182
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 184
                if (array_key_exists("menu_type_visite_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 185
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 190
            echo "
                        ";
            // line 192
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_carte_grise", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card-o\"></i>
                                <span>Renseignements véhicule</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 202
            echo "                                ";
            // line 203
            echo "                                ";
            // line 204
            echo "                                <li class=\"";
            if (array_key_exists("menu_carte_grise_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 211
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card\"></i>
                                <span>Visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 221
            echo "                                ";
            // line 222
            echo "                                ";
            // line 223
            echo "                                <li class=\"";
            if (array_key_exists("menu_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 224
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"";
            // line 226
            if (array_key_exists("menu_visite_search", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 227
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_search");
            echo "\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 233
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_contre_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-times-rectangle\"></i>
                                <span>Contre visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 243
            echo "                                ";
            // line 244
            echo "                                ";
            // line 245
            echo "                                <li class=\"";
            if (array_key_exists("menu_contre_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 246
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contre_visite_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 253
        echo "
            ";
        // line 254
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 255
            echo "                ";
            // line 256
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_visite", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique visite</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 265
            if (array_key_exists("menu_statistique_visite_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_visite_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 271
        echo "
            ";
        // line 272
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION"))) {
            // line 273
            echo "                ";
            // line 274
            echo "                <li class=\"treeview ";
            if ((array_key_exists("menu_const_av_ded", $context) || array_key_exists("menu_const_av_ded_type", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-credit-card\"></i>
                        <span>Constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 283
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 284
                echo "                            ";
                // line 285
                echo "                            <li class=\"treeview ";
                if (array_key_exists("menu_const_av_ded_type", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"";
                // line 294
                if (array_key_exists("menu_const_av_ded_type_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 295
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"";
                // line 297
                if (array_key_exists("menu_const_av_ded_type_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                        <a href=\"";
                // line 298
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_const_av_ded_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        ";
            }
            // line 303
            echo "
                        ";
            // line 305
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_const_av_ded", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-credit-card-alt\"></i>
                                <span>Constatation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 314
            if (array_key_exists("menu_const_av_ded_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 317
            if (array_key_exists("menu_const_av_ded_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 318
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("const_av_ded_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 325
        echo "
            ";
        // line 326
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_STAFF"))) {
            // line 327
            echo "                ";
            // line 328
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_statistique_constatation", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
            // line 337
            if (array_key_exists("menu_statistique_constatation_voir", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"";
            // line 338
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("statistique_constatation_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 343
        echo "
            ";
        // line 344
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
            // line 345
            echo "                ";
            // line 346
            echo "                <li class=\"treeview
                    ";
            // line 347
            if ((((((((((((((((((((array_key_exists("menu_marque", $context) || array_key_exists("menu_centre", $context)) || array_key_exists("menu_province", $context)) ||             // line 348
array_key_exists("menu_motif", $context)) || array_key_exists("menu_genre", $context)) || array_key_exists("menu_carosserie", $context)) ||             // line 349
array_key_exists("menu_energie", $context)) || array_key_exists("menu_verificateur", $context)) || array_key_exists("menu_utilisation", $context)) ||             // line 350
array_key_exists("menu_anomalie", $context)) || array_key_exists("menu_proces_verbal", $context)) || array_key_exists("menu_droit_ptac", $context)) ||             // line 351
array_key_exists("menu_type_droit_ptac", $context)) ||             // line 352
array_key_exists("menu_usage", $context)) || array_key_exists("menu_type_usage", $context)) || array_key_exists("menu_usage_tarif", $context)) ||             // line 353
array_key_exists("menu_genre_categorie", $context)) || array_key_exists("menu_visite_extra", $context)) ||             // line 354
array_key_exists("menu_visite_extra_type", $context)) || array_key_exists("menu_zone_deserte", $context))) {
                // line 355
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-database\"></i>
                        <span>Données de base</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 365
            echo "                        <li class=\"treeview ";
            if ((array_key_exists("menu_centre", $context) || array_key_exists("menu_province", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-map\"></i>
                                <span>Lieux</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 375
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_province", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        <span>Province</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 384
            if (array_key_exists("menu_province_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 385
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 387
            if (array_key_exists("menu_province_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 388
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 394
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_centre", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-o\"></i>
                                        <span>Centre</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 403
            if (array_key_exists("menu_centre_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 404
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 406
            if (array_key_exists("menu_centre_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 407
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 415
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_verificateur", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 424
            if (array_key_exists("menu_verificateur_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 425
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_index");
            echo "\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                                <li class=\"";
            // line 429
            if (array_key_exists("menu_verificateur_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 430
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verificateur_new");
            echo "\">
                                        <i class=\"fa fa-circle-o\"></i> Créer
                                    </a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 438
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_marque", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-header\"></i>
                                <span>Marque</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 447
            if (array_key_exists("menu_marque_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 448
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 450
            if (array_key_exists("menu_marque_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 451
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 457
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_carosserie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i>
                                <span>Carrosserie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 466
            if (array_key_exists("menu_carosserie_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 467
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 469
            if (array_key_exists("menu_carosserie_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 470
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 476
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_energie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-battery\"></i>
                                <span>Source énergie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 485
            if (array_key_exists("menu_energie_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 486
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 488
            if (array_key_exists("menu_energie_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 489
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("energie_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 495
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_utilisation", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-rock-o\"></i>
                                <span>Utilisation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 504
            if (array_key_exists("menu_utilisation_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 505
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 507
            if (array_key_exists("menu_utilisation_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 508
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 514
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_genre", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-clipboard\"></i>
                                <span>Genre</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 524
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_genre_type", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 533
            if (array_key_exists("menu_genre_type_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 534
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 536
            if (array_key_exists("menu_genre_type_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 537
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 543
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_genre_categorie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Categorie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 552
            if (array_key_exists("menu_genre_categorie_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 553
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 555
            if (array_key_exists("menu_genre_categorie_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 556
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_categorie_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        ";
            // line 563
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_visite_extra", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-server\"></i>
                                <span>Visite extra</span>
                                <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 573
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_visite_extra_type", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 582
            if (array_key_exists("menu_visite_extra_type_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 583
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 585
            if (array_key_exists("menu_visite_extra_type_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 586
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 592
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_visite_extra_tarif", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 601
            if (array_key_exists("menu_visite_extra_tarif_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 602
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 604
            if (array_key_exists("menu_visite_extra_tarif_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 605
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_tarif_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 613
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_motif", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-newspaper-o\"></i>
                                <span>Motif</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 623
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_motif_type", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 632
            if (array_key_exists("menu_motif_type_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 633
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 635
            if (array_key_exists("menu_motif_type_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 636
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 642
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_motif_tarif", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 651
            if (array_key_exists("menu_motif_tarif_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 652
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 654
            if (array_key_exists("menu_motif_tarif_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 655
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 663
            echo "                        <li class=\"treeview ";
            if (((array_key_exists("menu_type_usage", $context) || array_key_exists("menu_usage", $context)) || array_key_exists("menu_usage_tarif", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-lizard-o\"></i>
                                <span>Usage</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 673
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_type_usage", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 682
            if (array_key_exists("menu_type_usage_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 683
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 685
            if (array_key_exists("menu_type_usage_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 686
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 692
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_usage", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-hand-paper-o\"></i>
                                        <span>Usage</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 701
            if (array_key_exists("menu_usage_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 702
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 704
            if (array_key_exists("menu_usage_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 705
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 711
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_usage_tarif", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 720
            if (array_key_exists("menu_usage_tarif_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 721
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 723
            if (array_key_exists("menu_usage_tarif_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 724
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usage_tarif_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 732
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_anomalie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-ambulance\"></i>
                                <span>Anomalie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 742
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_type_anomalie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 751
            if (array_key_exists("menu_type_anomalie_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 752
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 754
            if (array_key_exists("menu_type_anomalie_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 755
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_anomalie_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 761
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_anomalie", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Anomalie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 770
            if (array_key_exists("menu_anomalie_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 771
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 773
            if (array_key_exists("menu_anomalie_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 774
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 782
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_proces_verbal", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-bank\"></i>
                                <span>Proces Verbal</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 791
            if (array_key_exists("menu_proces_verbal_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 792
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 794
            if (array_key_exists("menu_proces_verbal_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 795
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 801
            echo "                        <li class=\"treeview ";
            if ((array_key_exists("menu_droit_ptac", $context) || array_key_exists("menu_type_droit_ptac", $context))) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-balance-scale\"></i>
                                <span>Droit Ptac</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                ";
            // line 811
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_type_droit_ptac", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 820
            if (array_key_exists("menu_type_droit_ptac_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 821
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 823
            if (array_key_exists("menu_type_droit_ptac_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 824
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_droit_ptac_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                ";
            // line 830
            echo "                                <li class=\"treeview ";
            if (array_key_exists("menu_droit_ptac", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Droit</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"";
            // line 839
            if (array_key_exists("menu_droit_ptac_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 840
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"";
            // line 842
            if (array_key_exists("menu_droit_ptac_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                            <a href=\"";
            // line 843
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("droit_ptac_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        ";
            // line 851
            echo "                        <li class=\"treeview ";
            if (array_key_exists("menu_zone_deserte", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-map-signs\"></i>
                                <span>Zone de déserte</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
            // line 860
            if (array_key_exists("menu_zone_deserte_list", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 861
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_index");
            echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
            // line 863
            if (array_key_exists("menu_zone_deserte_create", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                                    <a href=\"";
            // line 864
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("zone_deserte_new");
            echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            ";
        }
        // line 871
        echo "

            ";
        // line 873
        if ((((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE"))) {
            // line 874
            echo "                ";
            // line 875
            echo "                ";
            // line 876
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_bordereau", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-shopping-basket\"></i>
                        <span>Imprimés techniques</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        ";
            // line 885
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 886
                echo "                        ";
                // line 887
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_bordereau", $context)) {
                    if (array_key_exists("menu_bordereau_activation", $context)) {
                        echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                    }
                }
                echo "\">
                            <a href=\"";
                // line 888
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_activation");
                echo "\"><i class=\"fa fa-check-circle\"></i> Activer des imprimés</a>
                        </li>
                        ";
            }
            // line 891
            echo "
                        ";
            // line 892
            if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RECEPTION")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_VISITE"))) {
                // line 893
                echo "                        ";
                // line 894
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_imprime_tech_use", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Utilisation IT</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 903
                if (array_key_exists("menu_imprime_tech_use_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 904
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_index");
                echo "\"><i class=\"fa fa-search\"></i> Liste des IT utilisés</a>
                                </li>
                                <li class=\"";
                // line 906
                if (array_key_exists("menu_imprime_tech_use_search", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 907
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_use_search");
                echo "\"><i class=\"fa fa-list-ol\"></i> Mise à jour utilisation IT</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 912
            echo "
                        ";
            // line 913
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT")) {
                // line 914
                echo "                        ";
                // line 915
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_bordereau", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Bordereau de livraison</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 924
                if (array_key_exists("menu_bordereau_search", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 925
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_search");
                echo "\"><i class=\"fa fa-search\"></i> Rechercher</a>
                                </li>
                                <li class=\"";
                // line 927
                if (array_key_exists("menu_bordereau_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 928
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_index");
                echo "\"><i class=\"fa fa-list-ol\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 930
                if (array_key_exists("menu_bordereau_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 931
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_new");
                echo "\"><i class=\"fa fa-plus\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 936
            echo "
                        ";
            // line 937
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 938
                echo "                        ";
                // line 939
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_imprime_tech", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-print\"></i>
                                <span>Imprimés techniques</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"";
                // line 948
                if (array_key_exists("menu_imprime_tech_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 949
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 951
                if (array_key_exists("menu_imprime_tech_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? $this->getContext($context, "active")), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 952
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 957
            echo "                    </ul>
                </li>
            ";
        }
        // line 960
        echo "        </ul>
    </section>
</aside>";
        
        $__internal_ab1ae1b4cb7b12659388005551a34ba6e3169b9e736c36113a5563fb104fedb2->leave($__internal_ab1ae1b4cb7b12659388005551a34ba6e3169b9e736c36113a5563fb104fedb2_prof);

        
        $__internal_67b042e3a59b852932646b0aba4fbb781ab227c8965236590e505de8e8b64bc6->leave($__internal_67b042e3a59b852932646b0aba4fbb781ab227c8965236590e505de8e8b64bc6_prof);

    }

    public function getTemplateName()
    {
        return ":backoffice:base_admin_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1953 => 960,  1948 => 957,  1940 => 952,  1934 => 951,  1929 => 949,  1923 => 948,  1908 => 939,  1906 => 938,  1904 => 937,  1901 => 936,  1893 => 931,  1887 => 930,  1882 => 928,  1876 => 927,  1871 => 925,  1865 => 924,  1850 => 915,  1848 => 914,  1846 => 913,  1843 => 912,  1835 => 907,  1829 => 906,  1824 => 904,  1818 => 903,  1803 => 894,  1801 => 893,  1799 => 892,  1796 => 891,  1790 => 888,  1781 => 887,  1779 => 886,  1777 => 885,  1762 => 876,  1760 => 875,  1758 => 874,  1756 => 873,  1752 => 871,  1742 => 864,  1736 => 863,  1731 => 861,  1725 => 860,  1710 => 851,  1700 => 843,  1694 => 842,  1689 => 840,  1683 => 839,  1668 => 830,  1660 => 824,  1654 => 823,  1649 => 821,  1643 => 820,  1628 => 811,  1613 => 801,  1605 => 795,  1599 => 794,  1594 => 792,  1588 => 791,  1573 => 782,  1563 => 774,  1557 => 773,  1552 => 771,  1546 => 770,  1531 => 761,  1523 => 755,  1517 => 754,  1512 => 752,  1506 => 751,  1491 => 742,  1476 => 732,  1466 => 724,  1460 => 723,  1455 => 721,  1449 => 720,  1434 => 711,  1426 => 705,  1420 => 704,  1415 => 702,  1409 => 701,  1394 => 692,  1386 => 686,  1380 => 685,  1375 => 683,  1369 => 682,  1354 => 673,  1339 => 663,  1329 => 655,  1323 => 654,  1318 => 652,  1312 => 651,  1297 => 642,  1289 => 636,  1283 => 635,  1278 => 633,  1272 => 632,  1257 => 623,  1242 => 613,  1232 => 605,  1226 => 604,  1221 => 602,  1215 => 601,  1200 => 592,  1192 => 586,  1186 => 585,  1181 => 583,  1175 => 582,  1160 => 573,  1145 => 563,  1136 => 556,  1130 => 555,  1125 => 553,  1119 => 552,  1104 => 543,  1096 => 537,  1090 => 536,  1085 => 534,  1079 => 533,  1064 => 524,  1049 => 514,  1041 => 508,  1035 => 507,  1030 => 505,  1024 => 504,  1009 => 495,  1001 => 489,  995 => 488,  990 => 486,  984 => 485,  969 => 476,  961 => 470,  955 => 469,  950 => 467,  944 => 466,  929 => 457,  921 => 451,  915 => 450,  910 => 448,  904 => 447,  889 => 438,  879 => 430,  873 => 429,  866 => 425,  860 => 424,  845 => 415,  835 => 407,  829 => 406,  824 => 404,  818 => 403,  803 => 394,  795 => 388,  789 => 387,  784 => 385,  778 => 384,  763 => 375,  748 => 365,  735 => 355,  733 => 354,  732 => 353,  731 => 352,  730 => 351,  729 => 350,  728 => 349,  727 => 348,  726 => 347,  723 => 346,  721 => 345,  719 => 344,  716 => 343,  708 => 338,  702 => 337,  687 => 328,  685 => 327,  683 => 326,  680 => 325,  670 => 318,  664 => 317,  659 => 315,  653 => 314,  638 => 305,  635 => 303,  627 => 298,  621 => 297,  616 => 295,  610 => 294,  595 => 285,  593 => 284,  591 => 283,  576 => 274,  574 => 273,  572 => 272,  569 => 271,  561 => 266,  555 => 265,  540 => 256,  538 => 255,  536 => 254,  533 => 253,  523 => 246,  516 => 245,  514 => 244,  512 => 243,  497 => 233,  489 => 227,  483 => 226,  478 => 224,  471 => 223,  469 => 222,  467 => 221,  452 => 211,  444 => 205,  437 => 204,  435 => 203,  433 => 202,  418 => 192,  415 => 190,  407 => 185,  401 => 184,  396 => 182,  390 => 181,  375 => 172,  373 => 171,  371 => 170,  356 => 161,  354 => 160,  352 => 159,  349 => 158,  341 => 153,  335 => 152,  320 => 143,  318 => 142,  316 => 141,  313 => 140,  303 => 133,  297 => 132,  292 => 130,  286 => 129,  281 => 127,  275 => 126,  260 => 117,  257 => 115,  249 => 110,  243 => 109,  238 => 107,  232 => 106,  217 => 97,  215 => 96,  213 => 95,  198 => 86,  196 => 85,  194 => 84,  191 => 83,  183 => 78,  177 => 77,  162 => 68,  160 => 67,  158 => 66,  155 => 65,  150 => 62,  142 => 57,  136 => 56,  131 => 54,  125 => 53,  110 => 44,  108 => 43,  106 => 42,  98 => 37,  92 => 36,  87 => 34,  81 => 33,  66 => 24,  51 => 14,  49 => 13,  47 => 12,  39 => 7,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set active = 'active' %}

<aside class=\"main-sidebar\">
    <section class=\"sidebar\">
        <ul class=\"sidebar-menu\">
            <li class=\"{% if menu_dashboard is defined %}active{% endif %} treeview\">
                <a href=\"{{ path('dashboard_index') }}\">
                    <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
                </a>
            </li>

            {% if is_granted('ROLE_ADMIN') %}
                {# Utilisateur #}
                <li class=\"treeview {% if menu_user is defined or menu_role is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-users\"></i>
                        <span>Administrateur</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {# Utilisateur #}
                        <li class=\"treeview {% if menu_user is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-user\"></i>
                                <span>Utilisateur</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_user_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('user_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_user_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('user_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Rôle #}
                            <li class=\"treeview {% if menu_role is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-balance-scale\"></i>
                                    <span>Rôle</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_role_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('role_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_role_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('role_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}
                    </ul>
                </li>
            {% endif %}

            {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_STAFF') %}
                {# Historique #}
                <li class=\"treeview {% if menu_historique is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-archive\"></i>
                        <span>Historique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_historique_list is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('historique_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN')) or is_granted('ROLE_VISITE') %}
                {# Réception #}
                <li class=\"treeview {% if menu_reception is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-download\"></i>
                        <span>Réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type #}
                            <li class=\"treeview {% if menu_type_reception is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_type_reception_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_reception_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_type_reception_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_reception_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Réception #}
                        <li class=\"treeview {% if menu_reception is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-caret-square-o-down\"></i>
                                <span>Réception</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_reception_create_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"{% if menu_reception_duplicata is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_duplicata') }}\"><i class=\"fa fa-circle-o\"></i> Duplicata</a>
                                </li>
                                <li class=\"{% if menu_reception_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('reception_search') }}\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique réception #}
                <li class=\"treeview {% if menu_statistique_reception is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique réception</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_reception_voir is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_reception_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_VISITE') or is_granted('ROLE_ADMIN')) %}
                {# Visite #}
                <li class=\"treeview {% if menu_carte_grise is defined or menu_visite is defined or menu_contre_visite is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-stethoscope\"></i>
                        <span>Visite technique</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type de visite #}
                            <li class=\"treeview {% if menu_type_visite is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_type_visite_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_type_visite_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Carte grise #}
                        <li class=\"treeview {% if menu_carte_grise is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card-o\"></i>
                                <span>Renseignements véhicule</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_carte_grise_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('carte_grise_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_carte_grise_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carte_grise_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Visite #}
                        <li class=\"treeview {% if menu_visite is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-address-card\"></i>
                                <span>Visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_visite_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_visite_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                                <li class=\"{% if menu_visite_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('visite_search') }}\"><i class=\"fa fa-circle-o\"></i> Rechercher</a>
                                </li>
                            </ul>
                        </li>

                        {# Contre visite #}
                        <li class=\"treeview {% if menu_contre_visite is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-times-rectangle\"></i>
                                <span>Contre visite</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {#<li class=\"{% if menu_visite_list is defined %}{{ active }}{% endif %}\">#}
                                {#<a href=\"{{ path('visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>#}
                                {#</li>#}
                                <li class=\"{% if menu_contre_visite_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('contre_visite_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_VISITE') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique visite #}
                <li class=\"treeview {% if menu_statistique_visite is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique visite</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_visite_create is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_visite_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') %}
                {# Constatation #}
                <li class=\"treeview {% if menu_const_av_ded is defined or menu_const_av_ded_type is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-credit-card\"></i>
                        <span>Constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_SUPERADMIN') %}
                            {# Type #}
                            <li class=\"treeview {% if menu_const_av_ded_type is defined %}{{ active }}{% endif %}\">
                                <a href=\"#\">
                                    <i class=\"fa fa-tasks\"></i>
                                    <span>Type</span>
                                    <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"{% if menu_const_av_ded_type_list is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_const_av_ded_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                    </li>
                                    <li class=\"{% if menu_const_av_ded_type_create is defined %}{{ active }}{% endif %}\">
                                        <a href=\"{{ path('type_const_av_ded_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}

                        {# Constatation #}
                        <li class=\"treeview {% if menu_const_av_ded is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-credit-card-alt\"></i>
                                <span>Constatation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_const_av_ded_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('const_av_ded_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_const_av_ded_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('const_av_ded_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if (is_granted('ROLE_RECEPTION') or is_granted('ROLE_ADMIN') or is_granted('ROLE_STAFF')) %}
                {# Statistique constatation #}
                <li class=\"treeview {% if menu_statistique_constatation is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-bar-chart\"></i>
                        <span>Statistique constatation</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if menu_statistique_constatation_voir is defined %}{{ active }}{% endif %}\">
                            <a href=\"{{ path('statistique_constatation_index') }}\"><i class=\"fa fa-circle-o\"></i> Voir</a>
                        </li>
                    </ul>
                </li>
            {% endif %}

            {% if is_granted('ROLE_SUPERADMIN') %}
                {# Données de base #}
                <li class=\"treeview
                    {% if menu_marque is defined or menu_centre is defined or menu_province is defined
                        or menu_motif is defined or menu_genre is defined or menu_carosserie is defined
                        or menu_energie is defined or  menu_verificateur is defined or menu_utilisation is defined
                        or menu_anomalie is defined or menu_proces_verbal is defined or menu_droit_ptac is defined
                        or menu_type_droit_ptac is defined
                        or menu_usage is defined or menu_type_usage is defined or menu_usage_tarif is defined
                        or menu_genre_categorie is defined or menu_visite_extra is defined
                        or menu_visite_extra_type is defined or menu_zone_deserte is defined
                    %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-database\"></i>
                        <span>Données de base</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {# Lieux #}
                        <li class=\"treeview {% if menu_centre is defined or menu_province is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-map\"></i>
                                <span>Lieux</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Province  #}
                                <li class=\"treeview {% if menu_province is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-pin\"></i>
                                        <span>Province</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_province_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('province_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_province_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('province_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Centre  #}
                                <li class=\"treeview {% if menu_centre is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-map-o\"></i>
                                        <span>Centre</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_centre_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('centre_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_centre_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('centre_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Vérificateur #}
                        <li class=\"treeview {% if menu_verificateur is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-users\"></i>
                                <span>Vérificateur</span>
                                <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_verificateur_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('verificateur_index')}}\">
                                        <i class=\"fa fa-circle-o\"></i> Liste
                                    </a>
                                </li>
                                <li class=\"{% if menu_verificateur_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('verificateur_new') }}\">
                                        <i class=\"fa fa-circle-o\"></i> Créer
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {# Marque #}
                        <li class=\"treeview {% if menu_marque is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-header\"></i>
                                <span>Marque</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_marque_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('marque_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_marque_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('marque_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Carrosserie #}
                        <li class=\"treeview {% if menu_carosserie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-cog\"></i>
                                <span>Carrosserie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_carosserie_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carosserie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_carosserie_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('carosserie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Source Energie #}
                        <li class=\"treeview {% if menu_energie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-battery\"></i>
                                <span>Source énergie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_energie_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('energie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_energie_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('energie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Utilisation  #}
                        <li class=\"treeview {% if menu_utilisation is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-rock-o\"></i>
                                <span>Utilisation</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_utilisation_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('utilisation_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_utilisation_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('utilisation_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Genre #}
                        <li class=\"treeview {% if menu_genre is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-clipboard\"></i>
                                <span>Genre</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_genre_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_genre_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_genre_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Categorie #}
                                <li class=\"treeview {% if menu_genre_categorie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Categorie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_genre_categorie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_categorie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_genre_categorie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('genre_categorie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {# VisiteExtra #}
                        <li class=\"treeview {% if menu_visite_extra is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-server\"></i>
                                <span>Visite extra</span>
                                <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_visite_extra_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_visite_extra_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_visite_extra_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_visite_extra_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                                <i class=\"fa fa-angle-left pull-right\"></i>
                                            </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_visite_extra_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_visite_extra_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('visite_extra_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Motif #}
                        <li class=\"treeview {% if menu_motif is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-newspaper-o\"></i>
                                <span>Motif</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_motif_type is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_motif_type_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_motif_type_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_motif_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_motif_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_motif_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('motif_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Usage #}
                        <li class=\"treeview {% if menu_type_usage is defined or menu_usage is defined or menu_usage_tarif is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-hand-lizard-o\"></i>
                                <span>Usage</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_usage is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_usage_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_usage_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_usage_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_usage_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Usage #}
                                <li class=\"treeview {% if menu_usage is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-hand-paper-o\"></i>
                                        <span>Usage</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_usage_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_usage_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Tarif #}
                                <li class=\"treeview {% if menu_usage_tarif is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-money\"></i>
                                        <span>Tarif</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_usage_tarif_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_tarif_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_usage_tarif_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('usage_tarif_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Anomalie #}
                        <li class=\"treeview {% if menu_anomalie is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-ambulance\"></i>
                                <span>Anomalie</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_anomalie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_anomalie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_anomalie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_anomalie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_anomalie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Anomalie #}
                                <li class=\"treeview {% if menu_anomalie is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Anomalie</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_anomalie_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('anomalie_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_anomalie_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('anomalie_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Proces Verbal #}
                        <li class=\"treeview {% if menu_proces_verbal is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-bank\"></i>
                                <span>Proces Verbal</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_proces_verbal_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('proces_verbal_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_proces_verbal_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('proces_verbal_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>

                        {# Droit Ptac #}
                        <li class=\"treeview {% if menu_droit_ptac is defined or menu_type_droit_ptac is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-balance-scale\"></i>
                                <span>Droit Ptac</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                {# Type #}
                                <li class=\"treeview {% if menu_type_droit_ptac is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Type</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_type_droit_ptac_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_droit_ptac_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_type_droit_ptac_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('type_droit_ptac_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>

                                {# Droit #}
                                <li class=\"treeview {% if menu_droit_ptac is defined %}{{ active }}{% endif %}\">
                                    <a href=\"#\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span>Droit</span>
                                        <span class=\"pull-right-container\">
                                            <i class=\"fa fa-angle-left pull-right\"></i>
                                        </span>
                                    </a>
                                    <ul class=\"treeview-menu\">
                                        <li class=\"{% if menu_droit_ptac_list is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('droit_ptac_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                        </li>
                                        <li class=\"{% if menu_droit_ptac_create is defined %}{{ active }}{% endif %}\">
                                            <a href=\"{{ path('droit_ptac_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        {# Zone de déserte #}
                        <li class=\"treeview {% if menu_zone_deserte is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-map-signs\"></i>
                                <span>Zone de déserte</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_zone_deserte_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('zone_deserte_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_zone_deserte_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('zone_deserte_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            {% endif %}


            {% if (is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') or is_granted('ROLE_APPROVISIONNEMENT') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE')) %}
                {# Approvisionnement #}
                {# <li class=\"treeview {% if menu_user is defined or menu_role is defined %}{{ active }}{% endif %}\"> #}
                <li class=\"treeview {% if menu_bordereau is defined %}{{ active }}{% endif %}\">
                    <a href=\"#\">
                        <i class=\"fa fa-shopping-basket\"></i>
                        <span>Imprimés techniques</span>
                        <span class=\"pull-right-container\">
                            <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        {% if is_granted('ROLE_ADMIN') %}
                        {# Activation des imprimés techniques #}
                        <li class=\"treeview {% if menu_bordereau is defined %}{% if menu_bordereau_activation is defined %}{{ active }}{% endif %}{% endif %}\">
                            <a href=\"{{ path('bordereau_activation') }}\"><i class=\"fa fa-check-circle\"></i> Activer des imprimés</a>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_RECEPTION') or is_granted('ROLE_VISITE') %}
                        {# Activation des imprimés techniques #}
                        <li class=\"treeview {% if menu_imprime_tech_use is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Utilisation IT</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_imprime_tech_use_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_use_index') }}\"><i class=\"fa fa-search\"></i> Liste des IT utilisés</a>
                                </li>
                                <li class=\"{% if menu_imprime_tech_use_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_use_search') }}\"><i class=\"fa fa-list-ol\"></i> Mise à jour utilisation IT</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_APPROVISIONNEMENT') %}
                        {# Bordereau d'envoi #}
                        <li class=\"treeview {% if menu_bordereau is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-archive\"></i>
                                <span>Bordereau de livraison</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_bordereau_search is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_search') }}\"><i class=\"fa fa-search\"></i> Rechercher</a>
                                </li>
                                <li class=\"{% if menu_bordereau_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_index') }}\"><i class=\"fa fa-list-ol\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_bordereau_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('bordereau_new') }}\"><i class=\"fa fa-plus\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}

                        {% if is_granted('ROLE_SUPERADMIN') %}
                        {# Imprimé technique #}
                        <li class=\"treeview {% if menu_imprime_tech is defined %}{{ active }}{% endif %}\">
                            <a href=\"#\">
                                <i class=\"fa fa-print\"></i>
                                <span>Imprimés techniques</span>
                                <span class=\"pull-right-container\">
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </span>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"{% if menu_imprime_tech_list is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_index') }}\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"{% if menu_imprime_tech_create is defined %}{{ active }}{% endif %}\">
                                    <a href=\"{{ path('imprime_tech_new') }}\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        {% endif %}
                    </ul>
                </li>
            {% endif %}
        </ul>
    </section>
</aside>", ":backoffice:base_admin_sidebar.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_sidebar.html.twig");
    }
}
