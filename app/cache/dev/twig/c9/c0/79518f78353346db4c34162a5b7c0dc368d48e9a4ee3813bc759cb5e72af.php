<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c9c079518f78353346db4c34162a5b7c0dc368d48e9a4ee3813bc759cb5e72af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fa\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
  
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.png\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo " - چکش</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sticky-footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Customizing style with Bootstrap -->    
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    ";
        // line 20
        $this->displayBlock('style', $context, $blocks);
        // line 22
        echo "    <!--[if lt IE 9]>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
  </head>
  <body>

    <div class=\"container\">
\t\t";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "    </div> <!-- /container -->

    <div id=\"footer\">
      <div class=\"container\">
      \t";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "      </div>
    </div>

  </body>
</html>
        ";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "چکش";
    }

    // line 20
    public function block_style($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "\t\t\t\t<div class=\"alert alert-info\">
\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t";
            // line 39
            echo "\t\t\t";
        }
        // line 40
        echo "\t\t
\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 42
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 43
                echo "\t\t\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t
\t\t\t<div>
\t\t\t\t";
        // line 51
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 53
        echo "\t\t\t</div>
\t\t";
    }

    // line 51
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 52
        echo "\t\t\t\t";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "      \t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  150 => 45,  127 => 38,  181 => 81,  178 => 80,  170 => 77,  167 => 76,  165 => 49,  148 => 69,  137 => 65,  113 => 55,  104 => 51,  90 => 11,  53 => 30,  188 => 88,  155 => 75,  152 => 74,  129 => 39,  126 => 63,  124 => 62,  84 => 48,  100 => 33,  65 => 35,  34 => 26,  114 => 59,  97 => 52,  81 => 61,  77 => 12,  58 => 32,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 66,  132 => 40,  128 => 60,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 52,  159 => 48,  143 => 56,  135 => 41,  119 => 42,  102 => 24,  71 => 29,  67 => 15,  63 => 34,  59 => 22,  38 => 10,  94 => 51,  89 => 28,  85 => 16,  75 => 43,  68 => 36,  56 => 35,  87 => 49,  21 => 2,  26 => 3,  93 => 47,  88 => 17,  78 => 17,  46 => 15,  27 => 5,  44 => 26,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 59,  171 => 53,  166 => 79,  163 => 78,  158 => 67,  156 => 66,  151 => 70,  142 => 59,  138 => 69,  136 => 56,  121 => 61,  117 => 44,  105 => 55,  91 => 50,  62 => 23,  49 => 11,  24 => 1,  25 => 3,  19 => 16,  79 => 59,  72 => 16,  69 => 40,  47 => 9,  40 => 8,  37 => 7,  22 => 17,  246 => 90,  157 => 56,  145 => 46,  139 => 42,  131 => 61,  123 => 58,  120 => 34,  115 => 43,  111 => 37,  108 => 56,  101 => 32,  98 => 31,  96 => 20,  83 => 44,  74 => 39,  66 => 39,  55 => 31,  52 => 16,  50 => 29,  43 => 12,  41 => 25,  35 => 10,  32 => 7,  29 => 24,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 85,  176 => 51,  173 => 65,  168 => 80,  164 => 59,  162 => 74,  154 => 71,  149 => 73,  147 => 58,  144 => 43,  141 => 70,  133 => 55,  130 => 41,  125 => 59,  122 => 43,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  99 => 21,  95 => 22,  92 => 21,  86 => 45,  82 => 22,  80 => 43,  73 => 55,  64 => 38,  60 => 16,  57 => 20,  54 => 34,  51 => 17,  48 => 7,  45 => 30,  42 => 14,  39 => 9,  36 => 11,  33 => 22,  30 => 21,);
    }
}
