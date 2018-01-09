<?php

// FAIRE LE TRAITEMENT DU FORMULAIRE AVANT DE FAIRE LE READ
if ($objetRequest->get("codebarre", "") == "delete")
{
    $objetFormArticle = new App\Controller\FormAdmin;
    
    $objetFormAdmin->supprimer($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
}
?>

<section>
    <h3>Liste des articles de la page Kits</h3>
        <table>
            <tbody>
            
<?php

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Kits::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
$tabResultat = $objetRepository->findBy([], [ "datePublication" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE 
foreach($tabResultat as $objetKits)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetKits->getId();
    $nomKit                 = $objetKits->getNomKit();
    $description            = $objetKits->getDescription();
    $contenuKit             = $objetKits->getContenuKit();
    $infoComplementaire     = $objetKits->getinfoComplementaire();
    $prix                   = $objetKits->getPrix();
    $image                  = $objetKits->getImage();
    $categorie              = $objetKits->getCategorie();
    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/$image" title="$image">

CODEHTML;
    }
    
 //   $urlCategorie = "#";
 //   if ($categorie)
 //   {
        // POUR CONSTRUIRE UNE URL POUR UNE ROUTE DYNAMIQUE
        // IL FAUT FOURNIR LA VALEUR DU PARAMETRE DANS L'URL
        //      * @Route("categorie/{cat}", name="categorie")
 //       $urlCategorie = $this->generateUrl("categorie", [ "kit" => $categorie ]);
 //   }
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
 //   $urlArticle = $this->generateUrl("article", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <tr>
        <td>$id</td>
        <td><a href="$urlKitFiche">$nomKit</a></td>
        <td>$description</td>
        <td>$contenuKit</td>
        <td>$infoComplementaire</td>
        <td>$prix</td>
        <td>$htmlImage</td>
        <td>$categorie</td>
        <td>
            <!-- ETAPE 1: AFFICHER LE FORMULAIRE POUR UN UPDATE -->
            <form method="GET" action="#section-update">
                <input type="hidden" name="afficher" value="update">
                <input type="hidden" name="idUpdate" value="$id">
                <button type="submit">modifier</button>
            </form>
        </td>
        <td>
            <form method="POST" action="">
                <input type="hidden" name="codebarre" value="delete">
                <input type="hidden" name="idDelete" value="$id">
                <button type="submit">supprimer</button>
            </form>
        </td>
    </tr>
    
CODEHTML;
    
}

?>
            </tbody>
        </table>


</section>