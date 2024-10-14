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

/* common/footer.twig */
class __TwigTemplate_6517308d596cec792014699669c9d0b78b5aee23d86315a3b594faafa5225838 extends \Twig\Template
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
\t\t <footer id=\"footer\">";
        // line 2
        echo ($context["text_footer"] ?? null);
        echo "<br />";
        echo ($context["text_version"] ?? null);
        echo "</footer></div>
\t\t <script src=\"/admin/view/javascript/jquery/noty/packaged/jquery.noty.packaged.js\" type=\"text/javascript\"></script>
\t\t 
\t\t
<script>
//sitecreator True File Manager mod +++++++++++++++++++
  var stcrtr_old_dJQuery = jQuery;
  var stcrtr_old_\$ = \$;
</script>
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/jquery-3.4.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/jquery-ui-1.12.1/jquery-ui.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/elfinder/js/elfinder.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/elfinder/js/i18n/elfinder.ru.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/sitecreator/elfinder/js/i18n/elfinder.uk.js\"></script>

<!--Если вам необходим другой язык, то вы можете добавить соответствующую строчку кода.-->
<!--Ниже приведен пример строки кода для французского языка.-->
<!--Раскомментируйте строку чтобы добавить французский язык.-->

<!--If you need another language, then you can add the appropriate line of code.-->
<!--Below is an example of a line of code for the French language.-->
<!--Uncomment the line to add french language.-->

<!--<script type=\"text/javascript\" src=\"view/javascript/sitecreator/elfinder/js/i18n/elfinder.fr.js\"></script>-->
<script>
  var stcrtr_jQuery_3_4_1 = jQuery;
  window.jQuery = stcrtr_old_dJQuery;
  window.\$ = stcrtr_old_\$;
// sitecreator True File Manager mod =================== 
</script>

\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\tfunction seoUrlFill(string,pageType,lang='en',langId='1'){var delimiter='-',keyword=\$('input[name=\"'+pageType+'_seo_url[0]['+langId+']\"]'),abc={'ß':'ss','à':'a','á':'a','â':'a','ã':'a','ä':'a','å':'a','æ':'ae','ç':'c','è':'e','é':'e','ê':'e','ë':'e','ì':'i','í':'i','î':'i','ï':'i','ð':'d','ñ':'n','ò':'o','ó':'o','ô':'o','õ':'o','ö':'o','ő':'o','ø':'o','ù':'u','ú':'u','û':'u','ü':'u','ű':'u','ý':'y','þ':'th','ÿ':'y','α':'a','β':'b','γ':'g','δ':'d','ε':'e','ζ':'z','η':'h','θ':'8','ι':'i','κ':'k','λ':'l','μ':'m','ν':'n','ξ':'3','ο':'o','π':'p','ρ':'r','σ':'s','τ':'t','υ':'y','φ':'f','χ':'x','ψ':'ps','ω':'w','ά':'a','έ':'e','ί':'i','ό':'o','ύ':'y','ή':'h','ώ':'w','ς':'s','ϊ':'i','ΰ':'y','ϋ':'y','ΐ':'i','ş':'s','ı':'i','ç':'c','ü':'u','ö':'o','ğ':'g','а':'a','б':'b','в':'v','г':'g','д':'d','е':'e','ё':'yo','ж':'zh','з':'z','и':'i','й':'j','к':'k','л':'l','м':'m','н':'n','о':'o','п':'p','р':'r','с':'s','т':'t','у':'u','ф':'f','х':'h','ц':'c','ч':'ch','ш':'sh','щ':'sh','ъ':'','ы':'y','ь':'','э':'e','ю':'yu','я':'ya','є':'ye','і':'i','ї':'yi','ґ':'g','č':'c','ď':'d','ě':'e','ň':'n','ř':'r','š':'s','ť':'t','ů':'u','ž':'z','ą':'a','ć':'c','ę':'e','ł':'l','ń':'n','ó':'o','ś':'s','ź':'z','ż':'z','ā':'a','č':'c','ē':'e','ģ':'g','ī':'i','ķ':'k','ļ':'l','ņ':'n','š':'s','ū':'u','ž':'z','ө':'o','ң':'n','ү':'u','ә':'a','ғ':'g','қ':'q','ұ':'u','ა':'a','ბ':'b','გ':'g','დ':'d','ე':'e','ვ':'v','ზ':'z','თ':'th','ი':'i','კ':'k','ლ':'l','მ':'m','ნ':'n','ო':'o','პ':'p','ჟ':'zh','რ':'r','ს':'s','ტ':'t','უ':'u','ფ':'ph','ქ':'q','ღ':'gh','ყ':'qh','შ':'sh','ჩ':'ch','ც':'ts','ძ':'dz','წ':'ts','ჭ':'tch','ხ':'kh','ჯ':'j','ჰ':'h'};switch(lang){case'bg':abc['щ']='sht';abc['ъ']='a';break;case'uk':abc['и']='y';break;}
\t\t\t\tstring=string.toLowerCase();for(var k in abc){string=string.replace(RegExp(k,'g'),abc[k]);}
\t\t\t\tvar alnum=(typeof(XRegExp)==='undefined')?RegExp('[^a-z0-9]+','ig'):XRegExp('[^\\\\p{L}\\\\p{N}]+','ig');string=string.replace(alnum,delimiter);string=string.replace(RegExp('['+delimiter+']{2,}','g'),delimiter);string=string.replace(RegExp('(^'+delimiter+'|'+delimiter+'\$)','g'),'');if(keyword.length&&keyword.val()==''){keyword.val(string);}}
\t\t\t//--></script>
\t\t\t
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/footer.twig", "");
    }
}
