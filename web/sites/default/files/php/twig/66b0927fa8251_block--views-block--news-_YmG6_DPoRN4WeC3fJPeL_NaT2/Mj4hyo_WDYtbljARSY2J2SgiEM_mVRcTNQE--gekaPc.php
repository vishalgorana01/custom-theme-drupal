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

/* themes/custom/bigznews/templates/block/block--views-block--news-list-block-2.html.twig */
class __TwigTemplate_65cb8b6b6e66d9033eb7d2329fcadbdb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 32
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 32), 32, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null), 33, $this->source))), 3 => "mb-3"];
        // line 37
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 38, $this->source), "html", null, true);
        echo "
    ";
        // line 39
        if (($context["label"] ?? null)) {
            // line 40
            echo "    <div class=\"section-title mb-0\">
        <h4";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "m-0 text-uppercase font-weight-bold"], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 41, $this->source), "html", null, true);
            echo "</h4>
    </div>
    ";
        }
        // line 44
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 44, $this->source), "html", null, true);
        echo "
    ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "    </div>


    <!-- Popular News Start -->
    ";
        // line 119
        echo "    <!-- Popular News End -->";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 46, $this->source), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/block/block--views-block--news-list-block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 46,  83 => 45,  79 => 119,  73 => 48,  71 => 45,  66 => 44,  58 => 41,  55 => 40,  53 => 39,  49 => 38,  44 => 37,  42 => 33,  41 => 32,  40 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a block.
*
* Available variables:
* - plugin_id: The ID of the block implementation.
* - label: The configured label of the block if visible.
* - configuration: A list of the block's configuration values.
* - label: The configured label for the block.
* - label_display: The display settings for the label.
* - provider: The module or other provider that provided this block plugin.
* - Block plugin specific settings will also be stored here.
* - in_preview: Whether the plugin is being rendered in preview mode.
* - content: The content of this block.
* - attributes: array of HTML attributes populated by modules, intended to
* be added to the main container tag of this template.
* - id: A valid HTML ID and guaranteed unique.
* - title_attributes: Same as attributes, except applied to the main title
* tag that appears in the template.
* - title_prefix: Additional output populated by modules, intended to be
* displayed in front of the main title tag that appears in the template.
* - title_suffix: Additional output populated by modules, intended to be
* displayed after the main title tag that appears in the template.
*
* @see template_preprocess_block()
*/
#}
{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'block-' ~ plugin_id|clean_class,
'mb-3'
]
%}
<div{{ attributes.addClass(classes) }}>
    {{ title_prefix }}
    {% if label %}
    <div class=\"section-title mb-0\">
        <h4{{ title_attributes.addClass('m-0 text-uppercase font-weight-bold') }}>{{ label }}</h4>
    </div>
    {% endif %}
    {{ title_suffix }}
    {% block content %}
    {{ content }}
    {% endblock %}
    </div>


    <!-- Popular News Start -->
    {# <div class=\"mb-3\">
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
    </div> #}
    <!-- Popular News End -->", "themes/custom/bigznews/templates/block/block--views-block--news-list-block-2.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\block\\block--views-block--news-list-block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 39, "block" => 45);
        static $filters = array("clean_class" => 32, "escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
