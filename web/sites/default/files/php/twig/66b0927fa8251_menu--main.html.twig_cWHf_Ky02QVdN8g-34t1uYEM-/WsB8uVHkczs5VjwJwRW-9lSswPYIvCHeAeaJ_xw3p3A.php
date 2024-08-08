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

/* themes/custom/bigznews/templates/menu--main.html.twig */
class __TwigTemplate_ed8f171d22e96067f642942fae5a099b extends \Twig\Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 30
            $macros["menus"] = $this;
            // line 31
            if (($context["items"] ?? null)) {
                // line 32
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "<nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5\">
  ";
                } else {
                    // line 35
                    echo "  <nav class=\"menu\">
    ";
                }
                // line 37
                echo "
    <a href=\"/node\" class=\"navbar-brand d-block d-lg-none\">
      <h1 class=\"m-0 display-4 text-uppercase text-primary\">Biz<span class=\"text-white font-weight-normal\">News</span>
      </h1>
    </a>

    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
      <div class=\"navbar-nav row mr-auto py-0\">
        ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 50
                    echo "        ";
                    // line 51
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "in_active_trail", [], "any", false, false, true, 53)) ? ("menu-item--active-trail") : (""))];
                    // line 56
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo ">
          
          ";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 58)) {
                        // line 59
                        echo "          <div class=\"nav-item dropdown\">
            ";
                        // line 60
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), 60, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), 60, $this->source), ["class" => "nav-link dropdown-toggle text-sm", "data-toggle" => "dropdown"]), "html", null, true);
                        echo "
            <div class=\"dropdown-menu rounded-0 m-0\">
              ";
                        // line 62
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 62));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 63
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, true, 63), 63, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subitem"], "attributes", [], "any", false, false, true, 63), "addClass", [0 => "dropdown-item fs-6"], "method", false, false, true, 63), 63, $this->source)), "html", null, true);
                            echo "
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "            </div>
          </div>
          ";
                    } else {
                        // line 68
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 68), 68, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 68), 68, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 68), "addClass", [0 => "nav-link fs-6"], "method", false, false, true, 68), 68, $this->source)), "html", null, true);
                        echo "
          ";
                    }
                    // line 70
                    echo "          </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "      </div>
    </div>
  </nav>
  ";
            }
            // line 76
            echo "  ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 76,  150 => 72,  143 => 70,  137 => 68,  132 => 65,  123 => 63,  119 => 62,  114 => 60,  111 => 59,  109 => 58,  103 => 56,  101 => 53,  100 => 51,  98 => 50,  94 => 49,  80 => 37,  76 => 35,  72 => 33,  70 => 32,  68 => 31,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a menu.
*
* Available variables:
* - menu_name: The machine name of the menu.
* - items: A nested list of menu items. Each menu item contains:
* - attributes: HTML attributes for the menu item.
* - below: The menu item child items.
* - title: The menu link title.
* - url: The menu link url, instance of \\Drupal\\Core\\Url
* - localized_options: Menu link localized options.
* - is_expanded: TRUE if the link has visible children within the current
* menu tree.
* - is_collapsed: TRUE if the link has children within the current menu tree
* that are not currently visible.
* - in_active_trail: TRUE if the link is in the active trail.
*/
#}
{% import _self as menus %}

{#
We call a macro which calls itself to render the full tree.
@see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
{% import _self as menus %}
{% if items %}
{% if menu_level == 0 %}
<nav class=\"navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5\">
  {% else %}
  <nav class=\"menu\">
    {% endif %}

    <a href=\"/node\" class=\"navbar-brand d-block d-lg-none\">
      <h1 class=\"m-0 display-4 text-uppercase text-primary\">Biz<span class=\"text-white font-weight-normal\">News</span>
      </h1>
    </a>

    <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\">
      <div class=\"navbar-nav row mr-auto py-0\">
        {% for item in items %}
        {%
        set classes = [
        'menu-item',
        item.in_active_trail ? 'menu-item--active-trail',
        ]
        %}
        <li{{ item.attributes.addClass(classes) }}>
          
          {% if item.below %}
          <div class=\"nav-item dropdown\">
            {{ link(item.title, item.url, {'class': 'nav-link dropdown-toggle text-sm', 'data-toggle': 'dropdown'}) }}
            <div class=\"dropdown-menu rounded-0 m-0\">
              {% for subitem in item.below %}
              {{ link(subitem.title, subitem.url, subitem.attributes.addClass('dropdown-item fs-6')) }}
              {% endfor %}
            </div>
          </div>
          {% else %}
          {{ link(item.title, item.url, item.attributes.addClass('nav-link fs-6')) }}
          {% endif %}
          </li>
          {% endfor %}
      </div>
    </div>
  </nav>
  {% endif %}
  {% endmacro %}", "themes/custom/bigznews/templates/menu--main.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 49, "set" => 51);
        static $filters = array("escape" => 56);
        static $functions = array("link" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
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
