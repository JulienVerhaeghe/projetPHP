<?php

/* JulienParcInformatiqueBundle:parcInfo:ajouter_ordi.html.twig */
class __TwigTemplate_69ab9aa50427872871d5d4b2ee7b397d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'parcInfo_content' => array($this, 'block_parcInfo_content'),
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
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\" id='row2'>
  <h2>Ajouter un article</h2>
 
  ";
        // line 7
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig")->display($context);
        // line 8
        echo " 
  <p>
     Attention : cet article sera ajouté directement
     sur la page d'accueil après validation du formulaire.
  </p>
 </div>
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:ajouter_ordi.html.twig";
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
