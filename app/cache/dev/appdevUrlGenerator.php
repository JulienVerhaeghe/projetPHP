<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'parcInfo_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'parcInfo_voir_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/salle',    ),  ),),
        'parcInfo_voir_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_referenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/reference',    ),  ),),
        'parcInfo_voir_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ordi',    ),  ),),
        'parcInfo_voir_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_packageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/package',    ),  ),),
        'parcInfo_voir_OS' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_OSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/OS',    ),  ),),
        'parcInfo_voir_liste_salle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_liste_salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeSalle/',    ),  ),),
        'parcInfo_voir_liste_ordi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_liste_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listeOrdi/',    ),  ),),
        'parcInfo_voir_liste_package' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::voir_liste_packageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listepackage/',    ),  ),),
        'parcInfo_ajouter_salle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::ajouter_salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_salle',    ),  ),),
        'parcInfo_ajouter_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::ajouter_referenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_reference',    ),  ),),
        'parcInfo_ajouter_ordi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::ajouter_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_ordi',    ),  ),),
        'parcInfo_ajouter_package' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::ajouter_packageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_package',    ),  ),),
        'parcInfo_ajouter_OS' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::ajouter_OSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_OS',    ),  ),),
        'parcInfo_modifier_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::modifier_salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_salle',    ),  ),),
        'parcInfo_modifier_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::modifier_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_ordi',    ),  ),),
        'parcInfo_modifier_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::modifier_referenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter_reference',    ),  ),),
        'parcInfo_modifier_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::modifier_packageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/modifier_package',    ),  ),),
        'parcInfo_supprimer_salle' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::supprimer_salleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_salle',    ),  ),),
        'parcInfo_supprimer_ordi' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::supprimer_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_ordi',    ),  ),),
        'parcInfo_supprimer_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::supprimer_ordiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_reference',    ),  ),),
        'parcInfo_supprimer_package' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::supprimer_referenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supprimer_package',    ),  ),),
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
