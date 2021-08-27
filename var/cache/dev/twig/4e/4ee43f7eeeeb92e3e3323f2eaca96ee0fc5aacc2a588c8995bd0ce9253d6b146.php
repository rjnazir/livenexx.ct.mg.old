<?php

/* backoffice/base_admin_header.html.twig */
class __TwigTemplate_4a174c03a4a373ac65cf1f254ebb9062d4920548cff397f3ec452014ee24dc3c extends Twig_Template
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
        $__internal_884a90a91bf2ec01a187dfec3ca17d0e0f5580b4fe670a17a60dce64095f8cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884a90a91bf2ec01a187dfec3ca17d0e0f5580b4fe670a17a60dce64095f8cc7->enter($__internal_884a90a91bf2ec01a187dfec3ca17d0e0f5580b4fe670a17a60dce64095f8cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_header.html.twig"));

        $__internal_27946875d549e3a28f74288f19b93e6c4bd2b3c69b7b52b373772425dc49e395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27946875d549e3a28f74288f19b93e6c4bd2b3c69b7b52b373772425dc49e395->enter($__internal_27946875d549e3a28f74288f19b93e6c4bd2b3c69b7b52b373772425dc49e395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backoffice/base_admin_header.html.twig"));

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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "                                Bienvenue <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "usrName", array()), "html", null, true);
            echo "</b>
                                <span class=\"";
            // line 41
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "id", array()) == twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
                echo "hidden";
            }
            echo "\">
                                    (";
            // line 42
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctCentre", array()), "ctProvince", array()), "prvNom", array()) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctCentre", array()), "ctrNom", array())), "html", null, true);
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
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 55
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br>
                                    ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "ctRole", array()), "roleName", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
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
        
        $__internal_884a90a91bf2ec01a187dfec3ca17d0e0f5580b4fe670a17a60dce64095f8cc7->leave($__internal_884a90a91bf2ec01a187dfec3ca17d0e0f5580b4fe670a17a60dce64095f8cc7_prof);

        
        $__internal_27946875d549e3a28f74288f19b93e6c4bd2b3c69b7b52b373772425dc49e395->leave($__internal_27946875d549e3a28f74288f19b93e6c4bd2b3c69b7b52b373772425dc49e395_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ca31ddc9f60c8717a266f7cfa8a609eed06cde4cd70298fd8f1ab48cb41c876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca31ddc9f60c8717a266f7cfa8a609eed06cde4cd70298fd8f1ab48cb41c876->enter($__internal_3ca31ddc9f60c8717a266f7cfa8a609eed06cde4cd70298fd8f1ab48cb41c876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c2e2a27d69e83fc6e1b44454c07c6e406debe82cd5bec79122a6e16d6c2e47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2e2a27d69e83fc6e1b44454c07c6e406debe82cd5bec79122a6e16d6c2e47a->enter($__internal_9c2e2a27d69e83fc6e1b44454c07c6e406debe82cd5bec79122a6e16d6c2e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    <script>
        ";
        // line 99
        if ($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) {
            echo " var _user_id = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
        
        $__internal_9c2e2a27d69e83fc6e1b44454c07c6e406debe82cd5bec79122a6e16d6c2e47a->leave($__internal_9c2e2a27d69e83fc6e1b44454c07c6e406debe82cd5bec79122a6e16d6c2e47a_prof);

        
        $__internal_3ca31ddc9f60c8717a266f7cfa8a609eed06cde4cd70298fd8f1ab48cb41c876->leave($__internal_3ca31ddc9f60c8717a266f7cfa8a609eed06cde4cd70298fd8f1ab48cb41c876_prof);

    }

    public function getTemplateName()
    {
        return "backoffice/base_admin_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 109,  222 => 108,  217 => 107,  213 => 105,  209 => 103,  206 => 102,  202 => 100,  195 => 99,  192 => 98,  174 => 97,  144 => 70,  135 => 64,  127 => 58,  122 => 56,  117 => 55,  115 => 54,  110 => 52,  101 => 45,  95 => 42,  89 => 41,  84 => 40,  82 => 39,  76 => 36,  72 => 34,  69 => 32,  51 => 16,  49 => 15,  47 => 14,  34 => 4,  30 => 3,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"{{ path('dashboard_index') }}\" class=\"logo\">
        <img src=\"{{ asset('img/header.png') }}\" style=\"max-width: 75px\" alt=\"logo\" />
    </a>

    <nav class=\"navbar navbar-static-top\">
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>

        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
                 {#Notification#}
                <li class=\"dropdown notifications-menu\">
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
                {% endif %}

                {# Profil #}
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"{{ asset('img/user.png') }}\" class=\"user-image\" alt=\"User Image\">

                        <span class=\"hidden-xs\">
                            {% if app.user %}
                                Bienvenue <b>{{ app.user.usrName }}</b>
                                <span class=\"{% if app.user.ctRole.id == constant('Ct\\\\Service\\\\MetierManagerBundle\\\\Utils\\\\RoleName::ID_ROLE_SUPERADMIN') %}hidden{% endif %}\">
                                    ({{ app.user.ctCentre.ctProvince.prvNom ~ ' - ' ~ app.user.ctCentre.ctrNom }})
                                </span>
                            {% endif %}
                        </span>
                        <i class=\"fa fa-angle-down\"></i>
                    </a>

                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <img src=\"{{ asset('img/user.png') }}\" class=\"img-circle\" alt=\"User Image\">
                            <p>
                                {% if app.user %}
                                    {{ app.user.username }}<br>
                                    {{ app.user.ctRole.roleName }}
                                {% endif %}
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"{{ path('user_edit', { 'id': app.user.id }) }}\"
                                   class=\"btn btn-default btn-flat\">
                                    <i class=\"fa fa-user\"></i> Profil
                                </a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"{{ path('fos_user_security_logout') }}\"
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
{% block javascripts %}
    <script>
        {% if app.user is defined %} var _user_id = {{ app.user.id }}
            {% else %} var _user_id = 0
        {% endif %}
        {% if is_granted('ROLE_SUPERADMIN') or is_granted('ROLE_ADMIN') %}
            var _is_show_notification = 1;
        {% else %}
            var _is_show_notification = 0;
        {% endif %}
        var _historique_get_notification_ajax_uri = \"{{ path('historique_get_notification_ajax') }}\";
        var _historique_get_detail_notification_ajax_uri = \"{{ path('historique_get_detail_notification_ajax') }}\";
        var _historique_get_detail_all_notifications_ajax_uri = \"{{ path('historique_get_detail_all_notifications_ajax') }}\";
    </script>
{% endblock %}", "backoffice/base_admin_header.html.twig", "D:\\mydev\\livenexx.ct.mg\\app\\Resources\\views\\backoffice\\base_admin_header.html.twig");
    }
}
