<?php

/* LiipSearchBundle:Search:paging.html.twig */
class __TwigTemplate_bbefcf53ad46062fe6adb41cf955a52601bb560ea063957a3ea0529625211620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "prev"))) {
            // line 2
            echo "    <a class=\"additional_nav_prev\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "prev"), ($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "current") - 1), array(), "array"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("previous", array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain")));
            echo "</a>
";
        }
        // line 4
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "first"))) {
            // line 5
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "first"));
            foreach ($context['_seq'] as $context["page"] => $context["url"]) {
                // line 6
                echo "        <a class=\"page\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['page'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 9
        if ($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "dotsBefore")) {
            // line 10
            echo "    ...
";
        }
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "prev"));
        foreach ($context['_seq'] as $context["page"] => $context["url"]) {
            // line 13
            echo "    <a class=\"page\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['page'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<a class=\"page current-page\" href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "current"), "html", null, true);
        echo "</a>
";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "next"));
        foreach ($context['_seq'] as $context["page"] => $context["url"]) {
            // line 17
            echo "    <a class=\"page\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['page'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        if ($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "dotsAfter")) {
            // line 20
            echo "    ...
";
        }
        // line 22
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "last"))) {
            // line 23
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "last"));
            foreach ($context['_seq'] as $context["page"] => $context["url"]) {
                // line 24
                echo "        <a class=\"page\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['page'], $context['url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 27
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "next"))) {
            // line 28
            echo "    <a class=\"additional_nav_next\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "next"), ($this->getAttribute((isset($context["paging"]) ? $context["paging"] : $this->getContext($context, "paging")), "current") + 1), array(), "array"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("next", array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain")));
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "LiipSearchBundle:Search:paging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 27,  97 => 23,  81 => 14,  77 => 12,  58 => 13,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 24,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 19,  85 => 16,  75 => 11,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 4,  93 => 28,  88 => 17,  78 => 17,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 20,  62 => 23,  49 => 8,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 15,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 16,  66 => 15,  55 => 8,  52 => 9,  50 => 10,  43 => 4,  41 => 7,  35 => 10,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 28,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 22,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 12,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 9,  36 => 6,  33 => 8,  30 => 7,);
    }
}
