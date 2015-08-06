<?php

/* ChakoshUploadBundle:Default:show.html.twig */
class __TwigTemplate_3f54f6a5284874a7d74610c7ba51d5f40b4945ee3fde21e1def51104ffbe4dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChakoshHomeBundle:Admin:base.html.twig");

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ChakoshHomeBundle:Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_js($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("js", $context, $blocks);
        echo "
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
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
    });
</script>
";
    }

    // line 44
    public function block_style($context, array $blocks = array())
    {
        // line 45
        $this->displayParentBlock("style", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
<style>


</style>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "    <li>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("chakosh_upload_homepage");
        echo "\">Upload</a>
    </li>    
    
      <ul id=\"myTab\" class=\"nav nav-tabs\">
        <li class=\"\"><a href=\"#all\" data-toggle=\"tab\">all</a></li>
        <li class=\"active\"><a href=\"#images\" data-toggle=\"tab\">images</a></li>
        <li class=\"\"><a href=\"#audios\" data-toggle=\"tab\">audios</a></li>
        <li class=\"\"><a href=\"#videos\" data-toggle=\"tab\">videos</a></li>
      </ul>
    
      <div id=\"myTab\" class=\"tab-content\">
        <div class=\"tab-pane\" id=\"all\">
\t";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 67
            echo "            <a class=\"image-popup-no-margins\" href=\"";
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => "../uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "small"), "html", null, true);
            echo "\"/>
            </a>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
        <div class=\"tab-pane active\" id=\"images\">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div class=\"tab-pane\" id=\"audios\">
          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
        </div>
        <div class=\"tab-pane\" id=\"videos\">
          <!--for videos-->          
          <table class=\"table table-striped\" id=\"ava_files\">
            ";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 82
            echo "                ";
            $context["f"] = twig_split_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), ".");
            // line 83
            echo "                        ";
            if (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "flv") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "mp4")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "wmv"))) {
                // line 84
                echo "                        <tr>
                            <td>                        
                                ";
                // line 86
                echo twig_escape_filter($this->env, twig_join_filter(array(0 => $this->env->getExtension('assets')->getAssetUrl("uploads/"), 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
                echo "
                                <table>
                                    <tr>
                                        <td>
                                            <span>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 0, array(), "array"), "html", null, true);
                echo "</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
                echo "</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>                        
                        ";
            }
            // line 102
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "                <p>هنوز فایلی آپلود نشده</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            
        </table>


        </div>          
      </div>
    
            <div id=\"myCarousel\" class=\"carousel slide\">
              <ol class=\"carousel-indicators\">
                ";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 114
            echo "                    ";
            $context["f"] = twig_split_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), ".");
            // line 115
            echo "                    ";
            if (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "flv") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "mp4")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "wmv"))) {
                // line 116
                echo "                        <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), "html", null, true);
                echo "\" class=\"\"></li>
                    ";
            }
            // line 118
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "              </ol>
              ";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 121
            echo "                ";
            $context["f"] = twig_split_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), ".");
            // line 122
            echo "                ";
            if (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "flv") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "mp4")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "wmv"))) {
                echo "              
                <div class=\"carousel-inner\">
                  <div class=\"item\">
                    <video width=\"100\" controls>
                      <source src=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter(array(0 => $this->env->getExtension('assets')->getAssetUrl("uploads/"), 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))))), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
                echo "\">
                        Your browser does not support the video tag.
                    </video>
                    <div class=\"carousel-caption\">
                      <h4>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 0, array(), "array"), "html", null, true);
                echo "</h4>
                    </div>
                  </div>
                </div>
                ";
            }
            // line 135
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                
              <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
              <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
            </div>          
    
";
    }

    public function getTemplateName()
    {
        return "ChakoshUploadBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 136,  293 => 135,  276 => 126,  265 => 121,  261 => 120,  232 => 114,  215 => 113,  197 => 103,  192 => 102,  174 => 90,  153 => 100,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 118,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 83,  146 => 67,  134 => 49,  118 => 33,  70 => 13,  76 => 18,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 80,  167 => 86,  165 => 88,  148 => 97,  137 => 31,  113 => 40,  104 => 53,  90 => 14,  53 => 13,  188 => 88,  155 => 75,  152 => 81,  129 => 60,  126 => 67,  124 => 30,  84 => 44,  100 => 21,  65 => 20,  34 => 6,  114 => 42,  97 => 52,  81 => 19,  77 => 15,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 130,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 119,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 71,  132 => 40,  128 => 31,  107 => 54,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 116,  235 => 115,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 60,  71 => 23,  67 => 13,  63 => 6,  59 => 4,  38 => 3,  94 => 34,  89 => 47,  85 => 46,  75 => 27,  68 => 14,  56 => 12,  87 => 45,  21 => 2,  26 => 96,  93 => 32,  88 => 23,  78 => 28,  46 => 11,  27 => 5,  44 => 6,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 84,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 62,  121 => 57,  117 => 21,  105 => 61,  91 => 46,  62 => 13,  49 => 9,  24 => 60,  25 => 5,  19 => 1,  79 => 19,  72 => 26,  69 => 14,  47 => 8,  40 => 13,  37 => 4,  22 => 1,  246 => 90,  157 => 82,  145 => 96,  139 => 42,  131 => 68,  123 => 58,  120 => 42,  115 => 43,  111 => 55,  108 => 17,  101 => 52,  98 => 50,  96 => 20,  83 => 29,  74 => 22,  66 => 24,  55 => 16,  52 => 28,  50 => 5,  43 => 5,  41 => 5,  35 => 11,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 95,  176 => 93,  173 => 65,  168 => 80,  164 => 103,  162 => 59,  154 => 70,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 23,  122 => 66,  116 => 56,  112 => 20,  109 => 19,  106 => 53,  103 => 17,  99 => 16,  95 => 49,  92 => 42,  86 => 30,  82 => 29,  80 => 28,  73 => 3,  64 => 13,  60 => 32,  57 => 16,  54 => 29,  51 => 9,  48 => 16,  45 => 11,  42 => 4,  39 => 7,  36 => 7,  33 => 3,  30 => 2,);
    }
}
