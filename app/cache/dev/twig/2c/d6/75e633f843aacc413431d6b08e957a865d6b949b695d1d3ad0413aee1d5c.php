<?php

/* ChakoshHomeBundle:Admin:newTwigTemplate.html.twig */
class __TwigTemplate_2cd675e633f843aacc413431d6b08e957a865d6b949b695d1d3ad0413aee1d5c extends Twig_Template
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
        echo "    \$(\"button#insert-img-to-post\").click(function(){
        value = \$(this).attr('data-name');
        type = \$(this).attr('data-type').toLowerCase();
        if(type === 'jpg' || type === 'png' || type === 'gif')
            \$(\"#editor\").append('<img src=\"'+value+'\" />'); 
        else if(type === 'mp3' || type === 'omg' || type === 'wmv')
            \$(\"#editor\").append('<audio controls><source src=\"'+ value +'\" type=\"audio/' + type + '\">Your browser does not support the audio element.</audio>');
        else if(type === 'flv' || type === 'wmv' || type === 'mp4')
            \$(\"#editor\").append('<video controls><source src=\"'+ value +'\" type=\"video/' + type + '\">Your browser does not support the video element.</video>');                    
        //alert(value);
        \$('#myModal').modal('hide');
    });            
    \$(\"#chakosh_blogbundle_booktype_file\").click(function(){
        \$(this).toggleClass('active');
    })
    
    \$(\"#select-cover\").click(function(){
        console.log(\"I'm Here:)\");
        value = \$(this).attr('data-name');
        file = \$(this).attr('data-file');
        
        alert(value);
    });
    
    \$(\"#ava_files tr td button\").click(function(){
        value = \$(this).attr('data-name');
        file = \$(this).attr('data-file');
        
        \$(\"#chakosh_blogbundle_booktype_cover\").val(value);
        
        if(\$(\"#chakosh_blogbundle_booktype_file\").hasClass('active'))
            {
            \$(\"#chakosh_blogbundle_booktype_file\").val(value);
            \$(\"#chakosh_blogbundle_booktype_file\").toggleClass('active');
            }
        if(\$(\"#chakosh_blogbundle_booktype_cover\").hasClass('active'))
            {
            \$(\"#chakosh_blogbundle_booktype_cover\").val(value);
            \$(\"#chakosh_blogbundle_booktype_cover\").toggleClass('active');
            }
        \$('#myModal').modal('hide')
    })";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:newTwigTemplate.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 36,  118 => 33,  70 => 27,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 88,  148 => 52,  137 => 65,  113 => 40,  104 => 51,  90 => 39,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 39,  126 => 35,  124 => 45,  84 => 4,  100 => 35,  65 => 18,  34 => 3,  114 => 42,  97 => 52,  81 => 3,  77 => 26,  58 => 10,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 50,  132 => 40,  128 => 47,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 37,  63 => 25,  59 => 6,  38 => 4,  94 => 34,  89 => 25,  85 => 29,  75 => 17,  68 => 36,  56 => 23,  87 => 30,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 3,  44 => 6,  31 => 2,  28 => 2,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 70,  142 => 39,  138 => 38,  136 => 49,  121 => 43,  117 => 41,  105 => 16,  91 => 12,  62 => 17,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 25,  72 => 3,  69 => 14,  47 => 7,  40 => 12,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 48,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 17,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 22,  66 => 26,  55 => 9,  52 => 8,  50 => 12,  43 => 5,  41 => 8,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 51,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 36,  103 => 29,  99 => 35,  95 => 28,  92 => 42,  86 => 45,  82 => 21,  80 => 8,  73 => 33,  64 => 11,  60 => 24,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 23,  42 => 16,  39 => 4,  36 => 7,  33 => 3,  30 => 4,);
    }
}
