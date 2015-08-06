<?php

/* FOSUserBundle::errors.html.twig */
class __TwigTemplate_0caf7ba7a0e3cdcc3e3a81034522934d35058940dad4d671e976b0fe32174645 extends Twig_Template
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
    }

    // line 1
    public function getmess($_mess = null, $_type = null)
    {
        $context = $this->env->mergeGlobals(array(
            "mess" => $_mess,
            "type" => $_type,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if ((!twig_test_empty((isset($context["mess"]) ? $context["mess"] : $this->getContext($context, "mess"))))) {
                // line 3
                echo "\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "info")) : ("info")), "html", null, true);
                echo "\">";
                echo (isset($context["mess"]) ? $context["mess"] : $this->getContext($context, "mess"));
                echo "</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  21 => 1,  91 => 4,  88 => 3,  81 => 25,  76 => 23,  71 => 21,  67 => 20,  62 => 18,  58 => 17,  53 => 15,  49 => 14,  44 => 12,  40 => 11,  33 => 2,  30 => 8,  25 => 6,  23 => 3,  20 => 2,  31 => 4,  28 => 7,);
    }
}
