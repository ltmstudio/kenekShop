<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/live_search.twig */
class __TwigTemplate_ada72bb89feb813d903a9fcdc87edc16347f7aa3ca5f03fc8b4bca0c9f048adc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>

\t\t\t\t<button onclick=\"\$('#content #apply').attr('value', '1'); \$('#' + \$('#content form').attr('id')).submit();\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></button>
\t\t\t
        <a href=\"";
        // line 10
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo " </h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-image\">";
        // line 36
        echo ($context["entry_show_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_image\" id=\"input-show-image\" class=\"form-control\">
                ";
        // line 39
        if (($context["module_live_search_show_image"] ?? null)) {
            // line 40
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 41
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 43
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 46
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-price\">";
        // line 50
        echo ($context["entry_show_price"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_price\" id=\"input-show-price\" class=\"form-control\">
                ";
        // line 53
        if (($context["module_live_search_show_price"] ?? null)) {
            // line 54
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 55
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 57
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 58
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 60
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-description\">";
        // line 64
        echo ($context["entry_show_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_description\" id=\"input-show-description\" class=\"form-control\">
                ";
        // line 67
        if (($context["module_live_search_show_description"] ?? null)) {
            // line 68
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 69
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 71
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 74
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-show-add-button\">";
        // line 78
        echo ($context["entry_show_add_button"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_show_add_button\" id=\"input-show-add-button\" class=\"form-control\">
                ";
        // line 81
        if (($context["module_live_search_show_add_button"] ?? null)) {
            // line 82
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 85
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 86
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 88
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 93
        echo ($context["help_view_all_results"] ?? null);
        echo "\">";
        echo ($context["entry_view_all_results"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 96
            echo "                <div class=\"input-group\"> <span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag_img", [], "any", false, false, false, 96);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 96);
            echo "\" /></span>
                  <input type=\"text\" name=\"module_live_search_view_all_results[";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97);
            echo "][name]\" value=\"";
            if ( !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_live_search_view_all_results"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null))) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_live_search_view_all_results"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 97)] ?? null) : null), "name", [], "any", false, false, false, 97);
                echo " ";
            }
            echo "\" placeholder=\"";
            echo ($context["text_view_all_results"] ?? null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 99
            if ( !(null === (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_view_all_results"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99)] ?? null) : null))) {
                // line 100
                echo "                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_view_all_results"] ?? null), "language", [], "any", false, false, false, 100), "language_id", [], "any", false, false, false, 100);
                echo "</div>
                ";
            }
            // line 102
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 106
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_limit\" value=\"";
        // line 108
        echo ($context["module_live_search_limit"] ?? null);
        echo "\" placeholder=\"5\" id=\"input-limit\" class=\"form-control\" />
              ";
        // line 109
        if (($context["error_limit"] ?? null)) {
            // line 110
            echo "              <div class=\"text-danger\">";
            echo ($context["error_limit"] ?? null);
            echo "</div>
              ";
        }
        // line 112
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 115
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_image_width\" value=\"";
        // line 117
        echo ($context["module_live_search_image_width"] ?? null);
        echo "\" placeholder=\"50\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 118
        if (($context["error_width"] ?? null)) {
            // line 119
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 121
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 124
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_image_height\" value=\"";
        // line 126
        echo ($context["module_live_search_image_height"] ?? null);
        echo "\" placeholder=\"50\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 127
        if (($context["error_height"] ?? null)) {
            // line 128
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 130
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-title-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo ($context["help_length"] ?? null);
        echo "\">";
        echo ($context["entry_title_length"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_title_length\" value=\"";
        // line 135
        echo ($context["module_live_search_title_length"] ?? null);
        echo "\" placeholder=\"100\" id=\"input-title-length\" class=\"form-control\" />
              ";
        // line 136
        if (($context["error_title_length"] ?? null)) {
            // line 137
            echo "              <div class=\"text-danger\">";
            echo ($context["error_title_length"] ?? null);
            echo "</div>
              ";
        }
        // line 139
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-description-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 142
        echo ($context["help_length"] ?? null);
        echo "\">";
        echo ($context["entry_description_length"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_description_length\" value=\"";
        // line 144
        echo ($context["module_live_search_description_length"] ?? null);
        echo "\" placeholder=\"100\" id=\"input-description-length\" class=\"form-control\" />
              ";
        // line 145
        if (($context["error_description_length"] ?? null)) {
            // line 146
            echo "              <div class=\"text-danger\">";
            echo ($context["error_description_length"] ?? null);
            echo "</div>
              ";
        }
        // line 148
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-min-length\">";
        // line 152
        echo ($context["entry_min_length"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"number\" name=\"module_live_search_min_length\" value=\"";
        // line 154
        echo ($context["module_live_search_min_length"] ?? null);
        echo "\" placeholder=\"1\" id=\"input-min-length\" class=\"form-control\" />
              ";
        // line 155
        if (($context["error_min_length"] ?? null)) {
            // line 156
            echo "              <div class=\"text-danger\">";
            echo ($context["error_min_length"] ?? null);
            echo "</div>
              ";
        }
        // line 158
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 162
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"module_live_search_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 165
        if (($context["module_live_search_status"] ?? null)) {
            // line 166
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 167
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 169
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 172
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--

//--></script></div>
";
        // line 182
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/live_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 182,  470 => 172,  465 => 170,  460 => 169,  455 => 167,  450 => 166,  448 => 165,  442 => 162,  436 => 158,  430 => 156,  428 => 155,  424 => 154,  419 => 152,  413 => 148,  407 => 146,  405 => 145,  401 => 144,  394 => 142,  389 => 139,  383 => 137,  381 => 136,  377 => 135,  370 => 133,  365 => 130,  359 => 128,  357 => 127,  353 => 126,  348 => 124,  343 => 121,  337 => 119,  335 => 118,  331 => 117,  326 => 115,  321 => 112,  315 => 110,  313 => 109,  309 => 108,  304 => 106,  299 => 103,  293 => 102,  287 => 100,  285 => 99,  272 => 97,  265 => 96,  261 => 95,  254 => 93,  247 => 88,  242 => 86,  237 => 85,  232 => 83,  227 => 82,  225 => 81,  219 => 78,  213 => 74,  208 => 72,  203 => 71,  198 => 69,  193 => 68,  191 => 67,  185 => 64,  179 => 60,  174 => 58,  169 => 57,  164 => 55,  159 => 54,  157 => 53,  151 => 50,  145 => 46,  140 => 44,  135 => 43,  130 => 41,  125 => 40,  123 => 39,  117 => 36,  109 => 31,  103 => 28,  99 => 26,  91 => 22,  89 => 21,  83 => 17,  72 => 15,  68 => 14,  63 => 12,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/live_search.twig", "");
    }
}
