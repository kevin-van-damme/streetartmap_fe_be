<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/custom_theme/templates/layout/page.html.twig */
class __TwigTemplate_88088fa38204f5136525e22fcc9bf4a3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "<div class=\"layout-container\">

\t<header role=\"banner\">
\t\t";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 48), "html", null, true);
        yield "
\t</header>

\t";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 51), "html", null, true);
        yield "
\t";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 52), "html", null, true);
        yield "

\t";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 54), "html", null, true);
        yield "

\t";
        // line 56
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 56), "html", null, true);
        yield "

\t";
        // line 58
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 58), "html", null, true);
        yield "

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t";
        // line 63
        yield "
\t\t<div class=\"layout-content\">
\t\t\t";
        // line 65
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 65), "html", null, true);
        yield "
\t\t</div>
\t\t";
        // line 68
        yield "
\t\t";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 69)) {
            // line 70
            yield "\t\t\t<aside class=\"layout-sidebar-first\" role=\"complementary\">
\t\t\t\t";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 71), "html", null, true);
            yield "
\t\t\t</aside>
\t\t";
        }
        // line 74
        yield "
\t\t";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 75)) {
            // line 76
            yield "\t\t\t<aside class=\"layout-sidebar-second\" role=\"complementary\">
\t\t\t\t";
            // line 77
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 77), "html", null, true);
            yield "
\t\t\t</aside>
\t\t";
        }
        // line 80
        yield "
\t</main>

\t";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 83)) {
            // line 84
            yield "\t\t<footer role=\"contentinfo\">
\t\t\t<div class=\"flex gap-2 border-t border-[#293038] bg-[#1c2126] px-4 pb-3 pt-2\">
\t\t\t\t";
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 86), "html", null, true);
            yield "
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 90
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  136 => 90,  129 => 86,  125 => 84,  123 => 83,  118 => 80,  112 => 77,  109 => 76,  107 => 75,  104 => 74,  98 => 71,  95 => 70,  93 => 69,  90 => 68,  85 => 65,  81 => 63,  74 => 58,  69 => 56,  64 => 54,  59 => 52,  55 => 51,  49 => 48,  44 => 45,);
    }

    public function getSourceContext(): Source
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
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
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
<div class=\"layout-container\">

\t<header role=\"banner\">
\t\t{{ page.header }}
\t</header>

\t{{ page.primary_menu }}
\t{{ page.secondary_menu }}

\t{{ page.breadcrumb }}

\t{{ page.highlighted }}

\t{{ page.help }}

\t<main role=\"main\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>
\t\t{# link is in html.html.twig #}

\t\t<div class=\"layout-content\">
\t\t\t{{ page.content }}
\t\t</div>
\t\t{# /.layout-content #}

\t\t{% if page.sidebar_first %}
\t\t\t<aside class=\"layout-sidebar-first\" role=\"complementary\">
\t\t\t\t{{ page.sidebar_first }}
\t\t\t</aside>
\t\t{% endif %}

\t\t{% if page.sidebar_second %}
\t\t\t<aside class=\"layout-sidebar-second\" role=\"complementary\">
\t\t\t\t{{ page.sidebar_second }}
\t\t\t</aside>
\t\t{% endif %}

\t</main>

\t{% if page.footer %}
\t\t<footer role=\"contentinfo\">
\t\t\t<div class=\"flex gap-2 border-t border-[#293038] bg-[#1c2126] px-4 pb-3 pt-2\">
\t\t\t\t{{ page.footer }}
\t\t\t</div>
\t\t</footer>
\t{% endif %}

</div>
{# /.layout-container #}
", "themes/custom/custom_theme/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 69];
        static $filters = ["escape" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
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
