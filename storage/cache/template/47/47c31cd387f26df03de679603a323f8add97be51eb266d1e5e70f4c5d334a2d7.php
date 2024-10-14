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

/* common/header.twig */
class __TwigTemplate_a06eab125e1713b84a7977317b6f89e2b96b4cbef5846b56b7d402964a13c4d5 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 24
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 24);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 24);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 24);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 27);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 27);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
<!-- sitecreator True File Manager mod +++++++++++++++++++ -->\t\t\t
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/javascript/sitecreator/jquery-ui-1.12.1/jquery-ui.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/javascript/sitecreator/elfinder/css/elfinder.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"view/javascript/sitecreator/elfinder/css/theme.css\">
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/truefilemanager.js\"></script>
<!-- sitecreator True File Manager mod =================== -->

</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 46
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 47
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 49
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 51
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 52
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 53
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 54
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 55
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 61
            echo ($context["search"] ?? null);
            echo "
    </div>

";
            // line 64
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t\$('.clear-dropdown li, .clear-dropdown a').on('click', function(e) {
\t\te.stopPropagation();
\t});
});

function clearOption(type, key) {
\tvar cache_size = \$('.clear-dropdown').prev('a').children('span').html();
\tvar cache_type = type + '-' + key;

\t\$.ajax({
\t\turl: 'index.php?route=extension/module/cache_cleaner/clear' + type + '&user_token=' + getURLVar('user_token'),
\t\ttype: 'post',
\t\tdata: 'key=' + key,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('.clear-dropdown').prev('a').children('span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t\t\$('#button-' + cache_type + ' span').html('<i class=\\'fa fa-spinner\\'></i>');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.clear-dropdown > .alert-success, .clear-dropdown > .alert-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#button-' + cache_type).closest('li').addClass('bg-success');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-success\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\tif (json['size']) {
\t\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(json['size']['all']);
\t\t\t\t\t\$('#button-' + cache_type + ' span').html(json['size'][cache_type]);
\t\t\t\t}
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('.clear-dropdown').prev('a').children('span').html(cache_size);
\t\t\t\t\$('#button-' + cache_type).closest('li').addClass('bg-danger');
\t\t\t\t\$('.clear-dropdown').append('<div class=\"alert alert-danger\" style=\"margin: 15px 20px 15px 20px; padding: 5px; font-size: 11px;\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t}
\t});
}

function clearAll() {
\tclearOption('cache', 'system');
\tclearOption('cache', 'modification');
\tclearOption('cache', 'image');
\tclearOption('log', 'error');
\tclearOption('log', 'modification');
}
//--></script>";
            }
            // line 118
            echo "    <ul class=\"nav navbar-nav navbar-right\">
";
            // line 119
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
\t <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i> ";
                // line 120
                if (($context["text_cleaner_size"] ?? null)) {
                    echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["all"] ?? null) : null);
                }
                echo "</span></a>
\t  <ul class=\"dropdown-menu dropdown-menu-right clear-dropdown\" style=\"width: 230px;\">
\t\t<table class=\"table\" style=\"margin-bottom: 0;\">
         <tbody>
\t\t  <tr>
           <td>
            <li class=\"dropdown-header\"><b>";
                // line 126
                echo ($context["text_cache"] ?? null);
                echo "</b></li>
           </td>
          </tr>
         </tbody>
        </table>\t
\t<li>\t
\t    <table class=\"table\" style=\"margin-bottom: 1px;\">
         <tbody>
\t\t  <tr>
           <td>
           ";
                // line 136
                echo ($context["text_cache_system"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 139
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-system\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["cache-system"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a> 
           </td>
          </tr>
         </tbody>
        </table></li>
    <li>
\t    <table class=\"table\" style=\"margin-bottom: 1px;\">
         <tbody>
\t\t  <tr>
           <td>
            ";
                // line 149
                echo ($context["text_cache_modification"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 152
                echo ($context["text_refresh"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["cache-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a> 
           </td>
          </tr>
         </tbody>
        </table>\t
\t</li>
\t<li>
\t   <table class=\"table\" style=\"margin-bottom: 1px;\">
        <tbody>
\t\t <tr>
          <td>
          ";
                // line 163
                echo ($context["text_cache_image"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 166
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-cache-image\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["cache-image"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
       </tbody>
      </table>\t
\t</li>
      <table class=\"table\" style=\"margin-bottom: 0;\">
       <tbody>
\t\t<tr>
          <td>
          <li class=\"dropdown-header\"> <b>";
                // line 176
                echo ($context["text_log"] ?? null);
                echo "</b></li>
          </td>
        </tr>
       </tbody>
      </table>\t
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 1px;\">
       <tbody>
\t\t<tr>
          <td>
          ";
                // line 186
                echo ($context["text_log_error"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 189
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-log-error\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["log-error"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
        </tbody>
      </table>\t
\t</li>\t
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 1px;\">
       <tbody>
\t\t<tr>
          <td>
          ";
                // line 200
                echo ($context["text_log_modification"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 203
                echo ($context["text_clear"] ?? null);
                echo "\" class=\"btn btn-warning btn-xs pull-right\" id=\"button-log-modification\">";
                if (($context["text_cleaner_size"] ?? null)) {
                    echo "<span>";
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["text_cleaner_size"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["log-modification"] ?? null) : null);
                    echo "</span>";
                }
                echo " <i class=\"fa fa-eraser\"></i></button></a>
          </td>
         </tr>
        </tbody>
      </table>\t
\t</li>
\t<li>
\t  <table class=\"table\" style=\"margin-bottom: 0;\">
       <tbody>
\t\t<tr>
          <td>
          <a><button onclick=\"clearAll();\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" class=\"btn btn-warning btn-sm btn-block\" id=\"button-clear-all\">";
                // line 214
                echo ($context["text_clear_all"] ?? null);
                echo "</button></a>
          </td>
          </tr>
          </tbody>
       </table>\t
\t</li>
</ul>
\t</li>";
            }
            // line 222
            echo "      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 224
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 226
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 228
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 228);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 228);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">liveopencart.ru</li>
\t\t  <li><a href=\"https://liveopencart.ru/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 232
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://liveopencart.ru/docs-opencart3/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 233
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.liveopencart.ru/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 234
            echo ($context["text_support"] ?? null);
            echo "</a></li>
\t\t  <li class=\"dropdown-header\">";
            // line 235
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 236
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://docs.ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 237
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://opencartforum.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 238
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 241
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 243
        echo "</div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 243,  524 => 241,  518 => 238,  514 => 237,  510 => 236,  506 => 235,  502 => 234,  498 => 233,  494 => 232,  490 => 230,  479 => 228,  475 => 227,  471 => 226,  464 => 224,  448 => 222,  437 => 214,  417 => 203,  411 => 200,  391 => 189,  385 => 186,  372 => 176,  353 => 166,  347 => 163,  327 => 152,  321 => 149,  302 => 139,  296 => 136,  283 => 126,  272 => 120,  268 => 119,  265 => 118,  208 => 64,  202 => 61,  191 => 55,  185 => 54,  179 => 53,  173 => 52,  167 => 51,  160 => 49,  155 => 47,  147 => 46,  132 => 33,  123 => 31,  119 => 30,  116 => 29,  105 => 27,  101 => 26,  88 => 24,  84 => 23,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
