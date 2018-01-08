<?php

namespace App\Controller;
// DANS LA MECANIQUE DE SYMFONY
// App              => src
// App\Controller   => src/Controller


class FormAdminKit
{
    // METHODES
    function supprimer ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        $idDelete          = $objetRequest->get("idDelete", "");
        // CONVERTIR EN NOMBRE
        $idDelete = intval($idDelete);
        // SECURITE TRES BASIQUE
        if ($idDelete > 0)
        {
            // COMPLETER LES INFOS MANQUANTES

            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#delete
            $objetConnection->delete("article", [ "id" => $idDelete ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE SUPPRIME";
        }
        
    }

    function update ($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $idUpdate       = $objetRequest->get("idUpdate",    "");       
        $titre          = $objetRequest->get("titre",       "");       
        $categorie      = $objetRequest->get("categorie",   "");       
        $contenu        = $objetRequest->get("contenu",     "");       
        $cheminImage    = $this->getUploadedFile("cheminImage", $objetRequest, $cheminSymfony);
        
        // CONVERTIR $idUpdate EN NOMBRE
        $idUpdate = intval($idUpdate);
        
        // SECURITE TRES BASIQUE
        if (($idUpdate >0) && ($titre != "") && ($categorie != "") && ($contenu != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
            $dateModification = date("Y-m-d H:i:s");
            // ON MET AUSSI A JOUR L'AUTEUR DE L'ARTICLE
            $idUser           = $objetSession->get("id");
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $tabLigneUpdate =   [   "titre"             => $titre, 
                                        "id_user"           => $idUser,
                                        "categorie"         => $categorie,
                                        "contenu"           => $contenu,
                                        "date_modification" => $dateModification,
                                        // "chemin_image"      => $cheminImage,
                                        // SI AUCUNE IMAGE N'A ETE UPLOADEE
                                        // ALORS ON GARDERA LA VALEUR ACTUELLE chemin_image
                                ];
            if ($cheminImage != "")
            {
                // SI IL Y A UNE IMAGE UPLOADE
                // ON MET A JOUR LA VALEUR DANS LA TABLE SQL
                $tabLigneUpdate["chemin_image"] = $cheminImage;
            }
            
            $objetConnection->update("article", $tabLigneUpdate, [ "id" => $idUpdate ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE MODIFIE";
        }
        
    }


    function creer ($objetRequest, $objetConnection, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $titre          = $objetRequest->get("titre", "");       
        $categorie      = $objetRequest->get("categorie", "");       
        $contenu        = $objetRequest->get("contenu", "");       
        $cheminImage    = $this->getUploadedFile("cheminImage", $objetRequest, $cheminSymfony);
        
        // SECURITE TRES BASIQUE
        if (($titre != "") && ($categorie != "") && ($contenu != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
            $datePublication  = date("Y-m-d H:i:s");
            $dateModification = date("Y-m-d H:i:s");
            $idUser           = $objetSession->get("id");
            
            // AJOUTER L'ARTICLE DANS LA BASE DE DONNEES
            // ON VA UTILISER $objetConnection FOURNI PAR SYMFONY
            // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html#insert
            $objetConnection->insert("article", 
                                    [   "titre"             => $titre, 
                                        "id_user"           => $idUser,
                                        "categorie"         => $categorie,
                                        "contenu"           => $contenu,
                                        "date_publication"  => $datePublication,
                                        "chemin_image"      => $cheminImage,
                                        ]);
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE PUBLIE";
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
                        // https://api.symfony.com/2.8/Symfony/Component/HttpFoundation/File/UploadedFile.html#method_move
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
    
    function creerPersistence ($objetRequest, $objetConnection, $objetEntityManager, $cheminSymfony, $objetSession)
    {
        // RECUPERER LES INFOS DU FORMULAIRE
        // ->get("email", "")
        // VA CHERCHER L'INFO DANS LE FORMULAIRE HTML name="email"
        // ET SI L'INFO N'EST PAS PRESENTE 
        //  ALORS ON RETOURNE LA VALEUR PAR DEFAUT ""
        $titre          = $objetRequest->get("titre", "");       
        $categorie      = $objetRequest->get("categorie", "");       
        $contenu        = $objetRequest->get("contenu", "");       
        $cheminImage    = $this->getUploadedFile("cheminImage", $objetRequest, $cheminSymfony);
        
        // SECURITE TRES BASIQUE
        if (($titre != "") && ($categorie != "") && ($contenu != ""))
        {
            // COMPLETER LES INFOS MANQUANTES
            $datePublication  = date("Y-m-d H:i:s");
            $dateModification = date("Y-m-d H:i:s");
            $idUser           = $objetSession->get("id");
            
            // ON VA CREER UNE ENTITE
            $objetArticle = new \App\Entity\MonArticle;
            // ON VA UTILISER LES SETTERS POUR MEMORISER LES INFOS DANS L'ENTITE
            // TODO: AJOUTER LES METHODE SETTERS DANS LA CLASSE ENTITE MonArticle
            $objetArticle->setIdUser($idUser);
            $objetArticle->setTitre($titre);
            $objetArticle->setCategorie($categorie);
            $objetArticle->setContenu($contenu);
            $objetArticle->setDatePublication($datePublication);
            $objetArticle->setDateModification($dateModification);
            $objetArticle->setCheminImage($cheminImage);
            
            // CA NE FAIT PAS LE STOCKAGE DANS SQL (UN PEU COMME PREPARE...)
            $objetEntityManager->persist($objetArticle);
            // ENVOIE L'OBJET DANS LA TABLE SQL (UN PEU COMME EXECUTE...)
            $objetEntityManager->flush();
            
            // MESSAGE RETOUR POUR LE VISITEUR
            echo "ARTICLE PUBLIE";
        }
        else
        {
            // KO
            echo "INFOS MANQUANTES";
        }
        
    }
}