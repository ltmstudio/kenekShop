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

/* default/template/common/footer.twig */
class __TwigTemplate_ace278dd05f5dd0c8a38ac6722b12f5bb027934775a6602a70eb60470ebed60c extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-sm-3\">
     <p>logo</p>
      <p>Lorem Ipsum is simply dummy text of the printing and
        typesetting industry. Lorem Ipsum has been the industry's
        standard dummy.</p>
        <p>Powered By EK  © 2024 </p>
    </div>
      ";
        // line 11
        if (($context["informations"] ?? null)) {
            // line 12
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 13
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 16
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </ul>
      </div>
      ";
        }
        // line 21
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 22
        echo ($context["text_extra"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 24
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 25
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 26
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 31
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 33
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 34
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 35
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 41
        echo ($context["powered"] ?? null);
        echo "</p>
  </div>
</footer>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 45
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 45);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 45);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 45);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
<a style=\"display:none;visibility:hidden;opacity:0;position:absolute;bottom:-100%;left:-100%;\" href=\"https://dev-opencart.com/\" title=\"Модули для Opencart\">Модули для Opencart</a><a style=\"display:none;visibility:hidden;opacity:0;position:absolute;bottom:-100%;left:-100%;\" href=\"https://dev-opencart.com/\" title=\"Модули для Opencart\">Модули для Opencart</a></body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 50,  174 => 48,  170 => 47,  157 => 45,  153 => 44,  147 => 41,  137 => 36,  131 => 35,  125 => 34,  119 => 33,  114 => 31,  105 => 27,  99 => 26,  93 => 25,  87 => 24,  82 => 22,  79 => 21,  74 => 18,  63 => 16,  59 => 15,  54 => 13,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
