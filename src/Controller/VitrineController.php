<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\Newsletter;

class VitrineController
    extends Controller
{
    /**
      * @Route("accueil/", name="accueil")
      */   
   public function accueil (Request $objetRequest)
   {

        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-accueil.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("video/", name="video")
      */   
   public function video (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-video.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("fondateurs/", name="fondateurs")
      */   
   public function fondateurs (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-fondateurs.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("benefices/", name="benefices")
      */   
   public function benefices (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-benefices.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("partenaires/", name="partenaires")
      */   
   public function partenaires (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-partenaires.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("cibles/", name="cibles")
      */   
   public function cibles (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-cibles.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("produits/", name="produits")
      */   
   public function produits (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-produits.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   /**
      * @Route("blog/", name="blog")
      */   
   public function blog (Request $objetRequest)
   {
        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-article-blog.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }   
   
   /**
      * @Route("boutique/", name="boutique")
      */   
   public function boutique (Request $objetRequest)
   {

        // POUR RECUPERER LES INFOS DE FORMULAIRE
        // ON DEMANDE A SYMFONY DE NOUS FOURNIR 
        // UN OBJET DE LA CLASSE Request
        // (INJECTION DE DEPENDANCE...)
       
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-boutique.php");
        
        // RECUPERER LE CONTENU DU CACHE
        // http://php.net/manual/fr/function.ob-get-clean.php
        $contenuCache = ob_get_clean();
        
        // TEMPORISATION DE L'AFFICHAGE...
        // JE NE FAIS PAS LE echo DE L'AFFICHAGE MOI MEME
        // JE DONNE LE CONTENU HTML A LA CLASSE Response
        // ET C'EST LA MECANIQUE DE SYMFONY QUI VA GERER L'AFFICHAGE DE CE CODE
        return new Response($contenuCache);
       
   }
   
   
   

   
   
}