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

/* themes/custom/bigznews/templates/layout/region--first-sidebar.html.twig */
class __TwigTemplate_de0c3ee979d7258449c43f5ec6bfc68c extends \Twig\Template
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
        echo "    ";
        // line 16
        $context["classes"] = [0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 18
($context["region"] ?? null), 18, $this->source))), 2 => "col-lg-4"];
        // line 22
        echo "    ";
        if (($context["content"] ?? null)) {
            // line 23
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 23), 23, $this->source), "html", null, true);
            echo ">
        ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 24, $this->source), "html", null, true);
            echo "

        <!-- Newsletter Start -->
        <div class=\"mb-3\">
            <div class=\"section-title mb-0\">
                <h4 class=\"m-0 text-uppercase font-weight-bold\">Newsletter</h4>
            </div>
            <div class=\"bg-white text-center border border-top-0 p-3\">
                <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                <div class=\"input-group mb-2\" style=\"width: 100%;\">
                    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Your Email\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-primary font-weight-bold px-3\">Sign Up</button>
                    </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
            </div>
        </div>
        <!-- Newsletter End -->
</div>
";
        }
        // line 45
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/layout/region--first-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 45,  52 => 24,  47 => 23,  44 => 22,  42 => 18,  41 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a region.
*
* Available variables:
* - content: The content for this region, typically blocks.
* - attributes: HTML attributes for the region <div>.
    * - region: The name of the region variable as defined in the theme's
    * .info.yml file.
    *
    * @see template_preprocess_region()
    */
    #}
    {%
    set classes = [
    'region',
    'region-' ~ region|clean_class,
    'col-lg-4',
    ]
    %}
    {% if content %}
    <div{{ attributes.addClass(classes) }}>
        {{ content }}

        <!-- Newsletter Start -->
        <div class=\"mb-3\">
            <div class=\"section-title mb-0\">
                <h4 class=\"m-0 text-uppercase font-weight-bold\">Newsletter</h4>
            </div>
            <div class=\"bg-white text-center border border-top-0 p-3\">
                <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                <div class=\"input-group mb-2\" style=\"width: 100%;\">
                    <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Your Email\">
                    <div class=\"input-group-append\">
                        <button class=\"btn btn-primary font-weight-bold px-3\">Sign Up</button>
                    </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
            </div>
        </div>
        <!-- Newsletter End -->
</div>
{% endif %}


{#
<div class=\"col-lg-4\">
  

    <!-- Ads Start -->
    <div class=\"mb-3\">
        <div class=\"section-title mb-0\">
            <h4 class=\"m-0 text-uppercase font-weight-bold\">Advertisement</h4>
        </div>
        <div class=\"bg-white text-center border border-top-0 p-3\">
            <a href=\"\"><img class=\"img-fluid\" src=\"img/news-800x500-2.jpg\" alt=\"\"></a>
        </div>
    </div>
    <!-- Ads End -->

    <!-- Popular News Start -->
    <div class=\"mb-3\">
        <div class=\"section-title mb-0\">
            <h4 class=\"m-0 text-uppercase font-weight-bold\">Tranding News</h4>
        </div>
        <div class=\"bg-white border border-top-0 p-3\">
            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                <img class=\"img-fluid\" src=\"img/news-110x110-1.jpg\" alt=\"\">
                <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                        dolor sit amet elit...</a>
                </div>
            </div>
            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                <img class=\"img-fluid\" src=\"img/news-110x110-2.jpg\" alt=\"\">
                <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                        dolor sit amet elit...</a>
                </div>
            </div>
            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                <img class=\"img-fluid\" src=\"img/news-110x110-3.jpg\" alt=\"\">
                <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                        dolor sit amet elit...</a>
                </div>
            </div>
            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                <img class=\"img-fluid\" src=\"img/news-110x110-4.jpg\" alt=\"\">
                <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                        dolor sit amet elit...</a>
                </div>
            </div>
            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                <img class=\"img-fluid\" src=\"img/news-110x110-5.jpg\" alt=\"\">
                <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                        dolor sit amet elit...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular News End -->

    <!-- Newsletter Start -->
    <div class=\"mb-3\">
        <div class=\"section-title mb-0\">
            <h4 class=\"m-0 text-uppercase font-weight-bold\">Newsletter</h4>
        </div>
        <div class=\"bg-white text-center border border-top-0 p-3\">
            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
            <div class=\"input-group mb-2\" style=\"width: 100%;\">
                <input type=\"text\" class=\"form-control form-control-lg\" placeholder=\"Your Email\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary font-weight-bold px-3\">Sign Up</button>
                </div>
            </div>
            <small>Lorem ipsum dolor sit amet elit</small>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Tags Start -->
    <div class=\"mb-3\">
        <div class=\"section-title mb-0\">
            <h4 class=\"m-0 text-uppercase font-weight-bold\">Tags</h4>
        </div>
        <div class=\"bg-white border border-top-0 p-3\">
            <div class=\"d-flex flex-wrap m-n1\">
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Politics</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Business</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Corporate</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Business</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Health</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Education</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Science</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Business</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Foods</a>
                <a href=\"\" class=\"btn btn-sm btn-outline-secondary m-1\">Travel</a>
            </div>
        </div>
    </div>
    <!-- Tags End -->
</div>
#}", "themes/custom/bigznews/templates/layout/region--first-sidebar.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\layout\\region--first-sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "if" => 22);
        static $filters = array("clean_class" => 18, "escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
