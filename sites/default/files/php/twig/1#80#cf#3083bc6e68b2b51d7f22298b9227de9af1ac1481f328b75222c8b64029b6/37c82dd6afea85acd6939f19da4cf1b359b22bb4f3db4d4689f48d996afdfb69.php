<?php

/* core/modules/system/templates/pager.html.twig */
class __TwigTemplate_80cf3083bc6e68b2b51d7f22298b9227de9af1ac1481f328b75222c8b64029b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 15
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Pages"));
            echo "</h2>
  ";
            // line 16
            echo twig_render_var((isset($context["items"]) ? $context["items"] : null));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  27 => 20,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  81 => 63,  79 => 62,  58 => 53,  52 => 51,  46 => 48,  28 => 42,  76 => 61,  67 => 57,  51 => 48,  47 => 47,  35 => 43,  25 => 41,  21 => 15,  54 => 40,  43 => 47,  39 => 37,  29 => 30,  26 => 16,  24 => 41,  95 => 102,  89 => 99,  86 => 98,  84 => 64,  78 => 94,  74 => 93,  70 => 58,  64 => 56,  60 => 52,  57 => 50,  55 => 52,  49 => 83,  41 => 46,  36 => 22,  34 => 36,  30 => 43,  23 => 40,  19 => 14,);
    }
}
