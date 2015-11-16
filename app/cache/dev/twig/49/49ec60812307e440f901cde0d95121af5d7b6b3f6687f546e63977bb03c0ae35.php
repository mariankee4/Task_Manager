<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ba4825139e872253cd5c9faf517eb133777a44de6f8d7419086ef0f7a261bfa0 extends Twig_Template
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
        $__internal_c058f5219008713d8cd502ce39fb8467c5d45f23fdc89308ad8888192f6b4f42 = $this->env->getExtension("native_profiler");
        $__internal_c058f5219008713d8cd502ce39fb8467c5d45f23fdc89308ad8888192f6b4f42->enter($__internal_c058f5219008713d8cd502ce39fb8467c5d45f23fdc89308ad8888192f6b4f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c058f5219008713d8cd502ce39fb8467c5d45f23fdc89308ad8888192f6b4f42->leave($__internal_c058f5219008713d8cd502ce39fb8467c5d45f23fdc89308ad8888192f6b4f42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
