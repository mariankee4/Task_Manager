<?php

/* ::base.html.twig */
class __TwigTemplate_03cb643a31144f7a56c1bc447129a0271eab4467f24a4655b62e37415e954295 extends Twig_Template
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
        $__internal_917b6c03a95c736d329a1229ce30ec7299ffd3c56ec0a3e2492619d0d27ba76d = $this->env->getExtension("native_profiler");
        $__internal_917b6c03a95c736d329a1229ce30ec7299ffd3c56ec0a3e2492619d0d27ba76d->enter($__internal_917b6c03a95c736d329a1229ce30ec7299ffd3c56ec0a3e2492619d0d27ba76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_917b6c03a95c736d329a1229ce30ec7299ffd3c56ec0a3e2492619d0d27ba76d->leave($__internal_917b6c03a95c736d329a1229ce30ec7299ffd3c56ec0a3e2492619d0d27ba76d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25ea2160eb291b3e0857f26b943f96b90239022825d6bb3ec03d05a9c47a13e3 = $this->env->getExtension("native_profiler");
        $__internal_25ea2160eb291b3e0857f26b943f96b90239022825d6bb3ec03d05a9c47a13e3->enter($__internal_25ea2160eb291b3e0857f26b943f96b90239022825d6bb3ec03d05a9c47a13e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_25ea2160eb291b3e0857f26b943f96b90239022825d6bb3ec03d05a9c47a13e3->leave($__internal_25ea2160eb291b3e0857f26b943f96b90239022825d6bb3ec03d05a9c47a13e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d09eae9d277fe6ce108fbdfe344ac9afdcc1dcdacd1eb575b720a897efbb5096 = $this->env->getExtension("native_profiler");
        $__internal_d09eae9d277fe6ce108fbdfe344ac9afdcc1dcdacd1eb575b720a897efbb5096->enter($__internal_d09eae9d277fe6ce108fbdfe344ac9afdcc1dcdacd1eb575b720a897efbb5096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/tasklist/css/jquery-ui-1.10.4.custom.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d09eae9d277fe6ce108fbdfe344ac9afdcc1dcdacd1eb575b720a897efbb5096->leave($__internal_d09eae9d277fe6ce108fbdfe344ac9afdcc1dcdacd1eb575b720a897efbb5096_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5b105c523ce21050dd081bbea946d945400b5f8bbbfdefe98e8ba062ae9454 = $this->env->getExtension("native_profiler");
        $__internal_7c5b105c523ce21050dd081bbea946d945400b5f8bbbfdefe98e8ba062ae9454->enter($__internal_7c5b105c523ce21050dd081bbea946d945400b5f8bbbfdefe98e8ba062ae9454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c5b105c523ce21050dd081bbea946d945400b5f8bbbfdefe98e8ba062ae9454->leave($__internal_7c5b105c523ce21050dd081bbea946d945400b5f8bbbfdefe98e8ba062ae9454_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52a83dbcc59098b5b6e2b572192fc0871eccfadc3a45e120c1dcbd6e84b8ab2e = $this->env->getExtension("native_profiler");
        $__internal_52a83dbcc59098b5b6e2b572192fc0871eccfadc3a45e120c1dcbd6e84b8ab2e->enter($__internal_52a83dbcc59098b5b6e2b572192fc0871eccfadc3a45e120c1dcbd6e84b8ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_52a83dbcc59098b5b6e2b572192fc0871eccfadc3a45e120c1dcbd6e84b8ab2e->leave($__internal_52a83dbcc59098b5b6e2b572192fc0871eccfadc3a45e120c1dcbd6e84b8ab2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
