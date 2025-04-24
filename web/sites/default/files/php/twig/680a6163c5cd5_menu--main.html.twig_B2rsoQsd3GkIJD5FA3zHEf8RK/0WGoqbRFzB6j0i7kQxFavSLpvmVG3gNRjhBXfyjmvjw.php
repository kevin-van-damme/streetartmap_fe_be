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

/* themes/custom/custom_theme/templates/navigation/menu--main.html.twig */
class __TwigTemplate_0f0d18add4e652d44ed07a766e59f9e2 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 27, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "\t";
            $macros["menus"] = $this;
            // line 31
            yield "\t";
            if (($context["items"] ?? null)) {
                // line 32
                yield "\t\t";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    yield "\t\t\t<ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["menu just flex flex-1 flex-row items-center justify-evenly gap-1 rounded-full text-white"], "method", false, false, true, 33), "html", null, true);
                    yield ">
\t\t\t";
                } else {
                    // line 35
                    yield "\t\t\t\t<ul class=\"menu\">
\t\t\t\t";
                }
                // line 37
                yield "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    yield "\t\t\t\t\t";
                    // line 39
                    $context["classes"] = ["menu-item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41)) ? ("menu-item--expanded") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 42
$context["item"], "is_collapsed", [], "any", false, false, true, 42)) ? ("menu-item--collapsed") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("menu-item--active-trail") : ("")), "text-[#9daab8] flex h-8 items-center justify-center focus:text-white active:text-white hover:text-white"];
                    // line 47
                    yield "\t\t\t\t\t<li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 47), "html", null, true);
                    yield ">
\t\t\t\t\t\t";
                    // line 49
                    yield "
\t\t\t\t\t\t";
                    // line 51
                    $context["icons"] = ["/" => "M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z", "/art-gallery" => "M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z", "/node/add/upload_image" => "M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208Zm-32-80a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z", "/node/12" => "M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"];
                    // line 59
                    yield "\t\t\t\t\t\t<a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), "toString", [], "method", false, false, true, 59), "html", null, true);
                    yield "\" class=\"menu-link\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" fill=\"currentColor\" viewbox=\"0 0 256 256\">
\t\t\t\t\t\t\t\t<path d=\"";
                    // line 61
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61), [], "array", true, true, true, 61) &&  !(null === (($_v0 = ($context["icons"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61), [], "array", false, false, true, 61))))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = ($context["icons"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["icons"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 61), "toString", [], "method", false, false, true, 61), [], "array", false, false, true, 61)), "html", null, true)) : ("M0,0L10,0L10,10L0,10Z"));
                    yield "\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                    // line 64
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 64)) {
                        // line 65
                        yield "\t\t\t\t\t\t\t";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 65, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
\t\t\t\t\t\t";
                    }
                    // line 67
                    yield "\t\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                yield "\t\t\t</ul>
\t\t";
            }
            // line 71
            yield "\t";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/custom_theme/templates/navigation/menu--main.html.twig";
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
        return array (  144 => 71,  140 => 69,  133 => 67,  127 => 65,  125 => 64,  119 => 61,  113 => 59,  111 => 51,  108 => 49,  103 => 47,  101 => 43,  100 => 42,  99 => 41,  98 => 39,  96 => 38,  91 => 37,  87 => 35,  81 => 33,  78 => 32,  75 => 31,  72 => 30,  58 => 29,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
\t{% import _self as menus %}
\t{% if items %}
\t\t{% if menu_level == 0 %}
\t\t\t<ul{{attributes.addClass('menu just flex flex-1 flex-row items-center justify-evenly gap-1 rounded-full text-white')}}>
\t\t\t{% else %}
\t\t\t\t<ul class=\"menu\">
\t\t\t\t{% endif %}
\t\t\t\t{% for item in items %}
\t\t\t\t\t{%
        set classes = [
          'menu-item',
          item.is_expanded ? 'menu-item--expanded',
          item.is_collapsed ? 'menu-item--collapsed',
          item.in_active_trail ? 'menu-item--active-trail',
          'text-[#9daab8] flex h-8 items-center justify-center focus:text-white active:text-white hover:text-white',
        ]
      %}
\t\t\t\t\t<li{{item.attributes.addClass(classes)}}>
\t\t\t\t\t\t{# Replace the text link with an image link #}

\t\t\t\t\t\t{%
              set icons =
              {
                \"/\": \"M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z\",
                \"/art-gallery\" : \"M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z\",
                \"/node/add/upload_image\" : \"M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208Zm-32-80a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z\",
                \"/node/12\" : \"M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z\",
              }
            %}
\t\t\t\t\t\t<a href=\"{{ item.url.toString() }}\" class=\"menu-link\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24px\" height=\"24px\" fill=\"currentColor\" viewbox=\"0 0 256 256\">
\t\t\t\t\t\t\t\t<path d=\"{{ icons[item.url.toString()] ?? 'M0,0L10,0L10,10L0,10Z' }}\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if item.below %}
\t\t\t\t\t\t\t{{ menus.menu_links(item.below, attributes, menu_level + 1) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t{% endif %}
\t{% endmacro %}
", "themes/custom/custom_theme/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/custom/custom_theme/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39];
        static $filters = ["escape" => 33];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
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
