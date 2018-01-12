<?php

namespace App\Controller;
// DANS LA MECANIQUE DE SYMFONY
// App              => src
// App\Controller   => src/Controller
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

use App\Entity\UserAdmin;


class TraitementFormController extends Controller 
{
    // METHODES
    // CONSTRUCTEUR
    
    function __construct ()
    {
        // DEBUG
       // echo "[TraitementForm::__construct]";
    }
    
    
     function traiterInscription ($objetRequest, $objetConnection)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $pseudo     = $objetRequest->get("pseudo", "");
        $password   = $objetRequest->get("password", "");
        
        // UN PEU DE SECURITE (BASIQUE)
        if ( ($pseudo != "") && ($password != "") )
        {
            // COMPLETER LES INFOS MANQUANTES
            $niveau          = 1;                   // DIRECTEMENT ACTIF
            
            // HASHAGE DU MOT DE PASSE
            // http://php.net/manual/en/function.password-hash.php
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            // ON VA STOCKER LES INFOS DANS LA TABLE SQL user
            // ON VA UTILISER UN OBJET FOURNI PAR SYMFONY DE LA CLASSE Connection
            $objetConnection->insert( "user_admin", 
                                        [ 
                                            "pseudo"            => $pseudo, 
                                            "password"          => $password, 
                                            "niveau"            => $niveau
                                        ] );
            
            // MESSAGE POUR LE VISITEUR
            echo "MERCI DE VOTRE INSCRIPTION ($pseudo)";
        }

    }
    
        
    function traiterLogin ($objetRequest, $objetConnection, $objetRepository, $objetSession)
        {
            // RECUPERER LES INFOS DU FORMULAIRE
            // ->get("email", "")
            // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
            // ET SI L'INFO N'EST PAS PRESENTE 
            //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
            $pseudo     = $objetRequest->get("pseudo",       "");
            $password   = $objetRequest->get("password",    "");
            
            // UN PEU DE SECURITE (BASIQUE)
            if ( ($pseudo != "") && ($password != ""))
            {
                // READ
                // CHERCHER DANS LA TABLE user SI IL Y A UNE LIGNE 
                // QUI CORRESPOND A L'EMAIL
                // http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
                $objetUser  = $objetRepository->findOneBy([ "pseudo" => $pseudo ]);
                if ($objetUser)
                {
                    // OK
                    // DEBUG
                    // echo "TROUVE: ";
                    // var_dump($objetUser);
                    // RECUPERER LE PASSWORD HASHE POUR LE COMPARER 
                    // AVEC CELUI DU FORMULAIRE
                    // AJOUTER UN GETTER A L'ENTITE User POUR ACCEDER AUX PROPRIETES
                    $passwordHash = $objetUser->getPassword();
                    // http://php.net/manual/en/function.password-verify.php
                    echo "($password, $passwordHash)";
                    if (password_verify($password, $passwordHash))
                    {
                        // OK
                        // LES MOTS DE PASSE CORRESPONDENT
                        $pseudo = $objetUser->getPseudo();
                        $niveau = $objetUser->getNiveau();
                        $id     = $objetUser->getId();
                        echo "BIENVENUE $pseudo (niveau=$niveau)";
                        
                        
                        
                        // MEMORISER LES INFOS DANS UNE SESSION
                        // https://symfony.com/doc/current/controller.html#session-intro
                        $objetSession->set("id",     $id);
                        $objetSession->set("niveau", $niveau);
                        $objetSession->set("pseudo", $pseudo);
    
                        // IL FAUDRAIT REDIRIGER VERS LA PAGE admin 
                        // SI LE NIVEAU EST >= 9
                    
                    
                }
                else 
                {
                    // KO
                    // LE MOT DE PASSE N'EST PAS BON
                    echo "MOT DE PASSE INCORRECT";
                }
            }
            else 
            {
                // KO
                //DEBUG
                echo "EMAIL INCONNU";
            }
        }
    }
    function traiterContact ($objetRequest, $objetConnection)
        {
            // RECUPERER LES INFOS DU FORMULAIRE
            // ->get("email", "")
            // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
            // ET SI L'INFO N'EST PAS PRESENTE 
            //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
            $email      = $objetRequest->get("email",   "");
            $nom        = $objetRequest->get("nom",     "");
            $message    = $objetRequest->get("message", "");
            
            // UN PEU DE SECURITE (BASIQUE)
            if ( ($email != "") && ($nom != "") && ($message != ""))
            {
                // COMPLETER LES INFOS MANQUANTES
                $dateMessage = date("Y-m-d H:i:s"); // DATE AU FORMAT SQL DATETIME
                
                // ON VA STOCKER LES INFOS DANS LA TABLE SQL contact
                // ON VA UTILISER UN OBJET FOURNI PAR SYMFONY DE LA CLASSE Connection
                $objetConnection->insert("contact", [ "email" => $email, "nom" => $nom, "message" => $message, "date_message" => $dateMessage ] );
                
                // MESSAGE POUR LE VISITEUR
                echo "Merci de votre message...";
            }
            
        }
        
}