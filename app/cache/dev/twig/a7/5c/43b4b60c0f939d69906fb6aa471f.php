<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_liste_os.html.twig */
class __TwigTemplate_a75c43b4b60c0f939d69906fb6aa471f extends Twig_Template
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
        echo "  OS - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_parcInfo_content($context, array $blocks = array())
    {
        // line 8
        echo " <div class=\"row\" id='row2'>
  <h2>liste des OS</h2>
  
  <ul>
  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_os"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 13
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_OS", array("id" => $this->getAttribute($this->getContext($context, "produit"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "produit"), "name"), "html", null, true);
            echo " |  </a>
                      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_OS", array("id" => $this->getAttribute($this->getContext($context, "produit"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Supprimer</a></li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "    <li>Pas d'OS trouvé.</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</ul>
   <div class='bottom'><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_ajouter_os"), "html", null, true);
        echo "\">Ajouter ordinateur</a></div>
  
 
 </div>
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_liste_os.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  74 => 18,  67 => 16,  60 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
