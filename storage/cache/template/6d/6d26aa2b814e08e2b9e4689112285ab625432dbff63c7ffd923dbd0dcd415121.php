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

/* localisation/tax_class_form.twig */
class __TwigTemplate_5ae10da7ea64a2265c753819b9e6dbbd923d279442bbeb444854d76511069571 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-tax-class\" data-toggle=\"tooltip\" title=\"";
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
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\" id=\"form-tax-class\">
          <fieldset>
            <legend>";
        // line 31
        echo ($context["text_tax_class"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-title\">";
        // line 33
        echo ($context["entry_title"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 35
        echo ($context["title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                ";
        // line 36
        if (($context["error_title"] ?? null)) {
            // line 37
            echo "                <div class=\"text-danger\">";
            echo ($context["error_title"] ?? null);
            echo "</div>
                ";
        }
        // line 38
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-description\">";
        // line 41
        echo ($context["entry_description"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"description\" value=\"";
        // line 43
        echo ($context["description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-description\" class=\"form-control\" />
                ";
        // line 44
        if (($context["error_description"] ?? null)) {
            // line 45
            echo "                <div class=\"text-danger\">";
            echo ($context["error_description"] ?? null);
            echo "</div>
                ";
        }
        // line 46
        echo " </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 50
        echo ($context["text_tax_rate"] ?? null);
        echo "</legend>
            <table id=\"tax-rule\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 54
        echo ($context["entry_rate"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 55
        echo ($context["entry_based"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 56
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 62
        $context["tax_rule_row"] = 0;
        // line 63
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rule"]) {
            // line 64
            echo "              <tr id=\"tax-rule-row";
            echo ($context["tax_rule_row"] ?? null);
            echo "\">
                <td class=\"text-left\"><select name=\"tax_rule[";
            // line 65
            echo ($context["tax_rule_row"] ?? null);
            echo "][tax_rate_id]\" class=\"form-control\">
                    
                    
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
                // line 69
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 69) == twig_get_attribute($this->env, $this->source, $context["tax_rule"], "tax_rate_id", [], "any", false, false, false, 69))) {
                    // line 70
                    echo "                    
                    
                    <option value=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 72);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 72);
                    echo "</option>
                    
                    
                    ";
                } else {
                    // line 76
                    echo "                    
                    
                    <option value=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 78);
                    echo "</option>
                    
                    
                    ";
                }
                // line 82
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                  
                  
                  </select></td>
                <td class=\"text-left\"><select name=\"tax_rule[";
            // line 86
            echo ($context["tax_rule_row"] ?? null);
            echo "][based]\" class=\"form-control\">
                    
                    
                    ";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 89) == "shipping")) {
                // line 90
                echo "                    
                    
                    <option value=\"shipping\" selected=\"selected\">";
                // line 92
                echo ($context["text_shipping"] ?? null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 96
                echo "                    
                    
                    <option value=\"shipping\">";
                // line 98
                echo ($context["text_shipping"] ?? null);
                echo "</option>
                    
                    
                    ";
            }
            // line 102
            echo "                     ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 102) == "payment")) {
                // line 103
                echo "                    
                    
                    <option value=\"payment\" selected=\"selected\">";
                // line 105
                echo ($context["text_payment"] ?? null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 109
                echo "                    
                    
                    <option value=\"payment\">";
                // line 111
                echo ($context["text_payment"] ?? null);
                echo "</option>
                    
                    
                    ";
            }
            // line 115
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_rule"], "based", [], "any", false, false, false, 115) == "store")) {
                // line 116
                echo "                    
                    
                    <option value=\"store\" selected=\"selected\">";
                // line 118
                echo ($context["text_store"] ?? null);
                echo "</option>
                    
                    
                    ";
            } else {
                // line 122
                echo "                    
                    
                    <option value=\"store\">";
                // line 124
                echo ($context["text_store"] ?? null);
                echo "</option>
                    
                    
                    ";
            }
            // line 128
            echo "                  
                  
                  </select></td>
                <td class=\"text-left\"><input type=\"text\" name=\"tax_rule[";
            // line 131
            echo ($context["tax_rule_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_rule"], "priority", [], "any", false, false, false, 131);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#tax-rule-row";
            // line 132
            echo ($context["tax_rule_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 134
            $context["tax_rule_row"] = (($context["tax_rule_row"] ?? null) + 1);
            // line 135
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRule();\" data-toggle=\"tooltip\" title=\"";
        // line 141
        echo ($context["button_rule_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var tax_rule_row = ";
        // line 151
        echo ($context["tax_rule_row"] ?? null);
        echo ";

function addRule() {
\thtml  = '<tr id=\"tax-rule-row' + tax_rule_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"tax_rule[' + tax_rule_row + '][tax_rate_id]\" class=\"form-control\">';
    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_rates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_rate"]) {
            // line 157
            echo "    html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tax_rate"], "tax_rate_id", [], "any", false, false, false, 157);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tax_rate"], "name", [], "any", false, false, false, 157), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    html += '  </select></td>';
\thtml += '  <td class=\"text-left\"><select name=\"tax_rule[' + tax_rule_row + '][based]\" class=\"form-control\">';
    html += '    <option value=\"shipping\">";
        // line 161
        echo ($context["text_shipping"] ?? null);
        echo "</option>';
    html += '    <option value=\"payment\">";
        // line 162
        echo ($context["text_payment"] ?? null);
        echo "</option>';
    html += '    <option value=\"store\">";
        // line 163
        echo ($context["text_store"] ?? null);
        echo "</option>';
    html += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"tax_rule[' + tax_rule_row + '][priority]\" value=\"\" placeholder=\"";
        // line 165
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#tax-rule-row' + tax_rule_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 166
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#tax-rule tbody').append(html);
\t
\ttax_rule_row++;
}
//--></script></div>
";
        // line 174
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "localisation/tax_class_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 174,  424 => 166,  420 => 165,  415 => 163,  411 => 162,  407 => 161,  403 => 159,  392 => 157,  388 => 156,  380 => 151,  367 => 141,  360 => 136,  354 => 135,  352 => 134,  345 => 132,  337 => 131,  332 => 128,  325 => 124,  321 => 122,  314 => 118,  310 => 116,  307 => 115,  300 => 111,  296 => 109,  289 => 105,  285 => 103,  282 => 102,  275 => 98,  271 => 96,  264 => 92,  260 => 90,  258 => 89,  252 => 86,  247 => 83,  241 => 82,  232 => 78,  228 => 76,  219 => 72,  215 => 70,  212 => 69,  208 => 68,  202 => 65,  197 => 64,  192 => 63,  190 => 62,  181 => 56,  177 => 55,  173 => 54,  166 => 50,  160 => 46,  154 => 45,  152 => 44,  146 => 43,  141 => 41,  136 => 38,  130 => 37,  128 => 36,  122 => 35,  117 => 33,  112 => 31,  107 => 29,  101 => 26,  97 => 24,  89 => 20,  87 => 19,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "localisation/tax_class_form.twig", "");
    }
}
