<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig */
class __TwigTemplate_5bb0e384ba29309a2384f36b1cd385bd extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>Lecture de l'article ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Hello Article n°";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo " !</h1>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
