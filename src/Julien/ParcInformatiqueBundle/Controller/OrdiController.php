<?php


/**
 * Description of OrdiController
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;

use Julien\ParcInformatiqueBundle\Entity\Ordinateur;
use Julien\ParcInformatiqueBundle\Form\OrdinateurType;

class OrdiController extends Controller implements ControleurStrategy {
    public function supprimerAction($id) {
         // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getEntityManager();

      // On récupère l'entité correspondant à l'id $id
      $ordi = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                    ->find($id);

      // Si la salle n'existe pas, on affiche une erreur 404
      if ($ordi == null) {
        throw $this->createNotFoundException('Ordi [id='.$id.'] inexistante');
      }

      if ($this->get('request')->getMethod() == 'GET') {
        
        $this->get('session')->getFlashBag()->add('info', 'ordi bien supprimé');
        $em->remove($ordi);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer.html.twig', array(
        'objet' => $ordi));
      }
    }
    public function modifierAction($id) {
         // Récupération d'un article déjà existant, d'id $id.
      $ordi = $this->getDoctrine()
                      ->getRepository('Julien\ParcInformatiqueBundle\Entity\Ordinateur')
                      ->find($id);

      // Et on construit le formBuilder avec cette instance d'article, comme précédemment
      $form = $this->createForm(new OrdinateurType, $ordi);

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
          $em->persist($ordi);
          $em->flush();

          // On redirige vers la page de visualisation de la salle nouvellement créé
          return $this->redirect($this->generateUrl('parcInfo_voir_ordi', array('id' => $ordi->getId())));
        }
      }
       return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_ordi.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    public function voirListeAction() {
         // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des os
        $liste_ordi = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                               ->findAll();
        
        
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste.html.twig', array(
                'liste' => $liste_ordi,
                'title' => 'ordinateur',
                'lien_voir' => 'parcInfo_voir_ordi',
                'lien_delete' => 'parcInfo_supprimer_ordi',
                'lien_update'=> 'parcInfo_modifier_ordi',
                'lien_post' => 'parcInfo_ajouter_ordi'
        ));
    }
     public function voirAction($id){
       // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $ordi = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                    ->find($id);
        
        if($ordi === null)
        {
          throw $this->createNotFoundException('Ordi [id='.$id.'] inexistant.');
        }
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_ordi.html.twig', array(
          'ordi'        => $ordi,
          
        ));
    }
    
    public function ajouterAction()
    {
        // Création de l'entité
      $ordi = new Ordinateur();
      $form = $this->createForm(new OrdinateurType(), $ordi);
      
      // On récupère la requête
      $request = $this->get('request');
      // On vérifie qu'elle est de type POST
      if ($request->getMethod() == 'POST') {
          // On fait le lien Requête <-> Formulaire
          $form->bind($request);

          // On vérifie que les valeurs rentrées sont correctes
          // (Nous verrons la validation des objets en détail plus bas dans ce chapitre)
          if ($form->isValid()) {
            // On l'enregistre notre objet $article dans la base de données
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordi);
            $em->flush();

            // On redirige vers la page de visualisation de l'article nouvellement créé
            return $this->redirect($this->generateUrl('parcInfo_voir_ordi', array('id' => $ordi->getId())));
          }
        }
        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_ordi.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}

?>
