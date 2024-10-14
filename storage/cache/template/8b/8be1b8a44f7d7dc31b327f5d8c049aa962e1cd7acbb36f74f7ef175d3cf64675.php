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

/* default/template/common/header.twig */
class __TwigTemplate_0eed6e65aa190ade56bee5fe83f7f714e3a3c267efc04af56a18d5157953a5f5 extends \Twig\Template
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
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 13
        echo ($context["title"] ?? null);
        echo "</title>
  ";
        // line 14
        if (($context["robots"] ?? null)) {
            // line 15
            echo "  <meta name=\"robots\" content=\"";
            echo ($context["robots"] ?? null);
            echo "\" />
  ";
        }
        // line 17
        echo "  <base href=\"";
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 18
        if (($context["description"] ?? null)) {
            // line 19
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 21
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 22
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 24
        echo "  <meta property=\"og:title\" content=\"";
        echo ($context["title"] ?? null);
        echo "\" />
  <meta property=\"og:type\" content=\"website\" />
  <meta property=\"og:url\" content=\"";
        // line 26
        echo ($context["og_url"] ?? null);
        echo "\" />
  ";
        // line 27
        if (($context["og_image"] ?? null)) {
            // line 28
            echo "  <meta property=\"og:image\" content=\"";
            echo ($context["og_image"] ?? null);
            echo "\" />
  ";
        } else {
            // line 30
            echo "  <meta property=\"og:image\" content=\"";
            echo ($context["logo"] ?? null);
            echo "\" />
  ";
        }
        // line 32
        echo "  <meta property=\"og:site_name\" content=\"";
        echo ($context["name"] ?? null);
        echo "\" />
  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
  <link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
  <link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.\"
    integrity=\"sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N\" crossorigin=\"anonymous\">
  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 42
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 42);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 42);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 42);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 49
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 49);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 49);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 52
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</head>

<body>
  <nav id=\"top\">
    <div class=\"container\">";
        // line 58
        echo ($context["currency"] ?? null);
        echo "
      ";
        // line 59
        echo ($context["language"] ?? null);
        echo "
      ";
        // line 60
        echo ($context["blog_menu"] ?? null);
        echo "
      <div id=\"top-links\" class=\"nav pull-right\">
        <ul class=\"list-inline\">
          <li><a href=\"";
        // line 63
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo         // line 64
($context["telephone"] ?? null);
        echo "</span></li>
          <li class=\"dropdown\"><a href=\"";
        // line 65
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\"
              data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        // line 66
        echo         // line 67
($context["text_account"] ?? null);
        echo "</span> <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 69
        if (($context["logged"] ?? null)) {
            // line 70
            echo "              <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 71
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 72
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 73
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 74
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 76
            echo "              <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 77
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              ";
        }
        // line 79
        echo "            </ul>
          </li>
          <li><a href=\"";
        // line 81
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span
                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 82
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
          <li><a href=\"";
        // line 83
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span
                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 84
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
          <li><a href=\"";
        // line 85
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span
                class=\"hidden-xs hidden-sm hidden-md\">";
        // line 86
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-2\">
          <div id=\"logo\">
            ";
        // line 96
        if (($context["logo"] ?? null)) {
            // line 97
            echo "            ";
            if ((($context["home"] ?? null) == ($context["og_url"] ?? null))) {
                // line 98
                echo "            <img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" />
            ";
            } else {
                // line 100
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\"><img src=\"";
                echo ($context["logo"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 102
            echo "            ";
        } else {
            // line 103
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
            ";
        }
        // line 105
        echo "          </div>
        </div>
        <div class=\"col-sm-6\">";
        // line 107
        echo ($context["menu"] ?? null);
        echo " </div>
        <div class=\"col-sm-2\">";
        // line 108
        echo ($context["search"] ?? null);
        echo "</div>
        <div class=\"col-sm-2\">";
        // line 109
        echo ($context["cart"] ?? null);
        echo "</div>
      </div>
    </div>
  </header>";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 109,  376 => 108,  372 => 107,  368 => 105,  360 => 103,  357 => 102,  345 => 100,  335 => 98,  332 => 97,  330 => 96,  317 => 86,  311 => 85,  307 => 84,  301 => 83,  297 => 82,  291 => 81,  287 => 79,  280 => 77,  273 => 76,  266 => 74,  260 => 73,  254 => 72,  248 => 71,  241 => 70,  239 => 69,  234 => 67,  233 => 66,  227 => 65,  223 => 64,  220 => 63,  214 => 60,  210 => 59,  206 => 58,  200 => 54,  191 => 52,  186 => 51,  175 => 49,  171 => 48,  168 => 47,  159 => 45,  154 => 44,  141 => 42,  137 => 41,  124 => 32,  118 => 30,  112 => 28,  110 => 27,  106 => 26,  100 => 24,  94 => 22,  91 => 21,  85 => 19,  83 => 18,  78 => 17,  72 => 15,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
