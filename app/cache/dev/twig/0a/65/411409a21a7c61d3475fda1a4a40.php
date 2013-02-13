<?php

/* JulienParcInformatiqueBundle:parcInfo:index.html.twig */
class __TwigTemplate_0a65411409a21a7c61d3475fda1a4a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JulienParcInformatiqueBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Liste des salles</h2>
 
  <ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "salles"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["salle"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "nom"), "html", null, true);
            echo "</a>
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "      <li>Pas (encore !) d'salles</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['salle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  66 => 17,  56 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
