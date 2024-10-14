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
class __TwigTemplate_a4aca504a880154d0c44cdb7d03374b5bb928b337cc8504789f01923d6cedba9 extends \Twig\Template
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
                echo "            <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                <div class=\"product-thumb transition\">
                    <div class=\"image\"><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" /></a></div>
                    <div class=\"caption\">
                        <h4><a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "</a></h4>
                        <p>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 11);
                echo "</p>
                        ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                            <div class=\"rating\">
                                ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 15
                        echo "                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 15) < $context["i"])) {
                            // line 16
                            echo "                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        } else {
                            // line 18
                            echo "                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        }
                        // line 20
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "                            </div>
                        ";
                }
                // line 23
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            <p class=\"price\">
                                ";
                    // line 25
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "                                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                        echo "
                                ";
                    } else {
                        // line 28
                        echo "                                    <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 28);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                        echo "</span>
                                ";
                    }
                    // line 30
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "                                    <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31);
                        echo "</span>
                                ";
                    }
                    // line 33
                    echo "                            </p>
                        ";
                }
                // line 35
                echo "                    </div>
                    <div class=\"button-group\">
                        <button type=\"button\" onclick=\"cart.add('";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 37);
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    </div>
                    <div class=\"button-group top-right-buttons\">
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 40
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 40);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 41
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 41);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
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
        return array (  174 => 46,  161 => 41,  155 => 40,  147 => 37,  143 => 35,  139 => 33,  131 => 31,  128 => 30,  120 => 28,  114 => 26,  112 => 25,  109 => 24,  106 => 23,  102 => 21,  96 => 20,  92 => 18,  88 => 16,  85 => 15,  81 => 14,  78 => 13,  76 => 12,  72 => 11,  66 => 10,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest.twig", "");
    }
}
