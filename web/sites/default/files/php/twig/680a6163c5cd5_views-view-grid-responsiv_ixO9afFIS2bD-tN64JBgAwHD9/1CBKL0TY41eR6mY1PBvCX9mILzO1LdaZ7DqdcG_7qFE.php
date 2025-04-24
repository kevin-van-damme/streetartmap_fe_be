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
        // line 30
        $context["is_all_content_mode"] = CoreExtension::inFilter("all-content", CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 30));
        // line 32
        yield "
";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("views/views.responsive-grid"), "html", null, true);
        yield "

";
        // line 36
        $context["column_count"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", true, true, true, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 36), 3)) : (3));
        // line 37
        $context["cell_min_width"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "cell_min_width", [], "any", true, true, true, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "cell_min_width", [], "any", false, false, true, 37), 200)) : (200));
        // line 38
        $context["grid_gutter"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "grid_gutter", [], "any", true, true, true, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "grid_gutter", [], "any", false, false, true, 38), 16)) : (16));
        // line 39
        yield "
";
        // line 40
        $context["responsive_grid_styles"] = [(("--views-responsive-grid--column-count:" .         // line 41
($context["column_count"] ?? null)) . ";"), (("--views-responsive-grid--cell-min-width:" .         // line 42
($context["cell_min_width"] ?? null)) . "px;"), (("--views-responsive-grid--layout-gap:" .         // line 43
($context["grid_gutter"] ?? null)) . "px;")];
        // line 46
        yield "
";
        // line 47
        if (($context["title"] ?? null)) {
            // line 48
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 51
            yield "  <div class=\"flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60 my-4\">
\t";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 52), "html", null, true);
            yield "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "options", "title", "items"]);        yield from [];
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
        return array (  91 => 52,  88 => 51,  84 => 50,  78 => 48,  76 => 47,  73 => 46,  71 => 43,  70 => 42,  69 => 41,  68 => 40,  65 => 39,  63 => 38,  61 => 37,  59 => 36,  54 => 34,  51 => 32,  49 => 30,  47 => 28,  44 => 27,);
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

{% set is_map_mode = 'content-map' in attributes.class %}
{# Or pass this from parent #}
{% set is_all_content_mode = 'all-content' in attributes.class %}
{# Or pass this from parent #}

{# Attach the responsive grid library. #}
{{ attach_library('views/views.responsive-grid') }}

{% set column_count = options.columns|default(3) %}
{% set cell_min_width = options.cell_min_width|default(200) %}
{% set grid_gutter = options.grid_gutter|default(16) %}

{% set responsive_grid_styles = [
    '--views-responsive-grid--column-count:' ~ column_count ~ ';',
    '--views-responsive-grid--cell-min-width:' ~ cell_min_width ~ 'px;',
    '--views-responsive-grid--layout-gap:' ~ grid_gutter ~ 'px;',
    ]
%}

{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% for item in items  %}
  <div class=\"flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60 my-4\">
\t{{ item.content }}
  </div>
{% endfor %}
", "themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/views/views-view-grid-responsive.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 47, "for" => 50];
        static $filters = ["escape" => 34, "default" => 36];
        static $functions = ["attach_library" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'default'],
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
