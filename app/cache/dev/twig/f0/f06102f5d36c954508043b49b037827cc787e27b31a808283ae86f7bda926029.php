<?php

/* base.html.twig */
class __TwigTemplate_d4a2e23c513c3fadbe36c01a53ccdc0b33a91051d9d46763aa1539b27d479ab7 extends Twig_Template
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
        $__internal_a05f4894b9d11aae37c5c015d4207885e7c245919d76188c6d9188512dee4e11 = $this->env->getExtension("native_profiler");
        $__internal_a05f4894b9d11aae37c5c015d4207885e7c245919d76188c6d9188512dee4e11->enter($__internal_a05f4894b9d11aae37c5c015d4207885e7c245919d76188c6d9188512dee4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a05f4894b9d11aae37c5c015d4207885e7c245919d76188c6d9188512dee4e11->leave($__internal_a05f4894b9d11aae37c5c015d4207885e7c245919d76188c6d9188512dee4e11_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9054242b509ac95d608fbf8d8d881c1b765f231b8595ce4bc0aff74118c58088 = $this->env->getExtension("native_profiler");
        $__internal_9054242b509ac95d608fbf8d8d881c1b765f231b8595ce4bc0aff74118c58088->enter($__internal_9054242b509ac95d608fbf8d8d881c1b765f231b8595ce4bc0aff74118c58088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Price of sport";
        
        $__internal_9054242b509ac95d608fbf8d8d881c1b765f231b8595ce4bc0aff74118c58088->leave($__internal_9054242b509ac95d608fbf8d8d881c1b765f231b8595ce4bc0aff74118c58088_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7aa5b929dd971045669324cef3c163d018bd7bff301aab86fcf0ed6c0aa7f0fd = $this->env->getExtension("native_profiler");
        $__internal_7aa5b929dd971045669324cef3c163d018bd7bff301aab86fcf0ed6c0aa7f0fd->enter($__internal_7aa5b929dd971045669324cef3c163d018bd7bff301aab86fcf0ed6c0aa7f0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        ";
        // line 11
        echo "    ";
        
        $__internal_7aa5b929dd971045669324cef3c163d018bd7bff301aab86fcf0ed6c0aa7f0fd->leave($__internal_7aa5b929dd971045669324cef3c163d018bd7bff301aab86fcf0ed6c0aa7f0fd_prof);

    }

    // line 12
    public function block_canonical_meta($context, array $blocks = array())
    {
        $__internal_1211d9f8a55353c60425cb2386919cc559c4b9d3626c8e349c056d3cba8f746d = $this->env->getExtension("native_profiler");
        $__internal_1211d9f8a55353c60425cb2386919cc559c4b9d3626c8e349c056d3cba8f746d->enter($__internal_1211d9f8a55353c60425cb2386919cc559c4b9d3626c8e349c056d3cba8f746d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "canonical_meta"));

        
        $__internal_1211d9f8a55353c60425cb2386919cc559c4b9d3626c8e349c056d3cba8f746d->leave($__internal_1211d9f8a55353c60425cb2386919cc559c4b9d3626c8e349c056d3cba8f746d_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cf1ef7bda66615d7ae50d3272911d3368debbaa32ea7566ebecfd27d5dc3719 = $this->env->getExtension("native_profiler");
        $__internal_0cf1ef7bda66615d7ae50d3272911d3368debbaa32ea7566ebecfd27d5dc3719->enter($__internal_0cf1ef7bda66615d7ae50d3272911d3368debbaa32ea7566ebecfd27d5dc3719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0cf1ef7bda66615d7ae50d3272911d3368debbaa32ea7566ebecfd27d5dc3719->leave($__internal_0cf1ef7bda66615d7ae50d3272911d3368debbaa32ea7566ebecfd27d5dc3719_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a84c6e3d6b8371176f9929eba96761c123e0a76a1d32b07dad4f6d60c4e54534 = $this->env->getExtension("native_profiler");
        $__internal_a84c6e3d6b8371176f9929eba96761c123e0a76a1d32b07dad4f6d60c4e54534->enter($__internal_a84c6e3d6b8371176f9929eba96761c123e0a76a1d32b07dad4f6d60c4e54534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a84c6e3d6b8371176f9929eba96761c123e0a76a1d32b07dad4f6d60c4e54534->leave($__internal_a84c6e3d6b8371176f9929eba96761c123e0a76a1d32b07dad4f6d60c4e54534_prof);

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
