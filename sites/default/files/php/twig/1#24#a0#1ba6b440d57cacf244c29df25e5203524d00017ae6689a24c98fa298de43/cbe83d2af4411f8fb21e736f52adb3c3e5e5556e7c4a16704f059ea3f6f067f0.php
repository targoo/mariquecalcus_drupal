<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_24a01ba6b440d57cacf244c29df25e5203524d00017ae6689a24c98fa298de43 extends Twig_Template
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
        // line 15
        echo "<form";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo "><div>";
        echo twig_render_var((isset($context["children"]) ? $context["children"] : null));
        echo "</div></form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 58,  71 => 55,  66 => 54,  63 => 53,  57 => 51,  54 => 50,  35 => 44,  26 => 41,  24 => 40,  51 => 32,  48 => 48,  46 => 47,  43 => 27,  41 => 46,  36 => 24,  34 => 23,  32 => 43,  25 => 20,  23 => 19,  19 => 15,);
    }
}
