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

/* default/template/extension/module/featured.twig */
class __TwigTemplate_b3a2807fe7e49ebb823da561d7498f964381f1a7744c67e5be1be43eb9928686 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "<div class=\"container\">
\t<h3>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</h3>
\t<div class=\"row\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                echo "\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<div class=\"image\"><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\"
\t\t\t\t\t\t\ttitle=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4><a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                echo "</a></h4>
\t\t\t\t\t<p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 12);
                echo "</p>
\t\t\t\t\t";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 16
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i
\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                        } else {
                            // line 19
                            echo "\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
\t\t\t\t\t\t\t\t\tclass=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t";
                        }
                        // line 22
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                    // line 27
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                        echo "
\t\t\t\t\t\t";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 30);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 30);
                        // line 31
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 34);
                        echo "</span>
\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t</p>
\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                echo "');\"><i
\t\t\t\t\t\t\tclass=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 41
                echo ($context["button_cart"] ?? null);
                // line 42
                echo "</span></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 43
                echo ($context["button_wishlist"] ?? null);
                echo "\"
\t\t\t\t\t\tonclick=\"wishlist.add('";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 45
                echo ($context["button_compare"] ?? null);
                echo "\"
\t\t\t\t\t\tonclick=\"compare.add('";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 46);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 51,  172 => 46,  168 => 45,  164 => 44,  160 => 43,  157 => 42,  155 => 41,  151 => 40,  147 => 38,  143 => 36,  135 => 34,  132 => 33,  128 => 31,  123 => 30,  117 => 28,  115 => 27,  112 => 26,  109 => 25,  105 => 23,  99 => 22,  94 => 19,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  74 => 12,  68 => 11,  63 => 9,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured.twig", "");
    }
}
