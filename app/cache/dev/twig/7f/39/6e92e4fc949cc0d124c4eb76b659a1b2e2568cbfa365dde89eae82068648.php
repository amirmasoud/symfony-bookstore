<?php

/* ChakoshUploadBundle:Default:I_show.html.twig */
class __TwigTemplate_7f396e92e4fc949cc0d124c4eb76b659a1b2e2568cbfa365dde89eae82068648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('js', $context, $blocks);
        // line 60
        $this->displayBlock('style', $context, $blocks);
        // line 96
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_js($context, array $blocks = array())
    {
        // line 2
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.wookmark.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {

\t\$('.image-popup-vertical-fit').magnificPopup({
\t\ttype: 'image',
\t\tcloseOnContentClick: true,
\t\tmainClass: 'mfp-img-mobile',
\t\timage: {
\t\t\tverticalFit: true
\t\t}
\t\t
\t});

\t\$('.image-popup-fit-width').magnificPopup({
\t\ttype: 'image',
\t\tcloseOnContentClick: true,
\t\timage: {
\t\t\tverticalFit: false
\t\t}
\t});

\t\$('.image-popup-no-margins').magnificPopup({
\t\ttype: 'image',
\t\tcloseOnContentClick: true,
\t\tcloseBtnInside: false,
\t\tfixedContentPos: true,
\t\tmainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
\t\timage: {
\t\t\tverticalFit: true
\t\t},
\t\tzoom: {
\t\t\tenabled: true,
\t\t\tduration: 300 // don't foget to change the duration also in CSS
\t\t}
\t});

        \$('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: \$('#main'), // Optional, used for some extra CSS styling
          offset: 5, // Optional, the distance between grid items
          outerOffset: 10, // Optional, the distance to the containers border
          //itemWidth: 310 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = \$('#tiles li');

        // Call the layout function.
        handler.wookmark(options);
      });
    });
</script>
";
    }

    // line 60
    public function block_style($context, array $blocks = array())
    {
        // line 61
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
<style>
#tiles {
  list-style-type: none;
  position: relative; /** Needed to ensure items are laid out relative to this container **/
  margin: 0;
  padding: 0;
}

/**
 * Grid items
 */
#tiles li {
  width: 110px;
  background-color: #ffffff;
  border: 1px solid #dedede;
          border-radius: 2px;
     -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
 /* display: none; * Hide items initially to avoid a flicker effect **/
  cursor: pointer;
  padding: 4px;
}

#tiles li.inactive {
  visibility: hidden;
  opacity: 0;
}

#tiles li img {
  display: block;
}
    
</style>
";
    }

    // line 96
    public function block_content($context, array $blocks = array())
    {
        // line 97
        echo "  <div id=\"main\" role=\"main\">

      <ul id=\"tiles\">
      \t";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 101
            echo "          <li>
              <a class=\"image-popup-no-margins\" href=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => "../uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
            echo "\">
                  <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "small"), "html", null, true);
            echo "\" />
              </a>
          </li>
      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      </ul>
      
  </div>

";
    }

    public function getTemplateName()
    {
        return "ChakoshUploadBundle:Default:I_show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 107,  153 => 100,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 102,  146 => 67,  134 => 49,  118 => 33,  70 => 13,  76 => 18,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 80,  167 => 61,  165 => 88,  148 => 97,  137 => 31,  113 => 40,  104 => 22,  90 => 14,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 60,  126 => 40,  124 => 30,  84 => 29,  100 => 21,  65 => 20,  34 => 6,  114 => 42,  97 => 52,  81 => 19,  77 => 15,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 64,  132 => 40,  128 => 31,  107 => 52,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 60,  71 => 23,  67 => 13,  63 => 6,  59 => 4,  38 => 3,  94 => 34,  89 => 47,  85 => 46,  75 => 27,  68 => 14,  56 => 12,  87 => 13,  21 => 2,  26 => 96,  93 => 32,  88 => 23,  78 => 28,  46 => 11,  27 => 5,  44 => 6,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 62,  121 => 57,  117 => 21,  105 => 61,  91 => 19,  62 => 13,  49 => 9,  24 => 60,  25 => 5,  19 => 1,  79 => 19,  72 => 26,  69 => 14,  47 => 8,  40 => 13,  37 => 4,  22 => 1,  246 => 90,  157 => 101,  145 => 96,  139 => 42,  131 => 25,  123 => 58,  120 => 42,  115 => 43,  111 => 55,  108 => 17,  101 => 51,  98 => 50,  96 => 20,  83 => 29,  74 => 22,  66 => 24,  55 => 16,  52 => 28,  50 => 5,  43 => 5,  41 => 5,  35 => 11,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 103,  162 => 59,  154 => 70,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 23,  122 => 43,  116 => 56,  112 => 20,  109 => 19,  106 => 53,  103 => 17,  99 => 16,  95 => 49,  92 => 42,  86 => 30,  82 => 29,  80 => 28,  73 => 3,  64 => 13,  60 => 32,  57 => 16,  54 => 29,  51 => 9,  48 => 16,  45 => 11,  42 => 4,  39 => 7,  36 => 7,  33 => 2,  30 => 1,);
    }
}
