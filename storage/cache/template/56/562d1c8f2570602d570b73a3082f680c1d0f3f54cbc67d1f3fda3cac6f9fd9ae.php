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
class __TwigTemplate_eaa71f4f38f8b598835206f5de498656869dde9ba6b3de1bff5143d7dd97c812 extends \Twig\Template
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
            echo "<h3 class=\"text-center\">";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<div class=\"bordered_content padded box newsletter_module\">
";
            // line 4
            echo ($context["html"] ?? null);
            echo "
<div id=\"respond\" class=\"";
            // line 5
            echo ($context["module"] ?? null);
            echo "\"></div>
<div class=\"input-group\">
<input type=\"text\" id=\"email";
            // line 7
            echo ($context["module"] ?? null);
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" />
<span id=\"button-subscribe\" class=\"";
            // line 8
            echo ($context["module"] ?? null);
            echo " input-group-addon btn btn-primary\"><i class=\"fa fa-envelope\"></i></span>
</div>
";
            // line 10
            if (($context["unsubscribe"] ?? null)) {
                // line 11
                echo "<div class=\"unsubscribe\"><a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo "\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a></div>
";
            }
            // line 13
            echo "</div>
";
        } elseif ((        // line 14
($context["type"] ?? null) == "popup")) {
            // line 15
            echo "<div class=\"init_popup\">
<div style=\"display: none;\" class=\"window_holder\">
<div class=\"newsletter_module popup\">
<a class=\"popup_close\"><i class=\"fa fa-times\"></i></a>
<h3>";
            // line 19
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<div class=\"table ";
            // line 20
            if (($context["image"] ?? null)) {
                echo " ";
                echo "split";
                echo " ";
            }
            echo "\">
";
            // line 21
            if (($context["image"] ?? null)) {
                // line 22
                echo "<div class=\"table-cell text-center\">
<img src=\"";
                // line 23
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" class=\"img-responsive\" style=\"margin:5px auto;\" />
</div>
";
            }
            // line 26
            echo "<div class=\"table-cell\">
";
            // line 27
            echo ($context["html"] ?? null);
            echo "
<div id=\"respond\" class=\"";
            // line 28
            echo ($context["module"] ?? null);
            echo "\"></div>
<div class=\"form-group\">
<input id=\"email";
            // line 30
            echo ($context["module"] ?? null);
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" />
</div>
<a id=\"button-subscribe\" class=\"";
            // line 32
            echo ($context["module"] ?? null);
            echo " btn btn-primary\">";
            echo ($context["button_subscribe"] ?? null);
            echo "</a>
";
            // line 33
            if (($context["unsubscribe"] ?? null)) {
                // line 34
                echo "<a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo " btn btn-default\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a>
";
            }
            // line 36
            echo "</div>
</div>
</div>
</div>
</div>
<div class=\"popup_mask popup_close\" style=\"display: none;\"></div>

<script>
\$(document).ready(function() {

";
            // line 46
            if (($context["only_once"] ?? null)) {
                // line 47
                echo "\tif (getCookie('newsletter_already_popup') == undefined) {\t
\t\tinitNewsletter();
\t\t\$.cookie( 'newsletter_already_popup' , 1 , { expires: 14 , path: '/' });
\t}
";
            } else {
                // line 52
                echo "\tif (getCookie('newsletter_already_added') == undefined) {
\t\tinitNewsletter();
\t}
";
            }
            // line 56
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
            // line 69
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
        // line 80
        echo "
<script>
\$(document).ready(function() {
\t\$('.newsletter_box input[name=\\'email";
        // line 83
        echo ($context["module"] ?? null);
        echo "\\']').bind('keydown', function(e) {
\t\tif (e.keyCode == 13) {
\t\t\t\$('#button-subscribe";
        // line 85
        echo ($context["module"] ?? null);
        echo "').trigger('click');
\t\t}
\t});
\t\$('#button-subscribe.";
        // line 88
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/subscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 93
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 97
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 100
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + '";
        echo ($context["success_message"] ?? null);
        echo "' + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 103
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
        // line 111
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/unsubscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 116
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 120
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 123
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 126
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
        return array (  283 => 126,  277 => 123,  271 => 120,  264 => 116,  256 => 111,  245 => 103,  237 => 100,  231 => 97,  224 => 93,  216 => 88,  210 => 85,  205 => 83,  200 => 80,  186 => 69,  171 => 56,  165 => 52,  158 => 47,  156 => 46,  144 => 36,  136 => 34,  134 => 33,  128 => 32,  121 => 30,  116 => 28,  112 => 27,  109 => 26,  103 => 23,  100 => 22,  98 => 21,  90 => 20,  86 => 19,  80 => 15,  78 => 14,  75 => 13,  67 => 11,  65 => 10,  60 => 8,  54 => 7,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/newsletter.twig", "");
    }
}
