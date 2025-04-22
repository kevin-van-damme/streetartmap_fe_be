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

/* themes/custom/custom_theme/templates/views/views-view-grid.html.twig */
class __TwigTemplate_61a2073cd6acc2fb9319dcc914658ad1 extends Template
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
        // line 28
        $context["classes"] = ["views-view-grid", CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["options"] ?? null), "alignment", [], "any", false, false, true, 30), ("cols-" . CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["options"] ?? null), "columns", [], "any", false, false, true, 31)), "clearfix", "flex items-stretch p-4 gap-3"];
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 36)) {
            // line 37
            yield "  ";
            // line 38
            $context["row_classes"] = ["views-row", (((CoreExtension::getAttribute($this->env, $this->source,             // line 40
($context["options"] ?? null), "alignment", [], "any", false, false, true, 40) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 44)) {
            // line 45
            yield "  ";
            // line 46
            $context["col_classes"] = ["views-col", (((CoreExtension::getAttribute($this->env, $this->source,             // line 48
($context["options"] ?? null), "alignment", [], "any", false, false, true, 48) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 52
        if (($context["title"] ?? null)) {
            // line 53
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
";
        }
        // line 55
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 55), "html", null, true);
        yield ">
  ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 56) == "horizontal")) {
            // line 57
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 58
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 58), "addClass", [($context["row_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 58)) ? (("row-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 58))) : (""))], "method", false, false, true, 58), "html", null, true);
                yield ">
        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 59));
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
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 60
                    yield "          <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 60), "addClass", [($context["col_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 60)) ? (("col-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 60))) : (""))], "method", false, false, true, 60), "html", null, true);
                    yield ">";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 61), "html", null, true);
                    // line 62
                    yield "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "  ";
        } else {
            // line 67
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 68
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 68), "addClass", [($context["col_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 68)) ? (("col-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 68))) : (""))], "method", false, false, true, 68), "html", null, true);
                yield ">
        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 69));
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
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 70
                    yield "          <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 70), "addClass", [($context["row_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 70)) ? (("row-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 70))) : (""))], "method", false, false, true, 70), "html", null, true);
                    yield ">";
                    // line 71
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 71), "html", null, true);
                    // line 72
                    yield "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "  ";
        }
        // line 77
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "title", "attributes", "items", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/views/views-view-grid.html.twig";
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
        return array (  237 => 77,  234 => 76,  219 => 74,  204 => 72,  202 => 71,  198 => 70,  181 => 69,  176 => 68,  158 => 67,  155 => 66,  140 => 64,  125 => 62,  123 => 61,  119 => 60,  102 => 59,  97 => 58,  79 => 57,  77 => 56,  72 => 55,  66 => 53,  64 => 52,  61 => 48,  60 => 46,  58 => 45,  56 => 44,  53 => 40,  52 => 38,  50 => 37,  48 => 36,  46 => 31,  45 => 30,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for views to display rows in a grid.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapping element.
 * - title: The title of this group of rows.
 * - view: The view object.
 * - rows: The rendered view results.
 * - options: The view plugin style options.
 *   - row_class_default: A flag indicating whether default classes should be
 *     used on rows.
 *   - col_class_default: A flag indicating whether default classes should be
 *     used on columns.
 * - items: A list of grid items. Each item contains a list of rows or columns.
 *   The order in what comes first (row or column) depends on which alignment
 *   type is chosen (horizontal or vertical).
 *   - attributes: HTML attributes for each row or column.
 *   - content: A list of columns or rows. Each row or column contains:
 *     - attributes: HTML attributes for each row or column.
 *     - content: The row or column contents.
 *
 * @see template_preprocess_views_view_grid()
 */
#}
{%
  set classes = [
    'views-view-grid',
    options.alignment,
    'cols-' ~ options.columns,
    'clearfix',
    \"flex items-stretch p-4 gap-3\"
  ]
%}
{% if options.row_class_default %}
  {%
    set row_classes = [
      'views-row',
      options.alignment == 'horizontal' ? 'clearfix',
    ]
  %}
{% endif %}
{% if options.col_class_default %}
  {%
    set col_classes = [
      'views-col',
      options.alignment == 'vertical' ? 'clearfix',
    ]
  %}
{% endif %}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div{{ attributes.addClass(classes) }}>
  {% if options.alignment == 'horizontal' %}
    {% for row in items %}
      <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
        {% for column in row.content %}
          <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>
            {{- column.content -}}
          </div>
        {% endfor %}
      </div>
    {% endfor %}
  {% else %}
    {% for column in items %}
      <div{{ column.attributes.addClass(col_classes, options.col_class_default ? 'col-' ~ loop.index) }}>
        {% for row in column.content %}
          <div{{ row.attributes.addClass(row_classes, options.row_class_default ? 'row-' ~ loop.index) }}>
            {{- row.content -}}
          </div>
        {% endfor %}
      </div>
    {% endfor %}
  {% endif %}
</div>
", "themes/custom/custom_theme/templates/views/views-view-grid.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/views/views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 36, "for" => 57];
        static $filters = ["escape" => 53];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
