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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_768328343fc38d9e40ecc46cd3a7f731a56c3346032baebfb0c2edb6498b3bb3 extends \Twig\Template
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
        if (($context["banners"] ?? null)) {
            // line 2
            echo "<div class=\"container\">
\t<div class=\"slideshow swiper-viewport\">
\t\t<div id=\"slideshow";
            // line 4
            echo ($context["module"] ?? null);
            echo "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 7
                echo "\t\t\t\t<div class=\"swiper-slide text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                    echo "\"><img
\t\t\t\t\t\t\tsrc=\"";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                    echo "\" class=\"img-responsive\" /></a>";
                } else {
                    // line 9
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                    echo "\" class=\"img-responsive\" />";
                }
                echo "</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"swiper-pagination slideshow";
            // line 13
            echo ($context["module"] ?? null);
            echo "\"></div>
\t\t<div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t</div>
\t</div>
</div>
<script>
\t\$('#slideshow";
            // line 21
            echo ($context["module"] ?? null);
            echo "').swiper({
\t\tmode: 'horizontal',
\t\tslidesPerView: 1,
\t\tpagination: '.slideshow";
            // line 24
            echo ($context["module"] ?? null);
            echo "',
\t\tpaginationClickable: true,
\t\tnextButton: '.slideshow .swiper-button-next',
\t\tprevButton: '.slideshow .swiper-button-prev',
\t\tspaceBetween: 30,
\t\tautoplay: 2500,
\t\tautoplayDisableOnInteraction: true,
\t\tloop: true
\t});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  93 => 21,  82 => 13,  78 => 11,  65 => 9,  59 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
