<?php

/* ChakoshHomeBundle:Admin:toolbar.html.twig */
class __TwigTemplate_cb492da2fa4d75cfab13eb3b4d181ecc47546113ba9f5230af6c8e6b46c6ab7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 66
        echo "<div class=\"btn-toolbar\" data-role=\"editor-toolbar\" data-target=\"#editor\">
<div class=\"btn-group\">
  <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"\" data-original-title=\"قلم\"><i class=\"glyphicon glyphicon-font\"></i><b class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
    <li><a data-edit=\"fontName B Yekan\" style=\"font-family:'B Yekan'\">B Yekan</a></li><li><a data-edit=\"fontName Serif\" style=\"font-family:'Serif'\">Serif</a></li><li><a data-edit=\"fontName Sans\" style=\"font-family:'Sans'\">Sans</a></li><li><a data-edit=\"fontName Arial\" style=\"font-family:'Arial'\">Arial</a></li><li><a data-edit=\"fontName Arial Black\" style=\"font-family:'Arial Black'\">Arial Black</a></li><li><a data-edit=\"fontName Courier\" style=\"font-family:'Courier'\">Courier</a></li><li><a data-edit=\"fontName Courier New\" style=\"font-family:'Courier New'\">Courier New</a></li><li><a data-edit=\"fontName Comic Sans MS\" style=\"font-family:'Comic Sans MS'\">Comic Sans MS</a></li><li><a data-edit=\"fontName Helvetica\" style=\"font-family:'Helvetica'\">Helvetica</a></li><li><a data-edit=\"fontName Impact\" style=\"font-family:'Impact'\">Impact</a></li><li><a data-edit=\"fontName Lucida Grande\" style=\"font-family:'Lucida Grande'\">Lucida Grande</a></li><li><a data-edit=\"fontName Lucida Sans\" style=\"font-family:'Lucida Sans'\">Lucida Sans</a></li><li><a data-edit=\"fontName Tahoma\" style=\"font-family:'Tahoma'\">Tahoma</a></li><li><a data-edit=\"fontName Times\" style=\"font-family:'Times'\">Times</a></li><li><a data-edit=\"fontName Times New Roman\" style=\"font-family:'Times New Roman'\">Times New Roman</a></li><li><a data-edit=\"fontName Verdana\" style=\"font-family:'Verdana'\">Verdana</a></li></ul>
  </div>
<div class=\"btn-group\">
  <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" title=\"\" data-original-title=\"اندازه قلم\"><i class=\"glyphicon glyphglyphicon glyphicon-text-height\"></i>&nbsp;<b class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
    <li><a data-edit=\"fontSize 5\"><font size=\"5\">بزرگ</font></a></li>
    <li><a data-edit=\"fontSize 3\"><font size=\"3\">نرمال</font></a></li>
    <li><a data-edit=\"fontSize 1\"><font size=\"1\">کوچک</font></a></li>
    </ul>
</div>
<div class=\"btn-group\">
  <a class=\"btn\" data-edit=\"bold\" title=\"\" data-original-title=\"درشت (Ctrl/Cmd+B)\"><i class=\"glyphicon glyphicon-bold\"></i></a>
  <a class=\"btn\" data-edit=\"italic\" title=\"\" data-original-title=\"مورب (Ctrl/Cmd+I)\"><i class=\"glyphicon glyphicon-italic\"></i></a>
  <a class=\"btn\" data-edit=\"underline\" title=\"\" data-original-title=\"زیرخط (Ctrl/Cmd+U)\"><i class=\"glyphicon glyphicon-usd\"></i></a>
</div>
<div class=\"btn-group\">
  <a class=\"btn\" data-edit=\"insertunorderedlist\" title=\"\" data-original-title=\"لیست نقطه ای\"><i class=\"glyphicon glyphicon-list\"></i></a>
  <a class=\"btn\" data-edit=\"insertorderedlist\" title=\"\" data-original-title=\"لیست عددی\"><i class=\"glyphicon glyphicon-list\"></i></a>
  <a class=\"btn\" data-edit=\"outdent\" title=\"\" data-original-title=\"کاهش فاصله (Shift+Tab)\"><i class=\"glyphicon glyphicon-indent-left\"></i></a>
  <a class=\"btn\" data-edit=\"indent\" title=\"\" data-original-title=\"فاصله (تب)\"><i class=\"glyphicon glyphicon-indent-right\"></i></a>
