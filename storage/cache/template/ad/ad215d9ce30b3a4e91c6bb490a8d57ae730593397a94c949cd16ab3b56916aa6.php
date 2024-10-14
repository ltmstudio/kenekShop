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
class __TwigTemplate_ac9c9ab70e9ae18ca2c1b4d40871d64e4df8a74d6a113aca47eae05f400b6bb5 extends \Twig\Template
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
    <h3>";
            // line 3
            echo ($context["heading_title"] ?? null);
            echo "</h3>
    <div class=\"row\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                echo "        <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
            <div class=\"product-thumb transition\" style=\"position: relative;\">
                <div class=\"image\">
                    <a href=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                echo "\">
                        <img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "\"
                            class=\"img-responsive\" /></a>
                </div>
                <div class=\"button-group\" style=\"position: absolute;top:5px; right:5px\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 14
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                        onclick=\"wishlist.add('";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 15);
                echo "');\">
                        <i class=\"fa fa-heart\"></i>
                    </button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 18
                echo ($context["button_compare"] ?? null);
                echo "\"
                        onclick=\"compare.add('";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 19);
                echo "');\">
                        <i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
                <div class=\"caption\">
                    <h4>
                        <a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a>
                    </h4>
                    <p>";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 27);
                echo "</p>
                    ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                    <div class=\"rating\">
                        ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 31
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 31) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                            ";
                        } else {
                            // line 35
                            echo "                            <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star fa-stack-2x\"></i>
                                <i class=\"fa fa-star-o fa-stack-2x\"></i>
                            </span>
                            ";
                        }
                        // line 40
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                    </div>
                    ";
                }
                // line 43
                echo "
                    <div class=\"button-group product-group\">
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                        <div class=\"price\">
                            ";
                    // line 47
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47)) {
                        // line 48
                        echo "                            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48);
                        echo "
                            ";
                    } else {
                        // line 50
                        echo "                            <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50);
                        echo "</span>
                            <span class=\"price-old\">";
                        // line 51
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 51);
                        echo "</span>
                            ";
                    }
                    // line 53
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "                            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo "
                                ";
                        // line 55
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 55);
                        echo "</span>
                            ";
                    }
                    // line 57
                    echo "                            </div>
                        ";
                }
                // line 59
                echo "                        <button type=\"button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 59);
                echo "');\">
                            <i class=\"fa fa-shopping-cart\"></i>
                            <span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 61
                echo ($context["button_cart"] ?? null);
                echo "</span>
                        </button>
                    </div>

                </div>

            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    </div>
</div>
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
        return array (  204 => 70,  189 => 61,  183 => 59,  179 => 57,  174 => 55,  169 => 54,  166 => 53,  161 => 51,  156 => 50,  150 => 48,  148 => 47,  145 => 46,  143 => 45,  139 => 43,  135 => 41,  129 => 40,  122 => 35,  114 => 31,  110 => 30,  107 => 29,  105 => 28,  101 => 27,  94 => 25,  85 => 19,  81 => 18,  75 => 15,  71 => 14,  60 => 10,  56 => 9,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest.twig", "");
    }
}
