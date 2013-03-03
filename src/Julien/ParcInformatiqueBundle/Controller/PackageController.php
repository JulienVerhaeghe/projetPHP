<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OSController
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;
class OSController extends Controller implements ControleurStrategy {
    public function supprimerAction($id) {
       // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getEntityManager();

      // On récupère l'entité correspondant à l'id $id
      $package = $em->getRepository('JulienParcInformatiqueBundle:Package')
                    ->find($id);

      // Si la salle n'existe pas, on affiche une erreur 404
      if ($package == null) {
        throw $this->createNotFoundException('Package [id='.$id.'] inexistante');
      }

      if ($this->get('request')->getMethod() == 'GET') {
        // Si la requête est en POST, on supprimera la salle

        $this->get('session')->getFlashBag()->add('info', 'Package bien supprimé');
        $em->remove($package);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer.html.twig', array(
        'objet' => $package));
      }
    }
    public function modifierAction($id) {
        // Récupération d'un article déjà existant, d'id $id.
      $package = $this->getDoctrine()
                      ->getRepository('Julien\ParcInformatiqueBundle\Entity\Package')
                      ->find($id);

      // Et on construit le formBuilder avec cette instance d'article, comme précédemment
      $form = $this->createForm(new PackageType(), $package);

      // On récupère la requête
      $request = $this->get('request');

      // On vérifie qu'elle est de type POST
      if ($request->getMethod() == 'POST') {
        // On fait le lien Requête <-> Formulaire
        $form->bind($request);

        // On vérifie que les valeurs rentrées sont correctes
        // (Nous verrons la validation des objets en détail plus bas dans ce chapitre)
        if ($form->isValid()) {
          // On l'enregistre notre objet $salle dans la base de données
          $em = $this->getDoctrine()->getManager();
          $em->persist($package);
          $em->flush();

          // On redirige vers la page de visualisation de la salle nouvellement créé
          return $this->redirect($this->generateUrl('parcInfo_voir_package', array('id' => $package->getId())));
        }
      }
       return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_package.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    public function voirListeAction() {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des salles
        $liste_package = $em->getRepository('JulienParcInformatiqueBundle:Package')
                               ->findAll();
        
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste_package.html.twig', array(
                'liste_package' => $liste_package
        ));
    }
     public function voirAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $os= $em->getRepository('JulienParcInformatiqueBundle:OS')
                    ->find($id);
        
        if($os === null)
        {
          throw $this->createNotFoundException('OS [id='.$id.'] inexistant.');
        }
    

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_OS.html.twig', array(
          'os'        => $os,
         
        ));
    }
    
    public function ajouterAction()
    {
        $package = new Package();
        $form = $this->createForm(new PackageType(), $package);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($package);
            $em->flush();
             //return print_r($form);
            return $this->redirect($this->generateUrl('parcInfo_voir_package', array('id' => $package->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_package.html.twig', array(
          'form' => $form->createView(),
        ));
    }
}

?>
