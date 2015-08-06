<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_e423e80a6979fcd76afbcceab071f20653a0394a2461652761a33f202fa3b32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  371 => 127,  359 => 123,  356 => 122,  353 => 121,  350 => 120,  347 => 119,  333 => 115,  328 => 113,  324 => 112,  313 => 110,  308 => 109,  281 => 98,  274 => 96,  234 => 90,  180 => 70,  161 => 58,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 518,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  696 => 476,  692 => 474,  686 => 472,  682 => 470,  678 => 468,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  251 => 182,  249 => 92,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  303 => 122,  300 => 121,  289 => 196,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 93,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  194 => 70,  191 => 77,  185 => 75,  299 => 136,  293 => 107,  276 => 193,  265 => 121,  261 => 120,  232 => 89,  215 => 113,  197 => 71,  192 => 102,  174 => 74,  153 => 69,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 118,  237 => 91,  218 => 115,  210 => 77,  207 => 76,  202 => 110,  172 => 68,  160 => 83,  146 => 67,  134 => 54,  118 => 49,  70 => 19,  76 => 25,  23 => 4,  186 => 72,  150 => 55,  127 => 62,  181 => 65,  178 => 64,  170 => 80,  167 => 71,  165 => 60,  148 => 97,  137 => 31,  113 => 48,  104 => 31,  90 => 26,  53 => 12,  188 => 76,  155 => 55,  152 => 54,  129 => 60,  126 => 67,  124 => 30,  84 => 24,  100 => 35,  65 => 18,  34 => 5,  114 => 36,  97 => 35,  81 => 23,  77 => 20,  58 => 14,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 143,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 88,  278 => 106,  268 => 122,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 114,  177 => 69,  169 => 51,  140 => 71,  132 => 40,  128 => 42,  107 => 51,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 116,  235 => 115,  230 => 82,  227 => 81,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 68,  204 => 75,  179 => 52,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 41,  71 => 30,  67 => 20,  63 => 18,  59 => 16,  38 => 7,  94 => 34,  89 => 36,  85 => 23,  75 => 18,  68 => 14,  56 => 21,  87 => 34,  21 => 2,  26 => 96,  93 => 27,  88 => 24,  78 => 19,  46 => 10,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  201 => 74,  196 => 90,  183 => 71,  171 => 73,  166 => 79,  163 => 84,  158 => 67,  156 => 58,  151 => 55,  142 => 44,  138 => 47,  136 => 62,  121 => 50,  117 => 37,  105 => 34,  91 => 25,  62 => 12,  49 => 11,  24 => 60,  25 => 5,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 11,  40 => 8,  37 => 4,  22 => 1,  246 => 93,  157 => 82,  145 => 96,  139 => 42,  131 => 49,  123 => 42,  120 => 38,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 50,  96 => 37,  83 => 33,  74 => 30,  66 => 27,  55 => 13,  52 => 12,  50 => 5,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 9,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 95,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 70,  149 => 36,  147 => 51,  144 => 51,  141 => 48,  133 => 45,  130 => 46,  125 => 41,  122 => 66,  116 => 39,  112 => 53,  109 => 50,  106 => 36,  103 => 17,  99 => 31,  95 => 27,  92 => 33,  86 => 30,  82 => 21,  80 => 27,  73 => 24,  64 => 13,  60 => 22,  57 => 18,  54 => 29,  51 => 13,  48 => 16,  45 => 9,  42 => 10,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}