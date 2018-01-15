<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use App\Entity\UserAdmin;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use ORM\EntityManager;
use App\Entity\Kits;
use App\Entity\Pictogrammes;

class VitrineController
    extends Controller
{
    /**
      * @Route("/", name="accueil")
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
        require_once("$cheminPart/section-video.php");
        
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
        require_once("$cheminPart/section-fondateurs.php");
        
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
        require_once("$cheminPart/section-benefices.php");
        
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
        require_once("$cheminPart/section-partenaires.php");
        
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
      * @Route("ciblesDescription/{id}", name="ciblesDescription")
      */   
   public function ciblesDescription (\App\Entity\Cibles $objetCibles, Request $objetRequest, Connection $objetConnection)
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
        require_once("$cheminPart/section-cibles-description.php");
        
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
   public function boutique (Request $objetRequest, SessionInterface $objetSession)
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
   
   
   /**
      * @Route("inscription/", name="inscription")
      */   
   public function inscription (Request $objetRequest, Connection $objetConnection)
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
        require_once("$cheminTemplates/template-inscription-admin.php");
        
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
      * @Route("adminKit/", name="adminKit")
      */   
   public function adminKit (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
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
        require_once("$cheminTemplates/template-admin-kit.php");
        
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
      * @Route("contact", name="contact")
      */   
   public function contact (Request $objetRequest, Connection $objetConnection)
   {
        // JE VAIS METTRE EN CACHE LE CODE HTML
        // http://php.net/manual/fr/function.ob-start.php
        ob_start();
        
        // METHODE DE SYMFONY POUR OBTENIR LE CHEMIN DU DOSSIER symfony1        
        $cheminSymfony   = $this->getParameter('kernel.project_dir');
        $cheminTemplates = "$cheminSymfony/templates"; 
        $cheminPart      = "$cheminTemplates/part"; 
        require_once("$cheminTemplates/template-contact.php");
        
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
      * @Route("adminBlog/", name="adminBlog")
      */   
   public function adminBlog (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
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
        require_once("$cheminTemplates/template-admin-blog.php");
        
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
      * @Route("adminPicto/", name="adminPicto")
      */   
   public function adminPicto (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
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
        require_once("$cheminTemplates/template-admin-picto.php");
        
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
      * @Route("orthophonisteFiche/", name="orthophonisteFiche")
      */   
   public function orthophonisteFiche (Request $objetRequest, Connection $objetConnection, SessionInterface $objetSession)
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
        require_once("$cheminTemplates/template-orthophoniste-fiche.php");
        
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