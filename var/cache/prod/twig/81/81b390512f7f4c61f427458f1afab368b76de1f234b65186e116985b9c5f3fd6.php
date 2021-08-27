<?php

/* AdminBundle:CtCarteGrise:partial_add.html.twig */
class __TwigTemplate_faec343bc5d79e7d1b5a0f1f4c62bc79779bbe68b4a5d067cd981e507bd03bbb extends Twig_Template
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
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => ":form:fields.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"row\">
        ";
        // line 6
        echo "        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Informations carte grise</h3>
                </div>

                <div class=\"box-body\">
                    <div class=\"";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "ctRole", array()), "id", array()) != twig_constant("Ct\\Service\\MetierManagerBundle\\Utils\\RoleName::ID_ROLE_SUPERADMIN"))) {
            echo "hidden";
        }
        echo "\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctCentre", array()), 'row');
        echo "
                    </div>
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgDateEmission", array()), 'row');
        echo "
                    <hr>
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgImmatriculation", array()), 'row');
        echo "
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNumIdentification", array()), 'row');
        echo "
                    <hr>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNom", array()), 'row');
        echo "
                    ";
        // line 23
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgProfession", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgAdresse", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgPhone", array()), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgCommune", array()), 'row');
        echo "
                    <hr>
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgIsTransport", array()), 'row');
        echo "
                    <div id=\"form-transport\" class=\"";
        // line 29
        if (($this->getAttribute(($context["carte_grise"] ?? null), "cgIsTransport", array()) == 0)) {
            echo "hidden";
        }
        echo "\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNomCooperative", array()), 'row');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgItineraire", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNumVignette", array()), 'row');
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctZoneDeserte", array()), 'row');
        echo "
                    </div>
                    <hr>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNumCarteViolette", array()), 'row');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgLieuCarteViolette", array()), 'row');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgDateCarteViolette", array()), 'row', array("attr" => array("class" => " datepicker-partial")));
        // line 41
        echo "
                    <hr>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgPatente", array()), 'row');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgAni", array()), 'row');
        echo "
                </div>
            </div>
        </div>

        ";
        // line 50
        echo "        <div class=\"col-md-6\">
            <div class=\"box box-success\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Informations véhicule</h3>
                </div>

                <div class=\"box-body\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctGenre", array()), 'row');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcType", array()), 'row');
        echo "
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "ctMarque", array()), 'row');
        echo "
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcNumSerie", array()), 'row');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctCarosserie", array()), 'row');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcNumMoteur", array()), 'row');
        echo "
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ctSourceEnergie", array()), 'row');
        echo "
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgPuissanceAdmin", array()), 'row');
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNbrAssis", array()), 'row');
        echo "
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPoidsVide", array()), 'row');
        echo "
                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcChargeUtile", array()), 'row');
        echo "
                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPoidsTotalCharge", array()), 'row');
        echo "
                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgMiseEnService", array()), 'row', array("attr" => array("class" => " datepicker-partial")));
        // line 72
        echo "
                </div>

                ";
        // line 76
        echo "                <div class=\"hidden\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcPuissance", array()), 'row');
        echo "
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcCylindre", array()), 'row');
        echo "
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcHauteur", array()), 'row');
        echo "
                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcLongueur", array()), 'row');
        echo "
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcLargeur", array()), 'row');
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "ctVehicule", array()), "vhcProvenance", array()), 'row');
        echo "
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNbrDebout", array()), 'row');
        echo "
                    <hr>
                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgRta", array()), 'row');
        echo "
                    ";
        // line 87
        echo "                    ";
        // line 88
        echo "                    <hr>
                    ";
        // line 90
        echo "                    ";
        // line 91
        echo "                    ";
        // line 92
        echo "                    <hr>
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgNumVignette", array()), 'row');
        echo "
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgDateVignette", array()), 'row');
        echo "
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "cgLieuVignette", array()), 'row');
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 102
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-success\">
                <div class=\"box-body\">
                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_edit", array("id" => $this->getAttribute(($context["carte_grise"] ?? null), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-primary\" >
                        Modifier
                    </a>
                    <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
        echo "\"
                       class=\"btn btn-default pull-left btn-mini-rectif\" >
                        Retour à l'ajout
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarteGrise:partial_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 118,  281 => 110,  274 => 106,  268 => 102,  259 => 95,  255 => 94,  251 => 93,  248 => 92,  246 => 91,  244 => 90,  241 => 88,  239 => 87,  235 => 85,  230 => 83,  226 => 82,  222 => 81,  218 => 80,  214 => 79,  210 => 78,  206 => 77,  203 => 76,  198 => 72,  196 => 69,  192 => 68,  188 => 67,  184 => 66,  180 => 65,  176 => 64,  172 => 63,  168 => 62,  164 => 61,  160 => 60,  156 => 59,  152 => 58,  148 => 57,  139 => 50,  131 => 44,  127 => 43,  123 => 41,  121 => 38,  117 => 37,  113 => 36,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  89 => 29,  85 => 28,  80 => 26,  76 => 25,  72 => 24,  67 => 23,  63 => 21,  58 => 19,  54 => 18,  49 => 16,  44 => 14,  38 => 13,  29 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:CtCarteGrise:partial_add.html.twig", "D:\\mydev\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarteGrise/partial_add.html.twig");
    }
}
