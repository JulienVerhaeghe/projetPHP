<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_liste_salle.html.twig */
class __TwigTemplate_6d48b7923a8aed9b1db2ea41637fb79c extends Twig_Template
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
<h2>liste des salles</h2>
  
  <ul>
  ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 9
            echo "          <li><a id='produit' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "nom"), "html", null, true);
            echo "</a>
                  
                      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Modifier</a>
                      <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Supprimer</a>
                               
    
    
     
</li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "    <li>Aucune salle</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</ul>
<div class='bottom'><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_salle"), "html", null, true);
        echo "\">Ajouter salle</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_liste_salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  73 => 21,  66 => 19,  54 => 12,  50 => 11,  42 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
