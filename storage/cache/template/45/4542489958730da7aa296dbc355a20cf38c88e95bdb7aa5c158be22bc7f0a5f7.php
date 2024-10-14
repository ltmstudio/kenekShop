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

/* extension/module/slideshow.twig */
class __TwigTemplate_24415f23ceb9fa32b3443a8b373e6911068c4bc3edcceca2934db4c248030ecd extends \Twig\Template
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
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
          <div class=\"form-group\">
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
            <label class=\"col-sm-2 control-label\" for=\"input-banner\">";
        // line 44
        echo ($context["entry_banner"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"banner_id\" id=\"input-banner\" class=\"form-control\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 48
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 48) == ($context["banner_id"] ?? null))) {
                // line 49
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 49);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 49);
                echo "</option>
                ";
            } else {
                // line 51
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 51);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 51);
                echo "</option>
                ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 58
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 60
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 61
        if (($context["error_width"] ?? null)) {
            // line 62
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 64
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 67
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 69
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 70
        if (($context["error_height"] ?? null)) {
            // line 71
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 73
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 76
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 79
        if (($context["status"] ?? null)) {
            // line 80
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 81
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 83
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 84
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 86
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 94,  257 => 86,  252 => 84,  247 => 83,  242 => 81,  237 => 80,  235 => 79,  229 => 76,  224 => 73,  218 => 71,  216 => 70,  210 => 69,  205 => 67,  200 => 64,  194 => 62,  192 => 61,  186 => 60,  181 => 58,  175 => 54,  169 => 53,  161 => 51,  153 => 49,  150 => 48,  146 => 47,  140 => 44,  135 => 41,  129 => 39,  127 => 38,  121 => 37,  116 => 35,  108 => 30,  102 => 27,  98 => 25,  90 => 21,  88 => 20,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/slideshow.twig", "");
    }
}
