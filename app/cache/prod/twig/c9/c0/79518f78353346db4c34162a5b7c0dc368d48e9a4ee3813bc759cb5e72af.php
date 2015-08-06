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
        return array (  186 => 60,  183 => 59,  179 => 52,  176 => 51,  171 => 53,  169 => 51,  165 => 49,  159 => 48,  150 => 45,  144 => 43,  139 => 42,  135 => 41,  132 => 40,  129 => 39,  127 => 38,  120 => 34,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  99 => 21,  96 => 20,  90 => 11,  81 => 61,  73 => 55,  71 => 29,  62 => 23,  59 => 22,  57 => 20,  51 => 17,  46 => 15,  42 => 14,  36 => 11,  24 => 1,  91 => 26,  88 => 25,  79 => 59,  74 => 17,  70 => 16,  66 => 15,  60 => 13,  54 => 11,  52 => 10,  47 => 9,  44 => 8,  38 => 4,  33 => 3,  30 => 2,);
    }
}
