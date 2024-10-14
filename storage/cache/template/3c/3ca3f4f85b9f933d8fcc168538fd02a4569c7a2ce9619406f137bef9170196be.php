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

/* default/template/blog/article.twig */
class __TwigTemplate_ffc27ef7e6e7ed47ccb007a7663bd8cd8cd57f6481339483fe7d3be93a3423b7 extends \Twig\Template
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
        echo "
<div id=\"product-product\" class=\"container\">
\t<ul itemscope itemtype=\"http://schema.org/BreadcrumbList\" class=\"breadcrumb\">
\t\t
\t\t\t";
        // line 5
        $context["last_crumb"] = twig_last($this->env, ($context["breadcrumbs"] ?? null));
        // line 6
        echo "\t\t\t";
        $context["breadcrumbs"] = twig_slice($this->env, ($context["breadcrumbs"] ?? null), 0,  -1);
        // line 7
        echo "\t\t\t";
        $context["i"] = 1;
        // line 8
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t\t\t<li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\" itemprop=\"item\"><span itemprop=\"name\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["i"] ?? null);
            echo "\" /></li>
\t\t\t\t";
            // line 10
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 11
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t<li itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\"><link href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "href", [], "any", false, false, false, 12);
        echo "\" itemprop=\"item\"/><span itemprop=\"name\">";
        echo strip_tags(twig_get_attribute($this->env, $this->source, ($context["last_crumb"] ?? null), "text", [], "any", false, false, false, 12));
        echo "</span><meta itemprop=\"position\" content=\"";
        echo ($context["i"] ?? null);
        echo "\" /></li>
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs123"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "\t\t\t
\t\t\t<li><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t</ul>
\t<div class=\"row\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 21
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 23
            echo "\t\t";
        } else {
            // line 24
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 25
            echo "\t\t";
        }
        // line 26
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t";
        // line 27
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<!--
\t\t\t\t\t";
        // line 31
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 32
            echo "\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t";
            // line 33
            if (($context["thumb"] ?? null)) {
                // line 34
                echo "\t\t\t\t\t\t\t\t<li><a class=\"thumbnail\" href=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></li>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t";
            if (($context["images"] ?? null)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 38);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t-->
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h1>";
        // line 45
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 46
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t\t\t\t";
        // line 47
        if (($context["review_status"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
\t\t\t\t\t\t\t\t\t<a href=\"\" onclick=\"gotoReview(); return false;\">";
            // line 53
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"gotoReviewWrite(); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 57
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t\t\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
\t\t\t\t\t\t\t\t<!-- AddThis Button END --> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t";
        if (($context["download_status"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t<div class=\"blog-info\">
\t\t\t\t\t\t\t\t";
            // line 64
            if (($context["downloads"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["downloads"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 67);
                    echo "\" title=\"\"><i class=\"fa fa-floppy-o\"></i> ";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 67);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 67);
                    echo "</a><br>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 72
        echo " 
\t\t\t\t\t\t";
        // line 73
        if (($context["products"] ?? null)) {
            // line 74
            echo "\t\t\t\t\t\t\t<h3>";
            echo ($context["text_related_product"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 76
            $context["i"] = 0;
            // line 77
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t\t\t<div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 87);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 87);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 89);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 89);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 90);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 94) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 100
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 100)) {
                        // line 101
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 101);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 103);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 103);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 105
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105)) {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 106);
                        echo "</span> ";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 111
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 111);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 112
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "article_id", [], "any", false, false, false, 112);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 113
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "article_id", [], "any", false, false, false, 113);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 117
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md visible-sm\"></div>
\t\t\t\t\t\t\t\t\t";
                } elseif ((                // line 119
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 121
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 125
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t\t\t";
        if (($context["articles"] ?? null)) {
            // line 129
            echo "\t\t\t\t\t\t\t\t<h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
            // line 131
            $context["i"] = 0;
            // line 132
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 137
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 142);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 142);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 142);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 142);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 144);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 144);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                // line 145
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 145);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 146
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 146)) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 149
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 149) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"location.href = ('";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 155);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_more"] ?? null);
                echo "</span> <i class=\"fa fa-share\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 156);
                echo "\" \"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 157
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 157);
                echo "\" \"><i class=\"fa fa-eye\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 161
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md visible-sm\"></div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((                // line 163
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((((                // line 165
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 169
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 173
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t\t\t\t\t<h2>";
            // line 176
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t\t\t\t\t";
            // line 177
            if (($context["review_guest"] ?? null)) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 180
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 181
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 186
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 188
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 193
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; ";
                // line 194
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;";
                // line 204
                echo ($context["entry_good"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 207
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 210
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 216
            echo "\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 222
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 224
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script>
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
</script> 
<script>
\$('.date').datetimepicker({
\tlanguage: '";
        // line 282
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 287
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 293
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
</script> 
<script>
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=blog/article/review&article_id=";
        // line 360
        echo ($context["article_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=blog/article/write&article_id=";
        // line 364
        echo ($context["article_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
</script> 
<script>
\$(document).ready(function() {
  \$('#description').find('a>img').each(function(){
    \$(this).parent().addClass('gallery');
  });
  \$('#description').magnificPopup({
    delegate: 'a.gallery',
    type: 'image',
    gallery: {
        enabled: true
    }
  });

  gotoReview = function() {
    offset = \$('#form-review').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  gotoReviewWrite = function() {
    offset = \$('#form-review h2').offset();
    \$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
  }
  
});
</script>
";
        // line 426
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/blog/article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  931 => 426,  866 => 364,  859 => 360,  789 => 293,  780 => 287,  772 => 282,  711 => 224,  706 => 222,  701 => 219,  696 => 216,  690 => 214,  681 => 210,  675 => 207,  669 => 204,  656 => 194,  652 => 193,  644 => 188,  639 => 186,  631 => 181,  627 => 180,  623 => 178,  621 => 177,  617 => 176,  612 => 173,  609 => 172,  605 => 170,  599 => 169,  596 => 168,  592 => 166,  590 => 165,  587 => 164,  585 => 163,  582 => 162,  580 => 161,  571 => 157,  567 => 156,  561 => 155,  557 => 153,  553 => 151,  547 => 150,  540 => 149,  536 => 148,  533 => 147,  531 => 146,  527 => 145,  521 => 144,  510 => 142,  504 => 140,  501 => 139,  498 => 138,  495 => 137,  492 => 136,  489 => 135,  486 => 134,  483 => 133,  478 => 132,  476 => 131,  470 => 129,  467 => 128,  463 => 126,  457 => 125,  454 => 124,  450 => 122,  448 => 121,  445 => 120,  443 => 119,  440 => 118,  438 => 117,  429 => 113,  423 => 112,  415 => 111,  411 => 109,  407 => 107,  400 => 106,  397 => 105,  389 => 103,  383 => 101,  381 => 100,  378 => 99,  375 => 98,  371 => 96,  365 => 95,  358 => 94,  354 => 93,  351 => 92,  349 => 91,  345 => 90,  339 => 89,  328 => 87,  322 => 85,  319 => 84,  316 => 83,  313 => 82,  310 => 81,  307 => 80,  304 => 79,  301 => 78,  296 => 77,  294 => 76,  288 => 74,  286 => 73,  283 => 72,  278 => 70,  274 => 69,  261 => 67,  257 => 66,  254 => 65,  252 => 64,  249 => 63,  246 => 62,  238 => 57,  229 => 53,  221 => 52,  214 => 51,  210 => 50,  206 => 48,  204 => 47,  200 => 46,  196 => 45,  192 => 43,  188 => 41,  185 => 40,  168 => 38,  163 => 37,  160 => 36,  146 => 34,  144 => 33,  141 => 32,  139 => 31,  132 => 27,  127 => 26,  124 => 25,  121 => 24,  118 => 23,  115 => 22,  112 => 21,  109 => 20,  107 => 19,  103 => 18,  100 => 17,  90 => 15,  87 => 14,  83 => 13,  74 => 12,  68 => 11,  66 => 10,  57 => 9,  52 => 8,  49 => 7,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/blog/article.twig", "");
    }
}
