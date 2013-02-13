<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_ordi.html.twig */
class __TwigTemplate_d65853959e6dc5cd23a2314cd5ef25da extends Twig_Template
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
        echo "  Lecture d'un ordinateur - ";
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ordi"), "name"), "html", null, true);
        echo " [ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "ordi"), "salle"), "nom"), "html", null, true);
        echo " ]

    </h2>
 ";
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "ordi"), "os"), "count") > 0)) {
            // line 15
            echo "    - Systeme d'exploitation :
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "ordi"), "os"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["os"]) {
                // line 17
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "os"), "name"), "html", null, true);
                echo "
      ";
                // line 18
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 19
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['os'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 20
            echo "  ";
        }
        // line 21
        echo "      
      ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "ordi"), "package"), "count") > 0)) {
            // line 23
            echo "    <br/> - Package de logiciel:
    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "ordi"), "package"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 25
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "package"), "name"), "html", null, true);
                echo "
      ";
                // line 26
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo " - ";
                }
                // line 27
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 28
            echo "  ";
        }
        // line 29
        echo "    
  <p>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_ordi"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_ordi", array("id" => $this->getAttribute($this->getContext($context, "ordi"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier le package
    </a>
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_ordi", array("id" => $this->getAttribute($this->getContext($context, "ordi"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer l'ordi
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_ordi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 39,  165 => 35,  158 => 31,  154 => 29,  151 => 28,  137 => 27,  133 => 26,  128 => 25,  111 => 24,  108 => 23,  106 => 22,  103 => 21,  100 => 20,  86 => 19,  82 => 18,  77 => 17,  60 => 16,  57 => 15,  55 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
