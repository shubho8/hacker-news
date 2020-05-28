<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/businessplus_lite/templates/page--404.html.twig */
class __TwigTemplate_ea1a912f189a59f1bea28b8dfb79881fb19672c89d016940421ae4db0f383d5b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["raw" => 3, "escape" => 3, "t" => 13];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape', 't'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("page.html.twig", "themes/businessplus_lite/templates/page--404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_content($context, array $blocks = [])
    {
        // line 3
        echo "  <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null))) . "\"")) : ("")));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"col-12 col-xl-8 ml-xl-auto mr-xl-auto\">
            ";
        // line 9
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 10
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 11
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 12
        echo ">
              <h1 class=\"title page-title\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Whooops!"));
        echo "</h1>
              <div class=\"text-center\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("The page you are looking for was either removed or no longer exists."));
        echo "</div>
                <div class=\"text-center mt-5\">
                  <a class=\"button\" href=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go Home"));
        echo "</a>
                </div>
              </div>
            </div>
            ";
        // line 21
        echo "          </section>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/businessplus_lite/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  105 => 16,  100 => 14,  96 => 13,  93 => 12,  87 => 11,  85 => 10,  78 => 9,  67 => 3,  64 => 2,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"page.html.twig\" %}
{% block main_content %}
  <div {{ main_content_id ? ('id=\"' ~ main_content_id ~ '\"') | raw : ''}} class=\"clearfix main-content region--dark-typography region--white-background  {{ main_content_separator }}\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"col-12 col-xl-8 ml-xl-auto mr-xl-auto\">
            {# main #}
            <div class=\"clearfix main-content__section{{ (main_content_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (main_content_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (main_content_region_paddings) ? ' region--no-paddings' : '' }}\"
              {% if main_content_animations == \"enabled\" %}
                data-animate-effect=\"{{ main_content_animation_effect }}\"
              {% endif %}>
              <h1 class=\"title page-title\">{{ 'Whooops!'|t }}</h1>
              <div class=\"text-center\">{{ 'The page you are looking for was either removed or no longer exists.'|t }}</div>
                <div class=\"text-center mt-5\">
                  <a class=\"button\" href=\"{{ url('<front>') }}\">{{ 'Go Home'|t }}</a>
                </div>
              </div>
            </div>
            {# EOF:main #}
          </section>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "themes/businessplus_lite/templates/page--404.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/themes/businessplus_lite/templates/page--404.html.twig");
    }
}
