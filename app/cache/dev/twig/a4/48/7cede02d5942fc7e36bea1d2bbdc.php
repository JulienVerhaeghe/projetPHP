<?php

/* JulienParcInformatiqueBundle:parcInfo:supprimer_salle.html.twig */
class __TwigTemplate_a4487cede02d5942fc7e36bea1d2bbdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'parcInfo_body' => array($this, 'block_parcInfo_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JulienParcInformatiqueBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Suprimer une salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Suprimer  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "nom"), "html", null, true);
        echo "</h2>
 
   <p>
    La salle vient d'être supprimé
  </p>
 
 
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:supprimer_salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
