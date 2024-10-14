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
class __TwigTemplate_493ca86b8b54e518ba9f16afe80188cf8f0330931cb9581fe9f8cf490a50949b extends \Twig\Template
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
            echo "<h3 class=\"text-center\" style=\"font-family: 'Inter-Regular'; font-size: 40px\">";
            echo ($context["heading_title"] ?? null);
            echo "</h3>
";
            // line 6
            echo "<div class=\"bordered_content padded box newsletter_module col-sm-12\">
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
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"Введите свой <strong>email</strong> для получения новостей\" />
";
            // line 12
            echo "<span id=\"button-subscribe\" class=\"";
            echo ($context["module"] ?? null);
            echo " input-group-addon btn btn-primary\"><img src=\"catalog/view/theme/default/image/next.svg\" alt=\"\"></span>
</div>
";
            // line 14
            if (($context["unsubscribe"] ?? null)) {
                // line 15
                echo "<div class=\"unsubscribe\"><a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo "\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a></div>
";
            }
            // line 17
            echo "</div>
";
        } elseif ((        // line 18
($context["type"] ?? null) == "popup")) {
            // line 19
            echo "<div class=\"init_popup\">
<div style=\"display: none;\" class=\"window_holder\">
<div class=\"newsletter_module popup\">
<a class=\"popup_close\"><i class=\"fa fa-times\"></i></a>
<h3>";
            // line 23
            echo ($context["heading_title"] ?? null);
            echo "</h3>
<div class=\"table ";
            // line 24
            if (($context["image"] ?? null)) {
                echo " ";
                echo "split";
                echo " ";
            }
            echo "\">
";
            // line 25
            if (($context["image"] ?? null)) {
                // line 26
                echo "<div class=\"table-cell text-center\">
<img src=\"";
                // line 27
                echo ($context["image"] ?? null);
                echo "\" alt=\"\" class=\"img-responsive\" style=\"margin:5px auto;\" />
</div>
";
            }
            // line 30
            echo "<div class=\"table-cell\">
";
            // line 31
            echo ($context["html"] ?? null);
            echo "
<div id=\"respond\" class=\"";
            // line 32
            echo ($context["module"] ?? null);
            echo "\"></div>
<div class=\"form-group\">
<input id=\"email";
            // line 34
            echo ($context["module"] ?? null);
            echo "\" name=\"email\" class=\"form-control\" placeholder=\"";
            echo ($context["entry_email"] ?? null);
            echo "\" />
</div>
<a id=\"button-subscribe\" class=\"";
            // line 36
            echo ($context["module"] ?? null);
            echo " btn btn-primary\">";
            echo ($context["button_subscribe"] ?? null);
            echo "</a>
";
            // line 37
            if (($context["unsubscribe"] ?? null)) {
                // line 38
                echo "<a id=\"button-unsubscribe\" class=\"";
                echo ($context["module"] ?? null);
                echo " btn btn-default\">";
                echo ($context["button_unsubscribe"] ?? null);
                echo "</a>
";
            }
            // line 40
            echo "</div>
</div>
</div>
</div>
</div>
<div class=\"popup_mask popup_close\" style=\"display: none;\"></div>

<script>
\$(document).ready(function() {

";
            // line 50
            if (($context["only_once"] ?? null)) {
                // line 51
                echo "\tif (getCookie('newsletter_already_popup') == undefined) {\t
\t\tinitNewsletter();
\t\t\$.cookie( 'newsletter_already_popup' , 1 , { expires: 14 , path: '/' });
\t}
";
            } else {
                // line 56
                echo "\tif (getCookie('newsletter_already_added') == undefined) {
\t\tinitNewsletter();
\t}
";
            }
            // line 60
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
            // line 73
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
        // line 84
        echo "
<script>
\$(document).ready(function() {
\t\$('.newsletter_box input[name=\\'email";
        // line 87
        echo ($context["module"] ?? null);
        echo "\\']').bind('keydown', function(e) {
\t\tif (e.keyCode == 13) {
\t\t\t\$('#button-subscribe";
        // line 89
        echo ($context["module"] ?? null);
        echo "').trigger('click');
\t\t}
\t});
\t\$('#button-subscribe.";
        // line 92
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/subscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 97
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 101
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 104
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + '";
        echo ($context["success_message"] ?? null);
        echo "' + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 107
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
        // line 115
        echo ($context["module"] ?? null);
        echo "').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/newsletter/unsubscribe',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'email=' + encodeURIComponent(\$('input[id=\\'email";
        // line 120
        echo ($context["module"] ?? null);
        echo "\\']').val()),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-success, .text-danger').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#respond.";
        // line 124
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-danger\">' + json['error'] + '</span>');
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#respond.";
        // line 127
        echo ($context["module"] ?? null);
        echo "').after('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\t\$.cookie( 'newsletter_already_added' , 1 , { expires: 14 , path: '/' });
\t\t\t\t\tsetTimeout(function() { \$('.popup_close').trigger('click'); }, 1200);
\t\t\t\t\t\$('input[id=\\'email";
        // line 130
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
        return array (  284 => 130,  278 => 127,  272 => 124,  265 => 120,  257 => 115,  246 => 107,  238 => 104,  232 => 101,  225 => 97,  217 => 92,  211 => 89,  206 => 87,  201 => 84,  187 => 73,  172 => 60,  166 => 56,  159 => 51,  157 => 50,  145 => 40,  137 => 38,  135 => 37,  129 => 36,  122 => 34,  117 => 32,  113 => 31,  110 => 30,  104 => 27,  101 => 26,  99 => 25,  91 => 24,  87 => 23,  81 => 19,  79 => 18,  76 => 17,  68 => 15,  66 => 14,  60 => 12,  56 => 10,  51 => 8,  47 => 7,  44 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/newsletter.twig", "");
    }
}
