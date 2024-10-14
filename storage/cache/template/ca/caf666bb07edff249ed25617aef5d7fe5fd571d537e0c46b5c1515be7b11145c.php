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

/* design/layout_form.twig */
class __TwigTemplate_c0b358642436b0c4ac5a28599c8b98df9faa825e96cdc0266671a656672fdc62 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
          <fieldset>
            <legend>";
        // line 35
        echo ($context["text_route"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 37
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 39
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 40
        if (($context["error_name"] ?? null)) {
            // line 41
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 43
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 48
        echo ($context["entry_store"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 49
        echo ($context["entry_route"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 54
        $context["route_row"] = 0;
        // line 55
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 56
            echo "                <tr id=\"route-row";
            echo ($context["route_row"] ?? null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 57
            echo ($context["route_row"] ?? null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 58
            echo ($context["text_default"] ?? null);
            echo "</option>
                      ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 60
                echo "                      ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 60))) {
                    // line 61
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 61);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 61);
                    echo "</option>
                      ";
                } else {
                    // line 63
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 63);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 63);
                    echo "</option>
                      ";
                }
                // line 65
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 67
            echo ($context["route_row"] ?? null);
            echo "][route]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 67);
            echo "\" placeholder=\"";
            echo ($context["entry_route"] ?? null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 68
            echo ($context["route_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 70
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 71
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["button_route_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 82
        echo ($context["text_module"] ?? null);
        echo "</legend>
            ";
        // line 83
        $context["module_row"] = 0;
        // line 84
        echo "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 89
        echo ($context["text_column_left"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 94
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 94) == "column_left")) {
                // line 95
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 97
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 99
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 99);
                    echo "\">
                            ";
                    // line 100
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 100)) {
                        // line 101
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 101) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 101))) {
                            // line 102
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 102);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 102);
                            echo "</option>
                            ";
                        } else {
                            // line 104
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 104);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 104);
                            echo "</option>
                            ";
                        }
                        // line 106
                        echo "                            ";
                    } else {
                        // line 107
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 107));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 108
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 108) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 108))) {
                                // line 109
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 109);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 109);
                                echo "</option>
                            ";
                            } else {
                                // line 111
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 111);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 111);
                                echo "</option>
                            ";
                            }
                            // line 113
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo "                            ";
                    }
                    // line 115
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 118
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 118);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 119
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 119);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 120);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 121
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 125
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 126
                echo "                    ";
            }
            // line 127
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 135
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 135);
            echo "\">
                            ";
            // line 136
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 136)) {
                // line 137
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 137);
                echo "</option>
                            ";
            } else {
                // line 139
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 139));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 140
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 140);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 140);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                            ";
            }
            // line 143
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 147
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 158
        echo ($context["text_content_top"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 163
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 163) == "content_top")) {
                // line 164
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 166
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 168
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 168);
                    echo "\">
                            ";
                    // line 169
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 169)) {
                        // line 170
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 170) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 170))) {
                            // line 171
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 171);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 171);
                            echo "</option>
                            ";
                        } else {
                            // line 173
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 173);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 173);
                            echo "</option>
                            ";
                        }
                        // line 175
                        echo "                            ";
                    } else {
                        // line 176
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 176));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 177
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 177) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 177))) {
                                // line 178
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 178);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 178);
                                echo "</option>
                            ";
                            } else {
                                // line 180
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 180);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 180);
                                echo "</option>
                            ";
                            }
                            // line 182
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 183
                        echo "                            ";
                    }
                    // line 184
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 187
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 187);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 188
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 188);
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 189);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 190
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 194
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 195
                echo "                    ";
            }
            // line 196
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 204
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 204);
            echo "\">
                            ";
            // line 205
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 205)) {
                // line 206
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 206);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 206);
                echo "</option>
                            ";
            } else {
                // line 208
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 208));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 209
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 209);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 209);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "                            ";
            }
            // line 212
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 216
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 225
        echo ($context["text_content_bottom"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 230
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 230) == "content_bottom")) {
                // line 231
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 233
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 235
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 235);
                    echo "\">
                            ";
                    // line 236
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 236)) {
                        // line 237
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 237) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 237))) {
                            // line 238
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 238);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 238);
                            echo "</option>
                            ";
                        } else {
                            // line 240
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 240);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 240);
                            echo "</option>
                            ";
                        }
                        // line 242
                        echo "                            ";
                    } else {
                        // line 243
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 243));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 244
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 244) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 244))) {
                                // line 245
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 245);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 245);
                                echo "</option>
                            ";
                            } else {
                                // line 247
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 247);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 247);
                                echo "</option>
                            ";
                            }
                            // line 249
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 250
                        echo "                            ";
                    }
                    // line 251
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 254
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 254);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 255
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 255);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 256);
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 257
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 261
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 262
                echo "                    ";
            }
            // line 263
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 271
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 271);
            echo "\">
                            ";
            // line 272
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 272)) {
                // line 273
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 273);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 273);
                echo "</option>
                            ";
            } else {
                // line 275
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 275));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 276
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 276);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 276);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 278
                echo "                            ";
            }
            // line 279
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 283
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 294
        echo ($context["text_column_right"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 299
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 299) == "column_right")) {
                // line 300
                echo "                    <tr id=\"module-row";
                echo ($context["module_row"] ?? null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 302
                echo ($context["module_row"] ?? null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 303
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 304
                    echo "                            <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 304);
                    echo "\">
                            ";
                    // line 305
                    if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 305)) {
                        // line 306
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 306) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 306))) {
                            // line 307
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 307);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 307);
                            echo "</option>
                            ";
                        } else {
                            // line 309
                            echo "                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 309);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 309);
                            echo "</option>
                            ";
                        }
                        // line 311
                        echo "                            ";
                    } else {
                        // line 312
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 312));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 313
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 313) == twig_get_attribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 313))) {
                                // line 314
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 314);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 314);
                                echo "</option>
                            ";
                            } else {
                                // line 316
                                echo "                            <option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 316);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 316);
                                echo "</option>
                            ";
                            }
                            // line 318
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 319
                        echo "                            ";
                    }
                    // line 320
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 323
                echo ($context["module_row"] ?? null);
                echo "][position]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 323);
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 324
                echo ($context["module_row"] ?? null);
                echo "][sort_order]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 324);
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 325
                echo twig_get_attribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 325);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 326
                echo ($context["module_row"] ?? null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 330
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 331
                echo "                    ";
            }
            // line 332
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 340
            echo "                            <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 340);
            echo "\">
                            ";
            // line 341
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 341)) {
                // line 342
                echo "                            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 342);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 342);
                echo "</option>
                            ";
            } else {
                // line 344
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 344));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 345
                    echo "                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 345);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 345);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "                            ";
            }
            // line 348
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 352
        echo ($context["button_module_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
    // Reorderable drag-and-drop lists
    \$('.row table tbody .input-group-btn').prepend('<span data-toggle=\"tooltip\" title=\"";
        // line 367
        echo ($context["text_move"] ?? null);
        echo "\" class=\"btn btn-success btn-sm handle\"><i class=\"fa fa-hand-grab-o\"></i></span>');
    \$('.row table tbody').sortable({
      handle: '.handle',
      chosenClass: 'handle-active',
      onEnd: function (evt) {
        var orderIndex = 1;
        \$(\$(evt.item).parent().find('input[name*=\"sort_order\"]')).each(function() {
          \$(this).val(orderIndex);
          orderIndex++;
        });
      }
    });
var route_row = ";
        // line 379
        echo ($context["route_row"] ?? null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 384
        echo ($context["text_default"] ?? null);
        echo "</option>';
\t";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 386
            echo "\thtml += '<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 386);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 386), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 389
        echo ($context["entry_route"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 390
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 398
        echo ($context["module_row"] ?? null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 404
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 404), "js");
            echo "\">';
\t";
            // line 405
            if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 405)) {
                // line 406
                echo "\thtml += '      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 406);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 406), "js");
                echo "</option>';
\t";
            } else {
                // line 408
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 408));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 409
                    echo "\thtml += '      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 409);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 409), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 411
                echo "\t";
            }
            // line 412
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><span data-toggle=\"tooltip\" title=\"<?php echo \$text_move; ?>\" class=\"btn btn-success btn-sm handle\"><i class=\"fa fa-hand-grab-o\"></i></span><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 417
        echo ($context["button_edit"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 437
        echo ($context["user_token"] ?? null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 439
        echo ($context["user_token"] ?? null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 446
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1258 => 446,  1248 => 439,  1243 => 437,  1218 => 417,  1213 => 414,  1206 => 412,  1203 => 411,  1192 => 409,  1187 => 408,  1179 => 406,  1177 => 405,  1172 => 404,  1168 => 403,  1160 => 398,  1149 => 390,  1145 => 389,  1142 => 388,  1131 => 386,  1127 => 385,  1123 => 384,  1115 => 379,  1100 => 367,  1082 => 352,  1078 => 350,  1071 => 348,  1068 => 347,  1057 => 345,  1052 => 344,  1044 => 342,  1042 => 341,  1037 => 340,  1033 => 339,  1025 => 333,  1019 => 332,  1016 => 331,  1014 => 330,  1005 => 326,  999 => 325,  993 => 324,  987 => 323,  984 => 322,  977 => 320,  974 => 319,  968 => 318,  960 => 316,  952 => 314,  949 => 313,  944 => 312,  941 => 311,  933 => 309,  925 => 307,  922 => 306,  920 => 305,  915 => 304,  911 => 303,  907 => 302,  901 => 300,  898 => 299,  894 => 298,  887 => 294,  873 => 283,  869 => 281,  862 => 279,  859 => 278,  848 => 276,  843 => 275,  835 => 273,  833 => 272,  828 => 271,  824 => 270,  816 => 264,  810 => 263,  807 => 262,  805 => 261,  796 => 257,  790 => 256,  784 => 255,  778 => 254,  775 => 253,  768 => 251,  765 => 250,  759 => 249,  751 => 247,  743 => 245,  740 => 244,  735 => 243,  732 => 242,  724 => 240,  716 => 238,  713 => 237,  711 => 236,  706 => 235,  702 => 234,  698 => 233,  692 => 231,  689 => 230,  685 => 229,  678 => 225,  666 => 216,  662 => 214,  655 => 212,  652 => 211,  641 => 209,  636 => 208,  628 => 206,  626 => 205,  621 => 204,  617 => 203,  609 => 197,  603 => 196,  600 => 195,  598 => 194,  589 => 190,  583 => 189,  577 => 188,  571 => 187,  568 => 186,  561 => 184,  558 => 183,  552 => 182,  544 => 180,  536 => 178,  533 => 177,  528 => 176,  525 => 175,  517 => 173,  509 => 171,  506 => 170,  504 => 169,  499 => 168,  495 => 167,  491 => 166,  485 => 164,  482 => 163,  478 => 162,  471 => 158,  457 => 147,  453 => 145,  446 => 143,  443 => 142,  432 => 140,  427 => 139,  419 => 137,  417 => 136,  412 => 135,  408 => 134,  400 => 128,  394 => 127,  391 => 126,  389 => 125,  380 => 121,  374 => 120,  368 => 119,  362 => 118,  359 => 117,  352 => 115,  349 => 114,  343 => 113,  335 => 111,  327 => 109,  324 => 108,  319 => 107,  316 => 106,  308 => 104,  300 => 102,  297 => 101,  295 => 100,  290 => 99,  286 => 98,  282 => 97,  276 => 95,  273 => 94,  269 => 93,  262 => 89,  255 => 84,  253 => 83,  249 => 82,  240 => 76,  234 => 72,  228 => 71,  226 => 70,  219 => 68,  211 => 67,  208 => 66,  202 => 65,  194 => 63,  186 => 61,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  166 => 56,  161 => 55,  159 => 54,  151 => 49,  147 => 48,  140 => 43,  134 => 41,  132 => 40,  126 => 39,  121 => 37,  116 => 35,  108 => 30,  102 => 27,  98 => 25,  90 => 21,  88 => 20,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "design/layout_form.twig", "");
    }
}
