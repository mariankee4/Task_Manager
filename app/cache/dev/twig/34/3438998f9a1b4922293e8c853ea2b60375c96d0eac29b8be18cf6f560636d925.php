<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2018bddbf12944686080b23a1b065acbf2c6863065258a27f6e0ac48f60b7e87 extends Twig_Template
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
        $__internal_7341c5dc2ea5ae19336100f3fca38fccee16824fe193e727fd468050c2224337 = $this->env->getExtension("native_profiler");
        $__internal_7341c5dc2ea5ae19336100f3fca38fccee16824fe193e727fd468050c2224337->enter($__internal_7341c5dc2ea5ae19336100f3fca38fccee16824fe193e727fd468050c2224337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7341c5dc2ea5ae19336100f3fca38fccee16824fe193e727fd468050c2224337->leave($__internal_7341c5dc2ea5ae19336100f3fca38fccee16824fe193e727fd468050c2224337_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
