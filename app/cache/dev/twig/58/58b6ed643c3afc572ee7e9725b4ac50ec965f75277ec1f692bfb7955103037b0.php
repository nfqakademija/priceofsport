<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_8666f44da7cafdc62faed93988badbb6b6514543a24e0f6632816730aa33c529 extends Twig_Template
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
        $__internal_648fe77dbd40f203073971b9b4c397b0dbcee93975fe476e52ccb96b189ff0d5 = $this->env->getExtension("native_profiler");
        $__internal_648fe77dbd40f203073971b9b4c397b0dbcee93975fe476e52ccb96b189ff0d5->enter($__internal_648fe77dbd40f203073971b9b4c397b0dbcee93975fe476e52ccb96b189ff0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_648fe77dbd40f203073971b9b4c397b0dbcee93975fe476e52ccb96b189ff0d5->leave($__internal_648fe77dbd40f203073971b9b4c397b0dbcee93975fe476e52ccb96b189ff0d5_prof);

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
