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

/* extension/module/newsletter.twig */
class __TwigTemplate_9ac71d191e8084d82214ecdad350c8572c7cbee05e7ce89d92542acdfd32fb40 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-html\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-html\" class=\"form-horizontal\">

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
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\" id=\"language\">
              ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "              <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 46);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 46);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 46);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 46);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
            <div class=\"tab-content\">
              ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 51
            echo "              <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-success_message";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_success_message"] ?? null);
            echo "\">";
            echo ($context["entry_success_message"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_description[";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "][success_message]\" placeholder=\"";
            echo ($context["entry_success_message"] ?? null);
            echo "\" id=\"input-success_message";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["success_message"] ?? null) : null);
            echo "\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_title"] ?? null);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][title]\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-heading";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" value=\"";
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["module_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["title"] ?? null) : null);
            echo "\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_description"] ?? null);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"module_description[";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\" class=\"form-control\">";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["module_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["description"] ?? null) : null);
            echo "</textarea>
                  </div>
                </div>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 76
        echo ($context["entry_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                ";
        // line 79
        if ((($context["type"] ?? null) == "module")) {
            // line 80
            echo "                <option value=\"module\" selected=\"selected\">";
            echo ($context["text_module_type"] ?? null);
            echo "</option>
                ";
        } else {
            // line 82
            echo "                <option value=\"module\">";
            echo ($context["text_module_type"] ?? null);
            echo "</option>
                ";
        }
        // line 83
        echo " 
                ";
        // line 84
        if ((($context["type"] ?? null) == "popup")) {
            // line 85
            echo "                <option value=\"popup\" selected=\"selected\">";
            echo ($context["text_popup"] ?? null);
            echo "</option>
                ";
        } else {
            // line 87
            echo "                <option value=\"popup\">";
            echo ($context["text_popup"] ?? null);
            echo "</option>
                ";
        }
        // line 88
        echo " 
              </select>
            </div>
          </div>
          
          <div id=\"popup-settings\" style=\"display:";
        // line 93
        if ((($context["type"] ?? null) == "popup")) {
            echo " ";
            echo "block";
            echo " ";
        } else {
            echo "   ";
            echo "none";
            echo " ";
        }
        echo " \">
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-image\"><span data-toggle=\"tooltip\" title=\"";
        // line 96
        echo ($context["help_image"] ?? null);
        echo "\">";
        echo ($context["entry_image"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 98
        echo ($context["icon"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                <input type=\"hidden\" name=\"image\" value=\"";
        // line 99
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
            </div>
          </div>
          
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-delay\"><span data-toggle=\"tooltip\" title=\"";
        // line 106
        echo ($context["help_delay"] ?? null);
        echo "\">";
        echo ($context["entry_delay"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"delay\" value=\"";
        // line 108
        echo ($context["delay"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_delay"] ?? null);
        echo "\" id=\"input-delay\" class=\"form-control\" />
            </div>
          </div>   
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 113
        echo ($context["help_only_once"] ?? null);
        echo "\">";
        echo ($context["entry_only_once"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"only_once\" id=\"input-only_once\" class=\"form-control\">
                ";
        // line 116
        if (($context["only_once"] ?? null)) {
            // line 117
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 120
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 121
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 122
        echo " 
              </select>
            </div>
          </div>
          
          
          </div> <!-- Popup ends -->
          
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 132
        echo ($context["entry_unsubscribe"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"unsubscribe\" id=\"input-unsubscribe\" class=\"form-control\">
                ";
        // line 135
        if (($context["unsubscribe"] ?? null)) {
            // line 136
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 137
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 139
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 140
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 141
        echo " 
              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 147
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 150
        if (($context["status"] ?? null)) {
            // line 151
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 154
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 155
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 156
        echo " 
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 166
            echo "\$('#input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 166);
            echo "').summernote({
  height: 250,
  toolbar: [
    ['style', ['style']], // no style button
    ['style', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
    ['fontsize', ['fontsize']],
  ['fontname', ['fontname']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']], 
  ['table', ['table']], // no table button
    ['insert', ['picture', 'link', 'video', 'hr']], // no insert buttons
  ['codeview', ['fullscreen', 'codeview']] //no help button
  ]
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--//
\$(document).ready( function() {
  \$('#input-type').bind('change', function (e) { 
    if( \$('#input-type').val() == 'popup') {
      \$('#popup-settings').show();
    }
    else{
      \$('#popup-settings').hide();
    }         
  });
});
//--></script>
</div>
";
        // line 199
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  513 => 199,  494 => 182,  471 => 166,  467 => 165,  456 => 156,  451 => 155,  446 => 154,  441 => 152,  436 => 151,  434 => 150,  428 => 147,  420 => 141,  415 => 140,  410 => 139,  405 => 137,  400 => 136,  398 => 135,  392 => 132,  380 => 122,  375 => 121,  370 => 120,  365 => 118,  360 => 117,  358 => 116,  350 => 113,  340 => 108,  333 => 106,  323 => 99,  317 => 98,  310 => 96,  296 => 93,  289 => 88,  283 => 87,  277 => 85,  275 => 84,  272 => 83,  266 => 82,  260 => 80,  258 => 79,  252 => 76,  246 => 72,  229 => 67,  220 => 65,  207 => 61,  198 => 59,  185 => 55,  176 => 53,  170 => 51,  166 => 50,  162 => 48,  145 => 46,  141 => 45,  135 => 41,  129 => 39,  127 => 38,  121 => 37,  116 => 35,  108 => 30,  102 => 27,  98 => 25,  90 => 21,  88 => 20,  82 => 16,  71 => 14,  67 => 13,  62 => 11,  56 => 10,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/newsletter.twig", "");
    }
}
