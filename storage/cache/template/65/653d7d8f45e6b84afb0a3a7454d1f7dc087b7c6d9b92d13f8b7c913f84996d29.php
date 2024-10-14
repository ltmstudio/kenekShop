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

/* setting/setting.twig */
class __TwigTemplate_95e6ee7198690cfeac27682c11a38c5497d3a588addcbbe073d5f52a70d71c21 extends \Twig\Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>

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
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 19
        if (($context["error_warning"] ?? null)) {
            // line 20
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 25
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 34
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 41
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 42
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 43
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 44
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 45
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-seopro\" data-toggle=\"tab\">";
        // line 46
        echo ($context["tab_seopro"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 51
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 53
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 54
        if (($context["error_meta_title"] ?? null)) {
            // line 55
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_meta_title"] ?? null);
            echo "</div>
                  ";
        }
        // line 56
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 59
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 61
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 65
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 67
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 71
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">
                    
                    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 76
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 76) == ($context["config_theme"] ?? null))) {
                // line 77
                echo "                    
                    <option value=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 78);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 78);
                echo "</option>
                    
                    ";
            } else {
                // line 81
                echo "                    
                    <option value=\"";
                // line 82
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 82);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 82);
                echo "</option>
                    
                    ";
            }
            // line 85
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                  
                  </select>
                  <br />
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 92
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">
                    
                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 97
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 97) == ($context["config_layout_id"] ?? null))) {
                // line 98
                echo "                    
                    <option value=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 99);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 99);
                echo "</option>
                    
                    ";
            } else {
                // line 102
                echo "                    
                    <option value=\"";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 103);
                echo "</option>
                    
                    ";
            }
            // line 106
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 114
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 116
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 117
        if (($context["error_name"] ?? null)) {
            // line 118
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 119
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 122
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 124
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 125
        if (($context["error_owner"] ?? null)) {
            // line 126
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_owner"] ?? null);
            echo "</div>
                  ";
        }
        // line 127
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 130
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 132
        echo ($context["entry_address"] ?? null);
        echo "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                  ";
        // line 133
        if (($context["error_address"] ?? null)) {
            // line 134
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_address"] ?? null);
            echo "</div>
                  ";
        }
        // line 135
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 138
        echo ($context["help_geocode"] ?? null);
        echo "\">";
        echo ($context["entry_geocode"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 140
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 144
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 146
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 147
        if (($context["error_email"] ?? null)) {
            // line 148
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 149
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 152
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 154
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 155
        if (($context["error_telephone"] ?? null)) {
            // line 156
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
                  ";
        }
        // line 157
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 160
        echo ($context["entry_fax"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 162
        echo ($context["config_fax"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_fax"] ?? null);
        echo "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 166
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 167
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 168
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 172
        echo ($context["help_open"] ?? null);
        echo "\">";
        echo ($context["entry_open"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 174
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 178
        echo ($context["help_comment"] ?? null);
        echo "\">";
        echo ($context["entry_comment"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 180
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                </div>
              </div>
              ";
        // line 183
        if (($context["locations"] ?? null)) {
            // line 184
            echo "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 185
            echo ($context["help_location"] ?? null);
            echo "\">";
            echo ($context["entry_location"] ?? null);
            echo "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 187
                echo "                  <div class=\"checkbox\">
                    <label> ";
                // line 188
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 188), ($context["config_location"] ?? null))) {
                    // line 189
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 189);
                    echo "\" checked=\"checked\" />
                      ";
                    // line 190
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 190);
                    echo "
                      ";
                } else {
                    // line 192
                    echo "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                    echo "\" />
                      ";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 193);
                    echo "
                      ";
                }
                // line 194
                echo " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo " </div>
              </div>
              ";
        }
        // line 198
        echo " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 201
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">
                    
                    ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 206
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 206) == ($context["config_country_id"] ?? null))) {
                // line 207
                echo "                    
                    <option value=\"";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 208);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 208);
                echo "</option>
                    
                    ";
            } else {
                // line 211
                echo "                    
                    <option value=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 212);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 212);
                echo "</option>
                    
                    ";
            }
            // line 215
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 221
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 228
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 232
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 232) == ($context["config_timezone"] ?? null))) {
                // line 233
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 233);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 233);
                echo "</option>
                      ";
            } else {
                // line 235
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 235);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 235);
                echo "</option>
                      ";
            }
            // line 237
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 242
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">
                    
                    ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 247
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 247) == ($context["config_language"] ?? null))) {
                // line 248
                echo "                    
                    <option value=\"";
                // line 249
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 249);
                echo "</option>
                    
                    ";
            } else {
                // line 252
                echo "                    
                    <option value=\"";
                // line 253
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 253);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 253);
                echo "</option>
                    
                    ";
            }
            // line 256
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 262
        echo ($context["entry_admin_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">
                    
                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 267
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 267) == ($context["config_admin_language"] ?? null))) {
                // line 268
                echo "                    
                    <option value=\"";
                // line 269
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 269);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 269);
                echo "</option>
                    
                    ";
            } else {
                // line 272
                echo "                    
                    <option value=\"";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 273);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 273);
                echo "</option>
                    
                    ";
            }
            // line 276
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 282
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">
                    
                    ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 287
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 287) == ($context["config_currency"] ?? null))) {
                // line 288
                echo "                    
                    <option value=\"";
                // line 289
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 289);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 289);
                echo "</option>
                    
                    ";
            } else {
                // line 292
                echo "                    
                    <option value=\"";
                // line 293
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 293);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 293);
                echo "</option>
                    
                    ";
            }
            // line 296
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 302
        echo ($context["help_currency_auto"] ?? null);
        echo "\">";
        echo ($context["entry_currency_auto"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 304
        if (($context["config_currency_auto"] ?? null)) {
            // line 305
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 306
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 308
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 309
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 310
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 311
        if ( !($context["config_currency_auto"] ?? null)) {
            // line 312
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 313
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 315
            echo "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 316
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 317
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 321
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 325
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 325) == ($context["config_currency_engine"] ?? null))) {
                // line 326
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 326);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 326);
                echo "</option>
                    ";
            } else {
                // line 328
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 328);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 328);
                echo "</option>
                    ";
            }
            // line 330
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 335
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    
                    ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 340
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 340) == ($context["config_length_class_id"] ?? null))) {
                // line 341
                echo "                    
                    <option value=\"";
                // line 342
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 342);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 342);
                echo "</option>
                    
                    ";
            } else {
                // line 345
                echo "                    
                    <option value=\"";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 346);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 346);
                echo "</option>
                    
                    ";
            }
            // line 349
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 355
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    
                    ";
        // line 359
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 360
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 360) == ($context["config_weight_class_id"] ?? null))) {
                // line 361
                echo "                    
                    <option value=\"";
                // line 362
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 362);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 362);
                echo "</option>
                    
                    ";
            } else {
                // line 365
                echo "                    
                    <option value=\"";
                // line 366
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 366);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 366);
                echo "</option>
                    
                    ";
            }
            // line 369
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 377
        echo ($context["text_product"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 379
        echo ($context["help_product_count"] ?? null);
        echo "\">";
        echo ($context["entry_product_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 381
        if (($context["config_product_count"] ?? null)) {
            // line 382
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 383
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 385
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 386
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 387
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 388
        if ( !($context["config_product_count"] ?? null)) {
            // line 389
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 390
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 392
            echo "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 393
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 394
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 398
        echo ($context["help_limit_admin"] ?? null);
        echo "\">";
        echo ($context["entry_limit_admin"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 400
        echo ($context["config_limit_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_admin"] ?? null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 401
        if (($context["error_limit_admin"] ?? null)) {
            // line 402
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_admin"] ?? null);
            echo "</div>
                    ";
        }
        // line 403
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-autocomplete-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 406
        echo ($context["help_limit_autocomplete"] ?? null);
        echo "\">";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_autocomplete\" value=\"";
        // line 408
        echo ($context["config_limit_autocomplete"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit_autocomplete"] ?? null);
        echo "\" id=\"input-autocomplete-limit\" class=\"form-control\" />
                    ";
        // line 409
        if (($context["error_limit_autocomplete"] ?? null)) {
            // line 410
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit_autocomplete"] ?? null);
            echo "</div>
                    ";
        }
        // line 411
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 415
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 417
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 419
        if (($context["config_review_status"] ?? null)) {
            // line 420
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 421
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 423
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 424
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 425
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 426
        if ( !($context["config_review_status"] ?? null)) {
            // line 427
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 428
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 430
            echo "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 431
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 432
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 436
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 438
        if (($context["config_review_guest"] ?? null)) {
            // line 439
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 440
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 442
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 443
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 444
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 445
        if ( !($context["config_review_guest"] ?? null)) {
            // line 446
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 447
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 449
            echo "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 450
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 451
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 456
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 458
        echo ($context["help_voucher_min"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_min"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 460
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 461
        if (($context["error_voucher_min"] ?? null)) {
            // line 462
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_min"] ?? null);
            echo "</div>
                    ";
        }
        // line 463
        echo " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 466
        echo ($context["help_voucher_max"] ?? null);
        echo "\">";
        echo ($context["entry_voucher_max"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 468
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 469
        if (($context["error_voucher_max"] ?? null)) {
            // line 470
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_voucher_max"] ?? null);
            echo "</div>
                    ";
        }
        // line 471
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 475
        echo ($context["text_tax"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 477
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 479
        if (($context["config_tax"] ?? null)) {
            // line 480
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 481
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 483
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 484
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 485
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 486
        if ( !($context["config_tax"] ?? null)) {
            // line 487
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 488
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 490
            echo "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 491
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 492
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 496
        echo ($context["help_tax_default"] ?? null);
        echo "\">";
        echo ($context["entry_tax_default"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 499
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 501
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            // line 502
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 503
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 506
            echo "                      
                      <option value=\"shipping\">";
            // line 507
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 510
        echo "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            // line 511
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 512
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 515
            echo "                      
                      <option value=\"payment\">";
            // line 516
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 519
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 524
        echo ($context["help_tax_customer"] ?? null);
        echo "\">";
        echo ($context["entry_tax_customer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 527
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 529
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            // line 530
            echo "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 531
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 534
            echo "                      
                      <option value=\"shipping\">";
            // line 535
            echo ($context["text_shipping"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 538
        echo "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            // line 539
            echo "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 540
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 543
            echo "                      
                      <option value=\"payment\">";
            // line 544
            echo ($context["text_payment"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 547
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 553
        echo ($context["text_account"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 555
        echo ($context["help_customer_online"] ?? null);
        echo "\">";
        echo ($context["entry_customer_online"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 557
        if (($context["config_customer_online"] ?? null)) {
            // line 558
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 559
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 561
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 562
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 563
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 564
        if ( !($context["config_customer_online"] ?? null)) {
            // line 565
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 566
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 568
            echo "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 569
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 570
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 574
        echo ($context["help_customer_activity"] ?? null);
        echo "\">";
        echo ($context["entry_customer_activity"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 576
        if (($context["config_customer_activity"] ?? null)) {
            // line 577
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 578
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 580
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 581
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 582
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 583
        if ( !($context["config_customer_activity"] ?? null)) {
            // line 584
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 585
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 587
            echo "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 588
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 589
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 593
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 595
        if (($context["config_customer_search"] ?? null)) {
            // line 596
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 597
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 599
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 600
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 601
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 602
        if ( !($context["config_customer_search"] ?? null)) {
            // line 603
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 604
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 606
            echo "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 607
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 608
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 612
        echo ($context["help_customer_group"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                      
                      ";
        // line 616
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 617
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 617) == ($context["config_customer_group_id"] ?? null))) {
                // line 618
                echo "                      
                      <option value=\"";
                // line 619
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 619);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 619);
                echo "</option>
                      
                      ";
            } else {
                // line 622
                echo "                      
                      <option value=\"";
                // line 623
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 623);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 623);
                echo "</option>
                      
                      ";
            }
            // line 626
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 632
        echo ($context["help_customer_group_display"] ?? null);
        echo "\">";
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 634
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 635
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 635), ($context["config_customer_group_display"] ?? null))) {
                // line 636
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 636);
                echo "\" checked=\"checked\" />
                        ";
                // line 637
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 637);
                echo "
                        ";
            } else {
                // line 639
                echo "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 639);
                echo "\" />
                        ";
                // line 640
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 640);
                echo "
                        ";
            }
            // line 641
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 644
        echo "                    ";
        if (($context["error_customer_group_display"] ?? null)) {
            // line 645
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_customer_group_display"] ?? null);
            echo "</div>
                    ";
        }
        // line 646
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 649
        echo ($context["help_customer_price"] ?? null);
        echo "\">";
        echo ($context["entry_customer_price"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 651
        if (($context["config_customer_price"] ?? null)) {
            // line 652
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 653
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 655
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 656
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 657
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 658
        if ( !($context["config_customer_price"] ?? null)) {
            // line 659
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 660
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 662
            echo "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 663
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 664
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 668
        echo ($context["help_login_attempts"] ?? null);
        echo "\">";
        echo ($context["entry_login_attempts"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 670
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 671
        if (($context["error_login_attempts"] ?? null)) {
            // line 672
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_login_attempts"] ?? null);
            echo "</div>
                    ";
        }
        // line 673
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 676
        echo ($context["help_account"] ?? null);
        echo "\">";
        echo ($context["entry_account"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 679
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 682
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 682) == ($context["config_account_id"] ?? null))) {
                // line 683
                echo "                      
                      <option value=\"";
                // line 684
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 684);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 684);
                echo "</option>
                      
                      ";
            } else {
                // line 687
                echo "                      
                      <option value=\"";
                // line 688
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 688);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 688);
                echo "</option>
                      
                      ";
            }
            // line 691
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 692
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 698
        echo ($context["text_checkout"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 700
        echo ($context["help_invoice_prefix"] ?? null);
        echo "\">";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 702
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 706
        echo ($context["help_cart_weight"] ?? null);
        echo "\">";
        echo ($context["entry_cart_weight"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 708
        if (($context["config_cart_weight"] ?? null)) {
            // line 709
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 710
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 712
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 713
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 714
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 715
        if ( !($context["config_cart_weight"] ?? null)) {
            // line 716
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 717
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 719
            echo "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 720
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 721
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 725
        echo ($context["help_checkout_guest"] ?? null);
        echo "\">";
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 727
        if (($context["config_checkout_guest"] ?? null)) {
            // line 728
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 729
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 731
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 732
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 733
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 734
        if ( !($context["config_checkout_guest"] ?? null)) {
            // line 735
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 736
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 738
            echo "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 739
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 740
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 744
        echo ($context["help_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 747
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 749
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 750
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 750) == ($context["config_checkout_id"] ?? null))) {
                // line 751
                echo "                      
                      <option value=\"";
                // line 752
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 752);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 752);
                echo "</option>
                      
                      ";
            } else {
                // line 755
                echo "                      
                      <option value=\"";
                // line 756
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 756);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 756);
                echo "</option>
                      
                      ";
            }
            // line 759
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 760
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 765
        echo ($context["help_order_status"] ?? null);
        echo "\">";
        echo ($context["entry_order_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      
                      ";
        // line 769
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 770
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 770) == ($context["config_order_status_id"] ?? null))) {
                // line 771
                echo "                      
                      <option value=\"";
                // line 772
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 772);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 772);
                echo "</option>
                      
                      ";
            } else {
                // line 775
                echo "                      
                      <option value=\"";
                // line 776
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 776);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 776);
                echo "</option>
                      
                      ";
            }
            // line 779
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 785
        echo ($context["help_processing_status"] ?? null);
        echo "\">";
        echo ($context["entry_processing_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 787
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 788
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 789
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 789), ($context["config_processing_status"] ?? null))) {
                // line 790
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
                echo "\" checked=\"checked\" />
                          ";
                // line 791
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 791);
                echo "
                          ";
            } else {
                // line 793
                echo "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 793);
                echo "\" />
                          ";
                // line 794
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 794);
                echo "
                          ";
            }
            // line 795
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        echo " </div>
                    ";
        // line 798
        if (($context["error_processing_status"] ?? null)) {
            // line 799
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_processing_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 800
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 803
        echo ($context["help_complete_status"] ?? null);
        echo "\">";
        echo ($context["entry_complete_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 805
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 806
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 807
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 807), ($context["config_complete_status"] ?? null))) {
                // line 808
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 808);
                echo "\" checked=\"checked\" />
                          ";
                // line 809
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 809);
                echo "
                          ";
            } else {
                // line 811
                echo "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 811);
                echo "\" />
                          ";
                // line 812
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 812);
                echo "
                          ";
            }
            // line 813
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        echo " </div>
                    ";
        // line 816
        if (($context["error_complete_status"] ?? null)) {
            // line 817
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_complete_status"] ?? null);
            echo "</div>
                    ";
        }
        // line 818
        echo " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 821
        echo ($context["help_fraud_status"] ?? null);
        echo "\">";
        echo ($context["entry_fraud_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">
                      
                      ";
        // line 825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 826
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 826) == ($context["config_fraud_status_id"] ?? null))) {
                // line 827
                echo "                      
                      <option value=\"";
                // line 828
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 828);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 828);
                echo "</option>
                      
                      ";
            } else {
                // line 831
                echo "                      
                      <option value=\"";
                // line 832
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 832);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 832);
                echo "</option>
                      
                      ";
            }
            // line 835
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 841
        echo ($context["help_api"] ?? null);
        echo "\">";
        echo ($context["entry_api"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 844
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 846
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 847
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 847) == ($context["config_api_id"] ?? null))) {
                // line 848
                echo "                      
                      <option value=\"";
                // line 849
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 849);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 849);
                echo "</option>
                      
                      ";
            } else {
                // line 852
                echo "                      
                      <option value=\"";
                // line 853
                echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 853);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 853);
                echo "</option>
                      
                      ";
            }
            // line 856
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 857
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 863
        echo ($context["text_stock"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 865
        echo ($context["help_stock_display"] ?? null);
        echo "\">";
        echo ($context["entry_stock_display"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 867
        if (($context["config_stock_display"] ?? null)) {
            // line 868
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 869
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 871
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 872
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 873
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 874
        if ( !($context["config_stock_display"] ?? null)) {
            // line 875
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 876
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 878
            echo "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 879
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 880
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 884
        echo ($context["help_stock_warning"] ?? null);
        echo "\">";
        echo ($context["entry_stock_warning"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 886
        if (($context["config_stock_warning"] ?? null)) {
            // line 887
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 888
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 890
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 891
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 892
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 893
        if ( !($context["config_stock_warning"] ?? null)) {
            // line 894
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 895
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 897
            echo "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 898
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 899
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 903
        echo ($context["help_stock_checkout"] ?? null);
        echo "\">";
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 905
        if (($context["config_stock_checkout"] ?? null)) {
            // line 906
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 907
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 909
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 910
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 911
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 912
        if ( !($context["config_stock_checkout"] ?? null)) {
            // line 913
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 914
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 916
            echo "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 917
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 918
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 923
        echo ($context["text_affiliate"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 925
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">
                      
                      ";
        // line 929
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 930
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 930) == ($context["config_affiliate_group_id"] ?? null))) {
                // line 931
                echo "                      
                      <option value=\"";
                // line 932
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 932);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 932);
                echo "</option>
                      
                      ";
            } else {
                // line 935
                echo "                      
                      <option value=\"";
                // line 936
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 936);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 936);
                echo "</option>
                      
                      ";
            }
            // line 939
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 940
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 945
        echo ($context["help_affiliate_approval"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 947
        if (($context["config_affiliate_approval"] ?? null)) {
            // line 948
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 949
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 951
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 952
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 953
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 954
        if ( !($context["config_affiliate_approval"] ?? null)) {
            // line 955
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 956
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 958
            echo "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 959
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 960
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 964
        echo ($context["help_affiliate_auto"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 966
        if (($context["config_affiliate_auto"] ?? null)) {
            // line 967
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 968
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 970
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 971
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 972
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 973
        if ( !($context["config_affiliate_auto"] ?? null)) {
            // line 974
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 975
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 977
            echo "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 978
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 979
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 983
        echo ($context["help_affiliate_commission"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 985
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 989
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 992
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 994
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 995
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 995) == ($context["config_affiliate_id"] ?? null))) {
                // line 996
                echo "                      
                      <option value=\"";
                // line 997
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 997);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 997);
                echo "</option>
                      
                      ";
            } else {
                // line 1000
                echo "                      
                      <option value=\"";
                // line 1001
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1001);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1001);
                echo "</option>
                      
                      ";
            }
            // line 1004
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1005
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1011
        echo ($context["text_return"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 1013
        echo ($context["help_return"] ?? null);
        echo "\">";
        echo ($context["entry_return"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 1016
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1018
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1019
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1019) == ($context["config_return_id"] ?? null))) {
                // line 1020
                echo "                      
                      <option value=\"";
                // line 1021
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1021);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1021);
                echo "</option>
                      
                      ";
            } else {
                // line 1024
                echo "                      
                      <option value=\"";
                // line 1025
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1025);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1025);
                echo "</option>
                      
                      ";
            }
            // line 1028
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1029
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 1034
        echo ($context["help_return_status"] ?? null);
        echo "\">";
        echo ($context["entry_return_status"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                      
                      ";
        // line 1038
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1039
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1039) == ($context["config_return_status_id"] ?? null))) {
                // line 1040
                echo "                      
                      <option value=\"";
                // line 1041
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1041);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1041);
                echo "</option>
                      
                      ";
            } else {
                // line 1044
                echo "                      
                      <option value=\"";
                // line 1045
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1045);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1045);
                echo "</option>
                      
                      ";
            }
            // line 1048
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1049
        echo "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1055
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1057
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 1060
        echo ($context["text_none"] ?? null);
        echo "</option>
                      
                      ";
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1063
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1063) == ($context["config_captcha"] ?? null))) {
                // line 1064
                echo "                      
                      <option value=\"";
                // line 1065
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1065);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1065);
                echo "</option>
                      
                      ";
            } else {
                // line 1068
                echo "                      
                      <option value=\"";
                // line 1069
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1069);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1069);
                echo "</option>
                      
                      ";
            }
            // line 1072
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1073
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1078
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1080
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1081
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1082
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1082), ($context["config_captcha_page"] ?? null))) {
                // line 1083
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1083);
                echo "\" checked=\"checked\" />
                          ";
                // line 1084
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1084);
                echo "
                          ";
            } else {
                // line 1086
                echo "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1086);
                echo "\" />
                          ";
                // line 1087
                echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1087);
                echo "
                          ";
            }
            // line 1088
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1090
        echo " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 1097
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1098
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 1099
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1103
        echo ($context["help_icon"] ?? null);
        echo "\">";
        echo ($context["entry_icon"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1104
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1105
        echo ($context["config_icon"] ?? null);
        echo "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1111
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1113
        echo ($context["help_mail_engine"] ?? null);
        echo "\">";
        echo ($context["entry_mail_engine"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">
                      
                      ";
        // line 1117
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            // line 1118
            echo "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1119
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1122
            echo "                      
                      <option value=\"mail\">";
            // line 1123
            echo ($context["text_mail"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1126
        echo "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            // line 1127
            echo "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1128
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        } else {
            // line 1131
            echo "                      
                      <option value=\"smtp\">";
            // line 1132
            echo ($context["text_smtp"] ?? null);
            echo "</option>
                      
                      ";
        }
        // line 1135
        echo "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1140
        echo ($context["help_mail_parameter"] ?? null);
        echo "\">";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1142
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1146
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1148
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1152
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1154
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1158
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "\">";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1160
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1164
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1166
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1170
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1172
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1177
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1179
        echo ($context["help_mail_alert"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1182
            echo "                      <div class=\"checkbox\">
                        <label> ";
            // line 1183
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1183), ($context["config_mail_alert"] ?? null))) {
                // line 1184
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1184);
                echo "\" checked=\"checked\" />
                          ";
                // line 1185
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1185);
                echo "
                          ";
            } else {
                // line 1187
                echo "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1187);
                echo "\" />
                          ";
                // line 1188
                echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1188);
                echo "
                          ";
            }
            // line 1189
            echo " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1191
        echo " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1195
        echo ($context["help_mail_alert_email"] ?? null);
        echo "\">";
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1197
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1204
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1206
        echo ($context["help_maintenance"] ?? null);
        echo "\">";
        echo ($context["entry_maintenance"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1208
        if (($context["config_maintenance"] ?? null)) {
            // line 1209
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1210
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1212
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1213
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1214
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1215
        if ( !($context["config_maintenance"] ?? null)) {
            // line 1216
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1217
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1219
            echo "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1220
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1221
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        echo ($context["help_seo_url"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1227
        if (($context["config_seo_url"] ?? null)) {
            // line 1228
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1229
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1231
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1232
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1233
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1234
        if ( !($context["config_seo_url"] ?? null)) {
            // line 1235
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1236
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1238
            echo "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1239
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1240
        echo " </label>
                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_type\">";
        // line 1245
        echo ($context["entry_seo_url_type"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                  <select id=\"config_seo_url_type\" class=\"form-control\" name=\"config_seo_url_type\">
                    ";
        // line 1248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["seo_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["seo_type"]) {
            // line 1249
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1249) == ($context["config_seo_url_type"] ?? null))) {
                // line 1250
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1250);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1250);
                echo "</option>
                      ";
            } else {
                // line 1252
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "type", [], "any", false, false, false, 1252);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["seo_type"], "name", [], "any", false, false, false, 1252);
                echo "</option>
                      ";
            }
            // line 1254
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seo_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1255
        echo "                  </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1259
        echo ($context["entry_seo_url_include_path_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_include_path"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  ";
        // line 1261
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1262
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 1264
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\"/>
                    ";
            // line 1268
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        } else {
            // line 1271
            echo "                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\"/>
                    ";
            // line 1273
            echo ($context["text_yes"] ?? null);
            echo "
                    </label>
                    <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 1277
            echo ($context["text_no"] ?? null);
            echo "
                    </label>
                  ";
        }
        // line 1280
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"config_seo_url_postfix\"><span data-toggle=\"tooltip\" title=\"";
        // line 1283
        echo ($context["entry_seo_url_postfix_help"] ?? null);
        echo "\">";
        echo ($context["entry_seo_url_postfix"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_seo_url_postfix\" value=\"";
        // line 1285
        echo ($context["config_seo_url_postfix"] ?? null);
        echo "\" id=\"config_seo_url_postfix\" class=\"form-control\"/>
                  </div>
                </div>
            
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1290
        echo ($context["help_robots"] ?? null);
        echo "\">";
        echo ($context["entry_robots"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1292
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1296
        echo ($context["help_compression"] ?? null);
        echo "\">";
        echo ($context["entry_compression"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1298
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1303
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1305
        echo ($context["help_secure"] ?? null);
        echo "\">";
        echo ($context["entry_secure"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1307
        if (($context["config_secure"] ?? null)) {
            // line 1308
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1309
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1311
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1312
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1313
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1314
        if ( !($context["config_secure"] ?? null)) {
            // line 1315
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1316
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1318
            echo "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1319
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1320
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1324
        echo ($context["help_password"] ?? null);
        echo "\">";
        echo ($context["entry_password"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1326
        if (($context["config_password"] ?? null)) {
            // line 1327
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1328
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1330
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1331
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1332
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1333
        if ( !($context["config_password"] ?? null)) {
            // line 1334
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1335
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1337
            echo "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1338
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1339
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1343
        echo ($context["help_shared"] ?? null);
        echo "\">";
        echo ($context["entry_shared"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1345
        if (($context["config_shared"] ?? null)) {
            // line 1346
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1347
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1349
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1350
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1351
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1352
        if ( !($context["config_shared"] ?? null)) {
            // line 1353
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1354
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1356
            echo "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1357
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1358
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1362
        echo ($context["help_encryption"] ?? null);
        echo "\">";
        echo ($context["entry_encryption"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1364
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    ";
        // line 1365
        if (($context["error_encryption"] ?? null)) {
            // line 1366
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_encryption"] ?? null);
            echo "</div>
                    ";
        }
        // line 1367
        echo " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1371
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1373
        echo ($context["help_file_max_size"] ?? null);
        echo "\">";
        echo ($context["entry_file_max_size"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1375
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1379
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1381
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1385
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "\">";
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1387
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1392
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1394
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1396
        if (($context["config_error_display"] ?? null)) {
            // line 1397
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1398
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1400
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1401
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1402
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1403
        if ( !($context["config_error_display"] ?? null)) {
            // line 1404
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1405
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1407
            echo "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1408
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1409
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1413
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1415
        if (($context["config_error_log"] ?? null)) {
            // line 1416
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1417
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 1419
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1420
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 1421
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 1422
        if ( !($context["config_error_log"] ?? null)) {
            // line 1423
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1424
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 1426
            echo "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1427
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 1428
        echo "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1432
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1434
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1435
        if (($context["error_log"] ?? null)) {
            // line 1436
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_log"] ?? null);
            echo "</div>
                    ";
        }
        // line 1437
        echo " </div>
                </div>
              </fieldset>
            </div>
\t\t\t
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-seopro\">
\t\t\t<fieldset>
\t\t\t<legend>";
        // line 1445
        echo ($context["text_general"] ?? null);
        echo "</legend>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1447
        echo ($context["help_seo_pro"] ?? null);
        echo "\">";
        echo ($context["entry_seo_pro"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1449
        if (($context["config_seo_pro"] ?? null)) {
            // line 1450
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1451
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1453
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"1\" />
\t\t\t\t  ";
            // line 1454
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1455
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1456
        if ( !($context["config_seo_pro"] ?? null)) {
            // line 1457
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1458
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1460
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_pro\" value=\"0\" />
\t\t\t\t  ";
            // line 1461
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1462
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1466
        echo ($context["help_config_seo_url_include_path"] ?? null);
        echo "\">";
        echo ($context["entry_config_seo_url_include_path"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1468
        if (($context["config_seo_url_include_path"] ?? null)) {
            // line 1469
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1470
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1472
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"1\" />
\t\t\t\t  ";
            // line 1473
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1474
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1475
        if ( !($context["config_seo_url_include_path"] ?? null)) {
            // line 1476
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1477
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1479
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_include_path\" value=\"0\" />
\t\t\t\t  ";
            // line 1480
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1481
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1485
        echo ($context["entry_config_seo_url_cache"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1487
        if (($context["config_seo_url_cache"] ?? null)) {
            // line 1488
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1489
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1491
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"1\" />
\t\t\t\t  ";
            // line 1492
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1493
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1494
        if ( !($context["config_seo_url_cache"] ?? null)) {
            // line 1495
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1496
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1498
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seo_url_cache\" value=\"0\" />
\t\t\t\t  ";
            // line 1499
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1500
        echo " </label>
\t\t\t  </div>
\t\t\t</div>\t\t
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1504
        echo ($context["entry_seopro_addslash"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1506
        if (($context["config_seopro_addslash"] ?? null)) {
            // line 1507
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1508
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1510
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"1\" />
\t\t\t\t  ";
            // line 1511
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1512
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1513
        if ( !($context["config_seopro_addslash"] ?? null)) {
            // line 1514
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1515
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1517
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_addslash\" value=\"0\" />
\t\t\t\t  ";
            // line 1518
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1519
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\">";
        // line 1523
        echo ($context["entry_seopro_lowercase"] ?? null);
        echo "</label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1525
        if (($context["config_seopro_lowercase"] ?? null)) {
            // line 1526
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1527
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1529
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"1\" />
\t\t\t\t  ";
            // line 1530
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1531
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1532
        if ( !($context["config_seopro_lowercase"] ?? null)) {
            // line 1533
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1534
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1536
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_seopro_lowercase\" value=\"0\" />
\t\t\t\t  ";
            // line 1537
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1538
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-page-postfix\">";
        // line 1542
        echo ($context["entry_page_postfix"] ?? null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" name=\"config_page_postfix\" value=\"";
        // line 1544
        echo ($context["config_page_postfix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_page_postfix"] ?? null);
        echo "\" id=\"input-page-postfix\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1548
        echo ($context["help_config_valide_param_flag"] ?? null);
        echo "\">";
        echo ($context["entry_config_valide_param_flag"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1550
        if (($context["config_valide_param_flag"] ?? null)) {
            // line 1551
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1552
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1554
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"1\" />
\t\t\t\t  ";
            // line 1555
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1556
        echo " </label>
\t\t\t\t<label class=\"radio-inline\"> ";
        // line 1557
        if ( !($context["config_valide_param_flag"] ?? null)) {
            // line 1558
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" checked=\"checked\" />
\t\t\t\t  ";
            // line 1559
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        } else {
            // line 1561
            echo "\t\t\t\t  <input type=\"radio\" name=\"config_valide_param_flag\" value=\"0\" />
\t\t\t\t  ";
            // line 1562
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t  ";
        }
        // line 1563
        echo " </label>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1567
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_valide_params"] ?? null);
        echo "</span></label>
\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t<textarea name=\"config_valide_params\" rows=10\" placeholder=\"";
        // line 1569
        echo ($context["entry_valide_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_valide_params"] ?? null);
        echo "</textarea>
\t\t\t  </div>
\t\t\t</div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1573
        echo ($context["entry_canonical_method_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_method"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1575
        if (($context["config_canonical_method"] ?? null)) {
            // line 1576
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1578
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\"/>
                  ";
            // line 1582
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1585
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"1\"/>
                  ";
            // line 1587
            echo ($context["text_canonical_ocstore"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_method\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1591
            echo ($context["text_canonical_opencart"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1594
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1597
        echo ($context["entry_canonical_self_help"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_self"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1599
        if (($context["config_canonical_self"] ?? null)) {
            // line 1600
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1602
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\"/>
                  ";
            // line 1606
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1609
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"1\"/>
                  ";
            // line 1611
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_canonical_self\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1615
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1618
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1621
        echo ($context["entry_add_prevnext_help"] ?? null);
        echo "\">";
        echo ($context["entry_add_prevnext"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 1623
        if (($context["config_add_prevnext"] ?? null)) {
            // line 1624
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\" checked=\"checked\"/>
                  ";
            // line 1626
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\"/>
                  ";
            // line 1630
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        } else {
            // line 1633
            echo "                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"1\"/>
                  ";
            // line 1635
            echo ($context["text_yes"] ?? null);
            echo "
                </label>
                <label class=\"radio-inline\">
                  <input type=\"radio\" name=\"config_add_prevnext\" value=\"0\" checked=\"checked\"/>
                  ";
            // line 1639
            echo ($context["text_no"] ?? null);
            echo "
                </label>
                ";
        }
        // line 1642
        echo "              </div>
            </div>
            <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 1645
        echo ($context["entry_noindex_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              ";
        // line 1647
        if (($context["config_noindex_status"] ?? null)) {
            // line 1648
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\" checked=\"checked\"/>
                ";
            // line 1650
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\"/>
                ";
            // line 1654
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        } else {
            // line 1657
            echo "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"1\"/>
                ";
            // line 1659
            echo ($context["text_yes"] ?? null);
            echo "
              </label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"config_noindex_status\" value=\"0\" checked=\"checked\"/>
                ";
            // line 1663
            echo ($context["text_no"] ?? null);
            echo "
              </label>
              ";
        }
        // line 1666
        echo "            </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-valide-params\"><span data-toggle=\"tooltip\" title=\"";
        // line 1669
        echo ($context["help_valide_params"] ?? null);
        echo "\">";
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <textarea name=\"config_noindex_disallow_params\" rows=10\" placeholder=\"";
        // line 1671
        echo ($context["entry_noindex_disallow_params"] ?? null);
        echo "\" id=\"input-valide-params\" class=\"form-control\">";
        echo ($context["config_noindex_disallow_params"] ?? null);
        echo "</textarea>
              </div>
            </div>
\t\t  </fieldset>
\t\t</div>
\t\t\t
\t\t\t
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1686
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1708
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1717
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1723
        echo ($context["config_zone_id"] ?? null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1730
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1745
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4463 => 1745,  4445 => 1730,  4435 => 1723,  4426 => 1717,  4414 => 1708,  4389 => 1686,  4369 => 1671,  4362 => 1669,  4357 => 1666,  4351 => 1663,  4344 => 1659,  4340 => 1657,  4334 => 1654,  4327 => 1650,  4323 => 1648,  4321 => 1647,  4316 => 1645,  4311 => 1642,  4305 => 1639,  4298 => 1635,  4294 => 1633,  4288 => 1630,  4281 => 1626,  4277 => 1624,  4275 => 1623,  4268 => 1621,  4263 => 1618,  4257 => 1615,  4250 => 1611,  4246 => 1609,  4240 => 1606,  4233 => 1602,  4229 => 1600,  4227 => 1599,  4220 => 1597,  4215 => 1594,  4209 => 1591,  4202 => 1587,  4198 => 1585,  4192 => 1582,  4185 => 1578,  4181 => 1576,  4179 => 1575,  4172 => 1573,  4163 => 1569,  4156 => 1567,  4150 => 1563,  4145 => 1562,  4142 => 1561,  4137 => 1559,  4134 => 1558,  4132 => 1557,  4129 => 1556,  4124 => 1555,  4121 => 1554,  4116 => 1552,  4113 => 1551,  4111 => 1550,  4104 => 1548,  4095 => 1544,  4090 => 1542,  4084 => 1538,  4079 => 1537,  4076 => 1536,  4071 => 1534,  4068 => 1533,  4066 => 1532,  4063 => 1531,  4058 => 1530,  4055 => 1529,  4050 => 1527,  4047 => 1526,  4045 => 1525,  4040 => 1523,  4034 => 1519,  4029 => 1518,  4026 => 1517,  4021 => 1515,  4018 => 1514,  4016 => 1513,  4013 => 1512,  4008 => 1511,  4005 => 1510,  4000 => 1508,  3997 => 1507,  3995 => 1506,  3990 => 1504,  3984 => 1500,  3979 => 1499,  3976 => 1498,  3971 => 1496,  3968 => 1495,  3966 => 1494,  3963 => 1493,  3958 => 1492,  3955 => 1491,  3950 => 1489,  3947 => 1488,  3945 => 1487,  3940 => 1485,  3934 => 1481,  3929 => 1480,  3926 => 1479,  3921 => 1477,  3918 => 1476,  3916 => 1475,  3913 => 1474,  3908 => 1473,  3905 => 1472,  3900 => 1470,  3897 => 1469,  3895 => 1468,  3888 => 1466,  3882 => 1462,  3877 => 1461,  3874 => 1460,  3869 => 1458,  3866 => 1457,  3864 => 1456,  3861 => 1455,  3856 => 1454,  3853 => 1453,  3848 => 1451,  3845 => 1450,  3843 => 1449,  3836 => 1447,  3831 => 1445,  3821 => 1437,  3815 => 1436,  3813 => 1435,  3807 => 1434,  3802 => 1432,  3796 => 1428,  3791 => 1427,  3788 => 1426,  3783 => 1424,  3780 => 1423,  3778 => 1422,  3775 => 1421,  3770 => 1420,  3767 => 1419,  3762 => 1417,  3759 => 1416,  3757 => 1415,  3752 => 1413,  3746 => 1409,  3741 => 1408,  3738 => 1407,  3733 => 1405,  3730 => 1404,  3728 => 1403,  3725 => 1402,  3720 => 1401,  3717 => 1400,  3712 => 1398,  3709 => 1397,  3707 => 1396,  3702 => 1394,  3697 => 1392,  3687 => 1387,  3680 => 1385,  3671 => 1381,  3664 => 1379,  3655 => 1375,  3648 => 1373,  3643 => 1371,  3637 => 1367,  3631 => 1366,  3629 => 1365,  3623 => 1364,  3616 => 1362,  3610 => 1358,  3605 => 1357,  3602 => 1356,  3597 => 1354,  3594 => 1353,  3592 => 1352,  3589 => 1351,  3584 => 1350,  3581 => 1349,  3576 => 1347,  3573 => 1346,  3571 => 1345,  3564 => 1343,  3558 => 1339,  3553 => 1338,  3550 => 1337,  3545 => 1335,  3542 => 1334,  3540 => 1333,  3537 => 1332,  3532 => 1331,  3529 => 1330,  3524 => 1328,  3521 => 1327,  3519 => 1326,  3512 => 1324,  3506 => 1320,  3501 => 1319,  3498 => 1318,  3493 => 1316,  3490 => 1315,  3488 => 1314,  3485 => 1313,  3480 => 1312,  3477 => 1311,  3472 => 1309,  3469 => 1308,  3467 => 1307,  3460 => 1305,  3455 => 1303,  3445 => 1298,  3438 => 1296,  3429 => 1292,  3422 => 1290,  3414 => 1285,  3407 => 1283,  3402 => 1280,  3396 => 1277,  3389 => 1273,  3385 => 1271,  3379 => 1268,  3372 => 1264,  3368 => 1262,  3366 => 1261,  3359 => 1259,  3353 => 1255,  3347 => 1254,  3339 => 1252,  3331 => 1250,  3328 => 1249,  3324 => 1248,  3318 => 1245,  3311 => 1240,  3306 => 1239,  3303 => 1238,  3298 => 1236,  3295 => 1235,  3293 => 1234,  3290 => 1233,  3285 => 1232,  3282 => 1231,  3277 => 1229,  3274 => 1228,  3272 => 1227,  3265 => 1225,  3259 => 1221,  3254 => 1220,  3251 => 1219,  3246 => 1217,  3243 => 1216,  3241 => 1215,  3238 => 1214,  3233 => 1213,  3230 => 1212,  3225 => 1210,  3222 => 1209,  3220 => 1208,  3213 => 1206,  3208 => 1204,  3196 => 1197,  3189 => 1195,  3183 => 1191,  3175 => 1189,  3170 => 1188,  3165 => 1187,  3160 => 1185,  3155 => 1184,  3153 => 1183,  3150 => 1182,  3146 => 1181,  3139 => 1179,  3134 => 1177,  3124 => 1172,  3119 => 1170,  3110 => 1166,  3105 => 1164,  3096 => 1160,  3089 => 1158,  3080 => 1154,  3075 => 1152,  3066 => 1148,  3059 => 1146,  3050 => 1142,  3043 => 1140,  3036 => 1135,  3030 => 1132,  3027 => 1131,  3021 => 1128,  3018 => 1127,  3015 => 1126,  3009 => 1123,  3006 => 1122,  3000 => 1119,  2997 => 1118,  2995 => 1117,  2986 => 1113,  2981 => 1111,  2972 => 1105,  2966 => 1104,  2960 => 1103,  2953 => 1099,  2947 => 1098,  2943 => 1097,  2934 => 1090,  2926 => 1088,  2921 => 1087,  2916 => 1086,  2911 => 1084,  2906 => 1083,  2904 => 1082,  2901 => 1081,  2897 => 1080,  2892 => 1078,  2885 => 1073,  2879 => 1072,  2871 => 1069,  2868 => 1068,  2860 => 1065,  2857 => 1064,  2854 => 1063,  2850 => 1062,  2845 => 1060,  2837 => 1057,  2832 => 1055,  2824 => 1049,  2818 => 1048,  2810 => 1045,  2807 => 1044,  2799 => 1041,  2796 => 1040,  2793 => 1039,  2789 => 1038,  2780 => 1034,  2773 => 1029,  2767 => 1028,  2759 => 1025,  2756 => 1024,  2748 => 1021,  2745 => 1020,  2742 => 1019,  2738 => 1018,  2733 => 1016,  2725 => 1013,  2720 => 1011,  2712 => 1005,  2706 => 1004,  2698 => 1001,  2695 => 1000,  2687 => 997,  2684 => 996,  2681 => 995,  2677 => 994,  2672 => 992,  2664 => 989,  2655 => 985,  2648 => 983,  2642 => 979,  2637 => 978,  2634 => 977,  2629 => 975,  2626 => 974,  2624 => 973,  2621 => 972,  2616 => 971,  2613 => 970,  2608 => 968,  2605 => 967,  2603 => 966,  2596 => 964,  2590 => 960,  2585 => 959,  2582 => 958,  2577 => 956,  2574 => 955,  2572 => 954,  2569 => 953,  2564 => 952,  2561 => 951,  2556 => 949,  2553 => 948,  2551 => 947,  2544 => 945,  2537 => 940,  2531 => 939,  2523 => 936,  2520 => 935,  2512 => 932,  2509 => 931,  2506 => 930,  2502 => 929,  2495 => 925,  2490 => 923,  2483 => 918,  2478 => 917,  2475 => 916,  2470 => 914,  2467 => 913,  2465 => 912,  2462 => 911,  2457 => 910,  2454 => 909,  2449 => 907,  2446 => 906,  2444 => 905,  2437 => 903,  2431 => 899,  2426 => 898,  2423 => 897,  2418 => 895,  2415 => 894,  2413 => 893,  2410 => 892,  2405 => 891,  2402 => 890,  2397 => 888,  2394 => 887,  2392 => 886,  2385 => 884,  2379 => 880,  2374 => 879,  2371 => 878,  2366 => 876,  2363 => 875,  2361 => 874,  2358 => 873,  2353 => 872,  2350 => 871,  2345 => 869,  2342 => 868,  2340 => 867,  2333 => 865,  2328 => 863,  2320 => 857,  2314 => 856,  2306 => 853,  2303 => 852,  2295 => 849,  2292 => 848,  2289 => 847,  2285 => 846,  2280 => 844,  2272 => 841,  2265 => 836,  2259 => 835,  2251 => 832,  2248 => 831,  2240 => 828,  2237 => 827,  2234 => 826,  2230 => 825,  2221 => 821,  2216 => 818,  2210 => 817,  2208 => 816,  2205 => 815,  2197 => 813,  2192 => 812,  2187 => 811,  2182 => 809,  2177 => 808,  2175 => 807,  2172 => 806,  2168 => 805,  2161 => 803,  2156 => 800,  2150 => 799,  2148 => 798,  2145 => 797,  2137 => 795,  2132 => 794,  2127 => 793,  2122 => 791,  2117 => 790,  2115 => 789,  2112 => 788,  2108 => 787,  2101 => 785,  2094 => 780,  2088 => 779,  2080 => 776,  2077 => 775,  2069 => 772,  2066 => 771,  2063 => 770,  2059 => 769,  2050 => 765,  2043 => 760,  2037 => 759,  2029 => 756,  2026 => 755,  2018 => 752,  2015 => 751,  2012 => 750,  2008 => 749,  2003 => 747,  1995 => 744,  1989 => 740,  1984 => 739,  1981 => 738,  1976 => 736,  1973 => 735,  1971 => 734,  1968 => 733,  1963 => 732,  1960 => 731,  1955 => 729,  1952 => 728,  1950 => 727,  1943 => 725,  1937 => 721,  1932 => 720,  1929 => 719,  1924 => 717,  1921 => 716,  1919 => 715,  1916 => 714,  1911 => 713,  1908 => 712,  1903 => 710,  1900 => 709,  1898 => 708,  1891 => 706,  1882 => 702,  1875 => 700,  1870 => 698,  1862 => 692,  1856 => 691,  1848 => 688,  1845 => 687,  1837 => 684,  1834 => 683,  1831 => 682,  1827 => 681,  1822 => 679,  1814 => 676,  1809 => 673,  1803 => 672,  1801 => 671,  1795 => 670,  1788 => 668,  1782 => 664,  1777 => 663,  1774 => 662,  1769 => 660,  1766 => 659,  1764 => 658,  1761 => 657,  1756 => 656,  1753 => 655,  1748 => 653,  1745 => 652,  1743 => 651,  1736 => 649,  1731 => 646,  1725 => 645,  1722 => 644,  1714 => 641,  1709 => 640,  1704 => 639,  1699 => 637,  1694 => 636,  1692 => 635,  1689 => 634,  1685 => 633,  1679 => 632,  1672 => 627,  1666 => 626,  1658 => 623,  1655 => 622,  1647 => 619,  1644 => 618,  1641 => 617,  1637 => 616,  1628 => 612,  1622 => 608,  1617 => 607,  1614 => 606,  1609 => 604,  1606 => 603,  1604 => 602,  1601 => 601,  1596 => 600,  1593 => 599,  1588 => 597,  1585 => 596,  1583 => 595,  1578 => 593,  1572 => 589,  1567 => 588,  1564 => 587,  1559 => 585,  1556 => 584,  1554 => 583,  1551 => 582,  1546 => 581,  1543 => 580,  1538 => 578,  1535 => 577,  1533 => 576,  1526 => 574,  1520 => 570,  1515 => 569,  1512 => 568,  1507 => 566,  1504 => 565,  1502 => 564,  1499 => 563,  1494 => 562,  1491 => 561,  1486 => 559,  1483 => 558,  1481 => 557,  1474 => 555,  1469 => 553,  1461 => 547,  1455 => 544,  1452 => 543,  1446 => 540,  1443 => 539,  1440 => 538,  1434 => 535,  1431 => 534,  1425 => 531,  1422 => 530,  1420 => 529,  1415 => 527,  1407 => 524,  1400 => 519,  1394 => 516,  1391 => 515,  1385 => 512,  1382 => 511,  1379 => 510,  1373 => 507,  1370 => 506,  1364 => 503,  1361 => 502,  1359 => 501,  1354 => 499,  1346 => 496,  1340 => 492,  1335 => 491,  1332 => 490,  1327 => 488,  1324 => 487,  1322 => 486,  1319 => 485,  1314 => 484,  1311 => 483,  1306 => 481,  1303 => 480,  1301 => 479,  1296 => 477,  1291 => 475,  1285 => 471,  1279 => 470,  1277 => 469,  1271 => 468,  1264 => 466,  1259 => 463,  1253 => 462,  1251 => 461,  1245 => 460,  1238 => 458,  1233 => 456,  1226 => 451,  1221 => 450,  1218 => 449,  1213 => 447,  1210 => 446,  1208 => 445,  1205 => 444,  1200 => 443,  1197 => 442,  1192 => 440,  1189 => 439,  1187 => 438,  1180 => 436,  1174 => 432,  1169 => 431,  1166 => 430,  1161 => 428,  1158 => 427,  1156 => 426,  1153 => 425,  1148 => 424,  1145 => 423,  1140 => 421,  1137 => 420,  1135 => 419,  1128 => 417,  1123 => 415,  1117 => 411,  1111 => 410,  1109 => 409,  1103 => 408,  1096 => 406,  1091 => 403,  1085 => 402,  1083 => 401,  1077 => 400,  1070 => 398,  1064 => 394,  1059 => 393,  1056 => 392,  1051 => 390,  1048 => 389,  1046 => 388,  1043 => 387,  1038 => 386,  1035 => 385,  1030 => 383,  1027 => 382,  1025 => 381,  1018 => 379,  1013 => 377,  1004 => 370,  998 => 369,  990 => 366,  987 => 365,  979 => 362,  976 => 361,  973 => 360,  969 => 359,  962 => 355,  955 => 350,  949 => 349,  941 => 346,  938 => 345,  930 => 342,  927 => 341,  924 => 340,  920 => 339,  913 => 335,  907 => 331,  901 => 330,  893 => 328,  885 => 326,  882 => 325,  878 => 324,  872 => 321,  866 => 317,  861 => 316,  858 => 315,  853 => 313,  850 => 312,  848 => 311,  845 => 310,  840 => 309,  837 => 308,  832 => 306,  829 => 305,  827 => 304,  820 => 302,  813 => 297,  807 => 296,  799 => 293,  796 => 292,  788 => 289,  785 => 288,  782 => 287,  778 => 286,  769 => 282,  762 => 277,  756 => 276,  748 => 273,  745 => 272,  737 => 269,  734 => 268,  731 => 267,  727 => 266,  720 => 262,  713 => 257,  707 => 256,  699 => 253,  696 => 252,  688 => 249,  685 => 248,  682 => 247,  678 => 246,  671 => 242,  665 => 238,  659 => 237,  651 => 235,  643 => 233,  640 => 232,  636 => 231,  630 => 228,  620 => 221,  613 => 216,  607 => 215,  599 => 212,  596 => 211,  588 => 208,  585 => 207,  582 => 206,  578 => 205,  571 => 201,  566 => 198,  561 => 196,  553 => 194,  548 => 193,  543 => 192,  538 => 190,  533 => 189,  531 => 188,  528 => 187,  524 => 186,  518 => 185,  515 => 184,  513 => 183,  505 => 180,  498 => 178,  489 => 174,  482 => 172,  475 => 168,  469 => 167,  465 => 166,  456 => 162,  451 => 160,  446 => 157,  440 => 156,  438 => 155,  432 => 154,  427 => 152,  422 => 149,  416 => 148,  414 => 147,  408 => 146,  403 => 144,  394 => 140,  387 => 138,  382 => 135,  376 => 134,  374 => 133,  368 => 132,  363 => 130,  358 => 127,  352 => 126,  350 => 125,  344 => 124,  339 => 122,  334 => 119,  328 => 118,  326 => 117,  320 => 116,  315 => 114,  306 => 107,  300 => 106,  292 => 103,  289 => 102,  281 => 99,  278 => 98,  275 => 97,  271 => 96,  264 => 92,  256 => 86,  250 => 85,  242 => 82,  239 => 81,  231 => 78,  228 => 77,  225 => 76,  221 => 75,  214 => 71,  205 => 67,  200 => 65,  191 => 61,  186 => 59,  181 => 56,  175 => 55,  173 => 54,  167 => 53,  162 => 51,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  130 => 40,  126 => 39,  118 => 34,  112 => 31,  108 => 29,  100 => 25,  97 => 24,  89 => 20,  87 => 19,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "setting/setting.twig", "");
    }
}
