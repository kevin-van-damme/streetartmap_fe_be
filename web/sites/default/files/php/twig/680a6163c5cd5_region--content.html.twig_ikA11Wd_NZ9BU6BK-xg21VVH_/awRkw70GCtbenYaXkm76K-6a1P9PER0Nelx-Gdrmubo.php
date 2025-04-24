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

/* themes/custom/custom_theme/templates/layout/region--content.html.twig */
class __TwigTemplate_32ff60abecb6db2900e36706b709be82 extends Template
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
        // line 15
        $context["classes"] = ["region", ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 17
($context["region"] ?? null)))];
        // line 20
        yield "
";
        // line 21
        if ((($context["region"] ?? null) == "footer")) {
            // line 22
            yield "  ";
            // line 23
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["region-footer", "flex", "gap-2", "border-t", "border-[#293038]", "bg-[#1c2126]", "px-4", "pb-3", "pt-2"]);
        } elseif ((        // line 24
($context["region"] ?? null) == "content")) {
            // line 25
            yield "  ";
            // line 26
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["region-content", "p-8"]);
        }
        // line 28
        yield "
";
        // line 29
        if (($context["content"] ?? null)) {
            // line 30
            yield "  <div ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 30), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "</div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["region", "content", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/layout/region--content.html.twig";
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
        return array (  70 => 30,  68 => 29,  65 => 28,  61 => 26,  59 => 25,  57 => 24,  54 => 23,  52 => 22,  50 => 21,  47 => 20,  45 => 17,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{% set classes = [
  'region',
  'region-' ~ (region|clean_class),
  ]
%}

{% if region == 'footer' %}
  {# Add specific classes for the footer region #}
  {% set classes = classes|merge(['region-footer', 'flex', 'gap-2', 'border-t', 'border-[#293038]', 'bg-[#1c2126]', 'px-4', 'pb-3', 'pt-2']) %}
{% elseif region == 'content' %}
  {# Add specific classes for the content region #}
  {% set classes = classes|merge(['region-content', 'p-8']) %}
{% endif %}

{% if content %}
  <div {{ attributes.addClass(classes) }}>{{ content }}</div>
{% endif %}
", "themes/custom/custom_theme/templates/layout/region--content.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/layout/region--content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 21];
        static $filters = ["clean_class" => 17, "merge" => 23, "escape" => 30];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'merge', 'escape'],
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
