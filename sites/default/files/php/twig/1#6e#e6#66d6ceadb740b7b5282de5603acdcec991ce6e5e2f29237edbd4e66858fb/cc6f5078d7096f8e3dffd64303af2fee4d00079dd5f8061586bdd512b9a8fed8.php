<?php

/* core/modules/user/templates/user.html.twig */
class __TwigTemplate_6ee666d6ceadb740b7b5282de5603acdcec991ce6e5e2f29237edbd4e66858fb extends Twig_Template
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
        // line 26
        echo "<article";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">
  ";
        // line 27
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 28
            echo twig_render_var((isset($context["content"]) ? $context["content"] : null));
        }
        // line 30
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 30,  26 => 28,  24 => 27,  95 => 102,  89 => 99,  86 => 98,  84 => 97,  78 => 94,  74 => 93,  70 => 91,  64 => 88,  60 => 87,  57 => 86,  55 => 85,  49 => 83,  41 => 80,  36 => 79,  34 => 78,  30 => 77,  23 => 16,  19 => 26,);
    }
}
