<?php

/* LiipSearchBundle:Search:search_results_summary.html.twig */
class __TwigTemplate_f97c285605e78be1999855027ff0783c5778ccfe30215ddfeacf369d63d86dd4 extends Twig_Template
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
        // line 1
        echo "<p>
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("search_term", (isset($context["estimated"]) ? $context["estimated"] : $this->getContext($context, "estimated")), array("%query%" => (isset($context["searchTerm"]) ? $context["searchTerm"] : $this->getContext($context, "searchTerm")), "%count%" => (isset($context["estimated"]) ? $context["estimated"] : $this->getContext($context, "estimated"))), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
</p>

";
    }

    public function getTemplateName()
    {
        return "LiipSearchBundle:Search:search_results_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  114 => 27,  97 => 23,  81 => 14,  77 => 12,  58 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 24,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 7,  94 => 28,  89 => 19,  85 => 16,  75 => 11,  68 => 20,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  88 => 17,  78 => 17,  46 => 10,  27 => 5,  44 => 8,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 20,  62 => 23,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 15,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 22,  66 => 15,  55 => 8,  52 => 9,  50 => 10,  43 => 9,  41 => 8,  35 => 10,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 28,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 22,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 16,  57 => 15,  54 => 13,  51 => 12,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 6,  33 => 8,  30 => 7,);
    }
}
