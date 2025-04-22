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

/* themes/custom/custom_theme/templates/views/views-view.html.twig */
class __TwigTemplate_36a8d92e6d9a09b8a8ddb989f4887c7d extends Template
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
        // line 2
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 4
($context["id"] ?? null))), ("view-id-" .         // line 5
($context["id"] ?? null)), ("view-display-id-" .         // line 6
($context["display_id"] ?? null)), ((        // line 7
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")), ((CoreExtension::inFilter("all-content", CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["attributes"] ?? null), "class", [], "any", false, false, true, 8))) ? ("bg-blue-500") : ("")), ((CoreExtension::inFilter("content-map", CoreExtension::getAttribute($this->env, $this->source,         // line 9
($context["attributes"] ?? null), "class", [], "any", false, false, true, 9))) ? ("w-full") : (""))];
        // line 12
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 12), "html", null, true);
        yield ">
\t";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
\t";
        // line 14
        if (($context["title"] ?? null)) {
            // line 15
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
\t";
        }
        // line 17
        yield "\t";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
\t";
        // line 18
        if (($context["header"] ?? null)) {
            // line 19
            yield "\t\t<div class=\"view-header\">
\t\t\t";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 23
        yield "\t";
        if (($context["exposed"] ?? null)) {
            // line 24
            yield "\t\t<div class=\"view-filters\">
\t\t\t";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 28
        yield "\t";
        if (($context["attachment_before"] ?? null)) {
            // line 29
            yield "\t\t<div class=\"attachment attachment-before\">
\t\t\t";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 33
        yield "
\t";
        // line 34
        if (($context["rows"] ?? null)) {
            // line 35
            yield "\t\t";
            if (CoreExtension::inFilter("all-content", CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, true, 35))) {
                // line 36
                yield "\t\t\t<div class=\"all-content\">
\t\t\t\t";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
                yield "
\t\t\t</div>
\t\t";
            } else {
                // line 40
                yield "\t\t\t<div class=\"view-content\">
\t\t\t\t";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
                yield "
\t\t\t</div>
\t\t";
            }
            // line 44
            yield "\t";
        } elseif (($context["empty"] ?? null)) {
            // line 45
            yield "\t\t<div class=\"view-empty\">
\t\t\t";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 49
        yield "

\t";
        // line 51
        if (($context["pager"] ?? null)) {
            // line 52
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
\t";
        }
        // line 54
        yield "\t";
        if (($context["attachment_after"] ?? null)) {
            // line 55
            yield "\t\t<div class=\"attachment attachment-after\">
\t\t\t";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 59
        yield "\t";
        if (($context["more"] ?? null)) {
            // line 60
            yield "\t\t";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
\t";
        }
        // line 62
        yield "\t";
        if (($context["footer"] ?? null)) {
            // line 63
            yield "\t\t<div class=\"view-footer\">
\t\t\t";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 67
        yield "\t";
        if (($context["feed_icons"] ?? null)) {
            // line 68
            yield "\t\t<div class=\"feed-icons\">
\t\t\t";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
\t\t</div>
\t";
        }
        // line 72
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/views/views-view.html.twig";
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
        return array (  204 => 72,  198 => 69,  195 => 68,  192 => 67,  186 => 64,  183 => 63,  180 => 62,  174 => 60,  171 => 59,  165 => 56,  162 => 55,  159 => 54,  153 => 52,  151 => 51,  147 => 49,  141 => 46,  138 => 45,  135 => 44,  129 => 41,  126 => 40,  120 => 37,  117 => 36,  114 => 35,  112 => 34,  109 => 33,  103 => 30,  100 => 29,  97 => 28,  91 => 25,  88 => 24,  85 => 23,  79 => 20,  76 => 19,  74 => 18,  69 => 17,  63 => 15,  61 => 14,  57 => 13,  52 => 12,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{%
  set classes = [
    'view',
    'view-' ~ id|clean_class,
    'view-id-' ~ id,
    'view-display-id-' ~ display_id,
    dom_id ? 'js-view-dom-id-' ~ dom_id,
    'all-content' in attributes.class ? 'bg-blue-500',
    'content-map' in attributes.class ? 'w-full',
  ]
%}
<div{{attributes.addClass(classes)}}>
\t{{ title_prefix }}
\t{% if title %}
\t\t{{ title }}
\t{% endif %}
\t{{ title_suffix }}
\t{% if header %}
\t\t<div class=\"view-header\">
\t\t\t{{ header }}
\t\t</div>
\t{% endif %}
\t{% if exposed %}
\t\t<div class=\"view-filters\">
\t\t\t{{ exposed }}
\t\t</div>
\t{% endif %}
\t{% if attachment_before %}
\t\t<div class=\"attachment attachment-before\">
\t\t\t{{ attachment_before }}
\t\t</div>
\t{% endif %}

\t{% if rows %}
\t\t{% if 'all-content' in attributes.class %}
\t\t\t<div class=\"all-content\">
\t\t\t\t{{ rows }}
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"view-content\">
\t\t\t\t{{ rows }}
\t\t\t</div>
\t\t{% endif %}
\t{% elseif empty %}
\t\t<div class=\"view-empty\">
\t\t\t{{ empty }}
\t\t</div>
\t{% endif %}


\t{% if pager %}
\t\t{{ pager }}
\t{% endif %}
\t{% if attachment_after %}
\t\t<div class=\"attachment attachment-after\">
\t\t\t{{ attachment_after }}
\t\t</div>
\t{% endif %}
\t{% if more %}
\t\t{{ more }}
\t{% endif %}
\t{% if footer %}
\t\t<div class=\"view-footer\">
\t\t\t{{ footer }}
\t\t</div>
\t{% endif %}
\t{% if feed_icons %}
\t\t<div class=\"feed-icons\">
\t\t\t{{ feed_icons }}
\t\t</div>
\t{% endif %}
</div>
", "themes/custom/custom_theme/templates/views/views-view.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 14];
        static $filters = ["clean_class" => 4, "escape" => 12];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
