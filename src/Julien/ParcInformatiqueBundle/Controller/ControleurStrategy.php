<?php

/**
 * Description of ControleurStrategy
 *
 * @author psid
 */

namespace Julien\ParcInformatiqueBundle\Controller;
interface ControleurStrategy {
    public function voirAction($id);
    public function voirListeAction();
    public function ajouterAction();
    public function modifierAction($id);
    public function supprimerAction($id);
}

?>
