<?php

/* ChakoshHomeBundle:Home:category.html.twig */
class __TwigTemplate_436aa51a730d39bb78c1a0b07c4461fc84e88baf67dddc657b0e5462980ed084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChakoshHomeBundle:Base:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ChakoshHomeBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 4
            echo "    <article id=\"book\">
        <figure>
            ";
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_join_filter(array(0 => $this->env->getExtension('assets')->getAssetUrl("uploads/documents/"), 1 => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "cover"))), "html", null, true);
            echo "\" />
        </figure>

        <figcaption>
            <div id=\"comments_num\" title=\"";
            // line 11
            if ($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "commentNum")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "commentNum"), "html", null, true);
                echo " دیدگاه";
            } else {
                echo "بدون دیدگاه";
            }
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "commentNum"), "html", null, true);
            echo "</h3></div>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "link"))), "html", null, true);
            echo "\"><h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "name"), "html", null, true);
            echo "</h1></a>
            <h3>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author"), "html", null, true);
            echo "</h3>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/documents/", 1 => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "file"))), "my_thumb"), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-info\">دریافت</button></a>
        </figcaption>                
    </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "<div id=\"clr\"></div>
";
        // line 19
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Home:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 49,  118 => 33,  70 => 13,  76 => 4,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 77,  167 => 61,  165 => 88,  148 => 54,  137 => 50,  113 => 40,  104 => 22,  90 => 31,  53 => 13,  188 => 88,  155 => 75,  152 => 53,  129 => 39,  126 => 40,  124 => 30,  84 => 21,  100 => 21,  65 => 20,  34 => 4,  114 => 42,  97 => 52,  81 => 19,  77 => 27,  58 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 50,  132 => 40,  128 => 31,  107 => 52,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 14,  71 => 23,  67 => 15,  63 => 6,  59 => 4,  38 => 9,  94 => 34,  89 => 25,  85 => 29,  75 => 17,  68 => 14,  56 => 3,  87 => 30,  21 => 1,  26 => 3,  93 => 32,  88 => 18,  78 => 18,  46 => 11,  27 => 5,  44 => 6,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 33,  121 => 29,  117 => 41,  105 => 16,  91 => 19,  62 => 19,  49 => 25,  24 => 1,  25 => 33,  19 => 1,  79 => 25,  72 => 3,  69 => 14,  47 => 11,  40 => 13,  37 => 1,  22 => 2,  246 => 90,  157 => 56,  145 => 53,  139 => 42,  131 => 32,  123 => 58,  120 => 42,  115 => 43,  111 => 37,  108 => 17,  101 => 35,  98 => 31,  96 => 20,  83 => 29,  74 => 22,  66 => 26,  55 => 16,  52 => 27,  50 => 5,  43 => 5,  41 => 9,  35 => 4,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 60,  162 => 59,  154 => 71,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 27,  112 => 20,  109 => 19,  106 => 36,  103 => 17,  99 => 16,  95 => 15,  92 => 42,  86 => 45,  82 => 16,  80 => 28,  73 => 14,  64 => 13,  60 => 18,  57 => 16,  54 => 28,  51 => 9,  48 => 16,  45 => 24,  42 => 18,  39 => 7,  36 => 7,  33 => 3,  30 => 8,);
    }
}
