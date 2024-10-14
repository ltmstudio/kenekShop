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
class __TwigTemplate_6ca1c6507fb8d6f3e10431b826fc7609b92e1e8eb0ca6a9bd2daf89afd4dfb95 extends \Twig\Template
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
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 38
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 39
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 41
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 43
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 44
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 45
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 46
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 47
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 53
            echo ($context["search"] ?? null);
            echo "
    </div>

";
            // line 56
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
            // line 110
            echo "    <ul class=\"nav navbar-nav navbar-right\">
";
            // line 111
            if (array_key_exists("storage_cleaner", $context)) {
                echo " 
\t <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"btn btn-warning\"><i class=\"fa fa-eraser\"></i> ";
                // line 112
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
                // line 118
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
                // line 128
                echo ($context["text_cache_system"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'system');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 131
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
                // line 141
                echo ($context["text_cache_modification"] ?? null);
                echo "
           </td>
           <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 144
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
                // line 155
                echo ($context["text_cache_image"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('cache', 'image');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 158
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
                // line 168
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
                // line 178
                echo ($context["text_log_error"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'error');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 181
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
                // line 192
                echo ($context["text_log_modification"] ?? null);
                echo "
          </td>
          <td class=\"text-right\">
             <a><button onclick=\"clearOption('log', 'modification');\" type=\"button\" data-loading-text=\"<i class='fa fa-spinner'></i>\" data-toggle=\"tooltip\" title=\"";
                // line 195
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
                // line 206
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
            // line 214
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
            // line 216
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 218
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 220
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 220);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 220);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">liveopencart.ru</li>
\t\t  <li><a href=\"https://liveopencart.ru/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 224
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://liveopencart.ru/docs-opencart3/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 225
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://forum.liveopencart.ru/?utm_source=ocstore3&utm_medium=admin&utm_campaign=3037\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 226
            echo ($context["text_support"] ?? null);
            echo "</a></li>
\t\t  <li class=\"dropdown-header\">";
            // line 227
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 228
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://docs.ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 229
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://opencartforum.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 230
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 233
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 235
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
        return array (  524 => 235,  516 => 233,  510 => 230,  506 => 229,  502 => 228,  498 => 227,  494 => 226,  490 => 225,  486 => 224,  482 => 222,  471 => 220,  467 => 219,  463 => 218,  456 => 216,  440 => 214,  429 => 206,  409 => 195,  403 => 192,  383 => 181,  377 => 178,  364 => 168,  345 => 158,  339 => 155,  319 => 144,  313 => 141,  294 => 131,  288 => 128,  275 => 118,  264 => 112,  260 => 111,  257 => 110,  200 => 56,  194 => 53,  183 => 47,  177 => 46,  171 => 45,  165 => 44,  159 => 43,  152 => 41,  147 => 39,  139 => 38,  132 => 33,  123 => 31,  119 => 30,  116 => 29,  105 => 27,  101 => 26,  88 => 24,  84 => 23,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
