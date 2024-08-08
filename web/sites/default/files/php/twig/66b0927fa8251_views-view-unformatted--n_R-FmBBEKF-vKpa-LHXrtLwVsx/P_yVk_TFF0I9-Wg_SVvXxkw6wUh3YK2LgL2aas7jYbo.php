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

/* themes/custom/bigznews/templates/views/views-view-unformatted--news-tags--block-1.html.twig */
class __TwigTemplate_82b2a2565358383603ad851ee60a1269 extends \Twig\Template
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
        echo "
<div class=\"bg-white border border-top-0 p-3\">
  <div class=\"d-flex py-2 flex-wrap m-n1\" style=\"row-gap: 2rem;\">
    ";
        // line 21
        if (($context["title"] ?? null)) {
            // line 22
            echo "    ";
            // line 23
            echo "    ";
        }
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "    ";
            // line 26
            $context["row_classes"] = [0 => ((            // line 27
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 30
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 30), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            // line 32
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/views/views-view-unformatted--news-tags--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  67 => 32,  65 => 31,  61 => 30,  59 => 27,  58 => 26,  56 => 25,  51 => 24,  48 => 23,  46 => 22,  44 => 21,  39 => 18,);
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

<div class=\"bg-white border border-top-0 p-3\">
  <div class=\"d-flex py-2 flex-wrap m-n1\" style=\"row-gap: 2rem;\">
    {% if title %}
    {# <h3>{{ title }} hello</h3> #}
    {% endif %}
    {% for row in rows %}
    {%
    set row_classes = [
    default_row_class ? 'views-row',
    ]
    %}
    <div{{ row.attributes.addClass(row_classes) }}>
      {{- row.content -}}
  </div>
  {% endfor %}
</div>
</div>", "themes/custom/bigznews/templates/views/views-view-unformatted--news-tags--block-1.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\views\\views-view-unformatted--news-tags--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 24, "set" => 26);
        static $filters = array("escape" => 30);
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
