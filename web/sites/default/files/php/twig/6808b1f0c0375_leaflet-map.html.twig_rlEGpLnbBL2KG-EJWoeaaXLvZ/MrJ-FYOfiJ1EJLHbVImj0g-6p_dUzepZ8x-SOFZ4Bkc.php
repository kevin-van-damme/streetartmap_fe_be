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

/* modules/contrib/leaflet/templates/leaflet-map.html.twig */
class __TwigTemplate_36734165b900df41b7172e5e673468f4 extends Template
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
        // line 20
        yield "<div id=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["map_id"] ?? null), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield " style=\"min-width: 150px; ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["height"] ?? null))) {
            yield "height: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["height"] ?? null), "html", null, true);
        }
        yield "\"></div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["map_id", "attributes", "height"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/leaflet/templates/leaflet-map.html.twig";
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
        return array (  44 => 20,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme implementation to display a Leaflet map.
 *
 * This creates a placeholder for the map to be injected in.
 *
 * Available variables:
 * - map_id
 * - height
 *
 * Note: min-width is set so that a map will show when \"Inline\" is specified
 * for the associated field label. This may of course be overridden. The default
 * field label style is \"Above\" with a width of 100%.
 *
 * @ingroup themeable
 *
 */
#}
<div id=\"{{ map_id }}\" {{ attributes }} style=\"min-width: 150px; {% if height is not empty %}height: {{ height }}{% endif %}\"></div>
", "modules/contrib/leaflet/templates/leaflet-map.html.twig", "/var/www/html/web/modules/contrib/leaflet/templates/leaflet-map.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 20];
        static $filters = ["escape" => 20];
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
