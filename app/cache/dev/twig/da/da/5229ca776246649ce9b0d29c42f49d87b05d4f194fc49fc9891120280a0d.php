<?php

/* ChakoshSecurityBundle:Security:login.html.twig */
class __TwigTemplate_dada5229ca776246649ce9b0d29c42f49d87b05d4f194fc49fc9891120280a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ChakoshHomeBundle:Base:base.html.twig");

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ChakoshHomeBundle:Base:base.html.twig";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"login\">
    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), array(), "Login"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 13
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-inline\">
        <input autofocus=\"autofocus\" autocomplete=\"false\" type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"نام کاربری\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <input tabindex=\"0\" type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"رمزعبور\" />
        <div class=\"checkbox\">
            <label for=\"remember_me\">منا یادت نره</label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked=\"checked\" />
        </div>
        <br />
        <button type=\"submit\" name=\"login\" class=\"btn btn-default\">ورود</button>
    </form>
</div>    
";
    }

    public function getTemplateName()
    {
        return "ChakoshSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  118 => 33,  70 => 16,  76 => 23,  23 => 1,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 22,  104 => 51,  90 => 39,  53 => 16,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 35,  124 => 62,  84 => 37,  100 => 47,  65 => 14,  34 => 26,  114 => 59,  97 => 52,  81 => 25,  77 => 26,  58 => 21,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 14,  71 => 30,  67 => 26,  63 => 34,  59 => 6,  38 => 14,  94 => 51,  89 => 28,  85 => 16,  75 => 82,  68 => 36,  56 => 22,  87 => 40,  21 => 2,  26 => 12,  93 => 47,  88 => 10,  78 => 17,  46 => 7,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 39,  138 => 38,  136 => 56,  121 => 34,  117 => 44,  105 => 49,  91 => 26,  62 => 24,  49 => 8,  24 => 1,  25 => 6,  19 => 1,  79 => 35,  72 => 3,  69 => 24,  47 => 18,  40 => 11,  37 => 4,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 21,  101 => 32,  98 => 31,  96 => 12,  83 => 34,  74 => 30,  66 => 23,  55 => 20,  52 => 21,  50 => 18,  43 => 6,  41 => 12,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 36,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 44,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 42,  86 => 45,  82 => 22,  80 => 8,  73 => 33,  64 => 27,  60 => 13,  57 => 16,  54 => 10,  51 => 9,  48 => 16,  45 => 8,  42 => 8,  39 => 10,  36 => 8,  33 => 6,  30 => 2,);
    }
}
