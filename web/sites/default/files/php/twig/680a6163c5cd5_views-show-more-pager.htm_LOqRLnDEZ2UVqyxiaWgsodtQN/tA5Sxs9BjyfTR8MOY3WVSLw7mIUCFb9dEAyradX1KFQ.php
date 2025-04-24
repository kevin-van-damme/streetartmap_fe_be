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

/* modules/contrib/views_show_more/templates/views-show-more-pager.html.twig */
class __TwigTemplate_7263439fd6cffe250ebfdd3be2fe4b3e extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 15)) {
            // line 16
            yield "  <nav role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <h4 id=\"";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</h4>
      <ul";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield ">
        <li class=\"pager__item\">
          ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, true, 20)) {
                // line 21
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 21), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "href", [], "any", false, false, true, 21), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 21)), "html", null, true);
                yield "
          ";
            } else {
                // line 23
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 23), "html", null, true);
                yield "
          ";
            }
            // line 25
            yield "        </li>
      </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["item", "heading_id", "attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/views_show_more/templates/views-show-more-pager.html.twig";
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
        return array (  76 => 25,  70 => 23,  64 => 21,  62 => 20,  57 => 18,  51 => 17,  46 => 16,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * The views show more pager template.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - item: Show more pager item.
 *
 * @see views_show_more_preprocess_views_show_more_pager()
 *
 * @ingroup themeable
 */
#}
{% if item.text %}
  <nav role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
      <ul{{ attributes }}>
        <li class=\"pager__item\">
          {% if item.href %}
            {{ link(item.text, item.href, item.attributes) }}
          {% else %}
            {{ item.text }}
          {% endif %}
        </li>
      </ul>
  </nav>
{% endif %}
", "modules/contrib/views_show_more/templates/views-show-more-pager.html.twig", "/var/www/html/web/modules/contrib/views_show_more/templates/views-show-more-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15];
        static $filters = ["escape" => 16, "t" => 17];
        static $functions = ["link" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['link'],
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
