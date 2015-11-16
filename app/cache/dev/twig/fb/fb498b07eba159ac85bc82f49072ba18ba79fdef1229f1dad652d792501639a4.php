<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_79c7d2eabe23236f220d9c62eafb48fcf57a91e08d9b009e0b92eaa08f1b431f extends Twig_Template
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
        $__internal_356847a42dfc98d0fdb95a7095ea6104084f5b3e64ee3a9f3081422763750d63 = $this->env->getExtension("native_profiler");
        $__internal_356847a42dfc98d0fdb95a7095ea6104084f5b3e64ee3a9f3081422763750d63->enter($__internal_356847a42dfc98d0fdb95a7095ea6104084f5b3e64ee3a9f3081422763750d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_356847a42dfc98d0fdb95a7095ea6104084f5b3e64ee3a9f3081422763750d63->leave($__internal_356847a42dfc98d0fdb95a7095ea6104084f5b3e64ee3a9f3081422763750d63_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
