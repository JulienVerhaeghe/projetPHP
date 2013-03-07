<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'parcInfo_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'parcInfo_voir_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/salle',    ),  ),),
        'parcInfo_voir_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reference',    ),  ),),
        'parcInfo_voir_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ordi',    ),  ),),
        'parcInfo_voir_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/package',    ),  ),),
        'parcInfo_voir_OS' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/OS',    ),  ),),
        'parcInfo_voir_liste_salle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::voirListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeSalle/',    ),  ),),
        'parcInfo_voir_liste_ordi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::voirListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeOrdi/',    ),  ),),
        'parcInfo_voir_liste_os' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::voirListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeOS/',    ),  ),),
        'parcInfo_voir_liste_logiciel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JulienParcInformatiqueBundle:Logiciel:voirListe',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeOS/',    ),  ),),
        'parcInfo_voir_liste_peripherique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JulienParcInformatiqueBundle:Peripherique:voirListe',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listePeripherique/',    ),  ),),
        'parcInfo_voir_liste_package' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::voirListeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listepackage/',    ),  ),),
        'parcInfo_ajouter_salle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_salle',    ),  ),),
        'parcInfo_ajouter_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_reference',    ),  ),),
        'parcInfo_ajouter_ordi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_ordi',    ),  ),),
        'parcInfo_ajouter_package' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_package',    ),  ),),
        'parcInfo_ajouter_logiciel' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JulienParcInformatiqueBundle:Logiciel:ajouter',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_logiciel',    ),  ),),
        'parcInfo_ajouter_OS' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_OS',    ),  ),),
        'parcInfo_ajouter_peripherique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JulienParcInformatiqueBundle:Peripherique:ajouter',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_peripherique',    ),  ),),
        'parcInfo_modifier_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_salle',    ),  ),),
        'parcInfo_modifier_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_ordi',    ),  ),),
        'parcInfo_modifier_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_reference',    ),  ),),
        'parcInfo_modifier_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::modifierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_package',    ),  ),),
        'parcInfo_supprimer_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_salle',    ),  ),),
        'parcInfo_supprimer_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_ordi',    ),  ),),
        'parcInfo_supprimer_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_reference',    ),  ),),
        'parcInfo_supprimer_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::supprimerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_package',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
