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

/* core/themes/claro/templates/classy/field/field--node--uid.html.twig */
class __TwigTemplate_74db795db87fabe1146f750f88fec7d8 extends \Twig\Template
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
        // line 28
        if ( !($context["is_inline"] ?? null)) {
            // line 29
            echo "  ";
            $this->loadTemplate("field.html.twig", "core/themes/claro/templates/classy/field/field--node--uid.html.twig", 29)->display($context);
        } else {
            // line 32
            $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 34
($context["field_name"] ?? null), 34, $this->source))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(            // line 35
($context["field_type"] ?? null), 35, $this->source))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(            // line 36
($context["label_display"] ?? null), 36, $this->source))];
            // line 39
            echo "<span";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo ">";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/claro/templates/classy/field/field--node--uid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 43,  58 => 41,  54 => 40,  50 => 39,  48 => 36,  47 => 35,  46 => 34,  45 => 32,  41 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the node user field.
 *
 * This is an override of field.html.twig for the node user field. See that
 * template for documentation about its details and overrides.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing span element.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 * - is_inline: If false, display an ordinary field.
 *   If true, display an inline format, suitable for inside elements such as
 *   <span>, <h2> and so on.
 *
 * @see field.html.twig
 * @see node_preprocess_field__node()
 *
 * @todo Delete as part of https://www.drupal.org/node/3015623
 */
#}
{% if not is_inline %}
  {% include \"field.html.twig\" %}
{% else %}
{%
  set classes = [
    'field',
    'field--name-' ~ field_name|clean_class,
    'field--type-' ~ field_type|clean_class,
    'field--label-' ~ label_display,
  ]
%}
<span{{ attributes.addClass(classes) }}>
  {%- for item in items -%}
    {{ item.content }}
  {%- endfor -%}
</span>
{% endif %}
", "core/themes/claro/templates/classy/field/field--node--uid.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\core\\themes\\claro\\templates\\classy\\field\\field--node--uid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 28, "include" => 29, "set" => 32, "for" => 40);
        static $filters = array("clean_class" => 34, "escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'set', 'for'],
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
