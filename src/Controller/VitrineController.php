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
   
   
   

   
   
}