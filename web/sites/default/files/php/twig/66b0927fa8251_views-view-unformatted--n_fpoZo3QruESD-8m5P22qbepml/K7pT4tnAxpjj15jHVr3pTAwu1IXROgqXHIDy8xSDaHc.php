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

/* themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-3.html.twig */
class __TwigTemplate_3d6fd39db0409db3180fb3cc1ba70a44 extends \Twig\Template
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
        echo "<div class=\"d-flex align-items-center justify-content-center flex-wrap\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            $context["row_classes"] = [0 => ((            // line 25
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "col-lg-6"];
            // line 29
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 29), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            // line 31
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  58 => 31,  56 => 30,  52 => 29,  50 => 25,  49 => 24,  45 => 22,  42 => 21,  39 => 18,);
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
<div class=\"d-flex align-items-center justify-content-center flex-wrap\">
{% for row in rows %}
{%
set row_classes = [
default_row_class ? 'views-row',
'col-lg-6'
]
%}
<div{{ row.attributes.addClass(row_classes) }}>
    {{- row.content -}}
    </div>
    {% endfor %}
</div>
    {#
    <div class=\"col-lg-6\">
        <div class=\"position-relative mb-3\">
            <img class=\"img-fluid w-100\" src=\"img/news-700x435-1.jpg\" style=\"object-fit: cover;\">
            <div class=\"bg-white border border-top-0 p-4\">
                <div class=\"mb-2\">
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\" href=\"\">Business</a>
                    <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                </div>
                <a class=\"h4 d-block mb-3 text-secondary text-uppercase font-weight-bold\" href=\"\">Lorem ipsum dolor sit
                    amet elit...</a>
                <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                    rebum clita rebum dolor stet amet justo</p>
            </div>
            <div class=\"d-flex justify-content-between bg-white border border-top-0 p-4\">
                <div class=\"d-flex align-items-center\">
                    <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\" alt=\"\">
                    <small>John Doe</small>
                </div>
                <div class=\"d-flex align-items-center\">
                    <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                    <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                </div>
            </div>
        </div>
    </div>
    #}", "themes/custom/bigznews/templates/views/views-view-unformatted--news-list--block-3.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\views\\views-view-unformatted--news-list--block-3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18, "for" => 22, "set" => 24);
        static $filters = array("escape" => 29);
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
