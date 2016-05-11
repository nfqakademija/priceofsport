<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_a9b84e123438a3378de8cf95a0976b7d0c59b3a6d74c6eab8ef7d82509086b48 extends Twig_Template
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
        $__internal_679a450e425dce1978e79931958fe4d163d845993651658e7714c48696ad16b9 = $this->env->getExtension("native_profiler");
        $__internal_679a450e425dce1978e79931958fe4d163d845993651658e7714c48696ad16b9->enter($__internal_679a450e425dce1978e79931958fe4d163d845993651658e7714c48696ad16b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_679a450e425dce1978e79931958fe4d163d845993651658e7714c48696ad16b9->leave($__internal_679a450e425dce1978e79931958fe4d163d845993651658e7714c48696ad16b9_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
