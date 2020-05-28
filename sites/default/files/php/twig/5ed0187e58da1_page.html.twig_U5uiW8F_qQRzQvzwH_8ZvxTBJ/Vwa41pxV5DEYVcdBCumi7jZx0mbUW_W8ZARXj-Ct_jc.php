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

/* themes/businessplus_lite/templates/page.html.twig */
class __TwigTemplate_626074d7c1fe36a4a06f6bf849bb712e0ec02255b685e4b8d941478b0d8f4ac7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'internal_banner' => [$this, 'block_internal_banner'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 73, "block" => 248];
        $filters = ["escape" => 75, "raw" => 218];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'raw'],
                []
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
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 74
            echo "  ";
            // line 75
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 77
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 83
            echo "  </div>
  ";
            // line 85
            echo "
  ";
            // line 87
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fas fa-bars\"></i></button>
  ";
        }
        // line 90
        echo "
";
        // line 92
        echo "<div class=\"page-container\">

  ";
        // line 94
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 95
            echo "    ";
            // line 96
            echo "    <div class=\"header-container\">

      ";
            // line 98
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 99
                echo "        ";
                // line 100
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 101
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 103
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 104
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 105
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 106
                echo ">
              <div class=\"row\">
                ";
                // line 108
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 109
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 111
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 112
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 115
                    echo "                  </div>
                ";
                }
                // line 117
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 118
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 120
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 121
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 124
                    echo "                  </div>
                ";
                }
                // line 126
                echo "              </div>
            </div>
            ";
                // line 129
                echo "          </div>
        </div>
        ";
                // line 132
                echo "      ";
            }
            // line 133
            echo "
      ";
            // line 134
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 135
                echo "        ";
                // line 136
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 137
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 139
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 140
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 141
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 142
                echo ">
              <div class=\"row\">
                ";
                // line 144
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 145
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 147
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 148
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 151
                    echo "                  </div>
                ";
                }
                // line 153
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 154
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 156
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 157
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 160
                    echo "                  </div>
                ";
                }
                // line 162
                echo "              </div>
            </div>
            ";
                // line 165
                echo "          </div>
        </div>
        ";
                // line 168
                echo "      ";
            }
            // line 169
            echo "
      ";
            // line 170
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 171
                echo "        ";
                // line 172
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 173
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 175
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 177
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 178
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 180
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 181
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 184
                    echo "                  </div>
                ";
                }
                // line 186
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 187
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 189
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 190
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 193
                    echo "                  </div>
                ";
                }
                // line 195
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 196
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 198
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 199
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 202
                    echo "                  </div>
                ";
                }
                // line 204
                echo "              </div>
            </div>
            ";
                // line 207
                echo "          </div>
        </header>
        ";
                // line 210
                echo "      ";
            }
            // line 211
            echo "
    </div>
    ";
            // line 214
            echo "  ";
        }
        // line 215
        echo "
  ";
        // line 216
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 217
            echo "    ";
            // line 218
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 221
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 225
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 231
            echo "      </div>
    </div>
    ";
            // line 234
            echo "  ";
        }
        // line 235
        echo "
  ";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 237
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 241
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 247
        echo "
  ";
        // line 248
        $this->displayBlock('internal_banner', $context, $blocks);
        // line 250
        echo "
  ";
        // line 251
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 252
            echo "    ";
            // line 253
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 254
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 256
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 257
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 258
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 259
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 263
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 269
            echo "      </div>
    </div>
    ";
            // line 272
            echo "  ";
        }
        // line 273
        echo "
  ";
        // line 274
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 275
            echo "    ";
            // line 276
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 277
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 279
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 280
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 281
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 282
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 286
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 292
            echo "      </div>
    </div>
    ";
            // line 295
            echo "  ";
        }
        // line 296
        echo "
  ";
        // line 298
        echo "  ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 344
        echo "  ";
        // line 345
        echo "
  ";
        // line 346
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 347
            echo "    ";
            // line 348
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 349
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 351
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 352
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 353
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 354
            echo ">
          <div class=\"row\">
            ";
            // line 356
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 357
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 359
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 360
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 363
                echo "              </div>
            ";
            }
            // line 365
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 366
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 368
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 369
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 372
                echo "              </div>
            ";
            }
            // line 374
            echo "          </div>
        </div>
        ";
            // line 377
            echo "      </div>
    </div>
    ";
            // line 380
            echo "  ";
        }
        // line 381
        echo "
  ";
        // line 382
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 383
            echo "    ";
            // line 384
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 385
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 387
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 388
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 389
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 390
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 394
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 400
            echo "      </div>
    </div>
    ";
            // line 403
            echo "  ";
        }
        // line 404
        echo "
  ";
        // line 405
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 406
            echo "    ";
            // line 407
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 408
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 410
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 411
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 412
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 413
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 417
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 423
            echo "      </div>
    </div>
    ";
            // line 426
            echo "  ";
        }
        // line 427
        echo "
  ";
        // line 428
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 429
            echo "    ";
            // line 430
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 431
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 433
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 434
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 435
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 436
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 440
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 446
            echo "      </div>
    </div>
    ";
            // line 449
            echo "  ";
        }
        // line 450
        echo "
  ";
        // line 451
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 452
            echo "    ";
            // line 453
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 454
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 456
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 457
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 458
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 459
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 463
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 469
            echo "      </div>
    </div>
    ";
            // line 472
            echo "  ";
        }
        // line 473
        echo "
  ";
        // line 474
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 475
            echo "    ";
            // line 476
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 477
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 479
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 480
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 481
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 482
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 486
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 492
            echo "      </div>
    </div>
    ";
            // line 495
            echo "  ";
        }
        // line 496
        echo "
  ";
        // line 497
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 498
            echo "    ";
            // line 499
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 500
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 502
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 503
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 504
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 505
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 509
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 515
            echo "      </div>
    </div>
    ";
            // line 518
            echo "  ";
        }
        // line 519
        echo "
  ";
        // line 520
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 521
            echo "    ";
            // line 522
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 523
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 525
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 526
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 527
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 528
            echo ">
          <div class=\"row\">
            ";
            // line 530
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 531
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 533
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 534
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 537
                echo "              </div>
            ";
            }
            // line 539
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 540
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 542
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 543
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 546
                echo "              </div>
            ";
            }
            // line 548
            echo "          </div>
        </div>
        ";
            // line 551
            echo "      </div>
    </div>
    ";
            // line 554
            echo "  ";
        }
        // line 555
        echo "
  ";
        // line 556
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 557
            echo "    ";
            // line 558
            echo "    <footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 559
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 562
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 563
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 565
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 566
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 567
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 568
                echo ">
                  ";
                // line 569
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 572
                echo "              </div>
            ";
            }
            // line 574
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 575
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 577
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 578
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 579
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 580
                echo ">
                  ";
                // line 581
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 584
                echo "              </div>
            ";
            }
            // line 586
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 587
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 588
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 590
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 591
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 592
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 593
                echo ">
                  ";
                // line 594
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 597
                echo "              </div>
            ";
            }
            // line 599
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 600
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 601
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 603
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 604
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 605
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 606
                echo ">
                  ";
                // line 607
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 610
                echo "              </div>
            ";
            }
            // line 612
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 613
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 615
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 616
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 617
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 618
                echo ">
                  ";
                // line 619
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 622
                echo "              </div>
            ";
            }
            // line 624
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 629
            echo "  ";
        }
        // line 630
        echo "
  ";
        // line 631
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 632
            echo "    ";
            // line 633
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 634
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 636
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 640
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 646
            echo "      </div>
    </div>
    ";
            // line 649
            echo "  ";
        }
        // line 650
        echo "
  ";
        // line 651
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 652
            echo "    ";
            // line 653
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null))) . "\"")) : ("")));
            echo " class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 654
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 656
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 658
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 659
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 661
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 662
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 665
                echo "              </div>
            ";
            }
            // line 667
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 668
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 670
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 671
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 674
                echo "              </div>
            ";
            }
            // line 676
            echo "          </div>
        </div>
        ";
            // line 679
            echo "      </div>
    </div>
    ";
            // line 682
            echo "  ";
        }
        // line 683
        echo "
  ";
        // line 684
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 685
            echo "  ";
            // line 686
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
            echo "\"></i></div>
  ";
            // line 688
            echo "  ";
        }
        // line 689
        echo "
