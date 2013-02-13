<?php

namespace Julien\ParcInformatiqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Julien\ParcInformatiqueBundle\Entity\Salle;
use Julien\ParcInformatiqueBundle\Entity\Ordinateur;
use Julien\ParcInformatiqueBundle\Entity\Package;
use Julien\ParcInformatiqueBundle\Entity\OS;
use Julien\ParcInformatiqueBundle\Form\SalleType;
use Julien\ParcInformatiqueBundle\Form\PackageType;
use Julien\ParcInformatiqueBundle\Form\OrdinateurType;
use Julien\ParcInformatiqueBundle\Form\CategorieType;
use Julien\ParcInformatiqueBundle\Form\ReferenceModeleType;
use Julien\ParcInformatiqueBundle\Entity\ReferenceModele;
use Julien\ParcInformatiqueBundle\Form\OSType;


class ParcInfoController extends Controller
{
    public function indexAction()
    {
        return $this->render('JulienParcInformatiqueBundle:parcInfo:index.html.twig',array(
           'salles' => array()
        ));
    }
    
    public function menuAction($nombre) // Ici, nouvel argument $nombre, on a transmis via le with depuis la vue
    {
      // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
      // On pourra récupérer $nombre articles depuis la BDD, avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
      $liste = array(
        array('id' => 2, 'titre' => 'Mon dernier weekend !'),
        array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
        array('id' => 9, 'titre' => 'Petit test')
      );

      return $this->render('JulienParcInformatiqueBundle:parcInfo:menu.html.twig', array(
        'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
      ));
    }
    
    
    //--------------------------------------------------------------------------------------------------//
    //              VOIR ACTION                                                                         //
    //--------------------------------------------------------------------------------------------------//
    public function voir_salleAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $salle = $em->getRepository('JulienParcInformatiqueBundle:Salle')
                    ->find($id);
        
        if($salle === null)
        {
          throw $this->createNotFoundException('Salle [id='.$id.'] inexistant.');
        }
        
        // On récupère la liste des commentaires
        $liste_ordinateur = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                               ->findAll();

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_salle.html.twig', array(
          'salle'        => $salle,
          'liste_salle' => $liste_ordinateur
        ));
    }
    
    public function voir_ordiAction($id){
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
    public function voir_liste_salleAction() {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des salles
        $liste_salle = $em->getRepository('JulienParcInformatiqueBundle:Salle')
                               ->findAll();
        
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste_salle.html.twig', array(
                'liste_salle' => $liste_salle
        ));
    }
    
    public function voir_liste_packageAction() {
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
    
    public function voir_referenceAction($id){
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();

      
        // On récupère l'entité correspondant à l'id $id
        $reference= $em->getRepository('JulienParcInformatiqueBundle:ReferenceModele')
                    ->find($id);
        
        if($reference === null)
        {
          throw $this->createNotFoundException('reference [id='.$id.'] inexistant.');
        }
    

        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_reference.html.twig', array(
          'reference'        => $reference,
         
        ));
    }
    
    public function voir_OSAction($id){
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
    
    
    public function voir_liste_ordiAction() {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        // On récupère la liste des salles
        $liste_ordi = $em->getRepository('JulienParcInformatiqueBundle:Ordinateur')
                               ->findAll();
        
        // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
        return $this->render('JulienParcInformatiqueBundle:parcInfo:voir_liste_ordi.html.twig', array(
                'liste_ordi' => $liste_ordi
        ));
    }
    
    //--------------------------------------------------------------------------------------------------//
    //              AJOUTER ACTION                                                                         //
    //--------------------------------------------------------------------------------------------------//
    public function ajouter_salleAction()
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
    public function ajouter_ordiAction()
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
    
    public function ajouter_packageAction()
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
    
    public function ajouter_referenceAction()
    {
        $reference = new ReferenceModele();
        $form = $this->createForm(new ReferenceModeleType(), $reference);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($reference);
            $em->flush();
             //return print_r($form);
            return $this->redirect($this->generateUrl('parcInfo_voir_reference', array('id' => $reference->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_reference.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    
    public function ajouter_OSAction()
    {
        $os = new OS();
        $form = $this->createForm(new OSType(), $os);

        $request = $this->get('request');
        if( $request->getMethod() == 'POST' )
        {
          $form->bind($request);
          if( $form->isValid() )
          {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($os);
            $em->flush();
             
            return $this->redirect($this->generateUrl('parcInfo_voir_OS', array('id' => $os->getId())));
          }
        }

        return $this->render('JulienParcInformatiqueBundle:parcInfo:ajouter_OS.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    //--------------------------------------------------------------------------------------------------//
    //              MODIFIER ACTION                                                                         //
    //--------------------------------------------------------------------------------------------------//
    public function modifier_salleAction($id)
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
    public function modifier_ordiAction($id)
    {
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
    
    public function modifier_packageAction($id)
    {
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
    //--------------------------------------------------------------------------------------------------//
    //              SUPPRIMER ACTION                                                                         //
    //--------------------------------------------------------------------------------------------------//
    public function supprimer_salleAction($id)
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
    
    public function supprimer_OrdiAction($id)
    {
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
        // Si la requête est en POST, on supprimera la salle

        $this->get('session')->getFlashBag()->add('info', 'ordi bien supprimé');
        $em->remove($ordi);
        $em->flush();
        return $this->render('JulienParcInformatiqueBundle:parcInfo:supprimer.html.twig', array(
        'objet' => $ordi));
      }
    }
    
    public function supprimer_packageAction($id)
    {
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
}
