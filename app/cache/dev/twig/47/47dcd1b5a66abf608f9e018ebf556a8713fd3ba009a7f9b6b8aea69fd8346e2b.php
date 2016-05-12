<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f1bec7f67717e202433e02ec91efbeaf76ed9a22448cf4b3ea576d660b82879e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68946871d565e173d54ae35c2cc890030875db5e95099f9c4ea7777e71428eb6 = $this->env->getExtension("native_profiler");
        $__internal_68946871d565e173d54ae35c2cc890030875db5e95099f9c4ea7777e71428eb6->enter($__internal_68946871d565e173d54ae35c2cc890030875db5e95099f9c4ea7777e71428eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68946871d565e173d54ae35c2cc890030875db5e95099f9c4ea7777e71428eb6->leave($__internal_68946871d565e173d54ae35c2cc890030875db5e95099f9c4ea7777e71428eb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3ecc18db3ed2bf88f913f3e5c38e2890e367a1e7d78f9bfc90fc47bbe0e256e = $this->env->getExtension("native_profiler");
        $__internal_a3ecc18db3ed2bf88f913f3e5c38e2890e367a1e7d78f9bfc90fc47bbe0e256e->enter($__internal_a3ecc18db3ed2bf88f913f3e5c38e2890e367a1e7d78f9bfc90fc47bbe0e256e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3ecc18db3ed2bf88f913f3e5c38e2890e367a1e7d78f9bfc90fc47bbe0e256e->leave($__internal_a3ecc18db3ed2bf88f913f3e5c38e2890e367a1e7d78f9bfc90fc47bbe0e256e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e15bb36f6dac1f7ea752fdfa98ebc2b9fbf7d0e80c27eecfa9c072338eeb8b05 = $this->env->getExtension("native_profiler");
        $__internal_e15bb36f6dac1f7ea752fdfa98ebc2b9fbf7d0e80c27eecfa9c072338eeb8b05->enter($__internal_e15bb36f6dac1f7ea752fdfa98ebc2b9fbf7d0e80c27eecfa9c072338eeb8b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e15bb36f6dac1f7ea752fdfa98ebc2b9fbf7d0e80c27eecfa9c072338eeb8b05->leave($__internal_e15bb36f6dac1f7ea752fdfa98ebc2b9fbf7d0e80c27eecfa9c072338eeb8b05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfbe14536cb3054d6130cfe0d753f99ef530db3f626d48e940866c94223ddf80 = $this->env->getExtension("native_profiler");
        $__internal_dfbe14536cb3054d6130cfe0d753f99ef530db3f626d48e940866c94223ddf80->enter($__internal_dfbe14536cb3054d6130cfe0d753f99ef530db3f626d48e940866c94223ddf80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dfbe14536cb3054d6130cfe0d753f99ef530db3f626d48e940866c94223ddf80->leave($__internal_dfbe14536cb3054d6130cfe0d753f99ef530db3f626d48e940866c94223ddf80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
