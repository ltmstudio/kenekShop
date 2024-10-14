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

/* extension/module/webp.twig */
class __TwigTemplate_ec646c5cd92f15e4b83c1e610b20c109dae35703a3ac27a16cade253b62a9c5f extends \Twig\Template
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
        <button type=\"button\" class=\"btn btn-warning\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_refresh"] ?? null);
        echo "\" id=\"button-refresh\"><i class=\"fa fa-refresh\"></i></button>
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
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-general\">
            <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 38
        echo ($context["text_alert"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>

\t\t\t\t<input type=\"hidden\" name=\"apply\" id=\"apply\" value=\"0\">
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 44
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_webp_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 47
        if (($context["module_webp_status"] ?? null)) {
            // line 48
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 49
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 51
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 52
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 54
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quality\">";
        // line 58
        echo ($context["entry_quality"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group\">
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default value-control\" type=\"button\" data-action=\"minus\"><i class=\"fa fa-minus\"></i></button>
                    </span>
                    <input type=\"number\" name=\"module_webp_quality\" value=\"";
        // line 64
        echo ($context["module_webp_quality"] ?? null);
        echo "\" min=\"1\" max=\"100\" placeholder=\"";
        echo ($context["entry_quality"] ?? null);
        echo "\" class=\"form-control text-center\" />
                    <span class=\"input-group-btn\">
                      <button class=\"btn btn-default value-control\" type=\"button\" data-action=\"plus\"><i class=\"fa fa-plus\"></i></button>
                    </span>                    
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\">
  \$(document).on('click','.value-control',function(){
    var action = \$(this).attr('data-action');
    var value  = parseFloat(\$('input[name=\\'module_webp_quality\\']').val());
    if (action == \"plus\" && value < 100) {
      value++;
    }
    if (action == \"minus\" && value > 1) {
      value--;
    }
    \$('input[name=\\'module_webp_quality\\']').val(value);
  });

  \$('#button-refresh').on('click', function() {
      \$.ajax({
        url: 'index.php?route=extension/module/webp/refresh&user_token=";
        // line 92
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
          \$('#button-refresh').button('loading');
        },
        complete: function() {
          \$('#button-refresh').button('reset');
        },
      });
  });
  </script>
</div>
";
        // line 105
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/webp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 105,  210 => 92,  177 => 64,  168 => 58,  162 => 54,  157 => 52,  152 => 51,  147 => 49,  142 => 48,  140 => 47,  134 => 44,  125 => 38,  121 => 37,  114 => 33,  107 => 29,  103 => 27,  95 => 23,  93 => 22,  87 => 18,  76 => 16,  72 => 15,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/webp.twig", "");
    }
}
