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
class __TwigTemplate_e064a179575e159b94e1076e04cd4271afd3e61ed31f08bcd55b874597a855cf extends \Twig\Template
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
        echo "<section class=\"home-showcase\">
    <div class=\"swiper home-showcaseSlider\">
        <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\">
                    <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(http://unsplash.it/1080/720?random&gravity=center?sig=1)\">
                        <div class=\"text-container\">
                            <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                            <div class=\"container-arrow-button\">
                                <a class=\"cta arrow-button\" href=\"#\"> 
                                    an example of link
                                    <svg viewBox=\"0 0 76.922 65\">
                                        <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                        <path id=\"Union_1\" data-name=\"Union 1\" d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class=\"filter\"></div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(http://unsplash.it/1080/720?random&gravity=center?sig=2)\">
                        <div class=\"text-container\">
                            <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                            <div class=\"container-arrow-button\">
                                <a class=\"cta arrow-button\" href=\"#\"> 
                                    an example of link
                                    <svg viewBox=\"0 0 76.922 65\">
                                        <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                        <path id=\"Union_1\" data-name=\"Union 1\" d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class=\"filter\"></div>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(http://unsplash.it/1080/720?random&gravity=center?sig=3)\">
                          <div class=\"text-container\">
                              <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                              <div class=\"container-arrow-button\">
                                  <a class=\"cta arrow-button\" href=\"#\"> 
                                      an example of link
                                      <svg viewBox=\"0 0 76.922 65\">
                                          <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                          <path id=\"Union_1\" data-name=\"Union 1\" d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                      </svg>
                                  </a>
                              </div>
                          </div>
                          <div class=\"filter\"></div>
                      </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(http://unsplash.it/1080/720?random&gravity=center?sig=4)\">
                            <div class=\"text-container\">
                                <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                                <div class=\"container-arrow-button\">
                                    <a class=\"cta arrow-button\" href=\"#\"> 
                                        an example of link
                                        <svg viewBox=\"0 0 76.922 65\">
                                            <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                            <path id=\"Union_1\" data-name=\"Union 1\" d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class=\"filter\"></div>
                        </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"swiper-image\" data-swiper-parallax-x=\"3%\" style=\"background-image:url(http://unsplash.it/1080/720?random&gravity=center?sig=5)\">
                            <div class=\"text-container\">
                                <h1 class=\"bigTitle\">Lorem ipsum dolor<span class=\"orangeIcon\"></span> <br> Sit amet <span class=\"orangeIcon\"></span> <br> Consectetur <span class=\"orangeIcon\"></span></h1>
                                <div class=\"container-arrow-button\">
                                    <a class=\"cta arrow-button\" href=\"#\"> 
                                        an example of link
                                        <svg viewBox=\"0 0 76.922 65\">
                                            <circle cx=\"32.5\" cy=\"32.5\" r=\"32\" transform=\"translate(11.922)\" fill=\"none\" stroke=\"#8c97d0\" stroke-width=\"1\"></circle>
                                            <path id=\"Union_1\" data-name=\"Union 1\" d=\"M-6071.353,33.349l9.643-9.642H-6111v-2h48.941l-9.293-9.294,1.414-1.414,11.881,11.883-11.881,11.881Z\" transform=\"translate(6111 10)\" fill=\"#10112b\"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class=\"filter\"></div>
                        </div>
                </div>
        </div>

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
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.1/swiper-bundle.min.js\"></script>
<script>
  const showcaseSlider = new Swiper(\".home-showcaseSlider\", {
  speed: 1000,
  slidesPerView: 1,
  parallax: true,
  // centeredSlides: true,
  autoplay: {
    delay: 5000,
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

<style>
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
.bigTitle .orangeIcon {
  width: 10px;
  height: 10px;
  transform: rotate(45deg);
  background-color: #f7970e;
  display: inline-block;
  margin-left: 5px;
}
@media (min-width: 768px) {
  .bigTitle .orangeIcon {
    width: 13px;
    height: 13px;
  }
}
@media (min-width: 1440px) {
  .bigTitle .orangeIcon {
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
    fill: #8c97d0;
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
.home-showcase .home-showcaseSlider {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {
  position: relative;
  height: 72vh;
  overflow: hidden;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
  padding: 5vw;
  width: calc(100% - (5vw*2));
  height: calc(100% - (5vw*2));
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  align-items: flex-end;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container {
  max-width: 100%;
  margin: 0 0 5rem;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .bigTitle {
  transform: translate(-140%, 0);
  transition: transform 1.15s cubic-bezier(0.58, 0, 0.28, 0.99) 0.4s;
  color: #fff;
  margin: 0 0 2.5rem;
  text-shadow: #21212121 0px 0px 5px;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button {
  transform: translate(-160%, 0);
  transition: transform 0.6s cubic-bezier(0.58, 0, 0.28, 0.99) 1s;
  width: fit-content;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button .arrow-button {
  color: #fff;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button svg path {
  fill: #fff;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button svg circle {
  stroke: #fff;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .container-arrow-button:hover svg circle {
  stroke: #8c97d0;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .filter {
  width: 100%;
  height: 100%;
  background-color: #10112b;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  opacity: 0.5;
  transition: opacity 0.8s ease-in 0.5s;
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .text-container .bigTitle, .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .text-container .container-arrow-button {
  transform: translate(0, 0);
}
.home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide-active .swiper-image .filter {
  opacity: 0;
}
.home-showcase .home-showcaseSlider .swiper-pagination {
  position: relative;
  bottom: 0;
  left: 0;
  width: fit-content;
  padding: 3.5% 0;
}
.home-showcase .home-showcaseSlider .swiper-pagination-bullet {
  width: 4vw;
  border-radius: 50px;
  height: 2px;
  background-color: #8f9397;
  opacity: 1;
  transition: width 0.8s ease-in-out, 0.4s ease-in-out;
  margin: 0 4px !important;
}
.home-showcase .home-showcaseSlider .swiper-pagination-bullet-active {
  background-color: #f7970e;
  width: 8vw;
}
.home-showcase .home-showcaseSlider .showcaseSlider-nav {
  display: flex;
  flex-direction: row;
  padding: 0 0 3.5% 5%;
  padding-right: 0;
}
.home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next {
  position: static;
  display: flex;
  align-items: flex-end;
  font-weight: 900;
  margin: 0 2vw;
  width: 20px;
  height: auto;
}
.home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev.swiper-button-disabled, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next.swiper-button-disabled {
  opacity: 1;
}
.home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev.swiper-button-disabled:after, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next.swiper-button-disabled:after {
  color: #8f9397;
}
.home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev::after, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next::after {
  font-size: 4vw;
  color: #f7970e;
}
.home-showcase .home-showcaseSlider #macaron {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  margin: 5%;
  width: 30%;
}
.home-showcase .home-showcaseSlider #macaron #text-circle {
  animation: rotate-360 12s linear 0s infinite reverse forwards;
  transform-origin: center;
}
.home-showcase .scrollSliderButton {
  position: absolute;
  left: 50%;
  bottom: 0;
  z-index: 2;
  display: flex;
  flex-direction: column;
  align-items: center;
  transform: translate(-50%, 0%);
  color: #fff !important;
  text-decoration: none;
  font-size: 3.5vw;
  height: 21vw;
  font-family: 'CabinetGrotesk-light', sans-serif;
}
.home-showcase .scrollSliderButton .line {
  height: 15vw;
  width: 1px;
  background: #8c97d0;
  margin-top: 5px;
  animation: scroll-anim-mobile 1.6s cubic-bezier(0.62, 0.01, 0.71, 0.47) 0s infinite normal forwards;
}
@media (min-width: 1024px) {
  .home-showcase {
    margin: 2rem 0 7.9vw;
  }
  .home-showcase .home-showcaseSlider {
    display: block;
  }
  .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide {
    height: clamp(45rem, 75vh, 5000px);
  }
  .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image {
    align-items: center;
  }
  .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container {
    max-width: 75%;
    margin: 0;
  }
  .home-showcase .home-showcaseSlider .swiper-wrapper .swiper-slide .swiper-image .text-container .bigTitle {
    margin: 0 0 1.25rem;
  }
  .home-showcase .home-showcaseSlider .swiper-pagination {
    position: absolute;
    bottom: 0;
    left: 0;
    padding: 0 0 2.5% 5%;
  }
  .home-showcase .home-showcaseSlider .swiper-pagination-bullet {
    width: 1.5vw;
    height: 3px;
    margin: 0 8px !important;
  }
  .home-showcase .home-showcaseSlider .swiper-pagination-bullet-active {
    width: 3vw;
  }
  .home-showcase .home-showcaseSlider .showcaseSlider-nav {
    position: absolute;
    bottom: 0;
    right: 0;
    z-index: 1;
    padding: 0 5% 2.5% 5%;
  }
  .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next {
    margin: 0 0.6vw;
  }
  .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-prev::after, .home-showcase .home-showcaseSlider .showcaseSlider-nav .showcaseSlider-next::after {
    font-size: 1vw;
  }
  .home-showcase .home-showcaseSlider #macaron {
    width: fit-content;
    width: 8.4vw;
  }
  .home-showcase .scrollSliderButton {
    position: absolute;
    left: 50%;
    bottom: 0;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    transform: translate(-50%, 40%);
    color: #fff !important;
    text-decoration: none;
    font-size: 0.9vw;
    height: 4.8vw;
    font-family: 'CabinetGrotesk-light', sans-serif;
  }
  .home-showcase .scrollSliderButton .line {
    height: 4.8vw;
    width: 2px;
    background: #8c97d0;
    margin-top: 5px;
    animation: scroll-anim 1.6s cubic-bezier(0.62, 0.01, 0.71, 0.47) 0s infinite normal forwards;
  }
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
