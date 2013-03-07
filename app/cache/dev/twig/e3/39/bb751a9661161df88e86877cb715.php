<?php

/* JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig */
class __TwigTemplate_e339bb751a9661161df88e86877cb715 extends Twig_Template
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

    // line 5
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\" id='row2'>
  
  ";
        // line 8
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:formulaire.html.twig")->display($context);
        // line 9
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
        return "JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  35 => 8,  31 => 6,  28 => 5,);
    }
}
