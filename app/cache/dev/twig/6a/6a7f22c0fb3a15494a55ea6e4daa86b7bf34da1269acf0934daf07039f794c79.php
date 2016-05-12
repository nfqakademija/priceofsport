<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a53afd7d53e5d6bbb40cf3cd27e4f77dbd0b8860c3aea3c4e42e57896aff932c extends Twig_Template
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
        $__internal_1ad6c6930d8456b106fe8ecb45ac23b3c019821274ad3c9163e8a8aed10db0e1 = $this->env->getExtension("native_profiler");
        $__internal_1ad6c6930d8456b106fe8ecb45ac23b3c019821274ad3c9163e8a8aed10db0e1->enter($__internal_1ad6c6930d8456b106fe8ecb45ac23b3c019821274ad3c9163e8a8aed10db0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1ad6c6930d8456b106fe8ecb45ac23b3c019821274ad3c9163e8a8aed10db0e1->leave($__internal_1ad6c6930d8456b106fe8ecb45ac23b3c019821274ad3c9163e8a8aed10db0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
