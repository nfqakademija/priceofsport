<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2ccf7720d3e3dcb1014c331db35dd9c386f632360c276155106fdd649c3d55c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_055d3f161fe610595cb84ab45abe3972a7da7e0fd95039b88e17a202753b8b15 = $this->env->getExtension("native_profiler");
        $__internal_055d3f161fe610595cb84ab45abe3972a7da7e0fd95039b88e17a202753b8b15->enter($__internal_055d3f161fe610595cb84ab45abe3972a7da7e0fd95039b88e17a202753b8b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055d3f161fe610595cb84ab45abe3972a7da7e0fd95039b88e17a202753b8b15->leave($__internal_055d3f161fe610595cb84ab45abe3972a7da7e0fd95039b88e17a202753b8b15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11beb06e96909c7932d12032c9288bfd41cb60c219c195c0a2b0f9d6ba12df0a = $this->env->getExtension("native_profiler");
        $__internal_11beb06e96909c7932d12032c9288bfd41cb60c219c195c0a2b0f9d6ba12df0a->enter($__internal_11beb06e96909c7932d12032c9288bfd41cb60c219c195c0a2b0f9d6ba12df0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11beb06e96909c7932d12032c9288bfd41cb60c219c195c0a2b0f9d6ba12df0a->leave($__internal_11beb06e96909c7932d12032c9288bfd41cb60c219c195c0a2b0f9d6ba12df0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d9e1b1f4d4eb81b9116a07ea0f9c6dc05f11afab61d58141e95901f34928565 = $this->env->getExtension("native_profiler");
        $__internal_4d9e1b1f4d4eb81b9116a07ea0f9c6dc05f11afab61d58141e95901f34928565->enter($__internal_4d9e1b1f4d4eb81b9116a07ea0f9c6dc05f11afab61d58141e95901f34928565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d9e1b1f4d4eb81b9116a07ea0f9c6dc05f11afab61d58141e95901f34928565->leave($__internal_4d9e1b1f4d4eb81b9116a07ea0f9c6dc05f11afab61d58141e95901f34928565_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7dd3951f25e1f09bba686fc6810820ec7e17b165b2c17d7f40131c126fd78e67 = $this->env->getExtension("native_profiler");
        $__internal_7dd3951f25e1f09bba686fc6810820ec7e17b165b2c17d7f40131c126fd78e67->enter($__internal_7dd3951f25e1f09bba686fc6810820ec7e17b165b2c17d7f40131c126fd78e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7dd3951f25e1f09bba686fc6810820ec7e17b165b2c17d7f40131c126fd78e67->leave($__internal_7dd3951f25e1f09bba686fc6810820ec7e17b165b2c17d7f40131c126fd78e67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
