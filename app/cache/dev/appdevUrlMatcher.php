<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // parcInfo_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_accueil');
            }

            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ParcInfoController::indexAction',  '_route' => 'parcInfo_accueil',);
        }

        // parcInfo_voir_salle
        if (0 === strpos($pathinfo, '/salle') && preg_match('#^/salle/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::voirAction',)), array('_route' => 'parcInfo_voir_salle'));
        }

        // parcInfo_voir_reference
        if (0 === strpos($pathinfo, '/reference') && preg_match('#^/reference/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::voirAction',)), array('_route' => 'parcInfo_voir_reference'));
        }

        // parcInfo_voir_ordi
        if (0 === strpos($pathinfo, '/ordi') && preg_match('#^/ordi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::voirAction',)), array('_route' => 'parcInfo_voir_ordi'));
        }

        // parcInfo_voir_package
        if (0 === strpos($pathinfo, '/package') && preg_match('#^/package/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::voirAction',)), array('_route' => 'parcInfo_voir_package'));
        }

        // parcInfo_voir_OS
        if (0 === strpos($pathinfo, '/OS') && preg_match('#^/OS/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::voirAction',)), array('_route' => 'parcInfo_voir_OS'));
        }

        // parcInfo_voir_liste_salle
        if (rtrim($pathinfo, '/') === '/listeSalle') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_salle');
            }

            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::voirListeAction',  '_route' => 'parcInfo_voir_liste_salle',);
        }

        // parcInfo_voir_liste_ordi
        if (rtrim($pathinfo, '/') === '/listeOrdi') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_ordi');
            }

            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::voirListeAction',  '_route' => 'parcInfo_voir_liste_ordi',);
        }

        // parcInfo_voir_liste_os
        if (rtrim($pathinfo, '/') === '/listeOS') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_os');
            }

            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::voirListeAction',  '_route' => 'parcInfo_voir_liste_os',);
        }

        // parcInfo_voir_liste_logiciel
        if (rtrim($pathinfo, '/') === '/listeOS') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_logiciel');
            }

            return array (  '_controller' => 'JulienParcInformatiqueBundle:Logiciel:voirListe',  '_route' => 'parcInfo_voir_liste_logiciel',);
        }

        // parcInfo_voir_liste_peripherique
        if (rtrim($pathinfo, '/') === '/listePeripherique') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_peripherique');
            }

            return array (  '_controller' => 'JulienParcInformatiqueBundle:Peripherique:voirListe',  '_route' => 'parcInfo_voir_liste_peripherique',);
        }

        // parcInfo_voir_liste_package
        if (rtrim($pathinfo, '/') === '/listepackage') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parcInfo_voir_liste_package');
            }

            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::voirListeAction',  '_route' => 'parcInfo_voir_liste_package',);
        }

        // parcInfo_ajouter_salle
        if ($pathinfo === '/ajouter_salle') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::ajouterAction',  '_route' => 'parcInfo_ajouter_salle',);
        }

        // parcInfo_ajouter_reference
        if ($pathinfo === '/ajouter_reference') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::ajouterAction',  '_route' => 'parcInfo_ajouter_reference',);
        }

        // parcInfo_ajouter_ordi
        if ($pathinfo === '/ajouter_ordi') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::ajouterAction',  '_route' => 'parcInfo_ajouter_ordi',);
        }

        // parcInfo_ajouter_package
        if ($pathinfo === '/ajouter_package') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::ajouterAction',  '_route' => 'parcInfo_ajouter_package',);
        }

        // parcInfo_ajouter_logiciel
        if ($pathinfo === '/ajouter_logiciel') {
            return array (  '_controller' => 'JulienParcInformatiqueBundle:Logiciel:ajouter',  '_route' => 'parcInfo_ajouter_logiciel',);
        }

        // parcInfo_ajouter_OS
        if ($pathinfo === '/ajouter_OS') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OSController::ajouterAction',  '_route' => 'parcInfo_ajouter_OS',);
        }

        // parcInfo_ajouter_peripherique
        if ($pathinfo === '/ajouter_peripherique') {
            return array (  '_controller' => 'JulienParcInformatiqueBundle:Peripherique:ajouter',  '_route' => 'parcInfo_ajouter_peripherique',);
        }

        // parcInfo_modifier_salle
        if (0 === strpos($pathinfo, '/modifier_salle') && preg_match('#^/modifier_salle/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::modifierAction',)), array('_route' => 'parcInfo_modifier_salle'));
        }

        // parcInfo_modifier_ordi
        if (0 === strpos($pathinfo, '/modifier_ordi') && preg_match('#^/modifier_ordi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::modifierAction',)), array('_route' => 'parcInfo_modifier_ordi'));
        }

        // parcInfo_modifier_reference
        if ($pathinfo === '/ajouter_reference') {
            return array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::modifierAction',  '_route' => 'parcInfo_modifier_reference',);
        }

        // parcInfo_modifier_package
        if (0 === strpos($pathinfo, '/modifier_package') && preg_match('#^/modifier_package/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::modifierAction',)), array('_route' => 'parcInfo_modifier_package'));
        }

        // parcInfo_supprimer_salle
        if (0 === strpos($pathinfo, '/supprimer_salle') && preg_match('#^/supprimer_salle/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\SalleController::supprimerAction',)), array('_route' => 'parcInfo_supprimer_salle'));
        }

        // parcInfo_supprimer_ordi
        if (0 === strpos($pathinfo, '/supprimer_ordi') && preg_match('#^/supprimer_ordi/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\OrdiController::supprimerAction',)), array('_route' => 'parcInfo_supprimer_ordi'));
        }

        // parcInfo_supprimer_reference
        if (0 === strpos($pathinfo, '/supprimer_reference') && preg_match('#^/supprimer_reference/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\ReferenceController::supprimerAction',)), array('_route' => 'parcInfo_supprimer_reference'));
        }

        // parcInfo_supprimer_package
        if (0 === strpos($pathinfo, '/supprimer_package') && preg_match('#^/supprimer_package/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Julien\\ParcInformatiqueBundle\\Controller\\PackageController::supprimerAction',)), array('_route' => 'parcInfo_supprimer_package'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
