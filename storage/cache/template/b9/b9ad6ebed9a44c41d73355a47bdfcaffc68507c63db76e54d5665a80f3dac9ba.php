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
class __TwigTemplate_93d753199bfd334b2839d580e4cbad6d083a709974e2dca85ee93960fb22fa33 extends \Twig\Template
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
            echo "<section class=\"custom-showcase\">
    <div class=\"swiper custom-showcaseSlider\">
        <div class=\"swiper-wrapper\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "            <div class=\"swiper-slide\">
                <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url('";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "')\">
                    <div class=\"text-container\">
                        <h1 class=\"bigTitle\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "<span class=\"custom-orangeIcon\"></span></h1>
                        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                        <div class=\"container-arrow-button\">
                            <a class=\"cta arrow-button\" href=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 12);
                    echo "\">
                                Подробнее
                                <svg viewBox=\"0 0 76.922 65\">
                                    <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#E2000F\" stroke-width=\"1\"></circle>
                                    <path d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                </svg>
                            </a>
                        </div>
                        ";
                }
                // line 21
                echo "                    </div>
                    <div class=\"filter\"></div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>

        <!-- Пагинация -->
        <div class=\"swiper-pagination custom-showcaseSlider-pagination\"></div>

        <!-- Кнопки навигации -->
        <div class=\"custom-showcaseSlider-nav\">
            <div class=\"swiper-button-prev custom-showcaseSlider-prev\"></div>
            <div class=\"swiper-button-next custom-showcaseSlider-next\"></div>
        </div>
    </div>
</section>

<!-- Скрипт для инициализации слайдера -->
<script>
    const showcaseSlider = new Swiper(\".custom-showcaseSlider\", {
        speed: 1000,
        slidesPerView: 1,
        parallax: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: \".custom-showcaseSlider-pagination\",
            clickable: true,
        },
        navigation: {
            nextEl: '.custom-showcaseSlider-next',
            prevEl: '.custom-showcaseSlider-prev',
        },
    });
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
        return array (  87 => 26,  77 => 21,  65 => 12,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
