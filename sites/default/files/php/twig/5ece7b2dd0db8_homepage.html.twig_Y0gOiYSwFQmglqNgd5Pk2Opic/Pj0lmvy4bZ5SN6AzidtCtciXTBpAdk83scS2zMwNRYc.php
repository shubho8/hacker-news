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

/* modules/custom/templates/homepage.html.twig */
class __TwigTemplate_3877d49f4df1b85210031c7eb86230da0a3a4b9df452d0a1ae6baaa0cbe12244 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 12];
        $filters = ["escape" => 15, "date" => 19];
        $functions = ["url" => 6];

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
        echo "<div class=\"container\">
<div class=\"col-md-12\">
<div class=\"row home-page\">
  <div class=\"col-md-4\">
   <div  class=\"top-icon\">
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/top_stories\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    
    </div>
    <div class=\"story-name\">Top Stories</div>
    <table id=\"example\" class=\"homepage-table\">
    
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["top"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 13
            echo "    <tr>
      <td><img src=\"";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "themes/businessplus_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "title", [])), "html", null, true);
            echo "</a></b> </br>
      
      <span>";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "score", [])), "html", null, true);
            echo " Points | </span>
      <span><a href=\"";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo "\">By ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo " | </a></span>
      <span>Time ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo " | </span>
      <span><a href=\"";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "story_id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "count", [])), "html", null, true);
            echo " Comments</a>
      </span>  
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </table>
    <div class=\"view-all\">
    <b> <a href=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/top_stories\">View All</a></b>
    </div>
  </div>


  <div class=\"col-md-4\">
  <div  class=\"top-icon\">
    <a href=\"";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/new_stories\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    
    </div>
    <div class=\"story-name\">New Stories</div>
    <table id=\"example\" class=\"homepage-table\">
   
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["new"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 41
            echo "    <tr>
      <td><img src=\"";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "themes/startupgrowth_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "title", [])), "html", null, true);
            echo "</a></b> </br>
      
      <span>";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "score", [])), "html", null, true);
            echo " Points | </span>
      <span><a href=\"";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo "\">By ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo " | </a></span>
      <span>Time ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo " | </span>
      <span><a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "story_id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "count", [])), "html", null, true);
            echo " Comments</a>
      </span>  
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </table>
     <div  class=\"view-all\">
    <b><a href=\"";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/new_stories\">View All</a></b>
    </div>
  </div>

  <div class=\"col-md-4\">
  <div  class=\"top-icon\">
    <a href=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/best_stories\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    </div>

     <div class=\"story-name\">Best Stories</div>
    <table id=\"example\" class=\"homepage-table\">
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["best"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 67
            echo "    <tr>
      <td><img src=\"";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "themes/startupgrowth_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "url", [])), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "title", [])), "html", null, true);
            echo "</a></b> </br>
      
      <span>";
            // line 71
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "score", [])), "html", null, true);
            echo " Points | </span>
      <span><a href=\"";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "author/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo "\">By ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "author", [])), "html", null, true);
            echo " | </a></span>
      <span>Time ";
            // line 73
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "time", [])), "d/m/Y H:i:s"), "html", null, true);
            echo " | </span>
      <span><a href=\"";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "comments/";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "story_id", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["news"], "count", [])), "html", null, true);
            echo " Comments</a>
      </span>  
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </table>
     <div class=\"view-all\">
    <b><a href=\"";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "stories/best_stories\"\">View All</a></b>
    </div>
  </div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 81,  268 => 79,  253 => 74,  249 => 73,  241 => 72,  237 => 71,  230 => 69,  226 => 68,  223 => 67,  219 => 66,  209 => 61,  200 => 55,  196 => 53,  181 => 48,  177 => 47,  169 => 46,  165 => 45,  158 => 43,  154 => 42,  151 => 41,  147 => 40,  136 => 34,  126 => 27,  122 => 25,  107 => 20,  103 => 19,  95 => 18,  91 => 17,  84 => 15,  80 => 14,  77 => 13,  73 => 12,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