</div>
";
    }

    // line 248
    public function block_internal_banner($context, array $blocks = [])
    {
        // line 249
        echo "  ";
    }

    // line 298
    public function block_main_content($context, array $blocks = [])
    {
        // line 299
        echo "    <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_id"] ?? null)) ? ((("id=\"" . $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null))) . "\"")) : ("")));
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"";
        // line 303
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
              ";
        // line 305
        echo "              <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                ";
        // line 306
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 307
            echo "                  data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
                ";
        }
        // line 308
        echo ">
                ";
        // line 309
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 310
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
        }
        // line 312
        echo "              </div>
              ";
        // line 314
        echo "            </section>
            ";
        // line 315
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 316
            echo "              <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 318
            echo "                <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 319
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 320
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                  ";
            }
            // line 321
            echo ">
                  ";
            // line 322
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </section>
                ";
            // line 325
            echo "              </aside>
            ";
        }
        // line 327
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 328
            echo "              <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 330
            echo "                <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 331
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 332
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                  ";
            }
            // line 333
            echo ">
                  ";
            // line 334
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                </section>
                ";
            // line 337
            echo "              </aside>
            ";
        }
        // line 339
        echo "          </div>
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/businessplus_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1548 => 339,  1544 => 337,  1539 => 334,  1536 => 333,  1530 => 332,  1528 => 331,  1521 => 330,  1516 => 328,  1513 => 327,  1509 => 325,  1504 => 322,  1501 => 321,  1495 => 320,  1493 => 319,  1486 => 318,  1481 => 316,  1479 => 315,  1476 => 314,  1473 => 312,  1467 => 310,  1465 => 309,  1462 => 308,  1456 => 307,  1454 => 306,  1447 => 305,  1443 => 303,  1433 => 299,  1430 => 298,  1426 => 249,  1423 => 248,  1417 => 689,  1414 => 688,  1409 => 686,  1407 => 685,  1405 => 684,  1402 => 683,  1399 => 682,  1395 => 679,  1391 => 676,  1387 => 674,  1382 => 671,  1379 => 670,  1374 => 668,  1371 => 667,  1367 => 665,  1362 => 662,  1359 => 661,  1354 => 659,  1352 => 658,  1348 => 656,  1344 => 654,  1332 => 653,  1330 => 652,  1328 => 651,  1325 => 650,  1322 => 649,  1318 => 646,  1310 => 640,  1304 => 636,  1300 => 634,  1288 => 633,  1286 => 632,  1284 => 631,  1281 => 630,  1278 => 629,  1272 => 624,  1268 => 622,  1263 => 619,  1260 => 618,  1254 => 617,  1252 => 616,  1247 => 615,  1242 => 613,  1239 => 612,  1235 => 610,  1230 => 607,  1227 => 606,  1221 => 605,  1219 => 604,  1214 => 603,  1209 => 601,  1207 => 600,  1200 => 599,  1196 => 597,  1191 => 594,  1188 => 593,  1182 => 592,  1180 => 591,  1175 => 590,  1170 => 588,  1168 => 587,  1163 => 586,  1159 => 584,  1154 => 581,  1151 => 580,  1145 => 579,  1143 => 578,  1138 => 577,  1133 => 575,  1130 => 574,  1126 => 572,  1121 => 569,  1118 => 568,  1112 => 567,  1110 => 566,  1105 => 565,  1100 => 563,  1098 => 562,  1092 => 559,  1080 => 558,  1078 => 557,  1076 => 556,  1073 => 555,  1070 => 554,  1066 => 551,  1062 => 548,  1058 => 546,  1053 => 543,  1050 => 542,  1045 => 540,  1042 => 539,  1038 => 537,  1033 => 534,  1030 => 533,  1025 => 531,  1023 => 530,  1019 => 528,  1013 => 527,  1011 => 526,  1006 => 525,  1002 => 523,  989 => 522,  987 => 521,  985 => 520,  982 => 519,  979 => 518,  975 => 515,  967 => 509,  961 => 505,  955 => 504,  953 => 503,  948 => 502,  944 => 500,  933 => 499,  931 => 498,  929 => 497,  926 => 496,  923 => 495,  919 => 492,  911 => 486,  905 => 482,  899 => 481,  897 => 480,  892 => 479,  888 => 477,  877 => 476,  875 => 475,  873 => 474,  870 => 473,  867 => 472,  863 => 469,  855 => 463,  849 => 459,  843 => 458,  841 => 457,  836 => 456,  832 => 454,  821 => 453,  819 => 452,  817 => 451,  814 => 450,  811 => 449,  807 => 446,  799 => 440,  793 => 436,  787 => 435,  785 => 434,  780 => 433,  776 => 431,  765 => 430,  763 => 429,  761 => 428,  758 => 427,  755 => 426,  751 => 423,  743 => 417,  737 => 413,  731 => 412,  729 => 411,  724 => 410,  720 => 408,  709 => 407,  707 => 406,  705 => 405,  702 => 404,  699 => 403,  695 => 400,  687 => 394,  681 => 390,  675 => 389,  673 => 388,  668 => 387,  664 => 385,  653 => 384,  651 => 383,  649 => 382,  646 => 381,  643 => 380,  639 => 377,  635 => 374,  631 => 372,  626 => 369,  623 => 368,  618 => 366,  615 => 365,  611 => 363,  606 => 360,  603 => 359,  598 => 357,  596 => 356,  592 => 354,  586 => 353,  584 => 352,  579 => 351,  575 => 349,  564 => 348,  562 => 347,  560 => 346,  557 => 345,  555 => 344,  552 => 298,  549 => 296,  546 => 295,  542 => 292,  534 => 286,  528 => 282,  522 => 281,  520 => 280,  515 => 279,  511 => 277,  500 => 276,  498 => 275,  496 => 274,  493 => 273,  490 => 272,  486 => 269,  478 => 263,  472 => 259,  466 => 258,  464 => 257,  459 => 256,  455 => 254,  446 => 253,  444 => 252,  442 => 251,  439 => 250,  437 => 248,  434 => 247,  425 => 241,  419 => 237,  417 => 236,  414 => 235,  411 => 234,  407 => 231,  399 => 225,  393 => 221,  389 => 219,  380 => 218,  378 => 217,  376 => 216,  373 => 215,  370 => 214,  366 => 211,  363 => 210,  359 => 207,  355 => 204,  351 => 202,  346 => 199,  343 => 198,  338 => 196,  335 => 195,  331 => 193,  326 => 190,  323 => 189,  318 => 187,  315 => 186,  311 => 184,  306 => 181,  303 => 180,  298 => 178,  296 => 177,  292 => 175,  288 => 173,  277 => 172,  275 => 171,  273 => 170,  270 => 169,  267 => 168,  263 => 165,  259 => 162,  255 => 160,  250 => 157,  247 => 156,  242 => 154,  239 => 153,  235 => 151,  230 => 148,  227 => 147,  222 => 145,  220 => 144,  216 => 142,  210 => 141,  208 => 140,  203 => 139,  199 => 137,  192 => 136,  190 => 135,  188 => 134,  185 => 133,  182 => 132,  178 => 129,  174 => 126,  170 => 124,  165 => 121,  162 => 120,  157 => 118,  154 => 117,  150 => 115,  145 => 112,  142 => 111,  137 => 109,  135 => 108,  131 => 106,  125 => 105,  123 => 104,  118 => 103,  114 => 101,  107 => 100,  105 => 99,  103 => 98,  99 => 96,  97 => 95,  95 => 94,  91 => 92,  88 => 90,  84 => 87,  81 => 85,  78 => 83,  72 => 79,  68 => 77,  61 => 75,  59 => 74,  57 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Business+ Lite's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.

 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.slideout: Items for the Slideout region.
 * - page.header_top_highlighted_first: Items for the Header Top Highlighted First region.
 * - page.header_top_highlighted_second: Items for the Header Top Highlighted Second region.
 * - page.header_top_first: Items for the Header Top First region.
 * - page.header_top_second: Items for the Header Top Second region.
 * - page.header_first: Items for the Header First region.
 * - page.header: Items for the Header Second region.
 * - page.header_third: Items for the Header Third region.
 * - page.banner: Items for the Banner region.
 * - page.content_top: Items for the Content Top region.
 * - page.content_top_highlighted: Items for the Content Top Highlighted region.
 * - page.content: Items for the Content region.
 * - page.sidebar_first: Items for the First Sidebar region.
 * - page.sidebar_second: Items for the Second Sidebar region.
 * - page.content_bottom_first: Items for the Content Bottom First region.
 * - page.content_bottom_second: Items for the Content Bottom Second region.
 * - page.featured_top: Items for the Featured Top region.
 * - page.featured: Items for the Featured region.
 * - page.featured_bottom: Items for the Featured Bottom region.
 * - page.sub_featured: Items for the Sub Featured region.
 * - page.breadcrumb: Items for the Breadcrumb region.
 * - page.highlighted: Items for the Highlighted region.
 * - page.footer_top_first: Items for the Footer Top First region.
 * - page.footer_top_second: Items for the Footer Top Second region.
 * - page.footer_first: Items for the Footer First region.
 * - page.footer_second: Items for the Footer Second region.
 * - page.footer_third: Items for the Footer Third region.
 * - page.footer_fourth: Items for the Footer Fourth region.
 * - page.footer_fifth: Items for the Footer Fifth region.
 * - page.footer_bottom: Items for the Footer Bottom region.
 * - page.sub_footer_first: Items for the Subfooter First region.
 * - page.footer: Items for the Subfooter Second region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% if page.slideout %}
  {# slideout #}
  <div class=\"clearfix slideout {{ slideout_background_color }}{{ (slideout_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (slideout_region_paddings) ? ' region--no-paddings' : '' }}\">
    {# slideout__container #}
    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        {{ page.slideout }}
      </div>
    </div>
    {# EOF:slideout__container #}
  </div>
  {# EOF: slideout #}

  {# EOF: slideout-toggle #}
  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fas fa-bars\"></i></button>
  {# EOF: slideout-toggle #}
{% endif %}

{# page-container #}
<div class=\"page-container\">

  {% if page.header_top_first or page.header_top_second or page.header_first or page.header or page.header_third or page.header_top_highlighted_first or page.header_top_highlighted_second %}
    {# header-container #}
    <div class=\"header-container\">

      {% if page.header_top_highlighted_first or page.header_top_highlighted_second %}
        {# header_top_highlighted #}
        <div class=\"clearfix header-top-highlighted {{ header_top_highlighted_background_color }}{{ (header_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_highlighted_layout_container }}\">
            {# header_top_highlighted__container #}
            <div class=\"clearfix header-top-highlighted__container{{ (header_top_highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
              {% if header_top_highlighted_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_highlighted_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_highlighted_first %}
                  <div class=\"{{ header_top_highlighted_first_grid_class }}\">
                    {# header-top-highlighted-first #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      {{ page.header_top_highlighted_first }}
                    </div>
                    {# EOF:header-top-highlighted-first #}
                  </div>
                {% endif %}
                {% if page.header_top_highlighted_second %}
                  <div class=\"{{ header_top_highlighted_second_grid_class }}\">
                    {# header-top-highlighted-second #}
                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      {{ page.header_top_highlighted_second }}
                    </div>
                    {# EOF:header-top-highlighted-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF:header-top-highlighted__container #}
          </div>
        </div>
        {# EOF: header-top-highlighted #}
      {% endif %}

      {% if page.header_top_first or page.header_top_second %}
        {# header-top #}
        <div class=\"clearfix header-top {{ header_top_background_color }}{{ (header_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_top_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_top_layout_container }}\">
            {# header-top__container #}
            <div class=\"clearfix header-top__container{{ (header_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
              {% if header_top_animations == \"enabled\" %}
                data-animate-effect=\"{{ header_top_animation_effect }}\"
              {% endif %}>
              <div class=\"row\">
                {% if page.header_top_first %}
                  <div class=\"{{ header_top_first_grid_class }}\">
                    {# header-top-first #}
                    <div class=\"clearfix header-top__section header-top-first\">
                      {{ page.header_top_first }}
                    </div>
                    {# EOF:header-top-first #}
                  </div>
                {% endif %}
                {% if page.header_top_second %}
                  <div class=\"{{ header_top_second_grid_class }}\">
                    {# header-top-second #}
                    <div class=\"clearfix header-top__section header-top-second\">
                      {{ page.header_top_second }}
                    </div>
                    {# EOF:header-top-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header-top__container #}
          </div>
        </div>
        {# EOF: header-top #}
      {% endif %}

      {% if page.header_first or page.header or page.header_third %}
        {# header #}
        <header role=\"banner\" class=\"clearfix header {{ header_background_color }} {{ header_layout_container_class }} {{ header_layout_columns_class }}{{ (header_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (header_region_paddings) ? ' region--no-paddings' : '' }}\">
          <div class=\"{{ header_layout_container }}\">
            {# header__container #}
            <div class=\"clearfix header__container\">
              <div class=\"row\">
                {% if page.header_third %}
                  <div class=\"{{ header_third_grid_class }}\">
                    {# header-third #}
                    <div class=\"clearfix header__section header-third\">
                      {{ page.header_third }}
                    </div>
                    {# EOF:header-third #}
                  </div>
                {% endif %}
                {% if page.header_first %}
                  <div class=\"{{ header_first_grid_class }}\">
                    {# header-first #}
                    <div class=\"clearfix header__section header-first\">
                      {{ page.header_first }}
                    </div>
                    {# EOF:header-first #}
                  </div>
                {% endif %}
                {% if page.header %}
                  <div class=\"{{ header_second_grid_class }}\">
                    {# header-second #}
                    <div class=\"clearfix header__section header-second\">
                      {{ page.header }}
                    </div>
                    {# EOF:header-second #}
                  </div>
                {% endif %}
              </div>
            </div>
            {# EOF: header__container #}
          </div>
        </header>
        {# EOF: header #}
      {% endif %}

    </div>
    {# EOF: header-container #}
  {% endif %}

  {% if page.banner %}
    {# banner #}
    <div {{ banner_id ? ('id=\"' ~ banner_id ~ '\"') | raw : '' }} class=\"clearfix banner {{ banner_background_color }}{{ (banner_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (banner_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ banner_layout_container }}\">
        {# banner__container #}
        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                {{ page.banner }}
              </div>
            </div>
          </div>
        </div>
        {# EOF: banner__container #}
      </div>
    </div>
    {# EOF:banner #}
  {% endif %}

  {% if page.system_messages %}
    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            {{ page.system_messages }}
          </div>
        </div>
      </div>
    </div>
  {% endif %}

  {% block internal_banner %}
  {% endblock %}

  {% if page.content_top %}
    {# content-top #}
    <div {{ content_top_id ? ('id=\"' ~ content_top_id ~ '\"') | raw : ''}} class=\"clearfix content-top {{ content_top_background_color }}{{ (content_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_layout_container }}\">
        {# content-top__container #}
        <div class=\"clearfix content-top__container{{ (content_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                {{ page.content_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top__container #}
      </div>
    </div>
    {# EOF: content-top #}
  {% endif %}

  {% if page.content_top_highlighted %}
    {# content-top-highlighted #}
    <div {{ content_top_highlighted_id ? ('id=\"' ~ content_top_highlighted_id ~ '\"') | raw : ''}} class=\"clearfix content-top-highlighted {{ content_top_highlighted_background_color }} {{ content_top_highlighted_separator }}{{ (content_top_highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_top_highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_top_highlighted_layout_container }}\">
        {# content-top-highlighted__container #}
        <div class=\"clearfix content-top-highlighted__container{{ (content_top_highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_top_highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_top_highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                {{ page.content_top_highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:content-top-highlighted__container #}
      </div>
    </div>
    {# EOF: content-top-highlighted #}
  {% endif %}

  {# main-content #}
  {% block main_content %}
    <div {{ main_content_id ? ('id=\"' ~ main_content_id ~ '\"') | raw : ''}} class=\"clearfix main-content region--dark-typography region--white-background  {{ main_content_separator }}\">
      <div class=\"container\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"{{ main_grid_class }}\">
              {# main #}
              <div class=\"clearfix main-content__section{{ (main_content_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (main_content_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (main_content_region_paddings) ? ' region--no-paddings' : '' }}\"
                {% if main_content_animations == \"enabled\" %}
                  data-animate-effect=\"{{ main_content_animation_effect }}\"
                {% endif %}>
                {% if page.content %}
                  {{ page.content }}
                {% endif %}
              </div>
              {# EOF:main #}
            </section>
            {% if page.sidebar_first %}
              <aside class=\"{{ sidebar_first_grid_class }}\">
                {# sidebar-first #}
                <section class=\"sidebar__section sidebar-first clearfix{{ (sidebar_first_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (sidebar_first_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_first_region_paddings) ? ' region--no-paddings' : '' }}\"
                  {% if sidebar_first_animations == \"enabled\" %}
                    data-animate-effect=\"{{ sidebar_first_animation_effect }}\"
                  {% endif %}>
                  {{ page.sidebar_first }}
                </section>
                {# EOF:sidebar-first #}
              </aside>
            {% endif %}
            {% if page.sidebar_second %}
              <aside class=\"{{ sidebar_second_grid_class }}\">
                {# sidebar-second #}
                <section class=\"sidebar__section sidebar-second clearfix{{ (sidebar_second_animations == \"enabled\") ? ' mt-no-opacity' : '' }}{{ (sidebar_second_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sidebar_second_region_paddings) ? ' region--no-paddings' : '' }}\"
                  {% if sidebar_second_animations == \"enabled\" %}
                    data-animate-effect=\"{{ sidebar_second_animation_effect }}\"
                  {% endif %}>
                  {{ page.sidebar_second }}
                </section>
                {# EOF:sidebar-second #}
              </aside>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
  {% endblock %}
  {# EOF:main-content #}

  {% if page.content_bottom_first or page.content_bottom_second %}
    {# content-bottom #}
    <div {{ content_bottom_id ? ('id=\"' ~ content_bottom_id ~ '\"') | raw : ''}} class=\"clearfix content-bottom {{ content_bottom_background_color }} {{ content_bottom_separator }}{{ (content_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (content_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ content_bottom_layout_container }}\">
        {# content-bottom__container #}
        <div class=\"clearfix content-bottom__container{{ (content_bottom_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if content_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ content_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.content_bottom_first %}
              <div class=\"{{ content_bottom_first_grid_class }}\">
                {# content-bottom-first #}
                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  {{ page.content_bottom_first }}
                </div>
                {# EOF:content-bottom-first #}
              </div>
            {% endif %}
            {% if page.content_bottom_second %}
              <div class=\"{{ content_bottom_second_grid_class }}\">
                {# content-bottom-second #}
                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  {{ page.content_bottom_second }}
                </div>
                {# EOF:content-bottom-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF:content-bottom__container #}
      </div>
    </div>
    {# EOF: content-bottom #}
  {% endif %}

  {% if page.featured_top %}
    {# featured-top #}
    <div {{ featured_top_id ? ('id=\"' ~ featured_top_id ~ '\"') | raw : ''}} class=\"clearfix featured-top {{ featured_top_background_color }} {{ featured_top_separator }}{{ (featured_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_top_layout_container }}\">
        {# featured-top__container #}
        <div class=\"clearfix featured-top__container{{ (featured_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                {{ page.featured_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-top__container #}
      </div>
    </div>
    {# EOF: featured-top #}
  {% endif %}

  {% if page.featured %}
    {# featured #}
    <div {{ featured_id ? ('id=\"' ~ featured_id ~ '\"') | raw : ''}} class=\"clearfix featured {{ featured_background_color }} {{ featured_separator }}{{ (featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_layout_container }}\">
        {# featured__container #}
        <div class=\"clearfix featured__container{{ (featured_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                {{ page.featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured__container #}
      </div>
    </div>
    {# EOF: featured #}
  {% endif %}

  {% if page.featured_bottom %}
    {# featured-bottom #}
    <div {{ featured_bottom_id ? ('id=\"' ~ featured_bottom_id ~ '\"') | raw : ''}} class=\"clearfix featured-bottom {{ featured_bottom_background_color }} {{ featured_bottom_separator }}{{ (featured_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (featured_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ featured_bottom_layout_container }}\">
        {# featured-bottom__container #}
        <div class=\"clearfix featured-bottom__container{{ (featured_bottom_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if featured_bottom_animations == \"enabled\" %}
            data-animate-effect=\"{{ featured_bottom_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                {{ page.featured_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:featured-bottom__container #}
      </div>
    </div>
    {# EOF: featured-bottom #}
  {% endif %}

  {% if page.sub_featured %}
    {# sub_featured #}
    <div {{ sub_featured_id ? ('id=\"' ~ sub_featured_id ~ '\"') | raw : ''}} class=\"clearfix sub-featured {{ sub_featured_background_color }} {{ sub_featured_separator }}{{ (sub_featured_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (sub_featured_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ sub_featured_layout_container }}\">
        {# sub_featured__container #}
        <div class=\"clearfix sub-featured__container{{ (sub_featured_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if sub_featured_animations == \"enabled\" %}
            data-animate-effect=\"{{ sub_featured_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                {{ page.sub_featured }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:sub_featured__container #}
      </div>
    </div>
    {# EOF: sub_featured #}
  {% endif %}

  {% if page.highlighted_top %}
    {# highlighted-top #}
    <div {{ highlighted_top_id ? ('id=\"' ~ highlighted_top_id ~ '\"') | raw : ''}} class=\"clearfix highlighted-top {{ highlighted_top_background_color }} {{ highlighted_top_separator }}{{ (highlighted_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_top_layout_container }}\">
        {# highlighted-top__container #}
        <div class=\"clearfix highlighted-top__container{{ (highlighted_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if highlighted_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                {{ page.highlighted_top }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted-top__container #}
      </div>
    </div>
    {# EOF: highlighted-top #}
  {% endif %}

  {% if page.highlighted %}
    {# highlighted #}
    <div {{ highlighted_id ? ('id=\"' ~ highlighted_id ~ '\"') | raw : ''}} class=\"clearfix highlighted {{ highlighted_background_color }} {{ highlighted_separator }}{{ (highlighted_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (highlighted_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ highlighted_layout_container }}\">
        {# highlighted__container #}
        <div class=\"clearfix highlighted__container{{ (highlighted_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if highlighted_animations == \"enabled\" %}
            data-animate-effect=\"{{ highlighted_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                {{ page.highlighted }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:highlighted__container #}
      </div>
    </div>
    {# EOF: highlighted #}
  {% endif %}

  {% if page.footer_top_first or page.footer_top_second %}
    {# footer-top #}
    <div {{ footer_top_id ? ('id=\"' ~ footer_top_id ~ '\"') | raw : ''}} class=\"clearfix footer-top {{ footer_top_regions }} {{ footer_top_background_color }} {{ footer_top_separator }}{{ (footer_top_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_top_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_top_layout_container }}\">
        {# footer-top__container #}
        <div class=\"clearfix footer-top__container{{ (footer_top_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
          {% if footer_top_animations == \"enabled\" %}
            data-animate-effect=\"{{ footer_top_animation_effect }}\"
          {% endif %}>
          <div class=\"row\">
            {% if page.footer_top_first %}
              <div class=\"{{ footer_top_first_grid_class }}\">
                {# footer-top-first #}
                <div class=\"clearfix footer-top__section footer-top-first\">
                  {{ page.footer_top_first }}
                </div>
                {# EOF:footer-top-first #}
              </div>
            {% endif %}
            {% if page.footer_top_second %}
              <div class=\"{{ footer_top_second_grid_class }}\">
                {# footer-top-second #}
                <div class=\"clearfix footer-top__section footer-top-second\">
                  {{ page.footer_top_second }}
                </div>
                {# EOF:footer-top-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: footer-top__container #}
      </div>
    </div>
    {# EOF: footer-top #}
  {% endif %}

  {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth or page.footer_fifth %}
    {# footer #}
    <footer {{ footer_id ? ('id=\"' ~ footer_id ~ '\"') | raw : ''}} class=\"clearfix footer {{ footer_background_color }} {{ footer_separator }} {{ (footer_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_layout_container }}\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            {% if page.footer_first %}
              <div class=\"{{ footer_first_grid_class }}\">
                {# footer-first #}
                <div class=\"clearfix footer__section footer-first{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_first }}
                </div>
                {# EOF:footer-first #}
              </div>
            {% endif %}
            {% if page.footer_second %}
              <div class=\"{{ footer_second_grid_class }}\">
                {# footer-second #}
                <div class=\"clearfix footer__section footer-second{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_second }}
                </div>
                {# EOF:footer-second #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_first }}\"></div>
            {% if page.footer_third %}
              <div class=\"{{ footer_third_grid_class }}\">
                {# footer-third #}
                <div class=\"clearfix footer__section footer-third{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_third }}
                </div>
                {# EOF:footer-third #}
              </div>
            {% endif %}
            <div class=\"clearfix {{ footer_4_columns_clearfix_second }} {{ footer_5_columns_clearfix }}\"></div>
            {% if page.footer_fourth %}
              <div class=\"{{ footer_fourth_grid_class }}\">
                {# footer-fourth #}
                <div class=\"clearfix footer__section footer-fourth{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fourth }}
                </div>
                {# EOF:footer-fourth #}
              </div>
            {% endif %}
            {% if page.footer_fifth %}
              <div class=\"{{ footer_fifth_grid_class }}\">
                {# footer-fifth #}
                <div class=\"clearfix footer__section footer-fifth{{ (footer_animations == \"enabled\") ? ' mt-no-opacity' : '' }}\"
                  {% if footer_animations == \"enabled\" %}
                    data-animate-effect=\"{{ footer_animation_effect }}\"
                  {% endif %}>
                  {{ page.footer_fifth }}
                </div>
                {# EOF:footer-fifth #}
              </div>
            {% endif %}
          </div>
        </div>
      </div>
    </footer>
    {# EOF footer #}
  {% endif %}

  {% if page.footer_bottom %}
    {# footer-bottom #}
    <div {{ footer_bottom_id ? ('id=\"' ~ footer_bottom_id ~ '\"') | raw : ''}} class=\"clearfix footer-bottom {{ footer_bottom_background_color }} {{ footer_bottom_separator }} {{ (footer_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (footer_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ footer_bottom_layout_container }}\">
        {# footer-bottom__container #}
        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                {{ page.footer_bottom }}
              </div>
            </div>
          </div>
        </div>
        {# EOF:footer-bottom__container #}
      </div>
    </div>
    {# EOF: footer-bottom #}
  {% endif %}

  {% if page.sub_footer_first or page.footer %}
    {# subfooter #}
    <div {{ subfooter_id ? ('id=\"' ~ subfooter_id ~ '\"') | raw : ''}} class=\"clearfix subfooter {{ subfooter_background_color }} {{ subfooter_separator }} {{ (subfooter_bottom_blocks_paddings) ? ' region--no-block-paddings' : '' }}{{ (subfooter_bottom_region_paddings) ? ' region--no-paddings' : '' }}\">
      <div class=\"{{ subfooter_layout_container }}\">
        {# subfooter__container #}
        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            {% if page.sub_footer_first %}
              <div class=\"{{ subfooter_first_grid_class }}\">
                {# subfooter-first #}
                <div class=\"clearfix subfooter__section subfooter-first\">
                  {{ page.sub_footer_first }}
                </div>
                {# EOF: subfooter-first #}
              </div>
            {% endif %}
            {% if page.footer %}
              <div class=\"{{ subfooter_second_grid_class }}\">
                {# subfooter-second #}
                <div class=\"clearfix subfooter__section subfooter-second\">
                  {{ page.footer }}
                </div>
                {# EOF: subfooter-second #}
              </div>
            {% endif %}
          </div>
        </div>
        {# EOF: subfooter__container #}
      </div>
    </div>
    {# EOF:subfooter #}
  {% endif %}

  {% if scroll_to_top_display %}
  {# to-top #}
    <div class=\"to-top\"><i class=\"fas {{ scroll_to_top_icon }}\"></i></div>
  {# EOF:to-top #}
  {% endif %}

</div>
{# EOF: page-container #}
", "themes/businessplus_lite/templates/page.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/hacker/themes/businessplus_lite/templates/page.html.twig");
    }
}
