<?php

/* ChakoshCommentBundle:Comment:edit.html.twig */
class __TwigTemplate_67fb14f44a9d3a21bf0fb60d3ca19274313e888bc3da14b6f4a9d1f383d19bb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Comment edit</h1>

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\" />
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <p>
            <button type=\"submit\">Edit</button>
        </p>
    </form>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("comment");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ChakoshCommentBundle:Comment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 136,  293 => 135,  276 => 126,  265 => 121,  261 => 120,  232 => 114,  215 => 113,  197 => 103,  192 => 102,  174 => 90,  153 => 100,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 118,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 83,  146 => 67,  134 => 49,  118 => 33,  70 => 13,  76 => 18,  23 => 4,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 65,  170 => 80,  167 => 86,  165 => 88,  148 => 97,  137 => 31,  113 => 40,  104 => 53,  90 => 14,  53 => 16,  188 => 88,  155 => 75,  152 => 81,  129 => 60,  126 => 67,  124 => 30,  84 => 44,  100 => 21,  65 => 20,  34 => 6,  114 => 42,  97 => 52,  81 => 19,  77 => 15,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 130,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 119,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 71,  132 => 40,  128 => 31,  107 => 54,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 116,  235 => 115,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 28,  102 => 60,  71 => 23,  67 => 13,  63 => 6,  59 => 4,  38 => 3,  94 => 34,  89 => 47,  85 => 46,  75 => 27,  68 => 14,  56 => 12,  87 => 45,  21 => 2,  26 => 96,  93 => 32,  88 => 23,  78 => 28,  46 => 11,  27 => 5,  44 => 6,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 84,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 43,  136 => 62,  121 => 57,  117 => 21,  105 => 61,  91 => 46,  62 => 13,  49 => 23,  24 => 60,  25 => 5,  19 => 1,  79 => 19,  72 => 26,  69 => 14,  47 => 8,  40 => 13,  37 => 4,  22 => 1,  246 => 90,  157 => 82,  145 => 96,  139 => 42,  131 => 68,  123 => 58,  120 => 42,  115 => 43,  111 => 55,  108 => 17,  101 => 52,  98 => 50,  96 => 20,  83 => 29,  74 => 22,  66 => 23,  55 => 16,  52 => 28,  50 => 5,  43 => 5,  41 => 5,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 95,  176 => 93,  173 => 65,  168 => 80,  164 => 103,  162 => 59,  154 => 70,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 23,  122 => 66,  116 => 56,  112 => 20,  109 => 19,  106 => 53,  103 => 17,  99 => 16,  95 => 49,  92 => 42,  86 => 30,  82 => 29,  80 => 28,  73 => 3,  64 => 13,  60 => 32,  57 => 16,  54 => 29,  51 => 9,  48 => 16,  45 => 11,  42 => 8,  39 => 16,  36 => 7,  33 => 3,  30 => 2,);
    }
}
