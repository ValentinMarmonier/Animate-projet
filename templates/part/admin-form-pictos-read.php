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
    
    $objetFormAdmin->supprimerPictos($objetRequest, $objetConnection, $cheminSymfony, $objetSession);
    
}
?>

<section class="col-lg-offset-2">

            <h2>Page Pictogrammes</h2>

    
    <h3>Liste des articles de la page Pictogrammes</h3>
        <table>
            <tbody>
            
<?php

// JE VAIS RECUPERER LE REPOSITORY POUR L'ENTITE Article
// $objetRepository = $this->getDoctrine()->getRepository("App\Entity\MonArticle");
$objetRepository = $this->getDoctrine()->getRepository(App\Entity\Pictogrammes::class);

// PLUS PRATIQUE => findBy
// http://www.doctrine-project.org/api/orm/2.5/class-Doctrine.ORM.EntityRepository.html
// ATTENTION: ON UTILISE LE NOM DES PROPRIETES
$tabResultat = $objetRepository->findBy([], [ "id" => "DESC" ]);

// ON A UN TABLEAU D'OBJETS DE CLASSE 
foreach($tabResultat as $objetPictogrammes)
{
    // METHODES "GETTER" A RAJOUTER DANS LA CLASSE 
    $id                     = $objetPictogrammes->getId();
    $titre                  = $objetPictogrammes->getTitre();
    $description            = $objetPictogrammes->getDescription();
    $prix                   = $objetPictogrammes->getPrix();
    $image                  = $objetPictogrammes->getImage();
    $imagefiche             = $objetPictogrammes->getImagefiche();
    $categorie              = $objetPictogrammes->getCategorie();
    
    
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
    $urlPictoFiche = $this->generateUrl("pictoFiche", [ "id" => $id ]);
    
    echo
<<<CODEHTML

    <tr class="readArticle">
        <td>$id</td>
        <td><label>Nom du pictogramme</label></br><a href="$urlPictoFiche">$titre</a></td>
        <td><label>Description</label></br>$description</td>
        <td><label>Prix</label></br>$prix</td>
        <td>$htmlImage</td>
        <td>$htmlImageFiche</td>
        <td><label>Categorie</label></br>$categorie</td>
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