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
        return array (  91 => 4,  88 => 3,  81 => 25,  76 => 23,  71 => 21,  67 => 20,  62 => 18,  58 => 17,  53 => 15,  49 => 14,  44 => 12,  40 => 11,  33 => 9,  30 => 8,  25 => 6,  23 => 3,  20 => 2,  31 => 4,  28 => 7,);
    }
}
