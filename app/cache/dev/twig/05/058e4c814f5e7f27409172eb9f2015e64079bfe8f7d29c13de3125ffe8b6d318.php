<?php

/* base.html.twig */
class __TwigTemplate_44d4c60426f71190f8967e2556738d7742f6653dbd8003f1233524af715c7649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bcb2e062945425ac4f68ca74c05bc636f8525cfdfd1a06bcf80d4423b38fdd4 = $this->env->getExtension("native_profiler");
        $__internal_9bcb2e062945425ac4f68ca74c05bc636f8525cfdfd1a06bcf80d4423b38fdd4->enter($__internal_9bcb2e062945425ac4f68ca74c05bc636f8525cfdfd1a06bcf80d4423b38fdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_9bcb2e062945425ac4f68ca74c05bc636f8525cfdfd1a06bcf80d4423b38fdd4->leave($__internal_9bcb2e062945425ac4f68ca74c05bc636f8525cfdfd1a06bcf80d4423b38fdd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_694c7e521d988d5f11941888e0708c1c229e1c57704caaf75d9060bd96fb7875 = $this->env->getExtension("native_profiler");
        $__internal_694c7e521d988d5f11941888e0708c1c229e1c57704caaf75d9060bd96fb7875->enter($__internal_694c7e521d988d5f11941888e0708c1c229e1c57704caaf75d9060bd96fb7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_694c7e521d988d5f11941888e0708c1c229e1c57704caaf75d9060bd96fb7875->leave($__internal_694c7e521d988d5f11941888e0708c1c229e1c57704caaf75d9060bd96fb7875_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bdb69be32d22ea9196ab3d5f07f53406e73dcd2d530493f548d416c76627eaa = $this->env->getExtension("native_profiler");
        $__internal_6bdb69be32d22ea9196ab3d5f07f53406e73dcd2d530493f548d416c76627eaa->enter($__internal_6bdb69be32d22ea9196ab3d5f07f53406e73dcd2d530493f548d416c76627eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/css/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_6bdb69be32d22ea9196ab3d5f07f53406e73dcd2d530493f548d416c76627eaa->leave($__internal_6bdb69be32d22ea9196ab3d5f07f53406e73dcd2d530493f548d416c76627eaa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_09658f30932ca94000ea70d56b69845cbff6c695abf14a601a42b6fa410bb947 = $this->env->getExtension("native_profiler");
        $__internal_09658f30932ca94000ea70d56b69845cbff6c695abf14a601a42b6fa410bb947->enter($__internal_09658f30932ca94000ea70d56b69845cbff6c695abf14a601a42b6fa410bb947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_09658f30932ca94000ea70d56b69845cbff6c695abf14a601a42b6fa410bb947->leave($__internal_09658f30932ca94000ea70d56b69845cbff6c695abf14a601a42b6fa410bb947_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de836471fc90ef64a4e119f5a0e7e4f3a259f4bf59f8233c20223780229ab194 = $this->env->getExtension("native_profiler");
        $__internal_de836471fc90ef64a4e119f5a0e7e4f3a259f4bf59f8233c20223780229ab194->enter($__internal_de836471fc90ef64a4e119f5a0e7e4f3a259f4bf59f8233c20223780229ab194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_de836471fc90ef64a4e119f5a0e7e4f3a259f4bf59f8233c20223780229ab194->leave($__internal_de836471fc90ef64a4e119f5a0e7e4f3a259f4bf59f8233c20223780229ab194_prof);

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
        return array (  117 => 17,  113 => 16,  108 => 15,  102 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 19,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/tasklist/css/style.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/tasklist/css/jquery-ui-1.10.4.custom.min.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script type="text/javascript" src="{{ asset('bundles/tasklist/js/jquery-1.11.3.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/tasklist/js/jquery-ui-1.10.4.custom.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('bundles/tasklist/js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
