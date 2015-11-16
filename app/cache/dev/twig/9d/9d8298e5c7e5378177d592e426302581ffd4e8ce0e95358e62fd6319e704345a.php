<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a26d6db6ad8104e287ae13cfa81c2740f80fe5e9ab87c60ead708df8761a99d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c82d1468bbaca42f3c72980bd549efca0ca5ab17d7e8b8fa9661781202379b5 = $this->env->getExtension("native_profiler");
        $__internal_8c82d1468bbaca42f3c72980bd549efca0ca5ab17d7e8b8fa9661781202379b5->enter($__internal_8c82d1468bbaca42f3c72980bd549efca0ca5ab17d7e8b8fa9661781202379b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c82d1468bbaca42f3c72980bd549efca0ca5ab17d7e8b8fa9661781202379b5->leave($__internal_8c82d1468bbaca42f3c72980bd549efca0ca5ab17d7e8b8fa9661781202379b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5feed53b15eb1b4159112d1472aa5d162a489f51b57872da9083e6b31200bb0b = $this->env->getExtension("native_profiler");
        $__internal_5feed53b15eb1b4159112d1472aa5d162a489f51b57872da9083e6b31200bb0b->enter($__internal_5feed53b15eb1b4159112d1472aa5d162a489f51b57872da9083e6b31200bb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5feed53b15eb1b4159112d1472aa5d162a489f51b57872da9083e6b31200bb0b->leave($__internal_5feed53b15eb1b4159112d1472aa5d162a489f51b57872da9083e6b31200bb0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f008313ff8ca91dc2d5899eeeae825c677b566e6238a192b3171ac7e4bf26851 = $this->env->getExtension("native_profiler");
        $__internal_f008313ff8ca91dc2d5899eeeae825c677b566e6238a192b3171ac7e4bf26851->enter($__internal_f008313ff8ca91dc2d5899eeeae825c677b566e6238a192b3171ac7e4bf26851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f008313ff8ca91dc2d5899eeeae825c677b566e6238a192b3171ac7e4bf26851->leave($__internal_f008313ff8ca91dc2d5899eeeae825c677b566e6238a192b3171ac7e4bf26851_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
