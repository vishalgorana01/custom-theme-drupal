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

/* themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-2.html.twig */
class __TwigTemplate_cec22339689aa98efe8090f7bdf892fb extends \Twig\Template
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
        // line 18
        if (($context["title"] ?? null)) {
        }
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            $context["row_classes"] = [0 => ((            // line 24
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "bg-white", 2 => "border", 3 => "border-top-0", 4 => "p-3"];
            // line 31
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 31), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
            echo ">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            // line 33
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 35,  55 => 33,  53 => 32,  49 => 31,  47 => 24,  46 => 23,  42 => 21,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a view of unformatted rows.
*
* Available variables:
* - title: The title of this group of rows. May be empty.
* - rows: A list of the view's row items.
* - attributes: The row's HTML attributes.
* - content: The row's content.
* - view: The view object.
* - default_row_class: A flag indicating whether default classes should be
* used on rows.
*
* @see template_preprocess_views_view_unformatted()
*/
#}
{% if title %}
{# <h3>{{ title }} hello</h3> #}
{% endif %}
{% for row in rows %}
{%
set row_classes = [
default_row_class ? 'views-row',
'bg-white',
'border',
'border-top-0',
'p-3'
]
%}
<div{{ row.attributes.addClass(row_classes) }}>
    {{- row.content -}}
    </div>
    {% endfor %}


    {#
    <div class=\"bg-white border border-top-0 p-3\">
        <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
            <img class=\"img-fluid\" src=\"img/news-110x110-1.jpg\" alt=\"\">
            <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
                <div class=\"mb-2\">
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\" href=\"\">Business</a>
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
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\" href=\"\">Business</a>
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
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\" href=\"\">Business</a>
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
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\" href=\"\">Business</a>
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
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\" href=\"\">Business</a>
                    <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                </div>
                <a class=\"h6 m-0 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum
                    dolor sit amet elit...</a>
            </div>
        </div>
    </div> #}", "themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-2.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\views\\views-view-unformatted--news-list--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 21, "set" => 23);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
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