</div>
<div class=\"btn-group\">
  <a class=\"btn btn-info\" data-edit=\"justifyleft\" title=\"\" data-original-title=\"چپ چین (Ctrl/Cmd+L)\"><i class=\"glyphicon glyphicon-align-left\"></i></a>
  <a class=\"btn\" data-edit=\"justifycenter\" title=\"\" data-original-title=\"وسط چین (Ctrl/Cmd+E)\"><i class=\"glyphicon glyphicon-align-center\"></i></a>
  <a class=\"btn\" data-edit=\"justifyright\" title=\"\" data-original-title=\"راست چین (Ctrl/Cmd+R)\"><i class=\"glyphicon glyphicon-align-right\"></i></a>
  <a class=\"btn\" data-edit=\"justifyfull\" title=\"\" data-original-title=\"از دو طرف (Ctrl/Cmd+J)\"><i class=\"glyphicon glyphicon-align-justify\"></i></a>
</div>
<div class=\"btn-group\">
    <a class=\"btn\" data-toggle=\"dropdown\" title=\"\" data-original-title=\"لینک\"><i class=\"glyphicon glyphicon-link\"></i></a>
    <div class=\"dropdown-menu input-append\">
        <input id=\"url\" placeholder=\"URL\" type=\"text\" data-edit=\"createLink\">
        <button class=\"btn\" type=\"button\">افزودن</button>
    </div>
</div>

<div class=\"btn-group\">
  <a class=\"btn\" title=\"\" id=\"pictureBtn\" data-original-title=\"گذاشتن تصویر\"><i class=\"glyphicon glyphicon-picture\"></i></a>
</div>
<div class=\"btn-group\">
  <a class=\"btn\" data-edit=\"undo\" title=\"\" data-original-title=\"به عقب (Ctrl/Cmd+Z)\"><i class=\"glyphicon glyphicon-repeat\"></i></a>
  <a class=\"btn\" data-edit=\"redo\" title=\"\" data-original-title=\"به جلو (Ctrl/Cmd+Y)\"><i class=\"glyphicon glyphicon-repeat\"></i></a>
</div>
</div>
";
    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        // line 2
        echo "<style>
#editor {
    max-height: 250px;
    height: 250px;
    background-color: white;
    border-collapse: separate; 
    border: 1px solid rgb(204, 204, 204); 
    padding: 15px; 
    box-sizing: content-box; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; 
    box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
    border-top-right-radius: 3px; border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px; border-top-left-radius: 3px;
    overflow: scroll;
    outline: none
}
#voiceBtn {
    width: 20px;
    color: transparent;
    background-color: transparent;
    transform: scale(2.0, 2.0);
    -webkit-transform: scale(2.0, 2.0);
    -moz-transform: scale(2.0, 2.0);
    border: transparent;
    cursor: pointer;
    box-shadow: none;
    -webkit-box-shadow: none;
}

div[data-role=\"editor-toolbar\"] {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.dropdown-menu a {
    cursor: pointer;
}
    

.btn-toolbar
{
    height: auto;
    background: #fff;
    border-radius: 3px 3px 0 0;
    padding: 5px;
    border: 1px solid #f6f6f6;
}
.btn-toolbar a{
    color: #000;
}

.btn-toolbar .btn-group{
    border: 1px solid #f6f6f6;
    border-radius: 4px;
}

.dropdown-menu #url:focus
{
    display: block !important;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:toolbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 36,  118 => 33,  70 => 27,  76 => 2,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 88,  148 => 52,  137 => 65,  113 => 40,  104 => 51,  90 => 39,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 39,  126 => 35,  124 => 45,  84 => 4,  100 => 35,  65 => 18,  34 => 3,  114 => 42,  97 => 52,  81 => 3,  77 => 26,  58 => 10,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 50,  132 => 40,  128 => 47,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 37,  63 => 25,  59 => 6,  38 => 4,  94 => 34,  89 => 25,  85 => 29,  75 => 17,  68 => 36,  56 => 23,  87 => 30,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 3,  44 => 6,  31 => 2,  28 => 2,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 70,  142 => 39,  138 => 38,  136 => 49,  121 => 43,  117 => 41,  105 => 16,  91 => 12,  62 => 17,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 25,  72 => 3,  69 => 14,  47 => 7,  40 => 12,  37 => 4,  22 => 66,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 48,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 17,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 22,  66 => 26,  55 => 9,  52 => 8,  50 => 12,  43 => 5,  41 => 8,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 51,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 36,  103 => 29,  99 => 35,  95 => 28,  92 => 42,  86 => 45,  82 => 21,  80 => 8,  73 => 1,  64 => 11,  60 => 24,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 23,  42 => 16,  39 => 4,  36 => 7,  33 => 3,  30 => 4,);
    }
}
