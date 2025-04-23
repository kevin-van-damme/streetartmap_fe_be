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

/* themes/contrib/gin/templates/page/page.html.twig */
class __TwigTemplate_6f44cf9a42ac999cee1da1e04b54b5ce extends Template
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
        // line 42
        $context["page_title_block"] = (($context["active_admin_theme"] ?? null) . "_page_title");
        // line 43
        $context["local_actions_block"] = (($context["active_admin_theme"] ?? null) . "_local_actions");
        // line 44
        yield "
<div class=\"gin-secondary-toolbar layout-container\">
  <div class=\"gin-breadcrumb-wrapper\">
  ";
        // line 47
        if ((($context["route_name"] ?? null) == "entity.node.canonical")) {
            // line 48
            yield "    <div class=\"region region-breadcrumb gin-region-breadcrumb\">
      <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            yield "</h2>
        <ol class=\"breadcrumb__list\">
          <li class=\"breadcrumb__item\">
            ";
            // line 53
            if ((($context["entity_edit_url"] ?? null) && ($context["entity_title"] ?? null))) {
                // line 54
                yield "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["entity_edit_url"] ?? null), "html", null, true);
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit %title", ["%title" => ($context["entity_title"] ?? null)]));
                yield "</a>
            ";
            } else {
                // line 56
                yield "              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content"));
                yield "\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back to Administration"));
                yield "</a>
            ";
            }
            // line 58
            yield "          </li>
        </ol>
      </nav>
    </div>
  ";
        } else {
            // line 63
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 63), "html", null, true);
            yield "
  ";
        }
        // line 65
        yield "  </div>
  ";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "gin_secondary_toolbar", [], "any", false, false, true, 66), "html", null, true);
        yield "
</div>

<div class=\"region-sticky-watcher\"></div>

<header class=\"region region-sticky ";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["gin_form_actions_class"] ?? null), "html", null, true);
        yield "\">
  <div class=\"layout-container region-sticky__items\">
    <div class=\"region-sticky__items__inner\">
      ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[($context["page_title_block"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74), ($context["page_title_block"] ?? null), [], "array", false, false, true, 74)), "html", null, true);
        yield "
      ";
        // line 75
        if ( !($context["active_navigation_top_bar"] ?? null)) {
            // line 76
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 76)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[($context["local_actions_block"] ?? null)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 76), ($context["local_actions_block"] ?? null), [], "array", false, false, true, 76)), "html", null, true);
            yield "
      ";
        }
        // line 78
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["gin_form_actions"] ?? null), "html", null, true);
        yield "
    </div>
  </div>
</header>

<div class=\"sticky-shadow\"></div>

<div class=\"content-header clearfix\">
  <div class=\"layout-container\">
    ";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 87), ($context["page_title_block"] ?? null)), "html", null, true);
        yield "
  </div>
</div>

<div class=\"layout-container\">
  ";
        // line 92
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 92), "html", null, true);
        yield "
  <main class=\"page-content clearfix\" role=\"main\">
    <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
    ";
        // line 95
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 95), "html", null, true);
        yield "
    ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 96)) {
            // line 97
            yield "      <div class=\"help\">
        ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 98), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 101
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 101), ($context["local_actions_block"] ?? null)), "html", null, true);
        yield "
  </main>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["active_admin_theme", "route_name", "entity_edit_url", "entity_title", "page", "gin_form_actions_class", "active_navigation_top_bar", "gin_form_actions"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/gin/templates/page/page.html.twig";
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
        return array (  167 => 101,  161 => 98,  158 => 97,  156 => 96,  152 => 95,  146 => 92,  138 => 87,  125 => 78,  119 => 76,  117 => 75,  113 => 74,  107 => 71,  99 => 66,  96 => 65,  90 => 63,  83 => 58,  75 => 56,  67 => 54,  65 => 53,  59 => 50,  55 => 48,  53 => 47,  48 => 44,  46 => 43,  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Claro's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
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
 * - page.pre_content: Items for the pre-content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set page_title_block = active_admin_theme ~ '_page_title' %}
{% set local_actions_block = active_admin_theme ~ '_local_actions' %}

<div class=\"gin-secondary-toolbar layout-container\">
  <div class=\"gin-breadcrumb-wrapper\">
  {% if route_name == 'entity.node.canonical' %}
    <div class=\"region region-breadcrumb gin-region-breadcrumb\">
      <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
        <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">{{ 'Breadcrumb'|t }}</h2>
        <ol class=\"breadcrumb__list\">
          <li class=\"breadcrumb__item\">
            {% if entity_edit_url and entity_title %}
              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"{{ entity_edit_url }}\">{{ 'Edit %title'|t({ '%title': entity_title }) }}</a>
            {% else %}
              <a class=\"breadcrumb__link gin-back-to-admin\" href=\"{{ path('system.admin_content') }}\">{{ 'Back to Administration'|t }}</a>
            {% endif %}
          </li>
        </ol>
      </nav>
    </div>
  {% else %}
    {{ page.breadcrumb }}
  {% endif %}
  </div>
  {{ page.gin_secondary_toolbar }}
</div>

<div class=\"region-sticky-watcher\"></div>

<header class=\"region region-sticky {{ gin_form_actions_class }}\">
  <div class=\"layout-container region-sticky__items\">
    <div class=\"region-sticky__items__inner\">
      {{ page.header[page_title_block] }}
      {% if not active_navigation_top_bar %}
        {{ page.content[local_actions_block] }}
      {% endif %}
      {{ gin_form_actions }}
    </div>
  </div>
</header>

<div class=\"sticky-shadow\"></div>

<div class=\"content-header clearfix\">
  <div class=\"layout-container\">
    {{ page.header|without(page_title_block) }}
  </div>
</div>

<div class=\"layout-container\">
  {{ page.pre_content }}
  <main class=\"page-content clearfix\" role=\"main\">
    <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
    {{ page.highlighted }}
    {% if page.help %}
      <div class=\"help\">
        {{ page.help }}
      </div>
    {% endif %}
    {{ page.content|without(local_actions_block) }}
  </main>
</div>
", "themes/contrib/gin/templates/page/page.html.twig", "/var/www/html/web/themes/contrib/gin/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 42, "if" => 47];
        static $filters = ["t" => 50, "escape" => 54, "without" => 87];
        static $functions = ["path" => 56];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'without'],
                ['path'],
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
