<?php

/* JulienParcInformatiqueBundle:parcInfo:ajouter_reference.html.twig */
class __TwigTemplate_5fd409710555fc878ae647b28b071a8c extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " 
  <h2>Ajouter une reference</h2>
 
  ";
        // line 7
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig")->display($context);
        // line 8
        echo " 
  <p>
     Attention : cet article sera ajouté directement
     sur la page d'accueil après validation du formulaire.
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:ajouter_reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
