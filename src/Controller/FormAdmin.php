<?php

namespace App\Controller;
// DANS LA MECANIQUE DE SYMFONY
// App              => src
// App\Controller   => src/Controller

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\UserAdmin;

class FormAdmin extends Controller 
{
   
    // METHODES

    function creerKits ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $nomKit                 = $objetRequest->get("nomKit", "");       
        $description            = $objetRequest->get("description", "");       
        $contenuKit             = $objetRequest->get("contenuKit", "");   
        $infoComplementaire     = $objetRequest->get("infoComplementaire", "");
        $prix                   = $objetRequest->get("prix", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");
        
        
        // SECURITE TRES BASIQUE
        if (($nomKit != "") && ($description != "") && ($contenuKit != "") && ($prix != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
    //        $datePublication  = date("Y-m-d H:i:s");
    //        $dateModification = date("Y-m-d H:i:s");
    //        $idUser           = $objetSession->get("id");
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $objetConnection->insert("kits", 
                                    [   "nom_kit"               => $nomKit, 
                                        "description"           => $description,
                                        "contenu_kit"           => $contenuKit,
                                        "info_complementaire"   => $infoComplementaire,
                                        "prix"                  => $prix,
                                        "image"                 => $image,
                                        "categorie"             => $categorie
                                        ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE PUBLIE";
        }
        
    }
    
    function updateKits ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        

        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $idUpdate               = $objetRequest->get("idUpdate",    "");       
        $nomKit                 = $objetRequest->get("nomKit", "");       
        $description            = $objetRequest->get("description", "");       
        $contenuKit             = $objetRequest->get("contenuKit", "");   
        $infoComplementaire     = $objetRequest->get("infoComplementaire", "");
        $prix                   = $objetRequest->get("prix", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");

        $idUpdate = intval($idUpdate);

        
        // SECURITE TRES BASIQUE
        if (($idUpdate >0) && ($nomKit != "")  && ($prix != ""))
        {
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $tabLigneUpdate = 
                                    [   "nom_kit"           => $nomKit, 
                                        "description"       => $description,
                                        "contenu_kit"       => $contenuKit,
                                        "prix"              => $prix,
                                        "image"             => $image,
                                        "categorie"         => $categorie
                                        ];
                                        
            if ($image != "")
            {
                // SI IL Y A UNE IMAGE UPLOADE
                // ON MET A JOUR LA VALEUR DANS LA TABLE SQL
                $tabLigneUpdate["image"] = $image;
            }
            
            $objetConnection->update("kits", $tabLigneUpdate, [ "id" => $idUpdate ]);                            
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "Article modifié";
        }
        
    }
    
    
    function supprimerKits ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        $idDelete = $objetRequest->get("idDelete", "");
        
        $idDelete = intval($idDelete);
        
        if($idDelete > 0)
        {
            $objetConnection->delete("kits", ["id" => $idDelete]);
            
            echo "Article suprimé";
        }
    }
    
    
    function creerPictos ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $titre                  = $objetRequest->get("titre", "");       
        $description            = $objetRequest->get("description", "");       
        $prix                   = $objetRequest->get("prix", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");
        
        
        // SECURITE TRES BASIQUE
        if (($titre != "") && ($description != "") && ($prix != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
    //        $datePublication  = date("Y-m-d H:i:s");
    //        $dateModification = date("Y-m-d H:i:s");
    //        $idUser           = $objetSession->get("id");
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $objetConnection->insert("pictogrammes", 
                                    [   "titre"           => $titre, 
                                        "description"       => $description,
                                        "prix"              => $prix,
                                        "image"             => $image,
                                        "categorie"         => $categorie
                                        ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE PUBLIE";
        }
        
    }
    
    function updatePictos ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $idUpdate               = $objetRequest->get("idUpdate",    "");       
        $titre                  = $objetRequest->get("titre", "");       
        $description            = $objetRequest->get("description", "");       
        $prix                   = $objetRequest->get("prix", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");
        
        // SECURITE TRES BASIQUE
        if (($idUpdate >0) && ($titre != "")  && ($prix != ""))
        {
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $tabLigneUpdate = 
                                    [   "titre"             => $titre, 
                                        "description"       => $description,
                                        "prix"              => $prix,
                                        "image"             => $image,
                                        "categorie"         => $categorie
                                        ];
                                        
            if ($image != "")
            {
                // SI IL Y A UNE IMAGE UPLOADE
                // ON MET A JOUR LA VALEUR DANS LA TABLE SQL
                $tabLigneUpdate["image"] = $image;
            }
                        
            $objetConnection->update("pictogrammes", $tabLigneUpdate, [ "id" => $idUpdate ]);                                        
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "Article modifié";
        }
        
    }
    
    function supprimerPictos ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        $idDelete = $objetRequest->get("idDelete", "");
        
        $idDelete = intval($idDelete);
        
        if($idDelete > 0)
        {
            $objetConnection->delete("pictogrammes", ["id" => $idDelete]);
            
            echo "Article suprimé";
        }
    }
    
    
    function creerArticleBlog ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $titre                  = $objetRequest->get("titre", "");       
        $contenu                = $objetRequest->get("contenu", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");
        $video                  = $this->getUploadedFile("video", $objetRequest, $cheminSymfony);
        
        
        // SECURITE TRES BASIQUE
        if (($titre != "") && ($contenu != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
    //        $datePublication  = date("Y-m-d H:i:s");
    //        $dateModification = date("Y-m-d H:i:s");
    //        $idUser           = $objetSession->get("id");
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $objetConnection->insert("article_blog", 
                                    [   "titre"             => $titre, 
                                        "contenu"           => $contenu,
                                        "image"             => $image,
                                        "categorie"         => $categorie,
                                        "video"             => $video

                                        ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE PUBLIE";
        }
        
    }
    
    function updateArticleBlog ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $idUpdate               = $objetRequest->get("idUpdate",    "");       
        $titre                  = $objetRequest->get("titre", "");       
        $contenu                = $objetRequest->get("contenu", "");       
        $image                  = $this->getUploadedFile("image", $objetRequest, $cheminSymfony);
        $categorie              = $objetRequest->get("categorie", "");
        $video                  = $this->getUploadedFile("video", $objetRequest, $cheminSymfony);
 
        // CONVERTIR $idUpdate EN NOMBRE
        $idUpdate = intval($idUpdate);
        // SECURITE TRES BASIQUE
        if (($idUpdate >0) && ($titre != "") && ($contenu != ""))
        {
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $tabLigneUpdate = 
                                    [   "titre"             => $titre, 
                                        "contenu"           => $contenu,
                                        "image"             => $image,
                                        "categorie"         => $categorie,
                                        "video"             => $video

                                        ];
            if ($image != "")
                {
                    // SI IL Y A UNE IMAGE UPLOADE
                    // ON MET A JOUR LA VALEUR DANS LA TABLE SQL
                    $tabLigneUpdate["image"] = $image;
                }
            
            $objetConnection->update("article_blog", $tabLigneUpdate, [ "id" => $idUpdate ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "Article modifié";
        }
        
    }
    
    function supprimerArticleBlog ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        $idDelete = $objetRequest->get("idDelete", "");
        
        $idDelete = intval($idDelete);
        
        if($idDelete > 0)
        {
            $objetConnection->delete("article_blog", ["id" => $idDelete]);
            
            echo "Article suprimé";
        }
    }
    
    

    
    // SI ON VEUT GERER L'UPLOAD DE FICHIER
    // https://symfony.com/doc/current/controller/upload_file.html
    function getUploadedFile ($nameInput, $objetRequest, $cheminSymfony)
    {
        $cheminImage = "";
        
        $objetUploadedFile = $objetRequest->files->get($nameInput);
        if ($objetUploadedFile)
        {
            // IL Y A UN FICHIER UPLOADE
            // EST-CE QUE L'UPLOAD S'EST DEROULE SANS ERREUR
            // EST-CE QUE L'EXTENSION EST AUTORISEE
            // EST-CE QUE LA TAILLE NE DEPASSE PAS LA LIMITE AUTORISEE
            // ON SORT LE FICHIER HORS DE SA QUARANTAINE
            // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/UploadedFile.html
            // ATTENTION: DOUBLE NIVEAU HERITAGE
            // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/File.html
            // http://php.net/SplFileInfo
            if ($objetUploadedFile->getError() == 0)
            {
                // OK
                $extensionFichier = $objetUploadedFile->getClientOriginalExtension();
                $extensionFichier = strtolower($extensionFichier);
                if (in_array($extensionFichier, [ "jpg", "jpeg", "png", "gif", "svg" ]))
                {
                    // OK
                    // http://php.net/manual/fr/splfileinfo.getsize.php
                    $tailleFichier = $objetUploadedFile->getSize();
                    if ($tailleFichier <= 10 * 1024 * 1024) // 10 Mo
                    {
                        // OK
                        // https://api.symfony.com/master/Symfony/Component/HttpFoundation/File/UploadedFile.html#method_getClientOriginalName
                        $nomOriginal = $objetUploadedFile->getClientOriginalName();
                        // SORTIR LE FICHIER DE SA QUARANTAINE
                        // ATTENTION: NE PAS OUBLIER DE CREER LE DOSSIER upload...
                        $dossierCible = "$cheminSymfony/public/assets/upload/";
                        $objetUploadedFile->move($dossierCible, $nomOriginal);
                        
                        // POUR LE STOCKAGE DANS SQL
                        $cheminImage = "assets/upload/$nomOriginal";
                    }
                    else
                    {
                        // KO
                        // TAILLE TROP GRANDE
                    }
                }
                else
                {
                    // KO
                    // EXTENSION NON AUTORISEE
                }
            }
            else 
            {
                // KO
                // ERREUR TRANSFERT
            }
            
        }
        
        return $cheminImage;
    }
    
    
    
    
    
}