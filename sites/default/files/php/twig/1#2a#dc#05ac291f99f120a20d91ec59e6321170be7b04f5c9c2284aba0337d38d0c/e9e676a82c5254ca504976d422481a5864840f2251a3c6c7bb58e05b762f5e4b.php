<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_2adc05ac291f99f120a20d91ec59e6321170be7b04f5c9c2284aba0337d38d0c extends Twig_Template
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
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_render_var((isset($context["page_top"]) ? $context["page_top"] : null));
        echo "
    ";
        // line 42
        echo twig_render_var((isset($context["page"]) ? $context["page"] : null));
        echo "
    ";
        // line 43
        echo twig_render_var((isset($context["page_bottom"]) ? $context["page_bottom"] : null));
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 42,  44 => 37,  22 => 30,  60 => 53,  49 => 39,  31 => 33,  20 => 44,  81 => 46,  68 => 41,  64 => 39,  55 => 37,  45 => 51,  39 => 35,  30 => 28,  33 => 17,  112 => 105,  104 => 101,  98 => 98,  95 => 97,  92 => 96,  86 => 93,  83 => 92,  80 => 91,  74 => 43,  72 => 88,  62 => 43,  56 => 81,  42 => 19,  40 => 73,  29 => 46,  27 => 32,  21 => 13,  85 => 44,  79 => 43,  65 => 84,  50 => 32,  47 => 31,  28 => 27,  77 => 44,  71 => 39,  66 => 54,  63 => 36,  57 => 52,  54 => 41,  35 => 34,  26 => 25,  24 => 14,  51 => 55,  48 => 35,  46 => 47,  43 => 27,  41 => 46,  36 => 31,  34 => 23,  32 => 29,  25 => 45,  23 => 27,  19 => 29,);
    }
}
