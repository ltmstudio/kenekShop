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

/* default/template/extension/module/blog_latest.twig */
class __TwigTemplate_cc7cf60fbd59b0f8df617e5bb478aea856d2abcf133cd5ccc2514f4b6d3d2c55 extends \Twig\Template
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
        if (($context["articles"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 6
                echo "\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t<div class=\"image\"><a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 8);
                echo "\"
\t\t\t\t\t\t\ttitle=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive\" /></a></div>
\t\t\t\t<div class=\"caption\">
\t\t\t\t\t<h4><a href=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 11);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 11);
                echo "</a></h4>
\t\t\t\t\t<p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 12);
                echo "</p>
\t\t\t\t\t";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(5);
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 16
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 16) < $context["i"])) {
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
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" onclick=\"location.href = ('";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 27);
                echo "');\"><i class=\"fa fa-share\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 28
                echo ($context["button_more"] ?? null);
                echo "</span></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 29);
                echo "\" \"><i class=\" fa
\t\t\t\t\t\tfa-clock-o\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\"
\t\t\t\t\t\ttitle=\"";
                // line 32
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 32);
                echo "\" \"><i class=\" fa fa-eye\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/blog_latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  127 => 32,  121 => 29,  117 => 28,  113 => 27,  109 => 25,  105 => 23,  99 => 22,  94 => 19,  87 => 16,  83 => 15,  80 => 14,  78 => 13,  74 => 12,  68 => 11,  63 => 9,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/blog_latest.twig", "");
    }
}
