<?php

/* ChakoshHomeBundle:Base:searchform.html.twig */
class __TwigTemplate_9159fd98f3a73e5edf27678969b5b305f6bfb18f3336ff8c418e84df69cad9e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('style', $context, $blocks);
        // line 4
        $this->displayBlock('js', $context, $blocks);
        // line 33
        echo "<form id=\"searchform\" action=\"";
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\" class=\"navbar-form navbar-right form-inline\">
    <input type=\"search\" id=\"search\" name=\"q\" class=\"form-control\" placeholder=\"جستجو برای\" dir=\"auto\" />
    <button type=\"submit\"><span class=\"glyphicon glyphicon-search\"></span></button>
</form> 
<div id=\"loading\"><span></span></div>
<div id=\"ajax\">
</div>";
    }

    // line 1
    public function block_style($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\" />        
";
    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        // line 5
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    //\$(document).ready(function() {
        /* attach a submit handler to the form */
        //\$(\"#searchform\").submit(function(event) {

          //\$(\"#loading\").fadeIn(\"slow\");

          /* stop form from submitting normally */
          //event.preventDefault();

          /* get some values from elements on the page: */
          //var \$form = \$( this ),
          //    term = \$form.find( '#search' ).val(),
          //    url = \$form.attr( 'action' );

          /* Send the data using post */
          //var posting = \$.post( url, { q: term } );

          /* Put the results in a div */
          //posting.done(function( data ) {
          //  \$( \"#content\" ).empty().html( data );
          //  \$(\"#loading\").fadeOut(\"slow\");            
          //});
        //});
    //});
</script>        
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Base:searchform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  175 => 64,  110 => 39,  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 49,  118 => 33,  70 => 27,  76 => 4,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 77,  167 => 61,  165 => 88,  148 => 54,  137 => 50,  113 => 40,  104 => 36,  90 => 31,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 39,  126 => 40,  124 => 45,  84 => 21,  100 => 35,  65 => 20,  34 => 4,  114 => 42,  97 => 52,  81 => 3,  77 => 27,  58 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 50,  132 => 40,  128 => 45,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 23,  67 => 15,  63 => 25,  59 => 6,  38 => 9,  94 => 34,  89 => 25,  85 => 29,  75 => 17,  68 => 36,  56 => 23,  87 => 30,  21 => 1,  26 => 2,  93 => 32,  88 => 10,  78 => 17,  46 => 8,  27 => 5,  44 => 6,  31 => 2,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 49,  121 => 22,  117 => 41,  105 => 16,  91 => 12,  62 => 19,  49 => 25,  24 => 1,  25 => 33,  19 => 1,  79 => 25,  72 => 3,  69 => 14,  47 => 4,  40 => 2,  37 => 1,  22 => 66,  246 => 90,  157 => 56,  145 => 53,  139 => 42,  131 => 25,  123 => 58,  120 => 42,  115 => 43,  111 => 37,  108 => 17,  101 => 35,  98 => 31,  96 => 12,  83 => 29,  74 => 22,  66 => 26,  55 => 16,  52 => 15,  50 => 5,  43 => 5,  41 => 10,  35 => 11,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 60,  162 => 59,  154 => 71,  149 => 73,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 38,  112 => 20,  109 => 19,  106 => 36,  103 => 17,  99 => 16,  95 => 15,  92 => 42,  86 => 45,  82 => 21,  80 => 28,  73 => 3,  64 => 11,  60 => 18,  57 => 16,  54 => 28,  51 => 9,  48 => 16,  45 => 25,  42 => 21,  39 => 4,  36 => 17,  33 => 3,  30 => 6,);
    }
}
