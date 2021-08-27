<?php

/* :backoffice:base_admin_sidebar.html.twig */
class __TwigTemplate_5250a44b190c6dd2fbdfbbdac82b87b31791022adc594aa4c38d1a4de4054702 extends Twig_Template
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
        if ((($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT"))) {
            // line 874
            echo "                ";
            // line 875
            echo "                ";
            // line 876
            echo "                <li class=\"treeview ";
            if (array_key_exists("menu_bordereau", $context)) {
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            }
            echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-shopping-basket\"></i>
                        <span>Approvisionnement</span>
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
                        echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_APPROVISIONNEMENT")) {
                // line 893
                echo "                        ";
                // line 894
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_bordereau", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                // line 903
                if (array_key_exists("menu_bordereau_search", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 904
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_search");
                echo "\"><i class=\"fa fa-search\"></i> Rechercher</a>
                                </li>
                                <li class=\"";
                // line 906
                if (array_key_exists("menu_bordereau_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 907
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_index");
                echo "\"><i class=\"fa fa-list-ol\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 909
                if (array_key_exists("menu_bordereau_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 910
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bordereau_new");
                echo "\"><i class=\"fa fa-plus\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 915
            echo "
                        ";
            // line 916
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN")) {
                // line 917
                echo "                        ";
                // line 918
                echo "                        <li class=\"treeview ";
                if (array_key_exists("menu_imprime_tech", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
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
                // line 927
                if (array_key_exists("menu_imprime_tech_list", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 928
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_index");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste</a>
                                </li>
                                <li class=\"";
                // line 930
                if (array_key_exists("menu_imprime_tech_create", $context)) {
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                }
                echo "\">
                                    <a href=\"";
                // line 931
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprime_tech_new");
                echo "\"><i class=\"fa fa-circle-o\"></i> Créer</a>
                                </li>
                            </ul>
                        </li>
                        ";
            }
            // line 936
            echo "                    </ul>
                </li>
            ";
        }
        // line 939
        echo "        </ul>
    </section>
</aside>";
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
        return array (  1900 => 939,  1895 => 936,  1887 => 931,  1881 => 930,  1876 => 928,  1870 => 927,  1855 => 918,  1853 => 917,  1851 => 916,  1848 => 915,  1840 => 910,  1834 => 909,  1829 => 907,  1823 => 906,  1818 => 904,  1812 => 903,  1797 => 894,  1795 => 893,  1793 => 892,  1790 => 891,  1784 => 888,  1775 => 887,  1773 => 886,  1771 => 885,  1756 => 876,  1754 => 875,  1752 => 874,  1750 => 873,  1746 => 871,  1736 => 864,  1730 => 863,  1725 => 861,  1719 => 860,  1704 => 851,  1694 => 843,  1688 => 842,  1683 => 840,  1677 => 839,  1662 => 830,  1654 => 824,  1648 => 823,  1643 => 821,  1637 => 820,  1622 => 811,  1607 => 801,  1599 => 795,  1593 => 794,  1588 => 792,  1582 => 791,  1567 => 782,  1557 => 774,  1551 => 773,  1546 => 771,  1540 => 770,  1525 => 761,  1517 => 755,  1511 => 754,  1506 => 752,  1500 => 751,  1485 => 742,  1470 => 732,  1460 => 724,  1454 => 723,  1449 => 721,  1443 => 720,  1428 => 711,  1420 => 705,  1414 => 704,  1409 => 702,  1403 => 701,  1388 => 692,  1380 => 686,  1374 => 685,  1369 => 683,  1363 => 682,  1348 => 673,  1333 => 663,  1323 => 655,  1317 => 654,  1312 => 652,  1306 => 651,  1291 => 642,  1283 => 636,  1277 => 635,  1272 => 633,  1266 => 632,  1251 => 623,  1236 => 613,  1226 => 605,  1220 => 604,  1215 => 602,  1209 => 601,  1194 => 592,  1186 => 586,  1180 => 585,  1175 => 583,  1169 => 582,  1154 => 573,  1139 => 563,  1130 => 556,  1124 => 555,  1119 => 553,  1113 => 552,  1098 => 543,  1090 => 537,  1084 => 536,  1079 => 534,  1073 => 533,  1058 => 524,  1043 => 514,  1035 => 508,  1029 => 507,  1024 => 505,  1018 => 504,  1003 => 495,  995 => 489,  989 => 488,  984 => 486,  978 => 485,  963 => 476,  955 => 470,  949 => 469,  944 => 467,  938 => 466,  923 => 457,  915 => 451,  909 => 450,  904 => 448,  898 => 447,  883 => 438,  873 => 430,  867 => 429,  860 => 425,  854 => 424,  839 => 415,  829 => 407,  823 => 406,  818 => 404,  812 => 403,  797 => 394,  789 => 388,  783 => 387,  778 => 385,  772 => 384,  757 => 375,  742 => 365,  729 => 355,  727 => 354,  726 => 353,  725 => 352,  724 => 351,  723 => 350,  722 => 349,  721 => 348,  720 => 347,  717 => 346,  715 => 345,  713 => 344,  710 => 343,  702 => 338,  696 => 337,  681 => 328,  679 => 327,  677 => 326,  674 => 325,  664 => 318,  658 => 317,  653 => 315,  647 => 314,  632 => 305,  629 => 303,  621 => 298,  615 => 297,  610 => 295,  604 => 294,  589 => 285,  587 => 284,  585 => 283,  570 => 274,  568 => 273,  566 => 272,  563 => 271,  555 => 266,  549 => 265,  534 => 256,  532 => 255,  530 => 254,  527 => 253,  517 => 246,  510 => 245,  508 => 244,  506 => 243,  491 => 233,  483 => 227,  477 => 226,  472 => 224,  465 => 223,  463 => 222,  461 => 221,  446 => 211,  438 => 205,  431 => 204,  429 => 203,  427 => 202,  412 => 192,  409 => 190,  401 => 185,  395 => 184,  390 => 182,  384 => 181,  369 => 172,  367 => 171,  365 => 170,  350 => 161,  348 => 160,  346 => 159,  343 => 158,  335 => 153,  329 => 152,  314 => 143,  312 => 142,  310 => 141,  307 => 140,  297 => 133,  291 => 132,  286 => 130,  280 => 129,  275 => 127,  269 => 126,  254 => 117,  251 => 115,  243 => 110,  237 => 109,  232 => 107,  226 => 106,  211 => 97,  209 => 96,  207 => 95,  192 => 86,  190 => 85,  188 => 84,  185 => 83,  177 => 78,  171 => 77,  156 => 68,  154 => 67,  152 => 66,  149 => 65,  144 => 62,  136 => 57,  130 => 56,  125 => 54,  119 => 53,  104 => 44,  102 => 43,  100 => 42,  92 => 37,  86 => 36,  81 => 34,  75 => 33,  60 => 24,  45 => 14,  43 => 13,  41 => 12,  33 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":backoffice:base_admin_sidebar.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_sidebar.html.twig");
    }
}
