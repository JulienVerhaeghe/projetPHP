<?php

/* JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig */
class __TwigTemplate_5bb0e384ba29309a2384f36b1cd385bd extends Twig_Template
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
  ";
        // line 10
        echo "  ";
        $this->env->loadTemplate("JulienParcInformatiqueBundle:parcInfo:salle.html.twig")->display($context);
        // line 11
        echo " 
  <p>
    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_liste_salle"), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_modifier_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-edit\"></i>
      Modifier la salle
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_supprimer_salle", array("id" => $this->getAttribute($this->getContext($context, "salle"), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-trash\"></i>
      Supprimer la salle
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  99 => 21,  49 => 14,  53 => 13,  129 => 37,  110 => 6,  90 => 38,  56 => 16,  23 => 1,  40 => 7,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 36,  109 => 41,  103 => 37,  67 => 15,  61 => 13,  47 => 11,  105 => 24,  93 => 28,  76 => 18,  72 => 29,  68 => 28,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 36,  79 => 17,  59 => 17,  21 => 3,  44 => 12,  31 => 4,  28 => 5,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 53,  100 => 34,  78 => 21,  75 => 23,  71 => 19,  58 => 12,  34 => 11,  26 => 6,  24 => 4,  25 => 7,  19 => 2,  70 => 17,  63 => 15,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 32,  115 => 39,  106 => 24,  101 => 32,  96 => 21,  83 => 18,  80 => 31,  74 => 16,  66 => 21,  55 => 11,  52 => 13,  50 => 13,  43 => 8,  41 => 7,  37 => 12,  35 => 8,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 50,  136 => 49,  133 => 48,  130 => 47,  122 => 43,  119 => 9,  116 => 8,  111 => 37,  108 => 37,  102 => 22,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 20,  81 => 19,  73 => 19,  64 => 27,  60 => 23,  57 => 16,  54 => 15,  51 => 14,  48 => 11,  45 => 10,  42 => 8,  39 => 7,  36 => 7,  33 => 4,  30 => 6,);
    }
}
