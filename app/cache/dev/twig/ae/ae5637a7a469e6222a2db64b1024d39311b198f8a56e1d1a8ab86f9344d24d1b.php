<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_45ea82bc6505fb7fc8c3761730f3e399e1da71a9a1a15aa8a64fa81d4bc6c56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01962f03e94ba22ef243c79d6790689e3068bf1b0f78723cc3be988d3c47302a = $this->env->getExtension("native_profiler");
        $__internal_01962f03e94ba22ef243c79d6790689e3068bf1b0f78723cc3be988d3c47302a->enter($__internal_01962f03e94ba22ef243c79d6790689e3068bf1b0f78723cc3be988d3c47302a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01962f03e94ba22ef243c79d6790689e3068bf1b0f78723cc3be988d3c47302a->leave($__internal_01962f03e94ba22ef243c79d6790689e3068bf1b0f78723cc3be988d3c47302a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70a1a93f990a110f2448d55a8297220c3e7ef60924b8cb1f61ff53b37eceb044 = $this->env->getExtension("native_profiler");
        $__internal_70a1a93f990a110f2448d55a8297220c3e7ef60924b8cb1f61ff53b37eceb044->enter($__internal_70a1a93f990a110f2448d55a8297220c3e7ef60924b8cb1f61ff53b37eceb044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_70a1a93f990a110f2448d55a8297220c3e7ef60924b8cb1f61ff53b37eceb044->leave($__internal_70a1a93f990a110f2448d55a8297220c3e7ef60924b8cb1f61ff53b37eceb044_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_99692c79a934433ffa295ba374eaf9bae11a1dda428ac2fd270a66dbf809984e = $this->env->getExtension("native_profiler");
        $__internal_99692c79a934433ffa295ba374eaf9bae11a1dda428ac2fd270a66dbf809984e->enter($__internal_99692c79a934433ffa295ba374eaf9bae11a1dda428ac2fd270a66dbf809984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_99692c79a934433ffa295ba374eaf9bae11a1dda428ac2fd270a66dbf809984e->leave($__internal_99692c79a934433ffa295ba374eaf9bae11a1dda428ac2fd270a66dbf809984e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e8882c1e5435c3df1efee4d231d1c28ff4e9fb3e52cd54104a7bf54567f1e2 = $this->env->getExtension("native_profiler");
        $__internal_95e8882c1e5435c3df1efee4d231d1c28ff4e9fb3e52cd54104a7bf54567f1e2->enter($__internal_95e8882c1e5435c3df1efee4d231d1c28ff4e9fb3e52cd54104a7bf54567f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_95e8882c1e5435c3df1efee4d231d1c28ff4e9fb3e52cd54104a7bf54567f1e2->leave($__internal_95e8882c1e5435c3df1efee4d231d1c28ff4e9fb3e52cd54104a7bf54567f1e2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d394f932e339a256f8b70b522b41e2a5ba3928d69769d5826895ccf431b4950 = $this->env->getExtension("native_profiler");
        $__internal_5d394f932e339a256f8b70b522b41e2a5ba3928d69769d5826895ccf431b4950->enter($__internal_5d394f932e339a256f8b70b522b41e2a5ba3928d69769d5826895ccf431b4950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5d394f932e339a256f8b70b522b41e2a5ba3928d69769d5826895ccf431b4950->leave($__internal_5d394f932e339a256f8b70b522b41e2a5ba3928d69769d5826895ccf431b4950_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
