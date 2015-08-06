<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8e0cde62da49b731b7a555987ea71656346fb1dd3f6d12a5652c3a1af6d89c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        // line 3
        echo "      ";
        $this->displayParentBlock("style", $context, $blocks);
        echo "
      <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">    
    ";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "<img id=\"bg\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/unheard_sounds.jpg"), "html", null, true);
        echo "\"/>        
";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
\t<h2 class=\"form-signin-heading text-center\">ورود</h2>
  \t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t<input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"نام کاربری\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" autofocus>
\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"کلمه عبور\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
\t<label class=\"checkbox\">
\t\t  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t</label>
\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">ورود</button>
</form>
";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "  <a href=\"";
        echo $this->env->getExtension('routing')->getPath("chakosh_blog_homepage");
        echo "\">بازگشت به خانه <span class=\"glyphicon glyphicon-arrow-left\"></span></a>  
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  76 => 23,  23 => 3,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 11,  53 => 15,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 63,  124 => 62,  84 => 48,  100 => 33,  65 => 35,  34 => 26,  114 => 59,  97 => 52,  81 => 25,  77 => 12,  58 => 17,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 24,  71 => 21,  67 => 20,  63 => 34,  59 => 3,  38 => 4,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 2,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 25,  78 => 17,  46 => 13,  27 => 7,  44 => 8,  31 => 4,  28 => 7,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 55,  91 => 26,  62 => 18,  49 => 14,  24 => 7,  25 => 6,  19 => 2,  79 => 19,  72 => 3,  69 => 2,  47 => 9,  40 => 11,  37 => 11,  22 => 5,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 31,  96 => 20,  83 => 44,  74 => 17,  66 => 15,  55 => 31,  52 => 10,  50 => 14,  43 => 12,  41 => 9,  35 => 10,  32 => 8,  29 => 24,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 21,  86 => 45,  82 => 22,  80 => 43,  73 => 55,  64 => 19,  60 => 13,  57 => 16,  54 => 11,  51 => 3,  48 => 12,  45 => 12,  42 => 9,  39 => 7,  36 => 7,  33 => 3,  30 => 2,);
    }
}
