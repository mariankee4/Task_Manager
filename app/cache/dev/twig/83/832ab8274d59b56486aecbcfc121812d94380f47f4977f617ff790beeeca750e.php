<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6253963a83cb81f64e6b8f8ba9a00af02a656aa8e11f79115d1fbd07b3137b65 extends Twig_Template
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
        $__internal_a54ff36646a18a8e3a56977c33c91ae65b09e971a492e9d85468ae378eaed44b = $this->env->getExtension("native_profiler");
        $__internal_a54ff36646a18a8e3a56977c33c91ae65b09e971a492e9d85468ae378eaed44b->enter($__internal_a54ff36646a18a8e3a56977c33c91ae65b09e971a492e9d85468ae378eaed44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a54ff36646a18a8e3a56977c33c91ae65b09e971a492e9d85468ae378eaed44b->leave($__internal_a54ff36646a18a8e3a56977c33c91ae65b09e971a492e9d85468ae378eaed44b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
