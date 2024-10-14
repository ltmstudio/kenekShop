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
class __TwigTemplate_c93138836d8b111e672dd506cea5d71e8faf42dee1fc751857da3d868c1902a4 extends \Twig\Template
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
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 6
                echo "\t\t<div class=\"product-layout ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6) == 1)) {
                    echo "col-lg-6 col-md-6 col-sm-12 col-xs-12";
                } else {
                    echo "col-lg-3 col-md-3 col-sm-6 col-xs-12";
                }
                echo "\">
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
                            // line 17
                            echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                        } else {
                            // line 19
                            echo "\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t";
                        }
                        // line 21
                        echo "\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t<button type=\"button\" onclick=\"location.href = ('";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 26);
                echo "');\"><i class=\"fa fa-share\"></i>
\t\t\t\t\t\t<span class=\"hidden-xs hidden-sm hidden-md\">";
                // line 27
                echo ($context["button_more"] ?? null);
                echo "</span></button>
\t\t\t\t\t<!-- <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 28);
                echo "\" ><i class=\" fa fa-clock-o\"></i></button>
\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 29
                echo ($context["text_views"] ?? null);
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 29);
                echo "\" ><i class=\" fa fa-eye\"></i></button> -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
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
        return array (  164 => 34,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 24,  123 => 22,  117 => 21,  113 => 19,  109 => 17,  106 => 16,  102 => 15,  99 => 14,  97 => 13,  93 => 12,  87 => 11,  82 => 9,  74 => 8,  64 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/blog_latest.twig", "");
    }
}
