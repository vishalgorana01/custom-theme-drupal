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

/* modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig */
class __TwigTemplate_3f1ac21612543d41d77a59e2c3ef96de extends \Twig\Template
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
        // line 6
        echo "
";
        // line 8
        $context["classes"] = [0 => "social-media-links--platforms", 1 => "platforms", 2 => (((twig_get_attribute($this->env, $this->source,         // line 11
($context["appearance"] ?? null), "orientation", [], "any", false, false, true, 11) == "h")) ? ("inline horizontal") : ("vertical"))];
        // line 14
        echo "
";
        // line 15
        $context["bgColors"] = [0 => "#39569E", 1 => "#52AAF4", 2 => "#0185AE", 3 => "#C8359D", 4 => "#DC472E", 5 => "#055570"];
        // line 16
        echo "
<div";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo ">
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["platforms"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 19
            echo "  <a class=\"py-2 px-3 social-media-link-icon--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo " d-flex align-items-center justify-content-start w-100 text-white text-decoration-none mb-3\"
    href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "attributes", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo " style=\"background-color: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["bgColors"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20) % twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["bgColors"] ?? null), 20, $this->source)))] ?? null) : null), 20, $this->source), "html", null, true);
            echo ";\" >
    <span class=\"social_media_icons\">
      ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["platform"], "element", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
    </span>
    <span class=\"font-weight-medium\">12,345 Fans</span>
  </a>

  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>


  ";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  88 => 22,  79 => 20,  74 => 19,  57 => 18,  53 => 17,  50 => 16,  48 => 15,  45 => 14,  43 => 11,  42 => 8,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @ingroup themeable
*/
#}

{%
set classes = [
'social-media-links--platforms',
'platforms',
appearance.orientation == 'h' ? 'inline horizontal' : 'vertical',
]
%}

{% set bgColors = ['#39569E', '#52AAF4', '#0185AE', '#C8359D', '#DC472E', '#055570'] %}

<div{{ attributes.addClass(classes) }}>
  {% for platform in platforms %}
  <a class=\"py-2 px-3 social-media-link-icon--{{ platform.id }} d-flex align-items-center justify-content-start w-100 text-white text-decoration-none mb-3\"
    href=\"{{ platform.url }}\" {{ platform.attributes }} style=\"background-color: {{ bgColors[loop.index0 % bgColors|length] }};\" >
    <span class=\"social_media_icons\">
      {{ platform.element }}
    </span>
    <span class=\"font-weight-medium\">12,345 Fans</span>
  </a>

  {% endfor %}
  </div>


  {#
  <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\" style=\"background: #39569E;\">
    <i class=\"fab fa-facebook-f text-center py-4 mr-3\" style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
    <span class=\"font-weight-medium\">12,345 Fans</span>
  </a>
  #}", "modules/contrib/social_media_links/templates/social-media-links-platforms.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\modules\\contrib\\social_media_links\\templates\\social-media-links-platforms.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 18);
        static $filters = array("escape" => 17, "length" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'length'],
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
