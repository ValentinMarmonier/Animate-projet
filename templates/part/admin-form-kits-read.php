<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          
          <div id="modifPage">
            
            
  
            <section class="row text-center placeholders">
              
              <div class="col-6 col-sm-3 placeholder">
              </div>
              
             
            </section>  
            
          </div>


<?php

// FAIRE LE TRAITEMENT DU FORMULAIRE AVANT DE FAIRE LE READ
if ($objetRequest->get("codebarre", "") == "delete")
{
    $objetFormAdmin = new App\Controller\FormAdmin;
    
    $objetFormAdmin->supprimerKits($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
}
?>

<section class="col-lg-offset-2">
    
    <h2>Page Kits</h2>
    
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
$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

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
    $imagefiche             = $objetKits->getImagefiche();
    $categorie              = $objetKits->getCategorie();
    
    
    $htmlImage = "";
    if ($image)
    {
        $htmlImage = 
<<<CODEHTML

    <img src="$urlAccueil/assets/img/imgBoutique/$image" title="$image">

CODEHTML;
    }
    
    
    
$htmlImageFiche = "";
    if ($imagefiche)
    {
        $htmlImageFiche = 
<<<CODEHTML

    <img src="$urlAccueil/assets/img/imgBoutique/$imagefiche" title="$imagefiche">

CODEHTML;
    }      
    
    
    // CREER L'URL POUR LA ROUTE DYNAMIQUE (AVEC PARAMETRE)
    $urlKitFiche = $this->generateUrl("kitFiche", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <tr class="readArticle">
        <td>$id</td>
        <td><label>Nom du kit</label></br><a href="$urlKitFiche">$nomKit</a></td>
        <td><label>Description</label></br>$description</td>
        <td><label>Contenu</label></br>$contenuKit</td>
        <td><label>Infos complémentaires</label></br>$infoComplementaire</td>
        <td><label>Prix</label></br>$prix</td>
        <td>$htmlImage</td>
        <td>$htmlImageFiche</td>        
        <td><label>Catégorie</label></br>$categorie</td>
        <td>
            <!-- ETAPE 1: AFFICHER LE FORMULAIRE POUR UN UPDATE -->
            <form method="GET" action="#section-update">
                <input type="hidden" name="afficher" value="update">
                <input type="hidden" name="idUpdate" value="$id">
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </td>
        <td>
            <form method="POST" action="">
                <input type="hidden" name="codebarre" value="delete">
                <input type="hidden" name="idDelete" value="$id">
                <button type="submit" class="btn btn-danger">supprimer</button>
            </form>
        </td>
    </tr>
    
CODEHTML;
    
}



   
?>










            </tbody>
        </table>


</section>