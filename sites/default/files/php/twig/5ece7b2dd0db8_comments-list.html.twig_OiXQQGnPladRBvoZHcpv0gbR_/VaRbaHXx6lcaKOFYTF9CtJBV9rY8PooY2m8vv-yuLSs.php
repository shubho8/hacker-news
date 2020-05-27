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

/* modules/custom/templates/comments-list.html.twig */
class __TwigTemplate_92693503a330a9fcf5476213b4ff54ac4a49d929a8220ef1382985759e078381 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 2];
        $filters = ["escape" => 3, "date" => 6, "raw" => 17];
        $functions = ["url" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'date', 'raw'],
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["story_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 3
            echo "<div><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\"><h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "title", [])), "html", null, true);
            echo " </h3></a> 
    <span>";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "score", [])), "html", null, true);
            echo " Points |</span>
    <span>By ";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "author", [])), "html", null, true);
            echo " |</span>
    <span>Time ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo " | </span>
    <span><a href=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "story_id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "count", [])), "html", null, true);
            echo " Comments</a></span></br></br>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
<table>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 14
            echo "<tr>  <td>
    <span><b>By ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "author", [])), "html", null, true);
            echo " |</span>
    <span>Time ";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "comment_time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo "</b></span></br>
  ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "text", [])));
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/comments-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  114 => 17,  110 => 16,  106 => 15,  103 => 14,  99 => 13,  95 => 11,  81 => 7,  77 => 6,  73 => 5,  69 => 4,  62 => 3,  58 => 2,  55 => 1,);
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
 {% for story in story_data %}
<div><a href=\"{{ story.url }}\" target=\"_blank\"><h3>{{ story.title }} </h3></a> 
    <span>{{ story.score }} Points |</span>
    <span>By {{ story.author }} |</span>
    <span>Time {{ story.time |date('d/m/Y H:i:s')}} | </span>
    <span><a href=\"{{ url('<front>') }}comments/{{ story.story_id }}\">{{ story.count }} Comments</a></span></br></br>
</div>

{% endfor %}

<table>
{% for comment in items %}
<tr>  <td>
    <span><b>By {{ comment.author }} |</span>
    <span>Time {{ comment.comment_time |date('d/m/Y H:i:s')}}</b></span></br>
  {{ comment.text| raw }}</td>
</tr>
{% endfor %}
</table>", "modules/custom/templates/comments-list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/modules/custom/templates/comments-list.html.twig");
    }
}
