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

/* themes/custom/bigznews/templates/content/node--view--news-list--block-2.html.twig */
class __TwigTemplate_d41b50015a38f9823dbb223903d1c8be extends \Twig\Template
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
        // line 71
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "bundle", [], "any", false, false, true, 73), 73, $this->source))), 2 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 74)) ? ("node--promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 75)) ? ("node--sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 76)) ? ("node--unpublished") : ("")), 5 => ((        // line 77
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 77, $this->source)))) : ("")), 6 => "d-flex", 7 => "align-items-center", 8 => "bg-white", 9 => "mb-3"];
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("classy/node"), "html", null, true);
        echo "
<div";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">

    ";
        // line 94
        echo "
        ";
        // line 104
        echo "
        ";
        // line 108
        echo "
            <div class=\"trending_news_img\">
                ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cover_image", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "
            </div>

            <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center\">
                <div class=\"mb-2\">
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                        href=\"\">Business</a>
                    <a class=\"text-body\" href=\"\"><small>";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_incident_date", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "</small></a>
                </div>
                <a ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "h6 m-0 text-secondary text-uppercase font-weight-bold"], "method", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
                    href=\"";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 120, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">
                    ";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 121, $this->source), "html", null, true);
        echo "
                </a>
            </div>

            </div>


            ";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/content/node--view--news-list--block-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 121,  84 => 120,  80 => 119,  75 => 117,  65 => 110,  61 => 108,  58 => 104,  55 => 94,  50 => 85,  46 => 84,  44 => 77,  43 => 76,  42 => 75,  41 => 74,  40 => 73,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a node.
*
* Available variables:
* - node: The node entity with limited access to object properties and methods.
* Only method names starting with \"get\", \"has\", or \"is\" and a few common
* methods such as \"id\", \"label\", and \"bundle\" are available. For example:
* - node.getCreatedTime() will return the node creation timestamp.
* - node.hasField('field_example') returns TRUE if the node bundle includes
* field_example. (This does not indicate the presence of a value in this
* field.)
* - node.isPublished() will return whether the node is published or not.
* Calling other methods, such as node.delete(), will result in an exception.
* See \\Drupal\\node\\Entity\\Node for a full list of public properties and
* methods for the node object.
* - label: (optional) The title of the node.
* - content: All node items. Use {{ content }} to print them all,
* or print a subset such as {{ content.field_example }}. Use
* {{ content|without('field_example') }} to temporarily suppress the printing
* of a given child element.
* - author_picture: The node author user entity, rendered using the \"compact\"
* view mode.
* - metadata: Metadata for this node.
* - date: (optional) Themed creation date field.
* - author_name: (optional) Themed author name field.
* - url: Direct URL of the current node.
* - display_submitted: Whether submission information should be displayed.
* - attributes: HTML attributes for the containing element.
* The attributes.class element may contain one or more of the following
* classes:
* - node: The current template type (also known as a \"theming hook\").
* - node--type-[type]: The current node type. For example, if the node is an
* \"Article\" it would result in \"node--type-article\". Note that the machine
* name will often be in a short form of the human readable label.
* - node--view-mode-[view_mode]: The View Mode of the node; for example, a
* teaser would result in: \"node--view-mode-teaser\", and
* full: \"node--view-mode-full\".
* The following are controlled through the node publishing options.
* - node--promoted: Appears on nodes promoted to the front page.
* - node--sticky: Appears on nodes ordered above other non-sticky nodes in
* teaser listings.
* - node--unpublished: Appears on unpublished nodes visible only to site
* admins.
* - title_attributes: Same as attributes, except applied to the main title
* tag that appears in the template.
* - content_attributes: Same as attributes, except applied to the main
* content tag that appears in the template.
* - author_attributes: Same as attributes, except applied to the author of
* the node tag that appears in the template.
* - title_prefix: Additional output populated by modules, intended to be
* displayed in front of the main title tag that appears in the template.
* - title_suffix: Additional output populated by modules, intended to be
* displayed after the main title tag that appears in the template.
* - view_mode: View mode; for example, \"teaser\" or \"full\".
* - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
* - page: Flag for the full page state. Will be true if view_mode is 'full'.
* - readmore: Flag for more state. Will be true if the teaser content of the
* node cannot hold the main body content.
* - logged_in: Flag for authenticated user status. Will be true when the
* current user is a logged-in member.
* - is_admin: Flag for admin user status. Will be true when the current user
* is an administrator.
*
* @see template_preprocess_node()
*
*/
#}
{%
set classes = [
'node',
'node--type-' ~ node.bundle|clean_class,
node.isPromoted() ? 'node--promoted',
node.isSticky() ? 'node--sticky',
not node.isPublished() ? 'node--unpublished',
view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
'd-flex',
'align-items-center',
'bg-white',
'mb-3'
]
%}
{{ attach_library('classy/node') }}
<div{{ attributes.addClass(classes) }}>

    {# {{ title_prefix }}
    {% if label and not page %}
    <h2{{ title_attributes }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
        </h2>
        {% endif %}
        {{ title_suffix }} #}

        {# {% if display_submitted %}
        <footer class=\"node__meta\">
            {{ author_picture }}
            <div{{ author_attributes.addClass('node__submitted') }}>
                {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
                {{ metadata }}
                </div>
        </footer>
        {% endif %} #}

        {# <div{{ content_attributes.addClass('node__content') }}>
            {{ content }}
            </div> #}

            <div class=\"trending_news_img\">
                {{content.field_cover_image}}
            </div>

            <div class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center\">
                <div class=\"mb-2\">
                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                        href=\"\">Business</a>
                    <a class=\"text-body\" href=\"\"><small>{{content.field_incident_date}}</small></a>
                </div>
                <a {{ title_attributes.addClass(\"h6 m-0 text-secondary text-uppercase font-weight-bold\") }}
                    href=\"{{ url }}\" rel=\"bookmark\">
                    {{ label }}
                </a>
            </div>

            </div>


            {#
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
            </div> #}", "themes/custom/bigznews/templates/content/node--view--news-list--block-2.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\content\\node--view--news-list--block-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71);
        static $filters = array("clean_class" => 73, "escape" => 84);
        static $functions = array("attach_library" => 84);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['attach_library']
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
