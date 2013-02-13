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
        echo "  Lecture d'une salle - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_sdzblog_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>

        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "package"), "name"), "html", null, true);
        echo "

    </h2>
  
  ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "package"), "logiciels"), "count") > 0)) {
            // line 16
            echo "    - Logiciel :
    ";
            // line 17
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
                // line 18
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "logiciel"), "name"), "html", null, true);
                echo "
      ";
                // line 19
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 20
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
            // line 21
            echo "  ";
        }
        // line 22
        echo "
 <p>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_package"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_package", array("id" => $this->getAttribute($this->getContext($context, "package"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le package
    </a>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_package", array("id" => $this->getAttribute($this->getContext($context, "package"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer le package
    </a>
  </p>
    
 
 
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
        return array (  120 => 32,  113 => 28,  106 => 24,  102 => 22,  99 => 21,  85 => 20,  81 => 19,  76 => 18,  59 => 17,  56 => 16,  54 => 15,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
