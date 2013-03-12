<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_liste_peripherique.html.twig */
class __TwigTemplate_a225ad3da4e59ec6f03cbdfadee0eba3 extends Twig_Template
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
        echo "  Périphérique - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"row\" id='row2'>
 
  <h2>liste des périphérique</h2>
  
  <ul>
  ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_peripherique"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["periph"]) {
            // line 14
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_peripherique", array("id" => $this->getAttribute($this->getContext($context, "periph"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "periph"), "name"), "html", null, true);
            echo "</a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_peripherique", array("id" => $this->getAttribute($this->getContext($context, "periph"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Modifier</a>
                      <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_peripherique", array("id" => $this->getAttribute($this->getContext($context, "periph"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Supprimer</a></li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "    <li>Pas de periphérique trouvé.</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periph'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "</ul>
  <div class='bottom'><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_peripherique"), "html", null, true);
        echo "\">Ajouter Périphérique</a></div>
   </div>
  
 
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_liste_peripherique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  77 => 19,  70 => 17,  63 => 15,  54 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
