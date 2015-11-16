<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_95de94cff60a1fb7ea307419afdb1541d7db5b972e708d18a7622a37ddb11120 extends Twig_Template
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
        $__internal_ea25fac5b27a46929a63c2890d998ba1148f73540e146184b722fc14e3ef68e1 = $this->env->getExtension("native_profiler");
        $__internal_ea25fac5b27a46929a63c2890d998ba1148f73540e146184b722fc14e3ef68e1->enter($__internal_ea25fac5b27a46929a63c2890d998ba1148f73540e146184b722fc14e3ef68e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ea25fac5b27a46929a63c2890d998ba1148f73540e146184b722fc14e3ef68e1->leave($__internal_ea25fac5b27a46929a63c2890d998ba1148f73540e146184b722fc14e3ef68e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
