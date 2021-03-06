<?php
/**
 * Description of SalleController
 *
 * @author psid
 */
namespace Julien\ParcInformatiqueBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Julien\ParcInformatiqueBundle\Controller\ControleurStrategy;
/*formulaire destiné à ajouter et modifier une salle*/
use Julien\ParcInformatiqueBundle\Entity\Salle;
use Julien\ParcInformatiqueBundle\Form\SalleType;
class SalleController extends Controller implements ControleurStrategy  {
    
    public function voirAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $salle = $em->getRepository('JulienParcInformatiqueBundle:Salle')
                    ->find($id);
        
        if($salle === null)
        {
            //@TODO réaliser une page 404 avec pour parametre la raison du bug
          throw $this->createNotFoundException('Salle [id='.$id.'] inexistant.');
        }
        
        // On récupère la liste des ordinateurs présent dans la salle
        $liste_ordinateur = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                               ->findAll();
                       
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig', array(
          'salle'        => $salle,
          'liste_ordinateur' => $liste_ordinateur
        ));
    }
    
    /* recuperer une liste d'objet */
     public function voirlisteAction() {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des salles
        $liste_salle = $em->getRepository('JulienParcInformatiqueBundle:Salle')
                               ->findAll();
        
        //  afficher la liste en completant les variables necessaire au template
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste.html.twig',array(
            'liste' => $liste_salle,
            'title' => 'salle',
            'lien_voir' => 'parcInfo_voir_salle',
            'lien_delete' => 'parcInfo_supprimer_salle',
            'lien_update'=> 'parcInfo_modifier_salle',
            'lien_post' => 'parcInfo_ajouter_salle'
        ));
                
        
    }
    
     public function ajouterAction()
    {
        $salle = new Salle();
        $form = $this->createForm(new SalleType(), $salle);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($salle);
            $em->flush();

             return $this->redirect($this->generateUrl('parcInfo_voir_salle', array('id' => $salle->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    
    public function modifierAction($id)
    {
      // Récupération d'un article déjà existant, d'id $id.
      $salle = $this->getDoctrine()
                      ->getRepository('Julien\ParcInformatiqueBundle\Entity\Salle')
                      ->find($id);

      // Et on construit le formBuilder avec cette instance d'article, comme précédemment
      $form = $this->createForm(new SalleType, $salle);

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
          $em->persist($salle);
          $em->flush();

          // On redirige vers la page de visualisation de la salle nouvellement créé
          return $this->redirect($this->generateUrl('parcInfo_voir_salle', array('id' => $salle->getId())));
        }
      }
       return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    
    public function supprimerAction($id)
    {
      // On récupère l'EntityManager
      $em = $this->getDoctrine()
                 ->getEntityManager();

      // On récupère l'entité correspondant à l'id $id
      $salle = $em->getRepository('JulienParcInformatiqueBundle:Salle')
                    ->find($id);

      // Si la salle n'existe pas, on affiche une erreur 404
      if ($salle == null) {
        throw $this->createNotFoundException('Salle [id='.$id.'] inexistante');
      }

      if ($this->get('request')->getMethod() == 'GET') {
        // Si la requête est en POST, on supprimera la salle

        $this->get('session')->getFlashBag()->add('info', 'Salle bien supprimé');
        $em->remove($salle);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer_salle.html.twig', array(
        'salle' => $salle));
      }
    }
}

?>
