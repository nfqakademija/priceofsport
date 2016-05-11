<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea3abaefeaf402fa2e2e7ac11ea764dd99aa2098a4e17253e63021452eff4f91 extends Twig_Template
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
        $__internal_49b77d0b60b72634036dbead354ecceddb3002443421ead383d29c51772de3ab = $this->env->getExtension("native_profiler");
        $__internal_49b77d0b60b72634036dbead354ecceddb3002443421ead383d29c51772de3ab->enter($__internal_49b77d0b60b72634036dbead354ecceddb3002443421ead383d29c51772de3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49b77d0b60b72634036dbead354ecceddb3002443421ead383d29c51772de3ab->leave($__internal_49b77d0b60b72634036dbead354ecceddb3002443421ead383d29c51772de3ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c8f45a3b40a35273d9e10784f3109ef4a80e58605b33a37f20602f57514476b = $this->env->getExtension("native_profiler");
        $__internal_1c8f45a3b40a35273d9e10784f3109ef4a80e58605b33a37f20602f57514476b->enter($__internal_1c8f45a3b40a35273d9e10784f3109ef4a80e58605b33a37f20602f57514476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c8f45a3b40a35273d9e10784f3109ef4a80e58605b33a37f20602f57514476b->leave($__internal_1c8f45a3b40a35273d9e10784f3109ef4a80e58605b33a37f20602f57514476b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4a744af798f4ab796f822e77a2cd0a3248eb12e040ed718d9b5cf62e16b7c94 = $this->env->getExtension("native_profiler");
        $__internal_c4a744af798f4ab796f822e77a2cd0a3248eb12e040ed718d9b5cf62e16b7c94->enter($__internal_c4a744af798f4ab796f822e77a2cd0a3248eb12e040ed718d9b5cf62e16b7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4a744af798f4ab796f822e77a2cd0a3248eb12e040ed718d9b5cf62e16b7c94->leave($__internal_c4a744af798f4ab796f822e77a2cd0a3248eb12e040ed718d9b5cf62e16b7c94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a904e4b04b544fccadd0182d2b6fec6ccab6de59a7d273a8408bf3dcbd55a534 = $this->env->getExtension("native_profiler");
        $__internal_a904e4b04b544fccadd0182d2b6fec6ccab6de59a7d273a8408bf3dcbd55a534->enter($__internal_a904e4b04b544fccadd0182d2b6fec6ccab6de59a7d273a8408bf3dcbd55a534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a904e4b04b544fccadd0182d2b6fec6ccab6de59a7d273a8408bf3dcbd55a534->leave($__internal_a904e4b04b544fccadd0182d2b6fec6ccab6de59a7d273a8408bf3dcbd55a534_prof);

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
