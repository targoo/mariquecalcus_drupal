<?php

/* themes/prius/templates/page.html.twig */
class __TwigTemplate_7d656e6e7b2ebc712d3b6cf26395fbb5a462cffe7b490a3f83f055f73be7e8f7 extends Twig_Template
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
        // line 82
        echo "
<div class=\"container\">

  <header id=\"header\">
    <div class=\"logo\">
      <a href=\"";
        // line 87
        echo twig_render_var((isset($context["front_page"]) ? $context["front_page"] : null));
        echo "\" title=\"";
        echo twig_render_var(t("Home"));
        echo "\" rel=\"home\" id=\"logo\">
        Prius
      </a>
    </div>

    ";
        // line 92
        if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
            // line 93
            echo "      <nav id =\"main-menu\" class=\"navigation\" role=\"navigation\">
        ";
            // line 94
            echo twig_render_var((isset($context["main_menu"]) ? $context["main_menu"] : null));
            echo "
      </nav>
    ";
        }
        // line 97
        echo "  </header>

  <div id=\"main-wrapper\">

    <div class=\"mobile-container\">
      <a id=\"mobile-nav\" href=\"#mobile-nav\">MENU</a>
    </div>

    <main id=\"main\" role=\"main\">

      <aside id=\"aside_left\">
        aside_left
        ";
        // line 109
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "aside_left"));
        echo "
      </aside>

      <div id=\"content\">
        ";
        // line 113
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 114
            echo "          <h1 class=\"title\" id=\"page-title\">
            ";
            // line 115
            echo twig_render_var((isset($context["title"]) ? $context["title"] : null));
            echo "
          </h1>
        ";
        }
        // line 118
        echo "
        ";
        // line 119
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"));
        echo "
      </div>

      <aside id=\"aside_right\">
        aside_right
        ";
        // line 124
        echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "aside_right"));
        echo "
      </aside>

    </main>

    <!--section class=\"col-2 ss-style-triangles\">
      <div class=\"column text\">
        <h2>Objectively innovate empowered manufactured products</h2>
        <p>Galaxies a still more glorious dawn awaits shores of the cosmic ocean bits of moving fluff the only home we've ever known finite but unbounded colonies astonishment laws of physics a very small stage in a vast cosmic arena brain is the seed of intelligence realm of the galaxies Apollonius of Perga rogue intelligent beings courage of our questions made in the interiors</p>
      </div>
      <div class=\"column\">
        <span class=\"icon icon-headphones\"></span>
      </div>
    </section-->

    <footer class=\"section\">

      ";
        // line 141
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn")) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn"))) {
            // line 142
            echo "        <div id=\"footer-columns\">
          <div id=\"footer_firstcolumn\">
            ";
            // line 144
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn"));
            echo "
          </div>
          <div id=\"footer_secondcolumn\">
            ";
            // line 147
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn"));
            echo "
          </div>
          <div id=\"footer_thirdcolumn\">
            ";
            // line 150
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn"));
            echo "
          </div>
          <div id=\"footer_fourthcolumn\">
            ";
            // line 153
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn"));
            echo "
          </div>
        </div><!-- /#footer-columns -->
      ";
        }
        // line 157
        echo "
      ";
        // line 158
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer")) {
            // line 159
            echo "        <div id=\"footer\" role=\"contentinfo\">
          ";
            // line 160
            echo twig_render_var($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer"));
            echo "
        </div> <!-- /#footer -->
      ";
        }
        // line 163
        echo "
    </footer>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/prius/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 158,  141 => 157,  128 => 150,  112 => 142,  82 => 119,  73 => 115,  68 => 113,  61 => 109,  38 => 93,  31 => 21,  27 => 20,  155 => 163,  149 => 160,  146 => 159,  143 => 88,  137 => 85,  134 => 153,  131 => 83,  125 => 81,  122 => 147,  116 => 144,  113 => 76,  110 => 141,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 124,  81 => 63,  79 => 118,  58 => 53,  52 => 51,  46 => 48,  28 => 42,  76 => 61,  67 => 57,  51 => 48,  47 => 97,  35 => 43,  25 => 41,  21 => 29,  54 => 40,  43 => 47,  39 => 37,  29 => 30,  26 => 87,  24 => 41,  95 => 102,  89 => 99,  86 => 98,  84 => 64,  78 => 94,  74 => 93,  70 => 114,  64 => 56,  60 => 52,  57 => 50,  55 => 52,  49 => 83,  41 => 94,  36 => 92,  34 => 36,  30 => 43,  23 => 40,  19 => 82,);
    }
}
