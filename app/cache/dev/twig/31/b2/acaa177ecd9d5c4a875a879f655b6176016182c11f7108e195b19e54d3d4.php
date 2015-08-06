<?php

/* ChakoshHomeBundle:Admin:home.html.twig */
class __TwigTemplate_31b2acaa177ecd9d5c4a875a879f655b6176016182c11f7108e195b19e54d3d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChakoshHomeBundle:Admin:base.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"row\">
    <div class=\"col-md-3\">
    </div>
    <div class=\"col-md-3\"></div>
    <div class=\"col-md-3\"></div>
    <div class=\"col-md-3\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_new");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"><span class=\"fa-plus\"></span> جدید</button></a>
    </div>
</section>
<section>
    <table class=\"table\">
        <thead>
            <tr>
                <th>کاور</th>
                <th>دیدگاه</th>
                <th>نام</th>
                <th>نویسنده</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 24
            echo "        ";
            $context["cover"] = twig_last($this->env, twig_split_filter($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "cover"), "/"));
            // line 25
            echo "            <tr>
                <td><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(twig_join_filter(array(0 => "uploads/", 1 => (isset($context["cover"]) ? $context["cover"] : $this->getContext($context, "cover")))), "small", true), "html", null, true);
            echo "\" /></td>
                <td>";
            // line 27
            if ($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "commentNum")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "commentNum"), "html", null, true);
                echo " دیدگاه";
            } else {
                echo "بدون دیدگاه";
            }
            echo "</td>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "name"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
</section>
";
        // line 35
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ChakoshHomeBundle:Admin:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 136,  253 => 134,  244 => 130,  237 => 126,  218 => 115,  210 => 112,  207 => 111,  202 => 110,  172 => 92,  160 => 86,  146 => 78,  134 => 36,  118 => 33,  70 => 27,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 88,  148 => 69,  137 => 65,  113 => 18,  104 => 51,  90 => 39,  53 => 27,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 35,  124 => 62,  84 => 4,  100 => 47,  65 => 36,  34 => 26,  114 => 59,  97 => 52,  81 => 3,  77 => 26,  58 => 21,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 75,  132 => 40,  128 => 71,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 37,  63 => 25,  59 => 6,  38 => 4,  94 => 32,  89 => 28,  85 => 29,  75 => 82,  68 => 36,  56 => 23,  87 => 40,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 7,  44 => 6,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 85,  151 => 70,  142 => 39,  138 => 38,  136 => 56,  121 => 20,  117 => 19,  105 => 16,  91 => 12,  62 => 24,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 28,  72 => 3,  69 => 24,  47 => 7,  40 => 12,  37 => 4,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 72,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 17,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 30,  66 => 26,  55 => 20,  52 => 8,  50 => 18,  43 => 6,  41 => 12,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 96,  176 => 93,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 30,  103 => 29,  99 => 35,  95 => 22,  92 => 42,  86 => 45,  82 => 22,  80 => 8,  73 => 33,  64 => 11,  60 => 24,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 23,  42 => 16,  39 => 9,  36 => 8,  33 => 3,  30 => 2,);
    }
}
