<?php

/* JulienParcInformatiqueBundle:parcInfo:salle.html.twig */
class __TwigTemplate_05bfb79d43cfa92a797d3830f33459e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter($this->getContext($context, "accueil"), false)) : (false));
        // line 3
        echo " 
<h2>
 
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "nom"), "html", null, true);
        echo " [ ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "localisation"), "html", null, true);
        echo " ]
 
</h2>
 
 
<div class=\"well\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salle"), "description"), "html", null, true);
        echo "
</div>
- Ordinateur :
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_ordinateur"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "
<ul>
    <li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("parcInfo_voir_ordi", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom"), "html", null, true);
            echo "</a> </li>
</ul>
     
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "JulienParcInformatiqueBundle:parcInfo:salle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 39,  53 => 14,  23 => 1,  110 => 30,  90 => 20,  86 => 19,  82 => 18,  65 => 12,  62 => 11,  49 => 14,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 29,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 34,  61 => 13,  47 => 16,  105 => 24,  93 => 28,  76 => 16,  72 => 14,  68 => 12,  27 => 4,  91 => 22,  84 => 9,  94 => 23,  88 => 6,  79 => 17,  59 => 22,  21 => 3,  44 => 16,  31 => 4,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 34,  78 => 17,  75 => 6,  71 => 19,  58 => 17,  34 => 11,  26 => 6,  24 => 5,  25 => 3,  19 => 2,  70 => 15,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 35,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 24,  52 => 24,  50 => 10,  43 => 15,  41 => 7,  37 => 12,  35 => 8,  32 => 6,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 34,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 8,  73 => 19,  64 => 17,  60 => 23,  57 => 29,  54 => 10,  51 => 18,  48 => 13,  45 => 8,  42 => 10,  39 => 9,  36 => 7,  33 => 4,  30 => 6,);
    }
}
