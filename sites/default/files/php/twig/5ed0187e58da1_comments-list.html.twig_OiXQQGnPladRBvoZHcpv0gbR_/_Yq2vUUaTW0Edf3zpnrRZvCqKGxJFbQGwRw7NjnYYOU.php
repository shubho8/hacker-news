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
        $tags = ["if" => 3, "for" => 8];
        $filters = ["escape" => 4, "date" => 12, "raw" => 28];
        $functions = ["url" => 11];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        // line 3
        if (($context["name"] ?? null)) {
            // line 4
            echo "  <h3>Comments by ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo " </h3>
";
        }
        // line 6
        echo "

 ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["story_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 9
            echo "<div><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\"><h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "title", [])), "html", null, true);
            echo " </h3></a> 
    <span>";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "score", [])), "html", null, true);
            echo " Points |</span>
    <span><a href=\"";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "author", [])), "html", null, true);
            echo "\">By ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "author", [])), "html", null, true);
            echo " |</a></span>
    <span>Time ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["story"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo " | </span>
    <span><a href=\"";
            // line 13
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
        // line 17
        echo "
<table id=\"comment-table\">
<thead>
 <tr><th>Comments</th>
 </tr>
</thead>
<tbody>
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 25
            echo "<tr>  <td>
    <span><a href=\"";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "author", [])), "html", null, true);
            echo "\"><b>By ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "author", [])), "html", null, true);
            echo " |</a></span>
    <span>Time ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "comment_time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo "</b></span></br>
  ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["comment"], "text", [])));
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</tbody>
</table>";
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
        return array (  149 => 31,  140 => 28,  136 => 27,  128 => 26,  125 => 25,  121 => 24,  112 => 17,  98 => 13,  94 => 12,  86 => 11,  82 => 10,  75 => 9,  71 => 8,  67 => 6,  61 => 4,  59 => 3,  55 => 1,);
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
  <h3>Comments by {{ name }} </h3>
{% endif %}


 {% for story in story_data %}
<div><a href=\"{{ story.url }}\" target=\"_blank\"><h3>{{ story.title }} </h3></a> 
    <span>{{ story.score }} Points |</span>
    <span><a href=\"{{ url('<front>') }}author/{{ story.author }}\">By {{ story.author }} |</a></span>
    <span>Time {{ story.time |date('d/m/Y H:i:s')}} | </span>
    <span><a href=\"{{ url('<front>') }}comments/{{ story.story_id }}\">{{ story.count }} Comments</a></span></br></br>
</div>

{% endfor %}

<table id=\"comment-table\">
<thead>
 <tr><th>Comments</th>
 </tr>
</thead>
<tbody>
{% for comment in items %}
<tr>  <td>
    <span><a href=\"{{ url('<front>') }}author/{{ comment.author }}\"><b>By {{ comment.author }} |</a></span>
    <span>Time {{ comment.comment_time |date('d/m/Y H:i:s')}}</b></span></br>
  {{ comment.text| raw }}</td>
</tr>
{% endfor %}
</tbody>
</table>", "modules/custom/templates/comments-list.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/modules/custom/templates/comments-list.html.twig");
    }
}
