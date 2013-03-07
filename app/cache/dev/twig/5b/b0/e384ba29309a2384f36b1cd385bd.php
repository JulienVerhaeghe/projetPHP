<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig */
class __TwigTemplate_5bb0e384ba29309a2384f36b1cd385bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Lecture d'une salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\" id='row2'>
 
  ";
        // line 11
        echo "  ";
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:salle.html.twig")->display($context);
        // line 12
        echo " 
      <p class=\"bottom\">
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_salle"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier la salle
    </a>
    <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer la salle
    </a>
  </p>
 </div>
";
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
        return array (  67 => 22,  60 => 18,  53 => 14,  49 => 12,  46 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
