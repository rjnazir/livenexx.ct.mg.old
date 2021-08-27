<?php

/* :backoffice:base_admin_header.html.twig */
class __TwigTemplate_883ff8d75a2596360b170420d1e9adaf7955db55fbbaadce72525a30b7ab09fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard_index");
        echo "\" class=\"logo\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/header.png"), "html", null, true);
        echo "\" style=\"max-width: 75px\" alt=\"logo\" />
    </a>

    <nav class=\"navbar navbar-static-top\">
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 14
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 15
            echo "                 ";
            // line 16
            echo "                <li class=\"dropdown notifications-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\" id=\"id-counter-notif\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\" id=\"id-counter-notif-li\">Vous avez 0 notification</li>
                        <li id=\"id-list-notif-li\">
                            <ul class=\"menu\" id=\"id-list-notif-ul\">

                            </ul>
                        </li>
                        <li class=\"footer hide\" id=\"id-view-all-notif\"><a href=\"#\">Voir tous</a></li>
                    </ul>
                </li>
                ";
        }
        // line 32
        echo "
                ";
        // line 34
        echo "                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">

                        <span class=\"hidden-xs\">
                            ";
        // line 39
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 40
            echo "                                Bienvenue <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "usrName", array()), "html", null, true);
            echo "</b>
                                <span class=\"";
            // line 41
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) == twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
                echo "hidden";
            }
            echo "\">
                                    (";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctCentre", array()), "ctProvince", array()), "prvNom", array()) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctCentre", array()), "ctrNom", array())), "html", null, true);
            echo ")
                                </span>
                            ";
        }
        // line 45
        echo "                        </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>

                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                            <p>
                                ";
        // line 54
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 55
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "<br>
                                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "roleName", array()), "html", null, true);
            echo "
                                ";
        }
        // line 58
        echo "                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
        echo "\"
                                   class=\"btn btn-default btn-flat\">
                                    <i class=\"fa fa-user\"></i> Profil
                                </a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"
                                   class=\"btn btn-default btn-flat\">
                                    <i class=\"fa fa-sign-out\"></i> Deconnecter
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div id=\"detail-notif-table-container\" style=\"display:none\">
    <table class=\"display table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
        <thead>
        <tr>
            <th>Province</th>
            <th>Centre</th>
            <th>Description</th>
            <th>Modification</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 98
        echo "    <script>
        ";
        // line 99
        if ($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) {
            echo " var _user_id = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 100
            echo " var _user_id = 0
        ";
        }
        // line 102
        echo "        ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPERADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
            // line 103
            echo "            var _is_show_notification = 1;
        ";
        } else {
            // line 105
            echo "            var _is_show_notification = 0;
        ";
        }
        // line 107
        echo "        var _historique_get_notification_ajax_uri = \"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_get_notification_ajax");
        echo "\";
        var _historique_get_detail_notification_ajax_uri = \"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_get_detail_notification_ajax");
        echo "\";
        var _historique_get_detail_all_notifications_ajax_uri = \"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("historique_get_detail_all_notifications_ajax");
        echo "\";
    </script>
";
    }

    public function getTemplateName()
    {
        return ":backoffice:base_admin_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 109,  204 => 108,  199 => 107,  195 => 105,  191 => 103,  188 => 102,  184 => 100,  177 => 99,  174 => 98,  168 => 97,  138 => 70,  129 => 64,  121 => 58,  116 => 56,  111 => 55,  109 => 54,  104 => 52,  95 => 45,  89 => 42,  83 => 41,  78 => 40,  76 => 39,  70 => 36,  66 => 34,  63 => 32,  45 => 16,  43 => 15,  41 => 14,  28 => 4,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":backoffice:base_admin_header.html.twig", "D:\\mydev\\livenexx.ct.mg\\app/Resources\\views/backoffice/base_admin_header.html.twig");
    }
}
