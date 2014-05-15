<?php

/* themes/prius/templates/html.html.twig */
class __TwigTemplate_c30275011c63bfe3b5eb758d626aa65a69b1457d27b9ec7ccaee51ffe4099b1a extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_render_var((isset($context["html_attributes"]) ? $context["html_attributes"] : null));
        echo ">
  <head>
    ";
        // line 32
        echo twig_render_var((isset($context["head"]) ? $context["head"] : null));
        echo "
    <title>";
        // line 33
        echo twig_render_var((isset($context["head_title"]) ? $context["head_title"] : null));
        echo "</title>
    ";
        // line 34
        echo twig_render_var((isset($context["styles"]) ? $context["styles"] : null));
        echo "
    ";
        // line 35
        echo twig_render_var((isset($context["scripts"]) ? $context["scripts"] : null));
        echo "
  </head>
  <body";
        // line 37
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
    ";
        // line 38
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 39
        echo twig_render_var((isset($context["page"]) ? $context["page"] : null));
        echo "
    ";
        // line 40
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/prius/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 40,  48 => 38,  44 => 37,  22 => 30,  45 => 51,  20 => 44,  144 => 158,  141 => 157,  128 => 150,  112 => 142,  82 => 119,  73 => 115,  68 => 113,  61 => 109,  38 => 93,  31 => 33,  27 => 32,  155 => 163,  149 => 160,  146 => 159,  143 => 88,  137 => 85,  134 => 153,  131 => 83,  125 => 81,  122 => 147,  116 => 144,  113 => 76,  110 => 141,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 124,  81 => 63,  79 => 118,  58 => 53,  52 => 39,  46 => 48,  28 => 42,  76 => 61,  67 => 57,  51 => 48,  47 => 54,  35 => 34,  25 => 45,  21 => 29,  54 => 40,  43 => 47,  39 => 35,  29 => 46,  26 => 87,  24 => 41,  95 => 102,  89 => 99,  86 => 98,  84 => 64,  78 => 94,  74 => 93,  70 => 114,  64 => 56,  60 => 52,  57 => 50,  55 => 52,  49 => 83,  41 => 94,  36 => 92,  34 => 36,  30 => 43,  23 => 40,  19 => 29,);
    }
}
