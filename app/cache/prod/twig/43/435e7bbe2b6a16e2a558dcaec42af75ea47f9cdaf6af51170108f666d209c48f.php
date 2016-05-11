<?php

/* base.html.twig */
class __TwigTemplate_bee387c51b3f87cf59f3497c50fe462171dfc896006896fcff32721c2924e4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'canonical_meta' => array($this, 'block_canonical_meta'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f03fb3ecb3b960be6da148ff471ac9f53ba2a92891af44548b0808802d403b2 = $this->env->getExtension("native_profiler");
        $__internal_3f03fb3ecb3b960be6da148ff471ac9f53ba2a92891af44548b0808802d403b2->enter($__internal_3f03fb3ecb3b960be6da148ff471ac9f53ba2a92891af44548b0808802d403b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('canonical_meta', $context, $blocks);
        // line 13
        echo "</head>
<body>
<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Price of Sport</a>
        </div>
    </div>
</nav>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 31
        echo $this->env->getExtension('knp_menu')->render("FrontBundle:Builder:mainMenu", array("currentClass" => "active", "matchingDepth" => 1));
        echo "
        </div>
        <div class=\"col-md-9\">
            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>
    </div>
    <footer>
        <p>&copy; 2016 Price of Sport</p>
    </footer>
</div>
";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</body>
</html>";
        
        $__internal_3f03fb3ecb3b960be6da148ff471ac9f53ba2a92891af44548b0808802d403b2->leave($__internal_3f03fb3ecb3b960be6da148ff471ac9f53ba2a92891af44548b0808802d403b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50710aad6f053568e6306ee9066510084eb51dc5285d57688b3d306f721ef3e3 = $this->env->getExtension("native_profiler");
        $__internal_50710aad6f053568e6306ee9066510084eb51dc5285d57688b3d306f721ef3e3->enter($__internal_50710aad6f053568e6306ee9066510084eb51dc5285d57688b3d306f721ef3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Price of sport";
        
        $__internal_50710aad6f053568e6306ee9066510084eb51dc5285d57688b3d306f721ef3e3->leave($__internal_50710aad6f053568e6306ee9066510084eb51dc5285d57688b3d306f721ef3e3_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b14f130da9a4ed22f049941f2dfea3c4bd19eccaffb1a90046d999eff051fbc = $this->env->getExtension("native_profiler");
        $__internal_6b14f130da9a4ed22f049941f2dfea3c4bd19eccaffb1a90046d999eff051fbc->enter($__internal_6b14f130da9a4ed22f049941f2dfea3c4bd19eccaffb1a90046d999eff051fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "    ";
        
        $__internal_6b14f130da9a4ed22f049941f2dfea3c4bd19eccaffb1a90046d999eff051fbc->leave($__internal_6b14f130da9a4ed22f049941f2dfea3c4bd19eccaffb1a90046d999eff051fbc_prof);

    }

    // line 12
    public function block_canonical_meta($context, array $blocks = array())
    {
        $__internal_b5e62bbf78e72dced30769e53352b0a49958390a91cd34e9dea54d03c35df2b4 = $this->env->getExtension("native_profiler");
        $__internal_b5e62bbf78e72dced30769e53352b0a49958390a91cd34e9dea54d03c35df2b4->enter($__internal_b5e62bbf78e72dced30769e53352b0a49958390a91cd34e9dea54d03c35df2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical_meta"));

        
        $__internal_b5e62bbf78e72dced30769e53352b0a49958390a91cd34e9dea54d03c35df2b4->leave($__internal_b5e62bbf78e72dced30769e53352b0a49958390a91cd34e9dea54d03c35df2b4_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_33718ba000cfbfb08227379673a00db5d512599d837636e5594d206ab2a6c5db = $this->env->getExtension("native_profiler");
        $__internal_33718ba000cfbfb08227379673a00db5d512599d837636e5594d206ab2a6c5db->enter($__internal_33718ba000cfbfb08227379673a00db5d512599d837636e5594d206ab2a6c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33718ba000cfbfb08227379673a00db5d512599d837636e5594d206ab2a6c5db->leave($__internal_33718ba000cfbfb08227379673a00db5d512599d837636e5594d206ab2a6c5db_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57999c6d11d6881d174df8f77e78d49685a62d35531d7fd70772a9c56d8fb628 = $this->env->getExtension("native_profiler");
        $__internal_57999c6d11d6881d174df8f77e78d49685a62d35531d7fd70772a9c56d8fb628->enter($__internal_57999c6d11d6881d174df8f77e78d49685a62d35531d7fd70772a9c56d8fb628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_57999c6d11d6881d174df8f77e78d49685a62d35531d7fd70772a9c56d8fb628->leave($__internal_57999c6d11d6881d174df8f77e78d49685a62d35531d7fd70772a9c56d8fb628_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 42,  146 => 41,  135 => 34,  124 => 12,  117 => 11,  115 => 10,  109 => 9,  97 => 5,  89 => 44,  87 => 41,  79 => 35,  77 => 34,  71 => 31,  51 => 13,  48 => 12,  46 => 9,  42 => 8,  38 => 7,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}{{ "Price of sport" }}{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width,initial-scale=1.0">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}">*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>*/
/*     {% block stylesheets %}*/
/*         {#<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>#}*/
/*     {% endblock %}*/
/*     {% block canonical_meta %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* <nav class="navbar navbar-inverse">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Price of Sport</a>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             {{ knp_menu_render('FrontBundle:Builder:mainMenu', {'currentClass': 'active', 'matchingDepth': 1}) }}*/
/*         </div>*/
/*         <div class="col-md-9">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <footer>*/
/*         <p>&copy; 2016 Price of Sport</p>*/
/*     </footer>*/
/* </div>*/
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/script.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
