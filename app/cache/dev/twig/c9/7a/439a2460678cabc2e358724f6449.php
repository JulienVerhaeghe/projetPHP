<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_liste_ordi.html.twig */
class __TwigTemplate_c97a439a2460678cabc2e358724f6449 extends Twig_Template
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
        echo "  Ordinateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo " <div class=\"row\" id='row2'>
  <h2>liste des Ordinateurs</h2>
  
  <ul>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_ordi"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ordi"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_ordi", array("id" => $this->getAttribute($this->getContext($context, "ordi"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ordi"), "name"), "html", null, true);
            echo " | </a></li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "    <li>Pas d'ordinateur trouvé.</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordi'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "</ul>
   <div class='bottom'><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_ordi"), "html", null, true);
        echo "\">Ajouter ordinateur</a></div>
  
 
 </div>
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_liste_ordi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  70 => 17,  63 => 15,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
