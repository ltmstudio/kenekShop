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

/* extension/module/cache_cleaner.twig */
class __TwigTemplate_a528e02ab54f91679981a3df5171e591721240cadff6c6eec4273179fa2fbda5 extends \Twig\Template
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
        echo "
";
        // line 2
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>

\t\t\t\t<button onclick=\"\$('#content #apply').attr('value', '1'); \$('#' + \$('#content form').attr('id')).submit();\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-check\"></i></button>
\t\t\t
        <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 16
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 23
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\"><i class=\"fa fa-cog\"></i> ";
        // line 34
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-help\" data-toggle=\"tab\"><i class=\"fa fa-comment\"></i> ";
        // line 35
        echo ($context["tab_help"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-settings\">

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cache_cleaner_status\">";
        // line 43
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 46
        if (($context["cache_cleaner_status"] ?? null)) {
            echo " 
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"0\" autocomplete=\"off\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 48
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 49
            echo " 
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            // line 50
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_status\" value=\"1\" autocomplete=\"off\">";
            // line 51
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        }
        // line 52
        echo " 
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cache_cleaner_size\">";
        // line 57
        echo ($context["entry_size"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\" data-toggle=\"buttons\">
                    ";
        // line 60
        if (($context["cache_cleaner_size"] ?? null)) {
            echo " 
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"0\" autocomplete=\"off\">";
            // line 61
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"1\" autocomplete=\"off\" checked=\"checked\">";
            // line 62
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        } else {
            // line 63
            echo " 
                    <label class=\"btn btn-info active\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"0\" autocomplete=\"off\" checked=\"checked\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</label>
                    <label class=\"btn btn-info\"><input type=\"radio\" name=\"cache_cleaner_size\" value=\"1\" autocomplete=\"off\">";
            // line 65
            echo ($context["text_enabled"] ?? null);
            echo "</label>
                    ";
        }
        // line 66
        echo " 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 77
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/cache_cleaner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 77,  205 => 66,  200 => 65,  196 => 64,  193 => 63,  188 => 62,  184 => 61,  180 => 60,  174 => 57,  167 => 52,  162 => 51,  158 => 50,  155 => 49,  150 => 48,  146 => 47,  142 => 46,  136 => 43,  125 => 35,  121 => 34,  116 => 32,  110 => 29,  105 => 26,  98 => 23,  94 => 22,  87 => 17,  77 => 16,  71 => 15,  66 => 13,  59 => 11,  54 => 9,  49 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/cache_cleaner.twig", "");
    }
}
