<?php

/* core/modules/views/templates/views-view-unformatted.html.twig */
class __TwigTemplate_784a6554d0f519e60d1418f6e56430b40b030e3025a07a04494f6b90a7ac8637 extends Twig_Template
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
        // line 17
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 18
            echo "  <h3>";
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "</h3>
";
        }
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "  <div";
            echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"));
            echo ">
    ";
            // line 22
            echo twig_render_var($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"));
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  27 => 20,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  81 => 63,  79 => 62,  58 => 53,  52 => 51,  46 => 48,  28 => 42,  76 => 61,  67 => 57,  51 => 48,  47 => 47,  35 => 43,  25 => 41,  21 => 18,  54 => 40,  43 => 47,  39 => 37,  29 => 30,  26 => 34,  24 => 41,  95 => 102,  89 => 99,  86 => 98,  84 => 64,  78 => 94,  74 => 93,  70 => 58,  64 => 56,  60 => 52,  57 => 50,  55 => 52,  49 => 83,  41 => 46,  36 => 22,  34 => 36,  30 => 43,  23 => 40,  19 => 17,);
    }
}
