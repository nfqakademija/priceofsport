<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_422cd703d1e8de6197d2d81fbb7368209003f76c9412e7f5a92e080f70d94aa7 extends Twig_Template
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
        $__internal_7582ec042d88251ae5c313751e496971224bd1093238a0363107a79ee51a354f = $this->env->getExtension("native_profiler");
        $__internal_7582ec042d88251ae5c313751e496971224bd1093238a0363107a79ee51a354f->enter($__internal_7582ec042d88251ae5c313751e496971224bd1093238a0363107a79ee51a354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7582ec042d88251ae5c313751e496971224bd1093238a0363107a79ee51a354f->leave($__internal_7582ec042d88251ae5c313751e496971224bd1093238a0363107a79ee51a354f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb4b826f0dbad03326cbf9f48fc5f578ed82f89eb1701e1f882007d7e00a857b = $this->env->getExtension("native_profiler");
        $__internal_fb4b826f0dbad03326cbf9f48fc5f578ed82f89eb1701e1f882007d7e00a857b->enter($__internal_fb4b826f0dbad03326cbf9f48fc5f578ed82f89eb1701e1f882007d7e00a857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>
";
        
        $__internal_fb4b826f0dbad03326cbf9f48fc5f578ed82f89eb1701e1f882007d7e00a857b->leave($__internal_fb4b826f0dbad03326cbf9f48fc5f578ed82f89eb1701e1f882007d7e00a857b_prof);

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
