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
        return array (  91 => 26,  88 => 25,  79 => 19,  74 => 17,  70 => 16,  66 => 15,  60 => 13,  54 => 11,  52 => 10,  47 => 9,  44 => 8,  38 => 4,  33 => 3,  30 => 2,);
    }
}
