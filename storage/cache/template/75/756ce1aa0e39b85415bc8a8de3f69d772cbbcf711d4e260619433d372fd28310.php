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

/* user/user_group_form.twig */
class __TwigTemplate_fcbfbc44a5dd9c2cf268e5d5356984861be831903f96e28dd9cadf709711eb92 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-user-group\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user-group\" class=\"form-horizontal\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 35
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 37
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 38
        if (($context["error_name"] ?? null)) {
            // line 39
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 41
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 44
        echo ($context["entry_access"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 48
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 50
            if (twig_in_filter($context["permission"], ($context["access"] ?? null))) {
                // line 51
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 52
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 54
                echo "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 55
                echo $context["permission"];
                echo "
                    ";
            }
            // line 57
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 61
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 64
        echo ($context["entry_modify"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 68
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 70
            if (twig_in_filter($context["permission"], ($context["modify"] ?? null))) {
                // line 71
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" checked=\"checked\" />
                    ";
                // line 72
                echo $context["permission"];
                echo "
                    ";
            } else {
                // line 74
                echo "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                echo $context["permission"];
                echo "\" />
                    ";
                // line 75
                echo $context["permission"];
                echo "
                    ";
            }
            // line 77
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 81
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 84
        echo ($context["help_hide"] ?? null);
        echo "\">";
        echo ($context["entry_hide"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hiden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["hide"]) {
            // line 88
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 90
            if (twig_in_filter($context["hide"], ($context["ishide"] ?? null))) {
                // line 91
                echo "                    <input type=\"checkbox\" name=\"permission[hiden][]\" value=\"";
                echo $context["hide"];
                echo "\" checked=\"checked\" />
                    ";
                // line 92
                echo $context["hide"];
                echo "
                    ";
            } else {
                // line 94
                echo "                    <input type=\"checkbox\" name=\"permission[hiden][]\" value=\"";
                echo $context["hide"];
                echo "\" />
                    ";
                // line 95
                echo $context["hide"];
                echo "
                    ";
            }
            // line 97
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "              </div>
\t\t\t  <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 101
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
\t\t\t</div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "user/user_group_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 108,  299 => 101,  296 => 100,  288 => 97,  283 => 95,  278 => 94,  273 => 92,  268 => 91,  266 => 90,  262 => 88,  258 => 87,  250 => 84,  242 => 81,  239 => 80,  231 => 77,  226 => 75,  221 => 74,  216 => 72,  211 => 71,  209 => 70,  205 => 68,  201 => 67,  195 => 64,  187 => 61,  184 => 60,  176 => 57,  171 => 55,  166 => 54,  161 => 52,  156 => 51,  154 => 50,  150 => 48,  146 => 47,  140 => 44,  135 => 41,  129 => 39,  127 => 38,  121 => 37,  116 => 35,  108 => 30,  102 => 27,  98 => 25,  90 => 21,  88 => 20,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user_group_form.twig", "");
    }
}
