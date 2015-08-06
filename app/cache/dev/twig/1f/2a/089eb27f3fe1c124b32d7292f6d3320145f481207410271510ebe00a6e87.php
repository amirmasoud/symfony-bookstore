<?php

/* ChakoshHomeBundle:Admin:Modal.html.twig */
class __TwigTemplate_1f2a089eb27f3fe1c124b32d7292f6d3320145f481207410271510ebe00a6e87 extends Twig_Template
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
        echo "<table class=\"table table-striped\" id=\"ava_files\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 3
            echo "    ";
            $context["f"] = twig_split_filter((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), ".");
            // line 4
            echo "    <tr>
        <td>
            ";
            // line 6
            if (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "jpg") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "png")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "gif"))) {
                // line 7
                echo "            <a class=\"image-popup-no-margins\" id=\"admin_new_image_a\" href=\"";
                echo twig_escape_filter($this->env, twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
                echo "\">                        
                <img id=\"admin_new_image\" src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "small"), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
                echo "\" />
                <div id=\"admin_new_image_caption\"><span class=\"glyphicon glyphglyphicon glyphicon-zoom-in\"></span></div>
            </a>
            ";
            } elseif (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "mp3") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "omg")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "wmv"))) {
                // line 12
                echo "            <audio controls>
              <source src=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_join_filter(array(0 => "../../../../uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
                echo "\" type=\"audio/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
                echo "\">
                Your browser does not support the audio element.
            </audio>
            ";
            } elseif (((($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "FLV") || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "MP4")) || ($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array") == "WMV"))) {
                // line 17
                echo "            <video width=\"100\" controls>
              <source src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_join_filter(array(0 => "../../../../uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
                echo "\" type=\"video/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
                echo "\">
                Your browser does not support the video tag.
            </video>         
            ";
            }
            // line 22
            echo "            <table>
                <tr>
                    <td>
                        <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 0, array(), "array"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
            echo "</span>
                    </td>
                </tr>
            </table>
            <button id=\"cover\" data-name=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
            echo "\" data-file=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))))), "html", null, true);
            echo "\" class=\"btn btn-success\"  onclick=\"cover(this)\">انتخاب</button>
            <button id=\"insert-img-to-post\" data-type=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 1, array(), "array"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file"))))), "html", null, true);
            echo "\" class=\"btn btn-success\" onclick=\"inserIntoPost(this)\">قرار دادن در نوشته</button>
            <script type=\"text/javascript\">

            </script>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "    <p>هنوز فایلی آپلود نشده</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  
</table>          ";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:Modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 111,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 36,  118 => 33,  70 => 27,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 88,  148 => 69,  137 => 65,  113 => 18,  104 => 51,  90 => 39,  53 => 13,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 35,  124 => 62,  84 => 4,  100 => 35,  65 => 18,  34 => 6,  114 => 42,  97 => 52,  81 => 3,  77 => 26,  58 => 21,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 75,  132 => 40,  128 => 71,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 37,  63 => 25,  59 => 6,  38 => 4,  94 => 34,  89 => 28,  85 => 29,  75 => 82,  68 => 36,  56 => 23,  87 => 30,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 3,  44 => 6,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 70,  142 => 39,  138 => 38,  136 => 56,  121 => 43,  117 => 19,  105 => 16,  91 => 12,  62 => 17,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 25,  72 => 3,  69 => 24,  47 => 7,  40 => 12,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 72,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 17,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 22,  66 => 26,  55 => 20,  52 => 8,  50 => 12,  43 => 6,  41 => 8,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 30,  103 => 29,  99 => 35,  95 => 22,  92 => 42,  86 => 45,  82 => 22,  80 => 8,  73 => 33,  64 => 11,  60 => 24,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 23,  42 => 16,  39 => 9,  36 => 7,  33 => 3,  30 => 4,);
    }
}
