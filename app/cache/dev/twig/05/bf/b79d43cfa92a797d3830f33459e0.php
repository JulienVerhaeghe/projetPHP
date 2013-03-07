<?php

/* JulienParcInformatiqueBundle:parcInfo:salle.html.twig */
class __TwigTemplate_05bfb79d43cfa92a797d3830f33459e0 extends Twig_Template
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
        // line 2
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter($this->getContext($context, "accueil"), false)) : (false));
        // line 3
        echo " 
<h2>
 
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "nom"), "html", null, true);
        echo " [ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "localisation"), "html", null, true);
        echo " ]
 
</h2>
 
 
<div class=\"well\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "description"), "html", null, true);
        echo "
</div>
 ";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  26 => 6,  21 => 3,  19 => 2,);
    }
}
