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
class __TwigTemplate_83de858aaec837a1a1c50741878aafbe2440fa9159cc70094680244f077d46cd extends \Twig\Template
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
            echo "<section class=\"home-showcase\">
    <div id=\"slideshow";
            // line 3
            echo ($context["module"] ?? null);
            echo "\" class=\"swiper-container swiper home-showcaseSlider\">
        <div class=\"swiper-wrapper\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "            <div class=\"swiper-slide\">
                <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\"
                    style=\"background-image:url(";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo ")\">
                    <div class=\"text-container\">
                        <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span
                                class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                        <div class=\"container-arrow-button\">
                            <a class=\"cta arrow-button\" href=\"#\">
                                an example of link
                                <svg viewBox=\"0 0 76.922 65\">
                                    <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\"
                                        stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                    <path id=\"Union_1\" data-name=\"Union 1\"
                                        d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\"
                                        transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class=\"filter\"></div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>

        <!-- pagination -->
        <div class=\"swiper-pagination showcaseSlider-pagination\"></div>

        <!-- navigation buttons -->
        <div class=\"showcaseSlider-nav\">
            <div class=\"swiper-button-prev showcaseSlider-prev\"></div>
            <div class=\"swiper-button-next showcaseSlider-next\"></div>
        </div>

    </div>
    <a href=\"#scroll1\" class=\"scrollSliderButton\">Scroll <div class=\"line\"></div></a>
</section>

<style>
    /* Main color */
    :root {
        --color-purple-blue: #8c97d0;
        --color-night-blue: #10112b;
        --color-orange: #f7970e;
        --color-dark-gray: #8f9397;
    }

    @font-face {
        font-family: 'CabinetGrotesk-light';
        src: url('http://lucasroussy.com/fonts/cabinet-grotesk/CabinetGrotesk-Light.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'CabinetGrotesk-extrabold';
        src: url('assets/fonts/cabinet-grotesk/CabinetGrotesk-Extrabold.woff2') format('woff2');
        font-weight: normal;
        font-style: normal;
    }

    .bigTitle {
        font-family: 'CabinetGrotesk-extrabold', sans-serif;
        line-height: 0.9;
        font-size: 13vw;
    }

    @media (min-width: 425px) {
        .bigTitle {
            font-size: 10vw;
        }
    }

    @media (min-width: 1024px) {
        .bigTitle {
            font-size: 6vw;
        }
    }

    .orangeIcon {
        width: 10px;
        height: 10px;
        transform: rotate(45deg);
        background-color: var(--color-orange);
        display: inline-block;
        margin-left: 5px;
    }

    @media (min-width: 768px) {
        .orangeIcon {
            width: 13px;
            height: 13px;
        }
    }

    @media (min-width: 1440px) {
        .orangeIcon {
            width: 16px;
            height: 16px;
        }
    }

    .arrow-button {
        display: flex;
        align-items: center;
        text-decoration: none;
        font-family: 'CabinetGrotesk-extrabold', sans-serif;
        color: #000;
        transition: padding 1s cubic-bezier(0.16, 1, 0.3, 1);
        width: fit-content;
        font-size: 12px;
    }

    .arrow-button svg {
        width: 33px;
        margin-left: 10px;
    }

    .arrow-button svg circle {
        transition: fill 0.75s ease;
        fill: transparent;
    }

    @media (min-width: 425px) {
        .arrow-button {
            font-size: 16px;
        }

        .arrow-button svg {
            width: 45px;
        }
    }

    @media (min-width: 1024px) {
        .arrow-button {
            font-size: 20px;
        }

        .arrow-button svg {
            width: 62px;
        }

        .arrow-button:hover {
            padding-left: 20px;
        }

        .arrow-button:hover svg circle {
            fill: var(--color-purple-blue);
        }
    }

    @media (min-width: 1440px) {
        .arrow-button {
            font-size: 15px;
        }

        .arrow-button svg {
            width: 60px;
        }
    }

    @media (min-width: 1920px) {
        .arrow-button {
            font-size: 18px;
        }

        .arrow-button svg {
            width: 70px;
        }
    }

    .home-showcase {
        padding: 0 var(--columnExt) 0;
        position: relative;
        margin: 2rem 0 20vw;
    }

    .home-showcaseSlider {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .swiper-wrapper .swiper-slide {
        position: relative;
        height: 72vh;
        overflow: hidden;
    }

    .swiper-image {
        padding: 5vw;
        width: calc(100% - (5vw * 2));
        height: calc(100% - (5vw * 2));
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: flex-end;
    }

    .swiper-image .text-container {
        max-width: 100%;
        margin: 0 0 5rem;
    }

    .swiper-image .bigTitle {
        transform: translate(-140%, 0);
        transition: transform 1.15s cubic-bezier(0.58, 0, 0.28, 0.99) 0.4s;
        color: #fff;
        margin: 0 0 2.5rem;
        text-shadow: #21212121 0px 0px 5px;
    }

    .swiper-image .container-arrow-button {
        transform: translate(-160%, 0);
        transition: transform 0.6s cubic-bezier(0.58, 0, 0.28, 0.99) 1s;
        width: fit-content;
    }

    .container-arrow-button .arrow-button {
        color: #fff;
    }

    .container-arrow-button svg path {
        fill: #fff;
    }

    .container-arrow-button svg circle {
        stroke: #fff;
    }

    .container-arrow-button:hover svg circle {
        stroke: var(--color-purple-blue);
    }

    .swiper-image .filter {
        width: 100%;
        height: 100%;
        background-color: var(--color-night-blue);
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0.5;
        transition: opacity 0.8s ease-in 0.5s;
    }

    .swiper-slide-active .swiper-image .bigTitle,
    .swiper-slide-active .swiper-image .container-arrow-button {
        transform: translate(0, 0);
    }

    .swiper-slide-active .swiper-image .filter {
        opacity: 0;
    }

    .swiper-pagination {
        position: relative;
        bottom: 0;
        left: 0;
        width: fit-content;
        padding: 3.5% 0;
    }

    .swiper-pagination-bullet {
        width: 4vw;
        border-radius: 50px;
        height: 2px;
        background-color: var(--color-dark-gray);
        opacity: 1;
        transition: width 0.8s ease-in-out, 0.4s ease-in-out;
        margin: 0 4px !important;
    }

    .swiper-pagination-bullet-active {
        background-color: var(--color-orange);
        width: 8vw;
    }

    /* Add any additional styles as needed */
</style>
<script>
    const showcaseSlider = new Swiper(\".home-showcaseSlider\", {
        speed: 1000,
        slidesPerView: 1,
        parallax: true,
        // centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: \".showcaseSlider-pagination\",
            clickable: true,
        },
        navigation: {
            nextEl: '.showcaseSlider-next',
            prevEl: '.showcaseSlider-prev',
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
        return array (  82 => 29,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
