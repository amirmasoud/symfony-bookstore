<?php

/* ChakoshHomeBundle:Admin:edit.html.twig */
class __TwigTemplate_5a3f4f8621d108c67317371ef4ccbc7bb90320ba4d9e47c6ad902c63eb947d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChakoshHomeBundle:Admin:base.html.twig");

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'js' => array($this, 'block_js'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_js($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>    
    
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#chakosh_blogbundle_booktype_file\").click(function(){
                \$(this).toggleClass('active');
            })
            \$(\"#chakosh_blogbundle_booktype_cover\").click(function(){
                \$(this).toggleClass('active');
            })
            \$(\"#ava_files tr td button\").click(function(){
                value = \$(this).attr('data-name');
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
            })
            \$('.image-popup-vertical-fit').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-img-mobile',
                    image: {
                            verticalFit: true
                    }

            });

            \$('.image-popup-fit-width').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    image: {
                            verticalFit: false
                    }
            });

            \$('.image-popup-no-margins').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    closeBtnInside: false,
                    fixedContentPos: true,
                    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
                    image: {
                            verticalFit: true
                    },
                    zoom: {
                            enabled: true,
                            duration: 300 // don't foget to change the duration also in CSS
                    }
            });
            
        });
    </script>
";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_update", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-inline\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <header>
        <div class=\"form-group\">
              ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "نام کتاب", "class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
              ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'widget', array("attr" => array("placeholder" => "نام نویسنده", "class" => "form-control")));
        echo "
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">به روز رسانی</button>        


    </header>
      <figure id=\"single\" class=\"single\">
        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/cover.png"), "html", null, true);
        echo "\" />
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cover"), 'widget', array("attr" => array("href" => "#myModal", "data-toggle" => "modal", "placeholder" => "کاور", "class" => "form-control")));
        echo "
        <div id=\"download\">
            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("href" => "#myModal", "data-toggle" => "modal", "placeholder" => "فایل", "class" => "form-control")));
        echo "
        </div>
      </figure>
    <footer id=\"single-footer\">
        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("class" => "ckeditor", "id" => "editor1")));
        echo "
        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "\t
    </footer>
</form>
        <form action=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span> پاک کردن</button>
        </form>
  <!-- Modal -->
  <div class=\"modal\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
          <h4 class=\"modal-title\">کتاب خانه</h4>
        </div>
          <table class=\"table table-striped\" id=\"ava_files\">
            ";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 111
            echo "                ";
            $context["f"] = twig_split_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), ".");
            // line 112
            echo "                <tr>
                    <td>
                        <a class=\"image-popup-no-margins\" id=\"admin_new_image_a\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => "../../uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
            echo "\">                        
                            <img id=\"admin_new_image\" src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "small"), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
            echo "\" />
                            <div id=\"admin_new_image_caption\"><span class=\"glyphicon glyphicon-zoom-in\"></span></div>
                        </a>
                        <table>
                            <tr>
                                <td>
                                    <span>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 0, array(), "array"), "html", null, true);
            echo "</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
            echo "</span>
                                </td>
                            </tr>
                        </table>
                        <button data-name=\"";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\" class=\"btn btn-success\">انتخاب</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            echo "                <p>هنوز فایلی آپلود نشده</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "        </table>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 111,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 36,  118 => 33,  70 => 16,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 88,  148 => 69,  137 => 65,  113 => 18,  104 => 51,  90 => 39,  53 => 27,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 35,  124 => 62,  84 => 4,  100 => 47,  65 => 36,  34 => 26,  114 => 59,  97 => 52,  81 => 3,  77 => 26,  58 => 21,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 75,  132 => 40,  128 => 71,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 37,  63 => 34,  59 => 6,  38 => 4,  94 => 13,  89 => 28,  85 => 16,  75 => 82,  68 => 36,  56 => 9,  87 => 40,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 7,  44 => 6,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 70,  142 => 39,  138 => 38,  136 => 56,  121 => 20,  117 => 19,  105 => 16,  91 => 12,  62 => 24,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 35,  72 => 3,  69 => 24,  47 => 7,  40 => 12,  37 => 4,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 72,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 17,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 30,  66 => 23,  55 => 20,  52 => 8,  50 => 18,  43 => 6,  41 => 12,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 30,  103 => 29,  99 => 14,  95 => 22,  92 => 42,  86 => 45,  82 => 22,  80 => 8,  73 => 33,  64 => 11,  60 => 10,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 23,  42 => 16,  39 => 10,  36 => 8,  33 => 3,  30 => 2,);
    }
}
