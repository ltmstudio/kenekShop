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

/* default/template/extension/module/newsletter.twig */
class __TwigTemplate_4bf15743c34e893c695eca98c689ad8944c2b634d10869664b033419e79526bd extends \Twig\Template
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
        if ((($context["type"] ?? null) == "module")) {
            // line 2
            echo "<h3 class=\"text-center\" style=\"font-family: 'Inter-Regular'; font-size: 60px\">";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<p class=\"newsletter-desc\">Lorem Ipsum is 
\ttypesetting industry. Lorem Ipsum has been the industry's
\tstandard dummy.</p>
<div class=\"bordered_content padded box newsletter_module col-sm-12\">
";
            // line 7
            echo ($context["html"] ?? null);
            echo "
<div id=\"respond\" class=\"";
            // line 8
            echo ($context["module"] ?? null);
            echo "\"></div>
<div class=\"input-group newsletter col-sm-6\" style=\"margin: auto\">
<input type=\"text\" id=\"email";
            // line 10
            echo ($context["module"] ?? null);
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" />
<span id=\"button-subscribe\" class=\"";
            // line 11
            echo ($context["module"] ?? null);
            echo " input-group-addon btn btn-primary\"><img src=\"catalog/view/theme/default/image/next.svg\" alt=\"\"></span>
</div>
";
            // line 13
            if (($context["unsubscribe"] ?? null)) {
                // line 14
                echo "<div class=\"unsubscribe\"><a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo "\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a></div>
";
            }
            // line 16
            echo "</div>
";
        } elseif ((        // line 17
($context["type"] ?? null) == "popup")) {
            // line 18
            echo "<div class=\"init_popup\">
<div style=\"display: none;\" class=\"window_holder\">
<div class=\"newsletter_module popup\">
<a class=\"popup_close\"><i class=\"fa fa-times\"></i></a>
<h3>";
            // line 22
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<div class=\"table ";
            // line 23
            if (($context["image"] ?? null)) {
                echo " ";
                echo "split";
                echo " ";
            }
            echo "\">
";
            // line 24
            if (($context["image"] ?? null)) {
                // line 25
                echo "<div class=\"table-cell text-center\">
<img src=\"";
                // line 26
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" class=\"img-responsive\" style=\"margin:5px auto;\" />
</div>
";
            }
            // line 29
            echo "<div class=\"table-cell\">
";
            // line 30
            echo ($context["html"] ?? null);
            echo "
<div id=\"respond\" class=\"";
            // line 31
            echo ($context["module"] ?? null);
            echo "\"></div>
<div class=\"form-group\">
<input id=\"email";
            // line 33
            echo ($context["module"] ?? null);
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" />
</div>
<a id=\"button-subscribe\" class=\"";
            // line 35
            echo ($context["module"] ?? null);
            echo " btn btn-primary\">";
            echo ($context["button_subscribe"] ?? null);
            echo "</a>
";
            // line 36
            if (($context["unsubscribe"] ?? null)) {
                // line 37
                echo "<a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo " btn btn-default\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a>
";
            }
            // line 39
            echo "</div>
</div>
</div>
</div>
</div>
<div class=\"popup_mask popup_close\" style=\"display: none;\"></div>

<script>
\$(document).ready(function() {

";
            // line 49
            if (($context["only_once"] ?? null)) {
                // line 50
                echo "\tif (getCookie('newsletter_already_popup') == undefined) {\t
\t\tinitNewsletter();
\t\t\$.cookie( 'newsletter_already_popup' , 1 , { expires: 14 , path: '/' });
\t}
";
            } else {
                // line 55
                echo "\tif (getCookie('newsletter_already_added') == undefined) {
\t\tinitNewsletter();
\t}
";
            }
            // line 59
            echo "
\$('.popup_close').click(function () {
\t\$('.popup_mask').hide();
\t\$('.window_holder').hide();
});\t

});

function initNewsletter() {
\tsetTimeout(function() {\t
\t\t\$('.popup_mask').fadeTo(750,0.5);\t
\t\t\$('.window_holder').show();
\t\tsetTimeout(function() { \$('.window_holder').addClass('active'); }, 750);
\t}, ";
            // line 72
            echo ($context["delay"] ?? null);
            echo ");
}
function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    \"(?:^|; )\" + name.replace(/([\\.\$?*|{}\\(\\)\\[\\]\\\\\\/\\+^])/g, '\\\\\$1') + \"=([^;]*)\"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
</script>

";
        }
        // line 83
        echo "
<script>
\$(document).ready(function() {
\t\$('.newsletter_box input[name=\\'email";
        // line 86
        echo ($context["module"] ?? null);
        echo "\\']').bind('keydown', function(e) {
\t\tif (e.keyCode == 13) {
\t\t\t\$('#button-subscribe";
        // line 88
        echo ($context["module"] ?? null);
        echo "').trigger('click');
\t\t}
\t});
\t\$('#button-subscribe.";
        // line 91
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/subscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 96
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 100
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 103
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + '";
        echo ($context["success_message"] ?? null);
        echo "' + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 106
        echo ($context["module"] ?? null);
        echo "\\']').val('');
\t\t\t\t}}
\t\t});
\t});
});
</script>
<script>
\$(document).ready(function() {
\t\$('#button-unsubscribe.";
        // line 114
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/unsubscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 119
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 123
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 126
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 129
        echo ($context["module"] ?? null);
        echo "\\']').val('');
\t\t\t\t}}
\t\t});
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 129,  280 => 126,  274 => 123,  267 => 119,  259 => 114,  248 => 106,  240 => 103,  234 => 100,  227 => 96,  219 => 91,  213 => 88,  208 => 86,  203 => 83,  189 => 72,  174 => 59,  168 => 55,  161 => 50,  159 => 49,  147 => 39,  139 => 37,  137 => 36,  131 => 35,  124 => 33,  119 => 31,  115 => 30,  112 => 29,  106 => 26,  103 => 25,  101 => 24,  93 => 23,  89 => 22,  83 => 18,  81 => 17,  78 => 16,  70 => 14,  68 => 13,  63 => 11,  57 => 10,  52 => 8,  48 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/newsletter.twig", "");
    }
}
