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

/* modules/custom/templates/stories.html.twig */
class __TwigTemplate_e53e35a5977a5c96393a09f9c422fc6f9b8a54482142adf87d420bb16e120260 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "for" => 13];
        $filters = ["escape" => 3, "date" => 24];
        $functions = ["url" => 15];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 2
        if (($context["name"] ?? null)) {
            // line 3
            echo "  <h3>Stories by ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo " </h3>
";
        }
        // line 5
        echo "
<table id=\"example\" class=\"display\" style=\"width:100%\">
 <tr>
 <th>Title</th>
 <th>Points</th>
  <th>Comments</th>
  <th>Author</th>
  </tr>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 14
            echo "<tr>
  <td><img src=\"";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "themes/businessplus_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
  <b><a href=\"";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "title", [])), "html", null, true);
            echo "</a></b> 
  </td>

  <td>";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "score", [])), "html", null, true);
            echo "
  </td>
  <td><a href=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "story_id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "count", [])), "html", null, true);
            echo " </a>
  <td>
    <span>By ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo "</span></br>
    <span>Time ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo "</span>
 </td>
</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/stories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  113 => 24,  109 => 23,  100 => 21,  95 => 19,  87 => 16,  83 => 15,  80 => 14,  76 => 13,  66 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% if name %}
  <h3>Stories by {{ name }} </h3>
{% endif %}

<table id=\"example\" class=\"display\" style=\"width:100%\">
 <tr>
 <th>Title</th>
 <th>Points</th>
  <th>Comments</th>
  <th>Author</th>
  </tr>
{% for news in items %}
<tr>
  <td><img src=\"{{ url('<front>') }}themes/businessplus_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
  <b><a href=\"{{ news.url }}\" target=\"_blank\">{{news.title}}</a></b> 
  </td>

  <td>{{ news.score }}
  </td>
  <td><a href=\"{{ url('<front>') }}comments/{{ news.story_id }}\">{{ news.count }} </a>
  <td>
    <span>By {{ news.author }}</span></br>
    <span>Time {{ news.time |date('d/m/Y H:i:s')}}</span>
 </td>
</tr>


{% endfor %}
</table>
", "modules/custom/templates/stories.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/modules/custom/templates/stories.html.twig");
    }
}
