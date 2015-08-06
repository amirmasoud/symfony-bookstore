<?php

/* ::base.html.twig */
class __TwigTemplate_bb48153e925195e1cfa3b3345701cca45ae61a4878492b7f4cb282e051ef3391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 11,  53 => 5,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 63,  124 => 62,  84 => 48,  100 => 33,  65 => 35,  34 => 26,  114 => 59,  97 => 52,  81 => 25,  77 => 12,  58 => 17,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 24,  71 => 21,  67 => 20,  63 => 34,  59 => 6,  38 => 4,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 2,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 25,  78 => 17,  46 => 13,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 55,  91 => 26,  62 => 18,  49 => 14,  24 => 7,  25 => 6,  19 => 2,  79 => 19,  72 => 3,  69 => 11,  47 => 12,  40 => 11,  37 => 11,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 31,  96 => 20,  83 => 44,  74 => 17,  66 => 23,  55 => 31,  52 => 10,  50 => 14,  43 => 12,  41 => 9,  35 => 7,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 21,  86 => 45,  82 => 22,  80 => 43,  73 => 55,  64 => 10,  60 => 13,  57 => 16,  54 => 11,  51 => 3,  48 => 12,  45 => 12,  42 => 10,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
