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

/* default/template/extension/module/latest.twig */
class __TwigTemplate_f777a6d76c6c1387f7fc79fb191615580ff3b97266ecae71410231bf62844686 extends \Twig\Template
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
            echo "\t<div class=\"container\">
\t\t<h3>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</h3>
\t\t<div class=\"row\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                echo "\t\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"product-thumb transition\" style=\"position: relative;\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t<a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button-group\" style=\"position: absolute;top:5px; right:5px\">
\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 13
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 13);
                echo "');\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 16
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
                echo "');\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-exchange\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 24);
                echo "</p>
\t\t\t\t\t\t\t";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 28) < $context["i"])) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-o fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t";
                    // line 43
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 46);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        // line 47
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                        // line 48
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 52
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 52);
                        echo "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                echo "');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 59
                echo ($context["button_cart"] ?? null);
                // line 60
                echo "</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 69,  187 => 60,  185 => 59,  180 => 57,  177 => 56,  173 => 54,  168 => 52,  163 => 51,  160 => 50,  156 => 48,  154 => 47,  149 => 46,  143 => 44,  141 => 43,  138 => 42,  135 => 41,  131 => 39,  125 => 38,  118 => 33,  112 => 29,  109 => 28,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  89 => 22,  78 => 16,  70 => 13,  60 => 10,  56 => 9,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest.twig", "");
    }
}
