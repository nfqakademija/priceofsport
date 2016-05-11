<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_0f238219325ba7b6fc1c74dd5369833064aca9564341d01e81ed1025754162f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62626af77861d49dc528a6c6f729ee332be2ac6aa881deb8024baf320641b1c4 = $this->env->getExtension("native_profiler");
        $__internal_62626af77861d49dc528a6c6f729ee332be2ac6aa881deb8024baf320641b1c4->enter($__internal_62626af77861d49dc528a6c6f729ee332be2ac6aa881deb8024baf320641b1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62626af77861d49dc528a6c6f729ee332be2ac6aa881deb8024baf320641b1c4->leave($__internal_62626af77861d49dc528a6c6f729ee332be2ac6aa881deb8024baf320641b1c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38d74b1d2fa415d1b1676c107ef2eba5a51b2cb8c22c22f0abbae6eb477a8ecb = $this->env->getExtension("native_profiler");
        $__internal_38d74b1d2fa415d1b1676c107ef2eba5a51b2cb8c22c22f0abbae6eb477a8ecb->enter($__internal_38d74b1d2fa415d1b1676c107ef2eba5a51b2cb8c22c22f0abbae6eb477a8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>
";
        
        $__internal_38d74b1d2fa415d1b1676c107ef2eba5a51b2cb8c22c22f0abbae6eb477a8ecb->leave($__internal_38d74b1d2fa415d1b1676c107ef2eba5a51b2cb8c22c22f0abbae6eb477a8ecb_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="jumbotron">*/
/*         <div class="container">*/
/*             <h1>Hello, world!</h1>*/
/*             <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>*/
/*             <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