<div class=\"col-md-12\">
<div class=\"row home-page\">
  <div class=\"col-md-4\">
   <div  class=\"top-icon\">
    <a href=\"{{ url('<front>') }}stories/top_stories\"><img src=\"{{ url('<front>') }}themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    
    </div>
    <div class=\"story-name\">Top Stories</div>
    <table id=\"example\" class=\"homepage-table\">
    
    {% for news in top %}
    <tr>
      <td><img src=\"{{ url('<front>') }}themes/businessplus_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"{{ news.url }}\" target=\"_blank\">{{news.title}}</a></b> </br>
      
      <span>{{ news.score }} Points | </span>
      <span><a href=\"{{ url('<front>') }}author/{{ news.author }}\">By {{ news.author }} | </a></span>
      <span>Time {{ news.time |date('d/m/Y H:i:s')}} | </span>
      <span><a href=\"{{ url('<front>') }}comments/{{ news.story_id }}\">{{ news.count }} Comments</a>
      </span>  
    </td>
    </tr>
    {% endfor %}
    </table>
    <div class=\"view-all\">
    <b> <a href=\"{{ url('<front>') }}stories/top_stories\">View All</a></b>
    </div>
  </div>


  <div class=\"col-md-4\">
  <div  class=\"top-icon\">
    <a href=\"{{ url('<front>') }}stories/new_stories\"><img src=\"{{ url('<front>') }}themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    
    </div>
    <div class=\"story-name\">New Stories</div>
    <table id=\"example\" class=\"homepage-table\">
   
    {% for news in new %}
    <tr>
      <td><img src=\"{{ url('<front>') }}themes/startupgrowth_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"{{ news.url }}\" target=\"_blank\">{{news.title}}</a></b> </br>
      
      <span>{{ news.score }} Points | </span>
      <span><a href=\"{{ url('<front>') }}author/{{ news.author }}\">By {{ news.author }} | </a></span>
      <span>Time {{ news.time |date('d/m/Y H:i:s')}} | </span>
      <span><a href=\"{{ url('<front>') }}comments/{{ news.story_id }}\">{{ news.count }} Comments</a>
      </span>  
    </td>
    </tr>
    {% endfor %}
    </table>
     <div  class=\"view-all\">
    <b><a href=\"{{ url('<front>') }}stories/new_stories\">View All</a></b>
    </div>
  </div>

  <div class=\"col-md-4\">
  <div  class=\"top-icon\">
    <a href=\"{{ url('<front>') }}stories/best_stories\"><img src=\"{{ url('<front>') }}themes/businessplus_lite/images/story.png\" width=\"100\" height=\"100\"></a>
    </div>

     <div class=\"story-name\">Best Stories</div>
    <table id=\"example\" class=\"homepage-table\">
    {% for news in best %}
    <tr>
      <td><img src=\"{{ url('<front>') }}themes/startupgrowth_lite/images/forum-icon.png\" width=\"24\" height=\"24\">&nbsp;&nbsp;&nbsp;&nbsp;
      <b><a href=\"{{ news.url }}\" target=\"_blank\">{{news.title}}</a></b> </br>
      
      <span>{{ news.score }} Points | </span>
      <span><a href=\"{{ url('<front>') }}author/{{ news.author }}\">By {{ news.author }} | </a></span>
      <span>Time {{ news.time |date('d/m/Y H:i:s')}} | </span>
      <span><a href=\"{{ url('<front>') }}comments/{{ news.story_id }}\">{{ news.count }} Comments</a>
      </span>  
    </td>
    </tr>
    {% endfor %}
    </table>
     <div class=\"view-all\">
    <b><a href=\"{{ url('<front>') }}stories/best_stories\"\">View All</a></b>
    </div>
  </div>
</div>
</div>
</div>", "modules/custom/templates/homepage.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/modules/custom/templates/homepage.html.twig");
    }
}
