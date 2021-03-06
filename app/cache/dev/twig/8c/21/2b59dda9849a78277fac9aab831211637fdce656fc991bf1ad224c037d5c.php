<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_8c212b59dda9849a78277fac9aab831211637fdce656fc991bf1ad224c037d5c extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  194 => 70,  191 => 77,  185 => 75,  299 => 136,  293 => 135,  276 => 126,  265 => 121,  261 => 120,  232 => 114,  215 => 113,  197 => 71,  192 => 102,  174 => 74,  153 => 69,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 118,  237 => 126,  218 => 115,  210 => 112,  207 => 75,  202 => 110,  172 => 62,  160 => 83,  146 => 67,  134 => 54,  118 => 49,  70 => 19,  76 => 31,  23 => 4,  186 => 60,  150 => 55,  127 => 62,  181 => 65,  178 => 64,  170 => 80,  167 => 71,  165 => 60,  148 => 97,  137 => 31,  113 => 48,  104 => 42,  90 => 27,  53 => 12,  188 => 76,  155 => 75,  152 => 81,  129 => 60,  126 => 67,  124 => 30,  84 => 24,  100 => 35,  65 => 18,  34 => 6,  114 => 42,  97 => 35,  81 => 23,  77 => 29,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 130,  283 => 88,  278 => 106,  268 => 122,  264 => 84,  258 => 119,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 114,  177 => 65,  169 => 51,  140 => 71,  132 => 40,  128 => 31,  107 => 51,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 116,  235 => 115,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 78,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 40,  102 => 41,  71 => 30,  67 => 24,  63 => 25,  59 => 14,  38 => 6,  94 => 34,  89 => 36,  85 => 46,  75 => 27,  68 => 14,  56 => 21,  87 => 34,  21 => 2,  26 => 96,  93 => 32,  88 => 38,  78 => 34,  46 => 13,  27 => 3,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 73,  166 => 79,  163 => 84,  158 => 67,  156 => 58,  151 => 55,  142 => 44,  138 => 56,  136 => 62,  121 => 50,  117 => 21,  105 => 34,  91 => 41,  62 => 23,  49 => 14,  24 => 60,  25 => 5,  19 => 1,  79 => 26,  72 => 26,  69 => 14,  47 => 8,  40 => 8,  37 => 4,  22 => 1,  246 => 93,  157 => 82,  145 => 96,  139 => 42,  131 => 49,  123 => 42,  120 => 42,  115 => 43,  111 => 47,  108 => 17,  101 => 52,  98 => 50,  96 => 37,  83 => 33,  74 => 30,  66 => 27,  55 => 16,  52 => 15,  50 => 5,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 9,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 95,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 70,  149 => 36,  147 => 54,  144 => 51,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 66,  116 => 39,  112 => 53,  109 => 50,  106 => 36,  103 => 17,  99 => 31,  95 => 42,  92 => 33,  86 => 30,  82 => 31,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 18,  54 => 29,  51 => 17,  48 => 16,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 4,  30 => 3,);
    }
}
