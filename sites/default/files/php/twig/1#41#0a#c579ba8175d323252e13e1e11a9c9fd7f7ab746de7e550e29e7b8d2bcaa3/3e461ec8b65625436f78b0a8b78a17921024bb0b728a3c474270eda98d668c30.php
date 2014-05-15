<?php

/* themes/prius/templates/block.html.twig */
class __TwigTemplate_410ac579ba8175d323252e13e1e11a9c9fd7f7ab746de7e550e29e7b8d2bcaa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 44
        echo "<div";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 45
        echo twig_render_var((isset($context["title_prefix"]) ? $context["title_prefix"] : null));
        echo "
  ";
        // line 46
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 47
            echo "    <h2";
            echo twig_render_var((isset($context["title_attributes"]) ? $context["title_attributes"] : null));
            echo ">";
            echo twig_render_var((isset($context["label"]) ? $context["label"] : null));
            echo "</h2>
  ";
        }
        // line 49
        echo "  ";
        echo twig_render_var((isset($context["title_suffix"]) ? $context["title_suffix"] : null));
        echo "

  ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/prius/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 51,  20 => 44,  144 => 158,  141 => 157,  128 => 150,  112 => 142,  82 => 119,  73 => 115,  68 => 113,  61 => 109,  38 => 93,  31 => 47,  27 => 20,  155 => 163,  149 => 160,  146 => 159,  143 => 88,  137 => 85,  134 => 153,  131 => 83,  125 => 81,  122 => 147,  116 => 144,  113 => 76,  110 => 141,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 124,  81 => 63,  79 => 118,  58 => 53,  52 => 51,  46 => 48,  28 => 42,  76 => 61,  67 => 57,  51 => 48,  47 => 54,  35 => 43,  25 => 45,  21 => 29,  54 => 40,  43 => 47,  39 => 49,  29 => 46,  26 => 87,  24 => 41,  95 => 102,  89 => 99,  86 => 98,  84 => 64,  78 => 94,  74 => 93,  70 => 114,  64 => 56,  60 => 52,  57 => 50,  55 => 52,  49 => 83,  41 => 94,  36 => 92,  34 => 36,  30 => 43,  23 => 40,  19 => 82,);
    }
}
