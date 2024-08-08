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

/* modules/custom/slider/templates/slider.html.twig */
class __TwigTemplate_23a20e8e67eb1862f2fe5827f505e5ab extends \Twig\Template
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
        echo "<div class=\"swiper hero_swiper\">
    <div class=\"swiper-wrapper\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <div class=\"swiper-slide\">
            <div class=\"cover_image\">
                <img src=";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "cover_image", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo " alt=\"loading error\" />
                <span class=\"custom_overlay\">
                    <span class=\"cover_image_breaking_news\">Breaking News</span>
                    <span class=\"cover_image_breaking_news_title\">";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</span>
                </span>
            </div>
            <div class=\"sub_images\">
                <div class=\"sub_image_1\">
                    <img src=";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sub_image_1", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo " alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</span>
                    </span>
                </div>

                <div class=\"sub_image_2\">
                    <img src=";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sub_image_2", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</span>
                    </span>

                </div>
                <div class=\"sub_image_3\">
                    <img src=";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sub_image_3", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo " alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "</span>
                    </span>

                </div>
                <div class=\"sub_image_4\">
                    <img src=";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "sub_image_4", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo " alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</span>
                    </span>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>

    <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>

    <!-- If we need navigation buttons -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/slider/templates/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  113 => 41,  107 => 38,  99 => 33,  93 => 30,  85 => 25,  79 => 22,  71 => 17,  65 => 14,  57 => 9,  51 => 6,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"swiper hero_swiper\">
    <div class=\"swiper-wrapper\">
        {% for item in data %}
        <div class=\"swiper-slide\">
            <div class=\"cover_image\">
                <img src={{ item.cover_image }} alt=\"loading error\" />
                <span class=\"custom_overlay\">
                    <span class=\"cover_image_breaking_news\">Breaking News</span>
                    <span class=\"cover_image_breaking_news_title\">{{item.title}}</span>
                </span>
            </div>
            <div class=\"sub_images\">
                <div class=\"sub_image_1\">
                    <img src={{ item.sub_image_1 }} alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">{{item.title}}</span>
                    </span>
                </div>

                <div class=\"sub_image_2\">
                    <img src={{ item.sub_image_2 }} alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">{{item.title}}</span>
                    </span>

                </div>
                <div class=\"sub_image_3\">
                    <img src={{ item.sub_image_3 }} alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">{{item.title}}</span>
                    </span>

                </div>
                <div class=\"sub_image_4\">
                    <img src={{ item.sub_image_4 }} alt=\"loading error\" />
                    <span class=\"custom_overlay\">
                        <span class=\"sub_images_breaking_news\">Breaking News</span>
                        <span class=\"sub_images_breaking_news_title\">{{item.title}}</span>
                    </span>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

    <!-- If we need pagination -->
    <div class=\"swiper-pagination\"></div>

    <!-- If we need navigation buttons -->
    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
</div>", "modules/custom/slider/templates/slider.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\modules\\custom\\slider\\templates\\slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
