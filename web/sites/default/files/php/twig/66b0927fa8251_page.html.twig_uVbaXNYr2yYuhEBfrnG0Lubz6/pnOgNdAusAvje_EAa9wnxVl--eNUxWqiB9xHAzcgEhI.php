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

/* themes/custom/bigznews/templates/page.html.twig */
class __TwigTemplate_1bf4a15db821c60ea22734a23bc6c83d extends \Twig\Template
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
        // line 45
        echo "<div class=\"layout-container d-flex flex-column\">

    <div class=\"bg-dark layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"bg-white layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "subheader", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"bg-dark layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
            ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex container align-items-center justify-content-center w-100\">
            ";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "
        </div>
    </div>

    ";
        // line 73
        echo "
    ";
        // line 75
        echo "
    ";
        // line 77
        echo "
    <div class=\"container-fluid d-flex align-items-center justify-content-center\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "latest_news", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
        echo "
                ";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "first_sidebar", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
            </div>
        </div>
    </div>

    ";
        // line 87
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "



    ";
        // line 92
        echo "
    ";
        // line 119
        echo "

    <!-- Main News Slider Start -->
    ";
        // line 226
        echo "    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    ";
        // line 251
        echo "    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    ";
        // line 324
        echo "    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    ";
        // line 772
        echo "    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    ";
        // line 875
        echo "
    ";
        // line 883
        echo "    <!-- Footer End -->


    <!-- Back to Top -->
    ";
        // line 888
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/bigznews/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 888,  149 => 883,  146 => 875,  140 => 772,  134 => 324,  128 => 251,  122 => 226,  117 => 119,  114 => 92,  107 => 87,  99 => 82,  95 => 81,  89 => 77,  86 => 75,  83 => 73,  76 => 68,  67 => 62,  63 => 61,  54 => 55,  45 => 49,  39 => 45,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
* - page.breadcrumb: Items for the breadcrumb region.
*
* @see template_preprocess_page()
* @see html.html.twig
*/
#}
<div class=\"layout-container d-flex flex-column\">

    <div class=\"bg-dark layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            {{ page.header }}
        </div>
    </div>

    <div class=\"bg-white layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            {{ page.subheader }}
        </div>
    </div>

    <div class=\"bg-dark layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex align-items-center container justify-content-between w-100\">
            {{ page.primary_menu }}
            {{ page.secondary_menu }}
        </div>
    </div>

    <div class=\"layout-container d-flex align-items-center justify-content-center\">
        <div class=\"d-flex container align-items-center justify-content-center w-100\">
            {{ page.hero }}
        </div>
    </div>

    {# {{ page.breadcrumb }} #}

    {# {{page.featured_top}} #}

    {# {{ page.highlighted }} #}

    <div class=\"container-fluid d-flex align-items-center justify-content-center\">
        <div class=\"container\">
            <div class=\"row\">
                {{page.latest_news}}
                {{ page.first_sidebar }}
            </div>
        </div>
    </div>

    {{page.highlighted}}



    {# {{ page.help }} #}

    {# <main role=\"main\">
        <a id=\"main-content\" tabindex=\"-1\"></a>

        <div class=\"layout-content\">
            {{ page.content }}
        </div

        {% if page.sidebar_first %}
        <aside class=\"layout-sidebar-first\" role=\"complementary\">
            {{ page.sidebar_first }}
        </aside>
        {% endif %}

        {% if page.sidebar_second %}
        <aside class=\"layout-sidebar-second\" role=\"complementary\">
            {{ page.sidebar_second }}
        </aside>
        {% endif %}

    </main>

    {% if page.footer %}
    <footer role=\"contentinfo\">
        {{ page.footer }}
    </footer>
    {% endif %} #}


    <!-- Main News Slider Start -->
    {# <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-7 px-0\">
                <div class=\"owl-carousel main-carousel position-relative\">
                    <div class=\"position-relative overflow-hidden\" style=\"height: 500px;\">
                        <img class=\"img-fluid h-100\" src=\"img/news-800x500-1.jpg\" style=\"object-fit: cover;\">
                        <div class=\"overlay\">
                            <div class=\"mb-2\">
                                <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                    href=\"\">Business</a>
                                <a class=\"text-white\" href=\"\">Jan 01, 2045</a>
                            </div>
                            <a class=\"h2 m-0 text-white text-uppercase font-weight-bold\" href=\"\">Lorem ipsum dolor sit
                                amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>
                    <div class=\"position-relative overflow-hidden\" style=\"height: 500px;\">
                        <img class=\"img-fluid h-100\" src=\"img/news-800x500-2.jpg\" style=\"object-fit: cover;\">
                        <div class=\"overlay\">
                            <div class=\"mb-2\">
                                <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                    href=\"\">Business</a>
                                <a class=\"text-white\" href=\"\">Jan 01, 2045</a>
                            </div>
                            <a class=\"h2 m-0 text-white text-uppercase font-weight-bold\" href=\"\">Lorem ipsum dolor sit
                                amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>
                    <div class=\"position-relative overflow-hidden\" style=\"height: 500px;\">
                        <img class=\"img-fluid h-100\" src=\"img/news-800x500-3.jpg\" style=\"object-fit: cover;\">
                        <div class=\"overlay\">
                            <div class=\"mb-2\">
                                <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                    href=\"\">Business</a>
                                <a class=\"text-white\" href=\"\">Jan 01, 2045</a>
                            </div>
                            <a class=\"h2 m-0 text-white text-uppercase font-weight-bold\" href=\"\">Lorem ipsum dolor sit
                                amet elit. Proin vitae porta diam...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5 px-0\">
                <div class=\"row mx-0\">
                    <div class=\"col-md-6 px-0\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                            <img class=\"img-fluid w-100 h-100\" src=\"img/news-700x435-1.jpg\" style=\"object-fit: cover;\">
                            <div class=\"overlay\">
                                <div class=\"mb-2\">
                                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                        href=\"\">Business</a>
                                    <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                                </div>
                                <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum
                                    dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 px-0\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                            <img class=\"img-fluid w-100 h-100\" src=\"img/news-700x435-2.jpg\" style=\"object-fit: cover;\">
                            <div class=\"overlay\">
                                <div class=\"mb-2\">
                                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                        href=\"\">Business</a>
                                    <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                                </div>
                                <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum
                                    dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 px-0\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                            <img class=\"img-fluid w-100 h-100\" src=\"img/news-700x435-3.jpg\" style=\"object-fit: cover;\">
                            <div class=\"overlay\">
                                <div class=\"mb-2\">
                                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                        href=\"\">Business</a>
                                    <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                                </div>
                                <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum
                                    dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 px-0\">
                        <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                            <img class=\"img-fluid w-100 h-100\" src=\"img/news-700x435-4.jpg\" style=\"object-fit: cover;\">
                            <div class=\"overlay\">
                                <div class=\"mb-2\">
                                    <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                        href=\"\">Business</a>
                                    <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                                </div>
                                <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum
                                    dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> #}
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    {# <div class=\"container-fluid bg-dark py-3 mb-3\">
        <div class=\"container\">
            <div class=\"row align-items-center bg-dark\">
                <div class=\"col-12\">
                    <div class=\"d-flex justify-content-between\">
                        <div class=\"bg-primary text-dark text-center font-weight-medium py-2\" style=\"width: 170px;\">
                            Breaking News</div>
                        <div class=\"owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3\"
                            style=\"width: calc(100% - 170px); padding-right: 90px;\">
                            <div class=\"text-truncate\"><a class=\"text-white text-uppercase font-weight-semi-bold\"
                                    href=\"\">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt,
                                    sed faucibus nisl sodales</a></div>
                            <div class=\"text-truncate\"><a class=\"text-white text-uppercase font-weight-semi-bold\"
                                    href=\"\">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt,
                                    sed faucibus nisl sodales</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> #}
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    {# <div class=\"container-fluid pt-5 mb-3\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h4 class=\"m-0 text-uppercase font-weight-bold\">Featured News</h4>
            </div>
            <div class=\"owl-carousel news-carousel carousel-item-4 position-relative\">
                <div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-1.jpg\" style=\"object-fit: cover;\">
                    <div class=\"overlay\">
                        <div class=\"mb-2\">
                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                href=\"\">Business</a>
                            <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                        </div>
                        <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum dolor sit
                            amet elit...</a>
                    </div>
                </div>
                <div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-2.jpg\" style=\"object-fit: cover;\">
                    <div class=\"overlay\">
                        <div class=\"mb-2\">
                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                href=\"\">Business</a>
                            <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                        </div>
                        <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum dolor sit
                            amet elit...</a>
                    </div>
                </div>
                <div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-3.jpg\" style=\"object-fit: cover;\">
                    <div class=\"overlay\">
                        <div class=\"mb-2\">
                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                href=\"\">Business</a>
                            <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                        </div>
                        <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum dolor sit
                            amet elit...</a>
                    </div>
                </div>
                <div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-4.jpg\" style=\"object-fit: cover;\">
                    <div class=\"overlay\">
                        <div class=\"mb-2\">
                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                href=\"\">Business</a>
                            <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                        </div>
                        <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum dolor sit
                            amet elit...</a>
                    </div>
                </div>
                <div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-5.jpg\" style=\"object-fit: cover;\">
                    <div class=\"overlay\">
                        <div class=\"mb-2\">
                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                href=\"\">Business</a>
                            <a class=\"text-white\" href=\"\"><small>Jan 01, 2045</small></a>
                        </div>
                        <a class=\"h6 m-0 text-white text-uppercase font-weight-semi-bold\" href=\"\">Lorem ipsum dolor sit
                            amet elit...</a>
                    </div>
                </div>
            </div>
        </div>
    </div> #}
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    {# <div class=\"container-fluid\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"section-title\">
                                <h4 class=\"m-0 text-uppercase font-weight-bold\">Latest News</h4>
                                <a class=\"text-secondary font-weight-medium text-decoration-none\" href=\"\">View All</a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"position-relative mb-3\">
                                <img class=\"img-fluid w-100\" src=\"img/news-700x435-1.jpg\" style=\"object-fit: cover;\">
                                <div class=\"bg-white border border-top-0 p-4\">
                                    <div class=\"mb-2\">
                                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                            href=\"\">Business</a>
                                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class=\"h4 d-block mb-3 text-secondary text-uppercase font-weight-bold\"
                                        href=\"\">Lorem ipsum dolor sit amet elit...</a>
                                    <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class=\"d-flex justify-content-between bg-white border border-top-0 p-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\"
                                            alt=\"\">
                                        <small>John Doe</small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                                        <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"position-relative mb-3\">
                                <img class=\"img-fluid w-100\" src=\"img/news-700x435-2.jpg\" style=\"object-fit: cover;\">
                                <div class=\"bg-white border border-top-0 p-4\">
                                    <div class=\"mb-2\">
                                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                            href=\"\">Business</a>
                                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class=\"h4 d-block mb-3 text-secondary text-uppercase font-weight-bold\"
                                        href=\"\">Lorem ipsum dolor sit amet elit...</a>
                                    <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class=\"d-flex justify-content-between bg-white border border-top-0 p-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\"
                                            alt=\"\">
                                        <small>John Doe</small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                                        <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-12 mb-3\">
                            <a href=\"\"><img class=\"img-fluid w-100\" src=\"img/ads-728x90.png\" alt=\"\"></a>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"position-relative mb-3\">
                                <img class=\"img-fluid w-100\" src=\"img/news-700x435-3.jpg\" style=\"object-fit: cover;\">
                                <div class=\"bg-white border border-top-0 p-4\">
                                    <div class=\"mb-2\">
                                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                            href=\"\">Business</a>
                                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class=\"h4 d-block mb-0 text-secondary text-uppercase font-weight-bold\"
                                        href=\"\">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class=\"d-flex justify-content-between bg-white border border-top-0 p-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\"
                                            alt=\"\">
                                        <small>John Doe</small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                                        <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"position-relative mb-3\">
                                <img class=\"img-fluid w-100\" src=\"img/news-700x435-4.jpg\" style=\"object-fit: cover;\">
                                <div class=\"bg-white border border-top-0 p-4\">
                                    <div class=\"mb-2\">
                                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                            href=\"\">Business</a>
                                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class=\"h4 d-block mb-0 text-secondary text-uppercase font-weight-bold\"
                                        href=\"\">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class=\"d-flex justify-content-between bg-white border border-top-0 p-4\">
                                    <div class=\"d-flex align-items-center\">
                                        <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\"
                                            alt=\"\">
                                        <small>John Doe</small>
                                    </div>
                                    <div class=\"d-flex align-items-center\">
                                        <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                                        <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                                <img class=\"img-fluid\" src=\"img/news-110x110-1.jpg\" alt=\"\">
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                                <img class=\"img-fluid\" src=\"img/news-110x110-3.jpg\" alt=\"\">
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                        <div class=\"col-lg-12 mb-3\">
                            <a href=\"\"><img class=\"img-fluid w-100\" src=\"img/ads-728x90.png\" alt=\"\"></a>
                        </div>
                        <div class=\"col-lg-12\">
                            <div class=\"row news-lg mx-0 mb-3\">
                                <div class=\"col-md-6 h-100 px-0\">
                                    <img class=\"img-fluid h-100\" src=\"img/news-700x435-5.jpg\"
                                        style=\"object-fit: cover;\">
                                </div>
                                <div class=\"col-md-6 d-flex flex-column border bg-white h-100 px-0\">
                                    <div class=\"mt-auto p-4\">
                                        <div class=\"mb-2\">
                                            <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2\"
                                                href=\"\">Business</a>
                                            <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class=\"h4 d-block mb-3 text-secondary text-uppercase font-weight-bold\"
                                            href=\"\">Lorem ipsum dolor sit amet elit...</a>
                                        <p class=\"m-0\">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class=\"d-flex justify-content-between bg-white border-top mt-auto p-4\">
                                        <div class=\"d-flex align-items-center\">
                                            <img class=\"rounded-circle mr-2\" src=\"img/user.jpg\" width=\"25\" height=\"25\"
                                                alt=\"\">
                                            <small>John Doe</small>
                                        </div>
                                        <div class=\"d-flex align-items-center\">
                                            <small class=\"ml-3\"><i class=\"far fa-eye mr-2\"></i>12345</small>
                                            <small class=\"ml-3\"><i class=\"far fa-comment mr-2\"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                                <img class=\"img-fluid\" src=\"img/news-110x110-1.jpg\" alt=\"\">
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                        <div class=\"col-lg-6\">
                            <div class=\"d-flex align-items-center bg-white mb-3\" style=\"height: 110px;\">
                                <img class=\"img-fluid\" src=\"img/news-110x110-3.jpg\" alt=\"\">
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                </div>

                <div class=\"col-lg-4\">
                    <!-- Social Follow Start -->
                    <div class=\"mb-3\">
                        <div class=\"section-title mb-0\">
                            <h4 class=\"m-0 text-uppercase font-weight-bold\">Follow Us</h4>
                        </div>
                        <div class=\"bg-white border border-top-0 p-3\">
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\"
                                style=\"background: #39569E;\">
                                <i class=\"fab fa-facebook-f text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Fans</span>
                            </a>
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\"
                                style=\"background: #52AAF4;\">
                                <i class=\"fab fa-twitter text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Followers</span>
                            </a>
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\"
                                style=\"background: #0185AE;\">
                                <i class=\"fab fa-linkedin-in text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Connects</span>
                            </a>
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\"
                                style=\"background: #C8359D;\">
                                <i class=\"fab fa-instagram text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Followers</span>
                            </a>
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none mb-3\"
                                style=\"background: #DC472E;\">
                                <i class=\"fab fa-youtube text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Subscribers</span>
                            </a>
                            <a href=\"\" class=\"d-block w-100 text-white text-decoration-none\"
                                style=\"background: #055570;\">
                                <i class=\"fab fa-vimeo-v text-center py-4 mr-3\"
                                    style=\"width: 65px; background: rgba(0, 0, 0, .2);\"></i>
                                <span class=\"font-weight-medium\">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
                                <div
                                    class=\"w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0\">
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
            </div>
        </div>
    </div> #}
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    {# <div class=\"container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5\">
        <div class=\"row py-4\">
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h5 class=\"mb-4 text-white text-uppercase font-weight-bold\">Get In Touch</h5>
                <p class=\"font-weight-medium\"><i class=\"fa fa-map-marker-alt mr-2\"></i>123 Street, New York, USA</p>
                <p class=\"font-weight-medium\"><i class=\"fa fa-phone-alt mr-2\"></i>+012 345 67890</p>
                <p class=\"font-weight-medium\"><i class=\"fa fa-envelope mr-2\"></i>info@example.com</p>
                <h6 class=\"mt-4 mb-3 text-white text-uppercase font-weight-bold\">Follow Us</h6>
                <div class=\"d-flex justify-content-start\">
                    <a class=\"btn btn-lg btn-secondary btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-lg btn-secondary btn-lg-square mr-2\" href=\"#\"><i
                            class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-lg btn-secondary btn-lg-square mr-2\" href=\"#\"><i
                            class=\"fab fa-linkedin-in\"></i></a>
                    <a class=\"btn btn-lg btn-secondary btn-lg-square mr-2\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"btn btn-lg btn-secondary btn-lg-square\" href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h5 class=\"mb-4 text-white text-uppercase font-weight-bold\">Popular News</h5>
                <div class=\"mb-3\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"small text-body text-uppercase font-weight-medium\" href=\"\">Lorem ipsum dolor sit amet
                        elit. Proin vitae porta diam...</a>
                </div>
                <div class=\"mb-3\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"small text-body text-uppercase font-weight-medium\" href=\"\">Lorem ipsum dolor sit amet
                        elit. Proin vitae porta diam...</a>
                </div>
                <div class=\"\">
                    <div class=\"mb-2\">
                        <a class=\"badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2\"
                            href=\"\">Business</a>
                        <a class=\"text-body\" href=\"\"><small>Jan 01, 2045</small></a>
                    </div>
                    <a class=\"small text-body text-uppercase font-weight-medium\" href=\"\">Lorem ipsum dolor sit amet
                        elit. Proin vitae porta diam...</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h5 class=\"mb-4 text-white text-uppercase font-weight-bold\">Categories</h5>
                <div class=\"m-n1\">
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Politics</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Corporate</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Health</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Education</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Science</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Foods</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Entertainment</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Travel</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Lifestyle</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Politics</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Corporate</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Health</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Education</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Science</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Business</a>
                    <a href=\"\" class=\"btn btn-sm btn-secondary m-1\">Foods</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-5\">
                <h5 class=\"mb-4 text-white text-uppercase font-weight-bold\">Flickr Photos</h5>
                <div class=\"row\">
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-1.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-2.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-3.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-4.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-5.jpg\" alt=\"\"></a>
                    </div>
                    <div class=\"col-4 mb-3\">
                        <a href=\"\"><img class=\"w-100\" src=\"img/news-110x110-1.jpg\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> #}

    {# <div class=\"container-fluid py-4 px-sm-3 px-md-5\" style=\"background: #111111;\">
        <p class=\"m-0 text-center\">&copy; <a href=\"#\">Your Site Name</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
            Design by <a href=\"https://htmlcodex.com\">HTML Codex</a>
        </p>
    </div> #}
    <!-- Footer End -->


    <!-- Back to Top -->
    {# <a href=\"#\" class=\"btn btn-primary btn-square back-to-top\"><i class=\"fa fa-arrow-up\"></i></a> #}

</div>{# /.layout-container #}", "themes/custom/bigznews/templates/page.html.twig", "C:\\xampp\\htdocs\\theme-assignment\\web\\themes\\custom\\bigznews\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
