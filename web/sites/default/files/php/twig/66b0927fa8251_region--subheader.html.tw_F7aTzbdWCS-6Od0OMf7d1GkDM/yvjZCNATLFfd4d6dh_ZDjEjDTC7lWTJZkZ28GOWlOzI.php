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

/* themes/custom/bigznews/templates/layout/region--subheader.html.twig */
class __TwigTemplate_06b52701ac27114bdf433a6f1e8b22b9 extends \Twig\Template
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
        // line 1
        echo "<div class=\"container-fluid d-none d-lg-block\">
    <div class=\"row align-items-center bg-white py-3 px-lg-5\">
        <div class=\"col-lg-4\">
            <a href=\"/node\" class=\"navbar-brand p-0 d-none d-lg-block\">
                <h1 class=\"m-0 display-4 text-uppercase text-primary\">Biz<span
                        class=\"text-secondary font-weight-normal\">News</span></h1>
            </a>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            ";
        // line 11
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/layout/region--subheader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid d-none d-lg-block\">
    <div class=\"row align-items-center bg-white py-3 px-lg-5\">
        <div class=\"col-lg-4\">
            <a href=\"/node\" class=\"navbar-brand p-0 d-none d-lg-block\">
                <h1 class=\"m-0 display-4 text-uppercase text-primary\">Biz<span
                        class=\"text-secondary font-weight-normal\">News</span></h1>
            </a>
        </div>
        <div class=\"col-lg-8 text-center text-lg-right\">
            {# <a href=\"/node\"><img class=\"img-fluid\" src=\"../assets/img/ads-728x90.png\" alt=\"\"></a> #}
        </div>
    </div>
</div>", "themes/custom/bigznews/templates/layout/region--subheader.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\layout\\region--subheader.html.twig");
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
