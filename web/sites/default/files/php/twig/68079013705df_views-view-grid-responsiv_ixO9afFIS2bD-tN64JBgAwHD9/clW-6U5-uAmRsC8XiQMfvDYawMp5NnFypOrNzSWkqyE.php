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

/* themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig */
class __TwigTemplate_2dcc7ef894b0a61d050924f9cb0290e9 extends Template
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
        // line 27
        yield "
";
        // line 28
        $context["is_map_mode"] = CoreExtension::inFilter("content-map", CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 28));
        yield "  ";
        // line 29
        $context["is_all_content_mode"] = CoreExtension::inFilter("all-content", CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 29));
        yield "  ";
        // line 30
        yield "
";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views/views.responsive-grid"), "html", null, true);
        yield "


";
        // line 35
        $context["responsive_grid_styles"] = [(("--views-responsive-grid--column-count:" . CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["options"] ?? null), "columns", [], "any", false, false, true, 36)) . ";"), (("--views-responsive-grid--cell-min-width:" . CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["options"] ?? null), "cell_min_width", [], "any", false, false, true, 37)) . "px;"), (("--views-responsive-grid--layout-gap:" . CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["options"] ?? null), "grid_gutter", [], "any", false, false, true, 38)) . "px;")];
        // line 42
        yield "
";
        // line 43
        if (($context["title"] ?? null)) {
            // line 44
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 46
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 46), "setAttribute", ["style", Twig\Extension\CoreExtension::join(($context["responsive_grid_styles"] ?? null))], "method", false, false, true, 46), "html", null, true);
        yield ">
  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            yield "    <div class=\"views-view-responsive-grid__item\">
      <div class=\"views-view-responsive-grid__item-inner\">";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 50), "html", null, true);
            // line 51
            yield "</div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options", "title", "classes", "items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig";
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
        return array (  100 => 54,  92 => 51,  90 => 50,  87 => 48,  83 => 47,  78 => 46,  72 => 44,  70 => 43,  67 => 42,  65 => 38,  64 => 37,  63 => 36,  62 => 35,  56 => 32,  53 => 30,  50 => 29,  47 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for views to display rows in a responsive grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rows contained in this view.
 * - options: The view plugin style options.
 *   - alignment: a string set to either 'horizontal' or 'vertical'.
 *   - columns: A number representing the max number of columns.
 *   - cell_min_width: A number representing the minimum width of the grid cell.
 *   - grid_gutter: A number representing the space between the grid cells.
 * - items: A list of grid items.
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid_responsive()
 *
 * @ingroup themeable
 */
#}

{% set is_map_mode = 'content-map' in attributes.class %}  {# Or pass this from parent #}
{% set is_all_content_mode = 'all-content' in attributes.class %}  {# Or pass this from parent #}

{# Attach the responsive grid library. #}
{{ attach_library('views/views.responsive-grid') }}


{% set responsive_grid_styles = [
    '--views-responsive-grid--column-count:' ~ options.columns ~ ';',
    '--views-responsive-grid--cell-min-width:' ~ options.cell_min_width ~ 'px;',
    '--views-responsive-grid--layout-gap:' ~ options.grid_gutter ~ 'px;',

  ]
%}

{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div{{ attributes.addClass(classes).setAttribute('style', responsive_grid_styles|join()) }}>
  {% for item in items %}
    <div class=\"views-view-responsive-grid__item\">
      <div class=\"views-view-responsive-grid__item-inner\">
        {{- item.content -}}
      </div>
    </div>
  {% endfor %}
</div>
", "themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 43, "for" => 47];
        static $filters = ["escape" => 32, "join" => 46];
        static $functions = ["attach_library" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'join'],
                ['attach_library'],
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
