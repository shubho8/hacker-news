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

/* modules/custom/templates/author.html.twig */
class __TwigTemplate_029be78080d0c1a7ca0f0830c88a7424204e055b7d509e6765ba117fa457d134 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 10];
        $filters = ["escape" => 12, "date" => 13];
        $functions = ["url" => 15];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<h2>User Details</h2>
<table id=\"example\" class=\"display\" style=\"width:100%\">
 <tr>
 <th>User</th>
 <th>Created</th>
  <th>Karma</th>
  <th>Stories</th>
  <th>Comments</th>
  </tr>
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "<tr>
  <td>";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "id", [])), "html", null, true);
            echo "</td>
  <td>";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "created", [])), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
  <td>";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "karma", [])), "html", null, true);
            echo "</td>
  <td>";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "story_count", [])), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/stories/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "id", [])), "html", null, true);
            echo "\">View All</a>
  <td>";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "comment_count", [])), "html", null, true);
            echo "&nbsp;&nbsp;&nbsp;<a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["user"], "id", [])), "html", null, true);
            echo "\"> View All</a>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  93 => 16,  85 => 15,  81 => 14,  77 => 13,  73 => 12,  70 => 11,  66 => 10,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2>User Details</h2>
<table id=\"example\" class=\"display\" style=\"width:100%\">
 <tr>
 <th>User</th>
 <th>Created</th>
  <th>Karma</th>
  <th>Stories</th>
  <th>Comments</th>
  </tr>
{% for user in items %}
<tr>
  <td>{{user.id}}</td>
  <td>{{ user.created  |date('d/m/Y H:i:s')}}</td>
  <td>{{ user.karma }}</td>
  <td>{{user.story_count}}&nbsp;&nbsp;&nbsp;<a href=\"{{ url('<front>') }}author/stories/{{user.id}}\">View All</a>
  <td>{{user.comment_count}}&nbsp;&nbsp;&nbsp;<a href=\"{{ url('<front>') }}author/comments/{{user.id}}\"> View All</a>
</tr>
{% endfor %}
</table>
", "modules/custom/templates/author.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/modules/custom/templates/author.html.twig");
    }
}
