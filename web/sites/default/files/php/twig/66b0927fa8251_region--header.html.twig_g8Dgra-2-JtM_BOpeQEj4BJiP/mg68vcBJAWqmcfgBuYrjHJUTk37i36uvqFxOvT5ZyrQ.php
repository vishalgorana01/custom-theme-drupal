<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/bigznews/templates/layout/region--header.html.twig */
class __TwigTemplate_a459174174b70d64232e70a88a3abfe3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
<!-- Topbar Start -->
<div class=\"container-fluid d-none d-lg-block\">
    <div class=\"row align-items-center bg-dark\">
        <div class=\"col-lg-9\">
            <nav class=\"navbar navbar-expand-sm bg-dark p-0\">
                <ul class=\"navbar-nav ml-n2\">
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Monday, January 1, 2045</a>
                    </li>
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Advertise</a>
                    </li>
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body small\" href=\"#\">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"col-lg-3 text-right d-none d-md-block\">
            <nav class=\"navbar navbar-expand-sm bg-dark p-0\">
                <ul class=\"navbar-nav ml-auto mr-n2\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-twitter\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-facebook-f\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-linkedin-in\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-instagram\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-google-plus-g\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-youtube\"></small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Topbar End -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/layout/region--header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme override to display the header region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}

<!-- Topbar Start -->
<div class=\"container-fluid d-none d-lg-block\">
    <div class=\"row align-items-center bg-dark\">
        <div class=\"col-lg-9\">
            <nav class=\"navbar navbar-expand-sm bg-dark p-0\">
                <ul class=\"navbar-nav ml-n2\">
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Monday, January 1, 2045</a>
                    </li>
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Advertise</a>
                    </li>
                    <li class=\"nav-item border-right border-secondary\">
                        <a class=\"nav-link text-body small\" href=\"#\">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body small\" href=\"#\">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class=\"col-lg-3 text-right d-none d-md-block\">
            <nav class=\"navbar navbar-expand-sm bg-dark p-0\">
                <ul class=\"navbar-nav ml-auto mr-n2\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-twitter\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-facebook-f\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-linkedin-in\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-instagram\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-google-plus-g\"></small></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-body\" href=\"#\"><small class=\"fab fa-youtube\"></small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Topbar End -->
", "themes/custom/bigznews/templates/layout/region--header.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\layout\\region--header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
