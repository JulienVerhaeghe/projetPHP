<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_liste.html.twig */
class __TwigTemplate_cf70a6871e3283b9c8ac59b9293b9cac extends Twig_Template
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
<h2>liste des ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "s</h2>
  
  <ul class='fistLi'>
      
  ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "          <li><a id='produit' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "lien_voir"), array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom"), "html", null, true);
            echo "</a>
              <ul class=\"secondUl\">
                  <li> <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "lien_update"), array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Modifier</a></li>
                  <li><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "lien_delete"), array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\" class=\"btn\">Supprimer</a></li>
              </ul>
     
</li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "    <li>Aucun(e) ";
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "</ul>
<div class='bottom'><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "lien_post")), "html", null, true);
        echo " \">Ajouter ";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</a></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  77 => 20,  68 => 18,  58 => 13,  54 => 12,  46 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
