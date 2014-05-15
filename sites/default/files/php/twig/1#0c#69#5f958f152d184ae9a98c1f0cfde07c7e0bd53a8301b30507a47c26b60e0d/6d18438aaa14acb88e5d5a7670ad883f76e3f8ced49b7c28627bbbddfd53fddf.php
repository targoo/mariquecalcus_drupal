<?php

/* core/modules/system/templates/feed-icon.html.twig */
class __TwigTemplate_0c695f958f152d184ae9a98c1f0cfde07c7e0bd53a8301b30507a47c26b60e0d extends Twig_Template
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
        // line 18
        echo "<a href=\"";
        echo twig_render_var((isset($context["url"]) ? $context["url"] : null));
        echo "\"";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo ">";
        echo twig_render_var((isset($context["icon"]) ? $context["icon"] : null));
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 18,);
    }
}
