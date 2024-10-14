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

/* extension/module/truefilemanager_for_oc3.twig */
class __TwigTemplate_3bed291225bbd670671c32dad4921cf8fa33a209b2dc996639958dbf6422d1c6 extends \Twig\Template
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
        echo "<!--Module: True File Manager by Sitecreator-->
<!--Version (Версия): 1.2.1-->
<!--Developer of this module (Разработчик): Malyutin R. A. (Малютин Р. А.), Developer Website: https://sitecreator.ru 2019(c)-->
<!--All rights reserved. (с)-->
<!--Все права защищены. (с)-->
<!--The copyright for this module belongs to Mr. Malyutin R. A.-->
<!--Авторские права на данный модуль принадлежат господину Малютину Р. А.-->
<!--Запрещается распространение данного программного продукта без разрешения автора.-->
<!--Distribution of this software product without the permission of the author is prohibited.-->
<!---->
<!--Данное программное обеспечение предоставляется на основе простой неисключительной лицензии.-->
<!--Данное программное обеспечение распространяется по общепринятому принципу \"как есть\"  без предоставления каких-либо гарантий в явной или неявной форме.-->
<!--Разработчик не гарантирует пригодность данного программного обеспечения для особых целей.-->
<!--Ни при каких обстоятельствах разработчик не несет ответственности за любой ущерб, который может возникнуть в результате использования данного программного обеспечения.-->
<!--This software is provided based on a simple, non-exclusive license.-->
<!--This software is distributed on a generally accepted “as is” basis without any warranty, expressed or implied.-->
<!--The developer does not guarantee the suitability of this software for special purposes.-->
<!--Under no circumstances shall the developer be liable for any damage that may result from the use of this software.-->
<!---->
<!---->
<!---->
<!---->
<!--This software uses freely distributed software of 3 parties, namely the following software:-->
<!--Данное программное обеспечение использует в своем составе свободно распространяемое программное обеспечение 3-х сторон, а именно следующий софт:-->
<!---->
<!--jquery ver. 3.4.1 (JavaScript library),  Developer Website: https://jquery.com/-->
<!--jquery ui ver. 1.12.1 (JavaScript library),  Developer Website: https://jqueryui.com/-->
<!--elFinder ver. 2.1.49, Developer Website: https://jqueryui.com/-->
<!---->
<!--На указанное выше программное обеспечение третьих лиц распространяется авторское право, принадлежащее соответственно этим третьим лицам.-->
<!--Подробнее об этих авторских правах можно прочитать на соответствующих вебсайтах разработчиков. Адреса соответствующих вебсайтов указаны выше.-->
<!---->
<!--The above third-party software is copyrighted by these third parties, respectively.-->
<!--You can read more about these copyrights on their respective developer websites. The addresses of the respective websites are indicated above.-->



<div id=\"filemanager\" class=\"modal-dialog\" style=\"  width:auto; display: table;\">
    <div class=\"modal-header\" style=\"display:table-header-group;\">
        <div style=\"background: #fbfbfb; padding: 10px 10px 10px 15px; border-radius: 2px 2px 0 0;\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
            <h4 class=\"modal-title\">True File Manager <span style=\"font-size: 12px; color: #b0b0b0; font-weight: normal;\">by Sitecreator.ru v. ";
        // line 42
        if ( !twig_test_empty(($context["module_ver"] ?? null))) {
            echo " ";
            echo ($context["module_ver"] ?? null);
        }
        echo "</span></h4>
        </div>
    </div>
    <div class=\"\" style=\"display: table-row;\">

        <div class=\"\" style=\"display: table-cell;\"><a id=\"elfinder_a_click\" class=\"thumbnail\" href=\"\" style=\"display: none;\"></a>
            <div id=\"elfinder\"></div>
        </div>
    </div>
</div>


<script>

  //\$('#modal-image').undelegate('a.thumbnail','click');

  if(typeof stcrtr_jQuery_3_4_1 === 'function' && typeof stcrtr_old_\$  === 'function') {
    (function(\$, jQuery, old_\$){

      if(typeof jQuery.ui !== \"object\" || typeof elFinder !== \"function\") {
        var txt  = 'jQuery.ui or/and elFinder not found';
        console.log(txt);
        alert(txt);
      }
      else {
        (function() {
          var target = \"";
        // line 68
        if ( !twig_test_empty(($context["target"] ?? null))) {
            echo ($context["target"] ?? null);
        }
        echo "\";
          var thumb = \"";
        // line 69
        if ( !twig_test_empty(($context["thumb"] ?? null))) {
            echo ($context["thumb"] ?? null);
        }
        echo "\";
          var cke = \"";
        // line 70
        if ( !twig_test_empty(($context["cke"] ?? null))) {
            echo ($context["cke"] ?? null);
        }
        echo "\";
          var summernote_id = \"";
        // line 71
        if ( !twig_test_empty(($context["summernote_id"] ?? null))) {
            echo ($context["summernote_id"] ?? null);
        }
        echo "\";
          var token = \"";
        // line 72
        if ( !twig_test_empty(($context["token"] ?? null))) {
            echo ($context["token"] ?? null);
        }
        echo "\";


          var url = 'index.php?route=common/filemanager/connector&user_token=' + token;
          var options = {
            url  : url,
            lang : 'en',
            ui: ['toolbar', 'places', 'tree', 'path', 'stat'],
            height: 600,
            resizable: true,
            commandsOptions : {
              getfile : {
                multiple : false,
                oncomplete : 'close'
              }
            },
            getFileCallback: function(files, fm){
              console.log('files:');
              console.log(files);

              // если выбор файла, но не вставка изображения в редакторе
              if (target) {
                if (thumb) {
                  \$('#' + thumb).find('img').attr('src', files.tmb);
                }
                var path = files.path;
                // for windows
                path = path.replace(/\\\\\\\\/g,'/');
                path = path.replace(/\\\\/g,'/');
                \$('#' + target).attr('value', path);

                old_\$('#elfinder_a_click').attr('href', files.url).trigger('click');
              } else {

                //CKEditor
                if (cke) {
                  var cke_target = cke || null;
                  console.log(cke_target);
                  cke_target = cke_target.split(':'); //link,txtUrl
                  CKEDITOR.dialog.getCurrent().setValueOf(cke_target[0], cke_target[1], files.url);
                }
                // not CKEditor +++++++++++++
                else {
                  old_\$('#elfinder_a_click').attr('href', files.url).trigger('click');
                }
              }

              old_\$('#modal-image').modal('hide');
            }
          };
          \$('#elfinder').elfinder(options);

        })();
      }
    })(stcrtr_jQuery_3_4_1, stcrtr_jQuery_3_4_1, stcrtr_old_\$);
  }
  else {
    var txt  = 'stcrtr_jQuery_3_4_1 or/and stcrtr_old_\$ not found';
    console.log(txt);
    alert(txt);
  }

</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/truefilemanager_for_oc3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 72,  130 => 71,  124 => 70,  118 => 69,  112 => 68,  80 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/truefilemanager_for_oc3.twig", "");
    }
}
