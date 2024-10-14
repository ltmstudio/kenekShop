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
class __TwigTemplate_02168108af73e28549cca4d5419c1e86181c4d6a2d4a6503ce5368967316a2d2 extends \Twig\Template
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
            echo "<section class=\"custom-home-showcase\">
    <div class=\"swiper custom-home-showcaseSlider\">
        <div class=\"swiper-wrapper\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "            <div class=\"swiper-slide\">
                <div class=\"custom-swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo ")\">
                    <div class=\"custom-text-container\">
                        <h1 class=\"custom-bigTitle\">";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "<span class=\"custom-orangeIcon\"></span></h1>
                        ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                        <div class=\"custom-container-arrow-button\">
                            <a class=\"custom-cta custom-arrow-button\" href=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 12);
                    echo "\"> 
                                Перейти
                                <svg viewBox=\"0 0 76.922 65\">
                                    <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#E2000F\" stroke-width=\"1\"></circle>
                                    <path d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" fill=\"#10112b\"></path>
                                </svg>
                            </a>
                        </div>
                        ";
                }
                // line 21
                echo "                    </div>
                    <div class=\"custom-filter\"></div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>

        <!-- Pagination -->
        <div class=\"swiper-pagination custom-showcaseSlider-pagination\"></div>

        <!-- Navigation buttons -->
        <div class=\"custom-showcaseSlider-nav\">
            <div class=\"swiper-button-prev custom-showcaseSlider-prev\"></div>
            <div class=\"swiper-button-next custom-showcaseSlider-next\"></div>
        </div>
    </div>
</section>

<script>
const showcaseSlider = new Swiper(\".custom-home-showcaseSlider\", {
  speed: 1000,
  slidesPerView: 1,
  parallax: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
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
        // line 59
        echo "<style>
.custom-home-showcase {
    padding: 0 2rem;
    position: relative;
    margin: 2rem 0 20vw;
}

.custom-home-showcaseSlider .swiper-wrapper .swiper-slide {
    height: 72vh;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    position: relative;
    overflow: hidden;
}

.custom-swiper-image {
    padding: 5vw;
    width: calc(100% - 10vw);
    height: calc(100% - 10vw);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
}

.custom-text-container {
    margin-bottom: 5rem;
}

.custom-bigTitle {
    font-size: 13vw;
    color: white;
    text-shadow: 0 0 5px rgba(33, 33, 33, 0.13);
    font-family: 'CabinetGrotesk-extrabold', sans-serif;
}

.custom-orangeIcon {
    display: inline-block;
    width: 16px;
    height: 16px;
    background-color: #E2000F;
    transform: rotate(45deg);
    margin-left: 5px;
}

.custom-container-arrow-button .custom-arrow-button {
    color: white;
    display: flex;
    align-items: center;
    text-decoration: none;
}

.custom-container-arrow-button .custom-arrow-button svg {
    margin-left: 10px;
    width: 33px;
}

.custom-container-arrow-button .custom-arrow-button svg path {
    fill: white;
}

.custom-container-arrow-button .custom-arrow-button svg circle {
    stroke: white;
}

.custom-container-arrow-button .custom-arrow-button:hover svg circle {
    stroke: #E2000F;
}

.custom-filter {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #10112b;
    opacity: 0.5;
}

.swiper-pagination.custom-showcaseSlider-pagination .swiper-pagination-bullet {
    background-color: #8f9397;
    width: 4vw;
    height: 2px;
    margin: 0 4px !important;
}

.swiper-pagination.custom-showcaseSlider-pagination .swiper-pagination-bullet-active {
    background-color: #E2000F;
    width: 8vw;
}

.custom-showcaseSlider-nav .custom-showcaseSlider-prev,
.custom-showcaseSlider-nav .custom-showcaseSlider-next {
    font-size: 4vw;
    color: #E2000F;
}

</style>";
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
        return array (  122 => 59,  87 => 26,  77 => 21,  65 => 12,  62 => 11,  60 => 10,  56 => 9,  51 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
