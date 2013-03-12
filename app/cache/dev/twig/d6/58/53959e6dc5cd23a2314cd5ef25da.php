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
        echo "  Lecture d'un ordinateur - ";
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
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "ordi"), "nom"), "html", null, true);
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
      Modifier l'ordinateur
    </a>
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_ordi", array("id" => $this->getAttribute($this->getContext($context, "ordi"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer l'ordi
    </a>
  </p>
 </div>
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
        return array (  158 => 31,  137 => 27,  77 => 17,  69 => 22,  53 => 13,  23 => 1,  110 => 30,  90 => 20,  86 => 19,  82 => 18,  65 => 12,  62 => 11,  49 => 13,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 25,  125 => 44,  107 => 29,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 21,  67 => 16,  61 => 13,  47 => 11,  105 => 24,  93 => 28,  76 => 24,  72 => 14,  68 => 18,  27 => 4,  91 => 22,  84 => 9,  94 => 23,  88 => 6,  79 => 25,  59 => 22,  21 => 3,  44 => 8,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 39,  159 => 61,  154 => 29,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 20,  78 => 17,  75 => 6,  71 => 19,  58 => 13,  34 => 5,  26 => 6,  24 => 5,  25 => 3,  19 => 2,  70 => 17,  63 => 15,  46 => 10,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 22,  101 => 35,  96 => 21,  83 => 18,  80 => 20,  74 => 18,  66 => 15,  55 => 14,  52 => 24,  50 => 11,  43 => 15,  41 => 9,  37 => 8,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 35,  162 => 57,  157 => 60,  153 => 54,  151 => 28,  143 => 54,  138 => 51,  136 => 50,  133 => 26,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 24,  108 => 23,  102 => 30,  98 => 34,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 8,  73 => 18,  64 => 17,  60 => 16,  57 => 15,  54 => 12,  51 => 18,  48 => 12,  45 => 9,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 6,);
    }
}
