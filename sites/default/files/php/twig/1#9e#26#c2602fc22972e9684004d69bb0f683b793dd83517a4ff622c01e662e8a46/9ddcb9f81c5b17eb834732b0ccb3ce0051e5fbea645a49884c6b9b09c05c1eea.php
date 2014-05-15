<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_9e26c2602fc22972e9684004d69bb0f683b793dd83517a4ff622c01e662e8a46 extends Twig_Template
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
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
    ";
            // line 25
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 24,  85 => 44,  79 => 43,  65 => 37,  50 => 32,  47 => 31,  28 => 27,  77 => 58,  71 => 39,  66 => 54,  63 => 36,  57 => 34,  54 => 33,  35 => 44,  26 => 25,  24 => 26,  51 => 32,  48 => 48,  46 => 47,  43 => 27,  41 => 46,  36 => 29,  34 => 23,  32 => 28,  25 => 20,  23 => 19,  19 => 23,);
    }
}
