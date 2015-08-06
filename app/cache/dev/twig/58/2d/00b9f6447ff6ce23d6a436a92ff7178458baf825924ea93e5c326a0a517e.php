<?php

/* ChakoshNewsBundle:Post:show.html.twig */
class __TwigTemplate_582d00b9f6447ff6ce23d6a436a92ff7178458baf825924ea93e5c326a0a517e extends Twig_Template
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
        echo "<h1>Post</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "author"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Excerpt</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "excerpt"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Commentstatus</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "commentStatus"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modified</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modified"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("blog");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ChakoshNewsBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 136,  293 => 135,  276 => 126,  265 => 121,  261 => 120,  232 => 114,  215 => 113,  197 => 103,  192 => 102,  174 => 90,  153 => 100,  184 => 68,  175 => 64,  110 => 24,  260 => 136,  253 => 134,  244 => 118,  237 => 126,  218 => 115,  210 => 112,  207 => 105,  202 => 110,  172 => 92,  160 => 83,  146 => 67,  134 => 66,  118 => 33,  70 => 28,  76 => 29,  23 => 4,  186 => 60,  150 => 45,  127 => 62,  181 => 81,  178 => 65,  170 => 80,  167 => 86,  165 => 88,  148 => 97,  137 => 31,  113 => 40,  104 => 53,  90 => 14,  53 => 18,  188 => 88,  155 => 75,  152 => 81,  129 => 60,  126 => 67,  124 => 30,  84 => 31,  100 => 35,  65 => 18,  34 => 6,  114 => 42,  97 => 35,  81 => 34,  77 => 29,  58 => 22,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 130,  283 => 88,  278 => 86,  268 => 122,  264 => 84,  258 => 119,  252 => 80,  247 => 78,  241 => 77,  229 => 121,  220 => 70,  214 => 114,  177 => 65,  169 => 51,  140 => 71,  132 => 40,  128 => 31,  107 => 51,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 116,  235 => 115,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 104,  179 => 52,  159 => 58,  143 => 56,  135 => 41,  119 => 57,  102 => 46,  71 => 30,  67 => 26,  63 => 25,  59 => 4,  38 => 3,  94 => 34,  89 => 47,  85 => 46,  75 => 27,  68 => 14,  56 => 15,  87 => 45,  21 => 2,  26 => 96,  93 => 32,  88 => 38,  78 => 34,  46 => 14,  27 => 5,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 84,  158 => 67,  156 => 85,  151 => 55,  142 => 44,  138 => 54,  136 => 62,  121 => 57,  117 => 21,  105 => 61,  91 => 41,  62 => 23,  49 => 14,  24 => 60,  25 => 5,  19 => 1,  79 => 26,  72 => 26,  69 => 14,  47 => 8,  40 => 8,  37 => 4,  22 => 1,  246 => 90,  157 => 82,  145 => 96,  139 => 42,  131 => 49,  123 => 58,  120 => 42,  115 => 43,  111 => 55,  108 => 17,  101 => 52,  98 => 50,  96 => 34,  83 => 27,  74 => 30,  66 => 27,  55 => 18,  52 => 15,  50 => 5,  43 => 5,  41 => 7,  35 => 6,  32 => 3,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 98,  182 => 95,  176 => 93,  173 => 65,  168 => 80,  164 => 103,  162 => 59,  154 => 70,  149 => 36,  147 => 46,  144 => 51,  141 => 70,  133 => 55,  130 => 41,  125 => 23,  122 => 66,  116 => 46,  112 => 53,  109 => 50,  106 => 36,  103 => 17,  99 => 46,  95 => 42,  92 => 33,  86 => 30,  82 => 29,  80 => 30,  73 => 23,  64 => 13,  60 => 22,  57 => 25,  54 => 29,  51 => 17,  48 => 16,  45 => 10,  42 => 10,  39 => 10,  36 => 7,  33 => 3,  30 => 2,);
    }
}
