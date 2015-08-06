<?php

/* ChakoshHomeBundle:Admin:base.html.twig */
class __TwigTemplate_a597da16f86aca5d9fece3cabba26c9af0cf828e0b1b0db81dc0375c3c2a7da5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype HTML>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">    
    <!-- complete meta tags -->
    <!--[if lt IE 9]>
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->    
    ";
        // line 8
        $this->displayBlock('style', $context, $blocks);
        // line 14
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>  
</head>
<body>
    ";
        // line 17
        $this->env->loadTemplate("ChakoshHomeBundle:Admin:Navbar.html.twig")->display($context);
        // line 18
        echo "    
    <div class=\"row\" id=\"container\">
      <div class=\"col-sm-9 \">
        <h1 class=\"page-header\">";
        // line 21
        $this->displayBlock('pageHeader', $context, $blocks);
        echo "</h1>
          ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "      </div>      
      <div class=\"col-sm-3 col-md-2 sidebar\">
        <ul class=\"nav nav-sidebar\">
          <li class=\"active\"><a href=\"#\">پیشخوان</a></li>
          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_new");
        echo "\">کتاب</a></li>
          <li><a href=\"#\">کتابخانه</a></li>
          <li><a href=\"#\">Export</a></li>
        </ul>
      </div>
    </div>
    ";
        // line 33
        $this->displayBlock('js', $context, $blocks);
        // line 82
        echo "    
</body>";
    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettify.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "chakosh";
    }

    // line 21
    public function block_pageHeader($context, array $blocks = array())
    {
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-wysiwyg.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.hotkeys.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$('#editor1').wysiwyg();
            
            \$(function(){
              function initToolbarBootstrapBindings() {
                var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
                      'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                      'Times New Roman', 'Verdana'],
                      fontTarget = \$('[title=Font]').siblings('.dropdown-menu');
                \$.each(fonts, function (idx, fontName) {
                    fontTarget.append(\$('<li><a data-edit=\"fontName ' + fontName +'\" style=\"font-family:\\''+ fontName +'\\'\">'+fontName + '</a></li>'));
                });
                \$('a[title]').tooltip({container:'body'});
                  \$('.dropdown-menu input').click(function() {return false;})
                              .change(function () {\$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
                  .keydown('esc', function () {this.value='';\$(this).change();});

                \$('[data-role=magic-overlay]').each(function () { 
                  var overlay = \$(this), target = \$(overlay.data('target')); 
                  overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                });
                if (\"onwebkitspeechchange\"  in document.createElement(\"input\")) {
                  var editorOffset = \$('#editor').offset();
                  \$('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+\$('#editor').innerWidth()-35});
                } else {
                  \$('#voiceBtn').hide();
                }
                  };
                  function showErrorAlert (reason, detail) {
                          var msg='';
                          if (reason==='unsupported-file-type') { msg = \"Unsupported format \" +detail; }
                          else {
                                  console.log(\"error uploading file\", reason, detail);
                          }
                          \$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>'+ 
                           '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
                  };
              initToolbarBootstrapBindings();  
                  \$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
              window.prettyPrint && prettyPrint();
            });            
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  118 => 33,  70 => 16,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 22,  104 => 51,  90 => 33,  53 => 16,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 35,  124 => 62,  84 => 37,  100 => 47,  65 => 23,  34 => 26,  114 => 59,  97 => 52,  81 => 25,  77 => 26,  58 => 23,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 21,  67 => 26,  63 => 34,  59 => 6,  38 => 14,  94 => 51,  89 => 28,  85 => 16,  75 => 82,  68 => 36,  56 => 22,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 14,  27 => 7,  44 => 11,  31 => 6,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 39,  138 => 38,  136 => 56,  121 => 34,  117 => 44,  105 => 49,  91 => 26,  62 => 18,  49 => 14,  24 => 1,  25 => 6,  19 => 2,  79 => 19,  72 => 3,  69 => 24,  47 => 18,  40 => 11,  37 => 11,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 21,  101 => 32,  98 => 31,  96 => 12,  83 => 9,  74 => 30,  66 => 23,  55 => 21,  52 => 21,  50 => 14,  43 => 12,  41 => 9,  35 => 6,  32 => 8,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 11,  86 => 45,  82 => 22,  80 => 8,  73 => 33,  64 => 27,  60 => 22,  57 => 16,  54 => 11,  51 => 3,  48 => 19,  45 => 17,  42 => 8,  39 => 10,  36 => 8,  33 => 6,  30 => 2,);
    }
}
