<?php

/* JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig */
class __TwigTemplate_e339bb751a9661161df88e86877cb715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " 
  <h2>Ajouter une Salle</h2>
 
  ";
        // line 9
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig")->display($context);
        // line 10
        echo " 
  <p>
     Attention : cet article sera ajouté directement
     sur la page d'accueil après validation du formulaire.
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  36 => 9,  31 => 6,  28 => 5,);
    }
}
