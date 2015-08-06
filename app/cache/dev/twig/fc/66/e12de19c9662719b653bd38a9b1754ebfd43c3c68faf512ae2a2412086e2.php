<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_fc66e12de19c9662719b653bd38a9b1754ebfd43c3c68faf512ae2a2412086e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('style', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $context["e"] = $this->env->loadTemplate("FOSUserBundle::errors.html.twig");
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-signup fos_user_registration_register\">
\t<h2 class=\"form-signin-heading\" style=\"text-align:center;\">ثبت نام</h2>
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "dir" => "auto", "placeholder" => "نام کاربری")));
        echo "\t    
    ";
        // line 12
        echo $context["e"]->getmess($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors'), "warning");
        echo "

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "dir" => "auto", "placeholder" => "ایمیل")));
        echo "
\t";
        // line 15
        echo $context["e"]->getmess($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors'), "warning");
        echo "    

    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control", "dir" => "auto", "placeholder" => "گذرواژه")));
        echo "
\t";
        // line 18
        echo $context["e"]->getmess($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'errors'), "warning");
        echo "

    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control", "dir" => "auto", "placeholder" => "تکرار گذرواژه")));
        echo "
    ";
        // line 21
        echo $context["e"]->getmess($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'errors'), "warning");
        echo "

    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/signup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  23 => 3,  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 11,  53 => 15,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 63,  124 => 62,  84 => 48,  100 => 33,  65 => 35,  34 => 26,  114 => 59,  97 => 52,  81 => 25,  77 => 12,  58 => 17,  20 => 2,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 24,  71 => 21,  67 => 20,  63 => 34,  59 => 17,  38 => 8,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 35,  87 => 49,  21 => 2,  26 => 12,  93 => 47,  88 => 3,  78 => 17,  46 => 15,  27 => 4,  44 => 12,  31 => 4,  28 => 7,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 55,  91 => 4,  62 => 18,  49 => 14,  24 => 7,  25 => 6,  19 => 2,  79 => 59,  72 => 3,  69 => 2,  47 => 9,  40 => 11,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 31,  96 => 20,  83 => 44,  74 => 4,  66 => 39,  55 => 31,  52 => 16,  50 => 10,  43 => 12,  41 => 9,  35 => 9,  32 => 8,  29 => 24,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 21,  86 => 45,  82 => 22,  80 => 43,  73 => 55,  64 => 19,  60 => 16,  57 => 16,  54 => 15,  51 => 17,  48 => 12,  45 => 12,  42 => 9,  39 => 7,  36 => 7,  33 => 9,  30 => 8,);
    }
}
