<?php

/* ChakoshHomeBundle:Home:blog.html.twig */
class __TwigTemplate_3e105534a88e06836529721cc95dde9c889e70d9f93ca8330660c5c3e2e23e9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'style' => array($this, 'block_style'),
            'js' => array($this, 'block_js'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype HTML>
<head>
    ";
        // line 3
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "   
    <!-- complete meta tags -->
    <!--[if lt IE 9]>
        <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->        
    ";
        // line 13
        $this->displayBlock('style', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 24
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>  
</head>

";
        // line 27
        $this->displayBlock('content', $context, $blocks);
    }

    // line 3
    public function block_meta($context, array $blocks = array())
    {
        // line 4
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favico.png"), "html", null, true);
        echo "\">
    <!-- complete meta tags -->
    ";
    }

    // line 13
    public function block_style($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" />        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" />            
    ";
    }

    // line 18
    public function block_js($context, array $blocks = array())
    {
        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        echo "chakosh";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        $this->env->loadTemplate("ChakoshHomeBundle:Base:navbar.html.twig")->display($context);
        // line 29
        echo "<section id=\"blog\">
    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "    <article>
        <header>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('time_ago_extension')->timeAgoInWordsFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "date")), "html", null, true);
            echo "</header>
        <figure>";
            // line 33
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "excerpt"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content"), "html", null, true);
            }
            echo "</figure>
    </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Home:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 49,  118 => 33,  70 => 13,  76 => 4,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 77,  167 => 61,  165 => 88,  148 => 54,  137 => 50,  113 => 40,  104 => 22,  90 => 31,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 39,  126 => 40,  124 => 30,  84 => 21,  100 => 21,  65 => 20,  34 => 4,  114 => 42,  97 => 52,  81 => 3,  77 => 27,  58 => 31,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 50,  132 => 40,  128 => 31,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 14,  71 => 23,  67 => 15,  63 => 6,  59 => 4,  38 => 9,  94 => 34,  89 => 25,  85 => 29,  75 => 17,  68 => 36,  56 => 3,  87 => 30,  21 => 1,  26 => 3,  93 => 32,  88 => 18,  78 => 15,  46 => 11,  27 => 5,  44 => 6,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 33,  121 => 29,  117 => 41,  105 => 16,  91 => 19,  62 => 19,  49 => 25,  24 => 1,  25 => 33,  19 => 1,  79 => 25,  72 => 3,  69 => 14,  47 => 4,  40 => 13,  37 => 1,  22 => 2,  246 => 90,  157 => 56,  145 => 53,  139 => 42,  131 => 32,  123 => 58,  120 => 42,  115 => 43,  111 => 37,  108 => 17,  101 => 35,  98 => 31,  96 => 20,  83 => 29,  74 => 22,  66 => 26,  55 => 16,  52 => 27,  50 => 5,  43 => 5,  41 => 9,  35 => 11,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 60,  162 => 59,  154 => 71,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 27,  112 => 20,  109 => 19,  106 => 36,  103 => 17,  99 => 16,  95 => 15,  92 => 42,  86 => 45,  82 => 16,  80 => 28,  73 => 14,  64 => 11,  60 => 18,  57 => 16,  54 => 28,  51 => 9,  48 => 16,  45 => 24,  42 => 18,  39 => 4,  36 => 7,  33 => 3,  30 => 8,);
    }
}
