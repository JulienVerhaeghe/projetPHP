<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_package.html.twig */
class __TwigTemplate_900a266dd653ab8d6c3643d5590f554f extends Twig_Template
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
 
  <h2>

        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "package"), "name"), "html", null, true);
        echo "

    </h2>
  
  ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "package"), "logiciels"), "count") > 0)) {
            // line 17
            echo "    - Logiciel :
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "package"), "logiciels"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["logiciel"]) {
                // line 19
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "name"), "html", null, true);
                echo "
      ";
                // line 20
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 21
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logiciel'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "  ";
        }
        // line 23
        echo "
      <p class=\"bottom\">
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_package"), "html", null, true);
        echo "\" class=\"btn\">
     
      Retour à la liste
    </a>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_package", array("id" => $this->getAttribute($this->getContext($context, "package"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
     
      Modifier le package
    </a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_package", array("id" => $this->getAttribute($this->getContext($context, "package"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
    
      Supprimer le package
    </a>
  </p>
    
 </div>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  114 => 29,  107 => 25,  103 => 23,  100 => 22,  86 => 21,  82 => 20,  77 => 19,  60 => 18,  57 => 17,  55 => 16,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
