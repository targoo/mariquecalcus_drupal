<?php

/* core/modules/system/templates/image.html.twig */
class __TwigTemplate_9b0e630f200a2e935de6c328250b7d5c368437622b6dc6dc46d180a1c9877213 extends Twig_Template
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
        echo "<img";
        echo twig_render_var((isset($context["attributes"]) ? $context["attributes"] : null));
        echo " />
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
