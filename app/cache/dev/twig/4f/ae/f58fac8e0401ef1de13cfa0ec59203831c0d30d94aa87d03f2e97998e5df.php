<?php

/* ChakoshUploadBundle:Default:index.html.twig */
class __TwigTemplate_4faef58fac8e0401ef1de13cfa0ec59203831c0d30d94aa87d03f2e97998e5df extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(document).ready(function(){
        function aButtonPressed(){
            \$.post('";
        // line 6
        echo $this->env->getExtension('routing')->getPath("upload");
        echo "',
                        //{data1: 'mydata1', data2:'mydata2'}, 
                    function(response){
                            if(response.code == 100 && response.success){//dummy check
                              (\"#mess\").html('Fuck You');
                            }

            }, \"json\");    
        }

        \$(document).ready(function() {     
          \$('#startUploading').on('click', function(){aButtonPressed();});
        });
    });
</script>
";
    }

    // line 22
    public function block_style($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/one_block.css"), "html", null, true);
        echo "\" />
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "<div id=\"mess\"></div>
<form action=\"#\" method=\"post\" multiple=\"multiple\" ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <button type=\"submit\" id=\"startUploading\" class=\"btn btn-primary\">Upload</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "ChakoshUploadBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 67,  134 => 49,  118 => 33,  70 => 13,  76 => 18,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 80,  167 => 61,  165 => 88,  148 => 68,  137 => 31,  113 => 40,  104 => 22,  90 => 14,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 60,  126 => 40,  124 => 30,  84 => 21,  100 => 21,  65 => 20,  34 => 6,  114 => 42,  97 => 52,  81 => 19,  77 => 15,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 64,  132 => 40,  128 => 31,  107 => 52,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 14,  71 => 23,  67 => 13,  63 => 6,  59 => 4,  38 => 6,  94 => 34,  89 => 47,  85 => 46,  75 => 27,  68 => 14,  56 => 12,  87 => 13,  21 => 2,  26 => 3,  93 => 32,  88 => 23,  78 => 28,  46 => 11,  27 => 5,  44 => 6,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 62,  121 => 57,  117 => 21,  105 => 16,  91 => 19,  62 => 13,  49 => 9,  24 => 1,  25 => 5,  19 => 1,  79 => 19,  72 => 26,  69 => 14,  47 => 8,  40 => 13,  37 => 4,  22 => 4,  246 => 90,  157 => 56,  145 => 53,  139 => 42,  131 => 25,  123 => 58,  120 => 42,  115 => 43,  111 => 55,  108 => 17,  101 => 51,  98 => 50,  96 => 20,  83 => 29,  74 => 22,  66 => 24,  55 => 16,  52 => 28,  50 => 5,  43 => 5,  41 => 5,  35 => 11,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 77,  162 => 59,  154 => 70,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 23,  122 => 43,  116 => 56,  112 => 20,  109 => 19,  106 => 53,  103 => 17,  99 => 16,  95 => 49,  92 => 42,  86 => 30,  82 => 29,  80 => 6,  73 => 3,  64 => 13,  60 => 32,  57 => 16,  54 => 29,  51 => 9,  48 => 16,  45 => 11,  42 => 19,  39 => 7,  36 => 7,  33 => 3,  30 => 2,);
    }
}
