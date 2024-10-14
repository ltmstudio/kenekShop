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
class __TwigTemplate_61b04bb1c27764afb7176bd30392243fcd3013552d5e799380ff8d1afe9d695d extends \Twig\Template
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
                <div class=\"image\"><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\">
                        <img src=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                echo "\"
                            class=\"img-responsive\" /></a>
                </div>
                <div class=\"button-group\" style=\"position: absolute;top:5px; right:5px\">
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 13
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                        onclick=\"wishlist.add('";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 14);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 15
                echo ($context["button_compare"] ?? null);
                echo "\"
                        onclick=\"compare.add('";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 16);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                </div>
                <div class=\"caption\">
                    <h4><a href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
                echo "</a></h4>
                    <p>";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 20);
                echo "</p>
                    ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                    <div class=\"rating\">
                        ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 24
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 24) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i
                                class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            ";
                        } else {
                            // line 27
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i
                                    class=\"fa fa-star-o fa-stack-2x\"></i></span>
                            ";
                        }
                        // line 30
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "                    </div>
                    ";
                }
                // line 33
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                    <p class=\"price\">
                        ";
                    // line 35
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 35)) {
                        // line 36
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 36);
                        echo "
                        ";
                    } else {
                        // line 38
                        echo "                        <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 38);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38);
                        // line 39
                        echo "</span>
                        ";
                    }
                    // line 41
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 41)) {
                        // line 42
                        echo "                        <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 42);
                        echo "</span>
                        ";
                    }
                    // line 44
                    echo "                        <button type=\"button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 44);
                    echo "');\"><i
                            class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    // line 45
                    echo ($context["button_cart"] ?? null);
                    // line 46
                    echo "</span></button>
                    </p>
                    ";
                }
                // line 49
                echo "                </div>
                <div class=\"button-group\">
                    
                    <!-- <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 52
                echo ($context["button_wishlist"] ?? null);
                echo "\"
                        onclick=\"wishlist.add('";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 53);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 54
                echo ($context["button_compare"] ?? null);
                echo "\"
                        onclick=\"compare.add('";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                echo "');\"><i class=\"fa fa-exchange\"></i></button> -->
                </div>
            </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
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
        return array (  203 => 60,  192 => 55,  188 => 54,  184 => 53,  180 => 52,  175 => 49,  170 => 46,  168 => 45,  163 => 44,  155 => 42,  152 => 41,  148 => 39,  143 => 38,  137 => 36,  135 => 35,  132 => 34,  129 => 33,  125 => 31,  119 => 30,  114 => 27,  107 => 24,  103 => 23,  100 => 22,  98 => 21,  94 => 20,  88 => 19,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  59 => 9,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest.twig", "");
    }
}
